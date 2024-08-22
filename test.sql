-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 07:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkreq`
--

CREATE TABLE `checkreq` (
  `check_id` int(11) NOT NULL,
  `post` varchar(100) NOT NULL,
  `part` varchar(500) NOT NULL,
  `quanty` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Need` varchar(100) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `payee` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `employee` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `assignment` varchar(100) NOT NULL,
  `noted` varchar(100) NOT NULL,
  `completion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id_num` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `storecode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id_num`, `name`, `fullname`, `pass`, `usertype`, `position`, `storecode`) VALUES
(2, 'onin', 'adrian bacalanos', 'onin222', 'User', 'manager', 'jb3315');

-- --------------------------------------------------------

--
-- Table structure for table `tasklist`
--

CREATE TABLE `tasklist` (
  `id` int(11) NOT NULL,
  `posted` date NOT NULL DEFAULT current_timestamp(),
  `tas` varchar(100) NOT NULL,
  `Needed` varchar(50) NOT NULL,
  `created` varchar(50) NOT NULL,
  `Assigned` varchar(50) NOT NULL,
  `note` varchar(200) NOT NULL,
  `rate` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tasklist`
--

INSERT INTO `tasklist` (`id`, `posted`, `tas`, `Needed`, `created`, `Assigned`, `note`, `rate`) VALUES
(55, '2024-06-04', 'management', '2024-06-27', '', '3657', '', 2),
(56, '2024-06-07', 'adrrriii', '2024-06-29', '', 'JB0579', '', 1),
(57, '2024-06-07', 'dasd', '2024-06-27', '', 'JB3315.', '', 2),
(58, '2024-06-07', 'assds', '2024-06-28', '', 'JB0884', '', 2),
(59, '2024-06-07', 'management', '2024-06-30', '', 'JB0884', '', 0),
(60, '2024-06-08', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkreq`
--
ALTER TABLE `checkreq`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `tasklist`
--
ALTER TABLE `tasklist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkreq`
--
ALTER TABLE `checkreq`
  MODIFY `check_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasklist`
--
ALTER TABLE `tasklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
