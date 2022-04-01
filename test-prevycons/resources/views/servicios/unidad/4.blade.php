@extends('layouts.plantilla')

@section('title','Prevycons - Servicio '. $servicios->name)

@section('content')
    <img src="{{URL::asset($servicios->img)}}" class="mx-auto w-1/12 justify-center" alt="logo-img">
    <h2 class="mx-auto text-center"><strong>{{$servicios->name}}</strong></h2>
    <br>
    <p class="px-8">{{$servicios->descripcion}}</p>
    <br>
    <p class="px-8">{{$servicios->contenido}}</p>
    <br>
    <div>
        <ul class="px-16">
            <li><strong>Acciones a desarrollar</strong></li>
            <li> - Cómo desarrollar un plan de manejo ambiental</li>
            <li> - Reducción, reutilización y reciclaje de residuos sólidos</li>
            <li> - Prevención de riesgos</li>
            <li> - Buenas prácticas ambientales</li>
            <li> - Saneamiento ambiental</li>
            <li> - Capacitación “El Agua”</li>
            <li> - Capacitación Uso Racional y Ahorro de Energía</li>
            <li> - Gestión del riesgo</li>
        </ul>
    </div>
@endsection