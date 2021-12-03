<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Uroanálisis',
            'slug' => Str::slug('Uroanálisis'),
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Coproanálisis',
            'slug' => Str::slug('Coproanálisis'),
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Bacteriología',
            'slug' => Str::slug('Bacteriología'),
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Subrogados',
            'slug' => Str::slug('Subrogados'),
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Inmunología',
            'slug' => Str::slug('Inmunología'),
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Serologías',
            'slug' => Str::slug('Serologías'),
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Química clínica',
            'slug' => Str::slug('Química clínica'),
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}