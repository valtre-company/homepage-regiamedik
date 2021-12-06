<?php

namespace App\Orchid\Screens\Location;

use App\Models\Location;
use App\Orchid\Layouts\Location\LocationLayoutScreen;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class LocationListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Sucursales';

    public $description = 'Todas las sucursales registradas';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $data = Location::filters()->defaultSort('id','desc');        
        // Filter by suburb
        if (request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["suburb"])) {        
            $data->where(function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", suburb)'), 'like', '%' . request()->query()["filter"]["suburb"] .'%');
            });
        }
        // Filter by street
        if (request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["street"])) {        
            $data->where(function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", street)'), 'like', '%' . request()->query()["filter"]["street"] .'%');
            });
        }

        // Filter by city
        if (request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["city"])) {        
            $data->where(function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", city)'), 'like', '%' . request()->query()["filter"]["city"] .'%');
            });
        }
        
        // Filter by number_interior
        if (request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["number_interior"])) {        
            $data->where(function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", number_interior)'), 'like', '%' . request()->query()["filter"]["number_interior"] .'%');
            });
        }

        if(request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["service_type_id"])){
            $data->whereHas('serviceType', function ($query){
                $query->where(DB::raw('CONCAT_WS(" ", name)'), 'like', '%'. request()->query()["filter"]["service_type_id"] .'%');      
            });    
        }   
        return [
            'locations' => $data->paginate(),
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
            Link::make('Crear Sucursal')
                ->icon('plus')
                ->route('admin.location.edit'),
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
            LocationLayoutScreen::class
        ];
    }
}
