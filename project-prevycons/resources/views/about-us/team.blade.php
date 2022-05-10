@extends('layouts.plantilla')

@section('title','Prevycons - Nuestro equipo ')

@section('head')
    <style>
        .linea {
        border-top: 3px solid rgb(207, 207, 207);
        height: 2px;
        padding: 0;
        margin: 20px auto 0 auto;
        }
    </style>
@endsection

@section('content')
    <br><br><br>

    <div class="md:w-10/12 mx-auto">
        <div class="flex flex-col mx-auto h-auto sm:text-5xl text-3xl">
            <div class="m-auto text-green-600 titulos">
                NUESTRO EQUIPO DE TRABAJO
            </div>
        </div>
        <br>
        <p class="font-semibold p-4 md:p-2 md:px-2 sm:w-5/6 w-11/12 mx-auto text-justify sm:text-lg">
        PREVYCONS cuenta con personal altamente calificado, con la experiencia y el conocimiento necesario para gestionar, 
        administrar, supervisar y promover los diferentes servicios que se presta.
        </p>
    </div>
    
    <br>
    <img class="w-full" src="{{URL::asset('img/oficina.png')}}" alt="imagen">

    <div class="linea w-5/6"></div>
    <br>

    <div class="grid grid-cols-2 w-11/12">
        <img class="w-1/2 col-span-1" src="" alt="">
        <div class="px-4">
            <h2 class="titulos sm:text-5xl text-3xl azul2">Susana <br> Prada Robayo</h2>
            <br>
            <h4 class="sm:text-lg font-bold">Ing. Industrial - Esp. en Salud Ocupacional.</h4>
            <br>
            <h4 class="sm:text-base text-sm">
                Empresaria del sector de consultorías, del sector industrial y servicios, 
                Asesora y auditora líder de Sistemas de Gestión en Calidad, con 8 años de experiencia en el sector de 
                servicios, comercio y educación, liderando y desarrollando sistemas de gestión acorde a las necesidades de cada entidad. Docente de responsabilidad social y gestión de entorno.
            </h4>
        </div>
    </div>

    <br>
    <div class="linea w-5/6"></div>
    <br>

    <div class="grid grid-cols-2 w-11/12">
        <img class="w-1/2 col-span-1" src="" alt="">
        <div class="px-4">
            <h2 class="titulos sm:text-5xl text-3xl azul2">Tatiana <br> Castañeda Sánchez</h2>
            <br>
            <h4 class="sm:text-lg font-bold">Ing. Ambiental - Mag. en Calidad y Gestión Integral.</h4>
            <br>
            <h4 class="sm:text-base text-sm">
                Empresaria del sector de consultorías, del sector industrial y servicios, Asesora y auditora líder de Sistemas de Gestión en Calidad, 
                con 8 años de experiencia en el sector de servicios, comercio y educación, liderando y desarrollando sistemas de gestión acorde a las necesidades de cada entidad. 
                Docente de responsabilidad social y gestión de entorno.
            </h4>
        </div>
    </div>

    <br>
    <div class="linea w-5/6"></div>
    <br>

    <div class="grid grid-cols-2 w-11/12">
        <img class="w-1/2 col-span-1" src="" alt="">
        <div class="px-4">
            <h2 class="titulos sm:text-5xl text-3xl azul2">Olga Lucia <br> Mantilla Q.</h2>
            <br>
            <h4 class="sm:text-lg font-bold">Psicologa - Esp. en Salud Ocupacional.</h4>
            <br>
            <h4 class="sm:text-base text-sm">
                Especialista en Gestión para el Desarrollo Humano en la Organización y Especialista en Salud Ocupacional y Riesgos Laborales. 12 años gestionando el recurso humano y 4 años como Asesora
                externa de ARL Sura, en procesos del área que permiten conformar equipos de alto desempeño, alinear y preservar el Talento Humano, 
                jornadas de capacitación y formación para personal de diferentes empresas en temas relacionados con factores de riesgo psicosocial, aplicación de la batería de riesgo psicosocial, 
                organizar y desarrollar programas para el fortalecimiento de relaciones con los grupos de interés de la empresa, familias, socios y comunidad. Diseño e implementación de programas de vigilancia epidemiológica de riesgo psicosocial y desórdenes musculo-esqueletitos.
            </h4>
        </div>
    </div>

    <br>
    <div class="linea w-5/6"></div>
    <br>

    <div class="grid grid-cols-2 w-11/12">
        <img class="w-1/2 col-span-1" src="" alt="">
        <div class="px-4">
            <h2 class="titulos sm:text-5xl text-3xl azul2">Yulieth <br> Sanchez Bocanegra</h2>
            <br>
            <h4 class="sm:text-lg font-bold">Fisioterapeuta - Esp. en Seguridad y Salud en el Trabajo.</h4>
            <br>
            <h4 class="sm:text-base text-sm">
                Experiencia en ejecutar y direccionar programas de intervención fisioterapéutica en promoción, prevención y rehabilitación integral. Liderar y desarrollar trabajo en equipo y actividades de administración y gestión, referentes al campo de la fisioterapia. 
                Experta en velar por el cuidado integral de la salud laboral, la seguridad en el trabajo y los ambientes de trabajo.
            </h4>
        </div>
    </div>

    <br>
    <div class="linea w-5/6"></div>
    <br>

    <!-- Lo antiguo de aquí abajo -->

    <!-- Nosotros pre-footer -->
    <br>
    <div class="flex flex-col  mx-auto h-auto sm:text-2xl text-xl azul2 titulos">
        <div class="m-auto">
            NOSOTROS
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4  h-auto sm:w-2/3 w-full p-4 justify-center mx-auto">
        <a href="{{route('about.index')}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-3/4 m-auto rounded bg-blue-200">
            <div class="sm:text-base text-gray-800 text-sm text-center mx-auto font-semibold">¿QUIÉNES SOMOS?</div>
            <br><br>
            <br class="sm:hidden">
            <h1 class="hover:bg-slate-200 text-gray-800 hover:font-semibold sm:mx-auto sm:w-1/2 sm:text-sm text-xs text-center rounded">SABER MÁS</h1>
        </a>
        <a href="{{route('about.ptd')}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-3/4 m-auto rounded bg-blue-200">
            <div class="sm:text-base text-gray-800 text-sm text-center mx-auto font-semibold">POLÍTICA DE TRATAMIENTO DE DATOS</div>
            <br>
            <h1 class="hover:bg-slate-200 text-gray-800 hover:font-semibold sm:mx-auto sm:w-1/2 sm:text-sm text-xs text-center rounded">SABER MÁS</h1>
        </a>
    </div>

    <br>
    

@endsection