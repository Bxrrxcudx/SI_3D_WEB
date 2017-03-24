-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2017 at 07:34 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connection`
--

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE IF NOT EXISTS `profils` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `design` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `pseudo`, `mdp`, `nom`, `prenom`, `age`, `profession`, `design`) VALUES
(1, 'moi', 'moi', 'moi', 'moi', 23, 'moi', 'hh'),
(2, 'papa', 'papa', 'papa', 'papa', 23, 'papa', ''),
(9, 'tata', 'tata', 'tata', 'tata', 13, 'tata', ''),
(10, 'mamam', 'mama', 'mama', 'mama', 23, 'mama', ''),
(11, 'momi', 'momi', 'momi', 'momi', 23, 'momi', ''),
(12, 'coco', 'coco', 'tata', 'tata', 23, 'tata', ''),
(13, 'slsramirez', '1234', 'Salas', 'Olivia', 36, 'Moissonneuse bateuse', ''),
(14, 'poiuytrez', 'toto', 'toto', 'toto', 23, 'toto', ''),
(15, 'toto', 'toto', 'toto', 'toto', 23, 'toto', '{"color":"rouge"}'),
(16, 'jeanmichou', 'hetic', 'Dupont', 'Jean-Michel', 35, 'Cadre Dynamique', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
