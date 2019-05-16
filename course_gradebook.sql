-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 01:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_gradebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `C_id` int(20) NOT NULL,
  `Cname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`C_id`, `Cname`) VALUES
(5324, 'SE1'),
(5335, 'WDM'),
(5382, 'Secure Programming'),
(6331, 'Cloud Computing');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `S_id` int(10) NOT NULL,
  `C_id` int(10) NOT NULL,
  `Grades` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `I_id` int(20) NOT NULL,
  `I_name` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`I_id`, `I_name`, `DOB`, `Email`, `Username`, `Password`) VALUES
(1001644000, 'john', '12/12/1234', 'john@gmail.com', 'john', 'john');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_profile`
--

CREATE TABLE `instructor_profile` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `office_address` varchar(100) NOT NULL,
  `office_hours` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_profile`
--

INSERT INTO `instructor_profile` (`first_name`, `last_name`, `office_address`, `office_hours`, `email`, `password`) VALUES
('rachana', 'patil', 'india', '2', 'fvfe@yahoo', 'rewt'),
('rachana', 'patil', 'india', '2', 'rachana@yahoo', 'rachana');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_id` int(10) NOT NULL,
  `S_name` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_id`, `S_name`, `DOB`, `email_id`, `Username`, `Password`) VALUES
(1001644220, 'Olivia', '12/02/1985', 'olivia@gmail.com', 'olivia', 'olivia');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`fname`, `lname`, `email`, `password`) VALUES
('rachana', 'patil', 'fvfe@yahoo', '12'),
('rachana', 'patil', 'fvfe@yahoo', '12'),
('rachana', 'patil', 'rachana.n.patil@gmail.com', 'rachana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD KEY `S_id` (`S_id`),
  ADD KEY `C_id` (`C_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`I_id`);

--
-- Indexes for table `instructor_profile`
--
ALTER TABLE `instructor_profile`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`S_id`) REFERENCES `student` (`S_id`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`C_id`) REFERENCES `courses` (`C_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
