<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //Protección auditiva
        $p = new Producto();

        $p->name='Protectores auditivos Steelpro modelo CM- 501';
        $p->descripcion='La línea de protectores auditivos Steelpro modelo CM- 501 para casco diseñada para proteger contra los riesgos diarios producidos por el ruido evitando pérdidas de audición. Es un protector auditivo dieléctrico ya que no posee componentes metálicos.';
        $p->precio=0;
        $p->cantidad=0;
        $p->categoria="PROTECCION AUDITIVA";
        $p->valoracion=0;
        $p->save();

        $p2 = new Producto();

        $p2->name='Protector auditivo de insercion';
        $p2->descripcion='Fabricado en silicona, con cuatro membranas de mayor a menor dimensión y una excelente acomodación dentro del oído, que incrementa los niveles de atenuación. Con cámara interna de aire. Material hipo alergénico de fácil mantenimiento y duración. Incluye cordel e insertador (ES LA PARTE BLANDA EN LA CUAL SE INTRODUCE EL CORDEL) y estuche tipo llavero. Color de alta visibilidad para fácil supervisión. Empaque individual.
        Nivel reducción ruido Mínimo 27 DB';
        $p2->precio=0;
        $p2->cantidad=0;
        $p2->categoria="PROTECCION AUDITIVA";
        $p2->valoracion=0;
        $p2->save();

        $p3 = new Producto();

        $p3->name='Protector auditivo desechable';
        $p3->descripcion='Protectores Auditivos Desechables en Espuma de Poliuretano. Estos cómodos tapones auditivos tienen una forma cónica que permite un buen ajuste al canal auditivo y están hechos de material hipoalergénico';
        $p3->precio=0;
        $p3->cantidad=0;
        $p3->categoria="PROTECCION AUDITIVA";
        $p3->valoracion=0;
        $p3->save();

        //Protección manos
        $p4 = new Producto();

        $p4->name='Guante carnaza lona sencillo';
        $p4->descripcion='Fabricado en carnaza
        Dorso en sintético
        Talla única
        Puño en sintético';
        $p4->precio=0;
        $p4->cantidad=0;
        $p4->categoria="PROTECCION MANOS";
        $p4->valoracion=0;
        $p4->save();

        $p5 = new Producto();

        $p5->name='Guante vaqueta sencillo';
        $p5->descripcion='Fabricado en vaqueta
        Talla única
        Puño en sintético 
        Aplicación metalmecánica';
        $p5->precio=0;
        $p5->cantidad=0;
        $p5->categoria="PROTECCION MANOS";
        $p5->valoracion=0;
        $p5->save();

        $p6 = new Producto();

        $p6->name='Guante hilaza latex';
        $p6->descripcion='Fabricado en poli algodón
        Recubierto en latex 3/4
        Color azul
        Aplicación en construcción';
        $p6->precio=0;
        $p6->cantidad=0;
        $p6->categoria="PROTECCION MANOS";
        $p6->valoracion=0;
        $p6->save();

        $p7 = new Producto();

        $p7->name='Guante industrial orillo C-35';
        $p7->descripcion='Fabricado en Latex
        Calibre 35
        Antideslizante
        Bicolor';
        $p7->precio=0;
        $p7->cantidad=0;
        $p7->categoria="PROTECCION MANOS";
        $p7->valoracion=0;
        $p7->save();

        $p8 = new Producto();

        $p8->name='Guante nitrilo 18"';
        $p8->descripcion='Nitrilo 100%
        Largo 18" (45.72cm)
        Calibre 22 mils
        Flocado interior y texturizado en la palma';
        $p8->precio=0;
        $p8->cantidad=0;
        $p8->categoria="PROTECCION MANOS";
        $p8->valoracion=0;
        $p8->save();

        $p9 = new Producto();

        $p9->name='GUANTE HILAZA PVC DOS CARAS';
        $p9->descripcion='Guante de hilaza con pepitas de PBC en las dos caras';
        $p9->precio=0;
        $p9->cantidad=0;
        $p9->categoria="PROTECCION MANOS";
        $p9->valoracion=0;
        $p9->save();

        $p10 = new Producto();

        $p10->name='GUANTE DESECHABLE PARA MANIPULACION DE ALIMENTOS';
        $p10->descripcion='Guantes plásticos en polietileno de baja densidad no contaminantes. Desechables
        Características del diseño: Ambidiestro';
        $p10->precio=0;
        $p10->cantidad=0;
        $p10->categoria="PROTECCION MANOS";
        $p10->valoracion=0;
        $p10->save();

        $p11 = new Producto();

        $p11->name='MANGA PARA PROTECCION SOLAR 20';
        $p11->descripcion='Licra especial P/Filtración de Rayos UV.
         Fibra transpirable y secado rápido
         Largo de manga: mínimo 40cm';
        $p11->precio=0;
        $p11->cantidad=0;
        $p11->categoria="PROTECCION MANOS";
        $p11->valoracion=0;
        $p11->save();

        //PROTECCIÓN CABEZA
        $p12 = new Producto();

        $p12->name='CASCO DE SEGURIDAD CON BARBUQUEJO 3 PUNTOS DE APOYO';
        $p12->descripcion='Casco dieléctrico clase E cuyo propósito es reducir el riesgo ante la exposición a conductores eléctricos de Alto Voltaje, probados a 20.000 voltios. Fabricado
        en Polipropileno, Polietileno y/o ABS.';
        $p12->precio=0;
        $p12->cantidad=0;
        $p12->categoria="PROTECCIÓN CABEZA";
        $p12->valoracion=0;
        $p12->save();

        $p13 = new Producto();

        $p13->name='Casco de seguridad dielectrico tipo I Amarillo';
        $p13->descripcion='Casco dieléctrico: ofrece protección contra alto voltaje (hasta 30.000 Voltios).
        6 puntos de apoyo suspensión, sistema de ajuste Ratchet.
        Sistema de inserción para tapa oídos.
        Visera para adaptar hacia adelante o hacia atrás';
        $p13->precio=0;
        $p13->cantidad=0;
        $p13->categoria="PROTECCIÓN CABEZA";
        $p13->valoracion=0;
        $p13->save();

        $p14 = new Producto();

        $p14->name='Casco Armadura Dielectrico con Rachet Blanco';
        $p14->descripcion='Polipropileno de alta densidad.
        4 puntos de apoyo para tafilete en los cuales será distribuida la fuerza de impacto.
        Orificios o cavidades laterales para ensamble de protector auditivo de copa.
        Resistencia a 20000 V (Voltios), lo que lo hace dieléctrico.
        3 Orificios para conexión de barbuquejo de hasta 3 puntos';
        $p14->precio=0;
        $p14->cantidad=0;
        $p14->categoria="PROTECCIÓN CABEZA";
        $p14->valoracion=0;
        $p14->save();

        $p15 = new Producto();

        $p15->name='Casco Steelpro Mountain Tipo II Blanco';
        $p15->descripcion='Diseñado para trabajo en altura, espacios confinados y trabajos en lugares con altos voltajes.
        Fabricados en material termoplástico ABS de alta resistencia.
        Posee suspensión tipo Ratchet.
        Barbuquejo de cuatro puntos con soporte de barbilla de caucho sintético siliconizado.
        Posee reflectivo termoplástico ubicado en la zona posterior del equipo sobre la nuca.
        Perforaciones laterales para complementar con accesorios de tamaño universal.
        Espuma interior de poliestireno expandido (EPS).
        Visera corta para trabajos en altura, espacios confinados y alto voltaje.
        Certificación ANSI Z89.1.2009, Nch 461.2009.
        Casco dieléctrico.
        Peso: 465 gr.
        Tamaño de ajuste (55-65cm) de acuerdo al ratchet.';
        $p15->precio=0;
        $p15->cantidad=0;
        $p15->categoria="PROTECCIÓN CABEZA";
        $p15->valoracion=0;
        $p15->save();

        $p16 = new Producto();

        $p16->name='CAPUCHON';
        $p16->descripcion='Gorros de protección fabricados en tela o dril, Posee protección adicional en la parte trasera del cuello contra los rayos solares, colores surtidos.';
        $p16->precio=0;
        $p16->cantidad=0;
        $p16->categoria="PROTECCIÓN CABEZA";
        $p16->valoracion=0;
        $p16->save();

        $p17 = new Producto();

        $p17->name='GORRO TIPO CHAVO';
        $p17->descripcion='Gorros de protección fabricados en tela o dril, Posee protección adicional en la parte trasera del cuello contra los rayos solares, colores surtidos.';
        $p17->precio=0;
        $p17->cantidad=0;
        $p17->categoria="PROTECCIÓN CABEZA";
        $p17->valoracion=0;
        $p17->save();

        $p18 = new Producto();

        $p18->name='Gorro Zubiola Plegable Paquete x 10 unidades';
        $p18->descripcion='Tela polipropileno, con banda elástica para la cabeza.
        Ideal para la industria farmacéutica, procesamiento de comidas, o la industria en general.';
        $p18->precio=0;
        $p18->cantidad=0;
        $p18->categoria="PROTECCIÓN CABEZA";
        $p18->valoracion=0;
        $p18->save();

        //PROTECCIÓN VISUAL
        $p19 = new Producto();

        $p19->name='Gafa de Seguridad con Proteccion Lateral';
        $p19->descripcion='Lente de policarbonato, marco de nylon con patillas regulables
        Filtro 99,9% de protección UV. C
        Protección lateral para una mayor cobertura del rostro';
        $p19->precio=0;
        $p19->cantidad=0;
        $p19->categoria="PROTECCIÓN VISUAL";
        $p19->valoracion=0;
        $p19->save();

        $p20 = new Producto();

        $p20->name='Gafa de Seguridad Sport Kamel';
        $p20->descripcion='Montura universal y liviana
        Lente en policarbonato, peso 30 gramos
        Filtra 99.9% de los rayos ultravioletas
        Anti-empañante, aprobación ANSI-Z87+';
        $p20->precio=0;
        $p20->cantidad=0;
        $p20->categoria="PROTECCIÓN VISUAL";
        $p20->valoracion=0;
        $p20->save();
    }
}
