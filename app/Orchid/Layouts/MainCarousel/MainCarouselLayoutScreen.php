<?php

namespace App\Orchid\Layouts\MainCarousel;

use App\Models\MainCarousel;
use Carbon\Carbon;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class MainCarouselLayoutScreen extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'main_carousels';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('id', 'ID')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (MainCarousel $item) {
                    return Link::make( $item->id )
                        ->route('admin.main_carousel.edit', $item);
            }),
            TD::make('title', 'Title')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (MainCarousel $item) {
                    return Link::make( $item->title )
                        ->route('admin.main_carousel.edit', $item);
                }),

            // TD::make('url', 'Ruta De Archivo Web')
            //     ->render(function (MainCarousel $item) {
            //         if ($item->attachment && $item->    attachment->id) {
            //             return Link::make( "{$item->attachment->path}{$item->attachment->name}.{$item->attachment->extension}" )
            //                 ->route('admin.main_carousel.edit', $item);
            //         }
            //         return Link::make( $item->url )
            //             ->route('admin.main_carousel.edit', $item);
            // }),
            // TD::make('attachment_type','Tipo de archivo')
            //     ->render(function (MainCarousel $item) {
            //         if ($item->attachmentWeb && $item->attachmentWeb->id) {
            //             return ucfirst($item->attachmentWeb->attachment_type);
            //         }                    
            // }),    
            TD::make('created_at', 'Creación')
                ->sort()
                ->render(function (MainCarousel $item) {
                    return (new Carbon($item->created_at))->isoFormat('D/M/YYYY h:mm A');
            }),
            TD::make('web', 'Web')
                ->render(function (MainCarousel $item) {
                    if ($item->attachmentWeb && $item->attachmentWeb->url) {
                        return Link::make('Abrir Imagen')
                            ->target('_blank')
                            ->href( $item->attachmentWeb->url );
                    }
                    return "";
            }),      
            TD::make('mobile','Movil')
                ->render(function (MainCarousel $item) {
                    if ($item->attachmentMobile && $item->attachmentMobile->url) {
                        return Link::make('Abrir Imagen')
                            ->target('_blank')
                            ->href( $item->attachmentMobile->url );
                    }                    
                    return "";
            }),
            TD::make('visible','Status')
                ->render(function (MainCarousel $item) {
                    if ($item->visible) {
                        return 'Activo';
                    }
                    return 'Inactivo';
            }),
        ];
    }
}
