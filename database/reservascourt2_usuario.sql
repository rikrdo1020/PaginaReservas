-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: 205.21.38.101    Database: reservascourt2
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.22-MariaDB-0+deb10u1-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `nombre_completo` varchar(50) DEFAULT NULL,
  `identificacion` varchar(50) DEFAULT NULL,
  `tipo_identificacion` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'jcuetas','Juan','Cuetas','jcuetas@outlook.com','Juan Cuetas','8-333-44','cedula','panama','6677889900','2929',1,1),(3,'acampos','Alex','Campos','acamposs@outlook.com','Alex Campos','7-333-44','chiriqui','panama','677722333','3333',1,1),(5,'','Jhony','Rodriguez','jhonyalexs.rodriguez@gmail.com',NULL,'8-741-2190','cedula','Las cumbre','63738677','Password01',1,1),(7,'Gilberto','Gilberto','Apellido','gilberto.apellido@gmail.com',NULL,'8-333-3333','cedula','Brisas del Golf','6789542','Password02',1,1),(9,'kpatel','Karolina','Patel','karolina.patel@hotmail.com',NULL,'8-444-033','cedula','Vista hermosa','6589741','Password3',1,1),(11,'Mario','Mario','Rangel','mario.rangel@gmail.com',NULL,'7-421-9580','cedula','Herrera','63789580','Password4',1,1),(13,'jrodriguez2','Alexs','Rodriguez','jhony.rodriguez@gmail.com',NULL,'8-741-2190','cedula','Las cumbre','63738677','Password5',1,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-03 15:02:29
