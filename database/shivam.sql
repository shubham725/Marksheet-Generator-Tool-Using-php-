-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 12:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `shivam`
--

CREATE TABLE `shivam` (
  `no` int(11) NOT NULL,
  `studentname` varchar(20) NOT NULL,
  `seatno` varchar(10) NOT NULL,
  `english` varchar(3) NOT NULL,
  `marathi` varchar(3) NOT NULL,
  `hindi` varchar(3) NOT NULL,
  `physics` varchar(3) NOT NULL,
  `maths` varchar(3) NOT NULL,
  `chemistry` varchar(3) NOT NULL,
  `total` varchar(10) NOT NULL,
  `percentege` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shivam`
--

INSERT INTO `shivam` (`no`, `studentname`, `seatno`, `english`, `marathi`, `hindi`, `physics`, `maths`, `chemistry`, `total`, `percentege`) VALUES
(1, 'shubham Bapu Kumbhar', 'D72555319', '98', '89', '89', '89', '89', '89', '543', '77.5'),
(2, 'kunal shubham patil', 'D12416000', '80', '85', '636', '78', '78', '78', '1035', '147.'),
(3, 'shubham Kumbhar', 'D72555319', '98', '89', '89', '89', '89', '89', '543', '77.5'),
(4, 'harshal jamadar', 'D3294578', '58', '85', '85', '85', '58', '85', '456', '65.1'),
(34, 'kunal shubham patil', 'D12416', '99', '45', '47', '41', '41', '41', '314', '44.8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shivam`
--
ALTER TABLE `shivam`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shivam`
--
ALTER TABLE `shivam`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
