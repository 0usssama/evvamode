-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 02 juin 2019 à 10:49
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
  `nom_adm` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prenom_adm` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email_adm` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tel_adm` varchar(15) CHARACTER SET utf8 NOT NULL,
  `username_adm` varchar(45) CHARACTER SET utf8 NOT NULL,
  `password_adm` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_adm`, `prenom_adm`, `email_adm`, `tel_adm`, `username_adm`, `password_adm`) VALUES
(3, 'sabrina', 'ouade', 'sabrinaoud@gmail.com', '0557898989', 'sabinanass', '$2y$10$39.RfsxJSfkX98a1xV4qdu3dI6X/Z3NFgs2UJNVHlcBSMttKhG8ym');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_art` int(11) NOT NULL AUTO_INCREMENT,
  `nom_art` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prix_art` decimal(10,0) NOT NULL,
  `url_img_art` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descri_art` text CHARACTER SET utf8 NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_catg` int(11) DEFAULT NULL,
  `id_styls` int(11) DEFAULT NULL,
  `id_styl` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_art`),
  KEY `id_admin` (`id_admin`),
  KEY `id_catg` (`id_catg`),
  KEY `id_styls` (`id_styls`),
  KEY `id_styl` (`id_styl`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_art`, `nom_art`, `prix_art`, `url_img_art`, `descri_art`, `id_admin`, `id_catg`, `id_styls`, `id_styl`) VALUES
(18, 'caftan avec dentelle ', '21600', 'nadia2.jpg', '\r\nCe caftan est en tissu de soie mauve et noir  avec un galon noir \r\net des petits pièces de dentelle noir ,les perles', NULL, 6, 9, 2),
(19, 'karakou ', '2708', 'majj.jpg', 'Ce karakou est en tissu satin, est fait à la main ', NULL, 8, 10, 1),
(32, 'karakou rouge', '50000', 'kar3.jpg', 'mkjklhgfdfhfgjklmùlkj', NULL, 8, 13, 2),
(33, 'karakou', '60000', 'kar2.jpg', 'ksjclklhfhezfef', NULL, 8, 10, 2),
(35, 'karkou', '30000', 'kr1.jpg', 'lldjkjdklv', NULL, 8, 13, 2),
(36, 'karkou', '80000', 'kr4.jpg', 'mkjhgfcfghvjbnk,;l', NULL, 8, 10, 2),
(37, 'caftan', '10000', 'caf1.jpg', 'ce caftan  de une pièces Il est brodé à la main, avec des sequins, des perles et des pierres Swarovski. Finition Âkad maâllam et éléments swarovski. La ceinture brodée avec le même motif et incrustée de cristaux également.', NULL, 6, 12, 2),
(38, 'caftan', '110000', 'caf2.jpg', 'Caftan pontalon en deux pièces  en crèpe georgette , brodé de Tarz Maâllam en fil d’or agrémenté de cristaux, les deux sont finis de kitane et de âkads.', NULL, 6, 13, 2),
(39, 'Caftan DE BABYLONE', '90000', 'caf4.jpg', 'Robe en drap de soie brodée en rbati et incrustée de perles, sequins et de cristaux swarovski, avec dos nu en tulle.\r\nCape brodée en rbati et incrustée de perles, sequins et de cristaux, la doublure est en mousseline de soie.\r\nLe tout avec finiton maâllam et cristaux.', NULL, 6, 13, 2),
(40, 'robe rouge', '120000', 'robe 2.jpg', 'kaùmdlsjjhAFJHDJFHJD', NULL, 9, 9, 2),
(42, 'robe caftan', '110000', 'rb.jpg', 'lmkljhgfcfvhbjnk,l;mlkjhb', NULL, 9, 13, 2),
(47, 'Robe plumer', '90000', 'RB1.jpg', 'lkjhjgfdfghjklmùlkoijhuyg', NULL, 9, 13, 2),
(48, 'robe bleu', '90000', 'robb.jpg', '^poiuytrfghjklmloiuytrfgvhbn,;', NULL, 9, 9, 2),
(50, 'karkou', '90000', 'kar tr.jpg', 'ùmlkjhg', NULL, 8, 10, 1),
(54, 'karkou', '80000', 'dee.jpg', 'mlkjhg', NULL, 8, 13, 1),
(55, 'karkou', '90000', 'tr.jpg', 'mlkjh', NULL, 8, 12, 1),
(56, 'caftan  Sherazade', '80000', 'tr2.jpg', 'Caftan de soie, avec broderie de la région de fèz (Ntaâ) sur la jupe.\r\nLa deuxième pièce est un brocard en coton et lamé de soie.\r\nCeinture broderie de Fèz (Ntaâ).', NULL, 6, 12, 1),
(57, 'caftan peace', '10000', 'cf tr.jpg', 'Tenue en deux pièces travaillée avec Zwack Maâllam bronze, très fin en fil or doré DMC, incrusté d’éléments swarovski. Le caftan (au-dessous) est en drap de soie avec sfifa et zwack doré. La ceinture est complément travaillée avec trasen (fil d’or très fins) avec une broche sertie avec même motif\r\n', NULL, 6, 9, 1),
(58, 'cafan sounds', '90000', 'caf tr.jpg', 'Tenue en deux pièces. Le premier caftan est en drap de soie clerrici, brodé et perlé de sequins et d’éléments Swarovski. La deuxième pièce est en tulle entièrement brodé de sequins. Le tout est fini avec sfifa façon maâllam et âkad.\r\n', NULL, 6, 9, 1),
(59, 'caftan lady', '110000', 'tr3.jpg', 'Caftan deux pièces en tulle brodé à la main de perles, de sequins et de cristaux swarovski; porté sur une jupe en mousseline lamée doublée de satin de soie, les deux finis de âkads et de travaillés maâllam. Ceinture Coordonnée.', NULL, 6, 12, 1),
(60, 'badroun ', '80000', 'bd.jpg', 'kjhg', NULL, 10, 10, 1),
(61, 'badroun ', '70000', 'bad2.jpg', 'hgh', NULL, 10, 13, 1),
(62, 'badroun ', '90000', 'bad1.jpg', 'mlkj', NULL, 10, 12, 1),
(63, 'badroun ', '90000', 'b.jpg', 'mlk', NULL, 10, 13, 1),
(64, 'robe chaoui', '60000', 'c.jpg', 'mkl', NULL, 9, 10, 1),
(65, 'robe chaoui', '40000', 'choi.jpg', 'lkj', NULL, 9, 12, 1);

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

