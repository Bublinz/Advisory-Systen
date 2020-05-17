-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 04:16 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courseadmensys`
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
(2, 'NUC Preparation', 'NUC Visit to department for ACCREDITATION', '8:00am', '2019-10-07', '2015/2016', 1, 1);

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
(1, ' Odirichukwu JC', 'Female', '08138719147', 'Umuchima', ' Computer Science', ' Lecturer 1', ' Software Engineering, Robotics, Embedded system, Database Management', 'chiomajaco6@gmail.com', 2, 'amen', 'amen', 1);

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
(1, 1, 1, 1);

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
(1, 'Check Resut', 'Your csc 306 resut is out, you all should assemble in my office with your course registration book ', '25/8/19', '2016/2017', 1, 1),
(2, 'Mth304 issues', 'Those who are re-writting mth304 should meet me at the office by 10am for an important information', '25/8/19', '2015/2016', 1, 2),
(3, 'CSC 308 Result', 'Come to the department and check your result in csc 308, those who may have issues should meet me by next week monday in the office', '2019-11-13', '2015/2016', 1, 1),
(4, 'course registration', 'come and collect your pins today to enable you register ur courses online', '2019-11-13', '2015/2016', 1, 1);

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
(5, 3, 1, 0, 1, '2019-11-18', '0', 1, 0);

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
-- Table structure for table `mentee`
--

CREATE TABLE `mentee` (
  `mentee_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `iam` varchar(20) NOT NULL,
  `ment_interest` varchar(200) NOT NULL,
  `study_field` varchar(300) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `about_me` text NOT NULL,
  `img` blob NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentee`
--

INSERT INTO `mentee` (`mentee_id`, `first_name`, `last_name`, `email`, `gender`, `mobile`, `iam`, `ment_interest`, `study_field`, `specialization`, `about_me`, `img`, `username`, `password`, `role`, `status`) VALUES
(1, 'callistus', 'Ibe', '', 'Male', '0909098938', '', '', '', '', '', '', 'cally', '', 0, 0),
(2, 'Okoro Emmanuel', 'Ifeanyi', '', 'Male', '0909098938', '', '', '', '', '', '', 'cally', 'amen', 0, 0),
(3, 'callistus', 'Ibe', '', 'Male', '0909098938', '', '', '', '', '', '', 'cally', 'amen', 0, 1),
(4, 'emmanuel', 'okoro', 'loveisprecious032@gmail.com', 'Male', '0909098938', 'Graduate', 'programming', '', '', '', '', 'amen', 'amen', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `mentor_id` int(11) NOT NULL,
  `title` varchar(15) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cv` blob NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `accepting` varchar(5) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `work_status` varchar(20) NOT NULL,
  `employer` varchar(30) NOT NULL,
  `wj_title` varchar(20) NOT NULL,
  `experience_yrs` int(11) NOT NULL,
  `interest_area` varchar(100) NOT NULL,
  `study_field` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `about_you` text NOT NULL,
  `degree` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`mentor_id`, `title`, `last_name`, `first_name`, `email`, `cv`, `gender`, `mobile`, `accepting`, `city`, `state`, `country`, `work_status`, `employer`, `wj_title`, `experience_yrs`, `interest_area`, `study_field`, `specialization`, `about_you`, `degree`, `username`, `password`, `role`, `status`) VALUES
