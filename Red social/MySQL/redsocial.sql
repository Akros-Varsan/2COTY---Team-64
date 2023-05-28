-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2023 a las 16:39:20
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redsocial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `friendship`
--

CREATE TABLE `friendship` (
  `IDFriend` int(10) NOT NULL,
  `User1` varchar(15) NOT NULL,
  `User2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pictures`
--

CREATE TABLE `pictures` (
  `IDPhoto` int(11) NOT NULL,
  `User` varchar(15) NOT NULL,
  `PhotoName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `User` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Age` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `ProfilePhoto` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`User`, `Name`, `Lastname`, `Age`, `Description`, `ProfilePhoto`, `Email`, `Password`) VALUES
('', '', '', 0, '', 'IMG//profile.jpg', '', '$2y$10$Ze0Bc5ovXW/rLrZ97W56v.mJrd6KCVLe5L1CfoFfiJKHi1AUBCTXy'),
('Akros', 'Akbar', 'Vargas', 27, 'Hola Mundo', 'IMG/Akros/profile.jpg', 'akros.varsan16@gmail.com', '$2y$10$XicoOiSKOeooQgtDQkuP3esGcod6Xcb2JryBtgISwgBhFm40zYSOO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `friendship`
--
ALTER TABLE `friendship`
  ADD PRIMARY KEY (`IDFriend`),
  ADD KEY `Nickname1` (`User1`),
  ADD KEY `Nickname2` (`User2`);

--
-- Indices de la tabla `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`IDPhoto`),
  ADD KEY `Nickname` (`User`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `friendship`
--
ALTER TABLE `friendship`
  MODIFY `IDFriend` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `friendship`
--
ALTER TABLE `friendship`
  ADD CONSTRAINT `friendship_ibfk_1` FOREIGN KEY (`User1`) REFERENCES `user` (`User`) ON UPDATE CASCADE,
  ADD CONSTRAINT `friendship_ibfk_2` FOREIGN KEY (`User2`) REFERENCES `user` (`User`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`User`) REFERENCES `user` (`User`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
