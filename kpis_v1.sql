-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para kpis
CREATE DATABASE IF NOT EXISTS `kpis` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_danish_ci */;
USE `kpis`;

-- Volcando estructura para tabla kpis.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) COLLATE utf8_danish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- Volcando datos para la tabla kpis.empresa: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id`, `nombre`) VALUES
	(1, 'Administracion'),
	(2, 'Apple'),
	(3, 'Microsoft');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Volcando estructura para tabla kpis.kpi
CREATE TABLE IF NOT EXISTS `kpi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(3) DEFAULT NULL,
  `area` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `actividad` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `fechadecreacion` datetime(6) DEFAULT NULL,
  `fechadeinicio` datetime(6) DEFAULT NULL,
  `check1` int(3) DEFAULT 0,
  `fechadetermino` datetime(6) DEFAULT NULL,
  `check2` int(11) DEFAULT 0,
  `tarea1` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `check3` int(11) DEFAULT 0,
  `tarea2` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `check4` int(11) DEFAULT 0,
  `tarea3` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `check5` int(11) DEFAULT 0,
  `detalles` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `comentarios` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_kpi_usuarios` (`usuario_id`),
  CONSTRAINT `FK_kpi_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- Volcando datos para la tabla kpis.kpi: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `kpi` DISABLE KEYS */;
INSERT INTO `kpi` (`id`, `usuario_id`, `area`, `actividad`, `fechadecreacion`, `fechadeinicio`, `check1`, `fechadetermino`, `check2`, `tarea1`, `check3`, `tarea2`, `check4`, `tarea3`, `check5`, `detalles`, `comentarios`) VALUES
	(53, 1, 'Soporte', 'Nivel de Servicio', '2021-04-08 00:51:42.000000', '2021-04-16 00:00:00.000000', 20, '2021-04-15 00:00:00.000000', 20, 'Diagnosticar Falla', 20, 'Dar de baja los usuarios clonados', 20, 'Firma Conformidad', 20, 'Se resuelve en tiempo y forma', ''),
	(55, 4, 'Dirección General', 'cocina', '2021-04-10 14:24:08.000000', '0000-00-00 00:00:00.000000', 20, '0000-00-00 00:00:00.000000', 20, '', 20, 'Dar de baja los usuarios clonados', 20, '', 20, '', ''),
	(56, 4, 'Dirección General', '', '2021-04-10 14:46:58.000000', '0000-00-00 00:00:00.000000', 20, '0000-00-00 00:00:00.000000', 20, '', NULL, '', NULL, '', 20, '', ''),
	(57, 2, 'Dirección General', '', '2021-04-10 14:48:30.000000', '0000-00-00 00:00:00.000000', NULL, '0000-00-00 00:00:00.000000', NULL, '', NULL, '', NULL, '', NULL, '', NULL),
	(58, 18, 'Soporte', 'cocina', '2021-04-10 20:32:58.000000', '2021-04-14 00:00:00.000000', 20, '2021-04-30 00:00:00.000000', 20, 'Revisión de usuarios clonados', 20, 'Dar de baja los usuarios clonados', 20, 'Firma Conformidad', 20, 'asdasdas', ''),
	(59, 18, 'cocina', 'cocina', '2021-04-10 20:34:30.000000', '0000-00-00 00:00:00.000000', NULL, '0000-00-00 00:00:00.000000', NULL, '', NULL, '', NULL, '', NULL, '', NULL),
	(60, 13, 'Dirección General', 'cocina', '2021-04-10 21:01:01.000000', '0000-00-00 00:00:00.000000', 20, '0000-00-00 00:00:00.000000', 20, '', NULL, '', NULL, '', 20, 'asdsa', ''),
	(61, 25, 'Dirección General', 'Nivel de Servicio', '2021-04-13 15:08:37.000000', '2021-04-01 00:00:00.000000', NULL, '2021-04-30 00:00:00.000000', NULL, 'as', NULL, 'a', NULL, 'qw', NULL, 'qweqweqeqwe', NULL),
	(62, 13, 'Soporte', 'atender', '2021-04-13 15:12:22.000000', '2021-04-21 00:00:00.000000', 20, '2021-04-10 00:00:00.000000', 20, 'asd', 20, 'asd', 20, 'qweq', 20, '                        qweqweqw                  ', ' \r\n             \r\n            holaaaaaaaaaaa      ');
/*!40000 ALTER TABLE `kpi` ENABLE KEYS */;

-- Volcando estructura para tabla kpis.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nivel` int(2) DEFAULT NULL,
  `tipo` varchar(10) COLLATE utf8_danish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- Volcando datos para la tabla kpis.roles: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `nivel`, `tipo`) VALUES
	(1, 1, 'Administra'),
	(2, 2, 'Funcional'),
	(3, 3, 'Final');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla kpis.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) COLLATE utf8_danish_ci NOT NULL,
  `contraseña` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_danish_ci NOT NULL,
  `rol` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_danish_ci DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_usuarios_empresa` (`empresa_id`),
  KEY `FK_usuarios_roles` (`rol`),
  CONSTRAINT `FK_usuarios_empresa` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- Volcando datos para la tabla kpis.usuarios: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `nombre`, `rol`, `descripcion`, `empresa_id`) VALUES
	(1, 'admin', 'admin', 'victor hugo', 1, 'vic vic          ', 1),
	(2, 'admin', 'admin', 'administradorwwwwww', 2, 'asdasd222222222222 ', 2),
	(4, 'admin', 'admin', 'administradorwwwwww', 3, 'asdasd222222222222 ', 3),
	(12, 'admin', 'admin', 'administradorwwwwww', 2, 'asdasd222222222222 ', 2),
	(13, 'admin', 'admin', 'administradorwwwwww', 3, 'asdasd222222222222 ', 2),
	(15, 'admin', 'admin', 'administradorwwwwww', 1, 'asdasd222222222222 ', 2),
	(17, 'admin', 'admin', 'administradorwwwwww', 1, 'asdasd222222222222 ', 2),
	(18, 'admin', 'admin', 'administradorwwwwww', 2, 'asdasd222222222222 ', 3),
	(21, 'admin', 'admin', 'administradorwwwwww', 1, 'asdasd222222222222 ', 2),
	(22, 'admin', 'admin', 'administradorwwwwww', 2, 'asdasd222222222222 ', 2),
	(23, 'admin', 'admin', 'administradorwwwwww', 2, 'asdasd222222222222 ', 3),
	(24, 'admin', 'admin', 'administradorwwwwww', 2, 'asdasd222222222222 ', 3),
	(25, 'admin', 'admin', 'administradorwwwwww', 2, 'sdffffffffff', 2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
