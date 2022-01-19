-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 05:28 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentroom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `id` int(10) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` double(8,2) NOT NULL,
  `deposit` double(8,2) NOT NULL,
  `state` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `date created` datetime(6) NOT NULL,
  `latitude` double(9,5) NOT NULL,
  `longitude` double(9,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`id`, `contact`, `title`, `description`, `price`, `deposit`, `state`, `area`, `date created`, `latitude`, `longitude`) VALUES
(1, '01152783799', 'single room', 'single room for women', 250.00, 300.00, 'selangor', 'shah alam', '2021-12-28 10:50:40.000000', 1155.23000, 222.50000),
(2, '011999999', 'queen room', 'SSSSSSSSSSS', 350.00, 400.00, 'Kuala Lumpur', 'Kuala Lumpur', '2021-12-28 11:43:12.000000', 111.20000, 9999.99999),
(3, '11111111', 'big room', 'Big room for 4 people', 300.00, 400.00, 'selangor', 'shah alam', '0000-00-00 00:00:00.000000', 111.20000, 115.80000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
