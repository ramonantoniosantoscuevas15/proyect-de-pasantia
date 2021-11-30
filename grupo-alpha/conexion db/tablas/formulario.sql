-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-11-2021 a las 17:40:32
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
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `Id_formulario` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Apellido` varchar(250) NOT NULL,
  `Cedula` varchar(100) NOT NULL,
  `Universidad` varchar(250) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `Donde_vives` varchar(250) NOT NULL,
  `Correo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`Id_formulario`, `Nombre`, `Apellido`, `Cedula`, `Universidad`, `Telefono`, `Direccion`, `Donde_vives`, `Correo`) VALUES
(51, 'ramona', 'santana', '123456', 'itla', '856412512', 'halla', 'villa mella', 'aldayan.avila@gmail.com'),
(52, 'ramon', 'coronado', '654321', 'usa', '123456789', 'en su casa', 'por alla', 'vlado.07355@gmail.com'),
(54, 'Aldayan', 'Abila', '123', 'Itka', '123', 'Hola ', 'Hahaha', 'aldayan@gmail.com'),
(55, 'ramon', 'santos', '40225551338', 'utesa', '8296361510', 'por hay', 'azua', 'ramonantoniosantoscuevas73@gmail.com'),
(56, 'aldayan', 'alexandri', '40229610640', 'itla', '8097650690', 'respaldo francisco valgas', 'herrera', 'aldayan.avila@gmail.com'),
(57, 'aldayan', 'alexandri', '40229610640', 'itla', '8097650690', 'respaldo francisco valgas', 'herrera', 'aldayan.avila@gmail.com'),
(58, 'aldayan', 'alexandri', '40229610640', 'itla', '8097650690', 'respaldo francisco valgas', 'herrera', 'aldayan.avila@gmail'),
(59, 'ramon', 'alexandri', '40229610643', 'aldyan', '8097650690', 'respaldo francisco valgas', 'aspa', 'ramon@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`Id_formulario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `Id_formulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
