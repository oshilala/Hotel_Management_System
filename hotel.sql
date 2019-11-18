-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 09:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `room_category` varchar(11) NOT NULL,
  `no_of_rooms` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `username`, `email`, `phone_no`, `checkin`, `checkout`, `room_category`, `no_of_rooms`, `time`) VALUES
(9, 'oshilala', 'damilolabanjo53@gmail.com', '08123470036', '2019-11-20', '2019-11-30', 'HOME SUITES', '7', '2019-11-19 18:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `phone_no` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `first_name`, `last_name`, `username`, `email`, `country`, `phone_no`, `address`, `password`, `time`) VALUES
(7, 'Oshibanjo', 'Sulaiman', 'oshilala', 'damilolabanjo53@gmail.com', 'Nigeria', '08123470036', 'Off Erinlu, Ijebu-Ode, Ogun State', 'password', '2019-11-19 07:19:20'),
(8, 'Oshibanjo', 'Sulaiman', 'oshilala', 'damilolabanjo53@gmail.com', 'Nigeria', '08123470036', 'Off Erinlu, Ijebu-Ode, Ogun State', 'password', '2019-11-19 07:20:38'),
(9, 'Oshibanjo', 'Sulaiman', 'oshilala', 'damilolabanjo53@gmail.com', 'Nigeria', '08123470036', 'Off Erinlu, Ijebu-Ode, Ogun State', 'qwerty', '2019-11-19 07:22:37'),
(10, 'Oshibanjo', 'Sulaiman', 'lala', 'damilolabanjo53@gmail.com', 'Nigeria', '08030960928', '6 goshen street afobaje estate ota', 'asdf', '2019-11-19 16:57:20'),
(11, 'Oshibanjo', 'Sulaiman', 'lala', 'damilolabanjo53@gmail.com', 'Nigeria', '08030960928', '6 goshen street afobaje estate ota', 'asdf', '2019-11-19 17:05:17'),
(12, 'Oshibanjo', 'Sulaiman', 'oshilala', 'damilolabanjo53@gmail.com', 'Nigeria', '08123470036', 'Off Erinlu, Ijebu-Ode, Ogun State', 'lala', '2019-11-19 18:37:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
