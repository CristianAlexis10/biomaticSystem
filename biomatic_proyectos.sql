-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2018 a las 03:24:01
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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_codigo`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
