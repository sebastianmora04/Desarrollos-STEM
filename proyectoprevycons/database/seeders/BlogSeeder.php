<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog();

        $blog->name='Test número 1';
        $blog->informacion='El primer ejemplo de blog, prueba número 1';
        $blog->categoria="Test";
        $blog->save();

        $blog2 = new Blog();

        $blog2->name='Test número 2';
        $blog2->informacion='El primer ejemplo de blog, prueba número 2';
        $blog2->categoria="Test2";
        $blog2->save();
    }
}
