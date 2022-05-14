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

    <p class="mx-auto w-11/12 lg:px-32 md:px-10 px-2 font-semibold text-justify sm:text-base text-sm" style="color: rgb(134, 133, 133)">{{$servicios->descripcion}}</p>
    <br>
    <p class="mx-auto w-11/12 lg:px-32 md:px-10 px-2 font-semibold text-justify sm:text-base text-sm" style="color: rgb(134, 133, 133)">{{$servicios->contenido}}</p>
    
    <br>

    <div class="sm:flex sm:flex-row lg:px-24 sm:px-18 font-semibold" style="color: rgb(134, 133, 133)">

        <div class="basis-1/2 w-11/12 mx-auto sm:px-8 px-2 text-justify sm:text-base text-sm">
            
            <p class="">
            </p>

            <p class="titulos sm:text-lg ">Entregables</p>
            <ul class="my-2 ">
                <li> - Identificación de peligros</li>
                <li> - Documentación del sistema</li>
                <li> - Sensibilización a empresas en SG- SST</li>
                <li> - COPASST- Conformación y funciones</li>
                <li> - Comité de convivencia laboral – Conformación y funciones</li>
                <li> - Investigación de accidentes e incidentes de trabajo</li>
                <li> - Conformación y capacitación a brigadas de emergencia</li>
                <li> - Auditoría y plan de mejora</li>
            </ul>

            <br class="hidden sm:block"><br class="">

            <img src="{{URL::asset('img/gsst2.jpg')}}" class="" alt="">

            <br class="block sm:hidden">

        </div>
    
        <div class="basis-1/2 w-11/12 mx-auto lg:px-0 md:px-6 px-2 text-justify sm:text-base text-sm">
            <p class="titulos sm:text-lg">Aplicación del sistema de gestión</p>
            <ul class="my-2">
                <li> - Pautas básicas orden y aseo</li>
                <li> - Uso adecuado de EPP</li>
                <li> - Trabajo en alturas</li>
                <li> - Gestión del riesgo</li>
                <li> - Preparación y atención de emergencias. Plan de emergencias, generalidades y requisitos legales</li>
                <li> - Qué son y qué hacer en Primeros auxilios</li>
                <li> - Brigada contra incendio sin práctica</li>
                <li> - Uso y almacenamiento de Sustancias químicas </li>
                <li> - Manejo defensivo y Seguridad vial</li>
                <li> - Seguridad para peatones</li>
                <li> - Manejo y uso seguro de herramientas manuales</li>
            </ul>

            <br>
            
            <p class="titulos sm:text-lg">Sistema de vigilancia epidemiológica</p>
            <ul class="my-2">
                <li> - Levantamiento y desplazamiento manual de cargas</li>
                <li> - Cuidado de manos</li>
                <li> - Riesgo cardiovascular</li>
                <li> - Autocuidado y síndrome metabólico</li>
                <li> - Riesgo psicosocial</li>
                <li> - Autocuidado y espalda sana, higiene postural</li>
                <li> - Sensibilización de NO al consumo de Alcohol ni drogas</li>
                <li> - Capacitación de pausas saludables</li>
            </ul>

            

        </div>

    </div>

    <br>

    <a href="{{route('servicios.index')}}"><button class="mx-32 px-4 py-1 transition hover:scale-105 ease-in-out rounded-full font-black border volver sm:text-xl text-lg " type="submit">Volver</button></a>

    <br><br>


@endsection