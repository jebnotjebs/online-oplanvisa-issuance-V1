-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 09:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oplanvisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `post_id` int(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` varchar(250) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `announcement_content`
--

CREATE TABLE `announcement_content` (
  `id` int(250) NOT NULL,
  `body` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_member`
--

CREATE TABLE `tbl_admin_member` (
  `id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_member`
--

INSERT INTO `tbl_admin_member` (`id`, `name`, `lname`, `email`, `password`) VALUES
(49, 'Johndel', 'Barcelona', 'johndelbarcelona@gmail.com', '$2y$10$WKnDzYkrANRaGfSJhsf5WukUnhJ9TnWfZtBt8joEBW/5/Oc6zTHdW');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application_user`
--

CREATE TABLE `tbl_application_user` (
  `userid` int(11) NOT NULL,
  `userEml` varchar(250) NOT NULL,
  `userPwd` varchar(250) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `Control_Num` int(100) NOT NULL,
  `Province` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Baranggay` varchar(100) NOT NULL,
  `Mobile_Num` varchar(12) NOT NULL,
  `Make` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Chasis_Num` varchar(100) NOT NULL,
  `Engine_Num` varchar(100) NOT NULL,
  `Engine_Dspcmt` varchar(100) NOT NULL,
  `OR_Num` varchar(100) NOT NULL,
  `CR_Num` varchar(100) NOT NULL,
  `Plate_Num` varchar(100) NOT NULL,
  `Ownership` varchar(250) NOT NULL,
  `Date` datetime NOT NULL,
  `user_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_application_user`
--

INSERT INTO `tbl_application_user` (`userid`, `userEml`, `userPwd`, `FName`, `LName`, `Control_Num`, `Province`, `City`, `Baranggay`, `Mobile_Num`, `Make`, `Model`, `Color`, `Chasis_Num`, `Engine_Num`, `Engine_Dspcmt`, `OR_Num`, `CR_Num`, `Plate_Num`, `Ownership`, `Date`, `user_status`) VALUES
(269, 'jebby028@gmail.com', '$2y$10$e5ceE.r8qjVjYl9gvOxisOhf/4TNsYUZXpI7Tigv6e6NCfUgKMyY2', 'Jang', 'Vicente', 123123, '13123123', 'Ramon', '13123123', '1412414', '12312312', '123123123', '12312313', '12312313', '1231231', '31231231', '12312312', '123123', '123123', 'private', '2022-02-02 02:14:38', 'pending'),
(271, 'johndelbarcelona@gmail.com', '$2y$10$SxENO0pM0gI8bjYvI1B1iO6F3FwaPvaTRv7/7xblK8wgC/AS/jZtK', 'David', 'Bartolome', 123123, '3123123', '123132', '123123', '1231232', '123123', '123123', '123123', '11231231', '23123123', '123123123', '123123', '12312312', '123123', 'private', '2022-02-02 00:55:15', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registered_member`
--

CREATE TABLE `tbl_registered_member` (
  `cuz_id` int(11) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `Control_Num` int(100) NOT NULL,
  `Province` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Baranggay` varchar(100) NOT NULL,
  `Mobile_Num` varchar(12) NOT NULL,
  `Make` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Chasis_Num` varchar(100) NOT NULL,
  `Engine_Num` varchar(100) NOT NULL,
  `Engine_Dspcmt` varchar(100) NOT NULL,
  `OR_Num` varchar(100) NOT NULL,
  `CR_Num` varchar(100) NOT NULL,
  `Plate_Num` varchar(100) NOT NULL,
  `Ownership` varchar(250) NOT NULL,
  `Date` datetime NOT NULL,
  `user_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registered_visa`
--

CREATE TABLE `tbl_registered_visa` (
  `cuz_id` int(11) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `Control_Num` int(100) NOT NULL,
  `Province` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Baranggay` varchar(100) NOT NULL,
  `Mobile_Num` varchar(12) NOT NULL,
  `Make` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Chasis_Num` varchar(100) NOT NULL,
  `Engine_Num` varchar(100) NOT NULL,
  `Engine_Dspcmt` varchar(100) NOT NULL,
  `OR_Num` varchar(100) NOT NULL,
  `CR_Num` varchar(100) NOT NULL,
  `Plate_Num` varchar(100) NOT NULL,
  `Ownership` varchar(250) NOT NULL,
  `Date` datetime NOT NULL,
  `user_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration_form`
--

CREATE TABLE `tbl_registration_form` (
  `cuz_id` int(11) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `Control_Num` int(100) NOT NULL,
  `Province` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Baranggay` varchar(100) NOT NULL,
  `Mobile_Num` varchar(12) NOT NULL,
  `Make` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Chasis_Num` varchar(100) NOT NULL,
  `Engine_Num` varchar(100) NOT NULL,
  `Engine_Dspcmt` varchar(100) NOT NULL,
  `OR_Num` varchar(100) NOT NULL,
  `CR_Num` varchar(100) NOT NULL,
  `Plate_Num` varchar(100) NOT NULL,
  `Ownership` varchar(250) NOT NULL,
  `Date` datetime NOT NULL,
  `user_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userid` int(255) NOT NULL,
  `userEml` varchar(100) NOT NULL,
  `userPwd` varchar(999) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userid`, `userEml`, `userPwd`, `status`) VALUES
(55, 'johndelbarcelona@gmail.com', '$2y$10$22Rcrhw1C4JsJ9ijl01k0elJNqYG2c01jrpB9h0HQY7DHydCdoJzy', '0');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img_dir` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `announcement_content`
--
ALTER TABLE `announcement_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_member`
--
ALTER TABLE `tbl_admin_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_application_user`
--
ALTER TABLE `tbl_application_user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tbl_registered_member`
--
ALTER TABLE `tbl_registered_member`
  ADD PRIMARY KEY (`cuz_id`);

--
-- Indexes for table `tbl_registered_visa`
--
ALTER TABLE `tbl_registered_visa`
  ADD PRIMARY KEY (`cuz_id`);

--
-- Indexes for table `tbl_registration_form`
--
ALTER TABLE `tbl_registration_form`
  ADD PRIMARY KEY (`cuz_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `post_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `announcement_content`
--
ALTER TABLE `announcement_content`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_admin_member`
--
ALTER TABLE `tbl_admin_member`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_application_user`
--
ALTER TABLE `tbl_application_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `tbl_registered_member`
--
ALTER TABLE `tbl_registered_member`
  MODIFY `cuz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `tbl_registered_visa`
--
ALTER TABLE `tbl_registered_visa`
  MODIFY `cuz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `tbl_registration_form`
--
ALTER TABLE `tbl_registration_form`
  MODIFY `cuz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
