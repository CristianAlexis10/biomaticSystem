-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2018 a las 04:05:37
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biomatic_proyectos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `acc_token` varchar(100) NOT NULL,
  `usu_codigo` int(11) NOT NULL,
  `acc_contra` varchar(250) NOT NULL,
  `acc_codigo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`acc_token`, `usu_codigo`, `acc_contra`, `acc_codigo`) VALUES
('sfdksaldkjasd', 1, '$2y$10$qTD5VQmm/NYFKA6TeP0Yi.NCqBKGpXCCEFmr8hQcWSNHx.KBUaUie', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `arc_codigo` int(11) NOT NULL,
  `arc_nombre` varchar(40) NOT NULL,
  `arc_descripcion` longtext NOT NULL,
  `tip_arc_codigo` int(11) NOT NULL,
  `arc_url` varchar(200) NOT NULL,
  `arc_fecha` date NOT NULL,
  `pro_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `gru_codigo` int(11) NOT NULL,
  `gru_nombre` varchar(50) NOT NULL,
  `gru_descripcion` longtext NOT NULL,
  `gru_fecha_resgistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_formacion`
--

CREATE TABLE `programa_formacion` (
  `prog_codigo` int(11) NOT NULL,
  `porg_nombre` varchar(130) NOT NULL,
  `prog_siglas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `pro_codigo` int(11) NOT NULL,
  `pro_nombre` varchar(50) NOT NULL,
  `pro_inicio` date NOT NULL,
  `pro_programa_formacion` int(11) NOT NULL,
  `tip_pro_codigo` int(11) NOT NULL,
  `pro_serial` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectoxgrupo`
--

CREATE TABLE `proyectoxgrupo` (
  `pro_codigo` int(11) NOT NULL,
  `gru_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_archivo`
--

CREATE TABLE `tipo_archivo` (
  `tip_arc_codigo` int(11) NOT NULL,
  `tip_arc_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_archivo`
--

INSERT INTO `tipo_archivo` (`tip_arc_codigo`, `tip_arc_nombre`) VALUES
(1, 'Proyecto'),
(2, 'Acta de Reunión'),
(3, 'Listado de Asistencia a Reuniones'),
(4, 'Informe de investigación'),
(5, 'Articulo como resultado de la investigación'),
(6, 'Articulos de estudio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_proyecto`
--

CREATE TABLE `tipo_proyecto` (
  `tip_pro_codigo` int(11) NOT NULL,
  `tip_pro_nombre` varchar(40) NOT NULL,
  `tip_pro_descripcion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_proyecto`
--

INSERT INTO `tipo_proyecto` (`tip_pro_codigo`, `tip_pro_nombre`, `tip_pro_descripcion`) VALUES
(1, 'Investigación', ''),
(2, 'Innovaciòn', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_codigo` int(11) NOT NULL,
  `usu_nombre` varchar(40) NOT NULL,
  `usu_nombre2` varchar(40) DEFAULT NULL,
  `usu_apellido` varchar(40) NOT NULL,
  `usu_apellido2` varchar(40) DEFAULT NULL,
  `usu_correo` varchar(100) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `usu_estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_codigo`, `usu_nombre`, `usu_nombre2`, `usu_apellido`, `usu_apellido2`, `usu_correo`, `rol_id`, `usu_estado`) VALUES
(1, 'Evelin', NULL, 'lopera', NULL, 'eve@gmail.com', 1, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioxgrupo`
--

CREATE TABLE `usuarioxgrupo` (
  `gru_codigo` int(11) NOT NULL,
  `usu_codigo` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`acc_token`),
  ADD KEY `usu_codigo` (`usu_codigo`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`arc_codigo`),
  ADD KEY `tip_arc_codigo` (`tip_arc_codigo`),
  ADD KEY `pro_codigo` (`pro_codigo`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`gru_codigo`);

--
-- Indices de la tabla `programa_formacion`
--
ALTER TABLE `programa_formacion`
  ADD PRIMARY KEY (`prog_codigo`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`pro_codigo`),
  ADD KEY `pro_programa_formacion` (`pro_programa_formacion`),
  ADD KEY `tipo_proyecto` (`tip_pro_codigo`);

--
-- Indices de la tabla `proyectoxgrupo`
--
ALTER TABLE `proyectoxgrupo`
  ADD KEY `pro_codigo` (`pro_codigo`),
  ADD KEY `gru_codigo` (`gru_codigo`);

--
-- Indices de la tabla `tipo_archivo`
--
ALTER TABLE `tipo_archivo`
  ADD PRIMARY KEY (`tip_arc_codigo`);

--
-- Indices de la tabla `tipo_proyecto`
--
ALTER TABLE `tipo_proyecto`
  ADD PRIMARY KEY (`tip_pro_codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_codigo`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `usuarioxgrupo`
--
ALTER TABLE `usuarioxgrupo`
  ADD KEY `gru_codigo` (`gru_codigo`),
  ADD KEY `usu_codigo` (`usu_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `arc_codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `gru_codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `programa_formacion`
--
ALTER TABLE `programa_formacion`
  MODIFY `prog_codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `pro_codigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_archivo`
--
ALTER TABLE `tipo_archivo`
  MODIFY `tip_arc_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipo_proyecto`
--
ALTER TABLE `tipo_proyecto`
  MODIFY `tip_pro_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD CONSTRAINT `acceso_ibfk_1` FOREIGN KEY (`usu_codigo`) REFERENCES `usuario` (`usu_codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `archivos_ibfk_1` FOREIGN KEY (`pro_codigo`) REFERENCES `proyecto` (`pro_codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `archivos_ibfk_2` FOREIGN KEY (`tip_arc_codigo`) REFERENCES `tipo_archivo` (`tip_arc_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`pro_programa_formacion`) REFERENCES `programa_formacion` (`prog_codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `proyecto_ibfk_2` FOREIGN KEY (`tip_pro_codigo`) REFERENCES `tipo_proyecto` (`tip_pro_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectoxgrupo`
--
ALTER TABLE `proyectoxgrupo`
  ADD CONSTRAINT `proyectoxgrupo_ibfk_1` FOREIGN KEY (`gru_codigo`) REFERENCES `grupos` (`gru_codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `proyectoxgrupo_ibfk_2` FOREIGN KEY (`pro_codigo`) REFERENCES `proyecto` (`pro_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarioxgrupo`
--
ALTER TABLE `usuarioxgrupo`
  ADD CONSTRAINT `usuarioxgrupo_ibfk_1` FOREIGN KEY (`usu_codigo`) REFERENCES `usuario` (`usu_codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarioxgrupo_ibfk_2` FOREIGN KEY (`gru_codigo`) REFERENCES `grupos` (`gru_codigo`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
