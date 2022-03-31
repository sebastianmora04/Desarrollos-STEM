@extends('layouts.plantilla')

@section('title','Prevycons - Blog '. $blog->name)

@section('content')
    <strong>{{$blog->name}}</strong>
    <p class="text-slate-400">{{$blog->categoria}}</p>
    <br>
    <br>
    <p>{{$blog->informacion}}</p>
    <br>
    <a href="{{route('blog.edit', $blog)}}">Editar post</a>
@endsection