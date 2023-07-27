-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 12:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_email` varchar(255) NOT NULL,
  `admin_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_email`, `admin_password`) VALUES
('abhishek@gmail.com', 123),
('harshit@gmail.com', 123),
('vikas@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table ` political_parties`
--

CREATE TABLE ` political_parties` (
  `party_logo` varchar(400) NOT NULL,
  `party_name` varchar(256) NOT NULL,
  `candidate_name` varchar(256) NOT NULL,
  `vote` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table ` political_parties`
--

INSERT INTO ` political_parties` (`party_logo`, `party_name`, `candidate_name`, `vote`) VALUES
('../images/aap.png', 'Aam aadmi party', 'Arvind Kejriwal', 0),
('../images/bjp.png', 'Bharatiya janata party', 'Narendra Modi', 2),
('../images/inc.png', 'Indian national congress', 'Rahul Gandhi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voter_id`
--

CREATE TABLE `voter_id` (
  `stu_email` varchar(14) NOT NULL,
  `stu_password` int(3) DEFAULT NULL,
  `vote_history` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `voter_id`
--

INSERT INTO `voter_id` (`stu_email`, `stu_password`, `vote_history`) VALUES
('std1@gmail.com', 123, 1),
('std2@gmail.com', 123, 1),
('std3@gmail.com', 123, 0),
('std4@gmail.com', 123, 0),
('std5@gmail.com', 123, 0),
('std6@gmail.com', 123, 0),
('std7@gmail.com', 123, 0),
('std8@gmail.com', 123, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table ` political_parties`
--
ALTER TABLE ` political_parties`
  ADD PRIMARY KEY (`party_name`);

--
-- Indexes for table `voter_id`
--
ALTER TABLE `voter_id`
  ADD PRIMARY KEY (`stu_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
