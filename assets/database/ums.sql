-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 10:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `college_location` varchar(30) NOT NULL,
  `college_phone` bigint(20) NOT NULL,
  `college_univ_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `course_dept_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_faculty`
--

CREATE TABLE `course_faculty` (
  `faculty_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `dept_college_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department_faculty`
--

CREATE TABLE `department_faculty` (
  `department_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_fname` varchar(30) NOT NULL,
  `faculty_lname` varchar(30) NOT NULL,
  `faculty_phone` bigint(20) NOT NULL,
  `faculty_gender` varchar(10) NOT NULL,
  `faculty_email` varchar(50) NOT NULL,
  `faculty_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `project_area` varchar(30) NOT NULL,
  `project_faculty_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `stud_fname` varchar(20) NOT NULL,
  `stud_lname` varchar(20) NOT NULL,
  `stud_gender` varchar(20) NOT NULL,
  `stud_address` varchar(30) DEFAULT NULL,
  `stud_phone` bigint(20) NOT NULL,
  `stud_email` varchar(50) NOT NULL,
  `stud_dob` date NOT NULL,
  `stud_dept_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `stud_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `univ_id` int(11) NOT NULL,
  `univ_name` varchar(50) NOT NULL,
  `univ_rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`univ_id`, `univ_name`, `univ_rank`) VALUES
(1001, 'UVW University', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `dob`, `phone`, `email`, `username`, `password`) VALUES
('Admin', '2000-01-01', 98876757, 'admin@admin.com', 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`),
  ADD KEY `college_univ_id` (`college_univ_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_dept_id` (`course_dept_id`);

--
-- Indexes for table `course_faculty`
--
ALTER TABLE `course_faculty`
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD KEY `dept_college_id` (`dept_college_id`);

--
-- Indexes for table `department_faculty`
--
ALTER TABLE `department_faculty`
  ADD KEY `department_id` (`department_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `project_faculty_id` (`project_faculty_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`),
  ADD KEY `stud_dept_id` (`stud_dept_id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD KEY `stud_id` (`stud_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`univ_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `college`
--
ALTER TABLE `college`
  ADD CONSTRAINT `college_ibfk_1` FOREIGN KEY (`college_univ_id`) REFERENCES `university` (`univ_id`) ON DELETE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`course_dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `course_faculty`
--
ALTER TABLE `course_faculty`
  ADD CONSTRAINT `course_faculty_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_faculty_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`dept_college_id`) REFERENCES `college` (`college_id`) ON DELETE CASCADE;

--
-- Constraints for table `department_faculty`
--
ALTER TABLE `department_faculty`
  ADD CONSTRAINT `department_faculty_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `department_faculty_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE;

--
-- Constraints for table `research`
--
ALTER TABLE `research`
  ADD CONSTRAINT `research_ibfk_1` FOREIGN KEY (`project_faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`stud_dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `student` (`stud_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
