-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2020 at 02:06 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caponweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `entrainement`
--

DROP TABLE IF EXISTS `entrainement`;
CREATE TABLE IF NOT EXISTS `entrainement` (
  `idEntrainement` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(50) NOT NULL,
  `date_entrainement` date DEFAULT NULL,
  `heure_debut` time DEFAULT NULL,
  `heure_fin` time DEFAULT NULL,
  `idUsers` int(11) NOT NULL,
  PRIMARY KEY (`idEntrainement`),
  KEY `idUsers` (`idUsers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inscription_contest`
--

DROP TABLE IF EXISTS `inscription_contest`;
CREATE TABLE IF NOT EXISTS `inscription_contest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `choixSJ` varchar(50) DEFAULT NULL,
  `licence` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `reservation` int(11) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `newsarticles`
--

DROP TABLE IF EXISTS `newsarticles`;
CREATE TABLE IF NOT EXISTS `newsarticles` (
  `idNews` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `descriptionArticles` varchar(255) DEFAULT NULL,
  `pictures` varchar(255) DEFAULT NULL,
  `confirmation` tinyint(4) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idNews`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsarticles`
--

INSERT INTO `newsarticles` (`idNews`, `name`, `mail`, `subject`, `descriptionArticles`, `pictures`, `confirmation`, `date_creation`) VALUES
(1, 'Ibra', 'ibra@hotmail.com', 'qui suis je', 'depuis mon jeune, j\'aime rigoler, je deteste Maxime car c\'est un idiot', NULL, 1, '2020-05-19 13:57:30'),
(2, 'Ibra', 'ibra@hotmail.com', 'qui suis je', 'depuis mon jeune, j\'aime rigoler, je deteste Maxime car c\'est un idiot', NULL, 1, '2020-05-19 13:57:33'),
(3, 'test', 'ibrahima.conde@hotmail.com', 'test', 'est-ce que cela marche', NULL, 1, '2020-05-19 13:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `trn_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type` varchar(100) DEFAULT 'membre',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`, `user_type`) VALUES
(1, 'alexis', 'alexis@hotmail.com', '059bf68f71c80fce55214b411dd2280c', '2020-05-19 13:49:08', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entrainement`
--
ALTER TABLE `entrainement`
  ADD CONSTRAINT `idUsers` FOREIGN KEY (`idUsers`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
