@extends('layouts.plantilla')

@section('title','Prevycons - Servicio '. $servicios->name)

@section('head')
    <style>    
    .volver{
        color: rgb(0, 21, 89);
        border-color: rgb(0, 21, 89)
    }
    </style>
@endsection

@section('content')
    
    <img src="{{URL::asset($servicios->img . '.png')}}" class="mx-auto w-1/6 justify-center" alt="logo-img">
    
    <br>

    <h2 class="mx-auto text-center azul2 titulos sm:text-3xl text-[22px] xl:px-[350px] lg:px-[250px] md:px-[100px]"><strong>{{$servicios->name}}</strong></h2>
    
    <br>

    <div class="sm:flex sm:flex-row lg:px-24 sm:px-18 font-semibold" style="color: rgb(134, 133, 133)">

        <div class="basis-1/2 w-11/12 mx-auto sm:px-8 px-2 text-justify sm:text-base text-sm">
            <p class="">{{$servicios->descripcion}}</p>
            <br>
            <p class="">{{$servicios->contenido}}</p>
            <br>
            <p class="">
                Para este cumplimiento se debe desarrollar un programa de capacitación que facilite la identificación de peligros y el control de riesgos relacionados con el trabajo a todo el personal involucrado. Este procedimiento debe ser impartido por personal idóneo y en conformidad a la normatividad vigente para su correcta divulgación o comunicación de acuerdo a la necesidad de cada empresa por su actividad económica.
            </p>
            <br>
            <p class="">
                Diseñamos y ejecutamos su plan de capacitación anual de acuerdo a los lineamientos del Sistema de Gestión de seguridad y salud en el trabajo. (Decreto 1072 de 2015) en cuanto a su administración, aplicación y evaluación.
            </p>
            <br>
        </div>
    
        <div class="basis-1/2 w-11/12 mx-auto lg:px-0 md:px-6 px-2 text-justify sm:text-base text-sm">
            <p class="titulos sm:text-lg">Beneficios que encuentra en PREV&CONS:</p>
            <ul class="my-2">
                <li> - Dirigidos por profesionales competentes y con experiencia en cada temática</li>
                <li> - Diversidad de temas, permitiendo cubrir todas las necesidades de formación requeridas por la empresa de acuerdo a cada sistema de gestión</li>
                <li> - Capacitaciones certificadas y evaluadas que contribuyen al SG SST</li>
                <li> - Temas adaptados a las necesidades de la empresa</li>
                <li> - Completa disponibilidad en horarios, adaptándonos a la empresa</li>
            </ul>

            <br>

            <img src="{{URL::asset('img/prueba.png')}}" class="" alt="">

        </div>

    </div>

    <br>

    <a href="{{route('servicios.index')}}"><button class="mx-32 px-4 py-1 transition hover:scale-105 ease-in-out rounded-full font-black border volver sm:text-xl text-lg " type="submit">Volver</button></a>

    <br><br>
@endsection