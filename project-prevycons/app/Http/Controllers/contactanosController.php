<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactanosController extends Controller
{
    public function index()
    {
        /*$servicios = Servicio::paginate();*/
        /* Paginar ejemplo 1-15 page 1, 16-30 page 2, etc
        $servicios = Servicio::paginate();*/
        return view('contacto.index');/*, compact('servicios'));  */
    }

    public function mail(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'correo'=> 'required|email',
            'telefono'=> 'required',
            'tema'=> 'required',
            'descripcion'=> 'required',
        ]);

        $correo= new ContactoMailable($request->all());
        Mail::to('contacto@prevycons.com')->send($correo);
        return view('contacto.index');
    }
}
