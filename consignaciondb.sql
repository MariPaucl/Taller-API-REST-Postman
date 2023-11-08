-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 16:47:53
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
-- Base de datos: `consignaciondb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consignacion`
--

CREATE TABLE `consignacion` (
  `id_cons` int(11) NOT NULL,
  `fecha_cons` date DEFAULT NULL,
  `hora_cons` time DEFAULT NULL,
  `monto_cons` decimal(10,3) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consignacion`
--

INSERT INTO `consignacion` (`id_cons`, `fecha_cons`, `hora_cons`, `monto_cons`, `id_usuario`) VALUES
(1, '2023-04-02', '14:21:35', 50.000, 2),
(2, '2023-10-31', '09:39:04', 90.000, 4),
(3, '2023-08-08', '21:00:47', 120.000, 5),
(4, '2022-12-19', '11:11:00', 35.000, 1),
(5, '2022-12-15', '23:00:13', 45.000, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nom_usuario` varchar(45) NOT NULL,
  `ape_usuario` varchar(45) NOT NULL,
  `num_doc_usuario` int(11) NOT NULL,
  `tel_usuario` varchar(45) DEFAULT NULL,
  `direccion_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nom_usuario`, `ape_usuario`, `num_doc_usuario`, `tel_usuario`, `direccion_usuario`) VALUES
(1, 'Danna', 'Vasquez', 1042683952, '3159426200', 'Cra 43 bis # 39 sur'),
(2, 'Franco', 'Galindo', 1119568856, '3016749924', 'Calle 76 c # 79-82'),
(3, 'Emma', 'Reyes', 52369401, '3206749713', 'Cra. 18, # 7A-17'),
(4, 'Alejandro', 'Guluma', 1042159743, '3116441759', 'Av Calle 26 # 59-51'),
(5, 'Sofia', 'Alvarado', 1112145985, '3209692229', 'Cra 89 bis # 75b-79');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consignacion`
--
ALTER TABLE `consignacion`
  ADD PRIMARY KEY (`id_cons`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consignacion`
--
ALTER TABLE `consignacion`
  ADD CONSTRAINT `consignacion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
