-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-11-2021 a las 17:45:50
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
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `nombre`, `message`, `created_on`) VALUES
(1, 'Radhames', 'jlklknkjxndkjas', '2021-11-09 21:10:10'),
(2, 'Radhames', 'asdk;mkmaskdlm', '2021-11-09 21:10:14'),
(3, 'Radhames', 'dsakkmdasklm', '2021-11-09 21:10:16'),
(4, 'Radhames', 'dasdma s', '2021-11-09 21:10:19'),
(5, 'Radhames', 'dasdmask', '2021-11-09 21:10:21'),
(6, 'Radhames', '', '2021-11-12 01:20:47'),
(7, 'halla', 'klklk\r\n', '2021-11-17 20:31:09'),
(8, 'aldayan', 'hola, como estan ?\r\n', '2021-11-17 21:00:34'),
(9, 'aldayan', 'saludos', '2021-11-17 21:26:47'),
(10, 'Jose', 'Saludos ', '2021-11-18 02:18:51'),
(11, 'Jose', 'Se te daño tu computadora de nuevo?', '2021-11-18 02:19:28'),
(12, 'juan perez', 'hola\r\n', '2021-11-19 16:08:32'),
(13, 'juan perez', 'hola como estas ?', '2021-11-19 16:09:38'),
(14, 'juan perez', 'alguien ve esto?', '2021-11-19 16:10:08'),
(15, 'ramon admin ', 'si se ve algo', '2021-11-19 16:10:49'),
(16, 'ramon admin ', 'prueba coronado', '2021-11-19 16:11:40'),
(17, 'admin', 'hola', '2021-11-24 06:16:17'),
(18, 'pasante', '', '2021-11-24 06:23:17'),
(19, 'pasante', 'hola', '2021-11-24 06:23:24'),
(20, 'admin', 'hola', '2021-11-25 12:33:30'),
(21, 'admin', '', '2021-11-26 12:39:14'),
(22, 'admin', '', '2021-11-26 12:39:25'),
(23, 'admin', 'saludos', '2021-11-26 12:39:30'),
(24, 'admin', 'hola', '2021-11-26 12:39:39'),
(25, 'ramona', 'hola', '2021-11-26 13:59:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
