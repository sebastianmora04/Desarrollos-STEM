@extends('layouts.plantilla')

@section('title','Prevycons - Servicio '. $servicios->name)

@section('content')
    <img src="{{URL::asset($servicios->img)}}" class="mx-auto w-1/12 justify-center" alt="logo-img">
    <h2><strong>{{$servicios->name}}</strong></h2>
    <br>
    <p class="px-8">{{$servicios->descripcion}}</p>
    <br>
    <p class="px-8">{{$servicios->contenido}}</p>
@endsection