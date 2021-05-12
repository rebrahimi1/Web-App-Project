-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2021 at 12:08 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `address`
--

-- --------------------------------------------------------

--
-- Table structure for table `abook`
--

DROP TABLE IF EXISTS `abook`;
CREATE TABLE IF NOT EXISTS `abook` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CRN` int(10) NOT NULL,
  `section` int(10) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abook`
--

INSERT INTO `abook` (`id`, `CRN`, `section`, `CourseName`, `Subject`, `Location`, `username`) VALUES
(1, 9876, 43, 'Biology', 'Science', 'Atlanta', ''),
(2, 2134, 10, 'ML', 'CS', 'Atlanta', ''),
(4, 835656, 56, 'Web Programming', 'CS', 'Atlanta', ''),
(8, 12345, 2, 'Database systems', 'CSC', 'Atlanta', 'rezz@gmail.com'),
(11, 16947, 3, 'Data Mining', 'CSC', 'Atlanta', 'reebrah@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `CRN` int(10) NOT NULL,
  `Section` int(10) NOT NULL,
  `CourseTitle` varchar(50) NOT NULL,
  `CourseType` varchar(50) NOT NULL,
  `Lecturer` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Hours` int(10) NOT NULL,
  `CourseDes` varchar(3000) NOT NULL,
  `StartEndDate` text NOT NULL,
  PRIMARY KEY (`CRN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CRN`, `Section`, `CourseTitle`, `CourseType`, `Lecturer`, `Location`, `Hours`, `CourseDes`, `StartEndDate`) VALUES
(53524, 2, 'CSC 1301', 'Online', 'MD Zulkar', 'Atlanta, GA', 4, 'Principles of Computer Science I. Prerequisite or co-requisite: Math 1112 or Math 1113 with a C or higher, or appropriate math placement score. Only for majors in Computer Science, Mathematics, Physics or Engineering, or minor in Computer Science. An introduction to the discipline of computer science. Computer programming is the primary focus of the course, with secondary focus on a breadth of computer science topics. These topics include algorithmic foundations, hardware concepts, virtual machine concepts, software systems, applications, and social issues.', '06/07/2021 to 07/31/2021'),
(53029, 4, 'CSC 1301', 'Online', 'MD Zulkar', 'Atlanta, GA', 4, 'Principles of Computer Science I. Prerequisite or co-requisite: Math 1112 or Math 1113 with a C or higher, or appropriate math placement score. Only for majors in Computer Science, Mathematics, Physics or Engineering, or minor in Computer Science. An introduction to the discipline of computer science. Computer programming is the primary focus of the course, with secondary focus on a breadth of computer science topics. These topics include algorithmic foundations, hardware concepts, virtual machine concepts, software systems, applications, and social issues.', '06/07/2021 till 07/31/2021'),
(53030, 2, 'CSC 1302', 'Online', 'Xiaojun Cao', 'Atlanta, GA', 4, 'Principles of Computer Science II. Prerequisite: CSC 1301 with a \"C\" or higher. Fundamental principles of computer programming. Expressions, procedures, variable types, data, input/output. Emphasis on structure and clarity as well as correctness.', '06/07/2021 till 07/31/2021'),
(53034, 2, 'CSC 2720', 'Online', 'Shiraj Pokharel', 'Atlanta, GA', 4, 'Data Structures. Prerequisite: CSC 1302, MATH 2211, and CSC 2510 or MATH 2420 with grades of \"C\" or higher. Basic concepts and analysis of data representation and associated algorithms, including linerarly-linked lists, multi-linked structures, trees, searching, and sorting.', '06/07/2021 till 07/31/2021'),
(51340, 2, 'CSC 2510', 'Online', 'Aleksandra Zelikovskiy', 'Atlanta', 4, 'Theoretical Foundations of Computer Science. Prerequisite: (CSC 1301 or DSCI 1301) and (MATH 1113 or MATH 2211) with a C or higher. Topics include: propositional and predicate logic with applications to logic programming, database querying, and program verification; induction and its application in proving correctness and termination of programs; recurrence relations, combinatorics, and graph theory with applications to analysis of algorithms; sets, relations, and functions and their applications in databases, functional programming, and automata.', '06/07/2021 to 07/31/2021'),
(52481, 2, 'CSC 4210', 'Online', 'Saeid Belkasim', 'Atlanta', 4, 'Computer Architecture. Prerequisite: CSc 3210 with grade of C or higher. Students must meet the Computer Science Major Eligibility Requirement in order to enroll in this course. Logic design, combinatorial and sequential circuits, input-output devices, memory, processors, controllers, parallel architectures, bit-slicing, reduced instruction sets.', '06/07/2021 to 07/31/2021'),
(56016, 3, 'CSC 3210', 'Online', 'Zulkar', 'Atlanta', 4, 'Computer Organization and Programming. Prerequisite: CSc 1302, and CSc 2510 or Math 2420 with A C or higher. Students must meet the Computer Science Major Eligibility Requirement in order to enroll in this course. This course introduces the principles of computer architecture and assembly and machine language. Topics include principles of computer architecture, binary and hexadecimal arithmetic, signed and unsigned arithmetic, memory organization, addressing modes, procedure calls, the stack frame, floating point unit and instruction encoding, as well as writing assembly language programs. The course also covers the basics of CISC vs. RISC architecture and parallel architecture models and programming.\r\n', '06/07/2021 to 07/31/2021'),
(53330, 2, 'CSC 3320', 'Online', 'Jun Yi', 'Atlanta', 4, 'System-Level Programming. Prerequisite: (CSc 1302 or or DSCI 1302) and (CSc 2510 or Math 2420) with a of C or higher.Students must meet the Computer Science Major Eligibility Requirement in order to enroll in this course. An introduction to programming at the level of the operating system. Topics include editors, system calls, programming tools, files, processes, interprocess communication, and shells.', '06/07/2021 to 07/31/2021'),
(51383, 2, 'CSC 4320', 'Online', 'Yanqing Zhang', 'Atlanta', 4, 'Operating Systems. Prerequisite: CSc 3320 with grade of C or higher. Students must meet the Computer Science Major Eligibility Requirement in order to enroll in this course. Introduction to operating systems concepts. Topics may include multiprogramming, resources allocation and management, and their implementation.', '06/07/2021 to 07/31/2021'),
(52516, 2, 'CSC 4330', 'Online', 'Chinua Umoja', 'Atlanta', 4, 'Programming Language Concepts. Prerequisite: CSc 2720, CSc 3210, and CSc 3320 with a C or higher. Students must meet the Computer Science Major Eligibility Requirement in order to enroll in this course. Fundamental programming language concepts, including syntax versus semantics, binding time, scopes, and storage management.', '06/07/2021 to 07/31/2021'),
(53334, 2, 'CSC 4350', 'Online', 'Xucan Chen', 'Atlanta', 4, 'Software Engineering - CTW. Prerequisite: CSc 4520 with a C or higher. Students must meet the Computer Science Major Eligibility Requirement in order to enroll in this course. This course focuses on techniques used in large scale scientific or technical software development, including requirements analysis, specification, systems design, implementation, testing, validation, verification, and maintenance. Serves as the Critical Thinking Through Writing (CTW) course, as well as the capstone experience, required of all Computer Science majors.', '06/07/2021 to 07/31/2021'),
(53527, 2, 'CSC 4360', 'Online', 'Chinua Umoja', 'Atlanta', 4, 'Mobile Application Development. Prerequisite: CSc 2720 with a grade of C or higher. Students must meet the Computer Science Major Eligibility Requirement in order to enroll in this course. Crosslisted with CSc 6360. This course will cover the technologies, tools, frameworks and languages that are most commonly used in developing mobile applications for multiple mobile platforms. Topics include mobile application design, user interfaces, mobile application demographic and platform delivery, mobile networking, hosting infrastructure, and mobile security.', '06/07/2021 to 07/31/2021'),
(51688, 2, 'CSC 4370', 'Online', 'Dr. Rao Casturi', 'Atlanta', 4, 'Web Programming. Prerequisite: CSc 3320 with grade of C or higher. Students must meet the Computer Science Major Eligibility Requirement in order to enroll in this course. The course introduces the student to programming techniques required to develop Web applications. Topics include: HTML forms, JavaScript, Servlets and Java Server Pages, PHP and MySQL, Web access to Oracle databases, and XML.', '06/07/2021 to 07/31/2021'),
(50556, 2, 'CSC 4520', 'Online', 'Rolando Estrada', 'Atlanta', 4, 'Design and Analysis of Algorithms. Prerequisite: (CSc 2720 or DSCI 2720) and either Math 3020 or Math 3030 with a C or higher. Students must meet the Computer Science Major Eligibility Requirement in order to enroll in this course. Techniques for designing efficient algorithms; analysis of algorithms; lower bound arguments; algorithms for sorting, selection, graphs, and string matching.', '06/07/2021 to 07/31/2021'),
(54078, 2, 'CSC 4760', 'Online', 'Erin-Elizabeth Durham', 'Atlanta', 4, 'Big Data Programming. Prerequisite: CSc 2720 with grade of C or higher. Students must meet the Computer Science Major Eligibility Requirement in order to enroll in this course. Crosslisted with CSc 6760. This course will cover the technologies, tools, frameworks and languages that are most commonly used in Big Data Programming. Focus will be on algorithms for analyzing and mining massive datasets, graphs and social network data. Topics include the storage, management, processing and analysis of massive datasets, as well as Big Data governance, security, and privacy issues.', '06/07/2021 to 07/31/2021');

-- --------------------------------------------------------

--
-- Table structure for table `fieldcourses`
--

DROP TABLE IF EXISTS `fieldcourses`;
CREATE TABLE IF NOT EXISTS `fieldcourses` (
  `CourseID` varchar(100) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `FieldNameID` varchar(100) NOT NULL,
  PRIMARY KEY (`CourseID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fieldcourses`
--

INSERT INTO `fieldcourses` (`CourseID`, `CourseName`, `FieldNameID`) VALUES
('AI_CSC4810', 'Artificial Intelligence', 'AI'),
('AI_CSC4850', 'Machine Learning', 'AI'),
('AI_CSC4851', 'Deep Learning', 'AI'),
('AI_CSC4740', 'Data Mining', 'AI'),
('AI_CSC4760', 'Big Data Programming', 'AI'),
('AI_CSC2720', 'Data Structures', 'AI'),
('DS_CSC4710', 'Database Systems', 'Data Science'),
('DS_CSC4780', 'Fundamentals of Data Science', 'Data Science'),
('DS_CSC4730', 'Data Visualization', 'Data Science'),
('DS_CSC4740', 'Data Mining', 'Data Science'),
('DS_CSC4760', 'Big Data Programming', 'Data Science'),
('DS_CSC4850', 'Introduction to Machine Learning', 'Data Science'),
('Web_CSC2320', 'Fundamentals of Website Development', 'Web Development'),
('Web_CSC4223', 'Privacy', 'Web Development'),
('Web_CSC4370', 'Web Programming', 'Web Development'),
('Web_CSC4750', 'Semantic Web', 'Web Development'),
('Web_CSC2720', 'Data Structures', 'Web Development'),
('Web_CSC3320', 'System-Level Programming', 'Web Development'),
('Sec_CSC4222', 'Introduction to Cyber Security', 'Cybersecurity'),
('Sec_CSC4220', 'Computer Networks', 'Cybersecurity'),
('Sec_CSC4221', 'Wireless Networks and Mobile Computing', 'Cybersecurity'),
('Sec_CSC4224', 'Ethical Hacking', 'Cybersecurity'),
('Sec_CSC4225', 'Internetwork Programming', 'Cybersecurity'),
('Sec_CSC4360', 'Mobile Application Development', 'Cybersecurity'),
('Sec_CSC2720', 'Data Structures', 'Cybersecurity'),
('Sec_CSC3320', 'System-Level Programming', 'Cybersecurity'),
('Ani_CSC4820', 'Interactive Computer Graphics', 'Computer Animation/Graphics'),
('Ani_CSC4840\r\n\r\n', 'Advanced Computer Graphics Programming', 'Computer Animation/Graphics'),
('Ani_CSC4821', 'Fundamentals of Game Design', 'Computer Animation/Graphics'),
('Ani_CSC4841', 'Computer Animation', 'Computer Animation/Graphics'),
('Ani_CSC3320', 'System-Level Programming', 'Computer Animation/Graphics'),
('Mob_CSC4221', 'Wireless Networks and Mobile Computing', 'Mobile Applications'),
('Mob_CSC4360', 'Mobile Application Development', 'Mobile Applications'),
('Mob_CSC2720', 'Data Structures', 'Mobile Applications'),
('Mob_CSC3320', 'System-Level Programming', 'Mobile Applications');

-- --------------------------------------------------------

--
-- Table structure for table `prerequisites`
--

DROP TABLE IF EXISTS `prerequisites`;
CREATE TABLE IF NOT EXISTS `prerequisites` (
  `Prereq_ID` varchar(100) NOT NULL,
  `Class_Needed_Course_Level` varchar(100) NOT NULL,
  `Class_ID_Course_Level` varchar(100) NOT NULL,
  PRIMARY KEY (`Prereq_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prerequisites`
--

INSERT INTO `prerequisites` (`Prereq_ID`, `Class_Needed_Course_Level`, `Class_ID_Course_Level`) VALUES
('Preq1', 'CSC 3320', 'CSC 4220 Computer Networks'),
('preq2', 'CSC 3320', 'CSC 4221 Wireless Networks and Mobile Computing'),
('preq3', 'CSC 3320', 'CSC 4222 Introduction to Information Security'),
('preq4', 'CSC 3320', 'CSC 4225 Internetwork Programming'),
('preq5', 'CSC 3320', 'CSC 4228 Mobile Networks and Security'),
('preq6', 'CSC 3320', 'CSC 4310 Parallel and Distributed Computing'),
('preq7', 'CSC 3320', 'CSC 4320 Operating Systems'),
('preq8', 'CSC 3320', 'CSC 4110 Introduction to Embedded System Laboratory'),
('preq9', 'CSC 3320', 'CSC 4820 Interactive Computer Graphics'),
('preq10', 'CSC 3320', 'CSC 5260 Really High Level Course'),
('preq11', 'CSC 2720', 'CSC 4221 Wireless Networks and Mobile Computing'),
('preq19', 'CSC 2720', 'CSC 5080 Super Programming'),
('preq12', 'CSC 2720', 'CSC 4222 Cyber Security'),
('preq13', 'CSC 2720', 'CSC 4223 Privacy'),
('preq14', 'CSC 2720', 'CSC 4226 Introduction to Software Security'),
('preq15', 'CSC 2720', 'CSC 4251 Computer Forensics'),
('preq16', 'CSC 2720', 'CSC 4260 Digital Image Processing'),
('preq17', 'CSC 2720', 'CSC 4330 Programming Language Concepts'),
('preq18', 'CSC 2720', 'CSC 4360 Mobile Application Development'),
('preq24', 'CSC 2510', 'CSC 2720 Data Structures'),
('preq25', 'CSC 2510', 'CSC 3210 Computer Organization and Programming'),
('preq26', 'CSC 2510', 'CSC 3320 System-Level Programming'),
('preq27', 'CSC 3210', 'CSC 4120 Introduction to Robotics'),
('preq28', 'CSC 3210', 'CSC 4210 Computer Architecture'),
('preq29', 'CSC 3210', 'CSC 4250 Malware Analysis and Defense'),
('preq30', 'CSC 3210', 'CSC 4310 Parallel and Distributed Computing'),
('preq31', 'CSC 3210', 'CSC 4330 Programming Language Concepts'),
('preq32', 'CSC 3210', 'CSC 4340 Compilers'),
('preq33', 'CSC 3210', 'CSC 8621 Coding');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `tasks` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `username`, `tasks`, `date`) VALUES
(3, 'jay@gmail.com', 'go to work', '2021-04-28'),
(11, 'reebrah@gmail.com', 'study', '2021-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `major` varchar(25) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `major`, `created_at`) VALUES
(1, 'Reza Ebrahimi', 'reebrah@gmail.com', '$2y$10$EDc5xxUYa3tdr6MMRLbkgugirWhGBXgAU36FAFrHW6Apx6cCbNhHK', 'COMP SCI', '2021-04-17 19:13:43'),
(2, 'rez', 'ebr@gmail.com', '$2y$10$N5lmLIjAZ5flFqZZpGtZguWsiD7jZzm9WAVgAkBdU64ZVNj3bZvN.', 'COMP SCI', '2021-04-17 19:15:44'),
(3, 'Rijo', 'rijo@gmail.com', '$2y$10$o9Dz26.gqX4aH7ga5vNoEOa97wdyVgRuzGC9ta70qeNR4yKBsnCjm', 'COMP SCI', '2021-04-17 20:12:20'),
(4, 'Koori Wan', 'koori@gmail.com', '$2y$10$axJT7A.6E7dmmKj3nJ9d6OVRbbb8L.Y63SoSzkpoOfEEEcsM0pP4.', 'COMP SCI', '2021-04-21 18:54:35'),
(5, 'rezeb', 'rezz@gmail.com', '$2y$10$DQ6r9qbVns4oJZ941ToiJuLyG.RuXQtCwx9iJOMasBcoYMPq.ZOjy', 'COMP SCI', '2021-04-25 21:54:56'),
(6, 'Jay', 'jay@gmail.com', '$2y$10$rtDkMEfmSL08bD1eAnhlY.KTenWeLYCSm6JPpPIdnlwnW2HxZFMQy', 'COMP SCI', '2021-04-27 15:18:09'),
(7, 'zak', 'zak@gmail.com', '$2y$10$5T.0KtShKXBZscGxBvjD3.Hh9X0X7eVdi75yvox6gSt2vpxZVp.OG', 'COMP SCI', '2021-04-27 17:17:42'),
(8, 'Smith', 'rez1@gmail.com', '$2y$10$64rDavuvLkNeg9i3uuI5/OqEoQ4ooLS1s8.M8qL4GvYDknS966QuW', 'COMP SCI', '2021-04-27 18:35:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
