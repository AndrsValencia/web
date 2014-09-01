-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2014 a las 18:39:23
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `estudiantes_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantenotas`
--

CREATE TABLE IF NOT EXISTS `estudiantenotas` (
  `codigoestudiante` text COLLATE utf8_bin NOT NULL,
  `idnota` int(255) NOT NULL,
  `valornota` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estudiantenotas`
--

INSERT INTO `estudiantenotas` (`codigoestudiante`, `idnota`, `valornota`) VALUES
('11212037', 4, 5),
('12112019', 2, 4),
('11104017', 3, 5),
('11212037', 4, 4),
('12112009', 3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `Codigo` text COLLATE utf8_bin NOT NULL,
  `Nombre` text COLLATE utf8_bin NOT NULL,
  `Apellido` text COLLATE utf8_bin NOT NULL,
  `Correo` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`Codigo`, `Nombre`, `Apellido`, `Correo`) VALUES
('12112009', 'Andrea', 'Castaneda', 'andreacastan@hotmail.com'),
('12112019', 'Andres', 'Bonilla', 'andres.bonilla1@correo.icesi.edu.co'),
('11104017', 'Kammil', 'Carranza', 'kaescavi94@gmail.com'),
('11212037', 'Carlos', 'Valencia', 'andresvalenciadmi@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `idnota` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `porcentaje` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idnota`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`idnota`, `nombre`, `porcentaje`) VALUES
(1, 'taller1', '20'),
(2, 'taller2', '25'),
(3, 'taller3', '25'),
(4, 'taller4', '30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
