-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 08:16 PM
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
-- Database: `id21548664_csce310`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `appdocs`
-- (See below for the actual view)
--
CREATE TABLE `appdocs` (
`App_Num` int(6)
,`Program_Num` int(6)
,`UIN` int(9)
,`Doc_Num` int(6)
,`Link` varchar(1024)
,`Doc_Type` varchar(256)
);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `App_Num` int(6) NOT NULL,
  `Program_Num` int(6) NOT NULL,
  `UIN` int(9) NOT NULL,
  `Uncom_Cert` varchar(2048) DEFAULT NULL,
  `Com_Cert` varchar(2048) DEFAULT NULL,
  `Purpose_Statement` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ceritification`
--

CREATE TABLE `ceritification` (
  `Cert_ID` int(6) NOT NULL,
  `Level` varchar(64) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Description` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ceritification`
--

INSERT INTO `ceritification` (`Cert_ID`, `Level`, `Name`, `Description`) VALUES
(1, 'asdas', 'dasdas', 'dasd');

-- --------------------------------------------------------

--
-- Table structure for table `cert_enrollment`
--

CREATE TABLE `cert_enrollment` (
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
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `Class_ID` int(6) NOT NULL,
  `Name` varchar(64) DEFAULT NULL,
  `Description` varchar(2048) DEFAULT NULL,
  `Type` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`Class_ID`, `Name`, `Description`, `Type`) VALUES
(1, 'adsasd', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Stand-in structure for view `classname`
-- (See below for the actual view)
--
CREATE TABLE `classname` (
`UIN` int(9)
,`Name` varchar(64)
,`Status` varchar(64)
,`Semester` varchar(16)
,`Year` year(4)
);

-- --------------------------------------------------------

--
-- Table structure for table `class_enrollment`
--

CREATE TABLE `class_enrollment` (
  `CE_Num` int(6) NOT NULL,
  `UIN` int(9) NOT NULL,
  `Class_ID` int(6) NOT NULL,
  `Status` varchar(64) DEFAULT NULL,
  `Semester` varchar(16) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `college_student`
--

CREATE TABLE `college_student` (
  `UIN` int(9) NOT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Hispanic_Latino` varchar(3) DEFAULT NULL,
  `Race` varchar(20) DEFAULT NULL,
  `USCitizen` varchar(3) DEFAULT NULL,
  `First_Generation` varchar(3) DEFAULT NULL,
  `DoB` date DEFAULT NULL,
  `GPA` float DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `Minor1` varchar(50) DEFAULT NULL,
  `Minor2` varchar(50) DEFAULT NULL,
  `Expected_Graduation` smallint(4) DEFAULT NULL,
  `School` varchar(128) DEFAULT NULL,
  `Current_Classification` varchar(128) DEFAULT NULL,
  `Student_Type` varchar(128) DEFAULT NULL,
  `Phone` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `college_student`
--

