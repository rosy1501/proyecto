-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2022 a las 17:18:38
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alta_categorias`
--

CREATE TABLE `alta_categorias` (
  `id_categoria` int(10) NOT NULL,
  `tNombrecategoria` varchar(50) NOT NULL,
  `tDescripcioncategoria` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alta_categorias`
--

INSERT INTO `alta_categorias` (`id_categoria`, `tNombrecategoria`, `tDescripcioncategoria`) VALUES
(7, 'Pulseras', 'Pulseras de alta calidad ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alta_productos`
--

CREATE TABLE `alta_productos` (
  `id_producto` int(10) NOT NULL,
  `tNombreProducto` varchar(40) NOT NULL,
  `tCantidadproducto` int(10) NOT NULL,
  `tCategoriaproducto` int(10) NOT NULL,
  `tSubcategorias` int(10) NOT NULL,
  `tPreciocompra` float(10,0) NOT NULL,
  `tPrecioventa` float(10,0) NOT NULL,
  `tDescripcionproducto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `tNombre` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tipo_usuario` int(20) NOT NULL,
  `tApellido` varchar(50) NOT NULL,
  `tDomicilio` varchar(100) NOT NULL,
  `tCorreoElectronico` varchar(60) NOT NULL,
  `eTelefono` int(11) NOT NULL,
  `eCodigopostal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `password`, `tNombre`, `usuario`, `tipo_usuario`, `tApellido`, `tDomicilio`, `tCorreoElectronico`, `eTelefono`, `eCodigopostal`) VALUES
(1, '12345', 'rosa', 'rosy123', 1, '', '', '', 0, 0),
(2, '12345', 'rosy', 'ro24', 2, '', '', '', 0, 0),
(3, 'test', 'test', 'test', 2, 'test', 'test', 'test@test.com', 0, 123456),
(4, 'TEST', 'TEST', 'TEST', 0, 'TEST', 'TEST@TEST.COM', '1234', 556655, 2),
(5, 'TEST', 'TEST', 'TEST', 0, 'TEST', 'TEST@TEST.COM', '1234', 556655, 2),
(6, 'TEST', 'TEST', 'TEST', 0, 'TEST', 'TEST@TEST.COM', '4654321', 12234234, 2),
(7, 'TEST', 'TEST', 'TEST', 0, 'TEST', 'TEST@TEST.COM', '4654321', 12234234, 2),
(8, 'TEST', 'TEST', 'TEST', 0, 'TEST TEST TEST', 'TEST@TEST.COM', '44444', 444444, 2),
(9, 'test1', 'testnombre', 'testusuario', 2, 'testapellido', 'testdomicilio', 'testcorreo@test.com', 123456789, 99987),
(10, 'test', 'testnombre1', 'testusuario1', 2, 'testapellido1', 'testdomicilio1', 'testcorreo1@tes.com', 987654321, 77894);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alta_categorias`
--
ALTER TABLE `alta_categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `alta_productos`
--
ALTER TABLE `alta_productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `tCategoriaproducto` (`tCategoriaproducto`,`tSubcategorias`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alta_categorias`
--
ALTER TABLE `alta_categorias`
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `alta_productos`
--
ALTER TABLE `alta_productos`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
