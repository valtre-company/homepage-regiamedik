<?php

namespace App\Orchid\Screens\MainCarousel;

use Orchid\Screen\Screen;

class MainCarouselListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'MainCarouselListScreen';

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
