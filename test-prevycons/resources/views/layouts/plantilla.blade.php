<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--favicon -->
    <link rel="shortcut icon" href="img/pagina web_favicon.png" type="image/x-icon">


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
    </style>
    <link rel="stylesheet" href="css/base.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- styles -->
</head>
<body>
    <!-- Header -->
    <header class="container-fluid  position-sticky top-0">
        <div class="menu">
            <p class="nombret">
                Prevycons
            </p> 
            <nav>
                <ul class="nav nav-pills mb-3 py-3 container lista" id="pills-tab" role="tablist">
                    <?php if(!empty($user)):
                        if($user['rol']==1){ ?>
                        <a href="insertar.php"><li>Administrar</li></a>
                    <?php }endif; ?>
                    <a href="{{route('home.index')}}"><li>Inicio</li></a>
                    <a href="{{route('about.index')}}"><li>Quienes somos</li></a>
                    <a href="{{route('servicio.index')}}"><li >Servicios</li> </a>
                    <a href="{{route('blog.index')}}"><li >Blog</li></a>
                    <a href="{{route('catalogo.index')}}"><li >Catálogo</li></a>
                    <?php if(!empty($user)): ?>
                            <a class="nombre_usuario" href="editar_user.php"><li> Hola, <?= $user['nombre']; ?> <?= $user['apellido']?></li></a>
                            <a href="logout.php"><li>Logout</li></a>
                            <a href="carrito.php"><li class="texto" >Carrito</li></a>
                    <?php else: ?>
                            <a href="login_user.php"><li>Login</li></a>
                    <?php endif; ?>
                    <a href="">Contactanos</a>
                    
                    
                    <!-- a href="index.php"><li ><img src="" alt=""></li></a> -->
                </ul>
            </nav>
        </div>
    </header>
    <!-- nav -->

    
    <!-- Contenido -->
    @yield('content')
    

    <!-- footer -->
    <footer>
        <h5 style="text-align: center"><strong>Copyright © 2016-2020 STEM</strong> Soluciones Tecnológicas S.A.S. All rights reserved.</h5 style="text-align: center">
    </footer>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>