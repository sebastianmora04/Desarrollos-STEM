@extends('layouts.ingreso')

@section('title','Prevycons - Login')

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

<div class="container flex flex-col w-11/12 sm:w-3/5 text-center mx-auto h-auto">
    <div class="ml-10 mt-5">
        <br>
    </div>
    <div class="mb-5 text-4xl sm:text-6xl text-center">
        <img src="{{URL::asset('img/Logo prevycons.png')}}" class="w-1/4 mx-auto" alt="">
        <h1 class="titulos">Prev&cons</h1> 
        <h2 class="font-black text-xl sm:text-[28px]">Prevención y Consultoría</h2>
    </div>
    <br>
    <form action="" class="">

        <div class="m-3">
            <input type="email" name="correo" class="form-input sm:w-7/12 w-full py-2 sm:text-xl text-lg rounded-md bordeazul font-black tracking-wide" placeholder="Correo Electrónico">
        </div>

        <div class="relative m-3">
            <input type="password" name="contraseña" class="form-input sm:w-7/12 w-full py-2 sm:text-xl text-lg rounded-md relative bordeazul font-black tracking-wide" placeholder="Contraseña">
            <div class="absolute right-5 sm:right-44 inset-y-0 flex items-center">
                <img src="img/login/Icono Ver contraseña.png" alt="" class="w-6">
            </div>
        </div>
    
        <div class="text-center text-slate-500 my-12 divide-y-4 divide-x-52 divide-slate-300 ">
            <a href="" class="font-black sm:text-xl text-lg text-center text-white bg-blue-600  py-2 px-8 sm:px-32 rounded-full tracking-wide">Iniciar sesión</a>            
        </div>
        
        <div class="linea w-4/6"></div>

        <div class="text-slate-400 text-center sm:text-xl text-base mt-8 flex justify-center space-x-2">
            <a href="{{route('home.index')}}" class="font-black tracking-wide">¿No puedes iniciar sesión?</a> 
            <img src="img/login/Icono Salir Gris.png" class="w-6 h-6" alt="">
        </div>

        <div class="text-slate-400 text-center sm:text-xl text-base mt-2 flex justify-center space-x-2">
            <a href="{{route('login.registro')}}" class="font-black tracking-wide">¿No tienes cuenta?<a href="{{route('login.registro')}}" class="font-black tracking-wide azul2">Regístrate</a></a> 
            <img src="img/login/Icono Salir Azul.png" class="w-6 h-6" alt="">
        </div>
        
        <div class="text-slate-400 text-center mt-2 flex justify-center space-x-1">
            <a href="{{route('home.index')}}" class="font-black tracking-wide azul2">Volver </a> 
            <img src="img/login/Icono Salir Azul.png" class="w-4 h-4" alt="">
        </div>
    </form>

    <br><br>


</div>

@endsection