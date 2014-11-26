-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2014 a las 04:50:04
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `locaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locaciones`
--

CREATE TABLE IF NOT EXISTS `locaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `locaciones`
--

INSERT INTO `locaciones` (`id`, `tipo`, `nombre`, `latitud`, `longitud`) VALUES
(1, 'Restaurante', 'Los Girasoles restaurante', 3.457656, -76.535013),
(2, 'Restaurante', 'Restaurante Faro solar ', 3.474885, -76.518158),
(3, 'Restaurante', 'Platillos voladores', 3.453161, -76.537234),
(4, 'Bar', 'Bourbon st.', 3.460388, -76.533001),
(5, 'Bar', 'El faro', 3.462152, -76.530735),
(6, 'Bar', 'Abscenta Bar', 3.450315, -76.541118),
(7, 'Discoteca', 'Living club', 3.493913, -76.520659),
(8, 'Discoteca', 'La sucursal', 3.494055, -76.519531),
(9, 'Discoteca', 'Lolas', 3.509313, -76.519396);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
