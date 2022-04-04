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

        $servicio->name='Gestión de calidad (Normas ISO 9001, ISO 14001, ISO 45001)';
        $servicio->descripcion='Los Sistemas de Gestión son una herramienta que le permite a las empresas optimizar recursos, reducir costos y mejorar la productividad.';
        $servicio->contenido='Están basados en Normas Internacionales que permiten controlar distintas facetas en una empresa, como la calidad de su producto o servicio, los impactos Ambientales que pueda ocasionar, la seguridad y salud de los trabajadores, la responsabilidad social o la innovación.';
        $servicio->img="img/web/gestioncalidad.png";
        $servicio->save();

        $servicio2 = new Servicio();

        $servicio2->name='Gestión de salud y seguridad en el trabajo';
        $servicio2->descripcion='SG-SST es aquel que debe ser implementado por todos los empleadores y consiste en el desarrollo de un proceso lógico y por etapas, basado en la mejora continua.';
        $servicio2->contenido='De acuerdo al decreto 1072 de 2015 el empleador debe definir los requisitos de conocimiento y práctica en Seguridad y Salud en el Trabajo, necesarios para sus trabajadores, también debe adoptar y mantener disposiciones para su cumplimiento en todos los aspectos de la ejecución, con el fin de prevenir accidentes de trabajo y enfermedades laborales.';
        $servicio2->img="img/web/gestionsst.png";
        $servicio2->save();

        $servicio3 = new Servicio();

        $servicio3->name='Gestión documental';
        $servicio3->descripcion='GD ';
        $servicio3->contenido='a.';
        $servicio3->img="img/web/gestiondocumental.png";
        $servicio3->save();

        $servicio4 = new Servicio();

        $servicio4->name='Gestión ambiental';
        $servicio4->descripcion='Prevycons realiza para usted asesorías ambientales en: Manejo de residuos sólidos, Ahorro y uso eficiente de agua y energía, Política cero papeles, vertimientos, Residuos peligrosos, y todo lo concerniente a la normatividad ambiental vigente.';
        $servicio4->contenido='En nuestra empresa PREVICONS trabajamos día a día para el mejoramiento e implementación de los requisitos legales adaptados a su empresa minimizando los impactos y fortaleciendo su economía en pro de un mejoramiento continuo. 
        El Plan de Gestión Integral de Residuos Sólidos está orientado a racionalizar y optimizar los recursos, mitigar los impactos negativos, y contribuir a un cambio en la cultura y en las formas convencionales del manejo de los residuos por las empresas cabe resaltar que la efectividad de estos procedimientos está en el conocimiento y grado de apropiación que de ellos hagan todos los actores involucrados en el manejo de los residuos en las diferentes dependencias de la empresa.';
        $servicio4->img="img/web/gestionambiental.png";
        $servicio4->save();

        $servicio5 = new Servicio();

        $servicio5->name='Plan Estrategico de Seguridad Vial';
        $servicio5->descripcion='La implementación en su empresa de la norma ISO 39001, 
        tiene por objeto brindar a su empresa herramientas que le ayuden a reducir o eliminar la incidencia del riesgo de muerte y lesiones graves en sus personales relacionadas con accidentes de tránsito.';
        $servicio5->contenido='';
        $servicio5->img="img/web/pesv.png";
        $servicio5->save();

        $servicio6 = new Servicio();

        $servicio6->name='Auditorías';
        $servicio6->descripcion='Prevycons presta servicios de evaluación de la conformidad a Sistemas de Gestión con el propósito de identificar oportunidades de mejora en las organizaciones y generar un valor agregado en los colaboradores con un sentido imparcial, humano y objetivo.';
        $servicio6->contenido='Evaluamos el desempeño de procesos de negocios para validar que tanto están aportando al cumplimiento de los objetivos corporativos de la organización y así detectar posibles desviaciones y lograr una mejora en sus operaciones
        De acuerdo al Decreto 1072 del 2015, el empleador debe realizar una auditoría anual, la cual será planificada con la participación del Comité Paritario o Vigía de seguridad y salud en el trabajo.
        PREVICONS SAS realiza auditorías internas a los sistemas de SALUD Y SEGURIDAD EN EL TRABAJO de acuerdo al decreto 1072 de 2015, sistemas de gestión de calidad ISO 9001:2015, ISO 14001:2015 Y OHSAS 18001:2007. 
        ';
        $servicio6->img="img/web/auditorias.png";
        $servicio6->save();

        $servicio7 = new Servicio();

        $servicio7->name='CAPACITACIONES PARA SG SST';
        $servicio7->descripcion='De acuerdo al decreto 1072 de 2015 el empleador debe definir los requisitos de conocimiento y práctica en Seguridad y Salud en el Trabajo, 
        necesarios para sus trabajadores, también debe adoptar y mantener disposiciones para su cumplimiento en todos los aspectos de la ejecución, con el fin de prevenir accidentes de trabajo y enfermedades laborales';
        $servicio7->contenido='Para este cumplimiento se debe desarrollar un programa de capacitación que facilite la identificación de peligros y el control de riesgos relacionados con el trabajo a todo el personal involucrado. Este procedimiento debe ser impartido por personal idóneo y en conformidad a la normatividad vigente para su correcta divulgación o comunicación de acuerdo a la necesidad de cada empresa por su actividad económica.
        Diseñamos y ejecutamos su plan de capacitación anual de acuerdo a los lineamientos del Sistema de Gestión de seguridad y salud en el trabajo. (Decreto 1072 de 2015) en cuanto a su administración, aplicación y evaluación.
        ';
        $servicio7->img="img/web/csgsst.png";
        $servicio7->save();

        $servicio8 = new Servicio();

        $servicio8->name='REPORTE E INVESTIGACION DE INCIDENTES, ACCIDENTES DE TRABAJO Y ENFERMEDADES LABORALES';
        $servicio8->descripcion='La investigación del accidente Laboral es una acción importante de la Seguridad Industrial, y lo enfoca desde el punto de vista preventivo, estudiando sus causas, sus fuentes, sus agentes, su tipo, todo ello con el fin de desarrollar la prevención.';
        $servicio8->contenido='Todos los accidentes e incidentes  laborales deben ser investigados (estudiados) de manera seria, técnica y científica para establecer cuáles fueron sus causas y conocer toda la información posible en relación a su ocurrencia para con este conocimiento planear estrategias de promoción de trabajo seguro y de prevención de los accidentes, preferentemente accidentes que generen danos en la salud importantes medidos en incapacidad, invalidez o muerte y pérdidas o costos económicos significativos.
        En PREVYCONS SAS acompañamos todos los pasos requeridos en Investigación de accidentes de trabajo Mortales, Graves y Leves, utilizando técnicas de análisis de causalidad homologadas y de acuerdo a lo establecido en el decreto 1530 de 1996, Resolución 1401 de 2007, entre otras normas.
        ';
        $servicio8->img="img/web/reporteincidentes.png";
        $servicio8->save();

    }
}
