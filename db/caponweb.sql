-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2020 at 04:43 PM
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

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `GetUserByEmail`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetUserByEmail` (IN `mail` VARCHAR(255))  BEGIN
	SELECT * FROM users WHERE email = mail;
END$$

DROP PROCEDURE IF EXISTS `GetUsers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetUsers` (IN `users` VARCHAR(255))  BEGIN
	SELECT * FROM users;
END$$

DROP PROCEDURE IF EXISTS `insertNews`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertNews` (IN `name` VARCHAR(255), IN `mail` VARCHAR(255), IN `subject` VARCHAR(255), IN `description` VARCHAR(255), IN `pictures` VARCHAR(255), IN `confirmation` BOOLEAN)  NO SQL
INSERT into newsarticles (name,mail,subject,descriptionArticles,pictures, confirmation) VALUES (name, mail, subject, description, pictures, confirmation)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `entrainement`
--

DROP TABLE IF EXISTS `entrainement`;
CREATE TABLE IF NOT EXISTS `entrainement` (
  `entrainementID` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `lieu` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `heureDebut` time DEFAULT NULL,
  `heureFin` time DEFAULT NULL,
  PRIMARY KEY (`entrainementID`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entrainement`
--

INSERT INTO `entrainement` (`entrainementID`, `id`, `lieu`, `date`, `heureDebut`, `heureFin`) VALUES
(1, 1, 'Avenue du ciseau', '2020-03-18', '13:12:00', '15:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `newsarticles`
--

DROP TABLE IF EXISTS `newsarticles`;
CREATE TABLE IF NOT EXISTS `newsarticles` (
  `idNews` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `descriptionArticles` varchar(255) NOT NULL,
  `pictures` varchar(255) DEFAULT NULL,
  `confirmation` tinyint(1) NOT NULL,
  PRIMARY KEY (`idNews`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsarticles`
--

INSERT INTO `newsarticles` (`idNews`, `name`, `mail`, `subject`, `descriptionArticles`, `pictures`, `confirmation`) VALUES
(11, 'maxime', 'mxm.lbr@outlook.com', 'La vitesse infinie des avions', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ', './images/cargo_air_big.jpg', 1),
(17, 'Nico', 'mxm.lbr@outlook.com', 'Du jamais vu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ', '', 1),
(16, 'Max', 'mxm.lbr@outlook.com', 'vol spectaculaire', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ', '', 1),
(15, 'Ibrahima', 'ib.conde@hotmail.com', 'Course a pied', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'ibra-yves', 'ibrahima.conde@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-08 20:15:53'),
(4, 'maxime', 'coronavirus@hotmail.com', 'test', '2020-03-10 11:49:18'),
(3, 'Toto', 'ibrahima.conde@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-08 20:31:32'),
(5, 'test1', 'test1@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-11 09:36:27'),
(6, 'test', 'test@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-19 13:03:53'),
(7, 'maxime', 'm@outlook.com', 'b238c13e822536cad3ac57a2280fbf45', '2020-03-19 13:30:58'),
(8, 'maxibra', 'mxm.lbr@outlook.com', '098f6bcd4621d373cade4e832627b4f6', '2020-04-05 12:10:47'),
(9, 'pute', 'pute@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-04-05 12:46:01'),
(10, 'liberm', 'test@hotmail.com', 'accc9105df5383111407fd5b41255e23', '2020-04-11 12:02:51'),
(11, 'IBRACRIE', 'ibracrie@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-04-16 16:08:38'),
(12, 'maxtest', 'maxtest@pute.com', '098f6bcd4621d373cade4e832627b4f6', '2020-04-16 17:28:12'),
(13, 'soso', 'soso@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-04-16 17:55:12'),
(14, 'ceciestuntest', 'mxm.lbr@test.com', 'f6fb5eeb3e0bd744eaf3e8d76b5783ab', '2020-04-19 11:04:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
