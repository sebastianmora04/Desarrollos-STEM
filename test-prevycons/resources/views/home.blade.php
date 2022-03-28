@extends('layouts.plantilla')

@section('title','Prevycons - Home')

@section('content')
    <h1>
        Bienvenidos a Prevycons
    </h1>

    <div class="flex container mx-auto columns-2">
        <div class="mr-auto ">
            <div class="container">
                <p class="nombret">
                    Prevycons
                </p>
            </div>
        </div>
        <div class="flex ml-2 w-2/3 ">
            <nav class="flex ml-4 ">
                <ul class="flex space-x-20" >
                    <a href="{{route('home.index')}}"><li>Inicio</li></a>
                    <a href="{{route('about.index')}}"><li>Conozcanos </li></a>
                    <a href="{{route('servicio.index')}}"><li>Servicios</li> </a>
                    <a href="{{route('blog.index')}}"><li >Blog</li></a>
                    <a href="{{route('catalogo.index')}}"><li >Catálogo</li></a>
                    <a href=""><li>Contactanos</li></a>
                </ul>            
            </nav>
        </div>
    </div>
@endsection