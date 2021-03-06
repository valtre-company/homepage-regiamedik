<?php

namespace App\Orchid\Screens\Service;

use App\Helpers\Helper;
use App\Models\Category;
use App\Models\Location;
use App\Models\Service;
use App\Models\ServiceLocation;
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
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Str;
use Orchid\Support\Facades\Toast;

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
                        ->title('Descripci??n'),
                ]),
                Group::make([
                    Relation::make('service.category_id')
                        ->fromModel(Category::class, 'id')
                        ->searchColumns('name','slug')                        
                        ->displayAppend('full_info')
                        ->required()                                                
                        ->title('Categor??a'),
                    Select::make('service.lead_time')
                        ->options(Helper::leadTimes())                        
                        ->title('Tiempo de entrega')
                    ]),
                Group::make([                    
                    Input::make('service.min_price')
                        ->type('number')
                        ->title('Precio M??nimo')
                        ->required()
                        ->help('Precio m??nimo del servicio'),
                    Input::make('service.max_price')
                        ->type('number')                                                                  
                        ->title('Precio M??ximo')
                        ->help('Precio m??ximo del servicio'),
                ]),
                Group::make([
                    Relation::make('service.service_type_id')
                        ->title('Tipo de servicio')
                        ->fromModel(ServiceType::class,'id')                        
                        ->displayAppend('full_info')
                        ->searchColumns('name', 'slug')
                        ->required()                        
                        ->help('Seleccione un tipo de servicio')                        
                        ->value($this->exists ? $this->model->service_type_id : null),
                    Relation::make('service.locations.')
                        ->title('Sucursales')
                        ->fromModel(Location::class,'id')
                        ->multiple()
                        ->required()
                        ->min(1)
                        ->displayAppend('full_address')
                        ->help('Seleccione una sucursal'),                                                
                ]),
                Group::make([
                    Button::make('Crear Servicio')
                        ->icon('plus')
                        ->type(Color::PRIMARY())
                        ->method('createOrUpdate')
                        ->canSee(!$this->exists),

                    Button::make('Actualizar')
                        ->icon('note')
                        ->type(Color::PRIMARY())
                        ->method('createOrUpdate')                        
                        ->canSee($this->exists),

                    Button::make('Duplicar')
                        ->icon('copy')
                        ->type(Color::SUCCESS())
                        ->method('duplicate')
                        ->canSee($this->exists),

                    ModalToggle::make('Eliminar')
                        ->modal('askIfDelete')
                        ->method('remove')
                        ->type(Color::DANGER())
                        ->icon('trash')
                        ->canSee($this->exists),

                ])->autoWidth(),
                // Layout::view('platform.analysis.analysis-form'),
            ])->title('Informaci??n General'),
            Layout::modal('askIfDelete', [
                Layout::rows([
                    Label::make('')
                        ->title('Est??s eliminando servicio'),
                        // ->help('Este proceso eliminar?? todos los ex??menes y par??metros relacionados a este an??lisis. Una vez completado no podr?? recuperar la informaci??n.'),
                    Input::make('password')
                        ->type('password')
                        ->placeholder('Ingrese su contrase??a')
                        ->autofocus()
                        ->help('Validar??mos el proceso con tu contrase??a'),
                    Input::make('delete_service_id')
                        ->type('hidden')
                        ->value($this->model->id)
                        ->required(),
                ]),
            ])->title('??Desea continuar?'),
        ];
    }

    public function createOrUpdate(Service $service, Request $request)
    {        
        $isNew = !$service->exists;
        $data = $request->get('service');                  
        try {
            DB::beginTransaction();
            $data['slug'] = Str::slug($data['name']);            
            $data['updated_by'] = Auth::user()->id;              
            // Check if min price or min price is empty
            if (empty($data['min_price'])) {
                Alert::error('El precio no puede estar vac??o');
                return redirect()->back()->withInput();
            }
            $data['max_price'] = isset($data['max_price']) ? $data['max_price'] : $data['min_price'];
            // Check if min price or max price is less than zero
            if (floatval($data['min_price']) < 0 || floatval($data['max_price']) < 0) {
                Alert::error('El precio m??nimo y m??ximo no pueden ser menores a cero.');
                return redirect()->back()->withInput();
            }
            // Validate if the min price is the same at max price
            if (floatval($data['min_price']) > floatval($data['max_price']))     {
                Alert::error('El precio m??nimo no puede ser mayor al precio m??ximo');
                return redirect()->back()->withInput();
            }      
            // If the service is new, we need to create a new service else we update the service
            if($isNew) {
                $data['created_by'] = Auth::user()->id;
                $service->fill($data);
                $service->save();
            } else {
                $service->update($data);
            }
            $service->fill($data);
            $data['locations'] = isset($data['locations']) ? $data['locations'] : [];
            $this->generateServicesLocations($service, $data['locations']);
            DB::commit();
            if($isNew){
                Alert::success('Servicio creado con ??xito');
            } else {
                Alert::success('Servicio actualizado con ??xito');
            }
        } catch (Exception $e) {
            Log::debug($e->getMessage());
            Toast::warning('Verifique los datos e intente nuevamente');
            if($isNew) {
                Alert::error('Hubo un error al crear al servicio');
            } else {
                Alert::error('Hubo un error al actualizar la informaci??n general del servicio');
            }
            DB::rollBack();
        }
    }
    
    public function generateServicesLocations(Service $service, array $locations ) : void {                                
        if(!empty($locations)) {
            foreach($locations as $locationId) {
                // Check if the location is already in the service
                $serviceLocation = ServiceLocation::where('service_id', $service->id)->where('location_id', $locationId)->first();
                // If the location is not in the service, we create a new service location
                if(!$serviceLocation) {
                    ServiceLocation::create([
                        'service_id' => $service->id,
                        'location_id' => intval($locationId),
                    ]);
                } 
            }                 
            // Check if the current services locations is the same at the arrayLocations, if not, we delete the service location
            foreach(ServiceLocation::where('service_id', $service->id)->get() as $currentLocation) {
                if(!in_array($currentLocation->location_id, $locations)) {
                    $currentLocation->delete();
                }
            }
        }   
    }

    public function remove(Service $service, Request $request)
    {
        if(Hash::check($request->password, Auth::user()->password)) {
            if($service->delete()) {
                Alert::info('Servicio eliminado con ??xito');
            } else {
                Alert::error('Hubo un error al eliminar el servicio');
            }
            Alert::info('Sevicio eliminado con ??xito');
            return redirect()->route('admin.service.list');
        } else {
            Alert::warning('Contrase??a incorrecta');
            return redirect()->back();
        }
    }

    public function duplicate(Service $service, Request $request)
    {
        $data = $request->get('service');
        $data['name'] = $data['name'] . ' (Copia)';
        $data['slug'] = Str::slug($data['name']);
        $data['created_by'] = Auth::user()->id;
        $data['updated_by'] = Auth::user()->id;
        $data['locations'] = isset($data['locations']) ? $data['locations'] : [];
        try {
            DB::beginTransaction();
            $service->fill($data);
            $service->save();
            $this->generateServicesLocations($service, $data['locations']);
            DB::commit();
            Alert::success('Servicio duplicado con ??xito');
        } catch (Exception $e) {
            Log::debug($e->getMessage());
            Toast::warning('Verifique los datos e intente nuevamente');
            Alert::error('Hubo un error al duplicar el servicio');
            DB::rollBack();
        }
        return redirect()->route('admin.service.list');
    }
}
