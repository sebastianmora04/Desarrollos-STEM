@extends('layouts.plantilla')

@section('title','Prevycons - Catálogo '.$producto->name)

@section('content')

<p>{{$producto->categoria}}   {{$producto->valoracion}}</p>
<br>

<div class="grid grid-cols-2 gap-4">
    <div><img src="../img/productos/{{$producto->id}}.png" class="mx-auto w-1/3 justify-center" alt="logo-img"></div>
    <div class="my-auto">
        {{$producto->name}}
        <br>
        $ {{$producto->precio}}
    </div>
    
    <div>{{$producto->descripcion}}</div>


</div>

@endsection