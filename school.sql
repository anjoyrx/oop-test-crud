-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 feb 2023 om 12:33
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studenten`
--

CREATE TABLE `studenten` (
  `studentid` int(11) NOT NULL,
  `opleiding` varchar(30) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `postcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `studenten`
--

INSERT INTO `studenten` (`studentid`, `opleiding`, `naam`, `postcode`) VALUES
(1, 'netwerken', 'Dik Vuik', '3012VF'),
(3, 'Bank en verzekeren', 'Martin Visser', '2022BN'),
(99, 'software developer', 'Juliana Blokland', '3030tR');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `studenten`
--
ALTER TABLE `studenten`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `studenten`
--
ALTER TABLE `studenten`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
