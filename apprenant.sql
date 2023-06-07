-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2023 at 03:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apprenant`
--

-- --------------------------------------------------------

--
-- Table structure for table `liste`
--

CREATE TABLE `liste` (
  `id` int NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `date_de_naissance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `ville_d_origine` varchar(255) DEFAULT NULL,
  `formation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `liste`
--

INSERT INTO `liste` (`id`, `nom`, `prenom`, `date_de_naissance`, `sexe`, `ville_d_origine`, `formation`) VALUES
(30, 'TIONO', 'Samuel', '41', 'masculin', 'GAOUA', 'dev-WEB'),
(32, 'BASSE', 'GOURA', '234', 'masculin', 'FAD', 'FYP'),
(33, 'kouraogo', 'nobogo', '123', 'feminin', 'GAOUA', 'dev-WEB'),
(35, 'SANGA', 'BERNADETTE', '38', 'feminin', 'koudougou', 'dev-WEB'),
(36, 'FOFANA', 'ANDRE', '22', 'masculin', 'OUAHIGOUA', 'dev-WEB'),
(41, 'OUEDRAOGO', 'Jullie', '28', 'feminin', 'GAOUA', 'histoire-archeologie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liste`
--
ALTER TABLE `liste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liste`
--
ALTER TABLE `liste`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
