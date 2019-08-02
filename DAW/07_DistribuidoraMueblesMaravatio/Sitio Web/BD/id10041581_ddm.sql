-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2019 a las 20:31:39
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ddm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idAdministradores` int(11) NOT NULL,
  `nombreAdministrador` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `estatus` int(11) NOT NULL,
  `privilegios_idPrivilegios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdministradores`, `nombreAdministrador`, `email`, `password`, `estatus`, `privilegios_idPrivilegios`) VALUES
(1, 'Alfredo', 'juarezlorenzoalfredo@gmail.com', '12345', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategorias` int(11) NOT NULL,
  `nombreCategoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategorias`, `nombreCategoria`) VALUES
(1, 'Recamaras'),
(2, 'Salas'),
(3, 'Cocina'),
(4, 'Comedores'),
(5, 'Oficina'),
(6, 'Bases de Cama'),
(7, 'Buros'),
(8, 'Cabeceras'),
(9, 'Comodas'),
(10, 'Libreros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimientos`
--

CREATE TABLE `establecimientos` (
  `idEstablecimientos` int(11) NOT NULL,
  `nombreEstablecimiento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `establecimientos`
--

INSERT INTO `establecimientos` (`idEstablecimientos`, `nombreEstablecimiento`) VALUES
(1, 'Casa Morales'),
(2, 'Muebles Vega'),
(3, 'Muebleria El Mono');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatuspromociones`
--

CREATE TABLE `estatuspromociones` (
  `idEstatus` int(11) NOT NULL,
  `nombreEstatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `estatuspromociones`
--

INSERT INTO `estatuspromociones` (`idEstatus`, `nombreEstatus`) VALUES
(1, 'Activa'),
(2, 'Expiro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedidos` int(11) NOT NULL,
  `productos_idProductos` int(11) NOT NULL,
  `usuario_idUsuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedidos`, `productos_idProductos`, `usuario_idUsuarios`) VALUES
(1, 1, 7),
(2, 1, 7),
(12, 2, 7),
(13, 2, 7),
(14, 1, 4),
(15, 2, 4),
(16, 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `idPrivilegios` int(11) NOT NULL,
  `nombrePrivilegios` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`idPrivilegios`, `nombrePrivilegios`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `nombreProducto` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `categoria_idCategorias` int(11) NOT NULL,
  `proveedor_idProveedores` int(11) NOT NULL,
  `promocion_idPromociones` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProductos`, `nombreProducto`, `url`, `precio`, `descripcion`, `categoria_idCategorias`, `proveedor_idProveedores`, `promocion_idPromociones`) VALUES
(1, 'Comedor 4 ', '14287-1.jpg', 3250, 'Lindo comedor para 4 personas, ideal para habitaciones pequeñas', 4, 2, NULL),
(2, 'Comedor 6', '67ca5-comedor-6-personas.jpg', 3456, 'De tronco poderoso', 4, 1, 1),
(5, 'Comedor 4 ', '7d009-2.jpg', 3500, 'Lindo comedor para 4 personas, ideal para habitaciones pequeñas', 4, 2, NULL),
(6, 'Porta microondas', '3ae78-1.jpg', 2345, 'Bonito porta microondas color negro mate', 3, 2, NULL),
(7, 'Alacena', '98768-2.jpg', 35, 'Bonito alacena porta garrafon', 3, 2, 1),
(8, 'Vitrina', '2f045-vitrina-3.jpg', 3500, 'Bonita vitrina, ideal para tu hogar ', 3, 1, NULL),
(9, 'Recamara Uno', '53eb9-1.jpg', 7000, 'Bonita recamara ideal para tu hogar', 1, 1, NULL),
(10, 'Recamara Dos', '1fe27-2.jpg', 6500, 'Bonita recamara ideal para tu hogar', 1, 1, NULL),
(11, 'Recamara Tres', '73420-3.jpg', 5434, 'Bonita recamara ideal para tu hogar', 1, 2, NULL),
(12, 'Sala Uno', '96775-1.jpg', 7000, 'Bonita sala ideal para tu hogar', 2, 1, 1),
(13, 'Sala Dos', 'c74c5-2.jpg', 7987, 'Bonita sala ideal para tu hogar', 2, 1, 1),
(14, 'Sala Tres', 'd4cdf-3.jpg', 5678, 'Bonita sala ideal para tu hogar', 2, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `idPromociones` int(11) NOT NULL,
  `nombrePromocion` varchar(50) NOT NULL,
  `productos_idProductos` int(11) NOT NULL,
  `estatus_idEstatus` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`idPromociones`, `nombrePromocion`, `productos_idProductos`, `estatus_idEstatus`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 'Viernes loco', 1, 1, '2019-06-08', '2019-06-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedores` int(11) NOT NULL,
  `nombreProveedor` varchar(30) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `provincia_idProvincias` int(11) NOT NULL,
  `establecimiento_idEstablecimientos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProveedores`, `nombreProveedor`, `direccion`, `telefono`, `provincia_idProvincias`, `establecimiento_idEstablecimientos`) VALUES
(1, 'David Juarez', 'Emiliano Zapata #775', '4471205422', 1, 2),
(2, 'Juan Manuel Flores', 'Lib. Sur #45', '4471205422', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `idProvincias` int(11) NOT NULL,
  `nombreProvincia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`idProvincias`, `nombreProvincia`) VALUES
(1, 'San Miguel'),
(2, 'Maravatio'),
(3, 'Acambaro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `nombreUsuarios` varchar(30) NOT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `provincia_idProvincias` int(11) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilegios_idPrivilegios` int(11) DEFAULT NULL,
  `pedidos_idPedidos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nombreUsuarios`, `apellidos`, `direccion`, `provincia_idProvincias`, `telefono`, `email`, `password`, `privilegios_idPrivilegios`, `pedidos_idPedidos`) VALUES
(4, 'Alfredo', 'Lorenzo', 'Privada Nicolas Bravo #1', NULL, '4471205422', 'juarezlorenzoalfredo@gmail.com', '12345', 1, 12),
(6, 'Alfredo', 'Lorenzo', 'Privada Nicolas Bravo #1', NULL, '4471205422', 'alfjuarezz@gmail.com', '12345', 2, NULL),
(7, 'Manuel', 'Lopez Juarez', 'Reforma Norte #789', 2, '9997895434', 'Mane@mane.com', '12345', 3, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idAdministradores`),
  ADD KEY `privilegios_idPrivilegios` (`privilegios_idPrivilegios`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategorias`);

--
-- Indices de la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  ADD PRIMARY KEY (`idEstablecimientos`);

--
-- Indices de la tabla `estatuspromociones`
--
ALTER TABLE `estatuspromociones`
  ADD PRIMARY KEY (`idEstatus`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedidos`),
  ADD KEY `productos_idProductos` (`productos_idProductos`),
  ADD KEY `usuario_idusuarios` (`usuario_idUsuarios`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`idPrivilegios`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`),
  ADD KEY `categoria_idCategorias` (`categoria_idCategorias`),
  ADD KEY `proveedor_idProveedores` (`proveedor_idProveedores`),
  ADD KEY `promocion_idPromociones` (`promocion_idPromociones`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`idPromociones`),
  ADD KEY `estatus_idEstatus` (`estatus_idEstatus`),
  ADD KEY `productos_idProductos` (`productos_idProductos`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedores`),
  ADD KEY `provincia_idProvincias` (`provincia_idProvincias`),
  ADD KEY `establecimiento_idEstablecimientos` (`establecimiento_idEstablecimientos`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idProvincias`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `provincia_idProvincias` (`provincia_idProvincias`),
  ADD KEY `privilegios_idPrivilegios` (`privilegios_idPrivilegios`),
  ADD KEY `pedidos_idPedidos` (`pedidos_idPedidos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idAdministradores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  MODIFY `idEstablecimientos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estatuspromociones`
--
ALTER TABLE `estatuspromociones`
  MODIFY `idEstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `idPrivilegios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `idPromociones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `idProvincias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`privilegios_idPrivilegios`) REFERENCES `privilegios` (`idPrivilegios`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`productos_idProductos`) REFERENCES `productos` (`idProductos`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`usuario_idusuarios`) REFERENCES `usuarios` (`idUsuarios`),
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`usuario_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_idCategorias`) REFERENCES `categorias` (`idCategorias`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`proveedor_idProveedores`) REFERENCES `proveedores` (`idProveedores`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`promocion_idPromociones`) REFERENCES `promociones` (`idPromociones`);

--
-- Filtros para la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD CONSTRAINT `promociones_ibfk_1` FOREIGN KEY (`estatus_idEstatus`) REFERENCES `estatuspromociones` (`idEstatus`),
  ADD CONSTRAINT `promociones_ibfk_2` FOREIGN KEY (`productos_idProductos`) REFERENCES `productos` (`idProductos`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`provincia_idProvincias`) REFERENCES `provincias` (`idProvincias`),
  ADD CONSTRAINT `proveedores_ibfk_2` FOREIGN KEY (`establecimiento_idEstablecimientos`) REFERENCES `establecimientos` (`idEstablecimientos`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`provincia_idProvincias`) REFERENCES `provincias` (`idProvincias`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`privilegios_idPrivilegios`) REFERENCES `privilegios` (`idPrivilegios`),
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`pedidos_idPedidos`) REFERENCES `pedidos` (`idPedidos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
