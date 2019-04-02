-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 09:11 AM
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
-- Table structure for table `all_notifications`
--

CREATE TABLE `all_notifications` (
  `notification_id` bigint(20) NOT NULL,
  `notification_level` int(11) NOT NULL,
  `came_from` text NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `notification_info` text NOT NULL,
  `notification_timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notification_dismiss` int(11) NOT NULL DEFAULT '1',
  `notification_ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_notifications`
--

INSERT INTO `all_notifications` (`notification_id`, `notification_level`, `came_from`, `user_id`, `notification_info`, `notification_timestamp`, `notification_dismiss`, `notification_ip`) VALUES
(27, 0, 'Logout', 87, 'Session sucessfully terminated!', '2019-03-31 19:15:33', 1, ''),
(28, 0, 'Register', 88, 'New record created successfully', '2019-03-31 19:16:16', 1, ''),
(29, 4, 'Register', 0, 'User already exists!', '2019-03-31 19:20:58', 1, ''),
(30, 4, 'Register', 88, 'User already exists!', '2019-03-31 19:23:35', 1, ''),
(31, 0, 'Register', 89, 'New record created successfully', '2019-03-31 19:23:51', 1, ''),
(32, 4, 'Register', 89, 'User already exists!', '2019-03-31 19:23:56', 1, ''),
(33, 1, 'Register', 0, '123123@ is not a valid email address!', '2019-03-31 19:24:02', 1, ''),
(34, 3, 'Register', 0, 'Please fill in the form right way.', '2019-03-31 19:24:20', 1, ''),
(35, 3, 'Register', 0, 'Please fill in the form right way.', '2019-03-31 19:24:46', 1, ''),
(36, 2, 'Register', 0, 'Passwords do not match!', '2019-03-31 19:24:57', 1, ''),
(37, 0, 'Register', 90, 'New record created successfully', '2019-03-31 19:25:09', 1, ''),
(38, 3, 'Login', 0, 'Wrong information entered!', '2019-03-31 19:25:18', 1, ''),
(39, 4, 'Login', 0, 'Please fill in the whole form.', '2019-03-31 19:25:38', 1, ''),
(40, 0, 'Login', 52, 'Sucessful, info match.', '2019-03-31 19:25:48', 1, ''),
(41, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-03-31 19:30:59', 1, ''),
(42, 3, 'Register', 0, 'Please fill in the form right way.', '2019-03-31 19:31:03', 1, '::1'),
(43, 4, 'Login', 0, 'Please fill in the whole form.', '2019-03-31 19:31:35', 1, ''),
(44, 3, 'Register', 0, 'Please fill in the form right way.', '2019-03-31 19:31:37', 1, '::1'),
(45, 1, 'Register', 0, '123 is not a valid email address!', '2019-03-31 19:31:45', 1, '::1'),
(46, 2, 'Register', 0, 'Passwords do not match!', '2019-03-31 19:31:52', 1, '::1'),
(47, 3, 'Register', 0, 'Please fill in the form right way.', '2019-03-31 19:32:24', 1, '::1'),
(48, 4, 'Login', 0, 'Please fill in the whole form.', '2019-03-31 19:32:42', 1, ''),
(49, 3, 'Register', 0, 'Please fill in the form right way.', '2019-03-31 19:32:48', 1, '::1'),
(50, 4, 'Register', 91, 'User already exists!', '2019-03-31 19:32:51', 1, '::1'),
(51, 4, 'Register', 92, 'User already exists!', '2019-03-31 19:33:25', 1, '::1'),
(52, 4, 'Register', 93, 'User already exists!', '2019-03-31 19:34:35', 1, '::1'),
(53, 1, 'Register', 0, '1111111@ is not a valid email address!', '2019-03-31 19:34:38', 1, '::1'),
(54, 3, 'Register', 0, 'Please fill in the form right way.', '2019-03-31 19:34:55', 1, '::1'),
(55, 2, 'Register', 0, 'Passwords do not match!', '2019-03-31 19:35:05', 1, '::1'),
(56, 0, 'Register', 94, 'New record created successfully', '2019-03-31 19:35:15', 1, '::1'),
(57, 0, 'Login', 52, 'Sucessful, info match.', '2019-03-31 19:37:18', 1, ''),
(58, 0, 'Login', 71, 'Sucessful, info match.', '2019-03-31 19:40:09', 1, ''),
(59, 0, 'Logout', 71, 'Session sucessfully terminated!', '2019-03-31 19:41:23', 1, ''),
(60, 3, 'Register', 0, 'Please fill in the form right way.', '2019-03-31 19:41:35', 1, '192.168.1.5'),
(61, 4, 'Register', 71, 'User already exists!', '2019-03-31 19:41:48', 1, '192.168.1.5'),
(62, 1, 'Register', 0, '123 is not a valid email address!', '2019-03-31 19:41:56', 1, '192.168.1.5'),
(63, 2, 'Register', 0, 'Passwords do not match!', '2019-03-31 19:42:22', 1, '192.168.1.5'),
(64, 0, 'Register', 95, 'New record created successfully', '2019-03-31 19:42:30', 1, '192.168.1.5'),
(65, 0, 'Login', 95, 'Sucessful, info match.', '2019-03-31 19:43:07', 1, ''),
(66, 0, 'Logout', 95, 'Session sucessfully terminated!', '2019-03-31 19:43:27', 1, ''),
(67, 0, 'Login', 95, 'Sucessful, info match.', '2019-03-31 19:43:32', 1, ''),
(68, 0, 'Logout', 95, 'Session sucessfully terminated!', '2019-03-31 19:43:55', 1, ''),
(69, 0, 'Login', 71, 'Sucessful, info match.', '2019-03-31 19:54:59', 1, ''),
(70, 0, 'Logout', 71, 'Session sucessfully terminated!', '2019-03-31 20:02:34', 1, ''),
(71, 4, 'Register', 71, 'User already exists!', '2019-03-31 20:05:51', 1, '::1'),
(72, 4, 'Register', 71, 'User already exists!', '2019-03-31 20:07:52', 1, '::1'),
(73, 4, 'Register', 71, 'User already exists!', '2019-03-31 20:11:28', 1, '::1'),
(74, 1, 'Register', 0, '123 is not a valid email address!', '2019-03-31 20:11:30', 1, '::1'),
(75, 1, 'Register', 0, '123 is not a valid email address!', '2019-03-31 20:18:06', 1, '::1'),
(76, 1, 'Register', 0, '123 is not a valid email address!', '2019-03-31 20:18:07', 1, '::1'),
(77, 0, 'Register', 96, 'New record created successfully', '2019-03-31 20:18:14', 1, '::1'),
(78, 4, 'Register', 96, 'User already exists!', '2019-03-31 20:28:08', 1, '::1'),
(79, 4, 'Login', 0, 'Please fill in the whole form.', '2019-03-31 20:28:11', 1, ''),
(80, 4, 'Login', 0, 'Please fill in the whole form.', '2019-04-01 00:11:46', 1, ''),
(81, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-01 00:11:54', 1, ''),
(82, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-01 00:38:43', 1, ''),
(83, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-01 00:38:46', 1, ''),
(84, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 00:24:05', 1, ''),
(85, 4, 'Login', 0, 'Please fill in the whole form.', '2019-04-02 00:24:07', 1, ''),
(86, 3, 'Login', 0, 'Wrong information entered!', '2019-04-02 00:24:09', 1, ''),
(87, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 00:24:12', 1, ''),
(88, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 05:49:08', 1, ''),
(89, 0, 'Login', 71, 'Sucessful, info match.', '2019-04-02 05:49:12', 1, ''),
(90, 0, 'Logout', 71, 'Session sucessfully terminated!', '2019-04-02 05:56:07', 1, ''),
(91, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 05:56:11', 1, ''),
(92, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 08:21:41', 1, ''),
(93, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 08:21:47', 1, ''),
(94, 0, 'Register Request', 52, 'Approved succesfully 59', '2019-04-02 08:29:36', 1, ''),
(95, 0, 'Register Request', 52, 'Approved succesfully 60', '2019-04-02 08:31:03', 1, '::1'),
(96, 0, 'Register Request', 52, 'Approved succesfully 88', '2019-04-02 08:32:17', 1, '::1'),
(97, 0, 'Register Request', 52, 'Approved succesfully 87', '2019-04-02 08:32:18', 1, '::1'),
(98, 0, 'Register Request', 52, 'Approved succesfully 86', '2019-04-02 08:32:19', 1, '::1'),
(99, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 08:32:28', 1, ''),
(100, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 08:32:51', 1, ''),
(101, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 08:33:09', 1, ''),
(102, 0, 'Login', 71, 'Sucessful, info match.', '2019-04-02 08:33:13', 1, ''),
(103, 0, 'Logout', 71, 'Session sucessfully terminated!', '2019-04-02 08:34:20', 1, ''),
(104, 0, 'Login', 71, 'Sucessful, info match.', '2019-04-02 08:34:23', 1, ''),
(105, 0, 'Logout', 71, 'Session sucessfully terminated!', '2019-04-02 08:35:07', 1, ''),
(106, 3, 'Login', 0, 'Wrong information entered!', '2019-04-02 08:35:12', 1, ''),
(107, 2, 'Login', 0, 'Account not active yet.', '2019-04-02 08:38:28', 1, ''),
(108, 2, 'Login', 0, 'Account not active yet.', '2019-04-02 08:38:52', 1, ''),
(109, 2, 'Login', 0, 'Account not active yet.', '2019-04-02 08:38:56', 1, ''),
(110, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 08:39:00', 1, ''),
(111, 0, 'Register Request', 52, 'Approved succesfully 62', '2019-04-02 08:45:54', 1, '::1'),
(112, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 08:48:37', 1, ''),
(113, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 08:48:40', 1, ''),
(114, 2, 'Login', 0, 'Account not active yet.', '2019-04-02 08:49:02', 1, ''),
(115, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 08:49:07', 1, ''),
(116, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 08:51:44', 1, ''),
(117, 4, 'Login', 0, 'Please fill in the whole form.', '2019-04-02 08:51:45', 1, '::1'),
(118, 3, 'Register', 0, 'Please fill in the form right way.', '2019-04-02 08:53:23', 1, '::1'),
(119, 3, 'Register', 0, 'Please fill in the form right way.', '2019-04-02 08:54:17', 1, '::1'),
(120, 1, 'Register', 0, '123123 is not a valid email address!', '2019-04-02 08:54:26', 1, '::1'),
(121, 2, 'Register', 0, 'Passwords do not match!', '2019-04-02 08:55:11', 1, '::1'),
(122, 0, 'Register', 97, 'New record created successfully', '2019-04-02 08:55:18', 1, '::1'),
(123, 2, 'Login', 0, 'Account not active yet.', '2019-04-02 08:55:23', 1, ''),
(124, 0, 'Register Request', 52, 'Approved succesfully 97', '2019-04-02 08:55:33', 1, '::1'),
(125, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 08:56:24', 1, ''),
(126, 4, 'Login', 0, 'Please fill in the whole form.', '2019-04-02 08:56:26', 1, '::1'),
(127, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 08:56:30', 1, ''),
(128, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 08:57:09', 1, ''),
(129, 3, 'Login', 0, 'Wrong information entered!', '2019-04-02 08:57:15', 1, ''),
(130, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 08:57:17', 1, ''),
(131, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 08:58:19', 1, ''),
(132, 3, 'Login', 0, 'Wrong information entered!', '2019-04-02 08:58:32', 1, '::1'),
(133, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 08:58:34', 1, ''),
(134, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 08:59:25', 1, ''),
(135, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 08:59:31', 1, '::1'),
(136, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 09:01:06', 1, ''),
(137, 2, 'Login', 71, 'Account not active yet.', '2019-04-02 09:01:08', 1, '::1'),
(138, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 09:01:16', 1, '::1'),
(139, 0, 'Logout', 52, 'Session sucessfully terminated!', '2019-04-02 09:04:28', 1, '::1'),
(140, 0, 'Login', 52, 'Sucessful, info match.', '2019-04-02 09:04:35', 1, '::1'),
(141, 0, 'Register Request', 52, 'Approved succesfully 61', '2019-04-02 09:06:34', 1, '::1');

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
(52, 'MikiUser', 'asdasd@asd.asd', '', '', '', '', '', '', '123', '', '2019-03-27 17:36:49', 0, 0, '0000-00-00 00:00:00', 1),
(53, 'MikiUser1', 'asdasd@asd.asd', '', '', '', '', '', '', '123', '', '2019-03-27 17:36:56', 0, 0, '0000-00-00 00:00:00', 1),
(54, 'Miki1User1', 'asdasd@asd.asde', '', '', '', '', '', '', '123', '', '2019-03-27 17:37:41', 0, 0, '0000-00-00 00:00:00', 1),
(55, 'Miki1User12', 'asdasd@asd.asde', '', '', '', '', '', '', 'Miki1User12', '', '2019-03-27 17:43:26', 0, 0, '0000-00-00 00:00:00', 1),
(56, 'userDemo', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:45:17', 0, 0, '0000-00-00 00:00:00', 1),
(57, 'userDemo11', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:54:12', 0, 0, '0000-00-00 00:00:00', 1),
(58, 'userDemo112', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:54:15', 0, 0, '0000-00-00 00:00:00', 1),
(59, 'userDemo1123', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:54:18', 0, 0, '0000-00-00 00:00:00', 1),
(60, 'userDemo11234', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:54:20', 0, 0, '0000-00-00 00:00:00', 1),
(61, 'userDemo112345', 'eee@eee.com', '', '', '', '', '', '', 'userDemo', '', '2019-03-27 17:54:24', 0, 0, '0000-00-00 00:00:00', 1),
(62, 'userDemo1123451', 'eee@eee.com', '', '', '', '', '', '', 'userDemo11', '', '2019-03-27 17:54:40', 0, 0, '0000-00-00 00:00:00', 1),
(63, '123123', '1231231@mail.cop', '', '', '', '', '', '', '123123', '', '2019-03-28 20:10:46', 0, 0, '0000-00-00 00:00:00', 0),
(64, '123123123', '1231231@mail.cop', '', '', '', '', '', '', '123', '', '2019-03-28 20:10:53', 0, 0, '0000-00-00 00:00:00', 0),
(65, '23432', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-28 20:39:20', 0, 0, '0000-00-00 00:00:00', 0),
(66, '321', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-28 20:43:51', 0, 0, '0000-00-00 00:00:00', 0),
(67, '123123333', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-28 22:44:25', 0, 0, '0000-00-00 00:00:00', 0),
(68, '1231233', '123123@mail.com', '', '', '', '', '', '', '123123', '', '2019-03-29 02:37:59', 0, 0, '0000-00-00 00:00:00', 0),
(69, '321123', '123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-29 02:51:16', 0, 0, '0000-00-00 00:00:00', 0),
(70, '123321', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-29 12:01:19', 0, 0, '0000-00-00 00:00:00', 0),
(71, '123', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-29 12:04:38', 0, 0, '0000-00-00 00:00:00', 0),
(72, '1231', '123123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-29 12:07:49', 0, 0, '0000-00-00 00:00:00', 0),
(73, '1233', '123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-29 15:03:33', 0, 0, '0000-00-00 00:00:00', 0),
(74, '1231231233', '123@mail.com', '', '', '', '', '', '', '12341', '', '2019-03-29 18:08:04', 0, 0, '0000-00-00 00:00:00', 0),
(75, '1233211', '123@mail.com', '', '', '', '', '', '', '12333', '', '2019-03-29 22:45:47', 0, 0, '0000-00-00 00:00:00', 0),
(76, '123321123', '123@123.com', '', '', '', '', '', '', '123', '', '2019-03-31 04:27:22', 0, 0, '0000-00-00 00:00:00', 0),
(77, 'asdasdasd', 'asdasdasd@asdasdasd.aa', '', '', '', '', '', '', 'asdasdasd', '', '2019-03-31 04:29:01', 0, 0, '0000-00-00 00:00:00', 0),
(78, 'qweasdzxc', 'qweasdzxc@aaa.com', '', '', '', '', '', '', 'qweasdzxc', '', '2019-03-31 04:39:34', 0, 0, '0000-00-00 00:00:00', 0),
(79, '159263159263', '159263159263@asd.com', '', '', '', '', '', '', '159263159263', '', '2019-03-31 04:41:51', 0, 0, '0000-00-00 00:00:00', 0),
(80, 'rrrsad', 'rrrsad@mail.com', '', '', '', '', '', '', 'rrrsad', '', '2019-03-31 04:43:37', 0, 0, '0000-00-00 00:00:00', 0),
(81, 'zzzzzzz', 'zzzzzzz@zzzz.zz', '', '', '', '', '', '', 'zzzzzzz', '', '2019-03-31 04:47:41', 0, 0, '0000-00-00 00:00:00', 0),
(82, '11111111', '11111111@mail.com', '', '', '', '', '', '', '11111111', '', '2019-03-31 04:52:28', 0, 0, '0000-00-00 00:00:00', 0),
(83, 'ccccc', 'ccccc@cc.cc', '', '', '', '', '', '', 'ccccc', '', '2019-03-31 05:00:19', 0, 0, '0000-00-00 00:00:00', 0),
(84, 'vvvvvvv', 'vvvvvvv@mmm.com', '', '', '', '', '', '', 'vvvvvvv', '', '2019-03-31 05:02:21', 0, 0, '0000-00-00 00:00:00', 0),
(85, 'rrrrrrrrr', 'rrrrrrrrr@mail.com', '', '', '', '', '', '', 'rrrrrrrrr', '', '2019-03-31 05:03:13', 0, 0, '0000-00-00 00:00:00', 0),
(86, 'qweasd123', '123123@mail.com', '', '', '', '', '', '', 'qweasd123', '', '2019-03-31 19:11:44', 0, 0, '0000-00-00 00:00:00', 1),
(87, 'qweasd123111', '123123@mail.com', '', '', '', '', '', '', 'qweasd123111', '', '2019-03-31 19:14:25', 0, 0, '0000-00-00 00:00:00', 1),
(88, '987654321', '123123@mail.com', '', '', '', '', '', '', '987654321', '', '2019-03-31 19:16:16', 0, 0, '0000-00-00 00:00:00', 1),
(89, '9876543211', '123123@mail.com', '', '', '', '', '', '', '9876543211', '', '2019-03-31 19:23:51', 0, 0, '0000-00-00 00:00:00', 0),
(90, '98765432111', '123123@MAIL.COM', '', '', '', '', '', '', '98765432111', '', '2019-03-31 19:25:09', 0, 0, '0000-00-00 00:00:00', 0),
(91, '12311111111111', '123@mail.com', '', '', '', '', '', '', '12311111111111', '', '2019-03-31 19:31:55', 0, 0, '0000-00-00 00:00:00', 0),
(92, '1231111111111112311111111111', '123@mail.com', '', '', '', '', '', '', '1231111111111112311111111111', '', '2019-03-31 19:33:00', 0, 0, '0000-00-00 00:00:00', 0),
(93, '1111111@ma.ma', '1111111@ma.ma', '', '', '', '', '', '', '1111111@ma.ma', '', '2019-03-31 19:33:38', 0, 0, '0000-00-00 00:00:00', 0),
(94, '22222222', '1111111@aaa.com', '', '', '', '', '', '', '22222222', '', '2019-03-31 19:35:15', 0, 0, '0000-00-00 00:00:00', 0),
(95, 'zzzzzzzzzzzzz', '12aaa@mail.com', '', '', '', '', '', '', 'zzzzzzzzzzzzz', '', '2019-03-31 19:42:30', 0, 0, '0000-00-00 00:00:00', 0),
(96, '12311', '123@mail.com', '', '', '', '', '', '', '123', '', '2019-03-31 20:18:14', 0, 0, '0000-00-00 00:00:00', 0),
(97, '11111111111', '123123@mail.com', '', '', '', '', '', '', '11111111111', '', '2019-04-02 08:55:18', 0, 0, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `setting_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `color_scheme` varchar(10) NOT NULL,
  `background_type` int(11) NOT NULL,
  `user_language` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_settings`
--

INSERT INTO `user_settings` (`setting_id`, `user_id`, `color_scheme`, `background_type`, `user_language`) VALUES
(1, 52, 'Dark', 2, 'en'),
(2, 71, 'Light', 2, 'en'),
(3, 76, 'Dark', 2, 'en'),
(4, 77, 'Dark', 0, 'en'),
(5, 78, 'Dark', 0, 'en'),
(6, 79, 'Dark', 0, 'en'),
(7, 80, 'Dark', 0, 'en'),
(8, 81, 'Dark', 0, 'en'),
(9, 82, 'Dark', 0, 'ru'),
(10, 83, 'Dark', 0, 'en'),
(11, 84, 'Dark', 0, 'en'),
(12, 85, 'Dark', 2, 'en'),
(13, 87, 'Dark', 0, 'en'),
(14, 95, 'Light', 1, 'en');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_notifications`
--
ALTER TABLE `all_notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_notifications`
--
ALTER TABLE `all_notifications`
  MODIFY `notification_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `setting_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
