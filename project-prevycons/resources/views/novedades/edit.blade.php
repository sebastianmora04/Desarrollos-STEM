@extends('layouts.plantilla2')

@section('title','Prevycons - Edit')

@section('content')
    <h1>Edit new</h1>
    <form action="{{route('novedades.update',$novedades)}}" method="POST" class="text-[#C9C9C9]">

        @csrf 

        @method('PUT')
        
        <label>
            Titulo:
            <br>
            <input type="text" class="bg-transparent" name="titulo" value="{{old('titulo',$novedades->titulo)}}">
        </label>

        @error('titulo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        
        <label>
            Informacion: 
            <br> 
            <textarea class="bg-transparent" name="informacion" rows="3">{{old('informacion',$novedades->informacion)}}</textarea>
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
            <input type="text" class="bg-transparent" name="categoria" value="{{old('categoria',$novedades->categoria)}}">
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