-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 04:17 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idUser` int(11) NOT NULL,
  `userName` tinytext NOT NULL,
  `userPassword` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idUser`, `userName`, `userPassword`) VALUES
(2, 'HATDOG', '$2y$10$JN5ia4Lj8OzC40MUTblKBe/Tw/FapiLIoUr/ofv9VNATu52AyDG7C');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `id` int(11) NOT NULL,
  `petName` text NOT NULL,
  `ownerName` text NOT NULL,
  `doctorName` text NOT NULL,
  `dateSchedule` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `problem` varchar(45) NOT NULL,
  `status` int(1) NOT NULL,
  `createdBy` text NOT NULL,
  `updatedBy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `petName`, `ownerName`, `doctorName`, `dateSchedule`, `time`, `problem`, `status`, `createdBy`, `updatedBy`) VALUES
(1, 'SamplePetName', 'Santie', 'Trecia', '04-21-2019', '10:43 PM', 'Vaccination', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assistant`
--

CREATE TABLE `tbl_assistant` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdBy` text NOT NULL,
  `updateBy` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assistant`
--

INSERT INTO `tbl_assistant` (`id`, `firstname`, `lastname`, `username`, `password`, `createdDate`, `createdBy`, `updateBy`, `status`) VALUES
(2, ' Sample Assistant', ' Sample Assistant', 'erer', ' password', '2019-04-21 13:00:44', 'admin', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dateAvailable` varchar(255) NOT NULL,
  `time` varchar(45) NOT NULL,
  `createdBy` text NOT NULL,
  `updateBy` text NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`id`, `firstName`, `lastName`, `username`, `password`, `dateAvailable`, `time`, `createdBy`, `updateBy`, `createdDate`, `status`) VALUES
(5, 'Santie', 'Pelayo', 'doctor', 'password', 'MWF', '10AM-11AM', 'TESt', '', '2019-04-21 13:22:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patients`
--

CREATE TABLE `tbl_patients` (
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
-- Dumping data for table `tbl_patients`
--

INSERT INTO `tbl_patients` (`idPatient`, `ownerName`, `mobile`, `email`, `patientAddress`, `petName`, `species`, `gender`, `age`, `curCondition`, `medHistory`, `vaccination`) VALUES
(2, 'POGI', 9360628101, '  santie_pelayo@yahoo.com', '  HAHA', 'POGI', 'POGI', 'Male', 0, 'HAHA', 'HAHA', 'HAHA'),
(3, 'asd', 9360628101, 'santie_pelayo@yahoo.com', 'asdas', 'asd', 'asd', 'HAHA', 12, 'asd', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `serviceName` text NOT NULL,
  `price` decimal(60,2) NOT NULL,
  `createdBy` text NOT NULL,
  `updatedBy` text NOT NULL,
  `createdDate` varchar(45) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `serviceName`, `price`, `createdBy`, `updatedBy`, `createdDate`, `status`) VALUES
(2, 'Vaccination', '100.00', 'admin', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `id` int(11) NOT NULL,
  `petName` text NOT NULL,
  `ownerName` text NOT NULL,
  `serviceName` text NOT NULL,
  `price` decimal(60,2) NOT NULL,
  `totalAmount` decimal(60,2) NOT NULL,
  `createdBy` text NOT NULL,
  `createdDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_assistant`
--
ALTER TABLE `tbl_assistant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  ADD PRIMARY KEY (`idPatient`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_assistant`
--
ALTER TABLE `tbl_assistant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  MODIFY `idPatient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
