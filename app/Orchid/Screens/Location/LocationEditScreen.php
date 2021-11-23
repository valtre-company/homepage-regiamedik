<?php

namespace App\Orchid\Screens\Location;

use App\Models\Location;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class LocationEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Crear nueva sucursal';

    public $description = 'Registrando una nueva sucursal';

    public $model = null;

    public $exists = false;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Location $location): array
    {
        $this->exists = $location->exists;
        $this->model = $location;

        if ($this->exists) {
            $this->name = "Editar sucursal (#{$location->id})";
            $this->description = 'Actualizando una sucursal existente';
        }

        return [
            'location' => $location,
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
            Link::make('Ver sucursales')
                ->icon('location-pin')
                ->route('admin.location.list')
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
                    Input::make('location.street')
                        ->title('Calle')
                        ->placeholder('Belisario Domínguez')
                        ->required(),                    
                    Input::make('location.suburb')
                        ->title('Colonia')
                        ->placeholder('Centro')
                        ->required(),                    
                ]),
                Group::make([
                    Input::make('location.city')
                        ->title('Ciudad')
                        ->placeholder('Monterrey')
                        ->required(), 
                    Input::make('location.state')
                        ->title('Estado')
                        ->placeholder('Nuevo León')
                        ->required()
                ]),
                Group::make([
                    Input::make('location.country')
                        ->title('País')
                        ->placeholder('México')                                                
                ]),
                Group::make([
                    Input::make('location.number_exterior')
                        ->title('Numero Exterior')
                        ->placeholder('15'),                        
                    Input::make('location.number_interior')
                        ->title('Número Interior')
                        ->placeholder('Local 12A'),
                ]),
                Group::make([
                    Input::make('location.lat')
                        ->title('Latitud')
                        ->placeholder('25.6485574'),                        
                    Input::make('location.lng')
                        ->title('Longitud')
                        ->placeholder('-100.1207625')                        
                ]),
                Group::make([
                    Input::make('location.opening_hours')
                        ->title('Horario de Apertura')
                        ->type('number')
                        ->placeholder('07'),                                            
                    Input::make('location.closing_hours')
                        ->title('Horario de Cierre')
                        ->type('number')
                        ->placeholder('23'),
                ])
            ])->title('Información general'),

            Layout::rows([
                Group::make([
                    Button::make('Crear Sucursal')
                        ->icon('plus')
                        ->type(Color::PRIMARY())
                        ->method('createOrUpdate')
                        ->canSee(!$this->exists),
                    Button::make('Actualizar')
                        ->icon('note')
                        ->type(Color::PRIMARY())
                        ->method('createOrUpdate')
                        ->canSee($this->exists),
                    Button::make('Eliminar')
                        ->modal('askForDeleteLocation')
                        ->method('remove')
                        ->type(Color::DANGER())
                        ->icon('trash')
                        ->canSee($this->exists),
                ])->autoWidth(),
            ]),

            Layout::modal('askForDeleteLocation', [
                Layout::rows([
                    Label::make('')
                        ->title('Se eliminará permanentemente el registro.'),
                    Input::make('password')
                        ->type('password')
                        ->placeholder('Ingrese su contraseña')
                        ->autofocus()
                        ->help('Validarémos el proceso con tu contraseña'),
                    Input::make('location_id')
                        ->type('hidden')
                        ->value($this->exists ?? $this->model->id)
                        ->required()
                ])
            ])
        ];
    }

    public function createOrUpdate(Location $location, Request $request)
    {                
        $data = $request->location;        
        $isNew = !$location->exists;

        try {
            DB::beginTransaction();
            
            $location->fill($data)->save();  

            DB::commit();

            if (!$isNew) {
                Alert::success('Información general de la sucursal actualizada correctamente.');
            } else {
                Alert::success('Sucursal creada correctamente');
            }

            return redirect()->route('admin.location.edit', $location);
        } catch (Exception $e) {
            DB::rollBack();
            Toast::warning('Verifique los datos e intente nuevamente');
            
            Log::info('error', ['exception' => $e]);
            if ($isNew) {
                Alert::error('Hubo un error al crear la sucursal, verifique e intente nuevamente');
            } else {
                Alert::error('Error al actualizar la información general de la sucursal.');
            }

            return redirect()->back()->withInput();
        }    
    }
}
