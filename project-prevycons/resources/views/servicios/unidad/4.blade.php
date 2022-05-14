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
            
            <p class="">{{$servicios->contenido}}</p>
            <br>
            <p class="">
                PREV&CONS realiza para sus clientes asesorías ambientales en: Manejo de residuos sólidos, Ahorro y uso eficiente de agua y energía, Política cero papeles, vertimientos, Residuos peligrosos, y todo lo concerniente a la normatividad ambiental vigente.
            </p>
            <br>
            <p class=" titulos sm:text-lg text-[17px]">Plan de gestión integral de residuos sólidos</p>
            <br>
            <p class="">
                El Plan de Gestión Integral de Residuos Sólidos está orientado a racionalizar y optimizar los recursos, mitigar los impactos negativos, contribuyendo a un cambio en la cultura y en las formas convencionales del manejo de los residuos por las empresas.
            </p>
            
        </div>
    
        <div class="basis-1/2 w-11/12 mx-auto lg:px-0 md:px-6 px-2 text-justify sm:text-base text-sm">
            <p class="titulos sm:text-lg text-[17px] sm:my-0 my-2">Acciones a desarrollar</p>
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

            <img src="{{URL::asset('img/ambiental.jpg')}}" class="" alt="">

        </div>

    </div>

    <br>

    <a href="{{route('servicios.index')}}"><button class="mx-32 px-4 py-1 transition hover:scale-105 ease-in-out rounded-full font-black border volver sm:text-xl text-lg " type="submit">Volver</button></a>

    <br><br>
@endsection