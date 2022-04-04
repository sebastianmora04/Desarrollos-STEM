-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: stemsol2_testprevycons
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'test1','Prueba test1','test','2022-03-31 21:38:40','2022-03-31 21:38:58'),(2,'test2','Prueba test2','test2','2022-03-31 21:39:38','2022-03-31 21:39:38'),(3,'test3','test3 prueba','test','2022-03-31 21:40:29','2022-03-31 21:40:29'),(4,'test4','Prueba test4','test','2022-03-31 21:40:57','2022-03-31 21:40:57'),(5,'test5','Prueba test5','test2','2022-03-31 21:41:15','2022-03-31 21:41:15'),(6,'test6','Prueba número 6','test2','2022-04-01 21:23:50','2022-04-01 21:23:50'),(7,'test7','prueba 7 prueba','test','2022-04-02 00:44:00','2022-04-02 00:44:56'),(8,'test número 1','El primer ejemplo de blog, prueba número 1','Test','2022-04-02 21:06:31','2022-04-02 21:06:31'),(9,'test número 2','El primer ejemplo de blog, prueba número 2','Test2','2022-04-02 21:06:31','2022-04-02 21:06:31');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_03_25_165902_create_servicio_table',1),(6,'2022_03_25_190248_add_lastname_to_users_table',1),(7,'2022_03_25_191852_updating_properties_column_to_users_table',1),(8,'2022_03_26_165616_create_blogs_table',1),(9,'2022_03_30_191055_create_productos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valoracion` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (1,'Gestión de calidad (Normas ISO 9001, ISO 14001, ISO 45001)','Los Sistemas de Gestión son una herramienta que le permite a las empresas optimizar recursos, reducir costos y mejorar la productividad.','Están basados en Normas Internacionales que permiten controlar distintas facetas en una empresa, como la calidad de su producto o servicio, los impactos Ambientales que pueda ocasionar, la seguridad y salud de los trabajadores, la responsabilidad social o la innovación.','img/web/gestioncalidad.png','2022-03-31 20:56:48','2022-03-31 20:56:48'),(2,'Gestión de seguridad y salud en el trabajo','SG-SST es aquel que debe ser implementado por todos los empleadores y consiste en el desarrollo de un proceso lógico y por etapas, basado en la mejora continua.','Somos sus aliados y HACEMOS TODO EL DISEÑO DEl SG SST, para dar cumplimiento con el Decreto 1072 de 2015 y la resolución 0312 de 2019, además CERTIFICAMOS RÁPIDAMENTE la implementación del sistema, de esta forma contará con la documentación necesaria en sus contrataciones.','img/web/gestionsgsst.png','2022-03-31 20:56:48','2022-03-31 20:56:48'),(3,'Gestión documental','La gestión documental consiste en controlar de un modo eficiente y sistemático la creación, la recepción, el mantenimiento, la utilización y la disposición de los documentos. ','(ISO 15489-1: 2001 [E], Información y documentación)\n','img/web/gestiondocumental.png','2022-03-31 20:56:48','2022-03-31 20:56:48'),(4,'Gestión ambiental','Realizamos manejo de residuos sólidos, Ahorro y uso eficiente de agua y energía, Política cero papeles, vertimientos, Residuos peligrosos, y todo lo concerniente a la normatividad ambiental vigente.','En nuestra empresa PREVYCONS trabajamos día a día para el mejoramiento e implementación de los requisitos legales adaptados a su empresa minimizando los impactos y fortaleciendo su economía en pro de un mejoramiento continuo. \n        El Plan de Gestión Integral de Residuos Sólidos está orientado a racionalizar y optimizar los recursos, mitigar los impactos negativos, y contribuir a un cambio en la cultura y en las formas convencionales del manejo de los residuos por las empresas cabe resaltar que la efectividad de estos procedimientos está en el conocimiento y grado de apropiación que de ellos hagan todos los actores involucrados en el manejo de los residuos en las diferentes dependencias de la empresa.','img/web/gestionambiental.png','2022-03-31 20:56:48','2022-03-31 20:56:48'),(5,'Plan Estrategico de Seguridad Vial','La implementación en su empresa de la norma ISO 39001, \n        tiene por objeto brindar a su empresa herramientas que le ayuden a reducir o eliminar la incidencia del riesgo de muerte y lesiones graves en sus personales relacionadas con accidentes de tránsito.','','img/web/pesv.png','2022-03-31 20:56:48','2022-03-31 20:56:48'),(6,'Auditorías','Prevycons presta servicios de evaluación de la conformidad a Sistemas de Gestión con el propósito de identificar oportunidades de mejora en las organizaciones y generar un valor agregado en los colaboradores con un sentido imparcial, humano y objetivo.','Evaluamos el desempeño de procesos de negocios para validar que tanto están aportando al cumplimiento de los objetivos corporativos de la organización y así detectar posibles desviaciones y lograr una mejora en sus operaciones. De acuerdo al Decreto 1072 del 2015, el empleador debe realizar una auditoría anual, la cual será planificada con la participación del Comité Paritario o Vigía de seguridad y salud en el trabajo.\n        PREVICONS SAS realiza auditorías internas a los sistemas de SALUD Y SEGURIDAD EN EL TRABAJO de acuerdo al decreto 1072 de 2015, sistemas de gestión de calidad ISO 9001:2015, ISO 14001:2015 Y OHSAS 18001:2007. \n        ','img/web/auditorias.png','2022-03-31 20:56:48','2022-03-31 20:56:48'),(7,'CAPACITACIONES PARA SG SST','De acuerdo al decreto 1072 de 2015 el empleador debe definir los requisitos de conocimiento y práctica en Seguridad y Salud en el Trabajo, \n        necesarios para sus trabajadores, también debe adoptar y mantener disposiciones para su cumplimiento en todos los aspectos de la ejecución, con el fin de prevenir accidentes de trabajo y enfermedades laborales','Para este cumplimiento se debe desarrollar un programa de capacitación que facilite la identificación de peligros y el control de riesgos relacionados con el trabajo a todo el personal involucrado. Este procedimiento debe ser impartido por personal idóneo y en conformidad a la normatividad vigente para su correcta divulgación o comunicación de acuerdo a la necesidad de cada empresa por su actividad económica.\n        Diseñamos y ejecutamos su plan de capacitación anual de acuerdo a los lineamientos del Sistema de Gestión de seguridad y salud en el trabajo. (Decreto 1072 de 2015) en cuanto a su administración, aplicación y evaluación.\n        ','img/web/capacitaciones.png','2022-03-31 20:56:48','2022-03-31 20:56:48'),(8,'REPORTE E INVESTIGACION DE INCIDENTES, ACCIDENTES DE TRABAJO Y ENFERMEDADES LABORALES','La investigación del accidente Laboral es una acción importante de la Seguridad Industrial, y lo enfoca desde el punto de vista preventivo, estudiando sus causas, sus fuentes, sus agentes, su tipo, todo ello con el fin de desarrollar la prevención.','Todos los accidentes e incidentes  laborales deben ser investigados (estudiados) de manera seria, técnica y científica para establecer cuáles fueron sus causas y conocer toda la información posible en relación a su ocurrencia para con este conocimiento planear estrategias de promoción de trabajo seguro y de prevención de los accidentes, preferentemente accidentes que generen danos en la salud importantes medidos en incapacidad, invalidez o muerte y pérdidas o costos económicos significativos.\n        En PREVYCONS SAS acompañamos todos los pasos requeridos en Investigación de accidentes de trabajo Mortales, Graves y Leves, utilizando técnicas de análisis de causalidad homologadas y de acuerdo a lo establecido en el decreto 1530 de 1996, Resolución 1401 de 2007, entre otras normas.\n        ','img/web/reporteincidentes.png','2022-03-31 20:56:48','2022-03-31 20:56:48');
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-04  9:33:33
