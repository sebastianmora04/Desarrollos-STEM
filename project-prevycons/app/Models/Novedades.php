<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novedades extends Model
{
    use HasFactory;

    public function getGetLimitInformacionAttribute()
    {
        return substr($this->informacion, 0, 140) . '...';
    }
}
