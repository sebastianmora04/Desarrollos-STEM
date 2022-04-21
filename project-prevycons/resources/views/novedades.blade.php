@extends('layouts.plantilla2')

@section('title','Prevycons - Novedades')

@section('head')
    <style>
        .linea {
        border-top: 1px solid #7398fd;
        height: 2px;
        padding: 0;
        margin: 20px auto 0 auto;
        }
    </style>
@endsection

@section('content')
    <div class="linea"></div>
    <div class="lg:px-24 md:px-16 sm:px-12 flex flex-col mx-auto h-auto text-slate-50 titulos">
        <div class="ml-10 mt-5">
            <br>
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl">
            <h1>Novedades </h1> 
            <h1></h1>
        </div>
    </div>
    <div class="linea"></div>
    <br>

    <div class="grid grid-cols-3 gap-4 h-auto w-11/12 p-4 justify-center mx-auto">
        
        <a href="#" class="flex flex-col items-center rounded border border-[#7398fd] shadow-md md:flex-row md:max-w-xl bg-gradient-to-t from-blue-700 to-[#001559]">
            <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Salud ocupacional</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>

        <a href="#" class="flex flex-col items-center rounded border border-[#7398fd] shadow-md md:flex-row md:max-w-xl bg-gradient-to-t from-blue-700 to-[#001559]">
            <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Salud ocupacional</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>

        <a href="#" class="flex flex-col items-center rounded border border-[#7398fd] shadow-md md:flex-row md:max-w-xl bg-gradient-to-t from-blue-700 to-[#001559]">
            <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Salud ocupacional</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
        
    </div>

    <div class="linea"></div>

    <br><br>
    
    <div class="lg:px-8 md:px-6 sm:px-2 flex flex-col mx-auto h-auto text-slate-50 titulos">
        <div class="ml-10 mb-5 sm:text-4xl text-2xl">
            <h1>NOTICIAS RECIENTES </h1>
        </div>
    </div>

    <div class="linea w-11/12"></div>

    <br>

    <!-- Noticias desde acá -->
    <div class="lg:px-8 md:px-6 sm:px-2 flex flex-row">
        <div class="basis-1/4 ml-10">01</div>
        <div class="basis-3/4 mr-10">
            <h1 class="font-semibold sm:text-xl text-lg">Nuevo sistema de reportes</h1>
            <br>
            <p class="sm:text-lg text-base">Lorem ipsum dolor sit amet, consectetuer adipiscit nulla facilisis atrrdd vero
                erosasd et accumsana et iusto odio dignisqwesimismod tincidunt uat, vlum
                dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio digssimt ut
                laoreet dolore magna. 
            </p>
        </div>
    </div>

    <div class="linea w-11/12"></div> <br>

    <div class="lg:px-8 md:px-6 sm:px-2 flex flex-row">
        <div class="basis-1/4 ml-10">01</div>
        <div class="basis-3/4 mr-10">
            <h1 class="font-semibold sm:text-xl text-lg">Nuevo sistema de reportes</h1>
            <br>
            <p class="sm:text-lg text-base">Lorem ipsum dolor sit amet, consectetuer adipiscit nulla facilisis atrrdd vero
                erosasd et accumsana et iusto odio dignisqwesimismod tincidunt uat, vlum
                dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio digssimt ut
                laoreet dolore magna. 
            </p>
        </div>
    </div>

    <div class="linea w-11/12"></div> <br>

    <div class="lg:px-8 md:px-6 sm:px-2 flex flex-row">
        <div class="basis-1/4 ml-10">01</div>
        <div class="basis-3/4 mr-10">
            <h1 class="font-semibold sm:text-xl text-lg">Nuevo sistema de reportes</h1>
            <br>
            <p class="sm:text-lg text-base">Lorem ipsum dolor sit amet, consectetuer adipiscit nulla facilisis atrrdd vero
                erosasd et accumsana et iusto odio dignisqwesimismod tincidunt uat, vlum
                dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio digssimt ut
                laoreet dolore magna. 
            </p>
        </div>
    </div>

    <br>
    <!-- Fin noticias -->

@endsection