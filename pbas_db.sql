-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2014 at 03:18 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a5501995_Pbas`
--

-- --------------------------------------------------------

--
-- Table structure for table `acad_act`
--

CREATE TABLE `acad_act` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Gen_Info_AQ` varchar(5) NOT NULL,
  `Gen_Info_Noc` varchar(30) NOT NULL,
  `Gen_Info_Place` varchar(30) NOT NULL,
  `Gen_Info_Duration` varchar(30) NOT NULL,
  `Gen_Info_SA` varchar(30) NOT NULL,
  `Gen_Info_Aqyear` varchar(30) NOT NULL,
  `Gen_Info_ASC` varchar(5) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Gen_Info_Noc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acad_act`
--

INSERT INTO `acad_act` VALUES('a', '2003', 'no', 'a', 'a', 'a', 'a', '2014', 'yes');
INSERT INTO `acad_act` VALUES('ajeet', '', 'no', 'ai', 'Indore', 'gfg', 'gfg', '2013-01-01', 'yes');
INSERT INTO `acad_act` VALUES('ajeet', '', 'yes', 'StartUp Engineering', 'Indore', '2 year', 'Stanford', '2013-01-01', 'yes');
INSERT INTO `acad_act` VALUES('b', '', 'no', 'b', 'gfgf', 'gfg', 'gfg', '2013-01-01', 'yes');
INSERT INTO `acad_act` VALUES('Faculty', '', 'yes', '.NET', 'Indore', '3 Month', 'Internet', '2013', 'yes');
INSERT INTO `acad_act` VALUES('Faculty', '', 'yes', 'JAVA', 'Indore', '2 month', 'Online', '2013', 'yes');
INSERT INTO `acad_act` VALUES('Faculty', '', 'yes', 'Python', 'Indore', '6 Month', 'Coursera', '2013', 'yes');
INSERT INTO `acad_act` VALUES('Faculty', '', 'yes', 'xxxx', 'Indore', '2 month', 'Online', '2013', 'yes');
INSERT INTO `acad_act` VALUES('Faculty', '', 'yes', 'zzzzzz', 'Indore', '2 month', 'Online', '2013', 'yes');
INSERT INTO `acad_act` VALUES('n', '', 'yes', 'Android', 'Indore', '6 month', 'Google', '2012', 'no');
INSERT INTO `acad_act` VALUES('n', '', 'no', 'Data Analysis', 'Khandwa', '30 days', 'gfg', '2013-01-01', 'yes');
INSERT INTO `acad_act` VALUES('n', '', 'no', 'PHD', 'Indore', '1 month', 'sassa', '2013-01-01', 'yes');
INSERT INTO `acad_act` VALUES('n', '2003', 'no', 'b', 'Khandwa', '30 days', 'gfg', '2013-01-01', 'yes');
INSERT INTO `acad_act` VALUES('v', '2003', 'no', 'n', 'gfgf', 'gfg', 'gfg', '2013-01-01', 'yes');
INSERT INTO `acad_act` VALUES('shaligram', '2012-13', 'yes', '', '', '', '', '', 'yes');
INSERT INTO `acad_act` VALUES('a', '2003-2004', 'yes', 'a', 'a', 'a', 'a', '2003', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `enclosures`
--

CREATE TABLE `enclosures` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `Enclosure` varchar(1000) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`SNo`),
  KEY `SNo` (`SNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `enclosures`
--

INSERT INTO `enclosures` VALUES('Faculty', '', 32, 'This Enclosures');
INSERT INTO `enclosures` VALUES('n', '', 30, 'Hello');
INSERT INTO `enclosures` VALUES('n', '', 31, 'World');
INSERT INTO `enclosures` VALUES('n', '2003', 25, 'hfh');
INSERT INTO `enclosures` VALUES('a', '', 36, 'saa');
INSERT INTO `enclosures` VALUES('a', '', 38, 'as');

-- --------------------------------------------------------

--
-- Table structure for table `gen_info`
--

