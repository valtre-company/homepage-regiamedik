<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class APIServiceController extends Controller
{
    public function getAllServices()
    {
        $services = Service::with('categoryId','serviceTypeId')->get();
        return response()->json($services);
    }

    // Get Service by slug
    public function getServiceBySlug($slug)
    {
        $service = Service::with('categoryId','serviceTypeId','createdBy','updatedBy')->where('slug', $slug)->first();
        return response()->json($service);
    }
    
}
