<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--favicon -->
    <link rel="shortcut icon" href="{{URL::asset('img/pagina web_favicon.png')}}" type="image/x-icon">

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
            min-width:100px;
        }
        .filtro22:hover{
            right: 20px;
            min-width:100px;
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
<body class="bg-slate-100">
    <!-- Header -->
    <header class="container-fluid  position-sticky top-0 bg-slate-50 px-14">
        <div class="items-center justify-between flex bg-opacity-90 px-15 py-4 my-4 mx-auto w-full">
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
                        <ul class="shadow-xl filtro1 text-sm px-auto bg-slate-50 text-slate-600 rounded border-1 border-orange-600">
                            <a class="" href="{{route('about.index')}}"><li class="hover:bg-slate-200">¿Quiénes somos?</li></a>
                            <a class="" href="{{route('about.team')}}"><li class="hover:bg-slate-200">Nuestro equipo</li></a>
                            <a class="" href="{{route('about.ptd')}}"><li class="hover:bg-slate-200">Política de tratamiento de datos</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a href="{{route('servicios.index')}}">Servicios</a>
                        <ul class="filtro1 px-auto bg-slate-50 text-slate-600 rounded text-sm shadow-xl">
                            <li class="text-lg">Sistemas de gestión</li>
                            <a class="" href="{{route('servicios.show',1)}}"><li class="px-4 hover:bg-slate-200">Gestión de calidad</li></a>
                            <a class="" href="{{route('servicios.show',2)}}"><li class="px-4 hover:bg-slate-200">Gestión de seguridad y salud en el trabajo</li></a>
                            <a class="" href="{{route('servicios.show',3)}}"><li class="px-4 hover:bg-slate-200">Gestión documental</li></a>
                            <a class="" href="{{route('servicios.show',4)}}"><li class="px-4 hover:bg-slate-200">Gestión ambiental</li></a>
                            <li class="text-lg">Otros servicios</li>
                            <a class="" href="{{route('servicios.show',5)}}"><li class="px-4 hover:bg-slate-200">Plan estratégico de seguridad vial</li></a>
                            <a class="" href="{{route('servicios.show',6)}}"><li class="px-4 hover:bg-slate-200">Auditorías</li></a>
                            <a class="" href="{{route('servicios.show',7)}}"><li class="px-4 hover:bg-slate-200">Capacitaciones para SG SST</li></a>
                            <a class="" href="{{route('servicios.show',8)}}"><li class="px-4 hover:bg-slate-200">Reporte e investigación de incidentes, accidentes de trabajo y enfermedades laborales</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a href="{{route('blog.index')}}">Blog</a>
                        <ul class="shadow-xl filtro2 px-auto bg-slate-50 text-slate-600 rounded">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a href="{{route('novedades.index')}}">Novedades</a>
                        <br>
                        <ul class="shadow-xl filtro1 text-sm px-auto bg-slate-50 text-slate-600 rounded border-1 border-orange-600">
                            <a class="" href="{{route('about.index')}}"><li class="hover:bg-slate-200">Noticias</li></a>
                            <a class="" href="{{route('about.team')}}"><li class="hover:bg-slate-200">Normas</li></a>
                            <a class="" href="{{route('about.ptd')}}"><li class="hover:bg-slate-200">Decretos</li></a>
                        </ul>
                    </li>
                    <li class="ml-5 px-1 py-1 transition  hover:scale-105 hover:text-orange-600 hover:underline-offset-2 hover:underline ease-in-out rounded">
                        <a href="{{route('catalogo.index')}}">Catálogo</a>
                        <ul class="shadow-xl filtro22 text-sm px-auto bg-slate-50 text-slate-600 rounded">
                            <li>Sectores
                                <ul class=" shadow-xl filtro3 px-auto bg-slate-50 text-slate-600 rounded border-1 border-orange-600 text-sm">
                                    <a class="" href="{{route('about.index')}}"><li class="hover:bg-slate-200">Industrial</li></a>
                                    <a class="" href="{{route('about.team')}}"><li class="hover:bg-slate-200">Médico</li></a>
                                    <a class="" href="{{route('about.ptd')}}"><li class="hover:bg-slate-200">Manufactura</li></a>
                                    <a class="" href="{{route('about.ptd')}}"><li class="hover:bg-slate-200">Comercial</li></a>
                                </ul>
                            </li>
                            <li>Categorías
                                <ul class="shadow-xl filtro3 px-auto bg-slate-50 text-slate-600 rounded border-1 border-orange-600 text-sm">
                                    <li>Protección Manual</li>
                                    <li>Protección Facial</li>
                                    <li>Protección Respiratoria</li>
                                    <li>Protección Corporal</li>
                                    <li>Protección Visual</li>
                                    <li>Protección Auditiva</li>
                                    <li>Trabajo seguro en alturas</li>
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

    
    <!-- Contenido -->
    @yield('content')
    

    <!-- footer -->
    <footer class=" bg-gray-300">
        <br>
        <div class="ml-auto flex flex-row w-full justify-end">
            <div class="basis-1/12 underline underline-offset-4">Siguenos </div>
            <div class="basis-1/12 justify-end"><a href="https://www.facebook.com/prevycons"><img src="{{URL::asset('img/facebook.png')}}" class="w-1/5" alt=""></a></div>
            <div class="basis-1/12 justify-end"><a href="https://wa.link/9qcq92"><img src="{{URL::asset('img/whatsapp.png')}}" class="w-1/5" alt=""></a></div>
            <div class="basis-1/12 justify-end"><a href="https://www.instagram.com/prevycons"><img src="{{URL::asset('img/instagram.png')}}" class="w-1/5" alt=""></a></div>
            <div class="basis-1/12 justify-end"><a href=""><img src="{{URL::asset('img/youtube.png')}}" class="w-1/5" alt=""></a></div>
        </div>
        <br>
        <h5 class="p-5 bg-gray-200" style="text-align: center"><strong>Copyright © 2016-2022 STEM</strong> Soluciones Tecnológicas S.A.S. All rights reserved.</h5 style="text-align: center">
    </footer>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>