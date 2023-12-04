-- phpMyAdmin SQL Dump
-- version 3.3.0
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2016 a las 07:00:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8_spanish_ci */;

--
-- Base de datos: `central_camionera`
--

-- CREATE DATABASE IF NOT EXISTS `central_camionera` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `central_camionera`;

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `id` int(11) UNSIGNED NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` int(11) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `tipo_combustible` varchar(100) NOT NULL,
  `fecha_fabricacion` date NOT NULL,
  `num_asientos` int(11) NOT NULL,
  `disponibilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`id`, `marca`, `modelo`, `capacidad`, `tipo_combustible`, `fecha_fabricacion`, `num_asientos`, `disponibilidad`) VALUES
(123, 'Volkswagen', '2018', 36, 'Diésel ', '0000-00-00', 36, 0),
(234, 'Mercedez', '2022', 36, 'Diésel ', '0000-00-00', 36, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `fecha_naci` date NOT NULL,
  `lugar_destino` varchar(100) NOT NULL,
  `num_camion` int(11) NOT NULL,
  `horario_viaje` time NOT NULL,
  `licencia` varchar(100) NOT NULL,
  `curso_manejo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`id`, `nombre_completo`, `fecha_naci`, `lugar_destino`, `num_camion`, `horario_viaje`, `licencia`, `curso_manejo`) VALUES
(1, 'Jurado Garcia Hiram Jaziel', '0000-00-00', 'Durango', 13, '00:00', 'Si', 'Si'),
(2, 'Dania Alexandra Gonzales', '0000-00-00', 'Chihuahua', 16, '00:00', 'Si', 'Si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camion`
--
ALTER TABLE `camion`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
