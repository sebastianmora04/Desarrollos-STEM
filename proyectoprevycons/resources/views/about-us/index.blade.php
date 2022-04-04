@extends('layouts.plantilla')

@section('title','Prevycons - Quienes somos?')

@section('content')
<!-- Conozcanos -> Quienes somos? - Conozca nuestro equipo - Politica de tratamiento de datos -->
    <div class="bg-cyan-600 flex flex-col  mx-auto h-auto text-slate-50">
        <div class="ml-10 mt-5">
            Siempre apuntando a lo más alto
        </div>
        <div class="ml-10 mb-5 text-5xl">
            <h1>Ayudamos a las empresas a innovar, </h1> 
            <h1>transformar y liderar.</h1>
        </div>
    </div>
    <div class="justify-center mx-auto shadow-xl">
        <div class="px-16 py-5">
            <br>
            <div class="flex flex-row justify-center mx-auto">
                <div class="basis-1/4">01</div>
                <div class="basis-2/4">
                    <div class="flex flex-col  mx-auto h-auto text-2xl  underline underline-offset-8 text-gray-500">
                        <div class="m-auto">
                            ¿QUIÉNES SOMOS?
                        </div>
                    </div>
                    <br>
                    <p class=" text-justify">
                        Somos una firma de profesionales que acompañamos a nuestros clientes en el desarrollo de sistemas de gestión basados en la mejora continua.
                        Prestamos nuestros servicios en diseño e implementación de sistemas de gestión de calidad (Normas ISO 9001, ISO 14001, ISO 45001), Gestión Documental, Planes de manejo ambiental, Sistemas de gestión en salud y seguridad en el trabajo, Mediciones higiénicas, Investigación de accidentes y enfermedades laborales, Planes de seguridad vial, Auditorías
                        internas y externas.
                        Tenemos experiencia en empresas del sector industrial, agroindustrial, constructor, comercializadoras de servicios, IPS, colegios, entidades sin ánimo de lucro y de economía solidaria.

                    </p>
                </div>
            </div>
        </div>
        <br>
        <div class="px-16">
            <div class="flex flex-row justify-center mx-auto w-10/12 bg-emerald-600 text-slate-50">
                <div class="basis-1/5 font-semibold mt-auto mb-auto"><p class="ml-5">¿QUÉ HACEMOS?</p></div>
                <div class="basis-3/5 px-1">
                    <p>
                        Ofrecemos servicios integrales a las organizaciones que ayudarán a fortalecer tu
                        posicionamiento de marca y nombre.
                        AYUDAMOS A CERTIFICAR TU ORGANIZACIÓN A TRAVÉS DE ESTÁNDARES DE CALIDAD.
                    </p>
                </div>
            </div>
            <br>

            <br>
            <div class="flex flex-row px-16 justify-center mx-auto">
                <div class="basis-5/12 p-2 ">
                    <h1 style="text-align: center" class=" text-xl flex flex-col  mx-auto h-auto underline underline-offset-4 text-gray-500">VISIÓN</h1>
                    <br>
                    <p class="text-justify px-auto">
                        Para el 2028, PREV&amp;CONS será una empresa líder en el mercado con
                        reconocimiento a nivel nacional ofreciendo a nuestros clientes una integralidad en
                        los servicios prestados a través de equipo humano competente multidisciplinario
                        en constante formación y actualización.
                    </p>
                </div>
                <div class="basis-1/12"></div>
                <div class="basis-5/12 p-2 ">
                    <h1 style="text-align: center" class=" text-xl flex flex-col  mx-auto h-auto underline underline-offset-4 text-gray-500">MISIÓN</h1>
                    <br>
                    <p class="text-justify px-auto">
                        PREV&amp;CONS se compromete en ofrecer a nuestros clientes soluciones
                        acertadas para cada una de sus necesidades, orientadas al logro de su
                        Bienestar.
                    </p>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br>
    <br>
    <!-- Nosotros pre-footer  -->
    <div class="flex flex-col  mx-auto h-auto text-xl  underline underline-offset-8 text-gray-500">
        <div class="m-auto">
            NOSOTROS
        </div>
    </div>
    <br>
    <div class="grid grid-cols-3 gap-4  h-auto w-full p-4 justify-center mx-auto">
        <a href="{{route('about.team')}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
            <div class="text-center mx-auto font-semibold">NUESTRO EQUIPO</div>
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