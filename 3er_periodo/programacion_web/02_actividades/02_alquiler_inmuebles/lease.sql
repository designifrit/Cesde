-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2021 a las 06:27:25
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
-- Base de datos: `lease`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartment`
--

CREATE TABLE `apartment` (
  `idApartment` int(8) NOT NULL,
  `idUser` int(8) NOT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idCity` mediumint(6) NOT NULL,
  `idCountry` smallint(3) NOT NULL,
  `date` datetime NOT NULL,
  `review` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest` smallint(4) NOT NULL,
  `rom` tinyint(2) NOT NULL,
  `bed` tinyint(3) NOT NULL,
  `bathroom` tinyint(2) NOT NULL,
  `value` int(10) NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `apartment`
--

INSERT INTO `apartment` (`idApartment`, `idUser`, `location`, `address`, `idCity`, `idCountry`, `date`, `review`, `guest`, `rom`, `bed`, `bathroom`, `value`, `photo`, `url`) VALUES
(6, 1, 'Apartamento en Laureles', 'Carrera 45 # 2A 76', 1, 1, '2021-06-03 21:06:16', 'Se arrienda apartamento duplex, de 3 habitaciones, con vestier, 3 baños, 2 balcones, sala, comedor, cocina integral, patio cubierto con pergola. garaje sencillo, cuarto útil, zona de ropas. Edificio con portería diurna, ascensor, shut de basuras. Cerca del primer parque de laureles, zona gourmet', 3, 3, 2, 2, 350000, 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/images/1622772376_291387f8e943eb45a0c7.jpg', 'https://goo.gl/maps/51Mn4HJSTJAZhZw98'),
(7, 1, 'Apartamento en Bogotá', 'Calle 23 # 23 34', 2, 1, '2021-05-29 19:54:35', 'Amplia alcoba principal con baño, vestier, jacuzzi y sala de estar, sala, comedor, estudio, baño social, cocina integral, servicios de gas, calentador de gas, alcoba de servicio, parqueadero doble, cuarto útil y portería 24 horas, juegos para niños, sauna, turco ', 3, 2, 2, 2, 365900, 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/images/1622336075_2c230388bf7366f7cc11.jpg', 'https://goo.gl/maps/XXMuTYVGrEw2UGxm9'),
(8, 1, 'Casa finca en Rionegro', 'Carrera 87 # 24 88B', 10, 1, '2021-05-29 19:58:11', 'En San Antonio muy bien ubicado ambiente muy tranquilo y familiar Administracion incluida Codigo Abad Faciolince ', 7, 4, 5, 3, 589000, 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/images/1622336291_393a854c940a56060445.jpg', 'https://goo.gl/maps/LjFYkbV92CMktAMH8'),
(9, 1, 'Finca en La Ceja', 'Calle 34 via oriente 4A 35', 10, 1, '2021-05-29 20:00:22', 'Y si de vivir relajado se trata.. Espectacular aparta suites Amoblado con 01 habitaciones,01 baños completo,garaje 01. En un excelente sector de la ciudad encuentras este inmueble, cerca a Centros Comerciales,supermercados,restaurantes. Porque los asuntos importantes deben quedar en manos de experto', 9, 5, 5, 3, 759800, 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/images/1622336422_23d656b2b6d86f5e254f.jpg', 'https://goo.gl/maps/vUekGEFbdT8LNZ89A'),
(11, 1, 'Apartamento en Laureles', 'Cr 81 # 6a 58, Apto. 1701', 1, 1, '2021-05-29 20:05:16', 'Arriendo Casa finca de dos niveles con excelente ubicación,4 alcobas,alcoba de servicio,4 baños,baño de servicio,4 closets,sala comedor,comedor auxiliar,cocina integral con pipeta de gas,parqueadero cubierto doble,parqueadero para visitantes,tiene Deck con pérgola,hermoso jardín,unidad cerrada', 9, 4, 6, 3, 1850300, 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/images/1622336716_66a9e93d481631b6312e.jpg', 'https://goo.gl/maps/vXgxzFs6mKzWfPxo9'),
(15, 3, 'Apartamento en Bogotá', 'Cr 81 # 6a 58, Apto. 1701', 1, 1, '2021-06-01 22:16:20', 'Espacioso y comodo apartamento ubicado en zona muy arborizada frente al campus universitario de la UPB sobre la Circular Primera. Zona muy tranquila y agradable cerca a Centro Comercial Unicentro', 3, 4, 2, 2, 450900, 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/images/1622603780_01525ee7c58ac5b87be2.jpg', 'https://goo.gl/maps/LjFYkbV92CMktAMH8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE `city` (
  `idCity` mediumint(6) NOT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idCountry` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `city`
