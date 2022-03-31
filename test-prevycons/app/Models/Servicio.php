<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Servicio extends Model
{
    use HasFactory;

    
    
    /* Versiones anteriores de laravel Accesores y Mutadores

    public function getNameAttribute($value){
        return ucwords($value);
    }
    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }
    
    */
}
