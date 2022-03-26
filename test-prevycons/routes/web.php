<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutusController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\catalogoController;
use App\Http\Controllers\serviciosController;
use App\Http\Controllers\testController;

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
Route::get('home', homeController::class);

Route::controller(aboutusController::class)->group(function(){
    Route::get('about-us', 'index')->name('about.index');
    Route::get('about-us/{variable}/{variable2?}', 'show')->name('about.show'); /* Ruta con variable opcional */
});

Route::get('servicios', serviciosController::class)->name('servicio');

Route::get('blog', blogController::class)->name('blog');

Route::get('catalogo', catalogoController::class)->name('catalogo');

Route::any('test', testController::class)->name('test');
