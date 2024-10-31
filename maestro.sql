-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2024 at 12:53 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maestro`
--

-- --------------------------------------------------------

--
-- Table structure for table `tovar`
--

CREATE TABLE `tovar` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Upload_patch` varchar(100) NOT NULL,
  `Price` int(10) NOT NULL,
  `Category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tovar`
--

INSERT INTO `tovar` (`id`, `Name`, `Upload_patch`, `Price`, `Category`) VALUES
(2, 'Yamaha F310', 'icons/F310.png', 18000, 'Acoustic'),
(3, 'Yamaha FG820', 'icons/FG820.png', 25000, 'Acoustic'),
(5, 'Martinez FAW-310', 'icons/FAW801.png', 30000, 'Acoustic'),
(6, 'Martinez F02C', 'icons/W02.png', 28000, 'Acoustic'),
(7, 'Ibanez PF15', 'icons/PF15.png', 23000, 'Acoustic'),
(8, 'Ibanez AW65', 'icons/AW65.png', 28000, 'Acoustic'),
(9, 'Yzmaha FG800', 'icons/FG800.png', 33000, 'Acoustic');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`) VALUES
(1, 'zhaba', 'zhaba'),
(2, 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