INSERT INTO `college_student` (`UIN`, `Gender`, `Hispanic_Latino`, `Race`, `USCitizen`, `First_Generation`, `DoB`, `GPA`, `Major`, `Minor1`, `Minor2`, `Expected_Graduation`, `School`, `Current_Classification`, `Student_Type`, `Phone`) VALUES
(1, 'bb', 'aa', 'asdasd', 'asd', 'asd', '2023-12-08', 0.02, 'asdas', 'dasdasda', 'asdas', 1, 'asds', 'asdasdas', 'asdasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `Doc_Num` int(6) NOT NULL,
  `App_Num` int(6) NOT NULL,
  `Link` varchar(1024) DEFAULT NULL,
  `Doc_Type` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
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
-- Table structure for table `event_tracking`
--

CREATE TABLE `event_tracking` (
  `ET_Num` int(6) NOT NULL,
  `Event_ID` int(6) NOT NULL,
  `UIN` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `Intern_ID` int(6) NOT NULL,
  `Name` varchar(64) DEFAULT NULL,
  `Description` varchar(2048) DEFAULT NULL,
  `is_Gov` binary(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`Intern_ID`, `Name`, `Description`, `is_Gov`) VALUES
(1, 'asdasd', 'asdasd', 0x0100);

-- --------------------------------------------------------

--
-- Table structure for table `intern_app`
--

CREATE TABLE `intern_app` (
  `IA_Num` int(6) NOT NULL,
  `UIN` int(9) NOT NULL,
  `Intern_ID` int(6) NOT NULL,
  `Status` varchar(32) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `Program_Num` int(6) NOT NULL,
  `Name` varchar(64) DEFAULT NULL,
  `Description` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`Program_Num`, `Name`, `Description`) VALUES
(1, 'asdasd', 'asdasdasdasd');

-- --------------------------------------------------------

--
-- Stand-in structure for view `students`
-- (See below for the actual view)
--
CREATE TABLE `students` (
`UIN` int(9)
,`First_Name` varchar(128)
,`M_Initial` char(1)
,`Last_Name` varchar(128)
,`Email` varchar(256)
,`Discord_Name` varchar(32)
,`Gender` varchar(20)
,`Race` varchar(20)
,`Hispanic_Latino` varchar(3)
);

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `Program` int(6) NOT NULL,
  `Student_Num` int(9) NOT NULL,
  `Tracking_Num` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`UIN`, `First_Name`, `M_Initial`, `Last_Name`, `Username`, `Password`, `User_Type`, `Email`, `Discord_Name`) VALUES
(1, 'test', 'e', 'test', 'john', 'Smith', 'Admin', NULL, NULL),
(2, 'asdasd', 's', '', NULL, NULL, '', '', ''),
(3, NULL, NULL, NULL, 'student', 'student', NULL, NULL, NULL);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `Delete` BEFORE DELETE ON `user` FOR EACH ROW DELETE FROM College_Student WHERE UIN = old.UIN
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `appdocs`
--
DROP TABLE IF EXISTS `appdocs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appdocs`  AS SELECT `a`.`App_Num` AS `App_Num`, `a`.`Program_Num` AS `Program_Num`, `a`.`UIN` AS `UIN`, `b`.`Doc_Num` AS `Doc_Num`, `b`.`Link` AS `Link`, `b`.`Doc_Type` AS `Doc_Type` FROM (`application` `a` join `documentation` `b`) WHERE `a`.`App_Num` = `b`.`App_Num` ;

-- --------------------------------------------------------

--
-- Structure for view `classname`
--
DROP TABLE IF EXISTS `classname`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `classname`  AS SELECT `a`.`UIN` AS `UIN`, `b`.`Name` AS `Name`, `a`.`Status` AS `Status`, `a`.`Semester` AS `Semester`, `a`.`Year` AS `Year` FROM (`class_enrollment` `a` join `classes` `b`) WHERE `a`.`Class_ID` = `b`.`Class_ID` ;

-- --------------------------------------------------------

--
-- Structure for view `students`
--
DROP TABLE IF EXISTS `students`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `students`  AS SELECT `a`.`UIN` AS `UIN`, `a`.`First_Name` AS `First_Name`, `a`.`M_Initial` AS `M_Initial`, `a`.`Last_Name` AS `Last_Name`, `a`.`Email` AS `Email`, `a`.`Discord_Name` AS `Discord_Name`, `b`.`Gender` AS `Gender`, `b`.`Race` AS `Race`, `b`.`Hispanic_Latino` AS `Hispanic_Latino` FROM (`user` `a` join `college_student` `b`) WHERE `a`.`UIN` = `b`.`UIN` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`App_Num`),
  ADD KEY `Program_Num` (`Program_Num`) USING BTREE,
  ADD KEY `UIN` (`UIN`) USING BTREE;

--
-- Indexes for table `ceritification`
--
ALTER TABLE `ceritification`
  ADD PRIMARY KEY (`Cert_ID`);

--
-- Indexes for table `cert_enrollment`
--
ALTER TABLE `cert_enrollment`
  ADD PRIMARY KEY (`CertE_Num`),
  ADD KEY `Cert_ID` (`Cert_ID`),
  ADD KEY `Program_Num` (`Program_Num`),
  ADD KEY `UIN` (`UIN`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`Class_ID`);

--
-- Indexes for table `class_enrollment`
--
ALTER TABLE `class_enrollment`
  ADD PRIMARY KEY (`CE_Num`),
  ADD KEY `UIN` (`UIN`) USING BTREE,
  ADD KEY `Class_ID` (`Class_ID`) USING BTREE;

--
-- Indexes for table `college_student`
--
ALTER TABLE `college_student`
  ADD PRIMARY KEY (`UIN`);

