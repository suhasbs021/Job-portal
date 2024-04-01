-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 08:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
(34, 'deveolper'),
(32, 'Hr'),
(33, 'Managerials'),
(31, 'Tech');

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

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`companyid`, `name`, `address`, `contactno`) VALUES
(1, 'wipro', 'bhavukudru mane kelpate', 87964),
(2, 'tcs', 'bangalore', 2147483647),
(3, 'infosyses', 'mumbai', 2147483647),
(4, 'deloit', 'france', 2147483647),
(5, 'king', 'bangalore', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `id` int(11) NOT NULL,
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

INSERT INTO `tblemployees` (`id`, `name`, `address`, `birthplace`, `age`, `gender`, `civilstatus`, `phoneno`, `email`, `position`, `companyid`) VALUES
(101, 'p', 'r', 'a', 29, 'male', 'married', '424', 'Prathambangera3@gmail.com', '', 0);

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
(1, 1, 'Tech', 'technology', 10, 100000, '2 yers', '1yers', 'tech based job', 'male', '', '2022-08-23 00:00:00', 'bangalore'),
(2, 2, 'Tech', 'labour', 10, 200000, '5years', '1yers', 'job related ', 'female', '', '2022-08-23 00:00:00', 'mangalore');

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
(74, 2, 2, 1, 'pratham', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(75, 2, 2, 101, 'shashank', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(76, 1, 1, 101, 'shashank', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(77, 1, 1, 1, 'pratham', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(78, 1, 1, 1, 'pratham', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00'),
(79, 1, 1, 1, 'pratham', '0000-00-00', 'Pending', 0, 1, 1, '0000-00-00 00:00:00');

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
-- Indexes for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  ADD PRIMARY KEY (`FILEID`),
  ADD KEY `job` (`JOBID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`companyid`),
  ADD KEY `companyid` (`companyid`),
  ADD KEY `companyid_2` (`companyid`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companyid` (`companyid`),
  ADD KEY `companyid_2` (`companyid`);

--
-- Indexes for table `tbljob`
--
ALTER TABLE `tbljob`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `companyid` (`companyid`),
  ADD KEY `category` (`category`),
  ADD KEY `companyid_2` (`companyid`);

--
-- Indexes for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  ADD PRIMARY KEY (`registrationid`),
  ADD KEY `companyid` (`companyid`),
  ADD KEY `jobid` (`jobid`),
  ADD KEY `userid` (`userid`);

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
-- AUTO_INCREMENT for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  MODIFY `FILEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  MODIFY `registrationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  ADD CONSTRAINT `job` FOREIGN KEY (`JOBID`) REFERENCES `tbljob` (`jobid`);

--
-- Constraints for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  ADD CONSTRAINT `company` FOREIGN KEY (`companyid`) REFERENCES `tblcompany` (`companyid`),
  ADD CONSTRAINT `jobid` FOREIGN KEY (`jobid`) REFERENCES `tbljob` (`jobid`),
  ADD CONSTRAINT `tbljobregistration_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tblogin` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
