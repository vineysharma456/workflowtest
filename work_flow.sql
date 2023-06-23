-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 11:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_flow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Surname`, `Email`, `Password`, `Role`) VALUES
(1, 'Admin', 'sharma', 'admin@gmail.com', 'admin', 'admin'),
(2, 'ritik', 'sharma', 'mrid@gmail.com', 'admin', 'manager'),
(13, 'Viney', 'Sharma', 'ritikin@gmail.com', 'admin', 'client'),
(14, 'Viney', 'Sharma', 'ritikin@gmail.com', 'admin', 'client'),
(15, 'mridu', 'sjdjk', 'mrimin@gmail.com', 'admin', 'client'),
(16, 'employee', 'sharmaji', 'employee@gmail.com', 'admin', 'employee'),
(17, 'employee', 'sharmaji', 'emp@gmail.com', 'admin', 'employee'),
(18, 'emp', 'ji', 'emplo@gmail.com', 'admin', 'employee'),
(19, 'Viney', 'Sharma', 'manager@gmail.com', 'admin', 'manager'),
(20, 'viney', 'sharma', 'client1@gmail.com', 'admin', 'client'),
(21, 'Viney', 'Sharma', 'cleint2@gmail.com', 'admin', 'client'),
(22, 'Viney', 'Sharma', 'newjoin@gmail.com', 'admin', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `emp_db`
--

CREATE TABLE `emp_db` (
  `emp_id` int(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `task_no` int(255) NOT NULL,
  `emp_task` varchar(255) NOT NULL,
  `emp_mesage` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_db`
--

INSERT INTO `emp_db` (`emp_id`, `emp_name`, `task_no`, `emp_task`, `emp_mesage`, `status`) VALUES
(16, 'employee', 9, 'New Task', 'employee@gmail.com', 'Pending'),
(18, 'emp', 12, 'Last task', 'emplo@gmail.com', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mid` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `task_no` int(11) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `emp_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mid`, `Title`, `task_no`, `message`, `emp_id`) VALUES
(2, 'New Task:', 9, 'jkj', 16),
(19, 'Last task:', 12, 'do it', 17);

-- --------------------------------------------------------

--
-- Table structure for table `manager_revert`
--

CREATE TABLE `manager_revert` (
  `task_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager_revert`
--

INSERT INTO `manager_revert` (`task_id`, `status`) VALUES
(9, 'Review'),
(12, 'Review');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `task_no` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `Title`, `note`, `attachment`, `name`, `task_no`, `status`) VALUES
(13, 'New Task', 'Jaldi KArdo', 'NO attachment', 'Viney', 9, 'Done'),
(13, 'Second Task', 'SECOND VALA', 'SECOND ATTACHEMENT', 'Viney', 10, 'Pending'),
(13, 'task done', 'task done test', 'test', 'Viney', 11, 'Done'),
(20, 'Last task', 'may be the last task', 'none', 'viney', 12, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`task_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `task_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
