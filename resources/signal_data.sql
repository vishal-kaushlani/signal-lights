-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 08, 2024 at 07:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signals`
--

-- --------------------------------------------------------

--
-- Table structure for table `signal_data`
--

CREATE TABLE `signal_data` (
  `ID` int(11) NOT NULL,
  `SEQ_A` int(11) NOT NULL,
  `SEQ_B` int(11) NOT NULL,
  `SEQ_C` int(11) NOT NULL,
  `SEQ_D` int(11) NOT NULL,
  `GREEN_INTERVAL` int(11) NOT NULL,
  `YELLOW_INTERVAL` int(11) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signal_data`
--

INSERT INTO `signal_data` (`ID`, `SEQ_A`, `SEQ_B`, `SEQ_C`, `SEQ_D`, `GREEN_INTERVAL`, `YELLOW_INTERVAL`, `CREATED_AT`) VALUES
(1, 1, 2, 4, 3, 5, 1, '2024-05-08 17:32:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signal_data`
--
ALTER TABLE `signal_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signal_data`
--
ALTER TABLE `signal_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