(2, '', 'Okolie', 'Stanley', 'stanley@gamilc.om', '', '', '0909098938', 'yes', 'Onitsha', 'Anambra', '', '', '', '', 0, 'Public Speech, Computer Systems & Research', '', 'Electronics and Computer', '', '', 'amen', 'amen', 1, 1),
(3, '', 'Nwokorie', 'C.', 'cn@gamilc.om', 0x36383434382d, '', '08763563653', 'yes', 'Umuahia', 'Abia', '', '', '', '', 0, 'Modelling, Algorithm', '', 'Data Communications, Software Eng.', '', '', 'amen', 'amen', 1, 1),
(4, '', 'Okechukwu', 'Diala', 'okey2@gmail.com', '', '', '08167338483', 'yes', 'Owerri', 'Imo', '', '', '', '', 0, 'Research, football', '', 'Software Eng. MIS, Computer Proramming', '', '', 'amen', 'amen', 1, 1),
(5, '', 'Odirichukwu', 'Chioma Jacinta', 'loveispreci2ous032@gmail.com', '', '', '08037394691', 'yes', 'Owerri', 'Imo', '', '', '', '', 0, 'Networking, IT Opportunities, Programming, Education', 'Computer Science', 'Cybernetics & Robotics', '', '', 'amen', 'amen', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ment_connectivity`
--

CREATE TABLE `ment_connectivity` (
  `mm_con_id` int(11) NOT NULL,
  `mm_mentor_id` int(11) NOT NULL,
  `mm_mentee_id` int(11) NOT NULL,
  `mm_con_status` int(11) NOT NULL,
  `mm_con_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ment_connectivity`
--

INSERT INTO `ment_connectivity` (`mm_con_id`, `mm_mentor_id`, `mm_mentee_id`, `mm_con_status`, `mm_con_date`) VALUES
(1, 5, 1, 1, '2019/10/12'),
(2, 3, 4, 1, '2019/11/12'),
(3, 0, 4, 0, '2019-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `ment_message`
--

CREATE TABLE `ment_message` (
  `mm_id` int(11) NOT NULL,
  `mm_message` text NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL,
  `mm_read_status` int(11) NOT NULL,
  `mm_date` varchar(15) NOT NULL,
  `mm_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ment_message`
--

INSERT INTO `ment_message` (`mm_id`, `mm_message`, `mentor_id`, `mentee_id`, `mm_read_status`, `mm_date`, `mm_status`) VALUES
(1, 'Be sure to apply for GRE before procedding with your PGD studies', 5, 4, 0, '2019/10/13', 1),
(2, 'I think leaving your comfort zone could be the best approach in long sitting programming', 5, 1, 0, '2019/10/10', 1),
(3, 'we we we think leaving your comfort zone could be the best approach in long sitting programming', 5, 1, 0, '2019/2/12', 1);

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
(4, 'come lets go and see the hod together by 1pm today', 1, 1, '2019-11-13', '', 'Urgent', 1, 1);

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
  `admission_year` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `green_file` varchar(15) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_data`
--

INSERT INTO `students_data` (`std_id`, `surname`, `other_names`, `img`, `reg_no`, `gender`, `phone`, `dob`, `per_address`, `lga`, `state`, `email`, `parents_name`, `parents_contact`, `dept`, `admission_year`, `password`, `green_file`, `role`, `status`) VALUES
(1, 'UWABUNKEONYE', 'CHIDERA MAGNUS', '', '20141897665', 'Male', '08167759337', '2019-11-04', 'NFCS secretariat futo Imo state', 'Isiala Mbano', 'Imo', 'loveisprecious032@gmail.com', 'Mr. and Mrs. Joseph Okoroji', '08138611147', 'dept', '     2012/2', 'amen', 'Yes', 3, 1),
(2, ' UGOEZE', 'GERALD EBUKA', '', '20141929855', 'Male', '08028407411', '', '', '', '', '', '', '', '', '', 'amen', '', 1, 1);

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
-- Indexes for table `mentee`
--
ALTER TABLE `mentee`
  ADD PRIMARY KEY (`mentee_id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`mentor_id`);

--
-- Indexes for table `ment_connectivity`
--
ALTER TABLE `ment_connectivity`
  ADD PRIMARY KEY (`mm_con_id`);

--
-- Indexes for table `ment_message`
--
ALTER TABLE `ment_message`
  ADD PRIMARY KEY (`mm_id`);

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
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adviser`
--
ALTER TABLE `adviser`
  MODIFY `adviser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adviser_std`
--
ALTER TABLE `adviser_std`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_feed`
--
ALTER TABLE `general_feed`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `general_feed_reminder`
--
ALTER TABLE `general_feed_reminder`
  MODIFY `rem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `mentee`
--
ALTER TABLE `mentee`
  MODIFY `mentee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `mentor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ment_connectivity`
--
ALTER TABLE `ment_connectivity`
  MODIFY `mm_con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ment_message`
--
ALTER TABLE `ment_message`
  MODIFY `mm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_feed`
--
ALTER TABLE `personal_feed`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students_data`
--
ALTER TABLE `students_data`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_reply`
--
ALTER TABLE `student_reply`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT;

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
