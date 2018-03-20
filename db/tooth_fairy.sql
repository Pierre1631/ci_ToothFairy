-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 04:22 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tooth_fairy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `AdminEmail` varchar(25) NOT NULL,
  `AdminPass` varchar(25) NOT NULL,
  `AdminUser` varchar(25) NOT NULL,
  `AdminFirstname` varchar(25) NOT NULL,
  `AdminLastname` varchar(25) NOT NULL,
  `AdminAddress` varchar(25) NOT NULL,
  `AdminCity` varchar(25) NOT NULL,
  `AdminContact` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `AppointmentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TenantID` int(11) NOT NULL,
  `AppointmentDate` varchar(25) NOT NULL,
  `AppointmentTime` varchar(25) NOT NULL,
  `AppointmentStatus` varchar(25) NOT NULL,
  `AppointmentNote` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `MessageID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TenantID` int(11) NOT NULL,
  `MessageSubject` varchar(25) NOT NULL,
  `MessageNote` varchar(100) NOT NULL,
  `MessageDate` varchar(25) NOT NULL,
  `MessageTime` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TenantID` int(11) NOT NULL,
  `PaymentDate` varchar(25) NOT NULL,
  `PaymentTime` varchar(25) NOT NULL,
  `PaymentAmount` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `TenantID` int(11) NOT NULL,
  `TenantCompany` varchar(25) NOT NULL,
  `TenantEmail` varchar(25) NOT NULL,
  `TenantPass` varchar(25) NOT NULL,
  `TenantFirstname` varchar(25) NOT NULL,
  `TenantLastname` varchar(25) NOT NULL,
  `TenantAddress` varchar(50) NOT NULL,
  `TenantCity` varchar(25) NOT NULL,
  `TenantCountry` varchar(25) NOT NULL,
  `TenantPostal` varchar(25) NOT NULL,
  `TenantContact` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserEmail` varchar(25) NOT NULL,
  `UserPass` varchar(25) NOT NULL,
  `UserFirstName` varchar(25) NOT NULL,
  `UserLastName` varchar(25) NOT NULL,
  `UserMiddleName` varchar(25) NOT NULL,
  `UserBirthday` varchar(25) NOT NULL,
  `UserAddress` varchar(50) NOT NULL,
  `UserCity` varchar(25) NOT NULL,
  `UserPostal` varchar(25) NOT NULL,
  `UserContact` varchar(25) NOT NULL,
  `UserGender` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `WebID` int(11) NOT NULL,
  `TenantID` int(11) NOT NULL,
  `WebName` varchar(25) NOT NULL,
  `WebTemplate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`AppointmentID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`TenantID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`WebID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `AppointmentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `TenantID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `WebID` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
