@extends('layouts.plantilla')

@section('title','Prevycons - Servicios')

@section('content')
    <h1>Servicios</h1>
    <ul>
        @foreach ($servicios as $item)
        <li>{{$item->name}} - {{$item->descripcion}} </li>
        @endforeach
        <li>Consultorías</li>
        <li>Auditorías</li>
        <li>Capacitaciones</li>
        <li>Examen</li>
    </ul>
    {{$servicios->links()}}
@endsection