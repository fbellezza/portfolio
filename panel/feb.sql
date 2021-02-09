-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 13-05-2020 a las 23:37:01
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

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
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `iibb` text COLLATE utf8_spanish_ci NOT NULL,
  `actividad` text COLLATE utf8_spanish_ci NOT NULL,
  `empleados` text COLLATE utf8_spanish_ci NOT NULL,
  `sup` text COLLATE utf8_spanish_ci NOT NULL,
  `energia` text COLLATE utf8_spanish_ci NOT NULL,
  `alquiler` text COLLATE utf8_spanish_ci NOT NULL,
  `pummaxvcm` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `locaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `venta` text COLLATE utf8_spanish_ci NOT NULL,
  `aportes` text COLLATE utf8_spanish_ci NOT NULL,
  `os` text COLLATE utf8_spanish_ci NOT NULL,
  `locpservicios` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ventacosasmuebles` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `monotributo`
--

INSERT INTO `monotributo` (`id`, `categoria`, `iibb`, `actividad`, `empleados`, `sup`, `energia`, `alquiler`, `pummaxvcm`, `locaciones`, `venta`, `aportes`, `os`, `locpservicios`, `ventacosasmuebles`) VALUES
(1, 'A', '$ 208.739,25', 'No excluida', 'No requiere', 'Hasta 30 m2', 'Hasta 3330 Kw', '$ 78.277,23', '$ 29.119,56', '$ 168,97', '$ 168,97', '$ 745,49', '$ 1.041,22', '$ 1.955,68', '$ 1.955,68\r\n');

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
(1, 'Federico F', 'Bellezza', 'fede_bellezza@hotmail.com', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 1, 'vistas/img/usuarios/fede_bellezza@hotmail.com/782.png', '2020-05-13 19:09:26', '2020-03-27 03:28:07'),
(13, 'Carlos', 'Gutierrez', 'carlosdanielgutierrez@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auelrdZeBYZ4t33w118t1DE5bSBf9deF2', 'Administrador', 1, 'vistas/img/usuarios/carlosdanielgutierrez@gmail.com/210.jpg', '0000-00-00 00:00:00', '2020-05-13 23:22:27'),
(11, 'Luca', 'Prodan', 'luca@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auJRR6foEJ7ynpjisKtbiKJbvJsoQ8VPS', 'Especial', 1, 'vistas/img/usuarios/luca@gmail.com/726.png', '0000-00-00 00:00:00', '2020-05-10 13:10:50'),
(12, 'Gustavo', 'Cerati', 'gustavo@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'Vendedor', 1, 'vistas/img/usuarios/gustavo@gmail.com/743.jpg', '0000-00-00 00:00:00', '2020-05-10 13:11:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
