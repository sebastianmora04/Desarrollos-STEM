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

        $servicios2 = Producto::where('categoria','LIKE',$tipo)->where('name','LIKE','%'.$nombre.'%')->orderBy('created_at','desc')->simplePaginate(8);

        return view('catalogo.index', compact('servicios','servicios2'));
    }

    public function show(Producto $producto) 
    {   
        $tipo = $producto->categoria;
        $name = $producto->name;
        /* $blog = Blog::find($id); */
        $servicios2 = Producto::where('categoria','LIKE',$tipo)->where('name','NOT LIKE',$name)->simplePaginate(4);
 
        return view('catalogo.show',compact('producto','servicios2'));
    }

}
