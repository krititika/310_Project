-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2023 at 02:19 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21548664_csce310`
--

-- --------------------------------------------------------

--
-- Table structure for table `Application`
--

CREATE TABLE `Application` (
  `App_Num` int(6) NOT NULL,
  `Program_Num` int(6) NOT NULL,
  `UIN` int(9) NOT NULL,
  `Uncom_Cert` varchar(2048) DEFAULT NULL,
  `Com_Cert` varchar(2048) DEFAULT NULL,
  `Purpose_Statement` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Ceritification`
--

CREATE TABLE `Ceritification` (
  `Cert_ID` int(6) NOT NULL,
  `Level` varchar(64) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Description` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Cert_Enrollment`
--

CREATE TABLE `Cert_Enrollment` (
  `CertE_Num` int(6) NOT NULL,
  `UIN` int(9) NOT NULL,
  `Cert_ID` int(6) NOT NULL,
  `Program_Num` int(6) NOT NULL,
  `Status` varchar(32) DEFAULT NULL,
  `Training_Status` varchar(32) DEFAULT NULL,
  `Semester` varchar(32) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Classes`
--

CREATE TABLE `Classes` (
  `Class_ID` int(6) NOT NULL,
  `Name` varchar(64) DEFAULT NULL,
  `Description` varchar(2048) DEFAULT NULL,
  `Type` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Class_Enrollment`
--

CREATE TABLE `Class_Enrollment` (
  `CE_Num` int(6) NOT NULL,
  `UIN` int(9) NOT NULL,
  `Class_ID` int(6) NOT NULL,
  `Status` varchar(64) DEFAULT NULL,
  `Semester` varchar(16) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `College_Student`
--

CREATE TABLE `College_Student` (
  `UIN` int(9) NOT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Hispanic/Latino` binary(3) DEFAULT NULL,
  `Race` varchar(20) DEFAULT NULL,
  `U.S. Citizen` binary(3) DEFAULT NULL,
  `First_Generation` binary(3) DEFAULT NULL,
  `DoB` date DEFAULT NULL,
  `GPA` float DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `Minor #1` varchar(50) DEFAULT NULL,
  `Minor #2` varchar(50) DEFAULT NULL,
  `Expected_Graduation` smallint(4) DEFAULT NULL,
  `School` varchar(128) DEFAULT NULL,
  `Current_Classification` varchar(128) DEFAULT NULL,
  `Student_Type` varchar(128) DEFAULT NULL,
  `Phone` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Documentation`
--

CREATE TABLE `Documentation` (
  `Doc_Num` int(6) NOT NULL,
  `App_Num` int(6) NOT NULL,
  `Link` varchar(1024) DEFAULT NULL,
  `Doc_Type` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE `Event` (
  `Event_ID` int(6) NOT NULL,
  `UIN` int(9) NOT NULL,
  `Program_Num` int(6) NOT NULL,
  `Start_Date` date DEFAULT NULL,
  `Time_Start` time(6) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `End_Date` date DEFAULT NULL,
  `Time_End` time(6) DEFAULT NULL,
  `Event_Type` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Event_Tracking`
--

CREATE TABLE `Event_Tracking` (
  `ET_Num` int(6) NOT NULL,
  `Event_ID` int(6) NOT NULL,
  `UIN` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Internship`
--

CREATE TABLE `Internship` (
  `Intern_ID` int(6) NOT NULL,
  `Name` varchar(64) DEFAULT NULL,
  `Description` varchar(2048) DEFAULT NULL,
  `is_Gov` binary(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Intern_App`
--

CREATE TABLE `Intern_App` (
  `IA_Num` int(6) NOT NULL,
  `UIN` int(9) NOT NULL,
  `Intern_ID` int(6) NOT NULL,
  `Status` varchar(32) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Programs`
--

CREATE TABLE `Programs` (
  `Program_Num` int(6) NOT NULL,
  `Name` varchar(64) DEFAULT NULL,
  `Description` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Track`
--

CREATE TABLE `Track` (
  `Program` int(6) NOT NULL,
  `Student_Num` int(9) NOT NULL,
  `Tracking_Num` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UIN` int(9) NOT NULL,
  `First_Name` varchar(128) DEFAULT NULL,
  `M_Initial` char(1) DEFAULT NULL,
  `Last_Name` varchar(128) DEFAULT NULL,
  `Username` varchar(32) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL,
  `User_Type` varchar(64) DEFAULT NULL,
  `Email` varchar(256) DEFAULT NULL,
  `Discord_Name` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`UIN`, `First_Name`, `M_Initial`, `Last_Name`, `Username`, `Password`, `User_Type`, `Email`, `Discord_Name`) VALUES
(1, 'test', 'e', 'test', NULL, NULL, NULL, NULL, NULL);

--
-- Triggers `User`
--
DELIMITER $$
CREATE TRIGGER `Delete` BEFORE DELETE ON `User` FOR EACH ROW DELETE FROM College_Student WHERE UIN = old.UIN
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Application`
--
ALTER TABLE `Application`
  ADD PRIMARY KEY (`App_Num`),
  ADD UNIQUE KEY `Program_Num` (`Program_Num`),
  ADD UNIQUE KEY `UIN` (`UIN`);

--
-- Indexes for table `Ceritification`
--
ALTER TABLE `Ceritification`
  ADD PRIMARY KEY (`Cert_ID`);

--
-- Indexes for table `Cert_Enrollment`
--
ALTER TABLE `Cert_Enrollment`
  ADD PRIMARY KEY (`CertE_Num`),
  ADD KEY `CertE_Num` (`CertE_Num`,`UIN`),
  ADD KEY `Cert_ID` (`Cert_ID`),
  ADD KEY `Program_Num` (`Program_Num`),
  ADD KEY `UIN` (`UIN`);

--
-- Indexes for table `Classes`
--
ALTER TABLE `Classes`
  ADD PRIMARY KEY (`Class_ID`);

--
-- Indexes for table `Class_Enrollment`
--
ALTER TABLE `Class_Enrollment`
  ADD PRIMARY KEY (`CE_Num`),
  ADD UNIQUE KEY `UIN` (`UIN`),
  ADD UNIQUE KEY `Class_ID` (`Class_ID`);

--
-- Indexes for table `College_Student`
--
ALTER TABLE `College_Student`
  ADD PRIMARY KEY (`UIN`);

--
-- Indexes for table `Documentation`
--
ALTER TABLE `Documentation`
  ADD PRIMARY KEY (`Doc_Num`),
  ADD KEY `App_Num` (`App_Num`);

--
-- Indexes for table `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`Event_ID`),
  ADD KEY `UIN` (`UIN`),
  ADD KEY `Program_Num` (`Program_Num`);

--
-- Indexes for table `Event_Tracking`
--
ALTER TABLE `Event_Tracking`
  ADD PRIMARY KEY (`ET_Num`),
  ADD KEY `Event_ID` (`Event_ID`),
  ADD KEY `UIN` (`UIN`);

--
-- Indexes for table `Internship`
--
ALTER TABLE `Internship`
  ADD PRIMARY KEY (`Intern_ID`);

--
-- Indexes for table `Intern_App`
--
ALTER TABLE `Intern_App`
  ADD PRIMARY KEY (`IA_Num`),
  ADD KEY `UIN` (`UIN`),
  ADD KEY `Intern_ID` (`Intern_ID`);

--
-- Indexes for table `Programs`
--
ALTER TABLE `Programs`
  ADD PRIMARY KEY (`Program_Num`);

--
-- Indexes for table `Track`
--
ALTER TABLE `Track`
  ADD PRIMARY KEY (`Tracking_Num`),
  ADD KEY `Program` (`Program`),
  ADD KEY `Student_Num` (`Student_Num`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Application`
--
ALTER TABLE `Application`
  MODIFY `App_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Ceritification`
--
ALTER TABLE `Ceritification`
  MODIFY `Cert_ID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Cert_Enrollment`
--
ALTER TABLE `Cert_Enrollment`
  MODIFY `CertE_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Classes`
--
ALTER TABLE `Classes`
  MODIFY `Class_ID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Class_Enrollment`
--
ALTER TABLE `Class_Enrollment`
  MODIFY `CE_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `College_Student`
--
ALTER TABLE `College_Student`
  MODIFY `UIN` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Documentation`
--
ALTER TABLE `Documentation`
  MODIFY `Doc_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Event`
--
ALTER TABLE `Event`
  MODIFY `Event_ID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Event_Tracking`
--
ALTER TABLE `Event_Tracking`
  MODIFY `ET_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Internship`
--
ALTER TABLE `Internship`
  MODIFY `Intern_ID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Intern_App`
--
ALTER TABLE `Intern_App`
  MODIFY `IA_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Programs`
--
ALTER TABLE `Programs`
  MODIFY `Program_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Track`
--
ALTER TABLE `Track`
  MODIFY `Tracking_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UIN` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Application`
--
ALTER TABLE `Application`
  ADD CONSTRAINT `Application_ibfk_1` FOREIGN KEY (`Program_Num`) REFERENCES `Programs` (`Program_Num`),
  ADD CONSTRAINT `Application_ibfk_2` FOREIGN KEY (`UIN`) REFERENCES `College_Student` (`UIN`);

--
-- Constraints for table `Cert_Enrollment`
--
ALTER TABLE `Cert_Enrollment`
  ADD CONSTRAINT `Cert_Enrollment_ibfk_1` FOREIGN KEY (`Program_Num`) REFERENCES `Programs` (`Program_Num`),
  ADD CONSTRAINT `Cert_Enrollment_ibfk_2` FOREIGN KEY (`UIN`) REFERENCES `College_Student` (`UIN`),
  ADD CONSTRAINT `Cert_Enrollment_ibfk_3` FOREIGN KEY (`Cert_ID`) REFERENCES `Ceritification` (`Cert_ID`);

--
-- Constraints for table `Class_Enrollment`
--
ALTER TABLE `Class_Enrollment`
  ADD CONSTRAINT `Class_Enrollment_ibfk_1` FOREIGN KEY (`UIN`) REFERENCES `College_Student` (`UIN`),
  ADD CONSTRAINT `Class_Enrollment_ibfk_2` FOREIGN KEY (`Class_ID`) REFERENCES `Classes` (`Class_ID`);

--
-- Constraints for table `Documentation`
--
ALTER TABLE `Documentation`
  ADD CONSTRAINT `Documentation_ibfk_1` FOREIGN KEY (`App_Num`) REFERENCES `Application` (`App_Num`);

--
-- Constraints for table `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `EventProgram` FOREIGN KEY (`Program_Num`) REFERENCES `Programs` (`Program_Num`),
  ADD CONSTRAINT `EventUIN` FOREIGN KEY (`UIN`) REFERENCES `User` (`UIN`);

--
-- Constraints for table `Event_Tracking`
--
ALTER TABLE `Event_Tracking`
  ADD CONSTRAINT `Event_Tracking_ibfk_1` FOREIGN KEY (`Event_ID`) REFERENCES `Event` (`Event_ID`),
  ADD CONSTRAINT `Event_Tracking_ibfk_2` FOREIGN KEY (`UIN`) REFERENCES `User` (`UIN`);

--
-- Constraints for table `Intern_App`
--
ALTER TABLE `Intern_App`
  ADD CONSTRAINT `Intern_App_ibfk_1` FOREIGN KEY (`UIN`) REFERENCES `College_Student` (`UIN`),
  ADD CONSTRAINT `Intern_App_ibfk_2` FOREIGN KEY (`Intern_ID`) REFERENCES `Internship` (`Intern_ID`);

--
-- Constraints for table `Track`
--
ALTER TABLE `Track`
  ADD CONSTRAINT `Track_ibfk_1` FOREIGN KEY (`Student_Num`) REFERENCES `College_Student` (`UIN`),
  ADD CONSTRAINT `Track_ibfk_2` FOREIGN KEY (`Program`) REFERENCES `Programs` (`Program_Num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
