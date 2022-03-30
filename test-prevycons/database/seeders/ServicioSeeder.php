<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicio = new Servicio();

        $servicio->name='Consultas';
        $servicio->descripcion='Conozca mejor sobre seguridad ocupacional';

        $servicio->save();

        $servicio2 = new Servicio();

        $servicio2->name='Asesorías';
        $servicio2->descripcion='Apoyo para implementar un buen sistema de seguridad';

        $servicio2->save();

        $servicio3 = new Servicio();

        $servicio3->name='Asesorías';
        $servicio3->descripcion='Apoyo para implementar un buen sistema de seguridad';

        $servicio3->save();

        $servicio4 = new Servicio();

        $servicio4->name='Asesorías';
        $servicio4->descripcion='Apoyo para implementar un buen sistema de seguridad';

        $servicio4->save();

    }
}
