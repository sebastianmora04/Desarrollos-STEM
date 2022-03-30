@extends('layouts.plantilla')

@section('title','Prevycons - Blog')

@section('content')
    <div class="bg-emerald-600 flex flex-col  mx-auto h-auto text-slate-50">
        <div class="ml-10 mt-5">
            <br>
        </div>
        <div class="ml-10 mb-5 text-5xl">
            <h1>Blog </h1> 
            <h1><br></h1>
        </div>
    </div>

    <a href="{{route('blog.create')}}">Crear post</a>

    <div class="grid grid-cols-4 gap-4 box-border h-auto w-11/12 p-4 border-4 justify-center mx-auto">
    @foreach ($blogs as $item)
            <a href="{{route('blog.show',$item->id)}}"> Blog {{$item->name}} </a>
    @endforeach
    </div>

    {{$blogs->links()}}
@endsection