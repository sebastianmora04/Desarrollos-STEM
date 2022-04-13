@extends('layouts.plantilla')

@section('title','Prevycons - Catálogo '.$producto->name)

@section('content')

<p class="text-gray-500 px-2 lg:text-base md:text-sm text-xs">{{$producto->categoria}}</p>
<br>
<!--
<div class="grid grid-cols-2 gap-4">

    <div><img src="../img/productos/{{$producto->id}}.png" class="mx-auto w-1/3 justify-center" alt="logo-img"></div>
    <div class="my-auto">
        {{$producto->name}}
        <br>
        $ {{$producto->precio}}
    </div>
    
    <div>{{$producto->descripcion}}</div>

</div> -->

<div class="sm:flex sm:flex-row">

    <div class="basis-2/5 ..."><img src="../img/productos/{{$producto->id}}.png" class="mx-auto w-2/3 justify-center" alt="logo-img"></div>
    
    <div class="basis-3/5 p-4">
        
        <p class="lg:text-2xl md:text-xl sm:text-lg font-medium">{{$producto->name}}</p>
        <br>
        $ {{$producto->precio}}
        <br><br>
        <p class="md:text-base text-sm">{{$producto->descripcion}}</p>
    
    </div>
    
</div>

<br>
<p class="md:text-xl sm:text-lg font-semibold px-2">Productos relacionados</p>


<div class="grid sm:grid-cols-4 grid-cols-2 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
    
    @foreach ($servicios2 as $item)
    <div class="max-w-sm bg-slate-50 rounded-lg shadow-md  dark:border-gray-700 snap-start">
        <p class="p-2 text-xs justify-left text-gray-600">{{$item->categoria}}</p>
        <a href="{{route('catalogo.show',$item->id)}}" class="w-2/3">
            <img class="py-2 px-8 rounded-t-lg w-full" src="../img/productos/{{$item->id}}.png" alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="{{route('catalogo.show',$item->id)}}">
                <h5 class="md:text-base sm:text-sm text-xs font-semibold tracking-tight">{{$item->name}}</h5>
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
    @endforeach

</div>

@endsection