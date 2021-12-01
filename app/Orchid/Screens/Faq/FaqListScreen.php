<?php

namespace App\Orchid\Screens\Faq;

use App\Models\Faq;
use App\Orchid\Layouts\Faq\FaqLayoutScreen;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class FaqListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'FAQ (Frequent Answers Questions)';

    public $description = 'Todas las preguntas frecuentes registradas';
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $data = Faq::filters()->defaultSort('id','desc');

        if(request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["name"])) {
            $data->where(function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", question)'), 'like', '%' . request()->query()["filter"]["answer"] .'%');
            });
        }

        if(request()->query() && isset(request()->query()["filter"]) && isset(request()->query()["filter"]["answer"])) {
            $data->where(function ($query) {
                $query->where(DB::raw('CONCAT_WS(" ", answer)'), 'like', '%' . request()->query()["filter"]["answer"] .'%');
            });
        }
        
        return [
            'faqs' => $data->paginate()        
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
            Link::make('Crear nueva pregunta frecuente')
                ->icon('plus')
                ->route('admin.faq.edit')
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
            FaqLayoutScreen::class
        ];
    }
}
