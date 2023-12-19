<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\MainServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});



#################### main service #################################
Route::controller(MainServiceController::class)->prefix('main-services')->name('main-services.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{main_service}', 'edit')->name('edit');
    Route::put('/{main_service}', 'update')->name('update');
    Route::delete('/{main_service}', 'destroy')->name('destroy');
  
});
####################  services #################################
Route::controller(ServiceController::class)->prefix('services')->name('services.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{service}', 'edit')->name('edit');
    Route::put('/{service}', 'update')->name('update');
    Route::delete('/{service}', 'destroy')->name('destroy');
  
});