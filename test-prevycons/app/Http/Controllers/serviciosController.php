<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class serviciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::where('name','LIKE','%Gestión%')->paginate();

        $servicios2 = Servicio::where('name','NOT LIKE','%Gestión%')->get();
        /* Paginar ejemplo 1-15 page 1, 16-30 page 2, etc
        $servicios = Servicio::paginate();*/
        return view('servicios.index', compact('servicios','servicios2'));
    }

    public function show(Servicio $servicios) {

        /* $servicios = servicios::find($id); */
 
         return view('servicios.show',compact('servicios'));
     }
}
