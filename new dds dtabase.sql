-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 07:44 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `fac_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fac_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `course_name` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dept` varchar(30) NOT NULL,
  `section` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`fac_id`, `fac_name`, `course_name`, `dept`, `section`) VALUES
('C1667', 'Dr.Rajesh Kumar N', 'CSE415R01   ---   Internet of Things', 'B.TECH', 'C'),
('C1667', 'Dr.Rajesh Kumar N', 'CAP302   ---   Web Technology', 'BCA', 'C'),
('C1667', 'Dr.Rajesh Kumar N', 'CSS235   ---   Animation and Multimedia', 'CS', 'B'),
('C1294', 'Dr.ArunKumar.S', 'CAP113   ---   Python Programming', 'BCA', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSE414   ---   Software Testing & Quality Assurance', 'B.TECH', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSS222   ---   Fundamentals of Java Programming', 'BSC CS', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CAP113   ---   Python Programming', 'BCA', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSE414   ---   Software Testing & Quality Assurance', 'B.TECH', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSS222   ---   Fundamentals of Java Programming', 'BSC CS', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CAP113   ---   Python Programming', 'BCA', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSE414   ---   Software Testing & Quality Assurance', 'B.TECH', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSS222   ---   Fundamentals of Java Programming', 'BSC CS', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CAP113   ---   Python Programming', 'BCA', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSE414   ---   Software Testing & Quality Assurance', 'B.TECH', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CAP113   ---   Python Programming', 'BCA', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSS222   ---   Fundamentals of Java Programming', 'BSC CS', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSE414   ---   Software Testing & Quality Assurance', 'B.TECH', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSS222   ---   Fundamentals of Java Programming', 'BSC CS', 'A'),
('C2394', 'Dr.S.RanjeethKumar', 'CSE302   ---   Computer Networks', 'B.TECH', 'A'),
('C2022', '<br /><b>Warning</b>:  Undefin', 'INT404R01   ---   Big Data Analytics', 'B.TECH', 'A,D'),
('C1614', 'Dr.Sujarani R', 'CSS416   ---   Advanced Computer Graphics & Multimedia', 'BSC CS', 'A,B'),
('C1614', 'Dr.Sujarani R', 'CSS416   ---   Advanced Computer Graphics & Multimedia', 'BSC CS', 'A,B'),
('C1552', 'Dr.Thanuja K', 'CAP101   ---   Basics of Computing', 'BCA', 'A'),
('C1552', 'Dr.Thanuja K', 'CAP101   ---   Basics of Computing', 'BCA', 'A'),
('C1547', 'Dr.Balakrishnan R', 'CSE414   ---   Software Testing & Quality Assurance', 'B.TECH', 'A'),
('C1547', 'Dr.Balakrishnan R', 'CSE414   ---   Software Testing & Quality Assurance', 'B.TECH', 'A'),
('C1547', 'Dr.Balakrishnan R', 'CSE414   ---   Software Testing & Quality Assurance', 'B.TECH', 'A'),
('C1547', 'Dr.Balakrishnan R', 'CSE414   ---   Software Testing & Quality Assurance', 'B.TECH', 'A'),
('C1547', 'Dr.Balakrishnan R', 'CSE414   ---   Software Testing & Quality Assurance', 'B.TECH', 'A'),
('C854', 'Mr.Eashwar K B', 'CSS416   ---   Advanced Computer Graphics & Multimedia', 'BSC CS', 'A'),
('C854', 'Mr.Eashwar K B', 'CAP107R01   ---   Computer Organization & Architecture', 'BCA', 'A,B'),
('C854', 'Mr.Eashwar K B', 'CAP102   ---   Programming in C', 'BCA', 'A,C'),
('C2404', 'Dr.Ganesh.J', 'CSE301   ---   Theory of Computation', 'B.TECH', 'A'),
('C2404', 'Dr.Ganesh.J', 'CAP301   ---   Java Programming', 'BCA', 'A'),
('C2404', 'Dr.Ganesh.J', 'CSS233   ---   Fundamentals of Computer Algorithms', 'BSC CS', 'A,B'),
('C2404', 'Dr.Ganesh.J', 'CSE301   ---   Theory of Computation', 'B.TECH', 'A'),
('C2404', 'Dr.Ganesh.J', 'CAP301   ---   Java Programming', 'BCA', 'A'),
('C2404', 'Dr.Ganesh.J', 'CSS233   ---   Fundamentals of Computer Algorithms', 'BSC CS', 'A,B'),
('C2404', 'Dr.Ganesh.J', 'CSE301   ---   Theory of Computation', 'B.TECH', 'A'),
('C2404', 'Dr.Ganesh.J', 'CAP301   ---   Java Programming', 'BCA', 'A'),
('C2404', 'Dr.Ganesh.J', 'CSS233   ---   Fundamentals of Computer Algorithms', 'BSC CS', 'A,B'),
('C858', 'Mrs.Vanitha M', 'CSE409   ---   Parallel and Distributed Systems', 'B.TECH', 'A'),
('C858', 'Mrs.Vanitha M', 'CSS102   ---   Introduction to C Programming', 'BSC CS', 'A'),
('C769', 'Mr.Swaminathan S', 'CSS501   ---   Data Mining & Data Warehousing', 'BSC CS', 'A'),
('C769', 'Mr.Swaminathan S', 'CSS211   ---   Fundamentals of E-Commerce', 'BSC CS', 'A'),
('C769', 'Mr.Swaminathan S', 'CSS501   ---   Data Mining & Data Warehousing', 'BSC CS', 'A'),
('C769', 'Mr.Swaminathan S', 'CSS211   ---   Fundamentals of E-Commerce', 'BSC CS', 'A'),
('C1135', 'Dr.Manjula K', 'CSS416   ---   Advanced Computer Graphics & Multimedia', 'BSC CS', 'A,B'),
('C1135', 'Dr.Manjula K', 'CSS234   ---   Introduction to Data Mining', 'BSC CS', 'A,B'),
('C1135', 'Dr.Manjula K', 'CSS416   ---   Advanced Computer Graphics & Multimedia', 'BSC CS', 'A,B'),
('C1135', 'Dr.Manjula K', 'CSS234   ---   Introduction to Data Mining', 'BSC CS', 'A,B'),
('C1285', 'Mr.Manikandan H', 'CSS416   ---   Advanced Computer Graphics & Multimedia', 'BSC CS', 'A'),
('C1285', 'Mr.Manikandan H', 'CSS416   ---   Advanced Computer Graphics & Multimedia', 'BSC CS', 'A'),
('C1263', 'Mrs.KamalaDevi.M', 'CSS112   ---   Fundamentals of Computing', 'BSC CS', 'A'),
('C1263', 'Mrs.KamalaDevi.M', 'CSE304   ---   Python Programming with Web Frameworks', 'B.TECH', 'A'),
('C1263', 'Mrs.KamalaDevi.M', 'CSS112   ---   Fundamentals of Computing', 'BSC CS', 'A'),
('C1263', 'Mrs.KamalaDevi.M', 'CSE304   ---   Python Programming with Web Frameworks', 'B.TECH', 'A'),
('C1368', 'Mrs.UmaMaheswari.P', 'CSS112   ---   Fundamentals of Computing', 'BSC CS', 'A'),
('C1368', 'Mrs.UmaMaheswari.P', 'CSS234   ---   Introduction to Data Mining', 'BSC CS', 'A'),
('C1612', 'Dr.Rajesh K', 'CSS211   ---   Fundamentals of E-Commerce', 'BSC CS', 'A'),
('C1612', 'Dr.Rajesh K', 'CSS126   ---   Linux Programming', 'BSC CS', 'A'),
('C1294', 'Dr.ArunKumar.S', 'CSS234   ---   Introduction to Data Mining', 'BSC CS', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `STAFFID` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `STAFFNAME` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`STAFFID`, `STAFFNAME`) VALUES
('C1983', 'Dr.V.Ramaswamy'),
('C839', 'Dr.Meganathan S'),
('C2071', 'Dr.Sangeetha.J'),
('C2401', 'Dr.Rajeswari.N');

