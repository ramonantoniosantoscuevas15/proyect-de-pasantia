-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-11-2021 a las 17:41:43
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
-- Estructura de tabla para la tabla `individuales`
--

CREATE TABLE `individuales` (
  `Id` int(11) NOT NULL,
  `conociminetoshtml` int(11) NOT NULL,
  `conociminetoscss` int(11) NOT NULL,
  `conocimientosjavascript` int(11) NOT NULL,
  `conocimientosphp` int(11) NOT NULL,
  `conocimientosc` int(11) NOT NULL,
  `conocimientosch` int(11) NOT NULL,
  `Id_formulario` int(11) DEFAULT NULL,
  `conocimientoscm` int(11) NOT NULL,
  `conocimientossql` int(11) NOT NULL,
  `conocimientosora` int(11) NOT NULL,
  `conocimientosmy` int(11) NOT NULL,
  `conocimientosex` int(11) NOT NULL,
  `conocimientospo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `individuales`
--

INSERT INTO `individuales` (`Id`, `conociminetoshtml`, `conociminetoscss`, `conocimientosjavascript`, `conocimientosphp`, `conocimientosc`, `conocimientosch`, `Id_formulario`, `conocimientoscm`, `conocimientossql`, `conocimientosora`, `conocimientosmy`, `conocimientosex`, `conocimientospo`) VALUES
(38, 9, 6, 8, 8, 9, 8, 51, 7, 8, 8, 9, 10, 7),
(39, 5, 6, 8, 8, 8, 9, 52, 10, 6, 6, 7, 4, 10),
(40, 10, 10, 0, 9, 9, 0, 53, 0, 0, 0, 0, 0, 0),
(41, 3, 3, 1, 4, 3, 4, 58, 6, 7, 7, 7, 7, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `individuales`
--
ALTER TABLE `individuales`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_formulario` (`Id_formulario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `individuales`
--
ALTER TABLE `individuales`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
