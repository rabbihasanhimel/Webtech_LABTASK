-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 07:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(111) NOT NULL,
  `Name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `buying` varchar(40) CHARACTER SET latin1 NOT NULL,
  `selling` varchar(40) CHARACTER SET latin1 NOT NULL,
  `quantity` int(40) NOT NULL,
  `image` text CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `buying`, `selling`, `quantity`, `image`) VALUES
(1, 'gtx 4090', '100000', '120000', 1, 'RTX-4090-design.jpeg'),
(2, 'Netflix card', '1200', '1250', 2, 'OIP.jfif'),
(3, 'Razer DeathAdder Essential', '1900', '2000', 1, 'deathadder-essential-500x500.jpg'),
(4, 'Laptop', '80000', '85000', 1, 'laptop-2.jpg'),
(5, 'flask', '1233', '1223', 12, 'planet9_Wallpaper_5000x2813.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
