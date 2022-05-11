<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
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
    public function store(StoreUser $request){

        $usuario = New User();
        $usuario->name=$request->name;
        $usuario->lastname=$request->lastname;
        $usuario->email=$request->email;
        $usuario->password=$request->password;
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
