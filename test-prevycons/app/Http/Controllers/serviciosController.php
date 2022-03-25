<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviciosController extends Controller
{
    public function __invoke()
    {
        return view('servicios');
    }
}
