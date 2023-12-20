<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SystemController;
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



#################### System #################################
Route::controller(SystemController::class)->prefix('user')->name('system.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
     Route::get('/reservation', 'reservation')->name('reservation');
      Route::get('/password', 'password')->name('forget');
       Route::get('/quote', 'quote')->name('quote');
  
});
#################### Main Service#################################



