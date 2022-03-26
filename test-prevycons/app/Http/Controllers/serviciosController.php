<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class serviciosController extends Controller
{
    public function __invoke()
    {
        $servicios = Servicio::paginate();
        /* Paginar ejemplo 1-15 page 1, 16-30 page 2, etc
        $servicios = Servicio::paginate();*/
        return view('servicios', compact('servicios'));
    }
}