--
-- Déchargement des données de la table `article_commande`
--

INSERT INTO `article_commande` (`prix_article_commande`, `quantite_article_commande`, `id_art`, `id_commande`) VALUES
(25000, 1, 17, 16),
(30000, 1, 18, 16),
(12800, 1, 22, 16),
(25000, 1, 17, 17),
(30000, 1, 18, 17),
(20000, 1, 17, 18),
(30000, 1, 18, 18),
(24000, 1, 24, 18),
(20000, 4, 19, 19),
(24000, 4, 24, 19),
(20000, 3, 17, 20),
(30000, 1, 18, 20),
(21600, 4, 24, 20),
(21600, 1, 24, 21),
(20000, 3, 17, 22),
(30000, 2, 18, 22),
(20000, 1, 17, 23),
(27000, 2, 18, 23),
(18000, 2, 17, 26),
(27000, 2, 18, 26),
(27000, 2, 18, 27);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_catg` int(3) NOT NULL AUTO_INCREMENT,
  `desi_catg` varchar(45) CHARACTER SET utf8 NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_catg`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_catg`, `desi_catg`, `id_admin`) VALUES
(6, 'Caftan', NULL),
(8, 'Karakou', NULL),
(9, 'robe', NULL),
(10, 'Badroun ', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prenom_client` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email_client` varchar(45) CHARACTER SET utf8 NOT NULL,
  `tel_client` varchar(15) CHARACTER SET utf8 NOT NULL,
  `password_client` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email_client`, `tel_client`, `password_client`, `id_admin`) VALUES
