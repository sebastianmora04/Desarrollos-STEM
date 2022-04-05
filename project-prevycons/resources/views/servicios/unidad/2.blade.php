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
    <div>
        <ul class="px-16">
            <li><strong>Acciones a desarrollar</strong></li>
            <li> - Sensibilización a empresas en SG- SST</li>
            <li> - Acciones  correctivas y preventivas</li>
            <li> - COPASST- Conformación y funciones</li>
            <li> - Comité de convivencia laboral - Conformación y funciones</li>
            <li> - Investigación de accidentes e incidentes de trabajo</li>
        </ul>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4  h-auto w-11/12 p-4  justify-center mx-auto">
        <ul>
            <li><strong>Aplicación del sistema de gestión</strong></li>
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
        <ul>
            <li><strong>Sistema de Vigilancia Epidemiológica</strong></li>
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
@endsection