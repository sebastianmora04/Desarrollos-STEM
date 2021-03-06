<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--favicon -->
    <link rel="shortcut icon" href="{{URL::asset('img/pagina_web_favicon.png')}}" type="image/x-icon">

<!-- <style> -->
    <!-- @yield('head')-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        },
                    transitionDuration: {
                        '0': '0ms',
                        '3000': '3000ms',
                        }
                    colors: {
                        'azuloscuro': '#001559',
                    },
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />

    <!-- styles -->

    <style>
        .portafolio{
            letter-spacing: 1px;
        }
    </style> <!-- Style en home -->

    <style type="text/css">
        body{
            font-family: 'Montserrat', sans-serif;
        }
        .tamaño{
            height: 400px;
        }
        .sombra{
            text-shadow: black 1px 2px;;
        }

        .titulos{
            font-family: 'Poppins',sans-serif;
        }
        .azul1{
            color: rgb(0,130,205);
            background-color: rgb(233,241,244)
        }
        .azul2{
            color: rgb(0,130,205);
        }
        .azul3{
            background-color: rgba(0, 21, 89, 0.98)
        }
        .bgazulmenu{
            background-color: rgba(0, 21, 89, 0.98);
            border-color: rgba(0,21,89,0.98);
        }
        .bgazulmenu:hover{
            background-color: rgba(1, 33, 138, 0.98);
            border-color: rgba(1, 33, 138, 0.98)
        }
        .bgazulmenu2{
            background-color: rgba(0,130,205, 0.98);
            border-color: rgba(0,130,205, 0.98)
        }
        .bgazulmenu2:hover{

        }
        ul {
            list-style:none;
        }

        .nav > li {
            float:left;
        }

        .nav li ul {
            display:none;
            position:absolute;
        }
        .filtro1{

            min-width:230px;
        }
        .filtro2{
            min-width:100px;
        }
        .filtro22{
            min-width:80px;
        }
        .filtro22:hover{
            right: 20px;
            min-width:80px;
        }
        .filtro3{
            min-width: 180px;
        }
        .nav li:hover > ul {
            display:block;
        }

        .nav li ul li {
            position:relative;
        }

        .nav li ul li ul {
            right:-180px;
            top:0px;

        }
        .right-categoria{
            right: -150px;
        }
        .footer1{
            background-color: rgb(0, 21, 89);
        }
    </style>
