<?php

namespace App\Orchid\Screens\MainCarousel;

use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;

class MainCarouselEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Nueva Imagen Slider';

    public $description = 'Formulario para crear nuevo elemento en el slider principal.';

    public $model = null;

    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(MainCarousel $mainCarousel): array
    {
        $this->exists = $main_carousel->exists;

        if ($this->exists) {
            $this->model = $main_carousel;
            $this->name = "Actualizar Slider Principal (#{$main_carousel->id})";
            $this->description = "Formulario para actualizar un elemento del slider principal.";
        }
        
        return [
            'main_carousel' => $main_carousel,
        ];
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
        return [
            Layout::rows([
                Group::make([
                    Layout::columns([
                        Upload::make('main_carousel.attachment_id')
                        ->title('Sube una imagen jpg, png o jpeg') 
                        ->help('El archivo debe ser una imagen de buena resolución')
                        ->acceptedFiles('image/*') // Optional, default is image/*
                        ->maxFiles(1) // Max files allowed
                        ->maxFileSizes(2) // In megabytes
                        ->required(), // Will be required
                    ]),
                ]),
                Group::make([
                    Button::make('Guardar')
                        ->method('createOrUpdate')
                        ->type(Color::PRIMARY())
                        ->canSee(!$this->exists),
                    ModalToggle::make('Eliminar')
                        ->modal('askIfDelete')
                        ->method('remove')
                        ->type(Color::ERROR())
                        ->canSee($this->exists),
                ])->autoWidth(),                
                Layout::modal('askIfDelete', [
                    Layout::rows([
                        Label::make('')
                            ->title('Esta eliminando un registro de forma permanente')
                            ->help('Este proceso no podrá ser revocado una vez se lleve a cabo.'),
                        Input::make('password')
                            ->type('password')
                            ->placeholder('Ingrese su contraseña')
                            ->autofocus()
                            ->help('Validarémos el proceso con tu contraseña'),
                    ]),
                ])->title('¿Desea continuar?'),
            ]),
        ];
    }
}
