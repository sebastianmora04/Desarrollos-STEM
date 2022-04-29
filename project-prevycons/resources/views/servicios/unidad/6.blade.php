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

    <div class="flex flex-row px-28 font-semibold" style="color: rgb(134, 133, 133)">

        <div class="basis-1/2 w-11/12 px-4">
            <p class="">{{$servicios->contenido}}</p>
            <br>
            <p class="">
                Evaluamos el desempeño de procesos de negocios para validar que tanto están aportando al cumplimiento de los objetivos corporativos de la organización y así detectar posibles desviaciones y lograr una mejora en sus operaciones, de acuerdo a los requisitos de cada norma.
                <br><br>
                Para el sistema de gestión de salud y seguridad en el trabajo, se realiza de acuerdo al Decreto 1072 del 2015, donde el empleador debe realizar una auditoría anual, la cual será planificada con la participación del Comité Paritario o Vigía de seguridad y salud en el trabajo.
            </p>
            <br>
            <p class="">
            </p>

        </div>
    
        <div class="basis-1/2 w-11/12 px-2">
            
            <p>
                PREV&CONS SAS realiza auditorías internas a los sistemas de SALUD Y SEGURIDAD EN EL TRABAJO de acuerdo al decreto 1072 de 2015, sistemas de gestión de calidad ISO 9001:2015, ISO 14001:2015 Y OHSAS 18001:2007. 
            </p>

            <br>
            
            <img src="{{URL::asset('img/prueba.png')}}" class="" alt="">

        </div>

    </div>

    <br>

    <a href="{{route('servicios.index')}}"><button class="mx-32 px-4 py-1 transition hover:scale-105 ease-in-out rounded-full font-black border volver sm:text-xl text-lg " type="submit">Volver</button></a>

    <br><br>


@endsection