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
            Diseño e implementación de Sistemas de Gestión
        </div>
    </div>
    <br>
    <div class="grid grid-cols-4 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
    @foreach ($servicios as $item)
    <a href="">
        <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-full">
            <img src="img/pagina web_normal.png" class="w-1/3 justify-center object-center"
                    alt="logo-img">
            <div class="">{{$item->name}} - {{$item->descripcion}}</div>
        </div>
    </a>
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
        @foreach ($servicios as $item)
            <div class="box-border h-auto w-auto p-4 border-4 border-slate-300">
                <img src="img/pagina web_normal.png" class="w-1/3 justify center"
                        alt="logo-img">
                <a href=""><div class="">{{$item->name}} - {{$item->descripcion}}</div></a>
            </div>
        @endforeach
    </div>
@endsection