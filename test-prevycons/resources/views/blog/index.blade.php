@extends('layouts.plantilla')

@section('title','Prevycons - Blog')

@section('content')
    <h1>Blog - implementar</h1>

    <a href="{{route('blog.create')}}">Crear post</a>

    <ul>
        @foreach ($blogs as $item)
            <li>Blog {{$item->name}}</li>
        @endforeach
    </ul>
@endsection