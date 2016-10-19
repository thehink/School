-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Värd: localhost:3306
-- Tid vid skapande: 19 okt 2016 kl 12:05
-- Serverversion: 5.5.49-log
-- PHP-version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `contacts`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL,
  `handle` varchar(50) DEFAULT NULL,
  `socialMedia_id` int(10) unsigned DEFAULT NULL,
  `people_id` int(10) unsigned DEFAULT NULL,
  `profileUrl` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `accounts`
--

INSERT INTO `accounts` (`id`, `handle`, `socialMedia_id`, `people_id`, `profileUrl`) VALUES
(2, '@Thehink2', 1, 1, 'https://twitter.com/thehink2'),
(3, '@Benji', 2, 1, 'https://facebook.com/asdasd'),
(4, '@Kristjan', 2, 2, 'https://facebook.com/asdasd'),
(5, '@Kristjan', 1, 2, 'https://facebook.com/asdasd'),
(6, '@Kristjan', 3, 2, 'https://facebook.com/asdasd'),
(8, '@FFFF', 2, NULL, 'https://facebook.com/FFFFF');

-- --------------------------------------------------------

--
-- Tabellstruktur `gear`
--

CREATE TABLE IF NOT EXISTS `gear` (
  `id` int(11) NOT NULL,
  `people_id` int(10) unsigned DEFAULT NULL,
  `maker` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `gear`
--

INSERT INTO `gear` (`id`, `people_id`, `maker`, `model`, `type`) VALUES
(1, 1, 'Clevo', 'P651RP6-G', 'laptop'),
(2, 2, 'Apple', 'Macbook Pro', 'laptop'),
(3, 9, 'Apple', 'MacBook Pro (Retina, 15-inch, Mid 2015)', 'laptop'),
(5, 8, 'Apple', 'MacBook Pro (Retina, 15-inch, Mid 2015)', 'laptop');

-- --------------------------------------------------------

--
-- Tabellstruktur `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL,
  `firstName` varchar(80) NOT NULL,
  `lastName` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `gear_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `people`
--

INSERT INTO `people` (`id`, `firstName`, `lastName`, `email`, `phone`, `gear_id`) VALUES
(1, 'Benjamin', 'Rizk', 'benja280@gmail.com', '0760516676', 1),
(2, 'Kristjan', 'Frederiksen', 'kristjan@kristjan.se', '12345678', 2),
(3, 'Joakim', 'Remler', 'joakim@idrottskoll.se', '0733093086', NULL),
(4, 'Lars', 'Karlsson', 'lars@kajes.se', '0739-68 80 41', NULL),
(5, 'Katarina', 'Chernyavskaya', 'katarina.chernyavskaya@gmail.com', '0760830390', NULL),
(6, 'Marie', 'Eriksson', 'eriksson.km@gmail.com', '0736222424', NULL),
(7, 'Staffan', 'Mowitz', 'staffan.mowitz@gmail.com', '0706805101', NULL),
(8, 'Signe', 'Bjelkenäs', 'signe.bjelke@gmail.com', '076 241 31 58', 5),
(9, 'Jeremy', '', 'jerdan0711@skola.goteborg.se', NULL, 3);

-- --------------------------------------------------------

--
-- Tabellstruktur `socialmedia`
--

CREATE TABLE IF NOT EXISTS `socialmedia` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `name`, `url`) VALUES
(1, 'Twitter', 'https://twitter.com/'),
(2, 'Facebook', 'https://facebook.com/'),
(3, 'Google +', 'https://plus.google.com/');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `gear`
--
ALTER TABLE `gear`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT för tabell `gear`
--
ALTER TABLE `gear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT för tabell `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT för tabell `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
