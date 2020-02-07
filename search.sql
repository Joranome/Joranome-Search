-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2020 a las 21:16:48
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `search`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `url` varchar(300) NOT NULL,
  `Tema` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id`, `Nombre`, `url`, `Tema`) VALUES
(1, 'NationalGeographic', 'https://www.nationalgeographic.com.es/animales', 'animales'),
(2, 'Wikipedia', 'https://es.wikipedia.org/wiki/Thylacinus_cynocephalus', 'Tilacino'),
(3, 'BBC', 'https://www.bbc.com/mundo/noticias-37331682', 'Tilacino'),
(4, 'Facebook', 'https://www.facebook.com/', 'Facebook'),
(5, 'Whatsapp', 'https://web.whatsapp.com/', 'Whatsapp'),
(6, 'Google', 'https://www.google.com/', 'Google'),
(7, 'Wikipedia', 'https://www.wikipedia.org/', 'Wikipedia'),
(8, 'Youtube', 'https://www.youtube.com/', 'youtube'),
(9, 'ElPais', 'https://elpais.com/elpais/2018/01/02/ciencia/1514896578_119279.html', 'tilacino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
