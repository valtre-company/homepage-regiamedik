<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('services_types')->insert([
            'name' => 'Laboratorio',
            'slug' => Str::slug('Laboratorio'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('services_types')->insert([
            'name' => 'Unidad Médica',
            'slug' => Str::slug('Unidad Médica'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('services_types')->insert([
            'name' => 'Rayos X',
            'slug' => Str::slug('Rayos X'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
