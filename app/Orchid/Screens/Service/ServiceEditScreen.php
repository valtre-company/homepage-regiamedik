<?php

namespace App\Orchid\Screens\Service;

use App\Models\Category;
use App\Models\Location;
use App\Models\Service;
use App\Models\ServiceType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;

class ServiceEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Crear nuevo servicio';

    public $description = 'Registrando nuevo servicio';

    public $model = null;

    public $exists = false;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Service $service): array
    { 
        $this->exists = $service->exists;
        $this->model = $service;

        if ($this->exists) {
            $this->name = "Editar servicio (#{$service->id})";
            $this->description = 'Actualizando servicio existente';
        }

        return [
            'service' => $service,
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
            Link::make('Ver servicios')
                ->icon('doc')
                ->route('admin.service.list')
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
                    Input::make('service.name')
                        ->type('text')
                        ->max(255)
                        ->required()
                        ->title('Nombre'),
                    Input::make('service.description')
                        ->type('textarea')
                        ->max(255)                        
                        ->title('Descripción'),
                ]),
                Group::make([
                    Relation::make('service.category')
                        ->fromModel(Category::class, 'id')
                        ->max(1)
                        ->displayAppend('full_info')
                        ->required()                                                
                        ->title('Categoría'),
                ]),
                Group::make([                    
                    Input::make('service.min_price')
                        ->type('number')
                        ->max(255)
                        ->required()
                        ->title('Precio Mínimo')
                        ->help('Precio mínimo del servicio'),
                    Input::make('service.max_price')
                        ->type('number')
                        ->max(255)
                        ->required()                        
                        ->title('Precio Máximo')
                        ->help('Precio máximo del servicio'),
                ]),
                Group::make([
                    Relation::make('service.type')
                        ->title('Tipo')
                        ->fromModel(ServiceType::class,'id')
                        ->multiple()
                        ->displayAppend('full_info')
                        ->required()                        
                        ->help('Seleccione un tipo de servicio')
                        ->max(1),
                    Relation::make('service.locations')
                        ->title('Sucursales')
                        ->fromModel(Location::class,'id')
                        ->multiple()
                        ->required()
                        ->min(1)
                        ->displayAppend('full_address')
                        ->help('Seleccione una sucursal'),                                                
                ]),
                Group::make([
                    Button::make('Crear Análisis')
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
                // Layout::view('platform.analysis.analysis-form'),
            ])->title('Información General'),
            Layout::modal('askIfDelete', [
                Layout::rows([
                    Label::make('')
                        ->title('Estás eliminando servcio'),
                        // ->help('Este proceso eliminará todos los exámenes y parámetros relacionados a este análisis. Una vez completado no podrá recuperar la información.'),
                    Input::make('password')
                        ->type('password')
                        ->placeholder('Ingrese su contraseña')
                        ->autofocus()
                        ->help('Validarémos el proceso con tu contraseña'),
                    Input::make('delete_service_id')
                        ->type('hidden')
                        ->value($this->model->id)
                        ->required(),
                ]),
            ])->title('¿Desea continuar?'),
        ];
    }

    public function createOrUpdate(Service $service, Request $request)
    {
        try {
            //code...
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
