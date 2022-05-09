<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlog;
use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function registro()
    {
        return view('login.registro');
    }
    public function store(StoreBlog $request){

        $usuario = New User();
        $usuario->name=$request->nombre;
        $usuario->lastname=$request->apellido;
        $usuario->email=$request->correo;
        $usuario->password=$request->contrasena;
        $usuario->username=$request->username;
        
        $usuario->save();

        return redirect()->route('login.success' , $usuario);
    }
    public function success(User $usuario)
    {
        return view('login.success',compact('usuario'));
    }
    public function recordar()
    {
        return view('login.recordar');
    }
}
