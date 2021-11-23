<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('services')->insert([
            'name' => 'Electrocardiograma',
            'slug' => Str::slug('Electrocardiograma'),
            'description' => 'Consulta médica',
            'price' => 25.00,            
            'category_id' => 1,
            'service_type_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_by' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
