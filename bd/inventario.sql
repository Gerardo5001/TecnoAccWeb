-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2021 a las 21:31:18
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnoaccbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `nombreProducto` varchar(100) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `modelo` varchar(50) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `precio` double NOT NULL,
  `numeroParte` varchar(20) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `categoria` varchar(50) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `estatus` varchar(10) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechaIngreso` date DEFAULT NULL,
  `fechaSalida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `nombreProducto`, `modelo`, `descripcion`, `precio`, `numeroParte`, `categoria`, `estatus`, `cantidad`, `fechaIngreso`, `fechaSalida`) VALUES
(1, 'Cargador Samsung', 'Tipo C', 'Samsung Fast Adaptive Wall Adapter Cargador para Galaxy S10 Lite S9 Plus Note 9', 500, 'EP-TA20JBE', 'Cargadores', 'Existencia', 1, '2021-10-29', NULL),
(2, 'Funda S20 +', 'Verde', 'SAMSUNG Galaxy S20+ Plus Case, Silicone Back Cover - Black (US Version with Warranty) (EF-PG985TBEGUS)', 380, 'EF-PG985TBEGUS', 'Fundas', 'Existencia', 1, '2021-10-29', NULL),
(3, 'Audífonos Huawei FreeBuds 4i', 'In-ear', 'En la calle, en el colectivo o en la oficina, ten siempre a mano tus audífonos Huawei y ¡escápate de la rutina por un rato!', 1420, 'In-ear', 'Audifonos', 'Existencia', 100, '2021-11-04', NULL),
(4, 'Audífonos Veeela A7s negro', 'A7s negro', 'En la calle, en el colectivo o en la oficina, ten siempre a mano tus audífonos Veeela.', 188.65, 'A7s', 'Audifonos', 'Existencia', 100, '2021-11-04', NULL),
(5, 'Tarjeta de memoria Adata', 'MicroSDXC', 'Adata está comprometida con el desarrollo de un negocio sostenible que sobrepase los límites de la tecnología.', 310, 'AUSDX128GUICL10A1-RA', 'Memorias', 'Oferta', 100, '2021-11-04', NULL),
(6, 'Funda Acrigel Samsung Galaxy iPhone Huawei Xiaomi Oleo', 'OEM', 'Funda con orilla de TPU y parte trasera rígida.', 69, 'OEM', 'Fundas', 'Existencia', 100, '2021-11-04', NULL),
(7, 'Power Bank Pila Bateria Portatil 10000mah Carga Rapida 1hora', 'GAR140', 'Power Bank Pila Batería Portátil 10000mah con lámpara', 188.1, 'GAR140', 'Baterias externas', 'Existencia', 100, '2021-11-04', NULL),
(8, 'Audífonos Intraurales Hyiear Tws Bluetooth 5.0 Estéreo', 'Intraurales', 'Encendido / apagado: mantenga presionado durante 3-5 segundos.', 349.95, 'Intraurales ', 'Audifonos', 'Existencia', 100, '2021-11-04', NULL),
(9, 'Funda Para Xiaomi Redmi Note 8/ Note 8 Pro/note 9/ Note 9pro', 'NIUNU', 'Hay demasiados modelos para tomar fotografías.', 105.88, 'NIUNU', 'Fundas', 'Existencia', 100, '2021-11-04', NULL),
(10, 'Paquete 10 Pzas Combo Cargador Carga Rapida Cable V8 2.0a', 'GAR064', 'Paquete de 10 Piezas Combo Cargador V8 con Cable Micro USB incluido\r\nMarca: 1Hora', 459, 'GAR064', 'Cargadores', 'Oferta', 100, '2021-11-04', NULL),
(11, 'Funda + Protector De Pantalla De Vidrio Templado P/samsung', 'Samsung Galaxy A31', 'For galaxy Note 20', 202.2, 'TuYue', 'Fundas/Micas', 'Existencia', 100, '2021-11-04', NULL),
(12, 'Audífonos in-ear inalámbricos Huawei FreeBuds 4i red', 'FreeBuds', 'Al ser in-ear, mejoran la calidad del audio y son de tamaño pequeño para poder insertarse en tu oreja.', 1299, 'FreeBuds', 'Audifonos', 'Oferta', 100, '2021-11-04', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
