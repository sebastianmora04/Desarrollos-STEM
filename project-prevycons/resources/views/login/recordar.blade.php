@extends('layouts.ingreso')

@section('title','Prevycons - Recordar contraseña')

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

    <div>
        <img src="{{URL::asset('img/login/Icono Olvido contraseña.png')}}" class="lg:w-1/12 w-1/6 mx-auto my-1" alt="">
        <div class="my-4">
            <h1 class="titulos sm:text-[40px] text-3xl tracking-wide text-[#8b8484]">Identifica tu cuenta</h1> 
            <h4 class="lg:px-40 md:px-28 my-1 sm:text-[22px] text-lg font-semibold tracking-wide text-[#8b8484]">¿A qué correo no puedes acceder?</h4>
    </div>
    </div>

    <div class="m-5">
        <input type="email" name="correo-registro" class="form-input sm:w-7/12 w-full py-2 sm:text-xl rounded-md bordeazul font-black tracking-wide" placeholder="Correo Electronico">
    </div>

    <div class="text-center my-4 divide-y-4 divide-x-52">
        <a href="" class="font-black sm:text-xl text-center text-white bg-[#148cee]  py-2 px-6 sm:px-24 rounded-full tracking-wide">Enviar</a>
    </div>

    <div class="text-center flex justify-center space-x-2 mt-2">
        <a href="{{route('home.index')}}" class="font-black tracking-wide sm:text-xl">Volver   </a> 
        <img src="img/login/Icono Salir Azul.png" class="w-6 h-6" alt="">
    </div>


    <br><br>
    
</div>

@endsection