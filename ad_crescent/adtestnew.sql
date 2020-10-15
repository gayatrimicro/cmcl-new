-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: mysql.adhr.adnacgroup.com
-- Generation Time: Feb 09, 2018 at 09:38 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adtestnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigntestempcan`
--

CREATE TABLE `assigntestempcan` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `orgid` varchar(255) NOT NULL,
  `orgusername` varchar(255) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `testid` varchar(100) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `testqty` varchar(10) NOT NULL,
  `assigndate` varchar(20) NOT NULL,
  `assigntime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigntestempcan`
--

INSERT INTO `assigntestempcan` (`id`, `userid`, `username`, `orgid`, `orgusername`, `usertype`, `testid`, `testname`, `testqty`, `assigndate`, `assigntime`) VALUES
(1, '5a45f518d8254', '', '5a45f254ad2ba', 'debjani@sparkletengineers.com', 'candidate', '321', '', '1', '2017-12-28', '1514534244'),
(2, '5a45f518d8254', '', '5a45f254ad2ba', 'debjani@sparkletengineers.com', 'candidate', '256', '', '1', '2017-12-28', '1514534244'),
(3, '5a45f518d8254', '', '5a45f254ad2ba', 'debjani@sparkletengineers.com', 'candidate', '1456', '', '1', '2017-12-28', '1514534244'),
(4, '5a460ad3893ae', '', '5a45f254ad2ba', 'debjani@sparkletengineers.com', 'candidate', '321', '', '1', '2017-12-29', '1514539954'),
(5, '5a460ad3893ae', '', '5a45f254ad2ba', 'debjani@sparkletengineers.com', 'candidate', '256', '', '0', '2017-12-29', '1514539954'),
(6, '5a460ad3893ae', '', '5a45f254ad2ba', 'debjani@sparkletengineers.com', 'candidate', '1456', '', '0', '2017-12-29', '1514539954'),
(7, '5a5072de6cc99', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '321', '', '1', '2018-01-05', '1515222057'),
(8, '5a5072de6cc99', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '256', '', '1', '2018-01-05', '1515222057'),
(9, '5a5072de6cc99', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '1456', '', '1', '2018-01-05', '1515222057'),
(10, '5a5072de70cb9', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '321', '', '0', '2018-01-05', '1515222057'),
(11, '5a5072de70cb9', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '256', '', '0', '2018-01-05', '1515222057'),
(12, '5a5072de70cb9', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '1456', '', '0', '2018-01-05', '1515222057'),
(13, '5a5072de74f5f', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '321', '', '0', '2018-01-05', '1515222057'),
(14, '5a5072de74f5f', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '256', '', '0', '2018-01-05', '1515222057'),
(15, '5a5072de74f5f', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '1456', '', '0', '2018-01-05', '1515222057'),
(16, '5a5072de78c27', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '321', '', '0', '2018-01-05', '1515222057'),
(17, '5a5072de78c27', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '256', '', '0', '2018-01-05', '1515222057'),
(18, '5a5072de78c27', '', '5a506f9c109b7', 'contact@squartech.com', 'employee', '1456', '', '0', '2018-01-05', '1515222057');

-- --------------------------------------------------------

--
-- Table structure for table `buytestindividual`
--

CREATE TABLE `buytestindividual` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `testid` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `testquantity` varchar(255) NOT NULL,
  `buyingdate` varchar(255) NOT NULL,
  `buyingtime` varchar(255) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `paymentgetway` varchar(255) NOT NULL,
  `paymentstatus` varchar(255) NOT NULL,
  `paymentdate` varchar(255) NOT NULL,
  `paymentime` varchar(255) NOT NULL,
  `paymentclearingdate` varchar(255) NOT NULL,
  `paymentdescription` varchar(255) NOT NULL,
  `transactionid` varchar(255) NOT NULL,
  `txnid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buytestindividual`
--

INSERT INTO `buytestindividual` (`id`, `userid`, `useremail`, `username`, `testid`, `testname`, `testquantity`, `buyingdate`, `buyingtime`, `paymentmode`, `paymentgetway`, `paymentstatus`, `paymentdate`, `paymentime`, `paymentclearingdate`, `paymentdescription`, `transactionid`, `txnid`) VALUES
(1, '5a25294b1f946', 'aniket@squartech.com', 'aniket@squartech.com', '321', 'PTW', '2', '2017-12-04', '1512384934', 'cheque', '', 'completed', '2017-12-04', '1512385441', '2017-12-04', '', '', '201712041512384934810'),
(2, '5a25294b1f946', 'aniket@squartech.com', 'aniket@squartech.com', '256', 'ETI', '2', '2017-12-04', '1512384934', 'cheque', '', 'completed', '2017-12-04', '1512385448', '2017-12-04', '', '', '201712041512384934810'),
(3, '5a25294b1f946', 'aniket@squartech.com', 'aniket@squartech.com', '1456', 'CPTI', '2', '2017-12-04', '1512384934', 'cheque', '', 'completed', '2017-12-04', '1512385455', '2017-12-04', '', '', '201712041512384934810');

-- --------------------------------------------------------

--
-- Table structure for table `buytestorganization`
--

CREATE TABLE `buytestorganization` (
  `id` int(255) NOT NULL,
  `orgid` varchar(255) NOT NULL,
  `orgemail` varchar(255) NOT NULL,
  `orgusername` varchar(255) NOT NULL,
  `testid` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `testquantity` varchar(255) NOT NULL,
  `buyingdate` varchar(255) NOT NULL,
  `buyingtime` varchar(255) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `paymentgetway` varchar(255) NOT NULL,
  `paymentstatus` varchar(255) NOT NULL,
  `paymentdate` varchar(255) NOT NULL,
  `paymentime` varchar(255) NOT NULL,
  `paymentclearingdate` varchar(255) NOT NULL,
  `paymentdescription` varchar(255) NOT NULL,
  `transactionid` varchar(255) NOT NULL,
  `txnid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buytestorganization`
--

INSERT INTO `buytestorganization` (`id`, `orgid`, `orgemail`, `orgusername`, `testid`, `testname`, `testquantity`, `buyingdate`, `buyingtime`, `paymentmode`, `paymentgetway`, `paymentstatus`, `paymentdate`, `paymentime`, `paymentclearingdate`, `paymentdescription`, `transactionid`, `txnid`) VALUES
(1, '5a17bde9548ed', '0', 'aniket@squartech.com', '321', 'PTW', '4', '2017-11-23', '1511505635', 'online', 'Paypal', 'completed', '2017-11-23', '1511505635', '2017-11-23', '', '', '201711231511505635532'),
(2, '5a45f254ad2ba', 'debjani@sparkletengineers.com', 'debjani@sparkletengineers.com', '321', 'PTW', '15', '2017-12-28', '1514533636', 'cheque', '', 'completed', '2017-12-28', '1514533692', '2017-12-28', '', '', '201712281514533636375'),
(3, '5a45f254ad2ba', 'debjani@sparkletengineers.com', 'debjani@sparkletengineers.com', '256', 'ETI', '15', '2017-12-28', '1514533636', 'cheque', '', 'completed', '2017-12-28', '1514533712', '2017-12-28', '', '', '201712281514533636375'),
(4, '5a45f254ad2ba', 'debjani@sparkletengineers.com', 'debjani@sparkletengineers.com', '1456', 'CPTI', '15', '2017-12-28', '1514533636', 'cheque', '', 'completed', '2017-12-28', '1514533718', '2017-12-28', '', '', '201712281514533636375'),
(5, '5a506f9c109b7', 'contact@squartech.com', 'contact@squartech.com', '321', 'PTW', '18', '2018-01-05', '1515221824', 'cheque', '', 'completed', '2018-01-05', '1515221870', '2018-01-05', '', '', '201801051515221824697'),
(6, '5a506f9c109b7', 'contact@squartech.com', 'contact@squartech.com', '256', 'ETI', '18', '2018-01-05', '1515221824', 'cheque', '', 'completed', '2018-01-05', '1515221884', '2018-01-05', '', '', '201801051515221824697'),
(7, '5a506f9c109b7', 'contact@squartech.com', 'contact@squartech.com', '1456', 'CPTI', '18', '2018-01-05', '1515221824', 'cheque', '', 'completed', '2018-01-05', '1515221894', '2018-01-05', '', '', '201801051515221824697');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `orgid` varchar(255) NOT NULL,
  `orgusername` varchar(255) NOT NULL,
  `testid` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `testqty` varchar(255) NOT NULL,
  `testprice` varchar(255) NOT NULL,
  `totalprice` varchar(255) NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `username`, `orgid`, `orgusername`, `testid`, `testname`, `testqty`, `testprice`, `totalprice`, `uniqid`, `status`) VALUES
(1, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '321', 'PTW', '10', '1500', '15000', '5a0ab636e612b', 'Inactive'),
(2, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '256', 'ETI', '10', '1500', '15000', '5a0ab636e612b', 'Inactive'),
(3, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '1456', 'CPTI', '10', '1500', '15000', '5a0ab636e612b', 'Inactive'),
(4, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '321', 'PTW', '10', '1500', '15000', '5a0ab704c5e9d', 'Inactive'),
(5, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '256', 'ETI', '10', '1500', '15000', '5a0ab71e5977f', 'Inactive'),
(6, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '1456', 'CPTI', '10', '1500', '15000', '5a0ab71e5977f', 'Inactive'),
(7, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '743', 'GA1', '10', '1500', '15000', '5a0acb0853b9a', 'Inactive'),
(8, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '9875', 'BS', '10', '1500', '15000', '5a0ae3866c274', 'Inactive'),
(9, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '741', 'MG', '10', '1500', '15000', '5a0ae3866c274', 'Inactive'),
(10, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '743', 'GA1', '10', '1500', '15000', '5a0ae3866c274', 'Inactive'),
(11, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '744', 'GA2', '10', '1500', '15000', '5a0ae3866c274', 'Inactive'),
(12, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '745', 'CM', '10', '951', '9510', '5a0ae3866c274', 'Inactive'),
(13, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '748', 'TE', '10', '1500', '15000', '5a0ae3866c274', 'Inactive'),
(14, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '750', 'SSR', '10', '1500', '15000', '5a0ae3866c274', 'Inactive'),
(15, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '321', 'PTW', '5', '1500', '7500', '5a0bc8c33acfc', 'Inactive'),
(16, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '256', 'ETI', '5', '1500', '7500', '5a0bc8c33acfc', 'Inactive'),
(17, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '1456', 'CPTI', '5', '1500', '7500', '5a0bc8c33acfc', 'Inactive'),
(18, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '9875', 'BS', '5', '1500', '7500', '5a0bc8c33acfc', 'Inactive'),
(19, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '741', 'MG', '5', '1500', '7500', '5a0bc8c33acfc', 'Inactive'),
(20, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '743', 'GA1', '5', '1500', '7500', '5a0bc8c33acfc', 'Inactive'),
(21, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '744', 'GA2', '5', '1500', '7500', '5a0bc8c33acfc', 'Inactive'),
(22, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '750', 'SSR', '5', '1500', '7500', '5a0bc8c33acfc', 'Inactive'),
(23, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '751', 'SAT', '5', '1500', '7500', '5a0bc8c33acfc', 'Inactive'),
(24, '5a0bf9b99fbe2', 'najeeb@squartech.com', '', '', '321', 'PTW', '2', '1500', '3000', '5a0bfae165688', 'Inactive'),
(25, '5a0bf9b99fbe2', 'najeeb@squartech.com', '', '', '256', 'ETI', '2', '1500', '3000', '5a0bfae165688', 'Inactive'),
(26, '5a0bf9b99fbe2', 'najeeb@squartech.com', '', '', '1456', 'CPTI', '2', '1500', '3000', '5a0bfae165688', 'Inactive'),
(27, '5a0bf9b99fbe2', 'najeeb@squartech.com', '', '', '9875', 'BS', '2', '1500', '3000', '5a0bfae165688', 'Inactive'),
(28, '5a0bf9b99fbe2', 'najeeb@squartech.com', '', '', '741', 'MG', '2', '1500', '3000', '5a0bfae165688', 'Inactive'),
(29, '5a0bf9b99fbe2', 'najeeb@squartech.com', '', '', '743', 'GA1', '2', '1500', '3000', '5a0bfae165688', 'Inactive'),
(30, '5a0bf9b99fbe2', 'najeeb@squartech.com', '', '', '744', 'GA2', '2', '1500', '3000', '5a0bfae165688', 'Inactive'),
(31, '5a0bf9b99fbe2', 'najeeb@squartech.com', '', '', '750', 'SSR', '2', '1500', '3000', '5a0bfae165688', 'Inactive'),
(32, '5a0bf9b99fbe2', 'najeeb@squartech.com', '', '', '751', 'SAT', '2', '1500', '3000', '5a0bfae165688', 'Inactive'),
(33, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '321', 'PTW', '5', '1500', '7500', '5a0c327295c37', 'Inactive'),
(34, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '256', 'ETI', '5', '1500', '7500', '5a0c327295c37', 'Inactive'),
(35, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '1456', 'CPTI', '5', '1500', '7500', '5a0c327295c37', 'Inactive'),
(36, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '9875', 'BS', '5', '1500', '7500', '5a0c327295c37', 'Inactive'),
(37, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '741', 'MG', '5', '1500', '7500', '5a0c327295c37', 'Inactive'),
(38, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '743', 'GA1', '5', '1500', '7500', '5a0c327295c37', 'Inactive'),
(39, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '744', 'GA2', '5', '1500', '7500', '5a0c327295c37', 'Inactive'),
(40, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '750', 'SSR', '5', '1500', '7500', '5a0c327295c37', 'Inactive'),
(41, '5a0ab5307a691', 'vikas.s@squartech.com', '', '', '751', 'SAT', '5', '1500', '7500', '5a0c327295c37', 'Inactive'),
(42, '5a0d470107b22', 'murtaza.m@squartech.com', '', '', '321', 'PTW', '5', '1500', '7500', '5a0d4768ebc39', 'Inactive'),
(43, '5a0d470107b22', 'murtaza.m@squartech.com', '', '', '256', 'ETI', '5', '1500', '7500', '5a0d4768ebc39', 'Inactive'),
(44, '5a0d470107b22', 'murtaza.m@squartech.com', '', '', '1456', 'CPTI', '5', '1500', '7500', '5a0d4768ebc39', 'Inactive'),
(45, '5a0d470107b22', 'murtaza.m@squartech.com', '', '', '256', 'ETI', '3', '1500', '4500', '5a0d4bb4b35c3', 'Inactive'),
(46, '5a0d470107b22', 'murtaza.m@squartech.com', '', '', '750', 'SSR', '3', '1500', '4500', '5a0d53e6cc164', 'Inactive'),
(47, '5a17bde9548ed', 'aniket@squartech.com', '', '', '321', 'PTW', '4', '1500', '6000', '5a17be35870ef', 'Inactive'),
(48, '5a25294b1f946', 'aniket@squartech.com', '', '', '321', 'PTW', '2', '1500', '3000', '5a2529a175bb3', 'Inactive'),
(49, '5a25294b1f946', 'aniket@squartech.com', '', '', '256', 'ETI', '2', '1500', '3000', '5a2529a175bb3', 'Inactive'),
(50, '5a25294b1f946', 'aniket@squartech.com', '', '', '1456', 'CPTI', '2', '1500', '3000', '5a2529a175bb3', 'Inactive'),
(51, '5a45f254ad2ba', 'debjani@sparkletengineers.com', '', '', '321', 'PTW', '15', '1500', '22500', '5a45f27d07763', 'Inactive'),
(52, '5a45f254ad2ba', 'debjani@sparkletengineers.com', '', '', '256', 'ETI', '15', '1500', '22500', '5a45f27d07763', 'Inactive'),
(53, '5a45f254ad2ba', 'debjani@sparkletengineers.com', '', '', '1456', 'CPTI', '15', '1500', '22500', '5a45f27d07763', 'Inactive'),
(54, '5a45f254ad2ba', 'debjani@sparkletengineers.com', '', '', '321', 'PTW', '1', '1500', '1500', '5a45f7706ca4e', 'Inactive'),
(55, '5a45f254ad2ba', 'debjani@sparkletengineers.com', '', '', '321', 'PTW', '1', '1500', '1500', '5a45fbabbb592', 'Inactive'),
(56, '5a45f254ad2ba', 'debjani@sparkletengineers.com', '', '', '321', 'PTW', '1', '1500', '1500', '5a45fbed37e60', 'Inactive'),
(57, '5a45f254ad2ba', 'debjani@sparkletengineers.com', '', '', '741', 'MG', '1', '1500', '1500', '5a45fbed37e60', 'Inactive'),
(58, '5a506f9c109b7', 'contact@squartech.com', '', '', '321', 'PTW', '18', '1500', '27000', '5a50733249238', 'Inactive'),
(59, '5a506f9c109b7', 'contact@squartech.com', '', '', '256', 'ETI', '18', '1500', '27000', '5a50733249238', 'Inactive'),
(60, '5a506f9c109b7', 'contact@squartech.com', '', '', '1456', 'CPTI', '18', '1500', '27000', '5a50733249238', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `dateadded` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etiresultind`
--

CREATE TABLE `etiresultind` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `testid` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `realistic_orientation` varchar(50) NOT NULL,
  `self_assertion` varchar(50) NOT NULL,
  `impulse_control` varchar(50) NOT NULL,
  `empthy` varchar(50) NOT NULL,
  `comminication_cooperation` varchar(50) NOT NULL,
  `optimism` varchar(50) NOT NULL,
  `self_awareness` varchar(50) NOT NULL,
  `innovation` varchar(50) NOT NULL,
  `risk_taking` varchar(50) NOT NULL,
  `analytical` varchar(50) NOT NULL,
  `social_self` varchar(5) NOT NULL,
  `enterprising` varchar(50) NOT NULL,
  `artistic` varchar(50) NOT NULL,
  `well_adjusted` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etiresultind`
--

INSERT INTO `etiresultind` (`id`, `userid`, `username`, `testid`, `testname`, `realistic_orientation`, `self_assertion`, `impulse_control`, `empthy`, `comminication_cooperation`, `optimism`, `self_awareness`, `innovation`, `risk_taking`, `analytical`, `social_self`, `enterprising`, `artistic`, `well_adjusted`, `total`) VALUES
(1, '5a25294b1f946', 'aniket@squartech.com', '256', 'ETI', '18/17', '25/11', '23/22', '8/8', '22/14', '19/19', '18/15', '17/12', '12/10', '17/14', '22/15', '14/12', '11/10', '16/23', '202');

-- --------------------------------------------------------

--
-- Table structure for table `etiresultorg`
--

CREATE TABLE `etiresultorg` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `testid` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `realistic_orientation` varchar(50) NOT NULL,
  `self_assertion` varchar(50) NOT NULL,
  `impulse_control` varchar(50) NOT NULL,
  `empthy` varchar(50) NOT NULL,
  `comminication_cooperation` varchar(50) NOT NULL,
  `optimism` varchar(50) NOT NULL,
  `self_awareness` varchar(50) NOT NULL,
  `innovation` varchar(50) NOT NULL,
  `risk_taking` varchar(50) NOT NULL,
  `analytical` varchar(50) NOT NULL,
  `social_self` varchar(5) NOT NULL,
  `enterprising` varchar(50) NOT NULL,
  `artistic` varchar(50) NOT NULL,
  `well_adjusted` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `orgid` varchar(100) NOT NULL,
  `orgname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etiresultorg`
--

INSERT INTO `etiresultorg` (`id`, `userid`, `username`, `testid`, `testname`, `realistic_orientation`, `self_assertion`, `impulse_control`, `empthy`, `comminication_cooperation`, `optimism`, `self_awareness`, `innovation`, `risk_taking`, `analytical`, `social_self`, `enterprising`, `artistic`, `well_adjusted`, `total`, `orgid`, `orgname`) VALUES
(1, '5a460ad3893ae', 'sourav01@outlook.com', '256', 'ETI', '18/14', '25/15', '23/19', '8/10', '22/13', '19/15', '18/16', '17/9', '12/8', '17/7', '22/7', '14/7', '11/10', '16/22', '172', '', ''),
(2, '5a5072de74f5f', 'vanessa@squartech.com', '256', 'ETI', '18/13', '25/11', '23/19', '8/5', '22/12', '19/13', '18/15', '17/9', '12/7', '17/7', '22/7', '14/6', '11/9', '16/22', '155', '', ''),
(3, '5a5072de70cb9', 'karan@squartech.com', '256', 'ETI', '18/16', '25/21', '23/23', '8/13', '22/18', '19/19', '18/18', '17/13', '12/11', '17/16', '22/14', '14/14', '11/14', '16/21', '231', '', ''),
(4, '5a5072de78c27', 'mahesh@squartech.com', '256', 'ETI', '18/17', '25/20', '23/23', '8/9', '22/20', '19/22', '18/18', '17/9', '12/19', '17/12', '22/14', '14/18', '11/11', '16/21', '233', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `listoftest`
--

CREATE TABLE `listoftest` (
  `id` int(100) NOT NULL,
  `testname` varchar(100) NOT NULL,
  `testprice` varchar(100) NOT NULL,
  `testimage` varchar(100) NOT NULL,
  `testimage2` varchar(255) NOT NULL,
  `teststatus` varchar(100) NOT NULL,
  `uniqid` varchar(100) NOT NULL,
  `shortname` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listoftest`
--

INSERT INTO `listoftest` (`id`, `testname`, `testprice`, `testimage`, `testimage2`, `teststatus`, `uniqid`, `shortname`, `fullname`) VALUES
(1, 'PTW', '1500', '', 'PTW.png', 'online', '321', 'PTW', 'Personality Type Work'),
(2, 'ETI', '1500', '', 'ETI.png', 'online', '256', 'ETI', 'Emotional Type Indicator'),
(3, 'CPTI', '1500', '', 'CPTI.png', 'online', '1456', 'CPTI', 'Core Personality Type Indicator'),
(4, 'BS', '1500', '', 'BS.png', 'online', '9875', 'BS', 'Blockage Survey'),
(5, 'MG', '1500', '', 'MG.png', 'online', '741', 'MG', 'Managerial Grid'),
(6, 'LS', '951', '', 'LS.png', 'offline', '742', 'LD', 'Lead Survey'),
(7, 'GA1', '1500', '', 'GA1.png', 'online', '743', 'GA1', 'General Ability Test 1'),
(8, 'GA2', '1500', '', 'GA2.png', 'online', '744', 'GA2', 'General Ability Test 2'),
(9, 'CM', '951', '', 'CM.png', 'offline', '745', 'CM', 'Conflict Management'),
(10, 'SST', '951', '', 'SST.png', 'offline', '746', 'SST', 'Selling Style Test'),
(11, 'SS', '951', '', 'SS.png', 'offline', '747', 'SS', 'SALES SUPERVISOR'),
(12, 'TE', '1500', '', 'TE.png', 'offline', '748', 'TE', 'TEAM EFFECTIVENESS'),
(13, 'BI', '951', '', 'BI.png', 'offline', '749', 'BI', 'BURNOUT INVENTORY'),
(14, 'SSR', '1500', '', 'SSR.png', 'online', '750', 'SSR', 'STRESS SOCIAL READJUSTMENT'),
(15, 'SAT', '1500', '', 'SAT.png', 'online', '751', 'SAT', 'SUPERVISORY APTITUDE TEST'),
(16, 'LP', '951', '', 'LP.png', 'offline', '752', 'LP', 'LIFE POSITIONS'),
(17, 'ES', '951', '', 'ES.png', 'offline', '752', 'ES', 'EGO STATES'),
(18, 'OC', '951', '', 'OC.png', 'offline', '753', 'OC', 'ORGANIZATION CLIMATE');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(255) NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `sendby` varchar(255) NOT NULL,
  `sendto` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'ur' COMMENT 'ur-unread,r-read'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `uniqid`, `sendby`, `sendto`, `description`, `datetime`, `url`, `status`) VALUES
