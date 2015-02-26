-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 22 jan 2015 kl 12:56
-- Serverversion: 5.6.17
-- PHP-version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `bl`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `inlagg`
--

CREATE TABLE IF NOT EXISTS `inlagg` (
  `inlagg_pk` int(100) NOT NULL AUTO_INCREMENT,
  `bild` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `rubrik` varchar(100) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`inlagg_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumpning av Data i tabell `inlagg`
--

INSERT INTO `inlagg` (`inlagg_pk`, `bild`, `text`, `rubrik`, `datum`) VALUES
(7, 'hej.jpg', 'hÃ¥rd kodad text', 'test', '2015-01-22 11:46:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
