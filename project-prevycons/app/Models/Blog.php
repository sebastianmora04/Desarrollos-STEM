<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function getTituloAttribute($value){
        return ucwords($value);
    }
    public function setTituloAttribute($value){
        $this->attributes['titulo'] = strtolower($value);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function getGetLimitInformacionAttribute()
    {
        return substr($this->informacion, 0, 140) . '...';
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
