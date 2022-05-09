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

    <div class="sm:flex sm:flex-row lg:px-24 sm:px-18 font-semibold" style="color: rgb(134, 133, 133)">

        <div class="basis-1/2 w-11/12 mx-auto sm:px-8 px-2 text-justify sm:text-base text-sm">
            
            <p class="">{{$servicios->contenido}}</p>
            <br>
            <p class="">
            </p>

            <ul class="my-2 font-medium">
                <li><strong>-</strong> Evita la pérdida de la documentación, ya que todos los documentos están integrados e identificados en un único sistema</li>
                <li><strong>-</strong> Evita la pérdida de tiempo en la recuperación de la documentación</li>
                <li><strong>-</strong> Permite el control de accesos y de seguridad de la información de los documentos, e impide que terceras personas accedan a los contenidos</li>
                <li><strong>-</strong> Establece un ciclo de vida de la documentación y posibilita su destrucción de un modo seguro y certificado</li>
                <li><strong>-</strong> Establece la colaboración entre los diferentes órganos de la institución para una óptima gestión del SGD</li>
            </ul>

        </div>
        
        <br class="sm:hidden">

        <div class="basis-1/2 w-11/12 mx-auto lg:px-0 md:px-6 px-2 text-justify sm:text-base text-sm">
            
            <p class="">
                La implementación del Sistema de Gestión Documental se ejecutará por fases partiendo desde el inventario de identificación del archivo central, elaboración del programa de gestión documental, registros, clasificación, organización documental y digitalización. 
            </p>

            <br>
            
            <img src="" class="" alt="">

        </div>

    </div>

    <br>

    <a href="{{route('servicios.index')}}"><button class="mx-32 px-4 py-1 transition hover:scale-105 ease-in-out rounded-full font-black border volver sm:text-xl text-lg " type="submit">Volver</button></a>

    <br><br>


@endsection