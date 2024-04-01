-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 07:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblapplicants`
--

CREATE TABLE `tblapplicants` (
  `APPLICANTID` int(11) NOT NULL,
  `FNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `MNAME` varchar(90) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `SEX` varchar(11) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(255) NOT NULL,
  `AGE` int(2) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `EMAILADDRESS` varchar(90) NOT NULL,
  `CONTACTNO` varchar(90) NOT NULL,
  `DEGREE` text NOT NULL,
  `APPLICANTPHOTO` varchar(255) NOT NULL,
  `NATIONALID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblapplicants`
--

INSERT INTO `tblapplicants` (`APPLICANTID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `SEX`, `CIVILSTATUS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `USERNAME`, `PASS`, `EMAILADDRESS`, `CONTACTNO`, `DEGREE`, `APPLICANTPHOTO`, `NATIONALID`) VALUES
(2019016, 'asd', 'asd', 'asd', 'asd', 'Female', 'none', '1980-01-29', 'asd', 39, 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 'a@gmil.com', '12312312', 'asd', 'photos/final.png', ''),
(2019018, 'asdasd', 'asd', 'asd', 'sadas', 'Female', 'Single', '1992-01-12', 'sad', 27, 'ss', 'c1c93f88d273660be5358cd4ee2df2c2f3f0e8e7', 'a@gmil.com', 'sad', 'sad', '', ''),
(2019020, 'sad', 'sad', 'sad', 'asdsad', 'Female', 'Single', '1992-10-14', 'asdsad', 27, 'ddd', '9c969ddf454079e3d439973bbab63ea6233e4087', 'a@gmil.com', '123123', 'sadsadsad', 'photos/077db70b-ab84-46c4-bbaa-a5dd6b7332a4_200x200.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblattachmentfile`
--

CREATE TABLE `tblattachmentfile` (
  `FILEID` int(11) NOT NULL,
  `JOBID` int(11) NOT NULL,
  `FILE_NAME` varchar(90) NOT NULL,
  `FILE_LOCATION` varchar(255) NOT NULL,
  `USERATTACHMENTID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblattachmentfile`
--

INSERT INTO `tblattachmentfile` (`FILEID`, `JOBID`, `FILE_NAME`, `FILE_LOCATION`, `USERATTACHMENTID`) VALUES
(201900001, 2, 'Resume', 'photos/24122019073209Filtering a Group of Data VB.Net and SQL Server 2019.docx', 2019020),
(2147483647, 2, 'Resume', 'photos/24122019072801Filtering a Group of Data VB.Net and SQL Server 2019.docx', 2019019);

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', 8, 1, 'userid'),
(2, '000', 79, 1, 'employeeid'),
(3, '0', 21, 1, 'APPLICANT'),
(4, '0000', 2, 1, 'FILEID');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `category` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `category`) VALUES
(11, 'Managerial'),
(12, 'Engineer'),
(13, 'IT'),
(14, 'Civil Engineer'),
(15, 'HR'),
(23, 'Sales'),
(24, 'Banking'),
(25, 'Finance'),
(26, 'BPO'),
(27, 'Degital Marketing'),
(28, 'Shipping'),
(29, 'tech');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `companyid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `id` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(90) NOT NULL,
  `birthplace` varchar(90) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `civilstatus` varchar(30) NOT NULL,
  `phoneno` varchar(40) NOT NULL,
  `email` varchar(90) NOT NULL,
  `position` varchar(50) NOT NULL,
  `companyid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`id`, `EMPLOYEEID`, `name`, `address`, `birthplace`, `age`, `gender`, `civilstatus`, `phoneno`, `email`, `position`, `companyid`) VALUES
