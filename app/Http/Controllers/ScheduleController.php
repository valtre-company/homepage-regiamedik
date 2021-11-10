<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //
    public function index () {
        return redirect('welcome');
        return view('schedule.index');
    }
}
