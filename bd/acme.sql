-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2022 a las 00:29:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(5) NOT NULL,
  `cedula` int(20) NOT NULL,
  `pri_nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `seg_nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` int(2) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tb para usuarios';

--
-- Volcado de datos para la tabla `tb_users`
--

INSERT INTO `tb_users` (`id`, `cedula`, `pri_nombre`, `seg_nombre`, `apellidos`, `direccion`, `telefono`, `ciudad`, `contrasena`, `rol`, `fecha_registro`) VALUES
(1, 1143161827, 'Jefferson', 'Andrés', 'De moya Montoya', 'cra 22c 55-34', '3004369841', 'Barranquilla', '$2y$15$ELnajwgjM0Rn0Npfr3zB5u.FbbjJ.ICdUieKiqsCPdUG1K33Aik4W', 1, '2022-06-28'),
(2, 12345678, 'Susana', 'Horia', 'Rojas Lues', 'cra 1 22-11', '3004369883', 'Bogotá', '$2y$15$ZI/msy.V/x9vzYiBGIsuzuNX/zSQxHAfJ/QfvDSEDRSa/wGC3fFn2', 1, '2022-06-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos`
--

CREATE TABLE `tb_vehiculos` (
  `id` int(5) NOT NULL,
  `placa` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_vehiculo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `conductor_id` int(5) NOT NULL,
  `propietario_id` int(5) NOT NULL,
  `fecha_creado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tb_vehiculos`
--

INSERT INTO `tb_vehiculos` (`id`, `placa`, `color`, `marca`, `tipo_vehiculo`, `conductor_id`, `propietario_id`, `fecha_creado`) VALUES
(1, 'NXH121', 'rojo', 'CHEVROLET', 'particular', 1, 2, '2022-06-28'),
(2, 'XX111', 'rojo', 'CHEVROLET', 'particular', 1, 2, '2022-06-28'),
(3, 'VVH125', 'rojo', 'CHEVROLET', 'particular', 1, 2, '2022-06-28'),
(4, 'fff123', 'azul', 'renault', 'publico', 2, 1, '2022-06-28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conductor_id` (`conductor_id`),
  ADD KEY `propietario_id` (`propietario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  ADD CONSTRAINT `tb_vehiculos_ibfk_1` FOREIGN KEY (`propietario_id`) REFERENCES `tb_users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_vehiculos_ibfk_2` FOREIGN KEY (`conductor_id`) REFERENCES `tb_users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
