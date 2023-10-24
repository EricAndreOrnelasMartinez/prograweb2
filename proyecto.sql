-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-10-2023 a las 10:41:09
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

CREATE TABLE IF NOT EXISTS `kardex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `seccion` varchar(50) NOT NULL,
  `periodo` varchar(50) NOT NULL,
  `cfo` float NOT NULL,
  `ext` float NOT NULL,
  `reg` float NOT NULL,
  `cf` float NOT NULL,
  `creditos` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Volcar la base de datos para la tabla `kardex`
--

INSERT INTO `kardex` (`id`, `matricula`, `semestre`, `materia`, `seccion`, `periodo`, `cfo`, `ext`, `reg`, `cf`, `creditos`, `status`) VALUES
(1, 182085, 1, 'Física I', 'T01A', '20231S', 8.4, 0, 0, 8.4, 8, 'Aprobado'),
(2, 182085, 1, 'Introducción a la Comput10ión', 'T02D', '20223S', 9.7, 0, 0, 9.7, 8, 'Aprobado'),
(3, 182085, 1, 'CNG I Desarrollo del Pensamiento Crítico', 'T03D', '20223S', 8.9, 0, 0, 8.9, 7, 'Aprobado'),
(4, 182085, 1, 'Matemáticas I', 'T04D', '20231S', 9.02, 0, 0, 9.02, 8, 'Aprobado'),
(5, 182085, 1, 'Inglés I', 'REV', '20223S', 10, 0, 0, 10, 8, 'Aprobado'),
(6, 182085, 1, 'Proyecto Integrador de Matemáticas', '', '', 0, 0, 0, 0, 0, '-'),
(7, 182085, 2, 'Física II', 'C03A', '20232S', 9.2, 0, 0, 9.2, 8, 'Aprobado'),
(8, 182085, 2, 'Program10ión I', 'T07A', '20231S', 9.1, 0, 0, 9.1, 8, 'Aprobado'),
(9, 182085, 2, 'CNG II Comunic10ión e Investig10ión', 'N02D', '20233S', 0, 0, 0, 0, 0, '-'),
(10, 182085, 2, 'Matemáticas II', 'T09A', '20233S', 0, 0, 0, 0, 0, '-'),
(11, 182085, 2, 'Inglés II', 'REV', '20223S', 10, 0, 0, 10, 8, 'Aprobado'),
(12, 182085, 2, 'CNO I Program10ión Web I', 'T10F', '20231S', 8.9, 0, 0, 8.9, 7, 'Aprobado'),
(13, 182085, 3, 'Química', '', '', 0, 0, 0, 0, 0, '-'),
(14, 182085, 3, 'Program10ión II', 'T13B', '20233S', 0, 0, 0, 0, 0, '-'),
(15, 182085, 3, 'Inglés III', 'REV', '20223S', 10, 0, 0, 10, 8, 'Aprobado'),
(16, 182085, 3, 'Matemáticas III', 'T14A', '20231S', 6.5, 7, 0, 7, 9, 'Aprobado'),
(17, 182085, 3, 'Matemáticas Discretas', '', '', 0, 0, 0, 0, 0, '-'),
(18, 182085, 3, 'CNO II Program10ión Web II', 'T15A', '20233S', 0, 0, 0, 0, 0, '-'),
(19, 182085, 4, 'Circuitos Eléctricos', 'E19A', '20233S', 0, 0, 0, 0, 0, '-'),
(20, 182085, 4, 'Curso del Núcleo General III: Filosofía y Valores', '', '', 0, 0, 0, 0, 0, '-'),
(21, 182085, 4, 'Probabilidad y Estadística', 'E21A', '20233S', 0, 0, 0, 0, 0, '-'),
(22, 182085, 4, 'Proyecto Integrador y Comprensivo I', '', '', 0, 0, 0, 0, 0, '-'),
(23, 182085, 4, 'Program10ión III', '', '', 0, 0, 0, 0, 0, '-'),
(24, 182085, 4, 'Inglés IV', 'REV', '20223S', 10, 0, 0, 10, 8, 'Aprobado'),
(25, 182085, 5, 'Sistemas Operativos', '', '', 0, 0, 0, 0, 0, '-'),
(26, 182085, 5, 'Inglés V', 'REV', '20223S', 10, 0, 0, 10, 8, 'Aprobado'),
(27, 182085, 5, 'Matemáticas IV', '', '', 0, 0, 0, 0, 0, '-'),
(28, 182085, 5, 'Sistemas Digitales', '', '', 0, 0, 0, 0, 0, '-'),
(29, 182085, 5, 'Análisis y Diseño de Algoritmos', '', '', 0, 0, 0, 0, 0, '-'),
(30, 182085, 5, 'Curso del Núcleo Optativo III', '', '', 0, 0, 0, 0, 0, '-'),
(31, 182085, 6, 'Lenguajes de Program10ión', '', '', 0, 0, 0, 0, 0, '-'),
(32, 182085, 6, 'Curso del Núcleo General IV: Creatividad', '', '', 0, 0, 0, 0, 0, '-'),
(33, 182085, 6, 'Ingeniería de Software I', '', '', 0, 0, 0, 0, 0, '-'),
(34, 182085, 6, 'Arquitectura de Computadoras', '', '', 0, 0, 0, 0, 0, '-'),
(35, 182085, 6, 'Taller de Desarrollo Empresarial', '', '', 0, 0, 0, 0, 0, '-'),
(36, 182085, 6, 'Proyecto Integrador y Comprensivo II', '', '', 0, 0, 0, 0, 0, '-'),
(37, 182085, 7, 'Teoría Comput10ional', '', '', 0, 0, 0, 0, 0, '-'),
(38, 182085, 7, 'Taller de Creatividad y Emprendedores', '', '', 0, 0, 0, 0, 0, '-'),
(39, 182085, 7, 'Ingeniería de Software II', '', '', 0, 0, 0, 0, 0, '-'),
(40, 182085, 7, 'Base de Datos', '', '', 0, 0, 0, 0, 0, '-'),
(41, 182085, 7, 'Organiz10ión Comput10ional', '', '', 0, 0, 0, 0, 0, '-'),
(42, 182085, 7, 'Curso del Núcleo Optativo IV', '', '', 0, 0, 0, 0, 0, '-'),
(43, 182085, 8, 'Inteligencia Artificial I', '', '', 0, 0, 0, 0, 0, '-'),
(44, 182085, 8, 'Curso del Núcleo General V: Desarrollo de Competencias', '', '', 0, 0, 0, 0, 0, '-'),
(45, 182085, 8, 'Minería de Datos', '', '', 0, 0, 0, 0, 0, '-'),
(46, 182085, 8, 'Redes de Computadoras', '', '', 0, 0, 0, 0, 0, '-'),
(47, 182085, 8, 'Proyecto Integrador y Comprensivo III', '', '', 0, 0, 0, 0, 0, '-'),
(48, 182085, 8, 'Curso del Núcleo Optativo V', '', '', 0, 0, 0, 0, 0, '-'),
(49, 182085, 9, 'Compiladores', '', '', 0, 0, 0, 0, 0, '-'),
(50, 182085, 9, 'Residencia Profesional', '', '', 0, 0, 0, 0, 0, '-'),
(51, 182085, 9, 'Comercio Electrónico', '', '', 0, 0, 0, 0, 0, '-'),
(52, 182085, 9, 'Sistemas Virtuales', '', '', 0, 0, 0, 0, 0, '-'),
(53, 182085, 9, 'Inteligencia Artificial II', '', '', 0, 0, 0, 0, 0, '-'),
(54, 182085, 9, 'Proyecto Profesional', '', '', 0, 0, 0, 0, 0, '-'),
(55, 182085, 9, 'Curso del Núcleo Optativo VI', '', '', 0, 0, 0, 0, 0, '-'),
(56, 182085, 30, 'Taller para Certific10ión Office', 'T60D', '20223S', 9.08, 0, 0, 9.08, 0, 'Aprobado'),
(57, 182085, 30, 'Inglés KET Intro', 'REV', '20223S', 10, 0, 0, 10, 0, 'Aprobado'),
(58, 182085, 30, 'Inglés-FCE I', 'I07N', '20223S', 5.75, 0, 0, 5.75, 0, '-'),
(59, 182085, 30, 'Inglés-PET II', 'REV', '20223S', 10, 0, 0, 10, 0, 'Aprobado'),
(60, 182085, 30, 'Introducción a las Matemáticas', 'T61D', '20223S', 8.6, 0, 0, 8.6, 0, 'Aprobado'),
(61, 182085, 30, 'Introducción a la Física', 'T62D', '20223S', 8, 0, 0, 8, 0, 'Aprobado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
