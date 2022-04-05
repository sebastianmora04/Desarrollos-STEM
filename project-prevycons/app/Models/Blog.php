<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function getNameAttribute($value){
        return ucwords($value);
    }
    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }
    //protected function name(): Attribute
   // {
       // return new Attribute(
            /*Otra manera de definir funciones*/
            /* Accesor */
       //     get: function($value){
       //         return ucwords($value);
       //     }
       //     ,
            /* Mutador */
       /*     set: function($value){
                return strtolower($value);
            }
        ); */
  //  }
}
