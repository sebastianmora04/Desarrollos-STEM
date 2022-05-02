<?php

namespace App\Http\Controllers;

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
    public function success()
    {
        return view('login.success');
    }
    public function recordar()
    {
        return view('login.recordar');
    }
}
