-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 11:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stu`
--

-- --------------------------------------------------------

--
-- Table structure for table `1st_cmt`
--

CREATE TABLE IF NOT EXISTS `1st_cmt` (
`id` bigint(250) NOT NULL,
  `roll` float NOT NULL,
  `semester` varchar(10) NOT NULL,
  `cftc` float NOT NULL,
  `cftf` float NOT NULL,
  `cfttotal` float NOT NULL,
  `cfpc` float NOT NULL,
  `cfpf` float NOT NULL,
  `cfptotal` float NOT NULL,
  `copc` float NOT NULL,
  `copf` float NOT NULL,
  `coptotal` float NOT NULL,
  `edpc` float NOT NULL,
  `edpf` float NOT NULL,
  `edptotal` float NOT NULL,
  `betc` float NOT NULL,
  `betf` float NOT NULL,
  `bettotal` float NOT NULL,
  `bepc` float NOT NULL,
  `bepf` float NOT NULL,
  `beptotal` float NOT NULL,
  `mtc` float NOT NULL,
  `mtf` float NOT NULL,
  `mttotal` float NOT NULL,
  `mpc` float NOT NULL,
  `mpctotal` float NOT NULL,
  `ptc` float NOT NULL,
  `ptf` float NOT NULL,
  `pttotal` float NOT NULL,
  `ppc` float NOT NULL,
  `ppf` float NOT NULL,
  `ppftotal` float NOT NULL,
  `btc` float NOT NULL,
  `btf` float NOT NULL,
  `bttotal` float NOT NULL,
  `etc` float NOT NULL,
  `etf` float NOT NULL,
  `ettotal` float NOT NULL,
  `sstc` float NOT NULL,
  `sstf` float NOT NULL,
  `ssttotal` float NOT NULL,
  `pepc` float NOT NULL,
  `peptotal` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1st_cmt`
--

INSERT INTO `1st_cmt` (`id`, `roll`, `semester`, `cftc`, `cftf`, `cfttotal`, `cfpc`, `cfpf`, `cfptotal`, `copc`, `copf`, `coptotal`, `edpc`, `edpf`, `edptotal`, `betc`, `betf`, `bettotal`, `bepc`, `bepf`, `beptotal`, `mtc`, `mtf`, `mttotal`, `mpc`, `mpctotal`, `ptc`, `ptf`, `pttotal`, `ppc`, `ppf`, `ppftotal`, `btc`, `btf`, `bttotal`, `etc`, `etf`, `ettotal`, `sstc`, `sstf`, `ssttotal`, `pepc`, `peptotal`, `total`) VALUES
(41, 87945, '1st', 456, 789, 1245, 4, 456, 460, 798, 15, 813, 849, 487, 1336, 213, 84, 297, 1412, 45, 1457, 12, 15, 27, 1, 1, 45, 21, 66, 54, 12, 66, 45, 12, 0, 54, 1, 55, 12, 456, 468, 12, 12, 6360),
(42, 911900, '1st', 321, 321, 642, 213, 654, 867, 123, 0, 123, 213, 45, 258, 6432, 654, 7086, 6, 0, 6, 0, 456, 456, 13, 13, 6463, 64, 6527, 16, 46, 62, 1331, 46, 0, 31, 46, 77, 64, 64, 128, 6464, 6464, 24086),
(43, 911952, '1st', 0, 354, 354, 0, 6, 6, 213, 0, 213, 0, 32196, 32196, 645, 649, 1294, 6, 4, 10, 64, 79, 143, 964, 964, 4, 79, 83, 6464, 664, 7128, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 42391),
(44, 4567, '1st', 78, 78, 156, 87, 78, 165, 78, 78, 156, 78, 78, 156, 78, 78, 156, 78, 78, 156, 78, 78, 156, 78, 78, 78, 78, 156, 78, 78, 156, 78, 78, 0, 78, 78, 156, 78, 78, 156, 78, 78, 2037),
(45, 1111, '1st', 87, 87, 174, 87, 87, 174, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 348),
(46, 741, '1st', 100, 100, 200, 100, 100, 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 400),
(47, 1000, '1st', 89, 88, 177, 78, 97, 175, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 352),
(48, 123456, '1st', 78, 68, 146, 65, 65, 130, 69, 699, 768, 40, 40, 80, 87, 87, 174, 78, 79, 157, 78, 87, 165, 87, 87, 87, 87, 174, 87, 87, 174, 78, 78, 0, 89, 85, 174, 56, 89, 145, 0, 0, 2530),
(49, 2222, '1st', 50, 50, 100, 50, 50, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 200);

