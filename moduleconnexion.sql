-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2020 at 08:10 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(1, 'Mariecharlotte', 'Marie', 'Charlotte', 'mariecharlotte!'),
(2, 'louischarles', 'Louis', 'Charles', 'louloudu69'),
(3, 'petiteanne', 'Annie', 'Jeanne', 'petiteanniechoco'),
(4, ' test', 'test', 'test', 'test'),
(5, 'lili', 'lili', 'lili', 'LILI1'),
(6, ' ws', 'ws', 'ws', 'ws'),
(7, ' qsq', 's', 'qs', 'qs'),
(8, ' az', 'az', 'az', 'az'),
(9, ' ja', 'ja', 'ja', 'ja'),
(10, ' mimi', 'mimi', 'mimi', 'mimi'),
(13, ' parish', 'paris', 'hilton', 'par'),
(14, 'Ali', 'Ali', 'Ali', 'Ali'),
(15, 'mimi', 'mimi', 'mimi', 'mimi'),
(16, 'rara', 'rara', 'rara', 'bebe'),
(18, 'ichouchou', 'Ichou', 'CHOUCHOU', 'riquette1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
