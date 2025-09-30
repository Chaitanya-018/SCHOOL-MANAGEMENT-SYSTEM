-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 04:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `sno` int(11) NOT NULL,
  `Admin_name` varchar(25) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `ContactNumber` varchar(30) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`sno`, `Admin_name`, `user_name`, `password`, `email`, `ContactNumber`, `creation_date`) VALUES
(1, 'chaitanya', 'chaitu', 'chaitu367', 'chaitu123@gmail.com', '8008331645', '2024-01-20 16:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `notice_stu`
--

CREATE TABLE `notice_stu` (
  `id` int(11) NOT NULL,
  `Notice_title` varchar(20) NOT NULL,
  `class` varchar(11) NOT NULL,
  `notice_mess` varchar(20) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hide` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice_stu`
--

INSERT INTO `notice_stu` (`id`, `Notice_title`, `class`, `notice_mess`, `creation_date`, `hide`) VALUES
(1, '	Marks of Unit Test.', '11 B', 'This for testing', '2024-01-20 09:36:25', 0),
(2, 'Marks of test', '10 B', 'This is testing', '2024-01-09 07:31:15', 0),
(3, '	Marks of Unit Test.', '10 B', 'This is for testing', '2024-01-09 07:25:47', 0),
(4, '	Marks of Unit Test.', '10 C', 'This is for testing', '2024-01-09 07:27:18', 0),
(5, '	Marks of Unit Test.', '11 B', 'This is for testing', '2024-01-09 07:29:02', 0),
(6, '	Marks of Unit Test.', '11 B', 'This is for testing', '2024-01-15 06:45:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `MobileNumber` bigint(20) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '<p>Our goal is to focus on the holistic development of each child, and to give them a competitive edge with the help of an extensive curriculum and dynamic teaching methodologies.</p>', NULL, NULL, '2024-01-23 03:29:05'),
(2, 'contactus', 'Contactus', '890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'infodata@gmail.com', 8008331645, '2024-01-15 08:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `schclass`
--

CREATE TABLE `schclass` (
  `id` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `section` varchar(20) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schclass`
--

INSERT INTO `schclass` (`id`, `class_name`, `section`, `creation_date`) VALUES
(1, '6', 'C', '2024-01-20 09:11:13'),
(2, '10', 'C', '2024-01-20 09:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `Sno` int(11) NOT NULL,
  `StudentName` varchar(30) NOT NULL,
  `StudentEmail` varchar(20) NOT NULL,
  `StudentClass` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `StuID` varchar(30) NOT NULL,
  `FatherName` varchar(30) NOT NULL,
  `MotherName` varchar(20) NOT NULL,
  `ContactNumber` int(20) NOT NULL,
  `AlternateNumber` int(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hide` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`Sno`, `StudentName`, `StudentEmail`, `StudentClass`, `Gender`, `DOB`, `StuID`, `FatherName`, `MotherName`, `ContactNumber`, `AlternateNumber`, `Address`, `UserName`, `Password`, `image`, `date_add`, `hide`) VALUES
(1, 'Rakesh Kumar', 'raki123@gmail.com', '10C', 'Male', '2002-02-03', '17146', 'srinivas', 'hyma', 2147483647, 2147483647, '    Visakhapatnam', ' Raki_096', 'Raki@096', 'IMG-20200320-WA0087.jpg', '2024-01-07 18:30:00', 0),
(2, 'chaitu', 'chaitu123@gmail.com', '11B', 'Male', '2000-10-21', '20984', 'prasad', 'syamala', 2147483647, 2147483647, ' vizag', ' chaitu367', 'chaitu367', 'IMG_20200206_201629.jpg', '2024-01-22 18:30:00', 0),
(3, 'shaik moula', 'moula12@gmail.com', '10 B', 'Male', '2000-08-02', '20985', 'father', 'mother', 2147483647, 2147483647, 'vizag', ' moula123', 'moula123', ' pexels-philippe-donn-1114690.jpg', '2024-01-08 06:34:58', 1),
(4, 'ujwala', 'ujjju123@gmail', '11 C', 'Female', '2002-06-09', '20986', 'prasad', 'syamala', 2147483647, 2147483647, 'vizag', ' ujju123', 'ujju123', ' IMG_20190524_194138.jpg', '2024-01-22 18:30:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbpublice_notice`
--

CREATE TABLE `tbpublice_notice` (
  `id` int(11) NOT NULL,
  `NoticeTitle` varchar(200) NOT NULL,
  `NoticeMessage` mediumtext NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hide` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbpublice_notice`
--

INSERT INTO `tbpublice_notice` (`id`, `NoticeTitle`, `NoticeMessage`, `CreationDate`, `hide`) VALUES
(1, 'School will re-open', 'Consult your class teacher.', '2024-01-15 06:24:52', 0),
(2, 'School will re-open', 'holiday', '2024-01-15 07:07:35', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `notice_stu`
--
ALTER TABLE `notice_stu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schclass`
--
ALTER TABLE `schclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `tbpublice_notice`
--
ALTER TABLE `tbpublice_notice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice_stu`
--
ALTER TABLE `notice_stu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schclass`
--
ALTER TABLE `schclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbpublice_notice`
--
ALTER TABLE `tbpublice_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
