@extends('layouts.plantilla')

@section('title','Prevycons - Nuestro equipo ')

@section('content')
    
    <div class="bg-cyan-600 flex flex-col  mx-auto h-auto text-slate-50">
        <div class="ml-10 mt-5">
            <br>
        </div>
        <div class="ml-10 mb-5 text-5xl">
            <h1>Conozca el equipo </h1> 
            <h1><br></h1>
        </div>
    </div>

    <br>
    <br>

    <div class="w-10/12 mx-auto">
        <div class="flex flex-col  mx-auto h-auto text-2xl  underline underline-offset-8 text-gray-500">
            <div class="m-auto">
                NUESTRO EQUIPO
            </div>
        </div>
        <br>
        <p class="bg-emerald-600 text-slate-50 px-4 w-2/3 mx-auto text-justify">
        PREVYCONS cuenta con personal altamente calificado, con la experiencia y el conocimiento necesario para gestionar, 
        administrar, supervisar y promover los diferentes servicios que se presta.
        </p>
    </div>
    
    <div class="grid grid-cols-2 gap-4  h-auto w-full p-4 justify-center mx-auto shadow-xl ">
        
        <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
            <div class="flex flex-row">
                <div class="basis-1/6">
                    <img class="mx-auto" src="{{URL::asset('img/web/.jpg')}}" alt="">
                </div>
                <div class="basis-1/12"></div>
                <div class="basis-4/6">
                    <br><br>
                    <strong>Susana Prada Robayo</strong>
                    <br>
                    Ing. Industrial - Esp. en Salud Ocupacional
                    <br>    
                </div>
            </div>
            <br>
            <p class="mx-auto text-justify">
            Empresaria del sector de consultorías, del sector industrial y servicios, Asesora y auditora líder de Sistemas de Gestión en Calidad, 
            con 8 años de experiencia en el sector de servicios, comercio y educación, liderando y desarrollando sistemas de gestión acorde a las necesidades de cada entidad. 
            Docente de responsabilidad social y gestión de entorno.
            </p>
        </div>

        <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
            <div class="flex flex-row">
                <div class="basis-1/6">
                    <img class="mx-auto" src="{{URL::asset('img/web/tatiana-06.jpg')}}" alt="">
                </div>
                <div class="basis-1/12"></div>
                <div class="basis-4/6">
                    <br><br>
                    <strong>Tatiana Castañeda Sánchez</strong>
                    <br>
                    Ing. Ambiental - Mag. en Calidad y Gestión Integral.
                    <br>    
                </div>
            </div>
            <br>
            <p class="mx-auto text-justify">
            Ingeniera Ambiental, Magister en Calidad y Gestión Integral, con nueve años de experiencia en liderazgo de programas de gestión Ambiental, 
            diseño implementación y mejora de los sistemas ISO 9001, 45001, 14001, 14064, Experta en la gestión de conceptos sanitarios, permisos y licencias ambientales, Docente hora Catedra Responsabilidad Social.
            </p>
            <br>
        </div>

        <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
            <div class="flex flex-row">
                <div class="basis-1/6">
                    <img class="mx-auto" src="{{URL::asset('img/web/olga-06.jpg')}}" alt="">
                </div>
                <div class="basis-1/12"></div>
                <div class="basis-4/6">
                    <br><br>
                    <strong>Olga Lucia Mantilla Q.</strong>
                    <br>
                    Psicologa - Esp. en Salud Ocupacional.
                    <br>
                </div>
            </div>
            <br>
            <p class="mx-auto text-justify">
            Especialista en Gestión para el Desarrollo Humano en la Organización y Especialista en Salud Ocupacional y Riesgos Laborales. 12 años gestionando el recurso humano y 4 años como Asesora
            externa de ARL Sura, en procesos del área que permiten conformar equipos de alto desempeño, alinear y preservar el Talento Humano, 
            jornadas de capacitación y formación para personal de diferentes empresas en temas relacionados con factores de riesgo psicosocial, aplicación de la batería de riesgo psicosocial, 
            organizar y desarrollar programas para el fortalecimiento de relaciones con los grupos de interés de la empresa, familias, socios y comunidad. Diseño e implementación de programas de vigilancia epidemiológica de riesgo psicosocial y desórdenes musculo-esqueletitos.      
            </p>
            <br>
        </div>

        <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
            <div class="flex flex-row">
                <div class="basis-1/6">
                    <img class="mx-auto" src="{{URL::asset('img/web/yulieth-06.jpg')}}" alt="">
                </div>
                <div class="basis-1/12"></div>
                <div class="basis-4/6">
                    <br><br>
                    <strong>Yulieth Sanchez Bocanegra</strong>
                    <br>
                    Fisioterapeuta - Esp. en Seguridad y Salud en el Trabajo.
                    <br>
                </div>
            </div>
            <br>
            <p class="mx-auto text-justify">
            Experiencia en ejecutar y direccionar programas de intervención fisioterapéutica en promoción, prevención y rehabilitación integral. Liderar y desarrollar trabajo en equipo y actividades de administración y gestión, referentes al campo de la fisioterapia. 
            Experta en velar por el cuidado integral de la salud laboral, la seguridad en el trabajo y los ambientes de trabajo.
            </p>
            <br>
        </div>

    </div>
    <!-- Nosotros pre-footer -->
    <br>
    <br>
    <div class="flex flex-col  mx-auto h-auto text-xl  underline underline-offset-8 text-gray-500">
        <div class="m-auto">
            NOSOTROS
        </div>
    </div>
    <br>
    <div class="grid grid-cols-3 gap-4  h-auto w-full p-4 justify-center mx-auto">
        <a href="{{route('about.index')}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
            <div class="text-center mx-auto font-semibold">¿QUIÉNES SOMOS?</div>
            <br>
            <h1 class="hover:bg-slate-200 hover:font-semibold mx-auto w-1/4 text-center rounded">SABER MÁS</h1>
        </a>
        <a href="{{route('about.ptd')}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
            <div class="text-center mx-auto font-semibold">POLÍTICA DE TRATAMIENTO DE DATOS</div>
            <br>
            <h1 class="hover:bg-slate-200 hover:font-semibold mx-auto w-1/4 text-center rounded">SABER MÁS</h1>
        </a>
    </div>

@endsection