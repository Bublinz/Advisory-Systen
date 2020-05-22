-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2020 at 09:33 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u519554690_advisory`
--

-- --------------------------------------------------------

--
-- Table structure for table `actiivities`
--

CREATE TABLE `actiivities` (
  `act_id` int(11) NOT NULL,
  `act_title` varchar(50) NOT NULL,
  `act_message` text NOT NULL,
  `act_time` varchar(15) NOT NULL,
  `act_date` varchar(11) NOT NULL,
  `act_section` varchar(11) NOT NULL,
  `adviser_id` int(11) NOT NULL,
  `act_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actiivities`
--

INSERT INTO `actiivities` (`act_id`, `act_title`, `act_message`, `act_time`, `act_date`, `act_section`, `adviser_id`, `act_status`) VALUES
(1, 'Meeting with HOD', 'The HOD shall be meeting with you all, please you are advised to be at software lab on  the last friday of this month', '10:00am', '30/08/2019', '2013/2014', 1, 1),
(2, 'NUC Preparation', 'NUC Visit to department for ACCREDITATION', '8:00am', '2019-10-07', '2015/2016', 1, 1),
(3, 'Meet your project supergisor', 'You have to solicit for your supervision to start supervising you so that it is not be a challenge after the strike', '10am', '2020-05-21', '2015/2016', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `adviser`
--

CREATE TABLE `adviser` (
  `adviser_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `rank` varchar(15) NOT NULL,
  `interest` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adviser`
--

INSERT INTO `adviser` (`adviser_id`, `name`, `gender`, `phone`, `address`, `dept`, `rank`, `interest`, `email`, `role`, `username`, `password`, `status`) VALUES
(1, ' Odirichukwu JC', 'Female', '08037394691', 'Umuchima', ' Computer Science', ' Lecturer 1', ' Software Engineering, Robotics, Embedded system, Database Management', 'chiomajaco6@gmail.com', 2, 'chiomajaco', 'amen', 1);

-- --------------------------------------------------------

--
-- Table structure for table `adviser_std`
--

CREATE TABLE `adviser_std` (
  `as_id` int(11) NOT NULL,
  `as_std_id` int(11) NOT NULL,
  `as_adviser_id` int(11) NOT NULL,
  `as_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adviser_std`
--

INSERT INTO `adviser_std` (`as_id`, `as_std_id`, `as_adviser_id`, `as_status`) VALUES
(1, 1, 1, 1),
(2, 23, 1, 1),
(3, 25, 1, 1),
(4, 26, 1, 1),
(5, 28, 1, 1),
(6, 29, 1, 1),
(7, 30, 1, 1),
(8, 33, 1, 1),
(9, 13, 1, 1),
(10, 19, 1, 1),
(11, 34, 1, 1),
(12, 35, 1, 1),
(13, 9, 1, 1),
(14, 36, 1, 1),
(15, 37, 1, 1),
(16, 40, 1, 1),
(17, 18, 1, 1),
(18, 42, 1, 1),
(19, 43, 1, 1),
(20, 45, 1, 1),
(21, 47, 1, 1),
(22, 22, 1, 1),
(23, 51, 1, 1),
(24, 52, 1, 1),
(25, 55, 1, 1),
(26, 56, 1, 1),
(27, 5, 1, 1),
(28, 57, 1, 1),
(29, 61, 1, 1),
(30, 65, 1, 1),
(31, 41, 1, 1),
(32, 44, 1, 1),
(33, 66, 1, 1),
(34, 7, 1, 1),
(35, 67, 1, 1),
(36, 69, 1, 1),
(37, 68, 1, 1),
(38, 70, 1, 1),
(39, 71, 1, 1),
(40, 59, 1, 1),
(41, 60, 1, 1),
(42, 10, 1, 1),
(43, 72, 1, 1),
(44, 6, 1, 1),
(45, 15, 1, 1),
(46, 17, 1, 1),
(47, 73, 1, 1),
(48, 16, 1, 1),
(49, 74, 1, 1),
(50, 75, 1, 1),
(51, 48, 1, 1),
(52, 11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `general_feed`
--

CREATE TABLE `general_feed` (
  `feed_id` int(11) NOT NULL,
  `feed_title` varchar(50) NOT NULL,
  `feed_message` text NOT NULL,
  `feed_date` varchar(12) NOT NULL,
  `feed_section` varchar(12) NOT NULL,
  `feed_status` int(11) NOT NULL,
  `adviser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_feed`
--

INSERT INTO `general_feed` (`feed_id`, `feed_title`, `feed_message`, `feed_date`, `feed_section`, `feed_status`, `adviser_id`) VALUES
(5, 'Project supervision', 'Hope, you have started your project, some of my good students are about entering their chapter three. Utilise the lock down/ASUU strike to do your project if your supervisor can agree. ', '2020-05-19', '2015/2016', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `general_feed_reminder`
--

CREATE TABLE `general_feed_reminder` (
  `rem_id` int(11) NOT NULL,
  `feed_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `adviser_id` int(11) NOT NULL,
  `rem_status` int(11) NOT NULL,
  `std_rem_date` varchar(12) NOT NULL,
  `ad_rem_date` varchar(12) NOT NULL,
  `std_rem_status` int(11) NOT NULL,
  `ad_rem_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_feed_reminder`
