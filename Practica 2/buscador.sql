-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-05-2018 a las 09:39:57
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `buscador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Conexion`
--

CREATE TABLE `Conexion` (
  `idP` int(11) NOT NULL,
  `idW` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pages`
--

CREATE TABLE `Pages` (
  `idP` int(11) NOT NULL,
  `URL` varchar(255) DEFAULT NULL,
  `Titulo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Word`
--

CREATE TABLE `Word` (
  `idW` int(11) NOT NULL,
  `Palabra` varchar(255) DEFAULT NULL,
  `frecuencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Conexion`
--
--
-- Indices de la tabla `Pages`
--
ALTER TABLE `Pages`
  ADD PRIMARY KEY (`idP`);

--
-- Indices de la tabla `Word`
--
ALTER TABLE `Word`
  ADD PRIMARY KEY (`idW`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Pages`
--
ALTER TABLE `Pages`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Word`
--
ALTER TABLE `Word`
  MODIFY `idW` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