CREATE TABLE `gen_info` (
  `User_Id` varchar(30) NOT NULL,
  `Gen_Info_Name` varchar(30) NOT NULL,
  `Gen_Info_Fname` varchar(30) NOT NULL,
  `Gen_Info_Mname` varchar(30) NOT NULL,
  `Gen_Info_Department` varchar(30) NOT NULL,
  `Gen_Info_CD` varchar(30) NOT NULL,
  `Gen_Info_GP` double NOT NULL,
  `Gen_Info_DLP` date NOT NULL,
  `Gen_Info_AFC` varchar(30) NOT NULL,
  `Gen_Info_PA` varchar(30) NOT NULL,
  `Gen_Info_TNO` double NOT NULL,
  `Gen_Info_Email` varchar(30) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gen_info`
--

INSERT INTO `gen_info` VALUES('ajeet', 'asas', 'sasas', 'asas', 'asasas', 'sas', 100000, '2013-01-01', 'sasasasas', 'sasaasa', 75757, 'email');
INSERT INTO `gen_info` VALUES('Faculty', 'Rahul Sagore', 'Faculty', 'Faculty', 'Internation Institute of Profe', 'Professor', 60000, '2013-01-22', '43/14 Nanak Nagar, Indore', '43/14 Nanak Nagar, Indore', 8085605956, 'rahul.sagore@gmail.com');
INSERT INTO `gen_info` VALUES('ic2k9', 'ggfgkgkg', 'k,vkgk', '111111111', 'qkvkvk', ',v,flk', 0, '2013-02-13', '', '', 0, '');
INSERT INTO `gen_info` VALUES('n', 'Nitesh', 'sasa', 'sasa', 'lk', 'lkl', 50000, '2013-01-01', 'kjk', 'asas', 7852457, 'example@gmail.com');
INSERT INTO `gen_info` VALUES('v', 'v', 'v', 'v', 'v', 'v', 20032003, '2013-02-12', 'n', 'n', 155445, 'nn');
INSERT INTO `gen_info` VALUES('a', 'a', 'a', 'a', 'a', 'a', 0, '0000-00-00', 'a', 'a', 0, 'akhan.iipsmca@gmail.com');
INSERT INTO `gen_info` VALUES('shaligram', 'SHALIGRAM PRAJAPAT', 'Ramkishore Prajapat', 'BrijRani Prajapat', 'International Institute of Pro', 'Reader', 9000, '0000-00-00', 'D-49/A MIG First Floor Shoping', 'D-49/A MIG First Floor Shoping', 9826037078, 'shaligram.prajapat@gmail.com');
INSERT INTO `gen_info` VALUES('s', 'Shivshankar Pindoriya', 'ss', 'ss', 'ss', 'ss', 150000, '2014-05-10', 'fgjf', 'dflfm', 7879226640, 'shiv.dangi71@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `name` varchar(20) NOT NULL,
  `path` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` VALUES('Default', 'default/def.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orie`
--

CREATE TABLE `orie` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(20) NOT NULL,
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `Details` varchar(1000) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`SNo`),
  KEY `SNo` (`SNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `orie`
--

INSERT INTO `orie` VALUES('Faculty', '', 10, 'Hello World');
INSERT INTO `orie` VALUES('Faculty', '', 11, 'How Are You?');
INSERT INTO `orie` VALUES('n', '', 5, 'Detail Is Confedential');
INSERT INTO `orie` VALUES('n', '', 7, 'Hello World');
INSERT INTO `orie` VALUES('n', '', 9, 'Top Secret');
INSERT INTO `orie` VALUES('a', '', 15, 'ffd');

-- --------------------------------------------------------

--
-- Table structure for table `teach_apb`
--

CREATE TABLE `teach_apb` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_APB_TNO` varchar(50) NOT NULL,
  `Teach_APB_BEP` varchar(50) NOT NULL,
  `Teach_APB_ISSN` varchar(30) NOT NULL,
  `Teach_APB_WPR` varchar(50) NOT NULL,
  `Teach_APB_NOC` int(11) NOT NULL,
  `Teach_APB_MA` varchar(20) NOT NULL,
  `Teach_APB_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_APB_TNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_apb`
--

INSERT INTO `teach_apb` VALUES('', '', 'eminem ', 'cent', '45', 'uy', 4, 'on', 4);
INSERT INTO `teach_apb` VALUES('', '', 'ras', 'sar', '143', 'lala', 3, 'on', 5);
INSERT INTO `teach_apb` VALUES('n', '2003', 'b', 'b', 'b', 'b', 0, 'Yes', 10);
INSERT INTO `teach_apb` VALUES('n', '2003', 'j', 'j', 'j', 'j', 4, 'No', 45);
INSERT INTO `teach_apb` VALUES('n', '2003', 'n', 'n', 'n', 'n', 0, 'No', 5);
INSERT INTO `teach_apb` VALUES('n', '2003', 'o', 'o', 'o', 'o', 5, 'No', 45);
INSERT INTO `teach_apb` VALUES('n', '2003', 'u', 'u', 'u', 'u', 4, 'No', 15);

-- --------------------------------------------------------

--
-- Table structure for table `teach_bpe`
--

CREATE TABLE `teach_bpe` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_BPE_TPN` varchar(50) NOT NULL,
  `Teach_BPE_TBA` varchar(50) NOT NULL,
  `Teach_BPE_PISSN` varchar(30) NOT NULL,
  `Teach_BPE_WPR` varchar(50) NOT NULL,
  `Teach_BPE_NOC` int(11) NOT NULL,
  `Teach_BPE_YN` text NOT NULL,
  `Teach_BPE_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_BPE_TPN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_bpe`
--

INSERT INTO `teach_bpe` VALUES('', '', 'Aaau', 'Lolita', '1456', 'Goga', 3, 'on', 0);
INSERT INTO `teach_bpe` VALUES('n', '2003', 'm', 'm', 'm', 'm', 0, 'No', 5);
INSERT INTO `teach_bpe` VALUES('n', '2003', 'n', 'n', 'n', 'n', 0, 'No', 10);

-- --------------------------------------------------------

--
-- Table structure for table `teach_clmi`
--

CREATE TABLE `teach_clmi` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_CLMI_TOA` varchar(100) NOT NULL,
  `Teach_CLMI_YSR` varchar(30) NOT NULL,
  `Teach_CLMI_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_CLMI_TOA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_clmi`
--

INSERT INTO `teach_clmi` VALUES('a', '2003', 'a', 'aa', 0);
INSERT INTO `teach_clmi` VALUES('n', '', 'Hawan', 'Karenge', 5);
INSERT INTO `teach_clmi` VALUES('n', '', 'Samvardhan', 'dadsas', 5);
INSERT INTO `teach_clmi` VALUES('v', '2003', 'v', 'v', 5);
INSERT INTO `teach_clmi` VALUES('a', '2003', 'abc', 'abc', 9);
INSERT INTO `teach_clmi` VALUES('a', '1990', 'a', 'a', 8);
INSERT INTO `teach_clmi` VALUES('$user_id', '$year', '$type', '$responsibility', 0);
INSERT INTO `teach_clmi` VALUES('a', '1990', 'q', 'q', 0);
INSERT INTO `teach_clmi` VALUES('a', '1990', 's', 's', 0);
INSERT INTO `teach_clmi` VALUES('a', '1990', 'e`', 'e', 0);
INSERT INTO `teach_clmi` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Member in discipline committee of IIPS', 'Semester wise', 5);
INSERT INTO `teach_clmi` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Member in anti-ragging committees', 'Semester wise', 5);
INSERT INTO `teach_clmi` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Member of ISTE,CSTA, IEEE', 'yearly', 5);
INSERT INTO `teach_clmi` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Project In charge for Counseling and co-coordinating Student Projects', 'Semester wise', 5);
INSERT INTO `teach_clmi` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Member of Innovative Practices for the preparation of NAAC inspection team visit.', 'Not applicable', 5);
INSERT INTO `teach_clmi` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Member of editorial board of Proposed IIPS international journal ', 'yearly', 5);
INSERT INTO `teach_clmi` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Member of subject allocation committee of computer course of IIPS', 'Semester wise', 5);
INSERT INTO `teach_clmi` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Member of monitoring committee and executing staff of Research and Development Center of IIPS', 'Not applicable', 5);

-- --------------------------------------------------------

--
-- Table structure for table `teach_cpc`
--

CREATE TABLE `teach_cpc` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_CPC_Title` varchar(50) NOT NULL,
  `Teach_CPC_Agency` varchar(50) NOT NULL,
  `Teach_CPC_Period` int(20) NOT NULL,
  `Teach_CPC_GAM` double NOT NULL,
  `Teach_CPC_WPD` varchar(50) NOT NULL,
  `Teach_CPC_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_CPC_Title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_cpc`
--

INSERT INTO `teach_cpc` VALUES('', '', 'thousand', 'years', 0, 5, '', 5);
INSERT INTO `teach_cpc` VALUES('n', '2003', 'bb', 'b', 0, 0, 'b', 10);
INSERT INTO `teach_cpc` VALUES('n', '2003', 'v', 'v', 0, 0, 'v', 5);

-- --------------------------------------------------------

--
-- Table structure for table `teach_ecfa`
--

CREATE TABLE `teach_ecfa` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_ECFA_TOA` varchar(150) NOT NULL,
  `Teach_ECFA_AH` varchar(30) NOT NULL,
  `Teach_ECFA_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_ECFA_TOA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_ecfa`
--

INSERT INTO `teach_ecfa` VALUES('a', '2003', 'a', 'a', 0);
INSERT INTO `teach_ecfa` VALUES('a', '2003', 'aa', 'aa', 8);
INSERT INTO `teach_ecfa` VALUES('Faculty', '', 'ggghgh', '4', 6);
INSERT INTO `teach_ecfa` VALUES('Faculty', '', 'Workshop', '11', 10);
INSERT INTO `teach_ecfa` VALUES('n', '', 'Pycon', '5', 20);
INSERT INTO `teach_ecfa` VALUES('n', '', 'TechDays', '3', 7);
INSERT INTO `teach_ecfa` VALUES('n', '2003', 'workshop', '5', 65);
INSERT INTO `teach_ecfa` VALUES('v', '2003', 'v', '5', 5);
INSERT INTO `teach_ecfa` VALUES('$user_id', '$year', '$type', '$averageHrs', 0);
INSERT INTO `teach_ecfa` VALUES('a', '1990', 'a', 'a', 0);
INSERT INTO `teach_ecfa` VALUES('a', '2003', 'abc', '5', 9);
INSERT INTO `teach_ecfa` VALUES('a', '1990', 'q', 'q', 0);
INSERT INTO `teach_ecfa` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Judged software project competition organized by Nai-Duniya and MPTCTA â€œFonocom â€“2011â€', '8', 10);
INSERT INTO `teach_ecfa` VALUES('a', '2013-2014', '"sdff"', 'h', 0);
INSERT INTO `teach_ecfa` VALUES('a', '2013-2014', 'â€œGaurav Sirâ€', 'qw', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teach_edap`
--

CREATE TABLE `teach_edap` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_EDAP_TED` varchar(100) NOT NULL,
  `Teach_EDAP_DA` varchar(30) NOT NULL,
  `Teach_EDAP_ECO` varchar(30) NOT NULL,
  `Teach_EDAP_API` varchar(30) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_EDAP_TED`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_edap`
--

INSERT INTO `teach_edap` VALUES('a', '2003', 'a', 'a', '12', '5');
INSERT INTO `teach_edap` VALUES('n', '', 'b', 'fgf', '50', '15');
INSERT INTO `teach_edap` VALUES('n', '', 'board', 'bv', '80', '10');
INSERT INTO `teach_edap` VALUES('n', '2003', 'vb', 'bv', '100', '10');
INSERT INTO `teach_edap` VALUES('v', '2003', 'm', 'm', '12', '5');
INSERT INTO `teach_edap` VALUES('a', '1990', 'ghgf', 'fgh', 'fhg', 'fhhfg');
INSERT INTO `teach_edap` VALUES('a', '1990', 'a', 'a', 'a', 'a');
INSERT INTO `teach_edap` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Setting of question paper (University Level)', 'Yes', '100.00%', '5');
INSERT INTO `teach_edap` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Setting of question paper (Departmental Level)', 'Yes', '100.00%', '5');
INSERT INTO `teach_edap` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Invigilation (University Level)', 'Yes', '100.00%', '5');
INSERT INTO `teach_edap` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Invigilation (Departmental Level)', 'Yes', '100.00%', '5');
INSERT INTO `teach_edap` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Evaluation of Answer Scripts (University Level)', 'Yes', '100.00%', '5');
INSERT INTO `teach_edap` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Evaluation of Answer Book (Departmental Level)', 'Yes', '100.00%', '5');
INSERT INTO `teach_edap` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Assistant Superintendent of End semester examination at IIPS(April-May 2012)', 'Yes', '100.00%', '5');

-- --------------------------------------------------------

--
-- Table structure for table `teach_fcp`
--

CREATE TABLE `teach_fcp` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_FCP_TNO` varchar(50) NOT NULL,
  `Teach_FCP_BEP` varchar(50) NOT NULL,
  `Teach_FCP_ISSN` varchar(30) NOT NULL,
  `Teach_FCP_NOC` int(11) NOT NULL,
  `Teach_FCP_MA` text NOT NULL,
  `Teach_FCP_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_FCP_TNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_fcp`
--

INSERT INTO `teach_fcp` VALUES('', '', 'ramesh', ' a', ' a', 0, 'no', 0);
INSERT INTO `teach_fcp` VALUES('n', '2003', 'bc', ' a', ' a', 0, 'no', 0);
INSERT INTO `teach_fcp` VALUES('n', '2003', 'm', ' a', ' a', 0, 'no', 0);
INSERT INTO `teach_fcp` VALUES('n', '2003', 'o', ' a', ' a', 0, 'no', 0);
INSERT INTO `teach_fcp` VALUES('n', '2003', 'p', ' a', ' a', 0, 'no', 0);
INSERT INTO `teach_fcp` VALUES('a', '2000', '', ' a', ' a', 0, 'no', 0);
INSERT INTO `teach_fcp` VALUES('a', '2003', 'a', ' a', ' a', 0, 'no', 0);
INSERT INTO `teach_fcp` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'â€œhelloâ€œ', 'â€œhelloâ€œ', 'â€œhelloâ€œ', 0, 'on', 9);

-- --------------------------------------------------------

--
-- Table structure for table `teach_fdp`
--

CREATE TABLE `teach_fdp` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_FDP_Programme` varchar(150) NOT NULL,
  `Teach_FDP_Duration` varchar(20) NOT NULL,
  `Teach_FDP_Organized` varchar(150) NOT NULL,
  `Teach_FDP_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_FDP_Programme`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_fdp`
--

INSERT INTO `teach_fdp` VALUES('', '', 'saajan', 'chale sasural', 'sasural', 2001);
INSERT INTO `teach_fdp` VALUES('n', '2003', 'h', 'h', 'h', 5);
INSERT INTO `teach_fdp` VALUES('n', '2003', 'nb', 'n', 'n', 10);
INSERT INTO `teach_fdp` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Statistical Modeling of Systems', '1 week', 'IIT Kharagpur', 5);
INSERT INTO `teach_fdp` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Advanced Data structures', '5 days', 'NIT calicut,AICTE-MHRD', 5);
INSERT INTO `teach_fdp` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'National workshop on Algorithms, Computation and Optimization(NWACO-2011)', '2 days', 'IICA,Indore', 5);

-- --------------------------------------------------------

--
-- Table structure for table `teach_ilc`
--

CREATE TABLE `teach_ilc` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_ILC_TOL` varchar(50) NOT NULL,
  `Teach_ILC_TCS` varchar(50) NOT NULL,
  `Teach_ILC_DOE` date NOT NULL,
  `Teach_ILC_Organized` varchar(50) NOT NULL,
  `Teach_ILC_WINS` varchar(15) NOT NULL,
  `Teach_ILC_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_ILC_TOL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_ilc`
--

INSERT INTO `teach_ilc` VALUES('', '', 'i', 'i', '0000-00-00', 's', 'DA', 0);
INSERT INTO `teach_ilc` VALUES('n', '2003', 'nb', 'n', '2013-01-01', 'n', 'International', 5);
INSERT INTO `teach_ilc` VALUES('n', '2003', 'nm', 'm', '2013-01-02', 'mn', 'International', 10);
INSERT INTO `teach_ilc` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Shiv & bnbnbn', 'a', '0000-00-00', 'a', 'a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teach_lstp`
--

CREATE TABLE `teach_lstp` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_LSTP_Course` varchar(100) NOT NULL,
  `Teach_LSTP_Level` varchar(30) NOT NULL,
  `Teach_LSTP_MOT` varchar(150) NOT NULL,
  `Teach_LSTP_NOCA` varchar(100) NOT NULL,
  `Teach_LSTP_NOCC` int(11) NOT NULL,
  `Teach_LSTP_Practicals` varchar(70) NOT NULL,
  `Teach_LSTP_CTDR` varchar(50) NOT NULL,
  `Teach_LSTP_CTAPI` int(11) NOT NULL,
  `Teach_LSTP_TLAPI` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_LSTP_Course`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_lstp`
--

INSERT INTO `teach_lstp` VALUES('a', '2003', 'q', 'q', 'q', '0', 0, 'q', '0', 0, 0);
INSERT INTO `teach_lstp` VALUES('Faculty', '', 'Artificial Intelligence', 'Intermediate', 'Online', '4', 4, '3', '100', 40, 9);
INSERT INTO `teach_lstp` VALUES('Faculty', '', 'Machine Learning', 'Beginner', 'Online', '4', 4, '3', '100', 40, 8);
INSERT INTO `teach_lstp` VALUES('Faculty', '', 'xzxzx', 'xzxzxz', 'zxzx', '4', 4, '3', '100', 40, 9);
INSERT INTO `teach_lstp` VALUES('Faculty', '', 'zxzxzxzx', 'xzxzxz', 'zxzx', '4', 4, '3', '100', 40, 9);
INSERT INTO `teach_lstp` VALUES('n', '', 'Java', 'Professional', 'Online', '3', 3, '1', '100', 10, 8);
INSERT INTO `teach_lstp` VALUES('n', '', 'Python', 'Intermediate', 'Online', '5', 5, '4', '100', 40, 10);
INSERT INTO `teach_lstp` VALUES('n', '2003', 'n', 'hjhcc', 'hghgcc', '7', 2, '1', '50', 12, 10);
INSERT INTO `teach_lstp` VALUES('v', '2003', 'v', 'vv', 'v', '2', 2, '2', '100', 50, 10);
INSERT INTO `teach_lstp` VALUES('a', '2003', 'a', 'a', 'a', '0', 0, 'a', '0', 0, 0);
INSERT INTO `teach_lstp` VALUES('shaligram', '2012-13', 'MCA-V Computer Graphics', 'UG', 'Lectures, Discussion, Lab Assi', '8', 45, 'Given and checked Lab assignme', '100', 100, 10);
INSERT INTO `teach_lstp` VALUES('shaligram', '2012-13', 'MCA-VIII- Analysis and  Design', 'PG', 'ADA', '4', 12, 'Problems given together with t', '30', 0, 3);
INSERT INTO `teach_lstp` VALUES('shaligram', '2012-13', 'M.Tech-Projects ', 'PG', 'Guiding, monitoring and Contro', '4', 40, 'Whole Project is a practcle co', '100', 100, 10);
INSERT INTO `teach_lstp` VALUES('a', '2011', 'Machine Learning', 'Beginner', 'MOOC', '7', 7, '7', '7', 7, 7);
INSERT INTO `teach_lstp` VALUES('a', '2011', 'fgf', 'dfg', 'dfg', '0', 0, 'fdg', '0', 0, 0);
INSERT INTO `teach_lstp` VALUES('a', '1990', 'fgf', 'gfh', 'fgh', '0', 0, 'fgh', '0', 0, 0);
INSERT INTO `teach_lstp` VALUES('a', '2000', 'uio', 'jio', 'jio', '0', 0, 'vghy', '0', 0, 10);
INSERT INTO `teach_lstp` VALUES('a', '1990', 'a', 'a', 'a', '0', 0, 'a', '0', 0, 0);
INSERT INTO `teach_lstp` VALUES('a', '1999', 'a', 'a', 'a', '0', 0, 'a', '0', 0, 0);
INSERT INTO `teach_lstp` VALUES('shaligram.prajapat@gmail.com', '2013', 'Computer Graphics', 'UG', 'Classroom teaching/Lectures + ', '0', 48, 'Allocated as per the concepts ', '100', 50, 10);
INSERT INTO `teach_lstp` VALUES('a', '2003-2004', 'a', 'a', 'a', 'a', 0, 'a', 'a', 0, 0);
INSERT INTO `teach_lstp` VALUES('shaligram.prajapat@gmail.com', '2002-2003', '{bhjbh}', 'bhj', 'bjk', 'bjkb', 0, 'jkb', 'b', 0, 0);
INSERT INTO `teach_lstp` VALUES('shaligram.prajapat@gmail.com', '2002-2003', 'dzsrf(Dxfg)dsg', 'nhjv', 'bj', 'bjkb', 0, 'bb', 'b', 0, 0);
INSERT INTO `teach_lstp` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'IC-803- Analysis and Design of algorithms', 'PG', 'Classroom teaching ,assignments, programming supplements, exercise', '4 (L)Hrs (section A)  + 4 (L)Hrs (section B)', 50, 'Lab Work', '100% Classes Taken', 50, 10);
INSERT INTO `teach_lstp` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'IC-906 â€“Project', 'PG', 'Project management activities', '4 (c) Hrs per week', 50, 'Lab Work', '100% Classes Taken', 50, 10);
INSERT INTO `teach_lstp` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'IC-606-Project', 'UG', 'Project management activities including projects presentations and progress check.', '4 (c) Hrs per week (section A)', 50, 'Lab Work', '100% Classes Taken', 50, 10);

