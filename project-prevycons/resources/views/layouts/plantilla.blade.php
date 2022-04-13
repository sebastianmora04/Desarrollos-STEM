<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--favicon -->
    <link rel="shortcut icon" href="{{URL::asset('img/pagina_web_favicon.png')}}" type="image/x-icon">

<!--
    <style>
body{
    font-family: 'Poppins', sans-serif;
    margin:0;
    background-color: #ffffff;
}

.nombret {
    background-color: #ff6600b9;
    font-size: 20px;
    padding: 15px 25px 15px 25px;
    display: flex;
    align-items: center;
}

.menu li{
    list-style: none;
    margin-right: 15px;
}

.menu ul{
    display: flex;
    align-items: center;
}

.menu{
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: black;
    font-family: 'Poppins', sans-serif;
}

.menu img{
    width: 60px;
    margin-bottom: -3px;
    margin-left: -5px;
    margin-right: 10px;
}

.lista{
    display: flex;
}

a{
    text-decoration: none;
    color: black;
}

a:hover{
    text-decoration: none;
    color: black;
}

.titulos{
    font-size: 30px;
    background: #0c9b18;
    margin: 40px;
    color: white;
    padding: 15px 30px 15px 30px;
    border-radius: 73px;
    text-align: center;
}

@media (max-width: 768px) {
    .titulos{
        font-size: 2.5rem;
    }
}
.contenedor{
    max-width: 1280px;
    width: 90%;
    margin: auto;
}


/** footer */

