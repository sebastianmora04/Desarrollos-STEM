@extends('layouts.plantilla')

@section('title','Prevycons - Home')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
            <div class="d-flex">
                <a href="" class="navbar-brand">Quienes somos</a>
                <a href="" class="navbar-brand">Servicios</a>
                <a href="" class="navbar-brand">Blog</a>
                <a href="" class="navbar-brand">Catálogo</a>          
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>  
        </div>
    </nav>
@endsection