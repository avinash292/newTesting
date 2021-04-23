-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2018 at 05:46 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL auto_increment,
  `city_name` varchar(225) NOT NULL,
  PRIMARY KEY  (`city_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Allahabad'),
(2, 'Kanpur'),
(3, 'Varansi'),
(4, 'Lucknow');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL auto_increment,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'Ingland'),
(3, 'Pakistan'),
(4, 'America');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL auto_increment,
  `course_name` varchar(255) NOT NULL,
  `course_total_fees` varchar(255) NOT NULL,
  PRIMARY KEY  (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_total_fees`) VALUES
(1, 'BCA', '50000'),
(2, 'MCA', '80000'),
(3, 'BBA', '40000'),
(4, 'PGDCA', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(11) NOT NULL auto_increment,
  `exam_title` varchar(255) NOT NULL,
  `exam_date` varchar(255) NOT NULL,
  `exam_course` varchar(255) NOT NULL,
  `exam_subject` varchar(255) NOT NULL,
  `exam_time` varchar(255) NOT NULL,
  `exam_desc` varchar(255) NOT NULL,
  PRIMARY KEY  (`exam_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_title`, `exam_date`, `exam_course`, `exam_subject`, `exam_time`, `exam_desc`) VALUES
(1, 'sessional', '25/5/2018', '2', '2', 'Evening(02:00PM to 05:00PM)', 'ewrewrew'),
(3, 'yearlly', '12/01/2004', '1', '1', 'Morning(10:00AM to 01:00PM)', 'calc'),
(9, 'Annual', '04/03/2018', '1', '1', 'Evening(02:00PM to 05:00PM)', 'ewrer'),
(11, 'Optional', '04/11/2018', '2', '3', 'Evening(02:00PM to 05:00PM)', 'Mobile is Not Allow');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(11) NOT NULL auto_increment,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_email` varchar(255) NOT NULL,
  `faculty_gen` varchar(255) NOT NULL,
  `faculty_add` varchar(255) NOT NULL,
  `faculty_qual` varchar(255) NOT NULL,
  `faculty_contact` varchar(255) NOT NULL,
  `faculty_user` varchar(255) NOT NULL,
  `faculty_interest` varchar(255) NOT NULL,
  `faculty_pass` varchar(255) NOT NULL,
  `faculty_cpass` varchar(255) NOT NULL,
  `faculty_post` varchar(255) NOT NULL,
  `faculty_experince` varchar(255) NOT NULL,
  `faculty_ques` varchar(255) NOT NULL,
  `faculty_ans` varchar(255) NOT NULL,
  `faculty_image` varchar(255) NOT NULL,
  `faculty_status` int(11) NOT NULL,
  PRIMARY KEY  (`faculty_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_email`, `faculty_gen`, `faculty_add`, `faculty_qual`, `faculty_contact`, `faculty_user`, `faculty_interest`, `faculty_pass`, `faculty_cpass`, `faculty_post`, `faculty_experince`, `faculty_ques`, `faculty_ans`, `faculty_image`, `faculty_status`) VALUES
(19, 'Sarvesh Sir', 'sam123@gmail.com', 'Male', 'Allapur Allahabad', '1,2', '9423789634', 'sam123', 'PHP,JAVA,AI,Robotics', 'sam123', 'sam123', '4', '5 Year', '1', 'parrot', 'sarvesh sir1524572174.jpg', 1),
(3, 'Riyaz Sir', 'riyaz921@gmail.com', 'Male', 'Naini Allahabad India (UP).', '1,2,3,4', '8785436788', 'riyaz123', 'DS,DATA BASE,C,C++,JAVA', '12345', '12345', '1', '7 YEAR', '1', 'parrot', 'riyaz sir1524571470.jpg', 1),
(21, 'Diksha Mam', 'diksha123@gmail.com', 'Female', 'Allahabad', '1', '6354365462', 'diksha123', 'Database,Math', '12345', '12345', '2', '5Year', '1', 'parrot', 'diksha mam1524807617.jpg', 1),
(22, 'Shekhar', 'jsmshekhar62@gmail.com', 'Male', 'Allahabad', '1,2', '9935270134', 'shekhar123', 'PHP', '12345', '12345', '3', '2 Year', '1', 'parrot', 'pqr1524807745.jpg', 0),
(23, 'Amit', 'amit123@gmail.com', 'Male', 'Allahabad', '1,2', '5364736473', 'amit123', 'JAVA', '12345', '12345', '4', '5Year', '2', 'IICS', 'user.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_post`
--

CREATE TABLE IF NOT EXISTS `faculty_post` (
  `post_id` int(11) NOT NULL auto_increment,
  `post_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `faculty_post`
--

INSERT INTO `faculty_post` (`post_id`, `post_name`) VALUES
(1, 'Lecturer'),
(2, 'Assisent Professor'),
(3, 'Reader'),
(4, 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `fees_id` int(11) NOT NULL auto_increment,
  `st_id` int(11) NOT NULL,
  `st_course` varchar(255) NOT NULL,
  `fees_total` varchar(255) NOT NULL,
  `fees_paid` int(11) NOT NULL,
  `fees_bal` varchar(255) NOT NULL,
  `fees_date` varchar(255) NOT NULL,
  `fees_desc` varchar(255) NOT NULL,
  PRIMARY KEY  (`fees_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fees_id`, `st_id`, `st_course`, `fees_total`, `fees_paid`, `fees_bal`, `fees_date`, `fees_desc`) VALUES
(16, 21, 'BCA', '50000', 50000, '0', '04/10/2018', ' Alld'),
(13, 12, 'MCA', '80000', 80000, '0', '04/08/2018', ' trgr4r'),
(7, 14, 'BCA', '50000', 50000, '0', '04/09/2018', ' wqewqe'),
(14, 17, 'BCA', '50000', 23000, '27000', '04/16/2018', ' sdfsfsdf'),
(15, 19, 'MCA', '80000', 80000, '0', 'gtert', ' dfgdf'),
(17, 13, 'MCA', '80000', 80000, '0', '04/16/2018', ' gffgdgtdr');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL auto_increment,
  `login_user` varchar(255) NOT NULL,
  `login_pass` varchar(255) NOT NULL,
  `login_cpass` varchar(255) NOT NULL,
  `sec_ques_id` int(11) NOT NULL,
  `sec_ans` varchar(255) NOT NULL,
  PRIMARY KEY  (`login_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_user`, `login_pass`, `login_cpass`, `sec_ques_id`, `sec_ans`) VALUES
(1, '4e2dd7e1bbb93e4a7b8e21957d881ed9', 'e12e99d83153d4c022658f114b52214f', 'shekhar123', 1, 'parrot');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `marks_id` int(11) NOT NULL auto_increment,
  `st_id` varchar(255) NOT NULL,
  `st_course_id` varchar(255) NOT NULL,
  `st_subject_id` varchar(255) NOT NULL,
  `total_marks` varchar(255) NOT NULL,
  `obtained` varchar(255) NOT NULL,
  `practical` varchar(255) NOT NULL,
  `total_obtained` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY  (`marks_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`marks_id`, `st_id`, `st_course_id`, `st_subject_id`, `total_marks`, `obtained`, `practical`, `total_obtained`, `date`) VALUES
(1, '12', '2', '2', '70', '60', '25', '85', '2018-04-26'),
(7, '21', '1', '1', '70', '30', '20', '50', '2018-04-23'),
(9, '12', '2', '2', '70', '20', '15', '35', '2018-04-25'),
(10, '16', 'bca', 'php', '70', '40', '20', '60', '12/5/103'),
(11, '14', '1', '1', '70', '50', '20', '70', '2018-04-09'),
(12, '19', '2', '2', '70', '65', '25', '80', '2018-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `qual_id` int(11) NOT NULL auto_increment,
  `qual_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`qual_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qual_id`, `qual_name`) VALUES
(1, '10th'),
(2, '12th'),
(3, 'Grad'),
(4, 'PG.');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_faculty`
--

CREATE TABLE IF NOT EXISTS `qualification_faculty` (
  `qual_id` int(11) NOT NULL auto_increment,
  `qual_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`qual_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `qualification_faculty`
--

INSERT INTO `qualification_faculty` (`qual_id`, `qual_name`) VALUES
(1, 'B.C.A'),
(2, 'M.C.A'),
(3, 'B. Tech'),
(4, 'M. Tech');

-- --------------------------------------------------------

--
-- Table structure for table `secret_ques`
--

CREATE TABLE IF NOT EXISTS `secret_ques` (
  `sec_id` int(11) NOT NULL auto_increment,
  `sec_ques` varchar(255) NOT NULL,
  PRIMARY KEY  (`sec_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `secret_ques`
--

INSERT INTO `secret_ques` (`sec_id`, `sec_ques`) VALUES
(1, 'What is your pet?'),
(2, 'What is your first school?');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL auto_increment,
  `state_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`state_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'UP'),
(2, 'MP'),
(3, 'Andhra Pradesh'),
(4, 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `st_id` int(11) NOT NULL auto_increment,
  `st_name` varchar(255) NOT NULL,
  `st_father` varchar(255) NOT NULL,
  `st_gen` varchar(255) NOT NULL,
  `st_phone` varchar(255) NOT NULL,
  `st_address1` varchar(255) NOT NULL,
  `st_address2` varchar(255) NOT NULL,
  `st_dob` varchar(255) NOT NULL,
  `st_doa` varchar(255) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `st_course` varchar(255) NOT NULL,
  `st_city` varchar(255) NOT NULL,
  `st_state` varchar(255) NOT NULL,
  `st_country` varchar(255) NOT NULL,
  `st_qual` varchar(255) NOT NULL,
  `st_image` varchar(255) NOT NULL,
  `st_pincode` varchar(255) NOT NULL,
  PRIMARY KEY  (`st_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_name`, `st_father`, `st_gen`, `st_phone`, `st_address1`, `st_address2`, `st_dob`, `st_doa`, `st_email`, `st_course`, `st_city`, `st_state`, `st_country`, `st_qual`, `st_image`, `st_pincode`) VALUES
(18, 'qweqwe', 'uhgui', 'Male', '6775664534', '									hgbjhg															', '									vbnvhbj															', '04/22/2018', '04/02/2018', 'th@fcfg', '1', '1', '1', '1', '3', 'amazing1523184611.jpg', '657564'),
(17, 'Jyoti', 'Jagganath', 'Female', '9935270134', '								Allla										', '							All											', '04/12/2018', '04/02/2018', 'jsmshekhar62@gmail.com', '1', '4', '1', '1', '1,2,3,4', 'smarat1523184672.jpg', '343342'),
(20, 'amit', 'Suraesh', 'Male', '7686787684', 'Allahabad						', 'Allahabad						', '04/23/2018', '04/03/2018', 'amit123@gmail.com', '1', '1', '1', '1', '1,3', 'dolphins_paradise1524679598.jpg', '563243'),
(14, 'kajal', 'sdasfasdc', 'Female', '5645434756', '					fdvfjsgfhdsfs							', '			dshgfvdshfds									', '04/10/2018', '04/02/2018', 'jdbbj@hfjde', '1', '1', '1', '1', '1,2,4', 'ab1523847815.jpg', '242424'),
(13, 'Shiwam', 'Dhyanchandr', 'Male', '1342423413', '	ffgdf								gfgdfg															', 'ddrtd									dfvfgcfg															', '04/30/2018', '04/16/2018', 'shiwam123@gmail.co', '2', '1', '1', '1', '2,3,4', 'amazing1522812639.jpg', '543653'),
(12, 'Chandra Shekhar', 'Dasharath', 'Male', '9935270134', '						all												', '						alld												', '04/12/2018', '04/02/2018', 'jsmshekhar62@gmail.com', '2', '1', '1', '1', '1,2,3', '1011522812493.jpg', '211006'),
(19, 'sam', 'Dharma', 'Male', '7563453454', '			Allahabad					', '			Allahabad									', '04/03/2018', '04/11/2018', 'sam123@gmail.com', '2', '2', '1', '1', '1', 'ab1524562742.jpg', '565654'),
(21, 'Ankur', 'Ramu', 'Male', '6354365464', 'KAnpur						', 'kanpur						', '04/16/2018', '04/02/2018', 'ankur123@gmail.com', '1', '1', '1', '1', '1,3,4', 'download (1)1524679683.jpg', '434342');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL auto_increment,
  `subject_name` varchar(255) NOT NULL,
  `subject_course_id` int(11) NOT NULL,
  `subject_marks` varchar(255) NOT NULL,
  `subject_practical` varchar(255) NOT NULL,
  PRIMARY KEY  (`subject_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_course_id`, `subject_marks`, `subject_practical`) VALUES
(1, 'PHP', 1, '70', '30'),
(2, 'JAVA', 2, '70', '30'),
(3, 'Networking', 2, '100', '0'),
(4, 'Adv JAVA', 2, '70', '30');
