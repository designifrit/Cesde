-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2020 a las 04:20:28
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaweb1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `precio` int(8) NOT NULL,
  `descripcion` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `marca`, `precio`, `descripcion`, `foto`) VALUES
(1, 'Betty basics', 'Alicia Midi', 229000, 'Vestido color Fucsia', 0x6261726e2d3934363639395f3634302e6a7067),
(3, 'Remain', 'Anya Ribbed Tee', 170000, 'Blusa color amarillo', 0x6769726c2d3438373036355f3634302e6a7067),
(4, 'Blak', 'Bombshell Slip', 250000, 'Chaqueta jean', 0x6769726c2d313832383533385f3634302e6a7067),
(5, 'Blak', 'Chantily Dress', 235000, 'Vestido con encajes', 0x6769726c2d313834383437325f3634302e6a7067),
(6, 'My boyfriend back', 'Dreamer Tee', 145000, 'Top blanco con bordes negro', 0x66617368696f6e2d313834363439305f3634302e6a7067),
(7, 'Blak', 'Envious Dress', 195000, 'Vestido cuero color negro', 0x6769726c2d313834383437335f3634302e6a7067),
(8, 'Blak', 'Felix Dress', 310000, 'Chaqueta cuero color negro', 0x706f7274726169742d333038333430325f3634302e6a7067),
(9, 'Saben', 'Fifi', 185000, 'Vestido de flores', 0x706f7274726169742d3539373137335f3634302e6a7067);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
