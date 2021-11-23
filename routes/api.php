<?php

use App\Http\Controllers\APIServiceController;
use App\Http\Controllers\APIServiceTypeController;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route testing with auth middleware
Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/test', function () {
        return response()->json(['message' => 'You are authenticated']);
    });
});

Route::group(['prefix' => 'services'], function () {
    Route::get('/', [APIServiceController::class, 'getAllServices'])->name('api.services.all');

    Route::get('/types',[APIServiceTypeController::class,'getAllServiceTypes'])->name('api.service_types.all');

    Route::get('/service/{slug}', [APIServiceController::class, 'getServiceBySlug'])->name('api.services.slug');
});


