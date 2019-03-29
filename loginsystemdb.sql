-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 12:10 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_job_title` varchar(100) NOT NULL,
  `user_description` text NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_picture` text NOT NULL,
  `user_password` text NOT NULL,
  `user_salt` varchar(10) NOT NULL,
  `user_register_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_work_location` int(11) NOT NULL,
  `user_power_level` int(11) NOT NULL,
  `user_last_login_datetime` datetime NOT NULL,
  `user_status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`user_id`, `username`, `user_email`, `user_first_name`, `user_last_name`, `user_job_title`, `user_description`, `user_phone`, `user_picture`, `user_password`, `user_salt`, `user_register_datetime`, `user_work_location`, `user_power_level`, `user_last_login_datetime`, `user_status`) VALUES
(52, 'MikiUser', 'asdasd@asd.asd', '', '', '', '', '', '', '123', '', '2019-03-27 17:36:49', 0, 0, '0000-00-00 00:00:00', 0),
(53, 'MikiUser1', 'asdasd@asd.asd', '', '', '', '', '', '', '123', '', '2019-03-27 17:36:56', 0, 0, '0000-00-00 00:00:00', 0),
(54, 'Miki1User1', 'asdasd@asd.asde', '', '', '', '', '', '', '123', '', '2019-03-27 17:37:41', 0, 0, '0000-00-00 00:00:00', 0),
(55, 'Miki1User12', 'asdasd@asd.asde', '', '', '', '', '', '', 'Miki1User12', '', '2019-03-27 17:43:26', 0, 0, '0000-00-00 00:00:00', 0),
(56, 'userDemo', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:45:17', 0, 0, '0000-00-00 00:00:00', 0),
(57, 'userDemo11', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:54:12', 0, 0, '0000-00-00 00:00:00', 0),
(58, 'userDemo112', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:54:15', 0, 0, '0000-00-00 00:00:00', 0),
(59, 'userDemo1123', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:54:18', 0, 0, '0000-00-00 00:00:00', 0),
(60, 'userDemo11234', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:54:20', 0, 0, '0000-00-00 00:00:00', 0),
(61, 'userDemo112345', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:54:24', 0, 0, '0000-00-00 00:00:00', 0),
(62, 'userDemo1123451', 'eee@eee.com', '', '', '', '', '', '', 'userDemo11', '', '2019-03-27 17:54:40', 0, 0, '0000-00-00 00:00:00', 0),
(63, '123123', '1231231@mail.cop', '', '', '', '', '', '', '123123', '', '2019-03-28 20:10:46', 0, 0, '0000-00-00 00:00:00', 0),
(64, '123123123', '1231231@mail.cop', '', '', '', '', '', '', '123', '', '2019-03-28 20:10:53', 0, 0, '0000-00-00 00:00:00', 0),
(65, '23432', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-28 20:39:20', 0, 0, '0000-00-00 00:00:00', 0),
(66, '321', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-28 20:43:51', 0, 0, '0000-00-00 00:00:00', 0),
(67, '123123333', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-28 22:44:25', 0, 0, '0000-00-00 00:00:00', 0),
(68, '1231233', '123123@mail.com', '', '', '', '', '', '', '123123', '', '2019-03-29 02:37:59', 0, 0, '0000-00-00 00:00:00', 0),
(69, '321123', '123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-29 02:51:16', 0, 0, '0000-00-00 00:00:00', 0),
(70, '123321', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-29 12:01:19', 0, 0, '0000-00-00 00:00:00', 0),
(71, '123', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-29 12:04:38', 0, 0, '0000-00-00 00:00:00', 0),
(72, '1231', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-29 12:07:49', 0, 0, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
