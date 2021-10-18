<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ScheduleController;

Route::get('/',[IndexController::class,'index'])->name('welcome');
Route::post('/', [IndexController::class, 'contactSend'])->name('contact.send');

Route::get('/calendario',[ScheduleController::class, 'index'])->name('schedule.index');