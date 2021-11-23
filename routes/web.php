<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use App\Orchid\Screens\Category\CategoryEditScreen;
use App\Orchid\Screens\Category\CategoryListScreen;
use App\Orchid\Screens\Location\LocationEditScreen;
use App\Orchid\Screens\Location\LocationListScreen;
use App\Orchid\Screens\Service\ServiceEditScreen;
use App\Orchid\Screens\Service\ServiceListScreen;
use App\Orchid\Screens\SubCategory\SubCategoryEditScreen;
use App\Orchid\Screens\SubCategory\SubCategoryListScreen;

Route::get('/',[IndexController::class,'index'])->name('welcome');
Route::post('/', [IndexController::class, 'contactSend'])->name('contact.send');

Route::get('/calendario',[ScheduleController::class, 'index'])->name('schedule.index');
Route::get('/servicios-rmk',[ServiceController::class, 'index'])->name('service.index');

// Administrator Dashboard routes
Route::prefix('admin')->middleware('platform')->group(function () {
   // Locations 
   Route::screen('locations', LocationListScreen::class)
      ->name('admin.location.list');
   Route::screen('location/{location?}',LocationEditScreen::class)
      ->name('admin.location.edit');
   // Services
   Route::screen('services', ServiceListScreen::class)
      ->name('admin.service.list');
   Route::screen('service/{service?}',ServiceEditScreen::class)
      ->name('admin.service.edit');
   // Categories
   Route::screen('categories', CategoryListScreen::class)
      ->name('admin.category.list');
   Route::screen('category/{category?}',CategoryEditScreen::class)
      ->name('admin.category.edit');
   // Subcategories
   Route::screen('subcategories', SubCategoryListScreen::class)
      ->name('admin.subcategory.list');
   Route::screen('subcategory/{subcategory?}',SubCategoryEditScreen::class)
      ->name('admin.subcategory.edit');   
});
