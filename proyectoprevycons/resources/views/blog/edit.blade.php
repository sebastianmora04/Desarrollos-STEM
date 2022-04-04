@extends('layouts.plantilla')

@section('title','Prevycons - Blog Edit')

@section('content')
    <h1>Edit post</h1>
    <form action="{{route('blog.update',$blog)}}" method="POST">

        @csrf 

        @method('PUT')
        
        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{old('name',$blog->name)}}">
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
            <textarea name="informacion" rows="3">{{old('informacion',$blog->informacion)}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria',$blog->categoria)}}">
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