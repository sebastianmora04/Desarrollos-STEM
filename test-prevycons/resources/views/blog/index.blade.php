@extends('layouts.plantilla')

@section('title','Prevycons - Blog')

@section('content')
    <div class="bg-red-600 flex flex-col  mx-auto h-auto text-slate-50">
        <div class="ml-10 mt-5">
            <br>
        </div>
        <div class="ml-10 mb-5 text-5xl">
            <h1>Blog </h1> 
            <h1><br></h1>
        </div>
    </div>
    <br>
    <a href="{{route('blog.create')}}" class="">
        <button class="ml-5 px-2 py-1 transition  hover:border-gray-500 hover:scale-105 ease-in-out rounded font-semibold text-red-600 border-2 border-gray-300">Crear post</button>
    </a>
    <br>
    <br>
    <div class="grid grid-cols-4 gap-4 box-border h-auto w-11/12 p-4 border-4 justify-center mx-auto">
    @foreach ($blogs as $item)
        <a href="{{route('blog.show',$item->id)}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">    
            <div class="">
                <strong>{{$item->name}}</strong>
            </div>
        </a>
    @endforeach
    </div>

    {{$blogs->links()}}
@endsection