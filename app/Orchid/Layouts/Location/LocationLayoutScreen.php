<?php

namespace App\Orchid\Layouts\Location;

use App\Models\Location;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class LocationLayoutScreen extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'locations';

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
            TD::make('street', 'Calle')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Location $location) {
                    return Link::make("$location->street")
                        ->route('admin.location.edit', $location);
                }),
            TD::make('suburb', 'Colonia')
                ->sort()
                ->filter(TD::FILTER_TEXT),
            TD::make('city', 'Ciudad')
                ->sort()
                ->filter(TD::FILTER_TEXT),
            TD::make('country', 'País')
                ->sort()
                ->filter(TD::FILTER_TEXT),
            TD::make('state', 'Estado')
                ->sort()
                ->filter(TD::FILTER_TEXT),            
            TD::make('number_exterior', 'Num Ext')
                ->sort()
                ->filter(TD::FILTER_TEXT),            
            TD::make('number_interior', 'Num Int')
                ->sort()
                ->filter(TD::FILTER_TEXT),                        
        ];
    }
}
