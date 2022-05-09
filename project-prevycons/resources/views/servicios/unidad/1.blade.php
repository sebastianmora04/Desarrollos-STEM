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
                En Prevycons generamos relaciones de valor con nuestros clientes apoyados en el conocimiento y la experiencia de Consultoría a la medida, nuestro equipo de profesionales se encargará de estudiar y analizar cuál es la mejor estrategia para lograr una implementación adecuada de los procesos de su empresa.
            </p>
            <br>
            <p class="">
                Contribuimos en la mejora de la competitividad de las empresas y nos dedicamos a velar por la parte más importante de una organización sus empleados logrando empresas potencialmente exitosas.
            </p>
            <br>
            <p class="">
                Un Sistema de Gestión está especialmente recomendado a cualquier tipo de organización o actividad orientada a la producción de bienes o servicios, que necesiten de la gestión de sistemas una herramienta útil para mejorar su empresa. 
            </p>
        </div>
    
        <div class="basis-1/2 w-11/12 mx-auto lg:px-0 md:px-6 px-2 text-justify sm:text-base text-sm">
            <p class="titulos sm:text-lg">Entregables</p>
            <ul class="my-2">
                <li> - Definición del alcance</li>
                <li> - Definición de política y objetivos del sistema</li>
                <li> - Establecer planes de trabajo con cronograma y presupuesto</li>
                <li> - Divulgar el contenido del plan de implementación a toda la organización</li>
                <li> - Alinear los procesos de gestión </li>
                <li> - Documentar todos los sistemas y establecer controles </li>
                <li> - Elaborar los procedimientos y formatos necesarios </li>
                <li> - Implementación del plan con el apoyo de la Gerencia y los miembros de la organización</li>
            </ul>

            <br>

            <img src="{{URL::asset('img/prueba.png')}}" class="" alt="">

        </div>

    </div>

    <br>

    <a href="{{route('servicios.index')}}"><button class="mx-32 px-4 py-1 transition hover:scale-105 ease-in-out rounded-full font-black border volver sm:text-xl text-lg " type="submit">Volver</button></a>

    <br><br>
@endsection