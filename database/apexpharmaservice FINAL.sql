-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-07-2021 a las 04:17:39
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apexpharmaservice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosvacunacion`
--

DROP TABLE IF EXISTS `datosvacunacion`;
CREATE TABLE IF NOT EXISTS `datosvacunacion` (
  `IDdatosVacunacion` char(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DNI` char(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `centroVacunacion` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fecha1raDosis` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fecha2daDosis` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`IDdatosVacunacion`),
  KEY `DNI` (`DNI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datosvacunacion`
--

INSERT INTO `datosvacunacion` (`IDdatosVacunacion`, `DNI`, `centroVacunacion`, `fecha1raDosis`, `fecha2daDosis`) VALUES
('134184939', '13418493', 'Lima Metropolitana', '2021-06-05', '2021-06-26'),
('932143249', '93214324', 'Loreto', '2021-06-08', '2021-06-29'),
('543123129', '54312312', 'Chiclayo', '2021-06-11', '2021-07-02'),
('734634259', '73463425', 'Ica', '2021-06-14', '2021-07-05'),
('349682349', '34968234', 'Cusco', '2021-06-18', '2021-07-09'),
('654241659', '65424165', 'Amazonas', '2021-06-21', '2021-07-12'),
('742158129', '74215812', 'Moquegua', '2021-06-25', '2021-07-16'),
('843523419', '84352341', 'Tacna', '2021-06-30', '2021-07-21'),
('645723459', '64572345', 'Callao', '2021-07-05', '2021-07-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `DNI` char(8) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `edad` int NOT NULL,
  `numeroCelular` char(9) NOT NULL,
  `email` char(40) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `regionProvincia` char(25) NOT NULL,
  `tipo` char(25) NOT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`DNI`, `nombre`, `apellido`, `edad`, `numeroCelular`, `email`, `direccion`, `regionProvincia`, `tipo`) VALUES
('13418493', 'Antonio', 'Marcos', 56, '987654321', 'marcos123@gmail.com', 'Av. El sol 123', 'Lima Metropolitana', 'Convencional'),
('93214324', 'Lucas', 'Paqueta', 27, '987345234', 'paqueta123@gmail.com', 'Av. Brasil 123', 'Loreto', 'Riesgo'),
('54312312', 'Adriana', 'Quijano', 45, '954812315', 'adriQchau@hotmail.com', 'Jr. Rayo 324', 'Chiclayo', 'Convencional'),
('73463425', 'Merly', 'Vallejos', 38, '945381234', 'mermerlada@gmail.com', 'Calle la vallejo', 'Ica', 'Convencional'),
('34968234', 'Camila', 'Garcia', 68, '978654345', 'camilita@hotmail.com', 'Av. San Luis 675', 'Cusco', 'Riesgo'),
('65424165', 'Pedro', 'Picapiedra', 52, '938423123', 'pedrito@pedramail.com', 'RockaPiedra', 'Amazonas', 'Discapacidad'),
('74215812', 'Shakira', 'Martinez', 26, '953458344', 'bebecitaNamaz@plkza.com', 'Calle Wakawaka eheh', 'Moquegua', 'Discapacidad'),
('84352341', 'Toretto', 'Bicho', 35, '927636425', 'laFamilia@hotmail.com', 'Jr la familia', 'Tacna', 'Riesgo'),
('64572345', 'Cuto', 'Guadalupe', 50, '963453451', 'cuttismo@LaFe.com', 'Av. Chocolate', 'Callao', 'Convencional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `ID` int NOT NULL,
  `regiones` varchar(30) NOT NULL,
  `cantidad` int DEFAULT NULL,
  `activos` int DEFAULT NULL,
  `inactivos` int DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`ID`, `regiones`, `cantidad`, `activos`, `inactivos`) VALUES
(1, 'Amazonas', 571, 457, 114),
(2, 'Ancash', 3267, 2614, 653),
(3, 'Apurimac', 1890, 1512, 378),
(4, 'Arequipa', 6829, 5463, 1366),
(5, 'Ayacucho', 1845, 1476, 369),
(6, 'Cajamarca', 3169, 2535, 634),
(7, 'Callao', 3376, 2701, 675),
(8, 'Cusco', 3792, 3034, 758),
(9, 'Huancavelica', 1078, 863, 215),
(10, 'Huanuco', 2778, 2222, 556),
(11, 'Ica', 3471, 2777, 694),
(12, 'Junin', 3951, 3161, 790),
(13, 'La Libertad', 5012, 4010, 1002),
(14, 'Lambayeque', 4405, 3524, 881),
(15, 'Lima Metropolitana', 21129, 16903, 4226),
(16, 'Lima provincias', 14086, 11269, 2817),
(17, 'Loreto', 1450, 1160, 290),
(18, 'Madre de Dios', 325, 260, 65),
(19, 'Moquegua', 649, 519, 130),
(20, 'Pasco', 877, 702, 175),
(21, 'Piura', 2644, 2115, 529),
(22, 'Puno', 3593, 2874, 719),
(23, 'San Martin', 1024, 819, 205),
(24, 'Tacna', 1138, 910, 228),
(25, 'Tumbes', 627, 502, 125),
(26, 'Ucayali', 996, 797, 199);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sysadmin`
--

DROP TABLE IF EXISTS `sysadmin`;
CREATE TABLE IF NOT EXISTS `sysadmin` (
  `ID` char(5) NOT NULL,
  `usuario` char(20) NOT NULL,
  `contraseña` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `correo` char(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sysadmin`
--

INSERT INTO `sysadmin` (`ID`, `usuario`, `contraseña`, `correo`) VALUES
('11111', 'will', 'utp', 'will@admin.com'),
('22222', 'mer', 'utp', 'mer@admin.com'),
('33333', 'adri', 'utp', 'adri@admin.com'),
('44444', 'diego', 'utp', 'diego@admin.com'),
('55555', 'jack', 'utp', 'jack@admin.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

DROP TABLE IF EXISTS `turno`;
CREATE TABLE IF NOT EXISTS `turno` (
  `IDdatosVacunacion` char(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  KEY `datosvacunacion` (`IDdatosVacunacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

DROP TABLE IF EXISTS `vacunas`;
CREATE TABLE IF NOT EXISTS `vacunas` (
  `lote` char(5) NOT NULL,
  `marca` varchar(25) NOT NULL,
  `cantidad` int DEFAULT NULL,
  `fechaEntrada` date NOT NULL,
  `fechaTermino` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vacunas`
--

INSERT INTO `vacunas` (`lote`, `marca`, `cantidad`, `fechaEntrada`, `fechaTermino`) VALUES
('00001', 'Pfizer', 1000000, '2021-04-09', '2021-04-23'),
('00002', 'Moderna', 250000, '2021-05-02', '2021-05-12'),
('00003', 'Johnson & Johnson', 50000, '2021-05-20', '2021-05-30'),
('00004', 'Pfizer', 350000, '2021-06-09', '2021-06-23'),
('00005', 'Pfizer', 275000, '2021-07-03', '2021-07-21'),
('00006', 'Johnson & Johnson', 1000000, '2021-07-31', '2021-08-22'),
('00007', 'Pfizer', 200000, '2021-08-30', '2021-09-18'),
('00008', 'Pfizer', 150000, '2021-08-31', '2021-09-15'),
('00009', 'Moderna', 3000000, '2021-09-02', '2021-11-04'),
('00010', 'Astrazeneca', 120000, '2021-09-15', '2021-09-28'),
('00011', 'Astrazeneca', 120, '2021-07-13', '2021-07-28'),
('00012', 'Astrazeneca', 300, '2021-07-13', '2021-07-28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
