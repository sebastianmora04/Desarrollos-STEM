@extends('layouts.ingreso')

@section('title','Prevycons - Registro')

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
    <div>
        <h2 class="titulos sm:text-5xl text-3xl">comienza</h2>
        <h4 class="text-slate-400 lg:px-40 md:px-28 my-5 font-semibold tracking-wide">Verifiquemos algunos datos personales para ayudarte a configurar tu cuenta</h4>
    </div>
    <form action="{{route('registro.store')}}" method="post">

        @csrf 
        
        <input type="text" name="name" class="my-1 form-input sm:w-7/12 w-full py-2 sm:text-xl text-lg rounded-md bordeazul font-black tracking-wide" placeholder="Nombre">
        
        <input type="text" name="lastname"class="my-1 form-input sm:w-7/12 w-full py-2 sm:text-xl text-lg rounded-md bordeazul font-black tracking-wide" placeholder="Apellido">
        
        <input type="email" name="email" class="my-1 form-input sm:w-7/12 w-full py-2 sm:text-xl text-lg rounded-md bordeazul font-black tracking-wide" placeholder="Correo Electronico">
        
        <label class="relative my-1">
            <input type="password" name="password" class="my-1 form-input sm:w-7/12 w-full py-2 sm:text-xl text-lg rounded-md bordeazul font-black tracking-wide relative" placeholder="Contraseña">
            <div class="absolute right-0 block md:right-6 lg:right-6 inset-y-0 flex items-center">
                <img src="img/login/Icono Ver contraseña.png" alt="" class="w-3 md:w-6">
            </div>
        </label>
        
        <input type="text" name="username" class="my-1 form-input sm:w-7/12 w-full py-2 sm:text-xl text-lg rounded-md bordeazul font-black tracking-wide" placeholder="Nombre de usuario" maxlength="12">
        
        <br><br>

        <button type="submit" class="my-1 font-black sm:text-xl text-lg text-center text-white bg-blue-600  py-2 px-8 sm:px-32 rounded-full tracking-wide">Crear cuenta</button>

    </form>
    
    <div class="linea w-4/6"></div>
    
    <div class="mt-8">
        <p class="text-slate-400 font-black tracking-wide sm:text-xl text-base space-x-1">¿Ya tienes una cuenta? <a href="{{route('login.index')}}" class="azul2">Iniciar sesion</a></p>
        <div class="text-center flex justify-center space-x-2 mt-2">
            <a href="{{route('home.index')}}" class="font-black tracking-wide">Volver   </a> 
            <img src="img/login/Icono Salir Azul.png" class="w-4 h-4" alt="">
        </div>
    </div>

    <br><br>
    
</div>

@endsection