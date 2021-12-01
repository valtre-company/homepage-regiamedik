<?php

namespace App\Orchid\Screens\Faq;

use App\Models\Faq;
use App\Models\ServiceType;
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
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class FaqEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Crear nueva pregunta';

    public $description = 'Registrando nueva pregunta';

    public $model = null;

    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Faq $faq): array
    {
        $this->model = $faq;
        $this->exists = $faq->exists;

        if ($this->exists) {
            $this->name = "Editar pregunta (#{$faq->id})";
            $this->description = 'Actualizando preguntas existentes';
        }

        return [
            'faq' => $faq,
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
            Link::make('Ver Listado de preguntas')
                ->icon('bubbles')
                ->route('admin.faq.list')
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
                    Input::make('faq.question')                        
                        ->title('Pregunta')
                        ->placeholder('¿Cuál es el horario del laboratorio?')
                        ->required()                        
                        ->max(255),                    
                ]),
                Quill::make('faq.answer')
                    ->title('Respuesta')                               
                    ->required()                    
                    ->rows(2)
                    ->toolbar(["text", "color", "header", "list", "format",])
                    ->height('200px'),
                Group::make([
                    Relation::make('faq.service_type_id')
                    ->title('Tipo de servicio')
                    ->searchColumns('name','slug')
                    ->fromModel(ServiceType::class,'id')                    
                    ->multiple()
                    ->displayAppend('full_info')
                    ->required()                        
                    ->help('Seleccione un tipo de servicio al que va dirigido')
                    ->max(1),                                       
                ]),
                Group::make([
                    Button::make('Crear Pregunta')
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
            ])->title('Datos de la pregunta'),
            Layout::modal('askIfDelete', [
                Layout::rows([
                    Label::make('')
                        ->title('Estás eliminando esta pregunta'),                        
                    Input::make('password')
                        ->type('password')
                        ->placeholder('Ingrese su contraseña')
                        ->autofocus()
                        ->help('Validarémos el proceso con tu contraseña'),
                    Input::make('delete_faq_id')
                        ->type('hidden')
                        ->value($this->model->id)
                        ->required(),
                ]),
            ])->title('¿Desea continuar?'),
        ];
    }

    function createOrUpdate(Faq $faq, Request $request)
    {
        $isNew = !$faq->exists;
        $data = $request->get('faq');
        try {
            DB::beginTransaction();
            $data['updated_by'] = Auth::user()->id;            
            $data['service_type_id'] = $data['service_type_id'][0];                
            if($isNew) {
                $data['created_by'] = Auth::user()->id;
                $faq->fill($data);
                $faq->save();
            } else {
                $faq->update($data);
            }
            $faq->save();
            DB::commit();
            if($isNew) {
                Toast::info('Pregunta creada exitosamente');
            } else {
                Toast::info('Pregunta actualizada exitosamente');
            }
            return redirect()->route('admin.faq.edit',$faq);
        } catch (Exception $e) {
            Log::debug($e->getMessage());
            Toast::warning('Verifique los datos e intente nuevamente');
            if($isNew) {
                Alert::error('Hubo un error al crear la pregunta');
            } else {
                Alert::error('Hubo un error al actualizar la información general de la pregunta');
            }
            DB::rollBack();
        }
    }

    function remove(Faq $faq, Request $request){
        if(Hash::check($request->password, Auth::user()->password)) {
            if($faq->delete()) {
                Alert::info('Pregunta eliminada con éxito');
            } else {
                Alert::error('Hubo un error al eliminar la pregunta');
            }
            Alert::info('Pregunta eliminada con éxito');
            return redirect()->route('admin.faq.list');
        } else {
            Alert::warning('Contraseña incorrecta');
            return redirect()->back();
        }
    }
}
