<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected function name(): Attribute
    {
        return new Attribute(
            /*Otra manera de definir funciones*/
            /* Accesor */
            get: fn($value) => ucwords($value)
            ,
            /* Mutador */
            set: function($value){
                return strtolower($value);
            }
        );
    }
}
