-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2026 a las 21:39:51
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

--
-- Volcado de datos para la tabla `facultades`
--

INSERT INTO `facultades` (`id_fac`, `nombre_fac`, `calle_fac`, `calle_numero`, `id_fac_ubi`) VALUES
(1, 'ewq', 'ewq', 4321, 1),
(2, 'eqweq', 'ewqewq', 3213, 1),
(3, 'ewq', 'dsadsss', 213, 1),
(4, 'ewqewq', 'ewq', 321, 1);

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
(34, 1, 'salida', '19:50:17', 5, '06-07-2026', 1),
(35, 1, 'ingreso', '19:59:24', 5, '06-07-2026', 1),
(36, 1, 'salida', '20:01:28', 5, '06-07-2026', 1),
(37, 1, 'salida', '20:01:35', 1, '06-07-2026', 5),
(38, 1, 'salida', '20:01:53', 5, '06-07-2026', 39),
(39, 1, 'ingreso', '20:02:01', 0, '06-07-2026', 1),
(40, 1, 'ingreso', '20:02:04', 5, '06-07-2026', 39),
(41, 1, 'salida', '20:15:07', 0, '06-07-2026', 1),
(42, 1, 'ingreso', '20:28:43', 5, '06-07-2026', 1),
(43, 1, 'salida', '20:28:50', 1, '06-07-2026', 1),
(44, 1, 'ingreso', '20:29:40', 1, '06-07-2026', 1),
(45, 1, 'salida', '20:31:12', 1, '06-07-2026', 1),
(46, 1, 'ingreso', '20:31:38', 1, '06-07-2026', 1),
(47, 1, 'salida', '20:34:04', 1, '06-07-2026', 1),
(48, 1, 'ingreso', '20:35:59', 1, '06-07-2026', 1),
(49, 1, 'salida', '20:36:26', 1, '06-07-2026', 1),
(50, 1, 'ingreso', '20:41:31', 1, '06-07-2026', 1),
(51, 1, 'salida', '21:59:08', 1, '06-07-2026', 1),
(52, 1, 'ingreso', '22:05:12', 1, '06-07-2026', 1),
(53, 1, 'salida', '22:15:24', 1, '06-07-2026', 1),
(54, 1, 'ingreso', '22:30:19', 1, '06-07-2026', 1),
(55, 1, 'salida', '22:37:35', 1, '06-07-2026', 1),
(56, 1, 'ingreso', '22:37:42', 1, '06-07-2026', 5),
(57, 1, 'ingreso', '22:37:55', 5, '06-07-2026', 1),
(58, 1, 'salida', '22:52:26', 1, '06-07-2026', 1),
(59, 1, 'ingreso', '22:53:02', 1, '06-07-2026', 1),
(60, 1, 'salida', '22:57:13', 1, '06-07-2026', 1),
(61, 1, 'ingreso', '13:08:55', 1, '07-07-2026', 1),
(62, 1, 'salida', '13:14:24', 1, '07-07-2026', 1),
(63, 1, 'ingreso', '13:18:57', 5, '07-07-2026', 1),
(64, 1, 'salida', '13:21:14', 1, '07-07-2026', 1),
(65, 1, 'ingreso', '13:21:23', 1, '07-07-2026', 1),
(66, 1, 'salida', '13:22:31', 1, '07-07-2026', 1),
(67, 1, 'salida', '13:24:19', 1, '07-07-2026', 5),
(68, 1, 'ingreso', '13:24:22', 5, '07-07-2026', 0),
(69, 1, 'ingreso', '13:24:26', 5, '07-07-2026', 1),
(70, 1, 'ingreso', '01:18:54', 1, '08-07-2026', 5),
(71, 1, 'salida', '01:23:12', 5, '08-07-2026', 1),
(72, 1, 'ingreso', '02:30:13', 1, '08-07-2026', 1),
(73, 1, 'salida', '02:30:16', 1, '08-07-2026', 1),
(74, 1, 'ingreso', '02:30:22', 1, '08-07-2026', 1),
(75, 1, 'ingreso', '02:31:01', 1, '08-07-2026', 12),
(76, 1, 'salida', '12:50:59', 12, '09-07-2026', 39),
(77, 1, 'salida', '12:51:06', 0, '09-07-2026', 5),
(78, 1, 'salida', '13:18:18', 5, '09-07-2026', 1),
(79, 1, 'salida', '13:18:22', 5, '09-07-2026', 12),
(80, 1, 'ingreso', '13:18:28', 12, '09-07-2026', 5),
(81, 1, 'ingreso', '15:03:24', 12, '09-07-2026', 1),
(82, 1, 'salida', '15:07:42', 5, '09-07-2026', 1),
(83, 1, 'ingreso', '15:07:45', 5, '09-07-2026', 12),
(84, 1, 'salida', '15:16:37', 12, '09-07-2026', 5),
(85, 1, 'salida', '15:26:15', 5, '09-07-2026', 12);

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
(1, 'inicioewq', 'inicioewq', 0);

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
(5, 'inicio', 'guardia'),
(7, 'no registrado', 'no registrado'),
(12, 'ewqeq', 'administrador');

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
  MODIFY `id_fac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `id_ubi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
