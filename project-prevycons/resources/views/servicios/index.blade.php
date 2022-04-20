@extends('layouts.plantilla')

@section('title','Prevycons - Servicios')

@section('head')
    <style>
        .linea {
        border-top: 3px solid rgb(177, 177, 177);
        height: 2px;
        padding: 0;
        margin: 20px auto 0 auto;
        }
    </style>
@endsection

@section('content')
    <br>
    <div class="azul1 lg:px-24 md:px-16 sm:px-12  flex flex-col  mx-auto h-auto text-orange-600">
        <div class="ml-10 mt-5 sm:text-base text-sm">
            Nuestra pasión es el pensamiento creativo
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl">
            <h1>El proveedor líder de soluciones </h1> 
            <h1>para clientes.</h1>
        </div>
    </div>
    <br>
    <div>
        <p></p>
    </div>
    <br>
    <div class="flex flex-col  mx-auto h-auto sm:text-3xl text-xl azul2">
        <div class="m-auto text-center sm:px-0 px-2">
            DISEÑO E IMPLEMENTACIÓN DE SISTEMAS DE GESTIÓN
        </div>
    </div>
    <br><br>
    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
    @foreach ($servicios as $item)
        <a href="{{route('servicios.show',$item->id)}}" class="bg-gradient-to-t from-blue-900 to-blue-700 box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto rounded-lg text-slate-50 w-11/12 mx-auto">
            <img src="{{$item->img}}" class="mx-auto w-1/2 justify-center"
                    alt="logo-img">
            <br>
            <div class="sm:text-base text-sm">
                <p class="text-center"><strong>{{$item->name}}</strong></p>
                <br><p class="sm:text-sm text-xs">{{$item->descripcion}}</p>
            </div>
        </a> <!-- box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto -->
    @endforeach
    </div>
    <br><br>

    <div class="linea w-5/6"></div>
    {{$servicios->links()}}
    
    <br>

    <div class="flex flex-col  mx-auto h-auto sm:text-3xl text-xl azul2">
        <div class="m-auto text-center sm:px-0 px-2">
            OTROS SERVICIOS
        </div>
    </div>

    <br>

    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4  h-auto w-11/12 p-4  justify-center mx-auto">
        @foreach ($servicios2 as $item)
        <a href="{{route('servicios.show',$item->id)}}" class="bg-gradient-to-t from-blue-900 to-blue-700 box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto rounded-lg text-slate-50 w-11/12 mx-auto">
                <img src="{{$item->img}}" class="mx-auto w-1/2 justify-center"
                        alt="logo-img">
                <br>
                <div class="sm:text-base text-sm">
                    <p class="text-center"><strong>{{$item->name}}</strong></p>
                    <br><p class="sm:text-sm text-xs">{{$item->descripcion}}</p>
                </div>
        </a>
        @endforeach
    </div>

    <br><br>

@endsection