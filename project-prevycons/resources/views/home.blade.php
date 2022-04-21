@extends('layouts.plantilla')

@section('title','Prevycons - Home')

@section('head')
    <style>
        .portafolio{
            letter-spacing: 1px;
        }
    </style>
@endsection

@section('content')

<div class="flex flex-col  mx-auto h-auto azul1 titulos">
    <div class="ml-10 mt-5">
        <br>
    </div>
    <div class="ml-10 mb-5 sm:text-5xl text-3xl text-center">
        <h1>Bienvenidos a Prevycons</h1> 
        <h1><br></h1>
    </div>
</div>



<div class="container py-5 md:px-10 sm:px-5 mx-auto">
    <div id="default-carousel" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-96 rounded-lg tamaño shadow-xl">
             <!-- Item 1 -->
            <div class="hidden duration-1000 ease-in-out shadow-3xl" data-carousel-item>
                <img src="img/celular.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <span class="sombra absolute top-1/3 left-24 text-4xl font-bold text-white text-left  sm:text-4xl">Siguenos en nuestras redes</span>
                <span class="absolute top-52 left-24  text-white text-left text-2xl font-bold"><a href="#" class="bg-blue-600 p-2 rounded-full">Saber mas</a></span>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-1000 ease-in-out shadow-xl" data-carousel-item>
                <img src="img/celular.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <span class="sombra absolute top-1/3 left-24 text-4xl font-bold text-white text-left  sm:text-4xl">Siguenos en nuestras redes</span>
                <span class="absolute top-52 left-24  text-white text-left text-2xl font-bold"><a href="#" class="bg-blue-600 p-2 rounded-full">Saber mas</a></span>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                <img src="img/celular.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <span class="sombra absolute top-1/3 left-24 text-4xl font-bold text-white text-left  sm:text-4xl">Siguenos en nuestras redes</span>
                <span class="absolute top-52 left-24  text-white text-left text-2xl font-bold"><a href="#" class="bg-blue-600 p-2 rounded-full">Saber mas</a></span></div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-20 h-2 bg-blue-700" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="bg-blue-700 w-20 h-2 " aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="bg-blue-700 w-20 h-2 " aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-16 h-16 rounded-full sm:w-16 sm:h-16 bgazulmenu2 group-focus:ring-4 group-focus:ring-white group-focus:ring-cyan-600/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none ml-20" data-carousel-next>
            <span class="inline-flex justify-center items-center w-16 h-16 rounded-full sm:w-16 sm:h-16 bgazulmenu2 group-focus:ring-4 group-focus:ring-white group-focus:ring-cyan-600/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
</div>

<br>

<div class="flex flex-col  mx-auto h-auto sm:text-3xl text-xl azul2 font-semibold portafolio">
    <div class="m-auto text-center sm:px-0 px-2">
        PORTAFOLIO DE SERVICIOS
    </div>
</div>

<br><br>

<h2 class="text-center px-60">Servicio de Salud y Seguridad Ocupacional, Sistemas de Gestión Documental y Ambiental,
    Capacitación, IPS, Auditorías, EPP, PESV</h2>

<br><br>

@endsection