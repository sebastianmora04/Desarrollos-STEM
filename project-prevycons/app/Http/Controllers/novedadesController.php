<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlog;
use App\Models\Novedades;
use Illuminate\Http\Request;

class novedadesController extends Controller
{

    public function index(Request $request){

        $tipo = $request->get('tipo');
        $nombre = $request->get('nombre');

        $novedades = Novedades::where('categoria','LIKE',$tipo)->where('titulo','LIKE','%'.$nombre.'%')->orderBy('created_at','desc')->paginate();
        return view('novedades.index',compact('novedades'));
    }
    public function create(){
        return view('novedades.create');
    }
    public function store(StoreBlog $request){

        $novedades = New Novedades();
        $novedades->titulo=$request->titulo;
        $novedades->informacion=$request->informacion;
        $novedades->categoria=$request->categoria;
        
        $novedades->save();

        return redirect()->route('novedades.show' , $novedades);
    }
    public function show(Novedades $novedades) {

       /* $blog = Blog::find($id); */

        return view('novedades.show',compact('novedades'));
    }
    public function edit(Novedades $novedades){

        return view('novedades.edit',compact('novedades'));

       /* return view('blog.edit',);*/
    }
    public function update(Request $request,Novedades $novedades){

        $request->validate([
            'titulo' => 'required',
            'informacion' => 'required|min:10',
            'categoria' => 'required'
        ]);

        $novedades->titulo=$request->titulo;
        $novedades->informacion=$request->informacion;
        $novedades->categoria=$request->categoria;
        
        $novedades->save();

        return redirect()->route('novedades.show' , $novedades);
    }
}
