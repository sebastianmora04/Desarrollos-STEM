@extends('layouts.plantilla')

@section('title','Prevycons - Contáctanos')

@section('content')
    <div class="bg-blue-600 flex flex-col  mx-auto h-auto text-slate-50">
        <div class="ml-10 mt-5 sm:text-base text-sm">
            Trabajamos en brindar un servicio excepcional
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl">
            <h1>Contrátenos hoy y haga </h1> 
            <h1>avanzar su negocio.</h1>
        </div>
    </div>
    <br>
    <div class="justify-center mx-auto h-auto">
        <div class="md:grid md:grid-rows-2 md:grid-flow-col md:gap-4 md:px-10 ">
            <div class="md:row-span-2  ...">
                <form class="w-11/12" action="">
                    <label class='ml-5 px-2 py-1'>
                        Nombre
                        <br>
                        
                        <input class="w-11/12 ml-5 px-2 py-1 border-2 border-slate-300 rounded" type="text" name="name" value="{{old('name')}}">
                    </label>
                    <br>
                    <br>
                    <label class='ml-5 px-2 py-1'>
                        Correo electrónico
                        <br>
                        
                        <input class="w-11/12 ml-5 px-2 py-1 border-2 border-slate-300 rounded" type="email" name="correo" value="{{old('correo')}}">
                    </label>
                    <br>
                    <br>
                    <label class='ml-5 px-2 py-1'>
                        Telefono
                        <br>
                        
                        <input class="w-11/12 ml-5 px-2 py-1 border-2 border-slate-300 rounded" type="text" name="telefono" value="{{old('telefono')}}">
                    </label>
                    <br>
                    <br>
                    <label class='ml-5 px-2 py-1'>
                        Tema
                        <br>
                        
                        <input class="w-11/12 ml-5 px-2 py-1 border-2 border-slate-300 rounded" type="text" name="tema" value="{{old('tema')}}">
                    </label>
                    <br>
                    <br>
                    <label class='ml-5 px-2 py-1'>
                        Descripción 
                        <br>
                         
                        <textarea class="w-11/12 ml-5 px-2 py-1 border-2 border-slate-300 rounded h-auto" name="Descripcion" rows="3">{{old('Descripcion')}}</textarea>
                    </label>
                    <br>
                    <br>
                    <button class="ml-5 px-2 py-1 text-xl transition hover:bg-gray-300 hover:scale-110 ease-in-out rounded font-semibold text-orange-600 border-2 border-gray-600" type="submit">
                        Enviar
                    </button>
                </form>    
            </div>
            <br class="md:hidden">
            <div class=" md:row-span-1 md:px-0 px-4">
                <iframe class="w-11/12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15836.325779968354!2d-73.1219976!3d7.1165603!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x199801411c168254!2sPrevycons%20SAS!5e0!3m2!1ses-419!2sco!4v1648652656563!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class=" md:row-span-1 md:px-0 px-2 ">
                <div>
                    <strong>Nuestra oficina</strong>
                    <br>
                    Dirección: Carrera 19 #41-33 Bucaramanga, Santander
                    <br>
                    Teléfono: <a class="underline underline-offset-2" href="https://wa.link/9qcq92">+57 316 5242068</a>
                    <br>
                    Correo: prevycons@gmail.com
                </div>
                <br>
                <div>
                    <strong>Director general</strong>
                    <br>
                    Susana Prada Robayo
                    <br>
                    Ing. industrial - Especialista en seguridad y salud en el trabajo
                    <br>
                    <a class="underline underline-offset-2" href="https://wa.link/9qcq92">+57 316 5242068</a>
                    <br>


                </div>
            </div>
            <br class="md:hidden">
        </div>
    </div>
@endsection