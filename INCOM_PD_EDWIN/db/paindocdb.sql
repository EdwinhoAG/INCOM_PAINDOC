-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2023 a las 13:37:57
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paindocdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paindocalldata`
--

CREATE TABLE `paindocalldata` (
  `OB` int(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `side` varchar(3) NOT NULL,
  `bodySite` varchar(50) NOT NULL,
  `painful` int(3) NOT NULL,
  `period` varchar(100) NOT NULL,
  `dayTime` varchar(100) NOT NULL,
  `intervall` varchar(100) NOT NULL,
  `kind` varchar(100) NOT NULL,
  `impairment` varchar(100) NOT NULL,
  `painkillers` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paindocalldata`
--

INSERT INTO `paindocalldata` (`OB`, `name`, `side`, `bodySite`, `painful`, `period`, `dayTime`, `intervall`, `kind`, `impairment`, `painkillers`) VALUES
(1, 'Margit Meier', 'L', 'Knee', 8, '3 day', 'Morning, Night', 'Constant pain with slight fluctuations', 'Dull, Pungent', 'Sleeping, Cooking, Walking', 'Yes'),
(1, 'Margit Meier', 'R', 'Toe Big 1', 5, '2 month', 'Lunch, Afternoon', 'Constant pain with strong fluctuations', 'Throbbing, Hot ', 'Eating, Cooking, Laundry', 'No'),
(1, 'Margit Meier', 'B', 'Hip', 10, '1 month', 'The whole day', 'Constant pain with slight fluctuations', 'Burning, Hot, Pungent', 'Sleeping, Walking', 'Yes'),
(1, 'Margit Meier', 'R', 'Shoulder', 3, '2 week', 'Night', 'Pain attacks, painless in between', 'Knocking', '', 'No'),
(2, 'Helena Müller', 'R', 'Neck', 5, '2 week', 'The whole day', 'Constant pain with slight fluctuations', 'Oppressive', 'Gardening, Laundry, Swimming', 'No'),
(2, 'Helena Müller', 'L', 'Finger Middle 1', 8, '5 day', 'Morning', 'Pain attacks, also between', 'Pungent', 'Working, Car driving, Eating', 'Yes'),
(3, 'Sandra Huber', 'B', 'Hand', 7, '1 week', 'The whole day', 'Constant pain with strong fluctuations', 'Hot', 'Working, Cycling, Cooking, Eating, Gardening', 'Yes'),
(3, 'Sandra Huber', 'L', 'Hip', 4, '3 week', 'Afternoon', 'Pain attacks, also between', 'Pungent', 'Sitting', 'No'),
(3, 'Sandra Huber', 'B', 'Elbow', 5, '1 week', 'The whole day', 'Constant pain with strong fluctuations', 'Hot', 'Working, Cycling, Cooking, Eating, Gardening', 'Yes'),
(4, 'Emily Bartels', 'R', 'Ankle', 6, '1 week', 'Evening', 'Constant pain with slight fluctuations', 'Throbbing', 'Long standing, Running, Shopping', 'No'),
(4, 'Emily Bartels', 'B', 'Hand', 2, '2 day', 'The whole day', 'Constant pain with strong fluctuations', 'Pungent', 'Laundry, Cycling', 'No'),
(5, 'Xaver Kreitmeier', 'L', 'Shoulder', 4, '2 week', 'Afternoon', 'Pain attacks, painless in between', 'Throbbing', 'Laying, Sitting', 'No'),
(5, 'Xaver Kreitmeier', 'B', 'Head', 8, '6 day', 'Lunch', 'Pain attacks, also between', 'Pulling', 'Working, Car driving, Eating', 'Yes'),
(6, 'Miriam Klose', 'R', 'Head', 2, '5 week', 'Morning', 'Constant pain with slight fluctuations', 'Oppressive', 'Gardening, Laundry, Swimming', 'No'),
(6, 'Miriam Klose', 'L', 'Finger Ring 3', 8, '5 day', 'The whole day', 'Pain attacks, also between', 'Pungent', 'Working, Car driving, Eating', 'Yes'),
(7, 'Marie Schmidt', 'R', 'Foot', 5, '2 week', 'The whole day', 'Constant pain with slight fluctuations', 'Oppressive', 'Gardening, Laundry, Swimming', 'No'),
(7, 'Marie Schmidt', 'L', 'Head', 8, '5 day', 'Morning', 'Pain attacks, also between', 'Pungent', 'Working, Car driving, Eating', 'Yes'),
(8, 'Chiara Moreno', 'R', 'Neck', 5, '2 week', 'The whole day', 'Constant pain with slight fluctuations', 'Oppressive', 'Gardening, Laundry, Swimming', 'No'),
(9, 'Lena Rieder', 'R', 'Shoulder', 7, '1 week', 'Morning', 'Pain attacks, painless in between', 'Pulling', 'Eating, Showering', 'Yes'),
(9, 'Lena Rieder', 'R', 'Elbow', 1, '1 month', 'Morning', 'Pain attacks, painless in between', 'Dull', '', 'No'),
(9, 'Lena Rieder', 'B', 'Hip', 4, '3 day', 'The whole day', 'Constant pain with slight fluctuations', 'Hot, Burning', '', 'No'),
(10, 'Ivet Graus', 'R', 'Elbow', 6, '5 day', 'Lunch', 'Pain attacks, painless in between', 'Dull', 'Eating, Cooking, Sitting', 'No'),
(10, 'Ivet Graus', 'B', 'Finger Thumb 1', 8, '2 week', 'Evening', 'Constant pain with slight fluctuations', 'Burning', '', 'Yes'),
(10, 'Ivet Graus', 'L', 'Ankle', 4, '3 day', 'Morning', 'Pain attacks, also between', 'Throbbing', 'Laundry, Running, Gardening', 'Yes'),
(11, 'Marianne Weber', 'L', 'Neck', 1, '5 day', 'Morning', 'Constant pain with strong fluctuations', 'Throbbing', '', 'No'),
(11, 'Marianne Weber', 'L', 'Knee', 8, '6 week', 'Night', 'Pain attacks, painless in between', 'Pungent', 'Sleeping', 'Yes'),
(12, 'Julia Oberndorfer', 'L', 'Hand', 2, '1 day', 'Morning', 'Constant pain with strong fluctuations', 'Dull', '', 'No'),
(12, 'Julia Oberndorfer', 'B', 'Toe Big 1', 10, '4 day', 'Night, Morning', 'Pain attacks, also between', 'Knocking', 'Walking, Long standing, Cooking', 'Yes'),
(12, 'Julia Oberndorfer', 'B', 'Hip', 6, '3 week', 'Evening', 'Constant pain with slight fluctuations', 'Oppressive', 'Walking, Sitting', 'Yes'),
(12, 'Julia Oberndorfer', 'R', 'Elbow', 3, '2 month', 'The whole day', 'Constant pain with strong fluctuations', 'Oppressive', '', 'No'),
(13, 'Simon Wüst', 'R', 'Knee', 9, '2 week', 'The whole day', 'Pain attacks, also between', 'Dull', 'Running, Long standing', 'Yes'),
(13, 'Simon Wüst', 'R', 'Hand', 4, '3 day', 'Morning', 'Pain attacks, painless in between', 'Oppressive', '', 'No'),
(14, 'Hannelore Furthmeier', 'L', 'Shoulder', 5, '3 week', 'The whole day', 'Constant pain with slight fluctuations', 'Pungent', 'Dress', 'No'),
(14, 'Hannelore Furthmeier', 'R', 'Neck', 5, '3 week', 'The whole day', 'Constant pain with slight fluctuations', 'Pungent', 'Dress, Sitting', 'No'),
(14, 'Hannelore Furthmeier', 'R', 'Hip', 5, '3 week', 'Afternoon', 'Pain attacks, painless in between', 'Dull', '', 'No'),
(15, 'Luitpold Berger', 'L', 'Ankle', 4, '4 week', 'Afternoon', 'Constant pain with strong fluctuations', 'Throbbing', 'Walking', 'No'),
(15, 'Luitpold Berger', 'B', 'Head', 7, '7 day', 'Lunch', 'Pain attacks, also between', 'Oppressive', 'Working', 'Yes'),
(15, 'Luitpold Berger', 'B', 'Foot', 3, '2 day', 'The whole day', 'Constant pain with strong fluctuations', 'Burning', '', 'No'),
(15, 'Luitpold Berger', 'L', 'Toe Big 2', 4, '2 month', 'Night', 'Pain attacks, painless in between', 'Burning', 'Sleeping', 'No'),
(16, 'Thomas Ruf', 'L', 'Shoulder', 5, '2 week', 'Night', 'Constant pain with strong fluctuations', 'Throbbing', '', 'Yes'),
(16, 'Thomas Ruf', 'L', 'Head', 3, '1 week', 'Morning', 'Constant pain with slight fluctuations', 'Knocking', 'Working', 'No'),
(16, 'Thomas Ruf', 'R', 'Knee', 2, '4 day', 'The whole day', 'Constant pain with slight fluctuations', 'Hot', '', 'No'),
(17, 'Jonas Mühldorfer', 'L', 'Finger Index 3', 3, '1 week', 'The whole day', 'Pain attacks, painless in between', 'Oppressive', '', 'No'),
(17, 'Jonas Mühldorfer', 'R', 'Foot', 2, '3 day', 'Evening', 'Constant pain with slight fluctuations', 'Burning', '', 'No'),
(18, 'Hanna Haundorfer', 'R', 'Finger Ring 2', 4, '5 day', 'The whole day', 'Constant pain with strong fluctuations', 'Hot', '', 'No'),
(18, 'Hanna Haundorfer', 'R', 'Toe Ring 2', 3, '2 week', 'Morning', 'Pain attacks, painless in between', 'Pulling', 'Walking, Running', 'No'),
(18, 'Hanna Haundorfer', 'B', 'Hip', 7, '1 week', 'The whole day', 'Constant pain with slight fluctuations', 'Throbbing', 'Walking, Running, Sitting, Long standing', 'Yes'),
(19, 'James Jasso', 'B', 'Knee', 2, '1 day', 'Morning', 'Constant pain with strong fluctuations', 'Throbbing', '', 'No'),
(19, 'James Jasso', 'B', 'Ankle', 10, '1 week', 'The whole day', 'Pain attacks, also between', 'Oppressive', 'Walking, Long standing, Cooking, Shopping', 'Yes'),
(19, 'James Jasso', 'L', 'Elbow', 9, '4 day', 'Morning', 'Constant pain with slight fluctuations', 'Burning', 'Cooking, Laundry', 'Yes'),
(19, 'James Jasso', 'L', 'Hand', 5, '2 week', 'Night', 'Constant pain with slight fluctuations', 'Oppressive', 'Sleeping', 'Yes'),
(20, 'Irmgard Müller', 'L', 'Knee', 8, '1 month', 'Afternoon', 'Constant pain with strong fluctuations', 'Dull, Burning', 'Long standing, Working, Cycling', 'No'),
(20, 'Irmgard Müller', 'L', 'Hip', 2, '1 day', 'Lunch', 'Constant pain with slight fluctuations', 'Dull', 'Cycling', 'No'),
(20, 'Irmgard Müller', 'L', 'Shoulder', 5, '1 month', 'Night', 'Constant pain with strong fluctuations', 'Hot', 'Working', 'Yes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paindocdata`
--

CREATE TABLE `paindocdata` (
  `OB` int(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `side` varchar(3) NOT NULL,
  `bodySite` varchar(50) NOT NULL,
  `painful` int(3) NOT NULL,
  `period` varchar(100) NOT NULL,
  `dayTime` varchar(100) NOT NULL,
  `intervall` varchar(100) NOT NULL,
  `kind` varchar(100) NOT NULL,
  `impairment` varchar(100) NOT NULL,
  `painkillers` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paindocusers`
--

CREATE TABLE `paindocusers` (
  `ID` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paindocusers`
--
ALTER TABLE `paindocusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paindocusers`
--
ALTER TABLE `paindocusers`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
