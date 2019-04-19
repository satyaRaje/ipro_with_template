-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 10:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 'test', 'guarav@gmail.com', '\r\n                                this is my blog i like to write', 3, 'Screenshot_2018-12-28_at_10_52_05_AM1.png', '', '', 1, '2019-04-03 02:20:23'),
(2, 'asd', 'asd@g.c', 'this is my blog\r\n                                ', 3, 'Sample_Certificate_COE_Star_Performer.png', 'Sample_Certificate_COE_Star_Performer1.png', 'Sample_Certificate_Live_Project_Quikr.png', 0, '2019-04-03 02:20:23'),
(3, 'asd', 'asd@g.c', 'this is my blog\r\n                                ', 3, 'Sample_Certificate_COE_Star_Performer2.png', 'Sample_Certificate_COE_Star_Performer3.png', 'Sample_Certificate_Live_Project_Quikr1.png', 0, '2019-04-03 02:20:27'),
(4, 'sales and purchase', 'bygauravkad@gmail.com', '\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nChecking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\n                                ', 3, 'Sample_Certificate_COE_Star_Performer4.png', 'Sample_Certificate_Live_Project_Quikr2.png', 'Sample_Certificate_COE_Surplus_Output.png', 1, '2019-04-03 02:42:25'),
(5, 'test by gaurav kad', 'gauravkad@gmail.com', 'these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.these is the blog for test.\r\n                                ', 3, 'Sample_Certificate_COE_Star_Performer5.png', 'Sample_Certificate_Live_Project_Quikr3.png', 'Sample_Certificate_COE_Outstanding_Quality.png', 1, '2019-04-03 02:45:09'),
(6, '', '', '&lt;p&gt;&lt;strong&gt;thesse&lt;/strong&gt;&lt;/p&gt;\r\n', 3, '', '', '', 0, '2019-04-03 03:02:03'),
(7, '', '', '&lt;p&gt;&lt;strong&gt;thesse&lt;/strong&gt;&lt;/p&gt;\r\n', 3, '', '', '', 0, '2019-04-03 03:02:42'),
(8, 'vibrant india', 'gauravkad@gmai.com', 'this is the book\r\n                                ', 3, 'Screenshot_2018-12-28_at_10_52_05_AM2.png', 'Sample_Certificate_COE_Outstanding_Quality1.png', 'Sample_Certificate_COE_Surplus_Output1.png', 1, '2019-04-03 07:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `tblcareers`
--

CREATE TABLE `tblcareers` (
  `careers_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `year_of_passing` int(11) NOT NULL,
  `work` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcareers`
--

INSERT INTO `tblcareers` (`careers_id`, `email`, `name`, `father_name`, `mobile_no`, `position`, `education`, `college`, `degree`, `year_of_passing`, `work`) VALUES
(1, 'admin@ipro3d.io', 'zxcfg', 'qwerty', 1234567890, 'y', 'No', 'qwertyuiop', 'ertyu', 12345, 'sdfghjk'),
(2, 'customer@ipro3d.io', 'Swaranjali Kulkarni', 'ganesh kulkarni', 1234567890, 'x', 'No', 'asdfghjk', 'cvbn', 4567, 'dfghjkl'),
(3, 'customer@ipro3d.io', 'Swaranjali Kulkarni', 'ganesh kulkarni', 1234567890, 'x', 'No', 'asdfghjk', 'cvbn', 4567, 'dfghjkl'),
(4, 'customer@ipro3d.io', 'sdfghjk', 'bnmm', 1234567890, 'Design and Development ( Mechanical / Production / Industrial engineering)', 'No', 'dfghj', '3345', 5678, 'ertyuikjhgfds'),
(5, 'customer@ipro3d.io', 'zxcfg', 'bnmm', 1234567890, 'Marketing and strategic planning (Mechanical / computer science/ production/ industrial engineering', 'Masters', 'qwertyuiop', '567', 4567, 'asdfb');

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
(1, 'gaurav', 2, 1000, 'http://localhost/ipro_with_template/uploads/admin_product/28057385/Screenshot_(1).png', 3, 0),
(1, 'gaurav', 2, 1000, 'http://localhost/ipro_with_template/uploads/admin_product/28057385/Screenshot_(1).png', 3, 0);

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
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `info` varchar(150) NOT NULL,
  `known_us` varchar(150) NOT NULL,
  `message` varchar(250) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `name`, `mobile_no`, `email`, `info`, `known_us`, `message`, `flag`) VALUES
(1, 'GAURAV KAD', '6565656565', 'KAD.GAURAV.GAURAV447@GMAIL.COM', 'worker', 'news', 'fiinal gaurav kad', 0),
(2, 'poo', 'asdf', 'asdf@g.c', 'worker', 'news', 'asdfafd                                ', 0),
(3, 'final gaurav', '9970612561', 'gauravkad8@gmail.com', 'businessman', 'news', 'i am gaurav kad i want to won compitition full stack developer i want to win competition.                                ', 0),
(4, 'xyz', '12345678', 'customer@ipro3d.io', 'student', 'socialsites', '              ASDFGHJK                  ', 0),
(5, 'customer', '1234567890', 'customer@ipro3d.io', 'businessman', 'college', '      qwertyuiopfghjk                          ', 0);

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
(1, 1000, '', '', '', '', '', 0, 3, 0, '2019-04-17 17:10:25'),
(2, 4000, 'N 11 E 36 2 MAYUR NAGAGAR HUDCO NEAR D MART', '', '', '', '', 0, 3, 0, '2019-04-17 17:10:49');

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
-- Table structure for table `tblmutation`
--

CREATE TABLE `tblmutation` (
  `mutation_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `whatsapp_no` int(11) NOT NULL,
  `dob` date NOT NULL,
  `college_id` varchar(100) NOT NULL,
  `year_of_admission` int(11) NOT NULL,
  `year_of_study` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `interests` varchar(100) NOT NULL,
  `future_goals` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmutation`
--

INSERT INTO `tblmutation` (`mutation_id`, `email`, `name`, `mobile_no`, `whatsapp_no`, `dob`, `college_id`, `year_of_admission`, `year_of_study`, `degree`, `college`, `department`, `interests`, `future_goals`, `comments`) VALUES
(1, 'admin@ipro3d.io', 'Swaranjali Kulkarni', 1234567890, 1234567890, '0000-00-00', '12345', 2015, '1', '5', '1', '4', '5', '1', 'qwertyuiopasdfghjkl');

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
  `alise_name` varchar(350) NOT NULL,
  `loop_count` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`pid`, `pname`, `description`, `catageory`, `product_price`, `discount`, `file_url`, `date`, `userId`, `images`, `sqnNo`, `height`, `width`, `volume`, `color`, `diameter`, `flag`, `front_View`, `bottom_view`, `left_view`, `right_view`, `top_view`, `isomatric_view`, `uploaded_by`, `MRP`, `rand`, `customer_quote`, `admin_quote`, `alise_name`, `loop_count`) VALUES
(1, 'gaurav', 'these is good product', 'Printing', 0, 0, '', '2019-04-17 05:21:39', 0, '', '', 250, 100, 6500, 'Red', 250, 18, 'Screenshot_(1).png', 'Screenshot_(1)1.png', 'Screenshot_(2)3.png', 'Screenshot_(2)1.png', 'Screenshot_(2)2.png', 'Screenshot_(3).png', 2, 1000, '28057385', 0, 0, '', 0);

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
(1, 'Sugar_test', 'good describe', 'Printing', 0, 0, '', '2019-04-17 05:28:08', 0, '', '', 950, 250, 1233, 'Blue', 6580, 11, 'Screenshot_(1).png', '', '', '', '', '', 2, 680, '399794593');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `tid` int(11) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `tdesignation` varchar(100) NOT NULL,
  `tcompany` varchar(100) NOT NULL,
  `tcomment` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `flag` smallint(6) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaction`
--

INSERT INTO `tbltransaction` (`pid`, `pname`, `cost`, `user_id`, `bid`, `flag`, `qty`) VALUES
(1, 'gaurav', 1000, 3, 1, 0, 1),
(3, 'gaurav', 1000, 3, 2, 0, 2);

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
(18, 'Pid 4 <br> Product : uuu Message : gau\r\n                                ', 3, 0),
(19, 'Pid 6 <br> Product : test Message : i want to buy these product fot my use\r\n                                ', 3, 0),
(20, 'Pid 6 <br> Product : test Message : my product profile and your aggrement approval', 3, 0),
(21, 'Pid 6 <br> Product : test Message : produ\r\n                                ', 3, 0),
(22, 'Pid 6 <br> Product : test Message : these is gaurav message            ', 3, 0),
(23, 'Pid 6 <br> Product : test Message : these is gaurav message            ', 3, 0),
(24, 'Pid 5 <br> Product : file gaurav Message : my name is gaurav', 3, 0),
(25, 'Pid 5 <br> Product : file gaurav Message : i want the price exact 96800\r\n                                ', 3, 0),
(26, 'Pid 5 <br> Product : file gaurav Message : \r\n                                ', 3, 0),
(27, 'Pid 5 <br> Product : file gaurav Message : \r\n                                ', 3, 0),
(28, 'Pid 1 <br> Product : my gaurav Message : test gaurav\r\n                                ', 3, 0),
(29, 'Pid 1 <br> Product : my gaurav Message : test gaurav\r\n                                ', 3, 0),
(30, 'Pid 1 <br> Product : my gaurav Message : test gaurav\r\n                                ', 3, 0),
(31, 'Pid 1 <br> Product : my gaurav Message : test gaurav\r\n                                ', 3, 0),
(32, 'Pid 1 <br> Product : my gaurav Message : test gaurav\r\n                                ', 3, 0),
(33, 'Pid 1 <br> Product : my gaurav Message : test gaurav\r\n                                ', 3, 0),
(34, 'Pid 1 <br> Product : my gaurav Message : for unit price\r\n                                ', 3, 0),
(35, 'Pid 2 <br> Product : my test Message : these is test message\r\n                                ', 3, 0),
(36, 'Pid 2 <br> Product : my test Message : \r\n                                ', 3, 0),
(37, 'Pid 4 <br> Product : asdf Message : my rost', 3, 0),
(38, 'Pid 7 <br> Product : stl test Message : text approve my product\r\n                                ', 3, 0),
(39, 'Pid 10 <br> Product : file Message : ok mamma\r\n                                ', 3, 0),
(40, 'Pid 9 <br> Product : file Message : test                         ', 3, 0),
(41, 'Pid 11 <br> Product : guuu Message : kindly review these product                    ', 3, 0),
(42, 'Pid 11 <br> Product : guuu Message : profit\r\n                                ', 3, 0),
(43, 'Pid 7 <br> Product : stl test Message : file 14    ', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compaint`
--

CREATE TABLE `tbl_compaint` (
  `cid` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `complaint_text` varchar(250) NOT NULL,
  `flag` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_compaint`
--

INSERT INTO `tbl_compaint` (`cid`, `email`, `mobile`, `complaint_text`, `flag`) VALUES
(1, 'customer@ipro3d.io', '9561916860', 'My Complaint is Registered....!', 0),
(2, 'customer@ipro3d.io', '9561916860', 'My Complaint is Registered....!', 0),
(3, 'customer@ipro3d.io', '9561916860', 'My Complaint is Registered....!', 0);

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
(43, 'Pid 4<br> Product : uuu <br> Message : gaurav\r\n                                ', '', '', 0),
(44, 'Pid 6<br> Product : test <br> Message : we have verified these       ', '', '', 0),
(45, 'Pid 6<br> Product : test <br> Message : we have verified these       ', '', '', 0),
(46, 'Pid 6<br> Product : test <br> Message : we have verified these       ', '', '', 0),
(47, 'Pid 5<br> Product : file gaurav <br> Message : asdf\r\n                                ', '', '', 0),
(48, 'Pid 5<br> Product : file gaurav <br> Message : asdf\r\n                                ', '', '', 0),
(49, 'Pid 5<br> Product : file gaurav <br> Message : asdf\r\n                                ', '', '', 0),
(50, 'Pid 5<br> Product : file gaurav <br> Message : barganinig price of customer   ', '', '', 0),
(51, 'Pid 5<br> Product : file gaurav <br> Message : 98600\r\n                                ', '', '', 0),
(52, 'Pid 1<br> Product : my gaurav <br> Message : \r\n                         asdff       ', '', '', 0),
(53, 'Pid 1<br> Product : my gaurav <br> Message : \r\n                         asdff       ', '', '', 0),
(54, 'Pid 1<br> Product : my gaurav <br> Message : Final Price\r\n                                ', '', '', 0),
(55, 'Pid 1<br> Product : my gaurav <br> Message : Final Price\r\n                                ', '', '', 0),
(56, 'Pid 2<br> Product : my test <br> Message : these is good product\r\n                                ', '', '', 0),
(57, 'Pid 4<br> Product : asdf <br> Message : \r\n                                ', '', '', 0),
(58, 'Pid 4<br> Product : asdf <br> Message : test', '', '', 0),
(59, 'Pid 2<br> Product : my test <br> Message : figure  ', '', '', 0),
(60, 'Pid 4<br> Product : asdf <br> Message : this is message\r\n                                ', '', '', 0),
(61, 'Pid 7<br> Product : stl test <br> Message : fi\r\n                                ', '', '', 0),
(62, 'Pid 9<br> Product : file <br> Message : test\r\n                                ', '', '', 0),
(63, 'Pid 9<br> Product : file <br> Message : test\r\n                                ', '', '', 0),
(64, 'Pid 9<br> Product : file <br> Message : test\r\n                                ', '', '', 0),
(65, 'Pid 10<br> Product : file <br> Message : \r\n                                860022', '', '', 0),
(66, 'Pid 11<br> Product : guuu <br> Message : gaurav kad\r\n                                ', '', '', 0),
(67, 'Pid 11<br> Product : guuu <br> Message : gaurav kad\r\n                                ', '', '', 0),
(68, 'Pid 7<br> Product : stl test <br> Message : file test                                ', '', '', 0),
(69, 'Pid 7<br> Product : stl test <br> Message : file test                                ', '', '', 0);

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
-- Indexes for table `tblcareers`
--
ALTER TABLE `tblcareers`
  ADD PRIMARY KEY (`careers_id`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
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
-- Indexes for table `tblmutation`
--
ALTER TABLE `tblmutation`
  ADD PRIMARY KEY (`mutation_id`);

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
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`tid`);

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
-- Indexes for table `tbl_compaint`
--
ALTER TABLE `tbl_compaint`
  ADD PRIMARY KEY (`cid`);

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
-- AUTO_INCREMENT for table `tblcareers`
--
ALTER TABLE `tblcareers`
  MODIFY `careers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbldilivery`
--
ALTER TABLE `tbldilivery`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `tblmutation`
--
ALTER TABLE `tblmutation`
  MODIFY `mutation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblquote`
--
ALTER TABLE `tblquote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblshop`
--
ALTER TABLE `tblshop`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin_message`
--
ALTER TABLE `tbl_admin_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_compaint`
--
ALTER TABLE `tbl_compaint`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
