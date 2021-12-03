<?php

namespace App\Orchid\Layouts\Category;

use App\Models\Category;
use Carbon\Carbon;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoryLayoutScreen extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

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
                ->render(function(Category $category) {
                    return Link::make("$category->name")
                        ->route('admin.category.edit', $category);
                })
                ->filter(TD::FILTER_TEXT),
            TD::make('created_at', 'Creado')
                ->sort()
                ->render(function (Category $category) {
                    return (new Carbon($category->created_at))->isoFormat('D/M/YYYY h:mm A');
                }),

            TD::make('updated_at', 'Últim. Modificación')
                ->sort()
                ->render(function (Category $category) {
                    return (new Carbon($category->updated_at))->isoFormat('D/M/YYYY h:mm A');
                }),
        ];
    }
}
