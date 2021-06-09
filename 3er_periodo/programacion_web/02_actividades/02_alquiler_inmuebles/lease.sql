-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2021 a las 03:29:31
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
-- Base de datos: `bdusuarios`
--
CREATE DATABASE IF NOT EXISTS `bdusuarios` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdusuarios`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usr` varchar(30) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `clave` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usr`, `nombre`, `correo`, `clave`) VALUES
('', '', '', ''),
('AnaMariaG', 'Ana Maria Gomez', 'amg@gmail.com', '123'),
('freddymc', 'Freddy Moscoso Ceballos', 'fmc@gmail.com', '123'),
('luisafer', 'Luisa Fernanda', 'lfmg@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usr`);
--
-- Base de datos: `lease`
--
CREATE DATABASE IF NOT EXISTS `lease` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `lease`;

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
(4, 'Jorge', 'Orozco', 5, 1, 'joralbert56@gmail.com', '123', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, ipsa pariatur dolores nam recusandae alias totam officia rem provident quae, similique, blanditiis nulla odit. Eligendi voluptate saepe in? Aperiam, quia.\r\nQuibusdam, porro corporis ut a, dolore in minima sint laborum assumenda distin', 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/perfil/1622421872_b0c472dda517ad2ae8c7.jpg'),
(5, 'Carlos', 'Mesa Lopez', 7, 1, 'carlosm@gmail.com', '123', '1', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, ipsa pariatur dolores nam recusandae alias totam officia rem provident quae, similique, blanditiis nulla odit. Eligendi voluptate saepe in? Aperiam, quia.\r\nQuibusdam, porro corporis ut a, dolore in minima sint laborum assumenda distin', 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/perfil/1622519715_d8613c603e3072525b4e.jpg'),
(10, 'Alejandro', 'Orozco', 1, 1, 'designifrit@gmail.com', '123', '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptate beatae tempore exercitationem dicta velit quidem sapiente facilis, odit temporibus fugit nemo dignissimos fuga quo eius soluta illum suscipit rerum?\r\nFugiat nobis incidunt architecto iure aperiam quo, voluptatem tenetur mi', 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/perfil/1622606756_4efb3d72f173929c3672.jpg'),
(11, 'Carlos', 'Lopez', 7, 1, 'carlosm@outlook.com', '123', '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptate beatae tempore exercitationem dicta velit quidem sapiente facilis, odit temporibus fugit nemo dignissimos fuga quo eius soluta illum suscipit rerum?\r\nFugiat nobis incidunt architecto iure aperiam quo, voluptatem tenetur mi', 'http://localhost:8080/Cesde/3er_periodo/programacion_web/02_actividades/02_alquiler_inmuebles/public/uploads/perfil/1622608146_0a16008fb8a3c4b6e370.jpg');

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
  MODIFY `idApartment` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `idReservation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Volcado de datos para la tabla `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"relation_lines\":\"true\",\"snap_to_grid\":\"off\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"lease\",\"table\":\"user\"},{\"db\":\"lease\",\"table\":\"reservation\"},{\"db\":\"lease\",\"table\":\"country\"},{\"db\":\"lease\",\"table\":\"city\"},{\"db\":\"lease\",\"table\":\"apartment\"},{\"db\":\"db_lease\",\"table\":\"apartment\"},{\"db\":\"db_lease\",\"table\":\"country\"},{\"db\":\"db_lease\",\"table\":\"user\"},{\"db\":\"db_lease\",\"table\":\"city\"},{\"db\":\"taskapp\",\"table\":\"tasks\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'taskapp', 'tasks', '{\"sorted_col\":\"`description`  DESC\"}', '2021-05-16 17:01:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-06-09 01:08:18', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"es\",\"ThemeDefault\":\"darkwolf\",\"NavigationWidth\":281,\"DefaultConnectionCollation\":\"utf8mb4_general_ci\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `productos_store`
--
CREATE DATABASE IF NOT EXISTS `productos_store` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `productos_store`;

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
('Silla', 'Silla ergonómica para gamers', '155', '178900'),
('Televisor Samsung', 'Televisor Samsung de 65 pulgadas con pantalla oled', '45', '2350000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`producto`);
--
-- Base de datos: `taskapp`
--
CREATE DATABASE IF NOT EXISTS `taskapp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `taskapp`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `description`, `image_url`) VALUES
(5, 'CodeIgniter', 'Estudiar PDO en PHP', 'https://www.silversites.es/wp-content/uploads/2019/06/node-js-640x400.jpg'),
(7, 'CodeIgniter', 'Estudiar PDO en PHP', 'https://www.silversites.es/wp-content/uploads/2019/06/node-js-640x400.jpg'),
(8, 'CodeIgniter', 'Estudiar PDO en PHP', 'https://www.portstephens.nsw.gov.au/__data/assets/image/0020/8741/work_forlease.jpg'),
(11, 'CodeIgniter', 'Estudiar PDO en PHP', 'https://www.silversites.es/wp-content/uploads/2019/06/node-js-640x400.jpg'),
(15, 'One dark', 'Hacer evaluación del 2do momento', 'http://localhost:8080/Cesde/3er_periodo/programacion_web/03_ejercicios/05_code_igniter/public/uploads/images/1621184584_c4d1a307194b735feeb3.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