(1, 'ouadjaout', 'sabrina', 'sabeinee123@gmail.com', '0550124578', '$2y$10$JonnOsBR25Kjg7LW0PcDUOgU8siaNJRkof.mBzOCPi8OkRuf.B136', NULL),
(2, 'oussama', 'oussama', 'oussama@benounnas.com', '0558905764', '$2y$10$rDhUdIRCHcQf0ooruDNz9.TL1rhC4YdkJmbIyH8l4qf7X/72ZhHqu', NULL),
(3, 'oussama2', 'oussama3', 'benounnas@oussama.com', '2323242', '$2y$10$j92ECwqtJIxTUsS4MWbGF.JkV9EMhz8EzKj31BdbUBp6SoKoSJoa.', NULL),
(4, 'sabrina', 'ouadjaout', 'sabrina@sabrina.com', '234242442', '$2y$10$XuuSkd0lqpSs6pruZEVaguCVK1q5SO/subfsXNc4Z06YRN0S9s4FC', NULL),
(5, 'sabrina', 'ouad', 'sabrin123@gmail.com', '0554787878', '$2y$10$tWqA0EvDR1Rd7ScRC6ShyejeMyyGfjPsnZ.dWQE0Pw5Zb4IWptyoa', NULL),
(8, 'dodo', 'dina', 'dodododina@gmail.com', '0551 21 22 11', '$2y$10$nOua77/2PMB4ERGFeok4oOOM9luumCLbC3C9QgeJ6v411w48/.t8S', NULL),
(9, 'noussaiba', 'maissa', 'maisa@hotamil.com', '0552232322', '$2y$10$3jgntUh1zzaJNs.Q0BUgWe5df0V6Ti4J4aW.baOYP0HZafgWWbd26', NULL),
(10, 'fella', 'selmati', 'fella12@hotmail.fr', '0543256323', '$2y$10$JZnPi5kUSxLoqAZt2n.I3uo26fAvO2OjgdlCc8FtCDr/QFCgfUZtu', NULL);

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
  `date_validation_commande` date DEFAULT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `id_client` (`id_client`),
  KEY `id_admin` (`id_admin`),
  KEY `id_pv` (`id_pv`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `date_commande`, `etat_commande`, `id_client`, `id_admin`, `id_pv`, `date_validation_commande`) VALUES
(16, '2019-05-06', 'validée', 3, 1, 1, '2019-05-17'),
(17, '2019-05-07', 'validée', 3, 1, 1, '2019-05-17'),
(23, '2019-05-23', 'validée', 3, 1, 3, '2019-05-23'),
(24, '2019-05-27', 'en cours', 3, 1, 1, NULL),
(25, '2019-05-27', 'en cours', 3, 1, 4, NULL),
(26, '2019-05-29', 'en cours', 3, 1, 3, NULL),
(27, '2019-05-30', 'en cours', 3, 1, 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id_event` int(3) NOT NULL AUTO_INCREMENT,
  `titre_event` varchar(45) CHARACTER SET utf8 NOT NULL,
  `date_event` date NOT NULL,
  `heure_event` time NOT NULL,
  `adresse_event` varchar(45) CHARACTER SET utf8 NOT NULL,
  `descri_event` text CHARACTER SET utf8 NOT NULL,
  `url_img_event` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_styls` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_event`),
  KEY `id_admin` (`id_admin`),
  KEY `id_styls` (`id_styls`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_event`, `titre_event`, `date_event`, `heure_event`, `adresse_event`, `descri_event`, `url_img_event`, `id_admin`, `id_styls`) VALUES
(2, 'défilé', '2019-04-26', '14:00:00', 'dhxfgkjghkugl', 'ghkgjlgvjmlhjmhkm\r\nughlllllllllllluympgçiumlokrtieuytzrfghkgjlgvjmlhjmhkm\r\nughlllllllllllluympgçiumlokrtieuytzrfghkgjlgvjmlhjmhkm\r\nughlllllllllllluympgçiumlokrtieuytzrfghkgjlgvjmlhjmhkm\r\n', 'sl7.jpg', NULL, 6),
(3, 'défilé', '2019-05-16', '23:00:00', 'kedam dar oussama', 'tjrjtykdtkfyulkguilfyclujnùwg,nwm\r\nhùl,twmj,wùtj,wrt^hkpwetûjwrtjm;hrùzeqzg,hrs<ùh', 'majda ze.jpg', NULL, 10),
(4, 'défilé', '2019-05-31', '23:00:00', 'hôtel el djawhara  a sidi ferdje   ', 'gorsùjhsirtjsùrihosrtisrtùiotrgj\r\nhjksfh,slfjghksgj,gskjdtphydtypjotdpyjsrphjspmnhrfphmwgg\r\nfglh,fgmlhngf,mfg,w,gmhlosrtjsrtojhmqtrh,mfh,fmn,wmgn,mgngmlh,rgfmhrsthjoktypkuotjhqpemgjzmgrjr^rgjermrhj', 'images.jpg', NULL, 13);

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