-- --------------------------------------------------------

--
-- Table structure for table `teach_opc`
--

CREATE TABLE `teach_opc` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_OPC_Title` varchar(50) NOT NULL,
  `Teach_OPC_Agency` varchar(50) NOT NULL,
  `Teach_OPC_Period` varchar(20) NOT NULL,
  `Teach_OPC_GAM` double NOT NULL,
  `Teach_OPC_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_OPC_Title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_opc`
--

INSERT INTO `teach_opc` VALUES('', '', '', '', '', 0, 0);
INSERT INTO `teach_opc` VALUES('', '', 'Aauu', 'Lolita', 'shakti', 5, 4);
INSERT INTO `teach_opc` VALUES('n', '2003', 'b', 'b', 'b', 0, 10);
INSERT INTO `teach_opc` VALUES('n', '2003', 'n', 'n', 'n', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `teach_pda`
--

CREATE TABLE `teach_pda` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_PDA_TOA` varchar(150) NOT NULL,
  `Teach_PDA_YWR` varchar(50) NOT NULL,
  `Teach_PDA_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_PDA_TOA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_pda`
--

INSERT INTO `teach_pda` VALUES('a', '2003', 'a', 'a', 0);
INSERT INTO `teach_pda` VALUES('n', '', 'Coaching', 'fgf', 12);
INSERT INTO `teach_pda` VALUES('n', '', 'OnlineCourse', 'sas', 5);
INSERT INTO `teach_pda` VALUES('v', '2003', 'n', 'n', 5);
INSERT INTO `teach_pda` VALUES('a', '1990', 'a', 'a', 0);
INSERT INTO `teach_pda` VALUES('a', '2003', 'qw', 'qw', 0);
INSERT INTO `teach_pda` VALUES('a', '2003', 'q', 'q', 0);
INSERT INTO `teach_pda` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Teaching Methodology', '2 days', 10);

