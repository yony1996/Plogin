-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2020 a las 01:52:54
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idP` mediumint(5) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` varchar(255) NOT NULL,
  `Tamano` varchar(255) NOT NULL,
  `id` mediumint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idP`, `Nombre`, `Precio`, `Tamano`, `id`) VALUES
(1, 'pollos', '6', '3', 0),
(2, 'pollos', '4', 'pequeÃ±os', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` mediumint(5) NOT NULL,
  `Users` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `Users`, `Email`, `Password`, `Role`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$Hl7CPJ2o7F1HeMhYP0C.me5d5i5gyQAvGz/1/uKrTbXQX.rk2fXzi', '1'),
(2, 'vladi', 'vladi@gmail.com', '$2y$10$oQHmAxMa/KWhWflXTiHH9OfY90ecxaKpC1XjE.uzZ8SeRqP4fzhye', '2'),
(3, 'nestle', 'nestle@gmail.com', '$2y$10$RRuZ7l83iSr2JbA2aLdh7OQ5bbxgJ.M5Np3FQBwinyPc8rQphUdmu', '3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idP`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idP` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