--
-- Indexes for table `documentation`
--
ALTER TABLE `documentation`
  ADD PRIMARY KEY (`Doc_Num`),
  ADD KEY `App_Num` (`App_Num`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_ID`),
  ADD KEY `UIN` (`UIN`),
  ADD KEY `Program_Num` (`Program_Num`);

--
-- Indexes for table `event_tracking`
--
ALTER TABLE `event_tracking`
  ADD PRIMARY KEY (`ET_Num`),
  ADD KEY `Event_ID` (`Event_ID`),
  ADD KEY `UIN` (`UIN`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`Intern_ID`);

--
-- Indexes for table `intern_app`
--
ALTER TABLE `intern_app`
  ADD PRIMARY KEY (`IA_Num`),
  ADD KEY `UIN` (`UIN`),
  ADD KEY `Intern_ID` (`Intern_ID`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`Program_Num`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`Tracking_Num`),
  ADD KEY `Program` (`Program`),
  ADD KEY `Student_Num` (`Student_Num`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `App_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ceritification`
--
ALTER TABLE `ceritification`
  MODIFY `Cert_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cert_enrollment`
--
ALTER TABLE `cert_enrollment`
  MODIFY `CertE_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `Class_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class_enrollment`
--
ALTER TABLE `class_enrollment`
  MODIFY `CE_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_student`
--
ALTER TABLE `college_student`
  MODIFY `UIN` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documentation`
--
ALTER TABLE `documentation`
  MODIFY `Doc_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Event_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_tracking`
--
ALTER TABLE `event_tracking`
  MODIFY `ET_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `Intern_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intern_app`
--
ALTER TABLE `intern_app`
  MODIFY `IA_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `Program_Num` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `Tracking_Num` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UIN` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `Application_ibfk_1` FOREIGN KEY (`Program_Num`) REFERENCES `programs` (`Program_Num`),
  ADD CONSTRAINT `Application_ibfk_2` FOREIGN KEY (`UIN`) REFERENCES `college_student` (`UIN`);

--
-- Constraints for table `cert_enrollment`
--
ALTER TABLE `cert_enrollment`
  ADD CONSTRAINT `Cert_Enrollment_ibfk_1` FOREIGN KEY (`Program_Num`) REFERENCES `programs` (`Program_Num`),
  ADD CONSTRAINT `Cert_Enrollment_ibfk_2` FOREIGN KEY (`UIN`) REFERENCES `college_student` (`UIN`),
  ADD CONSTRAINT `Cert_Enrollment_ibfk_3` FOREIGN KEY (`Cert_ID`) REFERENCES `ceritification` (`Cert_ID`);

--
-- Constraints for table `class_enrollment`
--
ALTER TABLE `class_enrollment`
  ADD CONSTRAINT `Class_Enrollment_ibfk_1` FOREIGN KEY (`UIN`) REFERENCES `college_student` (`UIN`),
  ADD CONSTRAINT `Class_Enrollment_ibfk_2` FOREIGN KEY (`Class_ID`) REFERENCES `classes` (`Class_ID`);

--
-- Constraints for table `documentation`
--
ALTER TABLE `documentation`
  ADD CONSTRAINT `Documentation_ibfk_1` FOREIGN KEY (`App_Num`) REFERENCES `application` (`App_Num`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `EventProgram` FOREIGN KEY (`Program_Num`) REFERENCES `programs` (`Program_Num`),
  ADD CONSTRAINT `EventUIN` FOREIGN KEY (`UIN`) REFERENCES `user` (`UIN`);

--
-- Constraints for table `event_tracking`
--
ALTER TABLE `event_tracking`
  ADD CONSTRAINT `Event_Tracking_ibfk_1` FOREIGN KEY (`Event_ID`) REFERENCES `event` (`Event_ID`),
  ADD CONSTRAINT `Event_Tracking_ibfk_2` FOREIGN KEY (`UIN`) REFERENCES `user` (`UIN`);

--
-- Constraints for table `intern_app`
--
ALTER TABLE `intern_app`
  ADD CONSTRAINT `Intern_App_ibfk_1` FOREIGN KEY (`UIN`) REFERENCES `college_student` (`UIN`),
  ADD CONSTRAINT `Intern_App_ibfk_2` FOREIGN KEY (`Intern_ID`) REFERENCES `internship` (`Intern_ID`);

--
-- Constraints for table `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `Track_ibfk_1` FOREIGN KEY (`Student_Num`) REFERENCES `college_student` (`UIN`),
  ADD CONSTRAINT `Track_ibfk_2` FOREIGN KEY (`Program`) REFERENCES `programs` (`Program_Num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
