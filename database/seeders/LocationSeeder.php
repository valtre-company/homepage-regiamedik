<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('locations')->insert([
            'street' => 'Av Belisario Domínguez',
            'suburb' => 'Obispado',
            'city' => 'Monterrey',
            'country' => 'México',
            'state' => 'N.L',
            'number_interior' => 'Local 10',
            'number_exterior' => '2470',
            'lat' => '',
            'lng' => '',
            'opening_hours' => '',
            'closing_hours' => '',
            'service_type_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('locations')->insert([
            'street' => 'Carretera a Reynosa',
            'suburb' => 'El Sabinal',
            'city' => 'Juarez',
            'country' => 'México',
            'state' => 'Nuevo León',
            'number_interior' => 'Local A',
            'number_exterior' => '148',
            'lat' => '',
            'lng' => '',
            'opening_hours' => '',
            'closing_hours' => '',
            'service_type_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('locations')->insert([
            'street' => 'Av. Carlos Salinas de Gortari',
            'suburb' => 'Centro',
            'city' => 'Apodaca',
            'country' => 'México',
            'state' => 'Nuevo León',
            'number_interior' => 'Local B131 - 132',
            'number_exterior' => '801',
            'lat' => '',
            'lng' => '',
            'opening_hours' => '',
            'closing_hours' => '',
            'service_type_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
