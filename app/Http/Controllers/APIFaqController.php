<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class APIFaqController extends Controller
{
    //
    public function getFaqsBySlug($serviceType)
    {
        $serviceType = ServiceType::where('slug', $serviceType)->first();
        $faqs = Faq::with('updatedBy')->where('service_type_id', $serviceType->id)->get();
        return response()->json($faqs);        
    }
    
}
