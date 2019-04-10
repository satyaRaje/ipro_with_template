-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 10:00 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ipro3d`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `password` varchar(500) NOT NULL,
  `flag` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblblog`
--

CREATE TABLE `tblblog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `blog_cont` text NOT NULL,
  `cust_id` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `flag` smallint(1) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblog`
--

INSERT INTO `tblblog` (`id`, `title`, `fname`, `blog_cont`, `cust_id`, `img1`, `img2`, `img3`, `flag`, `dt`) VALUES
(1, 'test', 'guarav@gmail.com', '\r\n                                this is my blog i like to write', 3, 'Screenshot_2018-12-28_at_10_52_05_AM1.png', '', '', 0, '2019-04-03 02:20:23'),
(2, 'asd', 'asd@g.c', 'this is my blog\r\n                                ', 3, 'Sample_Certificate_COE_Star_Performer.png', 'Sample_Certificate_COE_Star_Performer1.png', 'Sample_Certificate_Live_Project_Quikr.png', 0, '2019-04-03 02:20:23'),
(3, 'asd', 'asd@g.c', 'this is my blog\r\n                                ', 3, 'Sample_Certificate_COE_Star_Performer2.png', 'Sample_Certificate_COE_Star_Performer3.png', 'Sample_Certificate_Live_Project_Quikr1.png', 0, '2019-04-03 02:20:27'),
(4, 'sales and purchase', 'bygauravkad@gmail.com', '\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\n                                ', 3, 'Sample_Certificate_COE_Star_Performer4.png', 'Sample_Certificate_Live_Project_Quikr2.png', 'Sample_Certificate_COE_Surplus_Output.png', 1, '2019-04-03 02:42:25'),
(5, 'test by gaurav kad', 'gauravkad@gmail.com', 'these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.\r\n                                ', 3, 'Sample_Certificate_COE_Star_Performer5.png', 'Sample_Certificate_Live_Project_Quikr3.png', 'Sample_Certificate_COE_Outstanding_Quality.png', 1, '2019-04-03 02:45:09'),
(6, '', '', '&lt;p&gt;&lt;strong&gt;thesse&lt;/strong&gt;&lt;/p&gt;\r\n', 3, '', '', '', 0, '2019-04-03 03:02:03'),
(7, '', '', '&lt;p&gt;&lt;strong&gt;thesse&lt;/strong&gt;&lt;/p&gt;\r\n', 3, '', '', '', 0, '2019-04-03 03:02:42'),
(8, 'vibrant india', 'gauravkad@gmai.com', 'this is the book\r\n                                ', 3, 'Screenshot_2018-12-28_at_10_52_05_AM2.png', 'Sample_Certificate_COE_Outstanding_Quality1.png', 'Sample_Certificate_COE_Surplus_Output1.png', 1, '2019-04-03 07:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `pid` int(11) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `img` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `flag` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`pid`, `pname`, `qty`, `price`, `img`, `user_id`, `flag`) VALUES
(3, 'my prod', 1, 98600, 'http://localhost/ipro_with_template/uploads/admin_product/69898751/Screenshot_(2).png', 3, 0),
(1, 'file', 1, 960000, 'http://localhost/ipro_with_template/uploads/admin_product/143503085/Screenshot_(1).png', 3, 0),
(1, 'file', 4, 960000, 'http://localhost/ipro_with_template/uploads/admin_product/143503085/Screenshot_(1).png', 3, 0),
(3, 'my prod', 1, 98600, 'http://localhost/ipro_with_template/uploads/admin_product/69898751/Screenshot_(2).png', 3, 0),
(3, 'my prod', 1, 98600, 'http://localhost/ipro_with_template/uploads/admin_product/69898751/Screenshot_(2).png', 3, 0),
(3, 'my prod', 1, 98600, 'http://localhost/ipro_with_template/uploads/admin_product/69898751/Screenshot_(2).png', 3, 0),
(3, 'my prod', 1, 98600, 'http://localhost/ipro_with_template/uploads/admin_product/69898751/Screenshot_(2).png', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `id` int(11) NOT NULL,
  `companyName` varchar(150) NOT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbldilivery`
--

CREATE TABLE `tbldilivery` (
  `bid` int(11) NOT NULL,
  `tot` double NOT NULL,
  `billing_add` varchar(350) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `payment_mode` smallint(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `flag` smallint(6) NOT NULL,
  `date_stamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldilivery`
--

INSERT INTO `tbldilivery` (`bid`, `tot`, `billing_add`, `city`, `state`, `country`, `pincode`, `payment_mode`, `user_id`, `flag`, `date_stamp`) VALUES
(1, 4800000, 'N 11 E 36 2 MAYUR NAGAGAR HUDCO NEAR D MART                                                                ', '', '', '', '', 0, 7, 0, '2019-04-10 01:08:06'),
(2, 5095800, 'N 11 E 36 2 MAYUR NAGAGAR HUDCO NEAR D MART', '', '', '', '', 0, 3, 0, '2019-04-10 12:16:35'),
(3, 5293000, 'N 11 E 36 2 MAYUR NAGAGAR HUDCO NEAR D MART', '', '', '', '', 0, 3, 0, '2019-04-10 13:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `enq_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `info` varchar(30) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `feedback1` varchar(100) NOT NULL,
  `feedback2` varchar(100) NOT NULL,
  `feedback3` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`enq_id`, `name`, `mobile`, `email`, `info`, `ref`, `Message`, `feedback1`, `feedback2`, `feedback3`, `status`, `time_stamp`) VALUES
(11, 'Gaurava', '9561916860', 'gauravkad8@gmail.com', 'test', 'test', 'test', '', '', '', 0, '2019-01-21 14:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblindividual`
--

CREATE TABLE `tblindividual` (
  `id` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `gender` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `pwd` varchar(500) NOT NULL,
  `dateOfBirth` varchar(500) NOT NULL,
  `jobdesc` varchar(250) NOT NULL,
  `address` varchar(150) NOT NULL,
  `alternateAddress` varchar(150) NOT NULL,
  `flag` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `flag` smallint(6) NOT NULL,
  `dir_url` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `rdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address1` varchar(250) NOT NULL,
  `address2` varchar(250) NOT NULL,
  `address3` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `job_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`id`, `fname`, `email`, `mobile`, `flag`, `dir_url`, `password`, `rdate`, `address1`, `address2`, `address3`, `city`, `state`, `country`, `job_desc`) VALUES
(1, '', 't@g.c', '9561916860', 0, '802680', 'b09c600fddc573f117449b3723f23d64', '2019-01-17 15:35:39', '', '', '', '', '', '', ''),
(2, 'admin', 'admin@ipro3d.io', '9561916860', 1, '5566', '7ece99e593ff5dd200e2b9233d9ba654', '2019-01-17 15:35:39', '', '', '', '', '', '', ''),
(3, 'GAURAV', 'customer@ipro3d.io', '9561916860', 0, '6666', '7ece99e593ff5dd200e2b9233d9ba654', '2019-04-10 06:46:17', 'N 11 E 36 2 MAYUR NAGAGAR HUDCO NEAR D MART', 'admininiasdfjl u                                                              ', 'aksjdnfjkasndlkjfn                                                                        ', 'worker', 'worker', 'worker', ''),
(4, '', 'test@gmail.com', '9561916860', 0, '446080', 'b09c600fddc573f117449b3723f23d64', '2019-01-17 15:35:39', '', '', '', '', '', '', ''),
(5, '', 'poo@g.c', '9561916860', 0, '1106798', 'b09c600fddc573f117449b3723f23d64', '2019-01-18 16:27:33', '', '', '', '', '', '', ''),
(6, '', 'yogesh.p408@gmail.com', '8149586602', 0, '1039760', '2172c56e67f5004d0d0cb74588a320a0', '2019-01-20 06:18:08', '', '', '', '', '', '', ''),
(7, 'gaurav kad patil', 'gauravkad8@gmail.com', '9561916860', 0, '1032526', 'b09c600fddc573f117449b3723f23d64', '2019-04-09 17:34:31', 'N 11 E 36 2 MAYUR NAGAGAR HUDCO NEAR D MART                                                                ', '                                                                                     public function update_profile(){\r\n                                                                                                                                  ', '                                                                                     public function update_profile(){\r\n                                                                                                                                  ', 'Choose...', 'Choose...', 'Choose...', ''),
(8, '', 'KAD.GAURAV.GAURAV447@GMAIL.COM', '9561916860', 0, '1088639', '21232f297a57a5a743894a0e4a801fc3', '2019-01-23 20:00:47', '', '', '', '', '', '', ''),
(9, '', 'joshipunam207@gmail.com', '7218374140', 0, '508292', '0c2d43a195472ecd294c6428c82db42e', '2019-01-24 11:04:47', '', '', '', '', '', '', ''),
(10, '', 'techarkay@gmail.com', '9561916860', 0, '982202', 'b09c600fddc573f117449b3723f23d64', '2019-01-26 18:00:22', '', '', '', '', '', '', ''),
(11, '', 'joshi96gajanan@gmail.com', '7020384302', 0, '231115', '6ecd817583cc2946deb1c23d8af82c06', '2019-01-28 08:44:41', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblmarketreview`
--

CREATE TABLE `tblmarketreview` (
  `pid` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `flag` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `catageory` varchar(150) NOT NULL,
  `product_price` float NOT NULL,
  `discount` float NOT NULL,
  `file_url` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userId` int(11) NOT NULL,
  `images` varchar(500) NOT NULL,
  `sqnNo` varchar(150) NOT NULL,
  `height` double NOT NULL,
  `width` double NOT NULL,
  `volume` double NOT NULL,
  `color` varchar(150) NOT NULL,
  `diameter` double NOT NULL,
  `flag` int(11) NOT NULL,
  `front_View` varchar(500) NOT NULL,
  `bottom_view` varchar(500) NOT NULL,
  `left_view` varchar(500) NOT NULL,
  `right_view` varchar(500) NOT NULL,
  `top_view` varchar(500) NOT NULL,
  `isomatric_view` varchar(500) NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `MRP` double NOT NULL,
  `rand` varchar(100) NOT NULL,
  `customer_quote` double NOT NULL,
  `admin_quote` double NOT NULL,
  `alise_name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`pid`, `pname`, `description`, `catageory`, `product_price`, `discount`, `file_url`, `date`, `userId`, `images`, `sqnNo`, `height`, `width`, `volume`, `color`, `diameter`, `flag`, `front_View`, `bottom_view`, `left_view`, `right_view`, `top_view`, `isomatric_view`, `uploaded_by`, `MRP`, `rand`, `customer_quote`, `admin_quote`, `alise_name`) VALUES
(1, 'file', '', '', 0, 0, '2018-9-19_111054_(1).pdf', '2019-04-09 16:05:39', 0, '', '', 0, 0, 0, '', 0, 18, 'Screenshot_(1).png', 'Screenshot_(2)1.png', 'Screenshot_(2)2.png', 'Screenshot_(1)1.png', 'Screenshot_(2).png', 'Screenshot_(2)3.png', 7, 0, '143503085', 986000, 960000, ''),
(2, 'product test', 'this is good pridct', 'Printing', 0, 0, '2018-9-19_111054_(1).pdf', '2019-04-10 06:36:24', 0, '', '', 9600, 9600, 9600, 'Blue', 980, 18, 'Screenshot_(1).png', '', '', '', 'Screenshot_(2).png', '', 3, 0, '68396797', 96000, 9800, ''),
(3, 'my prod', 'these', 'Printing', 0, 0, '2018-9-19_111054_(2).pdf', '2019-04-10 06:40:45', 0, '', '', 9860, 9860, 956, 'red', 1200, 18, 'Screenshot_(2).png', '', '', '', 'Screenshot_(2)1.png', '', 3, 0, '69898751', 98600, 98600, ''),
(4, 'uuu', '', '', 0, 0, '2018-9-19_111054.pdf', '2019-04-10 07:04:53', 0, '', '', 0, 0, 0, '', 0, 11, 'Screenshot_(1).png', '', '', '', '', '', 3, 0, '133290373', 980, 9500, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblquote`
--

CREATE TABLE `tblquote` (
  `quote_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file` varchar(300) NOT NULL,
  `info` varchar(20) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  `feedback1` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblshop`
--

CREATE TABLE `tblshop` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `catageory` varchar(150) NOT NULL,
  `product_price` float NOT NULL,
  `discount` float NOT NULL,
  `file_url` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userId` int(11) NOT NULL,
  `images` varchar(500) NOT NULL,
  `sqnNo` varchar(150) NOT NULL,
  `height` double NOT NULL,
  `width` double NOT NULL,
  `volume` double NOT NULL,
  `color` varchar(150) NOT NULL,
  `diameter` double NOT NULL,
  `flag` int(11) NOT NULL,
  `front_View` varchar(500) NOT NULL,
  `bottom_view` varchar(500) NOT NULL,
  `left_view` varchar(500) NOT NULL,
  `right_view` varchar(500) NOT NULL,
  `top_view` varchar(500) NOT NULL,
  `isomatric_view` varchar(500) NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `MRP` double NOT NULL,
  `rand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblshop`
--

INSERT INTO `tblshop` (`pid`, `pname`, `description`, `catageory`, `product_price`, `discount`, `file_url`, `date`, `userId`, `images`, `sqnNo`, `height`, `width`, `volume`, `color`, `diameter`, `flag`, `front_View`, `bottom_view`, `left_view`, `right_view`, `top_view`, `isomatric_view`, `uploaded_by`, `MRP`, `rand`) VALUES
(1, 'Gaurav', '12', 'Printing', 0, 0, '', '2019-04-03 14:17:18', 0, '', '', 1, 21, 2, '12', 12, 11, 'Screenshot_2018-12-28_at_10_52_05_AM1.png', '', '', '', '', '', 2, 12, ''),
(2, 'Gaurav', '12', 'Printing', 0, 0, '', '2019-04-03 14:24:09', 0, '', '', 1, 21, 2, '12', 12, 18, '', '', '', '', '', '', 2, 12, ''),
(3, 'gaurav100', '12', 'Printing', 0, 0, '', '2019-04-03 14:24:47', 0, '', '', 21, 21, 21, '2', 12, 11, 'Screenshot_2018-12-28_at_10_52_05_AM2.png', '', '', '', 'Sample_Certificate_COE_Star_Performer.png', '', 2, 1, ''),
(4, 'gaurav100', '12', 'Printing', 0, 0, '', '2019-04-03 14:25:27', 0, '', '', 21, 21, 21, '2', 12, 18, 'Screenshot_2018-12-28_at_10_52_05_AM.png', 'Sample_Certificate_COE_Surplus_Output.png', 'Sample_Certificate_COE_Outstanding_Quality.png', 'Sample_Certificate_Live_Project_Quikr.png', 'Screenshot_2018-12-28_at_10_52_05_AM1.png', 'Sample_Certificate_COE_Outstanding_Quality2.png', 2, 1, ''),
(5, 'testt', '212', 'Printing', 0, 0, '', '2019-04-03 14:30:19', 0, '', '', 21, 2, 12, '12', 1, 18, '', '', '', '', '', '', 2, 121, '8580'),
(6, 'testt', '212', 'Printing', 0, 0, '', '2019-04-03 14:32:07', 0, '', '', 21, 2, 12, '12', 1, 18, 'Screenshot_2018-12-28_at_10_52_05_AM.png', '', '', '', '', '', 2, 121, '179967162'),
(7, 'testt', '212', 'Printing', 0, 0, '', '2019-04-03 14:32:45', 0, '', '', 21, 2, 12, '12', 1, 18, '', '', '', '', '', '', 2, 121, '468619349'),
(8, 'testt', '212', 'Printing', 0, 0, '', '2019-04-03 14:32:54', 0, '', '', 21, 2, 12, '12', 1, 18, 'Screenshot_2018-12-28_at_10_52_05_AM.png', '', '', '', 'Screenshot_2018-12-28_at_10_52_05_AM1.png', '', 2, 121, '297952456'),
(9, 'testt', '212', 'Printing', 0, 0, '', '2019-04-03 14:35:24', 0, '', '', 21, 2, 12, '12', 1, 18, 'Screenshot_2018-12-28_at_10_52_05_AM.png', '', '', '', 'Sample_Certificate_COE_Outstanding_Quality1.png', '', 2, 121, '298444808'),
(10, 'testt', '212', 'Printing', 0, 0, '', '2019-04-03 14:35:26', 0, '', '', 21, 2, 12, '12', 1, 18, 'Screenshot_2018-12-28_at_10_52_05_AM.png', 'Sample_Certificate_COE_Star_Performer.png', 'Sample_Certificate_COE_Star_Performer1.png', 'Sample_Certificate_Live_Project_Quikr.png', 'Sample_Certificate_COE_Outstanding_Quality.png', 'Sample_Certificate_COE_Outstanding_Quality5.png', 2, 121, '405583452'),
(11, 'testt', '212', 'Printing', 0, 0, '', '2019-04-03 14:36:55', 0, '', '', 21, 2, 12, '12', 1, 18, 'Screenshot_2018-12-28_at_10_52_05_AM.png', '', '', '', '', '', 2, 121, '147800205'),
(12, 'test11', '1', 'Printing', 0, 0, '', '2019-04-03 15:16:14', 0, '', '', 1, 21, 2, '12', 12, 11, '', '', '', '', '', '', 2, 12, '504038808'),
(13, 'test shop product', '100', 'Printing', 0, 0, '', '2019-04-04 16:25:35', 0, '', '', 20, 2, 2, 'red', 100, 11, 'Screenshot_2018-12-28_at_10_52_05_AM.png', 'Sample_Certificate_Live_Project_Quikr.png', 'Sample_Certificate_Live_Project_Quikr1.png', 'Sample_Certificate_COE_Outstanding_Quality.png', 'Sample_Certificate_COE_Surplus_Output.png', 'Screenshot_2018-12-28_at_10_52_05_AM1.png', 2, 20, '368299025');

-- --------------------------------------------------------

--
-- Table structure for table `tblshopreview`
--
-- in use(#1932 - Table 'db_ipro3d.tblshopreview' doesn't exist in engine)
-- Error reading data: (#1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `db_ipro3d`.`tblshopreview`' at line 1)

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaction`
--

CREATE TABLE `tbltransaction` (
  `pid` int(11) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `cost` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `flag` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaction`
--

INSERT INTO `tbltransaction` (`pid`, `pname`, `cost`, `user_id`, `bid`, `flag`) VALUES
(1, 'file', 960000, 7, 1, 0),
(2, '', 0, 7, 1, 0),
(3, 'file', 960000, 7, 2, 0),
(4, '', 0, 7, 2, 0),
(5, '', 0, 7, 2, 0),
(6, 'my prod', 98600, 3, 2, 0),
(7, '', 0, 3, 2, 0),
(8, '', 0, 3, 2, 0),
(9, '', 0, 3, 2, 0),
(10, '', 0, 3, 2, 0),
(11, '', 0, 3, 2, 0),
(12, 'my prod', 98600, 3, 3, 0),
(13, '', 0, 3, 3, 0),
(14, '', 0, 3, 3, 0),
(15, '', 0, 3, 3, 0),
(16, '', 0, 3, 3, 0),
(17, '', 0, 3, 3, 0),
(18, '', 0, 3, 3, 0),
(19, '', 0, 3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_message`
--

CREATE TABLE `tbl_admin_message` (
  `id` int(11) NOT NULL,
  `message` varchar(250) NOT NULL,
  `from_msg` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_message`
--

INSERT INTO `tbl_admin_message` (`id`, `message`, `from_msg`, `flag`) VALUES
(1, 'Pid 4 For Product : my product this is the gaurav message     ', 3, 0),
(2, 'Pid 4 For <Br> Product : my product Message : this is the gaurav message     ', 3, 0),
(3, 'Pid 4 <br> Product : my product<br> Message : make my trip 65500', 3, 0),
(4, 'Pid 4 <br> Product : my product<br> Message : this product is best selling product you will get more benifit\r\n                                ', 3, 0),
(5, 'Pid 4 <br> Product : my product<br> Message : this product is best selling product you will get more benifit\r\n                                ', 3, 0),
(6, 'Pid 5 <br> Product : me upload<br> Message : this is my frame aurangabad\r\n                                ', 3, 0),
(7, 'Pid 4 <br> Product : my product<br> Message : this product is best selling product you will get more benifit\r\n                                ', 3, 0),
(8, 'Pid 7 <br> Product : tthes<br> Message : for my message\r\n                                ', 3, 0),
(9, 'Pid 18 <br> Product : pooja Message : oppppppp pppp pp p p p p', 3, 0),
(10, 'Pid 15 <br> Product : top gauravf Message : asdf', 3, 0),
(11, 'Pid 17 <br> Product : asdf Message : you\r\n                                ', 3, 0),
(12, 'Pid 19 <br> Product : dempo Message : final approval\r\n                                ', 3, 0),
(13, 'Pid 1 <br> Product : file Message : hello sir these is my application i want to sale these project at 96000\r\n                                ', 7, 0),
(14, 'Pid 1 <br> Product : file Message : final approval of proect\r\n                                ', 7, 0),
(15, 'Pid 2 <br> Product : product test Message : this product have some features and we can sumbit it           ', 3, 0),
(16, 'Pid 3 <br> Product : my prod Message : proadas\r\n                                ', 3, 0),
(17, 'Pid 4 <br> Product : uuu Message : this product is user\r\n                                ', 3, 0),
(18, 'Pid 4 <br> Product : uuu Message : gau\r\n                                ', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(11) NOT NULL,
  `message` varchar(350) NOT NULL,
  `to_msg` varchar(250) NOT NULL,
  `from_msg` varchar(250) NOT NULL,
  `flag` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `message`, `to_msg`, `from_msg`, `flag`) VALUES
(5, 'Pid 4 For Product : my product Message : asdf\r\n                                ', '', '', 0),
(6, 'Pid 4 For Product : my product Message : final this is your name gaurav and pay 10000 rs for me\n                                ', '', '', 0),
(7, 'Pid 4 For Product : my product Message : final this is your name gaurav and pay 10000 rs for me\r\n                                ', '', '', 0),
(8, 'Pid 4 For Product : my product Message : final this is your name gaurav and pay 10000 rs for me\r\n                                ', '', '', 0),
(9, 'Pid 4 For Product : my product Message : final this is your name gaurav and pay 10000 rs for me\r\n                                ', '', '', 0),
(10, 'Pid 4 For Product : my product Message : final this is your name gaurav and pay 10000 rs for me\r\n                                ', '', '', 0),
(11, 'Pid 4 For Product : my product Message : final this is your name gaurav and pay 10000 rs for me\r\n                                ', '', '', 0),
(12, 'Pid 4 For Product : my product Message : final this is your name gaurav and pay 10000 rs for me\r\n                                ', '', '', 0),
(13, 'Pid 4 For Product : my product Message : final this is your name gaurav and pay 10000 rs for me\r\n                                ', '', '', 0),
(14, 'Pid 4 For Product : my product Message : final this is your name gaurav and pay 10000 rs for me\r\n                                ', '', '', 0),
(15, 'Pid 4 For Product : my product Message : final gaurav', '', '', 0),
(16, 'Pid 4<br> Product : my product <br> Message : 956000 i can bare more than tese\r\n                                ', '', '', 0),
(17, 'Pid 5<br> Product : me upload <br> Message : kindly submit your price of product', '', '', 0),
(18, 'Pid 5<br> Product : me upload <br> Message : kindly submit your price of product', '', '', 0),
(19, 'Pid 4<br> Product : my product <br> Message : 956000 i can bare more than tese\r\n                                ', '', '', 0),
(20, 'Pid 5<br> Product : me upload <br> Message : kindly submit your price of product', '', '', 0),
(21, 'Pid 5<br> Product : me upload <br> Message : kindly submit your price of product', '', '', 0),
(22, 'Pid 5<br> Product : me upload <br> Message : kindly submit your price of product', '', '', 0),
(23, 'Pid 5<br> Product : me upload <br> Message : kindly submit your price of product', '', '', 0),
(24, 'Pid 5<br> Product : me upload <br> Message : kindly submit your price of product', '', '', 0),
(25, 'Pid 4<br> Product : my product <br> Message : 956000 i can bare more than tese\r\n                                ', '', '', 0),
(26, 'Pid 7<br> Product : tthes <br> Message : final report', '', '', 0),
(27, 'Pid 8<br> Product : top gaurav <br> Message : final\r\n                                ', '', '', 0),
(28, 'Pid 15<br> Product : top gauravf <br> Message : \r\n                                zdkvnkdsnkj', '', '', 0),
(29, 'Pid 15<br> Product : top gauravf <br> Message : \r\n                                zdkvnkdsnkj', '', '', 0),
(30, 'Pid 19<br> Product : dempo <br> Message : please upload images of product and quotation\r\n                                ', '', '', 0),
(31, 'Pid 10<br> Product : gaurav <br> Message : back to customer', '', '', 0),
(32, 'Pid 19<br> Product : dempo <br> Message : adminii\r\n                                ', '', '', 0),
(33, 'Pid 12<br> Product : top gauravf <br> Message : kindly submit Images of product\r\n                                ', '', '', 0),
(34, 'Pid 12<br> Product : top gauravf <br> Message : kindly submit Images of product\r\n                                ', '', '', 0),
(35, 'Pid 8<br> Product : top gaurav <br> Message : test to gaurav\r\n                                ', '', '', 0),
(36, 'Pid 8<br> Product : top gaurav <br> Message : test to gaurav\r\n                                ', '', '', 0),
(37, 'Pid 7<br> Product : tthes <br> Message : 9800\r\n                                ', '', '', 0),
(38, 'Pid 7<br> Product : tthes <br> Message : 9800\r\n                                ', '', '', 0),
(39, 'Pid 1<br> Product : file <br> Message : these is message of approval', '', '', 0),
(40, 'Pid 2<br> Product : product test <br> Message : i can give 98000                 ', '', '', 0),
(41, 'Pid 3<br> Product : my prod <br> Message : we can just pay           ', '', '', 0),
(42, 'Pid 3<br> Product : my prod <br> Message : we can just pay           ', '', '', 0),
(43, 'Pid 4<br> Product : uuu <br> Message : gaurav\r\n                                ', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblog`
--
ALTER TABLE `tblblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldilivery`
--
ALTER TABLE `tbldilivery`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`enq_id`);

--
-- Indexes for table `tblindividual`
--
ALTER TABLE `tblindividual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tblquote`
--
ALTER TABLE `tblquote`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `tblshop`
--
ALTER TABLE `tblshop`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_admin_message`
--
ALTER TABLE `tbl_admin_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblblog`
--
ALTER TABLE `tblblog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbldilivery`
--
ALTER TABLE `tbldilivery`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `enq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tblindividual`
--
ALTER TABLE `tblindividual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblquote`
--
ALTER TABLE `tblquote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblshop`
--
ALTER TABLE `tblshop`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_admin_message`
--
ALTER TABLE `tbl_admin_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
