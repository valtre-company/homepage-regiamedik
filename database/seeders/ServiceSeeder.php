<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Service;
use App\Models\ServiceLocation;
use App\Models\ServiceType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

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
        $locations = Location::all()->pluck('id');        
        foreach($services as $key => $value) {
            $type = ServiceType::where('slug',$key)->first();            
            foreach ($value as $service) { 
                if(!Service::where('slug',Str::slug($service['name']))->first()) {                    
                    $service = Service::create([
                        'name' => $service['name'],
                        'slug' => Str::slug($service['name']),
                        'description' => '',
                        'min_price' => $service['price'],
                        'max_price' => $service['price'],
                        'category_id' => rand(1,7),
                        'service_type_id' => $type->id,
                        'created_by' => 1,
                        'updated_by' => 1,
                        'deleted_by' => null,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);  
                }   
                foreach($locations as $locationId) {
                    $serviceLocation = ServiceLocation::where('service_id', $service->id)->where('location_id', $locationId)->first();                    
                    if(!$serviceLocation) {
                        ServiceLocation::create([
                            'service_id' => $service->id,
                            'location_id' => intval($locationId),
                        ]);
                    } 
                }            
            }
        }
    }
}