-- --------------------------------------------------------

--
-- Table structure for table `cse_faculty_list`
--

CREATE TABLE `cse_faculty_list` (
  `C_EMP_NO` varchar(8) NOT NULL,
  `C_EMP_NAME` varchar(50) NOT NULL,
  `C_DESIGNATION` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `sno` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cno` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `olddata`
--

CREATE TABLE `olddata` (
  `CrCode` varchar(9) DEFAULT NULL,
  `CrName` varchar(54) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `olddata`
--

INSERT INTO `olddata` (`CrCode`, `CrName`) VALUES
('CSE201', 'Object Oriented Programming in C++'),
('CSE305', 'Design & Analysis of Algorithms'),
('INT102', 'Fundamentals of Database Systems'),
('CSE205', 'Computer Architecture'),
('CSE 202', 'Computer Graphics with open GL'),
('CSE 307', 'Object Oriented Analysis & Design'),
('CSE313', 'Cryptography & Network Security'),
('CSE314', 'Software Engineering'),
('CSE402', 'Compiler Engineering'),
('INT 430', 'Information Security'),
('INT302', 'Green Computing'),
('INT 303', 'Data warehousing and Mining'),
('OEXXXX', 'Open Elective -3'),
('CSE208', 'Java Programming (STSL)'),
('CSE304', 'Python Programming with Webframeworks (STSL)'),
('CSS406', 'Open Source Technologies'),
('CSS407', 'Principles of Compiler Design'),
('CSS409', 'Object Oriented Systens for Modeling'),
('CSS408', 'Distributed Operating Systems'),
('CSS410', 'Soft Computing Techniques'),
('CSS411R01', 'Android Applications'),
('CSS 507', 'Cloud Computing'),
('CSS 511', 'Internet of things and Applications'),
('CAP105', 'Programming in C++'),
('CAP203R01', 'Object Oriented Analysis & Design'),
('CAP204R01', 'Computer Networks'),
('CAP205', 'Visual Programming'),
('CAP110R01', 'Fundamentals of Relational Database Management Systems'),
('CAP305', 'Ecommerce'),
('CAP208', 'Computer Graphics & Multimedia'),
('CAP306', 'C# & .Net Technologies'),
('CAP XXX', 'Elective - II'),
('CSS105', 'Introduction to C++ Programming'),
('CSS231', 'Fundamentals of Data Structures'),
('CSS110', 'Relational Database Management Systems'),
('CSS107R01', 'Computer Architecture'),
('CSS130', 'Principles of Python Programming'),
('CSS201', 'Data Structures & Program Design'),
('CSS105', 'Introduction to C ++ Programming'),
('CSS110', 'Relational Database Management Systems'),
('CSS222', 'Fundamentals of Java Programming'),
('CSS 207', 'Multimedia - Elective III'),
('CSS222', 'Fundamentals of Java Programming'),
('CSS 207', 'Multimedia - Elective III'),
('CSS222', 'Fundamentals of Java Programming'),
('CSS110', 'Relational Database Management Systems'),
('CSS113', 'Programming in C Language'),
('CSS301', 'Enterprise Resource Planning'),
('CSS212', 'Web design development - Elective - IV'),
('CSS115', 'Database Management Systems'),
('CSS301', 'Enterprise Resource Planning'),
('CSS214', 'Management Information System - Elective III');

-- --------------------------------------------------------

--
-- Table structure for table `olddata2`
--

CREATE TABLE `olddata2` (
  `CrCode` varchar(9) DEFAULT NULL,
  `CrName` varchar(44) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `olddata2`
--

INSERT INTO `olddata2` (`CrCode`, `CrName`) VALUES
('CSE304', 'Python Programming with Web Frameworks'),
('CSE312', 'Script Programming'),
('INT310', 'Artificial Intelligence'),
('CSE316', 'Python Programming'),
('CSE414', 'Software Testing & Quality Assurance'),
('INT405', 'Machine Learning Techniques'),
('CAP113', 'Python Programming'),
('CSS303', 'Android Application Development'),
('CSS416', 'Advanced Computer Graphics & Multimedia'),
('CSE 208', 'Java Programming'),
('CSE103', 'Data Structures'),
('CSE105', 'Computer Organization'),
('CSE301', 'Theory of Computation'),
('CSE308', 'Operating Systems'),
('CSE302', 'Computer Networks'),
('CSE415R01', 'Elective'),
('INT404', 'Big Data Analytics'),
('CSE407', 'Cloud Computing'),
('CSE409', 'Parallel and Distributed Systems'),
('CSE415R01', 'Internet of Things'),
('CAP107R01', 'Computer Organization & Architecture'),
('CAP201R01', 'Fundamentals of Data Structures & Algorithms'),
('CAP108', 'Operating System Concepts'),
('CAP301', 'Java Programming'),
('CAP207R01', 'Basics of Software Engineering'),
('CAP302', 'Web Technology'),
('CSS108', 'Introduction to Operating Systems'),
('CSS233', 'Fundamentals of Computer Algorithms'),
('CSS210R01', 'Computer Communication & Networks'),
('CSS222', 'Fundamentals of Java Programming'),
('CSS234', 'Introduction to Data Mining'),
('CSS235', 'Animation and Multimedia'),
('CSS108', 'Introduction to Operating Systems'),
('CSS222', 'Fundamentals of Java Programming'),
('CSS108', 'Introduction to Operating Systems'),
('CSS222', 'Fundamentals of Java Programming'),
('CSE226', 'Computer Programming'),
('CSS112', 'Fundamentals of Computing'),
('CSS211', 'Fundamentals of E-Commerce'),
('CSS115', 'Data Base Management Systems'),
('CSS112', 'Fundamentals of Computing'),
('CSS211', 'Fundamentals of E-Commerce'),
('CSS421', 'Relational Database Management Systems'),
('CSS501', 'Data Mining & Data Warehousing'),
('CSS502', 'Software Engineering & Testing'),
('CSS503', 'Information Security'),
('CSS504', 'Dot Net Technologies'),
('MAN106', 'Research methodology & IPR'),
('CSE101', 'Problem Solving & Programming in C'),
('CAP101', 'Basics of Computing'),
('CAP102', 'Programming in C'),
('CSS126', 'Linux Programming'),
('CSS102', 'Introduction to C Programming'),
('CSS112', 'Fundamentals of Computing'),
('CSS401', 'Advanced Database Systems'),
('CSS402', 'Fundamentals of Computer Algorithms'),
('CSS403', 'Internet Programming'),
('CSS102', 'Introduction to C Programming'),
('CSS102', 'Introduction to C Programming'),
('CSS112', 'Fundamentals of Computing');

-- --------------------------------------------------------

--
-- Table structure for table `pref`
--

CREATE TABLE `pref` (
  `Sno` varchar(6) NOT NULL,
  `Pre1` varchar(100) NOT NULL,
  `Han1` varchar(4) NOT NULL,
  `Tutor` varchar(4) NOT NULL,
  `Classname` varchar(20) NOT NULL,
  `Pre2` varchar(100) NOT NULL,
  `Han2` varchar(4) NOT NULL,
  `Pre3` varchar(100) NOT NULL,
  `Han3` varchar(4) NOT NULL,
  `Pre4` varchar(100) NOT NULL,
  `Han4` varchar(4) NOT NULL,
  `Pre5` varchar(100) NOT NULL,
  `Han5` varchar(4) NOT NULL,
  `TimeStamp` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pref`
--

INSERT INTO `pref` (`Sno`, `Pre1`, `Han1`, `Tutor`, `Classname`, `Pre2`, `Han2`, `Pre3`, `Han3`, `Pre4`, `Han4`, `Pre5`, `Han5`, `TimeStamp`) VALUES
('c1285', 'CSS115   ---   Data Base Management Systems', '5', '-', '-', 'CSS115   ---   Data Base Management Systems', '02', 'MAN106   ---   Research methodology & IPR', '05', 'CAP201 R01   ---   Fundamentals of Data Structures & Algorithms', '010', 'MAN106   ---   Research methodology & IPR', '066', '2023-05-04 11:31:00'),
('c1285', 'CSS112   ---   Fundamentals of Computing', '02', '-', '-', 'CSE414   ---   Software Testing & Quality Assurance', '06', 'INT310   ---   Artificial Intelligence', '08', 'CSS210R01   ---   Computer Communication & Networks', '03', 'MAN106   ---   Research methodology & IPR', '05', '2023-05-04 11:33:28'),
('C2390', 'CSS102   ---   Introduction to C Programming', '0', '-', '-', 'CSS108   ---   Introduction to Operating Systems', '0', 'CSS112   ---   Fundamentals of Computing', '0', 'CSS115   ---   Data Base Management Systems', '0', 'CSS126   ---   Linux Programming', '0', '2023-05-04 12:20:36'),
('C2390', 'CSS112   ---   Fundamentals of Computing', '0', '-', '-', 'CSS102   ---   Introduction to C Programming', '0', 'CSS108   ---   Introduction to Operating Systems', '0', 'CSS222   ---   Fundamentals of Java Programming', '0', 'CSS234   ---   Introduction to Data Mining', '0', '2023-05-04 12:21:52'),
('C2390', '-Select Your Options From The List, Before Setting Preference-', '0', '-', '-', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2023-05-04 12:27:19'),
('c1735', 'CSE304   ---   Python Programming with Web Frameworks', '5', 'yes', 'II-BCA-B', 'CSE308   ---   Operating Systems', '7', 'CSE312   ---   Script Programming', '4', 'INT405R01   ---   Machine Learning Techniques', '3', 'INT310   ---   Artificial Intelligence', '1', '2023-05-05 11:06:39'),
('C2090', 'CSS234   ---   Introduction to Data Mining', '0', '-', '-', 'CSS108   ---   Introduction to Operating Systems', '0', 'CSS501   ---   Data Mining & Data Warehousing', '0', 'INT405R01   ---   Machine Learning Techniques', '0', 'CAP113   ---   Python Programming', '0', '2023-05-07 10:00:19'),
('C1368', 'CSS112   ---   Fundamentals of Computing', '3', '-', '-', 'CSS234   ---   Introduction to Data Mining', '0', 'CSS501   ---   Data Mining & Data Warehousing', '0', 'CAP101   ---   Basics of Computing', '0', 'CAP102   ---   Programming in C', '1', '2023-05-07 10:18:17'),
('c1131', 'CSS233   ---   Fundamentals of Computer Algorithms', '1', '-', '-', 'CAP301   ---   Java Programming', '2', 'CSS402   ---   Fundamentals of Computer Algorithms', '0', 'CAP113   ---   Python Programming', '0', 'CAP201 R01   ---   Fundamentals of Data Structures & Algorithms', '10', '2023-05-07 10:47:14'),
('c1612', 'CSS211   ---   Fundamentals of E-Commerce', '4', '-', '-', 'CSS502   ---   Software Engineering & Testing', '0', 'CSS126   ---   Linux Programming', '3', 'CAP207R01   ---   Basics of Software Engineering', '0', 'CAP302   ---   Web Technology', '1', '2023-05-07 10:54:50'),
('C1335', 'CSS102   ---   Introduction to C Programming', '3', '-', '-', 'CSE105   ---   Computer Organization', '1', 'CAP113   ---   Python Programming', '0', 'CSS235   ---   Animation and Multimedia', '0', 'CSS503   ---   Information Security', '0', '2023-05-07 10:56:44'),
('c1731', 'CSE105   ---   Computer Organization', '3', '-', '-', 'CSE308   ---   Operating Systems', '15', 'INT404R01   ---   Big Data Analytics', '2', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', '2023-05-07 10:58:55'),
('C922', 'INT405R01   ---   Machine Learning Techniques', '0', '-', '-', 'INT310   ---   Artificial Intelligence', '4', 'CSE103   ---   Data Structures', '5', 'CSE308   ---   Operating Systems', '3', 'CAP108   ---   Operating System Concepts', '2', '2023-05-07 11:30:12'),
('C1263', 'CSS112   ---   Fundamentals of Computing', '1', 'yes', 'I-BSC-A', 'CSE304   ---   Python Programming with Web Frameworks', '2', 'CSS421   ---   Relational Database Management Systems', '1', 'CSS115   ---   Data Base Management Systems', '0', 'CSS211   ---   Fundamentals of E-Commerce', '1', '2023-05-07 12:34:56'),
('c1136', 'CSS402   ---   Fundamentals of Computer Algorithms', '8', '-', '-', 'CSS233   ---   Fundamentals of Computer Algorithms', '0', 'CAP201 R01   ---   Fundamentals of Data Structures & Algorithms', '5', 'CSS234   ---   Introduction to Data Mining', '0', 'CSS501   ---   Data Mining & Data Warehousing', '0', '2023-05-07 13:45:42'),
('C769', 'CSS501   ---   Data Mining & Data Warehousing', '1', '-', '-', 'CSS211   ---   Fundamentals of E-Commerce', '3', 'CSS416   ---   Advanced Computer Graphics & Multimedia', '0', 'CSS115   ---   Data Base Management Systems', '2', 'CAP102   ---   Programming in C', '1', '2023-05-07 16:49:13'),
('C1547', 'CSS503   ---   Information Security', '2', '-', '-', 'CSE414   ---   Software Testing & Quality Assurance', '7', 'CSS502   ---   Software Engineering & Testing', '4', 'CAP207R01   ---   Basics of Software Engineering', '3', 'CSS501   ---   Data Mining & Data Warehousing', '3', '2023-05-08 10:04:40'),
('C316', 'CAP301   ---   Java Programming', '1', '-', '-', 'CAP207R01   ---   Basics of Software Engineering', '2', 'CSS403   ---   Internet Programming', '3', 'CSS502   ---   Software Engineering & Testing', '4', 'CSS222   ---   Fundamentals of Java Programming', '5', '2023-05-08 11:11:10'),
('C1735', 'CSS234   ---   Introduction to Data Mining', '0', 'yes', 'II-BCA-B', 'CSS504   ---   .Net Technologies', '4', 'CSS115   ---   Data Base Management Systems', '8', 'CSS211   ---   Fundamentals of E-Commerce', '6', 'CAP113   ---   Python Programming', '1', '2023-05-08 11:32:32'),
('c1505', 'CSS210R01   ---   Computer Communication & Networks', '3', '-', '-', 'CSS102   ---   Introduction to C Programming', '10', 'CSS108   ---   Introduction to Operating Systems', '6', 'CAP102   ---   Programming in C', '5', 'CAP108   ---   Operating System Concepts', '0', '2023-05-08 12:03:16'),
('C1623', 'CSE414   ---   Software Testing & Quality Assurance', '0', '-', '-', 'CSS421   ---   Relational Database Management Systems', '0', 'CSS112   ---   Fundamentals of Computing', '2', 'CSS211   ---   Fundamentals of E-Commerce', '2', 'CSS234   ---   Introduction to Data Mining', '0', '2023-05-08 12:08:28'),
('C1294', 'CAP113   ---   Python Programming', '0', '-', '-', 'CSE414   ---   Software Testing & Quality Assurance', '0', 'CSS222   ---   Fundamentals of Java Programming', '0', 'CSS234   ---   Introduction to Data Mining', '0', 'CSS503   ---   Information Security', '0', '2023-05-08 12:13:11'),
('C1623', 'CSE414   ---   Software Testing & Quality Assurance', '0', '-', '-', 'CSS112   ---   Fundamentals of Computing', '2', 'CSS211   ---   Fundamentals of E-Commerce', '2', 'CSS421   ---   Relational Database Management Systems', '0', 'CSS234   ---   Introduction to Data Mining', '0', '2023-05-08 12:15:10'),
('C2390', 'CSE302   ---   Computer Networks', '0', '-', '-', 'CAP101   ---   Basics of Computing', '1', 'CSE312   ---   Script Programming', '1', 'CSS503   ---   Information Security', '0', 'CAP102   ---   Programming in C', '0', '2023-05-08 12:15:14'),
('C2394', 'CSE302   ---   Computer Networks', '0', '-', '-', 'CSE415R01   ---   Internet of Things', '0', 'CSE 208   ---   Java Programming', '0', 'CAP113   ---   Python Programming', '0', 'CAP102   ---   Programming in C', '2', '2023-05-08 12:34:07'),
('C1332', 'CSE103   ---   Data Structures', '8', '-', '-', 'CAP201 R01   ---   Fundamentals of Data Structures & Algorithms', '12', 'CSS234   ---   Introduction to Data Mining', '3', 'CSS501   ---   Data Mining & Data Warehousing', '3', 'CSS222   ---   Fundamentals of Java Programming', '8', '2023-05-08 12:37:45'),
('c1731', 'CSE105   ---   Computer Organization', '3', '-', '-', 'CSE308   ---   Operating Systems', '15', 'INT404R01   ---   Big Data Analytics', '2', 'CSS501   ---   Data Mining & Data Warehousing', '2', 'INT310   ---   Artificial Intelligence', '0', '2023-05-08 13:02:48'),
('c1285', 'CSE312   ---   Script Programming', '0', '-', '-', 'CSE302   ---   Computer Networks', '0', 'CAP302   ---   Web Technology', '0', 'CSS210R01   ---   Computer Communication & Networks', '0', 'CSE407R01   ---   Cloud Computing', '0', '2023-05-08 13:54:52'),
('C316', 'CSS403   ---   Internet Programming', '2', '-', '-', 'CSS222   ---   Fundamentals of Java Programming', '2', 'CAP207R01   ---   Basics of Software Engineering', '3', 'CSS502   ---   Software Engineering & Testing', '0', 'CAP301   ---   Java Programming', '3', '2023-05-08 13:54:58'),
('C2401', 'CSE301   ---   Theory of Computation', '0', '-', '-', 'CSS402   ---   Fundamentals of Computer Algorithms', '0', 'CAP108   ---   Operating System Concepts', '0', 'INT405R01   ---   Machine Learning Techniques', '0', 'INT310   ---   Artificial Intelligence', '0', '2023-05-08 14:05:37'),
('C2401', 'CSE301   ---   Theory of Computation', '0', '-', '-', 'CSS402   ---   Fundamentals of Computer Algorithms', '0', 'CSE308   ---   Operating Systems', '0', 'INT405R01   ---   Machine Learning Techniques', '0', 'INT310   ---   Artificial Intelligence', '0', '2023-05-08 14:13:12'),
('C1614', 'CSS416   ---   Advanced Computer Graphics & Multimedia', '1', '-', '-', 'CSS222   ---   Fundamentals of Java Programming', '2', 'CSS503   ---   Information Security', '0', 'CAP301   ---   Java Programming', '0', 'CSE312   ---   Script Programming', '0', '2023-05-08 14:15:40'),
('C1614', 'CSS416   ---   Advanced Computer Graphics & Multimedia', '1', '-', '-', 'CSS222   ---   Fundamentals of Java Programming', '2', 'CSS503   ---   Information Security', '0', 'CAP301   ---   Java Programming', '0', 'CSE312   ---   Script Programming', '0', '2023-05-08 14:15:58'),
('C1648', 'CSS235   ---   Animation and Multimedia', '1', '-', '-', 'CAP101   ---   Basics of Computing', '5', 'CSS416   ---   Advanced Computer Graphics & Multimedia', '2', 'CAP113   ---   Python Programming', '0', 'CAP302   ---   Web Technology', '0', '2023-05-08 14:22:06'),
('C1648', 'CSS235   ---   Animation and Multimedia', '1', '-', '-', 'CAP302   ---   Web Technology', '0', 'CAP101   ---   Basics of Computing', '5', 'CSS416   ---   Advanced Computer Graphics & Multimedia', '1', 'CAP102   ---   Programming in C', '1', '2023-05-08 14:40:40'),
('c2318', 'CSE103   ---   Data Structures', '1', '-', '-', 'CSE316   ---   Python Programming', '0', 'CSS421   ---   Relational Database Management Systems', '2', 'CSS115   ---   Data Base Management Systems', '2', 'CAP101   ---   Basics of Computing', '0', '2023-05-08 14:57:04'),
('C1614', 'CSS416   ---   Advanced Computer Graphics & Multimedia', '1', '-', '-', 'CSS222   ---   Fundamentals of Java Programming', '2', 'CSS503   ---   Information Security', '0', 'CAP302   ---   Web Technology', '0', 'CAP113   ---   Python Programming', '0', '2023-05-08 15:58:35'),
('c1506', 'CSE101   ---   Problem Solving & Programming in C', '8', '-', '-', 'CSS115   ---   Data Base Management Systems', '4', 'CAP102   ---   Programming in C', '0', 'CSS401   ---   Advanced Database Systems', '0', 'CSS102   ---   Introduction to C Programming', '0', '2023-05-08 16:23:24'),
('C858', 'CSE409   ---   Parallel and Distributed Systems', '5', '-', '-', 'CSS102   ---   Introduction to C Programming', '2', 'CAP102   ---   Programming in C', '1', 'CSS211   ---   Fundamentals of E-Commerce', '0', 'CSS234   ---   Introduction to Data Mining', '0', '2023-05-08 16:24:55'),
('C2022', 'Select Your Preference; Avoid Duplication', '0', '-', '-', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', '2023-05-08 16:25:25'),
('C2022', 'CSE308   ---   Operating Systems', '5', '-', '-', 'INT404R01   ---   Big Data Analytics', '0', 'CSE 208   ---   Java Programming', '6', 'CAP102   ---   Programming in C', '6', 'CAP108   ---   Operating System Concepts', '5', '2023-05-08 16:41:55'),
('C2022', '-Select Your Options From The List, Before Setting Preference-', '0', '-', '-', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2023-05-08 16:44:34'),
('C2022', 'INT404R01   ---   Big Data Analytics', '0', '-', '-', 'CSE308   ---   Operating Systems', '5', 'CSE 208   ---   Java Programming', '5', 'CAP108   ---   Operating System Concepts', '5', 'CAP102   ---   Programming in C', '6', '2023-05-08 16:50:52'),
('c2137', 'CSE415R01   ---   Internet of Things', '1', '-', '-', 'CSE304   ---   Python Programming with Web Frameworks', '4', 'CSE 208   ---   Java Programming', '2', 'CSS401   ---   Advanced Database Systems', '0', 'CAP102   ---   Programming in C', '2', '2023-05-08 17:05:50'),
('c839', 'INT404R01   ---   Big Data Analytics', '0', '-', '-', 'CSS501   ---   Data Mining & Data Warehousing', '0', 'CSS234   ---   Introduction to Data Mining', '0', 'CSS401   ---   Advanced Database Systems', '0', 'CAP113   ---   Python Programming', '0', '2023-05-08 17:17:52'),
('c839', 'INT404R01   ---   Big Data Analytics', '5', '-', '-', 'CSS501   ---   Data Mining & Data Warehousing', '10', 'CSS234   ---   Introduction to Data Mining', '10', 'MAN106   ---   Research methodology & IPR', '0', 'CSS401   ---   Advanced Database Systems', '3', '2023-05-08 17:25:11'),
('C1666', 'CAP113   ---   Python Programming', '2', '-', '-', 'CSS115   ---   Data Base Management Systems', '4', 'CSS421   ---   Relational Database Management Systems', '0', 'CSS102   ---   Introduction to C Programming', '0', 'CSS112   ---   Fundamentals of Computing', '3', '2023-05-09 08:50:09'),
('c2071', 'CSE 208   ---   Java Programming', '3', '-', '-', 'CSS234   ---   Introduction to Data Mining', '0', 'INT404R01   ---   Big Data Analytics', '0', 'CAP108   ---   Operating System Concepts', '1', 'CSE302   ---   Computer Networks', '0', '2023-05-09 09:42:48'),
('c2071', 'CSE 208   ---   Java Programming', '3', '-', '-', 'CSS501   ---   Data Mining & Data Warehousing', '0', 'CAP108   ---   Operating System Concepts', '1', 'CSE302   ---   Computer Networks', '0', 'CAP302   ---   Web Technology', '0', '2023-05-09 09:54:25'),
('c2404', 'CSE301   ---   Theory of Computation', '0', '-', '-', 'CAP301   ---   Java Programming', '0', 'CSS233   ---   Fundamentals of Computer Algorithms', '0', 'CSS115   ---   Data Base Management Systems', '0', 'CSE 208   ---   Java Programming', '0', '2023-05-09 09:58:21'),
('C922', 'INT405R01   ---   Machine Learning Techniques', '0', '-', '-', 'INT310   ---   Artificial Intelligence', '4', 'CSE103   ---   Data Structures', '5', 'CSE308   ---   Operating Systems', '3', 'CAP201 R01   ---   Fundamentals of Data Structures & Algorithms', '2', '2023-05-09 10:23:30'),
('c1357', 'CAP301   ---   Java Programming', '5', '-', '-', 'CAP201 R01   ---   Fundamentals of Data Structures & Algorithms', '7', 'CSE101   ---   Problem Solving & Programming in C', '10', 'CAP113   ---   Python Programming', '2', 'CSS501   ---   Data Mining & Data Warehousing', '4', '2023-05-09 10:28:46'),
('c1667', 'CSE415R01   ---   Internet of Things', '2', '-', '-', 'CAP302   ---   Web Technology', '2', 'CSS503   ---   Information Security', '0', 'CAP113   ---   Python Programming', '0', 'CSS235   ---   Animation and Multimedia', '0', '2023-05-09 10:44:29'),
('C510', 'CSE304   ---   Python Programming with Web Frameworks', '5', '-', '-', 'CSS401   ---   Advanced Database Systems', '4', 'CAP102   ---   Programming in C', '5', 'CAP301   ---   Java Programming', '5', 'CSS126   ---   Linux Programming', '5', '2023-05-09 12:38:35'),
('c1285', 'CSS416   ---   Advanced Computer Graphics & Multimedia', '0', '-', '-', 'CSE302   ---   Computer Networks', '0', 'CSS210R01   ---   Computer Communication & Networks', '0', 'CAP302   ---   Web Technology', '0', 'CSE312   ---   Script Programming', '0', '2023-05-09 13:51:54'),
('C1119', 'CAP201 R01   ---   Fundamentals of Data Structures & Algorithms', '3', '-', '-', 'CSS115   ---   Data Base Management Systems', '4', 'CSS234   ---   Introduction to Data Mining', '0', 'CAP302   ---   Web Technology', '0', 'CAP102   ---   Programming in C', '5', '2023-05-09 13:52:53'),
('c441', 'CSS102   ---   Introduction to C Programming', '2', '-', '-', 'CSS108   ---   Introduction to Operating Systems', '0', 'CSS112   ---   Fundamentals of Computing', '3', 'CAP102   ---   Programming in C', '2', 'CAP108   ---   Operating System Concepts', '1', '2023-05-09 13:56:37'),
('C754', 'CSE101   ---   Problem Solving & Programming in C', '4', '-', '-', 'CSS503   ---   Information Security', '7', 'CAP113   ---   Python Programming', '0', 'CSS210R01   ---   Computer Communication & Networks', '0', 'CAP107R01   ---   Computer Organization & Architecture', '0', '2023-05-09 14:56:11'),
('C2394', 'CSE302   ---   Computer Networks', '0', '-', '-', 'CSE 208   ---   Java Programming', '0', 'CAP113   ---   Python Programming', '0', 'CSE103   ---   Data Structures', '0', 'CAP102   ---   Programming in C', '0', '2023-05-09 14:57:06'),
('C1615', 'CSE308   ---   Operating Systems', '1', '-', '-', 'CSS303   ---   Android Application Development', '1', 'INT405R01   ---   Machine Learning Techniques', '0', 'CSS234   ---   Introduction to Data Mining', '0', 'CSS235   ---   Animation and Multimedia', '0', '2023-05-09 14:58:23'),
('C2394', 'CSE302   ---   Computer Networks', '0', '-', '-', 'CSE 208   ---   Java Programming', '0', 'CAP113   ---   Python Programming', '0', 'CSE103   ---   Data Structures', '0', 'CAP102   ---   Programming in C', '2', '2023-05-09 15:00:20'),
('c854', 'CSS416   ---   Advanced Computer Graphics & Multimedia', '0', '-', '-', 'CAP107R01   ---   Computer Organization & Architecture', '0', 'CSS235   ---   Animation and Multimedia', '0', 'CAP102   ---   Programming in C', '0', 'CSS102   ---   Introduction to C Programming', '0', '2023-05-09 15:24:05'),
('C1552', 'CAP101   ---   Basics of Computing', '0', '-', '-', 'CSS112   ---   Fundamentals of Computing', '1', 'CSS102   ---   Introduction to C Programming', '0', 'CAP102   ---   Programming in C', '0', 'CSE101   ---   Problem Solving & Programming in C', '0', '2023-05-09 15:50:48'),
('C1135', 'CSS416   ---   Advanced Computer Graphics & Multimedia', '1', '-', '-', 'CSS234   ---   Introduction to Data Mining', '1', 'CAP301   ---   Java Programming', '0', 'CSE 208   ---   Java Programming', '1', 'INT405R01   ---   Machine Learning Techniques', '0', '2023-05-09 16:27:52'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-02-25 12:42:59'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-02-27 22:35:44'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-02-28 21:26:55'),
('C1983', 'Select Your Preference; Avoid Duplication', '0', '', '', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', '2024-03-09 13:37:06'),
('C1983', 'Select Your Preference; Avoid Duplication', '0', '', '', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', '2024-03-09 13:38:31'),
('C1983', 'Select Your Preference; Avoid Duplication', '0', '', '', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', 'Select Your Preference; Avoid Duplication', '0', '2024-03-09 13:39:58'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-10 09:38:05'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-10 20:46:17'),
('C754', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-10 21:25:23'),
('C754', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-10 21:28:00'),
('C754', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-10 21:28:32'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-12 20:52:18'),
('C1983', 'CSE304   ---   Python Programming with Web Frameworks', '0', '', '', 'CSE304   ---   Python Programming with Web Frameworks', '0', 'CSE302   ---   Computer Networks', '0', 'CSE302   ---   Computer Networks', '0', 'CSE308   ---   Operating Systems', '0', '2024-03-12 22:08:45'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-12 22:08:57'),
('C754', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-12 22:09:29'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-12 22:39:46'),
('C754', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-12 22:39:56'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-16 21:12:34'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-16 21:17:52'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-16 21:21:34'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-16 21:46:38'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-16 21:46:46'),
('C1983', '-Select Your Options From The List, Before Setting Preference-', '0', '', '', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '-Select Your Options From The List, Before Setting Preference-', '0', '2024-03-16 22:13:27'),
('C1983', 'CSS108   ---   Introduction to Operating Systems', '0', '', 'I BSC CS-B', 'CSS108   ---   Introduction to Operating Systems', '0', 'CSS112   ---   Fundamentals of Computing', '0', 'CSS102   ---   Introduction to C Programming', '0', 'CSS108   ---   Introduction to Operating Systems', '0', '2024-04-02 22:09:59'),
('C1983', 'INT310   ---   Artificial Intelligence', '0', '', 'II BSC CS-A', 'MAN106   ---   Research methodology & IPR', '0', 'MAN106   ---   Research methodology & IPR', '0', 'INT404R01   ---   Big Data Analytics', '0', 'MAN106   ---   Research methodology & IPR', '0', '2024-04-02 22:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `CrCode` varchar(10) DEFAULT NULL,
  `CrName` varchar(44) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`CrCode`, `CrName`) VALUES
('CSE101', 'Problem Solving & Programming in C'),
('CSE 208', 'Java Programming'),
('CSE103', 'Data Structures'),
('CSE105', 'Computer Organization'),
('CSE301', 'Theory of Computation'),
('CSE308', 'Operating Systems'),
('CSE302', 'Computer Networks'),
('CSE304', 'Python Programming with Web Frameworks'),
('CSE312', 'Script Programming'),
('INT310', 'Artificial Intelligence'),
('CSE316', 'Python Programming'),
('INT404R01', 'Big Data Analytics'),
('CSE407R01', 'Cloud Computing'),
('CSE409', 'Parallel and Distributed Systems'),
('CSE415R01', 'Internet of Things'),
('INT405R01', 'Machine Learning Techniques'),
('CSE414', 'Software Testing & Quality Assurance'),
('CAP101', 'Basics of Computing'),
('CAP102', 'Programming in C'),
('CAP107R01', 'Computer Organization & Architecture'),
('CAP201 R01', 'Fundamentals of Data Structures & Algorithms'),
('CAP108', 'Operating System Concepts'),
('CAP301', 'Java Programming'),
('CAP207R01', 'Basics of Software Engineering'),
('CAP302', 'Web Technology'),
('CAP113', 'Python Programming'),
('CSS126', 'Linux Programming'),
('CSS102', 'Introduction to C Programming'),
('CSS108', 'Introduction to Operating Systems'),
('CSS233', 'Fundamentals of Computer Algorithms'),
('CSS210R01', 'Computer Communication & Networks'),
('CSS222', 'Fundamentals of Java Programming'),
('CSS234', 'Introduction to Data Mining'),
('CSS303', 'Android Application Development'),
('CSS235', 'Animation and Multimedia'),
('CSE226', 'Computer Programming'),
('CSS112', 'Fundamentals of Computing'),
('CSS211', 'Fundamentals of E-Commerce'),
('CSS115', 'Data Base Management Systems'),
('CSS421', 'Relational Database Management Systems'),
('CSS401', 'Advanced Database Systems'),
('CSS402', 'Fundamentals of Computer Algorithms'),
('CSS403', 'Internet Programming'),
('CSS501', 'Data Mining & Data Warehousing'),
('CSS502', 'Software Engineering & Testing'),
('CSS503', 'Information Security'),
('CSS504', '.Net Technologies'),
('CSS416', 'Advanced Computer Graphics & Multimedia'),
('MAN106', 'Research methodology & IPR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `col_number` varchar(5) DEFAULT NULL,
  `col_uname` varchar(22) DEFAULT NULL,
  `col_designation` varchar(6) DEFAULT NULL,
  `col_designo` int(11) NOT NULL,
  `col_passwrd` varchar(15) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`col_number`, `col_uname`, `col_designation`, `col_designo`, `col_passwrd`, `user_type`) VALUES
('C1983', 'Dr.V.Ramaswamy', 'Dean', 1, 'SASTRA123', 'coordinator'),
('C754', 'Dr.Kalaichelvi V', 'ACP', 2, 'SASTRA123', NULL),
('C839', 'Dr.Meganathan S', 'ACP', 2, 'SASTRA123', 'coordinator'),
('C1164', 'Dr.Sreedevi B', 'SAP', 3, 'kichadevi', NULL),
('C2071', 'Dr.Sangeetha.J', 'SAP', 3, 'SASTRA123', 'coordinator'),
('C2401', 'Dr.Rajeswari.N', 'SAP', 3, 'SASTRA123', NULL),
('C316', 'Mr.Prakash.V', 'AP-III', 3, 'SASTRA123', NULL),
('C510', 'Mr.Arul Mani K', 'AP-III', 3, 'C510@123', NULL),
('C1731', 'Dr.Durga Karthik', 'AP-III', 3, 'SASTRA123', NULL),
('C1135', 'Dr.Manjula K', 'AP-II', 4, 'marsin14*', NULL),
('C1294', 'Dr.ArunKumar.S', 'AP-II', 4, 'SASTRA123', NULL),
('C1547', 'Dr.Balakrishnan R', 'AP-II', 4, 'one98four', NULL),
('C1552', 'Dr.Thanuja K', 'AP-II', 4, 'SASTRA123', NULL),
('C1614', 'Dr.Sujarani R', 'AP-II', 4, 'SASTRA123', NULL),
('C1667', 'Dr.Rajesh Kumar N', 'AP-II', 4, 'dvkrk444@', NULL),
('C2022', 'Dr.Bhavani R', 'AP-II', 4, 'SASTRA123', NULL),
('C2394', 'Dr.S.RanjeethKumar', 'AP-II', 4, 'ransha100', NULL),
('C2404', 'Dr.Ganesh.J', 'AP-II', 4, 'SASTRA123', NULL),
('C441', 'Mr.Muruganandam.N', 'AP-II', 4, 'SASTRA123', NULL),
('C769', 'Mr.Swaminathan S', 'AP-II', 4, 'SASTRA123', NULL),
('C840', 'Mr.Varahaswamy.R', 'AP-II', 4, 'SASTRA123', NULL),
('C854', 'Mr.Eashwar K B', 'AP-II', 4, 'Ran10n!rasya', NULL),
('C858', 'Mrs.Vanitha M', 'AP-II', 4, 'SASTRA123', NULL),
('C922', 'Mrs.Hemamalini S', 'AP-II', 4, 'hemaSUB23', NULL),
('C1263', 'Mrs.KamalaDevi.M', 'AP-II', 4, 'SASTRA123', NULL),
('C1285', 'Mr.Manikandan H', 'AP-II', 4, '1234', NULL),
('C1332', 'Mrs.Sumathi A', 'AP-II', 4, 'SASTRA123', NULL),
('C1335', 'Mrs.Vimala Devi P', 'AP-II', 4, 'SASTRA123', NULL),
('C1368', 'Mrs.UmaMaheswari.P', 'AP-II', 4, 'SASTRA123', NULL),
('C1506', 'Mrs.Martina M', 'AP-II', 4, 'SASTRA123', NULL),
('C1612', 'Dr.Rajesh K', 'AP-II', 4, 'SASTRA123', NULL),
('C1615', 'Mrs.Venkateswari P', 'AP-II', 4, 'SASTRA123', NULL),
('C1623', 'Mr.Sheik Mohideen Shah', 'AP-II', 4, 'SASTRA123', NULL),
('C2137', 'Mr.Jeyapandian M', 'AP-II', 4, 'SASTRA123', NULL),
('C2390', 'Dr.S.Priyanga', 'AP-II', 4, 'SASTRA123', NULL),
('C2318', 'Dr.D.Vaishnavi', 'AP-II', 4, 'SASTRA123', NULL),
('C1119', 'Mrs.Rekha D', 'AP-I', 5, 'Murari@23', NULL),
('C1131', 'Mrs.Abiramasundari S', 'AP-I', 5, 'SASTRA123', NULL),
('C1136', 'Mrs.Menaga A', 'AP-I', 5, 'SASTRA123', NULL),
('C1357', 'Mr.Senthilkumar J', 'AP-I', 5, 'MEAGHAA11974@', NULL),
('C1505', 'Mrs.Glory Thephoral J', 'AP-I', 5, 'SASTRA123', NULL),
('C1648', 'Mrs.Rubidha Devi D', 'AP-I', 5, 'SASTRA123', NULL),
('C1666', 'Mr.Venkatesh K', 'AP-I', 5, 'Ramanan@8748', NULL),
('C1735', 'Mr.Raghuraman K', 'AP-I', 5, 'RAGHU123', NULL),
('C2090', 'Mr.Venkatesan.R', 'AP-I', 5, 'SASTRA123', NULL),
('C2380', 'Dr.Balajee.A', 'AP-I', 5, 'SASTRA123', NULL),
('Admin', 'Admin', '-', 0, 'team', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`STAFFID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
