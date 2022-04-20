-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2022 a las 22:07:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stemsol2_testprevycons`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_25_165902_create_servicio_table', 1),
(6, '2022_03_25_190248_add_lastname_to_users_table', 1),
(7, '2022_03_25_191852_updating_properties_column_to_users_table', 1),
(8, '2022_03_26_165616_create_blogs_table', 1),
(9, '2022_03_30_191055_create_productos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valoracion` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `name`, `descripcion`, `precio`, `cantidad`, `categoria`, `valoracion`, `created_at`, `updated_at`) VALUES
(1, 'protectores auditivos steelpro modelo cm- 501', 'La línea de protectores auditivos Steelpro modelo CM- 501 para casco diseñada para proteger contra los riesgos diarios producidos por el ruido evitando pérdidas de audición. Es un protector auditivo dieléctrico ya que no posee componentes metálicos.', 0.00, 0, 'PROTECCION AUDITIVA', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(2, 'protector auditivo de insercion', 'Fabricado en silicona, con cuatro membranas de mayor a menor dimensión y una excelente acomodación dentro del oído, que incrementa los niveles de atenuación. Con cámara interna de aire. Material hipo alergénico de fácil mantenimiento y duración. Incluye cordel e insertador (ES LA PARTE BLANDA EN LA CUAL SE INTRODUCE EL CORDEL) y estuche tipo llavero. Color de alta visibilidad para fácil supervisión. Empaque individual.\n        Nivel reducción ruido Mínimo 27 DB', 0.00, 0, 'PROTECCION AUDITIVA', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(3, 'protector auditivo desechable', 'Protectores Auditivos Desechables en Espuma de Poliuretano. Estos cómodos tapones auditivos tienen una forma cónica que permite un buen ajuste al canal auditivo y están hechos de material hipoalergénico', 0.00, 0, 'PROTECCION AUDITIVA', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(4, 'guante carnaza lona sencillo', 'Fabricado en carnaza\n        Dorso en sintético\n        Talla única\n        Puño en sintético', 0.00, 0, 'PROTECCION MANOS', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(5, 'guante vaqueta sencillo', 'Fabricado en vaqueta\n        Talla única\n        Puño en sintético \n        Aplicación metalmecánica', 0.00, 0, 'PROTECCION MANOS', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(6, 'guante hilaza latex', 'Fabricado en poli algodón\n        Recubierto en latex 3/4\n        Color azul\n        Aplicación en construcción', 0.00, 0, 'PROTECCION MANOS', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(7, 'guante industrial orillo c-35', 'Fabricado en Latex\n        Calibre 35\n        Antideslizante\n        Bicolor', 0.00, 0, 'PROTECCION MANOS', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(8, 'guante nitrilo 18\"', 'Nitrilo 100%\n        Largo 18\" (45.72cm)\n        Calibre 22 mils\n        Flocado interior y texturizado en la palma', 0.00, 0, 'PROTECCION MANOS', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(9, 'guante hilaza pvc dos caras', 'Guante de hilaza con pepitas de PBC en las dos caras', 0.00, 0, 'PROTECCION MANOS', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(10, 'guante desechable para manipulacion de alimentos', 'Guantes plásticos en polietileno de baja densidad no contaminantes. Desechables\n        Características del diseño: Ambidiestro', 0.00, 0, 'PROTECCION MANOS', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(11, 'manga para proteccion solar 20', 'Licra especial P/Filtración de Rayos UV.\n         Fibra transpirable y secado rápido\n         Largo de manga: mínimo 40cm', 0.00, 0, 'PROTECCION MANOS', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(12, 'casco de seguridad con barbuquejo 3 puntos de apoyo', 'Casco dieléctrico clase E cuyo propósito es reducir el riesgo ante la exposición a conductores eléctricos de Alto Voltaje, probados a 20.000 voltios. Fabricado\n        en Polipropileno, Polietileno y/o ABS.', 0.00, 0, 'PROTECCIÓN CABEZA', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(13, 'casco de seguridad dielectrico tipo i amarillo', 'Casco dieléctrico: ofrece protección contra alto voltaje (hasta 30.000 Voltios).\n        6 puntos de apoyo suspensión, sistema de ajuste Ratchet.\n        Sistema de inserción para tapa oídos.\n        Visera para adaptar hacia adelante o hacia atrás', 0.00, 0, 'PROTECCIÓN CABEZA', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(14, 'casco armadura dielectrico con rachet blanco', 'Polipropileno de alta densidad.\n        4 puntos de apoyo para tafilete en los cuales será distribuida la fuerza de impacto.\n        Orificios o cavidades laterales para ensamble de protector auditivo de copa.\n        Resistencia a 20000 V (Voltios), lo que lo hace dieléctrico.\n        3 Orificios para conexión de barbuquejo de hasta 3 puntos', 0.00, 0, 'PROTECCIÓN CABEZA', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(15, 'casco steelpro mountain tipo ii blanco', 'Diseñado para trabajo en altura, espacios confinados y trabajos en lugares con altos voltajes.\n        Fabricados en material termoplástico ABS de alta resistencia.\n        Posee suspensión tipo Ratchet.\n        Barbuquejo de cuatro puntos con soporte de barbilla de caucho sintético siliconizado.\n        Posee reflectivo termoplástico ubicado en la zona posterior del equipo sobre la nuca.\n        Perforaciones laterales para complementar con accesorios de tamaño universal.\n        Espuma interior de poliestireno expandido (EPS).\n        Visera corta para trabajos en altura, espacios confinados y alto voltaje.\n        Certificación ANSI Z89.1.2009, Nch 461.2009.\n        Casco dieléctrico.\n        Peso: 465 gr.\n        Tamaño de ajuste (55-65cm) de acuerdo al ratchet.', 0.00, 0, 'PROTECCIÓN CABEZA', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(16, 'capuchon', 'Gorros de protección fabricados en tela o dril, Posee protección adicional en la parte trasera del cuello contra los rayos solares, colores surtidos.', 0.00, 0, 'PROTECCIÓN CABEZA', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(17, 'gorro tipo chavo', 'Gorros de protección fabricados en tela o dril, Posee protección adicional en la parte trasera del cuello contra los rayos solares, colores surtidos.', 0.00, 0, 'PROTECCIÓN CABEZA', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(18, 'gorro zubiola plegable paquete x 10 unidades', 'Tela polipropileno, con banda elástica para la cabeza.\n        Ideal para la industria farmacéutica, procesamiento de comidas, o la industria en general.', 0.00, 0, 'PROTECCIÓN CABEZA', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(19, 'gafa de seguridad con proteccion lateral', 'Lente de policarbonato, marco de nylon con patillas regulables\n        Filtro 99,9% de protección UV. C\n        Protección lateral para una mayor cobertura del rostro', 0.00, 0, 'PROTECCIÓN VISUAL', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(20, 'gafa de seguridad sport kamel', 'Montura universal y liviana\n        Lente en policarbonato, peso 30 gramos\n        Filtra 99.9% de los rayos ultravioletas\n        Anti-empañante, aprobación ANSI-Z87+', 0.00, 0, 'PROTECCIÓN VISUAL', 0.00, '2022-04-09 00:38:32', '2022-04-09 00:38:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `name`, `descripcion`, `contenido`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Gestión de calidad (Normas ISO 9001, ISO 14001, ISO 45001)', 'Los Sistemas de Gestión son una herramienta que le permite a las empresas optimizar recursos, reducir costos y mejorar la productividad.', 'Están basados en Normas Internacionales que permiten controlar distintas facetas en una empresa, como la calidad de su producto o servicio, los impactos Ambientales que pueda ocasionar, la seguridad y salud de los trabajadores, la responsabilidad social o la innovación.', 'img/web/gestioncalidad2.png', '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(2, 'Gestión de salud y seguridad en el trabajo', 'SG-SST es aquel que debe ser implementado por todos los empleadores y consiste en el desarrollo de un proceso lógico y por etapas, basado en la mejora continua.', 'De acuerdo al decreto 1072 de 2015 el empleador debe definir los requisitos de conocimiento y práctica en Seguridad y Salud en el Trabajo, necesarios para sus trabajadores, también debe adoptar y mantener disposiciones para su cumplimiento en todos los aspectos de la ejecución, con el fin de prevenir accidentes de trabajo y enfermedades laborales.', 'img/web/gestionsgsst2.png', '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(3, 'Gestión documental', 'GD ', 'a.', 'img/web/gestiondocumental2.png', '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(4, 'Gestión ambiental', 'Prevycons realiza para usted asesorías ambientales en: Manejo de residuos sólidos, Ahorro y uso eficiente de agua y energía, Política cero papeles, vertimientos, Residuos peligrosos, y todo lo concerniente a la normatividad ambiental vigente.', 'En nuestra empresa PREVICONS trabajamos día a día para el mejoramiento e implementación de los requisitos legales adaptados a su empresa minimizando los impactos y fortaleciendo su economía en pro de un mejoramiento continuo. \n        El Plan de Gestión Integral de Residuos Sólidos está orientado a racionalizar y optimizar los recursos, mitigar los impactos negativos, y contribuir a un cambio en la cultura y en las formas convencionales del manejo de los residuos por las empresas cabe resaltar que la efectividad de estos procedimientos está en el conocimiento y grado de apropiación que de ellos hagan todos los actores involucrados en el manejo de los residuos en las diferentes dependencias de la empresa.', 'img/web/gestionambiental2.png', '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(5, 'Plan Estrategico de Seguridad Vial', 'La implementación en su empresa de la norma ISO 39001, \n        tiene por objeto brindar a su empresa herramientas que le ayuden a reducir o eliminar la incidencia del riesgo de muerte y lesiones graves en sus personales relacionadas con accidentes de tránsito.', '', 'img/web/pesv2.png', '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(6, 'Auditorías', 'Prevycons presta servicios de evaluación de la conformidad a Sistemas de Gestión con el propósito de identificar oportunidades de mejora en las organizaciones y generar un valor agregado en los colaboradores con un sentido imparcial, humano y objetivo.', 'Evaluamos el desempeño de procesos de negocios para validar que tanto están aportando al cumplimiento de los objetivos corporativos de la organización y así detectar posibles desviaciones y lograr una mejora en sus operaciones\n        De acuerdo al Decreto 1072 del 2015, el empleador debe realizar una auditoría anual, la cual será planificada con la participación del Comité Paritario o Vigía de seguridad y salud en el trabajo.\n        PREVICONS SAS realiza auditorías internas a los sistemas de SALUD Y SEGURIDAD EN EL TRABAJO de acuerdo al decreto 1072 de 2015, sistemas de gestión de calidad ISO 9001:2015, ISO 14001:2015 Y OHSAS 18001:2007. \n        ', 'img/web/auditorias2.png', '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(7, 'CAPACITACIONES PARA SG SST', 'De acuerdo al decreto 1072 de 2015 el empleador debe definir los requisitos de conocimiento y práctica en Seguridad y Salud en el Trabajo, \n        necesarios para sus trabajadores, también debe adoptar y mantener disposiciones para su cumplimiento en todos los aspectos de la ejecución, con el fin de prevenir accidentes de trabajo y enfermedades laborales', 'Para este cumplimiento se debe desarrollar un programa de capacitación que facilite la identificación de peligros y el control de riesgos relacionados con el trabajo a todo el personal involucrado. Este procedimiento debe ser impartido por personal idóneo y en conformidad a la normatividad vigente para su correcta divulgación o comunicación de acuerdo a la necesidad de cada empresa por su actividad económica.\n        Diseñamos y ejecutamos su plan de capacitación anual de acuerdo a los lineamientos del Sistema de Gestión de seguridad y salud en el trabajo. (Decreto 1072 de 2015) en cuanto a su administración, aplicación y evaluación.\n        ', 'img/web/capacitaciones2.png', '2022-04-09 00:38:32', '2022-04-09 00:38:32'),
(8, 'REPORTE E INVESTIGACION DE INCIDENTES, ACCIDENTES DE TRABAJO Y ENFERMEDADES LABORALES', 'La investigación del accidente Laboral es una acción importante de la Seguridad Industrial, y lo enfoca desde el punto de vista preventivo, estudiando sus causas, sus fuentes, sus agentes, su tipo, todo ello con el fin de desarrollar la prevención.', 'Todos los accidentes e incidentes  laborales deben ser investigados (estudiados) de manera seria, técnica y científica para establecer cuáles fueron sus causas y conocer toda la información posible en relación a su ocurrencia para con este conocimiento planear estrategias de promoción de trabajo seguro y de prevención de los accidentes, preferentemente accidentes que generen danos en la salud importantes medidos en incapacidad, invalidez o muerte y pérdidas o costos económicos significativos.\n        En PREVYCONS SAS acompañamos todos los pasos requeridos en Investigación de accidentes de trabajo Mortales, Graves y Leves, utilizando técnicas de análisis de causalidad homologadas y de acuerdo a lo establecido en el decreto 1530 de 1996, Resolución 1401 de 2007, entre otras normas.\n        ', 'img/web/reporteincidentes2.png', '2022-04-09 00:38:32', '2022-04-09 00:38:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
