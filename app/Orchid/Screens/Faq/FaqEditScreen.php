<?php

namespace App\Orchid\Screens\Faq;

use App\Models\Faq;
use App\Models\ServiceType;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class FaqEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Crear nueva pregunta';

    public $description = 'Registrando nueva pregunta';

    public $model = null;

    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Faq $faq): array
    {
        $this->model = $faq;
        $this->exists = $faq->exists;

        if ($this->exists) {
            $this->name = "Editar pregunta (#{$faq->id})";
            $this->description = 'Actualizando preguntas existentes';
        }

        return [
            'faq' => $faq,
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
            Link::make('Ver Listado de preguntas')
                ->icon('bubbles')
                ->route('admin.faq.list')
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
            Layout::rows([
                Group::make([
                    Input::make('faq.question')
                        ->title('Pregunta')
                        ->placeholder('¿Cuál es el horario del laboratorio?')
                        ->required()                        
                        ->max(255),                    
                ]),
                Quill::make('faq.answer')
                    ->title('Respuesta')                               
                    ->required()                    
                    ->rows(2)
                    ->toolbar(["text", "color", "header", "list", "format",])
                    ->height('200px'),
                Group::make([
                    Relation::make('service.type')
                    ->title('Tipo de servicio')
                    ->fromModel(ServiceType::class,'id')                    
                    ->multiple()
                    ->displayAppend('full_info')
                    ->required()                        
                    ->help('Seleccione un tipo de servicio')
                    ->max(1),                                       
                ])
            ])
        ];
    }
}
