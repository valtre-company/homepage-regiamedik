<?php

namespace App\Orchid\Screens\MainCarousel;

use App\Models\MainCarousel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class MainCarouselEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Nueva Imagen Slider';

    public $description = 'Formulario para crear nuevo elemento en el slider principal.';

    public $model = null;

    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(MainCarousel $main_carousel): array
    {
        $this->exists = $main_carousel->exists;
        $this->model = $main_carousel;

        if ($this->exists) {            
            $this->name = "Actualizar Slider Principal (#{$main_carousel->id})";
            $this->description = "Formulario para actualizar un elemento del slider principal.";
        }
        
        return [
            'main_carousel' => $main_carousel,
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
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
                    Input::make('main_carousel.title')
                        ->type('text')
                        ->max(255)
                        ->required()
                        ->title('Título'),
                ]),
                Group::make([                    
                    Upload::make('main_carousel.attachment_id')
                        ->title('Sube una imagen jpg, webp, png o jpeg') 
                        ->help('El archivo debe ser una imagen de buena resolución')
                        ->acceptedFiles('image/*') 
                        ->maxFiles(1) 
                        ->maxFileSizes(2)
                        ->required(), 
                ]),
                Group::make([                    
                    Select::make('main_carousel.attachment_type')
                        ->options([
                            'web' => 'Web',
                            'mobile' => 'Mobile',
                        ])
                        ->title('Tipo de Slider')
                        ->help('Tipo de elemento que se mostrará en el slider principal')
                        ->required(),                    
                ]),
                Group::make([
                    Button::make('Guardar')
                        ->method('createOrUpdate')
                        ->type(Color::PRIMARY())
                        ->canSee(!$this->exists),
                    ModalToggle::make('Eliminar')
                        ->modal('askIfDelete')
                        ->method('remove')
                        ->type(Color::ERROR())
                        ->canSee($this->exists),
                ])->autoWidth(),                
            ])->title('Datos de la imagen'),
            Layout::modal('askIfDelete', [
                Layout::rows([
                    Label::make('')
                        ->title('Esta eliminando un registro de forma permanente')
                        ->help('Este proceso no podrá ser revocado una vez se lleve a cabo.'),
                    Input::make('password')
                        ->type('password')
                        ->placeholder('Ingrese su contraseña')
                        ->autofocus()
                        ->help('Validarémos el proceso con tu contraseña'),
                ]),
            ])->title('¿Desea continuar?'),
        ];
    }

    public function createOrUpdate(MainCarousel $main_carousel, Request $request) {

        $is_new = !$main_carousel->exists;
        $data = $request->main_carousel;
        $attachment_id = isset($data["attachment_id"][0]) ? $data["attachment_id"][0] : null;
        $attachment_type = isset($data["attachment_type"]) ? $data["attachment_type"] : null;        
        $title = isset($data["title"]) ? $data["title"] : null;
        try {
            if(!$title) {
                throw new Exception("El título es requerido");
            }
            if(!$attachment_type) {
                throw new Exception("Debe seleccionar un tipo de slider");
            }
            if (!$attachment_id) {
                throw new Exception("attachment_id doesn't exists on request");
            }
            
            $main_carousel->fill([
                'title' => $title,
                "attachment_id" => $attachment_id,
                "attachment_type" => $attachment_type,
            ])->save();

            if (env('APP_ENV') === 'local') {
                $a = Attachment::find($attachment_id);
                $a->update([
                    'url' => str_replace('http://localhost', 'http://localhost:8080', $a->url)
                ]);
            }

            // ImagesService::resizeCarousel( $main_carousel );

            if ($is_new) {
                Alert::success("Se ha creado el registro satisfactoriamente.");
            } else {
                Alert::success("Se ha actualizado el registro satisfactoriamente.");
            }

        } catch (Exception $e) {
            Log::info("Exception", ["val" => $e] );
            $attachment = Attachment::find( $attachment_id );
            if ( Storage::exists( $attachment->storagePath ) ) {
                Storage::delete([ $attachment->storagePath ]);
            } 

            if ($attachment) {
                $attachment->delete();
            }

            Alert::error("Hubo un error al crear el registro, verifique e intente nuevamente.");
        }
        
        return redirect()->route('admin.main_carousel.edit', $main_carousel);
    }

    public function remove(MainCarousel $main_carousel, Request $request) {

        if ($main_carousel->exists) {

            if (! Hash::check($request->password, Auth::user()->password)) { // validate password
                Alert::error("La contraseña ingresada es incorrecta");
                return redirect()->route('admin.main_carousel.edit', $main_carousel);
            }
            
            if ($main_carousel->attachment && $main_carousel->attachment->id) {
                if (Storage::exists( $main_carousel->storagePath )) {
                    Storage::delete( $main_carousel->storagePath ); // delete image from storage
                }
                $main_carousel->attachment->delete(); // delete image record from db
            }

            $main_carousel->delete(); // delete eloquent model
            
            Alert::success("Se ha eliminado correctamente el registro de la base de datos.");
        }

        return redirect()->route('admin.main_carousel.list');
    }
}
