<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutusController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', homeController::class);

Route::controller(aboutusController::class)->group(function(){
    Route::get('about-us', 'index');
    Route::get('about-us/{variable}/{variable2?}', 'show'); /* Ruta con variable opcional */
});






