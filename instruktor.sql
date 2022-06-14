-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 09:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullsehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `instruktor`
--

CREATE TABLE `instruktor` (
  `idInstruktor` int(11) NOT NULL,
  `namaInstruktor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instruktor`
--

INSERT INTO `instruktor` (`idInstruktor`, `namaInstruktor`) VALUES
(1, 'Mbak Ayu'),
(2, 'Mbak Sri'),
(3, 'Mbak Siti'),
(7, 'Mas keren');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instruktor`
--
ALTER TABLE `instruktor`
  ADD PRIMARY KEY (`idInstruktor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instruktor`
--
ALTER TABLE `instruktor`
  MODIFY `idInstruktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
