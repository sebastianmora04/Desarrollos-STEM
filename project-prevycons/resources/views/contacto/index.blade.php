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
        .bordeazul{
            border-color: #148CEE;
            background-color: transparent;
        }
        .liviano{
            font-weight: 200;
        }
    </style>
@endsection

@section('content')
    <div class="azul1 lg:px-24 md:px-16 sm:px-12  flex flex-col  mx-auto h-auto titulos">
        <div class="ml-10 mt-5 sm:text-xl text-lg">
            Trabajamos en brindar un servicio excepcional
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl">
            <h1>Contrátenos hoy y haga avanzar </h1> 
            <h1>su negocio.</h1>
        </div>
    </div>
    
    <br><br><br>


    <div class="justify-center mx-auto h-auto">
        <div class="md:grid md:grid-rows-4 md:grid-cols-5 md:gap-4 md:px-10 ">
            <div class="md:row-span-4 md:col-span-2  ...">

                <div class="ml-8 mt-5 sm:text-4xl text-2xl titulos azul2 tracking-wide">
                    Formulario
                </div>

                <br>

                <p class="mx-8 my-3 font-black">
                    Por medio del siguiente formulario podemos
                    ponernos en contacto de forma imediata,
                    asegurate que la descripción concuerde
                    con el tema.
                </p>

                <br>

                <form class="bg-transparent" action="{{route('hire.mail')}}" method="POST">
                    @csrf <!-- Token para enviar -->

                    <div class="mx-8 my-3">
                        <input type="text" name="name" class="bg-transparent form-input w-11/12 py-2 lg:text-xl md:text-lg rounded-md bordeazul font-black tracking-wide" value="{{old('Descripcion')}}" placeholder="Nombre">
                    </div>
                    @error('name')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="mx-8 my-3">
                        <input type="email" name="correo" class="bg-transparent form-input w-11/12 py-2 lg:text-xl md:text-lg rounded-md bordeazul font-black tracking-wide" value="{{old('Descripcion')}}" placeholder="Correo Electrónico">
                    </div>
                    @error('correo')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
            
                    <div class="mx-8 my-3">
                        <input type="text" name="telefono" class="bg-transparent form-input w-11/12 py-2 lg:text-xl md:text-lg rounded-md bordeazul font-black tracking-wide" value="{{old('Descripcion')}}" placeholder="Teléfono">
                    </div>
                    @error('telefono')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="mx-8 my-3">
                        <input type="text" name="tema" class="bg-transparent form-input w-11/12 py-2 lg:text-xl md:text-lg rounded-md bordeazul font-black tracking-wide" value="{{old('Descripcion')}}" placeholder="Tema">
                    </div>
                    @error('tema')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <div class="mx-8 my-3">
                        <textarea class="bg-transparent form-input w-11/12 py-2 lg:text-xl md:text-lg rounded-md bordeazul font-black tracking-wide h-auto px-3" name="descripcion" rows="3" placeholder="Descripción">{{old('Descripcion')}}</textarea>
                    </div>
                    @error('descripcion')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                
                    <button class="w-[100px] mx-8 my-3 py-1 lg:text-xl md:text-lg transition hover:bg-gray-300 hover:scale-110 ease-in-out rounded-xl font-semibold text-orange-500 border-2 border-gray-600" type="submit">
                        Enviar
                    </button>
                    
                </form>  
            </div>
            <br class="md:hidden">
            <div class=" md:row-span-2 md:col-span-3 md:px-0 px-4">
                <iframe class="w-11/12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15836.325779968354!2d-73.1219976!3d7.1165603!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x199801411c168254!2sPrevycons%20SAS!5e0!3m2!1ses-419!2sco!4v1648652656563!5m2!1ses-419!2sco" width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="linea"></div>
            </div>

            <br class="sm:hidden">

            <div class=" md:row-span-2 md:col-span-3 md:px-0 px-2">

                <div class="flex flex-row">
                    <div class="basis-1/4">
                        <img class="md:w-32 xl:ml-10" src="{{URL::asset('img/login/Iconos Sitio.png')}}" alt="">
                    </div>
                    <div class="basis-3/4 my-auto lg:text-xl md:text-lg sm:text-base text-sm azul2">
                        <strong class="titulos xl:text-3xl lg:text-2xl md:text-xl text-lg">Nuestra oficina</strong>
                        <br>
                        <strong class="titulos font-black">Dirección:</strong> Carrera 19 #41-33 Bucaramanga, Santander
                        <br>
                        <strong class="titulos font-black">Teléfono:</strong> <a class="" href="https://wa.link/9qcq92">+57 316 5242068</a>
                        <br>
                        <strong class="titulos font-black">Correo:</strong> prevycons@gmail.com
                    </div>
                </div>

                <div class="linea "></div><br>

                <div class="flex flex-row">
                    <div class="basis-1/4">
                        <img class="md:w-32 xl:ml-10" src="{{URL::asset('img/login/Icono Gerente.png')}}" alt="">
                    </div>
                    <div class="basis-3/4 my-auto lg:text-xl md:text-lg sm:text-base text-sm azul2">
                        <strong class="titulos xl:text-3xl lg:text-2xl md:text-xl text-lg">Director general</strong>
                        <br>
                        <strong class="titulos font-black">Susana Prada Robayo</strong>
                        <br>
                        Ing. industrial - Especialista en seguridad y salud en el trabajo
                        <br>
                        <strong class="titulos font-black">Teléfono:</strong> <a class="font-[580]" href="https://wa.link/9qcq92">+57 316 5242068</a>
                        <br>
                    </div>
                </div>

            </div>
        </div>
        <br class="md:hidden">
    </div>
@endsection