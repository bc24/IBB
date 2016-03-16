-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Mrz 2016 um 12:07
-- Server-Version: 10.1.10-MariaDB
-- PHP-Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `gruppe1`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `preise`
--

CREATE TABLE `preise` (
  `Bezeichnung` varchar(40) COLLATE utf8mb4_german2_ci DEFAULT NULL,
  `Kategorie` varchar(40) COLLATE utf8mb4_german2_ci DEFAULT NULL,
  `Nettopreis` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `preise`
--

INSERT INTO `preise` (`Bezeichnung`, `Kategorie`, `Nettopreis`) VALUES
('Harry Potter und ein Stein', 'Buch', 16.764705882352942),
('David Bowie - Best of', 'CD', 8.361344537815127),
('Raspberry Pi3', 'Elektronik', 25.210084033613448),
('SSD Disk 120GB', 'Elektronik', 31.932773109243698),
('Vogelfutter 1Kg', 'Tiere', 2.100840336134454),
('Lötkolben 15W', 'Elektronik', 10.084033613445378),
('SQL Grundlagen', 'Buch', 10.504201680672269),
('Far Cry 4', 'Spiele', 50.420168067226896),
('Plasma Lautsprecher', 'Hifi', 1091.5966386554621),
('Tom Clancy´s', 'Spiele', 49.57983193277311);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
