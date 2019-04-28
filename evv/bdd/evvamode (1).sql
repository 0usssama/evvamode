-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 28 avr. 2019 à 10:14
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_art`, `nom_art`, `prix_art`, `url_img_art`, `descri_art`, `id_admin`, `id_catg`, `id_styls`, `id_styl`) VALUES
(11, 'abaya noir', '25000', '3abaya1.jpg', 'elle fdhwfgtjlpxhpjmhf\r\nghjhglk^xkjd^gjgfx^jkgljdhlfgjcpgh', NULL, 4, 6, 2),
(12, '3abaya', '25444', '3abaya4.jpg', 'dgjfgxjghckjgchkgc', NULL, 4, 6, 2),
(13, 'testing', '23242', '48363380_316040035915372_5073887983388590080_n.jpg', 'fzefhoezfoiezhiohief', NULL, 2, 7, 1),
(14, 'robe kabyle', '240000', 'usEbXYD.png', 'kech description ', NULL, 1, 7, 1),
(15, 'datni sakra article', '89000', '2000px-Mudflap_girl.svg.png', 'benounnas oussama', NULL, 3, 6, 2),
(16, 'dodo', '24000', '15.jpg', 'dhjrstphrs^jy\r\nhrlgjhpmrk^stjsr^tjkpsr^yupdtjkydtp', NULL, 2, 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `article_commande`
--

DROP TABLE IF EXISTS `article_commande`;
CREATE TABLE IF NOT EXISTS `article_commande` (
  `prix_article_commande` int(11) DEFAULT NULL,
  `quantite_article_commande` int(11) DEFAULT NULL,
  `id_art` int(11) DEFAULT NULL,
  `id_commande` int(11) DEFAULT NULL,
  KEY `id_art` (`id_art`),
  KEY `id_commande` (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_catg`, `desi_catg`, `id_admin`) VALUES
(1, 'robe', NULL),
(2, 'caftan', NULL),
(3, 'datniSakraDatni', NULL),
(4, 'abayat', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email_client`, `tel_client`, `password_client`, `id_admin`) VALUES
(1, 'ouadjaout', 'sabrina', 'sabeinee123@gmail.com', '0550124578', '$2y$10$JonnOsBR25Kjg7LW0PcDUOgU8siaNJRkof.mBzOCPi8OkRuf.B136', NULL),
(2, 'oussama', 'oussama', 'oussama@benounnas.com', '0558905764', '$2y$10$rDhUdIRCHcQf0ooruDNz9.TL1rhC4YdkJmbIyH8l4qf7X/72ZhHqu', NULL),
(3, 'oussama2', 'oussama3', 'benounnas@oussama.com', '2323242', '$2y$10$j92ECwqtJIxTUsS4MWbGF.JkV9EMhz8EzKj31BdbUBp6SoKoSJoa.', NULL),
(4, 'sabrina', 'ouadjaout', 'sabrina@sabrina.com', '234242442', '$2y$10$XuuSkd0lqpSs6pruZEVaguCVK1q5SO/subfsXNc4Z06YRN0S9s4FC', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` date DEFAULT NULL,
  `etat_commande` varchar(45) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_pv` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `id_client` (`id_client`),
  KEY `id_admin` (`id_admin`),
  KEY `id_pv` (`id_pv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dates`
--

DROP TABLE IF EXISTS `dates`;
CREATE TABLE IF NOT EXISTS `dates` (
  `desig_date` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date_db` date NOT NULL,
  `date_fn` date NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`desig_date`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dates`
--

INSERT INTO `dates` (`desig_date`, `date_db`, `date_fn`, `id_admin`) VALUES
('bakhta', '2019-04-20', '2019-04-22', NULL),
('ghedwa', '2019-04-29', '2019-04-30', NULL),
('lazrag bin w bin', '2019-04-20', '2019-04-30', NULL),
('lyom', '2019-04-28', '2019-04-30', NULL),
('sa9i ba9i', '2019-04-30', '2019-05-06', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_event`, `titre_event`, `date_event`, `heure_event`, `adresse_event`, `descri_event`, `url_img_event`, `id_admin`, `id_styls`) VALUES
(2, 'dÃ©filÃ©', '2019-04-26', '14:00:00', 'dhxfgkjghkugl', 'ghkgjlgvjmlhjmhkm\r\nughlllllllllllluympgÃ§iumlokrtieuytzrfghkgjlgvjmlhjmhkm\r\nughlllllllllllluympgÃ§iumlokrtieuytzrfghkgjlgvjmlhjmhkm\r\nughlllllllllllluympgÃ§iumlokrtieuytzrfghkgjlgvjmlhjmhkm\r\n', 'sl7.jpg', NULL, 6);

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
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_slider`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`id_slider`, `url_img_slider`, `id_admin`) VALUES
(7, 'image2.jpg', 1),
(8, 'ev1.jpg', 1),
(9, 'g1.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `solder`
--

DROP TABLE IF EXISTS `solder`;
CREATE TABLE IF NOT EXISTS `solder` (
  `pourcentage_solde` int(3) NOT NULL,
  `id_art` int(11) DEFAULT NULL,
  `desig_date` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  KEY `id_art` (`id_art`),
  KEY `date_solde` (`desig_date`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `solder`
--

INSERT INTO `solder` (`pourcentage_solde`, `id_art`, `desig_date`, `id_admin`) VALUES
(10, 11, 'bakhta', NULL),
(20, 14, 'lazrag bin w bin', NULL),
(5, 16, 'lazrag bin w bin', NULL),
(50, 15, 'ghedwa', NULL),
(50, 11, 'lyom', NULL);

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
  `email_styls` varchar(60) NOT NULL,
  PRIMARY KEY (`id_styls`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `styliste`
--

INSERT INTO `styliste` (`id_styls`, `nom_styls`, `prenom_styls`, `tel_styls`, `url_photo_styls`, `url_logo_styls`, `descri_styls`, `id_admin`, `email_styls`) VALUES
(4, 'mas3odi', 'saide', '0555555555', '3.jpg', '8.jpg', 'fgjfykgulumougilhkkkkkkkkkkkkkk', NULL, 'mes3oooood@gmail.com'),
(5, 'gfjfkjgh', 'gjcfcghj', '0554141414', '4.jpg', '5.jpg', 'hhhhhhhhhhhhkgculujl\r\nfyhiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiikkkkkkkkkkkkkkkkkkkkkkk', NULL, 'jfgjfckgky@gmail.com'),
(6, 'riaa', 'amira', '0555121414', 'mira.jpg', 'logo_amira.jpg', 'Amira Riaa: personnalitÃ© connues\r\n sur le net et  elle a une marque \r\npersonnelles,grandissants en AlgÃ©rieâ€¦\r\nModest fashion , \r\nBeauty and lifestyle.\r\n23ans', NULL, 'amirariaapro@gmail.com'),
(7, 'oussama', 'benounnas', '0558905764', '44896272_112107189781718_6729057551930884096_o.jpg', 'logo_edisoft.png', 'va bÃ©nÃ©', NULL, 'benounnas.oussama@pm.me');

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
-- Contraintes pour la table `dates`
--
ALTER TABLE `dates`
  ADD CONSTRAINT `dates_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
