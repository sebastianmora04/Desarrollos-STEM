<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto();

        $producto->name='Consultas';
        $producto->descripcion='Conozca mejor sobre seguridad ocupacional';

        $producto->save();

        $producto2 = new Producto();

        $producto2->name='Asesorías';
        $producto2->descripcion='Apoyo para implementar un buen sistema de seguridad';

        $producto2->save();
    }
}
