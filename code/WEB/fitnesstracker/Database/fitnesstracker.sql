-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2013 at 12:13 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fitnesstracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `opinion` varchar(250) NOT NULL,
  `yourOpinion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `opinion`, `yourOpinion`) VALUES
(1, 'Souman Paul', 'souman.paul@technicise.com', 'Good', 'Nice'),
(2, 'Amit Paul', 'amit@mail.com', 'Good', 'Very good.'),
(3, 'Sanjit PAul', 'sanjit.cn@gmail.com', 'Topic', 'good'),
(4, 'Amit Paul', 'amit@gmail.com', 'Leave', 'Want leave'),
(5, 'Souman Das', 'an.anirban@gmail.com', 'Admin', 'jjj');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE IF NOT EXISTS `jobpost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `degree` varchar(30) NOT NULL,
  `school` varchar(70) NOT NULL,
  `dateGraduated` year(4) NOT NULL,
  `certification` varchar(40) NOT NULL,
  `notes` varchar(300) NOT NULL,
  `emr` varchar(50) NOT NULL,
  `emrModules` varchar(30) NOT NULL,
  `trainingLevel` varchar(50) NOT NULL,
  `yearsExperience` varchar(20) NOT NULL,
  `employmentType` varchar(30) NOT NULL,
  `employment` varchar(20) NOT NULL,
  `travel` varchar(20) NOT NULL,
  `requiredPay` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `preferredTravelRegion` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`id`, `degree`, `school`, `dateGraduated`, `certification`, `notes`, `emr`, `emrModules`, `trainingLevel`, `yearsExperience`, `employmentType`, `employment`, `travel`, `requiredPay`, `amount`, `preferredTravelRegion`) VALUES
(44, 'Associates', 'Gandhi School', 2013, 'Science', 'Computer', 'Epic', 'EMR Modules', 'Trained', '4', 'Good', 'W300', 'Remote', 'Full', 100, 'All'),
(45, 'Associates', 'Gandhi School', 2013, 'Science', 'Computer', 'Epic', 'EMR Modules', 'Trained', '5', 'Good', 'W300', 'Remote', 'Salary', 100, 'ALL'),
(46, 'Associates', 'Gandhi School', 2013, 'Science', 'Computer', 'Epic', 'EMR Modules', 'Trained', '5', 'Good', 'W300', 'Remote', 'Hourly', 100, 'ALL'),
(47, 'Associates', 'Gandhi School', 2013, 'Science', 'Computer', 'Epic', 'EMR Modules', 'Trained', '5', 'Good', 'Part Time', 'Remote', 'Hourly', 45, 'ALL'),
(48, 'Masters', 'Gandhi School', 2013, 'Science', 'Computer', 'Epic', 'EMR Modules', 'Trained', '5', 'Good', 'Part Time', 'Remote', 'Hourly', 100, 'ALL');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekerinfo`
--

CREATE TABLE IF NOT EXISTS `jobseekerinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(15) NOT NULL COMMENT 'mandatory field',
  `middleInitial` varchar(15) DEFAULT NULL COMMENT 'optional field',
  `lastName` varchar(15) NOT NULL COMMENT 'mandatory field',
  `address1` varchar(50) NOT NULL COMMENT 'mandatory field',
  `address2` varchar(50) NOT NULL DEFAULT 'null' COMMENT 'optional field',
  `city` varchar(30) NOT NULL COMMENT 'mandatory field',
  `state` varchar(30) NOT NULL COMMENT 'mandatory field',
  `region` varchar(3) NOT NULL COMMENT 'auto populate based on state: i.e. All/NW/SW/MW/NE/SE',
  `zip` int(10) NOT NULL COMMENT 'mandatory field',
  `phone1` int(10) NOT NULL COMMENT 'mandatory field',
  `phone2` int(10) NOT NULL COMMENT 'optional field',
  `email1` varchar(40) NOT NULL COMMENT 'optional field',
  `email2` varchar(40) NOT NULL COMMENT 'optional field',
  `highestDegree` varchar(15) NOT NULL COMMENT 'mandatory field: example- associates, bachelors, masters, doctorate, other',
  `degreeDetails` varchar(200) NOT NULL COMMENT 'optional field: details of degree in brief',
  `school` varchar(100) NOT NULL COMMENT 'mandatory field',
  `dateGraduated` int(4) NOT NULL COMMENT 'mandatory field: years only in a drop down list',
  `certifications` varchar(100) NOT NULL COMMENT 'mandatory field',
  `certificationNotes` varchar(300) NOT NULL COMMENT 'mandatory field',
  `emrTraining` varchar(30) NOT NULL COMMENT 'mandatory field----need more info',
  `emrModules` varchar(100) NOT NULL COMMENT 'mandatory field---need more info',
  `trainingLevel` varchar(30) NOT NULL COMMENT 'mandatory field',
  `yearsOfExperience` double NOT NULL COMMENT 'mandatory field',
  `employmentType` varchar(15) NOT NULL COMMENT 'mandatory field',
  `employmentTimingType` varchar(9) NOT NULL COMMENT 'mandatory field-full time/ part time',
  `travelChoice` varchar(35) NOT NULL COMMENT 'mandatory field-remote/willing to travel',
  `paymentType` varchar(10) NOT NULL COMMENT 'mandatory field-hourly/salary',
  `paymentAmount` int(11) NOT NULL COMMENT 'mandatory field',
  `preferredTravelRegion` varchar(3) NOT NULL COMMENT 'mandatory field-all/ew/sw/mw/ne/se',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `jobseekerinfo`
