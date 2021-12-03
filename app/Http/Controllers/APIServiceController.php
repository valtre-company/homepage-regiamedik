<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class APIServiceController extends Controller
{
    public function getAllServices()
    {
        $services = Service::with('category','serviceType','createdBy', 'updatedBy')->get();
        return response()->json($services);
    }
    
    public function getAllServicesByType($slugType)
    {        
        $serviceType = ServiceType::where('slug', $slugType)->first();
        $services = Service::where('service_type_id', $serviceType->id)->with('category','serviceType','createdBy', 'updatedBy')->get();
        return response()->json($services);
    }
    
    // Function search by name, category, service type, description, lead_time, min_price, max_price by slug type
    function getAllServicesByTypeAndSearch($slugType, $search)
    {
        $serviceType = ServiceType::where('slug', $slugType)->first();
        $services = Service::where('service_type_id', $serviceType->id)
            ->where('name', 'like', '%'.$search.'%')
            ->orWhere('category_id', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%')
            ->orWhere('lead_time', 'like', '%'.$search.'%')
            ->orWhere('min_price', 'like', '%'.$search.'%')
            ->orWhere('max_price', 'like', '%'.$search.'%')
            ->with('category','serviceType','createdBy', 'updatedBy')
            ->get();
        return response()->json($services);
    }

}
