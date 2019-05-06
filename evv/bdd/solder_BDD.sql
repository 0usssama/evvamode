-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 05, 2019 at 04:35 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evvamode`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(1) NOT NULL,
  `nom_adm` varchar(30) NOT NULL,
  `prenom_adm` varchar(30) NOT NULL,
  `email_adm` varchar(30) NOT NULL,
  `tel_adm` varchar(15) NOT NULL,
  `username_adm` varchar(45) NOT NULL,
  `password_adm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_adm`, `prenom_adm`, `email_adm`, `tel_adm`, `username_adm`, `password_adm`) VALUES
(1, 'yasm', 'selmati', 'yasmine@hotmail.com', '0552232320', 'yasmine', '$2y$10$TK6y04JLi1Ct0cVo49LowOAcYRUL.EAgx7joHAT5k3OpRkmCQYbEW'),
(2, 'nou', 'ss', 'nou@ss.gmail', '02134587', 'nouss', '$2y$10$/DPD1tx4Gw267wA7EzJD2.XsV//S6.6Sd1vzqckK94OjmmLEeb/zG');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_art` int(11) NOT NULL,
  `nom_art` varchar(30) NOT NULL,
  `prix_art` decimal(10,0) NOT NULL,
  `url_img_art` varchar(100) NOT NULL,
  `descri_art` text NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_catg` int(11) DEFAULT NULL,
  `id_styls` int(11) DEFAULT NULL,
  `id_styl` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_art`, `nom_art`, `prix_art`, `url_img_art`, `descri_art`, `id_admin`, `id_catg`, `id_styls`, `id_styl`) VALUES
(17, 'caftan noir et blanc', '24000', 'nadia.jpg', 'Ce caftan est en tissu de soie blanche avec un galon noir \r\net des petits piÃ¨ces de dentelle,les perles', NULL, 6, 9, 2),
(18, 'caftan avec dentelle ', '30000', 'nadia2.jpg', '\r\nCe caftan est en tissu de soie mauve et noir  avec un galon noir \r\net des petits piÃ¨ces de dentelle noir ,les perles', NULL, 6, 9, 2),
(19, 'karakou ', '20000', 'majj.jpg', 'Ce karakou est en tissu satin, est fait Ã  la main ', NULL, 8, 10, 1),
(22, 'oussama', '12800', 'usEbXYD.png', 'djaeojdpzojoj', NULL, 6, 10, 2),
(23, 'karakou ', '54000', 'majj.jpg', 'Ce karakou est en tissu satin, est fait Ã  la main ', NULL, 8, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_commande`
--

CREATE TABLE `article_commande` (
  `prix_article_commande` int(11) DEFAULT NULL,
  `quantite_article_commande` int(11) DEFAULT NULL,
  `id_art` int(11) DEFAULT NULL,
  `id_commande` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_catg` int(3) NOT NULL,
  `desi_catg` varchar(45) NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_catg`, `desi_catg`, `id_admin`) VALUES
(6, 'Caftan', NULL),
(7, 'Robe', NULL),
(8, 'Karakou', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(5) NOT NULL,
  `nom_client` varchar(30) NOT NULL,
  `prenom_client` varchar(30) NOT NULL,
  `email_client` varchar(45) NOT NULL,
  `tel_client` varchar(15) NOT NULL,
  `password_client` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email_client`, `tel_client`, `password_client`, `id_admin`) VALUES
