@extends('layouts.plantilla')

@section('title','Prevycons - Servicios')

@section('content')
    <div class="bg-orange-600 flex flex-col  mx-auto h-auto text-slate-50">
        <div class="ml-10 mt-5">
            Nuestra pasión es el pensamiento creativo
        </div>
        <div class="ml-10 mb-5 text-5xl">
            <h1>El proveedor líder de soluciones </h1> 
            <h1>para clientes.</h1>
        </div>
    </div>
    <br>
    <div>
        <p></p>
    </div>
    <br>
    <div class="flex flex-col  mx-auto h-auto text-2xl  underline underline-offset-8 text-gray-500">
        <div class="m-auto">
            DISEÑO E IMPLEMENTACIÓN DE SISTEMAS DE GESTIÓN
        </div>
    </div>
    <br>
    <div class="grid grid-cols-4 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
    @foreach ($servicios as $item)
        <a href="{{route('servicios.show',$item->id)}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
            <img src="{{$item->img}}" class="mx-auto w-1/2 justify-center"
                    alt="logo-img">
            <br>
            <div class="">
                <strong>{{$item->name}}</strong>
                <br>{{$item->descripcion}}
            </div>
        </a> <!-- box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto -->
    @endforeach
    </div>
    {{$servicios->links()}}
    <br>
    <div class="flex flex-col  mx-auto h-auto text-xl  underline underline-offset-8 text-gray-500">
        <div class="m-auto">
            OTROS SERVICIOS
        </div>
    </div>
    <br>
    <div class="grid grid-cols-4 gap-4  h-auto w-11/12 p-4  justify-center mx-auto">
        @foreach ($servicios2 as $item)
        <a href="{{route('servicios.show',$item->id)}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
                <img src="{{$item->img}}" class="mx-auto w-1/2 justify-center"
                        alt="logo-img">
                <br>
                <div class="">
                    <strong>{{$item->name}}</strong>
                    <br> {{$item->descripcion}}
                </div>
        </a>
        @endforeach
    </div>


    <div class="grid grid-cols-4 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
        @foreach ($servicios as $item)
        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-lg hover:shadow-2xl">
            <a href="{{route('servicios.show',$item->id)}}">
                <img class="mx-auto w-1/2 justify-center py-2 rounded-t-lg" src="{{$item->img}}" alt="" />
            </a>
            <div class="p-5">
                <a href="{{route('servicios.show',$item->id)}}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$item->name}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">{{$item->descripcion}}</p>
                <a href="{{route('servicios.show',$item->id)}}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection