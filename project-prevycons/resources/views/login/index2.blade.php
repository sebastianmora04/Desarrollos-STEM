@extends('layouts.ingreso')

@section('title','Prevycons - Login')

@section('content')

<div class="container flex flex-col w-11/12 sm:w-3/5 text-center mx-auto h-auto azul1 titulos">
    <div class="ml-10 mt-5">
        <br>
    </div>
    <div class="mb-5 text-3xl sm:text-5xl text-center">
        <h1>Prev&cons</h1> 
        <h2 class="liviano sm:font-normal text-sm sm:text-2xl">Prevención y consultoría</h2>
        <h1><br></h1>
    </div>
    <form action="">
        <div class="m-3">
            <input type="email" name="correo" class="form-input  px-12 sm:px-24 py-1 rounded-md gris1 text-left bordeazul" placeholder="Correo Electronico">
        </div>
        <div class="relative m-3">
            <input type="password" name="contraseña" class="form-input text-black px-12 sm:px-24 py-1 rounded-md relative bordeazul" placeholder="Contraseña">
            <div class="absolute right-5 sm:right-52 inset-y-0 rigth-0 flex items-center">
                <img src="img/Icono Ver contraseña.png" alt="" class="w-6">
            </div>
        </div>
    
        <div class="text-center text-slate-400 my-12 divide-y-4 divide-x-52 divide-slate-300 ">
            <a href="" class="text-center text-white bg-blue-600  py-2 px-8 sm:px-32 rounded-full">Iniciar sesión</a>
            <div class="text-center mt-12 flex justify-center space-x-2">
                <a href="" class="">Volver   </a> 
                <img src="img/Icono Salir Gris.png" class="w-5" alt="">
            </div>
        </div>
    </form>

    <div class="divide-y-4 divide-amber-800 ">
        
    </div>

</div>

@endsection