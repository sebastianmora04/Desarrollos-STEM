@extends('layouts.plantilla')

@section('title','Prevycons - Servicios')

@section('content')
    <div class="w-11/12 h-1/5 bg-orange-300 mx-auto">
        <h1 style="text-align: center" class="">Servicios</h1>
    </div>
    <br>
    <div class="grid grid-cols-4 gap-4 box-border h-auto w-11/12 p-4 border-4 justify-center mx-auto">
    @foreach ($servicios as $item)

        <a href="">{{$item->name}} - {{$item->descripcion}}</a>
        
    @endforeach
    </div>
    {{$servicios->links()}}
@endsection