@extends('layouts.plantilla')

@section('title','Prevycons - Catálogo')

@section('head')

    <style>
        .bgfiltro{
            background-color: #d3dce0;
            border-color: transparent;
        }
    </style>

@endsection

@section('content')
    <br>
    
    <div class="sm:p-4 sm:text-base text-sm ">
        <form class="px-10 py-4 bg-slate-50 rounded-lg bg-inherit" action=""><!-- bg-gray-800 -->
            
            <label for="toggle-example" class="flex relative items-center mb-4 cursor-pointer hidden">
                <input type="checkbox" id="toggle-example" class="sr-only">
                <div class="w-11 h-6 bg-gray-200 rounded-full border border-gray-200 toggle-bg dark:bg-gray-700 dark:border-gray-600"></div>
                <span class="ml-3 font-medium">Disponible</span>
            </label>

            <div class="flex flex-row">
            
                <div class="basis-1/6">
                    <select name="sector" class="w-11/12 h-9 border bgfiltro font-bold azul2 rounded-lg" id="">
                        <option class="ml-3 text-sm font-medium titulos azul2">Sectores</option>
                        <option class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="">Industrial</option>
                        <option class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="">Médico</option>
                        <option class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="">Manufactura</option>
                        <option class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="">Comercial</option>
                    </select>
                </div>
                
                <div class="basis-7/12">
                    <input style="background-color: #d3dce0; border-color:transparent" class="w-11/12 h-9 lg:ml-4 md:ml-3 ml-1 bgfiltro rounded-lg font-bold" type="text" name="nombre" placeholder="Buscar producto" value="{{old('nombre')}}">
                </div>

                <div class="basis-1/6 azul2">
                    <select name="tipo" class="w-11/12 h-9 form-control rounded-lg bgfiltro font-bold azul2" id="exampleFormControlSelect1">
                        <option  class="ml-3 text-sm font-medium titulos azul2" value="">Categoría</option>
                        <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION MANOS">Protección manos</option>
                        <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION CABEZA">Protección cabeza</option>
                        <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION RESPIRATORIA">Protección respiratoria</option>
                        <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION CORPORAL">Protección corporal</option>
                        <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION VISUAL">Protección visual</option>
                        <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="PROTECCION AUDITIVA">Protección auditiva</option>
                        <option  class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-600" value="TRABAJO ">Trabajo seguro en alturas</option>
                    </select>
                </div>

                <div class="basis-1/12">
                    <button class="ml-2 px-2 py-1 transition hover:border-gray-500 hover:scale-105 ease-in-out rounded font-bold border-2 border-gray-300 azul2" type="submit">FILTRAR</button>
                </div>

            </div>

            
            
        </form>
    </div>

    <div class="flex flex-col  mx-auto h-auto azul2 titulos">
        <div class="ml-10 mt-5">
            <br>
        </div>
        <div class="sm:ml-10 sm:mb-5 sm:text-5xl text-3xl text-center">
            <h1>CATÁLOGO</h1> 
        </div>
    </div>
    
    <br>

    <div class="flex flex-col  mx-auto h-auto sm:text-xl text-lg font-semibold text-slate-500">
        <div class="m-auto text-center sm:px-0 px-2">
            Elementos de protección personal - EPP
        </div>
    </div>
    <br>
    
    

    <div class="sm:flex sm:flex-row bg-gray-200">

        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4  h-auto w-11/12 p-12 justify-center mx-auto">
            @foreach ($servicios2 as $item)
                
            <div class=" mx-auto max-w-sm rounded-lg shadow-md w-full bg-gradient-to-t from-[#254ecc] to-[#001559]">
                <a href="{{route('catalogo.show',$item->id)}}">
                    <img class="w-full" src="img/productos/{{$item->id}}.png" alt="" />
                </a>
                <div class="p-5">
        
                    <p class="mb-3 font-normal text-slate-100 text-xs">{{$item->categoria}}</p>
                    <a href="{{route('catalogo.show',$item->id)}}">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-white">{{$item->name}}</h5>
                    </a>
                    
                </div>
            </div>
            
            
                <!-- Prueba -->
                <!-- <div class="max-w-sm bg-slate-50 rounded-lg shadow-md  dark:border-gray-700">
                    
                    <a href="{{route('catalogo.show',$item->id)}}" class="w-full">
                        <img class="py-2 px-8 rounded-t-lg w-full" src="img/productos/{{$item->id}}.png" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <p class="p-2 text-xs justify-left text-gray-600">{{$item->categoria}}</p>
                        <a href="{{route('catalogo.show',$item->id)}}">
                            <h5 class="md:text-lg font-semibold tracking-tight">{{$item->name}}</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5 hidden">
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                        </div>
                        <div class="flex justify-between items-center hidden">
                            <span class="text-3xl font-bold text-white">$599</span>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                    </div>
                </div> -->

                <!-- Normal -->
                <!--<a href="{{route('catalogo.show',$item->id)}}" class="box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto">
                    <p class="text-xs justify-left text-gray-400">{{$item->categoria}}</p>
                    <br>
                    <img src="img/productos/{{$item->id}}.png" class="mx-auto w-1/2 justify-center"
                            alt="logo-img">
                    <br>
                    <div class="sm:text-base text-sm">
                        <strong>{{$item->name}}</strong>
                        <br>
                    </div> 
                </a> --> <!-- box-border h-auto p-4 shadow-lg hover:shadow-2xl w-auto -->
            @endforeach
        </div>

    </div>
    <div class="bg-gray-200">
        <div class="w-10/12 mx-auto bg-gray-200">
            {{$servicios2->links()}}
        </div>
        <br>
    </div>
</div>



@endsection