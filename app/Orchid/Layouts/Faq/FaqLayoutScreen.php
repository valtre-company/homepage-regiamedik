<?php

namespace App\Orchid\Layouts\Faq;

use App\Models\Faq;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class FaqLayoutScreen extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'faqs';

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
            TD::make('question','Pregunta')
                ->sort()
                ->render(function(Faq $faq) {
                    return Link::make("$faq->question")
                        ->route('admin.faq.edit', $faq);
                })
                ->filter(TD::FILTER_TEXT),
            TD::make('update_at','Actualizado')
            ->sort()
            ->render(function(Faq $faq) {
                return $faq->updated_at->diffForHumans();
            })
            ->filter(TD::FILTER_DATE),   
            TD::make('Actualizado por')
                ->sort()
                ->render(function(Faq $faq) {
                    return "{$faq->updatedBy->full_user_name}" ?? '-';
                })   
        ];
    }
}
