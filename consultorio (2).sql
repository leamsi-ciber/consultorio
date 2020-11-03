-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-08-2020 a las 07:26:23
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
-- Base de datos: `consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time(6) NOT NULL,
  `duracion` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_consulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id`, `fecha`, `hora`, `duracion`, `tipo_consulta`) VALUES
(1, '2020-08-07', '08:47:00.000000', '1H', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `cedula` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `estado` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `cedula`, `apellido`, `costo`, `estado`, `nombre`) VALUES
(6, '00199658521', 'Fernandez', 1500, 'Pago', 'Wander'),
(7, '40233296930', 'Collazo', 4500, 'Pago', 'Franchesca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `dosis` int(2) NOT NULL,
  `precio` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`id`, `nombre`, `dosis`, `precio`) VALUES
(1, 'Analgésicos', 2, '150.00'),
(2, 'antiinflamatorios', 3, '300.00'),
(3, 'Omeprazol', 2, '400.00'),
(4, 'Metoclopramida ', 1, '700.00'),
(5, 'Acetaminofen', 3, '250.00'),
(6, 'Hidroclorotiazida', 1, '1500.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `cedula` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Fecha_na` date NOT NULL,
  `sangre` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `sexo` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `cedula`, `nombre`, `apellido`, `Fecha_na`, `sangre`, `sexo`, `telefono`) VALUES
(1, '40236698954', 'Carlos', 'Perez', '2020-08-06', 'A+', 'm', '8098699963'),
(2, '40213083799', 'Mariel', 'Cubilete', '2003-01-17', '0+', 'f', '8096869566');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precioconsulta`
--

CREATE TABLE `precioconsulta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `monto` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `precioconsulta`
--

INSERT INTO `precioconsulta` (`id`, `nombre`, `monto`) VALUES
(1, 'Maxima', '5000.00'),
(2, 'Media', '3500.00'),
(3, 'Baja', '1500.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `Rol` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `Rol`) VALUES
(1, 'Admin'),
(2, 'Asistente'),
(3, 'medico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Tipo_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`, `Tipo_user`) VALUES
(1, 'ismael', 'Vasquez', 'Leamsi', '64a1bec7e6707e6488384e450654b3b6', 3),
(2, 'Katherine', 'German', 'kath', '087c8abfaee44ebbf0c2871976a2ab18', 1),
(3, 'Abel', 'De la cruz', 'Abel', '81dc9bdb52d04dc20036dbd8313ed055', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `comentario` text COLLATE utf8mb4_general_ci NOT NULL,
  `receta` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_p` date NOT NULL,
  `idpaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id`, `fecha`, `motivo`, `comentario`, `receta`, `fecha_p`, `idpaciente`) VALUES
(5, '2020-08-06', 'Visita familiar', 'Prueba', 'Acetaminofen', '2020-08-07', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consulta_tipo` (`tipo_consulta`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `precio` (`costo`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `precioconsulta`
--
ALTER TABLE `precioconsulta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol` (`Tipo_user`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicamento` (`receta`),
  ADD KEY `paciente` (`idpaciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `precioconsulta`
--
ALTER TABLE `precioconsulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `consulta_tipo` FOREIGN KEY (`tipo_consulta`) REFERENCES `precioconsulta` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `rol` FOREIGN KEY (`Tipo_user`) REFERENCES `roles` (`idRol`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `paciente` FOREIGN KEY (`idpaciente`) REFERENCES `paciente` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