(1, '5a141c7cd6957', 'info@adnacgroup.com', 'vikas.s@squartech.com', 'Welcome to adtest with Adnac Group.', '1511267452', '', 'ur'),
(2, '5a141cf3a6db1', 'info@adnacgroup.com', 'vikas.s@squartech.com', 'Welcome to adtest with Adnac Group.', '1511267571', '', 'ur'),
(3, '5a252ba1e3999', 'vikas.s@squartech.com', 'aniket@squartech.com', 'Your test has approved. ', '1512385441', 'https://www.adtest.adnacgroup.com/user/remainingtest', 'ur'),
(4, '5a252ba8cb54a', 'vikas.s@squartech.com', 'aniket@squartech.com', 'Your test has approved. ', '1512385448', 'https://www.adtest.adnacgroup.com/user/remainingtest', 'ur'),
(5, '5a252baf4552c', 'vikas.s@squartech.com', 'aniket@squartech.com', 'Your test has approved. ', '1512385455', 'https://www.adtest.adnacgroup.com/user/remainingtest', 'ur'),
(6, '5a45f33cebb00', 'vikas.s@squartech.com', 'debjani@sparkletengineers.com', 'Your test has approved. ', '1514533692', 'https://www.adtest.adnacgroup.com/admin/home', 'ur'),
(7, '5a45f35016a8c', 'vikas.s@squartech.com', 'debjani@sparkletengineers.com', 'Your test has approved. ', '1514533712', 'https://www.adtest.adnacgroup.com/admin/home', 'ur'),
(8, '5a45f356d60e6', 'vikas.s@squartech.com', 'debjani@sparkletengineers.com', 'Your test has approved. ', '1514533718', 'https://www.adtest.adnacgroup.com/admin/home', 'ur'),
(9, '5a45f564c3210', 'debjani@sparkletengineers.com', 'chintan@squartech.com', 'You have assigned test by admin', '1514534244', '#', 'ur'),
(10, '5a460bb21685b', 'debjani@sparkletengineers.com', 'sourav01@outlook.com', 'You have assigned test by admin', '1514539954', '#', 'ur'),
(11, '5a461ef805998', 'sourav01@outlook.com', 'debjani@sparkletengineers.com', 'A user finished test', '1514544888', '#', 'ur'),
(12, '5a4625529df30', 'sourav01@outlook.com', 'debjani@sparkletengineers.com', 'A user finished test', '1514546514', '#', 'ur'),
(13, '5a462ee93c54c', 'sourav01@outlook.com', 'debjani@sparkletengineers.com', 'A user finished test', '1514548969', '#', 'ur'),
(14, '5a50736ee4dd5', 'info@adnacgroup.com', 'contact@squartech.com', 'Your test has approved. ', '1515221870', 'https://www.adtest.adnacgroup.com/admin/home', 'ur'),
(15, '5a50737c7d8b5', 'info@adnacgroup.com', 'contact@squartech.com', 'Your test has approved. ', '1515221884', 'https://www.adtest.adnacgroup.com/admin/home', 'ur'),
(16, '5a507386197b1', 'info@adnacgroup.com', 'contact@squartech.com', 'Your test has approved. ', '1515221894', 'https://www.adtest.adnacgroup.com/admin/home', 'ur'),
(17, '5a50742979b7a', 'contact@squartech.com', 'aniket@squartech.com', 'You have assigned test by admin', '1515222057', '#', 'ur'),
(18, '5a50742979bb8', 'contact@squartech.com', 'karan@squartech.com', 'You have assigned test by admin', '1515222057', '#', 'ur'),
(19, '5a50742979bf1', 'contact@squartech.com', 'vanessa@squartech.com', 'You have assigned test by admin', '1515222057', '#', 'ur'),
(20, '5a50742979c2b', 'contact@squartech.com', 'mahesh@squartech.com', 'You have assigned test by admin', '1515222057', '#', 'ur'),
(21, '5a508c555cac5', 'vanessa@squartech.com', 'contact@squartech.com', 'A user finished test', '1515228245', '#', 'ur'),
(22, '5a508e7c7b80d', 'karan@squartech.com', 'contact@squartech.com', 'A user finished test', '1515228796', '#', 'ur'),
(23, '5a508e7d7f259', 'karan@squartech.com', 'contact@squartech.com', 'A user finished test', '1515228797', '#', 'ur'),
(24, '5a508ebe706ae', 'vanessa@squartech.com', 'contact@squartech.com', 'A user finished test', '1515228862', '#', 'ur'),
(25, '5a508f88392ce', 'mahesh@squartech.com', 'contact@squartech.com', 'A user finished test', '1515229064', '#', 'ur'),
(26, '5a50925e5b1f2', 'karan@squartech.com', 'contact@squartech.com', 'A user finished test', '1515229790', '#', 'ur'),
(27, '5a509298e5249', 'mahesh@squartech.com', 'contact@squartech.com', 'A user finished test', '1515229848', '#', 'ur'),
(28, '5a509479c6e25', 'vanessa@squartech.com', 'contact@squartech.com', 'A user finished test', '1515230329', '#', 'ur'),
(29, '5a509675ca23f', 'contact@squartech.com', 'mahesh@squartech.com', 'You have assigned test by admin', '1515230837', '#', 'ur'),
(30, '5a5099bb155f6', 'mahesh@squartech.com', 'contact@squartech.com', 'A user finished test', '1515231675', '#', 'ur'),
(31, '5a509a558cf25', 'karan@squartech.com', 'contact@squartech.com', 'A user finished test', '1515231829', '#', 'ur');

-- --------------------------------------------------------

--
-- Table structure for table `optionofquestion`
--

