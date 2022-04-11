@extends('layouts.plantilla')

@section('title','Prevycons - Catálogo '.$producto->name)

@section('content')

<p>{{$producto->categoria}}   {{$producto->valoracion}}</p>
<br>
<img src="../img/productos/{{$producto->id}}.png" class="mx-auto w-1/4 justify-center" alt="logo-img">
<br>
<p>{{$producto->name}}</p>
<br>
<p>$ {{$producto->precio}}</p>
<br>
<p>{{$producto->descripcion}}</p>



@endsection