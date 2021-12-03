<?php

namespace App\Orchid\Screens\MainCarousel;

use App\Models\MainCarousel;
use App\Service\ImageService;
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
    private $desktopWidth = 1350;
    private $desktopHeight = 250;
    private $mobileWidth = 375;
    private $mobileHeight = 365;

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
                    Upload::make('main_carousel.attachment_web_id')
                        ->title('Slider en modo escritorio')                         
                        ->acceptedFiles('image/*') 
                        ->maxFiles(1) 
                        ->maxFileSizes(1)
                        ->resizeWidth($this->desktopWidth)
                        ->resizeHeight($this->desktopHeight)
                        ->required(), 
                    Upload::make('main_carousel.attachment_mobile_id')
                        ->title('Slider en modo celular o tablet') 
                        // ->help('El archivo debe ser una imagen de buena resolución')
                        ->acceptedFiles('image/*') 
                        ->maxFiles(1) 
                        ->maxFileSizes(1)
                        ->resizeWidth($this->mobileWidth)
                        ->resizeHeight($this->mobileHeight)
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
        $title = isset($data["title"]) ? $data["title"] : null;
        $attachment_web_id = isset($data["attachment_web_id"]) ? $data["attachment_web_id"][0] : null;
        $attachment_mobile_id = isset($data["attachment_mobile_id"]) ? $data["attachment_mobile_id"][0] : null;
        
        try {
            if(!$title) {
                throw new Exception("El título es requerido");
            }

            if(!$attachment_web_id) {
                throw new Exception("La imagen en modo escritorio es requerida");
            }

            if(!$attachment_mobile_id) {
                throw new Exception("La imagen en modo celular o tablet es requerida");
            }

            $main_carousel->fill([
                'title' => $title,
                "attachment_web_id" => $attachment_web_id,   
                "attachment_mobile_id" => $attachment_mobile_id,
            ])->save();

            ImageService::resizeMainCarousel($main_carousel->attachmentWeb->fullPath, $this->desktopWidth, $this->desktopHeight);
            ImageService::resizeMainCarousel($main_carousel->attachmentMobile->fullPath, $this->mobileWidth, $this->mobileHeight);

            if ($is_new) {
                Alert::success("Se ha creado el registro satisfactoriamente.");
            } else {
                Alert::success("Se ha actualizado el registro satisfactoriamente.");
            }

        } catch (Exception $e) {
            Log::info("Exception", ["val" => $e] );

            $this->removeAttachmentId($attachment_mobile_id);
            $this->removeAttachmentId($attachment_web_id);            

            Alert::error("Hubo un error al crear el registro, verifique e intente nuevamente.");
        }
        
        return redirect()->route('admin.main_carousel.edit', $main_carousel);
    }

    public function remove(MainCarousel $main_carousel, Request $request) {
        if ($main_carousel->exists) {
            if (!Hash::check($request->password, Auth::user()->password)) {
                Alert::error("La contraseña ingresada es incorrecta");
                return redirect()->route('admin.main_carousel.edit', $main_carousel);
            }        

            $this->removeAttachmentId($main_carousel->attachment_mobile_id);
            $this->removeAttachmentId($main_carousel->attachment_web_id);            
            $main_carousel->delete(); 
            
            Alert::success("Se ha eliminado correctamente el registro de la base de datos.");
        }

        return redirect()->route('admin.main_carousel.list');
    }

    public function removeAttachmentId($id) {
        $attachment = Attachment::find($id);
        if ($attachment && $attachment->exists) {
            if (Storage::exists($attachment->storagePath)) {
                Storage::delete($attachment->storagePath);
            }
            $attachment->delete();
        }
    }
}
