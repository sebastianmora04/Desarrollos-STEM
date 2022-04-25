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

        .bordeazul{
            border-color: #148CEE;
            background-color: transparent;
        }
        .liviano{
            font-weight: 200;
        }
    </style>
</head>
<body class="bg-slate-100 azul1">
    <!-- Header -->


    <!-- Contenido -->
    @yield('content')


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
