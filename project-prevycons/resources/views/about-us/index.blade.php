@extends('layouts.plantilla')

@section('title','Prevycons - Quienes somos?')

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
    <div class=" justify-center mx-auto w-10/12 px-1">
        <div class=" sm:text-2xl text-lg mt-auto mb-auto py-1 azul2 text-center titulos">¿QUÉ HACEMOS? ¡Empresas potencialmente exitosas!</div>
        <br>
        <div class=" sm:text-base text-sm px-16 py-1 sm:ml-2">
            <p>
                Contribuimos en la mejora de la competitividad de las empresas y nos dedicamos a velar por la parte más importante de una organización, el recurso humano, sus empleados. Así logramos hacer un riguroso ejercicio de mejora para fortalecer los procesos empresariales, que permiten que se generen con alto potencial y eficiencia.
                <br><br>
                En PREV&CONS generamos relaciones de valor con nuestros clientes apoyados en el conocimiento y la experiencia de Consultoría a la medida, nuestro equipo de profesionales se encargará de estudiar y analizar cuál es la mejor estrategia para lograr una implementación adecuada de los procesos de su empresa.
                <br><br>
                TE AYUDAMOS A CERTIFICAR TU ORGANIZACIÓN A TRAVÉS DE LA CERTIFICACIÓN DE ESTÁNDARES DE CALIDAD.
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
                        Somos un grupo de profesionales interdisciplinarios de expertos que acompañamos a nuestros clientes en el desarrollo de sistemas de gestión integral basados en la mejora continua de los procesos u operaciones.
                        <br>
                        Nuestro portafolio de servicios nos permite prestar soporte y servicios en el diseño e implementación de sistemas de gestión de calidad (Normas ISO 9001, ISO 14001, ISO 45001), Gestión Documental, Planes de manejo ambiental, sistemas de gestión en salud y seguridad en el trabajo, Mediciones higiénicas, Investigación de accidentes y enfermedades laborales, Planes de seguridad vial, Auditorías internas y externas.
                        <br>
                        Tenemos más de 5 años de experiencia en empresas del sector industrial, agroindustrial, constructor, comercializadoras de servicios, IPS, colegios, entidades sin ánimo de lucro y de economía solidaria.
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