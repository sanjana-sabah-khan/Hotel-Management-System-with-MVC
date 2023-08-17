-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 01:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel reservation system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `admin_email_id` varchar(255) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `admin_email_id`, `admin_password`) VALUES
(1, 'Sanjana Sabah Khan', 'sanjanasabah19@gmail.com', 'correct'),
(2, 'John Doe', 'johndoe@gmail.com', 'johndoe'),
(3, 'Maria Doe', 'mariadoe@gmail.com', 'mariamaria'),
(4, 'Creg', 'creg@gmail.com', 'lalala');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `sl_no` int(255) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`sl_no`, `contact_name`, `contact_email`, `contact_phone`, `contact_message`) VALUES
(1, 'Fahim Rai', 'Fahimrai@gmail.com', '01674415132', 'YOUR SERVICES ARE EXCELLENT! GOOD WORK'),
(2, 'Hikari Haru', 'hikariharu@gmail.com', '01674415132', 'EMERGENCY'),
(3, 'Tetsuya Suyo', 'tetsuyo@gmail.com', '01987624562', 'GREAT HOTEL!');

-- --------------------------------------------------------

--
-- Table structure for table `family_rooms`
--

CREATE TABLE `family_rooms` (
  `sl_no` int(255) NOT NULL,
  `room_num` int(255) NOT NULL,
  `room_category` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact_num` varchar(11) NOT NULL,
  `guest_num` int(255) NOT NULL DEFAULT 0,
  `check_in` datetime(6) NOT NULL,
  `check_out` datetime(6) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family_rooms`
--

INSERT INTO `family_rooms` (`sl_no`, `room_num`, `room_category`, `first_name`, `last_name`, `email_address`, `gender`, `contact_num`, `guest_num`, `check_in`, `check_out`, `status`) VALUES
(1, 101, 'Business', 'Imran', 'Reza', 'imranreza@gmail.com', 'Male', '01768654327', 4, '2021-09-09 21:30:00.000000', '2021-09-10 21:30:00.000000', 1),
(2, 102, 'Business', 'Rifah', 'Afnan', 'rifahafnan@gmail.com', 'Female', '01546789789', 5, '2021-09-06 22:08:00.000000', '2021-09-09 22:08:00.000000', 1),
(3, 103, '', '', '', '', '', '', 0, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 0),
(4, 104, '', '', '', '', '', '', 0, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum_table`
--

CREATE TABLE `forum_table` (
  `sl_no` int(255) NOT NULL,
  `forum_name` varchar(50) NOT NULL,
  `forum_message` varchar(400) NOT NULL,
  `forum_admin_reply` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_table`
--

INSERT INTO `forum_table` (`sl_no`, `forum_name`, `forum_message`, `forum_admin_reply`) VALUES
(1, 'Fahim Kara', 'Are you guys open today?', 'Yes we are.'),
(2, 'Rony Miraj', 'How do I make reservation?', 'Just go to Rooms and then under the categories, select according to liking and you will see the number of rooms appear under specific categories. Select one and fill up the reservation form.'),
(3, 'Rana', 'Hi', ''),
(4, 'Fasa Driya', 'Why isn&#39;t the forum working???', 'We&#39;re looking into the matter.');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `sl_no` int(255) NOT NULL,
  `res_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact_num` varchar(11) NOT NULL,
  `guest_num` int(255) NOT NULL,
  `check_in` datetime(6) NOT NULL,
  `check_out` datetime(6) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`sl_no`, `res_name`, `first_name`, `last_name`, `email_address`, `gender`, `contact_num`, `guest_num`, `check_in`, `check_out`, `status`) VALUES
(1, 'Asian Fusion', 'Ara', 'Ara', 'araara@gmail.com', 'Female', '01566784356', 3, '2021-09-13 18:04:00.000000', '2021-09-15 18:04:00.000000', 1),
(2, 'Asian Fusion', 'Maria', 'Abed', 'mariaabed@gmail.com', 'Female', '01546789789', 5, '2021-09-08 20:01:00.000000', '2021-09-10 20:01:00.000000', 1),
(3, 'Pizza Lounge', 'Nana', 'Farina', 'nanafarina@gmail.com', 'Female', '01546789789', 4, '2021-09-15 20:18:00.000000', '2021-09-09 20:18:00.000000', 1),
(4, 'Fine Dinning', 'Imran', 'Reza', 'imranreza@gmail.com', 'Male', '01768654327', 1, '2021-09-08 21:32:00.000000', '2021-09-10 21:32:00.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `single_bed_rooms`
--

CREATE TABLE `single_bed_rooms` (
  `sl_no` int(255) NOT NULL,
  `room_num` int(255) NOT NULL,
  `room_category` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact_num` varchar(11) NOT NULL,
  `guest_num` int(255) NOT NULL,
  `check_in` datetime(6) NOT NULL,
  `check_out` datetime(6) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_bed_rooms`
--

INSERT INTO `single_bed_rooms` (`sl_no`, `room_num`, `room_category`, `first_name`, `last_name`, `email_address`, `gender`, `contact_num`, `guest_num`, `check_in`, `check_out`, `status`) VALUES
(1, 1, 'Regular', 'Fatima', 'Ali', 'fatimaali45@gmail.com', 'Female', '01546789789', 2, '2021-09-06 22:23:00.000000', '2021-09-10 22:23:00.000000', 1),
(2, 2, 'Business', 'Kara', 'Malotra', 'karamalotra@hotmail.com', 'Female', '01768654327', 2, '2021-09-06 18:10:00.000000', '2021-09-11 18:10:00.000000', 1),
(3, 3, '', '', '', '', '', '', 0, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 0),
(4, 4, '', '', '', '', '', '', 0, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `family_rooms`
--
ALTER TABLE `family_rooms`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `forum_table`
--
ALTER TABLE `forum_table`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `single_bed_rooms`
--
ALTER TABLE `single_bed_rooms`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `sl_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `family_rooms`
--
ALTER TABLE `family_rooms`
  MODIFY `sl_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forum_table`
--
ALTER TABLE `forum_table`
  MODIFY `sl_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `sl_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `single_bed_rooms`
--
ALTER TABLE `single_bed_rooms`
  MODIFY `sl_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
