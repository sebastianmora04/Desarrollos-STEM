@extends('layouts.plantilla2')

@section('title','Prevycons - Blog '. $blog->name)

@section('head')
    <style>
        .linea {
        border-top: 1px solid #7398fd;
        height: 2px;
        padding: 0;
        margin: 20px auto 0 auto;
        }
    </style>
@endsection

@section('content')
    
    <a href="{{route('blog.edit', $blog)}}">Editar post</a>
    <br><br><br>

    <div class="sm:grid sm:grid-cols-3 sm:px-10 px-4">
        <div class="sm:col-span-2 w-11/12 mx-auto sm:text-base text-[15px]">
            <img class="sm:w-11/12 w-full" src="{{URL::asset('img/blogprueba.png')}}" alt="">
            <br>
            <p class="text-slate-300">{{$blog->categoria}}</p>
            <strong class="sm:text-4xl text-3xl titulos tracking-wide">{{$blog->titulo}}</strong>

            <br><br>

            <p class="text-justify py-4"><?php echo nl2br($blog->informacion,FALSE) ?></p>
        </div>

        <br class="sm:hidden">
        
        <div class="mx-auto w-11/12">
            <h2 class="font-bold text-xl">COMENTARIOS</h2>
            <br>
            
            <div class="linea"></div>
            
            <div>
                <h4 class="text-lg font-bold">Joana</h4>
                <p class="text-justify text-xs">Lorem ipsum dolor sit amet, consectetuer adipiscit nulla
                    facilisis atrrdd vero erosasd et accumsana et iusto odio
                    dignisqwesimismod verdi qsdiiiwu iiguuwn mento santo
                    guudin ggefridn fatiidl enferndsm crarak giginti.</p>
            </div>

            <div class="linea"></div>
            
            <div>
                <h4 class="text-lg font-bold">Joana</h4>
                <p class="text-justify text-xs">Lorem ipsum dolor sit amet, consectetuer adipiscit nulla
                    facilisis atrrdd vero erosasd et accumsana et iusto odio
                    dignisqwesimismod verdi qsdiiiwu iiguuwn mento santo
                    guudin ggefridn fatiidl enferndsm crarak giginti.</p>
            </div>

            <div class="linea"></div>
            
            <div class="hidden sm:block">
                <h4 class="text-lg font-bold">Joana</h4>
                <p class="text-justify text-xs">Lorem ipsum dolor sit amet, consectetuer adipiscit nulla
                    facilisis atrrdd vero erosasd et accumsana et iusto odio
                    dignisqwesimismod verdi qsdiiiwu iiguuwn mento santo
                    guudin ggefridn fatiidl enferndsm crarak giginti.</p>
            </div>

            <div class="linea hidden sm:block"></div>

            <br>

            <div class="px-4">
                <textarea class="bg-transparent w-full" name="" id="" cols="30" rows="4"></textarea>
                <br>
                <button class="text-xs border border-blue-400 py-1 px-2 rounded-full">Enviar</button>
            </div>
        </div>
        
        <div class="col-span-3">
            
            <br>
            <div class="linea w-11/12"></div>
            <br><br>

        </div>
    </div>

   

    <br>
@endsection