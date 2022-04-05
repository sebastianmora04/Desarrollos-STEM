<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function getNameAttribute($value){
        return ucwords($value);
    }
    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }
    
}