-- --------------------------------------------------------

--
-- Table structure for table `teach_ppc`
--

CREATE TABLE `teach_ppc` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Teach_PPC_TPP` varchar(50) NOT NULL,
  `Teach_PPC_TCS` varchar(50) NOT NULL,
  `Teach_PPC_DOE` date NOT NULL,
  `Teach_PPC_Organized` varchar(50) NOT NULL,
  `Teach_PPC_WINS` text NOT NULL,
  `Teach_PPC_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_PPC_TPP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_ppc`
--

INSERT INTO `teach_ppc` VALUES('', '', 'Rishte', 'me', '0000-00-00', 'tumhare', 'Baap', 0);
INSERT INTO `teach_ppc` VALUES('n', '2003', 'm', 'm', '2013-01-07', 'm', 'National', 5);
INSERT INTO `teach_ppc` VALUES('n', '2003', 'n', 'n', '2013-01-02', 'nf', 'International', 10);

-- --------------------------------------------------------

--
-- Table structure for table `teach_ppij`
--

CREATE TABLE `teach_ppij` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Teach_PPIJ_TNO` varchar(30) NOT NULL,
  `Teach_PPIJ_Journal` varchar(30) NOT NULL,
  `Teach_PPIJ_ISBN` varchar(30) NOT NULL,
  `Teach_PPIJ_PR` varchar(30) NOT NULL,
  `Teach_PPIJ_NCA` int(11) NOT NULL,
  `Teach_PPIJ_MA` varchar(30) NOT NULL,
  `Teach_PPIJ_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_PPIJ_TNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_ppij`
