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
    
    <img src="{{URL::asset($servicios->img)}}" class="mx-auto w-1/6 justify-center" alt="logo-img">
    
    <br>

    <h2 class="mx-auto text-center azul2 titulos text-3xl px-[350px]"><strong>{{$servicios->name}}</strong></h2>
    
    <br>

    <div class="flex flex-row px-24 font-semibold" style="color: rgb(134, 133, 133)">

        <div class="basis-1/2 w-11/12">
            
            <p class="px-8">{{$servicios->contenido}}</p>
            <br>
            <p class="px-8">
                Toda entidad, organización o empresa del sector público o privado, que cuente con una flota de vehículos automotores o no automotores superior a diez (10) unidades, o que contrate o administre personal de conductores, deberá diseñar e implementar un Plan Estratégico de Seguridad Vial en función de su misionalidad y tamaño, de acuerdo con la metodología expedida por el Ministerio de Transporte y articularlo con su Sistema de Gestión de Seguridad y Salud en el Trabajo –SGSST”. Art. 12 de la Ley 1503 de 2011, modificado por el Art. 110 del Decreto Ley 2106 de 2019.
            </p>
        </div>
    
        <div class="basis-1/2 w-11/12">
            <p class="titulos text-lg">La formulación del PESV debe elaborarse con base en lo siguiente:</p>
            <ul class="my-2">
                <li> - Las acciones contenidas en el Art. 12 de la Ley 1503 de 2011</li>
                <li> - Los pilares estratégicos contenidos en el Plan Nacional de Seguridad Vial 2011-2021, de acuerdo con lo dispuesto en el Art. 10° del Decreto 2851 de 2013</li>
                <li> - Se deberá ajustar conforme a la Guía Metodológica para la Elaboración del Plan Estratégico de Seguridad Vial contenida en la Resolución 1565 de 2014</li>
            </ul>

            <br>

            <img src="{{URL::asset('img/prueba.png')}}" class="" alt="">

        </div>

    </div>

    <br>

    <a href="{{route('servicios.index')}}"><button class="mx-32 px-4 py-1 transition hover:scale-105 ease-in-out rounded-full font-black border volver sm:text-xl text-lg " type="submit">Volver</button></a>

    <br><br>
@endsection