-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 31-05-2020 a las 21:42:49
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `feb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

DROP TABLE IF EXISTS `archivos`;
CREATE TABLE IF NOT EXISTS `archivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `usuario` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `ruta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `idUsuario`, `usuario`, `nombre`, `ruta`, `fecha`) VALUES
(3, 12, 'gustavo@gmail.com', 'ciroAndres', 'vistas/modulos/uploads/gustavo@gmail.com/ciroAndres.jpg', '2020-05-31 19:25:24'),
(2, 1, 'fede_bellezza@hotmail.com', 'Federico', 'vistas/modulos/uploads/fede_bellezza@hotmail.com/Federico.pdf', '2020-05-31 13:42:55'),
(4, 12, 'gustavo@gmail.com', 'gustavito', 'vistas/modulos/uploads/gustavo@gmail.com/gustavito.png', '2020-05-31 20:04:43'),
(5, 12, 'gustavo@gmail.com', 'gustavo', 'vistas/modulos/uploads/gustavo@gmail.com/gustavo.png', '2020-05-31 21:29:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(3, 'autos'),
(2, 'Motos3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cuit` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ultima_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `cuit`, `email`, `telefono`, `direccion`, `ultima_login`) VALUES
(14, 'Federico Bellezza', '20324409956', 'fede_bellezza@hotmail.com', '2281551798', 'Calle 1 N°418 - PIDA 2 - Azul', '2020-05-31 14:51:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Evento Azul', '#0071c5', '2017-08-01 00:00:00', '2017-08-02 00:00:00'),
(2, 'Eventos 2', '#40E0D0', '2017-08-02 00:00:00', '2017-08-03 00:00:00'),
(3, 'Doble click para editar evento', '#008000', '2017-08-03 00:00:00', '2017-08-07 00:00:00'),
(4, 'hoy', '#FF0000', '2020-03-28 00:00:00', '2020-03-29 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monotributo`
--

DROP TABLE IF EXISTS `monotributo`;
CREATE TABLE IF NOT EXISTS `monotributo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `iibb` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `actividad` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `empleados` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `sup` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `energia` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `alquiler` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `pummaxvcm` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `locaciones` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `venta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `aportes` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `os` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `locpservicios` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `ventacosasmuebles` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `monotributo`
--

INSERT INTO `monotributo` (`id`, `categoria`, `iibb`, `actividad`, `empleados`, `sup`, `energia`, `alquiler`, `pummaxvcm`, `locaciones`, `venta`, `aportes`, `os`, `locpservicios`, `ventacosasmuebles`) VALUES
(1, 'A', '$ 208.739,25', 'No excluida', 'No requiere', 'Hasta 30 m2', 'Hasta 3330 Kw', '$ 78.277,23', '$ 29.119,56', '$ 168,97', '$ 168,97', '$ 745,49', '$ 1.041,22', '$ 1.955,68', '$ 1.955,68\r\n'),
(16, 'B', '$ 313.108,87', 'No Excluida', 'No Requiere', 'Hasta 45 m2', 'Hasta 5000kw', '$ 78.277,23', '$ 29.119,56', '$ 325,54', '$ 325,54', '$ 820,04', '$ 1041,22', '$ 2.186,80', '$ 2.186,80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monotributo2`
--

DROP TABLE IF EXISTS `monotributo2`;
CREATE TABLE IF NOT EXISTS `monotributo2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dato1` text COLLATE utf8_spanish_ci,
  `dato2` text COLLATE utf8_spanish_ci,
  `dato3` text COLLATE utf8_spanish_ci,
  `dato4` text COLLATE utf8_spanish_ci,
  `dato5` text COLLATE utf8_spanish_ci,
  `dato6` text COLLATE utf8_spanish_ci,
  `dato7` text COLLATE utf8_spanish_ci,
  `dato8` text COLLATE utf8_spanish_ci,
  `dato9` text COLLATE utf8_spanish_ci,
  `dato10` text COLLATE utf8_spanish_ci,
  `dato11` text COLLATE utf8_spanish_ci,
  `dato12` text COLLATE utf8_spanish_ci,
  `dato13` text COLLATE utf8_spanish_ci,
  `dato14` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `apellido` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `mail` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `perfil` text COLLATE latin1_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `mail`, `password`, `perfil`, `estado`, `foto`, `ultimo_login`, `fecha`) VALUES
(1, 'Federico F', 'Bellezza', 'fede_bellezza@hotmail.com', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 1, 'vistas/img/usuarios/fede_bellezza@hotmail.com/782.png', '2020-05-31 18:28:01', '2020-03-27 03:28:07'),
(13, 'Carlos', 'Gutierrez', 'carlosdanielgutierrez@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auelrdZeBYZ4t33w118t1DE5bSBf9deF2', 'Administrador', 1, 'vistas/img/usuarios/carlosdanielgutierrez@gmail.com/210.jpg', '0000-00-00 00:00:00', '2020-05-13 23:22:27'),
(11, 'Luca', 'Prodan', 'luca@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auJRR6foEJ7ynpjisKtbiKJbvJsoQ8VPS', 'Especial', 1, 'vistas/img/usuarios/luca@gmail.com/726.png', '0000-00-00 00:00:00', '2020-05-10 13:10:50'),
(12, 'Gustavo', 'Cerati', 'gustavo@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auyMGRqy.m0N/UQn29PX.j6Bq3jVEgeZ6', 'Cliente', 1, 'vistas/img/usuarios/gustavo@gmail.com/743.jpg', '2020-05-31 18:29:00', '2020-05-10 13:11:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
