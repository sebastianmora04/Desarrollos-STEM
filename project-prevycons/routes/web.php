<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutusController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\catalogoController;
use App\Http\Controllers\contactanosController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\novedadesController;
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

//Route::get('/', function () {
 //   return view('welcome');
//});

//Route::get('home',function(){
 //   return view('home');
//});



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
Route::get('/', homeController::class)->name('/');
Route::controller(homeController::class)->group(function(){
    Route::get('home', 'index')->name('home.index');
});

Route::controller(aboutusController::class)->group(function(){
    Route::get('about-us', 'index')->name('about.index');
    Route::get('about-us/team', 'team')->name('about.team');
    Route::get('about-us/ptd', 'ptd')->name('about.ptd');
    Route::get('about-us/{variable}/{variable2?}', 'show')->name('about.show'); /* Ruta con variable opcional */
});

/*Route::get('servicios', [serviciosController::class, 'index'])->name('servicio.index');*/
Route::controller(serviciosController::class)->group(function(){
    Route::get('servicios', 'index')->name('servicios.index');
    Route::get('servicios/{servicios}', 'show')->name('servicios.show');
});

Route::controller(blogController::class)->group(function(){
    Route::get('blog', 'index')->name('blog.index');
    Route::get('blog/create','create')->name('blog.create');
    Route::post('blog', 'store')->name('blog.store');
    Route::get('blog/{blog}', 'show')->name('blog.show'); /* Ruta con variable opcional */
    Route::get('blog/{blog}/edit','edit')->name('blog.edit');
    Route::put('blog/{blog}','update')->name('blog.update');
});

Route::controller(catalogoController::class)->group(function(){
    Route::get('catalogo','index')->name('catalogo.index');
    Route::get('catalogo/{producto}', 'show')->name('catalogo.show');
});

Route::any('novedades', [novedadesController::class, 'index'])->name('novedades.index');


Route::any('test', testController::class)->name('test');

Route::controller(contactanosController::class)->group(function(){
    Route::get('hireus', 'index')->name('hire.index');
    Route::post('hireus', 'mail')->name('hire.mail');
});

Route::controller(loginController::class)->group(function(){
    Route::get('login', 'index')->name('login.index');
});
