
-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2020 at 12:57 PM
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

DELIMITER ;

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'ibra-yves', 'ibrahima.conde@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-08 20:15:53'),
(4, 'maxime', 'coronavirus@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-10 11:49:18'),
(3, 'Toto', 'ibrahima.conde@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-08 20:31:32'),
(5, 'test1', 'test1@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-11 09:36:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
