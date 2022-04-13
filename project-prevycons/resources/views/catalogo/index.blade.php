@extends('layouts.plantilla')

@section('title','Prevycons - Catálogo')

@section('content')

    <div class="bg-emerald-600 flex flex-col  mx-auto h-auto text-slate-50">
        <div class="ml-10 mt-5">
            <br>
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl">
            <h1>Catálogo </h1> 
            <h1><br></h1>
        </div>
    </div>
    <br>
    <div>
        <p></p>
    </div>
    <br>
    <div class="flex flex-col  mx-auto h-auto sm:text-2xl text-lg underline underline-offset-8 text-gray-500">
        <div class="m-auto text-center sm:px-0 px-2">
            ELEMENTOS DE PROTECCIÓN PERSONAL - EPP
        </div>
    </div>
    <br>
    <div class="sm:flex sm:flex-row bg-gray-300">
        <div class="sm:basis-1/3 sm:p-4 sm:text-base text-sm">
            <form class="px-10 py-4 bg-gray-800 rounded-lg" action="">
                <p class="px-0 py-2 text-slate-50 sm:text-lg font-semibold">Filtros</p>
                <br>
                <label for="toggle-example" class="flex relative items-center mb-4 cursor-pointer">
                    <input type="checkbox" id="toggle-example" class="sr-only">
                    <div class="w-11 h-6 bg-gray-200 rounded-full border border-gray-200 toggle-bg dark:bg-gray-700 dark:border-gray-600"></div>
                    <span class="ml-3 font-medium text-slate-50">Disponible</span>
                </label>

                <p class="ml-3 font-medium text-slate-50">Nombre</p>
                <input class="w-full" type="text" name="nombre" placeholder="Ingrese nombre" value="{{old('nombre')}}">
                
                <br><br>
    
                <p class="ml-3 font-medium text-slate-50">Sectores</p>
                <select name="sector" class="w-full" id="">
                    <option value=""></option>
                    <option value="">Industrial</option>
                    <option value="">Médico</option>
                    <option value="">Manufactura</option>
                    <option value="">Comercial</option>
                </select>

                <br><br>

                <p class="ml-3 font-medium text-slate-50">Categorías</p>
                <select name="tipo" class=" w-full form-control mr-sm-2 rounded font-medium text-gray-900 dark:text-gray-600" id="exampleFormControlSelect1">
                    <option value="{{old('tipo')}}"></option>
                    <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION MANOS">Protección manos</option>
                    <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION CABEZA">Protección cabeza</option>
                    <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION RESPIRATORIA">Protección respiratoria</option>
                    <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION CORPORAL">Protección corporal</option>
                    <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION VISUAL">Protección visual</option>
                    <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION AUDITIVA">Protección auditiva</option>
                    <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="TRABAJO ">Trabajo seguro en alturas</option>
                </select>

                <br><br>

                <button class="ml-3 font-medium hover:text-gray-600 text-slate-50 border-2 border-gray-300 p-1 rounded hover:bg-gray-200" type="submit">FILTRAR</button>

            </form>
        </div>

        <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
            @foreach ($servicios2 as $item)
                <!-- Prueba -->
                <div class="max-w-sm bg-slate-50 rounded-lg shadow-md  dark:border-gray-700">
                    <p class="p-2 text-xs justify-left text-gray-600">{{$item->categoria}}</p>
                    <a href="{{route('catalogo.show',$item->id)}}" class="w-full">
                        <img class="py-2 px-8 rounded-t-lg w-full" src="img/productos/{{$item->id}}.png" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="{{route('catalogo.show',$item->id)}}">
                            <h5 class="md:text-lg font-semibold tracking-tight">{{$item->name}}</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5 hidden">
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                        </div>
                        <div class="flex justify-between items-center hidden">
                            <span class="text-3xl font-bold text-white">$599</span>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                    </div>
                </div>

                <!-- Normal -->
                <!--<a href="{{route('catalogo.show',$item->id)}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
                    <p class="text-xs justify-left text-gray-400">{{$item->categoria}}</p>
                    <br>
                    <img src="img/productos/{{$item->id}}.png" class="mx-auto w-1/2 justify-center"
                            alt="logo-img">
                    <br>
                    <div class="sm:text-base text-sm">
                        <strong>{{$item->name}}</strong>
                        <br>
                    </div> 
                </a> --> <!-- box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto -->
            @endforeach
        </div>
        {{$servicios->links()}}

    </div>

    
    </div>



@endsection