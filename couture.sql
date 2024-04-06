-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 11:32 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `couture`
--

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`titre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`titre`, `description`, `image`) VALUES
('Couture avancée', 'pour apprendre à créer les patrons et à coudre des modèles plus difficiles.\r\nLe cours est tenu par Marion Mai, couturière professionnelle qui a travaillé dans la haute\r\ncouture pendant de nombreuses années. Il est structuré sur 10 semaines avec des cours en\r\nligne d’une heure par semaine.', 'coursimg3.png'),
('Couture pour debutans', ' pour apprendre les techniques de base, telles que l’utilisation de la\r\nmachine à coudre, la réalisation d’ourlets, la pose de fermeture éclair, de boutons, etc. Le\r\ncours est tenu par Michelle Legrand, une couturière professionnelle. Il est structuré sur 4\r\nsemaines, avec des cours en ligne d’une heure par semaine.', 'coursimg1.png'),
('Couture pour patrons', 'pour apprendre à utiliser les patrons. Le cours offre des patrons de\r\nbase pour des modèles de pantalons, jupes et pulls. Il est tenu par Lucas Chardons, un\r\ncouturier professionnel. Il est structuré sur 6 semaines avec des cours en ligne d’une heure\r\npar semaine.', 'coursimg22.png');

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `titre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telephone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nom`, `prenom`, `email`, `password`, `telephone`) VALUES
('diop', 'moussa', 'mdiop8862@gmail.com', '766358520', '0753086955'),
('diop', 'moussa', 'mdiop8862@gmail.com', '766358520', '0753086955'),
('diop', 'moussa', 'mdiop8863@gmail.com', '791b461adae25a93ada48e1cb26639ff', 'mdiop8863@gmail.com'),
('ndiaye', 'youssou', 'youssou@gmail.com', 'd579385dd8f15bda985eae38b76fdbec', '0753086955'),
('diop', 'moussa', 'youssou2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '075308673'),
('ggg', 'vfff', 'f@gmail.com', '3a0b294ac74acdaee5baa0193fb46228', '66666'),
('sss', 'fff', 'd@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '2222'),
('pape', 'faye', 'pape@gmail.com', '202cb962ac59075b964b07152d234b70', '0753086944'),
('diop', 'moussa', 'moussa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0753086955');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
