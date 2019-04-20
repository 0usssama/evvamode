-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 20 avr. 2019 à 12:35
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
-- Base de données :  `evvamode`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(1) NOT NULL AUTO_INCREMENT,
  `nom_adm` varchar(30) NOT NULL,
  `prenom_adm` varchar(30) NOT NULL,
  `email_adm` varchar(30) NOT NULL,
  `tel_adm` varchar(15) NOT NULL,
  `username_adm` varchar(45) NOT NULL,
  `password_adm` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_adm`, `prenom_adm`, `email_adm`, `tel_adm`, `username_adm`, `password_adm`) VALUES
(1, 'yasm', 'selmati', 'yasmine@hotmail.com', '0552232320', 'yasmine', '$2y$10$TK6y04JLi1Ct0cVo49LowOAcYRUL.EAgx7joHAT5k3OpRkmCQYbEW');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_art` int(11) NOT NULL AUTO_INCREMENT,
  `nom_art` varchar(30) NOT NULL,
  `prix_art` decimal(10,0) NOT NULL,
  `url_img_art` varchar(100) NOT NULL,
  `descri_art` text NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_catg` int(11) DEFAULT NULL,
  `id_styls` int(11) DEFAULT NULL,
  `id_styl` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_art`),
  KEY `id_admin` (`id_admin`),
  KEY `id_catg` (`id_catg`),
  KEY `id_styls` (`id_styls`),
  KEY `id_styl` (`id_styl`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_art`, `nom_art`, `prix_art`, `url_img_art`, `descri_art`, `id_admin`, `id_catg`, `id_styls`, `id_styl`) VALUES
(4, 'caftan', '23000', 'styl.jpg', '\r\nQui ne connaÃ®t pas le karakou, le peignoir sÃ©tifien, la gandoura, la robe kabyle ou encore djebet fergani ? Ce sont des tenues traditionnelles que toute nouvelle mariÃ©e se doit dâ€™avoir dans son trousseau pour faire honneur au patrimoine de sa rÃ©gion ; câ€™est une fiertÃ©, presque un devoirâ€¦', NULL, 2, 1, 1),
(5, 'pantalon', '34000', 'mdawer (1).jpg', '\r\nA partir de la guerre de 14-18, ce pantalon se popularisera en Occident lorsque des rÃ©giments entiers de tirailleurs sÃ©nÃ©galais venus dâ€™Afrique dÃ©barquent sur le sol franÃ§ais. DÃ¨s lors, les femmes europÃ©ennes vont sâ€™y intÃ©resser. Le serouel aura trÃ¨s vite le vent en poupe grÃ¢ce Ã  un certain Paul Poiret qui, sÃ©duit par sa touche exotique, nâ€™hÃ©sitera pas Ã  le faire porter aux femmes de la haute sociÃ©tÃ© hexagonale. Il ira mÃªme jusquâ€™Ã  crÃ©er quelques modÃ¨les pour le cÃ©lÃ¨bre danseur russe Nijinsky dont il sera fascinÃ© par le talent. Ce dernier triomphera dâ€™ailleurs en 1909 avec son ballet russe de Diaghilev, sur la scÃ¨ne du ChÃ¢telet Ã  Paris dans un spectacle intitulÃ© Â« ShÃ©hÃ©razade Â». Nijinsky et les autres danseurs portaient des serouels crÃ©Ã©s par Poiret.', NULL, 3, 1, 1),
(6, 'robe soiree', '90000', 'yakhoya yakhoya.jpg', 'bye bye kendi', NULL, 1, 1, 2),
(7, 'robe simple', '210000', '7atba.jpg', 'buefuizfzahhfiuzhi', NULL, 1, 1, 2),
(8, 'caftan m3awej', '64299', '15.jpg', 'jahifuzhfahzi', NULL, 2, 1, 1),
(9, 'caftan rouge', '12000', 'ig3.jpg', 'bhgfhjsjckdkhfjdhsdvhjsdjv', NULL, 2, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_catg` int(3) NOT NULL AUTO_INCREMENT,
  `desi_catg` varchar(45) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_catg`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_catg`, `desi_catg`, `id_admin`) VALUES
