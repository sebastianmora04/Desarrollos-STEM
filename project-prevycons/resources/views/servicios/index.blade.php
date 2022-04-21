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
    <div class="azul1 lg:px-24 md:px-16 sm:px-12  flex flex-col  mx-auto h-auto text-orange-600 titulos">
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
        <div class="m-auto text-center sm:px-0 px-2 titulos">
            DISEÑO E IMPLEMENTACIÓN DE SISTEMAS DE GESTIÓN
        </div>
    </div>
    <br><br>
    <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-rows-2 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
    @foreach ($servicios as $item)
    <div class="row-span-2 ">
        <div class="box-border h-96 p-4 shadow-lg hover:shadow-2xl w-auto rounded-lg text-slate-50 w-11/12 mx-auto bg-gradient-to-t from-[#001559] to-blue-700">
            <a href="{{route('servicios.show',$item->id)}}">
                <img src="{{$item->img}}" class="mx-auto w-3/5 justify-center"
                        alt="logo-img">
                <br>
                <div class="sm:text-base text-sm">
                    <p class="text-center titulos"><strong>{{$item->name}}</strong></p>
                    <br><p class="sm:text-sm text-xs">{{$item->descripcion}}</p>
                </div>
            </a>
        </div> <!-- box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto -->
        <br>
        <p class="text-center azul2 titulos md:text-xl">Ver Más</p>
    </div>
    @endforeach
    </div>
    <br><br>

    <div class="linea w-5/6"></div>
    {{$servicios->links()}}
    
    <br>

    <div class="flex flex-col  mx-auto h-auto sm:text-3xl text-xl azul2">
        <div class="m-auto text-center sm:px-0 px-2 titulos">
            OTROS SERVICIOS
        </div>
    </div>

    <br>

    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4  h-auto w-11/12 p-4  justify-center mx-auto">
        @foreach ($servicios2 as $item)
        <div class="row-span-2 ">
            <div class="box-border h-96 p-4 shadow-lg hover:shadow-2xl w-auto rounded-lg text-slate-50 w-11/12 mx-auto bg-gradient-to-t from-[#001559] to-blue-700">
                <a href="{{route('servicios.show',$item->id)}}">
                    <img src="{{$item->img}}" class="mx-auto w-3/5 justify-center"
                            alt="logo-img">
                    <br>
                    <div class="sm:text-base text-sm">
                        <p class="text-center titulos"><strong>{{$item->name}}</strong></p>
                        <br><p class="sm:text-sm text-xs">{{$item->descripcion}}</p>
                    </div>
                </a>
            </div> <!-- box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto -->
            <br>
            <p class="text-center azul2 titulos md:text-xl">Ver Más</p>
        </div>
        @endforeach
    </div>

    <br><br>

@endsection