--

INSERT INTO `jobseekerinfo` (`id`, `firstName`, `middleInitial`, `lastName`, `address1`, `address2`, `city`, `state`, `region`, `zip`, `phone1`, `phone2`, `email1`, `email2`, `highestDegree`, `degreeDetails`, `school`, `dateGraduated`, `certifications`, `certificationNotes`, `emrTraining`, `emrModules`, `trainingLevel`, `yearsOfExperience`, `employmentType`, `employmentTimingType`, `travelChoice`, `paymentType`, `paymentAmount`, `preferredTravelRegion`) VALUES
(29, 'Chandra', 'Shekhar', 'Sengupta', 'Kulberia , bamangachi', 'Barasat , North 24 Pgs', 'Kolkata', 'Westbengal', 'Eas', 700124, 2147483647, 2147483647, 'sayan801@gmail.com', 'sayan801@yahoo.com', 'Masters', 'MTech', 'Gandhi School', 1902, 'test certification', 'test crt notes', 'Level 1', 'Patient Record', 'Proficient', 6, 'FTR', 'on', 'yes', 'cheque', 200, 'KS'),
(35, 'joy', 'sankar', 'sengupta', '37, govt college road,belathur ,kadugodi,bangalore', 'india', 'bangalore', 'westbengal', 'kar', 560067, 2147483647, 2147483647, 'sayan801@gmail.com', 'sayan801@yahoo.com', 'MTech', 'Laird Technology', 'bppimt', 1062006, 'ihe', 'passed', 'ffdds', 'all', '5', 7, 'FTR', 'cash', 'yes', 'daily', 123, 'IL'),
(37, 'Shovan', 'Kumar', 'Saha', 'Guma', 'Nazat', 'Bhabla', '', 'Wes', 743240, 2147483647, 2147483647, 'shovan5676@gmail.com', 'shovan564576@gmail.com', 'MCA', 'Masters', 'IGNOU', 2011, 'None', 'None', 'EMR Training', '', '0', 0, 'All', 'All', 'All', 'Salary', 0, 'ALL'),
(42, 'Soumen', 'kumar', 'Paul', 'barasat', 'barasat', 'barasat', '', 'WB', 743248, 2147483647, 2147483647, 'souman@gmail.com', 'soumen@ymail.com', 'P', 'sss', 'dd', 20, 'dsf', 'ghg', 'rrrr', 'ghghg', '0', 1, 'www', 'ppp', 'sdvsf', 'ac', 55, 'gfd'),
(43, 'Shovan', 'Kumar', 'Saha', 'Guma', 'Nazat', 'Bhabla', '', 'Wes', 743240, 2147483647, 2147483647, 'shovan5676@gmail.com', 'shovan564576@gmail.com', 'MCA', 'Masters', 'IGNOU', 2011, 'None', 'None', 'EMR Training', '', '0', 0, 'All', 'All', 'All', 'Salary', 0, 'ALL'),
(44, 'Partha ', 'Man', 'Dey', 'Kulberia', 'Bamangachi', 'Barasat', '', 'Wes', 743248, 2147483647, 2147483647, 'manpartha@gmail.com', 'manpartha189@gmail.com', 'S.S.C.', 'Madhyamik', 'Bholanath High', 2012, 'None', 'None', 'None', 'None', '0', 7, 'Full Time', 'All', 'All', 'All', 0, 'All'),
(45, 'Shovan', 'Kumar', 'Saha', 'Bamangachi', 'Habra', 'Barasat', '', 'Wes', 564, 2147483647, 2147483647, 'amitpaul@gmail.com', 'abaramitpaul@gmail.com', 'MCA', 'Masters', 'Gandhi School', 2011, 'None', 'None', 'EMR Training', 'External', '0', 52225, '433', 'All', 'All', 'Salary', 0, 'ALL'),
(46, 'Shovan', 'Kumar', 'dgndn', 'dng', 'fdhfd', 'fdh2335', '', 'Wes', 0, 0, 0, '', '', '', '', '', 0, '', '', '', '', '0', 0, '', '', '', '', 0, ''),
(47, 'Shovan', 'Kumar', 'Saha', 'Guma', 'Habra', 'Nazat', 'New York', 'Eas', 743240, 2147483647, 2147483647, 'amitpaul@gmail.com', 'shovan564576@gmail.com', 'Masters', 'Masters', 'Gandhi School', 2008, 'Computer Science', 'Advance Knowledge ', 'Yes', 'EMR Modules', 'Certified', 34, 'Good', 'EMR', 'ALL', 'Salary', 4555, 'ALL'),
(48, 'Shovan', 'Kumar', 'Saha', 'Guma', 'Habra', 'Nazat', 'New York', 'Eas', 743240, 2147483647, 2147483647, 'amitpaul@gmail.com', 'shovan564576@gmail.com', 'Masters', 'Masters', 'Gandhi School', 2008, 'Computer Science', 'Advance Knowledge ', 'Yes', 'EMR Modules', 'Certified', 34, 'Good', 'EMR', 'ALL', 'Salary', 4555, 'ALL'),
(49, 'Shovan', 'Kumar', 'Saha', 'Guma', 'Habra', 'Nazat', 'New York', 'Eas', 743240, 2147483647, 2147483647, 'amitpaul@gmail.com', 'shovan564576@gmail.com', 'Masters', 'Masters', 'Gandhi School', 2008, 'Computer Science', 'Advance Knowledge ', 'Yes', 'EMR Modules', 'Certified', 34, 'Good', 'EMR', 'ALL', 'Salary', 4555, 'ALL'),
(50, 'Test 1', 'M', 'Donotuse', '1 Main Lane', '', 'Anytown', '', 'Any', 0, 0, 0, 'format check', 'format check', 'Drop Down list', 'Optional', 'Optional', 0, 'Optional 123', 'optional 456', 'Drop Down of EHR', 'drop down of EHR related modules', '0', 0, 'Drop down', 'Is this r', 'Remote or Travel?', 'What is th', 0, 'Is '),
(54, 'Joy', 'Shankar', 'Sengupta', 'Bamangachi', 'Kulberia', 'Barasat', 'Mississippi', 'Sou', 743248, 2147483647, 2147483647, 'dostodas@gmail.com', 'shovan564576@gmail.com', 'Masters', 'Computer Application', 'Gandhi School', 2012, 'Computer Science', 'None', 'EMR Training', 'Other', 'Certified', 5, '0', 'All', '', 'Hourly', 4555, ''),
(55, 'Joy', 'Shankar', 'Sengupta', 'Bamangachi', 'Kulberia', 'Barasat', 'Mississippi', 'Sou', 743248, 2147483647, 2147483647, 'dostodas@gmail.com', 'shovan564576@gmail.com', 'Masters', 'Computer Application', 'Gandhi School', 2012, 'Computer Science', 'None', 'EMR Training', 'Other', 'Certified', 5, '0', 'All', '', 'Salary', 4555, ''),
(56, 'Joy', 'Shankar', 'Sengupta', 'Bamangachi', 'Kulberia', 'Barasat', 'Mississippi', 'Sou', 743248, 2147483647, 2147483647, 'dostodas@gmail.com', 'shovan564576@gmail.com', 'Masters', 'Computer Application', 'Gandhi School', 2012, 'Computer Science', 'None', 'EMR Training', 'Other', 'Certified', 5, 'Full Time ', 'All', '', 'Salary', 4555, ''),
(57, 'Shovan', 'Shankar', 'Sengupta', 'Bamangachi', 'Kulberia', 'Barasat', 'Alabama', '353', 743248, 2147483647, 2147483647, 'shovan5676@gmail.com', 'abaramitpaul@gmail.com', 'Associates', 'Computer Application', 'Gandhi School', 2013, 'Computer Science', 'Advance Knowledge ', 'EMR Training', 'EMR Modules', 'Proficient', 34, 'Full Time ', 'EMR', '', 'Hourly', 4555, ''),
(58, 'Steve ', 'bryan', 'jobs', '101, Heavenly Garden', 'CA', 'Olathe', 'California', 'Eas', 500069, 2147483647, 1245968312, 'steve@gmail.com', 'jobs@yahoo.com', 'Doctorate', 'Distinction', 'School of Comp Sc', 2013, 'ihe', 'advanced training', 'yes', 'EMR Modules', 'Trained', 29, 'Full Time ', 'Day', '', 'Hourly', 156, ''),
(59, 'Shovan', ' ', 'Saha', 'Guma', '', 'Kolkata', 'Virginia', '', 743704, 2147483647, 0, 'shovan.ree@gmail.com', '', 'Bachelors', 'BCA', 'PVM', 2013, 'BCA', '', '??', 'EMR Modules', 'Certified', 10, 'Full Time ', '', '', 'Hourly', 1000, ''),
(60, 'Shovan', 'Kumar', 'Das', 'Habra', '', 'Barasat', 'Alabama', '', 743248, 2147483647, 0, 'amitpaul@gmail.com', '', 'Associates', 'Computer Application', 'Gandhi School', 2013, 'Computer Science', '', 'EMR Training', 'EMR Modules', 'Trained', 0, 'Full Time ', '', '', 'Hourly', 4555, ''),
(61, 'Shovan', 'Kumar', 'Das', 'Habra', '', 'Barasat', 'Alabama', '', 743248, 2147483647, 0, 'amitpaul@gmail.com', '', 'Associates', 'Computer Application', 'Gandhi School', 2013, 'Computer Science', '', 'EMR Training', 'EMR Modules', 'Trained', 0, 'Full Time ', '', '', 'Hourly', 4555, ''),
(62, 'Shovan', 'Kumar', 'Das', 'Habra', '', 'Barasat', 'Alabama', '', 743248, 2147483647, 0, 'amitpaul@gmail.com', '', 'Associates', 'Computer Application', 'Gandhi School', 2013, 'Computer Science', '', 'EMR Training', 'EMR Modules', 'Trained', 0, 'Full Time ', '', '', 'Hourly', 4555, ''),
(63, 'Shovan', 'Kumar', 'Das', 'Habra', '', 'Barasat', 'Alabama', '', 743248, 2147483647, 0, 'amitpaul@gmail.com', '', 'Associates', 'Computer Application', 'Gandhi School', 2013, 'Computer Science', '', 'EMR Training', 'EMR Modules', 'Trained', 0, 'Full Time ', '', '', 'Hourly', 4555, ''),
(64, 'Shovan', 'Kumar', 'Das', 'Habra', '', 'Barasat', 'Alabama', '', 743248, 2147483647, 0, 'amitpaul@gmail.com', '', 'Associates', 'Computer Application', 'Gandhi School', 2013, 'Computer Science', '', 'EMR Training', 'EMR Modules', 'Trained', 0, 'Full Time ', '', '', 'Hourly', 4555, ''),
(72, 'Shovan', 'Kumar', 'dgndn', 'Bamangachi', 'fdhfd', 'fdh2335', 'Louisiana', '353', 743248, 2147483647, 2147483647, 'amitpaul@gmail.com', 'shovan564576@gmail.com', 'Bachelors', 'Computer Application', 'fdh', 2011, 'Computer Science', 'Advance Knowledge ', 'EMR Training', 'Other', 'Certified', 52225, 'Full Time ', 'All', '0', 'Hourly', 4555, '$h'),
(73, 'Shovan', 'Kumar', 'dgndn', 'Bamangachi', 'fdhfd', 'fdh2335', 'Louisiana', '353', 743248, 2147483647, 2147483647, 'amitpaul@gmail.com', 'shovan564576@gmail.com', 'Bachelors', 'Computer Application', 'fdh', 2011, 'Computer Science', 'Advance Knowledge ', 'EMR Training', 'Other', 'Certified', 52225, 'Full Time ', 'All', '0', 'Hourly', 4555, '0'),
(74, 'Joy', 'Shankar', 'dgndn', 'Bamangachi', 'fdhfd', 'Barasat', 'Illinois', '353', 743248, 2147483647, 363443, 'amitpaul@gmail.com', 'shovan564576@gmail.com', 'Bachelors', 'Computer Application', 'WBUT', 2010, 'Computer Science', 'Advance Knowledge ', 'EMR Training', 'Other', 'Proficient', 52225, 'Full Time ', 'EMR', '0', 'Hourly', 4555, '0'),
(75, 'Joy', 'Shankar', 'dgndn', 'Bamangachi', 'fdhfd', 'Barasat', 'Illinois', '353', 743248, 2147483647, 363443, 'amitpaul@gmail.com', 'shovan564576@gmail.com', 'Bachelors', 'Computer Application', 'WBUT', 2010, 'Computer Science', 'Advance Knowledge ', 'EMR Training', 'Other', 'Proficient', 52225, 'Full Time ', 'EMR', '0', 'Hourly', 4555, 'SE '),
(76, 'Joy', 'Shankar', 'dgndn', 'Bamangachi', 'fdhfd', 'Barasat', 'Illinois', '353', 743248, 2147483647, 363443, 'amitpaul@gmail.com', 'shovan564576@gmail.com', 'Bachelors', 'Computer Application', 'WBUT', 2010, 'Computer Science', 'Advance Knowledge ', 'EMR Training', 'Other', 'Proficient', 52225, 'Full Time ', 'EMR', '0', 'Hourly', 4555, 'SE '),
(77, 'Joy', 'Shankar', 'dgndn', 'Bamangachi', 'fdhfd', 'Barasat', 'Illinois', '353', 743248, 2147483647, 363443, 'amitpaul@gmail.com', 'shovan564576@gmail.com', 'Bachelors', 'Computer Application', 'WBUT', 2010, 'Computer Science', 'Advance Knowledge ', 'EMR Training', 'Other', 'Proficient', 52225, 'Full Time ', 'EMR', '0', 'Hourly', 4555, 'SE '),
(78, 'Shovan', 'Kumar', 'dgndn', 'Bamangachi', 'Kulberia', 'Barasat', 'Alabama', '353', 743248, 2147483647, 2147483647, 'amitpaul@gmail.com', '', 'Bachelors', 'Computer Application', 'ngnj', 2013, 'Computer Science', 'Advance Knowledge ', 'EMR Training', 'EMR Modules', 'Proficient', 52225, 'Full Time ', 'All', '0', 'Salary', 4555, '0'),
(79, 'Shovan', 'Shankar', 'dgndn', 'Bamangachi', 'Kulberia', 'Barasat', 'Alaska', '353', 743248, 2147483647, 2147483647, 'amitpaul@gmail.com', 'abaramitpaul@gmail.com', 'Bachelors', 'Computer Application', 'Gandhi School', 2012, 'Computer Science', 'Advance Knowledge ', 'EMR Training', 'EMR Modules', 'Trained', 52225, 'Full Time ', 'EMR', '0', 'Hourly', 4555, '0'),
(80, 'Anirban', 'Kumar', 'Sengupta', 'Bamangachi', 'Habra', 'Kolkata', 'Arizona', 'Eas', 743248, 2147483647, 2147483647, 'shovan5676@gmail.com', 'dostokrdas@gmail.com', 'Masters', 'Computer Application', 'Gandhi School', 2001, 'Computer Science', 'Advance Knowledge ', 'EMR Training', 'EMR Modules', 'Proficient', 5, 'Full Time ', 'EMR', '0', 'Salary', 4555, '0'),
(81, 'aaaaa', 'sssssss', 'qqqqq', 'qwqqqq , njhkl', 'sgshshsk ,klo', 'cut', 'Alabama', 'gh', 123456, 12346698, 789456123, 's@gmail.com', 'a@gmail.com', 'Associates', 'btech', 'mit', 2013, 'ihe', '2013', 'yes', 'EMR Modules', 'Trained', 10, 'Full Time ', '9-8', '0', 'Hourly', 200, '0'),
(82, 'lokenath', 's', 'sengupta', 'Lexmark International (India) Private Limited,Bloc', '5th Floor, DLF IT Park,08 - Major Arterial Road,Ne', 'kolkata', 'Alabama', 'kl', 700156, 2147483647, 2147483647, 'sayan801@gmail.com', 'jobs@yahoo.com', 'Associates', 'a', 'asder', 2013, 'himss', 'good', 'tes', 'EMR Modules', 'Trained', 5, 'Full Time ', '4-5', '0', 'Hourly', 156, '0'),
(92, 'ussain', 'r', 'bolt', 'Jamaica, Beach road', '', 'kansas', 'Alabama', '123', 456123, 986564562, 4512632, 'botl@gmail.com', 'ussain@gmail.com', 'Associates', '12th', 'West Indies High School', 2013, 'Runner', 'champion', 'yes', 'Other', 'Trained', 8, 'Full Time ', '9-8', '0', 'Hourly', 152, '0'),
(93, 'Rabin', 'r', 'bolt', 'Jamaica, Beach road', 'bhagar', 'kansas', 'Alabama', '123', 456123, 986564562, 4512632, 'botl@gmail.com', 'ussain@gmail.com', 'Associates', '12th', 'West Indies High School', 2013, 'Runner', 'champion', 'yes', 'Other', 'Trained', 8, 'Full Time', '9-8', '3', 'Hourly', 152, '0'),
(94, '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', 0, '0'),
(96, 'Sanjit', 'Kumar', 'pal', 'Guma', 'Nazat', 'Bhabla', 'west bengal', 'Wes', 743240, 2147483647, 2147483647, 'shovan5676@gmail.com', 'shovan564576@gmail.com', 'MCA', 'Masters', 'IGNOU', 2011, 'None', 'None', 'EMR Training', 'tttttt', '0', 0, 'All', 'All', 'All', 'Salary', 0, '0'),
(104, 'Anirban', 'kumar', 'Nandy', 'Bamangachi', 'hihello', 'hihello', 'Alabama', 'ami', 99999, 2147483647, 0, 'ani@gmil.com', '', 'Associates', 'MCA', 'IGNOU', 2013, 'hihello', 'hihello', 'ami', 'EMR Modules', 'Trained', 9, 'Full Time ', '', '0', 'Hourly', 99, '0'),
(105, 'qqq', 'qq', 'qq', 'qq', 'qq', 'qq', 'Alabama', 'qq', 99999, 2147483647, 0, 'q@gmail.com', '', 'Associates', 'MCA', 'IGNOU', 2013, 'hihello', 'hihello', 'hihello', 'EMR Modules', 'Trained', 9, 'Full Time ', '', '0', 'Hourly', 99, '0'),
(106, 'Anirban', 'Kumar', 'Nandy', 'Bamangachi', '', 'Barasat', 'Alabama', '', 743248, 2147483647, 0, 'ani@gmil.com', '', 'Associates', 'MCA', 'IGNOU', 2013, 'Computer Applications', '', 'Data Base', 'EMR Modules', 'Trained', 1, 'Full Time ', '', '0', 'Hourly', 2000, '0'),
(107, 'Taniya', 'k', 'paul', 'barasat', '', 'kolkata', 'Alabama', '', 743248, 2147483647, 0, 't@gmail.com', '', 'Associates', 'MCA', 'IGNOU', 2013, 'Computer', 'hihello', 'hihello', 'EMR Modules', 'Trained', 9, 'Full Time ', '', '0', 'Hourly', 99, '0'),
(108, 'Taniya', 'k', 'paul', 'Bamangachi', '', 'Barasat', 'Alabama', '', 743248, 2147483647, 0, 't@gmail.com', '', 'Associates', 'MCA', 'IGNOU', 2013, 'Computer', '', 'Data Base', 'EMR Modules', 'Trained', 1, 'Full Time ', '', '0', 'Hourly', 99, '0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `usertype`) VALUES
(5, 'sanjit@mail.com', '827ccb0eea8a706c4c34', 'jobseeker'),
(8, 'q@gmail.com', '12345', 'jobseeker'),
(9, 'ani@gmil.com', '12345', 'jobseeker'),
(11, 't@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'jobseeker');

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE IF NOT EXISTS `personaldetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `language` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`id`, `name`, `email`, `password`, `address`, `dob`, `sex`, `language`) VALUES
(1, 'anirban nandy', 'anirban', 'anirban2012', 'bamangachi', '1-Jul-1944', 'male', 'English,Hindi,'),
(2, 'Souman Paul', 'souman.paul@technicise.co', '123456', 'Bamangachhi.', '3-Mar-1984', 'male', 'English,Hindi,Bengali,'),
(3, 'Santu', 'santu@gmail.com', '1234567', 'Bamangachhi', '5-Feb-1971', 'male', 'English,Hindi,Bengali,'),
(4, 'sayan', 'sa@gmail.com', '123456', 'kulberia', '1-Jan-1911', 'male', 'English,Hindi,Bengali,Tamil,'),
(5, 'Shovan Majumdar', 'shovan@gmail.com', '12345', 'Habra', '1-April-2028', '', 'Hindi,Bengali,');

-- --------------------------------------------------------

--
-- Table structure for table `recruiterinfo`
--

CREATE TABLE IF NOT EXISTS `recruiterinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `organisation` varchar(128) NOT NULL,
  `posts` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `recruiterinfo`
--

INSERT INTO `recruiterinfo` (`id`, `firstname`, `lastname`, `phone`, `email`, `organisation`, `posts`) VALUES
(1, 'chandra', 'sengupta', '7894561236', 'sayan801@gmail.com', 'technicise', 5),
(2, 'sayan', 'sengupta', '919831392394', 'info@technicise.com', 'Laird Technology', 0),
(3, 'Tania', 'Roy', '9231919212', 'example@example.com', 'Choudhury', 0),
(4, 'Amit', 'Paul', '9890989878', 'amit.technicise.com', 'Technicise.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
