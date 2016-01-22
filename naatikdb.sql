-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2016 a las 22:15:16
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `naatikdb`
--
CREATE DATABASE IF NOT EXISTS `naatikdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `naatikdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academic_info`
--

CREATE TABLE `academic_info` (
  `id_info` int(5) NOT NULL,
  `ocupation` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `workplace` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `studies` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `level` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `prev_course` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `reg_sep` int(5) NOT NULL,
  `date_init_s` date NOT NULL,
  `date_bajaSt` date DEFAULT NULL,
  `date_egreso` date DEFAULT NULL,
  `id_classes` int(5) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `academic_info`
--

INSERT INTO `academic_info` (`id_info`, `ocupation`, `workplace`, `studies`, `level`, `prev_course`, `reg_sep`, `date_init_s`, `date_bajaSt`, `date_egreso`, `id_classes`, `id_student`) VALUES
(1, 'Estudiante', 'SEQ', 'Preescolar', 'Tercer AÃ±o', 'ReinscripciÃ³n', 1, '2015-08-25', NULL, NULL, 3, 1),
(2, 'Estudiante', '', 'Preescolar', 'Segundo AÃ±o', 'ReinscripciÃ³n', 2, '2015-09-25', NULL, NULL, 3, 2),
(3, 'Trabajador', 'Primaria Moises Saenz', 'Primaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 3, '2015-08-25', NULL, NULL, 3, 3),
(4, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Segundo AÃ±o', 'ReinscripciÃ³n', 4, '2015-08-25', NULL, NULL, 6, 4),
(5, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Quinto AÃ±o', 'ReinscripciÃ³n', 5, '2015-08-25', NULL, NULL, 8, 5),
(6, 'Estudiante', 'Primaria', 'Primaria', 'Sexto AÃ±o', 'ReinscripciÃ³n', 6, '2015-08-25', NULL, NULL, 8, 6),
(7, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Quinto AÃ±o', 'InscripciÃ³n', 7, '2015-09-15', NULL, NULL, 4, 7),
(8, 'Estudiante', 'Primaria Tiburcio May Uh', 'Primaria', 'Sexto AÃ±o', 'ReinscripciÃ³n', 8, '2015-08-25', NULL, NULL, 5, 8),
(9, 'Estudiante', 'Secundaria TÃ©cnica "Jose Ma. Luis Mora"', 'Secundaria', 'Tercer AÃ±o', 'InscripciÃ³n', 9, '2015-09-24', NULL, NULL, 11, 9),
(10, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Segundo AÃ±o', 'ReinscripciÃ³n', 10, '2015-08-24', NULL, NULL, 14, 10),
(11, 'Estudiante', 'Secundaria', 'Secundaria', 'Segundo AÃ±o', 'ReinscripciÃ³n', 11, '2015-08-29', NULL, NULL, 11, 11),
(12, 'Estudiante', 'Primaria', 'Primaria', 'Sexto AÃ±o', 'ReinscripciÃ³n', 12, '2015-08-24', NULL, NULL, 10, 12),
(13, 'Estudiante', 'Bachiller Rafael Ramirez Cataneda', 'Bachillerato', 'Primer AÃ±o', 'ReinscripciÃ³n', 13, '2015-09-24', NULL, NULL, 12, 13),
(14, 'Estudiante', 'Primaria Benito Juarez', 'Primaria', 'Cuarto AÃ±o', 'ReinscripciÃ³n.', 14, '2015-08-25', NULL, NULL, 5, 14),
(15, 'Estudiante', 'Instituto Kambal', 'Primaria', 'No Especificado', 'Instituto Kambal', 15, '2015-09-01', NULL, NULL, 5, 15),
(16, 'Estudiante', 'Secundaria', 'Secundaria', 'Tercer AÃ±o', 'ReinscripciÃ³n', 16, '2015-08-24', NULL, NULL, 14, 16),
(17, 'Estudiante', 'Primaria', 'Primaria', 'Primer AÃ±o', 'InscripciÃ³n', 17, '2015-08-25', NULL, NULL, 2, 17),
(18, 'Estudiante', 'Secundaria TÃ©cnica Jose MarÃ­a Luis Mora', 'Secundaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 18, '2015-08-24', NULL, NULL, 15, 18),
(19, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Segundo AÃ±o', 'ReinscripciÃ³n', 19, '2015-08-25', NULL, NULL, 6, 19),
(20, 'Estudiante', 'Bachiller', 'Bachillerato', 'Segundo AÃ±o', 'Bachiller', 20, '2015-08-24', NULL, NULL, 9, 20),
(21, 'Estudiante', 'Moises Saenz', 'Primaria', 'Sexto AÃ±o', 'InscripciÃ³n', 21, '2015-09-15', NULL, NULL, 4, 21),
(22, 'Trabajador', 'Palacio Municipal', 'Licenciatura', 'No Especificado', 'InscripciÃ³n', 22, '2015-09-15', NULL, NULL, 17, 22),
(23, 'Estudiante', 'Preescolar Guerra de Castas', 'Preescolar', 'Segundo AÃ±o', 'InscripciÃ³n', 23, '2015-09-15', NULL, NULL, 1, 23),
(24, 'Estudiante', 'Preescolar Leona Vicario', 'Preescolar', 'Primer AÃ±o', 'InscripciÃ³n', 24, '2015-09-15', NULL, NULL, 1, 24),
(25, 'Estudiante', 'Preescolar "Los Aruxes"', 'Preescolar', 'Segundo AÃ±o', 'InscripciÃ³n', 25, '2015-09-15', NULL, NULL, 1, 25),
(26, 'Estudiante', 'Preescolar', 'Preescolar', 'Segundo AÃ±o', 'InscripciÃ³n', 26, '2015-09-15', NULL, NULL, 1, 26),
(27, 'Estudiante', 'Preescolar Guerra de Castas', 'Preescolar', 'Tercer AÃ±o', 'InscripciÃ³n', 27, '2015-08-25', NULL, NULL, 3, 27),
(28, 'Estudiante', 'Preescolar Leona Vicario', 'Preescolar', 'Segundo AÃ±o', 'ReinscripciÃ³n', 28, '2015-08-26', NULL, NULL, 3, 28),
(29, 'Estudiante', 'Preescolar Leona Vicario', 'Preescolar', 'Segundo AÃ±o', 'ReinscripciÃ³n', 29, '2015-09-01', NULL, NULL, 3, 29),
(30, 'Estudiante', 'Primaria Tiburcio May', 'Primaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 30, '2015-08-25', NULL, NULL, 2, 30),
(31, 'Estudiante', 'Primaria Benito JuÃ¡rez', 'Primaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 31, '2015-09-01', NULL, NULL, 2, 31),
(32, 'Estudiante', 'Primaria Benito JuÃ¡rez', 'Primaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 32, '2015-09-01', NULL, NULL, 2, 32),
(33, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 33, '2015-09-01', NULL, NULL, 1, 33),
(34, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Primer AÃ±o', 'InscripciÃ³n', 34, '2015-08-25', NULL, NULL, 2, 34),
(35, 'Estudiante', 'Primaria Tiburcio May Uh', 'Primaria', 'No Especificado', 'InscripciÃ³n', 35, '2015-08-25', NULL, NULL, 2, 35),
(36, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Quinto AÃ±o', 'InscripciÃ³n', 36, '2015-09-15', NULL, NULL, 4, 36),
(37, 'Estudiante', 'Primaria Benito JuÃ¡rez', 'Primaria', 'Sexto AÃ±o', 'InscripciÃ³n', 37, '2015-09-15', NULL, NULL, 4, 37),
(38, 'Estudiante', 'Primaria Benito JuÃ¡rez', 'Primaria', 'Segundo AÃ±o', 'InscripciÃ³n', 38, '2015-09-15', NULL, NULL, 4, 38),
(39, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Segundo AÃ±o', 'InscripciÃ³n', 39, '2015-09-15', NULL, NULL, 4, 39),
(40, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Quinto AÃ±o', 'InscripciÃ³n', 40, '2015-09-15', NULL, NULL, 4, 40),
(41, 'Estudiante', 'Primaria', 'Primaria', 'Segundo AÃ±o', 'InscripciÃ³n', 41, '2015-09-15', NULL, NULL, 4, 41),
(42, 'Estudiante', 'Primaria', 'Primaria', 'Primer AÃ±o', 'InscripciÃ³n', 42, '2015-09-15', NULL, NULL, 4, 42),
(43, 'Estudiante', 'Primaria', 'Primaria', 'Segundo AÃ±o', 'InscripciÃ³n', 43, '2015-09-15', NULL, NULL, 4, 43),
(44, 'Estudiante', 'Primaria Benito JuÃ¡rez', 'Primaria', 'Segundo AÃ±o', 'InscripciÃ³n', 44, '2015-09-15', NULL, NULL, 4, 44),
(45, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Quinto AÃ±o', 'InscripciÃ³n', 45, '2015-09-15', NULL, NULL, 4, 45),
(46, 'Estudiante', 'Primaria', 'Primaria', 'Segundo AÃ±o', 'InscripciÃ³n', 46, '2015-09-15', NULL, NULL, 4, 46),
(47, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Tercer AÃ±o', 'ReinscripciÃ³n', 47, '2015-08-25', NULL, NULL, 6, 47),
(48, 'Estudiante', 'Primaria Tiburcio May Uh', 'Primaria', 'Quinto AÃ±o', 'ReinscripciÃ³n', 48, '2015-09-01', NULL, NULL, 6, 48),
(49, 'Estudiante', 'Primaria Benito JuÃ¡rez', 'Primaria', 'Tercer AÃ±o', 'ReinscripciÃ³n', 49, '2015-09-01', NULL, NULL, 6, 49),
(50, 'Estudiante', 'Primaria Benito JuÃ¡rez', 'Primaria', 'Cuarto AÃ±o', 'ReinscripciÃ³n', 50, '2015-08-25', NULL, NULL, 6, 50),
(51, 'Estudiante', 'Primaria', 'Primaria', 'Tercer AÃ±o', 'InscripciÃ³n', 51, '2015-08-25', NULL, NULL, 6, 51),
(52, 'Estudiante', 'Primaria', 'Primaria', 'Quinto AÃ±o', 'ReinscripciÃ³n', 52, '2015-08-25', NULL, NULL, 6, 52),
(53, 'Estudiante', 'Primaria Felipe Carrillo Puerto', 'Primaria', 'Tercer AÃ±o', 'ReinscripciÃ³n', 53, '2015-08-25', NULL, NULL, 6, 53),
(54, 'Estudiante', 'Primaria Benito JuÃ¡rez', 'Primaria', 'Quinto AÃ±o', 'InscripciÃ³n', 54, '2015-08-25', NULL, NULL, 5, 54),
(55, 'Estudiante', 'Primaria MoisÃ©s Saenz', 'Primaria', 'Segundo AÃ±o', 'ReinscripciÃ³n', 55, '2015-09-03', NULL, NULL, 5, 55),
(56, 'Estudiante', 'Instituto Kambal', 'Primaria', 'Tercer AÃ±o', 'InscripciÃ³n', 56, '2015-09-01', NULL, NULL, 5, 56),
(57, 'Estudiante', 'Primaria Benito JuÃ¡rez', 'Primaria', 'Sexto AÃ±o', 'InscripciÃ³n', 57, '2015-08-25', NULL, NULL, 5, 57),
(58, 'Estudiante', 'Primaria Felipe Carrillo Puerto', 'Primaria', 'Cuarto AÃ±o', 'ReinscripciÃ³n', 58, '2015-08-25', NULL, NULL, 8, 58),
(59, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Cuarto AÃ±o', 'InscripciÃ³n', 59, '2015-08-25', NULL, NULL, 5, 59),
(72, 'Estudiante', 'Primaria Benito JuÃ¡rez', 'Primaria', 'Primer AÃ±o', 'InscripciÃ³n', 65, '2015-08-24', NULL, NULL, 5, 72),
(73, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Tercer AÃ±o', 'InscripciÃ³n', 66, '2015-08-25', NULL, NULL, 5, 73),
(74, 'Estudiante', 'Primaria Tiburcio May ', 'Primaria', 'Quinto AÃ±o', 'InscripciÃ³n', 67, '2015-08-25', NULL, NULL, 6, 74),
(75, 'Estudiante', 'Primaria Tiburcio May', 'Primaria', 'Sexto AÃ±o', 'InscripciÃ³n', 68, '2015-08-25', NULL, NULL, 7, 75),
(76, 'Estudiante', 'Colegio Kambal', 'Primaria', 'Tercer AÃ±o', 'ReinscripciÃ³n, Kambal', 69, '2015-08-25', NULL, NULL, 7, 76),
(78, 'Estudiante', 'Primaria Tiburcio May', 'Primaria', 'Sexto AÃ±o', 'ReinscripciÃ³n', 71, '2015-08-25', NULL, NULL, 8, 78),
(79, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Sexto AÃ±o', 'ReinscripciÃ³n', 72, '2015-08-25', NULL, NULL, 8, 79),
(80, 'Estudiante', 'Primaria Moises Saenz', 'Primaria', 'Sexto AÃ±o', 'ReinscripciÃ³n', 73, '2015-08-25', NULL, NULL, 8, 80),
(81, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Segundo AÃ±o', 'InscripciÃ³n', 74, '2015-10-05', NULL, NULL, 9, 81),
(82, 'Estudiante', 'Secundaria JosÃ© MarÃ­a Luis Mora', 'Secundaria', 'Primer AÃ±o', 'InscripciÃ³n', 75, '2015-10-05', NULL, NULL, 9, 82),
(85, 'Estudiante', 'Secundaria Jose Maria Luis Mora', 'Secundaria', 'Tercer AÃ±o', 'InscripciÃ³n', 76, '2015-09-21', NULL, NULL, 9, 83),
(86, 'Trabajador', 'Hospital Genera F.C.P.', 'Bachillerato', 'Concluido', 'InscripciÃ³n', 77, '2015-09-14', NULL, NULL, 9, 84),
(87, 'Estudiante', 'Secundaria', 'Secundaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 78, '2015-08-24', NULL, NULL, 10, 85),
(88, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Segundo AÃ±o', 'Curso de Verano Naatik', 79, '2015-08-26', NULL, NULL, 10, 86),
(89, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Segundo AÃ±o', 'ReinscripciÃ³n', 80, '2015-08-24', NULL, NULL, 10, 87),
(90, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Segundo AÃ±o', 'InscripciÃ³n', 81, '2015-08-24', NULL, NULL, 10, 88),
(91, 'Estudiante', 'Secundaria', 'Secundaria', 'Tercer AÃ±o', 'InscripciÃ³n', 82, '2015-08-25', NULL, NULL, 10, 89),
(92, 'Estudiante', 'No Especificado', '', 'No Especificado', 'ReinscripciÃ³n', 83, '2015-08-24', NULL, NULL, 10, 90),
(93, 'Estudiante', 'Bachiller', 'Bachillerato', 'Segundo AÃ±o', 'InscripciÃ³n', 84, '2015-08-31', NULL, NULL, 10, 91),
(95, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 85, '2015-08-31', NULL, NULL, 11, 94),
(96, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 86, '2015-08-24', NULL, NULL, 11, 95),
(97, 'Estudiante', 'Secundaria', 'Secundaria', 'No Especificado', 'ReinscripciÃ³n', 87, '2015-08-31', NULL, NULL, 11, 96),
(98, 'Estudiante', 'Secundaria Tecnica', 'Secundaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 88, '2015-08-27', NULL, NULL, 12, 97),
(99, 'Estudiante', 'CEB ', '', 'No Especificado', 'InscripciÃ³n', 89, '2015-08-24', NULL, NULL, 11, 98),
(100, 'Estudiante', 'Bachiller CEB', 'Bachillerato', 'Tercer AÃ±o', 'InscripciÃ³n', 90, '2015-08-24', NULL, NULL, 13, 99),
(101, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 91, '2015-08-24', NULL, NULL, 13, 100),
(102, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 92, '2015-08-24', NULL, NULL, 13, 101),
(103, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Segundo AÃ±o', 'ReinscripciÃ³n', 93, '2015-08-24', NULL, NULL, 13, 102),
(104, 'Estudiante', 'CONALEP', 'Bachillerato', 'Segundo AÃ±o', 'ReinscripciÃ³n', 94, '2015-08-24', NULL, NULL, 13, 103),
(105, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Tercer AÃ±o', 'ReinscripciÃ³n', 95, '2015-08-24', NULL, NULL, 13, 104),
(106, 'Estudiante', 'Secundaria Tecnica #26', 'Secundaria', 'Tercer AÃ±o', 'InscripciÃ³n', 96, '2015-08-24', NULL, NULL, 10, 105),
(107, 'Estudiante', 'Bachiller', 'Bachillerato', 'Tercer AÃ±o', 'ReinscripciÃ³n', 97, '2015-08-24', NULL, NULL, 13, 106),
(108, 'Estudiante', 'CBTIS No. 72', 'Bachillerato', 'Primer AÃ±o', 'ReinscripciÃ³n', 98, '2015-08-24', NULL, NULL, 13, 107),
(109, 'Estudiante', 'CBTIS #72', 'Bachillerato', 'Segundo AÃ±o', 'InscripciÃ³n', 99, '2015-08-24', NULL, NULL, 14, 108),
(110, 'Estudiante', 'Bachiller', 'Bachillerato', 'Segundo AÃ±o', 'ReinscripciÃ³n', 100, '2015-08-24', NULL, NULL, 14, 109),
(111, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'Tercer AÃ±o', 'ReinscripciÃ³n', 101, '2015-08-24', NULL, NULL, 14, 110),
(112, 'Estudiante', 'CBTIS #72', 'Bachillerato', 'Tercer AÃ±o', 'InscripciÃ³n', 102, '2015-08-24', NULL, NULL, 14, 111),
(113, 'Estudiante', 'Secundaria', 'Secundaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 103, '2015-08-24', NULL, NULL, 14, 112),
(114, 'Estudiante', 'CBTIS #72', 'Bachillerato', 'Primer AÃ±o', 'ReinscripciÃ³n', 104, '2015-08-24', NULL, NULL, 15, 113),
(115, 'Estudiante', 'Secundaria Leona Vicario', 'Secundaria', 'No Especificado', 'ReinscripciÃ³n', 105, '2015-08-31', NULL, NULL, 15, 114),
(116, 'Estudiante', 'Secundaria Jose Maria Luis Mora', 'Secundaria', 'Primer AÃ±o', 'ReinscripciÃ³n', 106, '2015-08-31', NULL, NULL, 15, 115),
(117, 'Estudiante', 'CBTIS #72', 'Bachillerato', 'Primer AÃ±o', 'ReinscripciÃ³n', 107, '2015-08-24', NULL, NULL, 16, 116),
(118, 'Estudiante', 'No especificado', '', 'No Especificado', 'ReinscripciÃ³n', 108, '2015-08-24', NULL, NULL, 16, 117),
(119, 'Trabajador', 'CompaÃ±ia propia', 'Licenciatura', 'Concluido', 'No especificado', 109, '2015-08-24', NULL, NULL, 16, 118),
(120, 'Trabajador', 'UYOOLCHE A.C', 'Licenciatura', 'Concluido', 'Tecnologico, Canada', 110, '2015-08-31', NULL, NULL, 16, 119),
(121, 'Estudiante', 'Secundaria', 'Secundaria', 'Segundo AÃ±o', 'ReinscripciÃ³n', 111, '2015-08-24', NULL, NULL, 16, 120),
(145, 'Estudiante', 'Instituto TecnolÃ³gico', 'Licenciatura', 'Concluido', 'En el Instituto TecnolÃ³gico (InglÃ©s BÃ¡sico)', 143, '2015-11-02', '2015-12-09', '0000-00-00', 17, 146);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classes`
--

