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
        .bgfiltro{
            background-color: transparent;
            border-color: #d3dce0;
        }
    </style>
@endsection

@section('content')
    <div class="linea"></div>

    <div class="sm:p-4 md:text-base sm:text-sm text-xs ">
        <form class="px-10 py-4 bg-slate-50 rounded-lg bg-inherit" action=""><!-- bg-gray-800 -->
            
            <label for="toggle-example" class="flex relative items-center mb-4 cursor-pointer hidden">
                <input type="checkbox" id="toggle-example" class="sr-only">
                <div class="w-11 h-6 bg-gray-200 rounded-full border border-gray-200 toggle-bg dark:bg-gray-700 dark:border-gray-600"></div>
                <span class="ml-3 font-medium">Disponible</span>
            </label>

            <div class="flex flex-row">
            
                <div class="basis-3/12">
                    <select name="tipo" class="sm:w-11/12 h-9 px-2 border bgfiltro font-bold text-white rounded-lg focus:border-white" id="">
                        <option class="ml-3 sm:text-sm text-xs font-medium titulos azul2" value="">Categoría</option>
                        <option class="ml-3 sm:text-sm text-xs font-medium azul2" value="Noticias">Noticias</option>
                        <option class="ml-3 sm:text-sm text-xs font-medium azul2" value="Normas">Normas</option>
                        <option class="ml-3 sm:text-sm text-xs font-medium azul2" value="Decretos">Decretos</option>
                    </select>
                </div>
                
                <div class="basis-8/12">
                    <input style="background-color: transparent; border-color:#d3dce0" class="w-11/12 h-9 lg:ml-4 md:ml-3 ml-1 bgfiltro rounded-lg font-bold md:text-base sm:text-sm text-xs" type="text" name="nombre" placeholder="Buscar novedad" value="{{old('nombre')}}">
                </div>

                <div class="basis-1/12">
                    <button class="sm:ml-2 px-2 py-1 h-9 transition hover:border-gray-500 hover:scale-105 ease-in-out rounded font-bold border-2 border-slate-100 hover:border-white text-white" type="submit">FILTRAR</button>
                </div>

            </div>

            
            
        </form>
    </div>

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

    <div class="sm:grid md:grid-cols-3 sm:grid-cols-2 gap-4 h-auto w-11/12 p-4 justify-center mx-auto">
        
        @foreach ($novedades as $item)   
        <a href="{{route('novedades.show',$item->id)}}" class="flex flex-col items-center rounded border border-[#7398fd] shadow-md md:max-w-xl bg-gradient-to-t from-[#254ecc] to-[#001559]">
            <img class="object-cover w-full rounded-t-lg md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 lg:text-2xl md:text-[22px] text-xl font-bold tracking-tight">{{$item->titulo}}</h5>
                <p class="mb-3 font-normal md:text-base text-sm">{{$item->informacion}}</p>
            </div>
        </a>
        <br class="sm:hidden block">
        @endforeach
        
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