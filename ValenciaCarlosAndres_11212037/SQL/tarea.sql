-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2014 a las 16:42:50
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `talleruno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE IF NOT EXISTS `tarea` (
  `idTarea` int(11) NOT NULL AUTO_INCREMENT,
  `FechaInicio` date NOT NULL,
  `FechaFinal` date NOT NULL,
  `Descripcion` text NOT NULL,
  `Prioridad` int(11) NOT NULL,
  PRIMARY KEY (`idTarea`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`idTarea`, `FechaInicio`, `FechaFinal`, `Descripcion`, `Prioridad`) VALUES
(1, '2014-09-12', '2014-09-26', 'irfbjkrhfb', 1),
(2, '2014-09-20', '2014-09-28', 'kreqeihgqli3uhgqliu5hgq3i', 3),
(3, '2014-09-19', '2014-09-13', 'taller web', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
