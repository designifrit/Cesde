-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2021 a las 00:48:28
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos_store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `producto` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `existencias` varchar(4) NOT NULL,
  `valor` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto`, `descripcion`, `existencias`, `valor`) VALUES
('Audifonos Sony', 'Audifonos extra bass con cancelación de ruido', '254', '320000'),
('Licuadora B&D', 'Licuadora Black & Decker con motor silencioso', '125', '195000'),
('Mouse Logitech', 'Mouse Logitech tipo gamer con luz RGB', '195', '95700'),
('Portatil Samsung', 'Procesador quadcore, 4gb de memoria', '37', '1250000'),
('Silla', 'Silla ergonómica para gamers', '101', '178900'),
('Televisor Samsung', 'Televisor Samsung de 65 pulgadas con pantalla oled', '45', '2350000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
