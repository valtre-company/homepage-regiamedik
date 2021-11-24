<?php

namespace App\Orchid\Layouts\Service;

use App\Helpers\Helper;
use App\Models\Service;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ServiceLayoutScreen extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'services';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('id','#')            
                ->sort() 
                ->filter(TD::FILTER_TEXT),           
            TD::make('name','Nombre')
                ->sort()
                ->render(function(Service $service) {
                    return Link::make("$service->name")
                        ->route('admin.service.edit', $service);
                })
                ->filter(TD::FILTER_TEXT),
            TD::make('price','Precio')
                ->sort()
                ->render(function(Service $service) {
                    return Helper::formatMoney($service->price);                
                })
                ->filter(TD::FILTER_TEXT),
            TD::make('category_id','Categoría')
                ->sort()
                ->render(function(Service $service) {
                    return $service->category->name;
                })
                ->filter(TD::FILTER_TEXT),
            TD::make('service_type_id','Tipo de Servicio')
                ->sort()
                ->render(function(Service $service) {
                    return $service->serviceType->name;
                })
                ->filter(TD::FILTER_TEXT),                
            TD::make('updated_by', 'Actualizado Por')   
                ->sort()          
                ->render(function(Service $service) {
                    return "{$service->updatedBy->full_user_name}" ?? '-';
                })                              
                ->filter(TD::FILTER_DATE),
        ];
    }
}
