-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2016 at 12:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supervision`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'Aditi', 'aditi');

-- --------------------------------------------------------

--
-- Table structure for table `circle`
--

CREATE TABLE `circle` (
  `circle_id` int(20) NOT NULL,
  `circle_name` varchar(20) NOT NULL,
  `tal_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circle`
--

INSERT INTO `circle` (`circle_id`, `circle_name`, `tal_id`) VALUES
(130, 'Satewadi', 140),
(131, 'Kotul', 140),
(132, 'Valaki', 144),
(133, 'Arangaon', 140),
(134, 'Dehare', 140),
(135, 'Sakur', 150),
(136, 'Nimon', 150),
(137, 'Mirajgaon', 142),
(138, 'Baradgaon', 142),
(139, 'Jamkhed', 141),
(160, 'Kharda', 141);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept_id` int(20) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `sitetype_id` int(20) NOT NULL,
  `sch_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`, `sitetype_id`, `sch_id`) VALUES
(1330, 'Works', 1324, 190),
(1331, 'Rural Water Supply', 1321, 1213),
(1332, 'Social Welfare', 1324, 1214),
(1333, 'Minor Irrigation', 1322, 1214);

-- --------------------------------------------------------

--
-- Table structure for table `dist`
--

CREATE TABLE `dist` (
  `dist_id` int(20) NOT NULL,
  `dist_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dist`
--

INSERT INTO `dist` (`dist_id`, `dist_name`) VALUES
(1, 'Ahmednagar');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `sch_id` int(20) NOT NULL,
  `sch_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`sch_id`, `sch_name`) VALUES
(190, 'Tourism Development Scheme'),
(191, 'School Building Construction'),
(192, '13 Vitta Aayog(State)'),
(193, 'B.R.G.F'),
(194, 'Citizen Facility Scheme'),
(195, 'Mahatma Gandhi Dispute Free Village'),
(196, 'GRC Drainage and roads'),
(197, 'School Compound Walls'),
(198, 'DPDC Village roads'),
(199, 'TSP'),
(1210, '13 Vitta Aayog Play School'),
(1211, '13 Vitta Aayog(ZP)'),
(1212, '14 Vitta Aayog'),
(1213, 'Gramnidhi'),
(1214, 'Mahajal Yojna'),
(1215, '13 Vitta Aayog(Village)');

-- --------------------------------------------------------

--
-- Table structure for table `site_type`
--

CREATE TABLE `site_type` (
  `sitetype_id` int(20) NOT NULL,
  `sitedes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_type`
--

INSERT INTO `site_type` (`sitetype_id`, `sitedes`) VALUES
(1320, 'NR'),
(1321, 'NB'),
(1322, 'D'),
(1323, 'DD'),
(1324, 'NY');

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE `taluka` (
  `tal_id` int(20) NOT NULL,
  `tal_name` varchar(20) NOT NULL,
  `dist_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`tal_id`, `tal_name`, `dist_id`) VALUES
(140, 'Akole', 1),
(141, 'Jamkhed', 1),
(142, 'Karjat', 1),
(143, 'Kopargaon', 1),
(144, 'Nagar', 1),
(145, 'Nevasa', 1),
(146, 'Parner', 1),
(147, 'Pathardi', 1),
(148, 'Rahata', 1),
(149, 'Rahuri', 1),
(150, 'Sangamner', 1),
(151, 'Shevgaon', 1),
(152, 'Shrigonda', 1),
(153, 'Shrirampur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visitor_id` int(20) NOT NULL,
  `visitor_fname` varchar(20) NOT NULL,
  `visitor_mname` varchar(20) NOT NULL,
  `visitor_lname` varchar(20) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `desig` varchar(20) NOT NULL,
  `join_dt` date NOT NULL,
  `edu_qualification` varchar(20) NOT NULL,
  `dept_id` int(20) NOT NULL,
  `tal_id` int(11) NOT NULL,
  `vp_id` int(11) NOT NULL,
  `circle_id` int(11) NOT NULL,
  `sch_id` int(11) NOT NULL,
  `work_id` int(11) NOT NULL,
  `stage_id` int(50) NOT NULL,
  `sitetype_id` int(50) NOT NULL,
  `work_trans_id` int(100) NOT NULL,
  `year_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitor_id`, `visitor_fname`, `visitor_mname`, `visitor_lname`, `mobile_no`, `password`, `desig`, `join_dt`, `edu_qualification`, `dept_id`, `tal_id`, `vp_id`, `circle_id`, `sch_id`, `work_id`, `stage_id`, `sitetype_id`, `work_trans_id`, `year_id`) VALUES
