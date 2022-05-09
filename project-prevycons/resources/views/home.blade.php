@extends('layouts.plantilla')

@section('title','Prevycons - Home')

@section('head')
    <style>
        .portafolio{
            letter-spacing: 1px;
        }
        .linea {
        border-top: 3px solid rgb(207, 207, 207);
        height: 2px;
        padding: 0;
        margin: 20px auto 0 auto;
        }
        .capaatras{
            z-index: 0;
        }
        .capadelante{
            z-index: 1;
        }
    </style>
@endsection

@section('content')


<div class="flex flex-col  mx-auto h-auto azul1 titulos">
    <div class="ml-10 mt-5">
        <br>
    </div>
    <div class="sm:ml-10 sm:mb-5 sm:text-5xl text-3xl text-center">
        <h1>Bienvenidos a Prevycons</h1> 
        <h1><br class="sm:block hidden"></h1>
    </div>
</div>



<div id="slide" class="container py-5 md:px-10 sm:px-5 mx-auto capaatras">
    <div id="default-carousel" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative lg:h-96 sm:h-80 h-[260px] rounded-lg tamaño shadow-xl">
            <!-- Item 1 -->
            <div class="hidden duration-1000 ease-in-out shadow-3xl" data-carousel-item>
                <img src="img/slides/Slide redes.jpg" class="hidden lg:block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <img src="img/slides/Slide redes responsive.jpg" class="lg:hidden absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                
                <span class="lg:block hidden absolute top-52 left-24 mt-10 text-white text-left text-2xl font-bold titulos"><a href="#" class="bgazulmenu2 p-4 rounded-full">Saber más</a></span>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-1000 ease-in-out shadow-3xl" data-carousel-item>
                <img src="img/slides/slide salud trabajadores.jpg" class="hidden lg:block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <img src="img/slides/slide salud trabajadores responsive.jpg" class="lg:hidden absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                
                
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-1000 ease-in-out shadow-3xl" data-carousel-item>
                <img src="img/slides/slide oficina virtual.jpg" class="hidden lg:block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <img src="img/slides/slide oficina virtual responsive.jpg" class="lg:hidden absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                
                
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-1000 ease-in-out shadow-3xl" data-carousel-item>
                <img src="img/slides/slide capacitaciones.jpg" class="hidden lg:block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <img src="img/slides/slide capacitaciones responsive.jpg" class="lg:hidden absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                
                
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-1000 ease-in-out shadow-3xl" data-carousel-item>
                <img src="img/slides/slide gestion documental.jpg" class="hidden lg:block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <img src="img/slides/slide gestion responsive.jpg" class="lg:hidden absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="sm:w-20 w-10 h-2 bg-blue-700" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="bg-blue-700 sm:w-20 w-10 h-2 " aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="bg-blue-700 sm:w-20 w-10 h-2 " aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="bg-blue-700 sm:w-20 w-10 h-2 " aria-current="false" aria-label="Slide 3" data-carousel-slide-to="3"></button>
            <button type="button" class="bg-blue-700 sm:w-20 w-10 h-2 " aria-current="false" aria-label="Slide 3" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="hidden sm:block flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-12 sm:h-12 bgazulmenu2 group-focus:ring-4 group-focus:ring-white group-focus:ring-cyan-600/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="hidden sm:block flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none ml-20" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-12 sm:h-12 bgazulmenu2 group-focus:ring-4 group-focus:ring-white group-focus:ring-cyan-600/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
</div>

<br>

<div class="flex flex-col  mx-auto h-auto sm:text-3xl text-xl azul2 font-semibold portafolio">
    <div class="m-auto text-left sm:text-center sm:px-0 px-2">
        PORTAFOLIO DE SERVICIOS
    </div>
</div>

<br><br>

<h2 class="text-center px-5 md:px-32 lg:px-60">Servicio de Salud y Seguridad Ocupacional, Sistemas de Gestión Documental y Ambiental,
    Capacitación, IPS, Auditorías, EPP, PESV</h2>

<br><br class="sm:block hidden">

    <div class="grid lg:grid-cols-4 grid-cols-2 grid-rows-2 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
        @foreach ($servicios as $item)
        <div class="row-span-2">
            <div class="box-border sm:h-60 h-32 p-4 shadow-lg hover:shadow-2xl w-auto rounded-lg text-slate-50 w-11/12 mx-auto bg-gradient-to-t from-[#001559] to-blue-700 flex sm:items-start items-center">
                <a href="{{route('servicios.show',$item->id)}}">
                    <div class="sm:text-base text-sm">
                        <div class="text-center titulos align-middle"><strong>{{$item->name}}</strong></div>
                        <br class="sm:block hidden"><p class="sm:text-sm text-xs sm:block hidden">{{$item->descripcion}}</p>
                    </div>
                </a>
            </div> <!-- box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto -->
            
        </div>
        @endforeach
    </div>

    <br><br class="sm:block hidden">

    <div class="linea w-5/6"></div>
    {{$servicios->links()}}
    
    <br>

    <div class="flex flex-col  mx-auto h-auto sm:text-3xl text-xl azul2">
        <div class="m-auto text-center sm:px-0 px-2 titulos">
            OTROS SERVICIOS
        </div>
    </div>

    <br>

    <div class="grid lg:grid-cols-4 grid-cols-2 grid-rows-2 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
        @foreach ($servicios2 as $item)
        <div class="row-span-2">
            <div class="box-border sm:h-64 h-36 p-4 shadow-lg hover:shadow-2xl w-auto rounded-lg text-slate-50 w-11/12 mx-auto bg-gradient-to-t from-[#001559] to-blue-700 flex sm:items-start items-center">
                <a href="{{route('servicios.show',$item->id)}}">
                    <div class="sm:text-base text-sm">
                        <div class="text-center titulos"><strong>{{$item->name}}</strong></div>
                        <br class="sm:block hidden"><p class="sm:text-sm text-xs sm:block hidden">{{$item->descripcion}}</p>
                    </div>
                </a>
            </div> <!-- box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto -->
            
        </div>
        @endforeach
    </div>
    <!-- FIN servicios -->

<!-- Hasta acá contenido en home -->

<br><br>

@endsection