(1, 'ouadjaout', 'sabrina', 'sabeinee123@gmail.com', '0550124578', '$2y$10$JonnOsBR25Kjg7LW0PcDUOgU8siaNJRkof.mBzOCPi8OkRuf.B136', NULL),
(2, 'oussama', 'oussama', 'oussama@benounnas.com', '0558905764', '$2y$10$rDhUdIRCHcQf0ooruDNz9.TL1rhC4YdkJmbIyH8l4qf7X/72ZhHqu', NULL),
(3, 'oussama2', 'oussama3', 'benounnas@oussama.com', '2323242', '$2y$10$j92ECwqtJIxTUsS4MWbGF.JkV9EMhz8EzKj31BdbUBp6SoKoSJoa.', NULL),
(4, 'sabrina', 'ouadjaout', 'sabrina@sabrina.com', '234242442', '$2y$10$XuuSkd0lqpSs6pruZEVaguCVK1q5SO/subfsXNc4Z06YRN0S9s4FC', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `date_commande` date DEFAULT NULL,
  `etat_commande` varchar(45) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_pv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id_date` int(11) NOT NULL,
  `date_db` date NOT NULL,
  `date_fn` date NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`id_date`, `date_db`, `date_fn`, `id_admin`) VALUES
(2, '2019-05-04', '2019-05-05', NULL),
(4, '2019-05-06', '2019-05-08', NULL),
(5, '2019-05-05', '2019-05-09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `id_event` int(3) NOT NULL,
  `titre_event` varchar(45) NOT NULL,
  `date_event` date NOT NULL,
  `heure_event` time NOT NULL,
  `adresse_event` varchar(45) NOT NULL,
  `descri_event` varchar(255) NOT NULL,
  `url_img_event` varchar(100) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_styls` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evenement`
--

INSERT INTO `evenement` (`id_event`, `titre_event`, `date_event`, `heure_event`, `adresse_event`, `descri_event`, `url_img_event`, `id_admin`, `id_styls`) VALUES
(2, 'dÃ©filÃ©', '2019-04-26', '14:00:00', 'dhxfgkjghkugl', 'ghkgjlgvjmlhjmhkm\r\nughlllllllllllluympgÃ§iumlokrtieuytzrfghkgjlgvjmlhjmhkm\r\nughlllllllllllluympgÃ§iumlokrtieuytzrfghkgjlgvjmlhjmhkm\r\nughlllllllllllluympgÃ§iumlokrtieuytzrfghkgjlgvjmlhjmhkm\r\n', 'sl7.jpg', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `point_de_vente`
--

CREATE TABLE `point_de_vente` (
  `id_pv` int(5) NOT NULL,
  `adresse_pv` varchar(45) NOT NULL,
  `nom_res_pv` varchar(30) NOT NULL,
  `prenom_res_pv` varchar(30) NOT NULL,
  `email_res_pv` varchar(45) NOT NULL,
  `tel_pv` varchar(15) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_styls` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `point_de_vente`
--

INSERT INTO `point_de_vente` (`id_pv`, `adresse_pv`, `nom_res_pv`, `prenom_res_pv`, `email_res_pv`, `tel_pv`, `id_admin`, `id_styls`) VALUES
(1, 'alger, sahet cho', 'ouss', 'ousss', 'ouss@gmail.com', '0554 12 12 13', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(3) NOT NULL,
  `url_img_slider` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `url_img_slider`, `id_admin`) VALUES
(7, 'image2.jpg', 1),
(8, 'ev1.jpg', 1),
(9, 'g1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `solder`
--

CREATE TABLE `solder` (
  `pourcentage_solde` int(3) NOT NULL,
  `id_art` int(11) DEFAULT NULL,
  `id_date` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `ancien_prix` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE `style` (
  `id_styl` int(1) NOT NULL,
  `type_styl` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `style`
--

INSERT INTO `style` (`id_styl`, `type_styl`) VALUES
(1, 'traditionnel'),
(2, 'moderne');

-- --------------------------------------------------------

--
-- Table structure for table `styliste`
--

CREATE TABLE `styliste` (
  `id_styls` int(5) NOT NULL,
  `nom_styls` varchar(30) NOT NULL,
  `prenom_styls` varchar(30) NOT NULL,
  `tel_styls` varchar(15) NOT NULL,
  `url_photo_styls` varchar(100) NOT NULL,
  `url_logo_styls` varchar(100) NOT NULL,
  `descri_styls` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `email_styls` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `styliste`
--

INSERT INTO `styliste` (`id_styls`, `nom_styls`, `prenom_styls`, `tel_styls`, `url_photo_styls`, `url_logo_styls`, `descri_styls`, `id_admin`, `email_styls`) VALUES
(8, 'Kadid', 'Karim', '0554 12 24 75', 'Profile.kadid.png', 'Logo_Kadid.png', 'Un virtuose de la haute couture\r\nKarim Kadid a commencÃ© son voyage dans sa ville dâ€™origine\r\n Ã  Miliana (Ã  lâ€™ouest de lâ€™AlgÃ©rie) en 1997 comme un simple \r\nartisan , il se perfectionne et gagne rapidement une \r\nreconnaissance internationale. ', NULL, 'karim.kadid@gmail.com'),
(9, 'Nadia ', 'Boutaleb', '0778 14 78 25', 'nadia_photo.jpg', 'Logo-Nadia-Boutaleb-01.png', ' jâ€™ai toujours aimÃ© dessiner\r\n et coudre des vÃªtements, si bien que jâ€™en ai fait,\r\n finalement, mon mÃ©tier et ma passion. \r\nRien ne me paraÃ®t plus captivant, plus stimulant que de\r\nsaisir la beautÃ© complexe et mystÃ©rieuse du corps humain', NULL, 'nadia.boutaleb@gmail.com'),
(10, ' Zeggane', 'Majda ', '0775 85 47 98', 'majdaa.jpg', 'majda.jpg', ' Jâ€™ai reprÃ©sentÃ© la culture algÃ©rienne avec brillance,\r\n ce qui mâ€™a valu beaucoup dâ€™encouragementÂ», raconte-t-elle. \r\nMajda sâ€™est distinguÃ©e tout au long de ses annÃ©es par un style \r\nunique. FiÃ¨re de sa culture algÃ©rienne, ', NULL, 'majda_ Zeggane@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id_client` int(11) DEFAULT NULL,
  `id_art` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `nbr_etoile` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_catg` (`id_catg`),
  ADD KEY `id_styls` (`id_styls`),
  ADD KEY `id_styl` (`id_styl`);

--
-- Indexes for table `article_commande`
--
ALTER TABLE `article_commande`
  ADD KEY `id_art` (`id_art`),
  ADD KEY `id_commande` (`id_commande`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_catg`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_pv` (`id_pv`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id_date`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_styls` (`id_styls`);

--
-- Indexes for table `point_de_vente`
--
ALTER TABLE `point_de_vente`
  ADD PRIMARY KEY (`id_pv`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_styls` (`id_styls`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `solder`
--
ALTER TABLE `solder`
  ADD KEY `id_art` (`id_art`),
  ADD KEY `date_solde` (`id_date`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`id_styl`);

--
-- Indexes for table `styliste`
--
ALTER TABLE `styliste`
  ADD PRIMARY KEY (`id_styls`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_art` (`id_art`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_catg` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id_date` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_event` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `point_de_vente`
--
ALTER TABLE `point_de_vente`
  MODIFY `id_pv` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
  MODIFY `id_styl` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `styliste`
--
ALTER TABLE `styliste`
  MODIFY `id_styls` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dates`
--
ALTER TABLE `dates`
  ADD CONSTRAINT `dates_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