(101, '', 'p', 'r', 'a', 29, 'male', 'married', '424', 'Prathambangera3@gmail.com', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `FEEDBACKID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `REGISTRATIONID` int(11) NOT NULL,
  `FEEDBACK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbljob`
--

CREATE TABLE `tbljob` (
  `jobid` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `category` varchar(90) NOT NULL,
  `occupationtitle` varchar(90) NOT NULL,
  `number_emp_required` int(11) NOT NULL,
  `salary` double NOT NULL,
  `duration_employement` varchar(90) NOT NULL,
  `workexperience` text NOT NULL,
  `jobdiscription` text NOT NULL,
  `gender` varchar(30) NOT NULL,
  `jobposted` varchar(90) NOT NULL,
  `dateposted` datetime NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljob`
--

INSERT INTO `tbljob` (`jobid`, `companyid`, `category`, `occupationtitle`, `number_emp_required`, `salary`, `duration_employement`, `workexperience`, `jobdiscription`, `gender`, `jobposted`, `dateposted`, `location`) VALUES
(2, 2, 'Technology', 'Accounting', 1, 15000, 'may 20', 'Two years Experience', 'We are looking for bachelor of science in Acountancy', 'Female', '', '2018-05-20 02:33:00', ''),
(70, 5, 'Managerial', 'hr', 10, 10000, '10', '1yers', 'here is the job ', 'male', '', '2022-07-19 00:00:00', ''),
(86, 5, 'IT', 'labour', 50, 41100, '5years', '1yers', 'here is the job ', 'male', '', '2022-08-21 00:00:00', 'kundapura');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobregistration`
--

CREATE TABLE `tbljobregistration` (
  `registrationid` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `applicant` varchar(90) NOT NULL,
  `registrationdate` date NOT NULL,
  `remarks` varchar(255) NOT NULL DEFAULT 'Pending',
  `fileid` int(11) NOT NULL,
  `pendingapplication` tinyint(1) NOT NULL DEFAULT 1,
  `hview` tinyint(1) NOT NULL DEFAULT 1,
  `datetimeapproved` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljobregistration`
--

INSERT INTO `tbljobregistration` (`registrationid`, `companyid`, `jobid`, `userid`, `applicant`, `registrationdate`, `remarks`, `fileid`, `pendingapplication`, `hview`, `datetimeapproved`) VALUES
(15, 2, 2, 0, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(18, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(19, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(20, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(21, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(22, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(23, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(24, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(25, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(26, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(27, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(28, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(29, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(30, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(31, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(32, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(33, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(34, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '2022-08-05 10:03:05'),
(35, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(36, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(37, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(38, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(39, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(40, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(41, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(42, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(43, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(44, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(45, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(46, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(47, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(48, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(49, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(50, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(51, 2, 2, 8, '', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(52, 2, 2, 8, 'admin', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(53, 2, 2, 8, 'admin', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(54, 2, 2, 8, 'admin', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(55, 2, 2, 8, 'admin', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(56, 2, 2, 8, 'admin', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(57, 2, 2, 8, 'admin', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(58, 2, 2, 8, 'admin', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(59, 2, 2, 1, 'pratham', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(60, 2, 2, 1, 'pratham', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(61, 2, 2, 1, 'pratham', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(62, 2, 2, 1, 'pratham', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(63, 2, 2, 1, 'pratham', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(64, 2, 2, 1, 'pratham', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `userid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(70) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civilstatus` varchar(10) NOT NULL,
  `birthplace` varchar(100) NOT NULL,
  `age` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` int(10) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `applicantphoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`userid`, `name`, `username`, `password`, `address`, `gender`, `civilstatus`, `birthplace`, `age`, `email`, `contactno`, `degree`, `applicantphoto`) VALUES
(1, 'pratham', 'pratham', 'pratham', '', '', '', '', 0, '', 0, '', ''),
(10, 'keerthan', 'keerthan', 'keerthan', '', '', '', '', 0, '', 0, '', ''),
(25, 'neeraj', 'neeraj', 'neeraj', '', '', '', '', 0, '', 0, '', ''),
(101, 'shashank', 'shashank', 'shashank', '', '', '', '', 0, '', 0, '', ''),
(185, 'sachin', 'sachin', 'sachin', 'basrur', 'male', 'single', 'kundapura', 30, 'scahin@gmai.com', 587469523, 'bca', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userid` varchar(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userid`, `name`, `username`, `password`, `role`) VALUES
('101', 'pratham', 'pratham', 'pratham', 'Adminstrater'),
('102', 'admin', 'admin', 'admin', 'Adminstrater'),
('20', 'shashank', 'shashank', 'shashank', 'Adminstrater'),
('3', 'Neeraj', 'neeraj', 'neeraj', 'Employer'),
('80', 'abhi', 'abhi', 'abhi', 'Employer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblapplicants`
--
ALTER TABLE `tblapplicants`
  ADD PRIMARY KEY (`APPLICANTID`);

--
-- Indexes for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  ADD PRIMARY KEY (`FILEID`);

--
-- Indexes for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`companyid`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EMPLOYEEID` (`EMPLOYEEID`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`FEEDBACKID`);

--
-- Indexes for table `tbljob`
--
ALTER TABLE `tbljob`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  ADD PRIMARY KEY (`registrationid`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblapplicants`
--
ALTER TABLE `tblapplicants`
  MODIFY `APPLICANTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2019021;

--
-- AUTO_INCREMENT for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  MODIFY `FILEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `FEEDBACKID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  MODIFY `registrationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
