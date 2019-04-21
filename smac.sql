-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 07:28 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smac`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `idPatient` int(11) NOT NULL,
  `ownerName` text NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `patientAddress` varchar(255) NOT NULL,
  `petName` text NOT NULL,
  `species` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(3) NOT NULL,
  `curCondition` text NOT NULL,
  `medHistory` text NOT NULL,
  `vaccination` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`idPatient`, `ownerName`, `mobile`, `email`, `patientAddress`, `petName`, `species`, `gender`, `age`, `curCondition`, `medHistory`, `vaccination`) VALUES
(2, 'ds', 0, 'shairamaemariano33@yahoo.com', 'asd', 'sd', 'sd', 'asd', 22, 'asd', 'asd', 'asd'),
(3, 'asd', 0, 'shairamaemariano33@yahoo.com', 'asd', 'asd', 'asd', 'asd', 0, 'asd', 'asd', 'asdasd'),
(4, 'Glenn', 0, '', '', '', '', '', 0, '', '', ''),
(5, 'asd', 0, '', '', '', '', '', 0, '', '', ''),
(6, 'asd', 0, '', '', '', '', '', 0, '', '', ''),
(7, 'asd', 0, '', '', '', '', '', 0, '', '', ''),
(8, 'asas', 0, '', '', '', '', '', 0, '', '', ''),
(9, 'test', 3434343434, '', '', '', '', '', 0, '', '', ''),
(10, 'test', 3434343434, '', '', '', '', '', 0, '', '', ''),
(11, 'test', 3434343434, 'marianotrish@yahoo.com', '', '', '', '', 0, '', '', ''),
(12, 'asa', 0, 'sa@gmail.com', 'asa', 'sas', '', '', 0, '', '', ''),
(13, 'asa', 0, 'sa@gmail.com', 'asa', 'sas', 'sas', 'ssa', 1, 'sa', 'sas', 'sas'),
(14, 'asa', 0, 'sa@gmail.com', 'asa', 'sas', 'sas', 'ssa', 1, 'sa', 'sas', 'sas');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `idPatient` int(11) NOT NULL,
  `ownerName` tinytext NOT NULL,
  `mobile` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `petName` tinytext NOT NULL,
  `species` tinytext NOT NULL,
  `gender` tinytext NOT NULL,
  `age` tinytext NOT NULL,
  `curCondition` tinytext NOT NULL,
  `medHistory` tinytext NOT NULL,
  `vaccination` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `test` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `test`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `userName` tinytext NOT NULL,
  `userPassword` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `userName`, `userPassword`) VALUES
(2, 'HATDOG', '$2y$10$JN5ia4Lj8OzC40MUTblKBe/Tw/FapiLIoUr/ofv9VNATu52AyDG7C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idPatient`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`idPatient`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `idPatient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `idPatient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
