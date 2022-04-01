@extends('layouts.plantilla')

@section('title','Prevycons - Servicio '. $servicios->name)

@section('content')
    <img src="{{URL::asset($servicios->img)}}" class="mx-auto w-1/12 justify-center" alt="logo-img">
    <h2 class="mx-auto text-center"><strong>{{$servicios->name}}</strong></h2>
    <br>
    <p class="px-8">{{$servicios->descripcion}}</p>
    <br>
    <p class="px-8">{{$servicios->contenido}}</p>
    <br>
    <p class="px-8">
        El archivo ofrece apoyo interno en la toma de decisiones para el trabajo diario y asegura una preservación adecuada del patrimonio histórico y documental de la organización. Asimismo, tiene un importante papel en la calidad y la imagen de la organización, por los siguientes motivos:
    </p>
    <br>
    <div>
        <ul class="px-16">
            <li> - Evita la pérdida de la documentación, ya que todos los documentos están integrados e identificados en un único sistema</li>
            <li> - Evita la pérdida de tiempo en la recuperación de la documentación</li>
            <li> - Permite el control de accesos y de seguridad de la información de los documentos, e impide que terceras personas accedan a los contenidos</li>
            <li> - Establece un ciclo de vida de la documentación y posibilita su destrucción de un modo seguro y certificado</li>
            <li> - Establece la colaboración entre los diferentes órganos de la institución para una óptima gestión del SGD</li>
        </ul>
    </div>
    <br>
    <p class="px-8">La implementación del Sistema de Gestión Documental se ejecutará por fases:</p>
    <br>
    <div class="grid grid-cols-3 gap-4  h-auto w-11/12 p-4  justify-center mx-auto">
        <ul>
            <li><strong>Fase I</strong></li>
            <li> - Diagnóstico de archivos</li>
            <li> - Cuadro de clasificación documental</li>
            <li> - Actualización de las tablas de retención documental TRD</li>
            <li> - Banco terminológico</li>
            <li> - Programa de capacitación</li>
            <li> - Documentación del proceso de gestión documental, elaboración de procedimientos y formatos básicos</li>
        </ul>
        <ul>
            <li><strong>Fase II</strong></li>
            <li> - Elaboración del inventario de identificación del archivo central</li>
            <li> - Elaboración del programa de gestión documental PGD</li>
            <li> - Elaboración del plan institucional de archivos - PINAR</li>
            <li> - Registro de activos de información</li>
            <li> - Tablas de control y acceso</li>
            <li> - Organización documental y digitalización con fines de consulta</li>
        </ul>
        <ul>
            <li><strong>Fase III</strong></li>
            <li> - Plan de transferencias documentales</li>
            <li> - Instructivo para la elaboración del sistema integrado de conservación - SIC</li>
            <li> - Instructivo para la elaboración del Modelo de requisitos para GDE</li>
            <li> - Guía de implementación de un sistema de gestión de documentos electrónicos SGDEA</li>
        </ul>
    </div>
@endsection