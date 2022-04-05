@extends('layouts.plantilla')

@section('title','Prevycons - Servicio '. $servicios->name)

@section('content')
    <a class="px-16" href="{{route('servicios.index')}}">Regresar</a>
    <img src="{{URL::asset($servicios->img)}}" class="mx-auto w-1/12 justify-center" alt="logo-img">
    <h2 class="mx-auto text-center"><strong>{{$servicios->name}}</strong></h2>
    <br>
    <p class="px-8">{{$servicios->descripcion}}</p>
    <br>
    <p class="px-8">{{$servicios->contenido}}</p>
    <br>
    <p class="px-8">
        En Prevycons generamos relaciones de valor con nuestros clientes apoyados en el conocimiento y la experiencia de Consultoría a la medida, nuestro equipo de profesionales se encargará de estudiar y analizar cuál es la mejor estrategia para lograr una implementación adecuada de los procesos de su empresa.
    </p>
    <br>
    <p class="px-8">
        Contribuimos en la mejora de la competitividad de las empresas y nos dedicamos a velar por la parte más importante de una organización sus empleados logrando empresas potencialmente exitosas.
    </p>
    <br>
    <p class="px-8">
        Un Sistema de Gestión está especialmente recomendado a cualquier tipo de organización o actividad orientada a la producción de bienes o servicios, que necesiten de la gestión de sistemas una herramienta útil para mejorar su empresa. 
    </p>
    <br>
    <div>
        <ul class="px-16">
            <li><strong>Entregables</strong></li>
            <li> - Definición del alcance</li>
            <li> - Definición de política y objetivos del sistema</li>
            <li> - Establecer planes de trabajo con cronograma y presupuesto</li>
            <li> - Divulgar el contenido del plan de implementación a toda la organización</li>
            <li> - Alinear los procesos de gestión </li>
            <li> - Documentar todos los sistemas y establecer controles </li>
            <li> - Elaborar los procedimientos y formatos necesarios </li>
            <li> - Implementación del plan con el apoyo de la Gerencia y los miembros de la organización</li>
        </ul>
    </div>
    <br>
@endsection