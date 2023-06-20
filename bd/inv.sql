-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 08:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventario`
--

-- --------------------------------------------------------

--
-- Table structure for table `inv`
--

CREATE TABLE `inv` (
  `id` int(11) NOT NULL,
  `Linea` varchar(30) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `rango` varchar(40) NOT NULL,
  `modelo` varchar(40) NOT NULL,
  `inv_min` int(11) NOT NULL,
  `inv_max` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inv`
--

INSERT INTO `inv` (`id`, `Linea`, `Nombre`, `rango`, `modelo`, `inv_min`, `inv_max`, `fecha`) VALUES
(12, 'Linea 1', 'MX079617-2320', ' CHICO', ' MX079600-2150 ', 40, 0, '2023-01-30'),
(13, 'Linea 1', 'MX079617-2320', ' CHICO', ' MX079600-2150 ', 40, 0, '2023-01-30'),
(16, 'Linea 1', 'MX079617-2320', ' CHICO', ' MX079600-2150 ', 40, 0, '2023-01-31'),
(17, 'Linea 1', 'MX079617-2320', ' GRAND', 'E MX079600-2150', 4, 0, '2023-01-31'),
(19, 'Linea 1', 'MX079617-2320', ' GRAND', ' MX079600-2150', 4, 0, '2023-02-01'),
(25, 'Linea 1', 'MX079617-2320', ' CHICO', ' MX079600-2150 ', 140, 110, '2023-02-01'),
(29, 'Linea 1', 'MX079617-2320', ' CHICO', ' MX079600-2150 ', 280, 280, '2023-02-02'),
(30, 'Linea 1', 'MX079617-2320', ' CHICO', ' MX079600-2150 ', 40, 320, '2023-02-03'),
(31, 'Linea 1', 'MX079617-2320', ' CHICO', ' MX079600-2150 ', 120, 120, '2023-02-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv`
--
ALTER TABLE `inv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv`
--
ALTER TABLE `inv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
