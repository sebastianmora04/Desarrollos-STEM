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
                Todos los accidentes e incidentes laborales deben ser investigados (estudiados) de manera seria, técnica y científica para establecer cuáles fueron sus causas y conocer toda la información posible en relación a su ocurrencia para con este conocimiento planear estrategias de promoción de trabajo seguro y de prevención de los accidentes, preferentemente accidentes que generen daños en la salud importantes medidos en incapacidad, invalidez o muerte y pérdidas o costos económicos significativos.
            </p>
            <br>
            <p class="">
                En PREV&CONS SAS acompañamos todos los pasos requeridos en Investigación de accidentes de trabajo Mortales, Graves y Leves, utilizando técnicas de análisis de causalidad homologadas y de acuerdo a lo establecido en el decreto 1530 de 1996, Resolución 1401 de 2007, entre otras normas.
            </p>
            <br>
            <p class="">
            </p>
        </div>
    
        <div class="basis-1/2 w-11/12 mx-auto lg:px-0 md:px-6 px-2 text-justify sm:text-base text-sm">
            <p class="titulos sm:text-lg">Brindamos:</p>
            <ul class="my-2">
                <li> - Asesoría respecto al reporte de los accidentes para evitar comprometerse con las descripciones y datos suministrados durante el reporte a la ARL.</li>
                <li> - Asesoría para la preparación a la visita de la ARL y el Ministerio del Trabajo luego de la ocurrencia de un accidente de trabajo grave o mortal.</li>
                <li> - Implementación y seguimiento a las recomendaciones de intervención de la causalidad, derivadas de la investigación del accidente y el concepto de la ARL.</li>
                <li> - Análisis estadístico y epidemiológico de los accidentes, enfermedades e incidentes de trabajo.</li>
                <li> - Diseño, implementación, evaluación y control del programa de reporte, investigación e intervención de incidentes de trabajo.</li>
                <li> - Diseño, implementación, evaluación y control del programa de reporte, investigación e intervención de enfermedades laborales.</li>
            </ul>

            <br>

            <img src="{{URL::asset('img/prueba.png')}}" class="" alt="">

        </div>

    </div>

    <br>

    <a href="{{route('servicios.index')}}"><button class="mx-32 px-4 py-1 transition hover:scale-105 ease-in-out rounded-full font-black border volver sm:text-xl text-lg " type="submit">Volver</button></a>

    <br><br>
@endsection