@extends('layouts.plantilla2')

@section('title','Prevycons - Blog Edit')

@section('content')
    <h1>Edit post</h1>
    <form action="{{route('blog.update',$blog)}}" method="POST" class="text-[#C9C9C9]">

        @csrf 

        @method('PUT')
        
        <label>
            Name:
            <br>
            <input type="text" class="bg-transparent" name="name" value="{{old('name',$blog->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        
        <label>
            Informacion: 
            <br> 
            <textarea class="bg-transparent" name="informacion" rows="3">{{old('informacion',$blog->informacion)}}</textarea>
        </label>

        @error('informacion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        
        <label>
            Categoría: 
            <br> 
            <input type="text" class="bg-transparent" name="categoria" value="{{old('categoria',$blog->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        
        <label>
            Imagen:
            <br>
            <input type="text">
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection