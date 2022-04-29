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
                PREV&CONS realiza para sus clientes asesorías ambientales en: Manejo de residuos sólidos, Ahorro y uso eficiente de agua y energía, Política cero papeles, vertimientos, Residuos peligrosos, y todo lo concerniente a la normatividad ambiental vigente.
            </p>
            <br>
            <p class="px-8 titulos text-lg">Plan de gestión integral de residuos sólidos</p>
            <br>
            <p class="px-8">
                El Plan de Gestión Integral de Residuos Sólidos está orientado a racionalizar y optimizar los recursos, mitigar los impactos negativos, contribuyendo a un cambio en la cultura y en las formas convencionales del manejo de los residuos por las empresas.
            </p>
            
        </div>
    
        <div class="basis-1/2 w-11/12">
            <p class="titulos text-lg">Acciones a desarrollar</p>
            <ul class="my-2">
                <li> - Cómo desarrollar un plan de manejo ambiental</li>
                <li> - Reducción, reutilización y reciclaje de residuos sólidos</li>
                <li> - Prevención de riesgos</li>
                <li> - Buenas prácticas ambientales</li>
                <li> - Saneamiento ambiental</li>
                <li> - Capacitación “El Agua”</li>
                <li> - Capacitación Uso Racional y Ahorro de Energía</li>
                <li> - Gestión del riesgo</li>
            </ul>

            <br>

            <img src="{{URL::asset('img/prueba.png')}}" class="" alt="">

        </div>

    </div>

    <br>

    <a href="{{route('servicios.index')}}"><button class="mx-32 px-4 py-1 transition hover:scale-105 ease-in-out rounded-full font-black border volver sm:text-xl text-lg " type="submit">Volver</button></a>

    <br><br>
@endsection