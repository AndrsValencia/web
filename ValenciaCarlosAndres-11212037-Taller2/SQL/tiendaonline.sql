-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2014 a las 09:29:57
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tiendaonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_bin NOT NULL,
  `movil` int(10) NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `pais` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `usuario`, `contrasena`, `movil`, `direccion`, `pais`) VALUES
(1, 'Carlos Andres', 'Valencia', 'andresvalenciadmi@gmail.com', 'andval', 'wolf521', 3796605, 'Calle 20 # 116-105', 'Colombia'),
(2, 'Juan carlos', 'Micolta', 'miescolta@gmail.com', 'miescolta', 'miescolta', 3668954, 'calle falsa 123', 'Colombia'),
(5, '', '', '', '', '', 0, '', ''),
(6, '', '', '', '', '', 0, '', ''),
(7, '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedido`
--

CREATE TABLE IF NOT EXISTS `lineaspedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProducto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `precio` varchar(255) COLLATE utf8_bin NOT NULL,
  `existencias` int(11) NOT NULL,
  `activado` varchar(255) COLLATE utf8_bin NOT NULL,
  `imagen` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `existencias`, `activado`, `imagen`) VALUES
(1, 'Mochila puas', 'Mochila de cuero con distintas púas a su alrededor de color negro', '120000 ', 20, 'si', 'mUno.jpg'),
(2, 'Mochila caparazon', 'Mochila estilo caparazon de cuero sintetico, resistente color negro', '125000 ', 15, 'si', 'mSeis.jpg'),
(3, 'Mochila poly', 'Mochila color negro de tela con motivos poligonales color negro', '90000 ', 17, 'si', 'mDos.jpg'),
(4, 'Mochila azul', 'Mochila old School color azul de lona', '70000', 15, 'si', 'mCuatro.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
