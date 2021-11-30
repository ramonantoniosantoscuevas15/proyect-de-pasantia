-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-11-2021 a las 17:42:29
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
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `id` int(11) NOT NULL,
  `repositorio` text DEFAULT NULL,
  `linkedIn` text DEFAULT NULL,
  `portafolio` text DEFAULT NULL,
  `curriculum` varchar(250) DEFAULT NULL,
  `Id_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evaluaciones`
--

INSERT INTO `evaluaciones` (`id`, `repositorio`, `linkedIn`, `portafolio`, `curriculum`, `Id_formulario`) VALUES
(31, 'https://github.com/JoseJavierPena/grupo-alpha', 'https://github.com/JoseJavierPena/grupo-alpha', 'https://github.com/JoseJavierPena/grupo-alpha', 'curriculum/22-11-21-13-57-33-mapa mental.pdf', 51),
(32, 'https://github.com/JoseJavierPena/grupo-alpha', 'https://github.com/JoseJavierPena/grupo-alpha', 'https://github.com/JoseJavierPena/grupo-alpha', 'curriculum/22-11-21-14-24-44-mapa mental.pdf', 52),
(33, 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'curriculum/23-11-21-02-37-58-README.txt', 53),
(34, 'http://localhost/grupo-alpha/cuestionarios/evaluaciones.html', 'http://localhost/grupo-alpha/cuestionarios/evaluaciones.html', 'http://localhost/grupo-alpha/cuestionarios/evaluaciones', 'curriculum/26-11-21-12-27-54-carta de reclamacion (1).pdf', 58);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_formulario` (`Id_formulario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
