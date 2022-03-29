@extends('layouts.plantilla')

@section('title','Prevycons - Blog')

@section('content')
    <h1>Blog - implementar</h1>

    <a href="{{route('blog.create')}}">Crear post</a>

    <div class="grid grid-cols-4 gap-4 box-border h-auto w-11/12 p-4 border-4 justify-center mx-auto">
    @foreach ($blogs as $item)
            <a href="{{route('blog.show',$item->id)}}"> Blog {{$item->name}} </a>
    @endforeach
    </div>

    {{$blogs->links()}}
@endsection