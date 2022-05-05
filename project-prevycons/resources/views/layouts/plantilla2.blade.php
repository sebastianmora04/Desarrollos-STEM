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
    @yield('head')
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
            background-color: rgb(233, 241, 244)
        }
        .azul2{
            color: rgb(0, 130, 205);
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
        .bgslatemenu{
            background-color: rgba(233, 241, 244, 0.98);
            border-color: rgba(233, 241, 244, 0.98);
        }
        .bgslatemenu:hover{
            background-color: rgba(212, 212, 212, 0.98);
            border-color: rgba(212, 212, 212, 0.98)
        }
        .bgslatemenu2{
            background-color: rgba(233, 241, 244, 0.98);
            border-color: rgba(233, 241, 244, 0.98)
        }
        .bgslatemenu2:hover{
            background-color: rgba(212, 212, 212, 0.98);
            border-color: rgba(212, 212, 212, 0.98)
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
        .filtrologin{
            min-width: 100px;
        }
        .filtro2{
            min-width:100px;
        }
        .filtro22{
            min-width:80px;
        }
        .filtro32:hover{
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
<body class="bg-gradient-to-t from-[#001559] to-[#254ecc] text-[#e9f1f4]">
    <!-- Header -->
    <header class="hidden lg:block container-fluid sticky top-0 px-14 text-[#e9f1f4] bg-[#114398]">
        <div class="items-center justify-between flex px-15 pt-10 py-6  mx-auto w-full">
            <div class=" text-2xl text-cyan font-semibold inline-flex items-center">
                <a href="{{route('home.index')}}">
                    <img src="{{URL::asset('img/Logo_Prevycons Letra Blanca.png')}}" class=" w-2/4"
                    alt="logo">
                </a>
            </div>
            <div class="flex">
                <ul class="flex nav">
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-white hover:underline-offset-2 hover:underline ease-in-out rounded"><a class="font-black titulos" href="{{route('home.index')}}">Inicio</a></li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-white hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black titulos" href="{{route('about.index')}}">Conózcanos</a>
                        <br>
                        <ul class="shadow-xl filtro1 text-sm px-auto bg-transparent text-blue-700 rounded border-1 border-orange-600">
                            <li class="invisible"><br> space <br></li>
                            <a class="" href="{{route('about.index')}}"><li class="bgslatemenu p-2 text-xs border ">¿Quiénes somos?</li></a>
                            <a class="" href="{{route('about.team')}}"><li class="bgslatemenu p-2 text-xs border ">Nuestro equipo</li></a>
                            <a class="" href="{{route('about.ptd')}}"><li class="bgslatemenu p-2 text-xs border ">Política de tratamiento de datos</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-white hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black titulos" href="{{route('servicios.index')}}">Servicios</a>
                        <ul class="filtro1 px-auto bg-transparent text-blue-700 rounded text-sm shadow-xl">
                            <li class="invisible"><br> space <br></li>
                            <li class="text-sm font-semibold px-1 border-2 bgslatemenu titulos">Sistemas de gestión</li>
                            <a class="" href="{{route('servicios.show',1)}}"><li class="bgslatemenu p-2 text-xs border-2">Gestión de calidad</li></a>
                            <a class="" href="{{route('servicios.show',2)}}"><li class="bgslatemenu p-2 text-xs border-2">Gestión de seguridad y salud en el trabajo</li></a>
                            <a class="" href="{{route('servicios.show',3)}}"><li class="bgslatemenu p-2 text-xs border-2">Gestión documental</li></a>
                            <a class="" href="{{route('servicios.show',4)}}"><li class="bgslatemenu p-2 text-xs border-2">Gestión ambiental</li></a>

                            <li class="text-sm font-semibold px-1 border-2 bgslatemenu titulos">Otros servicios</li>
                            <a class="" href="{{route('servicios.show',5)}}"><li class="bgslatemenu p-2 text-xs border-2">Plan estratégico de seguridad vial</li></a>
                            <a class="" href="{{route('servicios.show',6)}}"><li class="bgslatemenu p-2 text-xs border-2">Auditorías</li></a>
                            <a class="" href="{{route('servicios.show',7)}}"><li class="bgslatemenu p-2 text-xs border-2">Capacitaciones para SG SST</li></a>
                            <a class="" href="{{route('servicios.show',8)}}"><li class="bgslatemenu p-2 text-xs border-2">Reporte e investigación de incidentes, accidentes de trabajo y enfermedades laborales</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-white hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black  titulos" href="{{route('blog.index')}}">Blog</a>
                        <ul class="shadow-xl filtro2 px-auto bg-transparent text-blue-700 rounded">
                            <li class="invisible"> space </li>
                            <li class="invisible text-xs"> space </li>
                            <li class="bgslatemenu p-2 text-xs border-2">1</li>
                            <li class="bgslatemenu p-2 text-xs border-2">2</li>
                            <li class="bgslatemenu p-2 text-xs border-2">3</li>
                            <li class="bgslatemenu p-2 text-xs border-2">4</li>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-white hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black titulos" href="{{route('novedades.index')}}">Novedades</a>
                        <br>
                        <ul class="shadow-xl filtro2 text-sm px-auto bg-transparent text-blue-700 rounded border-1 border-orange-600">
                            <li class="invisible "><br> space <br></li>
                            <a class="" href="{{route('novedades.index')}}?tipo=Noticias&nombre="><li class="bgslatemenu p-2 text-xs border-2">Noticias</li></a>
                            <a class="" href="{{route('novedades.index')}}?tipo=Normas&nombre="><li class="bgslatemenu p-2 text-xs border">Normas</li></a>
                            <a class="" href="{{route('novedades.index')}}?tipo=Decretos&nombre="><li class="bgslatemenu p-2 text-xs border-2">Decretos</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-white hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black titulos" href="{{route('catalogo.index')}}">Catálogo</a>
                        <ul class="shadow-xl filtro22 text-sm px-auto bg-transparent text-blue-700 rounded">
                            <li class="invisible"><br> <br></li>
                            <li class="bgslatemenu p-2 text-xs">Sectores
                                <ul class=" shadow-xl filtro3 px-auto bg-slate-50 text-blue-700 rounded border-1 border-orange-600 text-sm">
                                    <a class="" href="{{route('about.index')}}"><li class="bgslatemenu2 p-2 text-xs">Industrial</li></a>
                                    <a class="" href="{{route('about.team')}}"><li class="bgslatemenu2 p-2 text-xs">Médico</li></a>
                                    <a class="" href="{{route('about.ptd')}}"><li class="bgslatemenu2 p-2 text-xs">Manufactura</li></a>
                                    <a class="" href="{{route('about.ptd')}}"><li class="bgslatemenu2 p-2 text-xs">Comercial</li></a>
                                </ul>
                            </li>
                            <li class="bgslatemenu p-2 text-xs">Categorías
                                <ul class="shadow-xl filtro3 px-auto bg-slate-50 text-blue-700 rounded border-1 border-orange-600 text-sm" name='tipo'>
                                    <!-- Buscar otra manera de filtrar desde acá -->
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+MANOS">       <li class="bgslatemenu2  p-2 text-xs"> Protección Manos       </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+CABEZA">      <li class="bgslatemenu2  p-2 text-xs"> Protección Cabeza      </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+RESPIRATORIA"><li class="bgslatemenu2  p-2 text-xs"> Protección Respiratoria</li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+CORPORAL">    <li class="bgslatemenu2  p-2 text-xs"> Protección Corporal    </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+VISUAL">      <li class="bgslatemenu2  p-2 text-xs"> Protección Visual      </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+AUDITIVA">    <li class="bgslatemenu2  p-2 text-xs"> Protección Auditiva    </li></a>
                                    <li class="bgslatemenu2 p-2 text-xs"> Trabajo seguro en alturas </li>


                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="ml-5 px-2 py-1 transition  hover:border-gray-300 hover:scale-105 ease-in-out rounded font-semibold text-[#e9f1f4] border-2 border-gray-200 titulos"><a href="{{route('hire.index')}}">Contáctanos</a></li>

                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-white hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a class="font-black titulos" href="{{route('login.index')}}">Ingresar</a>
                        <br>
                        <ul class="shadow-xl filtrologin text-sm px-auto bg-transparent text-blue-700 rounded border-1 border-orange-600">
                            <li class="invisible"><br> space <br></li>
                            <a class="" href="{{route('login.index')}}"><li class="bgslatemenu p-2 text-[11px] border ">Iniciar Sesión</li></a>
                            <a class="" href="{{route('login.registro')}}">
                                <li class="bgslatemenu p-2 text-[10px] border flex flex-row">
                                    <img class="basis-1/4 w-5 h-5" src="{{URL::asset('img/login/Icono Crear cuenta.png')}}" alt=""> 
                                    <p class="basis-3/4 ml-2">  Regístrate</p>
                                </li>
                            </a>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </header>
    <!-- nav -->

    <nav class="px-2 sm:px-4 py-2.5 lg:hidden sticky text-[#e9f1f4] titulos bg-[#114398]">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="{{route('home.index')}}" class="flex items-center">
              <img src="{{URL::asset('img/Logo_Prevycons Letra Blanca.png')}}" class="mr-3 h-6 sm:h-9" alt="Logo" />
          </a>
          <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:hover:bg-blue-600 dark:focus:ring-blue-500" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full lg:block lg:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-base font-medium">
              <li>
                <a href="{{route('home.index')}}" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded lg:bg-transparent lg:p-0" aria-current="page">Inicio</a>
              </li>
              <li>
                <a href="{{route('about.index')}}" class="block py-2 pr-4 pl-3">Conózcanos</a>
              </li>
              <li>
                <a href="{{route('servicios.index')}}" class="block py-2 pr-4 pl-3">Servicios</a>
              </li>
              <li>
                <a href="{{route('blog.index')}}" class="block py-2 pr-4 pl-3">Blog</a>
              </li>
              <li>
                <a href="{{route('novedades.index')}}" class="block py-2 pr-4 pl-3">Novedades</a>
              </li>
              <li>
                <a href="{{route('catalogo.index')}}" class="block py-2 pr-4 pl-3">Catálogo</a>
              </li>
              <li>
                <a href="{{route('hire.index')}}" class="block py-2 pr-4 pl-3">Contáctanos</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Contenido -->
    @yield('content')


    <!-- footer -->
    <footer class="azul1">
        <br>
        <img class="w-1/5 m-auto" src="{{URL::asset('img/Logo_Prevycons azul_barra inferior.png')}}" alt="">
        <br>
        <p class=" m-auto text-center text-xs space-x-1"> <strong><a href="{{route('about.index')}}">NOSOTROS</a></strong>  |<strong><a href="{{route('servicios.index')}}">SERVICIOS</a></strong>  |<strong><a href="{{route('hire.index')}}">CONTACTO</a></strong></p>
        <br>
        <!-- redes sociales -->
        <div class="flex flex-row w-full justify-center">
            <div class="sm:basis-1/12 basis-1/4 flex flex-row">
                <div class="basis-1/4">
                    <a class="" href="https://www.facebook.com/prevycons" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/redes/Facebook Azul.png')}}" class="w-4 md:w-2/3 transition hover:scale-110 rounded m-auto" alt=""></a>
                </div>
                <div class="basis-1/4">
                    <a class="" href="https://wa.link/9qcq92" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/redes/Whatsapp Azul.png')}}" class="w-4 md:w-2/3 transition hover:scale-110 rounded m-auto" alt=""></a>
                </div>
                <div class="basis-1/4">
                    <a class="" href="https://www.instagram.com/prevycons" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/redes/Instagram Azul.png')}}" class="w-4 md:w-2/3 transition hover:scale-110 rounded m-auto" alt=""></a>
                </div>
                <div class="basis-1/4">
                    <a class="" href="" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/redes/youtube Azul.png')}}" class="w-4 md:w-2/3 transition hover:scale-110 rounded m-auto" alt=""></a>
                </div>
            </div>
        </div>

        <h5 class="p-5 text-[10px]" style="text-align: center" ><strong>Copyright © 2016-2022 STEM</strong> Soluciones Tecnológicas S.A.S. All rights reserved.</h5 style="text-align: center">
    </footer>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