DROP TABLE IF EXISTS `periode`;
CREATE TABLE IF NOT EXISTS `periode` (
  `id_pr` int(11) NOT NULL AUTO_INCREMENT,
  `date_db` date DEFAULT NULL,
  `date_fn` date DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pr`),
  KEY `id_admin` (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `periode`
--

INSERT INTO `periode` (`id_pr`, `date_db`, `date_fn`, `id_admin`) VALUES
(1, '2019-05-23', '2019-05-24', NULL),
(2, '2019-05-25', '2019-05-30', NULL),
(3, '2019-05-23', '2019-05-24', NULL),
(4, '2019-05-26', '2019-06-30', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `point_de_vente`
--

DROP TABLE IF EXISTS `point_de_vente`;
CREATE TABLE IF NOT EXISTS `point_de_vente` (
  `id_pv` int(5) NOT NULL AUTO_INCREMENT,
  `adresse_pv` varchar(45) CHARACTER SET utf8 NOT NULL,
  `nom_res_pv` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prenom_res_pv` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email_res_pv` varchar(45) CHARACTER SET utf8 NOT NULL,
  `tel_pv` varchar(15) CHARACTER SET utf8 NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_styls` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pv`),
  KEY `id_admin` (`id_admin`),
  KEY `id_styls` (`id_styls`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `point_de_vente`
--

INSERT INTO `point_de_vente` (`id_pv`, `adresse_pv`, `nom_res_pv`, `prenom_res_pv`, `email_res_pv`, `tel_pv`, `id_admin`, `id_styls`) VALUES
(1, 'alger, sahet cho', 'ouss', 'ousss', 'ouss@gmail.com', '0554 12 12 13', 1, NULL),
(3, 'khrayssia', 'Ouadjaout', 'sabrina', 'ouadjaout.sabrinna@gmail.com', '0558905764', 1, NULL),
(4, 'Oran, elbahiya ', 'Ouadjaout', 'sabrina', 'ouadjaout.sabrinaa@gmail.com', '0554 12 45 78', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(3) NOT NULL AUTO_INCREMENT,
  `url_img_slider` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_slider`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`id_slider`, `url_img_slider`, `id_admin`) VALUES
