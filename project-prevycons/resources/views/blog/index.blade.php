@extends('layouts.plantilla2')

@section('title','Prevycons - Blog')

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
    <br>
    <a href="{{route('blog.create')}}" class="">
        <button class="ml-5 px-2 py-1 transition  hover:border-gray-500 hover:scale-105 ease-in-out rounded font-semibold border-2 border-gray-300">Crear post</button>
    </a>
    <br>

    <br>

    <div class="linea"></div>
    <div class="lg:px-24 md:px-16 sm:px-12 flex flex-col mx-auto h-auto text-slate-50 titulos">
        <div class="ml-10 mt-5">
            <br>
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl">
            <h1>Blog </h1> 
            <h1></h1>
        </div>
    </div>
    <div class="linea"></div>

    <br>
    <div class="sm:grid md:grid-cols-3 sm:grid-cols-2 gap-4 h-auto w-11/12 p-4 justify-center mx-auto">
    @foreach ($blogs as $item)
        <a href="{{route('blog.show',$item->id)}}" class="flex flex-col items-center rounded border border-[#7398fd] shadow-md md:max-w-xl bg-gradient-to-t from-[#254ecc] to-[#001559]">
            <img class="object-cover w-full rounded md:rounded-none md:rounded" src="{{URL::asset('img/blogprueba.png')}}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 lg:text-2xl md:text-[22px] text-xl font-bold tracking-tight ">{{$item->titulo}}</h5>
                <p class="mb-3 font-normal md:text-base text-sm">{{$item->get_limit_informacion}}</p>
            </div>
        </a>
        <br class="sm:hidden block">
    @endforeach
    </div>

    <div class="w-10/12 mx-auto">
        {{$blogs->links()}}
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
    <div class="lg:px-8 md:px-6 sm:px-2 sm:flex sm:flex-row">
        <div class="basis-1/4 sm:ml-10">
            <img src="{{URL::asset('img/blogprueba.png')}}" alt="">
        </div>
        <div class="basis-3/4 px-4 sm:mr-8">
            <h1 class="font-semibold lg:text-xl md:text-lg text-base">Nuevo sistema de reportes</h1>
            <br>
            <p class="lg:text-lg md:text-base text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscit nulla facilisis atrrdd vero
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