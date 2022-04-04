@extends('layouts.plantilla')

@section('title','Prevycons - Blog Create')

@section('content')
    <h1>Create post</h1>
    <form action="{{route('blog.store')}}" method="POST">

        @csrf 

        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea name="informacion" rows="3">{{old('informacion')}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria')}}">
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
        <br>
        <button type="submit">Publicar</button>
    </form>
@endsection