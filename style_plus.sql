-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2016 a las 13:42:54
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `style_plus`
--
CREATE DATABASE IF NOT EXISTS `style_plus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `style_plus`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda` (
  `id_cita` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobante`
--

DROP TABLE IF EXISTS `comprobante`;
CREATE TABLE `comprobante` (
  `id_comprobante` int(11) NOT NULL,
  `id_tipocomprobante` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `total` float NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_comprobante`
--

DROP TABLE IF EXISTS `detalle_comprobante`;
CREATE TABLE `detalle_comprobante` (
  `id_detallecomprobante` int(11) NOT NULL,
  `id_comprobante` int(11) NOT NULL,
  `cuenta` varchar(20) DEFAULT NULL,
  `debito` float DEFAULT NULL,
  `credito` float DEFAULT NULL,
  `impuesto` float DEFAULT NULL,
  `nombre_impuesto` varchar(50) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

DROP TABLE IF EXISTS `detalle_factura`;
CREATE TABLE `detalle_factura` (
  `id_factura` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `iva` float DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `creacion` datetime NOT NULL,
  `mediodepago` varchar(60) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `total` float NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

DROP TABLE IF EXISTS `historia`;
CREATE TABLE `historia` (
  `id_historia` int(11) NOT NULL,
  `id_cita` int(11) NOT NULL,
  `Detalle` text NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

DROP TABLE IF EXISTS `ofertas`;
CREATE TABLE `ofertas` (
  `id_ofertas` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `descuento` float NOT NULL,
  `foto_oferta` blob NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

DROP TABLE IF EXISTS `pagina`;
CREATE TABLE `pagina` (
  `id_pagina` int(11) NOT NULL,
  `nombre_menu` varchar(30) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `ruta` longtext NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripsion` varchar(100) NOT NULL,
  `id_pagina` int(11) NOT NULL,
  `crear` int(11) DEFAULT NULL,
  `guardar` int(11) DEFAULT NULL,
  `modificar` int(11) DEFAULT NULL,
  `eliminar` int(11) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `referencia` varchar(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `valor_compra` int(11) NOT NULL,
  `valor_venta` int(11) NOT NULL,
  `id_tipoproducto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `razon_social` varchar(60) NOT NULL,
  `nit` varchar(30) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `nombre_contacto` varchar(60) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `numero_cuenta` varchar(30) DEFAULT NULL,
  `banco` varchar(60) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `razon_social`, `nit`, `telefono`, `direccion`, `ciudad`, `nombre_contacto`, `correo`, `numero_cuenta`, `banco`, `fecha_creacion`, `autor`) VALUES
(1, 'avon colombia', '1111111', '2345', 'calle 10', 'medellin', 'claudia', 'claudia@avon.com', '1112433', 'bancolombia', '2016-04-12', 'Administrador'),
(2, '', '', '', '', '', '', '', '', '', '2016-04-12', 'Administrador'),
(3, '', '', '', '', '', '', '', '', '', '2016-04-12', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `fecha_creacion`, `autor`, `nombre`) VALUES
(1, '2016-04-10', 'YOHANNY', 'usuario Publico'),
(2, '2016-04-10', 'Yohanny', 'Empleado'),
(5, '2016-04-10', 'YOHANNY', 'Cliente Administrador'),
(6, '2016-04-10', 'YOHANNY', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_permisos`
--

DROP TABLE IF EXISTS `rol_permisos`;
CREATE TABLE `rol_permisos` (
  `id_rol` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `modulo` varchar(50) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_comprobante`
--

DROP TABLE IF EXISTS `tipo_comprobante`;
CREATE TABLE `tipo_comprobante` (
  `id_tipocomprobante` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_productos`
--

DROP TABLE IF EXISTS `tipo_productos`;
CREATE TABLE `tipo_productos` (
  `id_tipoproductos` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_productos`
--

INSERT INTO `tipo_productos` (`id_tipoproductos`, `nombre`, `descripcion`, `fecha_creacion`, `autor`) VALUES
(1, 'servicios', 'Es  un producto intangible no  hay  cantidad', '2016-04-11', 'Yohanny'),
(2, 'Cosmeticos', 'en este tipo cabe producto cuyo uso sea  maquillaje o cosmetico', '2016-04-11', 'YOHANNY'),
(3, 'Cuidado Personal', 'productos para cuidado corporal de todo tipo', '2016-04-11', 'YOHANNY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `tipo_documento` varchar(10) NOT NULL,
  `numero_documento` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` varchar(15) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `tipo_documento`, `numero_documento`, `clave`, `nombre`, `apellido`, `telefono`, `direccion`, `ciudad`, `correo`, `celular`, `fecha_nacimiento`, `sexo`, `estado`, `id_rol`, `fecha_creacion`, `autor`) VALUES
(3, 'cc', '1128487867', '1234', 'camila', 'lopera', '4323232', 'calle 9  34-43', 'medellin', 'camila@msn.com', '3103234325', '1993-01-31', 'mujer', 'Inactivo', 1, '2016-04-10', 'usuarios publicos'),
(4, 'CC', '1001142162', '1234', 'yohanny', 'lopez', '4833517', 'calle 8', 'bello', 'yoha@misena.edu.co', '3214363153', '1993-03-31', 'mujer', NULL, 6, '2016-04-19', 'Autoregistrado'),
(5, 'CC', '1044101320', 'nocreoenelamor', 'Durley Damaris ', 'Carmona Restrepo', '4833517', 'diagonal 42 f numero 36 c 115', 'bello', 'durleyey@hotmail.com', '3127998065', '1992-09-27', 'mujer', 'Activo', 1, '2016-04-17', 'Autoregistrado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  ADD PRIMARY KEY (`id_comprobante`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `detalle_comprobante`
--
ALTER TABLE `detalle_comprobante`
  ADD PRIMARY KEY (`id_detallecomprobante`),
  ADD KEY `id_comprobante` (`id_comprobante`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_factura`,`id_productos`),
  ADD KEY `id_productos` (`id_productos`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id_historia`),
  ADD KEY `id_cita` (`id_cita`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id_ofertas`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id_pagina`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`),
  ADD KEY `id_pagina` (`id_pagina`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD KEY `id_tipoproducto` (`id_tipoproducto`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD PRIMARY KEY (`id_rol`,`id_permiso`),
  ADD KEY `id_permiso` (`id_permiso`);

--
-- Indices de la tabla `tipo_comprobante`
--
ALTER TABLE `tipo_comprobante`
  ADD PRIMARY KEY (`id_tipocomprobante`);

--
-- Indices de la tabla `tipo_productos`
--
ALTER TABLE `tipo_productos`
  ADD PRIMARY KEY (`id_tipoproductos`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comprobante`
--
ALTER TABLE `comprobante`
  MODIFY `id_comprobante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalle_comprobante`
--
ALTER TABLE `detalle_comprobante`
  MODIFY `id_detallecomprobante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `id_historia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id_ofertas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipo_comprobante`
--
ALTER TABLE `tipo_comprobante`
  MODIFY `id_tipocomprobante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_productos`
--
ALTER TABLE `tipo_productos`
  MODIFY `id_tipoproductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`),
  ADD CONSTRAINT `agenda_ibfk_3` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `comprobante`
--
ALTER TABLE `comprobante`
  ADD CONSTRAINT `comprobante_ibfk_1` FOREIGN KEY (`id_comprobante`) REFERENCES `tipo_comprobante` (`id_tipocomprobante`),
  ADD CONSTRAINT `comprobante_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `comprobante_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `comprobante_ibfk_4` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `detalle_comprobante`
--
ALTER TABLE `detalle_comprobante`
  ADD CONSTRAINT `detalle_comprobante_ibfk_1` FOREIGN KEY (`id_comprobante`) REFERENCES `comprobante` (`id_comprobante`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`),
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_usuario`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `historia`
--
ALTER TABLE `historia`
  ADD CONSTRAINT `historia_ibfk_1` FOREIGN KEY (`id_cita`) REFERENCES `agenda` (`id_cita`);

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `ofertas_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `ofertas_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`id_pagina`) REFERENCES `pagina` (`id_pagina`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_tipoproducto`) REFERENCES `tipo_productos` (`id_tipoproductos`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD CONSTRAINT `rol_permisos_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `rol_permisos_ibfk_2` FOREIGN KEY (`id_permiso`) REFERENCES `permisos` (`id_permiso`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
