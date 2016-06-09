-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2016 a las 15:39:19
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `styleplus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobante`
--

CREATE TABLE `comprobante` (
  `id_comprobante` int(11) NOT NULL,
  `id_tipocomprobante` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `total` float NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_comprobante`
--

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

CREATE TABLE `detalle_factura` (
  `id_factura` varchar(60) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `hor_ent_lunes` time DEFAULT NULL,
  `hor_sal_lunes` time DEFAULT NULL,
  `hor_ent_martes` time DEFAULT NULL,
  `hor_sal_martes` time DEFAULT NULL,
  `hor_ent_miercoles` time DEFAULT NULL,
  `hor_sal_miercoles` time DEFAULT NULL,
  `hor_ent_jueves` time DEFAULT NULL,
  `hor_sal_jueves` time DEFAULT NULL,
  `hor_ent_viernes` time DEFAULT NULL,
  `hor_sal_viernes` time DEFAULT NULL,
  `hor_ent_sabado` time DEFAULT NULL,
  `hor_sal_sabado` time DEFAULT NULL,
  `hor_ent_domingo` time DEFAULT NULL,
  `hor_sal_domingo` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `id_usuario`, `id_empresa`, `hor_ent_lunes`, `hor_sal_lunes`, `hor_ent_martes`, `hor_sal_martes`, `hor_ent_miercoles`, `hor_sal_miercoles`, `hor_ent_jueves`, `hor_sal_jueves`, `hor_ent_viernes`, `hor_sal_viernes`, `hor_ent_sabado`, `hor_sal_sabado`, `hor_ent_domingo`, `hor_sal_domingo`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `razon_social`, `nit`, `telefono`, `direccion`, `correo`, `descripcion`, `estado`, `fecha_creacion`, `autor`) VALUES
(1, 'BARBERIA LA 10', '9000233491', '4833517', 'DIAGONAL 42 F NUMERO 36 C 115 BELLO', 'barber10@msn.com', 'BARBERIA', 1, '2016-06-03', ''),
(2, 'PELUQUERIA SANDRA', '900023363', '6543657', 'CALLE  10 NUMERO  12-14', 'peluqueriaSandra@msn.com', 'PELUQUERIA', 1, '2016-06-03', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` varchar(60) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `creacion` datetime NOT NULL,
  `mediodepago` varchar(60) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `total` float NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

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

CREATE TABLE `pagina` (
  `id_pagina` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `ruta` longtext NOT NULL,
  `seccion` varchar(100) DEFAULT NULL,
  `icono` varchar(100) DEFAULT NULL,
  `nombre_menu` varchar(100) DEFAULT NULL,
  `visible` int(11) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `referencia` varchar(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `valor_compra` double NOT NULL,
  `valor_venta` double NOT NULL,
  `iva` double NOT NULL,
  `descuento` double DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `cant_existente` int(11) DEFAULT NULL,
  `id_tipoproducto` int(11) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `referencia`, `nombre`, `valor_compra`, `valor_venta`, `iva`, `descuento`, `estado`, `cant_existente`, `id_tipoproducto`, `id_proveedor`, `id_empresa`, `fecha_creacion`, `autor`) VALUES
(1, 'AA01', 'POLVO COMPACTO N 5', 13000, 15800, 16, 0, 1, 12, 2, 2, 1, '2016-06-04', 'yohanny Lopez'),
(2, 'AA02', 'TINTE PARA CABELLO', 8000, 15400, 16, 0, 1, 14, 3, 1, 1, '2016-06-04', 'yohanny Lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

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
  `estado` int(11) NOT NULL,
  `banco` varchar(60) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `razon_social`, `nit`, `telefono`, `direccion`, `ciudad`, `nombre_contacto`, `correo`, `numero_cuenta`, `estado`, `banco`, `fecha_creacion`, `autor`) VALUES
(1, 'ESTILO SA', '98506745', '6549865', 'CALLE 24 NUMERO 30-10 ', 'BELLO', 'CAMILA GUZMAN', 'camila.g@msn.com', '77360485', 1, 'BANCO DE BOGOTA', '2016-06-03', ''),
(2, 'BOGGUE COLOMBIA SA', '9000233491', '6543657', 'CLL 20 N 13-14 BELLO', 'MEDELLIN', 'HERNAN CALLE', 'hernan.calle@boggue.com.co', '5344674850', 1, 'BANCO DE BOGOTA', '2016-06-03', 'YOHANNY LOPEZ VALENCIA'),
(3, 'DOVE SA', '8546596656', '675468956', 'CALLE  10 NUMERO  12-14', 'MEDELLIN', 'DAVID ARISMENDI', 'david.a@dove.com', '745986509652', 1, 'BANCOLOMBIA', '2016-06-03', 'YOHANNY LOPEZ VALENCIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

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
(1, '2016-04-21', 'YOHANNY', 'Usuario Publico'),
(2, '2016-04-21', 'YOHANNY', 'Empleado'),
(3, '2016-04-21', 'YOHANNY', 'Cliente Administrador'),
(4, '2016-04-21', 'YOHANNY', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_permisos`
--

CREATE TABLE `rol_permisos` (
  `id_rol` int(11) NOT NULL,
  `id_pagina` int(11) NOT NULL,
  `crear` int(11) DEFAULT NULL,
  `consultar` int(11) DEFAULT NULL,
  `actualizar` int(11) DEFAULT NULL,
  `eleminar` int(11) DEFAULT NULL,
  `deshabilitar` int(11) DEFAULT NULL,
  `visibilidad` int(11) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `duracion` time NOT NULL,
  `valor_venta` float NOT NULL,
  `iva` float NOT NULL,
  `descuento` float NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `codigo`, `nombre`, `descripcion`, `duracion`, `valor_venta`, `iva`, `descuento`, `id_empresa`, `fecha_creacion`, `autor`) VALUES
(1, 'CORT01', 'CORTE CABALLERO BASICO', 'CORTE CON GUIAS BASICAS PARA  HOMBRES', '00:00:00', 10000, 16, 10, 1, '2016-06-05', 'Yohanny Lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servi_emple`
--

CREATE TABLE `servi_emple` (
  `id_servicio` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_comprobante`
--

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
(1, 'Insumos', 'sontodos aquellos productos necesarios para el desarrollo de un servicio', '2016-06-02', 'Yohanny Lopez'),
(2, 'Cosmetico', 'son todos los productos que intervienen en el cuidado personal', '2016-06-02', 'Yohanny Lopez'),
(3, 'Quimico', 'son aquellos productos que ameritan un cuidado especial', '2016-06-02', 'Yohanny Lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `tipo_documento` varchar(10) NOT NULL,
  `numero_documento` int(11) NOT NULL,
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
  `estado` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `tipo_documento`, `numero_documento`, `clave`, `nombre`, `apellido`, `telefono`, `direccion`, `ciudad`, `correo`, `celular`, `fecha_nacimiento`, `sexo`, `estado`, `id_rol`, `fecha_creacion`, `autor`) VALUES
(1, 'CC', 1001142162, '1234', 'Yohanny', 'Lopez Valencia', '4833517', 'diagonal 42 f numero 36 c 115', 'Bello', 'yoha@misena.edu.co', '3104012717', '1993-03-31', 'Hombre', 1, 3, '2016-04-21', 'Autoregistrado'),
(2, 'CC', 2147483647, '1234', 'Damaris', 'Carmona Restrepo', '4833517', 'diagonal 42 f numero 36 c 115', 'Bello', 'durleyey@hotmail.com', '3214363153', '1992-04-12', 'mujer', 1, 1, '2016-04-21', 'Autoregistrado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `id_servicio` (`id_servicio`);

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
  ADD PRIMARY KEY (`id_empresa`);

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
  ADD PRIMARY KEY (`id_rol`,`id_pagina`),
  ADD KEY `id_pagina` (`id_pagina`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `servi_emple`
--
ALTER TABLE `servi_emple`
  ADD PRIMARY KEY (`id_servicio`,`id_empleado`),
  ADD KEY `id_empleado` (`id_empleado`);

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
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
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
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`);

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
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

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
  ADD CONSTRAINT `historia_ibfk_1` FOREIGN KEY (`id_cita`) REFERENCES `citas` (`id_cita`);

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `ofertas_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `ofertas_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_tipoproducto`) REFERENCES `tipo_productos` (`id_tipoproductos`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD CONSTRAINT `rol_permisos_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `rol_permisos_ibfk_2` FOREIGN KEY (`id_pagina`) REFERENCES `pagina` (`id_pagina`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `servi_emple`
--
ALTER TABLE `servi_emple`
  ADD CONSTRAINT `servi_emple_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`),
  ADD CONSTRAINT `servi_emple_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
