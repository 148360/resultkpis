-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2021 a las 07:56:03
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kpis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(10) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_danish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`) VALUES
(1, 'Administracion'),
(2, 'Apple'),
(3, 'Microsoft');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kpi`
--

CREATE TABLE `kpi` (
  `id` int(11) NOT NULL,
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
  `comentarios` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Volcado de datos para la tabla `kpi`
--

INSERT INTO `kpi` (`id`, `usuario_id`, `area`, `actividad`, `fechadecreacion`, `fechadeinicio`, `check1`, `fechadetermino`, `check2`, `tarea1`, `check3`, `tarea2`, `check4`, `tarea3`, `check5`, `detalles`, `comentarios`) VALUES
(53, 1, 'Soporte', 'Nivel de Servicio', '2021-04-08 00:51:42.000000', '2021-04-16 00:00:00.000000', NULL, '2021-04-15 00:00:00.000000', NULL, 'Diagnosticar Falla', NULL, 'Dar de baja los usuarios clonados', NULL, 'Firma Conformidad', 20, 'Se resuelve en tiempo y forma', ''),
(55, 4, 'Dirección General', 'cocina', '2021-04-10 14:24:08.000000', '0000-00-00 00:00:00.000000', 20, '0000-00-00 00:00:00.000000', 20, '', 20, 'Dar de baja los usuarios clonados', 20, '', 20, '', ''),
(56, 4, 'Dirección General', '', '2021-04-10 14:46:58.000000', '0000-00-00 00:00:00.000000', 20, '0000-00-00 00:00:00.000000', 20, '', NULL, '', NULL, '', 20, '', ''),
(57, 2, 'Dirección General', '', '2021-04-10 14:48:30.000000', '0000-00-00 00:00:00.000000', NULL, '0000-00-00 00:00:00.000000', NULL, '', NULL, '', NULL, '', NULL, '', NULL),
(58, 18, 'Soporte', 'cocina', '2021-04-10 20:32:58.000000', '2021-04-14 00:00:00.000000', 20, '2021-04-30 00:00:00.000000', 20, 'Revisión de usuarios clonados', 20, 'Dar de baja los usuarios clonados', 20, 'Firma Conformidad', 20, 'asdasdas', ''),
(59, 18, 'cocina', 'cocina', '2021-04-10 20:34:30.000000', '0000-00-00 00:00:00.000000', NULL, '0000-00-00 00:00:00.000000', NULL, '', NULL, '', NULL, '', NULL, '', NULL),
(60, 13, 'Dirección General', 'cocina', '2021-04-10 21:01:01.000000', '0000-00-00 00:00:00.000000', 20, '0000-00-00 00:00:00.000000', 20, '', NULL, '', NULL, '', 20, 'asdsa', ''),
(61, 25, 'Dirección General', 'Nivel de Servicio', '2021-04-13 15:08:37.000000', '2021-04-01 00:00:00.000000', NULL, '2021-04-30 00:00:00.000000', NULL, 'as', NULL, 'a', NULL, 'qw', NULL, 'qweqweqeqwe', NULL),
(62, 13, 'Soporte', 'atender', '2021-04-13 15:12:22.000000', '2021-04-21 00:00:00.000000', 20, '2021-04-10 00:00:00.000000', 20, 'asd', 20, 'asd', 20, 'qweq', 20, 'qweqweqw', 'holaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `nivel` int(2) DEFAULT NULL,
  `tipo` varchar(10) COLLATE utf8_danish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nivel`, `tipo`) VALUES
(1, 1, 'Administra'),
(2, 2, 'Funcional'),
(3, 3, 'Final');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_danish_ci NOT NULL,
  `contraseña` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_danish_ci NOT NULL,
  `rol` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_danish_ci DEFAULT NULL,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `nombre`, `rol`, `descripcion`, `empresa_id`) VALUES
(1, 'admin', 'admin', 'Administrador KPIs', 1, NULL, 1),
(2, 'jefe', 'jefe', 'Jefe \"en Apple\"', 2, 'Jefe en la Empresa Apple', 2),
(4, 'diana', 'diana', 'Diana \"Usuario Final\"', 3, NULL, 3),
(12, 'victor', 'victor', 'Victor Olmos', 2, 'Usuario Funcional', 2),
(13, 'rosa', 'rosa', 'Rosa Venus', 3, 'Usuario Final', 2),
(15, 'jefe', 'jefe', 'Jefe \" Usuario Funcional\"', 1, 'Jefe en la empresa Microsoft', 2),
(17, 'rubi', 'rubi', 'Rubi Olmos', 1, 'Administradora de la empresa Microsoft', 2),
(18, 'felipe', 'felipe', 'Felipe Olmos', 2, 'excelente trabajador', 3),
(21, 'victor.olmos', '12345', 'Victor Olmos', 1, 'asdasd', 2),
(22, 'jefeap', 'jefeap', 'Jefe de Apple', 2, 'Jefe KPI de APPLE', 2),
(23, 'jefemic', 'jefemic', 'Jefe de Microsoft', 2, 'Jefe en Microsoft', 3),
(24, 'lalomi', 'lalomi', 'Lalo Microsoft', 2, 'jefe en micr', 3),
(25, 'Iris', 'iris', 'IRIS UDL', 2, 'adsadsasd', 2),
(26, 'jefe', 'asa', 'asd', 1, 'asda', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `kpi`
--
ALTER TABLE `kpi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_kpi_usuarios` (`usuario_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_usuarios_empresa` (`empresa_id`),
  ADD KEY `FK_usuarios_roles` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `kpi`
--
ALTER TABLE `kpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `kpi`
--
ALTER TABLE `kpi`
  ADD CONSTRAINT `FK_kpi_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_usuarios_empresa` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
