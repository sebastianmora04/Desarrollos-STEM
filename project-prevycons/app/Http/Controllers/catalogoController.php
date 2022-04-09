<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class catalogoController extends Controller
{
    public function index(Request $request)
    {
        $tipo = $request->get('tipo');
        $nombre = $request->get('nombre');

        $servicios = Producto::where('name','LIKE','%Gestión%')->paginate();

        $servicios2 = Producto::where('categoria','LIKE',$tipo)->where('name','LIKE','%'.$nombre.'%')->get();

        return view('catalogo', compact('servicios','servicios2'));
    }
}
