<?php

namespace App\Orchid\Screens\Dashboard;

use App\Models\Faq;
use App\Models\Service;
use App\Orchid\Layouts\Faq\FaqLayoutScreen;
use App\Orchid\Layouts\Service\ServiceLayoutScreen;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class DashboardScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Dashboard';

    public $description = 'Pantalla de inicio';

    public $permissions = [
        'platform.index'
    ];
    
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $services = Service::filters()->defaultSort('id','desc');

        // Filter by service name
        if(request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["name"])) {
            $services->where(function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", name)'), 'like', '%' . request()->query()["filter"]["name"] .'%');
            });
        }

        // Filter by service min price or max_price
        if(request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["min_price"])) {
            $services->where(function ($query) {
                $query->where('min_price', '>=', request()->query()["filter"]["min_price"]);
            });
        }       
        

        $faqs = Faq::filters()->defaultSort('id','desc');
        return [
            'services' => $services->paginate(),
            'faqs' => $faqs->paginate()
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
            DropDown::make('Servicios')
                ->icon('paste')
                ->list([
                    Link::make('Listar todos')
                        ->icon('list')
                        ->route('admin.service.list'),
                    Link::make('Crear nuevo')
                        ->icon('plus')
                        ->route('admin.service.edit'),
                ]),
            DropDown::make('Sucursales')
                ->icon('paste')
                ->list([
                    Link::make('Listar todos')
                        ->icon('list')
                        ->route('admin.location.list'),
                    Link::make('Crear nuevo')
                        ->icon('plus')
                        ->route('admin.location.edit'),
                ]),
            DropDown::make('Preguntas y Respuestas')
                ->icon('bubbles')
                ->list([
                    Link::make('Listar todos')
                        ->icon('list')
                        ->route('admin.faq.list'),
                    Link::make('Crear nuevo')
                        ->icon('plus')
                        ->route('admin.faq.edit'),
                ]),
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
