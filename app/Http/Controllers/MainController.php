<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function getCarousel()
    {    
        return MainCarousel::with('attachmentWeb','attachmentMobile')
            ->orderBy('created_at', 'asc')
            ->get();    
    }
}
