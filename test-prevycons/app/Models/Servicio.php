<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Servicio extends Model
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
    
    /* Versiones anteriores de laravel Accesores y Mutadores

    public function getNameAttribute($value){
        return ucwords($value);
    }
    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }
    
    */
}
