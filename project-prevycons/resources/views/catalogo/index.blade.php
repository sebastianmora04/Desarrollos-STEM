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
                
                <label for="toggle-example" class="flex relative items-center mb-4 cursor-pointer">
                    <input type="checkbox" id="toggle-example" class="sr-only">
                    <div class="w-11 h-6 bg-gray-200 rounded-full border border-gray-200 toggle-bg dark:bg-gray-700 dark:border-gray-600"></div>
                    <span class="ml-3 text-base font-medium text-gray-900 dark:text-gray-600">Disponible</span>
                </label>

                <br><br>

                <p class="ml-3 text-base font-medium text-gray-900 dark:text-gray-600">Sectores</p>
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

                <p class="ml-3 text-base font-medium text-gray-900 dark:text-gray-600">Categorías</p>
                <select name="tipo" class="form-control mr-sm-2 rounded text-base font-medium text-gray-900 dark:text-gray-600" id="exampleFormControlSelect1">
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

                <button class="ml-3 text-lg font-medium text-gray-900 dark:text-gray-600" type="submit">FILTRAR</button>

            </form>
        </div>

        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4  h-auto w-11/12 p-4 justify-center mx-auto">
            @foreach ($servicios2 as $item)
                <a href="{{route('catalogo.show',$item->id)}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
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