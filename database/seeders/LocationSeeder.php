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
            'street' => 'Rua da Paz',
            'suburb' => 'Vila Nova de Gaia',
            'city' => 'Porto',
            'country' => 'Portugal',
            'state' => 'Porto',
            'number_interior' => '',
            'number_exterior' => '',
            'lat' => '41.1405',
            'lng' => '-8.6245',
            'opening_hours' => '',
            'closing_hours' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
