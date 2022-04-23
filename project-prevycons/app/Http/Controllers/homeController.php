<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class homeController extends Controller
{ /* invoke para administrar una unica ruta */
    public function __invoke()
    {
        return view('home');
    }

    public function index()
    {
        $servicios = Servicio::where('name','LIKE','%Gestión%')->paginate();

        $servicios2 = Servicio::where('name','NOT LIKE','%Gestión%')->get();
        /* Paginar ejemplo 1-15 page 1, 16-30 page 2, etc
        $servicios = Servicio::paginate();*/
        return view('home', compact('servicios','servicios2'));
    }
}
