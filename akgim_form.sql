-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 11:04 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akgim form`
--

-- --------------------------------------------------------

--
-- Table structure for table `10th_qualification`
--

CREATE TABLE `10th_qualification` (
  `user_fk` int(11) NOT NULL,
  `nameofcollege` varchar(255) NOT NULL,
  `educationalboard` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `yearofpassing` varchar(255) NOT NULL,
  `mediumofinstruction` varchar(255) NOT NULL,
  `percentageofmarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `12th_qualification`
--

CREATE TABLE `12th_qualification` (
  `user_fk` int(11) NOT NULL,
  `nameofcollege` varchar(255) NOT NULL,
  `educationalboard` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `yearofpassing` varchar(255) NOT NULL,
  `mediumofinstruction` varchar(255) NOT NULL,
  `percentageofmarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `user_password`, `user_role`) VALUES
('akgim_admin', 'admin@123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `grad_qualification`
--

CREATE TABLE `grad_qualification` (
  `user_fk` int(11) NOT NULL,
  `nameofcollege` varchar(255) NOT NULL,
  `educationalboard` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `yearofpassing` varchar(255) NOT NULL,
  `mediumofinstruction` varchar(255) NOT NULL,
  `percentageofmarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_qualification`
--

CREATE TABLE `other_qualification` (
  `user_fk` int(11) NOT NULL,
  `nameofcollege` varchar(255) NOT NULL,
  `educationalboard` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `yearofpassing` varchar(255) NOT NULL,
  `mediumofinstruction` varchar(255) NOT NULL,
  `percentageofmarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phd_qualification`
--

CREATE TABLE `phd_qualification` (
  `user_fk` int(11) NOT NULL,
  `nameofcollege` varchar(255) NOT NULL,
  `educationalboard` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `yearofpassing` varchar(255) NOT NULL,
  `mediumofinstruction` varchar(255) NOT NULL,
  `percentageofmarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postgrad_qualification`
--

CREATE TABLE `postgrad_qualification` (
  `user_fk` int(11) NOT NULL,
  `nameofcollege` varchar(255) NOT NULL,
  `educationalboard` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `yearofpassing` varchar(255) NOT NULL,
  `mediumofinstruction` varchar(255) NOT NULL,
  `percentageofmarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `post` varchar(255) NOT NULL,
  `urname` text NOT NULL,
  `fathername` text NOT NULL,
  `spousename` text,
  `category` text NOT NULL,
  `gender` text NOT NULL,
  `correspondenceaddress` varchar(255) NOT NULL,
  `contactno` bigint(12) NOT NULL,
  `email` varchar(191) NOT NULL,
  `alternativecontactno` varchar(255) DEFAULT NULL,
  `permanentaddress` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `dateofmarriage` varchar(255) DEFAULT NULL,
  `net_qualified` text NOT NULL,
  `national_journal` int(4) NOT NULL,
  `international_journal` int(4) NOT NULL,
  `national_conference` int(4) NOT NULL,
  `international_conference` int(4) NOT NULL,
  `teachingexperience` int(3) NOT NULL,
  `corporateexperience` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `10th_qualification`
--
ALTER TABLE `10th_qualification`
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `12th_qualification`
--
ALTER TABLE `12th_qualification`
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `grad_qualification`
--
ALTER TABLE `grad_qualification`
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `other_qualification`
--
ALTER TABLE `other_qualification`
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `phd_qualification`
--
ALTER TABLE `phd_qualification`
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `postgrad_qualification`
--
ALTER TABLE `postgrad_qualification`
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contactno` (`contactno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `10th_qualification`
--
ALTER TABLE `10th_qualification`
  ADD CONSTRAINT `10th_qualification_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `12th_qualification`
--
ALTER TABLE `12th_qualification`
  ADD CONSTRAINT `12th_qualification_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grad_qualification`
--
ALTER TABLE `grad_qualification`
  ADD CONSTRAINT `grad_qualification_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `other_qualification`
--
ALTER TABLE `other_qualification`
  ADD CONSTRAINT `other_qualification_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phd_qualification`
--
ALTER TABLE `phd_qualification`
  ADD CONSTRAINT `phd_qualification_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `postgrad_qualification`
--
ALTER TABLE `postgrad_qualification`
  ADD CONSTRAINT `postgrad_qualification_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
