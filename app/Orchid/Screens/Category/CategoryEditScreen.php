<?php

namespace App\Orchid\Screens\Category;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Str;
use Orchid\Support\Facades\Toast;

class CategoryEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Crear nueva categoría';

    public $description = 'Registrando nueva categoría';

    public $model = null;

    public $exists = false;    
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Category $category): array
    {
        $this->exists = $category->exists;
        $this->model = $category;

        if($this->exists) {
            $this->name = "Editar categoría (#{$category->id})";
            $this->description = 'Actualizar categoría existe';
        }
        return [
            'category' => $category,
        ];        
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Ver Categorias')
                ->icon('tag')
                ->route('admin.category.list'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Group::make([
                    Input::make('category.name')
                        ->type('text')
                        ->max(255)
                        ->required()
                        ->title('Nombre de la categoría'),
                    Input::make('category.description')
                        ->type('text')
                        ->max(255)                        
                        ->title('Descripción de la categoría'),
                ]),
                Group::make([
                    Button::make('Crear Categoría')
                        ->icon('plus')
                        ->type(Color::PRIMARY())
                        ->method('createOrUpdate')
                        ->canSee(!$this->exists),

                    Button::make('Actualizar')
                        ->icon('note')
                        ->type(Color::PRIMARY())
                        ->method('createOrUpdate')                        
                        ->canSee($this->exists),
                    ModalToggle::make('Eliminar')
                        ->modal('askIfDelete')
                        ->method('remove')
                        ->type(Color::DANGER())
                        ->icon('trash')
                        ->canSee($this->exists),
                ])->autoWidth(),
            ])->title('Información General.'),
            Layout::modal('askIfDelete', [
                Layout::rows([
                    Label::make('')
                        ->title('Estás eliminando esta categoría'),                        
                    Input::make('password')
                        ->type('password')
                        ->placeholder('Ingrese su contraseña')
                        ->autofocus()
                        ->help('Validarémos el proceso con tu contraseña'),
                    Input::make('delete_category_id')
                        ->type('hidden')
                        ->value($this->model->id)
                        ->required(),
                ]),
            ])->title('¿Desea continuar?'),
        ];
    }

    public function createOrUpdate(Category $category, Request $request)
    {        
        $isNew = !$category->exists;
        $data = $request->get('category');                  
        try {
            DB::beginTransaction();
            $data['slug'] = Str::slug($data['name']);                        
            
            // If the service is new, we need to create a new service else we update the service
            if($isNew) {
                $category->fill($data);
                $category->save();
            } else {
                $category->update($data);
            }
            $category->fill($data);
            
            DB::commit();
            if($isNew){
                Alert::success('Categoría creado con éxito');
            } else {
                Alert::success('Categoría actualizado con éxito');
            }
            return redirect()->route('admin.category.edit',$category);
        } catch (Exception $e) {
            Log::debug($e->getMessage());
            Toast::warning('Verifique los datos e intente nuevamente');
            if($isNew) {
                Alert::error('Hubo un error al crear la categoría');
            } else {
                Alert::error('Hubo un error al actualizar la información general de la categoría');
            }
            DB::rollBack();
        }
    }

    public function remove(Request $request)
    {
        if(Hash::check($request->password, Auth::user()->password)) {
            $category = Category::find($request->delete_category_id);
            if($category) {
                try {
                    DB::beginTransaction();
                    if($category->delete()) {
                        Alert::info('Categoría eliminada con éxito');
                    } else {
                        Alert::error('Hubo un error al eliminar la categoría');
                    }
                    return redirect()->route('admin.category.list');                    
                    DB::commit();                    
                } catch (Exception $e) {
                    Log::debug($e->getMessage());
                    Toast::warning('Verifique los datos e intente nuevamente');
                    Alert::error('Hubo un error al eliminar la categoría');
                    DB::rollBack();
                }
            } else {
                Alert::warning('La categoría no existe');
            }
        }
    }
}
