-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 08:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_information`
--

CREATE TABLE `admin_information` (
  `userName` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_information`
--

INSERT INTO `admin_information` (`userName`, `password`) VALUES
('administrator@gmail.com', '$2y$10$fPyB6k3C2fxb7n44C8bz9.LmPYXoAiDLU9hIueH.O/fYlyAuJzIXy');


CREATE TABLE `hall_provost` (
  `name` varchar(150) NOT NULL,
  `userName` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_information`
--

INSERT INTO `hall_provost` (`name`,`userName`, `password`,`avatar`) VALUES
('Dr. Md. Sazzad Hossain', 'hallprovost@gmail.com', '$2y$10$fPyB6k3C2fxb7n44C8bz9.LmPYXoAiDLU9hIueH.O/fYlyAuJzIXy', 'Dr. Md. Sazzad Hossain.jpg');


-- --------------------------------------------------------

--
-- Table structure for table `meal_chart`
--

CREATE TABLE `meal_chart` (
  day varchar(10) NOT NULL,
  breakfast varchar(80) NOT NULL,
  lunch varchar(80) NOT NULL,
  dinner varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `meal_chart` (day, breakfast, lunch, dinner) VALUES
('sunday', 'Rice+ Vagetable', 'Fish Curry + Rice', 'Kichuri+Egg'),
('monday', 'Rice+ Vagetable', 'Beef+ Rice', 'Kichuri+Egg'),
('tuesday', 'Honey Cumb', 'Chicken + Rice', 'Rice+Egg'),
('wednesday', 'Rice+ Vagetable', 'Fish Curry + Rice', 'Kichuri+Egg'),
('thursday', 'Cake+ Banana', 'Chicken + Rice', 'Kichuri+Egg'),
('friday', 'Rice+ Vagetable', 'Beef + Rice', 'Kichuri+Egg'),
('saturday', 'Kichuri+ Vagetable', 'Fish + Rice', 'Kichuri+Egg');

CREATE TABLE `hall_dues` (
  stud_id varchar(150) NOT NULL,
  name varchar(80) NOT NULL,
  room_no varchar(80) NOT NULL,
  floor_no varchar(80) NOT NULL,
  hall_charge varchar(80),
  meal_charge varchar(80),
  total_charge varchar(80)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




--
-- Table structure for table `meal_chart`
--

drop table if exists `house_tutor`;

CREATE TABLE `house_tutor` (
  tutor_id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(80) NOT NULL,
  department varchar(80) NOT NULL,
  floor_incharge varchar(80) NOT NULL,
  avatar text NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `house_tutor` (tutor_id, name, department, floor_incharge, avatar) VALUES
('1', 'Md. Nazmus Salehin', 'CSE', '6th','Md Nazmus Salehin.jpg');






-- --------------------------------------------------------


--
-- Table structure for table `hallprovost_information`
--


--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `stud_id` varchar(150) NOT NULL,
  `student_complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `stud_id` varchar(150) NOT NULL,
  `student_feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------
CREATE TABLE `meal_status` (
  `stud_id` varchar(150) NOT NULL,
   `status` varchar(50) DEFAULT 'On',
   `date_created` datetime NOT NULL DEFAULT current_timestamp() 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `contact_us` (
  `name` varchar(150) NOT NULL,
   `email` varchar(150) NOT NULL,
   `subject` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `meal_info_november22` (
  `stud_id` varchar(150) NOT NULL,
  `Day1` varchar(2) NULL,
  `Day2` varchar(2) NULL,
  `Day3` varchar(2) NULL,
  `Day4` varchar(2) NULL,
  `Day5` varchar(2) NULL,
  `Day6` varchar(2) NULL,
  `Day7` varchar(2) NULL,
  `Day8` varchar(2) NULL,
  `Day9` varchar(2) NULL,
  `Day10` varchar(2) NULL,
  `Day11` varchar(2) NULL,
  `Day12` varchar(2) NULL,
  `Day13` varchar(2) NULL,
  `Day14` varchar(2) NULL,
  `Day15` varchar(2) NULL,
  `Day16` varchar(2) NULL,
  `Day17` varchar(2) NULL,
  `Day18` varchar(2) NULL,
  `Day19` varchar(2) NULL,
  `Day20` varchar(2) NULL,
  `Day21` varchar(2) NULL,
  `Day22` varchar(2) NULL,
  `Day23` varchar(2) NULL,
  `Day24` varchar(2) NULL,
  `Day25` varchar(2) NULL,
  `Day26` varchar(2) NULL,
  `Day27` varchar(2) NULL,
  `Day28` varchar(2) NULL,
  `Day29` varchar(2) NULL,
  `Day30` varchar(2) NULL,
  `Day31` varchar(2) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `meal_info_charge` (
  `Month_name` varchar(150) NOT NULL,
  `Day1` varchar(20) NULL,
  `Day2` varchar(20) NULL,
  `Day3` varchar(20) NULL,
  `Day4` varchar(20) NULL,
  `Day5` varchar(20) NULL,
  `Day6` varchar(20) NULL,
  `Day7` varchar(20) NULL,
  `Day8` varchar(20) NULL,
  `Day9` varchar(20) NULL,
  `Day10` varchar(20) NULL,
  `Day11` varchar(20) NULL,
  `Day12` varchar(20) NULL,
  `Day13` varchar(20) NULL,
  `Day14` varchar(20) NULL,
  `Day15` varchar(20) NULL,
  `Day16` varchar(20) NULL,
  `Day17` varchar(20) NULL,
  `Day18` varchar(20) NULL,
  `Day19` varchar(20) NULL,
  `Day20` varchar(20) NULL,
  `Day21` varchar(20) NULL,
  `Day22` varchar(20) NULL,
  `Day23` varchar(20) NULL,
  `Day24` varchar(20) NULL,
  `Day25` varchar(20) NULL,
  `Day26` varchar(20) NULL,
  `Day27` varchar(20) NULL,
  `Day28` varchar(20) NULL,
  `Day29` varchar(20) NULL,
  `Day30` varchar(20) NULL,
  `Day31` varchar(20) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `stud_id` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `firstName` varchar(150) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `dept` varchar(50) NOT NULL,
   `batch` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
   `family_contact` varchar(50) NOT NULL,
   `address` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
   `room_no` varchar(50) NOT NULL,
   `floor_no` varchar(50) NOT NULL,
    `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_information`
--
ALTER TABLE `admin_information`
  ADD PRIMARY KEY (`userName`);
ALTER TABLE `hall_provost`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`stud_id`);
  
  ALTER TABLE `meal_chart`
  ADD PRIMARY KEY (`day`);
  
    ALTER TABLE `hall_dues`
  ADD PRIMARY KEY (`stud_id`);
  
      ALTER TABLE `meal_info_november22`
  ADD PRIMARY KEY (`stud_id`);
  
  ALTER TABLE `meal_info_charge`
  ADD PRIMARY KEY (`Month_name`);
      ALTER TABLE `meal_status`
  ADD PRIMARY KEY (`stud_id`);
  
--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`stud_id`);
  
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`name`);
--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`stud_id`);
--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `user_information` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `user_information` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
