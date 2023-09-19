-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2023 a las 16:49:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `RegistroAsesinatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesino`
--
-- Creación: 18-09-2023 a las 04:12:59
--

CREATE TABLE `asesino` (
  `Id` int(11) NOT NULL,
  `Nombre` char(20) NOT NULL,
  `Apellido` char(20) NOT NULL,
  `Edad` tinyint(3) NOT NULL,
  `Genero` char(30) NOT NULL,
  `Peso` smallint(4) NOT NULL,
  `Altura` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crimen`
--
-- Creación: 18-09-2023 a las 13:48:33
--

CREATE TABLE `crimen` (
  `Id` int(11) NOT NULL,
  `Arma` char(30) NOT NULL,
  `Tipo` char(30) NOT NULL,
  `Id_asesino` int(11) NOT NULL,
  `Id_victima` int(11) NOT NULL,
  `Fecha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `victimas`
--
-- Creación: 18-09-2023 a las 04:41:14
--

CREATE TABLE `victimas` (
  `Id` int(11) NOT NULL,
  `Nombre` char(30) NOT NULL,
  `Apellido` char(30) NOT NULL,
  `Edad` tinyint(4) NOT NULL,
  `Genero` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesino`
--
ALTER TABLE `asesino`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `crimen`
--
ALTER TABLE `crimen`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_asesino` (`Id_asesino`),
  ADD KEY `Id_victima` (`Id_victima`);

--
-- Indices de la tabla `victimas`
--
ALTER TABLE `victimas`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesino`
--
ALTER TABLE `asesino`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `crimen`
--
ALTER TABLE `crimen`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `victimas`
--
ALTER TABLE `victimas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `crimen`
--
ALTER TABLE `crimen`
  ADD CONSTRAINT `crimen_ibfk_1` FOREIGN KEY (`Id_asesino`) REFERENCES `asesino` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crimen_ibfk_2` FOREIGN KEY (`Id_victima`) REFERENCES `victimas` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