(1, 'robe', NULL),
(2, 'caftan', NULL),
(3, 'datniSakraDatni', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(5) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(30) NOT NULL,
  `prenom_client` varchar(30) NOT NULL,
  `email_client` varchar(45) NOT NULL,
  `tel_client` varchar(15) NOT NULL,
  `password_client` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `n_comd` int(11) NOT NULL AUTO_INCREMENT,
  `date_h_comd` datetime NOT NULL,
  `qunt` int(3) NOT NULL,
  `prix_comd` decimal(10,0) NOT NULL,
  `id_art` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`n_comd`),
  KEY `id_admin` (`id_admin`),
  KEY `id_client` (`id_client`),
  KEY `id_art` (`id_art`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

DROP TABLE IF EXISTS `date`;
CREATE TABLE IF NOT EXISTS `date` (
  `date_solde` date NOT NULL,
  PRIMARY KEY (`date_solde`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id_event` int(3) NOT NULL AUTO_INCREMENT,
  `titre_event` varchar(45) NOT NULL,
  `date_event` date NOT NULL,
  `heure_event` time NOT NULL,
  `adresse_event` varchar(45) NOT NULL,
  `descri_event` varchar(255) NOT NULL,
  `url_img_event` varchar(100) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_styls` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_event`),
  KEY `id_admin` (`id_admin`),
  KEY `id_styls` (`id_styls`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_event`, `titre_event`, `date_event`, `heure_event`, `adresse_event`, `descri_event`, `url_img_event`, `id_admin`, `id_styls`) VALUES
(1, 'dÃ©filÃ© de mode', '2019-04-17', '15:00:00', '7rue de la mosquee', 'mlk!lj:khjghfghjn;,', 'tof.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `point_de_vente`
--

DROP TABLE IF EXISTS `point_de_vente`;
CREATE TABLE IF NOT EXISTS `point_de_vente` (
  `id_pv` int(5) NOT NULL AUTO_INCREMENT,
  `adresse_pv` varchar(45) NOT NULL,
  `nom_res_pv` varchar(30) NOT NULL,
  `prenom_res_pv` varchar(30) NOT NULL,
  `email_res_pv` varchar(45) NOT NULL,
  `tel_pv` varchar(15) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_styls` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pv`),
  KEY `id_admin` (`id_admin`),
  KEY `id_styls` (`id_styls`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(3) NOT NULL AUTO_INCREMENT,
  `url_img_slider` varchar(255) NOT NULL,
  `titre_slider` varchar(45) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_slider`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `solder`
--

DROP TABLE IF EXISTS `solder`;
CREATE TABLE IF NOT EXISTS `solder` (
  `pourcentage_solde` int(3) NOT NULL,
  `id_art` int(11) DEFAULT NULL,
  `date_solde` date DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  KEY `id_art` (`id_art`),
  KEY `date_solde` (`date_solde`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `style`
--

DROP TABLE IF EXISTS `style`;
CREATE TABLE IF NOT EXISTS `style` (
  `id_styl` int(1) NOT NULL AUTO_INCREMENT,
  `type_styl` varchar(12) NOT NULL,
  PRIMARY KEY (`id_styl`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `style`
--

INSERT INTO `style` (`id_styl`, `type_styl`) VALUES
(1, 'traditionnel'),
(2, 'moderne');

-- --------------------------------------------------------

--
-- Structure de la table `styliste`
--

DROP TABLE IF EXISTS `styliste`;
CREATE TABLE IF NOT EXISTS `styliste` (
  `id_styls` int(5) NOT NULL AUTO_INCREMENT,
  `nom_styls` varchar(30) NOT NULL,
  `prenom_styls` varchar(30) NOT NULL,
  `tel_styls` varchar(15) NOT NULL,
  `url_photo_styls` varchar(100) NOT NULL,
  `url_logo_styls` varchar(100) NOT NULL,
  `descri_styls` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_styls`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `styliste`
--

INSERT INTO `styliste` (`id_styls`, `nom_styls`, `prenom_styls`, `tel_styls`, `url_photo_styls`, `url_logo_styls`, `descri_styls`, `id_admin`) VALUES
(1, 'sabina', 'oudj', '0552122320', 'caftan.png', 'banner-12.jpg', 'mkjhj', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `voter`
--

DROP TABLE IF EXISTS `voter`;
CREATE TABLE IF NOT EXISTS `voter` (
  `id_client` int(11) DEFAULT NULL,
  `id_art` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `nbr_etoile` int(1) NOT NULL,
  KEY `id_admin` (`id_admin`),
  KEY `id_client` (`id_client`),
  KEY `id_art` (`id_art`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_catg`) REFERENCES `categories` (`id_catg`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_ibfk_3` FOREIGN KEY (`id_styls`) REFERENCES `styliste` (`id_styls`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_ibfk_4` FOREIGN KEY (`id_styl`) REFERENCES `style` (`id_styl`) ON DELETE CASCADE;

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE,
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE,
  ADD CONSTRAINT `commande_ibfk_3` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`) ON DELETE CASCADE;

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `evenement_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE,
  ADD CONSTRAINT `evenement_ibfk_2` FOREIGN KEY (`id_styls`) REFERENCES `styliste` (`id_styls`) ON DELETE CASCADE;

--
-- Contraintes pour la table `point_de_vente`
--
ALTER TABLE `point_de_vente`
  ADD CONSTRAINT `point_de_vente_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE,
  ADD CONSTRAINT `point_de_vente_ibfk_2` FOREIGN KEY (`id_styls`) REFERENCES `styliste` (`id_styls`) ON DELETE CASCADE;

--
-- Contraintes pour la table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slider_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Contraintes pour la table `solder`
--
ALTER TABLE `solder`
  ADD CONSTRAINT `solder_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`) ON DELETE CASCADE,
  ADD CONSTRAINT `solder_ibfk_2` FOREIGN KEY (`date_solde`) REFERENCES `date` (`date_solde`) ON DELETE CASCADE,
  ADD CONSTRAINT `solder_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Contraintes pour la table `styliste`
--
ALTER TABLE `styliste`
  ADD CONSTRAINT `styliste_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Contraintes pour la table `voter`
--
ALTER TABLE `voter`
  ADD CONSTRAINT `voter_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE,
  ADD CONSTRAINT `voter_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE,
  ADD CONSTRAINT `voter_ibfk_3` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
