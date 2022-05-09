@extends('layouts.ingreso')

@section('title','Prevycons - Cuenta creada satisfactoriamente')

@section('head')
    <style>
        .linea {
        border-top: 3px solid rgb(207, 207, 207);
        height: 2px;
        padding: 0;
        margin: 20px auto 0 auto;
        }
    </style>
@endsection

@section('content')
    
<div class="container flex flex-col w-11/12 sm:w-3/5 text-center m-auto h-auto">
    <div class="ml-10 mt-5">
        <br>
    </div>
    <div class="mb-5 text-4xl sm:text-[52px] text-center">
        <img src="{{URL::asset('img/login/Registro exitoso.png')}}" class="w-1/4 mx-auto" alt="">
        <br>
        <h1 class="titulos tracking-wide">¡Listo!</h1>
    </div>
    
    <div>
        <h4 class="lg:px-40 md:px-28 my-5 font-semibold tracking-wide text-xl sm:text-[23px] text-[#8b8484]">Se ha creado la siguiente cuenta:</h4>
    </div>
    
    <div>
        <h2 class="text-2xl sm:text-[38px] text-[#03a452] titulos tracking-wide"><em>{{$usuario->email}}</em></h2>
    </div>

    <div>
        <p class="lg:px-24 md:px-20 my-5 font-semibold tracking-wide text-[19px] sm:text-[22px] text-[#8b8484]">
            Puedes usar esta cuenta para comentar y estar al tanto de las noticias y novedades, también puedes
            iniciar desde cualquier dispositivo.
        </p>
    </div>

    <div class="text-center flex justify-center space-x-2 mt-2">
        <a href="{{route('login.index')}}" class="font-black tracking-wide text-xl sm:text-3xl">Inicia sesión   </a> 
        <img src="../../img/login/Icono Salir Azul.png" class="sm:w-7 sm:h-7 w-5 h-5" alt="">
    </div>

    <br><br>
    
</div>

@endsection