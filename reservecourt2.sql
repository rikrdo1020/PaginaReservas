-- --------------------------------------------------------
-- Host:                         192.168.1.8
-- Server version:               5.7.29-log - MySQL Community Server (GPL)
-- Server OS:                    Linux
-- HeidiSQL Version:             10.0.0.5460
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for reservascourt2
CREATE DATABASE IF NOT EXISTS `reservascourt2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `reservascourt2`;

-- Dumping structure for table reservascourt2.bookingcalendar
CREATE TABLE IF NOT EXISTS `bookingcalendar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `Estado_Reserva` varchar(50) NOT NULL,
  `item` varchar(20) NOT NULL,
  `start_day` int(11) DEFAULT NULL,
  `end_day` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `canceled` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table reservascourt2.bookingcalendar: ~2 rows (approximately)
/*!40000 ALTER TABLE `bookingcalendar` DISABLE KEYS */;
INSERT INTO `bookingcalendar` (`id`, `id_usuario`, `Estado_Reserva`, `item`, `start_day`, `end_day`, `start_time`, `end_time`, `canceled`) VALUES
	(10, 1, '1', '1', 1588464000, 1588464000, 25200, 30600, 0),
	(11, 1, '1', '1', 1588636800, 1588636800, 25200, 30600, 0);
/*!40000 ALTER TABLE `bookingcalendar` ENABLE KEYS */;

-- Dumping structure for table reservascourt2.cancha
CREATE TABLE IF NOT EXISTS `cancha` (
  `item_cancha` varchar(50) DEFAULT NULL,
  `tipo_cancha` varchar(50) DEFAULT NULL,
  `nombre_cancha` varchar(50) DEFAULT NULL,
  `descripcion_cancha` varchar(50) DEFAULT NULL,
  `valor_porhora` decimal(10,0) DEFAULT NULL,
  `id_centro_deportivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table reservascourt2.cancha: ~2 rows (approximately)
/*!40000 ALTER TABLE `cancha` DISABLE KEYS */;
INSERT INTO `cancha` (`item_cancha`, `tipo_cancha`, `nombre_cancha`, `descripcion_cancha`, `valor_porhora`, `id_centro_deportivo`) VALUES
	('11', 'Fulbito', 'Fulbito A', NULL, 50, 2),
	('1', 'Fulbito', 'Fulbito A', NULL, 50, 1);
/*!40000 ALTER TABLE `cancha` ENABLE KEYS */;

-- Dumping structure for table reservascourt2.centro_deportivo
CREATE TABLE IF NOT EXISTS `centro_deportivo` (
  `id_centro_deportivo` int(11) DEFAULT NULL,
  `id_ubicacion` int(11) DEFAULT NULL,
  `Nombre_Centro_Deportivo` varchar(50) DEFAULT NULL,
  `Descripcio_Centro_Deportivo` varchar(50) DEFAULT NULL,
  `cantidad_canchas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table reservascourt2.centro_deportivo: ~2 rows (approximately)
/*!40000 ALTER TABLE `centro_deportivo` DISABLE KEYS */;
INSERT INTO `centro_deportivo` (`id_centro_deportivo`, `id_ubicacion`, `Nombre_Centro_Deportivo`, `Descripcio_Centro_Deportivo`, `cantidad_canchas`) VALUES
	(1, 4, 'Centro Deportivo B', NULL, NULL),
	(2, 8, 'Centro Deportivo C', NULL, NULL);
/*!40000 ALTER TABLE `centro_deportivo` ENABLE KEYS */;

-- Dumping structure for view reservascourt2.reservas_view
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `reservas_view` (
	`id` INT(11) UNSIGNED NOT NULL,
	`telefono` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`id_ubicacion` INT(11) NULL,
	`nombre_cancha` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`Nombre_Centro_Deportivo` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`nombre_completo` VARCHAR(101) NULL COLLATE 'latin1_swedish_ci',
	`id_reserva` INT(11) UNSIGNED NOT NULL,
	`id_usuario` INT(11) NOT NULL,
	`estado_reserva` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`item` VARCHAR(20) NOT NULL COLLATE 'latin1_swedish_ci',
	`start_day` INT(11) NULL,
	`end_day` INT(11) NULL,
	`start_time` INT(11) NULL,
	`end_time` INT(11) NULL,
	`canceled` INT(1) NULL
) ENGINE=MyISAM;

-- Dumping structure for table reservascourt2.ubicacion
CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id_ubicacion` int(11) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `corregimiento` varchar(50) DEFAULT NULL,
  `Lugar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table reservascourt2.ubicacion: ~2 rows (approximately)
/*!40000 ALTER TABLE `ubicacion` DISABLE KEYS */;
INSERT INTO `ubicacion` (`id_ubicacion`, `distrito`, `provincia`, `corregimiento`, `Lugar`) VALUES
	(4, NULL, 'Chiriqui', NULL, 'Avenida b'),
	(8, NULL, 'Panama', NULL, 'Avenida c');
/*!40000 ALTER TABLE `ubicacion` ENABLE KEYS */;

-- Dumping structure for table reservascourt2.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) DEFAULT NULL,
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
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table reservascourt2.usuario: ~2 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `nombre`, `apellido`, `correo`, `nombre_completo`, `identificacion`, `tipo_identificacion`, `direccion`, `telefono`, `contrasena`, `estado`, `id_rol`) VALUES
	(1, 'jcuetas', 'Juan', 'Cuetas', 'jcuetas@outlook.com', 'Juan Cuetas', '8-333-44', 'cedula', 'panama', '6677889900', '2929', 1, 1),
	(2, 'acampos', 'Alex', 'Campos', 'acamposs@outlook.com', 'Alex Campos', '7-333-44', 'chiriqui', 'panama', '677722333', '3333', 1, 1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Dumping structure for view reservascourt2.reservas_view
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `reservas_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reservas_view` AS select `a`.`id` AS `id`,`b`.`telefono` AS `telefono`,`e`.`id_ubicacion` AS `id_ubicacion`,`c`.`nombre_cancha` AS `nombre_cancha`,`d`.`Nombre_Centro_Deportivo` AS `Nombre_Centro_Deportivo`,concat(`b`.`nombre`,' ',`b`.`apellido`) AS `nombre_completo`,`a`.`id` AS `id_reserva`,`a`.`id_usuario` AS `id_usuario`,`a`.`Estado_Reserva` AS `estado_reserva`,`a`.`item` AS `item`,`a`.`start_day` AS `start_day`,`a`.`end_day` AS `end_day`,`a`.`start_time` AS `start_time`,`a`.`end_time` AS `end_time`,`a`.`canceled` AS `canceled` from ((((`bookingcalendar` `a` join `usuario` `b`) join `cancha` `c`) join `centro_deportivo` `d`) join `ubicacion` `e`) where ((`a`.`id_usuario` = `b`.`id_usuario`) and (`c`.`item_cancha` = `a`.`item`) and (`c`.`id_centro_deportivo` = `d`.`id_centro_deportivo`) and (`d`.`id_ubicacion` = `e`.`id_ubicacion`));



/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

FLUSH PRIVILEGES;
