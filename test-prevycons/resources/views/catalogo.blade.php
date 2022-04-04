@extends('layouts.plantilla')

@section('title','Prevycons - Catálogo')

@section('content')

    <div class="bg-emerald-600 flex flex-col  mx-auto h-auto text-slate-50">
        <div class="ml-10 mt-5">
            <br>
        </div>
        <div class="ml-10 mb-5 text-5xl">
            <h1>Catálogo </h1> 
            <h1><br></h1>
        </div>
    </div>
    <br>
    <div>
        <p></p>
    </div>
    <br>
    <div class="flex flex-col  mx-auto h-auto text-2xl  underline underline-offset-8 text-gray-500">
        <div class="m-auto">
            ELEMENTOS DE PROTECCIÓN PERSONAL - EPP
        </div>
    </div>
    <br>
    <div class="flex flex-row">
        <div class="basis-1/3 p-4">
            <input type="checkbox" name="disponible" id="" value="disponible"> Disponible
            <br>
            <br>
            <p>Sectores</p>
            <input type="checkbox" name="" id=""> Industrial
            <br>
            <input type="checkbox" name="" id=""> Médico
            <br>
            <input type="checkbox" name="" id=""> Manufactura
            <br>
            <input type="checkbox" name="" id=""> Comercial
            <br><br>
            <p>Categorías</p>
            <input type="checkbox" name="" id=""> Protección manual
            <br>
            <input type="checkbox" name="" id=""> Protección facial
            <br>
            <input type="checkbox" name="" id=""> Protección respiratoria
            <br>
            <input type="checkbox" name="" id=""> Protección corporal
            <br>
            <input type="checkbox" name="" id=""> Protección visual
            <br>
            <input type="checkbox" name="" id=""> Protección auditiva
            <br>
            <input type="checkbox" name="" id=""> Trabajo seguro en alturas
        </div>

        <div class="grid grid-cols-3 gap-4  h-auto w-11/12 p-4 justify-center mx-auto basis-2/3">
            <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-full">
                <img src="img/pagina web_normal.png" class="w-1/3 justify-center object-center"
                        alt="logo-img">
                <a href=""><div class="">Producto</div></a>
            </div>
            <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-full">
                <img src="img/pagina web_normal.png" class="w-1/3 justify-center object-center"
                        alt="logo-img">
                <a href=""><div class="">Producto</div></a>
            </div>
            <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-full">
                <img src="img/pagina web_normal.png" class="w-1/3 justify-center object-center"
                        alt="logo-img">
                <a href=""><div class="">Producto</div></a>
            </div>
            <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-full">
                <img src="img/pagina web_normal.png" class="w-1/3 justify-center object-center"
                        alt="logo-img">
                <a href=""><div class="">Producto</div></a>
            </div>
            <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-full">
                <img src="img/pagina web_normal.png" class="w-1/3 justify-center object-center"
                        alt="logo-img">
                <a href=""><div class="">Producto</div></a>
            </div>
            <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-full">
                <img src="img/pagina web_normal.png" class="w-1/3 justify-center object-center"
                        alt="logo-img">
                <a href=""><div class="">Producto</div></a>
            </div>
            <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-full">
                <img src="img/pagina web_normal.png" class="w-1/3 justify-center object-center"
                        alt="logo-img">
                <a href=""><div class="">Producto</div></a>
            </div>
            <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-full">
                <img src="img/pagina web_normal.png" class="w-1/3 justify-center object-center"
                        alt="logo-img">
                <a href=""><div class="">Producto</div></a>
            </div>
            <div class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-full">
                <img src="img/pagina web_normal.png" class="w-1/3 justify-center object-center"
                        alt="logo-img">
                <a href=""><div class="">Producto</div></a>
            </div>
    
        </div>
    </div>



@endsection