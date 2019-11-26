-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2019 a las 05:20:02
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bodega`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribuidor`
--

CREATE TABLE `distribuidor` (
  `id_distribuidor` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ruc` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `distribuidor`
--

INSERT INTO `distribuidor` (`id_distribuidor`, `nombre`, `ruc`) VALUES
(1, 'Roxipa', '20602961061'),
(2, 'PACI', '20373209601');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_compra`
--

CREATE TABLE `historial_compra` (
  `id_compra` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `fecha_compra` date NOT NULL,
  `cantidad_compra` int(11) NOT NULL,
  `total_compra` float NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_distribuidor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial_compra`
--

INSERT INTO `historial_compra` (`id_compra`, `precio_compra`, `fecha_compra`, `cantidad_compra`, `total_compra`, `id_producto`, `id_distribuidor`) VALUES
(1, 0, '2019-10-17', 12, 23, 1, 2),
(2, 0, '2019-10-17', 12, 23, 2, 2),
(3, 0, '2019-10-17', 8, 31.8, 3, 2),
(4, 0, '2019-10-17', 8, 31.8, 4, 2),
(5, 0, '2019-10-17', 8, 34.1, 5, 2),
(6, 0, '2019-10-17', 8, 34.1, 6, 2),
(7, 0, '2019-10-17', 4, 36.91, 7, 2),
(8, 0, '2019-10-17', 4, 36.91, 8, 2),
(9, 1, '2019-10-17', 12, 10, 1, 1),
(10, 0, '2019-10-17', 12, 12, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_venta`
--

CREATE TABLE `historial_venta` (
  `id_venta` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `cantidad_venta` int(11) NOT NULL,
  `total_venta` float NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial_venta`
--

INSERT INTO `historial_venta` (`id_venta`, `fecha_venta`, `cantidad_venta`, `total_venta`, `id_producto`) VALUES
(1, '2019-10-25', 1, 1, 9),
(2, '2019-10-25', 1, 1.2, 10),
(3, '2019-10-25', 1, 2.5, 2),
(4, '2019-10-25', 1, 3.5, 3),
(5, '2019-10-26', 1, 5, 5),
(6, '2019-10-26', 1, 5, 6),
(7, '2019-10-26', 2, 2, 9),
(8, '2019-10-26', 1, 2.5, 1),
(9, '2019-10-27', 1, 10, 7),
(10, '2019-10-27', 3, 3, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `precio venta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `stock`, `fecha_vencimiento`, `precio venta`) VALUES
(1, 'Coca Cola 625ml', 10, '2020-04-04', 2.5),
(2, 'Inca Kola 625ml', 10, '2020-04-04', 2.5),
(3, 'Coca Cola 1L', 5, '2020-02-04', 3.5),
(4, 'Inca Kola 1L', 5, '2020-02-04', 3.5),
(5, 'Coca Cola 1.5L', 3, '2020-02-04', 5),
(6, 'Inca Kola 1.5L', 3, '2020-02-04', 5),
(7, 'Coca Cola 3L descartable', 2, '2020-02-04', 10),
(8, 'Inca Kola 3L descartable', 2, '2020-02-04', 10),
(9, 'Papas Lay\'s', 8, '2019-12-10', 1),
(10, 'Piqueo Snax', 8, '2019-12-10', 1.2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  ADD PRIMARY KEY (`id_distribuidor`);

--
-- Indices de la tabla `historial_compra`
--
ALTER TABLE `historial_compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_distribuidor` (`id_distribuidor`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `historial_venta`
--
ALTER TABLE `historial_venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  MODIFY `id_distribuidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historial_compra`
--
ALTER TABLE `historial_compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `historial_venta`
--
ALTER TABLE `historial_venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial_compra`
--
ALTER TABLE `historial_compra`
  ADD CONSTRAINT `historial_compra_ibfk_1` FOREIGN KEY (`id_distribuidor`) REFERENCES `distribuidor` (`id_distribuidor`),
  ADD CONSTRAINT `historial_compra_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `historial_venta`
--
ALTER TABLE `historial_venta`
  ADD CONSTRAINT `historial_venta_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
