-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2023 a las 23:57:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_correspondencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'cambio de carrera'),
(2, 'asunto academico'),
(3, 'recursos humanos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correspondencia`
--

CREATE TABLE `correspondencia` (
  `id` int(11) NOT NULL,
  `remitente` varchar(50) NOT NULL,
  `destinatario` varchar(50) NOT NULL,
  `asunto` varchar(500) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `fecha_recepcion` date NOT NULL,
  `fecha_limite` date NOT NULL,
  `prioridad` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `acciones_tomadas` varchar(20) NOT NULL,
  `observaciones` varchar(20) NOT NULL,
  `asignado` int(11) NOT NULL,
  `registro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `correspondencia`
--

INSERT INTO `correspondencia` (`id`, `remitente`, `destinatario`, `asunto`, `tipo`, `categoria`, `fecha_recepcion`, `fecha_limite`, `prioridad`, `estado`, `acciones_tomadas`, `observaciones`, `asignado`, `registro`) VALUES
(1, 'Alias sed repellendu', 'Quod fugiat enim as', 'Voluptatem velit ni', 'paquete', '2', '2023-08-23', '2023-08-31', '4', 'Enviado', '', '', 3, 5),
(2, 'Sed eveniet quia in', 'Consequat Voluptate', 'Tempore cillum obca', 'memorando', '1', '2023-08-22', '2023-09-10', '33', 'Enviado', '', '', 1, 5),
(3, 'Quod rerum eiusmod m', 'Quia error voluptate', 'Culpa error soluta e', 'memorando', '3', '2023-08-23', '2023-08-26', '2', 'Enviado', '', '', 4, 0),
(4, 'Iste neque ut non qu', 'Aliqua Tempore cul', 'Labore nulla qui est', 'paquete', '1', '2023-08-23', '2023-08-19', '34', 'Enviado', '', '', 2, 5),
(5, 'Esse ullamco aliquid', 'Dolorem est quas nat', 'Ullamco molestiae ve', 'paquete', '3', '2023-08-23', '2023-09-10', '322', 'Enviado', '', '', 4, 0),
(6, 'Rerum rerum ducimus', 'Quos omnis labore ne', 'Est occaecat est oc', 'memorando', '', '2023-08-23', '0000-00-00', '', 'En proceso', '', '', 0, 5),
(7, 'Dolorem et nostrum c', 'Nemo atque pariatur', 'Nam est nihil volupt', 'paquete', '3', '2023-08-23', '2023-08-25', '34', 'Enviado', '', '', 4, 0),
(8, 'Eaque consequatur D', 'Ab qui aliquip ex es', 'Reiciendis doloremqu', 'memorando', '', '2023-08-23', '0000-00-00', '', 'En proceso', '', '', 0, 0),
(9, 'Delectus deserunt n', 'Ad numquam velit nul', 'Ea occaecat eius sed', 'paquete', '', '2023-08-23', '0000-00-00', '', 'En proceso', '', '', 0, 0),
(10, 'Accusamus est conseq', 'Voluptate anim nihil', 'Veniam voluptas ut ', 'memorando', '2', '2023-08-23', '2023-09-02', '23', 'Enviado', '', '', 3, 0),
(11, 'Quasi culpa optio r', 'Qui quaerat eiusmod ', 'Sit reprehenderit qu', 'memorando', '', '2023-08-24', '0000-00-00', '', 'En proceso', '', '', 0, 0),
(12, 'Vel laborum omnis cu', 'Est atque ullamco d', 'Inventore repellendu', 'memorando', '1', '2023-08-24', '2023-08-24', '343', 'Enviado', '', '', 1, 5),
(13, 'Ipsa excepteur in a', 'Rerum omnis ea tempo', 'Sit adipisci asperio', 'paquete', '', '2023-08-24', '0000-00-00', '', 'En proceso', '', '', 0, 0),
(14, 'Et saepe maiores dol', 'Obcaecati non velit ', 'Corporis eveniet qu', 'memorando', '', '2023-08-24', '0000-00-00', '', 'En proceso', '', '', 0, 0),
(15, 'Consequatur dolor e', 'Dolor quod ducimus ', 'A optio aliquip atq', 'paquete', '', '2023-08-24', '0000-00-00', '', 'En proceso', '', '', 0, 0),
(16, 'Mollit eaque in enim', 'Totam sint doloremqu', 'Error occaecat possi', 'memorando', '', '2023-08-28', '0000-00-00', '', 'En proceso', '', '', 0, 0),
(17, 'Asperiores sed enim ', 'Do sed explicabo Si', 'Voluptatem qui ad r', 'memorando', '', '2023-08-29', '0000-00-00', '', 'En proceso', '', '', 0, 0),
(18, 'Asperiores alias ist', 'Quis quaerat et blan', 'Qui labore aut qui e', 'memorando', '1', '2023-08-29', '2023-08-13', '23', 'Enviado', '', '', 2, 1),
(19, 'Rerum aut eos volupt', 'Elit ipsam animi v', 'Molestias hic aliqui', 'paquete', '', '2023-08-29', '0000-00-00', '', 'En proceso', '', '', 0, 1),
(20, 'd', 'Laborum Aut eligend', 'Quis aut reprehender', 'paquete', '', '2023-08-29', '0000-00-00', '', 'En proceso', '', '', 0, 4),
(21, 'In iste cillum possi', 'Amet sint rerum id', 'Illo facere non tene', 'memorando', '', '2023-08-29', '0000-00-00', '', 'En proceso', '', '', 0, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `idc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `contrasena`, `nombre`, `apellido`, `telefono`, `cargo`, `idc`) VALUES
(1, 'a@usfx.com', '123', 'a', 'a1', 3434, 'au', 1),
(2, 'b@usfx.com', '123', 'b', 'b1', 454545, 'au', 1),
(3, 'c@usfx.com', '123', 'c', 'c1', 5456, 'au', 2),
(4, 'd@usfx.com', '123', 'd', 'd1', 54565, 'au', 3),
(5, 'e@usfx.com', '123', 'secretaria1', 'sdfsd', 434534, 'sec', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `correspondencia`
--
ALTER TABLE `correspondencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `correspondencia`
--
ALTER TABLE `correspondencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
