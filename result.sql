-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 11:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `p` (IN `semgp` INTEGER, IN `regno` VARCHAR(10))   update result1
set sgpa=semgp
where usn=regno$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL,
  `c4` int(11) DEFAULT NULL,
  `c5` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(3, 4, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `result1`
--

CREATE TABLE `result1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `internalMarks1` int(11) NOT NULL,
  `internalMarks2` int(11) NOT NULL,
  `internalMarks3` int(11) NOT NULL,
  `internalMarks4` int(11) NOT NULL,
  `internalMarks5` int(11) NOT NULL,
  `externalMarks1` int(11) NOT NULL,
  `externalMarks2` int(11) NOT NULL,
  `externalMarks3` int(11) NOT NULL,
  `externalMarks4` int(11) NOT NULL,
  `externalMarks5` int(11) NOT NULL,
  `totalMarks1` int(11) NOT NULL,
  `totalMarks2` int(11) NOT NULL,
  `totalMarks3` int(11) NOT NULL,
  `totalMarks4` int(11) NOT NULL,
  `totalMarks5` int(11) NOT NULL,
  `gradep1` int(11) NOT NULL,
  `gradep2` int(11) NOT NULL,
  `gradep3` int(11) NOT NULL,
  `gradep4` int(11) NOT NULL,
  `gradep5` int(11) NOT NULL,
  `grade1` char(2) NOT NULL,
  `grade2` char(2) NOT NULL,
  `grade3` char(2) NOT NULL,
  `grade4` char(2) NOT NULL,
  `grade5` char(2) NOT NULL,
  `sgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result1`
--

INSERT INTO `result1` (`id`, `name`, `usn`, `internalMarks1`, `internalMarks2`, `internalMarks3`, `internalMarks4`, `internalMarks5`, `externalMarks1`, `externalMarks2`, `externalMarks3`, `externalMarks4`, `externalMarks5`, `totalMarks1`, `totalMarks2`, `totalMarks3`, `totalMarks4`, `totalMarks5`, `gradep1`, `gradep2`, `gradep3`, `gradep4`, `gradep5`, `grade1`, `grade2`, `grade3`, `grade4`, `grade5`, `sgpa`) VALUES
(1, 'Riya', '4CB21CS001', 23, 33, 21, 12, 31, 34, 44, 34, 34, 23, 57, 77, 55, 46, 54, 6, 8, 6, 5, 6, 'P', 'P', 'F', 'F', 'P', 6.3125),
(2, 'Riva', '4CB21CS002', 23, 12, 45, 21, 33, 43, 23, 43, 34, 11, 66, 35, 88, 55, 44, 7, 0, 9, 6, 5, 'P', 'F', 'P', 'F', 'F', 5.0625),
(3, 'Athul', '4CB21CS003', 34, 50, 45, 33, 34, 44, 34, 34, 46, 44, 78, 84, 79, 79, 78, 8, 9, 8, 8, 8, 'P', 'P', 'P', 'P', 'P', 8.25),
(4, 'Sowmya', '4CB21CS004', 34, 50, 45, 38, 45, 23, 50, 47, 49, 39, 57, 100, 92, 87, 84, 6, 10, 10, 9, 9, 'P', 'P', 'P', 'P', 'P', 8.875),
(5, 'Samyuktha', '4CB21CS005', 50, 45, 45, 34, 48, 50, 45, 44, 45, 40, 100, 90, 89, 79, 88, 10, 10, 9, 8, 9, 'P', 'P', 'P', 'P', 'P', 9.25),
(6, 'Suma', '4CB21CS006', 49, 46, 48, 48, 47, 50, 43, 49, 50, 50, 99, 89, 97, 98, 97, 10, 9, 10, 10, 10, 'P', 'P', 'P', 'P', 'P', 9.75),
(7, 'Joyslin', '4CB21CS007', 18, 42, 53, 35, 46, 50, 31, 32, 26, 35, 68, 73, 85, 61, 81, 7, 8, 9, 7, 9, 'F', 'P', 'P', 'P', 'P', 8),
(8, 'Lisha', '4CB21CS008', 15, 23, 23, 24, 23, 50, 45, 45, 34, 24, 65, 68, 68, 58, 47, 7, 7, 7, 6, 5, 'F', 'P', 'P', 'P', 'P', 6.4375),
(9, 'Krathi', '4CB21CS009', 13, 50, 34, 34, 34, 50, 17, 45, 34, 12, 63, 67, 79, 68, 46, 7, 7, 8, 7, 5, 'F', 'F', 'P', 'P', 'F', 6.8125),
(10, 'Harshini', '4CB21CS011', 20, 24, 34, 12, 34, 50, 24, 35, 24, 45, 70, 48, 69, 36, 79, 8, 5, 7, 0, 8, 'F', 'P', 'P', 'F', 'P', 5.5625),
(11, 'Prathiksha', '4CB21CS012', 12, 23, 45, 24, 34, 50, 34, 23, 23, 45, 62, 57, 68, 47, 79, 7, 6, 7, 5, 8, 'F', 'P', 'P', 'P', 'P', 6.5625),
(12, 'ABHISHEK', '4CB21CS013', 30, 23, 12, 23, 23, 40, 34, 45, 24, 45, 70, 57, 57, 47, 68, 8, 6, 6, 5, 7, 'P', 'P', 'F', 'P', 'P', 6.375),
(13, 'Manvitha', '4CB21CS014', 19, 34, 34, 45, 23, 50, 34, 45, 50, 35, 69, 68, 79, 95, 58, 7, 7, 8, 10, 6, 'F', 'P', 'P', 'P', 'P', 7.5625),
(14, 'Seema', '4CB21CS015', 17, 23, 24, 34, 23, 50, 45, 45, 45, 34, 67, 68, 69, 79, 57, 7, 7, 7, 8, 6, 'F', 'P', 'P', 'P', 'P', 7),
(15, 'Yukthi', '4CB21CS016', 18, 34, 45, 12, 34, 50, 45, 34, 45, 45, 68, 79, 79, 57, 79, 7, 8, 8, 6, 8, 'F', 'P', 'P', 'F', 'P', 7.4375),
(16, 'Disha', '4CB21CS017', 16, 34, 45, 34, 23, 50, 34, 23, 23, 45, 66, 68, 68, 57, 68, 7, 7, 7, 6, 7, 'F', 'P', 'P', 'P', 'P', 6.8125),
(17, 'Amrutha', '4CB21CS018', 13, 34, 34, 34, 40, 50, 45, 45, 45, 34, 63, 79, 79, 79, 74, 7, 8, 8, 8, 8, 'F', 'P', 'P', 'P', 'P', 7.8125),
(18, 'Ambika', '4CB21CS019', 12, 23, 45, 45, 23, 50, 34, 23, 46, 34, 62, 57, 68, 91, 57, 7, 6, 7, 10, 6, 'F', 'P', 'P', 'P', 'P', 7.125),
(19, 'Thrishali', '4CB21CS020', 18, 34, 34, 48, 34, 50, 45, 46, 49, 26, 68, 79, 80, 97, 60, 7, 8, 9, 10, 7, 'F', 'P', 'P', 'P', 'P', 8.1875),
(20, 'Lisha', '4CB21CS021', 15, 34, 23, 34, 23, 50, 45, 34, 45, 35, 65, 79, 57, 79, 58, 7, 8, 6, 8, 6, 'F', 'P', 'P', 'P', 'P', 7.0625),
(21, 'Shreya', '4CB21CS022', 13, 34, 45, 34, 46, 50, 35, 12, 45, 14, 63, 69, 57, 79, 60, 7, 7, 6, 8, 7, 'F', 'P', 'F', 'P', 'F', 7),
(22, 'Deepa', '4CB21CS023', 19, 24, 35, 24, 38, 50, 35, 35, 38, 45, 69, 59, 70, 62, 83, 7, 6, 8, 7, 9, 'F', 'P', 'P', 'P', 'P', 7.3125),
(23, 'Ashwin', '4CB21CS024', 13, 45, 45, 35, 34, 50, 45, 23, 34, 45, 63, 90, 68, 69, 79, 7, 10, 7, 7, 8, 'F', 'P', 'P', 'P', 'P', 7.9375),
(24, 'Sahana', '4CB21CS025', 13, 32, 23, 34, 34, 50, 45, 34, 45, 45, 63, 77, 57, 79, 79, 7, 8, 6, 8, 8, 'F', 'P', 'P', 'P', 'P', 7.4375);

--
-- Triggers `result1`
--
DELIMITER $$
CREATE TRIGGER `sgptrig` BEFORE INSERT ON `result1` FOR EACH ROW begin
set new.sgpa=((new.gradep1*3)+(new.gradep2*4)+(new.gradep3*3)+(new.gradep4*3)+(new.gradep5*3))/16;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t` BEFORE INSERT ON `result1` FOR EACH ROW begin
set new.totalMarks1=new.internalMarks1+new.externalMarks1,
new.totalMarks2=new.internalMarks2+new.externalMarks2,
new.totalMarks3=new.internalMarks3+new.externalMarks3,
new.totalMarks4=new.internalMarks4+new.externalMarks4,
new.totalMarks5=new.internalMarks5+new.externalMarks5;
if new.totalmarks1<40 then set new.grade1='F';
elseif new.internalMarks1<22 then set new.grade1='F';
elseif new.externalMarks1<18 then set new.grade1='F';
else set new.grade1='P';
end if;
if new.totalmarks2<40 then set new.grade2='F';
elseif new.internalMarks2<22 then set new.grade2='F';
elseif new.externalMarks2<18 then set new.grade2='F';
else set new.grade2='P';
end if;
if new.totalmarks3<40 then set new.grade3='F';
elseif new.internalMarks3<22 then set new.grade3='F';
elseif new.externalMarks3<18 then set new.grade3='F';
else set new.grade3='P';
end if;
if new.totalmarks4<40 then set new.grade4='F';
elseif new.internalMarks4<22 then set new.grade4='F';
elseif new.externalMarks4<18 then set new.grade4='F';
else set new.grade4='P';
end if;
if new.totalmarks5<40 then set new.grade5='F';
elseif new.internalMarks5<22 then set new.grade5='F';
elseif new.externalMarks5<18 then set new.grade5='F';
else set new.grade5='P';
end if;

if new.totalmarks1 BETWEEN 90 and 100 then set new.gradep1='10';
elseif new.totalmarks1 BETWEEN 80 and 89 then set new.gradep1='9';
elseif new.totalmarks1 BETWEEN 70 and 79 then set new.gradep1='8';
elseif new.totalmarks1 BETWEEN 60 and 69 then set new.gradep1='7';
elseif new.totalmarks1 BETWEEN 50 and 59 then set new.gradep1='6';
elseif new.totalmarks1 BETWEEN 40 and 49 then set new.gradep1='5';
else set new.gradep1='0';
end if;

if new.totalmarks2 BETWEEN 90 and 100 then set new.gradep2='10';
elseif new.totalmarks2 BETWEEN 80 and 89 then set new.gradep2='9';
elseif new.totalmarks2 BETWEEN 70 and 79 then set new.gradep2='8';
elseif new.totalmarks2 BETWEEN 60 and 69 then set new.gradep2='7';
elseif new.totalmarks2 BETWEEN 50 and 59 then set new.gradep2='6';
elseif new.totalmarks2 BETWEEN 40 and 49 then set new.gradep2='5';
else set new.gradep2='0';
end if;

if new.totalmarks3 BETWEEN 90 and 100 then set new.gradep3='10';
elseif new.totalmarks3 BETWEEN 80 and 89 then set new.gradep3='9';
elseif new.totalmarks3 BETWEEN 70 and 79 then set new.gradep3='8';
elseif new.totalmarks3 BETWEEN 60 and 69 then set new.gradep3='7';
elseif new.totalmarks3 BETWEEN 50 and 59 then set new.gradep3='6';
elseif new.totalmarks3 BETWEEN 40 and 49 then set new.gradep3='5';
else set new.gradep3='0';
end if;

if new.totalmarks4 BETWEEN 90 and 100 then set new.gradep4='10';
elseif new.totalmarks4 BETWEEN 80 and 89 then set new.gradep4='9';
elseif new.totalmarks4 BETWEEN 70 and 79 then set new.gradep4='8';
elseif new.totalmarks4 BETWEEN 60 and 69 then set new.gradep4='7';
elseif new.totalmarks4 BETWEEN 50 and 59 then set new.gradep4='6';
elseif new.totalmarks4 BETWEEN 40 and 49 then set new.gradep4='5';
else set new.gradep4='0';
end if;

if new.totalmarks5 BETWEEN 90 and 100 then set new.gradep5='10';
elseif new.totalmarks5 BETWEEN 80 and 89 then set new.gradep5='9';
elseif new.totalmarks5 BETWEEN 70 and 79 then set new.gradep5='8';
elseif new.totalmarks5 BETWEEN 60 and 69 then set new.gradep5='7';
elseif new.totalmarks5 BETWEEN 50 and 59 then set new.gradep5='6';
elseif new.totalmarks5 BETWEEN 40 and 49 then set new.gradep5='5';
else set new.gradep5='0';
end if;
end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result1`
--
ALTER TABLE `result1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usn` (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result1`
--
ALTER TABLE `result1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
