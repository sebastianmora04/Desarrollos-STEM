@extends('layouts.plantilla2')

@section('title','Prevycons - Blog '. $blog->name)

@section('content')
    <strong>{{$blog->name}}</strong>
    <p class="text-slate-400">{{$blog->categoria}}</p>
    <br>
    <a href="{{route('blog.edit', $blog)}}">Editar post</a>
    <br>

    <div>
        <p>{{$blog->informacion}}</p>
    </div>
@endsection