--

INSERT INTO `teach_ppij` VALUES('', '', 'aaaasas', 'as', 'as', 'asa', 0, 'on', 0);
INSERT INTO `teach_ppij` VALUES('', '', 'eminem', 'cent', 'sas', 'sas', 0, 'on', 4);
INSERT INTO `teach_ppij` VALUES('', '', 'Raju', 'Chacha', '545', 'yayh', 4, 'on', 10);
INSERT INTO `teach_ppij` VALUES('', '', 'ramesh', 'suresh', '554', 'kaj', 5, 'on', 5);
INSERT INTO `teach_ppij` VALUES('', '', 'rfe', 'fdf', 'dfdfs', 'asa', 0, 'on', 4);
INSERT INTO `teach_ppij` VALUES('', '', 'Vamp', 'diary', '1245', 'elena', 2, 'on', 2);
INSERT INTO `teach_ppij` VALUES('n', '2003', 'y', 'y', 'y', 'y', 8, 'No', 10);
INSERT INTO `teach_ppij` VALUES('a', '2003', 'a', 'a', 'a', 'a', 0, 'Yes', 0);
INSERT INTO `teach_ppij` VALUES('shaligram.prajapat@gmail.com', '2013-2014', '"fdg"', '"sdf"', '"SD"S', '"SDf"', 0, 'Yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teach_rg`
--

CREATE TABLE `teach_rg` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Teach_RG_NE` varchar(30) NOT NULL,
  `Teach_RG_TS` varchar(50) NOT NULL,
  `Teach_RG_DA` varchar(50) NOT NULL,
  `Teach_RG_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_RG_NE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_rg`
--

INSERT INTO `teach_rg` VALUES('', '', 'hello', 'world', 'Programmer', 0);
INSERT INTO `teach_rg` VALUES('n', '2003', 'm', 'm', 'm', 10);
INSERT INTO `teach_rg` VALUES('n', '2003', 'n', 'n', 'n', 5);

-- --------------------------------------------------------

--
-- Table structure for table `teach_rimc`
--

CREATE TABLE `teach_rimc` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Teach_RIMC_Course` varchar(100) NOT NULL,
  `Teach_RIMC_Consulted` varchar(255) NOT NULL,
  `Teach_RIMC_Prescribed` varchar(255) NOT NULL,
  `Teach_RIMC_ARP` varchar(255) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_RIMC_Course`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_rimc`
--

INSERT INTO `teach_rimc` VALUES('a', '2003', 'a', 'a', 'a', '5');
INSERT INTO `teach_rimc` VALUES('Faculty', '', 'Economics', 'asasssdsd', 'sdsd', 'dsdsd');
INSERT INTO `teach_rimc` VALUES('n', '', 'Python', 'russo', 'kjkj', '10');
INSERT INTO `teach_rimc` VALUES('n', '2003', 'a', 'sasa', 'sas', '10');
INSERT INTO `teach_rimc` VALUES('n', '2003', 'g', 'g', 'g', '5');
INSERT INTO `teach_rimc` VALUES('n', '2003', 'n', 'sas', 'asa', '7');
INSERT INTO `teach_rimc` VALUES('n', '2003', 'v', 'v', 'asa', '6');
INSERT INTO `teach_rimc` VALUES('v', '2003', 'v', 'v', 'v', '5');
INSERT INTO `teach_rimc` VALUES('shaligram', '2012-13', 'MCA-V / Computer Graphics', 'Computer Graphics by Hearn & B', 'https://sites.google.com/site/', 'https://sites.google.com/site/');
INSERT INTO `teach_rimc` VALUES('a', '2011', 'bvg', 'dfg', 'dfg', '');
INSERT INTO `teach_rimc` VALUES('a', '1990', 'a', 'a', 'a', '');
INSERT INTO `teach_rimc` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Analysis and Design of algorithms', 'Introduction to Algorithms-Second edition by Thomas H.Cormen,Charles E. Leiserson,Ronald L. Rivest and Clifford Stein at PHI Publication â€œDesign and analysis of algorithmsâ€ Dave and Dave by Pearson education for complexity notations â€œFundamentals of', 'â€œThe design and analysis of computer Algorithmsâ€ Aho,Hopcroft and Ullman by Pearson Education and â€œIntroduction to Algorithmsâ€-Second edition by Thomas H. Cormen,Charles E. Leiserson,Ronald L. Rivest and Clifford Stein at PHI Publication Visiting ', '5');
INSERT INTO `teach_rimc` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'IC-503-Computer Graphics', 'Computer Graphics-C Version Second edition by Donald Hearn and M. Pauline Baker, Second Edition Pearson Education publication Computer Graphics by Harington for Segmentation chapters Interactive Computer Graphics" by Neumann for output primit', 'Computer Graphics N sinha ,Arun Udai by McGraw-Hill Company Publication Computer Graphics -C Version Second edition by Donald Hearn and M.Pauline Baker,Second Edition Pearson Education publication Visiting google group regularly.', '5');
INSERT INTO `teach_rimc` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Projects for MCA and MTech', 'â€œAnalysis and design of Information Systemsâ€ V. rajaraman,PHI publications â€œSystems Analysis and Design â€œ-Second Edition ,Elias M. Awad Galgotia Publications â€œAn Integrated approach to software Engineeringâ€ Third Edition,Pankaj Jalote by naros', 'Visiting google group regularly Asked to Visit regularly https://sites.google.com/site/shaligramiipsdavvindore/activities/academic-projects', '5');
INSERT INTO `teach_rimc` VALUES('a', '2003-2004', 'a', 'a', 'a', '');