--

INSERT INTO `city` (`idCity`, `city`, `idCountry`) VALUES
(1, 'Medellín', 1),
(2, 'Bogotá', 1),
(3, 'Cali', 1),
(4, 'Barranquilla', 1),
(5, 'Cartagena', 1),
(6, 'Bucaramanga', 1),
(7, 'Manizales', 1),
(8, 'Santa Marta', 1),
(9, 'Pereira', 1),
(10, 'Rionegro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `idCountry` smallint(3) NOT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`idCountry`, `country`) VALUES
(1, 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservation`
--

CREATE TABLE `reservation` (
  `idReservation` int(10) NOT NULL,
  `idUser` int(8) NOT NULL,
  `idApartment` int(8) NOT NULL,
  `arrivalDate` date NOT NULL,
  `departureDate` date NOT NULL,
  `days` int(3) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `totalRate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservation`
--

INSERT INTO `reservation` (`idReservation`, `idUser`, `idApartment`, `arrivalDate`, `departureDate`, `days`, `state`, `totalRate`) VALUES
(1, 1, 6, '2021-06-10', '2021-06-15', 5, 1, 850000),
(2, 2, 7, '2021-07-05', '2021-07-13', 3, 1, 950000),
(3, 3, 8, '2021-08-20', '2021-08-25', 6, 1, 1250000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `idUser` int(8) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idCity` mediumint(6) NOT NULL,
  `idCountry` smallint(3) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profilePhoto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`idUser`, `name`, `lastName`, `idCity`, `idCountry`, `email`, `password`, `role`, `description`, `profilePhoto`) VALUES
(1, 'Alejandro', 'Orozco', 1, 1, 'designifrit@gmail.com', '123', '1', 'Diseñador visual / Front-end y estudiante de desarrollo de software', 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/perfil/1622955468_7580c5dc6a9383159d61.jpg'),
(2, 'Angelo', 'Orozco', 1, 1, 'angeloch02@gmail.com', '123', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, ipsa pariatur dolores nam recusandae alias totam officia rem provident quae, similique, blanditiis nulla odit. Eligendi voluptate saepe in? Aperiam, quia.\r\nQuibusdam, porro corporis ut a, dolore in minima sint laborum assumenda distin', 'https://pfpmaker.com/_nuxt/img/profile-3-1.3e702c5.png'),
(3, 'Juliana', 'Chavarriaga', 1, 1, 'julianach0204@gmail.com', '123', '1', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, ipsa pariatur dolores nam recusandae alias totam officia rem provident quae, similique, blanditiis nulla odit. Eligendi voluptate saepe in? Aperiam, quia.\r\nQuibusdam, porro corporis ut a, dolore in minima sint laborum assumenda distin', 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/perfil/1622420362_88232e4696208f5223e2.png'),
(5, 'Carlos', 'Mesa Lopez', 7, 1, 'carlosm@gmail.com', '123', '1', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, ipsa pariatur dolores nam recusandae alias totam officia rem provident quae, similique, blanditiis nulla odit. Eligendi voluptate saepe in? Aperiam, quia.\r\nQuibusdam, porro corporis ut a, dolore in minima sint laborum assumenda distin', 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/perfil/1622519715_d8613c603e3072525b4e.jpg'),
(12, 'Jorge', 'Orozco E', 10, 1, 'joralbert56@gmail.com', '123', '1', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et h', 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/perfil/1623203368_c1ef1682ba0e81ce4588.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`idApartment`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idCity` (`idCity`),
  ADD KEY `idCountry` (`idCountry`);

--
-- Indices de la tabla `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`idCity`),
  ADD KEY `idCountry` (`idCountry`);

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`idCountry`);

--
-- Indices de la tabla `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `idApartment` (`idApartment`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idCity` (`idCity`),
  ADD KEY `idCountry` (`idCountry`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartment`
--
ALTER TABLE `apartment`
  MODIFY `idApartment` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `city`
--
ALTER TABLE `city`
  MODIFY `idCity` mediumint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `country`
--
ALTER TABLE `country`
  MODIFY `idCountry` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idReservation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apartment`
--
ALTER TABLE `apartment`
  ADD CONSTRAINT `apartment_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `apartment_ibfk_2` FOREIGN KEY (`idCity`) REFERENCES `city` (`idCity`),
  ADD CONSTRAINT `apartment_ibfk_3` FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`);

--
-- Filtros para la tabla `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`);

--
-- Filtros para la tabla `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idApartment`) REFERENCES `apartment` (`idApartment`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idCity`) REFERENCES `city` (`idCity`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