-- --------------------------------------------------------

--
-- Table structure for table `2nd_cmt`
--

CREATE TABLE IF NOT EXISTS `2nd_cmt` (
`id` bigint(250) NOT NULL,
  `roll` float NOT NULL,
  `semester` varchar(10) NOT NULL,
  `sapc` float NOT NULL,
  `sapf` float NOT NULL,
  `saptotal` float NOT NULL,
  `ptc` float NOT NULL,
  `ptf` float NOT NULL,
  `pttotal` float NOT NULL,
  `ppc` float NOT NULL,
  `ppf` float NOT NULL,
  `pptotal` float NOT NULL,
  `educ` float NOT NULL,
  `edtf` float NOT NULL,
  `edttotal` float NOT NULL,
  `edpc` float NOT NULL,
  `edpf` float NOT NULL,
  `edptotal` float NOT NULL,
  `ewpc` float NOT NULL,
  `ewpf` float NOT NULL,
  `ewptotal` float NOT NULL,
  `ectc` float NOT NULL,
  `ectf` float NOT NULL,
  `ecttotal` float NOT NULL,
  `ecpc` float NOT NULL,
  `ecpf` float NOT NULL,
  `ecptotal` float NOT NULL,
  `mtc` float NOT NULL,
  `mtf` float NOT NULL,
  `mttotal` float NOT NULL,
  `mpc` float NOT NULL,
  `mptotal` float NOT NULL,
  `ctc` float NOT NULL,
  `ctf` float NOT NULL,
  `cttotal` float NOT NULL,
  `cpc` float NOT NULL,
  `cpf` float NOT NULL,
  `cptotal` float NOT NULL,
  `btc` float NOT NULL,
  `btf` float NOT NULL,
  `bttotal` float NOT NULL,
  `etc` float NOT NULL,
  `etf` float NOT NULL,
  `ettotal` float NOT NULL,
  `sstc` float NOT NULL,
  `sste` float NOT NULL,
  `ssttotal` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2nd_cmt`
--

INSERT INTO `2nd_cmt` (`id`, `roll`, `semester`, `sapc`, `sapf`, `saptotal`, `ptc`, `ptf`, `pttotal`, `ppc`, `ppf`, `pptotal`, `educ`, `edtf`, `edttotal`, `edpc`, `edpf`, `edptotal`, `ewpc`, `ewpf`, `ewptotal`, `ectc`, `ectf`, `ecttotal`, `ecpc`, `ecpf`, `ecptotal`, `mtc`, `mtf`, `mttotal`, `mpc`, `mptotal`, `ctc`, `ctf`, `cttotal`, `cpc`, `cpf`, `cptotal`, `btc`, `btf`, `bttotal`, `etc`, `etf`, `ettotal`, `sstc`, `sste`, `ssttotal`, `total`) VALUES
(2, 911900, '2nd', 987, 15, 1002, 123, 213, 336, 546, 123, 669, 456, 5412, 5868, 5445, 45, 5490, 124, 13564, 13688, 4, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 27057),
(3, 911952, '2nd', 654, 3210, 3864, 65, 2354, 2419, 0, 5623560, 5623560, 5231, 0, 5231, 1321, 54654, 55975, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5691060);

-- --------------------------------------------------------

--
-- Table structure for table `3rd_cmt`
--

CREATE TABLE IF NOT EXISTS `3rd_cmt` (
`id` bigint(250) NOT NULL,
  `roll` float NOT NULL,
  `semester` varchar(10) NOT NULL,
  `dmpc` float NOT NULL,
  `dmpf` float NOT NULL,
  `dmptotal` float NOT NULL,
  `dstc` float NOT NULL,
  `dstf` float NOT NULL,
  `dsttotal` float NOT NULL,
  `dspc` float NOT NULL,
  `dspf` float NOT NULL,
  `dsptotal` float NOT NULL,
  `cadpc` float NOT NULL,
  `cadpf` float NOT NULL,
  `cadptotal` float NOT NULL,
  `edtc` float NOT NULL,
  `edtf` float NOT NULL,
  `edttotal` float NOT NULL,
  `edpc` float NOT NULL,
  `edpf` float NOT NULL,
  `edptotal` float NOT NULL,
  `detc` float NOT NULL,
  `detf` float NOT NULL,
  `dettotal` float NOT NULL,
  `depc` float NOT NULL,
  `depf` float NOT NULL,
  `deptotal` float NOT NULL,
  `mtc` float NOT NULL,
  `mtf` float NOT NULL,
  `mttotal` float NOT NULL,
  `mpc` float NOT NULL,
  `mptotal` float NOT NULL,
  `ptc` float NOT NULL,
  `ptf` float NOT NULL,
  `pttotal` float NOT NULL,
  `ppc` float NOT NULL,
  `ppf` float NOT NULL,
  `pptotal` float NOT NULL,
  `btc` float NOT NULL,
  `btf` float NOT NULL,
  `bttotal` float NOT NULL,
  `bpc` float NOT NULL,
  `bptotal` float NOT NULL,
  `etc` float NOT NULL,
  `etf` float NOT NULL,
  `ettotal` float NOT NULL,
  `epc` float NOT NULL,
  `eptotal` float NOT NULL,
  `sstc` float NOT NULL,
  `sstf` float NOT NULL,
  `ssttotal` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3rd_cmt`
--

INSERT INTO `3rd_cmt` (`id`, `roll`, `semester`, `dmpc`, `dmpf`, `dmptotal`, `dstc`, `dstf`, `dsttotal`, `dspc`, `dspf`, `dsptotal`, `cadpc`, `cadpf`, `cadptotal`, `edtc`, `edtf`, `edttotal`, `edpc`, `edpf`, `edptotal`, `detc`, `detf`, `dettotal`, `depc`, `depf`, `deptotal`, `mtc`, `mtf`, `mttotal`, `mpc`, `mptotal`, `ptc`, `ptf`, `pttotal`, `ppc`, `ppf`, `pptotal`, `btc`, `btf`, `bttotal`, `bpc`, `bptotal`, `etc`, `etf`, `ettotal`, `epc`, `eptotal`, `sstc`, `sstf`, `ssttotal`, `total`) VALUES
(2, 911900, '3rd', 654, 1254, 1908, 21, 8, 29, 51, 6548, 6599, 21, 548, 569, 546, 4564, 5110, 65, 21, 86, 54, 1268, 1322, 645, 1235, 1880, 6, 21, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17530),
(3, 911952, '3rd', 0, 54546, 54546, 132, 51, 183, 5, 454, 459, 12, 12, 24, 1, 12, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 55225);

-- --------------------------------------------------------

--
-- Table structure for table `4th_cmt`
--

CREATE TABLE IF NOT EXISTS `4th_cmt` (
`id` bigint(250) NOT NULL,
  `roll` float NOT NULL,
  `semester` varchar(10) NOT NULL,
  `ptc` float NOT NULL,
  `ptf` float NOT NULL,
  `pttotal` float NOT NULL,
  `ppc` float NOT NULL,
  `ppf` float NOT NULL,
  `pptotal` float NOT NULL,
  `dmtc` float NOT NULL,
  `dmtf` float NOT NULL,
  `dmttotal` float NOT NULL,
  `gdpc` float NOT NULL,
  `gdpf` float NOT NULL,
  `gdptotal` float NOT NULL,
  `estc` float NOT NULL,
  `estf` float NOT NULL,
  `esttotal` float NOT NULL,
  `espc` float NOT NULL,
  `espf` float NOT NULL,
  `esptotal` float NOT NULL,
  `adstc` float NOT NULL,
  `adstf` float NOT NULL,
  `adsttotal` float NOT NULL,
  `adspc` float NOT NULL,
  `adspf` float NOT NULL,
  `adsptotal` float NOT NULL,
  `ipetc` float NOT NULL,
  `ipetf` float NOT NULL,
  `ipettotal` float NOT NULL,
  `ipepc` float NOT NULL,
  `ipepf` float NOT NULL,
  `ipeptotal` float NOT NULL,
  `mitc` float NOT NULL,
  `mitf` float NOT NULL,
  `mittotal` float NOT NULL,
  `mipc` float NOT NULL,
  `mipf` float NOT NULL,
  `miptotal` float NOT NULL,
  `gemtc` float NOT NULL,
  `gemtf` float NOT NULL,
  `gemttotal` float NOT NULL,
  `gempc` float NOT NULL,
  `gempf` float NOT NULL,
  `gemptotal` float NOT NULL,
  `amtc` float NOT NULL,
  `amtf` float NOT NULL,
  `amttotal` float NOT NULL,
  `ampc` float NOT NULL,
  `amptotal` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `5th_cmt`
--

CREATE TABLE IF NOT EXISTS `5th_cmt` (
`id` bigint(250) NOT NULL,
  `roll` float NOT NULL,
  `semester` varchar(10) NOT NULL,
  `catc` float NOT NULL,
  `catf` float NOT NULL,
  `cattotal` float NOT NULL,
  `capc` float NOT NULL,
  `capf` float NOT NULL,
  `captotal` float NOT NULL,
  `mmtc` float NOT NULL,
  `mmtf` float NOT NULL,
  `mmttotal` float NOT NULL,
  `mmpc` float NOT NULL,
  `mmpf` float NOT NULL,
  `mmptotal` float NOT NULL,
  `cspc` float NOT NULL,
  `cspf` float NOT NULL,
  `csptotal` float NOT NULL,
  `dmstc` float NOT NULL,
  `dmstf` float NOT NULL,
  `dmsttotal` float NOT NULL,
  `dmspc` float NOT NULL,
  `dmspf` float NOT NULL,
  `dmsptotal` float NOT NULL,
  `detc` float NOT NULL,
  `detf` float NOT NULL,
  `dettotal` float NOT NULL,
  `depc` float NOT NULL,
  `depf` float NOT NULL,
  `deptotal` float NOT NULL,
  `vptc` float NOT NULL,
  `vptf` float NOT NULL,
  `vpttotal` float NOT NULL,
  `vppc` float NOT NULL,
  `vppf` float NOT NULL,
  `vpptotal` float NOT NULL,
  `emtc` float NOT NULL,
  `emtf` float NOT NULL,
  `emttotal` float NOT NULL,
  `bkatc` float NOT NULL,
  `bkatf` float NOT NULL,
  `bkattotal` float NOT NULL,
  `botc` float NOT NULL,
  `botf` float NOT NULL,
  `bottotal` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `6th_cmt`
--

CREATE TABLE IF NOT EXISTS `6th_cmt` (
`id` bigint(250) NOT NULL,
  `roll` float NOT NULL,
  `semester` varchar(10) NOT NULL,
  `mmtc` float NOT NULL,
  `mmtf` float NOT NULL,
  `mmttotal` float NOT NULL,
  `mmpc` float NOT NULL,
  `mmpf` float NOT NULL,
  `mmptotal` float NOT NULL,
  `cptc` float NOT NULL,
  `cptf` float NOT NULL,
  `cpttotal` float NOT NULL,
  `cppc` float NOT NULL,
  `cppf` float NOT NULL,
  `cpptotal` float NOT NULL,
  `dccntc` float NOT NULL,
  `dccntf` float NOT NULL,
  `dccnttotal` float NOT NULL,
  `dccnpc` float NOT NULL,
  `dccnpf` float NOT NULL,
  `dccnptotal` float NOT NULL,
  `costc` float NOT NULL,
  `costf` float NOT NULL,
  `costtotal` float NOT NULL,
  `cospc` float NOT NULL,
  `cospf` float NOT NULL,
  `cosptotal` float NOT NULL,
  `alppc` float NOT NULL,
  `alppf` float NOT NULL,
  `alpptotal` float NOT NULL,
  `qlpc` float NOT NULL,
  `qlpf` float NOT NULL,
  `qlptotal` float NOT NULL,
  `wppc` float NOT NULL,
  `wppf` float NOT NULL,
  `wpptotal` float NOT NULL,
  `bctc` float NOT NULL,
  `bctf` float NOT NULL,
  `bcttotal` float NOT NULL,
  `imtc` float NOT NULL,
  `imtf` float NOT NULL,
  `imttotal` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `Upass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Uname`, `Upass`) VALUES
(1, 'barkat', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `c_name`
--

CREATE TABLE IF NOT EXISTS `c_name` (
`id` int(1) NOT NULL,
  `C_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_name`
--

INSERT INTO `c_name` (`id`, `C_name`) VALUES
(1, 'City Polytechnic Institute,Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `sinfo`
--

CREATE TABLE IF NOT EXISTS `sinfo` (
`id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `roll` float NOT NULL,
  `reg` float NOT NULL,
  `sesson` varchar(20) NOT NULL,
  `tech` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `sphone` varchar(20) NOT NULL,
  `gphone` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sinfo`
--

INSERT INTO `sinfo` (`id`, `name`, `fname`, `mname`, `roll`, `reg`, `sesson`, `tech`, `gender`, `address`, `sphone`, `gphone`) VALUES
(1, 'barkat', 'Md', 'Mrs', 911900, 891566, '2008-2009', 'Computer', 'Male', 'Khulna', '01717417074', '01913813173'),
(5, 'tutul', 'fhfghhgf', 'ghhjghj', 87945, 321655000, '2003-2004', 'Computer', 'Male', '', '', ''),
(6, 'palash', 'dfufgvbn', 'fgutyb', 911952, 5318760, '2003-2004', 'Computer', 'Male', '', '', ''),
(7, 'aslam', 'gffh', 'ghg', 741, 789, '2003-2004', 'Computer', 'Male', '', '', ''),
(8, 'wwwwwwwwww', 'fghgf', 'rttfdg', 1000, 2000, '2003-2004', 'Computer', 'Male', '', '', ''),
(9, 'qwer', 'uioip', '', 123456, 0, '2003-2004', 'Computer', 'Male', '', '', ''),
(10, 'rrrrrrr', 'rtttttttttttttt', '', 0, 1111, '2003-2004', 'Computer', 'Female', '', '', ''),
(11, 'ttttttttt', 'yyyyyyyyyyyyy', 'ggggggggggggg', 2222, 444444000, '2003-2004', 'Computer', 'Male', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `troll`
--

CREATE TABLE IF NOT EXISTS `troll` (
`id` int(11) NOT NULL,
  `roll` float NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `troll`
--

INSERT INTO `troll` (`id`, `roll`, `semester`) VALUES
(1, 911952, '1st');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1st_cmt`
--
ALTER TABLE `1st_cmt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2nd_cmt`
--
ALTER TABLE `2nd_cmt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3rd_cmt`
--
ALTER TABLE `3rd_cmt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `4th_cmt`
--
ALTER TABLE `4th_cmt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `5th_cmt`
--
ALTER TABLE `5th_cmt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `6th_cmt`
--
ALTER TABLE `6th_cmt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_name`
--
ALTER TABLE `c_name`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinfo`
--
ALTER TABLE `sinfo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `troll`
--
ALTER TABLE `troll`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1st_cmt`
--
ALTER TABLE `1st_cmt`
MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `2nd_cmt`
--
ALTER TABLE `2nd_cmt`
MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `3rd_cmt`
--
ALTER TABLE `3rd_cmt`
MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `4th_cmt`
--
ALTER TABLE `4th_cmt`
MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `5th_cmt`
--
ALTER TABLE `5th_cmt`
MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `6th_cmt`
--
ALTER TABLE `6th_cmt`
MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `c_name`
--
ALTER TABLE `c_name`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sinfo`
--
ALTER TABLE `sinfo`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `troll`
--
ALTER TABLE `troll`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
