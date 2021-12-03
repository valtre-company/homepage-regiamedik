<?php

namespace Database\Seeders;

use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        // Laboratorio - 1
        Faq::create([
            'question' => 'Indicaciones para análisis de sangre:',
            'answer' => '<p>Depende de cada uno de los estudios que soliciten, en su mayoría el requisito principal es contar con un ayuno de 8 horas, en caso de ser Perfiles Bioquímicos ayuno de 12 horas. Favor de informar que verifiquen las indicaciones correctas llamando al laboratorio</p>',                
            'created_by' => 1,
            'updated_by' => 1,
            'service_type_id' => 1,
        ]);
        Faq::create([
            'question' => 'Tiempo de entrega de resultados:',
            'answer' => '<p>En caso de acudir a los análisis antes de las 9 am, la entrega de resultados se dará después de las 17:00 Horas. Cabe mencionar que depende el tipo de estudio que solicité, ya que hay estudios que requieren más días para su tiempo de proceso</p>',                
            'created_by' => 1,
            'updated_by' => 1,
            'service_type_id' => 1,
        ]);
        Faq::create([
            'question' => '¿Cómo proceder ante unos análisis en caso de no tener el ayuno correcto?',
            'answer' => '<p>Verificar con cuantas horas de ayuno cuenta el paciente, en caso de no cumplir con las horas correctas preguntar si el paciente es diabético y no realizar toma a menos que su doctor autorice la toma de muestra con el ayuno incompleto. Se enviará el resultado con posible nota adicional de una posible variación y alteración en los resultados debido al ayuno incompleto</p>',                
            'created_by' => 1,
            'updated_by' => 1,
            'service_type_id' => 1,
        ]);
        Faq::create([
            'question' => '¿Hay necesidad de sacar cita para atención?',
            'answer' => '<p>Para pruebas PCR para COVID, es necesario acudir antes de las 13:00 para garantizar una entrega de resultado más rápida, en caso de acudir después del horario mencionado el tiempo de entrega se extiende a 2 días hábiles</p>',                
            'created_by' => 1,
            'updated_by' => 1,
            'service_type_id' => 1,
        ]);
        Faq::create([
            'question' => '¿Cuándo o en que momento es efectivo realizarse la prueba de COVID?',
            'answer' => '<p>Es efectiva cuando se tiene algún síntoma indicativo de COVID, en caso de no presentar síntomas y de haber tenido contacto con una persona contagiada o positiva, favor de realizar prueba pasados los 3 días del contacto</p>',                
            'created_by' => 1,
            'updated_by' => 1,
            'service_type_id' => 1,
        ]);
        Faq::create([
            'question' => 'Precio del chequeo general Hombre y Mujer:',
            'answer' => '<p>Mujer $1695, Hombre: $1375</p>',                
            'created_by' => 1,
            'updated_by' => 1,
            'service_type_id' => 1,
        ]);
        Faq::create([
            'question' => '¿Cómo puedo revisar mis resultados mediante la página?',
            'answer' => '<p>Proporcionar un correo electrónico al Laboratorio, se enviará un correo con un Usuario y contraseña, y enseguida un segundo correo con aviso de que los resultados se encuentra publicados, en este mismo aparecerá una liga que nos enviará a la plataforma  directa de Regia Medik, será necesario ingresar con el usuario y contraseña antes enviados mediante el primer correo de confirmación</p>',                
            'created_by' => 1,
            'updated_by' => 1,
            'service_type_id' => 1,
        ]);
        Faq::create([
            'question' => '¿En qué horario se realizan servicios a domicilio?',
            'answer' => '<p>Por tema del ayuno es preferible realizar servicios a domicilio antes de las 10:30 am</p>',                
            'created_by' => 1,
            'updated_by' => 1,
            'service_type_id' => 1,
        ]); 
    }
}
