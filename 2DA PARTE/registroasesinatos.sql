-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2023 a las 17:30:02
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registroasesinatos`
--
CREATE DATABASE IF NOT EXISTS `registroasesinatos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `registroasesinatos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesinos`
--

CREATE TABLE IF NOT EXISTS `asesinos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` char(30) NOT NULL,
  `Apellido` char(30) NOT NULL,
  `Edad` tinyint(10) NOT NULL,
  `Genero` char(35) NOT NULL,
  `Peso` float NOT NULL,
  `Altura` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asesinos`
--

INSERT INTO `asesinos` (`id`, `Nombre`, `Apellido`, `Edad`, `Genero`, `Peso`, `Altura`) VALUES
(1, 'Emanuel', 'San Roman', 19, 'Masculino', 75, 180),
(2, 'Geronimo', 'Langenheim', 19, 'Masculino', 70, 173);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'Alfredo', '$2y$10$iFd7DGp/wYQ4jghCRw9/petZHtDFhoQMau4V2D9rbKBnf9EHxgGf2'),
(2, 'webadmin', '$2y$10$sMF/c3yH9P1RcZWJraD.nOyFMj.9Lfyj8AMif43IzEbMuOlnpCwhe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `victimas`
--

CREATE TABLE IF NOT EXISTS `victimas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` char(30) NOT NULL,
  `Apellido` char(30) NOT NULL,
  `Edad` tinyint(4) NOT NULL,
  `Genero` char(30) NOT NULL,
  `id_asesino` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_asesino` (`id_asesino`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `victimas`
--

INSERT INTO `victimas` (`id`, `Nombre`, `Apellido`, `Edad`, `Genero`, `id_asesino`) VALUES
(2, 'Mauro', 'Cisneros', 19, 'Masculino', 2),
(3, 'Santino', 'Milanesi', 19, 'Masculino', 2),
(4, 'Fernando', 'Gutarra', 21, 'Masculino', 1),
(5, 'Juliana', 'Alvarez', 25, 'Femenino', 1),
(13, 'pepe', 'argento', 58, 'Masculino', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `victimas`
--
ALTER TABLE `victimas`
  ADD CONSTRAINT `victimas_ibfk_1` FOREIGN KEY (`id_asesino`) REFERENCES `asesinos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
