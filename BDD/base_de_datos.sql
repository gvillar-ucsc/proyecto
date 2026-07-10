-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2026 a las 13:10:06
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_de_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `id_stat` int(11) NOT NULL,
  `ubicacion` int(11) NOT NULL,
  `personas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadisticas`
--

INSERT INTO `estadisticas` (`id_stat`, `ubicacion`, `personas`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id_reg` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `hora` int(11) NOT NULL,
  `tipo_reg` varchar(20) NOT NULL,
  `id_registro_usu` int(11) NOT NULL,
  `id_u_reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id_reg`, `fecha`, `hora`, `tipo_reg`, `id_registro_usu`, `id_u_reg`) VALUES
(4, 20260710, 63730, 'Entrada', 11, 1),
(5, 20260710, 64103, 'Salida', 11, 1),
(6, 20260710, 64118, 'Entrada', 11, 1),
(7, 20260710, 64159, 'Salida', 11, 1),
(8, 20260710, 64206, 'Entrada', 11, 1),
(9, 20260710, 64209, 'Salida', 11, 1),
(10, 20260710, 64443, 'Entrada', 11, 1),
(11, 20260710, 64445, 'Salida', 11, 1),
(12, 20260710, 64447, 'Entrada', 11, 1),
(13, 20260710, 64448, 'Salida', 11, 1),
(14, 20260710, 64607, 'Entrada', 11, 1),
(15, 20260710, 65420, 'Salida', 11, 1),
(16, 20260710, 65435, 'Entrada', 11, 1),
(17, 20260710, 65603, 'Salida', 11, 1),
(18, 20260710, 65605, 'Entrada', 1, 1),
(19, 20260710, 65607, 'Salida', 1, 1),
(20, 20260710, 65609, 'Entrada', 11, 1),
(21, 20260710, 65900, 'Entrada', 11, 1),
(22, 20260710, 70132, 'Salida', 11, 1),
(23, 20260710, 70212, 'Entrada', 6, 1),
(24, 20260710, 70224, 'Salida', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `num_u` int(10) NOT NULL,
  `nombre_ubi` varchar(150) NOT NULL,
  `calle_ubi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`num_u`, `nombre_ubi`, `calle_ubi`) VALUES
(1, 'Santiago', 'Sixsuseben'),
(2, 'Viña del mar', 'Monumental'),
(3, 'Talcahuano', 'Barros Arana'),
(4, 'Moreno', 'Bellas Aguas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_u` int(11) NOT NULL,
  `nombre_u` varchar(30) NOT NULL,
  `categoria_u` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_u`, `nombre_u`, `categoria_u`) VALUES
(1, 'Ambasing', 'Guardia'),
(2, 'Victor', 'Guardia'),
(6, 'Benjamin', 'Guardia'),
(11, 'Isaac', 'Administrador'),
(12, 'Andrea', 'Administrador'),
(13, 'Andy', 'Guardia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`id_stat`),
  ADD KEY `fk_id_ubi` (`ubicacion`) USING BTREE;

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_reg`),
  ADD KEY `id_registro_usu` (`id_registro_usu`),
  ADD KEY `fk_registros_ubicacion` (`id_u_reg`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`num_u`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id_stat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `num_u` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD CONSTRAINT `fk_id_ubi` FOREIGN KEY (`ubicacion`) REFERENCES `ubicacion` (`num_u`);

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `fk_registros_ubicacion` FOREIGN KEY (`id_u_reg`) REFERENCES `ubicacion` (`num_u`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
