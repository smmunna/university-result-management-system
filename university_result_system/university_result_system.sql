-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 04:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_result_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'munna@gmail.com', 'munna123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `faculty_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `credit_hours` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`faculty_id`, `student_id`, `course_id`, `course_name`, `course_code`, `credit_hours`) VALUES
(1010, 20103019, 1, 'Fundamentals of Computer and Applications', 'CSC-103', 3),
(1010, 20103022, 2, 'Computer Application Lab', 'CSC-104', 1),
(1011, 20103023, 3, 'Basic English Composition', 'ENG-101', 4),
(1012, 20103024, 4, 'Educational Planning', 'ART-102', 1),
(1013, 20103025, 5, 'Modern Living', 'ART-204', 3);

-- --------------------------------------------------------

--
-- Table structure for table `course_enroll`
--

CREATE TABLE `course_enroll` (
  `student_id` int(10) NOT NULL,
  `faculty_id` int(10) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `credit_hours` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_enroll`
--

INSERT INTO `course_enroll` (`student_id`, `faculty_id`, `course_code`, `credit_hours`) VALUES
(20103019, 1010, 'CSC-103', 3),
(20103019, 1010, 'CSC-104', 1),
(20103019, 1011, 'ENG-101', 4),
(20103019, 1012, 'ART-102', 1),
(20103019, 1013, 'ART-204', 3);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(10) NOT NULL,
  `f_username` varchar(35) NOT NULL,
  `f_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `f_username`, `f_password`) VALUES
(1010, 'rubayea@gmail.com', '1234'),
(1011, 'munna@gmail.com', '1234'),
(1012, 'abid@gmail.com', '1234'),
(1013, 'tushar@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `faculty_id` int(10) NOT NULL,
  `faculty_name` varchar(35) NOT NULL,
  `faculty_email` varchar(35) NOT NULL,
  `faculty_phone` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(35) NOT NULL,
  `faculty_dept` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`faculty_id`, `faculty_name`, `faculty_email`, `faculty_phone`, `gender`, `address`, `faculty_dept`) VALUES
(1, 'Rubayea Ferdows', 'rubayea@gmail.com', '01918218965', 'Female', 'Dhaka', 'CSE'),
(2, 'Minhazul Abedin Munna', 'munna@gmail.com', '01611765966', 'Male', 'Jamalpur', 'CSE'),
(3, 'Abid Hasan', 'abid@gmail.com', '01918232965', 'Male', 'Noakhali', 'MATH'),
(4, 'Fahadul Alam', 'fahad@gmail.com', '1611765964', 'Male', 'Coxbazar', 'PHI'),
(5, 'Nabid ', 'nabid@gmail.com', '1918232965', 'Male', 'Gopalgonj', 'MATH'),
(6, 'Jamiul Islam', 'jamiul@gmail.com', '1611765964', 'Male', 'Tajukrar', 'EEE'),
(7, 'Jihad ', 'jihad@gmail.com', '01918232965', 'Male', 'Ramganj', 'ENG'),
(8, 'Tanvir Islam', 'tanvir@gmail.com', '01611765964', 'Male', 'Jinaigati', 'BAN');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `student_id` int(10) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `credit_hours` int(11) NOT NULL,
  `grade_point` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`student_id`, `course_code`, `credit_hours`, `grade_point`) VALUES
(20103019, 'CSC-103', 3, 4),
(20103019, 'CSC-104', 1, 4),
(20103019, 'ENG-101', 4, 4),
(20103019, 'ART-102', 1, 4),
(20103019, 'ART-204', 3, 3.4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) NOT NULL,
  `stu_username` varchar(35) NOT NULL,
  `stu_pass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `stu_username`, `stu_pass`) VALUES
(20103019, 'smmunna', '1234'),
(20103021, 'abid', '1234'),
(20103022, 'tushar', '1234'),
(20103023, 'sakib', '1234'),
(20103024, 'kawsar', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(10) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `name`, `email`, `phone`, `gender`, `address`) VALUES
(20103019, 'Minhazul Abedin Munna', '20103019@iubat.edu', '01611176596', 'Male', ' Dhaka'),
(20103021, 'Abid Hasan', 'abidhasan@gmail.com', '01611765966', 'Male', 'Dhaka'),
(20103022, 'Tushar', 'tushar@gmail.com', '01935991255', 'Male', 'Rajsahi'),
(20103023, 'Sakib', 'sakib@gmail.com', '01611765966', 'Male', 'Khulna'),
(20103024, 'Kawsar', 'kawsar@gmail.com', '01935991255', 'Male', 'Sylet'),
(20103025, 'Abdulla', 'abdul@gmail.com', '01935991255', 'Male', 'Dhaka'),
(20103026, 'Firuz', 'firuz@gmail.com', '01935991255', 'Male', 'Rangpur'),
(20103027, 'Jubayer', 'jubayer@gmail.com', '01935991255', 'Male', 'Khulna'),
(20103028, 'Nahidur', 'nahid@gmail.com', '01935991255', 'Male', 'Jamalpur'),
(20103029, 'Sohag', 'sohag@gmail.com', '01935991255', 'Male', 'Sarishabari'),
(20103030, 'Ahmmed', 'ahmmed@gmail.com', '01935991255', 'Male', 'Mymensingh'),
(20103031, 'Tofazzal', 'tofazzal@gmail.com', '01935991255', 'Male', 'Comilla'),
(20103032, 'Sohanur Rahman', 'sohan@gmail.com', '01935991255', 'Male', 'Dhaka'),
(20103033, 'Salman', 'salman@gmail.com', '01935991255', 'Male', 'Sylet'),
(20103034, 'Mujibur', 'mujibur@gmail.com', '01935991255', 'Male', 'Rajsahi'),
(20103035, 'Ziyaur', 'ziyaur@gmail.com', '01935991255', 'Male', 'Rangpur'),
(20103036, 'Apurbo', 'apurbo@gmail.com', '01935991255', 'Male', 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20103025;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