CREATE TABLE `optionofquestion` (
  `id` int(100) NOT NULL,
  `questionid` varchar(255) NOT NULL,
  `testid` varchar(255) NOT NULL DEFAULT '321',
  `questionsoption` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optionofquestion`
--

INSERT INTO `optionofquestion` (`id`, `questionid`, `testid`, `questionsoption`) VALUES
(1, '1', '321', 'An interchange of idea and sharing with others'),
(2, '1', '321', 'Quiet thought on my own'),
(3, '2', '321', 'Disciplined about following my prepared agenda'),
(4, '2', '321', 'Flexible and open to whatever comes up'),
(5, '3', '321', 'Discuss a problem I have with his or her behavior'),
(6, '3', '321', 'Dislike telling him unpleasant things'),
(7, '4', '321', 'Structured with clear rules and regulations'),
(8, '4', '321', 'More open-ended and laissez-faire'),
(9, '5', '321', 'A lot of day-to-day interaction'),
(10, '5', '321', 'Only infrequent interaction'),
(11, '6', '321', 'The application of the idea is discussed'),
(12, '6', '321', 'The idea itself'),
(13, '7', '321', 'Frequent differences of opinion breed interesting ...'),
(14, '7', '321', 'Conflict is reduced by avoiding discussion about differences of opinion'),
(15, '8', '321', 'To be well defined and planned out'),
(16, '8', '321', 'To allow for flexible interpretation'),
(17, '9', '321', 'Eating with a group'),
(18, '9', '321', 'Eating alone or with one close colleague'),
(19, '10', '321', 'Collect as much information as possible before starting'),
(20, '10', '321', 'Dive in and rely on my ability to work things out'),
(21, '11', '321', 'Intelligent and reasonable'),
(22, '11', '321', 'Warm and personable'),
(23, '12', '321', 'Plan my workday carefully in advance'),
(24, '12', '321', 'Let the day progress and see how things turn out'),
(25, '13', '321', 'Open'),
(26, '13', '321', 'Closed'),
(27, '14', '321', 'Like to test it carefully before I get excited'),
(28, '14', '321', 'Get excited and want to follow through quickly'),
(29, '15', '321', 'An analytical discussion of the fact'),
(30, '15', '321', 'A discussion of the values involved'),
(31, '16', '321', 'Seen clearly in regular periods'),
(32, '16', '321', 'Stretched over long periods of time'),
(33, '17', '321', 'So that other people notice and admire my clothing'),
(34, '17', '321', 'In a way that blends in with the norm'),
(35, '18', '321', 'Give most weight to the facts accurately'),
(36, '18', '321', 'Explore the full range of possibilities'),
(37, '19', '321', 'Interested in making sure I give them the facts ac...'),
(38, '19', '321', 'More interested in making sure I don&#146;t hurt their feelings'),
(39, '20', '321', 'Provides a lot of structure and organization'),
(40, '20', '321', 'Leaves me to do things in a way which works best for me'),
(41, '21', '321', 'A continuing series of short tasks'),
(42, '21', '321', 'The big picture'),
(43, '22', '321', 'The details'),
(44, '22', '321', 'The big picture'),
(45, '23', '321', 'Reason it through, regardless of my feelings'),
(46, '23', '321', 'Consider my feelings to be very important'),
(47, '24', '321', 'Things are orderly organized and systematic'),
(48, '24', '321', 'There is a creative way of projects, papers and books'),
(49, '25', '321', 'Talk about people'),
(50, '25', '321', 'Talk about ideas'),
(51, '26', '321', 'Practical problems to solve'),
(52, '26', '321', 'Policy Problems to solve'),
(53, '27', '321', 'Think things through'),
(54, '27', '321', 'Trust my gut feeling'),
(55, '28', '321', 'Be continuous and relatively predictable'),
(56, '28', '321', 'Have frequent changes in activities and schedules'),
(57, '29', '321', 'Feel satisfied that I have the opportunity to lead'),
(58, '29', '321', 'Prefer that someone else had the responsibility'),
(59, '30', '321', 'Emphasize what is practical now'),
(60, '30', '321', 'Orient the plan towards future possibilities'),
(61, '31', '321', 'Focus on the facts and figures above all'),
(62, '31', '321', 'Give careful attention to people&#146;s feelings'),
(63, '32', '321', 'A clear statement of what is expected'),
(64, '32', '321', 'To be left to work it out the way I want'),
(65, '33', '321', 'A large group of colleagues at work'),
(66, '33', '321', 'A few colleagues that I know well'),
(67, '34', '321', 'Listen quietly and absorb details'),
(68, '34', '321', 'Anticipate the speakers words and interject'),
(69, '35', '321', 'Remain Firm'),
(70, '35', '321', 'Seek to avoid unpleasantness, anger and disharmony'),
(71, '36', '321', 'Walk around and meet people I may not know well'),
(72, '36', '321', 'Wish that I could remain open to other alternatives'),
(73, '37', '321', 'Walk around and meet people I may not know well'),
(74, '37', '321', 'Hang out with the colleagues I know best'),
(75, '38', '321', 'As a here and now person'),
(76, '38', '321', 'As someone with an orientation towards the future'),
(77, '39', '321', 'Be patient and study the details'),
(78, '39', '321', 'Try to get the general ideas and see how I feel ab...'),
(79, '40', '321', 'Comfortable, predictable and stable'),
(80, '40', '321', 'Flexible and changing'),
(81, '41', '321', 'An energetic team player'),
(82, '41', '321', 'A quiet and thoughtful employee'),
(83, '42', '321', 'The use of real facts from my own experience'),
(84, '42', '321', 'The discussion of ideas and concepts'),
(85, '43', '321', 'Rely heavily on logic'),
(86, '43', '321', 'Look more often to their feelings'),
(87, '44', '321', 'Get impatient and annoyed'),
(88, '44', '321', 'Look for ways to stretch the deadliness'),
(89, '45', '321', 'Participate openly and actively'),
(90, '45', '321', 'Let others take the active role'),
(91, '46', '321', 'Immediately useful ideas'),
(92, '46', '321', 'Ideas with innovative approaches'),
(93, '47', '321', 'Truthful even if I can&#146;t be tactful'),
(94, '47', '321', 'Tactful, even if I can&#146;t tell the truth'),
(95, '48', '321', 'Have a clear ending date when I know they will be ...'),
(96, '48', '321', 'May remain open-ended to ensure that all bases are covered'),
(97, '49', '321', 'Talk it over with number of people before I decide'),
(98, '49', '321', 'Spend most of time working it out in my own head'),
(99, '50', '321', 'Use my experience to work at familiar tasks'),
(100, '50', '321', 'Confront ideas and problems that are new to me'),
(101, '51', '321', 'Defend the side I think is most logical'),
(102, '51', '321', 'Try to create a harmonious atmosphere and solution'),
(103, '52', '321', 'Get to it and complete it as quickly as possible'),
(104, '52', '321', 'Move as slowly as allowable and explore various approaches'),
(105, '53', '321', 'The actual task I am doing day-by-day'),
(106, '53', '321', 'The thoughts I have about my work'),
(107, '54', '321', 'Experimental processes'),
(108, '54', '321', 'Information and abstraction'),
(109, '55', '321', 'Get through it quickly in businesslike manner'),
(110, '55', '321', 'Linger over the sociable interaction'),
(111, '56', '321', 'Activities requiring to reach a conclusion'),
(112, '56', '321', 'Activities that allow me to stay open to my experi...'),
(113, '57', '321', 'Comfortable'),
(114, '57', '321', 'Somewhat ill at ease'),
(115, '58', '321', 'Remember the facts presented'),
(116, '58', '321', 'Remember mostly the concepts presented'),
(117, '59', '321', 'Guide them towards a decision based purely on logics'),
(118, '59', '321', 'Help them explore the values and policies in the s...'),
(119, '60', '321', 'Getting the job done as quickly as possible'),
(120, '60', '321', 'Spending time making sure everybody gets ahead'),
(121, '61', '321', 'Welcome the opportunity to talk to someone'),
(122, '61', '321', 'Prefer to be left alone with my thoughts'),
(123, '62', '321', 'The body of detailed information'),
(124, '62', '321', 'The summary of executive overview'),
(125, '63', '321', 'Remain firm about the correctness of it'),
(126, '63', '321', 'Try to persuade others by appealing to their sense...'),
(127, '64', '321', 'Satisfied that I am organized'),
(128, '64', '321', 'Uncomfortable that I am constrained'),
(129, '65', '321', 'Laugh and think of one to tell'),
(130, '65', '321', 'Enjoy the joke quietly'),
(131, '66', '321', 'Practical'),
(132, '66', '321', 'Imaginative'),
(133, '67', '321', 'Think about problems'),
(134, '67', '321', 'Feel about problems'),
(135, '68', '321', 'Annoyed or otherwise upset at the changes'),
(136, '68', '321', 'Interested in seeing how I will handle the new env...'),
(137, '69', '321', 'Speak out directly when I want to'),
(138, '69', '321', 'Wait and see how things develop before planning'),
(139, '70', '321', 'Write a step by step plan early in the process'),
(140, '70', '321', 'Wait and see how things develop before planning'),
(141, '71', '321', 'Openly and intellectually critical'),
(142, '71', '321', 'Careful in voicing my opinion, especially when I disagree'),
(143, '72', '321', 'Well - organized'),
(144, '72', '321', 'Spontaneous'),
(145, '73', '321', 'Everybody works together in an open, active environment'),
(146, '73', '321', 'People work independently in their own spaces'),
(147, '74', '321', 'My practical skills and nature'),
(148, '74', '321', 'My ability to create new ideas and things'),
(149, '75', '321', 'Analyze the situation logically without considerin...'),
(150, '75', '321', 'Put a strong emphasis on applying my values and feelings to the solution'),
(151, '76', '321', 'Decisive'),
(152, '76', '321', 'Open to having others suggest changes and other views'),
(153, '77', '321', 'Talk directly to people about it'),
(154, '77', '321', 'Put it in writing'),
(155, '78', '321', 'Practical'),
(156, '78', '321', 'Visionary'),
(157, '79', '321', 'Be frank and honest regardless of feelings'),
(158, '79', '321', 'Try to smooth over any problems and avoid hurt feelings'),
(159, '80', '321', 'Try to reach a definite conclusion quickly'),
(160, '80', '321', 'Keep the option open'),
(161, '81', '321', 'A workday filled with variety and interactions with other'),
(162, '81', '321', 'Working without interacting with others for long periods of time'),
(163, '82', '321', 'Stable with little change'),
(164, '82', '321', 'Full of change'),
(165, '83', '321', 'Cool, calm, and objectable'),
(166, '83', '321', 'Warm and feeling'),
(167, '84', '321', 'On which I work quickly to make a short deadline'),
(168, '84', '321', 'That has longer and more flexible deadlines'),
(169, '85', '321', 'Greet the person in a comfortable and friendly manner'),
(170, '85', '321', 'Wait until I see how others react to him or her'),
(171, '86', '321', 'More in the realm of the practical'),
(172, '86', '321', 'More inclined toward the realm of ideas'),
(173, '87', '321', 'Precision and Logic'),
(174, '87', '321', 'Emotion and experience'),
(175, '88', '321', 'Quick decision'),
(176, '88', '321', 'Through review, even at the risk of delaying decisions'),
(177, '89', '321', 'Joining in on a group discussion'),
(178, '89', '321', 'Talking individually with selected people'),
(179, '90', '321', 'Realistic people'),
(180, '90', '321', 'Imaginative people'),
(181, '91', '321', 'Tough-minded'),
(182, '91', '321', 'Warm-hearted'),
(183, '92', '321', 'Structured and laid out well in advance'),
(184, '92', '321', 'Flexible and open to frequent adjustment'),
(185, '93', '321', 'Talkative and easy to know'),
(186, '93', '321', 'Reserved, quiet and harder to know'),
(187, '94', '321', 'A specific plan'),
(188, '94', '321', 'A broad vision'),
(189, '95', '321', 'Telling it like it is'),
(190, '95', '321', 'Telling it in a way that will not offend or hurt others'),
(191, '96', '321', 'Organized'),
(192, '96', '321', 'Flexible'),
(193, '97', '321', 'People and things'),
(194, '97', '321', 'Ideas and things'),
(195, '98', '321', 'Conventional and orthodox'),
(196, '98', '321', 'Original and orthodox'),
(197, '99', '321', 'Tolerance'),
(198, '99', '321', 'Forgiveness'),
(199, '100', '321', 'Making things happen'),
(200, '100', '321', 'Letting things happen'),
(201, '101', '321', 'Less intimate relationships with many people'),
(202, '101', '321', 'Close, intimate relationships with a few people'),
(203, '102', '321', 'Applying current skills'),
(204, '102', '321', 'Learning new skills'),
(205, '103', '321', 'Thinking person'),
(206, '103', '321', 'Feeling person'),
(207, '104', '321', 'Right most of the time'),
(208, '104', '321', 'Open to suggestions'),
(209, '105', '321', 'Blurt it out'),
(210, '105', '321', 'Keep it inside'),
(211, '106', '321', 'Realities'),
(212, '106', '321', 'Possibilities'),
(213, '107', '321', 'Confronting people and issues head on'),
(214, '107', '321', 'Smoothing over conflicts and difficult issues'),
(215, '108', '321', 'The orderly type'),
(216, '108', '321', 'The easy going type'),
(217, '109', '321', 'Listening to others tell me about it'),
(218, '109', '321', 'Reading about it myself'),
(219, '110', '321', 'Incremental and step by step'),
(220, '110', '321', 'Sweeping and dramatic'),
(221, '111', '321', 'Severely punish an employee for unacceptable performance'),
(222, '111', '321', 'Keep and develop an employee who is delivering unacceptable performance'),
(223, '112', '321', 'Right away'),
(224, '112', '321', 'Gradually'),
(225, '113', '321', 'In a group'),
(226, '113', '321', 'Alone'),
(227, '114', '321', 'The practical side of business'),
(228, '114', '321', 'The conceptual side of business'),
(229, '115', '321', 'Critiquing, then perhaps complimenting'),
(230, '115', '321', 'Complimenting, then perhaps critiquing'),
(231, '116', '321', 'Handle deadlines by planning in advance'),
(232, '116', '321', 'Meet deadlines by last minute rush'),
(233, '117', '321', 'Do-Think-do'),
(234, '117', '321', 'Think-does-think'),
(235, '118', '321', 'The details before worry about the full picture'),
(236, '118', '321', 'The full picture before dealing with any details'),
(237, '119', '321', 'Systems'),
(238, '119', '321', 'People'),
(239, '120', '321', 'Sticking to one strategy for too long'),
(240, '120', '321', 'Drifting from one strategy'),
(241, '121', '321', 'Extraverted'),
(242, '121', '321', 'Introverted'),
(243, '122', '321', 'Current performance'),
(244, '122', '321', 'Future potential'),
(245, '123', '321', 'Pointing out their feelings'),
(246, '123', '321', 'Applauding their strivings'),
(247, '124', '321', 'Carefully plan for it'),
(248, '124', '321', 'Boldly invent it'),
(249, '125', '256', 'Always True'),
(250, '126', '256', 'True'),
(251, '127', '256', 'Somewhat True'),
(252, '128', '256', 'Not True'),
(253, '129', '256', 'Not At All True'),
(254, '130', '1456', 'Never Behaved/thought'),
(255, '131', '1456', 'At times but not generally behave this way'),
(256, '132', '1456', 'Often/normally behaved/thought this way'),
(257, '133', '1456', 'Always behaved/thought this way'),
(258, '332', '9875', 'Yes'),
(259, '333', '9875', 'No'),
(260, '443', '743', 'Enemy'),
(261, '443', '743', 'Fear'),
(262, '443', '743', 'Love'),
(263, '443', '743', 'Friend '),
(264, '443', '743', 'Joy'),
(265, '444', '743', 'textbox'),
(266, '445', '743', 'Wings'),
(267, '445', '743', 'Eyes'),
(268, '445', '743', 'Feet'),
(269, '445', '743', 'Nest'),
(270, '445', '743', 'Bill'),
(271, '446', '743', 'Glory'),
(272, '446', '743', 'Disgrace'),
(273, '446', '743', 'Cowardice'),
(274, '446', '743', 'Fear'),
(275, '446', '743', 'Defeat'),
(276, '447', '743', 'Wolf '),
(277, '447', '743', 'Goat '),
(278, '447', '743', 'Pig '),
(279, '447', '743', 'Tiger '),
(280, '447', '743', 'Cat'),
(281, '448', '743', 'A cellar '),
(282, '448', '743', 'Sunlight '),
(283, '448', '743', 'Noise '),
(284, '448', '743', 'Stillness '),
(285, '448', '743', 'Loud'),
(286, '449', '743', 'textbox'),
(287, '450', '743', 'Leaves '),
(288, '450', '743', 'Fruit '),
(289, '450', '743', 'Buds '),
(290, '450', '743', 'Roots '),
(291, '450', '743', 'A Shadow'),
(292, '451', '743', 'Cheap '),
(293, '451', '743', 'Stingy '),
(294, '451', '743', 'Extravagant '),
(295, '451', '743', 'Value '),
(296, '451', '743', 'Rich'),
(297, '452', '743', 'Heavier '),
(298, '452', '743', 'Rarer '),
(299, '452', '743', 'Whiter '),
(300, '452', '743', 'Harder '),
(301, '452', '743', 'Prettier'),
(302, '453', '743', 'Don’t do the impossible \r\n'),
(303, '453', '743', 'Weeping is bad for the eyes \r\n'),
(304, '453', '743', 'Don’t worry over troubles before they come \r\n'),
(305, '453', '743', 'Early birds like worms best \r\n'),
(306, '453', '743', 'Prompt persons often secure advantage over lazy ones\r\n'),
(307, '454', '743', 'Don’t do the impossible \r\n'),
(308, '454', '743', 'Weeping is bad for the eyes \r\n'),
(309, '454', '743', 'Don’t worry over troubles before they come \r\n'),
(310, '454', '743', 'Early birds like worms best \r\n'),
(311, '454', '743', 'It is foolish to fret about things we cant help\r\n'),
(312, '455', '743', 'Don’t do the impossible \r\n'),
(313, '455', '743', 'Weeping is bad for the eyes \r\n'),
(314, '455', '743', 'Don’t worry over troubles before they come \r\n'),
(315, '455', '743', 'Early birds like worms best'),
(316, '455', '743', 'It is foolish to fret about things we cant help\r\n'),
(317, '456', '743', 'Carriage '),
(318, '456', '743', 'Electricity '),
(319, '456', '743', 'A tyre'),
(320, '456', '743', 'Speed '),
(321, '456', '743', 'Glow'),
(322, '457', '743', 'textbox'),
(323, '458', '743', 'A table'),
(324, '458', '743', 'Dishes '),
(325, '458', '743', 'Hunger '),
(326, '458', '743', 'Food '),
(327, '458', '743', 'Water'),
(328, '459', '743', 'Bend '),
(329, '459', '743', 'Shave '),
(330, '459', '743', 'Chop '),
(331, '459', '743', 'Whittle '),
(332, '459', '743', 'Shear'),
(333, '460', '743', 'Often '),
(334, '460', '743', 'Sometimes '),
(335, '460', '743', 'Occasionally '),
(336, '460', '743', 'Always '),
(337, '460', '743', 'Frequently '),
(338, '461', '743', 'Watch '),
(339, '461', '743', 'Warm '),
(340, '461', '743', 'Bulb '),
(341, '461', '743', 'Mercury '),
(342, '461', '743', 'Temperature'),
(343, '462', '743', 'Always '),
(344, '462', '743', 'Usually '),
(345, '462', '743', 'Much '),
(346, '462', '743', 'Rarely '),
(347, '462', '743', 'Never '),
(348, '463', '743', 'textbox'),
(349, '464', '743', 'True'),
(350, '464', '743', 'False'),
(351, '464', '743', 'Not Certain'),
(352, '465', '743', 'An umpire'),
(353, '465', '743', 'Opponents '),
(354, '465', '743', 'Spectators '),
(355, '465', '743', 'Applause '),
(356, '465', '743', 'Victory'),
(357, '466', '743', 'textbox'),
(358, '467', '743', 'Mars '),
(359, '467', '743', 'Sun '),
(360, '467', '743', 'Clouds '),
(361, '467', '743', 'Stars '),
(362, '467', '743', 'Universe'),
(363, '468', '743', 'Always '),
(364, '468', '743', 'Usually '),
(365, '468', '743', 'Much '),
(366, '468', '743', 'Rarely '),
(367, '468', '743', 'Never '),
(368, '469', '743', 'Strong '),
(369, '469', '743', 'Pretty '),
(370, '469', '743', 'Short '),
(371, '469', '743', 'Graceful '),
(372, '469', '743', 'Swift '),
(373, '470', '743', 'Wiser '),
(374, '470', '743', 'Taller '),
(375, '470', '743', 'Stouter '),
(376, '470', '743', 'Older '),
(377, '470', '743', 'More wrinkled'),
(378, '471', '743', 'Frivolities flourishes when authority is absent \r\n'),
(379, '471', '743', 'Unhappy experiences teach us to be careful\r\n'),
(380, '471', '743', 'A thing must be tried before we now its value \r\n'),
(381, '471', '743', 'Small animals never play in the presence of large ones.\r\n'),
(382, '471', '743', 'Children suffer more from heat than grown people\r\n'),
(383, '472', '743', 'Frivolities flourishes when authority is absent \r\n'),
(384, '472', '743', 'A thing must be tried before we now its value \r\n'),
(385, '472', '743', 'A meal is judged by the dessert\r\n'),
(386, '472', '743', 'Small animals never play in the presence of large ones.\r\n'),
(387, '472', '743', 'Children suffer more from heat than grown people\r\n'),
(388, '473', '743', 'A meal is judged by the dessert\r\n'),
(389, '473', '743', 'Unhappy experiences teach us to be careful\r\n'),
(390, '473', '743', 'A thing must be tried before we know its value \r\n'),
(391, '473', '743', ' Small animals never play in the presence of large ones.\r\n'),
(392, '473', '743', 'Children suffer more from heat than grown people\r\n'),
(393, '474', '743', 'Promise \r\n'),
(394, '474', '743', 'Compromise '),
(395, '474', '743', 'Injunction'),
(396, '474', '743', 'Coercion'),
(397, '474', '743', 'Restoration'),
(398, '475', '743', 'Doctor '),
(399, '475', '743', 'Surgery '),
(400, '475', '743', 'Medicine '),
(401, '475', '743', 'Hospital '),
(402, '475', '743', 'Sanitation'),
(403, '476', '743', 'Smuggle '),
(404, '476', '743', 'Steal '),
(405, '476', '743', 'Bribe '),
(406, '476', '743', 'Cheat '),
(407, '476', '743', 'Sell'),
(408, '477', '743', 'textbox'),
(409, '478', '743', 'Faith '),
(410, '478', '743', 'Misery '),
(411, '478', '743', 'Sorrow '),
(412, '478', '743', 'Despair '),
(413, '478', '743', 'Hate'),
(414, '479', '743', 'textbox'),
(415, '480', '743', 'textbox'),
(416, '481', '743', 'Character '),
(417, '481', '743', 'Gossip '),
(418, '481', '743', 'Reputation '),
(419, '481', '743', 'Disposition '),
(420, '481', '743', 'Personality'),
(421, '482', '743', 'textbox'),
(422, '483', '743', 'textbox'),
(423, '484', '743', 'True'),
(424, '484', '743', 'False'),
(425, '484', '743', 'Not Certain'),
(426, '485', '743', 'textbox'),
(427, '486', '743', 'textbox'),
(428, '487', '743', 'textbox'),
(429, '488', '743', 'Wealth '),
(430, '488', '743', 'Dignity '),
(431, '488', '743', 'Wisdom '),
(432, '488', '743', 'Ambition '),
(433, '488', '743', 'Political power'),
(434, '489', '743', 'None '),
(435, '489', '743', 'Some '),
(436, '489', '743', 'Many '),
(437, '489', '743', 'Lose '),
(438, '489', '743', 'More'),
(439, '490', '743', 'Good '),
(440, '490', '743', 'Large '),
(441, '490', '743', 'Red '),
(442, '490', '743', 'Walk '),
(443, '490', '743', 'Thick'),
(444, '491', '743', 'Friendly '),
(445, '491', '743', 'Brave '),
(446, '491', '743', 'Wise '),
(447, '491', '743', 'Cowardly '),
(448, '491', '743', 'Loyal'),
(449, '492', '743', 'True'),
(450, '492', '743', 'False'),
(451, '492', '743', 'Not Certain'),
(452, '493', '743', 'textbox'),
(453, '494', '743', 'Absurd '),
(454, '494', '743', 'Misleading '),
(455, '494', '743', 'Improbable '),
(456, '494', '743', 'Unfair '),
(457, '494', '743', 'Wicked'),
(458, '495', '743', 'Tar '),
(459, '495', '743', 'Snow '),
(460, '495', '743', 'Soot '),
(461, '495', '743', 'Ebony '),
(462, '495', '743', 'Coal'),
(463, '496', '743', 'Circumference '),
(464, '496', '743', 'Sphere '),
(465, '496', '743', 'Corners '),
(466, '496', '743', 'Solid '),
(467, '496', '743', 'Thickness '),
(468, '497', '743', 'OHIO '),
(469, '497', '743', 'SAW '),
(470, '497', '743', 'NOON '),
(471, '497', '743', 'MOTOR '),
(472, '497', '743', 'OTTO'),
(473, '498', '743', 'textbox'),
(474, '499', '743', 'Personality '),
(475, '499', '743', 'Esteem '),
(476, '499', '743', 'Love '),
(477, '499', '743', 'Generosity '),
(478, '499', '743', 'Wealth '),
(479, '500', '743', 'textbox'),
(480, '501', '743', 'Birds '),
(481, '501', '743', 'Whirling '),
(482, '501', '743', 'Walking '),
(483, '501', '743', 'Wings '),
(484, '501', '743', 'Standing'),
(485, '502', '743', 'textbox'),
(486, '503', '743', 'textbox'),
(487, '504', '743', 'textbox'),
(488, '505', '743', 'Democratic '),
(489, '505', '743', 'Radical '),
(490, '505', '743', 'Conservative '),
(491, '505', '743', 'Anarchistic '),
(492, '505', '743', 'Liberal'),
(493, '506', '743', 'textbox'),
(494, '507', '743', 'textbox'),
(495, '508', '743', 'textbox'),
(496, '509', '743', 'textbox'),
(497, '510', '743', 'Solid '),
(498, '510', '743', 'Plane '),
(499, '510', '743', 'Curve '),
(500, '510', '743', 'Point '),
(501, '510', '743', 'String '),
(502, '511', '743', 'Tue'),
(503, '511', '743', 'False'),
(504, '511', '743', 'Not Certain'),
(505, '512', '743', 'textbox'),
(506, '513', '743', 'Influential '),
(507, '513', '743', 'Prejudiced '),
(508, '513', '743', 'Hypocritical '),
(509, '513', '743', 'Decisive '),
(510, '513', '743', 'Impartial'),
(511, '514', '743', 'textbox'),
(512, '515', '743', 'Temperature '),
(513, '515', '743', 'Virus '),
(514, '515', '743', 'Body '),
(515, '515', '743', 'Physiology '),
(516, '515', '743', 'Geography'),
(517, '516', '743', 'Erroneous '),
(518, '516', '743', 'Doubtful '),
(519, '516', '743', 'Ambiguous '),
(520, '516', '743', 'Distorted '),
(521, '516', '743', 'Hypothetical '),
(522, '517', '743', 'textbox'),
(523, '518', '744', '318'),
(524, '518', '744', '228'),
(525, '518', '744', '218'),
(526, '518', '744', '208'),
(527, '518', '744', 'None'),
(528, '519', '744', '430'),
(529, '519', '744', '420'),
(530, '519', '744', '320'),
(531, '519', '744', '410'),
(532, '519', '744', 'None'),
(533, '520', '744', '5443'),
(534, '520', '744', '5343'),
(535, '520', '744', '5233'),
(536, '520', '744', '424'),
(537, '520', '744', 'None'),
(538, '521', '744', '60'),
(539, '521', '744', '70'),
(540, '521', '744', '50'),
(541, '521', '744', '0'),
(542, '521', '744', 'None'),
(543, '522', '744', '780'),
(544, '522', '744', '570'),
(545, '522', '744', '470'),
(546, '522', '744', '230'),
(547, '522', '744', 'None'),
(548, '523', '744', '3222'),
(549, '523', '744', '3332'),
(550, '523', '744', '3722'),
(551, '523', '744', '3422'),
(552, '523', '744', 'None'),
(553, '524', '744', '1/0'),
(554, '524', '744', '11/2'),
(555, '524', '744', '2/4'),
(556, '524', '744', '¼'),
(557, '524', '744', 'None'),
(558, '525', '744', '3'),
(559, '525', '744', '9'),
(560, '525', '744', '4'),
(561, '525', '744', '.9'),
(562, '525', '744', 'None'),
(563, '526', '744', '22'),
(564, '526', '744', '23'),
(565, '526', '744', '550'),
(566, '526', '744', '32'),
(567, '526', '744', 'None'),
(568, '527', '744', '25.89'),
(569, '527', '744', '2.599'),
(570, '527', '744', '.02589'),
(571, '527', '744', '258.9'),
(572, '527', '744', 'None'),
(573, '528', '744', '34.2'),
(574, '528', '744', '24.4'),
(575, '528', '744', '3.44'),
(576, '528', '744', '34.4'),
(577, '528', '744', 'None'),
(578, '529', '744', '150'),
(579, '529', '744', '140'),
(580, '529', '744', '160'),
(581, '529', '744', '250'),
(582, '529', '744', 'None'),
(583, '530', '744', '4/20'),
(584, '530', '744', '16/20'),
(585, '530', '744', '5/17'),
(586, '530', '744', '15/17'),
(587, '530', '744', 'None'),
(588, '531', '744', '5.6'),
(589, '531', '744', '5.006'),
(590, '531', '744', '5.06'),
(591, '531', '744', '0.506'),
(592, '531', '744', 'None'),
(593, '532', '744', '111'),
(594, '532', '744', '101'),
(595, '532', '744', '110'),
(596, '532', '744', '100'),
(597, '532', '744', 'None'),
(598, '533', '744', '.052'),
(599, '533', '744', '50.2'),
(600, '533', '744', '.502'),
(601, '533', '744', '5.02'),
(602, '533', '744', 'None'),
(603, '534', '744', '18'),
(604, '534', '744', '28'),
(605, '534', '744', '38'),
(606, '534', '744', '21'),
(607, '534', '744', 'None'),
(608, '535', '744', '1851'),
(609, '535', '744', '1861'),
(610, '535', '744', '2851'),
(611, '535', '744', '1961'),
(612, '535', '744', 'None'),
(613, '536', '744', '718'),
(614, '536', '744', '618'),
(615, '536', '744', '728'),
(616, '536', '744', '628'),
(617, '536', '744', 'None'),
(618, '537', '744', '14'),
(619, '537', '744', '104'),
(620, '537', '744', '16/1664'),
(621, '537', '744', '1680'),
(622, '537', '744', 'None'),
(623, '538', '744', '3'),
(624, '538', '744', '5'),
(625, '538', '744', '4'),
(626, '538', '744', 'No Errors'),
(627, '539', '744', '5'),
(628, '539', '744', '3'),
(629, '539', '744', '4'),
(630, '539', '744', 'None'),
(631, '540', '744', '3'),
(632, '540', '744', '4'),
(633, '540', '744', '5'),
(634, '540', '744', 'None'),
(635, '541', '744', 'A,B'),
(636, '541', '744', 'A,C'),
(637, '541', '744', 'C,B'),
(638, '541', '744', 'None'),
(639, '542', '744', 'A,C'),
(640, '542', '744', 'A,D'),
(641, '542', '744', 'A,E'),
(642, '542', '744', 'None'),
(643, '543', '744', 'A,E'),
(644, '543', '744', 'B,D'),
(645, '543', '744', 'C,E'),
(646, '543', '744', 'None'),
(647, '544', '744', 'Abbas, Abhay'),
(648, '544', '744', 'Abbas, Ajai'),
(649, '544', '744', 'Abbas, Amar'),
(650, '544', '744', 'Abbas, Ashish'),
(651, '545', '744', 'Bansal, Om Prakash'),
(652, '545', '744', 'Bansal, Om Singh'),
(653, '545', '744', 'Bansal, Prakash Chand'),
(654, '545', '744', 'Bansal, Prakash Singh'),
(655, '546', '744', 'Chadha, Daljit'),
(656, '546', '744', 'Chadha, Devendra'),
(657, '546', '744', 'Chadha, Dinesh'),
(658, '546', '744', 'Chadha, Dhruva'),
(659, '547', '744', 'HYISNG'),
(660, '547', '744', 'HYSING'),
(661, '547', '744', 'HIYNSG'),
(662, '547', '744', 'HIYSNG'),
(663, '548', '744', 'WSGIRH'),
(664, '548', '744', 'WISHRH'),
(665, '548', '744', 'WGISRH'),
(666, '548', '744', 'None'),
(667, '549', '744', 'RINWYG'),
(668, '549', '744', 'RIWNYG'),
(669, '549', '744', 'RISWGY'),
(670, '549', '744', 'GRISWY'),
(671, '550', '744', '176543                    QNOWSR'),
(672, '550', '744', ' 345862                    SYOLOR'),
(673, '550', '744', '651279                    OWQSNP'),
(674, '550', '744', '246735                    RYONSW'),
(675, '551', '744', '463517                   YOSWQN'),
(676, '551', '744', '134659                   QSYNWP'),
(677, '551', '744', '512386                   WQRSNO'),
(678, '551', '744', '157839                   QWNLRP'),
(679, '552', '744', 'SPLNSY                   398724'),
(680, '552', '744', 'WOYSON                564267'),
(681, '552', '744', 'RSRQPW                 232185'),
(682, '552', '744', 'RSONPL                  236798'),
(683, '553', '744', 'Selfless'),
(684, '553', '744', 'Personal'),
(685, '553', '744', 'Altruistic'),
(686, '553', '744', 'Ulterior'),
(687, '553', '744', 'Intrinsic'),
(688, '554', '744', 'Podiatrist'),
(689, '554', '744', 'Pediatrician'),
(690, '554', '744', 'Practitioner'),
(691, '554', '744', 'Pedagogue'),
(692, '554', '744', 'Plagiarist'),
(693, '555', '744', 'Segregated'),
(694, '555', '744', 'Integrated'),
(695, '555', '744', 'Heterogeneous'),
(696, '555', '744', 'Homogeneous'),
(697, '555', '744', 'Congruent'),
(698, '556', '744', 'Box : Zebra'),
(699, '556', '744', 'Paint : Crayon'),
(700, '556', '744', 'Roughness : Smoothness'),
(701, '556', '744', 'Pit : Dot'),
(702, '556', '744', 'Wall : Board'),
(703, '557', '744', 'Bird : Worm'),
(704, '557', '744', 'Dog : Tell'),
(705, '557', '744', 'Trap : Cheese'),
(706, '557', '744', 'Hide : seek'),
(707, '557', '744', 'Lion : Snake'),
(708, '558', '744', 'Ring : Finger'),
(709, '558', '744', 'Stem : Root'),
(710, '558', '744', 'Knob : Door'),
(711, '558', '744', 'Shoe : Foot'),
(712, '558', '744', 'Leaf : Vine'),
(713, '559', '744', 'Dialectical'),
(714, '559', '744', 'Mutable'),
(715, '559', '744', 'Unplanned'),
(716, '559', '744', 'Weird'),
(717, '559', '744', 'Ill-timed'),
(718, '560', '744', 'dilatory'),
(719, '560', '744', 'apocryphal'),
(720, '560', '744', 'astute'),
(721, '560', '744', 'insufficient'),
(722, '560', '744', 'calumnious'),
(723, '561', '744', 'Genuflecting'),
(724, '561', '744', 'Hypothetica'),
(725, '561', '744', 'Spasmodic'),
(726, '561', '744', 'Genuine'),
(727, '561', '744', 'Hypocritical'),
(728, '562', '744', 'heterogeneous'),
(729, '562', '744', 'Motley'),
(730, '562', '744', 'Scrambled'),
(731, '562', '744', 'Different'),
(732, '562', '744', 'Similar'),
(733, '563', '744', 'Argumentation'),
(734, '563', '744', 'Difference'),
(735, '563', '744', 'Endless'),
(736, '563', '744', 'Strange'),
(737, '563', '744', 'Vague'),
(738, '564', '744', 'Verbal'),
(739, '564', '744', 'Indefinite'),
(740, '564', '744', 'Endless'),
(741, '564', '744', 'Strange'),
(742, '564', '744', 'Vague'),
(743, '565', '744', 'Bachelor'),
(744, '565', '744', 'Master'),
(745, '565', '744', 'Mister'),
(746, '566', '744', 'Philology'),
(747, '566', '744', 'Pathology'),
(748, '566', '744', 'Physiology'),
(749, '567', '744', 'Matrimony'),
(750, '567', '744', 'Bigamy'),
(751, '567', '744', 'Polygamy'),
(752, '568', '744', 'To dislocate'),
(753, '568', '744', 'To lose one’s temper'),
(754, '568', '744', 'To take off'),
(755, '568', '744', 'To be air borne'),
(756, '568', '744', 'To be indifferent'),
(757, '569', '744', 'To be lucky'),
(758, '569', '744', 'To win a prize'),
(759, '569', '744', 'To get something free'),
(760, '569', '744', 'To distribute gifts'),
(761, '569', '744', 'Talent for speaking'),
(762, '570', '744', 'To welcome the coming events'),
(763, '570', '744', 'To honour the promising people'),
(764, '570', '744', 'To make salutations to the sun early at sunrise'),
(765, '570', '744', 'To honour a man who is coming into the office'),
(766, '571', '744', 'Is born in Persia'),
(767, '571', '744', 'Has been born in Persia'),
(768, '571', '744', 'Had been born in Persia'),
(769, '571', '744', 'Was born in Persia'),
(770, '572', '744', 'Was it ?'),
(771, '572', '744', 'It is.'),
(772, '572', '744', 'Is it ?'),
(773, '572', '744', 'Isn’t it ?'),
(774, '573', '744', 'Are you all this ?'),
(775, '573', '744', 'Have you being all this time'),
(776, '573', '744', 'Have you been all this time ?'),
(777, '573', '744', 'Were you being all time ?'),
(778, '574', '744', 'A new language'),
(779, '574', '744', 'Technical terminology'),
(780, '574', '744', 'Various occupations and professions'),
(781, '574', '744', 'Scientific undertaking'),
(782, '574', '744', 'Popular science'),
(783, '575', '744', 'Never last long'),
(784, '575', '744', 'Should be confined to scientific field'),
(785, '575', '744', 'Should resemble mathematical formulae'),
(786, '575', '744', 'Are considered artificial speech'),
(787, '575', '744', 'May become part of common speech'),
(788, '576', '744', 'The average man often uses in his own vocabulary what was once technical language not meant for him'),
(789, '576', '744', 'Various professions and occupations often interchange their dialects and jargons'),
(790, '576', '744', 'There is always a clea reut non- technical word that may be substituted for the technical word'),
(791, '576', '744', 'An educated person would be expected to know most technical terms'),
(792, '576', '744', 'Everyone is interested in scientific findings'),
(793, '577', '744', 'Farming'),
(794, '577', '744', 'Government'),
(795, '577', '744', 'Handicrafts'),
(796, '577', '744', 'Fishing'),
(797, '577', '744', 'sports'),
(798, '578', '744', 'A linguist'),
(799, '578', '744', 'An attorney'),
(800, '578', '744', 'A scientist'),
(801, '578', '744', 'A politician'),
(802, '578', '744', 'A physician'),
(803, '579', '744', 'Describe a phenomenon'),
(804, '579', '744', 'Argue a belief'),
(805, '579', '744', 'Propose a solution'),
(806, '579', '744', 'Stimulate action'),
(807, '579', '744', 'Be entertaining'),
(808, '580', '750', 'textbox'),
(809, '581', '750', 'textbox'),
(810, '582', '750', 'textbox'),
(811, '583', '750', 'textbox'),
(812, '584', '750', 'textbox'),
(813, '585', '750', 'textbox'),
(814, '586', '750', 'textbox'),
(815, '587', '750', 'textbox'),
(816, '588', '750', 'textbox'),
(817, '589', '750', 'textbox'),
(818, '590', '750', 'textbox'),
(819, '591', '750', 'textbox'),
(820, '592', '750', 'textbox'),
(821, '593', '750', 'textbox'),
(822, '594', '750', 'textbox'),
(823, '595', '750', 'textbox'),
(824, '596', '750', 'textbox'),
(825, '597', '750', 'textbox'),
(826, '598', '750', 'textbox'),
(827, '599', '750', 'textbox'),
(828, '600', '750', 'textbox'),
(829, '601', '750', 'textbox'),
(830, '602', '750', 'textbox'),
(831, '603', '750', 'textbox'),
(832, '604', '750', 'textbox'),
(833, '605', '750', 'textbox'),
(834, '606', '750', 'textbox'),
(835, '607', '750', 'textbox'),
(836, '608', '750', 'textbox'),
(837, '609', '750', 'textbox'),
(838, '610', '750', 'textbox'),
(839, '611', '750', 'textbox'),
(840, '612', '750', 'textbox'),
(841, '613', '750', 'textbox'),
(842, '614', '750', 'textbox'),
(843, '615', '750', 'textbox'),
(844, '616', '750', 'textbox'),
(845, '617', '750', 'textbox'),
(846, '618', '750', 'textbox'),
(847, '619', '750', 'textbox'),
(848, '620', '750', 'textbox'),
(849, '621', '750', 'Almost Always'),
(850, '621', '750', 'Often'),
(851, '621', '750', 'Rarely'),
(852, '621', '750', 'Almost Never'),
(853, '622', '750', 'Almost Always'),
(854, '622', '750', 'Often'),
(855, '622', '750', 'Rarely'),
(856, '622', '750', 'Almost Never'),
(857, '623', '750', 'Almost Always'),
(858, '623', '750', 'Often'),
(859, '623', '750', 'Rarely'),
(860, '623', '750', 'Almost Never'),
(861, '624', '750', 'Almost Always'),
(862, '624', '750', 'Often'),
(863, '624', '750', 'Rarely'),
(864, '624', '750', 'Almost Never'),
(865, '625', '750', 'Almost Always'),
(866, '625', '750', 'Often'),
(867, '625', '750', 'Rarely'),
(868, '625', '750', 'Almost Never'),
(869, '626', '750', 'Almost Always'),
(870, '626', '750', 'Often'),
(871, '626', '750', 'Rarely'),
(872, '626', '750', 'Almost Never'),
(873, '627', '750', 'Almost Always'),
(874, '627', '750', 'Often'),
(875, '627', '750', 'Rarely'),
(876, '627', '750', 'Almost Never'),
(877, '628', '750', 'Almost Always'),
(878, '628', '750', 'Often'),
(879, '628', '750', 'Rarely'),
(880, '628', '750', 'Almost Never'),
(881, '629', '750', 'Almost Always'),
(882, '629', '750', 'Often'),
(883, '629', '750', 'Rarely'),
(884, '629', '750', 'Almost Never'),
(885, '630', '750', 'Almost Always'),
(886, '630', '750', 'Often'),
(887, '630', '750', 'Rarely'),
(888, '630', '750', 'Almost Never'),
(889, '631', '750', 'Almost Always'),
(890, '631', '750', 'Often'),
(891, '631', '750', 'Rarely'),
(892, '631', '750', 'Almost Never'),
(893, '632', '750', 'Almost Always'),
(894, '632', '750', 'Rarely'),
(895, '632', '750', 'Often'),
(896, '632', '750', 'Almost Never'),
(897, '633', '750', 'Almost Always'),
(898, '633', '750', 'Often'),
(899, '633', '750', 'Rarely'),
(900, '633', '750', 'Almost Never'),
(901, '635', '750', 'Almost Always'),
(902, '635', '750', 'Rarely'),
(903, '635', '750', 'Often'),
(904, '635', '750', 'Almost Never'),
(905, '636', '750', 'Almost Always'),
(906, '636', '750', 'Often'),
(907, '636', '750', 'Rarely'),
(908, '636', '750', 'Almost Never'),
(909, '637', '750', 'Almost Always'),
(910, '637', '750', 'Often'),
(911, '637', '750', 'Rarely'),
(912, '637', '750', 'Almost Never'),
(913, '638', '750', 'Almost Always'),
(914, '638', '750', 'Often'),
(915, '638', '750', 'Rarely'),
(916, '638', '750', 'Almost Never'),
(917, '639', '750', 'Almost Always'),
(918, '639', '750', 'Often'),
(919, '639', '750', 'Rarely'),
(920, '639', '750', 'Almost Never'),
(921, '640', '750', 'Almost Always'),
(922, '640', '750', 'Often'),
(923, '640', '750', 'Rarely'),
(924, '640', '750', 'Almost Never'),
(925, '641', '750', 'Almost Always'),
(926, '641', '750', 'Often'),
(927, '641', '750', 'Rarely'),
(928, '641', '750', 'Almost Never'),
(929, '642', '750', 'Almost Always'),
(930, '642', '750', 'Often'),
(931, '642', '750', 'Rarely'),
(932, '642', '750', 'Almost Never'),
(933, '643', '750', 'Almost Always'),
(934, '643', '750', 'Often'),
(935, '643', '750', 'Rarely'),
(936, '643', '750', 'Almost Never'),
(937, '644', '750', 'Almost Always'),
(938, '644', '750', 'Often'),
(939, '644', '750', 'Rarely'),
(940, '644', '750', 'Almost Never'),
(941, '645', '750', 'Almost Always'),
(942, '645', '750', 'Often'),
(943, '645', '750', 'Rarely'),
(944, '645', '750', 'Almost Never'),
(945, '646', '750', 'Almost Always'),
(946, '646', '750', 'Often'),
(947, '646', '750', 'Rarely'),
(948, '646', '750', 'Almost Never'),
(949, '647', '750', 'Almost Always'),
(950, '647', '750', 'Often'),
(951, '647', '750', 'Rarely'),
(952, '647', '750', 'Almost Never'),
(953, '648', '750', 'Almost Always'),
(954, '648', '750', 'Often'),
(955, '648', '750', 'Rarely'),
(956, '648', '750', 'Almost Never'),
(957, '649', '750', 'Almost Always'),
(958, '649', '750', 'Often'),
(959, '649', '750', 'Rarely'),
(960, '649', '750', 'Almost Never'),
(961, '634', '750', 'Almost Always'),
(962, '634', '750', 'Often'),
(963, '634', '750', 'Rarely'),
(964, '634', '750', 'Almost Never'),
(965, '650', '750', 'Almost Always'),
(966, '650', '750', 'Often'),
(967, '650', '750', 'Rarely'),
(968, '650', '750', 'Almost Never'),
(969, '651', '750', '0-1'),
(970, '651', '750', '1 or 2'),
(971, '651', '750', '3 or 4'),
(972, '651', '750', 'More than 4'),
(973, '652', '750', '0-10'),
(974, '652', '750', '11-20'),
(975, '652', '750', '21-40'),
(976, '652', '750', 'More than 40'),
(977, '653', '750', 'Yes'),
(978, '653', '750', 'No'),
(981, '654', '750', '0-1'),
(982, '654', '750', '1 or 2'),
(983, '654', '750', '3 or 4'),
(984, '654', '750', 'More than 4'),
(985, '655', '750', '0-1'),
(986, '655', '750', '1 or 2'),
(987, '655', '750', '3 or 4'),
(988, '655', '750', 'More than 4'),
(989, '656', '750', '0 to 7 drinks'),
(990, '656', '750', '8 to 14 drinks\r\n'),
(991, '656', '750', '14 to 21 drinks'),
(992, '656', '750', 'More than 21'),
(993, '657', '750', 'Yes'),
(994, '657', '750', 'No'),
(997, '658', '750', '0'),
(998, '658', '750', '1 to 2'),
(999, '658', '750', '3 or4'),
(1000, '658', '750', 'More than 4'),
(1001, '659', '750', 'Yes'),
(1002, '659', '750', 'No'),
(1005, '660', '750', '0'),
(1006, '660', '750', '1 to 2'),
(1007, '660', '750', '3 or 4'),
(1008, '660', '750', 'More than 4'),
(1009, '661', '750', 'Almost Always'),
(1010, '661', '750', 'Often'),
(1011, '661', '750', 'Rarely'),
(1012, '661', '750', 'Almost Never'),
(1013, '662', '750', 'Almost Always'),
(1014, '662', '750', 'Often'),
(1015, '662', '750', 'Rarely'),
(1016, '662', '750', 'Almost Never'),
(1017, '663', '750', 'Almost Always'),
(1018, '663', '750', 'Often'),
(1019, '663', '750', 'Rarely'),
(1020, '663', '750', 'Almost Never'),
(1021, '664', '750', 'Almost Always'),
(1022, '664', '750', 'Often'),
(1023, '664', '750', 'Rarely'),
(1024, '664', '750', 'Almost Never'),
(1025, '665', '750', 'Almost Always'),
(1026, '665', '750', 'Often'),
(1027, '665', '750', 'Rarely'),
(1028, '665', '750', 'Almost Never'),
(1029, '666', '750', 'Almost Always'),
(1030, '666', '750', 'Often'),
(1031, '666', '750', 'Rarely'),
(1032, '666', '750', 'Almost Never'),
(1033, '667', '750', 'Almost Always'),
(1034, '667', '750', 'Often'),
(1035, '667', '750', 'Rarely'),
(1036, '667', '750', 'Almost Never'),
(1037, '668', '750', 'Almost Always'),
(1038, '668', '750', 'Often'),
(1039, '668', '750', 'Rarely'),
(1040, '668', '750', 'Almost Never'),
(1041, '669', '750', 'Almost Always'),
(1042, '669', '750', 'Often'),
(1043, '669', '750', 'Rarely'),
(1044, '669', '750', 'Almost Never'),
(1045, '670', '750', 'Almost Always'),
(1046, '670', '750', 'Often'),
(1047, '670', '750', 'Rarely'),
(1048, '670', '750', 'Almost Never'),
(1049, '671', '750', 'Almost Always'),
(1050, '671', '750', 'Often'),
(1051, '671', '750', 'Rarely'),
(1052, '671', '750', 'Almost Never'),
(1053, '672', '750', 'Almost Always'),
(1054, '672', '750', 'Often'),
(1055, '672', '750', 'Rarely'),
(1056, '672', '750', 'Almost Never'),
(1057, '673', '750', 'Almost Always'),
(1058, '673', '750', 'Often'),
(1059, '673', '750', 'Rarely'),
(1060, '673', '750', 'Almost Never'),
(1061, '674', '750', 'Almost Always'),
(1062, '674', '750', 'Often'),
(1063, '674', '750', 'Rarely'),
(1064, '674', '750', 'Almost Never'),
(1065, '675', '750', 'Almost Always'),
(1066, '675', '750', 'Often'),
(1067, '675', '750', 'Rarely'),
(1068, '675', '750', 'Almost Never'),
(1069, '676', '750', 'Almost Always'),
(1070, '676', '750', 'Often'),
(1071, '676', '750', 'Rarely'),
(1072, '676', '750', 'Almost Never'),
(1073, '677', '750', 'Almost Always'),
(1074, '677', '750', 'Often'),
(1075, '677', '750', 'Rarely'),
(1076, '677', '750', 'Almost Never'),
(1077, '678', '750', 'Almost Always'),
(1078, '678', '750', 'Often'),
(1079, '678', '750', 'Rarely'),
(1080, '678', '750', 'Almost Never'),
(1081, '679', '750', 'Almost Always'),
(1082, '679', '750', 'Often'),
(1083, '679', '750', 'Rarely'),
(1084, '679', '750', 'Almost Never'),
(1085, '680', '750', 'Almost Always'),
(1086, '680', '750', 'Often'),
(1087, '680', '750', 'Rarely'),
(1088, '680', '750', 'Almost Never'),
(1089, '681', '750', 'Almost Always'),
(1090, '681', '750', 'Often'),
(1091, '681', '750', 'Rarely'),
(1092, '681', '750', 'Almost Never'),
(1093, '682', '750', 'Almost Always'),
(1094, '682', '750', 'Often'),
(1095, '682', '750', 'Rarely'),
(1096, '682', '750', 'Almost Never'),
(1097, '683', '750', 'Almost Always'),
(1098, '683', '750', 'Often'),
(1099, '683', '750', 'Rarely'),
(1100, '683', '750', 'Almost Never'),
(1101, '684', '750', 'Almost Always'),
(1102, '684', '750', 'Often'),
(1103, '684', '750', 'Rarely'),
(1104, '684', '750', 'Almost Never'),
(1105, '685', '750', 'Almost Always'),
(1106, '685', '750', 'Often'),
(1107, '685', '750', 'Rarely'),
(1108, '685', '750', 'Almost Never'),
(1109, '686', '750', 'Almost Always'),
(1110, '686', '750', 'Often'),
(1111, '686', '750', 'Rarely'),
(1112, '686', '750', 'Almost Never'),
(1113, '687', '750', 'Almost Always'),
(1114, '687', '750', 'Often'),
(1115, '687', '750', 'Rarely'),
(1116, '687', '750', 'Almost Never'),
(1117, '688', '750', 'Almost Always'),
(1118, '688', '750', 'Often'),
(1119, '688', '750', 'Rarely'),
(1120, '688', '750', 'Almost Never'),
(1121, '689', '750', 'Almost Always'),
(1122, '689', '750', 'Often'),
(1123, '689', '750', 'Rarely'),
(1124, '689', '750', 'Almost Never'),
(1125, '690', '750', 'Almost Always'),
(1126, '690', '750', 'Often'),
(1127, '690', '750', 'Rarely'),
(1128, '690', '750', 'Almost Never'),
(1129, '691', '750', 'Almost Always'),
(1130, '691', '750', 'Often'),
(1131, '691', '750', 'Rarely'),
(1132, '691', '750', 'Almost Never'),
(1133, '692', '750', 'Almost Always'),
(1134, '692', '750', 'Often'),
(1135, '692', '750', 'Rarely'),
(1136, '692', '750', 'Almost Never'),
(1137, '693', '750', 'Almost Always'),
(1138, '693', '750', 'Often'),
(1139, '693', '750', 'Rarely'),
(1140, '693', '750', 'Almost Never'),
(1141, '694', '750', 'Almost Always'),
(1142, '694', '750', 'Often'),
(1143, '694', '750', 'Rarely'),
(1144, '694', '750', 'Almost Never'),
(1145, '695', '750', 'Almost Always'),
(1146, '695', '750', 'Often'),
(1147, '695', '750', 'Rarely'),
(1148, '695', '750', 'Almost Never'),
(1149, '696', '750', 'Almost Always'),
(1150, '696', '750', 'Often'),
(1151, '696', '750', 'Rarely'),
(1152, '696', '750', 'Almost Never'),
(1153, '697', '750', 'Almost Always'),
(1154, '697', '750', 'Often'),
(1155, '697', '750', 'Rarely'),
(1156, '697', '750', 'Almost Never'),
(1157, '698', '750', 'Almost Always'),
(1158, '698', '750', 'Often'),
(1159, '698', '750', 'Rarely'),
(1160, '698', '750', 'Almost Never'),
(1161, '699', '750', 'Almost Always'),
(1162, '699', '750', 'Often'),
(1163, '699', '750', 'Rarely'),
(1164, '699', '750', 'Almost Never'),
(1165, '700', '750', 'Almost Always'),
(1166, '700', '750', 'Often'),
(1167, '700', '750', 'Rarely'),
(1168, '700', '750', 'Almost Never'),
(1169, '701', '750', 'textbox'),
(1170, '702', '750', 'textbox'),
(1171, '703', '750', 'textbox'),
(1172, '704', '750', 'textbox'),
(1173, '705', '750', 'textbox'),
(1174, '706', '750', 'textbox'),
(1175, '708', '750', 'textbox'),
(1176, '709', '750', 'textbox'),
(1177, '710', '750', 'textbox'),
(1178, '711', '750', 'textbox'),
(1179, '712', '750', 'textbox'),
(1180, '713', '750', 'textbox'),
(1181, '714', '750', 'textbox'),
(1182, '707', '750', 'textbox'),
(1183, '718', '741', 'I see my work group as a team on which I function as a member, bringing resources that they need to achieve their goals.'),
(1184, '718', '741', 'One of my priority roles as a supervisor is to see that my people are happy in their work, since good morale is the key to productivity'),
(1185, '718', '741', 'My style is to spell out the details of an assignment as clearly as possible, then step back and let my employees do it with little or on contact with me.'),
(1186, '718', '741', 'When the needs of my employees and the organization are in conflict, my role is to find a compromise solution that satisfies both sides.'),
(1187, '718', '741', 'I avoid a democratic style of supervision because it leads to poor decisions and productivity from workers who lack the necessary experience and resources.'),
(1188, '719', '741', 'I regard authority, not compromise or consultation, as the prime tool of management and the ultimate source of a supervisor\'s power.'),
(1189, '719', '741', 'When I make a decision, I outline the reason behind it so that my employees will see the logic and accept it.'),
(1190, '719', '741', 'I am pretty good at integrating our group goals and standards with the skills and abilities of my people.'),
(1191, '719', '741', 'I rely on precedent and past decisions, since these are a major source of my authority.'),
(1192, '719', '741', 'Sometimes the expectations and standards that come down from above are arbitrary and rigid, and I have to protect my workers from them.'),
(1193, '720', '741', 'On many matters my hands are tied and I act in accordance with the policies, procedures and precedent.'),
(1194, '720', '741', 'I like my employees to “buy in” to the goals and activities that I set for them and to make them feel that the ideas are theirs.'),
(1195, '720', '741', 'Close supervision is important in setting th space, the standard and the importance of work at hand.'),
(1196, '720', '741', 'I avoid imposing my will on my employees; they work out their own goals and do their planning.'),
(1197, '720', '741', 'The key to higher productivity is to help my work team to develop a personal commitment to goals and standards that become theirs through involvement in planning.'),
(1198, '721', '741', 'I sometimes have to serve as a “buffer Zone” between the needs of my employees and the policies and procedures of the organization.'),
(1199, '721', '741', 'The work that I supervise is not inherently enjoyable or challenging, and a system of close controls is necessary to keep people productive.'),
(1200, '721', '741', 'Each of my workers brings special resources and talents to the job and I encourage them to arrange assignment so as to draw on each others strengths.'),
(1201, '721', '741', 'Employees usually go along with the assignment I make, but his requires a flexible style of management on my part.'),
(1202, '721', '741', 'In today\'s business climate there is little latitude for independent action; my role and my worker\'s roles are rather well defined.'),
(1203, '722', '741', 'Its important to me that my employees be involved in planning the work they perform.'),
(1204, '722', '741', 'Many of my decisions I make are actually determined by well-established policies or the authorization of my superiors.'),
(1205, '722', '741', 'While I must exercise control over situations, I try to get the opinions and inputs of my employees and utilize them when appropriate.'),
(1206, '722', '741', 'Manger who involves their workers in making decisions and setting goals are abdicating a major responsibility and inviting problems.'),
(1207, '722', '741', 'Strong discipline and difficult goals set by upper management only serve to frustrate workers and people who supervise them.'),
(1208, '723', '741', 'I like to reward successes in a group setting and address failures in private with just the two of us.'),
(1209, '723', '741', 'One of the reasons my people think of me as a friend is that I avoid correcting them or causing them discomfort.'),
(1210, '723', '741', 'I avoid becoming personally involved in giving employee feedback; they don\'t like appraisals and neither do I.'),
(1211, '723', '741', 'I like to see my workers giving feedback to one another on each other\'s performances.'),
(1212, '723', '741', 'When I give criticism, employees often don\'t know how to take it. They are defensive and offer excuses.'),
(1213, '724', '741', 'My people expect me to make assignments, plan their work and evaluate them. Overseeing their work is my job.'),
(1214, '724', '741', 'I get my people to work on their goals so as to achieve the organization\'s mission and their personal growth needs at the same time.'),
(1215, '724', '741', 'As a supervisor, I know my people and their limitations fairly well, and can give assignments that are appropriate to their capabilities.'),
(1216, '724', '741', 'I let my employees handle their work; they know where to find me when they need me.'),
(1217, '724', '741', 'I prefer a consultative role, supplying ideas and then getting my people to “massage them”until they become their own.'),
(1218, '725', '741', 'I follow a policy of “management by exception’paying less attention to the normal flow of “business as usual”work'),
(1219, '725', '741', 'I am “no call”to my people to help them fight fires when necessary or when plans or goals need to be revised.'),
(1220, '725', '741', 'I expect strict and speedy execution from my people, who know that I run a “tight ship”.');
INSERT INTO `optionofquestion` (`id`, `questionid`, `testid`, `questionsoption`) VALUES
(1221, '725', '741', 'I provide little direction, preferring to function as a support function who creates a climate of high worker satisfaction.'),
(1222, '725', '741', 'The quality of my group\'s output is enhanced by their increased participation in the setting of goals and planning of implementation.'),
(1223, '726', '741', 'I tend to avoid discussing my employees’mistakes or failures with them since people benefit more from encouragement and a pat on the back.'),
(1224, '726', '741', 'I try to avoid subjective evaluation of an employee\'s performance, and favor the objectivity of checklists and formal appraisal forms.'),
(1225, '726', '741', 'I view evaluations as a learning experience for supervisors and subordinates alike, and a part of every project we undertake.'),
(1226, '726', '741', 'In our daily interactions, I give feedback to my people frequently and informally. This is preferable to formal evaluation sessions.'),
(1227, '726', '741', 'In my opinion, most workers do not like to be evaluated.'),
(1228, '727', '741', 'I believe that workers who are going to be directly affected by a decision should participate in making the decision.'),
(1229, '727', '741', 'I am convinced most workers would rather not take on more responsibility or authority. They look to management to plan, direct, and to control the work.'),
(1230, '727', '741', 'It is important that my people accept and like; supervisors who are not liked by their workers are usually less effective.'),
(1231, '727', '741', 'Although my door is always open to my people, I usually have minimum participation in their work unless a crisis comes up.'),
(1232, '727', '741', 'With people less and less interested in their work, we supervisors are hard pressed to get high productivity from our workers.'),
(1233, '836', '751', 'Definitely Not True'),
(1234, '836', '751', 'Sometimes True'),
(1235, '836', '751', 'Generally True'),
(1236, '836', '751', 'Always or very Nearly True');

-- --------------------------------------------------------

--
-- Table structure for table `questionoftest`
--

CREATE TABLE `questionoftest` (
  `id` int(100) NOT NULL,
  `questionid` varchar(100) NOT NULL,
  `testid` varchar(100) NOT NULL,
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionoftest`
--

INSERT INTO `questionoftest` (`id`, `questionid`, `testid`, `question`) VALUES
(1, '1', '321', 'My best ideas at work come from'),
(2, '2', '321', 'When I run a meeting, I am usually'),
(3, '3', '321', 'When handling a subordinate&#146;s development , I...'),
(4, '4', '321', 'I prefer the place where I work to be'),
(5, '5', '321', 'I would rather have a superior whom I have '),
(6, '6', '321', 'I prefer meeting where most time is spend on'),
(7, '7', '321', 'I prefer a work environment where'),
(8, '8', '321', 'I prefer projects at work'),
(9, '9', '321', 'I prefer to spend my lunch hour meeting where most...'),
(10, '10', '321', 'If my boss gives me a difficult task, I usually'),
(11, '11', '321', 'If my boss gives me a difficult task, I usually'),
(12, '12', '321', 'I prefer to'),
(13, '13', '321', 'I more often prefer to keep my office door'),
(14, '14', '321', 'When a new idea flashes into my mind, I usually'),
(15, '15', '321', 'In a team meeting, I prefer to emphasize'),
(16, '16', '321', 'I prefer a job in which the rewards are'),
(17, '17', '321', 'I dress for work'),
(18, '18', '321', 'When I solve the problems, I am more likely to'),
(19, '19', '321', 'If I have to confront colleagues or subordinates, ...'),
(20, '20', '321', 'I would rather have a boss who'),
(21, '21', '321', 'I prefer most of my jobs at work to be'),
(22, '22', '321', 'When I write a report, I usually think first of'),
(23, '23', '321', 'When I have a decision to make at work, I usually'),
(24, '24', '321', 'I prefer my own office to the one in which'),
(25, '25', '321', 'When I have lunch with my colleagues, I would rather'),
(26, '26', '321', 'I would rather have my boss trust me with'),
(27, '27', '321', 'When faced with a decision at work, I usually pref...'),
(28, '28', '321', 'I prefer work, I do everyday to'),
(29, '29', '321', 'When I have to organize and run a meeting, I more often'),
(30, '30', '321', 'If I were asked to prepare a strategic plan, I wou...'),
(31, '31', '321', 'When faced with a  decision at work, I usually'),
(32, '32', '321', 'When, my boss gives me a new project, I usually pr...'),
(33, '33', '321', 'I prefer to have'),
(34, '34', '321', 'In one-on-one meetings, I am more likely to '),
(35, '35', '321', 'If  someone argues with a policy decision I make, ...'),
(36, '36', '321', 'When I have made a tough choice at work, I usually'),
(37, '37', '321', 'When I join a company outing, I usually'),
(38, '38', '321', 'I think my colleagues see me more'),
(39, '39', '321', 'When I have a long and complex report to read, I a...'),
(40, '40', '321', 'I prefer my work environment to be'),
(41, '41', '321', 'My colleagues at work are more likely to describe me as'),
(42, '42', '321', 'When I prepare presentations, I prefer to emphasize'),
(43, '43', '321', 'I prefer to work with colleagues who'),
(44, '44', '321', 'If someone on my team is late with a scheduled task, I usually'),
(45, '45', '321', 'When I attend a training session, I am more likely to'),
(46, '46', '321', 'When colleagues/subordinates present ideas to me, I am usually more interested in'),
(47, '47', '321', 'If I have to deal with colleagues&#146;feelings, I prefer to be '),
(48, '48', '321', 'I prefer projects that'),
(49, '49', '321', 'When I have a decision to make at work, I more often'),
(50, '50', '321', 'I prefer a job where I can'),
(51, '51', '321', 'When I am at a meeting and a difference of opinion gets heated, I usually'),
(52, '52', '321', 'When I get a new project, I usually prefer to'),
(53, '53', '321', 'I am more interested to talk in'),
(54, '54', '321', 'When I attend a training session, I usually prefer'),
(55, '55', '321', 'When I have a meeting with a colleague, I usually'),
(56, '56', '321', 'I would rather be in a job with'),
(57, '57', '321', 'When I ask a colleague for advice or help, I am usually'),
(58, '58', '321', 'In a meeting or when reading a report, I am more likely to'),
(59, '59', '321', 'When colleagues ask my advice about a work matter, I more often'),
(60, '60', '321', 'When I am in a meeting, I am usually more interested in'),
(61, '61', '321', 'When I am interrupted in the middle of a tough job...'),
(62, '62', '321', 'When I read a report, I usually go first to '),
(63, '63', '321', 'When I am putting forward a new idea at work, I more often '),
(64, '64', '321', 'If my boss insists that I schedule my workday, I feel '),
(65, '65', '321', 'When I am at a meeting and someone tells a joke, I... '),
(66, '66', '321', 'In a performance appraisal, it would be more accurate if my boss said I was '),
(67, '67', '321', 'I am usually more interested in how my colleagues '),
(68, '68', '321', 'When a new and unusual policy announcement is issued at work, I am usually '),
(69, '69', '321', 'In a meeting, I usually '),
(70, '70', '321', 'When I start a new project, I usually '),
(71, '71', '321', 'When I hear a presentation from a colleague, I am more likely to be '),
(72, '72', '321', 'If they couldn&#146;t be both, I would rather have colleagues who are '),
(73, '73', '321', 'I would prefer to work in a company where'),
(74, '74', '321', 'I more often seek out work that applies'),
(75, '75', '321', 'When I have to make a decision at work, I am more ...'),
(76, '76', '321', 'When I present my views in a meeting, I am usually'),
(77, '77', '321', 'When I need to pass on an idea or information, I prefer to'),
(78, '78', '321', 'My leadership style is best described as'),
(79, '79', '321', 'In a performance appraisal meeting, I am usually more likely to'),
(80, '80', '321', 'When I am discussing an important issue at a meeting, I usually'),
(81, '81', '321', 'I enjoy more'),
(82, '82', '321', 'I prefer a work situation that is'),
(83, '83', '321', 'My colleagues would be likely to describe my behavior at work as'),
(84, '84', '321', 'At work, I prefer projects'),
(85, '85', '321', 'When I am in a meeting with colleagues and a high-ranking manager or executive I usually'),
(86, '86', '321', 'When I think of my important work assets, they are'),
(87, '87', '321', 'In training session or course, I prefer a trainer ...'),
(88, '88', '321', 'I usually push my colleagues or subordinates for'),
(89, '89', '321', 'In a new group setting, I prefer'),
(90, '90', '321', 'I get along better with'),
(91, '91', '321', 'I am viewed by others as'),
(92, '92', '321', 'I prefer planning to be'),
(93, '93', '321', 'I am viewed more often by others as'),
(94, '94', '321', 'I think about business strategy in terms of'),
(95, '95', '321', 'In communicating with others in the organization, ...'),
(96, '96', '321', 'I enjoy being'),
(97, '97', '321', 'I get more excited about'),
(98, '98', '321', 'I take pride in being'),
(99, '99', '321', 'I look on others mistakes with'),
(100, '100', '321', 'I like to think in terms of'),
(101, '101', '321', 'I enjoy'),
(102, '102', '321', 'I prefer'),
(103, '103', '321', 'I take pride in being a'),
(104, '104', '321', 'I take pride in being'),
(105, '105', '321', 'When struck by a thought or feeling, I tend to'),
(106, '106', '321', 'I like to think in terms of'),
(107, '107', '321', 'I prefer'),
(108, '108', '321', 'I come across to others as'),
(109, '109', '321', 'I prefer getting information by'),
(110, '110', '321', 'I prefer getting a change that is'),
(111, '111', '321', 'I am most likely to'),
(112, '112', '321', 'I come to conclusions'),
(113, '113', '321', 'I prefer working'),
(114, '114', '321', 'I like discussing and evaluating'),
(115, '115', '321', 'I pay more attention to'),
(116, '116', '321', 'I typically'),
(117, '117', '321', 'In the midst of significant external change, I usu...'),
(118, '118', '321', 'I prefer understanding'),
(119, '119', '321', 'I work to improve organization capabilities through'),
(120, '120', '321', 'I am most susceptible to which strategic mistake'),
(121, '121', '321', 'Other people would consider me to be more'),
(122, '122', '321', 'When evaluating business, I like to think in terms...'),
(123, '123', '321', 'I attempt to improve results from people by'),
(124, '124', '321', 'I believe that the best way to prepare for the future is to'),
(125, '125', '256', 'I am aware of what&#146;s happening around me even when I am upset. '),
(126, '126', '256', 'I try to see things the way they are.'),
(127, '127', '256', 'I don&#146;t allow people to take me for granted'),
(128, '128', '256', 'I don&#146;t say &#146;no&#146; to unreasonable demands'),
(129, '129', '256', 'Consistency is very important for me in my life'),
(130, '130', '256', 'I tend to fade out and lose contact with my surroundings'),
(131, '131', '256', 'Idealism has no place in my life'),
(132, '132', '256', 'My refusal is usually quite polite but firm'),
(133, '133', '256', 'Usually I can&#146;t be forced into doing things that I wouldn&#146;t want to.'),
(134, '134', '256', 'I stand up for my rights'),
(135, '135', '256', 'Every individual should be respected irrespective of his status'),
(136, '136', '256', 'I have a sense of what&#146;s achievable and what&#146;s not '),
(137, '137', '256', 'Everybody should have the right to voice his/her views.'),
(138, '138', '256', 'Irrespective of one&#146;s age ,sex , race or religion, he/she should strive for his/her rights.'),
(139, '139', '256', 'I have full control over my emotions'),
(140, '140', '256', 'I do a lot of cool thinking before taking a decision.'),
(141, '141', '256', 'Frustrating situations can be handled best when one is in complete control of his/her emotions'),
(142, '142', '256', 'I care for the feelings of even those who are more acquaintances.'),
(143, '143', '256', 'I can control my anger even when it feels like an upheaval task.'),
(144, '144', '256', 'Keeping a check on my impulses is a sign of emotional maturity.'),
(145, '145', '256', 'Even if I dislike something I don&#146;t get abusive.'),
(146, '146', '256', 'I am deeply involved with others&#146; feelings.'),
(147, '147', '256', 'I have an urge to help people in need.'),
(148, '148', '256', 'Patience can work wonders in controlling impulsiveness.'),
(149, '149', '256', 'I avoid hurting others&#146; feelings'),
(150, '150', '1456', 'I like to be systematic and orderly.'),
(151, '151', '1456', 'I often feel guilty because I have not been able to achieve enough.'),
(152, '152', '1456', 'I dont like it when people break rules.'),
(153, '153', '1456', 'I want to make the world a better place.'),
(154, '154', '1456', 'I hold on my anger for a long time.'),
(155, '155', '1456', 'When I am jealous I turn fearful and competitive.'),
(156, '156', '1456', 'I tend to see things in terms of right or wrong , black or white.'),
(157, '157', '1456', 'I analyze major purchases very thoroughly before I actually purchase.'),
(158, '158', '1456', 'I keep worrying all the time.'),
(159, '159', '1456', 'I like to make every detail perfect.'),
(160, '160', '1456', 'I keep very high expectations from others.'),
(161, '161', '1456', 'I am very hard working and I want others should appreciate my work.'),
(162, '162', '1456', 'I think I need no relaxation.'),
(163, '163', '1456', 'For me, relationship is most important thing.'),
(164, '164', '1456', 'It is difficult for me to ask from anybody for what I need.'),
(165, '165', '1456', 'I want intimacy very much but at the same time I am afraid to be intimate with anyone.'),
(166, '166', '1456', 'It is difficult for me to remain indifferent to criticisms'),
(167, '167', '1456', 'I try to be sensitive and understanding as far as possible with others.'),
(168, '168', '1456', 'When I am alone I am very clear about my needs but in the presence of others I get confused.'),
(169, '169', '1456', 'I don&apos;t want to show my dependence on others.'),
(170, '170', '1456', 'Sometimes I feel very lonely.'),
(171, '171', '1456', 'If I don\'t get the closeness I need, I feel sad, hurt and ignored.'),
(172, '172', '1456', 'Sometimes I feel that in taking care of everyone else leaves me physically and emotionally exhausted.'),
(173, '173', '1456', 'I often figure out what others would like in a person, then act that way.'),
(174, '174', '1456', 'Many people believe I am overly emotional.'),
(175, '175', '256', 'My emotions are visible only when it is absolutely required.'),
(176, '176', '256', 'I communicate my views clearly to my peers, superiors and subordinates.'),
(177, '177', '256', 'I can be flexible when it comes to team development.'),
(178, '178', '256', 'People can very well understand what I communicate.'),
(179, '179', '256', 'I voice my views openly.'),
(180, '180', '256', 'I believe that &#34;hope should never die&#34;.'),
(181, '181', '256', 'I will support a joint effort for problem solving.'),
(182, '182', '256', 'I believe that open and clear communication is a function of emotional maturity.'),
(183, '183', '256', 'Even in the worst situation I remain a positive thinker.'),
(184, '184', '256', 'I communicate fearlessly.'),
(185, '185', '256', 'I am sure of myself whenever I have to take an initiative. '),
(186, '186', '256', 'I go by my convictions even if I am discouraged by people around me.'),
(187, '187', '256', 'People have found it difficult to discourage me.'),
(188, '188', '256', 'I am confident of handling upsetting situations.'),
(189, '189', '256', 'Criticism&#146;s don&#146;t deter me.'),
(190, '190', '256', 'I listen to people carefully.'),
(191, '191', '256', 'I see an opportunity in every calamity.'),
(192, '192', '256', 'I am aware of my needs.'),
(193, '193', '256', 'I am fond of generating new ideas.'),
(194, '194', '256', 'I am sure of what I want.'),
(195, '195', '256', 'When I&#146;m upset , I am fully aware of the reason for it.'),
(196, '196', '256', 'Most of my ideas and suggestions are accepted by people around me.'),
(197, '197', '256', 'I know my strengths and weaknesses.'),
(198, '198', '256', 'I am aware of not just my conscious desires but also my unconscious desire.'),
(199, '199', '256', 'I have a realistic view of my abilities.'),
(200, '200', '256', 'I would prefer to continue taking risky steps even if I have failed in such actions previously.'),
(201, '201', '256', 'I am conscious of what&#146;s happening to me even when i am upset.'),
(202, '202', '256', 'I go for realistic ideas.'),
(203, '203', '256', 'New ideas and solutions seem exciting to me.'),
(204, '204', '256', 'I have the ability to define a concept in a new way.'),
(205, '205', '256', 'I am adventurous.'),
(206, '206', '256', 'When faced with a problem, I try new ways of problem solving.'),
(207, '207', '256', 'I am not worried about the consequences of doing something new.'),
(208, '208', '256', 'I take a chance with new ideas even if there is a risk of failing in it.'),
(209, '209', '256', 'I take it in my stride even if the consequence of starting something new is harmful to me.'),
(210, '210', '256', 'I believe that even if an idea is new, one should take a chance.'),
(211, '211', '256', 'A lot of thinking goes into my work.'),
(212, '212', '256', 'I am analytical in my approach.'),
(213, '213', '256', 'I don&#146;t give up easily, I probe and probe and probe until I get to the root of an issue.'),
(214, '214', '256', 'I have a clear understanding of what I want.'),
(215, '215', '256', 'I look at all possibilities before deciding.'),
(216, '216', '256', 'I accept justified criticism even from those who are against me.'),
(217, '217', '256', 'I am friendly with people.'),
(218, '218', '256', 'I can forget and forgive to maintain relationships.'),
(219, '219', '256', 'I feel lonely even when I am with people.'),
(220, '220', '256', 'I prefer activities that involve helping and developing others.'),
(221, '221', '256', 'I convey a sense of respect for people around me.'),
(222, '222', '256', 'I try to learn from others.'),
(223, '223', '256', 'Personal relationships mean a lot to me.'),
(224, '224', '256', 'I prefer organized work.'),
(225, '225', '256', 'I often venture out into unknown areas on my own.'),
(226, '226', '256', 'I am enthusiastic about most things.'),
(227, '227', '256', 'It gives me a thrill to do new things.'),
(228, '228', '256', 'I prefer activities that allow creative expression.'),
(229, '229', '256', 'I am so engrossed with my artistic pursuits that I hardly bother about the way I look.'),
(230, '230', '256', 'People who are ready to take the plunge should be appreciated.'),
(231, '231', '256', 'I express my emotions through my creativity.'),
(232, '232', '256', 'I indulge in wild Imaginations.'),
(233, '233', '256', 'I often get impulsive.'),
(234, '234', '256', 'Initiative takers are highly motivated individuals.'),
(235, '235', '256', 'I enjoy social gatherings.'),
(236, '236', '256', 'I have difficulty in making appropriate remarks in group conversations.'),
(237, '237', '256', 'Very often , I have difficulty thinking clearly.'),
(238, '238', '256', 'I have experienced lack of real love and affection at home.'),
(239, '239', '256', 'I often feel like running away from home.'),
(240, '240', '1456', 'It is difficult for me to express my problems.'),
(241, '241', '1456', 'I am almost always busy.'),
(242, '242', '1456', 'I don&apos;t mind if I am asked to work overtime.'),
(243, '243', '1456', 'I have positive attitude.'),
(244, '244', '1456', 'Until I complete my job, I keep working with full speed.'),
(245, '245', '1456', 'It is important for people to realize their full potential.'),
(246, '246', '1456', 'I do not allow my illness to come in my way when I am doing something.'),
(247, '247', '1456', 'I hate to see jobs incomplete.'),
(248, '248', '1456', 'I can&apos;t understand people get bored out of idleness because I always have something to do.'),
(249, '249', '1456', 'I work very hard to take off and provide time for my family.'),
(250, '250', '1456', 'I like identifying with competent groups or important people.'),
(251, '251', '1456', 'I generally feel pretty good about myself.'),
(252, '252', '1456', 'People often expect me to take charges/to lead.'),
(253, '253', '1456', 'I like to be seen as an important person.'),
(254, '254', '1456', 'It is important for me that others should understand me.'),
(255, '255', '1456', 'My friends enjoy my warmth and my different way of looking at life.'),
(256, '256', '1456', 'When I become depressed I become non-functional.'),
(257, '257', '1456', 'I am very sensitive to critical remarks and feel hurt at the tiniest slight.'),
(258, '258', '1456', 'I get emotionally upset when I read upsetting stories in newspaper.'),
(259, '259', '1456', 'My ideals are very important to me.'),
(260, '260', '1456', 'I cry easily, beauty, love, sorrow and pain touch me fast.'),
(261, '261', '1456', 'I often feel that I am missing something that others have.'),
(262, '262', '1456', 'I live in the past and in the future more than in present day reality.'),
(263, '263', '1456', 'I am more concerned about my negative qualities than those of my positive qualities.'),
(264, '264', '1456', 'I am always searching for my true self.'),
(265, '265', '1456', 'Sometimes even though I am with my friends I feel isolated and lonely.'),
(266, '266', '1456', 'I like to be complimented.'),
(267, '267', '1456', 'I prefer to learn from observing or reading than by actually doing /experiencing myself.'),
(268, '268', '1456', 'I cannot express my feelings spontaneously.'),
(269, '269', '1456', 'When I am deeply involved in something interesting to me I would like to be left alone.'),
(270, '270', '1456', 'I am able to experience my feelings more deeply when I am alone.'),
(271, '271', '1456', 'I am sensitive to criticism and judgment but I try to hide it.'),
(272, '272', '1456', 'I prefer to have an independent approach but avoid confrontation.'),
(273, '273', '1456', ' Like to associate with others who have expertise in my field.'),
(274, '274', '1456', 'When I feel socially uncomfortable, I often wish I could disappear.'),
(275, '275', '1456', 'I am often hesitant to be assertive or aggressive.'),
(276, '276', '1456', 'I don&apos;t like to be in the company of people for long time.'),
(277, '277', '1456', 'I feel that I am different from most people.'),
(278, '278', '1456', 'Acting calm is a defense it makes me feel stronger.'),
(279, '279', '1456', 'I take life realistically.'),
(280, '280', '1456', 'I like to learn about my subject in depth.'),
(281, '281', '1456', 'I am always cautious for any danger.'),
(282, '282', '1456', 'I take things too seriously'),
(283, '283', '1456', 'I keep thinking that something may go wrong.'),
(284, '284', '1456', 'I usually take criticism as an attack on me.'),
(285, '285', '1456', 'I generally go to extremes, for example, either I follow rules strictly or I break them.'),
(286, '286', '1456', 'I keep testing my relationship.'),
(287, '287', '1456', 'When people try to manipulate me with flattery, I readily understand.'),
(288, '288', '1456', 'I like predictability.'),
(289, '289', '1456', 'I have damaged my own success.'),
(290, '290', '1456', 'I like direct and honest people.'),
(291, '291', '1456', 'I like being responsible and hardworking.'),
(292, '292', '1456', 'I do not want others to judge me for my anxiety.'),
(293, '293', '1456', 'I am busy and energetic and never feel bored if I have freedom to do what I want to do.'),
(294, '294', '1456', 'I am not expert in any one thing but I can do many things well.'),
(295, '295', '1456', 'My style is to fluctuate from one task to another and I like to keep moving.'),
(296, '296', '1456', 'I can recover from grievances faster than others.'),
(297, '297', '1456', 'I like myself and I am good to myself.'),
(298, '298', '1456', 'I like people and they usually like me.'),
(299, '299', '1456', 'I usually manage to get what I want.'),
(300, '300', '1456', 'I value quick intelligent humor.'),
(301, '301', '1456', 'I am idealistic. I want to contribute something to the world.'),
(302, '302', '1456', 'I fluctuate between commitment and my freedom.'),
(303, '303', '1456', 'When people are unhappy I usually try to cheer them up by helping them to see the bright side of life.'),
(304, '304', '1456', 'I love excitement and travel.'),
(305, '305', '1456', 'I can make great sacrifices to help people.'),
(306, '306', '1456', 'I can be assertive and aggressive when I need to be.'),
(307, '307', '1456', 'I cannot tolerate anybody using and manipulating me.'),
(308, '308', '1456', 'I value being direct and honest.'),
(309, '309', '1456', 'I am an individualist and dislike following traditional approach.'),
(310, '310', '1456', 'I respect people who assert for their right.'),
(311, '311', '1456', 'I will go to any lengths to protect those I love.'),
(312, '312', '1456', 'I fight for the right cause.'),
(313, '313', '1456', 'It is difficult for me to make decisions.'),
(314, '314', '1456', 'Self-reliance and independence are important to me.'),
(315, '315', '1456', 'When I join a new group I know immediately who is most powerful person.'),
(316, '316', '1456', 'I like excitement and stimulating events.'),
(317, '317', '1456', 'I am sensitive and loving when I really trust someone.'),
(318, '318', '1456', 'I don\'t like those people who are overly nice and flattering with me.'),
(319, '319', '1456', 'It is difficult for me to make choice between options because I can see positive and negative aspects in every decision I make.'),
(320, '320', '1456', 'It is sometimes hard for me to know what I want when I am with other people.'),
(321, '321', '1456', 'Others see me as peaceful but inside I often feel anxious.'),
(322, '322', '1456', 'I sometimes do little unimportant things instead of what is immediately important for me to do.'),
(323, '323', '1456', 'I usually prefer walking away from disagreement rather than trying to make someone uncomfortable.'),
(324, '324', '1456', 'I tend to postpone things until the last minute but ultimately I get them done.'),
(325, '325', '1456', 'I like to be calm and unhurried but I over extend myself.'),
(326, '326', '1456', 'I get tough minded if I am forced to do certain thing.'),
(327, '327', '1456', 'Sometimes I feel shy and unsure of myself.'),
(328, '328', '1456', 'I enjoy just hanging around my friends.'),
(329, '329', '1456', 'I am very sensitive about being judged and take criticisms personally.'),
(330, '330', '1456', 'I cannot get rid of things easily.'),
(331, '331', '1456', 'It is difficult for me to start doing anything but once started I can keep moving.'),
(332, '332', '9875', 'I cope well with pressure inherent (natural) in my job'),
(333, '333', '9875', 'My stand on important issues of principle is clear to me'),
(334, '334', '9875', 'When important decisions of my life must be made , I act decisively.'),
(335, '335', '9875', 'I put considerable effort into developing myself.'),
(336, '336', '9875', 'I am able to resolve problems effectively.'),
(337, '337', '9875', 'I often experiment and try new ideas.'),
(338, '338', '9875', 'My views are usually taken into account by my colleagues and I often affect their decision\r\nmaking.'),
(339, '339', '9875', 'I understand the principles that underlie my approach to managing others.'),
(340, '340', '9875', 'I find little difficulty in ensuring that my subordinates perform effectively.'),
(341, '341', '9875', 'I consider myself to be a good trainer of my subordinates.'),
(342, '342', '9875', 'I chair or lead meetings well.'),
(343, '343', '9875', 'I take care of my physical health.'),
(344, '344', '9875', 'I sometimes ask other people to comment on my basic approach to life and work.'),
(345, '345', '9875', 'If asked, I would be able to describe what I want to do with my life.'),
(346, '346', '9875', 'I have considerable potential for learning and development.'),
(347, '347', '9875', 'My approach to problem solving is systemic.'),
(348, '348', '9875', 'You could describe me as a person who enjoys change.'),
(349, '349', '9875', 'I usually influence other people successfully.'),
(350, '350', '9875', 'I believe my management style is appropriate.'),
(351, '351', '9875', 'I have the full support of my subordinates.'),
(352, '352', '9875', 'I put considerable energy into the training and development of my subordinates.'),
(353, '353', '9875', 'I believe that techniques for developing effective groups are important to my effectiveness.'),
(354, '354', '9875', 'I am prepared to be unpopular when unnecessary.'),
(355, '355', '9875', 'I rarely take the easy option rather than doing that which I know to be right.'),
(356, '356', '9875', 'My work and personal goal are largely complementary.'),
(357, '357', '9875', 'My work life is often exciting.'),
(358, '358', '9875', 'I regularly review my work objectives.'),
(359, '359', '9875', 'It seems to me that many other people are less creative than I am..'),
(360, '360', '9875', 'I usually make a good first impression.'),
(361, '361', '9875', 'I initiate discussion and seek feedback concerning my subordinates.'),
(362, '362', '9875', 'I set sufficient time aside to review the developmental needs of my subordinates.'),
(363, '363', '9875', 'I am good at building positive relationships with my subordinates.'),
(364, '364', '9875', 'I understand the principles underlying effective team development.'),
(365, '365', '9875', 'I manage time effectively.'),
(366, '366', '9875', 'I frequently stand firm on matters of principle.'),
(367, '367', '9875', 'Whenever possible I try to measure my achievements objectively.'),
(368, '368', '9875', 'I often seek out new experiences.'),
(369, '369', '9875', 'I handle complex information with competence and clarity.'),
(370, '370', '9875', 'I am prepared to go through a period of uncertainty in order to try a new idea.'),
(371, '371', '9875', 'I would describe myself as assertive.'),
(372, '372', '9875', 'I believe it is possible to change the attitudes people have towards their work.'),
(373, '373', '9875', 'My subordinates make a maximum contribution to the organization.'),
(374, '374', '9875', 'I regularly appraise the performance of my subordinates.'),
(375, '375', '9875', 'I work to build open and trusting climates in work groups.'),
(376, '376', '9875', 'My private life is not adversely affected by my job.'),
(377, '377', '9875', 'I rarely behave in ways contrary to my beliefs.'),
(378, '378', '9875', 'My job makes an important contribution to my performance or ability.'),
(379, '379', '9875', 'I regularly seek feedback from others about my enjoyment of life.'),
(380, '380', '9875', 'I am a good planner.'),
(381, '381', '9875', 'I do not loose heart and give up when solutions cannot be found readily.'),
(382, '382', '9875', 'It is relatively easy for me to create rapport with others.'),
(383, '383', '9875', 'I understand what motivates people to high performance.'),
(384, '384', '9875', 'I delegate responsibility effectively.'),
(385, '385', '9875', 'I am able and willing to give personal feedback to my colleagues and subordinates.'),
(386, '386', '9875', 'Relationships between the work team I lead and other teams in the organization are healthy and\r\nco-operative.'),
(387, '387', '9875', 'I rarely allow my work to exhaust me.'),
(388, '388', '9875', 'I fundamentally question my values from time to time.'),
(389, '389', '9875', 'A sense of achievement is important to me.'),
(390, '390', '9875', 'I enjoy challenge.'),
(391, '391', '9875', 'I review my progress and performance regularly.'),
(392, '392', '9875', 'I am self – confident.'),
(393, '393', '9875', 'I can generally influence the behavior of others.'),
(394, '394', '9875', 'When it comes to managing people, I question the older established ideas.'),
(395, '395', '9875', 'I reward the effective performance of my subordinates.'),
(396, '396', '9875', 'I believe it is an essential part of manager’s job to counsel subordinates.'),
(397, '397', '9875', 'I believe managers need not be leaders of their teams on all occasions.'),
(398, '398', '9875', 'I balance my eating and drinking in the best interest of my health.'),
(399, '399', '9875', 'I almost act in ways , which are consistent with my personal beliefs.'),
(400, '400', '9875', 'I have a good understanding with my colleagues at work.'),
(401, '401', '9875', 'I often think about what is preventing me from becoming more effective and act on my\r\nconclusions.'),
(402, '402', '9875', 'I consciously use other people to help me solve problems.'),
(403, '403', '9875', 'I can manage highly innovative people.'),
(404, '404', '9875', 'I usually perform well at meetings.'),
(405, '405', '9875', 'I manage in different ways to motivate the people of my team.'),
(406, '406', '9875', 'I rarely have real difficulty in dealing with my subordinates.'),
(407, '407', '9875', 'I do not allow opportunities for the development of my subordinates to pass off.'),
(408, '408', '9875', 'I ensure that people I manage clearly understand the objectives of our group.'),
(409, '409', '9875', 'I generally feel energetic and lively.'),
(410, '410', '9875', 'I have explored how my upbringing has affected my beliefs.'),
(411, '411', '9875', 'I have an identifiable career plan.'),
(412, '412', '9875', 'I refuse to give up when things are not going well.'),
(413, '413', '9875', 'I feel confident about leading group problem-solving sessions.'),
(414, '414', '9875', 'Generating ideas is not a problem for me.'),
(415, '415', '9875', 'I practice what I preach.'),
(416, '416', '9875', 'I believe subordinates should question management decisions.'),
(417, '417', '9875', 'I put sufficient effort into defining the role and objectives of my subordinates.'),
(418, '418', '9875', 'My subordinates are developing the skills that they need.'),
(419, '419', '9875', 'I have the skills required to build an effective work team.'),
(420, '420', '9875', 'My friends would say that I look after my own well being.'),
(421, '421', '9875', 'I am willing to discuss my personal beliefs with others.'),
(422, '422', '9875', 'I discuss my long term aims with others.'),
(423, '423', '9875', 'I could be accurately described as open and flexible.'),
(424, '424', '9875', 'In general, I adopt a methodical approach to problem solving.'),
(425, '425', '9875', 'When I make an error, I put the matter right without becoming upset.'),
(426, '426', '9875', 'I am a good listener.'),
(427, '427', '9875', 'I effectively delegate work to others.'),
(428, '428', '9875', 'If I were in a tight spot, I am confident that I would receive full support from those I manage.'),
(429, '429', '9875', 'I am good at counseling others.'),
(430, '430', '9875', 'I constantly try to improve the contribution of my subordinates.'),
(431, '431', '9875', 'I find ways to resolve my emotional difficulties.'),
(432, '432', '9875', 'I have compared my values with those of the organizations.'),
(433, '433', '9875', 'I usually achieve my personal ambitions.'),
(434, '434', '9875', 'I continue to develop and stretch myself.'),
(435, '435', '9875', 'I do not have more or bigger problems today than I had a year ago.'),
(436, '436', '9875', 'At times I value unconventional behavior at work.'),
(438, '438', '9875', 'People take my views seriously.'),
(439, '439', '9875', 'I believe the methods I use to manage others are effective.'),
(440, '440', '9875', 'My subordinates have a high respect for me as a manager.'),
(441, '441', '9875', 'I think it is important for someone else to be capable of doing my job.'),
(442, '442', '9875', 'I believe that teams can often achieve much more that individuals working alone.'),
(443, '443', '743', 'The opposite of hate is ?'),
(444, '444', '743', 'If 3 pencils costs 5 Rupees, how many pencils can be bought for 50 rupees ?'),
(445, '445', '743', 'A bird does not always have ?'),
(446, '446', '743', 'The opposite of honour is ?'),
(447, '447', '743', 'A fox most resembles a ?'),
(448, '448', '743', 'Quiet is related to sound in the same way the darkness is related to ?'),
(449, '449', '743', 'A party consisted of a man, his wife , his two sons and their wives, and four children, in each sons family. How many were there in a party? Type your answer.\r\n'),
(450, '450', '743', 'A tree always has ?'),
(451, '451', '743', 'The opposite of economical is ?'),
(452, '452', '743', 'Silver is more costly than iron because it is ?'),
(453, '453', '743', 'Which one of the six statements below tells the meaning of the following proverb?<br> “ The early\r\nbird catches the worm” ?'),
(454, '454', '743', 'Which statement above tells the meaning of this proverb “ Don’t cry over spilled milk” ?'),
(455, '455', '743', 'Which statement above tells the meaning of this proverb “ Don’t cross a bridge Till you get to\r\nit”?'),
(456, '456', '743', 'An electric light is related to a candle as an automobile is to ?'),
(457, '457', '743', 'If a boy can run at the rate of 6 feet in ¼ of a second , how many feet can he run in 10 seconds ?\r\nType your answer.'),
(458, '458', '743', 'A meal always involves ?'),
(459, '459', '743', 'Of the five words below , four are alike in a certain way. Which is the one not like the other 4 ?'),
(460, '460', '743', 'The opposite of never is ?'),
(461, '461', '743', 'A clock is related to time as the thermometer is to ?'),
(462, '462', '743', 'Which word makes the sentence almost true ? Men are ____________ shorter than their wives.'),
(463, '463', '743', 'One number is wrong in the following series , what should the correct number be?<br>4  2  5  3  6  4  7  5  6  9  __'),
(464, '464', '743', 'If the first two statement are true , the third is<br> All members of this club are Republicans.<br> \r\nSmith is not a Republican. <br>\r\nSmith is a member of this club.'),
(465, '465', '743', 'A contest always has?'),
(466, '466', '743', 'Which number in this series appears a second time nearest the beginning?<br>\r\n4  5  3  7  8  0  9  5  9  8  8  6  5  4  7  3 \r\n'),
(467, '467', '743', 'The moon is related to the earth as the earth is to'),
(468, '468', '743', 'Which word makes the truest sentence ? Fathers are ___________ wiser than their sons.'),
(469, '469', '743', 'The opposite of awkward is ?'),
(470, '470', '743', 'A mother is always ____________ than her daughter ?'),
(471, '471', '743', 'Which one of the six statements below tells the meaning of the following proverb ? “ The burnt child dreads the fire”'),
(472, '472', '743', 'Which one of the six statements below tells the meaning of the following proverb ? “ When the cat is away the mice will play”\r\n'),
(473, '473', '743', 'Which one of the six statements below tells the meaning of the following proverb ? “ The proof of the pudding is in the eating” \r\n'),
(474, '474', '743', 'If the settlement of a difference is made by mutual concession, it is called \r\n'),
(475, '475', '743', 'What is related to disease as carefulness is to accident \r\n'),
(476, '476', '743', 'Of the five things below , four are alike in a certain way. Which is the one not like the other four?\r\n'),
(477, '477', '743', 'If 10 boxes full of apples weight 400 pounds , and each box when empty weighs 4 pounds , how many pounds do all the apples weigh? Type your answer.\r\n'),
(478, '478', '743', 'The opposite of hope is ?'),
(479, '479', '743', 'If all the odd – numbered letters in the alphabet were crossed out , what would be the 10th letter not crossed out? Type your answer.\r\nA B C D E F G H I J K L M N O P Q R S T U V W X Y Z'),
(480, '480', '743', 'What letter in the word SUPERFLUOUS is the same number in the word  ( counting from the beginning ) as it is in the alphabet? Type your answer.\r\n'),
(481, '481', '743', 'What people say about a person constitutes his _____________________'),
(482, '482', '743', 'If two and a half yards of cloth costs 30 cents , how many cents will 10 yards cost?'),
(483, '483', '743', 'If the following words were arranged to make a good sentence , with what letter would be the second word of the sentence begin? Type only the second word.\r\nSame means big large the as\r\n'),
(484, '484', '743', 'If the first two statements are true , the third is ?\r\nRahul is older than Manoj\r\nKaran is older than Rahul\r\nManoj is younger than Karan '),
(485, '485', '743', ' Suppose the first and second letters in the word CONSTITUTIONAL were interchanged , also the third and fourth letters, the fifth and sixth etc. Write the letter that would then be the twelfth letter counting to the right. Type your answer\r\n'),
(486, '486', '743', 'One number is wrong in the following series. What should that number be?\r\n3  6  10  15  21  28  34\r\nType your answer\r\n'),
(487, '487', '743', 'If four and a half yards of cloth costs 90 cents , how many cents will two and a half yards cost?\r\nType your answer\r\n'),
(488, '488', '743', 'A man’s influence in a  community should depend upon his ------------'),
(489, '489', '743', 'What is related to a few as ordinary is to exceptional?'),
(490, '490', '743', 'Which one of the five words below is most unlike the other four?'),
(491, '491', '743', 'The opposite of treacherous is ?'),
(492, '492', '743', 'If the first two statements are true, the third is ? \r\nSome of Browns friends are Buddhist \r\nSome of Browns friends are Dentist\r\nSome of Browns friends are Buddhist Dentist'),
(493, '493', '743', 'How many of the following words can be made from the letters in the word LARGEST, using any letter any number of time.\r\nGreat , Stagger , Grasses , Treatle , Struggle , Rattle , Garage , Strangle\r\n'),
(494, '494', '743', ' The statement that the moon is made of green cheese is \r\n'),
(495, '495', '743', 'Of the five things following four are alike in a certain way. Which one is not like the other four?\r\n'),
(496, '496', '743', 'What is related to cube in the same way in which a circle is related to a square?\r\n'),
(497, '497', '743', ' If the following words were seen on a wall by looking in a mirror on an opposite wall, which word would appear exactly the same as if seen directly?\r\n'),
(498, '498', '743', 'If a strip of cloth 24 inches long will shrink to 22 inches when washed , how many inches long will a 36 inches strip be after shrinking?\r\n'),
(499, '499', '743', 'Which of the following is a trait of character?\r\n'),
(500, '500', '743', 'Find the two letters in the word DOING which have just as many letters between them in the word as in the alphabet. Type one of these letters that comes first in the alphabet.\r\nA B C D E F G H I J K L M N O P Q R S T U V W X Y Z\r\n'),
(501, '501', '743', 'Revolution is related to evolution as flying is to ?'),
(502, '502', '743', 'One number is wrong in the following series, what should that correct number be?<br>3  9   27   81  108'),
(503, '503', '743', 'Count each N in the series that is followed by an O next to it if O is not followed by a T next to it . Tell how many N’s you count?\r\nN  O  N  T  Q  M  N  O  T  M   O  O N  C   M  N  N  O  Q  N  OTO  N  A  M  O  N  O  M'),
(504, '504', '743', 'If Frank can ride a bicycle 30 feet while George runs 20 feet , how many feet can Frank ride while George runs 30 feet?'),
(505, '505', '743', 'A Man who is averse to change is said to be ?'),
(506, '506', '743', 'Write the letter which is the fourth letter to the left of the letter which is midway between o and S. Type your answer.'),
(507, '507', '743', 'What number is in the space which is in the rectangle and in the triangle but not in the circle?'),
(508, '508', '743', 'What number is in the same geometric figure or figures as the number 8?'),
(509, '509', '743', 'How many spaces are there that are in any two but only two geometrical figures?'),
(510, '510', '743', 'A surface is related to a line as a line is to ?'),
(511, '511', '743', 'If the first two statements are true , the third is ?\r\n  One cannot become a good violinist without much practice \r\nCharles practices much on the violin\r\nCharles will become a good violinist.'),
(512, '512', '743', 'If the words were arranged to make the best sentence with what letter would be the last word of the sentence end? Type the letter as a capital\r\nSincerity  Traits  Courtesy  Character of desirable and are \r\n'),
(513, '513', '743', 'A man who is influenced in making a decision by preconceived opinions is said to be?'),
(514, '514', '743', 'A hotel serves a mixture of 2 parts of cream and 3 parts of milk. How many parts of cream will it take to make 15 parts of the mixture?'),
(515, '515', '743', 'What is related to blood as Physics is to motion?'),
(516, '516', '743', 'A statement the meaning of which is not definite is said to be ?'),
(517, '517', '743', ' If a wire 20 inches long is to be cut so that one piece is two-third as long as the other piece , how many inches long must the shorter piece be?'),
(518, '518', '744', '35+47+127+19 = ?'),
(519, '519', '744', '379+14+17 = ?'),
(520, '520', '744', '411*13 = ?'),
(521, '521', '744', '160*3/8 = ?'),
(522, '522', '744', '4352-3782 = ?'),
(523, '523', '744', '3423-1213+4324-3112 = ?'),
(524, '524', '744', '3/4 - 1/4 / 1/4 = ?'),
(525, '525', '744', '&radic;? = 3'),
(526, '526', '744', '110÷1/5 = ?'),
(527, '527', '744', '258.9 / 100 = ?'),
(528, '528', '744', '8.6%of 400 = ?'),
(529, '529', '744', '2.4 % of ? = 3.6'),
(530, '530', '744', '41/4 * 4/5 = ?'),
(531, '531', '744', '75.90 / 15 = ?'),
(532, '532', '744', '6666/66 = ?'),
(533, '533', '744', '20.08 / 4 = ?'),
(534, '534', '744', '598 + 832 + ? = 1458'),
(535, '535', '744', '4783 – 2932 = ?'),
(536, '536', '744', '908 – 190 = ?'),
(537, '537', '744', '16<span>&#8730;</span>1664 = ?'),
(538, '538', '744', '<table>\r\n	<tr>\r\n		<th>Rajesh Kumar</th>\r\n		<th>&nbsp;</th>\r\n		<th>Rajash Kumar</th>\r\n	</tr>\r\n	<tr>\r\n		<th>102/38</th>\r\n		<th>&nbsp;</th>\r\n		<th>102/18</th>\r\n	</tr>\r\n	<tr>\r\n		<th>Prem Nagar</th>\r\n		<th>&nbsp;</th>\r\n		<th>Prem Nagar</th>\r\n	</tr>\r\n	<tr>\r\n		<th>Kanpur – 208001</th>\r\n		<th>&nbsp;</th>\r\n		<th>Kanpur - 208021</th>\r\n	</tr>\r\n	<tr>\r\n		<th>(Uttar Pradesh)</th>\r\n		<th>&nbsp;</th>\r\n		<th>(Uttar Pradesh)</th>\r\n	</tr>\r\n</table>'),
(539, '539', '744', '<table>\r\n	<tr>\r\n		<th>Anil Kumar Sharma</th>\r\n		<th>&nbsp;</th>\r\n		<th>Anil Komar Sharma</th>\r\n	</tr>\r\n	<tr>\r\n		<th>205, Hanuman Nagar</th>\r\n		<th>&nbsp;</th>\r\n		<th>285, Hanuman Nagar</th>\r\n	</tr>\r\n	<tr>\r\n		<th>Nagpur - 440001</th>\r\n		<th>&nbsp;</th>\r\n		<th>Nagpur – 404001</th>\r\n	</tr>\r\n	<tr>\r\n		<th>(Maharashtra)</th>\r\n		<th>&nbsp;</th>\r\n		<th>(Maharashtra)</th>\r\n	</tr></table>'),
(540, '540', '744', '<table>\r\n	<tr>\r\n		<th>Bernard Francis</th>\r\n		<th>&nbsp;</th>\r\n		<th>Bernard Francis</th>\r\n	</tr>\r\n	<tr>\r\n		<th>Q. No. 1 SD/29</th>\r\n		<th>&nbsp;</th>\r\n		<th>Q. No. 1 SD/29</th>\r\n	</tr>\r\n	<tr>\r\n		<th>Zone – A</th>\r\n		<th>&nbsp;</th>\r\n		<th>Zone – A</th>\r\n	</tr>\r\n	<tr>\r\n		<th>Ramkrishna Pur</th>\r\n		<th>&nbsp;</th>\r\n		<th>Ramkrishna Pur</th>\r\n	</tr>\r\n	<tr>\r\n		<th>Adilabad – 504301</th>\r\n		<th>&nbsp;</th>\r\n		<th>Adilabad - 504301</th>\r\n	</tr>\r\n	<tr>\r\n		<th>(Andhra Pradesh)</th>\r\n		<th>&nbsp;</th>\r\n		<th>(Andhra Pradesh)</th>\r\n	</tr>\r\n</table>'),
(541, '541', '744', '<table><tr><th>(A) 13.14.1314</th></tr>\r\n<tr><th>(B) 14.13.1314</th></tr>\r\n<tr><th>(C) 13.14.1314</th></tr>\r\n<tr><th>(D) 14.14.1314</th></tr>\r\n<tr><th>(E) 13.11.1414</th></tr>\r\n</table>'),
(542, '542', '744', '<table><tr><th>(A) 572980</th></tr>\r\n<tr><th>(B) 752908</th></tr>\r\n<tr><th>(C) 759280</th></tr>\r\n<tr><th>(D) 572980</th></tr></table>'),
(543, '543', '744', '<table><tr><th>(A) 22.12.1819</th></tr>\r\n<tr><th>(B) 23.12.1819</th></tr>\r\n<tr><th>(C) 23.12.1918</th></tr>\r\n<tr><th>(D) 22.11.1819</th></tr>\r\n<tr><th>(E) 23.12.1918</th></tr></table>'),
(544, '544', '744', 'Abbas, Arjun'),
(545, '545', '744', 'Bansal, Prabhu Dayal'),
(546, '546', '744', 'Chandha, Damodar'),
(547, '547', '744', '385276'),
(548, '548', '744', '476813'),
(549, '549', '744', '184256'),
(550, '550', '744', 'Find Wrong Combination'),
(551, '551', '744', 'Find Wrong Combination'),
(552, '552', '744', 'Find Wring Combination'),
(553, '553', '744', 'He was so convinced that people were driven by _______ motives that the could not believe that anyone could be unselfish.'),
(554, '554', '744', 'When the infant displayed signs of illness, the anxious parents called in a _______'),
(555, '555', '744', 'The concept ______grouping of people with similar interests and abilities was very popular among educators.'),
(556, '556', '744', 'CORRUGATED : STRPED :  :'),
(557, '557', '744', 'CAT  : MOUSES :   :'),
(558, '558', '744', 'NOSE : FACE'),
(559, '559', '744', 'OPPORTUNITY'),
(560, '560', '744', 'REDUNDANT'),
(561, '561', '744', 'INGENUOUS'),
(562, '562', '744', 'Homogeneous'),
(563, '563', '744', 'Disparity'),
(564, '564', '744', 'Infinite'),
(565, '565', '744', 'An unmarried man :'),
(566, '566', '744', 'Study of disease :'),
(567, '567', '744', 'Custom of having many wives :'),
(568, '568', '744', 'To fly off the handle'),
(569, '569', '744', 'Gift of the gab :'),
(570, '570', '744', 'To worship the rising sun :'),
(571, '571', '744', 'He is foreigner here. He'),
(572, '572', '744', 'It’s not very hot at present '),
(573, '573', '744', 'I haven ‘t seen you weeks. Where'),
(574, '574', '744', 'This passage is primarily concerned with'),
(575, '575', '744', 'Special words used in technical discussion'),
(576, '576', '744', 'It is true that'),
(577, '577', '744', 'In recent years, there has been a marked increase in the number of technical terms in the nomenclature'),
(578, '578', '744', 'The write of this article was, no doubt'),
(579, '579', '744', 'The author’s main purpose in the passage is to'),
(580, '580', '750', 'Death of a Spouse-\r\n'),
(581, '581', '750', 'Divorce-'),
(582, '582', '750', 'Martial Separation – '),
(583, '583', '750', 'Jail Term/ Threat of Jail/ Arrest –'),
(584, '584', '750', 'Death of a close family member – '),
(585, '585', '750', 'Personal injury of illness – '),
(586, '586', '750', 'Marriage –'),
(587, '587', '750', 'Fired from Working / Constant thinking of danger of being fired from Work –'),
(588, '588', '750', 'Daughter’s marriage –'),
(589, '589', '750', 'Retirement / Nearing retirement –'),
(590, '590', '750', 'Change in Family members health –'),
(591, '591', '750', 'Pregnancy –'),
(592, '592', '750', 'Sex Difficulties'),
(593, '593', '750', 'Addiction to family – '),
(594, '594', '750', 'Business / Organizational readjustment – '),
(595, '595', '750', 'Change in Financial Status –'),
(596, '596', '750', 'Death of a close friend – '),
(597, '597', '750', 'Change to different line of work – '),
(598, '598', '750', 'Children taking to bad habits or having constant fear of such a happening – '),
(599, '599', '750', 'Change in place – '),
(600, '600', '750', 'Extra Marital involvement – '),
(601, '601', '750', 'Change in work responsibilities –'),
(602, '602', '750', 'Children’s admission to professional courses – '),
(603, '603', '750', 'Daughter facing trouble with in-laws – '),
(604, '604', '750', 'Outstanding Personal Achievement – '),
(605, '605', '750', 'Spouse begins or stops work –'),
(606, '606', '750', 'Starting or finishing school of children – '),
(607, '607', '750', 'Change in living conditions –'),
(608, '608', '750', 'Career prospects for son/ sons –'),
(609, '609', '750', 'Trouble with boss –'),
(610, '610', '750', 'Change in work hours or conditions of work –'),
(611, '611', '750', 'Change in residence – '),
(612, '612', '750', 'Change in schools of children –'),
(613, '613', '750', 'Trouble from sub ordinates –'),
(614, '614', '750', 'Lack of understanding / support from colleagues –'),
(615, '615', '750', 'Change in Social activities –'),
(616, '616', '750', 'Change in Sleeping habits – '),
(617, '617', '750', 'Change in number of family gatherings – '),
(618, '618', '750', 'Change in eating habits – '),
(619, '619', '750', 'Lack of time for children –'),
(620, '620', '750', 'Minor violations of the law – '),
(621, '621', '750', 'Feel Stifled or held back in your personal or professional life.'),
(622, '622', '750', 'Feel a need for greater accomplishment?'),
(623, '623', '750', 'Feel as though life needs guidance or direction?'),
(624, '624', '750', 'Notice yourself growing impatient?'),
(625, '625', '750', 'Find yourself disillusioned ?'),
(626, '626', '750', 'Find yourself in a “rut” or your life is leading you to nowhere?'),
(627, '627', '750', 'Find yourself disappointed?'),
(628, '628', '750', 'Find yourself frustrated ?'),
(629, '629', '750', 'Find yourself inferior?'),
(630, '630', '750', 'Find yourself upset because things have not gone accordingly to plan.'),
(631, '631', '750', 'Find yourself with insufficient time to do things you really enjoy?'),
(632, '632', '750', 'Wish you had more support/ assistance?'),
(633, '633', '750', 'Lack of sufficient time to complete your work most effectively?'),
(634, '634', '750', 'Have difficulty falling asleep because you have too much on your mind?'),
(635, '635', '750', 'Feel people simply expect too much from you?'),
(636, '636', '750', 'Feel overwhelmed by issues/ problems/ people ?'),
(637, '637', '750', 'Find yourself becoming forgetful or indecisive because you have too much on your mind?'),
(638, '638', '750', 'Consider yourself in high pressure situations?');
INSERT INTO `questionoftest` (`id`, `questionid`, `testid`, `question`) VALUES
(639, '639', '750', 'Feel you have too much responsibility for one person to carry out?'),
(640, '640', '750', 'Feel “exhausted “ / tired at the end of the day?'),
(641, '641', '750', 'Feel that your work is not stimulating enough? '),
(642, '642', '750', 'Loose interest in your daily activities?'),
(643, '643', '750', 'Find yourself becoming restless during your daily routine ?'),
(644, '644', '750', 'Feel insulted by the simplicity of your work?'),
(645, '645', '750', 'Wish your life were more exciting?'),
(646, '646', '750', 'Find yourself becoming anxious from lack of stimulation?'),
(647, '647', '750', 'Find yourself becoming bored?'),
(648, '648', '750', 'Feel that your usual activities aren’t challenging enough?'),
(649, '649', '750', 'Find yourself day-dreaming during your work?'),
(650, '650', '750', 'Feel lonely?'),
(651, '651', '750', 'How many cups of coffee do you drink in an average day ?'),
(652, '652', '750', 'How many cigarettes do you smoke on an average day?'),
(653, '653', '750', 'Do you add salt to your food? (Additional salt from the table)'),
(654, '654', '750', 'How many cups of caffeinated tea do you drink in an average day?'),
(655, '655', '750', 'How many soft drinks do you drink in an average day?'),
(656, '656', '750', 'How much alcohol ( Liquor/ wine or beer) do you consume in an average week?'),
(657, '657', '750', 'Do you eat a nutritionally balanced diet?'),
(658, '658', '750', 'If you added them all together how many sweet dishes do you eat on an average day?'),
(659, '659', '750', 'Do you eat a well balanced breakfast most mornings?'),
(660, '660', '750', 'How many slices of white bread / chapaties from highly processed flour do you eat during an average day?'),
(661, '661', '750', 'When I face a difficult task, I try my best and will usually succeed?'),
(662, '662', '750', 'I am at ease when I am with members of the opposite sex?'),
(663, '663', '750', 'I feel that I have a lot going for me or things are just fine for me?'),
(664, '664', '750', 'I have a very high degree of confidence in my own abilities?'),
(665, '665', '750', 'I prefer to be in control of my own life as opposed to having someone else make decisions for me?'),
(666, '666', '750', 'I am comfortable and at ease with my superiors?'),
(667, '667', '750', 'I am often overly self-conscious or shy when among strangers?'),
(668, '668', '750', 'Whenever something goes wrong  tend to blame myself ?'),
(669, '669', '750', 'When I don’t succeed , I tend to let it depress me more than it should?'),
(670, '670', '750', 'I often feel that I am beyond help or a gone case?'),
(671, '671', '750', 'I have no patience with tardiness / slackness / slowness?'),
(672, '672', '750', 'I hate to wait in lines/ queues?'),
(673, '673', '750', 'People tell me that I tend to get irritated too easily?'),
(674, '674', '750', 'Whenever possible , I try to make my activities competitive?'),
(675, '675', '750', 'I feel guilty for taking time off from work that needs to be done?'),
(676, '676', '750', 'People tell me that I’m a poor loser?'),
(677, '677', '750', 'I tend to loose my temper or get irritable when I am under a lot of pressure?'),
(678, '678', '750', 'I tend to race against the clock/ time?'),
(679, '679', '750', 'I hate to wait or depend on others in order to do what I want to do?'),
(680, '680', '750', 'I find myself rushing when there is no real need to do so?'),
(681, '681', '750', 'Tend to imagine all the worst possible things happening to me as a result of whatever ‘crisis’ made me anxious , to begin with ?'),
(682, '682', '750', 'Do everything I can to resolve the problem immediately; if I don’t it will drive me crazy worrying about it later?'),
(683, '683', '750', 'Will relive in my mind the crisis over and over again even though the crisis may be over and resolved?'),
(684, '684', '750', 'Will be able to clearly picture the crisis in my mind hours or even days after its over?'),
(685, '685', '750', 'Get the feeling that I am losing control?'),
(686, '686', '750', 'Feel my stomach sinking, my mouth getting dry, or my heart pounding?'),
(687, '687', '750', 'Tend to make ‘mountains of a mole hill’ ?'),
(688, '688', '750', 'Have trouble falling asleep at night ?'),
(689, '689', '750', 'Have difficulty in speaking or notice my hands and fingers trembling?'),
(690, '690', '750', 'Notice my thoughts “racing” or too many thoughts coming to my mind at the same time?'),
(691, '691', '750', 'How often do you find yourself helpless or hopeless ?'),
(692, '692', '750', 'How often do you find yourself in a situation which seems out of your control?'),
(693, '693', '750', 'How often do you find yourself needing to have your life well planned and organized?'),
(694, '694', '750', 'How often do you find yourself feeling sad or depressed?'),
(695, '695', '750', 'How often do you find yourself fearful of losing control over your life?'),
(696, '696', '750', 'How often do you find yourself needing to control the people around you?'),
(697, '697', '750', 'How often do you find yourself needing to control your environment ?'),
(698, '698', '750', 'How often do you find yourself feeling insecure?'),
(699, '699', '750', 'How often do you feel a need to have your life highly structured?'),
(700, '700', '750', 'How often do you feel secure?'),
(701, '701', '750', 'Give yourself 10 points if you feel that you have a supportive family'),
(702, '702', '750', 'Give yourself 10 points if you actively pursue any hobby.'),
(703, '703', '750', 'Give yourself 10 points if you belong to some social or activity group that meets at east once a month ( other than family)'),
(704, '704', '750', 'Give yourself 15 points if you are within 5 Kg/ Pound of your ideal body weight'),
(705, '705', '750', 'Give yourself 15 points if you practice some form of deep relaxation ( includes meditation, imagery, yoga)at least 3 times a week. '),
(706, '706', '750', 'Give yourself 5 points for each time you exercise 30 minutes or longer during the course of an average week.'),
(707, '707', '750', 'Give yourself 5 points for each nutritionally balanced and wholesome meal you consume during the course of an average week.'),
(708, '708', '750', 'Give yourself 5 points for each time you do something that you really enjoy , “ just for yourself” during the course of an average week.'),
(709, '709', '750', 'Give yourself 10 points if you have someplace in your home that you can go in order to relax and/ or be by yourself.'),
(710, '710', '750', 'Give yourself 10 points if you practice time management techniques in your life'),
(711, '711', '750', 'Give yourself 10 points for each pack of cigarette you smoke during the course of an average day'),
(712, '712', '750', 'Give yourself 5 points for each evening during the course of an average week that you take any form of medication or chemical substance ( including alcohol) to help you sleep'),
(713, '713', '750', 'Give yourself 10 points for each evening during the course of an average week that you take any form of medication or chemical substance ( including alcohol) to reduce your anxiety or just calm yourself down.'),
(714, '714', '750', 'Give yourself 5 points for each evening during the course of an average week that you bring work home; work meant to be done at your place of employment.'),
(715, '718', '741', 'Role Perception<br>&nbsp;&nbsp;&nbsp;&nbsp;RANK'),
(716, '719', '741', 'View Of Authority<br>&nbsp;&nbsp;&nbsp;&nbsp;RANK\r\n'),
(717, '720', '741', 'Setting Goals And standards<br>&nbsp;&nbsp;&nbsp;&nbsp;RANK'),
(718, '721', '741', 'View Of Work And Workers<br>&nbsp;&nbsp;&nbsp;&nbsp;RANK'),
(719, '722', '741', 'Planning And Scheduling Work<br>&nbsp;&nbsp;&nbsp;&nbsp;RANK'),
(720, '723', '741', 'Giving Feedback<br>&nbsp;&nbsp;&nbsp;&nbsp;RANK'),
(721, '724', '741', 'Team Building<br>&nbsp;&nbsp;&nbsp;&nbsp;RANK'),
(722, '725', '741', 'Implementation<br>&nbsp;&nbsp;&nbsp;&nbsp;RANK'),
(723, '726', '741', 'Evaluation<br>&nbsp;&nbsp;&nbsp;&nbsp;RANK'),
(724, '727', '741', 'Management Philosophy<br>&nbsp;&nbsp;&nbsp;&nbsp;RANK'),
(725, '728', '748', 'Decisions seem to be forced upon us.'),
(726, '729', '748', 'Team members are not encouraged to speak out.'),
(727, '730', '748', 'When the going gets tough it is every man for himself.'),
(728, '731', '748', 'Communication needs improvement.'),
(729, '732', '748', 'Decisions are taken at the wrong level.'),
(730, '733', '748', 'Some of the leaders are taken at the wrong level'),
(731, '734', '748', 'We seldom question the content or usefulness of our meetings.'),
(732, '735', '748', 'Insufficient development opportunities are created.'),
(733, '736', '748', 'We are frequently at logger heads with other members.'),
(734, '737', '748', 'No one is really clear where we are going.'),
(735, '738', '748', 'Team members do not say what they really think.'),
(736, '739', '748', 'Team members have an “I am all right” attitude.'),
(737, '740', '748', 'Conflict is destructive in the team.'),
(738, '741', '748', 'There is adequate information on which to base decision.'),
(739, '742', '748', 'Some of the leaders are not trusted.'),
(740, '743', '748', 'We do not learn from our mistakes.'),
(741, '744', '748', 'Leaders do not help their subordinates to learn.'),
(742, '745', '748', 'Relationships with other groups are “cool”.'),
(743, '746', '748', 'We are all very busy but we do not seem to get any where.'),
(744, '747', '748', 'Issues are brushed under the carpet.'),
(745, '748', '748', 'It would help if team members were most willing to admit their mistakes.'),
(746, '749', '748', 'There is mistrust and hostility.'),
(747, '750', '748', 'The team members are uncommitted to decisions.'),
(748, '751', '748', 'There is little time loyalty.'),
(749, '752', '748', 'Outside opinions are unwelcome.'),
(750, '753', '748', 'There should be more job rotation.'),
(751, '754', '748', 'We seldom work effectively with other teams.'),
(752, '755', '748', 'We do not spend adequate time planning for the future.'),
(753, '756', '748', 'Delicate issues are avoided.'),
(754, '757', '748', 'Team members get stabbed in the back.'),
(755, '758', '748', 'We do not really work together.'),
(756, '759', '748', 'Inappropriate team members make the decision.'),
(757, '760', '748', 'Leaders are weak and not prepared to stand up and be counted.'),
(758, '761', '748', 'I do not receive sufficient feedback.'),
(759, '762', '748', 'The wrong kinds of skills are developed.'),
(760, '763', '748', 'Help is not forthcoming from other part of the team.'),
(761, '764', '748', 'We do not have a clear view of what is expected of us.'),
(762, '765', '748', 'Honesty is not a feature of our team.'),
(763, '766', '748', 'I do not feel strengthened by my colleagues.'),
(764, '767', '748', 'Skills and information are not shared sufficiently.'),
(765, '768', '748', 'It is the strong personalities that get their way.'),
(766, '769', '748', 'Dignity is not recognized.'),
(767, '770', '748', 'We should spend more time questioning the way we operate.'),
(768, '771', '748', 'Leader not take personal development seriously.'),
(769, '772', '748', 'The rest of the team does not understand us.'),
(770, '773', '748', 'The way an individual is valued has little to do with what he achieves.'),
(771, '774', '748', 'There are to many secret.'),
(772, '775', '748', 'Conflict are avoided.'),
(773, '776', '748', 'Disagreement prevails.'),
(774, '777', '748', 'Commitment to decision is low.'),
(775, '778', '748', 'Our leader believe that tighter supervision produces increased results.'),
(776, '779', '748', 'There are too many tattoos in this teams.'),
(777, '780', '748', 'Other teams provide better opportunities.'),
(778, '781', '748', 'We put a lot of energy into defending our boundaries.'),
(779, '782', '748', 'Priorities are unclear.'),
(780, '783', '748', 'Team members are not involved sufficiently in decision making.'),
(781, '784', '748', 'There are too many recriminations.'),
(782, '785', '748', 'There are not enough listening.'),
(783, '786', '748', 'We do not utilize the skills we have.'),
(784, '787', '748', 'Leaders believe that team members are inherently lazy.'),
(785, '788', '748', 'We spend too much time doing and not enough thinking.'),
(786, '789', '748', 'Individuals are not encouraged to grow.'),
(787, '790', '748', 'We do not try to understand the view of other teams.'),
(788, '791', '748', 'We do not understand what other teams are aiming at.'),
(789, '792', '748', 'Some team members back down to easily.'),
(790, '793', '748', 'Generally there is low trust here.'),
(791, '794', '748', 'Team members are unwilling to take the views of others into account.'),
(792, '795', '748', 'We do not consider alternative solutions sufficiently.'),
(793, '796', '748', 'Yesterday’s attitudes prevail with our leader.'),
(794, '797', '748', 'The accepted order is rarely challenged.'),
(795, '798', '748', 'Our leaders lack the skills to develop others.'),
(796, '799', '748', 'We have too little influence on the rest of the team.'),
(797, '800', '748', 'Leaders do not plan for the future together. '),
(798, '801', '748', 'In this team it plan to keep your mouth shut.'),
(799, '802', '748', 'A lot time is spent defining territory.'),
(800, '803', '748', 'There are too many fight.'),
(801, '804', '748', 'Team members feel frustrated because they are not consulted.'),
(802, '805', '748', 'Team does not care whether team members are happy in their own work.'),
(803, '806', '748', 'We seldom changed our working procedure or teams.'),
(804, '807', '748', 'We should spend more time knowing our team leaders.'),
(805, '808', '748', 'We do not reach out to help other teams.'),
(806, '809', '748', 'Different parts of the team are pulling in different directions. '),
(807, '810', '748', 'Team members are not prepared to put their true belief on the table.'),
(808, '811', '748', 'Team members are not really helped to develop.'),
(809, '812', '748', 'This place reminds me of a battle field sometimes.'),
(810, '813', '748', 'There is need of more democracy.'),
(811, '814', '748', 'Leaders take little action to make employees job interesting and meaningful.'),
(812, '815', '748', 'Delicate issues are not raised.'),
(813, '816', '748', 'Many team members trained by the leaders later join competitions.'),
(814, '817', '748', 'Idea from other teams are not used.'),
(815, '818', '748', 'Our aims are not democratically agreed.'),
(816, '819', '748', 'Team members do not get sufficient honest feedback.'),
(817, '820', '748', 'Team members should be more independent.'),
(818, '821', '748', 'We should discuss our differences more.'),
(819, '822', '748', 'Team members are not sufficiently involved in taking decisions.'),
(820, '823', '748', 'Our leaders do not make the best use of us.'),
(821, '824', '748', 'We should seriously consider the relevance of our meeting. '),
(822, '825', '748', 'Individual development is stifled by the team.'),
(823, '826', '748', 'Information does not flow freely enough between teams.'),
(824, '827', '748', 'We should place more emphasis on result.'),
(825, '828', '748', 'Team members hear what they want to hear rather than the truth.'),
(826, '829', '748', 'More time should be devoted to discussing fundamental values.'),
(827, '830', '748', 'We do not get down to the root of our differences.'),
(828, '831', '748', 'Decisions are taken by wrong people.'),
(829, '832', '748', 'Our leader is not true to his own beliefs.'),
(830, '833', '748', 'We should take more account of how others see us.'),
(831, '834', '748', 'Team members are discouraged from being authentic.'),
(832, '835', '748', 'The team as a whole is not a happy place to work in.'),
(833, '836', '751', 'I find I don’t know enough about whats going on around me.\r\n'),
(834, '837', '751', 'I find that I don’t know enough about the technical aspects of my job.'),
(835, '838', '751', 'I don’t seem to be able to pick up quickly whats going on.'),
(836, '839', '751', 'I am unsure when faced with a decision.'),
(837, '840', '751', 'I find that other people don’t listen to me properly.'),
(838, '841', '751', 'I try to be objective and not subjective.'),
(839, '842', '751', 'I respond to the pressure of the instant, thus losing sight of longer term considerations.'),
(840, '843', '751', 'I find it difficult to cope up with new ideas.'),
(841, '844', '751', 'Compared with other people , im rather slow in taking in the information.'),
(842, '845', '751', 'I don’t see much connection between theory and practice in management.'),
(843, '846', '751', 'I make plans or decisions only to find later on that they are no longer valid because of something that I should have known but didn’t.'),
(844, '847', '751', 'Many of the people working with or for me seem to know more about various aspects of the job that I do.'),
(845, '848', '751', 'Im not very good at knowing or recognizing what other people are thinking or feeling.'),
(846, '849', '751', 'I have difficulty in analyzing a situation into its various aspects.'),
(847, '850', '751', 'There are times when I just don’t seem to be able to get other people to see my point of view.'),
(848, '851', '751', 'I get worried because theres no way of knowing in advance whether or not I have made the right decision.'),
(849, '852', '751', 'I find that after a while  theres no way of knowing in advance whether or not I have made the right decision.'),
(850, '853', '751', 'Im not an imaginative person.'),
(851, '854', '751', 'I have difficulty in thinking on my feet in tricky situations.'),
(852, '855', '751', 'Experience is the only valid teacher.'),
(853, '856', '751', 'I get caught out because I don’t know whats happening in my organization.'),
(854, '857', '751', 'I would like to be more up to date on the techincal aspects of my job.'),
(855, '858', '751', 'I find that when something happens im only aware of parts of whats going on - I overlook other aspects of the situation or a problem.'),
(856, '859', '751', 'I find it difficult to weigh the pros and cons of a situation or a problem.'),
(857, '860', '751', 'Anger and conflict tends to frighten or upset me.'),
(858, '861', '751', 'I have difficulty in sleeping at night.'),
(859, '862', '751', 'Its difficult to think very far ahead , since the immediate goal is more important.'),
(860, '863', '751', 'I don’t think that people with other specialist interests can contribute to my job. '),
(861, '864', '751', 'I prefer to work on one thing at a time rather than be dealing with several things at once.'),
(862, '865', '751', 'Im not able to convert my own experiences into valid theories.'),
(863, '866', '751', 'People don’t seem to tell me enough about whats going on.'),
(864, '867', '751', 'It would help me in my job if I could learn more about relevant techniques.'),
(865, '868', '751', 'Other people seem to notice more than I do about what is happening around them.'),
(866, '869', '751', 'I tend to jump to instant conclusions - acting quickly without spending much time thinking.'),
(867, '870', '751', 'I avoid telling people what I really think about them.'),
(868, '871', '751', 'When I am nervous or tired I snap at people or get moody and irritable.'),
(869, '872', '751', 'Im passive rather than active.'),
(870, '873', '751', 'My job is unique, so I don’t think that people from othe background could be of much help.'),
(871, '874', '751', 'Once I get stuck into a task I try to remain with it rather than switch to something else and then back again.'),
(872, '875', '751', 'I don’t sit and think abstract thoughts about management.'),
(873, '876', '751', 'I find that I need more information about the organization but don’t know how to get it.'),
(874, '877', '751', 'I am not very well versed in the range of techniques that could be relevant to my job.'),
(875, '878', '751', 'I don’t feel really tuned - in to whats happening in a situation.'),
(876, '879', '751', 'I find it difficult to trust my own judgement.'),
(877, '880', '751', 'I find myself irritated by other people.'),
(878, '881', '751', 'I don’t think that feeling should be brought out.'),
(879, '882', '751', 'I need to temper initiative with caution.'),
(880, '883', '751', 'I am better at implementing well -trained solutions rather than experimenting with new ones.'),
(881, '884', '751', 'To see the whole situation one must carefully consider all the parts.'),
(882, '885', '751', 'Its best to rely on experts when seeking ideas about specialized aspects of ones job.'),
(883, '886', '751', 'I don’t have a clear understanding of how my organization works.'),
(884, '887', '751', 'I would like to have more theoretical knowledge that would help me in my job.'),
(885, '888', '751', 'I have difficulty in knowing what other people are upto.'),
(886, '889', '751', 'Having made up my mind about something I like to get sombody else&aposs opinion about my decision.'),
(887, '890', '751', 'I don’t really know what others think of me.'),
(888, '891', '751', 'I don’t get emotional in my job - I just stick to the facts.'),
(889, '892', '751', 'I find it difficult to stick at it, when things arent going too well.'),
(890, '893', '751', 'I get mental blockages when trying to think of new ways of doing things.'),
(891, '894', '751', ' Slow and steady wins the race&apos is a pretty good motto.'),
(892, '895', '751', 'When I get an idea I like, if possible, to have it checked out by an expert.'),
(893, '896', '751', 'I have difficulty in getting all the information I need.'),
(894, '897', '751', 'I find that I don’t seem to know enough about external factors such as market changes, new legislation , and the like.'),
(895, '898', '751', 'I find myself surprised because I have only been seeing \"part of the picture\"'),
(896, '899', '751', 'I would like some sort of a formula that could apply to problems so as to work out the best solution or decision.'),
(897, '900', '751', 'I usually lose arguments.'),
(898, '901', '751', 'I find myself aware that I am behaving inappropriately , but don’t seem to be able to stop or change the way im acting .'),
(899, '902', '751', 'I feel a need to have more \"get -up-and -go\" attitutde.'),
(900, '903', '751', 'I have difficulty in coming up with new ideas.'),
(901, '904', '751', 'I can&apost cope with more than one or two problems at a time.'),
(902, '905', '751', 'If I go on a course I would like the teachers or trainers to be able to give me a lot of information and ideas.'),
(903, '906', '751', 'Many of my colleagues seem to know more about the organization than I do.'),
(904, '907', '751', 'I have difficulty in keeping up with new techniques and developments.'),
(905, '908', '751', 'If people change their hair - styles , or the way they dress, I probably would not notice.'),
(906, '909', '751', 'I get confused when faced with several alternative courses of action.'),
(907, '910', '751', 'I don’t really see it as a part of my job to stop in between two people who don’t get on with each other , as long as they do their job satisfactoriy.'),
(908, '911', '751', 'I worry about problems over and over in my mind.'),
(909, '912', '751', 'If forced to choose between two descriptions of myself, I would say that I am steady and reliable rather than adventurours and risk - taking.'),
(910, '913', '751', 'Other people seem better than me at thinking of new ways of solving problems.'),
(911, '914', '751', 'I am not what you&aposd call a quick thinker.'),
(912, '915', '751', 'If I hear of a new theory I find it difficult to translate it in top practical terms relevant to my job.'),
(913, '916', '751', 'I don’t really know who the important people are in my organization.'),
(914, '917', '751', 'I would welcome the oppurtunity to learn more about the thoeretical background of my job.'),
(915, '918', '751', 'I have difficulty in knowing how other people are feeling.'),
(916, '919', '751', 'When trying to make a decision I find that I have got so much information that I don’t know what to do with it.'),
(917, '920', '751', 'I find that I simply cannot understand why someone else feels the way he does.'),
(918, '921', '751', 'I don’t discuss my feelings or worries with other people.'),
(919, '922', '751', 'I prefer to follow someone elses plan or instructions rather than act on my own initiative.'),
(920, '923', '751', 'I don’t seem as good as other people at getting creative ideas.'),
(921, '924', '751', 'The trouble with my job is that Im never let alone to, get on with it - there are too many interruptions.'),
(922, '925', '751', 'I dislike jargon or over theoretical ways of talking.'),
(923, '926', '751', 'I would like to know more about my organizations policies and future plans.'),
(924, '927', '751', 'I am not really sufficiently sound with the technical requirements of my job.'),
(925, '928', '751', 'I find myself surprised at the way other people react to whats happening.'),
(926, '929', '751', 'I tend to find that I cant make a decisin because I don’t have enough relelvant information.'),
(927, '930', '751', 'Many of the people in my organization cant be trusted to get on with their job without constant supervision.'),
(928, '931', '751', 'Most days I wake up with a \" Monday - morning \" feeling.'),
(929, '932', '751', 'Its better to be safe than to be sorry.'),
(930, '933', '751', 'Compared with other people , my ideas seem to be stuck in a rut, or fixed by well-established ways of doing things.'),
(931, '934', '751', 'When I am under pressure , in a tight spot, or being challenged, I cant seem to think straight or express my idead clearly.'),
(932, '935', '751', 'I am sort of person who goes around saying \"no one can tell me how to do my job\".');

-- --------------------------------------------------------

--
-- Table structure for table `questoptinidividual`
--

CREATE TABLE `questoptinidividual` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `testid` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `testoptions` varchar(255) NOT NULL,
  `testdate` varchar(255) NOT NULL,
  `testtime` varchar(255) NOT NULL,
  `resultuniqid` varchar(255) NOT NULL,
  `orgid` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questoptinidividual`
--

INSERT INTO `questoptinidividual` (`id`, `userid`, `username`, `testid`, `testname`, `testoptions`, `testdate`, `testtime`, `resultuniqid`, `orgid`, `usertype`) VALUES
(1, '5a460ad3893ae', 'sourav01@outlook.com', '1456', 'CPTI', '4,2,1,2,4,2,4,4,1,4,1,1,3,4,2,1,2,4,1,4,1,1,1,4,1,1,3,4,4,4,4,3,4,1,4,4,4,4,4,4,1,2,2,4,4,3,1,1,4,4,1,1,2,4,1,4,1,4,4,1,3,4,2,3,4,4,4,4,2,1,4,4,2,4,1,4,4,2,4,4,4,4,4,4,4,4,4,2,4,4,4,4,4,4,2,4,4,4,2,4,1,4,4,2,2,1,1,2,3,3,3,4,2,4,4,2,2', '2017-12-29', '1514544887', '5a461ef7beab5', '5a45f254ad2ba', 'candidate'),
(2, '5a460ad3893ae', 'sourav01@outlook.com', '256', 'ETI', '2,2,3,3,2,3,2,2,3,1,1,3,1,1,4,1,1,2,3,2,3,3,2,2,3,3,2,1,3,2,1,1,1,2,2,2,2,2,3,2,1,1,1,1,2,3,2,2,3,2,1,3,2,1,2,1,1,2,1,2,1,1,1,1,2,1,1,1,1,4,1,1,1,1,1,1,3,1,1,2,1,1,3,3,1,1,3,4,5,5', '2017-12-29', '1514546514', '5a46255283ba8', '5a45f254ad2ba', 'candidate'),
(3, '5a460ad3893ae', 'sourav01@outlook.com', '321', 'PTW', '1,2,1,1,1,1,2,2,1,1,1,1,1,1,1,1,2,2,2,2,2,2,1,2,2,1,1,2,1,2,1,1,2,1,2,1,1,2,1,2,2,2,1,2,1,2,2,1,1,1,2,2,2,2,2,2,1,2,2,1,2,1,2,1,2,2,1,2,2,2,2,1,2,2,2,2,1,2,1,1,1,1,1,1,1,1,1,2,1,1,1,2,1,2,2,2,2,2,1,1,2,2,1,2,2,2,2,2,1,1,2,2,1,2,2,1,1,1,1,2,1,2,2,1', '2017-12-29', '1514548968', '5a462ee8ce8718976', '5a45f254ad2ba', 'candidate'),
(4, '5a5072de74f5f', 'vanessa@squartech.com', '1456', 'CPTI', '3,2,2,4,2,2,2,4,2,4,2,1,1,4,2,1,1,4,2,2,2,1,4,4,4,2,2,2,4,2,4,2,3,2,4,4,3,3,2,2,4,4,2,2,4,4,2,2,2,3,1,2,2,3,4,3,1,1,4,2,1,1,2,3,4,4,3,3,3,1,2,1,2,2,1,4,4,4,4,4,4,1,4,3,2,3,4,3,4,4,4,4,4,4,1,4,4,4,2,4,2,4,4,3,3,2,2,2,2,2,2,3,2,4,1,4,4', '2018-01-06', '1515228245', '5a508c5527d83', '5a506f9c109b7', 'employee'),
(5, '5a5072de70cb9', 'karan@squartech.com', '1456', 'CPTI', '2,1,3,3,4,3,2,4,2,2,4,4,1,3,2,2,2,4,3,3,3,2,2,2,3,3,4,3,3,3,4,3,2,2,3,3,4,3,3,3,4,3,2,2,3,3,2,3,3,2,2,4,2,2,3,3,2,2,3,2,2,2,2,3,2,2,1,1,1,1,2,2,2,2,2,4,4,2,2,3,2,2,3,4,4,2,2,2,3,4,2,2,3,3,2,2,4,4,2,3,3,3,4,2,3,2,3,3,2,2,2,2,3,3,2,2,3', '2018-01-06', '1515228796', '5a508e7c78ae6', '5a506f9c109b7', 'employee'),
(6, '5a5072de70cb9', 'karan@squartech.com', '1456', 'CPTI', '2,1,3,3,4,3,2,4,2,2,4,4,1,3,2,2,2,4,3,3,3,2,2,2,3,3,4,3,3,3,4,3,2,2,3,3,4,3,3,3,4,3,2,2,3,3,2,3,3,2,2,4,2,2,3,3,2,2,3,2,2,2,2,3,2,2,1,1,1,1,2,2,2,2,2,4,4,2,2,3,2,2,3,4,4,2,2,2,3,4,2,2,3,3,2,2,4,4,2,3,3,3,4,2,3,2,3,3,2,2,2,2,3,3,2,2,3', '2018-01-06', '1515228797', '5a508e7d7e338', '5a506f9c109b7', 'employee'),
(7, '5a5072de74f5f', 'vanessa@squartech.com', '256', 'ETI', '4,1,1,3,1,3,3,1,2,1,1,1,1,1,3,1,1,1,3,3,3,2,1,1,1,4,2,2,2,2,1,1,1,3,1,1,1,2,2,2,1,1,1,1,1,2,3,2,3,2,1,4,1,1,2,1,1,1,1,2,1,1,1,1,2,1,1,1,1,4,1,1,1,1,1,2,1,1,1,3,1,2,1,2,1,1,3,4,5,5', '2018-01-06', '1515228862', '5a508ebe6b482', '5a506f9c109b7', 'employee'),
(8, '5a25294b1f946', 'aniket@squartech.com', '321', 'ptw', '1,2,1,2,1,1,1,2,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,1,1,2,1,2,1,1,2,1,1,2,2,2,2,2,1,2,1,1,2,2,1,1,1,2,1,2,2,2,2,2,1,2,2,2,1,1,2,2,1,1,1,2,2,2,1,2,1,2,1,2,1,1,1,2,1,2,1,2,1,2,1,2,1,2,2,2,1,2,1,2,2,2,2,1,2,2,1,2,1,2,1,2,1,2,2,2,1,2,2,2,2,2,1,2,1,2,2,2', '2018-01-06', '1515228889', '5a508ed9621a42739', '', ''),
(9, '5a5072de78c27', 'mahesh@squartech.com', '321', 'PTW', '1,2,1,2,1,2,1,1,1,1,1,2,1,1,1,1,2,2,2,1,2,2,2,2,2,1,1,2,1,1,1,1,1,1,1,1,1,2,2,1,1,1,1,1,1,2,1,1,2,1,2,2,2,2,1,2,1,1,1,2,1,2,2,1,2,2,1,2,2,1,1,1,1,2,2,2,1,1,1,2,2,2,1,2,2,1,2,2,1,2,1,2,1,2,1,2,2,2,2,1,1,2,1,2,2,2,2,2,2,2,2,1,1,1,2,1,2,2,2,2,2,1,1,1', '2018-01-06', '1515229064', '5a508f8836e314630', '5a506f9c109b7', 'employee'),
(10, '5a25294b1f946', 'aniket@squartech.com', '256', 'ETI', '2,1,2,2,3,5,4,1,1,2,1,2,1,1,4,2,2,2,2,2,5,3,2,2,1,3,1,2,2,2,2,2,1,3,2,2,2,2,2,3,2,3,2,2,2,2,3,2,3,2,1,2,1,2,2,2,2,2,1,2,2,2,2,2,2,2,1,2,2,2,4,2,2,2,4,2,3,2,1,3,3,2,2,2,2,3,4,4,5,5', '2018-01-06', '1515229542', '5a5091660781f', '', ''),
(11, '5a5072de70cb9', 'karan@squartech.com', '256', 'ETI', '3,3,4,3,2,2,4,4,3,1,2,2,1,3,3,3,2,4,3,3,3,2,3,3,4,3,2,2,2,2,1,2,3,3,2,2,2,3,2,3,3,3,2,2,2,3,3,2,3,3,2,3,3,2,2,2,1,1,1,3,2,3,3,3,2,3,3,1,1,3,3,3,2,1,2,3,3,2,3,3,4,2,3,3,2,2,4,4,4,4', '2018-01-06', '1515229790', '5a50925e4db80', '5a506f9c109b7', 'employee'),
(12, '5a5072de78c27', 'mahesh@squartech.com', '256', 'ETI', '1,1,1,2,2,4,4,5,2,1,3,5,1,5,1,2,5,3,5,2,4,1,2,3,3,1,4,2,3,4,1,2,2,2,2,3,4,4,1,4,1,3,2,1,1,5,2,1,5,2,4,2,2,2,1,1,1,4,4,4,2,2,2,2,2,2,2,2,2,5,2,2,2,2,2,4,4,4,2,2,2,1,2,4,4,2,2,4,4,4', '2018-01-06', '1515229848', '5a509298d84f2', '5a506f9c109b7', 'employee'),
(13, '5a5072de74f5f', 'vanessa@squartech.com', '321', 'PTW', '1,2,1,2,1,2,1,1,1,1,1,2,2,1,1,1,2,1,1,2,2,1,1,2,2,1,1,1,1,2,1,1,2,1,1,1,1,2,1,1,1,2,1,1,1,2,1,2,1,2,2,2,1,1,2,2,1,2,2,2,1,2,1,1,1,2,1,1,1,1,1,1,1,2,1,2,1,2,1,2,1,2,1,1,1,1,2,1,1,1,2,1,1,2,2,1,1,2,2,1,2,2,2,2,1,2,1,2,1,1,2,2,1,2,2,1,2,1,2,2,1,2,2,1', '2018-01-06', '1515230329', '5a509479c1f088690', '5a506f9c109b7', 'employee'),
(14, '5a25294b1f946', 'aniket@squartech.com', '1456', 'CPTI', '3,2,3,2,1,1,4,4,2,3,3,3,2,4,1,1,1,4,1,1,2,2,2,3,2,1,3,4,4,3,4,3,4,2,2,2,2,2,3,2,4,1,1,1,3,1,3,2,1,2,3,4,3,1,4,4,3,3,4,3,1,2,3,3,3,4,4,2,2,1,2,2,3,2,3,4,4,3,3,3,3,3,3,3,3,4,3,3,4,4,3,3,4,4,3,3,3,3,3,4,3,4,3,4,3,3,4,3,2,2,2,2,2,3,1,2,2', '2018-01-06', '1515230940', '5a5096dc96436', '', ''),
(15, '5a5072de78c27', 'mahesh@squartech.com', '1456', 'CPTI', '4,1,1,4,1,1,1,1,4,4,1,1,4,1,4,1,3,4,1,4,1,3,4,1,1,4,1,1,4,4,1,1,4,3,4,3,4,1,1,1,3,3,1,3,4,2,3,3,1,4,1,4,4,1,4,1,1,4,4,1,4,1,1,3,4,4,3,1,1,3,3,1,1,4,4,4,4,1,1,1,1,1,4,1,4,1,3,4,1,4,3,3,1,4,1,4,1,4,2,3,4,4,1,1,3,3,1,4,1,3,4,2,4,4,4,3,4', '2018-01-06', '1515231675', '5a5099bb13c3f', '5a506f9c109b7', 'employee'),
(16, '5a5072de70cb9', 'karan@squartech.com', '321', 'PTW', '1,2,1,2,1,2,2,1,1,1,2,2,2,2,2,1,1,2,2,1,2,1,1,2,2,1,1,2,1,2,1,1,2,2,1,1,2,2,2,2,1,2,1,2,1,2,2,1,2,1,1,1,2,1,1,2,1,2,1,1,1,1,1,1,1,1,1,2,2,1,2,1,1,2,1,2,2,1,2,2,1,1,1,2,1,1,1,1,1,1,2,1,2,1,1,2,2,2,2,1,2,2,1,2,1,1,1,2,1,1,2,2,2,1,2,1,1,2,1,2,1,2,2,1', '2018-01-06', '1515231829', '5a509a558ac119621', '5a506f9c109b7', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `referralhistory`
--

CREATE TABLE `referralhistory` (
  `id` int(100) NOT NULL,
  `refuserid` varchar(255) NOT NULL,
  `refusername` varchar(255) NOT NULL,
  `reftoemail` varchar(255) NOT NULL,
  `refdate` varchar(255) NOT NULL,
  `refstatus` varchar(255) NOT NULL DEFAULT 'pending',
  `refid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regcandidate`
--

CREATE TABLE `regcandidate` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `actualpassword` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `orgusername` varchar(255) NOT NULL,
  `orgid` varchar(255) NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `age` varchar(3) NOT NULL,
  `aboutme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regcandidate`
--

INSERT INTO `regcandidate` (`id`, `fname`, `lname`, `gender`, `designation`, `email`, `mobile`, `username`, `password`, `actualpassword`, `description`, `orgusername`, `orgid`, `uniqid`, `image`, `qualification`, `address`, `city`, `country`, `postal`, `age`, `aboutme`) VALUES
(1, 'Anil', 'Borse', 'male', 'Developer', 'anil@squartech.com', '8888888888', 'anil@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'Developer', 'vikas.s@squartech.com', '5a0ab5307a691', '5a0bd3cf75ec9', '1510741598.jpg', '', '', '', '', '', '', ''),
(2, 'Najeeb', 'Mankar', 'male', 'Digital Marketing Expert', 'najeeb@squartech.com', '1234565555', 'najeeb@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'Work as digital marketing expert.', 'vikas.s@squartech.com', '5a0ab5307a691', '5a0c324296afb', '', '', '', '', '', '', '', ''),
(3, 'Chintan', 'Parekh', 'male', 'OM', 'chintan@squartech.com', '9833386777', 'chintan@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'ok', 'debjani@sparkletengineers.com', '5a45f254ad2ba', '5a45f518d8254', '', '', '', '', '', '', '', ''),
(4, 'Sourav', 'Sarangi', 'male', 'Asst. Manager', 'sourav01@outlook.com', '9679913093', 'sourav01@outlook.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'Study scope of work. AFC drawing review. Coordinate with colleague & sub contractors. Review of QC plans and ensure all activities are as per requirements. preparation of RA bills. Update & execute all activities as per schedute ', 'debjani@sparkletengineers.com', '5a45f254ad2ba', '5a460ad3893ae', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `regemployee`
--

CREATE TABLE `regemployee` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `actualpassword` varchar(255) NOT NULL,
  `verify_password` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `orgusername` varchar(255) NOT NULL,
  `orgid` varchar(255) NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `aboutme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regemployee`
--

INSERT INTO `regemployee` (`id`, `fname`, `lname`, `email`, `mobile`, `image`, `gender`, `age`, `address`, `qualification`, `username`, `password`, `actualpassword`, `verify_password`, `description`, `orgusername`, `orgid`, `uniqid`, `city`, `state`, `country`, `postal`, `aboutme`) VALUES
(1, 'Prashant', 'Singh', 'prashant.s@squartech.com', '1234569874', '', '', '', '', '', 'prashant.s@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 'This is Prashant Singh here.', 'vikas.s@squartech.com', '5a1427e9e07da', '5a142e2c55f13', '', '', '', '', ''),
(2, 'Rupesh', 'Chaudhary', 'rupesh.c@squartech.com', '1234569875', '', '', '', '', '', 'rupesh.c@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 'This is Rupesh Chaudhari here.', 'vikas.s@squartech.com', '5a1427e9e07da', '5a142e2c5d300', '', '', '', '', ''),
(3, 'Aniket', 'Manjrekar', 'aniket@squartech.com', '+91 80805 13456', '', '', '', '', '', 'aniket@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 'Animation', 'contact@squartech.com', '5a506f9c109b7', '5a5072de6cc99', '', '', '', '', ''),
(4, 'Karan', 'Patel', 'karan@squartech.com', '9167077927', '1515227625.png', '', '', '', '', 'karan@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 'Animation', 'contact@squartech.com', '5a506f9c109b7', '5a5072de70cb9', '', '', '', '', ''),
(5, 'Vanessa', 'Whavale', 'vanessa@squartech.com', '8454040469', '1515222681.jpg', '', '', '', '', 'vanessa@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 'Animation', 'contact@squartech.com', '5a506f9c109b7', '5a5072de74f5f', '', '', '', '', ''),
(6, 'Mahesh', 'Satpute', 'mahesh@squartech.com', '+91 96642 15433', '', '', '', '', '', 'mahesh@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 'Animation', 'contact@squartech.com', '5a506f9c109b7', '5a5072de78c27', '', '', '', '', ''),
(7, 'Tushar', 'Sonawane', 'tushar.s@squartech.com', '+91 98235 32536', '', '', '', '', '', 'tushar.s@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 'PHP', 'contact@squartech.com', '5a506f9c109b7', '5a5072de7c95f', '', '', '', '', ''),
(8, 'Vikas', 'Singh', 'vikas.s@squartech.com', '+918149651537', '', '', '', '', '', 'vikas.s@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 'PHP', 'contact@squartech.com', '5a506f9c109b7', '5a5072de80e4a', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `regindividual`
--

CREATE TABLE `regindividual` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postal` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `aboutme` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `actualpassword` varchar(255) NOT NULL,
  `verify_password` varchar(50) NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `referralbal` varchar(10) NOT NULL,
  `referralcode` varchar(255) NOT NULL,
  `referedby` varchar(255) NOT NULL COMMENT 'uniqid of user by which refered'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regindividual`
--

INSERT INTO `regindividual` (`id`, `fname`, `lname`, `age`, `gender`, `email`, `qualification`, `mobile`, `address`, `city`, `country`, `postal`, `username`, `password`, `image`, `aboutme`, `date`, `time`, `actualpassword`, `verify_password`, `uniqid`, `referralbal`, `referralcode`, `referedby`) VALUES
(1, 'Shalaka', 'Satale', '0', 'Female', 'shalaka@squartech.com', 'Graduation', '1234567899', 'Mumbai', '', '', '', 'shalaka@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '1511328260.jpg', '', '2017-11-21', '1511328260', '123456', '', '5a150a040ed42', '', 'REF90268', ''),
(2, 'Aniket ', 'Manjerkar', '0', 'Male', 'aniket@squartech.com', 'Graduation', '1234567881', 'Mumbai', '', '', '', 'aniket@squartech.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '2017-12-04', '1512384843', '123456', '', '5a25294b1f946', '', 'REF12063', ''),
(3, 'Sourav', 'Sarangi', '0', 'Male', 'souravsarangi69@gmail.com', 'Diploma Mechanical Engineering', '9679913093', 'Panchghory\nBayenda', '', '', '', 'souravsarangi69@gmail.com', 'd1e6e9aa99a2e3622f9c171c7355bb6d', '', '', '2017-12-28', '1514530127', 'sourav123', '', '5a45e54f8de7e', '', 'REF72070', '');

-- --------------------------------------------------------

--
-- Table structure for table `regorganization`
--

CREATE TABLE `regorganization` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `actualpassword` varchar(255) NOT NULL,
  `verify_password` varchar(50) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `aboutcompany` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regorganization`
--

INSERT INTO `regorganization` (`id`, `username`, `uniqid`, `email`, `name`, `orgname`, `password`, `actualpassword`, `verify_password`, `mobile`, `website`, `regno`, `address`, `image`, `date`, `time`, `city`, `country`, `postal`, `aboutcompany`) VALUES
(1, 'vikas.s@squartech.com', '5a1427e9e07da', 'vikas.s@squartech.com', 'Vikas Singh', 'New Org', '202cb962ac59075b964b07152d234b70', '123', '', '1234567899', 'www.neworg.com', '123456', 'Mumbai', '1511270580.jpg', '2017-11-21', '1511270377', '', '', '', ''),
(2, 'aniket1@squartech.com', '5a17bde9548ed', 'aniket1@squartech.com', 'ANIKET MANJREKAR', 'SQUARTECH SOLUTIONS', '6e4a32c07c2f2250da01465e8907c6b2', 'squartech24', '', '9833386777', 'www.squartech.com', '27AXMPP6325Q1ZK', 'Dadar Mumbai', '', '2017-11-23', '1511505385', '', '', '', ''),
(3, 'debjani@sparkletengineers.com', '5a45f254ad2ba', 'debjani@sparkletengineers.com', 'Debjani Ghosh', 'Sparklet Engineers', '1ae1597b3c9c0fc32e99348e139475cc', '225512044', '', '1234567899', 'www.sparkletengineers.com', '1234567894', 'Mumbai', '', '2017-12-28', '1514533460', '', '', '', ''),
(4, 'contact@squartech.com', '5a506f9c109b7', 'contact@squartech.com', 'Chintan Parekh', 'Squartech Solutions', 'bfe6dade765360d1fa88552e3be2952f', 'squartech@24', '', '9833386777', 'www.squartech.com', '27AXMPP6325Q1ZK', 'Mumbai', '1515222126.jpg', '2018-01-05', '1515220892', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `superadminlogin`
--

CREATE TABLE `superadminlogin` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `actualpassword` varchar(255) NOT NULL,
  `verify_password` varchar(50) NOT NULL,
  `image` longtext NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadminlogin`
--

INSERT INTO `superadminlogin` (`id`, `name`, `username`, `password`, `uniqid`, `actualpassword`, `verify_password`, `image`, `email`) VALUES
(1, 'Chintan P', 'info@adnacgroup.com', '202cb962ac59075b964b07152d234b70', '123abc', '123', '123', 'assets/images/blog-1.jpg', 'info@adnacgroup.com');

-- --------------------------------------------------------

--
-- Table structure for table `testdetailsindividual`
--

CREATE TABLE `testdetailsindividual` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `testid` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `testqty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testdetailsindividual`
--

INSERT INTO `testdetailsindividual` (`id`, `userid`, `username`, `useremail`, `testid`, `testname`, `testqty`) VALUES
(1, '5a25294b1f946', 'aniket@squartech.com', 'aniket@squartech.com', '321', 'PTW', '1'),
(2, '5a25294b1f946', 'aniket@squartech.com', 'aniket@squartech.com', '256', 'ETI', '1'),
(3, '5a25294b1f946', 'aniket@squartech.com', 'aniket@squartech.com', '1456', 'CPTI', '1');

-- --------------------------------------------------------

--
-- Table structure for table `testdetailsorganization`
--

CREATE TABLE `testdetailsorganization` (
  `id` int(255) NOT NULL,
  `orgid` varchar(255) NOT NULL,
  `orgusername` varchar(255) NOT NULL,
  `orgemail` varchar(255) NOT NULL,
  `testid` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `testqty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testdetailsorganization`
--

INSERT INTO `testdetailsorganization` (`id`, `orgid`, `orgusername`, `orgemail`, `testid`, `testname`, `testqty`) VALUES
(1, '5a17bde9548ed', 'aniket@squartech.com', '', '321', 'PTW', '4'),
(2, '5a45f254ad2ba', 'debjani@sparkletengineers.com', '', '321', 'PTW', '12'),
(3, '5a45f254ad2ba', 'debjani@sparkletengineers.com', '', '256', 'ETI', '13'),
(4, '5a45f254ad2ba', 'debjani@sparkletengineers.com', '', '1456', 'CPTI', '13'),
(5, '5a506f9c109b7', 'contact@squartech.com', '', '321', 'PTW', '14'),
(6, '5a506f9c109b7', 'contact@squartech.com', '', '256', 'ETI', '14'),
(7, '5a506f9c109b7', 'contact@squartech.com', '', '1456', 'CPTI', '13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonialId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testresultind`
--

CREATE TABLE `testresultind` (
  `id` int(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `testid` varchar(255) NOT NULL,
  `testname` varchar(255) NOT NULL,
  `testresult` varchar(255) NOT NULL,
  `testdate` varchar(255) NOT NULL,
  `testtime` varchar(255) NOT NULL,
  `resultuniqid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testresultind`
--

INSERT INTO `testresultind` (`id`, `userid`, `username`, `testid`, `testname`, `testresult`, `testdate`, `testtime`, `resultuniqid`) VALUES
(1, '5a25294b1f946', 'aniket@squartech.com', '321', 'ptw', 'ENTP', '2018-01-06', '1515228889', '5a508ed9621a42739'),
(2, '5a25294b1f946', 'aniket@squartech.com', '256', 'ETI', 'Low', '2018-01-06', '1515229542', '5a5091660781f'),
(3, '5a25294b1f946', 'aniket@squartech.com', '1456', 'CPTI', 'ASSERTER', '2018-01-06', '1515230940', '5a5096dc96436');

-- --------------------------------------------------------

--
-- Table structure for table `testresultorg`
--

CREATE TABLE `testresultorg` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `testid` varchar(100) NOT NULL,
  `testname` varchar(100) NOT NULL,
  `testresult` varchar(255) NOT NULL,
  `testdate` varchar(100) NOT NULL,
  `testtime` varchar(100) NOT NULL,
  `orgid` varchar(100) NOT NULL,
  `orgname` varchar(100) NOT NULL,
  `resultuniqid` varchar(100) NOT NULL,
  `status` varchar(2) DEFAULT 'f'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testresultorg`
--

INSERT INTO `testresultorg` (`id`, `userid`, `username`, `usertype`, `testid`, `testname`, `testresult`, `testdate`, `testtime`, `orgid`, `orgname`, `resultuniqid`, `status`) VALUES
(1, '5a460ad3893ae', 'sourav01@outlook.com', 'candidate', '1456', 'CPTI', 'ADVENTURER', '2017-12-29', '1514544887', '5a45f254ad2ba', '', '5a461ef7beab5', 'f'),
(2, '5a460ad3893ae', 'sourav01@outlook.com', 'candidate', '256', 'ETI', 'Low', '2017-12-29', '1514546514', '5a45f254ad2ba', '', '5a46255283ba8', 'f'),
(3, '5a460ad3893ae', 'sourav01@outlook.com', 'candidate', '321', 'PTW', 'ENTP', '2017-12-29', '1514548968', '5a45f254ad2ba', '', '5a462ee8ce8718976', 'f'),
(4, '5a5072de74f5f', 'vanessa@squartech.com', 'employee', '1456', 'CPTI', 'ADVENTURER,ASSERTER', '2018-01-06', '1515228245', '5a506f9c109b7', '', '5a508c5527d83', 'f'),
(5, '5a5072de70cb9', 'karan@squartech.com', 'employee', '1456', 'CPTI', 'ACHIEVER', '2018-01-06', '1515228796', '5a506f9c109b7', '', '5a508e7c78ae6', 'f'),
(6, '5a5072de70cb9', 'karan@squartech.com', 'employee', '1456', 'CPTI', 'ACHIEVER', '2018-01-06', '1515228797', '5a506f9c109b7', '', '5a508e7d7e338', 'f'),
(7, '5a5072de74f5f', 'vanessa@squartech.com', 'employee', '256', 'ETI', 'Low', '2018-01-06', '1515228862', '5a506f9c109b7', '', '5a508ebe6b482', 'f'),
(8, '5a5072de78c27', 'mahesh@squartech.com', 'employee', '321', 'PTW', 'ENTP', '2018-01-06', '1515229064', '5a506f9c109b7', '', '5a508f8836e314630', 't'),
(9, '5a5072de70cb9', 'karan@squartech.com', 'employee', '256', 'ETI', 'Low', '2018-01-06', '1515229790', '5a506f9c109b7', '', '5a50925e4db80', 't'),
(10, '5a5072de78c27', 'mahesh@squartech.com', 'employee', '256', 'ETI', 'Low', '2018-01-06', '1515229848', '5a506f9c109b7', '', '5a509298d84f2', 'f'),
(11, '5a5072de74f5f', 'vanessa@squartech.com', 'employee', '321', 'PTW', 'ENTJ', '2018-01-06', '1515230329', '5a506f9c109b7', '', '5a509479c1f088690', 't'),
(12, '5a5072de78c27', 'mahesh@squartech.com', 'employee', '1456', 'CPTI', 'PEACEMAKER', '2018-01-06', '1515231675', '5a506f9c109b7', '', '5a5099bb13c3f', 't'),
(13, '5a5072de70cb9', 'karan@squartech.com', 'employee', '321', 'PTW', 'ESTP', '2018-01-06', '1515231829', '5a506f9c109b7', '', '5a509a558ac119621', 't');

-- --------------------------------------------------------

--
-- Table structure for table `testusertmp`
--

CREATE TABLE `testusertmp` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'a' COMMENT 'a for allowed test and na for not allowed to attemp test'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testusertmp`
--

INSERT INTO `testusertmp` (`id`, `userid`, `username`, `status`) VALUES
(1, '5a0ab568e5b0c', 'tushar.s@squartech.com', 'na'),
(2, '5a0ab5d4051c2', 'anil@squartech.com', 'a'),
(3, '5a0ab58186332', 'prashant.s@squartech.com', 'a'),
(4, '5a0bd385bc05c', 'tushar.s@squartech.com', 'a'),
(5, '5a0bd3a8b3148', 'prashant.s@squartech.com', 'a'),
(6, '5a0bf8297fe99', 'nelson@3stepdigital.com', 'na'),
(7, '5a0bf9b99fbe2', 'najeeb@squartech.com', 'a'),
(8, '5a0bd3cf75ec9', 'anil@squartech.com', 'na'),
(9, '5a0bf8526e7d2', 'govind@3stepdigital.com', 'a'),
(10, '5a0c324296afb', 'najeeb@squartech.com', 'a'),
(11, '5a0d470107b22', 'murtaza.m@squartech.com', 'a'),
(12, '5a150306b44e3', 'shalaka@squartech.com', 'a'),
(13, '5a150a040ed42', 'shalaka@squartech.com', 'a'),
(14, '5a25294b1f946', 'aniket@squartech.com', 'a'),
(15, '5a45e54f8de7e', 'souravsarangi69@gmail.com', 'a'),
(16, '5a45f518d8254', 'chintan@squartech.com', 'a'),
(17, '5a460ad3893ae', 'sourav01@outlook.com', 'na'),
(18, '5a5072de74f5f', 'vanessa@squartech.com', 'a'),
(19, '5a5072de70cb9', 'karan@squartech.com', 'na'),
(20, '5a5072de78c27', 'mahesh@squartech.com', 'na'),
(21, '5a5072de80e4a', 'vikas.s@squartech.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigntestempcan`
--
ALTER TABLE `assigntestempcan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buytestindividual`
--
ALTER TABLE `buytestindividual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buytestorganization`
--
ALTER TABLE `buytestorganization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `etiresultind`
--
ALTER TABLE `etiresultind`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etiresultorg`
--
ALTER TABLE `etiresultorg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listoftest`
--
ALTER TABLE `listoftest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optionofquestion`
--
ALTER TABLE `optionofquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionoftest`
--
ALTER TABLE `questionoftest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questoptinidividual`
--
ALTER TABLE `questoptinidividual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referralhistory`
--
ALTER TABLE `referralhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regcandidate`
--
ALTER TABLE `regcandidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regemployee`
--
ALTER TABLE `regemployee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regindividual`
--
ALTER TABLE `regindividual`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `regorganization`
--
ALTER TABLE `regorganization`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadminlogin`
--
ALTER TABLE `superadminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testdetailsindividual`
--
ALTER TABLE `testdetailsindividual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testdetailsorganization`
--
ALTER TABLE `testdetailsorganization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonialId`);

--
-- Indexes for table `testresultind`
--
ALTER TABLE `testresultind`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testresultorg`
--
ALTER TABLE `testresultorg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testusertmp`
--
ALTER TABLE `testusertmp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigntestempcan`
--
ALTER TABLE `assigntestempcan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `buytestindividual`
--
ALTER TABLE `buytestindividual`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buytestorganization`
--
ALTER TABLE `buytestorganization`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etiresultind`
--
ALTER TABLE `etiresultind`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `etiresultorg`
--
ALTER TABLE `etiresultorg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `listoftest`
--
ALTER TABLE `listoftest`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `optionofquestion`
--
ALTER TABLE `optionofquestion`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1237;

--
-- AUTO_INCREMENT for table `questionoftest`
--
ALTER TABLE `questionoftest`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=933;

--
-- AUTO_INCREMENT for table `questoptinidividual`
--
ALTER TABLE `questoptinidividual`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `referralhistory`
--
ALTER TABLE `referralhistory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regcandidate`
--
ALTER TABLE `regcandidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regemployee`
--
ALTER TABLE `regemployee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `regindividual`
--
ALTER TABLE `regindividual`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regorganization`
--
ALTER TABLE `regorganization`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `superadminlogin`
--
ALTER TABLE `superadminlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testdetailsindividual`
--
ALTER TABLE `testdetailsindividual`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testdetailsorganization`
--
ALTER TABLE `testdetailsorganization`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonialId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testresultind`
--
ALTER TABLE `testresultind`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testresultorg`
--
ALTER TABLE `testresultorg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testusertmp`
--
ALTER TABLE `testusertmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
