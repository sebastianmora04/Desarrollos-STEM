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
    <div class="flex flex-row">
        <div class="basis-1/3 p-4 sm:text-base text-sm">
            <form action="">
                <input type="checkbox" name="disponible" id="" value="disponible"> Disponible
                
                <br><br>

                <p>Sectores</p>
                <select name="sector" id="">
                    <option value=""></option>
                    <option value="">Industrial</option>
                    <option value="">Médico</option>
                    <option value="">Manufactura</option>
                    <option value="">Comercial</option>
                </select>
                
                <br><br>

                <input type="text" name="nombre" placeholder="Ingrese nombre" value="{{old('nombre')}}">

                <br><br>

                <p>Categorías</p>
                <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
                    <option value="{{old('tipo')}}"></option>
                    <option value=""></option>
                    <option value="PROTECCION MANOS">Protección manos</option>
                    <option value="PROTECCION CABEZA">Protección cabeza</option>
                    <option value="PROTECCION RESPIRATORIA">Protección respiratoria</option>
                    <option value="PROTECCION CORPORAL">Protección corporal</option>
                    <option value="PROTECCION VISUAL">Protección visual</option>
                    <option value="PROTECCION AUDITIVA">Protección auditiva</option>
                    <option value="TRABAJO ">Trabajo seguro en alturas</option>
                </select>

                <button type="submit">Filtrar</button>
            </form>
        </div>

        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
            @foreach ($servicios2 as $item)
                <a href="" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
                    <img src="img/productos/{{$item->id}}.png" class="mx-auto w-1/2 justify-center"
                            alt="logo-img">
                    <br>
                    <div class="sm:text-base text-sm">
                        <strong>{{$item->name}}</strong>
                        <br>
                        <p>{{$item->categoria}}</p>
                    </div>
                </a> <!-- box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto -->
            @endforeach
        </div>
        {{$servicios->links()}}

    </div>

    
    </div>



@endsection