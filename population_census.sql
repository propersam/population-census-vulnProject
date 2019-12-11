-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 09:28 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `population_census`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `state_id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `state_id`, `email`, `password`, `username`, `role`) VALUES
(1, 'James Harisson', 1, 'james.harrisson123@gmail.com', 'incredible', 'jamie', 'staff'),
(2, 'Michael Smith', 1, 'mykelehsmith@hotmail.com', 'cool', 'mikasmith', 'supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `family_head`
--

CREATE TABLE `family_head` (
  `id` int(11) NOT NULL,
  `family_name` varchar(30) NOT NULL,
  `family_address` varchar(50) NOT NULL,
  `local_govt_id` int(3) NOT NULL,
  `state_of_origin` varchar(30) NOT NULL,
  `pvc_num` varchar(30) NOT NULL,
  `max_family_num` int(3) NOT NULL,
  `family_unique_id` varchar(15) NOT NULL,
  `password_hash` varchar(128) NOT NULL DEFAULT 'population@census101'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_head`
--

INSERT INTO `family_head` (`id`, `family_name`, `family_address`, `local_govt_id`, `state_of_origin`, `pvc_num`, `max_family_num`, `family_unique_id`, `password_hash`) VALUES
(4, 'fbhjhg', 'bjbjy', 1, '2', 'y7t6564787998i990', 6, 'nsu/fbh/09', 'population@census101'),
(6, 'Ameh', '45, alaba internatioinal', 1, '2', '3456bhgvt6786', 7, 'nsu/ame/68', 'population@census101'),
(7, 'Raymiond family', '45, alaba company', 1, '1', 'df4565767687ig', 7, 'nsu/ray/gi7527', 'population@census101'),
(8, 'Nwafor', 'G5 Ereguru street, Ilesa, Osun state', 1, '1', '123456789012', 9, 'nsu/nwa/210963', 'population@census101');

-- --------------------------------------------------------

--
-- Table structure for table `family_member`
--

CREATE TABLE `family_member` (
  `id` int(11) NOT NULL,
  `family_head_id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `other_name` varchar(25) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `relationship` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `contact_addr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_member`
--

INSERT INTO `family_member` (`id`, `family_head_id`, `firstname`, `other_name`, `gender`, `occupation`, `religion`, `relationship`, `age`, `contact_num`, `contact_addr`) VALUES
(1, 6, 'HGHFG', 'FHH', 'male', 'HGHG', 'christian', 'son', 21, '76879889I8765', 'CFDSFGHJIKIOIUYGTFREDSCGVHJIKHGYTF YGYFT'),
(2, 8, 'Victor', 'Emeka', 'male', 'Student', 'christian', 'son', 28, '08138312005', 'Great Divine lodge, Hilltop');

-- --------------------------------------------------------

--
-- Table structure for table `local_govt`
--

CREATE TABLE `local_govt` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL,
  `local_govt_chairman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_govt`
--

INSERT INTO `local_govt` (`id`, `name`, `state_id`, `local_govt_chairman`) VALUES
(1, 'nsukka', 1, 'nwanyi nkanu nwfor'),
(2, 'surulere', 2, 'chief steven olayioye');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `num_of_lga` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `state_slogan` varchar(80) NOT NULL,
  `state_governor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `num_of_lga`, `year_id`, `state_slogan`, `state_governor`) VALUES
(1, 'enugu', 25, 1, 'the coal city', 'hon. gburu-gburu'),
(2, 'lagos', 20, 1, 'city of excellence', 'hon. ambode');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `census_year` year(4) NOT NULL,
  `num_of_states` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `census_year`, `num_of_states`) VALUES
(1, 2018, 30),
(2, 2022, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `family_head`
--
ALTER TABLE `family_head`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `family_unique_id` (`family_unique_id`),
  ADD UNIQUE KEY `pvc_num` (`pvc_num`);

--
-- Indexes for table `family_member`
--
ALTER TABLE `family_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_govt`
--
ALTER TABLE `local_govt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `state_slogan` (`state_slogan`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `census_year` (`census_year`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `family_head`
--
ALTER TABLE `family_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `family_member`
--
ALTER TABLE `family_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `local_govt`
--
ALTER TABLE `local_govt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
