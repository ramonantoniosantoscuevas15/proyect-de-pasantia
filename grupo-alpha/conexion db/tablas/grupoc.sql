-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-11-2021 a las 17:48:22
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id17960999_pasantes_alpha_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupoc`
--

CREATE TABLE `grupoc` (
  `id` int(11) NOT NULL,
  `nombre` text CHARACTER SET ascii NOT NULL,
  `apellido` varchar(150) CHARACTER SET ascii NOT NULL,
  `correo` text CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupoc`
--

INSERT INTO `grupoc` (`id`, `nombre`, `apellido`, `correo`) VALUES
(1, 'ronald', 'danilo', 'ronadl.@gmail.com'),
(2, 'maria', 'casandra', 'as@gmail,com'),
(3, 'adslkjdkasl', 'alskdkaskjd', 'Radhames@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupoc`
--
ALTER TABLE `grupoc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupoc`
--
ALTER TABLE `grupoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
