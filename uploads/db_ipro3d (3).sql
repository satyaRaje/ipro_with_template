-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 06:44 PM
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
(9, 'test_3', 3, 604, 'http://localhost/ipro_with_template/uploads/admin_product/test_3/IMG-20160331-WA0004.jpg', 3, 0);

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
  `rdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`id`, `fname`, `email`, `mobile`, `flag`, `dir_url`, `password`, `rdate`) VALUES
(1, '', 't@g.c', '9561916860', 0, '802680', 'b09c600fddc573f117449b3723f23d64', '2019-01-17 15:35:39'),
(2, 'admin', 'admin@ipro3d.io', '9561916860', 1, '5566', '7ece99e593ff5dd200e2b9233d9ba654', '2019-01-17 15:35:39'),
(3, 'customer', 'customer@ipro3d.io', '9561916860', 0, '6666', '7ece99e593ff5dd200e2b9233d9ba654', '2019-01-17 15:35:39'),
(4, '', 'test@gmail.com', '9561916860', 0, '446080', 'b09c600fddc573f117449b3723f23d64', '2019-01-17 15:35:39'),
(5, '', 'poo@g.c', '9561916860', 0, '1106798', 'b09c600fddc573f117449b3723f23d64', '2019-01-18 16:27:33'),
(6, '', 'yogesh.p408@gmail.com', '8149586602', 0, '1039760', '2172c56e67f5004d0d0cb74588a320a0', '2019-01-20 06:18:08'),
(7, '', 'gauravkad8@gmail.com', '9561916860', 0, '1032526', 'b09c600fddc573f117449b3723f23d64', '2019-01-23 15:52:08'),
(8, '', 'KAD.GAURAV.GAURAV447@GMAIL.COM', '9561916860', 0, '1088639', '21232f297a57a5a743894a0e4a801fc3', '2019-01-23 20:00:47'),
(9, '', 'joshipunam207@gmail.com', '7218374140', 0, '508292', '0c2d43a195472ecd294c6428c82db42e', '2019-01-24 11:04:47'),
(10, '', 'techarkay@gmail.com', '9561916860', 0, '982202', 'b09c600fddc573f117449b3723f23d64', '2019-01-26 18:00:22'),
(11, '', 'joshi96gajanan@gmail.com', '7020384302', 0, '231115', '6ecd817583cc2946deb1c23d8af82c06', '2019-01-28 08:44:41');

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
  `MRP` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`pid`, `pname`, `description`, `catageory`, `product_price`, `discount`, `file_url`, `date`, `userId`, `images`, `sqnNo`, `height`, `width`, `volume`, `color`, `diameter`, `flag`, `front_View`, `bottom_view`, `left_view`, `right_view`, `top_view`, `isomatric_view`, `uploaded_by`, `MRP`) VALUES
(1, 'Mobile Body', '', '', 200, 0, 'singResume1.pdf', '2019-01-26 17:43:32', 0, '', '', 0, 0, 0, '', 0, 99, '', '', '', '', '', '', 3, 0),
(2, 'test_mobile', '', '', 1000, 0, 'D83527GC10_1080544_US.pdf', '2019-01-26 17:44:20', 0, '', '', 0, 0, 0, '', 0, 99, '', '', '', '', '', '', 3, 0),
(3, 'test_admin', '130', 'Printing', 0, 0, '', '2019-01-28 16:59:25', 0, '', '', 130, 130, 130, '130', 130, 11, 'IMG-20160331-WA00041.jpg', 'IMG-20160331-WA0004.jpg', 'IMG-20160920-WA0014.jpg', 'IMG-20160401-WA0007.jpg', 'IMG-20160325-WA00062.jpg', 'IMG-20160402-WA0001.jpg', 0, 130),
(5, 'test_2', 'test_Descriptio', 'Printing', 1000, 0, '', '2019-01-28 17:32:25', 0, '', '', 130.5, 1000, 1000, '1000', 1000, 11, '40137812_269289793682181_6348274276977606656_n.jpg', '', '', '', 'Screenshot_2019-01-21-22-50-28-498_com_android_browser.png', '', 2, 1300),
(9, 'test_3', 'test_desc', 'Printing', 604, 0, '', '2019-01-28 17:37:54', 0, '', '', 1400, 1200, 100, 'red', 600, 18, 'IMG-20160331-WA0004.jpg', '', '', '', '', 'Screenshot_2019-01-28-07-41-40-899_com_whatsapp.png', 2, 100),
(10, 'test_5', '545', 'Printing', 0, 0, '', '2019-01-29 07:21:56', 0, '', '', 4545, 5454, 5454, '54', 54, 18, 'IMG-20160921-WA0007.jpg', '', '', '', '', '', 2, 456),
(11, 'test6', '600', 'Printing', 600, 0, '', '2019-01-29 10:56:54', 0, '', '', 600, 600, 600, '600', 600, 11, 'IMG-20160326-WA0002.jpg', '', '', '', '', '', 2, 600),
(12, 'prd_test', 'desc', 'Printing', 0, 0, '', '2019-01-30 10:03:02', 0, '', '', 100, 100, 1300, 'red', 600, 11, '', '', '', '', '', '', 2, 6500),
(13, 'punam\'s product', 'it should be look like pen', 'Printing', 0, 0, '', '2019-02-06 09:16:31', 0, '', '', 1.5, 1.3, 20, 'red', 1.5, 11, '', '', '', '', '', '', 2, 50),
(14, 'punam\'s product', 'it should be look like pen', 'Printing', 0, 0, '', '2019-02-06 09:17:30', 0, '', '', 1.5, 1.3, 20, 'red', 1.5, 11, '', '', '', '', '', '', 2, 50),
(15, '', '', 'Printing', 0, 0, '', '2019-02-06 09:19:53', 0, '', '', 0, 0, 0, '', 0, 11, '', '', '', '', '', '', 2, 0),
(16, 'gaurav', 'good product by guarav kad', 'Printing', 0, 0, '', '2019-04-02 15:57:09', 0, '', '', 1200, 1200, 120, 'red', 160, 18, 'Screenshot_2018-12-28_at_10_52_05_AM.png', '', '', '', '', '', 2, 650),
(17, 'this_is_my_product', 'good product', 'Printing', 0, 0, '', '2019-04-02 16:06:38', 0, '', '', 1200, 1200, 1200, 'red', 1600, 11, 'Screenshot_2018-12-28_at_10_52_05_AM.png', '', '', '', '', '', 2, 65000),
(18, 'final_gaurav', 'asdf is my description', 'Printing', 0, 0, '', '2019-04-02 16:07:55', 0, '', '', 1230, 6650, 6650, 'blue', 6000, 18, 'Sample_Certificate_COE_Surplus_Output.png', 'Sample_Certificate_COE_Star_Performer1.png', 'Screenshot_2018-12-28_at_10_52_05_AM2.png', 'Sample_Certificate_Live_Project_Quikr.png', 'Screenshot_2018-12-28_at_10_52_05_AM3.png', 'Sample_Certificate_COE_Outstanding_Quality.png', 3, 6500),
(19, 'pooa', '650', 'Printing', 0, 0, '', '2019-04-02 17:36:33', 0, '', '', 600, 600, 600, 'pink', 650, 11, 'Sample_Certificate_COE_Star_Performer1.png', '', '', '', 'Screenshot_2018-12-28_at_10_52_05_AM1.png', '', 3, 960),
(20, 'tppp', '1', 'Printing', 0, 0, '', '2019-04-02 17:38:03', 0, '', '', 121, 121, 21, '2', 12, 18, 'Screenshot_2018-12-28_at_10_52_05_AM.png', 'Sample_Certificate_COE_Surplus_Output.png', '', '', 'Screenshot_2018-12-28_at_10_52_05_AM1.png', '', 3, 0),
(21, '100test', '100', 'Printing', 0, 0, '', '2019-04-02 17:39:00', 0, '', '', 100, 100, 100, '100', 100, 100, '', '', '', '', '', '', 3, 100),
(22, 'mobile cover', 'good appeare', 'Printing', 0, 0, '', '2019-04-03 02:54:05', 0, '', '', 650, 605, 650, 'green', 600, 99, '', '', '', '', '', '', 3, 650),
(23, 'asdf', '12', 'Printing', 0, 0, '', '2019-04-03 02:54:56', 0, '', '', 12, 1, 21, '2', 12, 11, 'Screenshot_2018-12-28_at_10_52_05_AM.png', 'Sample_Certificate_COE_Surplus_Output.png', '', '', 'Screenshot_2018-12-28_at_10_52_05_AM1.png', '', 3, 12),
(24, 'pikachu', 'i would like describe these product it is really good product you should buy once', 'Printing', 0, 0, '', '2019-04-03 06:41:50', 0, '', '', 120, 1300, 200, 'red', 650, 100, 'Sample_Certificate_COE_Outstanding_Quality.png', 'Sample_Certificate_Live_Project_Quikr.png', '', 'Screenshot_2018-12-28_at_10_52_05_AM1.png', 'Screenshot_2018-12-28_at_10_52_05_AM.png', '', 3, 650),
(25, 'nikita', 'test descr', 'Printing', 0, 0, '', '2019-04-03 06:58:24', 0, '', '', 2, 0, 20, 'black', 0, 100, 'Screenshot_2018-12-28_at_10_52_05_AM1.png', 'Sample_Certificate_Live_Project_Quikr.png', '', '', 'Sample_Certificate_COE_Star_Performer.png', '', 3, 20),
(26, 'test6', 'description', 'Printing', 0, 0, '', '2019-04-03 09:52:13', 0, '', '', 150, 150, 1520, 'black', 20, 100, 'Sample_Certificate_COE_Outstanding_Quality.png', '', '', '', 'Sample_Certificate_COE_Surplus_Output.png', '', 3, 650),
(27, 'shop_first', '66', 'Printing', 0, 0, '', '2019-04-03 13:46:04', 0, '', '', 60, 6, 0, '60', 0, 11, '', '', '', '', '', '', 2, 60),
(28, 'test', '2', 'Printing', 0, 0, '', '2019-04-03 13:54:17', 0, '', '', 12, 12, 1, '21', 21, 11, '', '', '', '', '', '', 2, 212),
(29, 'test', '2', 'Printing', 0, 0, '', '2019-04-03 13:54:42', 0, '', '', 12, 12, 1, '21', 21, 11, '', '', '', '', '', '', 2, 212),
(30, 'asdf', '21', 'Printing', 0, 0, '', '2019-04-03 13:57:13', 0, '', '', 21, 21, 2, '12', 1, 11, '', '', '', '', '', '', 2, 1),
(31, 'asdf', '21', 'Printing', 0, 0, '', '2019-04-03 14:00:13', 0, '', '', 21, 21, 2, '12', 1, 11, '', '', '', '', '', '', 2, 1),
(32, 'test', '2', 'Printing', 0, 0, '', '2019-04-03 14:00:35', 0, '', '', 1, 1, 21, '2', 12, 11, '', '', '', '', '', '', 2, 12),
(33, 'test', '2', 'Printing', 0, 0, '', '2019-04-03 14:01:29', 0, '', '', 1, 1, 21, '2', 12, 11, '', '', '', '', '', '', 2, 12),
(34, 'test', '1', 'Printing', 0, 0, '', '2019-04-03 14:01:51', 0, '', '', 12, 21, 200, 'asdf', 1, 11, '', '', '', '', '', '', 2, 12),
(35, 'test', '1', 'Printing', 0, 0, '', '2019-04-03 14:07:46', 0, '', '', 12, 21, 200, 'asdf', 1, 11, '', '', '', '', '', '', 2, 12),
(36, 'test', '1', 'Printing', 0, 0, '', '2019-04-03 14:09:40', 0, '', '', 21, 21, 21, '2', 12, 11, '', '', '', '', '', '', 2, 1);

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
(1, 'Gaurav', '12', 'Printing', 0, 0, '', '2019-04-03 14:17:18', 0, '', '', 1, 21, 2, '12', 12, 18, 'Screenshot_2018-12-28_at_10_52_05_AM1.png', '', '', '', '', '', 2, 12, ''),
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
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
