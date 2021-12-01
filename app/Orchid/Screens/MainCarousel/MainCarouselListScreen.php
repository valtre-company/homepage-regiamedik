<?php

namespace App\Orchid\Screens\MainCarousel;

use App\Models\MainCarousel;
use App\Orchid\Layouts\MainCarousel\MainCarouselLayoutScreen;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class MainCarouselListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Sliders';

    public $description = 'Lista de Sliders';
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        $main_carousel = MainCarousel::filters()->defaultSort('id','desc');
        return [
            'main_carousels' => $main_carousel->paginate(),
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
            Link::make('Nuevo Slider')
                ->icon('plus')
                ->route('admin.main_carousel.edit')
        
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
            MainCarouselLayoutScreen::class,  
        ];
    }
}
