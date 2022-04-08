<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class catalogoController extends Controller
{
    public function index()
    {
        $servicios = Producto::where('name','LIKE','%Gestión%')->paginate();

        $servicios2 = Producto::where('name','NOT LIKE','%Gestión%')->get();

        return view('catalogo', compact('servicios','servicios2'));
    }
}
