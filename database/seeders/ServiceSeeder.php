<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
        $services = File::get(public_path('assets/json/db.json'));
        $services = json_decode($services, true);
        foreach($services as $key => $value) {
            $type = ServiceType::where('slug',$key)->first();            
            foreach ($value as $service) {         
                DB::table('services')->insert([
                    'name' => $service['name'],
                    'slug' => Str::slug($service['name']),
                    'description' => '',
                    'min_price' => $service['price'],
                    'max_price' => $service['price'],
                    'category_id' => 1,
                    'service_type_id' => $type->id,
                    'created_by' => 1,
                    'updated_by' => 1,
                    'deleted_by' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