-- --------------------------------------------------------

--
-- Table structure for table `teach_tlm`
--

CREATE TABLE `teach_tlm` (
  `User_Id` varchar(30) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Teach_TLM_SD` varchar(255) NOT NULL,
  `Teach_TLM_API` int(11) NOT NULL,
  PRIMARY KEY (`User_Id`,`Year`,`Teach_TLM_SD`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_tlm`
--

INSERT INTO `teach_tlm` VALUES('a', '2003', 'a', 5);
INSERT INTO `teach_tlm` VALUES('n', '', 'python is functional programmi', 7);
INSERT INTO `teach_tlm` VALUES('n', '2003', 'cjscg', 2);
INSERT INTO `teach_tlm` VALUES('n', '2003', 'gd', 15);
INSERT INTO `teach_tlm` VALUES('n', '2003', 'nm', 5);
INSERT INTO `teach_tlm` VALUES('v', '2003', 'n', 5);
INSERT INTO `teach_tlm` VALUES('a', '2011', 'dfghdf', 0);
INSERT INTO `teach_tlm` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Updated analysis and design of algorithm contents ,notes, assignments For more details ,visit : algorithm-analysis--design-shaligram@googlegroups.com', 2);
INSERT INTO `teach_tlm` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Updated computer graphics contents, study materials, notes, manuscript, assignments. For more details, visit: computergraphics_shaligram@googlegroups.com', 2);
INSERT INTO `teach_tlm` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Improved Projects planning ,scheduling, submissions alignments with the growth of syllabus and industry requirements for more details visit : information-system-analysis-and-design_shaligram@googlegroups.com', 2);
INSERT INTO `teach_tlm` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Small projects, Industry project life cycle and SDLC ,visit: https://sites.google.com/site/shaligramiipsdavvindore/activities/academic-projects', 2);
INSERT INTO `teach_tlm` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Conduction of end Semester CV/PV/Lab examination(Assistant superintended of end-semester examination April-May 2012)', 2);
INSERT INTO `teach_tlm` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Designed and Updated syllabus for computer graphics, Project management plan for students projects, Visit :https://groups.google.com/forum/hl=enfromgroupsforum/computergraphics_shaligram', 2);
INSERT INTO `teach_tlm` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'Updated syllabus of Electronic Circuits, syllabus for BCA program of PIMR. This paper is included in BCA- II semester (Syllabus updated on May 28, 2012.)', 2);
INSERT INTO `teach_tlm` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'pulikt says "hii"', 5);
INSERT INTO `teach_tlm` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'a', 1);
INSERT INTO `teach_tlm` VALUES('shaligram.prajapat@gmail.com', '2013-2014', 'pulkit says â€œSatal is badâ€œ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `User_Id` varchar(30) NOT NULL,
  `Pwd` varchar(30) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` VALUES('a', 'a');
INSERT INTO `userinfo` VALUES('ajeet', 'ajeet');
INSERT INTO `userinfo` VALUES('b', 'b');
INSERT INTO `userinfo` VALUES('c', 'c');
INSERT INTO `userinfo` VALUES('Faculty', 'pass');
INSERT INTO `userinfo` VALUES('ic2k9', 'mp09mm0550');
INSERT INTO `userinfo` VALUES('k', 'k');
INSERT INTO `userinfo` VALUES('m', 'm');
INSERT INTO `userinfo` VALUES('n', 'n');
INSERT INTO `userinfo` VALUES('o', 'o');
INSERT INTO `userinfo` VALUES('p', 'p');
INSERT INTO `userinfo` VALUES('rahul', 'rahul');
INSERT INTO `userinfo` VALUES('ssas', 'saa');
INSERT INTO `userinfo` VALUES('t', 't');
INSERT INTO `userinfo` VALUES('v', 'v');
INSERT INTO `userinfo` VALUES('shaligram', 'iipsdc');
INSERT INTO `userinfo` VALUES('PY', 'open to all');
INSERT INTO `userinfo` VALUES('z', 'z');
INSERT INTO `userinfo` VALUES('shaligram.prajapat@gmail.com', '123456');
INSERT INTO `userinfo` VALUES('s', 's');