--

INSERT INTO `general_feed_reminder` (`rem_id`, `feed_id`, `std_id`, `adviser_id`, `rem_status`, `std_rem_date`, `ad_rem_date`, `std_rem_status`, `ad_rem_status`) VALUES
(1, 1, 0, 0, 1, '', '0', 1, 0),
(2, 1, 0, 0, 1, '2019-11-13', '0', 1, 0),
(3, 2, 1, 0, 1, '2019-11-13', '0', 1, 0),
(4, 3, 1, 0, 1, '2019-11-18', '0', 1, 0),
(5, 3, 1, 0, 1, '2019-11-18', '0', 1, 0),
(6, 5, 19, 0, 1, '2020-05-26', '0', 1, 0),
(7, 5, 75, 0, 1, '2020-05-25', '0', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `general_read`
--

CREATE TABLE `general_read` (
  `gr_id` int(11) NOT NULL,
  `gr_std_id` int(11) NOT NULL,
  `gr_feed_id` int(11) NOT NULL,
  `gr_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `message_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `date` date NOT NULL,
  `srate` varchar(20) NOT NULL,
  `rrate` varchar(20) NOT NULL,
  `seen` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `it_monitoring`
--

CREATE TABLE `it_monitoring` (
  `it_id` int(11) NOT NULL,
  `acct_name` varchar(100) NOT NULL,
  `acct_number` varchar(15) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `sort_code` varchar(15) NOT NULL,
  `placement` varchar(500) NOT NULL,
  `unit` varchar(500) NOT NULL,
  `state` varchar(100) NOT NULL,
  `start_date` varchar(15) NOT NULL,
  `responsibility` varchar(100) NOT NULL,
  `supervisor_name` varchar(100) NOT NULL,
  `supervisor_phone` varchar(100) NOT NULL,
  `std_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_feed`
--

CREATE TABLE `personal_feed` (
  `msg_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `std_id` int(11) NOT NULL,
  `adviser_id` int(11) NOT NULL,
  `sent_date` varchar(12) NOT NULL,
  `std_rem_date` varchar(12) NOT NULL,
  `adviser_rate` varchar(20) NOT NULL,
  `std_read_status` int(11) NOT NULL,
  `msg_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_feed`
--

INSERT INTO `personal_feed` (`msg_id`, `message`, `std_id`, `adviser_id`, `sent_date`, `std_rem_date`, `adviser_rate`, `std_read_status`, `msg_status`) VALUES
(1, 'Hello, your csc301 result has been found. You made an A, keep it up', 1, 1, '25/08/2019', '2020-12-20', 'Message', 0, 1),
(2, 'Go to Maths Department and check the carryover over course you re-wrote with immediate effect', 1, 1, '25/08/2019', '', 'Urgent', 0, 1),
(3, 'Go and Check your CSC 305 result and let me know', 2, 1, '2019-11-13', '', 'Urgent', 0, 1),
(4, 'come lets go and see the hod together by 1pm today', 1, 1, '2019-11-13', '', 'Urgent', 1, 1),
(5, 'Have you started your project?', 28, 1, '2020-05-21', '', 'Optional', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students_data`
--

CREATE TABLE `students_data` (
  `std_id` int(11) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `other_names` varchar(30) NOT NULL,
  `img` blob NOT NULL,
  `reg_no` varchar(13) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `per_address` text NOT NULL,
  `lga` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parents_name` varchar(30) NOT NULL,
  `parents_contact` varchar(11) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `admission_year` int(20) NOT NULL,
  `admissionMode` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `green_file` varchar(15) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_data`
--

INSERT INTO `students_data` (`std_id`, `surname`, `other_names`, `img`, `reg_no`, `gender`, `phone`, `dob`, `per_address`, `lga`, `state`, `email`, `parents_name`, `parents_contact`, `dept`, `admission_year`, `admissionMode`, `password`, `green_file`, `role`, `status`) VALUES
(1, 'UWABUNKEONYE', 'CHIDERA MAGNUS', '', '20141897665', 'Female', '08167759337', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'loveisprecious032@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2014, 'UTME', 'amen', 'Yes', 3, 1),
(3, 'JOSEPH', 'PETER KELECHUKWU', '', '20121798455', 'Female', '08034226244', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'petershoping123@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2011, 'UTME', '222', '', 3, 1),
(4, 'Ikechukwu', 'Emmanuel ifeanyi', '', '20151023855', 'Female', '09036975046', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'emmanuelikechukwu1700@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Alexisliam1', '', 3, 1),
(5, 'Anyanwu ', 'Chidiebere Emmanuel ', '', '20151016345', 'Female', '09034079223', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'Highheartmado@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', '244366236$Spicy', '', 3, 1),
(6, 'KALU', 'Goodness virtue', '', '20151019885', 'Female', '08136917800', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'goodnesskalu8@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', '17711996', '', 3, 1),
(7, 'Obije', 'Daniel', '', '20151010065', 'Female', '08060501094', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'prosperousdaniel5@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', '@obintus', '', 3, 1),
(8, 'Chisom', 'Anyikwa vitus', '', '20162974535', 'Female', '08035760682', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'chisomv9@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2016, 'DE', 'Sosoliso123!', '', 3, 1),
(9, 'Eze', 'Eze Onyedikachi', '', '20151011905', 'Female', '08134490002', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'oeze609@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Goodness21', 'Yes', 3, 1),
(10, 'Akabuike', 'Samuel', '', '20151010515', 'Female', '08139749489', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'emmachukwuebuka2@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Godsgeneral', '', 3, 1),
(11, 'CHINAKA', 'ODINAKA LAWRENCE', '', '20151010535', 'Female', '07060629949', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'chinakaodinaka@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'nickleo123', '', 3, 1),
(12, 'Umunnakwe', 'Chukwubuikem Silas', '', '20151016325', 'Female', '07065818288', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'christosilas95@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', '26041995', '', 3, 1),
(13, 'Kolawole', 'Dare', '', '20151011925', 'Female', '08106151609', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'Davidkolawole502@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', '08106151609', 'Yes', 3, 1),
(14, 'Umeaka', 'Onyeka Isaac', '', '20151010625', 'Female', '08140087663', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'onyekaisaac444@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'onyi4444', '', 3, 1),
(15, 'Ohaga', 'Chukwuemeka Michael ', '', '20151016205', 'Female', '09033098293', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'Ohagamichael@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'janeohaga100%', '', 3, 1),
(16, 'Nnopu', 'Chinonso Kenneth ', '', '20151016255', 'Female', '08089223461', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'kennynnopu@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Aspirine1', '', 3, 1),
(17, 'Onyebuagu', 'Precious Nneoma', '', '20151010615', 'Female', '08168107463', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'onyebuagup@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Nneoma1998', '', 3, 1),
(18, 'Ukadike', 'Chinonso Austinmoris', '', '20151015905', 'Female', '08135598433', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'ukadikeaustin@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', '@ukadike96', 'Yes', 3, 1),
(19, 'Okoye', 'Ifenna', '', '20151016225', 'Female', '07050455371', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'okoyeifenna24@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Greatness', 'Yes', 3, 1),
(20, 'Nwosu', 'Chinedu Henry', '', '20162970575', 'Female', '08168913384', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'chinedunwosu36@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2016, 'DE', 'edubrazil', '', 3, 1),
(21, 'Jonah', 'Kenneth nnagozirim', '', '20162994405', 'Female', '07061920016', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'Stken4real@yahoo.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2016, 'DE', 'Ekemankey1', '', 3, 1),
(22, 'Ibe', 'Chinasa Magnus', '', '20151010055', 'Female', '07065490046', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'mavalour.mc@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', '#Hacked1#', '', 3, 1),
(23, 'Nwazuo', 'Chizaram Goodluck', '', '20151074095', 'Female', '08167227144', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'chizonwazuo@yahoo.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', '.adgjmpt', '', 3, 1),
(24, 'Nwanze', 'Stanley', '', '20151020235', 'Female', '08100568718', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'stanleysmg101@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Carter123', '', 3, 1),
(25, 'Metu ', 'Anthony Chinonso ', '', '20151055675', 'Female', '08145145431', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'tcharles795@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'IfeanyiMetu', '', 3, 1),
(26, 'Moses', 'Ngozi  Blessing', '', '20151013275', 'Female', '07025279642', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'nb361711@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Blessed', '', 3, 1),
(27, 'Philip', 'Chimbuchi Victory ', '', '20151011955', 'Female', '07064408036', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'chimbuchiphilip@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'ezegephilip', '', 3, 1),
(28, 'Eze', 'Victor chukwuebuka', '', '20151015915', 'Female', '09054536737', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'ezevictor1@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'chukwu', '', 3, 1),
(29, 'Nwosu', 'Chidera', '', '20151019985', 'Female', '08105270723', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'derahcnwosu@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Onwueyiqueenette99', '', 3, 1),
(30, 'Okeke ', 'Samuel Ugochukwu', '', '20151016115', 'Female', '08169661191', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'sammyug7@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2014, 'UTME', 'freshkiidy7', '', 3, 1),
(31, 'Onwuzuruike ', 'Chukwuebuka Victor ', '', '20151011945', 'Female', '07032581745', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'victorander18@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Edenhazard10', '', 3, 1),
(32, 'John', 'Timothy Chikereze', '', '20151010575', 'Female', '08106379633', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'timsparkjohn@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'timmyloaf1', '', 3, 1),
(33, 'Ekwe', 'Theophilus ', '', '55105670', 'Female', '09027337000', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'chidexekwe@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Zventoska97', '', 3, 1),
(34, 'Azike', 'Chukwuemerie Jonathan', '', '20151016185', 'Female', '09067447387', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'azikejonathan@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Firefox@007', '', 3, 1),
(35, 'Obidike', 'Uchenna Joseph', '', '20151016355', 'Female', '08187696853', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'ucheeleezs@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', '0606', '', 3, 1),
(36, 'Umeorizu', 'Chibuike', '', '20151016095', 'Female', '08109673517', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'Johnpaulumeorizu@yahoo.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Umeh1122', '', 3, 1),
(37, 'Anne', 'Onyedinefu Ezinne', '', '20162973055', 'Female', '07030775776', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'zinny0408@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2016, 'DE', '07030775776', '', 3, 1),
(38, 'Eze ', 'Egesigh Isaac ', '', '20151019145', 'Female', '08163927072', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'mayoreze26@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Mayorslide26', '', 3, 1),
(39, 'Obike', 'Munachimso', '', '20151019105', 'Female', '8147198385', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'munachimsoobike@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', '@Augustine1', '', 3, 1),
(40, 'Eboh', 'Chinaza Augustine', '', '20151011895', 'Female', '08101510967', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'Austineboh2@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Peterpan212', '', 3, 1),
(41, 'Chinemerem', 'Benita Akachi', '', '20151013165', 'Female', '08147522560', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'chinemerembenny23@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2016, 'UTME', '20151013165', '', 3, 1),
(42, 'Odika', 'Chukwemeke Reuben ', '', '20151016275', 'Female', '08031569204', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', '007rubystone@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Lilsaints360', '', 3, 1),
(43, 'Nzekwe', 'Emeka Christian', '', '20151010595', 'Female', '08102447485', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'Benwcisse@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'gabriel97', 'Yes', 3, 1),
(44, 'Mmadu', 'Daniel Izuchukwu', '', '20151010585', 'Female', '07063531558', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'danielmmadu58@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'danny1997145623', '', 3, 1),
(45, 'Okereke ', 'Sunday ', '', '20151010605', 'Female', '08102829354', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'okerekesunday042@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'gallant3525', '', 3, 1),
(46, 'Agbakoba', 'Chukwuemeka anthony', '', '20151023835', 'Female', '08167461100', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'Vinztony524@gmail.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'anthony1999', '', 3, 1),
(47, 'Umejiaku', 'Raymond Ikechika', '', '20151016155', 'Female', '08088355632', '1997-12-11', 'f 75 old ojo road satellite town1', 'Oru West', '', 'godfirst.raymond@yahoo.com', 'Gabriel Nzekwe', '08102447485', 'Computer Science', 2015, 'UTME', 'Magnificent@', 'Yes', 3, 1),
(48, 'Achara', 'Ikechukwu Chukwuagozie Obinna', '', '20151081215', '', '07030940959', '', '', '', '', 'ikechukwuachara@gmail.com', '', '', '', 2015, 'UTME', 'ikechukwu96', '', 3, 1),
(49, 'Nwachukwu ', 'George Chukwujindu ', '', '56216707', '', '08065669871', '', '', '', '', 'Baritone2016@yahoo.com', '', '', '', 2015, 'UTME', 'Chukwujindu22', '', 3, 1),
(50, 'Anams ', 'Elvis Chiebuka ', '', '20151016085', '', '09037424057', '', '', '', '', 'anamselvis0@gmail.com', '', '', '', 2015, 'UTME', 'Ebuka1994', '', 3, 1),
(51, 'Ibekason', 'Alexander Onyebuchi ', '', '20151016335', '', '08162513865', '', '', '', '', 'Alibekason@gmail.com', '', '', '', 2015, 'UTME', 'Alex1997', '', 3, 1),
(52, 'Michael', 'Isaac Mariochukwu', '', '20151015895', '', '08102754930', '', '', '', '', 'imariochukwu@gmail.com', '', '', '', 2015, 'UTME', 'Mariochukwu1!', '', 3, 1),
(53, 'Okoro', 'Chibueze Kelvin', '', '20162994565', '', '08134373630', '', '', '', '', 'Chibuezekelvin@gmail.com', '', '', '', 2016, 'DE', 'Godisking', '', 3, 1),
(54, 'Egbunonu', 'Onyebuchi Kenneth', '', '20151010555', '', '08035314990', '', '', '', '', 'buchkoncept@gmail.com', '', '', '', 2015, 'UTME', 'dreamer1', '', 3, 1),
(55, 'Emecheta', 'Nnorom Junior', '', '20162976545', '', '08106614753', '', '', '', '', 'nnoromjnr@gmail.com', '', '', '', 2016, 'DE', 'emechetannorom', 'Yes', 3, 1),
(56, 'ONWUDIWE', 'IJEOMA JUSTINA', '', '20151025985', '', '09029346276', '', '', '', '', 'onwudiweijeoma6@gmail.com', '', '', '', 2015, 'UTME', 'ughania#', '', 3, 1),
(57, 'Ekemezie ', 'Joshua Uchenna ', '', '20151024215', '', '09017435460', '', '', '', '', 'Uche.ekemezie@yahoo.com', '', '', '', 2015, 'UTME', 'Emulsion105', '', 3, 1),
(58, 'Okoro', 'Chukwuebuka.D', '', '20151019075', '', '09069213008', '', '', '', '', 'okorodavid002@gmail.com', '', '', '', 2015, 'DE', 'chuka123', '', 3, 1),
(59, 'Onyemaechi', 'Rejoice Chiamaka', '', '20162992585', '', '09034392731', '', '', '', '', 'amakarejoice05@gmail.com', '', '', '', 2015, 'DE', 'Study2020', '', 3, 1),
(60, 'Ezechukwu ', 'Kingsley Nonso', '', '20151010565', '', '08104583899', '', '', '', '', 'kizzofrosh@gmail.com', '', '', '', 2015, 'UTME', 'kingsley123', '', 3, 1),
(61, 'Okoro', 'Amarachi Uka', '', '20151013185', '', '08058986863', '', '', '', '', 'dabe.grace22@gmail.com', '', '', '', 2015, 'UTME', 'D^v1dk1ng', '', 3, 1),
(62, 'Paschal', 'Uchechukwu ', '', '20151010835', '', '08108723602', '', '', '', '', 'uchepaschal98@gmail.com', '', '', '', 2015, 'UTME', 'April1998..17', '', 3, 1),
(63, 'Appah', 'Francis Ogochukwu ', '', '20151010525', '', '08088159723', '', '', '', '', 'francisappah84@yahoo.com', '', '', '', 2015, 'UTME', 'Fr@ncis', '', 3, 1),
(64, 'NWOKEJIEGBE', 'Joy', '', '20162978545', '', '08138718581', '', '', '', '', 'nwokejoy956@gmail.com', '', '', '', 2016, 'DE', 'joyous', '', 3, 1),
(65, 'Okeke', 'Chukwuemeka Jude ', '', '20151016145', '', '07066615252', '', '', '', '', 'okekejude5252@yahoo.com', '', '', '', 2015, 'UTME', 'nepabill', '', 3, 1),
(66, 'Awosode', 'Lukman Omoniyi', '', '56605109', '', '07034264634', '', '', '', '', 'lukmanawosode@gmail.com', '', '', '', 2015, 'UTME', '1sokabi94', '', 3, 1),
(67, 'Ufere', 'Joshua Nkabi', '', '20151019035', '', '08103143682', '', '', '', '', 'eljosh100@gmail.com', '', '', '', 2015, 'UTME', '08037757579@jos', '', 3, 1),
(68, 'Okoye ', 'Goodness Ebube ', '', '20162983405', '', '08134452027', '', '', '', '', 'goodnessebubeokoye@gmail.com', '', '', '', 2016, 'DE', '34452027', '', 3, 1),
(69, 'Abarikwu', 'Christopher Enyinwa', '', '20151013215', '', '08034947502', '', '', '', '', 'abarikwu15@gmail.com', '', '', '', 2015, 'UTME', '9177173$f', '', 3, 1),
(70, 'Onuoha', 'Chukwuebuka Arinzechukwu', '', '20151013245', '', '08167521723', '', '', '', '', 'bkonuoha8@gmail.com', '', '', '', 2015, 'UTME', '20151013', '', 3, 1),
(71, 'Enwelu', 'Nkechinyere Christiana', '', '20151016295', '', '09036254223', '', '', '', '', 'christiana.enwelu3@gmail.com', '', '', '', 2015, 'UTME', 'Yahweh@247', '', 3, 1),
(72, 'Ekenji ', 'Chinaza Henrietta ', '', '20151016055', '', '08103416717', '', '', '', '', 'naajerome@gmail.com', '', '', '', 2015, 'UTME', 'jeroglad3028', '', 3, 1),
(73, 'Achiamani', 'Somto Oluchukwu', '', '20151011855', '', '08089300456', '', '', '', '', 'Somtoachiamani@rocketmail.com', '', '', '', 2015, 'UTME', '20151011855', '', 3, 1),
(74, 'Chukwudi', 'Glory', '', '20151011875', '', '08033685908', '', '', '', '', 'gn.chukwudi@gmail.com', '', '', '', 2015, 'UTME', 'cannyisborn', '', 3, 1),
(75, 'Linus', 'Henry Chiemezie', '', '20151016075', '', '08067070146', '', '', '', '', 'lynusmezie@gmail.com', '', '', '', 2015, 'UTME', 'jacoportalng', '', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_reply`
--

CREATE TABLE `student_reply` (
  `sr_id` int(11) NOT NULL,
  `sr_std_id` int(11) NOT NULL,
  `sr_message` text NOT NULL,
  `sr_date` varchar(15) NOT NULL,
  `sr_adviser_id` int(11) NOT NULL,
  `sr_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reply`
--

INSERT INTO `student_reply` (`sr_id`, `sr_std_id`, `sr_message`, `sr_date`, `sr_adviser_id`, `sr_status`) VALUES
(1, 44, ' Good morning ma', '2020-05-21 06:5', 1, 1),
(2, 41, ' Good morning ma', '2020-05-21 06:5', 1, 1),
(3, 7, ' Good morning Ma, I want to kindly request for my results from 400Level IT 2nd Semester down to 1st Semester 100level. Thanks in anticipation. God bless you Ma.', '2020-05-21 07:0', 1, 1),
(4, 67, ' Hello good morning Ma ', '2020-05-21 07:0', 1, 1),
(5, 69, ' Hi Ma good morning, This platform is awesome. Thanks for all you do.  ', '2020-05-21 07:1', 1, 1),
(6, 28, 'Good morning ma. \r\nMummy i love to know my 400L Siwes result  ', '2020-05-21 07:1', 1, 1),
(7, 59, ' Good Morning Ma', '2020-05-21 07:2', 1, 1),
(8, 9, ' Hello ma', '2020-05-21 07:2', 1, 1),
(9, 6, ' Goodmorning ma just testing to see if it works like you instructed', '2020-05-21 07:3', 1, 1),
(10, 15, ' Goodday ma', '2020-05-21 07:4', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `success_story`
--

CREATE TABLE `success_story` (
  `suc_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL,
  `suc_date` varchar(15) NOT NULL,
  `suc_story` text NOT NULL,
  `suc_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success_story`
--

INSERT INTO `success_story` (`suc_id`, `mentee_id`, `suc_date`, `suc_story`, `suc_status`) VALUES
(1, 4, '2019/10/12', '\r\nWe absolutely love the idea of mentoring. It\'s something that will be absolutely invaluable to the mentees and mentors in the long run. The mentees get their support system set up in high school- something extremely important for finding leads and getting the endless number of questions answered in a timely way and make those all important decisions. The mentors can give back to the community what they have learnt the hard way through years of hard work. By helping the younger ones thrive the mentors stand to strengthen life skills like maturity and leadership. A win-win for all!!\r\nOur experience so far with mentoring has been nothing but positive and we hope to build long term mutually beneficial relationships.\r\nHighly recommend it !', 1),
(2, 3, '2019/08/21', 'I am so glad to have found mentoring git for my daughter. It is a very helpful website and all of the mentors are wonderful people, who care about my daughter and genuinely want to help her. After talking to one mentor, my daughter already has a change in perspective about her dream college. ', 1),
(3, 2, '2019/07/12', '\r\nWe\'d like to highly recommend this plattform for their expertise, encouragement, and resources. With their guidance, our son got the necessary help to understand college application process high school course selections. The mentors in this plattform are indispensable! We found them very knowledgeable, patient and having the genuine interest in helping students to succeed in getting into their dream college. After working with several mentors, we feel that our son is much better prepared to take the JAMB and has the better plan for taking various UTME examinations.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(11) NOT NULL,
  `adviser_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`, `adviser_id`, `status`) VALUES
(1, 'admin', 'admin', 1, NULL, 1),
(2, 'bublinz', 'amen', 2, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actiivities`
--
ALTER TABLE `actiivities`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `adviser`
--
ALTER TABLE `adviser`
  ADD PRIMARY KEY (`adviser_id`);

--
-- Indexes for table `adviser_std`
--
ALTER TABLE `adviser_std`
  ADD PRIMARY KEY (`as_id`);

--
-- Indexes for table `general_feed`
--
ALTER TABLE `general_feed`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `general_feed_reminder`
--
ALTER TABLE `general_feed_reminder`
  ADD PRIMARY KEY (`rem_id`);

--
-- Indexes for table `general_read`
--
ALTER TABLE `general_read`
  ADD PRIMARY KEY (`gr_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `it_monitoring`
--
ALTER TABLE `it_monitoring`
  ADD PRIMARY KEY (`it_id`);

--
-- Indexes for table `personal_feed`
--
ALTER TABLE `personal_feed`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `students_data`
--
ALTER TABLE `students_data`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_reply`
--
ALTER TABLE `student_reply`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `success_story`
--
ALTER TABLE `success_story`
  ADD PRIMARY KEY (`suc_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actiivities`
--
ALTER TABLE `actiivities`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adviser`
--
ALTER TABLE `adviser`
  MODIFY `adviser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adviser_std`
--
ALTER TABLE `adviser_std`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `general_feed`
--
ALTER TABLE `general_feed`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `general_feed_reminder`
--
ALTER TABLE `general_feed_reminder`
  MODIFY `rem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `general_read`
--
ALTER TABLE `general_read`
  MODIFY `gr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_monitoring`
--
ALTER TABLE `it_monitoring`
  MODIFY `it_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_feed`
--
ALTER TABLE `personal_feed`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students_data`
--
ALTER TABLE `students_data`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `student_reply`
--
ALTER TABLE `student_reply`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `success_story`
--
ALTER TABLE `success_story`
  MODIFY `suc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
