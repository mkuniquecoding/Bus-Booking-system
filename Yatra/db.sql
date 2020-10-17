-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 03:32 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `password`) VALUES
('admin123', 'admin123@');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `s_no` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`s_no`, `city_name`) VALUES
(1, 'Bokaro'),
(2, 'Chatra'),
(3, 'Deoghar'),
(4, 'Dhanbad'),
(5, 'Dhumka'),
(6, 'Giridih'),
(7, 'Godda'),
(8, 'Hazaribagh'),
(9, 'Ramgarh'),
(10, 'Ranchi'),
(11, 'Jamshedpur');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_price`
--

CREATE TABLE `ticket_price` (
  `s_no` int(11) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `bus_type` varchar(100) NOT NULL,
  `bus_no` varchar(100) NOT NULL,
  `departure` varchar(11) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `arrival` varchar(11) NOT NULL,
  `departure_place` varchar(100) NOT NULL,
  `arrival_place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_price`
--

INSERT INTO `ticket_price` (`s_no`, `destination`, `source`, `price`, `bus_name`, `bus_type`, `bus_no`, `departure`, `duration`, `arrival`, `departure_place`, `arrival_place`) VALUES
(1, 'Bokaro', 'Jamshedpur', 500, 'Mithun Traveling', 'A/C Seater', 'JH 021 8573', '10:15', '03h 00m', '07:15', 'Chas Bus Stand', 'Mango Bus Stand'),
(3, 'Bokaro', 'Jamshedpur', 450, 'Mithun Traveling', 'A/C Seater / Sleeper', 'JH 022 2019', '07.45', '03h 00m', '10.45', 'Chas Bus Stand', 'Mango bus Stand'),
(4, 'Bokaro', 'Ranchi', 350, 'Ajanta Travels', 'A/C Sleeper', 'JH 023 2020', '07.50', '02.10', '10.00', 'chas road', 'Buty more'),
(7, 'Bokaro', 'Dhanbad', 150, 'Mithun Travelling', 'A/C Sleeper', 'JH 024 8674', '09:00', '1h 30m', '07:30', 'Chas Bus Stand', 'Dhandbad Bus Stand'),
(8, 'Ranchi', 'Hazaribagh', 250, 'Chandan Travelling', 'General', 'JH 006 2016', '11:30', '2h 30m', '09:00', 'Buty More Bus Stand', 'New Bus Stand'),
(9, 'Ranchi', 'Ramgarh', 150, 'Chandan', 'A/C', 'JH 006 2016', '08:30', '2h 30m', '07:30', 'Buty More', 'Ramgarh Bus Stand');

-- --------------------------------------------------------

--
-- Table structure for table `travels_data`
--

CREATE TABLE `travels_data` (
  `ticket_id` varchar(100) NOT NULL,
  `s_no` int(11) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `departure` varchar(100) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `departure_place` varchar(100) NOT NULL,
  `arrival_place` varchar(100) NOT NULL,
  `seats` varchar(100) NOT NULL,
  `total_price` varchar(11) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `bus_type` varchar(100) NOT NULL,
  `traveler_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travels_data`
--

INSERT INTO `travels_data` (`ticket_id`, `s_no`, `destination`, `source`, `dates`, `departure`, `arrival`, `duration`, `departure_place`, `arrival_place`, `seats`, `total_price`, `bus_name`, `bus_type`, `traveler_email`) VALUES
('5f6f7b517e3b8', 22, 'Bokaro', 'Ranchi', '2020-09-27', '07.50', '10.00', '02.10', 'chas road', 'Buty more', 'S32,S28,S24', '1050', 'Ajanta Travels', 'A/C Sleeper', 'mithun@gmail.com'),
('5f70db40a184a', 23, 'Ranchi', 'Ramgarh', '2020-09-30', '08:30', '07:30', '2h 30m', 'Buty More', 'Ramgarh Bus Stand', 'S3,S4', '300', 'Chandan', 'A/C', 'mithun@gmail.com'),
('5f71bd3d180cc', 24, 'Bokaro', 'Ranchi', '2020-09-29', '07.50', '10.00', '02.10', 'chas road', 'Buty more', 'S1,S2', '700', 'Ajanta Travels', 'A/C Sleeper', 'mithun@gmail.com'),
('5f71c41a9cd82', 25, 'Ranchi', 'Hazaribagh', '2020-09-28', '11:30', '09:00', '2h 30m', 'Buty More Bus Stand', 'New Bus Stand', 'S1,S2', '500', 'Chandan Travelling', 'General', 'mithun@gmail.com'),
('5f71cef179f17', 26, 'Ranchi', 'Ramgarh', '2020-09-29', '08:30', '07:30', '2h 30m', 'Buty More', 'Ramgarh Bus Stand', 'S3,S4,S8', '450', 'Chandan', 'A/C', 'mithun@gmail.com'),
('5f71d6929f89f', 27, 'Bokaro', 'Ranchi', '2020-09-29', '07.50', '10.00', '02.10', 'chas road', 'Buty more', 'S37,S33,S29,S25', '1400', 'Ajanta Travels', 'A/C Sleeper', 'mithun@gmail.com'),
('5f71e56cdd392', 28, 'Ranchi', 'Ramgarh', '2020-09-28', '08:30', '07:30', '2h 30m', 'Buty More', 'Ramgarh Bus Stand', 'S1,S2', '300', 'Chandan', 'A/C', 'mithun@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`username`, `email`, `password`) VALUES
('Mithunkumar', 'mithun123@gmail.com', '123434'),
('Mithunkumar', 'mithun@gmail.com', '123456'),
('Mithunkumar', 'mithung@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_name`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `ticket_price`
--
ALTER TABLE `ticket_price`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `travels_data`
--
ALTER TABLE `travels_data`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ticket_price`
--
ALTER TABLE `ticket_price`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `travels_data`
--
ALTER TABLE `travels_data`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
