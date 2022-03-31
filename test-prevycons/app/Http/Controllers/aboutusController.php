<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutusController extends Controller
{
    public function index(){
        return view('about-us.index');
    }
    public function show($variable,$variable2=null) {
        return view('about-us.show',['variable'=> $variable,'variable2'=> $variable2]);
    }
    public function team(){
        return view('about-us.team');
    }
    public function ptd(){
        return view('about-us.ptd');
    }
}
