-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2026 a las 01:51:36
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
-- Base de datos: `base_datos_proyecto_front_end`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultades`
--

CREATE TABLE `facultades` (
  `id_fac` int(11) NOT NULL,
  `nombre_fac` varchar(20) DEFAULT NULL,
  `calle_fac` varchar(20) DEFAULT NULL,
  `calle_numero` int(11) DEFAULT NULL,
  `id_fac_ubi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_reg` int(11) NOT NULL,
  `id_reg_ubi` int(11) DEFAULT NULL,
  `tipo_reg` varchar(20) DEFAULT NULL,
  `hora_reg` varchar(40) DEFAULT NULL,
  `id_reg_usu_encargado` int(11) NOT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `id_reg_usu_ingreso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_reg`, `id_reg_ubi`, `tipo_reg`, `hora_reg`, `id_reg_usu_encargado`, `fecha`, `id_reg_usu_ingreso`) VALUES
(1, 1, 'ingreso', '', 5, '', 1),
(2, 1, 'salida', '', 5, '', 1),
(3, 1, 'ingreso', '', 5, '', 1),
(4, 1, 'salida', '', 5, '', 1),
(5, 1, 'ingreso', '12:20:53', 5, '06-07-2026', 1),
(6, 1, 'ingreso', '12:28:49', 5, '06-07-2026', 5),
(7, 1, 'salida', '12:29:50', 5, '06-07-2026', 5),
(8, 1, 'ingreso', '12:29:54', 5, '06-07-2026', 5),
(9, 1, 'salida', '12:30:40', 5, '06-07-2026', 5),
(10, 1, 'ingreso', '12:32:17', 5, '06-07-2026', 5),
(11, 1, 'salida', '12:35:39', 5, '06-07-2026', 5),
(12, 1, 'ingreso', '12:36:04', 5, '06-07-2026', 5),
(13, 1, 'salida', '13:00:40', 5, '06-07-2026', 5),
(14, 1, 'ingreso', '13:03:15', 5, '06-07-2026', 5),
(15, 1, 'salida', '13:05:33', 5, '06-07-2026', 1),
(16, 1, 'ingreso', '13:05:38', 5, '06-07-2026', 1),
(17, 1, 'salida', '13:12:59', 5, '06-07-2026', 1),
(18, 1, 'ingreso', '13:53:31', 5, '06-07-2026', 1),
(19, 1, 'ingreso', '13:55:37', 5, '06-07-2026', 0),
(20, 1, 'salida', '13:55:45', 5, '06-07-2026', 1),
(21, 1, 'ingreso', '13:56:33', 5, '06-07-2026', 1),
(22, 1, 'salida', '15:03:00', 0, '06-07-2026', 1),
(23, 1, 'salida', '15:03:06', 0, '06-07-2026', 0),
(24, 0, 'salida', '15:19:42', 0, '06-07-2026', 5),
(25, 0, 'ingreso', '15:27:52', 0, '06-07-2026', 5),
(26, 0, 'ingreso', '15:27:56', 0, '06-07-2026', 1),
(27, 0, 'ingreso', '15:29:51', 0, '06-07-2026', 39),
(28, 0, 'salida', '15:29:57', 0, '06-07-2026', 1),
(29, 1, 'ingreso', '15:32:38', 0, '06-07-2026', 1),
(30, 1, 'salida', '15:35:21', 5, '06-07-2026', 1),
(31, 1, 'ingreso', '15:41:49', 5, '06-07-2026', 1),
(32, 1, 'salida', '19:48:05', 0, '06-07-2026', 1),
(33, 1, 'ingreso', '19:48:34', 0, '06-07-2026', 1),
(34, 1, 'salida', '19:50:17', 5, '06-07-2026', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE `ubicaciones` (
  `id_ubi` int(20) NOT NULL,
  `nombre_ubi` varchar(20) DEFAULT NULL,
  `calle_fac` varchar(20) DEFAULT NULL,
  `calle_numero` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`id_ubi`, `nombre_ubi`, `calle_fac`, `calle_numero`) VALUES
(1, 'inicio', 'inicio', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(20) NOT NULL,
  `nombre_usu` varchar(20) DEFAULT NULL,
  `tipo_usu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usu`, `tipo_usu`) VALUES
(1, 'admin', 'administrador'),
(5, 'inicio', 'guardia'),
(7, 'no registrado', 'no registrado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `facultades`
--
ALTER TABLE `facultades`
  ADD PRIMARY KEY (`id_fac`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`id_ubi`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `facultades`
--
ALTER TABLE `facultades`
  MODIFY `id_fac` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `id_ubi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
