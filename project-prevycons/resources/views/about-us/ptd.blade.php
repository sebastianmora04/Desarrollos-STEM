@extends('layouts.plantilla')

@section('title','Prevycons - Quienes somos? ')

@section('content')

    <div class="bg-cyan-600 flex flex-col  mx-auto h-auto text-slate-50">
        <div class="ml-10 mt-5">
            <br>
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl">
            <h1>Política de tratamiento de datos </h1> 
            <h1><br></h1>
        </div>
    </div>

    <br>
    <br>
    


    <!-- Depués del contenido del tratamiento -->
    <br>
    <div class="flex flex-col  mx-auto h-auto text-2xl  underline underline-offset-8 text-gray-500">
        <div class="m-auto">
            NOSOTROS
        </div>
    </div>
    <br>
    <div class="grid sm:grid-cols-3 grid-cols-2 gap-4  h-auto w-full p-4 justify-center mx-auto">
        <a href="{{route('about.index')}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
            <div class="sm:text-base text-sm text-center mx-auto font-semibold">¿QUIÉNES SOMOS?</div>
            <br>
            <h1 class="hover:bg-slate-200 hover:font-semibold sm:mx-auto sm:w-1/2 sm:text-base text-sm text-center rounded">SABER MÁS</h1>
        </a>
        <a href="{{route('about.team')}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
            <div class="sm:text-base text-sm text-center mx-auto font-semibold">NUESTRO EQUIPO</div>
            <br>
            <h1 class="hover:bg-slate-200 hover:font-semibold sm:mx-auto sm:w-1/2 sm:text-base text-sm text-center rounded">SABER MÁS</h1>
        </a>
    </div>

@endsection