<?php

namespace App\Orchid\Screens\Service;

use App\Models\Service;
use App\Orchid\Layouts\Service\ServiceLayoutScreen;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ServiceListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Servicios';

    public $description = 'Todos los servicios registrados';
    
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $data = Service::filters()->defaultSort('id', 'desc');

        // Filter by name
        if(request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["name"])) {
            $data->where(function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", name)'), 'like', '%' . request()->query()["filter"]["name"] .'%');
            });
        }

        // Filter by the column min price or column max price
        if (request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["price"])) {
            $data->where(function ($query) {
                $query->where('min_price', '>=', request()->query()["filter"]["price"]) 
                    ->where('max_price', '<=', request()->query()["filter"]["price"]);
            });
        }

        // Filter by category 
        if(request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["category_id"])) {
            $data->whereHas('category', function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", name)'), 'like', '%' . request()->query()["filter"]["category_id"] .'%');
            });
        }

        // Filter by locations
        if (request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["locations"])) {
            $data->whereHas('locations', function ($query) {                
                $query->where(DB::raw('CONCAT_WS(" ", city)'), 'like', '%'. request()->query()["filter"]["locations"] .'%');                
            });
        }

        // Filter by updated_by
        if (request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["updated_by"])) {
            $data->whereHas('updatedBy', function ($query) {                
                $query->where(DB::raw('CONCAT_WS(" ", name)'), 'like', '%'. request()->query()["filter"]["updated_by"] .'%');                
            });
        }

        return [
            'services' => $data->paginate(),
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
            Link::make('Crear Servicio')
                ->icon('plus')
                ->method('create'),
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
            ServiceLayoutScreen::class
        ];
    }
}
