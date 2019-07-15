-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Jul 2019 um 17:22
-- Server-Version: 10.3.16-MariaDB
-- PHP-Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_matthias_bruckbeck_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_firstName` varchar(15) NOT NULL,
  `author_lastName` varchar(15) NOT NULL,
  `author_media` varchar(20) NOT NULL,
  `genre` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `authors`
--

INSERT INTO `authors` (`author_id`, `author_firstName`, `author_lastName`, `author_media`, `genre`) VALUES
(1, 'Richard', 'Schwartz', 'Book', 1),
(2, 'Markus', 'Heitz', 'Book', 2),
(3, 'Patrick', 'Rothfuss', 'Book', 2),
(4, 'John', 'Doe', 'DVD', 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `genre`
--

CREATE TABLE `genre` (
  `genre_nr` int(11) NOT NULL,
  `genre` enum('Novel','Fiction','Biography','SF','Horror','Children','Fantasy') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `genre`
--

INSERT INTO `genre` (`genre_nr`, `genre`) VALUES
(1, 'Novel'),
(2, 'Fantasy'),
(3, 'SF'),
(4, 'Horror'),
(5, 'Biography'),
(6, 'Children'),
(7, 'Fiction');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `ISBN` int(11) NOT NULL,
  `media_description` varchar(255) NOT NULL,
  `media_type` enum('CD','Book','DVD') DEFAULT NULL,
  `media_status` enum('available','not available') DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `genre_nr` int(11) DEFAULT NULL,
  `media_name` varchar(25) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`ISBN`, `media_description`, `media_type`, `media_status`, `publisher_id`, `author_id`, `genre_nr`, `media_name`, `active`, `publish_date`) VALUES
(4, 'lorem ipusm', 'Book', 'available', 1, 1, 2, 'test', 0, '2016-04-01'),
(5, 'cd1 description', 'CD', 'not available', 2, 3, 5, 'media_name', 0, '2012-12-05'),
(6, 'it is a nice movie', 'DVD', 'available', 1, 3, 6, 'media_name', 0, '2018-01-03'),
(7, 'horror ', 'Book', 'not available', 3, 4, 4, 'media_name', 0, '2066-12-21');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(15) NOT NULL,
  `publisher_address` varchar(20) NOT NULL,
  `publisher_size` enum('small','medium','big') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_address`, `publisher_size`) VALUES
(1, 'Piper', 'Müncher', 'big'),
(2, 'Audible', 'New Jersey', 'big'),
(3, 'Klett-Cotta', 'Stuttgart', 'medium'),
(4, 'DVD-Publisher', 'Vienna', 'small');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indizes für die Tabelle `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_nr`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `genre_nr` (`genre_nr`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_nr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `ISBN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `media_ibfk_3` FOREIGN KEY (`genre_nr`) REFERENCES `genre` (`genre_nr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