.contenido-foter{
    background-color: #0c9b18;
    padding: 30px;
}
.iconos{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.iconos-centrar{
    display: flex;
    justify-content: center;
    align-items: center;
}
    </style> -->
    @yield('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />
    <!-- styles -->

    <style type="text/css">
        
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
        
    </style>
</head>
<body class="bg-slate-100 text-gray-800">
    <!-- Header -->
    <header class="hidden lg:block container-fluid  position-sticky top-0 px-14">
        <div class="items-center justify-between flex px-15 py-4 my-4 mx-auto w-full">
            <div class=" text-2xl text-cyan font-semibold inline-flex items-center">
                <img src="{{URL::asset('img/web/LOGOTIPO_PREVYCONS.png')}}" class=" w-2/4"
                    alt="logo">
            </div>
            <div class="flex">
                <ul class="flex text-black-600 nav">
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded"><a href="{{route('home.index')}}">Inicio</a></li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a href="{{route('about.index')}}">Conózcanos</a>
                        <br>
                        <ul class="shadow-xl filtro1 text-sm px-auto bg-transparent text-slate-600 rounded border-1 border-orange-600">
                            <li class="invisible"><br> space <br></li>
                            <a class="" href="{{route('about.index')}}"><li class="bg-slate-50 hover:bg-slate-200 p-2 text-xs border-2 border-slate-50">¿Quiénes somos?</li></a>
                            <a class="" href="{{route('about.team')}}"><li class="bg-slate-50 hover:bg-slate-200 p-2 text-xs border-2 border-slate-50">Nuestro equipo</li></a>
                            <a class="" href="{{route('about.ptd')}}"><li class="bg-slate-50 hover:bg-slate-200 p-2 text-xs border-2 border-slate-50">Política de tratamiento de datos</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a href="{{route('servicios.index')}}">Servicios</a>
                        <ul class="filtro1 px-auto bg-transparent text-slate-600 rounded text-sm shadow-xl">
                            <li class="invisible"><br> space <br></li>
                            <li class="text-sm font-semibold px-1 bg-slate-50 border-2 border-slate-50">Sistemas de gestión</li>
                            <a class="" href="{{route('servicios.show',1)}}"><li class="bg-slate-50 p-2 text-xs hover:bg-slate-200 border-2 border-slate-50">Gestión de calidad</li></a>
                            <a class="" href="{{route('servicios.show',2)}}"><li class="bg-slate-50 p-2 text-xs hover:bg-slate-200 border-2 border-slate-50">Gestión de seguridad y salud en el trabajo</li></a>
                            <a class="" href="{{route('servicios.show',3)}}"><li class="bg-slate-50 p-2 text-xs hover:bg-slate-200 border-2 border-slate-50">Gestión documental</li></a>
                            <a class="" href="{{route('servicios.show',4)}}"><li class="bg-slate-50 p-2 text-xs hover:bg-slate-200 border-2 border-slate-50">Gestión ambiental</li></a>
                            
                            <li class="text-sm font-semibold px-1 bg-slate-50 border-2 border-slate-50">Otros servicios</li>
                            <a class="" href="{{route('servicios.show',5)}}"><li class="bg-slate-50 p-2 text-xs hover:bg-slate-200 border-2 border-slate-50">Plan estratégico de seguridad vial</li></a>
                            <a class="" href="{{route('servicios.show',6)}}"><li class="bg-slate-50 p-2 text-xs hover:bg-slate-200 border-2 border-slate-50">Auditorías</li></a>
                            <a class="" href="{{route('servicios.show',7)}}"><li class="bg-slate-50 p-2 text-xs hover:bg-slate-200 border-2 border-slate-50">Capacitaciones para SG SST</li></a>
                            <a class="" href="{{route('servicios.show',8)}}"><li class="bg-slate-50 p-2 text-xs hover:bg-slate-200 border-2 border-slate-50">Reporte e investigación de incidentes, accidentes de trabajo y enfermedades laborales</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a href="{{route('blog.index')}}">Blog</a>
                        <ul class="shadow-xl filtro2 px-auto bg-transparent text-slate-600 rounded">
                            <li class="invisible"> space </li>
                            <li class="invisible text-xs"> space </li>
                            <li class="bg-slate-50 p-2 text-xs border-2 border-slate-50">1</li>
                            <li class="bg-slate-50 p-2 text-xs border-2 border-slate-50">2</li>
                            <li class="bg-slate-50 p-2 text-xs border-2 border-slate-50">3</li>
                            <li class="bg-slate-50 p-2 text-xs border-2 border-slate-50">4</li>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a href="{{route('novedades.index')}}">Novedades</a>
                        <br>
                        <ul class="shadow-xl filtro2 text-sm px-auto bg-transparent text-slate-600 rounded border-1 border-orange-600">
                            <li class="invisible "><br> space <br></li>
                            <a class="" href="{{route('about.index')}}"><li class="hover:bg-slate-200 bg-slate-50 p-2 text-xs border-2 border-slate-50">Noticias</li></a>
                            <a class="" href="{{route('about.team')}}"><li class="hover:bg-slate-200 bg-slate-50 p-2 text-xs border border-slate-50">Normas</li></a>
                            <a class="" href="{{route('about.ptd')}}"><li class="hover:bg-slate-200 bg-slate-50 p-2 text-xs border-2 border-slate-50">Decretos</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a href="{{route('catalogo.index')}}">Catálogo</a>
                        <ul class="shadow-xl filtro22 text-sm px-auto bg-transparent text-slate-600 rounded">
                            <li class="invisible"><br> <br></li>
                            <li class="hover:bg-slate-200 bg-slate-50 p-2 text-xs">Sectores
                                <ul class=" shadow-xl filtro3 px-auto bg-slate-50 text-slate-600 rounded border-1 border-orange-600 text-sm">
                                    <a class="" href="{{route('about.index')}}"><li class="hover:bg-slate-200  p-2 text-xs">Industrial</li></a>
                                    <a class="" href="{{route('about.team')}}"><li class="hover:bg-slate-200  p-2 text-xs">Médico</li></a>
                                    <a class="" href="{{route('about.ptd')}}"><li class="hover:bg-slate-200  p-2 text-xs">Manufactura</li></a>
                                    <a class="" href="{{route('about.ptd')}}"><li class="hover:bg-slate-200  p-2 text-xs">Comercial</li></a>
                                </ul>
                            </li>
                            <li class="hover:bg-slate-200 bg-slate-50 p-2 text-xs">Categorías
                                <ul class="shadow-xl filtro3 px-auto bg-slate-50 text-slate-600 rounded border-1 border-orange-600 text-sm" name='tipo'>
                                    <!-- Buscar otra manera de filtrar desde acá -->
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+MANOS">       <li class="hover:bg-slate-200  p-2 text-xs"> Protección Manos       </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+CABEZA">      <li class="hover:bg-slate-200  p-2 text-xs"> Protección Cabeza      </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+RESPIRATORIA"><li class="hover:bg-slate-200  p-2 text-xs"> Protección Respiratoria</li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+CORPORAL">    <li class="hover:bg-slate-200  p-2 text-xs"> Protección Corporal    </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+VISUAL">      <li class="hover:bg-slate-200  p-2 text-xs"> Protección Visual      </li></a>
                                    <a href="{{$cc=route('catalogo.index')}}?sector=&nombre=&tipo=PROTECCION+AUDITIVA">    <li class="hover:bg-slate-200  p-2 text-xs"> Protección Auditiva    </li></a>
                                    <li class="hover:bg-slate-200  p-2 text-xs"> Trabajo seguro en alturas </li>
                                    
                                
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="ml-5 px-2 py-1 transition  hover:border-gray-500 hover:scale-105 ease-in-out rounded font-semibold text-orange-600 border-2 border-gray-300"><a href="{{route('hire.index')}}">Contáctanos</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- nav -->
    
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-slate-100 block lg:hidden">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="{{route('home.index')}}" class="flex items-center">
              <img src="{{URL::asset('img/web/LOGOTIPO_PREVYCONS.png')}}" class="mr-3 h-6 sm:h-9" alt="Logo" />
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

    <!-- Contenido -->
    @yield('content')
    

    <!-- footer -->
    <footer class=" bg-gray-400">
        <br>
        <!-- redes sociales -->
        <div class="ml-auto flex flex-row w-full justify-end">
            <div class="sm:basis-1/6 basis-1/4 justify-end flex flex-row">
                <div class="basis-1/4">
                    <a class="" href="https://www.facebook.com/prevycons" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/facebook logo_icon.png')}}" class="w-4 md:w-1/2 transition hover:scale-110 rounded" alt=""></a>
                </div>
                <div class="basis-1/4">
                    <a class="" href="https://wa.link/9qcq92" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/whatsapp logo_icon.png')}}" class="w-4 md:w-1/2 transition hover:scale-110 rounded" alt=""></a>
                </div>
                <div class="basis-1/4">
                    <a class="" href="https://www.instagram.com/prevycons" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/instagram logo_icon.png')}}" class="w-4 md:w-1/2 transition hover:scale-110 rounded" alt=""></a>
                </div>
                <div class="basis-1/4">
                    <a class="" href="" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('img/youtube logo_icon.png')}}" class="w-4 md:w-1/2 transition hover:scale-110 rounded" alt=""></a>
                </div>
            </div>
        </div>

        <br>
        <h5 class="p-5 bg-gray-200 text-xs" style="text-align: right" ><strong>Copyright © 2016-2022 STEM</strong> Soluciones Tecnológicas S.A.S. All rights reserved.</h5 style="text-align: center">
    </footer>
    <!-- scripts -->
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>