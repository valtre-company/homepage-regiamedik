<?php

namespace App\Orchid\Screens\Service;

use Orchid\Screen\Screen;

class ServiceListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'ServiceListScreen';

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
