-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2024 a las 20:10:08
-- Versión del servidor: 8.0.36
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `britney`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int NOT NULL,
  `titulo` text NOT NULL,
  `texto` text NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `categoria`, `fecha`) VALUES
(37, 'Nueva promocion de Nervion', '145 viendas de lujo en urbanizacion ajardinada situadas en un entorno privilejiado', 'promociones', '2024-04-18'),
(37, 'Nueva promocion de Nervion', '145 viendas de lujo en urbanizacion ajardinada situadas en un entorno privilejiado', 'promociones', '2024-04-18'),
(38, 'Lanzamiento del nuevo iPhone 15', 'Apple presenta su último modelo de teléfono con nuevas funciones y un diseño innovador.', 'tecnología', '2024-04-18'),
(39, 'Descubrimiento de nueva especie de mariposa en la Amazonía', 'Científicos han identificado una especie única de mariposa en la selva amazónica, un hallazgo que podría tener importantes implicaciones para la conservación.', 'ciencia', '2024-04-18'),
(40, 'Estreno de la nueva película de Marvel Studios', 'Los fanáticos esperan con ansias el estreno de la última entrega del Universo Cinematográfico de Marvel, que promete ser un éxito en taquilla.', 'entretenimiento', '2024-04-18'),
(41, 'Avances en la investigación sobre la cura del cáncer', 'Investigadores anuncian importantes avances en el desarrollo de terapias dirigidas para el tratamiento del cáncer, ofreciendo esperanza a millones de pacientes en todo el mundo.', 'salud', '2024-04-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Precio` float DEFAULT NULL,
  `Cantidad` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
