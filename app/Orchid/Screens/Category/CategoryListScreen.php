<?php

namespace App\Orchid\Screens\Category;

use App\Models\Category;
use App\Orchid\Layouts\Category\CategoryLayoutScreen;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CategoryListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Categorías';

    public $description = 'Todas las categorías registradas';
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $data = Category::filters()->defaultSort('id','desc');

        if(request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["name"])) {
            $data->where(function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", name)'), 'like', '%' . request()->query()["filter"]["name"] .'%');
            });
        }

        if(request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["slug"])) {
            $data->where(function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", slug)'), 'like', '%' . request()->query()["filter"]["slug"] .'%');
            });
        }

        return [
            'categories' => $data->paginate(),
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
            Link::make('Crear nueva categoría')
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
            CategoryLayoutScreen::class,
        ];
    }
}
