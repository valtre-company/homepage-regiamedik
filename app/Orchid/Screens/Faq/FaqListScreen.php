<?php

namespace App\Orchid\Screens\Faq;

use Orchid\Screen\Screen;

class FaqListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'FaqListScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [];
    }
}
