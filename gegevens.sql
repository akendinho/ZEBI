-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 sep 2022 om 10:07
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuzedelen2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gegevens`
--

CREATE TABLE `gegevens` (
  `Keuze1` varchar(150) NOT NULL,
  `Keuze2` varchar(150) NOT NULL,
  `Keuze3` varchar(150) NOT NULL,
  `Naam` varchar(150) NOT NULL,
  `Opleiding` varchar(150) NOT NULL,
  `Schoolmail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gegevens`
--

INSERT INTO `gegevens` (`Keuze1`, `Keuze2`, `Keuze3`, `Naam`, `Opleiding`, `Schoolmail`) VALUES
('Microcontrollers', 'Microcontrollers', 'Microcontrollers', 'Berend', 'Softwarer developer', '900722@student.zadkine.nl'),
('Microcontrollers', 'Microcontrollers', 'Microcontrollers', 'Berend', 'Softwarer developer', '9007242@student.zadkine.nl');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gegevens`
--
ALTER TABLE `gegevens`
  ADD PRIMARY KEY (`Schoolmail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