(12, 'caf5.jpg', 1),
(13, 'cafd.jpg', 1),
(15, 'caftan.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `solder`
--

DROP TABLE IF EXISTS `solder`;
CREATE TABLE IF NOT EXISTS `solder` (
  `pourcentage_solde` int(3) NOT NULL,
  `id_art` int(11) DEFAULT NULL,
  `id_pr` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `ancien_prix` int(11) DEFAULT NULL,
  KEY `id_art` (`id_art`),
  KEY `date_solde` (`id_pr`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `solder`
--

INSERT INTO `solder` (`pourcentage_solde`, `id_art`, `id_pr`, `id_admin`, `ancien_prix`) VALUES
(10, 24, 6, NULL, 24000),
(10, 17, 7, NULL, 20000),
(50, 19, 7, NULL, 20000),
(10, 18, 1, NULL, 30000),
(5, 19, 1, NULL, 10000),
(5, 19, 1, NULL, 9500),
(50, 19, 1, NULL, 9025),
(10, 17, 2, NULL, 20000),
(40, 19, 2, NULL, 4513),
(20, 18, 1, NULL, 27000);

-- --------------------------------------------------------

--
-- Structure de la table `style`
--

DROP TABLE IF EXISTS `style`;
CREATE TABLE IF NOT EXISTS `style` (
  `id_styl` int(1) NOT NULL AUTO_INCREMENT,
  `type_styl` varchar(12) CHARACTER SET utf8 NOT NULL,
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
  `nom_styls` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prenom_styls` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tel_styls` varchar(15) CHARACTER SET utf8 NOT NULL,
  `url_photo_styls` varchar(100) CHARACTER SET utf8 NOT NULL,
  `url_logo_styls` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descri_styls` text NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `email_styls` varchar(60) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_styls`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `styliste`
--

INSERT INTO `styliste` (`id_styls`, `nom_styls`, `prenom_styls`, `tel_styls`, `url_photo_styls`, `url_logo_styls`, `descri_styls`, `id_admin`, `email_styls`) VALUES
(9, 'Nadia', 'Boutaleb', '0778 14 78 25', 'nadia_photo.jpg', 'Logo-Nadia-Boutaleb-01.png', 'Nadia Boutaleb est l’une des maisons majeures de la couture traditionnelle  Elle se démarque par un esprit d’élégance et de raffinement, découlant d’une passion du métier d’une vision du style d’un amour de la grâce et d’une envie de sublimer le corps de la femme.', NULL, 'nadia.boutaleb@gmail.com'),
(10, 'Zeggane', 'Majda', '0775 85 47 98', 'majdaa.jpg', 'majda.jpg', 'Tout l’art de cette styliste est de ne travailler qu’avec des tissus nobles. Pour elle, le beau n’existe qu’avec de belles matières, du perlage de qualité et de la broderie traditionnelle.\r\n«Je travaille beaucoup avec le velours, la soie, la crêpe, la dentelle, tout ce qui est noble me séduit»', NULL, 'majda_ Zeggane@gmail.com'),
(12, 'Kadid', 'karim', '0554 12 24 75', 'karm.png', 'logo_karim.PNG', 'Karim Kadid a commencé son voyage dans sa ville d’origine à Miliana (à l’ouest de l’Algérie) en 1997 comme un simple artisan il a  gagne rapidement une reconnaissance internationale Un excellent travail de broderie lié à un bon choix de matériaux haut de gamme le classe parmi les meilleurs couturiers haut de gamme en Algérie\r\n', NULL, 'karim.kadid@gmail.com'),
(13, 'Atlas', 'Rayan', '0552325652', '20.jpg', 'images.png', 'Rayan Atlas styliste et créateur de mode est passionné par le milieu de la mode depuis l’enfance. Il s’est lancé dans la couture et la décoration intérieur\r\n  Après une formation diplômante en Algérie il a pu réaliser son premier défilé de mode il présente une nouvelle collection pour la deuxième édition Algiers Fashion Week et pour la première édition Algiers Traditional Fashion Days.', NULL, 'rayanatlas @hotmail.fr');

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
  `date_vote` date DEFAULT NULL,
  KEY `id_admin` (`id_admin`),
  KEY `id_client` (`id_client`),
  KEY `id_art` (`id_art`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voter`
--

INSERT INTO `voter` (`id_client`, `id_art`, `id_admin`, `nbr_etoile`, `date_vote`) VALUES
(3, 17, NULL, 4, '2019-05-27'),
(3, 17, 1, 4, '2019-05-27'),
(3, 17, 1, 5, '2019-05-27'),
(3, 17, 1, 4, '2019-05-27'),
(3, 31, 1, 5, '2019-05-27'),
(3, 31, 1, 5, '2019-05-27'),
(3, 31, 1, 5, '2019-05-27'),
(3, 31, 1, 5, '2019-05-27'),
(3, 29, 1, 5, '2019-05-27'),
(3, 29, 1, 5, '2019-05-27'),
(3, 29, 1, 5, '2019-05-27'),
(3, 29, 1, 5, '2019-05-27'),
(3, 18, 1, 5, '2019-05-27'),
(3, 18, 1, 3, '2019-05-27'),
(3, 18, 1, 2, '2019-05-27'),
(3, 18, 1, 4, '2019-05-27'),
(3, 28, 1, 2, '2019-05-27'),
(3, 28, 1, 5, '2019-05-27'),
(3, 28, 1, 2, '2019-05-27'),
(3, 30, 1, 2, '2019-05-27'),
(3, 30, 1, 2, '2019-05-27'),
(3, 30, 1, 2, '2019-05-27'),
(3, 29, 1, 1, '2019-05-28'),
(3, 29, 1, 1, '2019-05-28'),
(3, 29, 1, 2, '2019-05-28'),
(3, 17, 1, 3, '2019-05-28'),
(10, 31, 1, 3, '2019-05-29'),
(3, 38, 1, 5, '2019-05-29'),
(3, 38, 1, 5, '2019-05-29'),
(3, 42, 1, 5, '2019-05-29'),
(3, 42, 1, 5, '2019-05-29'),
(3, 32, 1, 5, '2019-05-29'),
(3, 61, 1, 5, '2019-05-29'),
(3, 40, 1, 5, '2019-05-29'),
(3, 40, 1, 5, '2019-05-29'),
(3, 32, 1, 5, '2019-05-29'),
(3, 32, 1, 5, '2019-05-29'),
(3, 47, 1, 5, '2019-05-29'),
(3, 32, 1, 5, '2019-05-29'),
(3, 32, 1, 5, '2019-05-29'),
(3, 32, 1, 5, '2019-05-29'),
(10, 32, 1, 5, '2019-05-29'),
(10, 32, 1, 5, '2019-05-29'),
(10, 32, 1, 5, '2019-05-29'),
(10, 64, 1, 5, '2019-05-29'),
(10, 40, 1, 1, '2019-05-29'),
(10, 18, 1, 1, '2019-05-29'),
(10, 61, 1, 1, '2019-05-29'),
(10, 32, 1, 5, '2019-05-29'),
(3, 33, 1, 3, '2019-06-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
