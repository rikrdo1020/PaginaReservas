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
-- Temporary table structure for view `reservas_view`
--

DROP TABLE IF EXISTS `reservas_view`;
/*!50001 DROP VIEW IF EXISTS `reservas_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `reservas_view` AS SELECT 
 1 AS `id`,
 1 AS `telefono`,
 1 AS `id_ubicacion`,
 1 AS `nombre_cancha`,
 1 AS `Nombre_Centro_Deportivo`,
 1 AS `nombre_completo`,
 1 AS `id_reserva`,
 1 AS `id_usuario`,
 1 AS `estado_reserva`,
 1 AS `item`,
 1 AS `start_day`,
 1 AS `end_day`,
 1 AS `start_time`,
 1 AS `end_time`,
 1 AS `canceled`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `usuario_view`
--

DROP TABLE IF EXISTS `usuario_view`;
/*!50001 DROP VIEW IF EXISTS `usuario_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `usuario_view` AS SELECT 
 1 AS `nombre_usuario`,
 1 AS `nombre_completo`,
 1 AS `id_usuario`,
 1 AS `correo`,
 1 AS `identificacion`,
 1 AS `tipo_identificacion`,
 1 AS `direccion`,
 1 AS `telefono`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `reservas_view`
--

/*!50001 DROP VIEW IF EXISTS `reservas_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`bookc_usr`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `reservas_view` AS select `a`.`id` AS `id`,`b`.`telefono` AS `telefono`,`e`.`id_ubicacion` AS `id_ubicacion`,`c`.`nombre_cancha` AS `nombre_cancha`,`d`.`Nombre_Centro_Deportivo` AS `Nombre_Centro_Deportivo`,concat(`b`.`nombre`,' ',`b`.`apellido`) AS `nombre_completo`,`a`.`id` AS `id_reserva`,`a`.`id_usuario` AS `id_usuario`,`a`.`Estado_Reserva` AS `estado_reserva`,`a`.`item` AS `item`,`a`.`start_day` AS `start_day`,`a`.`end_day` AS `end_day`,`a`.`start_time` AS `start_time`,`a`.`end_time` AS `end_time`,`a`.`canceled` AS `canceled` from ((((`bookingcalendar` `a` join `usuario` `b`) join `cancha` `c`) join `centro_deportivo` `d`) join `ubicacion` `e`) where `a`.`id_usuario` = `b`.`id_usuario` and `c`.`item_cancha` = `a`.`item` and `c`.`id_centro_deportivo` = `d`.`id_centro_deportivo` and `d`.`id_ubicacion` = `e`.`id_ubicacion` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `usuario_view`
--

/*!50001 DROP VIEW IF EXISTS `usuario_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jrodriguez`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `usuario_view` AS select `usuario`.`nombre_usuario` AS `nombre_usuario`,concat(`usuario`.`nombre`,' ',`usuario`.`apellido`) AS `nombre_completo`,`usuario`.`id_usuario` AS `id_usuario`,`usuario`.`correo` AS `correo`,`usuario`.`identificacion` AS `identificacion`,`usuario`.`tipo_identificacion` AS `tipo_identificacion`,`usuario`.`direccion` AS `direccion`,`usuario`.`telefono` AS `telefono` from `usuario` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-03 15:02:29
