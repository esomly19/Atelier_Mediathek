-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 04 nov. 2019 à 14:13
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mediatheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_image` int(11) DEFAULT NULL,
  `titre` varchar(55) NOT NULL,
  `description_doc` varchar(255) NOT NULL,
  `code` varchar(10) NOT NULL,
  `etat` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

DROP TABLE IF EXISTS `emprunter`;
CREATE TABLE IF NOT EXISTS `emprunter` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_document` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date_emprunt` date NOT NULL,
  `date_retour` date NOT NULL,
  `date_limite` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_document` (`id_document`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_genre` varchar(55) NOT NULL,
  `description_genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_genre`),
  UNIQUE KEY `id_genre` (`id_genre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(55) NOT NULL,
  `description_image` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id_image`),
  UNIQUE KEY `id_image` (`id_image`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(55) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `date_adhesion` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
