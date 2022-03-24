<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutusController extends Controller
{
    public function index(){
        return "Quienes somos nosotros";
    }
    public function show($variable,$variable2=null) {
        /*return view('welcome');*/
        if($variable2){
            return "Quienes somos $variable $variable2";
        }else{
            return "Quienes somos $variable";
        }
    }
}