(1340, 'Pallavi', 'Vijay', 'Cholkhane', '7588387325', 'VPCOE1', 'DE', '2016-11-20', 'B.Tech', 1332, 140, 174, 132, 1214, 1355, 1311, 1324, 2004, 1362),
(1341, 'Aditi', 'Chetan', 'Chaudhari', '7057380565', 'VPCOE2', 'JE', '2016-04-16', 'MBA', 1330, 144, 174, 132, 190, 1350, 1219, 1324, 2005, 1365),
(1342, 'Pratiksha', 'Maruti', 'Jadhav', '7058680516', 'VPCOE3', 'SE', '2016-01-04', 'MS', 1333, 140, 175, 133, 192, 1352, 1217, 1324, 0, 1364),
(1343, 'Gauri', 'Raj', 'Parmar', '9028302975', 'VPCOE4', 'CEA', '2016-07-31', 'BE', 1334, 140, 161, 134, 199, 1353, 1310, 1322, 0, 1366),
(1344, 'Pradnya', 'Sharad', 'Bhosale', '8805783204', 'VPCOE5', 'DE', '2016-05-17', 'MS', 1332, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1345, 'Arjun', 'Chetan', 'Chaudhari', '9423429425', 'VPCOE6', 'SE', '2016-01-11', 'B.Arch', 1336, 140, 174, 132, 1214, 1355, 1312, 1323, 0, 1362),
(1346, 'Pratik', 'Vijay', 'Cholkhane', '9422658997', 'VPCOE7', 'JE', '2016-06-21', 'M.Tech', 1336, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vp`
--

CREATE TABLE `vp` (
  `vp_id` int(20) NOT NULL,
  `vill_name` varchar(20) NOT NULL,
  `circle_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vp`
--

INSERT INTO `vp` (`vp_id`, `vill_name`, `circle_id`) VALUES
(161, 'Nagar-Dehare', 134),
(163, 'Nagar-Nimon', 136),
(165, 'Nagar-Kotul', 131),
(168, 'Nagar-Mirajgaon', 137),
(170, 'Nagar-Jamkhed', 139),
(171, 'Nagar-Kharda', 160),
(172, 'Nagar-Baradgaon', 138),
(174, 'Nagar-Valaki', 132),
(175, 'Nagar-Arangaon', 133),
(176, 'Nagar-Sakur', 135);

-- --------------------------------------------------------

--
-- Table structure for table `work_master`
--

CREATE TABLE `work_master` (
  `work_id` int(20) NOT NULL,
  `name_of_work` varchar(100) NOT NULL,
  `est_amt` float NOT NULL,
  `adm_no` int(20) NOT NULL,
  `adm_date` date NOT NULL,
  `adm_amt` float NOT NULL,
  `ts_date` date NOT NULL,
  `completion_date` date NOT NULL,
  `expenditure_amt` float NOT NULL,
  `completion_flag` varchar(20) NOT NULL,
  `dept_id` int(20) NOT NULL,
  `sch_id` int(20) NOT NULL,
  `vp_id` int(20) NOT NULL,
  `year_id` int(20) NOT NULL,
  `sitetype_id` int(50) NOT NULL,
  `circle_id` int(50) NOT NULL,
  `tal_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_master`
--

INSERT INTO `work_master` (`work_id`, `name_of_work`, `est_amt`, `adm_no`, `adm_date`, `adm_amt`, `ts_date`, `completion_date`, `expenditure_amt`, `completion_flag`, `dept_id`, `sch_id`, `vp_id`, `year_id`, `sitetype_id`, `circle_id`, `tal_id`) VALUES
(1350, 'Temple Construction At Shriram Nagar', 15, 520, '2015-06-17', 14, '2015-07-11', '2016-03-28', 13, 'n', 1334, 1213, 164, 1365, 0, 0, 140),
(1352, 'Main Building Construction At Takali.', 18, 522, '2014-09-18', 17, '2014-11-22', '2015-02-19', 17, 'y', 1333, 192, 175, 1364, 1217, 133, 140),
(1355, 'Concreting Work At Kotul', 2, 525, '2012-02-03', 3, '2012-05-05', '2015-10-12', 3, 'y', 1332, 1214, 174, 1362, 1324, 132, 140);

-- --------------------------------------------------------

--
-- Table structure for table `work_stage`
--

CREATE TABLE `work_stage` (
  `stage_id` int(20) NOT NULL,
  `stage_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_stage`
--

INSERT INTO `work_stage` (`stage_id`, `stage_name`) VALUES
(1216, 'Excavation'),
(1217, 'WBM Construction'),
(1218, 'Slab Level'),
(1219, 'Concreting'),
(1310, 'Finishing'),
(1311, 'Carpet'),
(1312, 'Plaster'),
(1313, 'PCC'),
(1314, 'Site Cleaning'),
(1315, 'Pipe Laying'),
(1316, 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `work_trans`
--

CREATE TABLE `work_trans` (
  `work_trans_id` int(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `longitude` int(11) NOT NULL,
  `latitude` int(11) NOT NULL,
  `remark1` varchar(100) NOT NULL,
  `image_photo` longblob NOT NULL,
  `visitor_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_trans`
--

INSERT INTO `work_trans` (`work_trans_id`, `date_time`, `longitude`, `latitude`, `remark1`, `image_photo`, `visitor_id`) VALUES
(2004, '2016-10-12 23:01:12', 0, 0, '', '', 1340),
(2005, '2016-10-19 01:38:51', 0, 0, '', '', 1341);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `year_id` int(20) NOT NULL,
  `year_from` varchar(20) NOT NULL,
  `year_to` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `year_from`, `year_to`) VALUES
(1360, '2010', '2011'),
(1361, '2011', '2012'),
(1362, '2012', '2013'),
(1363, '2013', '2014'),
(1364, '2014', '2015'),
(1365, '2015', '2016'),
(1366, '2016', '2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `circle`
--
ALTER TABLE `circle`
  ADD PRIMARY KEY (`circle_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `dist`
--
ALTER TABLE `dist`
  ADD PRIMARY KEY (`dist_id`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`sch_id`);

--
-- Indexes for table `site_type`
--
ALTER TABLE `site_type`
  ADD PRIMARY KEY (`sitetype_id`);

--
-- Indexes for table `taluka`
--
ALTER TABLE `taluka`
  ADD PRIMARY KEY (`tal_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- Indexes for table `vp`
--
ALTER TABLE `vp`
  ADD PRIMARY KEY (`vp_id`);

--
-- Indexes for table `work_master`
--
ALTER TABLE `work_master`
  ADD PRIMARY KEY (`work_id`);

--
-- Indexes for table `work_stage`
--
ALTER TABLE `work_stage`
  ADD PRIMARY KEY (`stage_id`);

--
-- Indexes for table `work_trans`
--
ALTER TABLE `work_trans`
  ADD PRIMARY KEY (`work_trans_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `circle`
--
ALTER TABLE `circle`
  MODIFY `circle_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1334;
--
-- AUTO_INCREMENT for table `dist`
--
ALTER TABLE `dist`
  MODIFY `dist_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `sch_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1216;
--
-- AUTO_INCREMENT for table `site_type`
--
ALTER TABLE `site_type`
  MODIFY `sitetype_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1325;
--
-- AUTO_INCREMENT for table `taluka`
--
ALTER TABLE `taluka`
  MODIFY `tal_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1347;
--
-- AUTO_INCREMENT for table `vp`
--
ALTER TABLE `vp`
  MODIFY `vp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT for table `work_master`
--
ALTER TABLE `work_master`
  MODIFY `work_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1356;
--
-- AUTO_INCREMENT for table `work_stage`
--
ALTER TABLE `work_stage`
  MODIFY `stage_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1317;
--
-- AUTO_INCREMENT for table `work_trans`
--
ALTER TABLE `work_trans`
  MODIFY `work_trans_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2006;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1367;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
