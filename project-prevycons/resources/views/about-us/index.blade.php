@extends('layouts.plantilla')

@section('title','Prevycons - Quienes somos?')

@section('head')
    <style>
        .linea {
        border-top: 3px solid rgb(177, 177, 177);
        height: 2px;
        padding: 0;
        margin: 20px auto 0 auto;
        }
    </style>
@endsection

@section('content')
    <br>
<!-- Conozcanos -> Quienes somos? - Conozca nuestro equipo - Politica de tratamiento de datos -->
    <div class="azul1 lg:px-24 md:px-16 sm:px-12  flex flex-col  mx-auto h-auto text-green-600 titulos">
        <div class="ml-10 mt-5 sm:text-base text-sm">
            Siempre apuntando a lo más alto
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl">
            <h1>Ayudamos a las empresas a innovar, </h1> 
            <h1>transformar y liderar.</h1>
        </div>
    </div>
    <br>
    <div class=" justify-center mx-auto w-10/12">
        <div class=" sm:text-2xl text-lg mt-auto mb-auto py-1 azul2 titulos"><p class="text-center">¿QUÉ HACEMOS?</p></div>
        <div class=" sm:text-base text-sm px-16 py-1 sm:ml-2 text-justify">
            <p>
                Ofrecemos servicios integrales a las organizaciones que ayudarán a fortalecer tu
                posicionamiento de marca y nombre.
                AYUDAMOS A CERTIFICAR TU ORGANIZACIÓN A TRAVÉS DE ESTÁNDARES DE CALIDAD.
            </p>
        </div>
    </div>

    <div class="justify-center mx-auto">
        <div class="sm:px-16 px-8 sm:py-5">
            <br>
            <div class="md:flex md:flex-row justify-center mx-auto">
                <div class="md:basis-2/5">01</div>
                <div class="md:basis-2/5">
                    <div class="md:flex md:flex-col  mx-auto h-auto md:text-3xl text-xl azul2 titulos">
                        <div class="text-center m-auto">
                            ¿QUIÉNES SOMOS?
                        </div>
                    </div>
                    <br><br>
                    <p class=" text-justify sm:text-base text-sm">
                        Somos una firma de profesionales que acompañamos a nuestros clientes en el desarrollo de sistemas de gestión basados en la mejora continua.
                        Prestamos nuestros servicios en diseño e implementación de sistemas de gestión de calidad (Normas ISO 9001, ISO 14001, ISO 45001), Gestión Documental, Planes de manejo ambiental, Sistemas de gestión en salud y seguridad en el trabajo, Mediciones higiénicas, Investigación de accidentes y enfermedades laborales, Planes de seguridad vial, Auditorías
                        internas y externas.
                        Tenemos experiencia en empresas del sector industrial, agroindustrial, constructor, comercializadoras de servicios, IPS, colegios, entidades sin ánimo de lucro y de economía solidaria.

                    </p>
                </div>
            </div>
        </div>
        
        <div class="linea w-5/6"></div>

        <div class="md:px-16 sm:px-8 px-4">
        
            <br class="hidden sm:block">
            <div class="sm:flex sm:flex-row sm:px-18 md:px-16 justify-center mx-auto md:px-16 sm:px-8 px-6">
                <div class="sm:basis-5/12 md:p-2 md:px-2 ">
                    <h1 style="text-align: center" class=" sm:text-xl text-lg flex flex-col  mx-auto h-auto azul2 titulos">VISIÓN</h1>
                    <br>
                    <p class="text-justify px-auto sm:text-base text-sm">
                        Para el 2028, PREV&amp;CONS será una empresa líder en el mercado con
                        reconocimiento a nivel nacional ofreciendo a nuestros clientes una integralidad en
                        los servicios prestados a través de equipo humano competente multidisciplinario
                        en constante formación y actualización.
                    </p>
                </div>
                
                <br class="sm:hidden">

                <div class="sm:basis-1/12"></div>
                <div class="sm:basis-5/12 md:p-2 md:px-2 ">
                    <h1 style="text-align: center" class=" sm:text-xl text-lg flex flex-col  mx-auto h-auto azul2 titulos">MISIÓN</h1>
                    <br>
                    <p class="text-justify px-auto sm:text-base text-sm">
                        PREV&amp;CONS se compromete en ofrecer a nuestros clientes soluciones
                        acertadas para cada una de sus necesidades, orientadas al logro de su
                        Bienestar.
                    </p>
                </div>
            </div>
        </div>
        <br>
        <div class="linea w-5/6"></div>
    </div>
    <br>
    <br>
    <!-- Nosotros pre-footer  -->
    <div class="flex flex-col  mx-auto h-auto sm:text-2xl text-xl azul2 titulos">
        <div class="m-auto">
            NOSOTROS
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 gap-4  h-auto sm:w-2/3 w-full p-4 justify-center mx-auto">
        <a href="{{route('about.team')}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-3/4 m-auto rounded bg-blue-200">
            <div class="sm:text-base text-gray-800 text-sm text-center mx-auto font-semibold">NUESTRO EQUIPO</div>
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