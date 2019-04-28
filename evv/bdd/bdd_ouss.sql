CREATE TABLE `dates` (
    `desig_date` varchar(40) NOT NULL PRIMARY KEY,
  `date_db` date NOT NULL,
    `date_fn` date NOT NULL,
 `id_admin` int,
FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;







-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 22, 2019 at 02:53 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

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
(1, 'yasm', 'selmati', 'yasmine@hotmail.com', '0552232320', 'yasmine', '$2y$10$TK6y04JLi1Ct0cVo49LowOAcYRUL.EAgx7joHAT5k3OpRkmCQYbEW');

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
(11, 'abaya noir', '25000', '3abaya1.jpg', 'elle fdhwfgtjlpxhpjmhf\r\nghjhglk^xkjd^gjgfx^jkgljdhlfgjcpgh', NULL, 4, 6, 2),
(12, '3abaya', '25444', '3abaya4.jpg', 'dgjfgxjghckjgchkgc', NULL, 4, 6, 2);

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
(1, 'robe', NULL),
(2, 'caftan', NULL),
(3, 'datniSakraDatni', NULL),
(4, 'abayat', NULL);

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
(2, 'oussama', 'oussama', 'oussama@benounnas.com', '0558905764', '$2y$10$rDhUdIRCHcQf0ooruDNz9.TL1rhC4YdkJmbIyH8l4qf7X/72ZhHqu', NULL);

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
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `date_solde` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(3) NOT NULL,
  `url_img_slider` varchar(255) NOT NULL,
  `titre_slider` varchar(45) NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `solder`
--

CREATE TABLE `solder` (
  `pourcentage_solde` int(3) NOT NULL,
  `id_art` int(11) DEFAULT NULL,
  `date_solde` date DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
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
(4, 'mas3odi', 'saide', '0555555555', '3.jpg', '8.jpg', 'fgjfykgulumougilhkkkkkkkkkkkkkk', NULL, 'mes3oooood@gmail.com'),
(5, 'gfjfkjgh', 'gjcfcghj', '0554141414', '4.jpg', '5.jpg', 'hhhhhhhhhhhhkgculujl\r\nfyhiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiikkkkkkkkkkkkkkkkkkkkkkk', NULL, 'jfgjfckgky@gmail.com'),
(6, 'riaa', 'amira', '0555121414', 'mira.jpg', 'logo_amira.jpg', 'Amira Riaa: personnalitÃ© connues\r\n sur le net et  elle a une marque \r\npersonnelles,grandissants en AlgÃ©rieâ€¦\r\nModest fashion , \r\nBeauty and lifestyle.\r\n23ans', NULL, 'amirariaapro@gmail.com'),
(7, 'oussama', 'benounnas', '0558905764', '44896272_112107189781718_6729057551930884096_o.jpg', 'logo_edisoft.png', 'va bÃ©nÃ©', NULL, 'benounnas.oussama@pm.me');

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
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`date_solde`);

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
  ADD KEY `date_solde` (`date_solde`),
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
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_catg` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_event` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `point_de_vente`
--
ALTER TABLE `point_de_vente`
  MODIFY `id_pv` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
  MODIFY `id_styl` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `styliste`
--
ALTER TABLE `styliste`
  MODIFY `id_styls` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_catg`) REFERENCES `categories` (`id_catg`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_ibfk_3` FOREIGN KEY (`id_styls`) REFERENCES `styliste` (`id_styls`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_ibfk_4` FOREIGN KEY (`id_styl`) REFERENCES `style` (`id_styl`) ON DELETE CASCADE;

--
-- Constraints for table `article_commande`
--
ALTER TABLE `article_commande`
  ADD CONSTRAINT `article_commande_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`),
  ADD CONSTRAINT `article_commande_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `commande_ibfk_3` FOREIGN KEY (`id_pv`) REFERENCES `point_de_vente` (`id_pv`);

--
-- Constraints for table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `evenement_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE,
  ADD CONSTRAINT `evenement_ibfk_2` FOREIGN KEY (`id_styls`) REFERENCES `styliste` (`id_styls`) ON DELETE CASCADE;

--
-- Constraints for table `point_de_vente`
--
ALTER TABLE `point_de_vente`
  ADD CONSTRAINT `point_de_vente_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE,
  ADD CONSTRAINT `point_de_vente_ibfk_2` FOREIGN KEY (`id_styls`) REFERENCES `styliste` (`id_styls`) ON DELETE CASCADE;

--
-- Constraints for table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slider_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Constraints for table `solder`
--
ALTER TABLE `solder`
  ADD CONSTRAINT `solder_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`) ON DELETE CASCADE,
  ADD CONSTRAINT `solder_ibfk_2` FOREIGN KEY (`date_solde`) REFERENCES `date` (`date_solde`) ON DELETE CASCADE,
  ADD CONSTRAINT `solder_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Constraints for table `styliste`
--
ALTER TABLE `styliste`
  ADD CONSTRAINT `styliste_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE;

--
-- Constraints for table `voter`
--
ALTER TABLE `voter`
  ADD CONSTRAINT `voter_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE,
  ADD CONSTRAINT `voter_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE,
  ADD CONSTRAINT `voter_ibfk_3` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_art`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
