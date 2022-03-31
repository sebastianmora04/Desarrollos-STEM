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
                <div class="">
                    <strong>{{$item->name}}</strong>
                    <br> {{$item->descripcion}}
                </div>
        </a>
        @endforeach
    </div>
@endsection