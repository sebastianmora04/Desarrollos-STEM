@extends('layouts.plantilla')

@section('title','Prevycons - Blog '. $blog->name)

@section('content')
    <h2>Titulo:  {{$blog->name}}</h2>
    <p>{{$blog->informacion}}</p>
    <p><strong>{{$blog->categoria}}</strong></p>
    <a href="{{route('blog.edit', $blog)}}">Editar post</a>
@endsection