@extends('layouts.plantilla')

@section('title','Prevycons - Login ')

@section('head')
    <style>
        body{
            background-image: url(../images/bg4.jpg);
            font-family: 'Poppins', sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-color: #ffffff; 
        }

        main{
            width: 100%;
            padding: 20px;
            margin: auto;
            margin-top: 100px;
        }

        .contenedor__todo{
            width: 100%;
            max-width: 800px;
            margin: auto;
            position: relative;
        }

        .caja__trasera{
            width: 100%;
            padding: 10px 20px;
            display: flex;
            justify-content: center;
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            background-color: #0c9b18;
            border-radius: 20px;
        }

        .caja__trasera div{
            margin: 100px 40px;
            color: white;
            margin-top: 150px;
            transition: all 500ms;
        }


        .caja__trasera div p,
        .caja__trasera button{
            margin-top: 30px;
        }

        .caja__trasera div h3{
            font-weight: 400;
            font-size: 26px;
        }

        .caja__trasera div p{
            font-size: 16px;
            font-weight: 300;
        }

        .caja__trasera button{
            padding: 10px 40px;
            border: 2px solid #fff;
            font-size: 14px;
            background: transparent;
            font-weight: 600;
            cursor: pointer;
            color: white;
            outline: none;
            transition: all 300ms;
        }

        .caja__trasera button:hover{
            background: #fff;
            color: #ffdf00;
        }

        /*Formularios*/

        .contenedor__login-register{
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 380px;
            position: relative;
            top: -185px;
            left: 10px;

            /*La transicion va despues del codigo JS*/
            transition: left 500ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
        }

        .contenedor__login-register form{
            width: 100%;
            padding: 10px 15px;
            margin-top: -150px;
            background: white;
            position: absolute;
            border-radius: 20px;
        }

        .contenedor__login-register form h2{
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
            color: #ffdf00;
        }

        .contenedor__login-register form input{
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            border: none;
            background: #F2F2F2;
            font-size: 16px;
            outline: none;
        }

        .contenedor__login-register form button{
            padding: 10px 40px;
            margin-top: 40px;
            border: none;
            font-size: 14px;
            background: #ffdf00;
            font-weight: 600;
            cursor: pointer;
            color: white;
            outline: none;
        }

        .role-admin{
            margin-left: -100px;
        }

        .entrar{
            margin-top: -80px;
        }
        label{
            margin-left: -155px;
            color:#757575;
        }


        .formulario__login{
            opacity: 1;
            margin-top: -393px;
            background-color: #ffffff;
            display: block;

        }
        .formulario__register{
            display: none;
        }

        .contenedor-iniciar-sesion{
            margin-top: -199px;
        }

        @media screen and (max-width: 850px){

            main{
                margin-top: 50px;
            }

            .caja__trasera{
                max-width: 350px;
                height: 300px;
                flex-direction: column;
                margin: auto;
            }

            .caja__trasera div{
                margin: 0px;
                position: absolute;
            }


            /*Formularios*/

            .contenedor__login-register{
                top: -10px;
                left: -5px;
                margin: auto;
            }

            .contenedor__login-register form{
                position: relative;
            }
        }
    </style>
@endsection

@section('content')
    <br>
    
    <div class="azul1 lg:px-24 md:px-16 sm:px-12  flex flex-col  mx-auto h-auto text-indigo-600 titulos">
        <div class="ml-10 mt-5 sm:text-base text-sm">
            
        </div>
        <div class="ml-10 mb-5 sm:text-5xl text-3xl">
            <h1>Login </h1> 
            <h1></h1>
        </div>
    </div>

    <br><br>

    <form class="md:w-1/2 m-auto w-3/4 " action="">

        <label class="font-semibold md:text-base text-sm">
            <p class="font-bold md:text-lg">Usuario</p>
            <br> 
            <input class="w-full border-1 rounded border-gray-500" type="text" name="username" value="{{old('username')}}">
        </label>
        <br>
        <label class="font-semibold md:text-base text-sm">
            <p class="font-bold md:text-lg">Contraseña</p> 
            <br> 
            <input type="password" class="w-full border-1 rounded border-gray-500" type="text" name="pass" value="">
        </label>
        <br>
        <br>
        <button type="submit" class="w-full px-2 py-1 border-2 text-slate-50 md:text-lg text-base bg-indigo-600 hover:bg-indigo-500 font-medium">Ingresar</button>    
    </form>
    <br>

<!-- Adaptado código -->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">

                    <!--Login-->
            
                    <div class="contenedor-iniciar-sesion">
                    <form  action="<?=$_SERVER['PHP_SELF']?>" class="formulario__login" method="POST">
                        <h2>Iniciar Sesión</h2>
                        <input type="email" placeholder="Correo Electronico" name="correo-login">
                        <input type="password" placeholder="Contraseña" name="pass-login">
                        <br>
                        <br>
                        <button class="entrar" name="entrar" type="submit">Entrar</button>
                    </form>
                    </div>
            
                    <!--Register-->

                    <form action="<?=$_SERVER['PHP_SELF']?>" class="formulario__register" method="POST">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nro. identificacion" name="id">
                        <input type="text" placeholder="Nombre" name="nombre">
                        <input type="text" placeholder="Apellido" name="apellido">
                        <input type="email" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="username">
                        <input type="password" placeholder="Contraseña" name="pass">
                        <button name="enviar" type="submit">Regístrarse</button>
                    </form>

                </div>
            </div> 
    <script>
        document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
        document.getElementById("btn__registrarse").addEventListener("click", register);
        window.addEventListener("resize", anchoPage);

        //Declarando variables
        var formulario_login = document.querySelector(".formulario__login");
        var formulario_register = document.querySelector(".formulario__register");
        var contenedor_login_register = document.querySelector(".contenedor__login-register");
        var caja_trasera_login = document.querySelector(".caja__trasera-login");
        var caja_trasera_register = document.querySelector(".caja__trasera-register");

            //FUNCIONES

        function anchoPage(){

            if (window.innerWidth > 850){
                caja_trasera_register.style.display = "block";
                caja_trasera_login.style.display = "block";
            }else{
                caja_trasera_register.style.display = "block";
                caja_trasera_register.style.opacity = "1";
                caja_trasera_login.style.display = "none";
                formulario_login.style.display = "block";
                contenedor_login_register.style.left = "0px";
                formulario_register.style.display = "none";   
            }
        }

        anchoPage();


            function iniciarSesion(){
                if (window.innerWidth > 850){
                    formulario_login.style.display = "block";
                    contenedor_login_register.style.left = "10px";
                    formulario_register.style.display = "none";
                    caja_trasera_register.style.opacity = "1";
                    caja_trasera_login.style.opacity = "0";
                }else{
                    formulario_login.style.display = "block";
                    contenedor_login_register.style.left = "0px";
                    formulario_register.style.display = "none";
                    caja_trasera_register.style.display = "block";
                    caja_trasera_login.style.display = "none";
                }
            }

            function register(){
                if (window.innerWidth > 850){
                    formulario_register.style.display = "block";
                    contenedor_login_register.style.left = "410px";
                    formulario_login.style.display = "none";
                    caja_trasera_register.style.opacity = "0";
                    caja_trasera_login.style.opacity = "1";
                }else{
                    formulario_register.style.display = "block";
                    contenedor_login_register.style.left = "0px";
                    formulario_login.style.display = "none";
                    caja_trasera_register.style.display = "none";
                    caja_trasera_login.style.display = "block";
                    caja_trasera_login.style.opacity = "1";
                }
        }
    </script>
@endsection