</head>
<body class="bg-slate-100 text-gray-500">
    <!-- Header -->
    <header class="hidden lg:block container-fluid sticky top-0 px-14 azul1 titulos">
        <div class="items-center justify-between flex px-15 py-4 my-4 mx-auto w-full">
            <div class=" text-2xl text-cyan font-semibold inline-flex items-center">
                <a href="{{route('home.index')}}">
                    <img src="{{URL::asset('img/Logo_Prevycons.png')}}" class=" w-2/4"
                    alt="logo">
                </a>
            </div>
            <div class="flex">
                <ul class="flex nav">
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded"><a class="font-black" href="{{route('home.index')}}">Inicio</a></li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black" href="{{route('about.index')}}">Conózcanos</a>
                        <br>
                        <ul class="shadow-xl filtro1 text-sm px-auto bg-transparent text-slate-50 rounded border-1 border-orange-600">
                            <li class="invisible"><br> space <br></li>
                            <a class="" href="{{route('about.index')}}"><li class="bgazulmenu p-2 text-xs border ">¿Quiénes somos?</li></a>
                            <a class="" href="{{route('about.team')}}"><li class="bgazulmenu p-2 text-xs border ">Nuestro equipo</li></a>
                            <a class="" href="{{route('about.ptd')}}"><li class="bgazulmenu p-2 text-xs border ">Política de tratamiento de datos</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black" href="{{route('servicios.index')}}">Servicios</a>
                        <ul class="filtro1 px-auto bg-transparent text-slate-50 rounded text-sm shadow-xl">
                            <li class="invisible"><br> space <br></li>
                            <li class="text-sm font-semibold px-1 border-2 bgazulmenu">Sistemas de gestión</li>
                            <a class="" href="{{route('servicios.show',1)}}"><li class="bgazulmenu p-2 text-xs border-2">Gestión de calidad</li></a>
                            <a class="" href="{{route('servicios.show',2)}}"><li class="bgazulmenu p-2 text-xs border-2">Gestión de seguridad y salud en el trabajo</li></a>
                            <a class="" href="{{route('servicios.show',3)}}"><li class="bgazulmenu p-2 text-xs border-2">Gestión documental</li></a>
                            <a class="" href="{{route('servicios.show',4)}}"><li class="bgazulmenu p-2 text-xs border-2">Gestión ambiental</li></a>

                            <li class="text-sm font-semibold px-1 border-2 bgazulmenu">Otros servicios</li>
                            <a class="" href="{{route('servicios.show',5)}}"><li class="bgazulmenu p-2 text-xs border-2">Plan estratégico de seguridad vial</li></a>
                            <a class="" href="{{route('servicios.show',6)}}"><li class="bgazulmenu p-2 text-xs border-2">Auditorías</li></a>
                            <a class="" href="{{route('servicios.show',7)}}"><li class="bgazulmenu p-2 text-xs border-2">Capacitaciones para SG SST</li></a>
                            <a class="" href="{{route('servicios.show',8)}}"><li class="bgazulmenu p-2 text-xs border-2">Reporte e investigación de incidentes, accidentes de trabajo y enfermedades laborales</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black" href="{{route('blog.index')}}">Blog</a>
                        <ul class="shadow-xl filtro2 px-auto bg-transparent text-slate-50 rounded">
                            <li class="invisible"> space </li>
                            <li class="invisible text-xs"> space </li>
                            <li class="bgazulmenu p-2 text-xs border-2">1</li>
                            <li class="bgazulmenu p-2 text-xs border-2">2</li>
                            <li class="bgazulmenu p-2 text-xs border-2">3</li>
                            <li class="bgazulmenu p-2 text-xs border-2">4</li>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black" href="{{route('novedades.index')}}">Novedades</a>
                        <br>
                        <ul class="shadow-xl filtro2 text-sm px-auto bg-transparent text-slate-50 rounded border-1 border-orange-600">
                            <li class="invisible "><br> space <br></li>
                            <a class="" href="{{route('about.index')}}"><li class="bgazulmenu p-2 text-xs border-2">Noticias</li></a>
                            <a class="" href="{{route('about.team')}}"><li class="bgazulmenu p-2 text-xs border">Normas</li></a>
                            <a class="" href="{{route('about.ptd')}}"><li class="bgazulmenu p-2 text-xs border-2">Decretos</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black" href="{{route('catalogo.index')}}">Catálogo</a>
                        <ul class="shadow-xl filtro22 text-sm px-auto bg-transparent text-slate-50 rounded">
                            <li class="invisible"><br> <br></li>
                            <li class="bgazulmenu p-2 text-xs">Sectores
                                <ul class=" shadow-xl filtro3 px-auto bg-slate-50 text-slate-50 rounded border-1 border-orange-600 text-sm">
                                    <a class="" href="{{route('about.index')}}"><li class="bgazulmenu2 p-2 text-xs">Industrial</li></a>
                                    <a class="" href="{{route('about.team')}}"><li class="bgazulmenu2 p-2 text-xs">Médico</li></a>
                                    <a class="" href="{{route('about.ptd')}}"><li class="bgazulmenu2 p-2 text-xs">Manufactura</li></a>
                                    <a class="" href="{{route('about.ptd')}}"><li class="bgazulmenu2 p-2 text-xs">Comercial</li></a>
                                </ul>
                            </li>
                            <li class="bgazulmenu p-2 text-xs">Categorías
                                <ul class="shadow-xl filtro3 px-auto bg-slate-50 text-slate-50 rounded border-1 border-orange-600 text-sm" name='tipo'>
                                    <!-- Buscar otra manera de filtrar desde acá -->
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+MANOS">       <li class="bgazulmenu2  p-2 text-xs"> Protección Manos       </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+CABEZA">      <li class="bgazulmenu2  p-2 text-xs"> Protección Cabeza      </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+RESPIRATORIA"><li class="bgazulmenu2  p-2 text-xs"> Protección Respiratoria</li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+CORPORAL">    <li class="bgazulmenu2  p-2 text-xs"> Protección Corporal    </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+VISUAL">      <li class="bgazulmenu2  p-2 text-xs"> Protección Visual      </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+AUDITIVA">    <li class="bgazulmenu2  p-2 text-xs"> Protección Auditiva    </li></a>
                                    <li class="bgazulmenu2 p-2 text-xs"> Trabajo seguro en alturas </li>


                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="ml-5 px-2 py-1 transition  hover:border-gray-500 hover:scale-105 ease-in-out rounded font-semibold text-orange-600 border-2 border-gray-300"><a href="{{route('hire.index')}}">Contáctanos</a></li>

                    <li class="ml-5 px-2 py-1 transition hover:scale-105 ease-in-out rounded font-semibold text-slate-50 hover:bg-gray-500 bg-gray-800"><a href="{{route('login.index')}}">Ingresar</a></li>

                </ul>
            </div>
        </div>
    </header>
    <!-- nav -->

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-slate-100 block lg:hidden titulos">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="{{route('home.index')}}" class="flex items-center">
              <img src="{{URL::asset('img/Logo_Prevycons.png')}}" class="mr-3 h-6 sm:h-9" alt="Logo" />
          </a>
          <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-300 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full lg:block lg:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-base font-medium">
              <li>
                <a href="{{route('home.index')}}" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded lg:bg-transparent lg:text-gray-800 lg:p-0 dark:text-white lg:hover:text-orange-600" aria-current="page">Inicio</a>
              </li>
              <li>
                <a href="{{route('about.index')}}" class="block py-2 pr-4 pl-3 text-zinc-500 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-orange-600 lg:p-0 dark:text-gray-800 lg:dark:hover:text-orange-600 dark:hover:bg-slate-200 dark:hover:text-orange-600 lg:dark:hover:bg-transparent dark:border-gray-700">Conózcanos</a>
              </li>
              <li>
                <a href="{{route('servicios.index')}}" class="block py-2 pr-4 pl-3 text-zinc-500 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-orange-600 lg:p-0 dark:text-gray-800 lg:dark:hover:text-orange-600 dark:hover:bg-slate-200 dark:hover:text-orange-600 lg:dark:hover:bg-transparent dark:border-gray-700">Servicios</a>
              </li>
              <li>
                <a href="{{route('blog.index')}}" class="block py-2 pr-4 pl-3 text-zinc-500 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-orange-600 lg:p-0 dark:text-gray-800 lg:dark:hover:text-orange-600 dark:hover:bg-slate-200 dark:hover:text-orange-600 lg:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
              </li>
              <li>
                <a href="{{route('novedades.index')}}" class="block py-2 pr-4 pl-3 text-zinc-500 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-orange-600 lg:p-0 dark:text-gray-800 lg:dark:hover:text-orange-600 dark:hover:bg-slate-200 dark:hover:text-orange-600 lg:dark:hover:bg-transparent dark:border-gray-700">Novedades</a>
              </li>
              <li>
                <a href="{{route('catalogo.index')}}" class="block py-2 pr-4 pl-3 text-zinc-500 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-orange-600 lg:p-0 dark:text-gray-800 lg:dark:hover:text-orange-600 dark:hover:bg-slate-200 dark:hover:text-orange-600 lg:dark:hover:bg-transparent dark:border-gray-700">Catálogo</a>
              </li>
              <li>
                <a href="{{route('hire.index')}}" class="block py-2 pr-4 pl-3 text-orange-600 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-orange-600 lg:p-0 dark:text-orange-600 lg:dark:hover:text-orange-600 dark:hover:bg-slate-200 dark:hover:text-orange-600 lg:dark:hover:bg-transparent dark:border-gray-700 lg:hover:border-gray-500 lg:hover:scale-105 lg:ease-in-out  lg:border-2 lg:border-gray-300 lg:rounded lg:px-2 lg:transition">Contáctanos</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>



    <!-- Desde acá es el contenido del HOME -->
    <div class="flex flex-col  mx-auto h-auto azul1 titulos">
        <div class="ml-10 mt-5">
            <br>
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl text-center">
            <h1>Bienvenidos a Prevycons</h1> 
            <h1><br></h1>
        </div>
    </div>


    <div class="container py-5 md:px-10 sm:px-5 mx-auto">
        <div id="default-carousel" class="relative" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-96 rounded-lg tamaño shadow-xl">
                <!-- Item 1 -->
                <div class="hidden duration-1000 ease-in-out shadow-3xl" data-carousel-item>
                    <img src="img/celular.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    <span class="sombra absolute top-1/3 left-24 text-4xl font-bold text-white text-left  sm:text-4xl">Siguenos en nuestras redes</span>
                    <span class="absolute top-52 left-24  text-white text-left text-2xl font-bold"><a href="#" class="bg-blue-600 p-2 rounded-full">Saber mas</a></span>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-1000 ease-in-out shadow-xl" data-carousel-item>
                    <img src="img/celular.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    <span class="sombra absolute top-1/3 left-24 text-4xl font-bold text-white text-left  sm:text-4xl">Siguenos en nuestras redes</span>
                    <span class="absolute top-52 left-24  text-white text-left text-2xl font-bold"><a href="#" class="bg-blue-600 p-2 rounded-full">Saber mas</a></span>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="img/celular.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    <span class="sombra absolute top-1/3 left-24 text-4xl font-bold text-white text-left  sm:text-4xl">Siguenos en nuestras redes</span>
                    <span class="absolute top-52 left-24  text-white text-left text-2xl font-bold"><a href="#" class="bg-blue-600 p-2 rounded-full">Saber mas</a></span></div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-20 h-2 bg-blue-700" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="bg-blue-700 w-20 h-2 " aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="bg-blue-700 w-20 h-2 " aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-16 h-16 rounded-full sm:w-16 sm:h-16 bgazulmenu2 group-focus:ring-4 group-focus:ring-white group-focus:ring-cyan-600/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none ml-20" data-carousel-next>
                <span class="inline-flex justify-center items-center w-16 h-16 rounded-full sm:w-16 sm:h-16 bgazulmenu2 group-focus:ring-4 group-focus:ring-white group-focus:ring-cyan-600/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>
    </div>

    <br>

    <div class="flex flex-col  mx-auto h-auto sm:text-3xl text-xl azul2 font-semibold portafolio">
        <div class="m-auto text-center sm:px-0 px-2">
            PORTAFOLIO DE SERVICIOS
        </div>
    </div>

    <br><br>

    <h2 class="text-center px-60">Servicio de Salud y Seguridad Ocupacional, Sistemas de Gestión Documental y Ambiental,
        Capacitación, IPS, Auditorías, EPP, PESV</h2>

    <br><br>
    
    <!-- Hasta acá contenido en home -->


    <!-- footer -->
    <footer class="footer1">
        <br>
        <img class="w-1/5 m-auto" src="{{URL::asset('img/Logo_Prevycons barra inferior.png')}}" alt="">
        <br>
        <p class="text-gray-400 m-auto text-center text-xs space-x-1"> <strong><a href="{{route('about.index')}}">NOSOTROS</a></strong>  |<strong><a href="{{route('servicios.index')}}">SERVICIOS</a></strong>  |<strong><a href="{{route('hire.index')}}">CONTACTO</a></strong></p>
        <br>
        <!-- redes sociales -->
        <div class="flex flex-row w-full justify-center">
            <div class="sm:basis-1/12 basis-1/4 flex flex-row">
                <div class="basis-1/4">
                    <a class="" href="https://www.facebook.com/prevycons" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/redes/Facebook Gris.png')}}" class="w-4 md:w-2/3 transition hover:scale-110 rounded m-auto" alt=""></a>
                </div>
                <div class="basis-1/4">
                    <a class="" href="https://wa.link/9qcq92" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/redes/Whatsapp Gris.png')}}" class="w-4 md:w-2/3 transition hover:scale-110 rounded m-auto" alt=""></a>
                </div>
                <div class="basis-1/4">
                    <a class="" href="https://www.instagram.com/prevycons" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/redes/Instagram Gris.png')}}" class="w-4 md:w-2/3 transition hover:scale-110 rounded m-auto" alt=""></a>
                </div>
                <div class="basis-1/4">
                    <a class="" href="" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/redes/youtube Gris.png')}}" class="w-4 md:w-2/3 transition hover:scale-110 rounded m-auto" alt=""></a>
                </div>
            </div>
        </div>

        <h5 class="p-5 text-gray-400 text-[10px]" style="text-align: center" ><strong>Copyright © 2016-2022 STEM</strong> Soluciones Tecnológicas S.A.S. All rights reserved.</h5 style="text-align: center">
    </footer>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>