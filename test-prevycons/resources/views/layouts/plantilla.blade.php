<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--favicon -->
    <link rel="shortcut icon" href="img/pagina web_favicon.png" type="image/x-icon">

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
</head>
<body class="bg-slate-100">
    <!-- Header -->
    <header class="container-fluid  position-sticky top-0 bg-slate-50 px-14">
        <div class="items-center justify-between flex bg-opacity-90 px-15 py-4 my-4 mx-auto w-full">
            <div class=" text-2xl text-cyan font-semibold inline-flex items-center">
                <img src="img/pagina web_horizontal.png" class="w-1/3"
                    alt="logo-img">
            </div>
            <div class="flex">
                <ul class="flex text-black-600">
                    <li class="ml-5 px-1 py-1 transition hover:bg-orange-300 hover:scale-110 ease-in-out rounded"><a href="{{route('home.index')}}">Inicio</a></li>
                    <li class="ml-5 px-1 py-1 transition hover:bg-orange-300 hover:scale-110 ease-in-out rounded"><a href="{{route('about.index')}}">Conozcanos</a></li>
                    <li class="ml-5 px-1 py-1 transition hover:bg-orange-300 hover:scale-110 ease-in-out rounded"><a href="{{route('servicio.index')}}">Servicios</a></li>
                    <li class="ml-5 px-1 py-1 transition hover:bg-orange-300 hover:scale-110 ease-in-out rounded"><a href="{{route('blog.index')}}">Blog</a></li>
                    <li class="ml-5 px-1 py-1 transition hover:bg-orange-300 hover:scale-110 ease-in-out rounded"><a href="{{route('blog.index')}}">De_interés</a></li>
                    <li class="ml-5 px-1 py-1 transition hover:bg-orange-300 hover:scale-110 ease-in-out rounded"><a href="{{route('catalogo.index')}}">Catálogo</a></li>
                    <li class="ml-5 px-2 py-1 transition hover:bg-gray-300 hover:scale-110 ease-in-out rounded font-semibold text-orange-600 border-2 border-gray-600"><a href="">Contactanos</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- nav -->

    
    <!-- Contenido -->
    @yield('content')
    

    <!-- footer -->
    <footer>
        <h5 class="p-5 bg-gray-300" style="text-align: center"><strong>Copyright © 2016-2022 STEM</strong> Soluciones Tecnológicas S.A.S. All rights reserved.</h5 style="text-align: center">
    </footer>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>