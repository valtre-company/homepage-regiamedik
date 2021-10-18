<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //
    public function index () {
        return abort(404);
        return view('schedule.index');
    }
}