CREATE TABLE `classes` (
  `id_class` int(5) NOT NULL,
  `id_course` int(5) NOT NULL,
  `id_group` int(5) NOT NULL,
  `id_schedule` int(5) NOT NULL,
  `normal_cost` double(10,2) NOT NULL,
  `promo_cost` double(10,2) NOT NULL,
  `discount_cost` double(10,2) NOT NULL,
  `inscription_cost` int(5) DEFAULT NULL COMMENT 'Costo de inscripcion a clase',
  `teacher` int(5) NOT NULL COMMENT 'ID del maestro',
  `status_class` varchar(10) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Campo para ver el estado de la clase. Puede ser activo o finalizado.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `classes`
--

INSERT INTO `classes` (`id_class`, `id_course`, `id_group`, `id_schedule`, `normal_cost`, `promo_cost`, `discount_cost`, `inscription_cost`, `teacher`, `status_class`) VALUES
(1, 1, 1, 1, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(2, 1, 15, 2, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(3, 1, 3, 3, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(4, 2, 1, 4, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(5, 2, 2, 5, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(6, 2, 3, 6, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(7, 2, 4, 7, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(8, 2, 8, 8, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(9, 3, 1, 9, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(10, 3, 2, 10, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(11, 3, 3, 11, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(12, 3, 3, 12, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(13, 3, 5, 13, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(14, 3, 6, 14, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(15, 3, 8, 15, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(16, 3, 12, 16, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(17, 4, 1, 17, 200.00, 150.00, 0.85, 300, 1, 'activo'),
(18, 4, 2, 18, 200.00, 150.00, 0.85, 300, 1, 'finalizado'),
(19, 4, 6, 19, 200.00, 150.00, 0.85, 300, 1, 'finalizado'),
(20, 4, 8, 20, 200.00, 150.00, 0.85, 300, 1, 'finalizado'),
(22, 4, 14, 22, 200.00, 150.00, 0.85, 300, 1, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `croquis`
--

CREATE TABLE `croquis` (
  `id_map` int(5) NOT NULL,
  `lat` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `long` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idtutor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `croquis`
--

INSERT INTO `croquis` (`id_map`, `lat`, `long`, `idtutor`) VALUES
(1, '19.572445305865486', '-88.04907325055541', 1),
(2, '19.57218651751016', '-88.04937365796508', 2),
(3, '19.577851459924762', '-88.04832223203124', 3),
(4, '19.570556950299054', '-88.0496311500305', 4),
(5, '19.576375601569953', '-88.03862336423339', 5),
(6, '19.570423510642147', '-88.03943875577392', 6),
(7, '19.56796093048906', '-88.04714206006469', 7),
(8, '19.572797094801135', '-88.04780724790038', 8),
(9, '19.58593305854544', '-88.03980890061797', 9),
(10, '19.57275564849026', '-88.05326286103667', 10),
(12, '19.57594092908804', '-88.05496187280954', 11),
(13, '19.57186707538307', '-88.05877848859967', 12),
(14, '19.57159082917337', '-88.04830956482262', 13),
(15, '19.567365227147306', '-88.04377495520681', 14),
(16, '19.572857749035336', '-88.03666317235769', 15),
(17, '19.58316686597918', '-88.0444479858121', 16),
(18, '19.58086378606547', '-88.0404683887595', 17),
(19, '19.57059334316364', '-88.05263488885106', 18),
(20, '19.570554378392583', '-88.04131273978686', 19),
(21, '19.572904658442752', '-88.04062895780918', 20),
(22, '19.571179665593796', '-88.04087608452977', 21),
(23, '19.58104331494817', '-88.04318198315707', 22),
(24, '19.58268166987674', '-88.04427632443515', 23),
(25, '19.575247500520405', '-88.05679830824248', 24),
(26, '19.57669907907741', '-88.04911583062352', 25),
(27, '19.574438799782822', '-88.05649790083281', 26),
(28, '19.58375475721174', '-88.04027526971043', 27),
(29, '19.574459017350716', '-88.057613699783', 28),
(30, '19.584626886656178', '-88.0507043704373', 29),
(31, '19.57394620039321', '-88.04401819803685', 30),
(32, '19.573969722412613', '-88.03454607125462', 31),
(33, '19.592094230478462', '-88.04614459164702', 32),
(34, '19.58130953158856', '-88.05484813627595', 33),
(35, '19.571167948151032', '-88.05385449027375', 34),
(36, '19.575076633744526', '-88.04141780693175', 35),
(38, '19.575393450472294', '-88.05351116751984', 37),
(39, '19.585162617468338', '-88.04731774627987', 38),
(40, '19.57789189450819', '-88.04557564999999', 0),
(41, '19.57667886179111', '-88.04218500252904', 40),
(42, '19.56577000205971', '-88.04269447555856', 41),
(43, '19.572824117967638', '-88.04791980632514', 42),
(44, '19.57789189450819', '-88.04557564999999', 43),
(45, '19.575128596874762', '-88.03682390904542', 44),
(46, '19.576739513644462', '-88.0428072750205', 45),
(47, '19.59053856828933', '-88.05331547729156', 46),
(48, '19.56823939429896', '-88.03905616381502', 47),
(49, '19.574758207975492', '-88.04235666390599', 48),
(50, '19.58456371073894', '-88.05071342289273', 49),
(51, '19.580104041077178', '-88.04020288713184', 50),
(52, '19.58968858550246', '-88.03830533288681', 51),
(53, '19.57612288540944', '-88.04613673459829', 52),
(54, '19.570868036679748', '-88.04526555095732', 53),
(55, '19.58518283368578', '-88.04728539213363', 54),
(56, '19.574655511880163', '-88.05227014293627', 55),
(61, '19.57789189450819', '-88.04557564999999', 60),
(62, '19.577891894508', '-88.04557565', 61),
(63, '19.58078130440426', '-88.03958061464039', 62),
(64, '19.57309672706332', '-88.04077195307728', 63),
(65, '19.572542764895022', '-88.0565080331798', 64),
(66, '19.570220780115303', '-88.03924928286409', 65),
(67, '19.57959012497002', '-88.04823640134276', 66),
(68, '19.577588637185322', '-88.04291456338109', 67),
(69, '19.585809535309192', '-88.0470279000682', 68),
(70, '19.58881160441912', '-88.05041117146436', 69),
(71, '19.589395458238393', '-88.04497866891586', 70),
(73, '19.589911885072066', '-88.05182785711668', 72),
(74, '19.58347455397404', '-88.05106915086333', 73),
(75, '19.588031820784988', '-88.05530399999998', 74),
(76, '19.575627559380717', '-88.04598301049413', 75),
(77, '19.584619305547655', '-88.05073735322628', 76),
(78, '19.5835222684436', '-88.03206050168814', 77),
(79, '19.58353520326832', '-88.04701365083281', 78),
(80, '19.58472796807729', '-88.0523780688626', 79),
(81, '19.58031631794852', '-88.03840044267383', 80),
(82, '19.578060679356128', '-88.05203069424105', 81),
(83, '19.5740793109039', '-88.05067875480012', 82),
(84, '19.57137012781942', '-88.051558519357', 83),
(85, '19.57237252188407', '-88.04059713479222', 84),
(86, '19.57990042628566', '-88.05441249584628', 85),
(87, '19.57993478965081', '-88.05647187855834', 86),
(88, '19.57789189450819', '-88.04557564999999', 87),
(89, '19.578963399145234', '-88.04542511101903', 88),
(90, '19.583636285374002', '-88.04772175401274', 89),
(103, '19.577891894508', '-88.04557565', 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluations`
--

CREATE TABLE `evaluations` (
  `id_eval` int(5) NOT NULL COMMENT 'Identificador de registro',
  `reading_achiev` smallint(6) NOT NULL,
  `writing_achiev` smallint(6) NOT NULL,
  `speaking_achiev` smallint(2) NOT NULL,
  `listenin_achiev` smallint(2) NOT NULL,
  `reading_effort` smallint(2) NOT NULL,
  `writing_effort` smallint(2) NOT NULL,
  `speaking_effort` smallint(2) NOT NULL,
  `listening_effort` smallint(3) NOT NULL,
  `participation_effort` smallint(2) NOT NULL,
  `teamwork_effort` smallint(2) NOT NULL,
  `timing_effort` smallint(2) NOT NULL,
  `ciclo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `period` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `subjects` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `annotations` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `name_e` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `date_eval` date NOT NULL,
  `idinfo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacena las calificaciones de los alumnos por periodos';

--
-- Volcado de datos para la tabla `evaluations`
--

INSERT INTO `evaluations` (`id_eval`, `reading_achiev`, `writing_achiev`, `speaking_achiev`, `listenin_achiev`, `reading_effort`, `writing_effort`, `speaking_effort`, `listening_effort`, `participation_effort`, `teamwork_effort`, `timing_effort`, `ciclo`, `period`, `subjects`, `annotations`, `name_e`, `date_eval`, `idinfo`) VALUES
(1, 1, 2, 2, 1, 2, 1, 1, 2, 1, 1, 2, '2015 B', 'Octubre-Noviembre', 'Condicionales', 'Buen Alumno', 'Su tutor', '2015-11-02', 134),
(2, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, '2015 B', 'Noviembre-Diciembre', 'Verbo to be', 'Buen Estudiante', 'Su padre', '2015-11-27', 134),
(3, 0, 0, 1, 1, 0, 0, 1, 1, 1, 1, 0, '2015 B', 'Octubre-Noviembre', 'Verb to BE', 'Nada por ahora', 'ALguien', '2015-11-11', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups_nc`
--

CREATE TABLE `groups_nc` (
  `id_group` int(5) NOT NULL,
  `group` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `groups_nc`
--

INSERT INTO `groups_nc` (`id_group`, `group`) VALUES
(1, 'Inicial'),
(2, '1A'),
(3, '1B'),
(4, '1C'),
(5, '2A'),
(6, '2B'),
(7, '2C'),
(8, '3A'),
(9, '3B'),
(10, '3C'),
(11, '4A'),
(12, '4B'),
(13, '4C'),
(14, 'Avanzado'),
(15, 'Big Tots');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_extrast`
--

CREATE TABLE `info_extrast` (
  `id_docto` int(5) NOT NULL,
  `reg_nacimiento` tinyint(1) DEFAULT NULL COMMENT 'se ha entregado el registro de nacimiento?',
  `convenio` tinyint(1) DEFAULT NULL COMMENT 'se ha firmado el convenio?',
  `facturacion` tinyint(1) DEFAULT NULL COMMENT 'el alumno requiere facturacion?',
  `id_st` int(5) NOT NULL COMMENT 'id del alumno'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Esta tabla guarda informacion sobre los documentos que requiere el alumno.';

--
-- Volcado de datos para la tabla `info_extrast`
--

INSERT INTO `info_extrast` (`id_docto`, `reg_nacimiento`, `convenio`, `facturacion`, `id_st`) VALUES
(1, NULL, 1, 0, 1),
(2, NULL, 0, NULL, 2),
(3, NULL, 0, NULL, 3),
(4, NULL, 0, NULL, 4),
(5, NULL, 0, NULL, 5),
(6, NULL, 0, NULL, 6),
(7, NULL, 0, NULL, 7),
(8, NULL, 0, NULL, 8),
(9, NULL, 0, NULL, 9),
(10, NULL, 0, NULL, 10),
(11, NULL, 0, NULL, 11),
(12, NULL, 0, NULL, 12),
(13, NULL, 0, NULL, 13),
(14, NULL, 0, NULL, 14),
(15, NULL, 0, NULL, 15),
(16, NULL, NULL, NULL, 16),
(17, NULL, NULL, NULL, 17),
(18, NULL, NULL, NULL, 18),
(19, NULL, NULL, NULL, 19),
(20, NULL, NULL, NULL, 20),
(21, NULL, NULL, NULL, 21),
(22, 0, NULL, 0, 22),
(23, NULL, NULL, NULL, 23),
(24, NULL, 1, NULL, 24),
(25, NULL, NULL, NULL, 25),
(26, NULL, NULL, NULL, 26),
(27, NULL, NULL, NULL, 27),
(28, 1, 1, NULL, 28),
(29, NULL, 1, NULL, 29),
(30, NULL, 1, NULL, 30),
(31, NULL, 1, NULL, 31),
(32, NULL, 1, NULL, 32),
(33, NULL, NULL, NULL, 33),
(34, NULL, NULL, NULL, 34),
(35, NULL, NULL, NULL, 35),
(36, NULL, NULL, NULL, 36),
(37, NULL, NULL, NULL, 37),
(38, NULL, NULL, NULL, 38),
(39, NULL, NULL, NULL, 39),
(40, NULL, 1, NULL, 40),
(41, NULL, 1, NULL, 41),
(42, NULL, 1, NULL, 42),
(43, NULL, 1, NULL, 43),
(44, NULL, 1, NULL, 44),
(45, NULL, 1, NULL, 45),
(46, NULL, 1, NULL, 46),
(47, NULL, 1, NULL, 47),
(48, NULL, 1, NULL, 48),
(49, NULL, 1, NULL, 49),
(50, NULL, 1, NULL, 50),
(51, NULL, 1, NULL, 51),
(52, NULL, 1, NULL, 52),
(53, NULL, 1, NULL, 53),
(54, NULL, 1, NULL, 54),
(55, NULL, 1, NULL, 55),
(56, NULL, 1, NULL, 56),
(57, NULL, 1, NULL, 57),
(58, NULL, 1, NULL, 58),
(59, NULL, 1, NULL, 59),
(60, NULL, 1, NULL, 72),
(61, NULL, 1, NULL, 73),
(62, NULL, 1, NULL, 74),
(63, NULL, 1, NULL, 75),
(64, NULL, 1, NULL, 76),
(65, NULL, 1, NULL, 78),
(66, NULL, 1, NULL, 79),
(67, NULL, 1, NULL, 80),
(68, NULL, 1, NULL, 81),
(69, NULL, 1, NULL, 82),
(70, NULL, 1, NULL, 83),
(71, NULL, 1, NULL, 84),
(72, NULL, 1, NULL, 85),
(73, NULL, 1, NULL, 86),
(74, NULL, 1, NULL, 87),
(75, NULL, 1, NULL, 88),
(76, NULL, 1, NULL, 89),
(77, NULL, 1, NULL, 90),
(78, NULL, 1, NULL, 91),
(79, NULL, 1, NULL, 94),
(80, NULL, 1, NULL, 95),
(81, NULL, 1, NULL, 96),
(82, NULL, 1, NULL, 97),
(83, NULL, 1, NULL, 98),
(84, NULL, 1, NULL, 99),
(85, NULL, 1, NULL, 100),
(86, NULL, 1, NULL, 101),
(87, NULL, 1, NULL, 102),
(88, NULL, 1, NULL, 103),
(89, NULL, 1, NULL, 104),
(90, NULL, 1, NULL, 105),
(91, NULL, 1, NULL, 106),
(92, NULL, 1, NULL, 107),
(93, NULL, 1, NULL, 108),
(94, NULL, 1, NULL, 109),
(95, NULL, 1, NULL, 110),
(96, NULL, 1, NULL, 111),
(97, NULL, 1, NULL, 112),
(98, NULL, NULL, NULL, 113),
(99, NULL, NULL, NULL, 114),
(100, NULL, NULL, NULL, 115),
(101, NULL, NULL, NULL, 116),
(102, NULL, NULL, NULL, 117),
(103, NULL, NULL, NULL, 118),
(104, NULL, NULL, NULL, 119),
(105, NULL, NULL, NULL, 120),
(113, 1, 1, 1, 146);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `naatik_course`
--

CREATE TABLE `naatik_course` (
  `id_course` int(5) NOT NULL,
  `course` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `naatik_course`
--

INSERT INTO `naatik_course` (`id_course`, `course`) VALUES
(1, 'English Club'),
(2, 'Primary'),
(3, 'Adolescentes'),
(4, 'Adultos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(5) NOT NULL,
  `year` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `date_init` date NOT NULL,
  `date_end` date NOT NULL,
  `days` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `hour_init` time NOT NULL,
  `hour_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `year`, `date_init`, `date_end`, `days`, `hour_init`, `hour_end`) VALUES
(1, '2015 B', '2015-08-25', '2015-12-21', 'Martes-Miercoles-Jueves', '17:30:00', '18:30:00'),
(2, '2015 B', '2015-08-25', '2015-12-21', 'Martes-Miercoles-Jueves', '15:00:00', '16:00:00'),
(3, '2015 B', '2015-08-25', '2015-12-21', 'Martes-Miercoles-Jueves', '16:00:00', '17:00:00'),
(4, '2015 B', '2015-09-15', '2015-12-21', 'Martes-Jueves', '16:30:00', '18:00:00'),
(5, '2015 B', '2015-08-25', '2015-12-21', 'Martes-Jueves', '15:00:00', '16:30:00'),
(6, '2015 B', '2015-08-25', '2015-12-21', 'Martes-Jueves', '18:30:00', '20:00:00'),
(7, '2015 B', '2015-08-25', '2015-12-21', 'Martes-Jueves', '16:30:00', '18:00:00'),
(8, '2015 B', '2015-08-25', '2015-12-21', 'Martes-Jueves', '18:30:00', '20:00:00'),
(9, '2015 B', '2015-08-24', '2015-12-21', 'Lunes-Miercoles', '18:30:00', '20:00:00'),
(10, '2015 B', '2015-08-24', '2015-12-21', 'Lunes-Miercoles', '15:00:00', '16:30:00'),
(11, '2015 B', '2015-08-24', '2015-12-21', 'Lunes-Miercoles', '18:30:00', '20:00:00'),
(12, '2015 B', '2015-08-29', '2015-12-21', 'Sabado', '12:30:00', '15:00:00'),
(13, '2015 B', '2015-08-24', '2015-12-21', 'Lunes-Miercoles', '15:00:00', '16:30:00'),
(14, '2015 B', '2015-08-24', '2015-12-21', 'Lunes-Miercoles', '16:30:00', '18:00:00'),
(15, '2015 B', '2015-08-24', '2015-12-21', 'Lunes-Miercoles', '16:30:00', '18:00:00'),
(16, '2015 B', '2015-08-24', '2015-12-21', 'Lunes-Miercoles', '19:00:00', '20:30:00'),
(17, '2015 B', '2015-08-29', '2015-12-21', 'Sabado', '09:30:00', '12:00:00'),
(18, '2015 B', '2015-08-29', '2015-10-30', 'Sabado', '12:30:00', '15:00:00'),
(19, '2015 B', '2015-08-27', '2015-12-01', 'Jueves', '19:00:00', '20:30:00'),
(20, '2015 B', '2015-08-29', '2015-12-01', '', '21:30:00', '12:00:00'),
(22, '2015 A', '2015-10-06', '2015-12-21', 'Martes-Jueves-Sabado', '14:30:00', '16:00:00'),
(33, ' A', '2015-11-02', '2015-12-01', 'Lunes-Martes', '17:00:00', '18:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scholar`
--

CREATE TABLE `scholar` (
  `id_grant` int(5) NOT NULL,
  `request` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `togrant` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `date_scholar` date NOT NULL,
  `id_student` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `scholar`
--

INSERT INTO `scholar` (`id_grant`, `request`, `togrant`, `date_scholar`, `id_student`) VALUES
(1, 'no', 'no', '2015-08-25', 1),
(2, 'no', 'no', '2015-09-25', 2),
(3, 'no', 'no', '2015-08-25', 3),
(4, 'no', 'no', '2015-08-25', 4),
(5, 'no', 'no', '2015-08-25', 5),
(6, 'no', 'no', '2015-08-25', 6),
(7, 'no', 'no', '2015-09-15', 7),
(8, 'no', 'no', '2015-08-25', 8),
(9, 'no', 'no', '2015-09-24', 9),
(10, 'no', 'no', '2015-08-24', 10),
(11, 'no', 'no', '2015-08-29', 11),
(12, 'no', 'no', '2015-08-24', 12),
(13, 'no', 'no', '2015-09-24', 13),
(14, 'no', 'no', '2015-08-25', 14),
(15, 'no', 'no', '2015-09-15', 15),
(16, 'no', 'no', '2015-08-24', 16),
(17, 'no', 'no', '2015-08-25', 17),
(18, 'no', 'no', '2015-08-24', 18),
(19, 'no', 'no', '2015-08-25', 19),
(20, 'no', 'no', '2015-08-24', 20),
(21, 'no', 'no', '2015-09-15', 21),
(22, 'no', 'no', '2015-09-15', 22),
(23, 'no', 'no', '2015-09-15', 23),
(24, 'no', 'no', '2015-09-15', 24),
(25, 'no', 'no', '2015-09-15', 25),
(26, 'no', 'no', '2015-09-15', 26),
(27, 'no', 'no', '2015-08-25', 27),
(28, 'no', 'no', '2015-08-26', 28),
(29, 'no', 'no', '2015-09-01', 29),
(30, 'no', 'no', '2015-08-25', 30),
(31, 'no', 'no', '2015-09-01', 31),
(32, 'no', 'no', '2015-09-01', 32),
(33, 'no', 'no', '2015-09-01', 33),
(34, 'no', 'no', '2015-08-25', 34),
(35, 'no', 'no', '2015-08-25', 35),
(36, 'no', 'no', '2015-09-15', 36),
(37, 'no', 'no', '2015-09-15', 37),
(38, 'no', 'no', '2015-09-15', 38),
(39, 'no', 'no', '2015-09-15', 39),
(40, 'no', 'no', '2015-09-15', 40),
(41, 'no', 'no', '2015-09-15', 41),
(42, 'no', 'no', '2015-09-15', 42),
(43, 'no', 'no', '2015-09-15', 43),
(44, 'no', 'no', '2015-09-15', 44),
(45, 'no', 'no', '2015-09-15', 45),
(46, 'no', 'no', '2015-09-15', 46),
(47, 'no', 'no', '2015-08-25', 47),
(48, 'no', 'no', '2015-09-01', 48),
(49, 'no', 'no', '2015-09-01', 49),
(50, 'no', 'no', '2015-08-25', 50),
(51, 'no', 'no', '2015-08-25', 51),
(52, 'no', 'no', '2015-08-25', 52),
(53, 'no', 'no', '2015-08-25', 53),
(54, 'no', 'no', '2015-08-25', 54),
(55, 'no', 'no', '2015-09-03', 55),
(56, 'no', 'no', '2015-09-01', 56),
(57, 'no', 'no', '2015-08-25', 57),
(58, 'no', 'no', '2015-08-25', 58),
(59, 'no', 'no', '2015-08-25', 59),
(72, 'no', 'no', '2015-08-24', 72),
(73, 'no', 'no', '2015-08-25', 73),
(74, 'no', 'no', '2015-08-25', 74),
(75, 'no', 'no', '2015-08-25', 75),
(76, 'no', 'no', '2015-08-25', 76),
(78, 'no', 'no', '2015-08-25', 78),
(79, 'no', 'no', '2015-08-25', 79),
(80, 'no', 'no', '2015-08-25', 80),
(81, 'no', 'no', '2015-10-05', 81),
(82, 'no', 'no', '2015-10-05', 82),
(85, 'no', 'no', '2015-09-21', 83),
(86, 'no', 'no', '2015-09-14', 84),
(87, 'no', 'no', '2015-08-24', 85),
(88, 'no', 'no', '2015-08-26', 86),
(89, 'no', 'no', '2015-08-24', 87),
(90, 'no', 'no', '2015-08-24', 88),
(91, 'no', 'no', '2015-08-25', 89),
(92, 'no', 'no', '2015-08-24', 90),
(93, 'no', 'no', '2015-08-31', 91),
(95, 'no', 'no', '2015-08-31', 94),
(96, 'no', 'no', '2015-08-24', 95),
(97, 'no', 'no', '2015-08-31', 96),
(98, 'no', 'no', '2015-08-27', 97),
(99, 'no', 'no', '2015-08-24', 98),
(100, 'no', 'no', '2015-08-24', 99),
(101, 'no', 'no', '2015-08-24', 100),
(102, 'no', 'no', '2015-08-24', 101),
(103, 'no', 'no', '2015-08-24', 102),
(104, 'no', 'no', '2015-08-24', 103),
(105, 'no', 'no', '2015-08-24', 104),
(106, 'no', 'no', '2015-08-24', 105),
(107, 'no', 'no', '2015-08-24', 106),
(108, 'no', 'no', '2015-08-24', 107),
(109, 'no', 'no', '2015-08-24', 108),
(110, 'no', 'no', '2015-08-24', 109),
(111, 'no', 'no', '2015-08-24', 110),
(112, 'no', 'no', '2015-08-24', 111),
(113, 'no', 'no', '2015-08-24', 112),
(114, 'no', 'no', '2015-08-24', 113),
(115, 'no', 'no', '2015-08-24', 114),
(116, 'no', 'no', '2015-08-31', 115),
(117, 'no', 'no', '2015-08-24', 116),
(118, 'no', 'no', '2015-08-24', 117),
(119, 'no', 'no', '2015-08-24', 118),
(120, 'no', 'no', '2015-08-31', 119),
(121, 'no', 'no', '2015-08-24', 120),
(147, 'si', 'si', '2015-11-02', 146);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sep`
--

CREATE TABLE `sep` (
  `id_sep` int(5) NOT NULL COMMENT 'Identificador del registro',
  `issep` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `regis_num` varchar(30) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Numero de registro de la SEP asignado al alumno',
  `date_incorporate` varchar(30) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Fecha en que se incorporo el alumno a la sep',
  `calification_sep` varchar(3) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Calificacion del alumno.',
  `beca` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sep`
--

INSERT INTO `sep` (`id_sep`, `issep`, `regis_num`, `date_incorporate`, `calification_sep`, `beca`) VALUES
(1, 'no', '111k0056', '2015-11-07', '5', 0),
(2, 'no', '111k0056', '2015-11-07', '5', 0),
(3, 'no', '111k0056', '2015-11-07', '5', 0),
(4, 'no', '111k0056', '2015-11-07', '5', 0),
(5, 'no', '111k0056', '2015-11-07', '5', 0),
(6, 'no', '111k0056', '2015-11-07', '5', 0),
(7, 'no', '111k0056', '2015-11-07', '5', 0),
(8, 'no', '111k0056', '2015-11-07', '5', 0),
(9, 'no', '111k0056', '2015-11-07', '5', 0),
(10, 'no', '111k0056', '2015-11-07', '5', 0),
(11, 'no', '111k0056', '2015-11-07', '5', 0),
(12, 'no', '111k0056', '2015-11-07', '5', 0),
(13, 'no', '111k0054', '2015-11-07', '78', 0),
(14, 'no', '111k0056', '2015-11-07', '5', 0),
(15, 'no', '111k0056', '2015-11-07', '5', 0),
(16, 'no', '111k0056', '2015-11-07', '5', 0),
(17, 'no', '111k0056', '2015-11-07', '5', 0),
(18, 'no', '111k0056', '2015-11-07', '5', 0),
(19, 'no', '111k0056', '2015-11-07', '5', 0),
(20, 'no', '111k0056', '2015-11-07', '5', 0),
(21, 'no', '111k0056', '2015-11-07', '5', 0),
(22, 'no', '11111', '2016-01-11', '0', 0),
(23, 'no', '111k0056', '2015-11-07', '5', 0),
(24, 'no', '111k0056', '2015-11-07', '5', 0),
(25, 'no', '111k0056', '2015-11-07', '5', 0),
(26, 'no', '111k0056', '2015-11-07', '5', 0),
(27, 'no', '111k0056', '2015-11-07', '5', 0),
(28, 'no', '111k0056', '2015-11-07', '5', 0),
(29, 'no', '111k0056', '2015-11-07', '5', 0),
(30, 'no', '111k0056', '2015-11-07', '5', 0),
(31, 'no', '111k0056', '2015-11-07', '5', 0),
(32, 'no', '111k0056', '2015-11-07', '5', 0),
(33, 'no', '111k0056', '2015-11-07', '5', 0),
(34, 'no', '111k0056', '2015-11-07', '5', 0),
(35, 'no', '111k0056', '2015-11-07', '5', 0),
(36, 'no', '111k0056', '2015-11-07', '5', 0),
(37, 'no', '111k0056', '2015-11-07', '5', 0),
(38, 'no', '111k0056', '2015-11-07', '5', 0),
(39, 'nno', '111k0056', '2015-11-07', '5', 0),
(40, 'no', '111k0056', '2015-11-07', '5', 0),
(41, 'no', '111k0056', '2015-11-07', '5', 0),
(42, 'no', '111k0056', '2015-11-07', '5', 0),
(43, 'no', '111k0056', '2015-11-07', '5', 0),
(44, 'no', '111k0056', '2015-11-07', '5', 0),
(45, 'no', '111k0056', '2015-11-07', '5', 0),
(46, 'no', '111k0056', '2015-11-07', '5', 0),
(47, 'no', '111k0056', '2015-11-07', '5', 0),
(48, 'no', '111k0056', '2015-11-07', '5', 0),
(49, 'no', '111k0056', '2015-11-07', '5', 0),
(50, 'no', '111k0056', '2015-11-07', '5', 0),
(51, 'no', '111k0056', '2015-11-07', '5', 0),
(52, 'no', '111k0056', '2015-11-07', '5', 0),
(53, 'no', '111k0056', '2015-11-07', '5', 0),
(54, 'no', '111k0056', '2015-11-07', '5', 0),
(55, 'no', '111k0056', '2015-11-07', '5', 0),
(56, 'no', '111k0056', '2015-11-07', '5', 0),
(57, 'no', '111k0056', '2015-11-07', '5', 0),
(58, 'no', '111k0056', '2015-11-07', '5', 0),
(59, 'no', '111k0056', '2015-11-07', '5', 0),
(65, 'no', '111k0056', '2015-11-07', '5', 0),
(66, 'no', '111k0056', '2015-11-07', '5', 0),
(67, 'no', '111k0056', '2015-11-07', '5', 0),
(68, 'no', '111k0056', '2015-11-07', '5', 0),
(69, 'no', '111k0056', '2015-11-07', '5', 0),
(71, 'no', '111k0056', '2015-11-07', '5', 0),
(72, 'no', '111k0056', '2015-11-07', '5', 0),
(73, 'no', '111k0056', '2015-11-07', '5', 0),
(74, 'no', '111k0056', '2015-11-07', '5', 0),
(75, 'no', '111k0056', '2015-11-07', '5', 0),
(76, 'no', '111k0056', '2015-11-07', '5', 0),
(77, 'no', '111k0056', '2015-11-07', '5', 0),
(78, 'no', '111k0056', '2015-11-07', '5', 0),
(79, 'no', '111k0056', '2015-11-07', '5', 0),
(80, 'no', '111k0056', '2015-11-07', '5', 0),
(81, 'no', '111k0056', '2015-11-07', '5', 0),
(82, 'no', '111k0056', '2015-11-07', '5', 0),
(83, 'no', '111k0056', '2015-11-07', '5', 0),
(84, 'no', '111k0056', '2015-11-07', '5', 0),
(85, '', '111k0056', '2015-11-07', '5', 0),
(86, 'no', '111k0056', '2015-11-07', '5', 0),
(87, 'no', '111k0056', '2015-11-07', '5', 0),
(88, 'no', '111k0056', '2015-11-07', '5', 0),
(89, 'no', '111k0056', '2015-11-07', '5', 0),
(90, 'no', '111k0056', '2015-11-07', '5', 0),
(91, 'no', '111k0056', '2015-11-07', '5', 0),
(92, 'no', '111k0056', '2015-11-07', '5', 0),
(93, 'no', '111k0056', '2015-11-07', '5', 0),
(94, 'no', '111k0056', '2015-11-07', '5', 0),
(95, 'no', '111k0056', '2015-11-07', '5', 0),
(96, 'no', '111k0056', '2015-11-07', '5', 0),
(97, 'no', '111k0056', '2015-11-07', '5', 0),
(98, 'no', '111k0056', '2015-11-07', '5', 0),
(99, 'no', '111k0056', '2015-11-07', '5', 0),
(100, 'no', '111k0056', '2015-11-07', '5', 0),
(101, 'no', '111k0056', '2015-11-07', '5', 0),
(102, 'no', '111k0056', '2015-11-07', '5', 0),
(103, 'no', '111k0056', '2015-11-07', '5', 0),
(104, 'no', '111k0056', '2015-11-07', '5', 0),
(105, 'no', '111k0056', '2015-11-07', '5', 0),
(106, 'no', '111k0056', '2015-11-07', '5', 0),
(107, 'no', '111k0056', '2015-11-07', '5', 0),
(108, 'no', '111k0056', '2015-11-07', '5', 0),
(109, 'no', '111k0056', '2015-11-07', '5', NULL),
(110, 'no', '111k0056', '2015-11-07', '5', NULL),
(111, 'no', '111k0056', '2015-11-07', '5', 0),
(143, 'si', '325464364', '2015-12-08', '0', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sponsor`
--

CREATE TABLE `sponsor` (
  `id_sponsor` int(5) NOT NULL,
  `type_sp` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `name_sp` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `surname_sp` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `description_sp` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_scholar` int(5) NOT NULL,
  `status_sp` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sponsor`
--

INSERT INTO `sponsor` (`id_sponsor`, `type_sp`, `name_sp`, `surname_sp`, `email`, `description_sp`, `id_scholar`, `status_sp`) VALUES
(1, 'Temporal', 'luis', 'yama', 'J.LUIS.YAMA@GMAIL.COM', 'algo', 0, 'activo'),
(2, 'Temporal', 'luis', 'yama', 'J.LUIS.YAMA@GMAIL.COM', 'algo', 147, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

CREATE TABLE `student` (
  `id_student` int(5) NOT NULL,
  `ncontrol` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `name_s` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `surname1_s` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `surname2_s` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `birthday` date NOT NULL,
  `age` smallint(3) NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `edo_civil` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cellphone` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `address_s` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `reference` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `sickness` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `medication` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `photo_s` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `comment_s` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `homestay` tinyint(1) DEFAULT NULL COMMENT 'pertece a una familia Homestay?',
  `status` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `id_tutor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`id_student`, `ncontrol`, `name_s`, `surname1_s`, `surname2_s`, `birthday`, `age`, `sexo`, `edo_civil`, `cellphone`, `address_s`, `reference`, `sickness`, `medication`, `photo_s`, `comment_s`, `homestay`, `status`, `id_tutor`) VALUES
(1, '', 'Jose Adonay', 'Tuz', 'Reed', '2010-01-01', 5, 'Masculino', 'Soltero(a)', '9831064616', 'alle 64,  S/N,  Entre 55 y 53,  Col. Juan Bautista Vega', 'A contra esquina del cementerio', 'Ninguna', 'Ninguno', 'default.png', '', 1, 'activo', 1),
(2, '', 'Ximena Shiret', 'Martinez', 'Perez', '2010-01-01', 5, 'Femenino', 'Soltero(a)', '9831339659', 'Calle 62 , #S/N,   Entre: 53, Javier Rojo Gomez', 'Pizzeria "Pekes"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 2),
(3, '', 'Regina Isabel', 'Flores', 'Espinoza', '2009-01-01', 6, 'Masculino', 'Soltero(a)', '', 'Calle: 63,  #726,  Entre 62 y 64,  Col.: Centro', 'Casa del Doctor Jacobo Flores', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 3),
(4, '', 'Vanessa', 'Nahuat', 'Dzidz', '2007-10-08', 7, 'Femenino', 'Soltero(a)', 'S/N', 'Calle 62, S/N, Entre 49, Col. Juan Bautista Vega', 'Una esquina despues del cementerio', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 4),
(5, '', 'Angel Manuel', 'Nahuat', 'Dzidz', '2004-11-17', 10, 'Masculino', 'Soltero(a)', '9831069229', 'Calle 62,  S/N,  Entre 49,  Col. Juan Bautista Vega', 'Una esquina despues del cementerio', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 4),
(6, '', 'Rosy Noemi', 'Viana', 'Chay', '2004-10-25', 10, 'Masculino', 'Soltero(a)', 'S/N', 'Calle 67,  S/N,  Entre esquina,  Col. Francisco May', 'A 2 cuadras del taller "El Tlacuache".', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 5),
(7, '', 'Camila', 'Tafoya', 'Salmeron', '2006-01-01', 9, 'Femenino', 'Soltero(a)', 'S/N', 'Calle 51,  num. 912,  Entre 80 y 82,  Col. Plan de Guadalupe', 'Casa color anaranjado con puertas y ventanas de madera', 'Alergia a la humedad y al polvo', '', 'default.png', '', NULL, 'activo', 6),
(8, '', 'Mijail', 'Borgez', 'GutiÃ©rrez', '2004-01-01', 11, 'Masculino', 'Soltero(a)', '9831324224.', 'Calle 68 ,  # 556,  Entre 45 y 43, Col. Juan Bautista Vega', 'Casa bardeada y portÃ³n verde', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 7),
(9, '', 'Roger Eduardo', 'Contreras', 'castillo', '2001-11-07', 13, 'Masculino', 'Soltero(a)', '9831560378', 'Calle 66 S/N, S/N,  Entre 53 Y 55, No especificado', 'Frente al templo "Marathana"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 8),
(10, '', 'Eduardo', 'PerÃ©z ', 'Galicia', '2001-01-01', 14, 'Masculino', 'Soltero(a)', 'S/N', 'Av. Constituyentes, #S/N,  Entre 87 y 89, Col. Martinez Roos', 'A lado de las oficinas de la UNTRAC', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 9),
(11, '', 'Rosy Guadalupe', 'Nahuat', 'CollÃ­', '2002-01-01', 13, 'Femenino', 'Soltero(a)', '9838090473', 'Calle 53,  NÃºm. 646,  54, Col. Javier Rojo Gomez', 'A lado del minisuper "Romanela"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 10),
(12, '', 'Laura Cristina', 'Nahuat', 'CollÃ­', '2004-01-01', 11, 'Femenino', 'Soltero(a)', '9831032280', 'Calle: 53,  # 646,  Entre: 54,  Col.: Javier Rojo Gomez', 'A lado de minisuper "Romanelia"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 10),
(13, '', 'Zuguelmi Magaly', 'Alvarado', 'GuzmÃ¡n', '2000-01-01', 15, 'Femenino', 'Soltero(a)', '', 'Av. Santiago Pacheco Cruz,  #S/N,  Entre 50A y 52,  Col.: Javier Rojo Gomez', 'A lado de SEyC', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 11),
(14, '', 'Rosa Suyevith', 'Madina', 'Olea', '2007-01-01', 8, 'Femenino', 'Soltero(a)', 'S/N', 'Calle 46 , # S/N,   Entre 47 y 49, Col. Rafael E. Melgar ', 'Contra esquina taller mecanico', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 12),
(15, '', 'Ana Danahe', 'Placeres', 'Orozco', '2007-12-25', 7, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 66, #S/N, Entre: 49 y 51, Col.: Juan Bautista Vega', 'Esquina pollos "Chicken Willys"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 13),
(16, '', 'Claudia Meliza', 'Pacheco', 'Balam', '1999-01-01', 16, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: Av. Constituyentes,  #S/N,  Entre: 45 y 43,  Col.: Juan Bautista Vega', 'Frente taller de los TabasqueÃ±os', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 14),
(17, '', 'Julissa Stefany', 'Pacheco', 'Balam', '2009-01-01', 6, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: Av. Constituyentes,  #S/N,  Entre: 45 y 43,  Col.: Juan Bautista Vega', 'Frente al taller de los tabasqueÃ±os', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 14),
(18, '', 'Miguel Salvador', 'Tobon', 'Kauil', '2003-04-22', 12, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 57,  #S/N,  Entre: 86,  Col.: Francisco May', 'A lado del quiroprÃ¡ctico que tiene casa morada', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 15),
(19, '', 'JosÃ© Angel', 'Tobon', 'Kauil', '2008-06-23', 7, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 57 , #S/N,  Entre: 86,  Colonia: Francisco May', 'Al lado del quiroprÃ¡ctico que tiene una casa azul', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 15),
(20, '', 'Jose Francisco', 'Nah', 'Can', '1998-01-01', 17, 'Masculino', 'Soltero(a)', '9831665096', 'Calle: 68, #847, Entre: 75 y 77, Col.: Jesus Martinez Ross', 'Abarrotes "Yoli"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 16),
(21, '', 'Antonio Rosalbin', 'Velasco', 'Santos', '2004-01-01', 11, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 76 , S/N,   Entre: S/N, Colonia: Francisco May', 'No especificado', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 17),
(22, '', 'Victor Manuel', 'Chulim', 'Balam', '1970-01-01', 45, 'Masculino', 'Casado(a)', '9838096407', 'Calle: 49,   #S/N,  Entre: 56 y 58,  Col.: Javier Rojo Gomez', 'A un costado del Kinder', 'Ninguna', 'Ninguno', 'default.png', '', 0, 'activo', 18),
(23, '', 'Luis Manuel', 'Garcia', 'Carrillo', '2010-01-01', 5, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 51,  #876,  Entre: 76 y 78,  Colonia: Constituyentes', 'Casa con rejas cafÃ©, enfrente de INFONAVIT', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 19),
(24, '', 'Jenell Samantha', 'Avila', 'hau', '2011-06-25', 4, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 78 ,669,  Entre: 57 y 55,Colonia: Francisco May', 'A la vuelta del Instituto Naatik S.C.', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 20),
(25, '', 'Enrique Mateo', 'Espinosa', 'Huerta', '2012-02-01', 3, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 53B,  #902A,  Entre: 80 y 82,  Col.: Constituyentes', 'Al lado del parque INFONAVIT', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 21),
(26, '', 'Alan Valentino', 'Pereyra', 'Esquivel', '2010-01-01', 5, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 73,  #813,  Entre: 72,  Col.: Jesus Martinez Roos', 'Casa naranja, en frente de los dormitorios del Mayab', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 22),
(27, '', 'Jesus Santiago', 'Hernandez', 'Romero', '2010-04-03', 5, 'Masculino', 'Soltero(a)', '983 137 8433', 'Calle: 75,  #786,  Entre: 68 y Av. Benito Juarez,  Col.: Jesus Martinez Roos', 'No especificado', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 23),
(28, '', 'Daniel Eduardo', 'Alcocer', 'GÃ³mez', '2011-01-01', 4, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 57 , 594,Entre: S/N, Colonia: FOVISSSTE', 'No especificado', 'Ninguna', 'Ninguno', 'default.png', '', 1, 'activo', 24),
(29, '', 'Marisa Guadalupe', 'Alonzo', 'PinzÃ³n ', '2011-01-01', 4, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: Av. Santiago Pacheco Cruz,724,Entre: 62 y 64,Colonia: Centro', 'Frente al campo de futbol rapido', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 25),
(30, '', 'Samuel', 'Coral', 'Viveros', '2010-01-01', 5, 'Masculino', 'Soltero(a)', '983 753 8194', 'Calle: 50 , 600, Entre: 55, Colonia: Rafael Melgar', 'FOVISSSTE', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 26),
(31, '', 'Hugo Samuel', 'Cruz', 'Balam', '2009-01-01', 6, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: Av. Constituyentes,  #S/N,  Entre: 79,  Col.: Jesus Martinez Roos', 'No especificado', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 27),
(32, '', 'Yana Sinai', 'Cruz', 'Balam', '2009-01-01', 6, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: Av. Constituyentes,  #S/N,  Entre: 79,  Colonia: Jesus Martinez Roos', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 27),
(33, '', 'Mishelle Karenina', 'Mayo', 'VelÃ¡zquez', '2009-01-01', 6, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 55,  #580,  Entre: 50 y 48 ,  Colonia: Rafael Melgar', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 28),
(34, '', 'William Leandro', 'GonzÃ¡lez', 'Carrillo ', '2010-01-03', 5, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 75,  #S/N,  Entre: 56 y 54,  Colonia: Leona Vicario', 'Casa Blanca, Reja Cafe', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 29),
(35, '', 'Sharon Jacinta', 'Yam', 'CimÃ©', '2009-10-25', 5, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 57,  #818,  Entre: 72 y Av. Benito JuÃ¡rez,  Colonia: Juan Bautista Vega', 'A un costado de donde recargan cartuchos de tintas EBEN-EZER', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 30),
(36, '', 'Karol Guadalupe', 'Gomez', 'espaÃ±a', '2005-06-13', 10, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: Av. Santiago Pacheco Cruz S/N,  # S/N,  Entre: 90, Colonia: Francisco May', '-', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 31),
(37, '', 'Abigail Alessandra', 'Turriza', 'Novelo', '2004-06-24', 11, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 58 , S/N,   Entre: 91 y 93, Col.: Emiliano Zapata', 'A media esquina de la torre de TV Azteca', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 32),
(38, '', 'Davine Alejandra', 'Turriza', 'Novelo', '2008-01-24', 7, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 58 ,  S/N,  Entre: 91 y 93, Colonia: Emiliano Zapata', 'A media esquina de la torre de TV Azteca', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 32),
(39, '', 'Brandon Yuumil', 'DÃ­az ', 'MoÃ³', '2008-09-03', 7, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 50 , #S/N, Entre: 67 y 69, Colonia: Lazaro Cardenas', 'En frente del modelorama "MAEN"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 33),
(40, '', 'Lizzety Adelaida', 'Chan ', 'Flota', '2005-01-01', 10, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 54, #603, Entre: 49 y 51, Col.: Javier Rojo Gomez', 'Al lado de una fruteria', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 34),
(41, '', 'Reyna ConcepciÃ³n', 'Chable', 'Uitzil', '2008-01-01', 7, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 76 , #S/N, Av. Santiago Pacheco Cruz, Col.: Francisco May', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 35),
(42, '', 'Andrea Patricia', 'Can', 'Tuk', '2008-01-01', 7, 'Femenino', 'Soltero(a)', '983 114 2308', 'Calle: 54, #S/N, Entre: 43, Col.: Javier Rojo Gomez', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 37),
(43, '', 'Jenifer Yasury', 'Yam', 'Heredia', '2008-01-01', 7, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 66 , #S/N, Entre: 62 x 60, Col.: Leona Vicario', 'Taller de motos a lado de coret', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 38),
(44, '', 'Lysander Andrey', 'Chi', 'Vela', '2008-01-01', 7, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 63 , #846, Entre: Av. Constituyentes y diagonal 63, Col.: Francisco May', 'Frente al minisuper "La Reserva"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 40),
(45, '', 'Jose Gabriel', 'Salazar', 'Xool', '2005-01-01', 10, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 43 , #S/N,  Entre: 76, Col.: Huallumil', 'Frente fraccionamiento Vias del Sol', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 41),
(46, '', 'Elina Patricia', 'Cauich', 'Pino', '2008-01-01', 7, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 66 , #S/N,  Entre: 55, Col.: Juan Bautista Vega', 'A contra esquina del templo "Maranatha"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 42),
(47, '', 'Isui Jaazai', 'Arana', 'Yah', '2007-05-28', 8, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: S/N , #S/N,  Entre: S/N, Col.: S/N', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 43),
(48, '', 'Martin Adrian', 'Ayala', 'Uc', '2004-03-16', 11, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 61 #932, Entre: 82 y 84, Col.: Francisco May', 'A tras de la Secundaria TÃ©cnica', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 44),
(49, '', 'Hulford Enrique', 'Barrera', 'Morales', '2007-01-01', 8, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 63 #830, Entre: 72 y Av. Constituyentes, Col.: Centro', 'En el taller mecanico "Morales" Guin', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 45),
(50, '', 'Lucero Guadalupe', 'Balam', 'garcÃ­a', '2006-01-01', 9, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 87 , #S/N, Entre: 46 y 48, Col.: Plan de Ayala', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 46),
(51, '', 'Marco Alejandro', 'Poot', 'Mendez', '2007-01-01', 8, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 82 ,  #S/N,  Entre: 47, Col.: Constituyentes', 'Por la tortilleria "Minsa Masorca"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 47),
(52, '', 'Luna del Mar', 'GarcÃ­a', 'Uicab', '2005-01-01', 10, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: Av. Santiago Pacheco Cruz,  #S/N,  Entre: 76 y Constituyentes,  Col.: Cen', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 48),
(53, '', 'Frida Celeste', 'Angulo', 'Cruz', '2006-01-01', 9, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 75, #644, Entre: 54 y 56, Col.: Leona Vicario', 'Casa Verde', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 49),
(54, '', 'Mariana Marleny', 'Tec', 'LorÃ­a', '2005-10-29', 9, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 73,  #S/N,  Entre: 76 y 76A,  Col.: Jesus Martinez Ross', 'A media cuadra de pastelerÃ­a "Delecis"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 50),
(55, '', 'Carmen Alexa', 'Sanchez', 'Ventura', '2007-11-21', 7, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: S/N , #S/N,  Entre: S/N,  Col.: Emiliano Zapata', 'Frente a antena Turqueza', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 51),
(56, '', 'Juan Pablo', 'Canul', 'Yeh', '2007-01-01', 8, 'Masculino', 'Soltero(a)', '983 124 1155', 'Calle: 68, #720, Entre: Av. Santiago Pacheco Cruz y 61, Col.: Centro', 'A lado de la pescaderia "Chan Kay"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 52),
(57, '', 'Marlene Liliana', 'Lopez', 'Villanueva', '2004-08-20', 11, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: Av. Benito JuÃ¡rez, #S/N, Entre: 51 y 43, Col.: Juan Bautista Vega', 'A lado de farmacia "Similares"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 53),
(58, '', 'Jorge del JesÃºs', 'GarcÃ­a ', 'Guillen', '2006-01-01', 9, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 79, #712, Entre: 60 y 62, Col.: Leona Vicario', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 54),
(59, '', 'Iris', 'Castro', 'Montero', '2006-06-07', 9, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 57, #653, Entre: 56 y 58, Col.: Javier Rojo Gomez', 'A tras de la cuadra de bomberos', 'Asma', 'Salbutamol Spray (2 disparos)', 'default.png', '', NULL, 'activo', 55),
(72, '', 'Fausto Adair', 'Chi', 'Arana', '2008-01-01', 7, 'Masculino', 'Soltero(a)', '983 700 5270', 'Calle: 76-A, #484, Entre: 73 y 75, Col.: Jesus Martinez Roos', 'Yendo a la cancha sobre la calle 76-A', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 62),
(73, '', 'Shakti Alexandra', 'PÃ©rez', 'Galicia', '2006-01-01', 9, 'Femenino', 'Soltero(a)', 'S/N', 'Av. Constituyentes, Entre 87 y 89, Col. Martinez Roos', 'A lado de las oficinas de la UNTRAC', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 9),
(74, '', 'Mayfra Berenice', 'Salazar', 'Portillo', '2005-10-15', 9, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 78, #677, Entre: 55 y 57, Col.: Francisco May', 'Frente a templo evangelista "Emmanuel"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 63),
(75, '', 'Frayma Judith', 'Salazar', 'Portillo', '2004-10-28', 10, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 78, #677, Entre: 55 y 57, Col.: Francisco May', 'Frente a templo evangelista "Emmanuel"', 'Asma Bronquial', 'Nebulizaciones', 'default.png', '', NULL, 'activo', 63),
(76, '', 'Isaura', 'Gracida', 'Acosta', '2007-01-01', 8, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 50, #S/N, Entre: 50 y 50-A, Col.: Javier Rojo Gomez', 'Cerca iglesia "Cristo Rey"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 64),
(78, '', 'Xalli Elayne', 'Carrada', 'GÃ³mez', '2004-01-01', 11, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 57 , 594,Entre: S/N, Colonia: FOVISSSTE', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 24),
(79, '', 'Kenia Jazmin', 'PÃ©rez ', 'Cerrantes', '2004-08-03', 11, 'Femenino', 'Soltero(a)', '983 165 0686', 'Calle: 51, #901, Entre: 80 y 82, Col.: Constituyentes', 'Frente al INFONAVIT', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 65),
(80, '', 'Iris', 'Castro ', 'Montero', '2005-01-01', 10, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 57 #653, Entre: 56 y 58, Col.: Javier Rojo Gomez', 'A tras de la cuadra de bomberos', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 55),
(81, '', 'MarÃ­a Sofia', 'Gonzalez ', 'Caballero', '2002-01-01', 13, 'Femenino', 'Soltero(a)', '983 114 9583', 'Calle: 62, #763, Entre: 67 y 69, Col.: Centro', 'Mini super "La NorteÃ±a"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 66),
(82, '', 'David', 'Vazquez', 'Mayo', '2003-02-04', 12, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 67 , #822, Entre: 72 y Av. Constituyentes, Col.: Centro', 'Oficinas CAPA', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 67),
(83, '', 'Angel Uriel', 'Tec', 'Loria', '2001-08-03', 14, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 73 #S/N, Entre: 76 y 76A, Col.: Jesus Martinez Ross', 'A media cuadra de pasteleria "Delecis', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 50),
(84, '', 'Allan Alejandro', 'Izquierdo', 'Uicab', '1997-01-01', 18, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 81, #708, Entre: 60 y 62, Col.: Leona Vicario', 'A una esquina de abarrotes "La Curva"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 68),
(85, '', 'Fabritzio Farid', 'GÃ³mez', 'esquivel', '2003-01-01', 12, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 57 , 594,Entre: S/N, Colonia: FOVISSSTE', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 24),
(86, '', 'Daniel Omar', 'Cauich', 'Nah', '2001-12-09', 13, 'Masculino', 'Soltero(a)', '983 114 1393', 'Calle: 68 847, Entre: 75 y 77, Colonia: Jesus Martinez Ross', 'Abarrotes "Yoli"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 16),
(87, '', 'Juan Diego', 'Balam', 'Garcia', '2002-01-01', 13, 'Masculino', 'Soltero(a)', '983 140 0795', 'Calle: 87 #S/N, Entre: 46 y 48, Col.: Plan de Ayala', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 46),
(88, '', 'Samantha', 'Coral', 'Viveros', '2002-01-01', 13, 'Femenino', 'Soltero(a)', '983 753 8194', 'Calle: 50 600, Entre: 55, Colonia: Rafael Melgar', 'FOVISSSTE', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 26),
(89, '', 'Irving', 'Coral', 'Viveros', '2001-01-01', 14, 'Masculino', 'Soltero(a)', '983 753 8194', 'Calle: 50 600, Entre: 55, Colonia: Rafael Melgar', 'FOVISSSTE', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 26),
(90, '1234567', 'Zamira', 'Aguilar ', 'Landero', '1999-03-23', 16, 'Femenino', 'Soltero(a)', '983 163 9840', 'Calle: 85,  #S/N,  Entre: 54 y 52,  Col.: Leona Vicario', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 69),
(91, '', 'Yadira Lizath', 'Pat', 'Cocom', '1998-02-24', 17, 'Femenino', 'Soltero(a)', '983 110 8778', 'Calle: 89, #S/N, Entre: 62, Col.: Emiliano Zapata', 'Tienda "La Paloma"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 70),
(94, '', 'Oscar FroylÃ¡n', 'Balam', 'Chulim', '2003-05-31', 12, 'Masculino', 'Soltero(a)', '983 700 3069', 'Calle: 50, #958, Entre: 85 y 87, Col.: Plan de Ayala', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 72),
(95, '', 'Karen Alecsandroya', 'Uc', 'Mis', '2003-04-15', 12, 'Femenino', 'Soltero(a)', '983 809 7198', 'Calle: 73, #645, Entre: 54 y 56, Col.: Leona Vicario', 'A espaldas de la agencia Superior', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 73),
(96, '', 'Hannia Paola', 'Cabrera', 'Buenfil', '2003-01-01', 12, 'Femenino', 'Soltero(a)', '983 700 4999', 'Calle: S/N, #S/N, Entre: S/N, Col.: Plan de Ayala', 'Frente a cancha de basquetbol', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 74),
(97, '', 'Ana Belem', 'Hernandez', 'Poot ', '2004-01-01', 11, 'Femenino', 'Soltero(a)', '983 114 5343', 'Calle: 68, #701, Entre: Av. Santiago Pacheco Cruz y 61, Col.: Centro', 'Contra esquina Bodega Aurera', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 75),
(98, '', 'Lucy Anahi', 'Cach ', 'Hernandez', '1997-12-05', 17, 'Femenino', 'Soltero(a)', '983 124 8195', 'Calle: 75,  #S/N,  Entre: 54 y 56,  Col.: Leona Vicario', 'A lado del restaurant bar "El Cayuco"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 76),
(99, '', 'Yosmar Huisai', 'Rivera', 'Flores', '2000-01-01', 15, 'Masculino', 'Soltero(a)', '982 125 5392', 'Calle: S/N, #S/N, Entre: S/N, Col.: Centro', 'Tecnologico', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 77),
(100, '', 'Atalia Abigail', 'Alvarado ', 'Guzman', '2003-01-01', 12, 'Femenino', 'Soltero(a)', 'S/N', 'Av. Santiago Pacheco Cruz, S/N, Entre 50A y 52, Col. Javier Rojo Gomez', 'Al lado de SEyC', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 11),
(101, '', 'Erik Samuel', 'QuiÃ±ones', 'Villanueva', '2002-01-01', 13, 'Masculino', 'Soltero(a)', '983 103 7712', 'Calle: 75 , #S/N, Entre: 62 y 64, Col.: Leona Vicario', 'A lado del Dr. Felipe Chin', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 78),
(102, '', 'David Antonio', 'Chan', 'Ku', '2003-01-01', 12, 'Masculino', 'Soltero(a)', '983 114 6839', 'Calle: 52, #S/N, Entre: 73 y 75, Col.: Leona Vicario', 'Casa de 2 Pisos Verde', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 79),
(103, '', 'Jessica de JesÃºs', 'Contreras ', 'Castillo', '1999-06-11', 16, 'Femenino', 'Soltero(a)', '983 112 8266', 'Calle 66 #660, Entre Calle 53 Y 55, Col.: Juan Bautista Vega', 'Frente al templo "Maranatha"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 8),
(104, '', 'Johana Itzel', 'Angulo', 'Cruz', '2001-01-01', 14, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: 75 #644, Entre: 54 y 56, Col.: Leona Vicario', 'Casa Verde', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 49),
(105, '', 'David Rodrigo', 'Ek', 'Ek', '2001-01-01', 14, 'Masculino', 'Soltero(a)', '983 143 1891', 'Calle: 78, #S/N, Entre: 73 y 75, Col.: Jesus Martinez Roos', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 80),
(106, '', 'Eyner Martin', 'Yama ', 'catzin', '1999-11-11', 15, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 56, #733, Entre: 61-A, Col.: Cecilio Chi', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 81),
(107, '', 'Cinthia', 'Catzin', 'Sansores', '1999-01-01', 16, 'Femenino', 'Soltero(a)', '983 809 7141', 'Calle: 60, #S/N, Entre: 55 y 57 , Col.: Javier Rojo Gomez', 'Frente a un templo', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 82),
(108, '', 'Solangel Guadalupe', 'Casanova', 'Uc', '1999-11-24', 15, 'Femenino', 'Soltero(a)', '983 105 6690', 'Calle: 51, #S/N, Entre: 60, Col.: Javier Rojo Gomez', 'Por el panteÃ³n, Cerca de lavadero de autos', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 83),
(109, '', 'Lluvia del Mar', 'Garcia', 'Uicab', '1999-01-01', 16, 'Femenino', 'Soltero(a)', 'S/N', 'Calle: Av. Santiago Pacheco Cruz #S/N, Entre: 76 y Constituyentes, Col.: Centro', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 48),
(110, '', 'David Eduardo', 'Camarena', 'Heredia', '2001-01-01', 14, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 55, #881-A, Entre: Esquina-78, Col.: ', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 84),
(111, '', 'Marcos Eduardo', 'Ek', 'Ek', '1998-01-01', 17, 'Masculino', 'Soltero(a)', '983 106 1167', 'Calle: 78, #S/N, Entre: 73 y 75, Col.: Jesus Martinez Roos', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 80),
(112, '', 'Jose Armando', 'Esquivel', 'Malha', '2002-01-01', 13, 'Masculino', 'Soltero(a)', '983 167 0394', 'Calle: 65, #S/N, Entre: 50 y 52, Col.: Cecilio Chi', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 85),
(113, '', 'Montserrat', 'Tafoya', 'Salmeron', '2000-01-01', 15, 'Femenino', 'Soltero(a)', 'S/N', 'Calle 51 912, Entre Calle 80 y 82, Col. Plan de Guadalupe.', 'Casa color anaranjado -  puertas y ventanas de madera', 'Alergia a la humedad y al polvo', '', 'default.png', '', NULL, 'activo', 6),
(114, '', 'Ana Cristina', 'Garcia', 'Guillen', '2002-01-01', 13, 'Femenino', 'Soltero(a)', '983 139 1453', 'Calle: 79 #712, Entre: 60 y 62, Col.: Leona Vicario', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 54),
(115, '', 'Geyni Citlali', 'caamal', 'Tun', '2003-01-01', 12, 'Femenino', 'Soltero(a)', '983 700 1507', 'Calle: 63, #S/N, Entre: 48, Col.: Lazaro Cardenaz', 'Por la escuela primaria "Orlando Martinez"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 86),
(116, '', 'Landy Guadalupe', 'Garcia', 'Guillen', '2000-01-01', 15, 'Femenino', 'Soltero(a)', '983 121 0070', 'Calle: 79 #712, Entre: 60 y 62, Col.: Leona Vicario', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 54),
(117, '', 'Carlos Enrique', 'GÃ³mez', 'AvilÃ©s', '1999-05-23', 16, 'Masculino', 'Soltero(a)', '983 135 9951', 'Calle: S/N, #S/N, Entre: S/N, Col.: S/N', 'A espaldas de la escuela "Leona Vicario"', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 87),
(118, '', 'Eduardo Alberto', 'Mejia', 'Flota', '1991-01-01', 24, 'Masculino', 'Soltero(a)', 'S/N', 'Calle: 68, #775, Entre: 67 y 69, Col.: Centro', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 88),
(119, '', 'Alma Cristina', 'Balam', 'Xiu', '1987-01-01', 28, 'Masculino', 'Soltero(a)', '983 867 0229', 'Calle: 75, #706, Entre: 60 y 62, Col.: Leona Vicario', '', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 89),
(120, '', 'Grecia Nathalia', 'PÃ©rez ', 'Cervantes', '2000-09-10', 15, 'Femenino', 'Soltero(a)', '983 164 8558', 'Calle: 51, #901, Entre: 80 y 82, Col.: Constituyentes', 'Frente al INFONAVIT', 'Ninguna', 'Ninguno', 'default.png', '', NULL, 'activo', 65),
(146, '1234567A1234', 'Luis Jose', 'Yama', 'May', '1990-10-10', 25, 'Masculino', 'Soltero(a)', '983 106 4660', 'Calle: Av. Benito Juarez, #S/N, Entre: 65 y 67, Col.: Centro', 'A un costado de Centro de Diagnostico JesÃºs.', 'Ninguna', 'Ninguno', 'Screenshot_2014-12-30-15-35-00.png', 'Este alumno no tendrÃ¡ beca', 0, 'baja', 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE `tasks` (
  `id_task` int(5) NOT NULL,
  `task` varchar(800) COLLATE utf8_spanish_ci NOT NULL,
  `date_task` date NOT NULL,
  `date_todo` date NOT NULL,
  `priority` int(2) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tasks`
--

INSERT INTO `tasks` (`id_task`, `task`, `date_task`, `date_todo`, `priority`, `id_user`) VALUES
(19, 'Alguna tareea pendiente', '2015-10-15', '2015-11-22', 2, 2),
(75, 'Programar el apartado calificaciones', '2015-11-02', '2015-11-01', 2, 5),
(77, 'Progamar  el aparatdo capturar calificaciones', '2015-11-02', '2015-11-03', 2, 5),
(78, 'Crear los formularios de captura de calificaciones y mostrar segÃºn se el curso al que corresponde con base a los formatos establecidos', '2015-11-02', '2015-10-13', 2, 5),
(114, 'kjgvkgvkjvjkvkjvh', '2015-11-05', '2015-11-03', 2, 8),
(118, 'scdadas', '2015-11-05', '2015-11-12', 3, 8),
(120, 'gvjvkjvkjg', '2015-11-05', '2001-08-09', 1, 8),
(129, 'Make a review about the next test, for conditionals subject.', '2015-11-12', '2015-11-01', 1, 7),
(131, 'Read the new book about the verb to be.', '2015-11-12', '2015-11-05', 2, 7),
(132, 'Write the report and send it to the email.', '2015-11-12', '2015-11-06', 3, 7),
(135, 'New Task...', '2015-11-30', '2015-11-29', 1, 13),
(136, 'NEW TASK WITH MUCH MORE INFORMATION ABOUT ITSELF, FOR UNDERSTAND WHAT I NEED TO DO WHEN THE DAY OF THIS TASK BECOME.', '2015-11-30', '2015-11-29', 2, 13),
(137, 'Anoter task', '2015-11-30', '2015-11-02', 3, 13),
(138, 'One Task More', '2015-11-30', '2015-12-05', 1, 13),
(139, 'ggff', '2016-01-11', '2016-01-11', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher`
--

CREATE TABLE `teacher` (
  `id_teacher` int(5) NOT NULL,
  `name_te` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `surname_te` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `photo_te` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `iduser` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `teacher`
--

INSERT INTO `teacher` (`id_teacher`, `name_te`, `surname_te`, `photo_te`, `iduser`) VALUES
(1, 'No', 'Asignado', '', 0),
(22, 'JOSE LUIS', 'YAMA MAY', 'IMG.png', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `id_tutor` int(5) NOT NULL,
  `name_t` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `surname1_t` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `surname2_t` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `job` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cellphone_t` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `relationship` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `phone_alt` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Telefono alternativo',
  `relationship_alt` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Parentesco del dueño del telefono alternativo',
  `address_t` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`id_tutor`, `name_t`, `surname1_t`, `surname2_t`, `job`, `phone`, `cellphone_t`, `relationship`, `phone_alt`, `relationship_alt`, `address_t`) VALUES
(1, 'Weyler De JÃ©sus', 'Tuz', 'Tzuc', 'Profesor de educaciÃ³n primaria', '2671437', '9831323244', 'Padre', NULL, NULL, 'Calle 64, S/N, Entre 55 y 53, Col. Juan BautistaVega'),
(2, 'Javier', 'Martinez', 'Reyes', 'Negocio Propio', '9831339659', '9838385394', 'Padre', NULL, NULL, 'Calle 62 S/N, Entre 53, Javier Rojo Gomez'),
(3, 'Jacobo', 'Flores', 'Alvarado', 'Doctor', '8340398', '9831068873', 'Abuelo(a)', NULL, NULL, 'Calle 63 nÃºm 726, Entre 62 y 64, Col. Centro'),
(4, 'Julia Isabel', 'Dzidz', 'CatzÃ­n', 'Ama de casa', '', '9831132721', 'Madre', NULL, NULL, 'Calle 62, S/N, Entre 49, Col. Juan Bautista Vega'),
(5, 'Jose Daniel', 'Viana', 'Doparto', 'TÃ©cnico en refrigeraciÃ³n y aire acondicionado', '9831443300', '9837008447', 'Padre', NULL, NULL, 'Calle 67, S/N, Entre esquina, Col. Francisco May'),
(6, 'Monica', 'Salmeron', 'Martinez', 'Ama de casa', '2671205', '9831358309', 'Madre', NULL, NULL, 'Calle 51 912, Entre Calle 80 y 82, Col. Plan de Guadalupe.'),
(7, 'Citlali', 'GutiÃ©rrez', 'Rueda', 'Ama de casa', '', '9831324224', 'Madre', NULL, NULL, 'Calle 68 nÃºm 556, Entre 45 y 43, Col. Juan Bautista Vega'),
(8, 'Maria de JÃ©sus', 'Castillo', 'Castro', 'Secretaria', '8341185', '9831370189', 'Madre', NULL, NULL, 'Calle 66 S/N, S/N,  Entre 53 Y 55, No especificado'),
(9, 'Juana', 'Galicia ', 'QuiÃ±ones', 'MÃ©dico General', '', '983 700 5184', 'Madre', NULL, NULL, 'Av. Constituyentes, #S/N,  Entre 87 y 89, Col. Martinez Roos'),
(10, 'Isadora', 'CollÃ­', 'Chuc', 'Ama de casa', '', '9831568981', 'Madre', NULL, NULL, 'Calle: 53,  # 646,  Entre: 54,  Col.: Javier Rojo Gomez'),
(11, 'Zulma M.', 'GuzmÃ¡n', 'CenturiÃ³n', 'Maestra', '', '9831129604', 'Madre', NULL, NULL, 'Av. Santiago Pacheco Cruz, S/N, Entre 50A y 52, Col. Javier Rojo Gomez'),
(12, 'Juan C.', 'Medina', 'Lozano', 'Empleado', '9831080675', '9831143604', 'Padre', NULL, NULL, 'Calle 46 S/N, Entre 47 y 49, Col. Rafael E. Melgar '),
(13, 'Ariadna Danahe', 'Orozco', 'Priego', 'Directora de ventas Mary Kay', '', '9837005157', 'Madre', NULL, NULL, 'Calle: 66, #S/N, Entre: 49 y 51, Col.: Juan Bautista Vega'),
(14, 'Maria del Rosario', 'Balam ', 'uicab', 'Empleada', 'S/N', '9831067356', 'Madre', NULL, NULL, 'Calle: Av. Constituyentes,  #S/N,  Entre: 45 y 43,  Col.: Juan Bautista Vega'),
(15, 'Yamile Guadalupe', 'Kauil', 'Yam', 'Docente', '2671274', '9831146147', 'Madre', NULL, NULL, 'Calle: 57,  #S/N,  Entre: 86,  Col.: Francisco May'),
(16, 'Yolanda Isabel', 'Nah', 'Balam', 'Comerciante', 'S/N', '9831269326', 'Tio(a)', NULL, NULL, 'Calle: 68 847, Entre: 75 y 77, Colonia: Jesus Martinez Ross'),
(17, 'Patricia', 'Santos', 'Rojas', 'Ama de Casa', 'S/N', '983 700 2777', 'Madre', NULL, NULL, 'Calle: 76 , S/N,   Entre: S/N, Colonia: Francisco May'),
(18, 'N/A', 'N/A', 'N/A', 'N/A', 'S/N', 'N/A', 'N/A', NULL, NULL, 'Calle: 49,   #S/N,  Entre: 56 y 58,  Col.: Javier Rojo Gomez'),
(19, 'Julia J.', 'Carrillo', 'Rodriguez', 'Auxiliar administrativo', '8341431', '9831567845', 'Madre', NULL, NULL, 'Calle: 51 876, Entre: 76 y 78, Colonia: Constituyentes'),
(20, 'Alba MarÃ­a', 'Hau', 'Flota', 'Empleada', '2671357', '9831062750', 'Tutor', NULL, NULL, 'Calle: 78 ,669,  Entre: 57 y 55,Colonia: Francisco May'),
(21, 'Aura', 'Huerta', 'Marfil', 'Doctora', 'S/N', '999 9106543', 'Madre', NULL, NULL, 'Calle: 53B 902A, Entre: 80 y 82, Colonia: Constituyentes'),
(22, 'AngÃ©lica Patricia', 'Pereyra', 'Esquivel', 'Maestra', '983 8340876', '983 1246575', 'Madre', NULL, NULL, 'Calle: 73 813, Entre: 72, Colonia: Jesus Martinez Roos'),
(23, 'Zulema', 'Romero', 'Oribe', 'Ama de Casa', '83 40277', '983 137 8433', 'Madre', NULL, NULL, 'Calle: 75 786, Entre: 68 y Av. Benito Juarez, Colonia: Jesus Martinez Roos'),
(24, 'Karen Ariadne', 'GÃ³mez', 'Esquivel', 'Empleada Federal', '83 410 10', '983 124 1320', 'Madre', NULL, NULL, 'Calle: 57 , 594,Entre: S/N, Colonia: FOVISSSTE'),
(25, 'Claudia Pamela', 'PinzÃ³n', 'Pardenilla', 'Docente', 'S/N', '983 124 0819', 'Madre', NULL, NULL, 'Calle: Av. Santiago Pacheco Cruz,724,Entre: 62 y 64,Colonia: Centro'),
(26, 'Marlen', 'Viveros', 'Landa', 'Ama de Casa', '983 267 1457', '983 753 8194', 'Madre', NULL, NULL, 'Calle: 50 , 600, Entre: 55, Colonia: Rafael Melgar'),
(27, 'Hugo FabiÃ¡n', 'Cruz', 'Sandoval', 'Profesor de educaciÃ³n Primaria', '83 413 85', '983 125 9967', 'Padre', NULL, NULL, 'Calle: Av. Constituyentes S/N, Entre: 79, Colonia: Jesus Martinez Roos'),
(28, 'Karenina del Rocio', 'VelÃ¡zquez', 'Mijangos', 'Docente', '83 416 94', '983 700 1850', 'Madre', NULL, NULL, 'Calle: 55 580, Entre: 50 y 48 , Colonia: Rafael Melgar'),
(29, 'William Miguel', 'GonzÃ¡les', 'RodrÃ­guez', 'Maestro', 'S/N', '983 867 1071', 'Padre', NULL, NULL, 'Calle: 75 S/N, Entre: 56 y 54, Colonia: Leona Vicario'),
(30, 'German NapoleÃ³n', 'Yam', 'Can', 'Empleado ICAT', 'S/N', '983 112 6729', 'Padre', NULL, NULL, 'Calle: 57 818, Entre: 72 y Av. Benito JuÃ¡rez, Colonia: Juan Bautista Vega'),
(31, 'Diana Guadalupe', 'EspaÃ±a', 'Huchin', 'Trabajadora', 'S/N', '983 700 3712', 'Madre', NULL, NULL, 'Calle: Av. Santiago Pacheco Cruz S/N,  # S/N,  Entre: 90, Colonia: Francisco May'),
(32, 'Mayte Alegria', 'Novelo', 'Vela', 'Ama de Casa', 'S/N', '983 809 7733', 'Madre', NULL, NULL, 'Calle: 58 ,  S/N,  Entre: 91 y 93, Colonia: Emiliano Zapata'),
(33, 'Guadalupe del Socorro', 'MoÃ³', 'YamÃ¡', 'Ama de Casa', 'S/N', '983 104 8081', 'Madre', NULL, NULL, 'Calle: 50 , #S/N, Entre: 67 y 69, Colonia: Lazaro Cardenas'),
(34, 'Marco A.', 'Chan', '', 'Obrero', 'S/N', '983 114 1948', 'Padre', NULL, NULL, 'Calle: 54, #603, Entre: 49 y 51, Col.: Javier Rojo Gomez'),
(35, 'MarÃ­a ConcepciÃ³n', 'Uitzil', 'Chan', 'Ama de Casa', 'S/N', 'S/N', 'Madre', NULL, NULL, 'Calle: 76 , #S/N, Av. Santiago Pacheco Cruz, Col.: Francisco May'),
(37, 'Dana Beatriz', 'Tuk', 'Colli', 'Secretaria', 'S/N', '983 114 2308', 'Madre', NULL, NULL, 'Calle: 54, #S/N, Entre: 43, Col.: Javier Rojo Gomez'),
(38, 'Benjamin', 'Yam', 'Lopez', 'Mecanico', 'S/N', '983 124 1851', 'Padre', NULL, NULL, 'Calle: 66 , #S/N, Entre: 62 x 60, Col.: Leona Vicario'),
(40, 'Elvia Saturnina', 'MartÃ­nez', 'Angeles', 'Ama de Casa', 'S/N', '983 114 5678', 'Abuelo(a)', NULL, NULL, 'Calle: 63 , #846, Entre: Av. Constituyentes y diagonal 63, Col.: Francisco May'),
(41, 'Maribel', 'Xool', 'Alamilla', 'Ama de Casa', 'S/N', '983 104 4416', 'Madre', NULL, NULL, 'Calle: 43 , #S/N,  Entre: 76, Col.: Huallumil'),
(42, 'Flora Patricia', 'Pino', 'Colli', 'Ama de Casa', 'S/N', '983 168 5103', 'Madre', NULL, NULL, 'Calle: 66 , #S/N,  Entre: 55, Col.: Juan Bautista Vega'),
(43, 'Judith', 'Peraza', 'Yah', 'Ama de Casa', 'S/N', '983 114 8344', 'Madre', NULL, NULL, 'Calle: S/N , #S/N,  Entre: S/N, Col.: S/N'),
(44, 'Jeanny Elizabeth', 'Uc', 'Peraza', 'Ama de Casa', '83 417 51', '983 809 8517', 'Madre', NULL, NULL, 'Calle: 61 #932, Entre: 82 y 84, Col.: Francisco May'),
(45, 'Holford Alejandro', 'Barrera', 'Avila', 'Docente', '26 710 76', '', 'Padre', NULL, NULL, 'Calle: 63 #830, Entre: 72 y Av. Constituyentes, Col.: Centro'),
(46, 'Jose Guadalupe', 'Balam', 'Angulo', 'Intendente', 'S/N', '983 809 7562', 'Padre', NULL, NULL, 'Calle: 87 , #S/N, Entre: 46 y 48, Col.: Plan de Ayala'),
(47, 'Rosa', 'Mendez', 'Gonzalez', 'Ama de Casa', 'S/N', 'S/N', 'Madre', NULL, NULL, 'Calle: 82 ,  #S/N,  Entre: 47, Col.: Constituyentes'),
(48, 'Gloria', 'Uicab', 'Tun', 'Empleada', '983 834 1261', '983 106 7675', 'Madre', NULL, NULL, 'Calle: Av. Santiago Pacheco Cruz,  #S/N,  Entre: 76 y Constituyentes,  Col.: Centro'),
(49, 'Rosa Alba', 'Cruz', 'Mora', 'Empleada', '983 700 5428', '983 101 2682', 'Madre', NULL, NULL, 'Calle: 75, #644, Entre: 54 y 56, Col.: Leona Vicario'),
(50, 'Sonia Marleny', 'LorÃ­a', 'CatzÃ­n', 'Empleada de SESA', '83 407 85', '983 104 7126', 'Madre', NULL, NULL, 'Calle: 73,  #S/N,  Entre: 76 y 76A,  Col.: Jesus Martinez Ross'),
(51, 'Yovani Elizabeth', 'Ventura', 'Morales', 'Ama de casa', '983 108 2224', '983 121 9169', 'Madre', NULL, NULL, 'Calle: S/N , #S/N,  Entre: S/N,  Col.: Emiliano Zapata'),
(52, 'OrquÃ­dea', 'Yeh', 'MagaÃ±a', 'Docente', '83 403 51', '983 114 6139', 'Madre', NULL, NULL, 'Calle: 68 #720, Entre: Av. Santiago Pacheco Cruz y 61, Col.: Centro'),
(53, 'Celia', 'Villanueva', 'Amador', 'Estilista', 'S/N', '983 106 1607', 'Madre', NULL, NULL, 'Calle: Av. Benito JuÃ¡rez, #S/N, Entre: 51 y 43, Col.: Juan Bautista Vega'),
(54, 'Landy Guadalupe', 'Guillen', 'Avila', 'Docente', 'S/N', '983 139 6192', 'Madre', NULL, NULL, 'Calle: 79 #712, Entre: 60 y 62, Col.: Leona Vicario'),
(55, 'JesÃºs', 'Castro', 'Ramos', 'MÃ©dico', 'S/N', '983 135 2619', 'Padre', NULL, NULL, 'Calle: 57 #653, Entre: 56 y 58, Col.: Javier Rojo Gomez'),
(62, 'Fausto', 'Chi', 'Rivas', 'Docente', 'S/N', '983 700 5270', 'Padre', NULL, NULL, 'Calle: 76-A, #484, Entre: 73 y 75, Col.: Jesus Martinez Roos'),
(63, 'Francisco', 'Salazar', 'Rodriguez', 'Empleado SESA', '267 1035', '983 129 9485', 'Padre', NULL, NULL, 'Calle: 78, #677, Entre: 55 y 57, Col.: Francisco May'),
(64, 'Carlos', 'Gracida', 'Juarez', 'Docente', 'S/N', '983 103 4063', 'Padre', NULL, NULL, 'Calle: 50, #S/N, Entre: 50 y 50-A, Col.: Javier Rojo Gomez'),
(65, 'Pedro Francisco', 'PÃ©rez', 'LÃ³pez', 'Medico', '267 130 7', '983 139 4742', 'Padre', NULL, NULL, 'Calle: 51, #901, Entre: 80 y 82, Col.: Constituyentes'),
(66, 'Blanca MarÃ­a', 'Caballero', 'Olague', 'Maestra', 'S/N', '9831147786', 'Madre', NULL, NULL, 'Calle: 62, #763, Entre: 67 y 69, Col.: Centro'),
(67, 'Carlos Alejandro', 'Vazquez', '', 'Docente', 'S/N', '983 102 7276', 'Padre', NULL, NULL, 'Calle: 67 , #822, Entre: 72 y Av. Constituyentes, Col.: Centro'),
(68, 'N/A', 'N/A', 'N/A', 'N/A', 'S/N', '', '', NULL, NULL, 'Calle: 81, #708, Entre: 60 y 62, Col.: Leona Vicario'),
(69, 'N/A', 'N/A', 'N/A', 'N/A', 'S/N', 'N/A', 'N/A', NULL, NULL, 'Calle: 85,  #S/N,  Entre: 54 y 52,  Col.: Leona Vicario'),
(70, 'N/A', 'N/A', 'N/A', 'N/A', 'S/N', 'N/A', 'N/A', NULL, NULL, 'Calle: 89, #S/N, Entre: 62, Col.: Emiliano Zapata'),
(72, 'FroylÃ¡n', 'Balam', 'Ek', 'Empleado', 'S/N', '983 101 1835', 'Padre', NULL, NULL, 'Calle: 50, #958, Entre: 85 y 87, Col.: Plan de Ayala'),
(73, 'Jorge', 'Uc', 'caamal', 'Empleado', '983 834 0957', '999 215 1969', 'Padre', NULL, NULL, 'Calle: 73, #645, Entre: 54 y 56, Col.: Leona Vicario'),
(74, 'Nalleli Guadalupe', 'Buenfil', 'Sosa', 'Comerciante', '26 714 66', '983 112 9595', 'Madre', NULL, NULL, 'Calle: S/N, #S/N, Entre: S/N, Col.: Plan de Ayala'),
(75, 'David', 'HernÃ¡ndez', 'RomÃ¡n', 'Administrativo', '83 402 30', '983 114 5343', 'Madre', NULL, NULL, 'Calle: 68, #701, Entre: Av. Santiago Pacheco Cruz y 61, Col.: Centro'),
(76, 'Avelino', 'Cach', 'May', 'Empleado', 'S/N', '984 119 8943', 'Padre', NULL, NULL, 'Calle: 75,  #S/N,  Entre: 54 y 56,  Col.: Leona Vicario'),
(77, 'Ana Rosa', 'Parra', '', 'Empleada', 'S/N', '999 900 7827', 'Hermano(a)', NULL, NULL, 'Calle: S/N, #S/N, Entre: S/N, Col.: Centro'),
(78, 'Nelly Lorena', 'Villanueva', 'Vega', 'Maestra', 'S/N', '983 130 4834', 'Madre', NULL, NULL, 'Calle: 75 , #S/N, Entre: 62 y 64, Col.: Leona Vicario'),
(79, 'Wendy Madelaine', 'Ku', 'Moreno', 'Maestra', 'S/N', '983 114 4270', 'Madre', NULL, NULL, 'Calle: 52, #S/N, Entre: 73 y 75, Col.: Leona Vicario'),
(80, 'Marco Antonio', 'Ek', 'Puc', 'No especificado', '83 415 53', '983 106 6947', 'Padre', NULL, NULL, 'Calle: 78, #S/N, Entre: 73 y 75, Col.: Jesus Martinez Roos'),
(81, 'N/A', 'N/A', 'N/A', 'N/A', 'S/N', 'N/A', 'N/A', NULL, NULL, 'Calle: 56, #733, Entre: 61-A, Col.: Cecilio Chi'),
(82, 'Maria H.', 'Sansorres', 'Tun', 'Secretaria', '83 412 94', '983 111 0207', 'Madre', NULL, NULL, 'Calle: 60, #S/N, Entre: 55 y 57 , Col.: Javier Rojo Gomez'),
(83, 'Lizbeth R.', 'Uc', 'Castillo', 'Inventarios', 'S/N', '983 166 2380', 'Madre', NULL, NULL, 'Calle: 51, #S/N, Entre: 60, Col.: Javier Rojo Gomez'),
(84, 'Veronica', 'Heredia', 'Diaz', 'Q.F.B', '26 713 22', '983 112 9063', 'Madre', NULL, NULL, 'Calle: 55, #881-A, Entre: Esquina-78, Col.: '),
(85, 'Marisa ', 'Malha', 'BÃ©', 'Profesora', '83 411 35', '983 700 6945', 'Madre', NULL, NULL, 'Calle: 65, #S/N, Entre: 50 y 52, Col.: Cecilio Chi'),
(86, 'Felipe Neri', 'Caamal', 'Acosta', 'Profesor', 'S/N', '983 124 9500', 'Padre', NULL, NULL, 'Calle: 63, #S/N, Entre: 48, Col.: Lazaro Cardenaz'),
(87, 'N/A', 'N/A', 'N/A', 'N/A', 'S/N', 'N/A', 'N/A', NULL, NULL, 'Calle: S/N, #S/N, Entre: S/N, Col.: S/N'),
(88, 'Luisa Angelica', 'Flota', 'Castillo', 'Auxiliar Contable', '26 711 75', '983 124 7642', 'Madre', NULL, NULL, 'Calle: 68, #775, Entre: 67 y 69, Col.: Centro'),
(89, 'N/A', 'N/A', 'N/A', 'N/A', 'S/N', 'N/A', 'N/A', NULL, NULL, 'Calle: 75, #706, Entre: 60 y 62, Col.: Leona Vicario'),
(102, 'N/A', 'N/A', 'N/A', 'N/A', 'S/N', 'S/N', 'N/A', 'S/N', 'N/A', 'Calle: Av. Benito Juarez, #S/N, Entre: 65 y 67, Col.: Centro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `category` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `category`, `photo`) VALUES
(1, 'luis', '12345', 'direccion', 'IMG.png'),
(2, 'lucas', '12345', 'controlescolar', 'default.png'),
(14, 'luis', '12345', 'maestro', 'IMG.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `academic_info`
--
ALTER TABLE `academic_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indices de la tabla `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id_class`);

--
-- Indices de la tabla `croquis`
--
ALTER TABLE `croquis`
  ADD PRIMARY KEY (`id_map`);

--
-- Indices de la tabla `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id_eval`);

--
-- Indices de la tabla `groups_nc`
--
ALTER TABLE `groups_nc`
  ADD PRIMARY KEY (`id_group`);

--
-- Indices de la tabla `info_extrast`
--
ALTER TABLE `info_extrast`
  ADD PRIMARY KEY (`id_docto`);

--
-- Indices de la tabla `naatik_course`
--
ALTER TABLE `naatik_course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indices de la tabla `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indices de la tabla `scholar`
--
ALTER TABLE `scholar`
  ADD PRIMARY KEY (`id_grant`);

--
-- Indices de la tabla `sep`
--
ALTER TABLE `sep`
  ADD PRIMARY KEY (`id_sep`);

--
-- Indices de la tabla `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id_sponsor`);

--
-- Indices de la tabla `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);

--
-- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id_task`);

--
-- Indices de la tabla `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teacher`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id_tutor`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `academic_info`
--
ALTER TABLE `academic_info`
  MODIFY `id_info` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT de la tabla `classes`
--
ALTER TABLE `classes`
  MODIFY `id_class` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `croquis`
--
ALTER TABLE `croquis`
  MODIFY `id_map` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT de la tabla `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id_eval` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de registro', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `groups_nc`
--
ALTER TABLE `groups_nc`
  MODIFY `id_group` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `info_extrast`
--
ALTER TABLE `info_extrast`
  MODIFY `id_docto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT de la tabla `naatik_course`
--
ALTER TABLE `naatik_course`
  MODIFY `id_course` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `scholar`
--
ALTER TABLE `scholar`
  MODIFY `id_grant` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT de la tabla `sep`
--
ALTER TABLE `sep`
  MODIFY `id_sep` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del registro', AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT de la tabla `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id_sponsor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id_task` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT de la tabla `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_teacher` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id_tutor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
