<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use Illuminate\Http\Request;

class APIServiceTypeController extends Controller
{
    // get all services types
    public function getAllServiceTypes()
    {
        $servicesTypes = ServiceType::all();
        return response()->json($servicesTypes);
    }
}
