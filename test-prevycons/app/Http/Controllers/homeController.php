<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{ /* invoke para administrar una unica ruta */
    public function __invoke(){
        return view('index');
    }
}
