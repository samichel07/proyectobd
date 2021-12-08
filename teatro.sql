-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 21:07:20
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `teatro`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerRepresentacionesObra` (IN `representaciones` INT(11))  BEGIN
SELECT *
FROM obra
WHERE representaciones = representaciones;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afinidad`
--

CREATE TABLE `afinidad` (
  `id_afinidad` int(11) NOT NULL,
  `obra` varchar(50) NOT NULL,
  `papel` varchar(50) NOT NULL,
  `artista` varchar(50) NOT NULL,
  `interpretaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `afinidad`
--

INSERT INTO `afinidad` (`id_afinidad`, `obra`, `papel`, `artista`, `interpretaciones`) VALUES
(1, 'Lucas', 'Lucas', 'Odin Dupeyron', 100),
(2, 'La jaula de las locas', 'Albin', 'Mario Iván Martínez', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `nombre_artistico` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `cache` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `papel_afin` varchar(50) NOT NULL,
  `cantidad_interpretaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`nombre_artistico`, `nombre`, `apellidos`, `edad`, `cache`, `descripcion`, `papel_afin`, `cantidad_interpretaciones`) VALUES
('Mario Iván Martínez', 'Mario Iván', 'Martínez Morales', 59, 8000, 'Actor, productor, escritor, diseñador y cantante mexicano', 'Albin', 100),
('Odin Dupeyron', 'Odin', 'Dupeyron Navarrete', 51, 6000, 'Artista multifacético que invita a redescubrir el sentido de la vida', 'Lucas', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `nombre_artistico` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `precio_libreto` int(11) NOT NULL,
  `precio_representacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`nombre_artistico`, `nombre`, `apellidos`, `edad`, `precio_libreto`, `precio_representacion`) VALUES
('Matías Gorlero', 'Matías', 'Gorlero Vilaró', 59, 20000, 4000),
('Odin Dupeyron', 'Odin', 'Dupeyron Navarrete', 51, 15000, 1500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE `funcion` (
  `id_funcion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `teatro` varchar(50) NOT NULL,
  `obra` varchar(50) NOT NULL,
  `id_afinidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `funcion`
--

INSERT INTO `funcion` (`id_funcion`, `fecha`, `hora`, `teatro`, `obra`, `id_afinidad`) VALUES
(1, '2021-11-27', '19:40:00', 'Teatro del Parque Interlomas', 'Lucas', 1),
(2, '2021-11-28', '20:30:00', 'Teatro Hidalgo', 'La jaula de las locas', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `titulo_obra` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `anio_publicacion` year(4) NOT NULL,
  `representaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`titulo_obra`, `autor`, `anio_publicacion`, `representaciones`) VALUES
('La jaula de las locas', 'Matías Gorlero', 2017, 1200),
('Lucas', 'Odin Dupeyron', 2017, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papel`
--

CREATE TABLE `papel` (
  `nombre_papel` varchar(50) NOT NULL,
  `obra` varchar(50) NOT NULL,
  `duracion` time NOT NULL,
  `atrezo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `papel`
--

INSERT INTO `papel` (`nombre_papel`, `obra`, `duracion`, `atrezo`) VALUES
('Albin', 'La jaula de las locas', '00:35:00', 'Vestido, saco, zapatillas, peluca'),
('Lucas', 'Lucas', '00:47:00', 'Tenis, jeans, playera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teatro`
--

CREATE TABLE `teatro` (
  `nombre_teatro` varchar(50) NOT NULL,
  `calle_numero` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `aforo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `teatro`
--

INSERT INTO `teatro` (`nombre_teatro`, `calle_numero`, `localidad`, `provincia`, `telefono`, `categoria`, `aforo`) VALUES
('Teatro del Parque Interlomas', 'Av. Jesús del Monte 41, Hda. de las Palmas', 'Huixquilucan', 'Estado de México', '55 5247 4325', 'Mediano', 700),
('Teatro Hidalgo', 'Av. Hidalgo 23, Centro Histórico', 'Guerrero, Cuauhtémoc', 'Ciudad de México', ' 555326 5445', 'Mediano', 816);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afinidad`
--
ALTER TABLE `afinidad`
  ADD PRIMARY KEY (`id_afinidad`),
  ADD KEY `obra` (`obra`),
  ADD KEY `papel` (`papel`),
  ADD KEY `artista` (`artista`);

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`nombre_artistico`);

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`nombre_artistico`);

--
-- Indices de la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`id_funcion`),
  ADD KEY `teatro` (`teatro`),
  ADD KEY `obra` (`obra`),
  ADD KEY `id_afinidad` (`id_afinidad`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`titulo_obra`),
  ADD KEY `autor` (`autor`);

--
-- Indices de la tabla `papel`
--
ALTER TABLE `papel`
  ADD PRIMARY KEY (`nombre_papel`),
  ADD KEY `obra` (`obra`);

--
-- Indices de la tabla `teatro`
--
ALTER TABLE `teatro`
  ADD PRIMARY KEY (`nombre_teatro`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `afinidad`
--
ALTER TABLE `afinidad`
  ADD CONSTRAINT `afinidad_ibfk_1` FOREIGN KEY (`obra`) REFERENCES `papel` (`obra`),
  ADD CONSTRAINT `afinidad_ibfk_2` FOREIGN KEY (`papel`) REFERENCES `papel` (`nombre_papel`),
  ADD CONSTRAINT `afinidad_ibfk_3` FOREIGN KEY (`artista`) REFERENCES `artista` (`nombre_artistico`);

--
-- Filtros para la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD CONSTRAINT `funcion_ibfk_1` FOREIGN KEY (`teatro`) REFERENCES `teatro` (`nombre_teatro`),
  ADD CONSTRAINT `funcion_ibfk_2` FOREIGN KEY (`obra`) REFERENCES `obra` (`titulo_obra`),
  ADD CONSTRAINT `funcion_ibfk_3` FOREIGN KEY (`id_afinidad`) REFERENCES `afinidad` (`id_afinidad`);

--
-- Filtros para la tabla `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `obra_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `autor` (`nombre_artistico`);

--
-- Filtros para la tabla `papel`
--
ALTER TABLE `papel`
  ADD CONSTRAINT `papel_ibfk_1` FOREIGN KEY (`obra`) REFERENCES `obra` (`titulo_obra`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
