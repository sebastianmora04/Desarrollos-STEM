@extends('layouts.plantilla')

@section('title','Prevycons - Contáctanos')

@section('head')
    <style>
        .portafolio{
            letter-spacing: 1px;
        }
        .linea {
        border-top: 3px solid rgb(207, 207, 207);
        height: 2px;
        padding: 0;
        margin: 20px auto 0 auto;
        }
    </style>
@endsection

@section('content')
    <div class="azul1 lg:px-24 md:px-16 sm:px-12  flex flex-col  mx-auto h-auto text-blue-600 titulos">
        <div class="ml-10 mt-5 sm:text-base text-sm">
            Trabajamos en brindar un servicio excepcional
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl">
            <h1>Contrátenos hoy y haga </h1> 
            <h1>avanzar su negocio.</h1>
        </div>
    </div>
    
    <br><br><br>


    <div class="justify-center mx-auto h-auto">
        <div class="md:grid md:grid-rows-4 md:grid-cols-2 md:gap-4 md:px-10 ">
            <div class="md:row-span-4  ...">
                <form class="w-11/12" action="{{route('hire.mail')}}" method="POST">
                    @csrf <!-- Token para enviar -->
                    <label class='ml-5 px-2 py-1 font-medium'>
                        Nombre
                        <br>
                        
                        <input class="w-11/12 ml-5 px-2 py-1 border-2 border-slate-300 rounded font-base" type="text" name="name" value="{{old('name')}}">
                    </label>

                    @error('name')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br><br><br>

                    <label class='ml-5 px-2 py-1 font-medium'>
                        Correo electrónico
                        <br>
                        
                        <input class="w-11/12 ml-5 px-2 py-1 border-2 border-slate-300 rounded font-base" type="email" name="correo" value="{{old('correo')}}">
                    </label>

                    @error('correo')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br><br><br>

                    <label class='ml-5 px-2 py-1 font-medium'>
                        Telefono </h1>
                        <br>
                        
                        <input class="w-11/12 ml-5 px-2 py-1 border-2 border-slate-300 rounded font-base" type="text" name="telefono" value="{{old('telefono')}}">
                    </label>

                    @error('telefono')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br><br><br>
                    
                    <label class='ml-5 px-2 py-1 font-medium'>
                        Tema </h1>
                        <br>
                        
                        <input class="w-11/12 ml-5 px-2 py-1 border-2 border-slate-300 rounded font-base" type="text" name="tema" value="{{old('tema')}}">
                    </label>
                    
                    @error('tema')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br><br><br>

                    <label class='ml-5 px-2 py-1 font-medium'>
                        Descripción </h1>
                        <br>
                         
                        <textarea class="w-11/12 ml-5 px-2 py-1 border-2 border-slate-300 rounded font-base h-auto" name="descripcion" rows="3">{{old('Descripcion')}}</textarea>
                    </label>
                    
                    @error('descripcion')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                    <br><br><br>

                    <button class="w-11/12 ml-5 px-2 py-1 text-xl transition hover:bg-gray-300 hover:scale-110 ease-in-out rounded font-semibold text-orange-500 border-2 border-gray-600" type="submit">
                        Enviar
                    </button>
                </form>    
            </div>
            <br class="md:hidden">
            <div class=" md:row-span-2 md:px-0 px-4">
                <iframe class="w-11/12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15836.325779968354!2d-73.1219976!3d7.1165603!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x199801411c168254!2sPrevycons%20SAS!5e0!3m2!1ses-419!2sco!4v1648652656563!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="linea w-5/6"></div>
            </div>

            <br class="sm:hidden">

            <div class=" md:row-span-2 md:px-0 px-8">

                <div class="flex flex-row">
                    <div class="basis-1/4">
                        <img class="md:w-32 ml-auto" src="{{URL::asset('img/login/Iconos Sitio.png')}}" alt="">
                    </div>
                    <div class="basis-3/4 my-auto lg:text-base sm:text-sm text-xs azul2">
                        <strong class="titulos lg:text-xl sm:text-lg">Nuestra oficina</strong>
                        <br>
                        <strong class="titulos font-black">Dirección:</strong> Carrera 19 #41-33 Bucaramanga, Santander
                        <br>
                        <strong class="titulos font-black">Teléfono:</strong> <a class="" href="https://wa.link/9qcq92">+57 316 5242068</a>
                        <br>
                        <strong class="titulos font-black">Correo:</strong> prevycons@gmail.com
                    </div>
                </div>

                <div class="linea w-5/6"></div><br>

                <div class="flex flex-row">
                    <div class="basis-1/4">
                        <img class="md:w-32 ml-auto" src="{{URL::asset('img/login/Icono Gerente.png')}}" alt="">
                    </div>
                    <div class="basis-3/4 my-auto lg:text-base sm:text-sm text-xs azul2">
                        <strong class="titulos lg:text-xl sm:text-lg">Director general</strong>
                        <br>
                        <strong class="titulos font-black">Susana Prada Robayo</strong>
                        <br>
                        Ing. industrial - Especialista en seguridad y salud en el trabajo
                        <br>
                        <strong class="titulos font-black">Teléfono:</strong> <a class="" href="https://wa.link/9qcq92">+57 316 5242068</a>
                        <br>
                    </div>
                </div>

            </div>
        </div>
        <br class="md:hidden">
    </div>
@endsection