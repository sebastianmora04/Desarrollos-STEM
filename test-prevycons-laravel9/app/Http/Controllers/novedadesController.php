<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class novedadesController extends Controller
{
    public function index()
    {
        /*$servicios = Servicio::paginate();*/
        /* Paginar ejemplo 1-15 page 1, 16-30 page 2, etc
        $servicios = Servicio::paginate();*/
        return view('novedades');/*, compact('servicios'));  */
    }
}
