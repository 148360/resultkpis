-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-05-2021 a las 07:34:24
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id16624654_kpis`
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
  `tarea1` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL,
  `check3` int(11) DEFAULT 0,
  `tarea2` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL,
  `check4` int(11) DEFAULT 0,
  `tarea3` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL,
  `check5` int(11) DEFAULT 0,
  `detalles` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL,
  `comentarios` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Volcado de datos para la tabla `kpi`
--

INSERT INTO `kpi` (`id`, `usuario_id`, `area`, `actividad`, `fechadecreacion`, `fechadeinicio`, `check1`, `fechadetermino`, `check2`, `tarea1`, `check3`, `tarea2`, `check4`, `tarea3`, `check5`, `detalles`, `comentarios`) VALUES
(65, 41, 'Soporte Tecnico', 'Reinstalar SO', '2021-04-17 22:48:08.000000', '2021-04-19 00:00:00.000000', 20, '2021-04-23 00:00:00.000000', 20, 'Diagnosticar falla', 20, 'Solucionar falla', 20, 'Realizar pruebas exitosas', 20, '                                                Se reporta pantalla azul en equipo de computo       ', ' \r\n             \r\n             \r\n             \r\n            Se instala SO, usuario da visto bueno.  '),
(66, 41, 'Soporte', 'Nivel de Servicio', '2021-04-19 17:12:08.000000', '2021-04-26 00:00:00.000000', NULL, '2021-04-23 00:00:00.000000', 20, 'Diagnosticar Falla', 20, 'Solucionar Falla', 20, 'Firma Conformidad', NULL, 'El usuario da el visto bueno', ''),
(67, 43, 'Seguridad Informatica', 'Instalacion de antivirus', '2021-04-20 01:41:03.000000', '2021-04-26 00:00:00.000000', 20, '2021-04-23 00:00:00.000000', 20, 'Instalacion de antivirus', 20, 'Activacion de lincencia', 20, 'Enrolamiento de usuario', 20, 'Se comprueba equipo libre de infecciones informaticas', ''),
(68, 43, 'Seguridad Informatica', 'Apertura de internet', '2021-04-20 01:44:16.000000', '2021-04-26 00:00:00.000000', 20, '2021-04-30 00:00:00.000000', 20, 'Alta de MAC ADRESS en consola', 20, 'Alta de IP en consola', 20, 'Apertura de internet', 20, 'Se realiza configuracion de apertura de internet', 'Se realiza configuracion de apertura de internet'),
(69, 44, 'Telefonia', 'Reparacion de linea telefonica', '2021-04-20 01:50:17.000000', '2021-04-26 00:00:00.000000', 20, '2021-04-27 00:00:00.000000', NULL, 'Diagnosticar Falla', 20, 'Cambio de cableado', 20, 'Cambio de equipo telefonico', NULL, 'No existe falla en la linea, se sustituye equipo telefonico y queda funcionando correctamente', ''),
(70, 44, 'Telefonia Cisco', 'Renombramiento Display', '2021-04-20 01:53:31.000000', '2021-04-29 00:00:00.000000', 20, '2021-04-30 00:00:00.000000', NULL, 'Verificacion de usuario en sistema', 20, 'Baja de usuario en consola', NULL, 'Reasignacion con nombre en el sistema', NULL, 'Dar de baja al usuario anterior y sustituir por el nuevo', ''),
(72, 41, 'Informática', 'Evaluación equipo ', '2021-05-03 23:58:13.000000', '2021-05-13 00:00:00.000000', 0, '2021-05-28 00:00:00.000000', 0, 'Verificar equipos', 0, 'Asignar Usuarios ', 0, 'Ingresar datos', 0, 'Simulación Iris ', NULL);

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
(1, 'admin', 'trinitis1a', 'Administrador KPIs', 1, 'Administrador del Sistema Result KPIs', 1),
(40, 'jefemic', 'jefemic', 'Jefe Microsoft', 2, 'Jefe encargado de los KPIs de la empresa Microsoft', 3),
(41, 'yolanda', 'yolanda', 'Yolanda Valero', 3, 'Usuaria final, encargada de trabajar con KPIs', 3),
(43, 'rubi', 'rubi', 'Rubi Olmos', 3, 'Usuaria final, se encarga de trabajar con los KPIs', 3),
(44, 'felipe', 'felipe', 'Felipe Olmos', 3, 'Usuario final,  trabajara con los indicadores KPIs', 3),
(45, 'jefeap', 'jefeap', 'Jefe de Apple', 2, 'Jefe encargado de los KPIs de la empresa Microsoft\r\n', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
