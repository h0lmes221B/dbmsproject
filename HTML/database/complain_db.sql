-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: April 24 , 2017 at 04:32 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.6



--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complains`
--
create database mydb;
use mydb;

CREATE TABLE IF NOT EXISTS `tbl_complains` (
  `cid` int(10) NOT NULL auto_increment,
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(40) NOT NULL,
  `comp_type` varchar(40) NOT NULL,
  `comp_title` varchar(200) NOT NULL,
  `comp_desc` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `eng_id` int(10) NOT NULL,
  `eng_name` varchar(40) NOT NULL,
  `eng_comment` varchar(240) NOT NULL,
  `create_date` datetime NOT NULL,
  `close_date` datetime NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_complains`
--

INSERT INTO `tbl_complains` (`cid`, `cust_id`, `cust_name`, `comp_type`, `comp_title`, `comp_desc`, `status`, `eng_id`, `eng_name`, `eng_comment`, `create_date`, `close_date`) VALUES
(2, 2, 'Tushar Murarka', 'hardware', 'My machine is making noice.', 'Hi.\r\n\r\nMy machine is making to much noice, will u plz assist.\r\n\r\nThanks.', 'close', 1, 'Prashant Kumar', 'working on it.', '2017-04-02 12:00:12', '0000-00-00 00:00:00'),
(3, 2, 'Tushar Murarka', 'software', 'MS Office is not working', 'Hi.\r\n\r\nMS Office is not working.I think its a problem of virus.\r\nPlease help.\r\n\r\nThanks', 'close', 2, 'Himanshu Gusain', 'Problem of virus. working on it.\r\nWill need some time', '2017-04-04 19:04:14', '0000-00-00 00:00:00'),
(4, 1, 'Pranjul Tripathi', 'network', 'Unable to connect', 'Hello.\r\n\r\nI am unable to connect to 10.88.29.098. their is a problem in LAN. Please do the needful.\r\n\r\nRegards\r\nPranjul', 'assigned', 5, 'Prince Nanda', 'Working on it', '2017-04-05 19:30:10', '0000-00-00 00:00:00'),
(6, 1, 'Pranjul Tripathi', 'network', 'Internet is very slow', 'Hi. \r\nMy internet connection is running slow.\r\n', 'assigned', 1, 'Prashant Kumar', 'Working on it', '2017-04-06 09:26:36', '0000-00-00 00:00:00'),
(7, 3, 'Prajjawal Agarwal', 'software', 'Some softwares are not working', 'Hi,\r\nI think there aresome License issues,\r\n\r\nPlease assist.\r\n\r\nRegards, Prajjawal Agarwal', 'close', 3, 'Sudeept Dwivedi', 'Complaint is resloved, mailed you the details.', '2017-04-11 14:08:49', '0000-00-00 00:00:00'),
(8, 4, 'Shubhanshu Singh', 'hardware', 'My monitor is not getting display', 'Hello.\r\n\r\nI have problem in my monitor\r\nPlease assist\r\n\r\nRegards, Shubh', 'working', 3, 'Sudeept Dwivedi', 'I am working on it', '2017-04-13 21:49:38', '0000-00-00 00:00:00'),
(9, 4, 'Shubhanshu Singh', 'software', 'My setup box is not working', 'Hello,\r\n\r\nMy setup box is not working well. Please assist.\r\n\r\nThanks', 'open', 0, '', '', '2012-02-05 17:35:36', '0000-00-00 00:00:00'),
(10, 5, 'Deepak Kumar', 'hardware', 'System not booting up', 'Hello\r\n\r\nI have a system booting issue , kindly assist.', 'working', 2, 'Himanshu Gusain', 'Kindly keep on checking.Will update the details soon.', '2017-04-19 10:02:18', '0000-00-00 00:00:00'),
(11, 5, 'Deepak Kumar', 'software', 'Problem in Installation', 'Facing problem in installation of WLAN. Please assist.', 'assigned', 5, 'Prince Nanda', 'Mailed you the details', '2017-04-21 09:48:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cid` int(10) NOT NULL auto_increment,
  `cname` varchar(40) NOT NULL,
  `cpass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `c_mobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cid`, `cname`, `cpass`, `address`, `email`, `c_mobile`, `date_time`) VALUES
(1, 'Pranjul Tripathi', 'pranjul', 'R-97 , Rani Laxmi Bai Road , Kanpur', 'pranjultripathi@gmail.com', '9089789876', '2016-05-27 12:55:39'),
(2,'Tushar Murarka','tushar','1,Shastri Nagar , Nagpur.','tusharmurarka@gmail.com','9628352147','2017-04-01 12:00:00'),
(3,'Prajjawal Agarwal','prajjawal','23 , Lal Nagar , Jamshedpur.','prajjawalagarwal@gmail.com', '9087654312' , '2017-01-01 23:23:23'),
(4, 'Shubhanshu Singh', 'shubh', '10, Raj Bhavan , Mughal Sarai , Uttar Pradesh', 'shubh@gmail.com', '9652525252', '2016-11-11 23:52:36'),
(5, 'Deepak Kumar', 'deepak', '11, Ashoka heights, Sector-28, Chandigarh', 'deepakkumar@yahoo.com', '9521425425', '2017-02-03 07:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_engineer`
--

CREATE TABLE IF NOT EXISTS `tbl_engineer` (
  `eid` int(10) NOT NULL auto_increment,
  `ename` varchar(40) NOT NULL,
  `epass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `e_mobile` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_engineer`
--

INSERT INTO `tbl_engineer` (`eid`, `ename`, `epass`, `address`, `email`, `e_mobile`, `date_time`) VALUES
(1,'Prashant Kumar','prashant','G-31 ,Appa Balwant Chowk , Pune','prashantk@gmail.com','9432657189','2015-03-04 20:34:21'),
(2, 'Himanshu Gusain','himanshu', '32 , Tower 12 , Magarpatta City , Pune , Maharashtra.','himugusain@gmail.com', '7500987654' , '2016-07-19 22:30:10'),
(5, 'Prince Nanda', 'prince', '10, Merta Tower , Orissa', 'princenanda@gmail.com', '9854251425', '2016-02-02 23:36:09'),
(3, 'Sudeept Dwivedi', 'sudeept', '290, Asif Nagar, Kanpur', 'sudeeptdwivedi@gmail.com', '9856323568', '2017-02-02 23:15:20');


-- --------------------------------------------------------

--
-- Table structure for table `tbl_plans`
--

CREATE TABLE IF NOT EXISTS `tbl_plans` (
  `id` int(10) NOT NULL auto_increment,
  `cid` int(10) NOT NULL,
  `plans` varchar(255) NOT NULL,
  `amt` double NOT NULL,
  `plan_date` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_plans`
--

INSERT INTO `tbl_plans` (`id`, `cid`, `plans`, `amt`, `plan_date`) VALUES
(3, 5, 'Basic Plan, Music Plan, ', 150, '13'),
(4, 6, 'Basic Plan, ', 120, '05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `sid` int(11) NOT NULL auto_increment,
  `sname` varchar(40) NOT NULL,
  `spass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `s_mobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`sid`, `sname`, `spass`, `address`, `email`, `s_mobile`, `date_time`) VALUES
(1, 'maryam afifa', 'marry123', '290, shani peth, pune', 'maryam.afifa@gmail.com', '9987876765', '2010-11-27 17:29:05');


