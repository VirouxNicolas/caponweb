-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 mars 2020 à 13:20
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `caponweb`
--

DELIMITER $$
--
-- Procédures
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
-- Structure de la table `entrainement`
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
-- Déchargement des données de la table `entrainement`
--

INSERT INTO `entrainement` (`entrainementID`, `id`, `lieu`, `date`, `heureDebut`, `heureFin`) VALUES
(1, 1, 'Avenue du ciseau', '2020-03-18', '13:12:00', '15:13:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'ibra-yves', 'ibrahima.conde@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-08 20:15:53'),
(4, 'maxime', 'coronavirus@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-10 11:49:18'),
(3, 'Toto', 'ibrahima.conde@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-08 20:31:32'),
(5, 'test1', 'test1@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-11 09:36:27'),
(6, 'test', 'test@hotmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-03-19 13:03:53'),
(7, 'maxime', 'm@outlook.com', 'b238c13e822536cad3ac57a2280fbf45', '2020-03-19 13:30:58');
COMMIT;


CREATE USER 'nicolas'@'localhost' IDENTIFIED WITH mysql_native_password BY '*******';
GRANT ALL PRIVILEGES ON * . * TO 'nicolas'@'localhost';

CREATE USER 'admin'@'%%' IDENTIFIED BY '*******';
GRANT ALL PRIVILEGES ON * . * TO 'admin'@'%%';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
