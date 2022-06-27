-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 06:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ek_nojore_saidpur`
--

-- --------------------------------------------------------

--
-- Table structure for table `illegalstructure`
--

CREATE TABLE `illegalstructure` (
  `location` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `illegalstructure`
--

INSERT INTO `illegalstructure` (`location`, `details`, `image`) VALUES
('gwdsgadgs', 'gdfsgsdfgfdsg', '../files/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mosquitoinfected`
--

CREATE TABLE `mosquitoinfected` (
  `affectedperson` text NOT NULL,
  `diseasename` text NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mosquitoinfected`
--

INSERT INTO `mosquitoinfected` (`affectedperson`, `diseasename`, `address`, `image`) VALUES
('gfdsg', 'dengue', 'sfdgds', '../files/download.jpg'),
('mother', 'dengue', 'dhaka', '../files/download.jpg'),
('my father', 'dengue', 'hatir jheel', '../files/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mosquitolarva`
--

CREATE TABLE `mosquitolarva` (
  `location` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mosquitolarva`
--

INSERT INTO `mosquitolarva` (`location`, `details`, `image`) VALUES
('dhaka', 'dgfsgdsfg', '../files/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `username` text NOT NULL,
  `password` int(100) NOT NULL,
  `nidno` text NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `area` text NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`username`, `password`, `nidno`, `address`, `gender`, `area`, `phone`, `email`, `image`) VALUES
('kajol', 123456, '123456788', 'saidpur ', 'male', 'bazar', '01923847456547', 'kajol.99bd@gmail.com', '../files/download.jpg'),
('kajol', 123456, '123456788', 'saidpur ', 'male', 'bazar', '01923847456547', 'kajol.99bd@gmail.com', '../files/WIN_20210308_10_30_18_Pro.jpg'),
('', 0, '', '', '<i>Please select at least one option</i>', '', '', '', '../files/'),
('', 0, '', '', '<i>Please select at least one option</i>', '', '', '', '../files/'),
('', 0, '', '', '<i>Please select at least one option</i>', '', '', '', '../files/'),
('Eshrat jahan', 123456, '42523562444', 'cant bazar ', 'female', 'new babu para', '017947869048', 'eshrat@gmail.com', '../files/download.jpg'),
('mehedi', 1234567, '462362364', 'fgdshfsdhfsd', 'male', 'dsfsag', '01923847456547', 'nahid@gmail.com', '../files/WIN_20210308_10_30_18_Pro.jpg'),
('kajol khan', 123456, '12345666', 'terminal', 'male', 'terminal', '01923847456547', 'kajol.99bd@gmail.com', '../files/download.jpg'),
('abu bakker', 1234567, '098324579457', 'chohomoni', 'male', 'chohomoni', '0179834674858', 'abubakker@gmail.com', '../files/IMG_20210409_212101.jpg'),
('kashem', 1234, ' 2343256765', '  saidpur', 'male', 'canntbazar', '01887326776', 'kashem30@gmail.com', '../files/snack.logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `road`
--

CREATE TABLE `road` (
  `issuetype` text NOT NULL,
  `location` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `road`
--

INSERT INTO `road` (`issuetype`, `location`, `details`, `image`) VALUES
('manhole', 'dfasga', 'adsgasgasg', '../files/1.png'),
('manhole', 'dfasga', 'adsgasgasg', '../files/1.png'),
('mainhole', 'dgfdhs', 'sfdgsddg', '../files/images.png'),
('mainhole', 'dgfdhs', 'sfdgsddg', '../files/images.png'),
('roadsurface', 'adsfas', 'adsfadsads', '../files/images.png'),
('footpath', 'ggggg', 'aadfsafdsadsadsfdas', '../files/download (1).png'),
('manhole', 'mirpur', 'aadkfjdshgkjdaghg', '../files/Thankyou.jpg'),
('manhole', 'dhaka', 'fsgdsgfdsg', '../files/Thankyou.jpg'),
('manhole', 'bashundhara dhaka', 'road broken', '../files/download.jpg'),
('footpath', 'uttara 14 No sector', 'road broken.', '../files/download.jpg'),
('footpath', 'cant bazar', 'footpath', '../files/snack.logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `streetlight`
--

CREATE TABLE `streetlight` (
  `issuetype` text NOT NULL,
  `location` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `streetlight`
--

INSERT INTO `streetlight` (`issuetype`, `location`, `details`, `image`) VALUES
('roadsurface', 'fgdshsdfh', 'fdshsdh', '../files/Thankyou.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `waterlog`
--

CREATE TABLE `waterlog` (
  `location` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waterlog`
--

INSERT INTO `waterlog` (`location`, `details`, `image`) VALUES
('hfgfshs', 'fdshsd', '../files/download.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
