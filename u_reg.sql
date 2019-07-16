-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 07:47 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `u_reg`
--

CREATE TABLE `u_reg` (
  `u_id` int(10) NOT NULL,
  `u_fname` varchar(100) NOT NULL,
  `u_lname` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_loc` varchar(100) NOT NULL,
  `u_num` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_reg`
--

INSERT INTO `u_reg` (`u_id`, `u_fname`, `u_lname`, `u_email`, `u_loc`, `u_num`) VALUES
(29, 'wahaj', 'usman', 'usmanali313@live.com', 'lahore', 2147483647),
(30, 'usman', 'shaukat', 'maanbhatti3130@gmail.com', 'karachi', 2147483647),
(31, 'Ahil', 'ahsn', 'ruttechnologies313@gmail.com', 'sahiwal', 300333300),
(32, 'maan', 'riaz', 'sidi253r@gmail.com', 'karachi', 2147483647),
(33, 'USMAN', 'shaukat', 'usmanali313@live.com', 'lkk', 2147483647),
(34, 'wahaj', 'nnnn', 'usmanali313@live.com', 'lkk', 2147483647),
(35, 'jjkkk', 'nnnn', 'usmanali313@live.com', 'lkk', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `u_reg`
--
ALTER TABLE `u_reg`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `u_reg`
--
ALTER TABLE `u_reg`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
