-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 09:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archange`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(255) NOT NULL,
  `nom` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `localite` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nom`, `mail`, `localite`, `password`) VALUES
(20, 'Guedegbe jean marie', 'danielguedegbe10027@gmail.com', 'Abidjan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `commande_client`
--

CREATE TABLE `commande_client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `localite` varchar(255) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `category_produit` varchar(255) NOT NULL,
  `prix_produit` varchar(255) NOT NULL,
  `quantite` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `matricule` int(255) NOT NULL,
  `telephone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id`, `nom`, `prenom`, `mail`, `matricule`, `telephone`) VALUES
(3, 'koffi', 'ernes tape', 'tapeh@yahoo.com', 0, 9098989);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `localie` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `nom`, `mail`, `localie`, `objet`, `message`) VALUES
(2, 'laurent gbagbo', 'charles@gmail.com', 'mama', 'fer a beton', 'je n\'ai toujours pas recu ma commande');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(100) NOT NULL,
  `categorie_produit` varchar(150) NOT NULL,
  `prix_produit` varchar(100) NOT NULL,
  `description_produit` varchar(255) NOT NULL,
  `quantite_disponible` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `nom_produit`, `categorie_produit`, `prix_produit`, `description_produit`, `quantite_disponible`) VALUES
(4, 'PELLES', 'MATERIAUX', '7500', 'PELLES DE CHANTIER BTP', 250),
(5, 'PAQUET DE CIMENT', 'MATERIAUX', '5500', 'PAQUET DE CIMENT CUIRASSE', 250),
(7, 'CASQUE DE CHANTIER', 'MATERIAUX', '4000', 'CASQUE DE PROTECTION SUR CHANTIER', 789),
(8, 'PAQUET DE POINTE', 'MATERIAUX', '2000', 'PAQUET DE POINTE TOUT NUMERO', 900),
(9, 'BROUETTE', 'MATERIAUX', '9000', 'BROUETTE', 132),
(10, 'FEUILLES DE TOLES', 'MATERIAUX', '7500', 'FEUILLES DE TOLES POUR VOS TRAVAUX', 1255),
(11, 'BRIQUES DE CONSTRUCTION', 'MATERIAUX', '600', 'BRIQUE POUR CHANTIER SERIE ZXR-03C', 305),
(12, 'TONNE DE GRAVIER', 'MATERIAUX', '150.000', 'TONNE DE GRAVIER POUR BETONNAGE', 22),
(13, 'METRE FER A BETON', 'MATERIAUX', '1200', 'FER A BETON POUR CONSOLIDASTION', 200),
(14, 'ECHAFFAUDAGE', 'MATERIAUX', '5000', 'ECHAFFAUDAGE POUR HAUTEUR', 42),
(15, 'BETONNEUSE', 'ENGIN', '45000', 'BETONNEUSE C-084X', 10),
(16, 'CAMION BAINE', 'ENGIN', '25000', 'CAMION BAINE XCC-P2', 20),
(17, 'COULEUSE A BETON', 'ENGIN', '45000', 'COULEUSE A BETON B17-BBE', 8),
(18, 'DAMEUSE', 'ENGIN', '45000', 'DAMEUSE HTC-BG2', 4),
(19, 'GRUE CHAINEE', 'ENGIN', '50000', 'GRUE TYPE CC-BTP', 4),
(20, 'PERFOREUSE', 'ENGIN', '30000', 'PERFOREUSE SOUTERAINE C-CCB2', 12),
(21, 'CHARGEUR PORTEUSE', 'ENGIN', '130000', 'CHARGEUR PORTEUSE DOUBLE TCP', 2),
(22, 'PULVIMIXEUR', 'ENGIN', '50000', 'PULVIMIXEUR TYPE UVCI-OO3', 5),
(23, 'TOMBEREAU', 'ENGIN', '45000', 'TOMBEREAUX CHANTIER TYPE M-CS', 8),
(24, 'NIVELEUSE', 'ENGIN', '43550', 'NIVELEUSE DUGATI B-CC2', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commande_client`
--
ALTER TABLE `commande_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `commande_client`
--
ALTER TABLE `commande_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
