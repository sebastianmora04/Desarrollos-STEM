@extends('layouts.plantilla')

@section('title','Prevycons - Quienes somos? '. $variable)

@section('content')
    <h2>Soy <?php
        if($variable2){
            echo  "$variable $variable2";
        }else{
            echo  $variable;
        }
        ?>
    </h2>
@endsection