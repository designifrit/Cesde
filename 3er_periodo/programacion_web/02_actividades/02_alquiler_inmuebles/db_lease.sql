-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2021 a las 04:41:29
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
-- Base de datos: `db_lease`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartment`
--

CREATE TABLE `apartment` (
  `id_apartment` int(10) NOT NULL,
  `id_country` tinyint(3) NOT NULL,
  `id_city` int(7) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(90) NOT NULL,
  `coordinates` varchar(300) NOT NULL,
  `roms` tinyint(2) NOT NULL,
  `id_image` text NOT NULL,
  `value` int(8) NOT NULL,
  `review` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apartment`
--

INSERT INTO `apartment` (`id_apartment`, `id_country`, `id_city`, `name`, `address`, `coordinates`, `roms`, `id_image`, `value`, `review`) VALUES
(1, 1, 2, 'Apartamento agradable en zona exclusiva', 'Local #180, Cra. 70 #19101', 'https://www.google.com/maps/place/El+punto+de+Maria+Luisa/@6.2146991,-75.5940837,261m/data=!3m2!1e3!4b1!4m5!3m4!1s0x8e4429dc46b16cfb:0xa7c57e0ca17df0c1!8m2!3d6.2146978!4d-75.5935365?hl=es', 2, 'https://images.homify.com/c_fill,f_auto,h_700,q_auto/v1505145541/p/photo/image/2222568/MARIA_LUISA_CALLE_08.jpg', 1250000, 'Apartamento para arriendo barrio Laureles, sector residencial con facilidad de acceso dado a diferentes vias (San Juan, Nutibara) y rutas de transporte, con parques (1er parque de Laureles), colegios, parroquias, supermercados y pasajes comerciales cerca. Segundo piso que abarca un área de 75 metros'),
(2, 1, 1, 'Casa en zona comercial y de acceso fácil', 'Carrera 31 # 81-153 a 81-65', 'https://www.google.com/maps/place/Cl.+31+%2381-153+a+81-65,+Medell%C3%ADn,+Antioquia/@6.2333539,-75.6034648,151m/data=!3m1!1e3!4m5!3m4!1s0x8e442994064bd3bd:0x1b7c3b438bedb470!8m2!3d6.2333652!4d-75.6031469?hl=es', 3, 'https://losmolinos.com.co/wp-content/uploads/2020/10/CentroComercial-IMG1.jpg', 1150000, 'Sala-comedor,alcobas con aire acondicionado, 2 closet, 2 baños, cocina integral, balcon, zona de ropas, red de gas, calentador, parqueadero + amplio cuarto util 65MT2 conjunto residencial con: salon social, juegos infantiles, cancha deportiva, porteria 24 horas, piscina, turco, zona bbq, gimnasio Información'),
(3, 1, 3, 'Apartamento en zona tranquila con centro deportivo', 'Cl. 42 #63-2 a 63-50', 'https://www.google.com/maps/place/Cl.+42+%2363-2+a+63-50,+Medell%C3%ADn,+Antioquia/@6.2436778,-75.5808866,219m/data=!3m1!1e3!4m5!3m4!1s0x8e4429a954bab3f3:0x2bb816fcd0128871!8m2!3d6.2436838!4d-75.5804346?hl=es', 3, 'https://www.eltiempo.com/files/image_640_428/files/crop/uploads/2019/12/01/5de3eb8859ee6.r_1575295958815.0-130-2000-1123.jpeg', 1350000, 'Unidad cerrada con un área de 136.5 mt² 3 Alcobas con Closet y Baño Privado, 1 Baño Social, Balcón con Vista Panoramica, Salón Comedor, Cocina Integral con Barra, Zona de Ropas, Red de Gas y Calentador. Parqueadero Cubierto Doble Lineal. Conjunto cerrado con porteria 24 horas, Ascensor, Cancha de Squash, Canchas Deportivas, Circuito Cerrado de TV, Gimnasio, Jacuzzi, Juegos Infantiles, Piscina.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE `city` (
  `id_city` int(7) NOT NULL,
  `id_country` tinyint(3) NOT NULL,
  `name_city` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `city`
--

INSERT INTO `city` (`id_city`, `id_country`, `name_city`) VALUES
(1, 1, 'Bogotá'),
(2, 1, 'Medellín'),
(3, 1, 'Cali'),
(4, 2, 'Santiago de Chile'),
(5, 2, 'Valparaíso'),
(6, 2, 'Punta Arenas'),
(7, 3, 'Cancún'),
(8, 3, 'Campeche'),
(9, 3, 'Puerto Vallarta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `id_country` tinyint(3) NOT NULL,
  `name_country` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`id_country`, `name_country`) VALUES
(1, 'Colombia'),
(2, 'Chile'),
(3, 'Mexico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(7) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_apartment` int(10) NOT NULL,
  `id_country` tinyint(3) NOT NULL,
  `review` varchar(100) NOT NULL,
  `profile_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `name`, `id_apartment`, `id_country`, `review`, `profile_image`) VALUES
(1, 'Pedro Picapiedras', 1, 1, 'Jabadabaduuuuu!', 'https://64.media.tumblr.com/08a5f1902e7895f412bb74397302d0c9/tumblr_inline_pk35hxuVly1skheml_500.jpg'),
(2, 'Carla la mala', 2, 2, 'Soy una mala', 'https://aufloria.com/wp-content/uploads/2021/02/WhatsApp-Image-2021-02-18-at-15.53.25-11.jpeg'),
(3, 'Juancho Pansa', 3, 3, 'El Quijote soy yo', 'https://i.pinimg.com/originals/6a/17/17/6a1717e49064c7d53c16412391d04188.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`id_apartment`),
  ADD KEY `id_city` (`id_city`),
  ADD KEY `id_country` (`id_country`);

--
-- Indices de la tabla `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_city`),
  ADD KEY `id_country` (`id_country`);

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id_country`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_apartment` (`id_apartment`),
  ADD KEY `id_country` (`id_country`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartment`
--
ALTER TABLE `apartment`
  MODIFY `id_apartment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `city`
--
ALTER TABLE `city`
  MODIFY `id_city` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `country`
--
ALTER TABLE `country`
  MODIFY `id_country` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apartment`
--
ALTER TABLE `apartment`
  ADD CONSTRAINT `apartment_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `city` (`id_city`),
  ADD CONSTRAINT `apartment_ibfk_2` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`);

--
-- Filtros para la tabla `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_apartment`) REFERENCES `apartment` (`id_apartment`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
