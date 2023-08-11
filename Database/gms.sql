-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 07:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gms`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

CREATE TABLE `branch_master` (
  `id` int(3) NOT NULL,
  `branchName` varchar(30) NOT NULL,
  `branchLogo` text NOT NULL,
  `establishmentDate` date NOT NULL,
  `gstNumber` varchar(30) NOT NULL,
  `cinNumber` varchar(30) NOT NULL,
  `countryBranch` varchar(30) NOT NULL,
  `stateBranch` varchar(30) NOT NULL,
  `cityBranch` varchar(30) NOT NULL,
  `pincodeBranch` int(6) NOT NULL,
  `addressBranch` varchar(450) NOT NULL,
  `ownerName` varchar(30) NOT NULL,
  `contactNumber` int(12) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bankName` varchar(30) NOT NULL,
  `ifscCode` varchar(15) NOT NULL,
  `bankBranch` varchar(15) NOT NULL,
  `accountNumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch_master`
--

INSERT INTO `branch_master` (`id`, `branchName`, `branchLogo`, `establishmentDate`, `gstNumber`, `cinNumber`, `countryBranch`, `stateBranch`, `cityBranch`, `pincodeBranch`, `addressBranch`, `ownerName`, `contactNumber`, `gender`, `email`, `bankName`, `ifscCode`, `bankBranch`, `accountNumber`) VALUES
(1, 'Sai Car', 'hen.jpg', '2023-07-03', 'AB27C47546354665', '45764635645546', '1', '1', '14', 416002, 'Suger mill corner kasaba bawada main road', 'Ritesh Chavan', 2147483647, 'Male', 'ritesh97@gmail.com', 'BOI', '4355436565475', 'Kasaba Bawada', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `id` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`id`, `city_name`, `state_id`) VALUES
(5, 'Mumbai', 1),
(6, 'Aurangabad', 1),
(7, 'Nagpur', 1),
(8, 'Nanded', 1),
(9, 'Nashik', 1),
(10, 'Ahmednagar', 1),
(11, 'Solapur', 1),
(12, 'Amravati', 1),
(13, 'jalna', 1),
(14, 'Kolhapur', 1),
(15, 'Pune', 1),
(16, 'Satara', 1),
(17, 'Ichalkaranji', 1),
(18, 'Latur', 1),
(19, 'Sangali', 1),
(20, 'Kochi', 10),
(21, 'Kollam', 10),
(22, 'Kannur', 10),
(23, 'Kottyam', 10),
(24, 'Tirur', 10),
(25, 'Malappurm', 10),
(26, 'Lucknow', 7),
(27, 'Agra', 7),
(28, 'Jhansi', 7),
(29, 'Kanpur', 7),
(30, 'Rampur', 7),
(31, 'Udupi', 8),
(32, 'Bidar', 8),
(33, 'Bangalore', 8),
(34, 'Bagalkote', 8),
(35, 'Vijaypura', 8),
(36, 'Gulbarga', 8),
(37, 'Jaipur', 9),
(38, 'Kota', 9),
(39, 'Jodhpur', 9),
(40, 'Pali', 9),
(41, 'Bharatpur', 9),
(42, 'Bolton', 11),
(43, 'Bury', 11),
(44, 'Manchester', 11),
(45, 'Oldham', 11),
(46, 'Rochdale', 11);

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `id` int(3) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country_master`
--

INSERT INTO `country_master` (`id`, `country_name`) VALUES
(1, 'India'),
(5, 'UK'),
(6, 'Canada'),
(7, 'Japan'),
(8, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `FName` text NOT NULL,
  `MName` text NOT NULL,
  `LName` text NOT NULL,
  `Gender` text NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(11) NOT NULL,
  `Phoneno` int(10) NOT NULL,
  `Mobileno` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Street` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `FName`, `MName`, `LName`, `Gender`, `DOB`, `Age`, `Phoneno`, `Mobileno`, `Email`, `Address`, `Street`, `City`, `State`, `Pincode`, `Country`) VALUES
(26, 'Shubhangi', 'Shivaji', 'Bhingude', '', '1998-03-05', 24, 5667878, '2147483647', 'Shubhangi@gmail.com', 'at post teurwadi', 'kolhapur', 'Kolhapur', 'maharashtra', 416508, 'India'),
(27, 'Ruchika', 'Popat', 'Gadave', 'Female', '1998-03-10', 24, 202525, '9807654321', 'ruchika50@gmail.com', 'kolhapur', 'kolhapur', 'Kolhapur', 'maharashtra', 411360, 'India'),
(30, 'raj', 'nilesh', 'patil', 'Male', '1998-04-08', 23, 6376676, '975684322', 'rajpatil@gmail.com', 'kolhapur', 'pune', 'pune', 'pune', 411360, 'India'),
(31, 'anushka', 'anil', 'khade', 'Female', '2003-11-28', 18, 2147483647, '7865943522', 'anushka@gmail.com', 'at-post palashi', 'satara', 'satara', 'maharashtra', 415507, 'India'),
(32, 'sanyu', 'om', 'patil', 'Female', '1984-06-12', 24, 2147483647, '9863746473', 'sanyu@gmail.com', 'rajarampuri,kolhapur', 'ring road, rajarampuri', 'Kolhapur', 'maharashtra', 416508, 'India'),
(36, 'Akshay', 'sarjerao', 'Gaikwad', 'Male', '1997-08-22', 25, 2147483647, '7875712066', 'Akshay@gmail.com', 'pargaon', 'kolhapur', 'Kolhapur', 'maharashtra', 417856, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `emp_master`
--

CREATE TABLE `emp_master` (
  `id` int(6) NOT NULL,
  `ename` varchar(20) NOT NULL,
  `photo` text NOT NULL,
  `emailaddress` varchar(20) NOT NULL,
  `phno` int(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(400) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `country` varchar(10) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `baddress` varchar(400) NOT NULL,
  `contact` int(12) NOT NULL,
  `email` varchar(15) NOT NULL,
  `website` varchar(10) NOT NULL,
  `joindate` date NOT NULL,
  `designation` varchar(10) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `rdate` date NOT NULL,
  `bankName` varchar(20) NOT NULL,
  `bankBranch` varchar(20) NOT NULL,
  `acno` int(20) NOT NULL,
  `ifscCode` varchar(20) NOT NULL,
  `aadharno` int(20) NOT NULL,
  `uaadhar` text NOT NULL,
  `pan` int(20) NOT NULL,
  `upan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_master`
--

INSERT INTO `emp_master` (`id`, `ename`, `photo`, `emailaddress`, `phno`, `gender`, `dob`, `age`, `address`, `city`, `state`, `pincode`, `country`, `bname`, `baddress`, `contact`, `email`, `website`, `joindate`, `designation`, `starttime`, `endtime`, `rdate`, `bankName`, `bankBranch`, `acno`, `ifscCode`, `aadharno`, `uaadhar`, `pan`, `upan`) VALUES
(1, 'Vipul Thanekar', 'Capture.PNG', 'vipul@gmail.com', 2147483647, 'Male', '1999-12-10', 24, 'suger mill road', 'kolhapur', 'maharashta', 416004, 'india', 'TATA', 'Chavan Galli', 2147483647, 'tata123@gmail.c', 'ghyafukat.', '2022-05-03', 'Quality Co', '09:22:00', '05:22:00', '2022-05-26', 'BOI', 'kasaba bawada', 2147483647, '75645743534646', 2147483647, 'temp.png', 2147483647, 'Capture.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `garageinfo`
--

CREATE TABLE `garageinfo` (
  `id` int(11) NOT NULL,
  `logoimg` text NOT NULL,
  `gname` text NOT NULL,
  `oname` text NOT NULL,
  `contact` int(10) NOT NULL,
  `email` text NOT NULL,
  `website` text NOT NULL,
  `badd` text NOT NULL,
  `bcity` text NOT NULL,
  `bpincode` int(11) NOT NULL,
  `bstate` text NOT NULL,
  `bcountry` text NOT NULL,
  `semail` text NOT NULL,
  `sadd` text NOT NULL,
  `scity` text NOT NULL,
  `spincode` int(11) NOT NULL,
  `sstate` text NOT NULL,
  `scountry` text NOT NULL,
  `pemail` text NOT NULL,
  `gstimage` text NOT NULL,
  `regimage` text NOT NULL,
  `panimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `garageinfo`
--

INSERT INTO `garageinfo` (`id`, `logoimg`, `gname`, `oname`, `contact`, `email`, `website`, `badd`, `bcity`, `bpincode`, `bstate`, `bcountry`, `semail`, `sadd`, `scity`, `spincode`, `sstate`, `scountry`, `pemail`, `gstimage`, `regimage`, `panimage`) VALUES
(1, '', 'Mahalaxmi Garage', 'Pradip Patil', 987654567, 'pradippatil@gmail.com', 'MahalaxmiGarage.com', 'Shahupuri,Kolhapur', 'Kolhapur', 416754, 'Maharashtra', 'India', 'pradippatil', 'Shahupuri,Kolhapur', 'Kolhapur', 416754, 'Maharashtra', 'India', 'pradippatil@gmail.com', '', '', ''),
(2, '', 'Shree Garage', 'Mayur kagale', 897654356, 'mayurkagle@gmail.com', 'Shreegarage.com', 'Shivaji peth,Kolhapur', 'Kolhapur', 416758, 'Maharashtra', 'India', 'mayurkagle@gmail.com', 'Shivaji peth,Kolhapur', 'Kolhapur', 416758, 'Maharashtra', 'India', 'mayurkagle@gmail.com', '', '', ''),
(5, '', 'Chang CHi', 'James', 2147483647, 'abc@gmail.com', 'https://www.google.com/search?gs_ssp=eJzj4tVP1zc0TIk3L7E0zc0wYLRSNagwTko2NDAwTjU2MDQyMDQ3tTKoMElLNTM3TTMyNbEwMTRLS_HiLM_PScuv0MvMAwA10BH0&q=wolfox.in&rlz=1C1RXQR_enIN993IN993&oq=wolfox.in&aqs=chrome.1.69i60j46i175i199i512j0i30j0i8i30j69i60l4.3577j0j7&sourceid=chrome&ie=UTF-8', '', 'xyz', 412334, 'maha', 'india', 'abc@gmail.com', '', 'kolhapur', 4135454, 'v', 'nuh', 'c@gmail.com', '', '', ''),
(10, '4.PNG', '', '', 0, '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '4.PNG', '3.PNG', '4.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `insuranceinfo`
--

CREATE TABLE `insuranceinfo` (
  `id` int(25) NOT NULL,
  `vname` text NOT NULL,
  `FName` text NOT NULL,
  `cname` text NOT NULL,
  `pnumber` int(15) NOT NULL,
  `cpayable` int(10) NOT NULL,
  `vnumber` varchar(10) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `pdocument` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insuranceinfo`
--

INSERT INTO `insuranceinfo` (`id`, `vname`, `FName`, `cname`, `pnumber`, `cpayable`, `vnumber`, `sdate`, `edate`, `pdocument`) VALUES
(6, '31,Mahindra', '27,Ruchika', 'PolicyBazaar', 19201107, 500000, 'MH10 BA714', '2022-05-23', '2022-06-01', ''),
(7, '29,BMW', '27,Ruchika', 'PolicyBazaar3', 19201109, 500000, 'MH09 BJ070', '2022-05-25', '2022-05-27', ''),
(11, '31,Mahindra', '29,Madhuri', 'Soldier Station', 7898098, 500000, 'MH10 BA714', '2022-05-17', '2022-05-19', ''),
(12, '31,Mahindra', '30,raj', 'PolicyBazaar2', 19201107, 30000, 'MH09 BJ070', '2022-05-20', '2022-06-04', ''),
(13, '30,BMW', '36,Akshay', 'Soldier Station', 19201107, 500000, 'MH09 BJ070', '2022-05-09', '2022-05-26', '3.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_header`
--

CREATE TABLE `invoice_header` (
  `id` int(6) NOT NULL,
  `branchID` int(10) NOT NULL,
  `invoiceno` int(10) NOT NULL,
  `date` date NOT NULL,
  `billno` int(10) NOT NULL,
  `top` varchar(15) NOT NULL,
  `deliveryNote` varchar(10) NOT NULL,
  `deliverydate` date NOT NULL,
  `refno` int(10) NOT NULL,
  `otherRef` varchar(15) NOT NULL,
  `orderno` int(10) NOT NULL,
  `orderdate` date NOT NULL,
  `dispatchdocno` int(10) NOT NULL,
  `destination` text NOT NULL,
  `dispatch` varchar(10) NOT NULL,
  `termsOfDelivery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_line`
--

CREATE TABLE `invoice_line` (
  `ID` int(6) NOT NULL,
  `custID` int(6) NOT NULL,
  `productnm` varchar(20) NOT NULL,
  `hsnno` int(6) NOT NULL,
  `qty` int(6) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `sprice` int(6) NOT NULL,
  `disc` decimal(10,2) NOT NULL,
  `description` varchar(50) NOT NULL,
  `srno` int(6) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `productnm` varchar(20) NOT NULL,
  `productimg` text NOT NULL,
  `serialno` varchar(10) NOT NULL,
  `modelnm` varchar(20) NOT NULL,
  `partno` int(10) NOT NULL,
  `saleprice` int(20) NOT NULL,
  `gst` varchar(20) NOT NULL,
  `hsnno` int(10) NOT NULL,
  `mnfdate` date NOT NULL,
  `warrenty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productnm`, `productimg`, `serialno`, `modelnm`, `partno`, `saleprice`, `gst`, `hsnno`, `mnfdate`, `warrenty`) VALUES
(5, '', '3.PNG', '', '', 0, 0, 'Choose .....', 0, '2022-05-12', 0),
(6, 'Oil', '3.PNG', '1234', 'hero', 23, 250, '5%', 392485, '2022-05-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pucinfo`
--

CREATE TABLE `pucinfo` (
  `id` int(11) NOT NULL,
  `vname` text NOT NULL,
  `vid` int(10) NOT NULL,
  `lnumber` varchar(20) NOT NULL,
  `pucnumber` varchar(20) NOT NULL,
  `cname` text NOT NULL,
  `caddress` text NOT NULL,
  `tdate` date NOT NULL,
  `valid` date NOT NULL,
  `res` text NOT NULL,
  `freason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pucinfo`
--

INSERT INTO `pucinfo` (`id`, `vname`, `vid`, `lnumber`, `pucnumber`, `cname`, `caddress`, `tdate`, `valid`, `res`, `freason`) VALUES
(15, '', 0, 'RJ9384685', 'KL0989090', 'Soldier Station', 'Pratap Nagar,Jaipur', '2022-06-04', '2022-05-07', 'Fail', 'co value not in range in pertol test'),
(27, '15,BMW', 0, 'RJ9384685', 'KL098652', 'kolkhapur', 'kolhapur', '2022-05-27', '2022-05-01', 'Pass', ''),
(32, '31,Mahindra', 0, 'RJ9384685', 'KL098652', 'PolicyBazaar', 'Pratap Nagar,Jaipur', '2022-05-13', '2022-05-01', 'Pass', ''),
(33, '15,BMW', 0, 'RJ9384685', 'KL098652', 'PolicyBazaar', 'Pratap Nagar,Jaipur', '2022-05-13', '2022-05-01', 'Pass', ''),
(36, '32,Toyota', 0, 'RJ9384685', 'KL098652', 'Soldier Station2', 'Nagpur', '2022-06-03', '2022-05-03', 'Pass', ''),
(37, '15,BMW', 0, 'RJ9384685', 'KL098652', 'PolicyBazaar', 'kolhapur', '2022-05-08', '2022-05-28', 'Fail', 'co value not in range in pertol test'),
(38, '29,BMW', 0, '4566', '54453', 'ds', 'ghdf', '2022-05-25', '0000-00-00', 'Pass', 's');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_header`
--

CREATE TABLE `quotation_header` (
  `id` int(6) NOT NULL,
  `branchID` int(10) NOT NULL,
  `custID` int(10) NOT NULL,
  `date` date NOT NULL,
  `quotationno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_line`
--

CREATE TABLE `quotation_line` (
  `ID` int(6) NOT NULL,
  `custID` int(6) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `hsnno` int(6) NOT NULL,
  `gst` varchar(20) NOT NULL,
  `qty` int(6) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `sprice` int(6) NOT NULL,
  `disc` decimal(10,2) NOT NULL,
  `description` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_master`
--

CREATE TABLE `role_master` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role_master`
--

INSERT INTO `role_master` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Mechanic'),
(3, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `serreminder`
--

CREATE TABLE `serreminder` (
  `id` int(11) NOT NULL,
  `customernm` varchar(20) NOT NULL,
  `vehiclenm` varchar(20) NOT NULL,
  `service` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `serreminder`
--

INSERT INTO `serreminder` (`id`, `customernm`, `vehiclenm`, `service`, `date`) VALUES
(3, '27,Ruchika', '29,BMW', '41,Wheel Align', '2022-05-05'),
(4, '31,anushka', '30,BMW', '40,Wheel Align', '2022-05-09'),
(6, '30,raj', '29,BMW', '40,Wheel Align', '0000-00-00'),
(9, '26,Shubhangi', '30,BMW', '48,Oil change', '2022-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `service` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `cost` int(50) NOT NULL,
  `gst` int(50) NOT NULL,
  `charges` varchar(20) NOT NULL,
  `saccode` int(10) NOT NULL,
  `alert` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service`, `image`, `cost`, `gst`, `charges`, `saccode`, `alert`, `date`) VALUES
(35, 'Filter change', '', 250, 0, '500', 0, '', '2022-04-28'),
(40, 'Wheel Align', '', 250, 5, '400', 456, '', '2022-04-29'),
(41, 'Wheel Align', 'service-image.bin', 250, 0, '400', 456, '', '2022-04-29'),
(43, 'Filter change', '', 150, 0, '300', 994403, '', '2022-04-29'),
(47, 'Oil change', '', 200, 5, '400', 994408, '', '2022-06-30'),
(48, 'Oil change', '', 200, 5, '500', 994408, '', '2022-07-31'),
(49, 'Tyre Tube', '', 1200, 5, '1400', 994409, '', '2024-07-01'),
(54, 'Tyre Tube with tyre', '', 1200, 5, '1300', 994409, '', '2022-05-01'),
(55, 'Tyre Tube with tyre', '', 0, 0, '', 0, '', '2022-05-02'),
(56, 'Wheel Align', '3.PNG', 2000, 0, '2500', 994408, '', '2022-05-21'),
(58, 'oil change', '', 3000, 0, '3500', 995589, '1000', '2022-05-17'),
(62, '', 'arnold.jpg', 0, 0, '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `signup_master`
--

CREATE TABLE `signup_master` (
  `id` int(3) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_master`
--

INSERT INTO `signup_master` (`id`, `firstName`, `lastName`, `email`, `role`, `password`, `confirmPassword`) VALUES
(1, '', '', '', '', '', ''),
(2, 'Vipul ', '13', '', '', '', ''),
(3, '1345', '', '', '', '', ''),
(4, 'Harry', 'Codewith', 'harry@gmail.com', 'Admin', 'pass@123', 'pass@123');

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`id`, `state_name`, `country_id`) VALUES
(1, 'maharashtra', 1),
(7, 'Uttar Pradesh', 1),
(8, 'karnataka', 1),
(9, 'Rajasthan', 1),
(10, 'Kerla', 1),
(11, 'Manchester', 5),
(12, 'Cardiff', 5),
(13, 'England', 5),
(14, 'Alberta', 6),
(15, 'British Columbia', 6),
(16, 'Kyoto', 7),
(17, 'Nara', 7),
(18, 'Tokyo', 7),
(19, 'Osaka', 7),
(20, 'Hiroshima', 7),
(21, 'Adelaide', 8),
(22, 'Brisbane', 8),
(23, 'Hobarat', 8),
(24, 'Perth', 8),
(25, 'Sydney', 8);

-- --------------------------------------------------------

--
-- Table structure for table `uominfo`
--

CREATE TABLE `uominfo` (
  `id` int(10) NOT NULL,
  `uomname` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uominfo`
--

INSERT INTO `uominfo` (`id`, `uomname`, `description`) VALUES
(7, 'Kg/s', 'Kilometer per second..!'),
(9, 'Kg/h', 'Kilometer per hour..!'),
(10, 'Kg/h', 'abcd'),
(16, 'ewtre', 'sdfsg');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleinfo`
--

CREATE TABLE `vehicleinfo` (
  `id` int(20) NOT NULL,
  `FName` text NOT NULL,
  `vname` text NOT NULL,
  `vnumber` varchar(12) NOT NULL,
  `cnumber` varchar(12) NOT NULL,
  `rdate` date NOT NULL,
  `vtype` varchar(11) NOT NULL,
  `vcolor` text NOT NULL,
  `ftype` text NOT NULL,
  `mname` varchar(5) NOT NULL,
  `myear` year(4) NOT NULL,
  `enumber` int(10) NOT NULL,
  `ngear` int(10) NOT NULL,
  `oreading` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicleinfo`
--

INSERT INTO `vehicleinfo` (`id`, `FName`, `vname`, `vnumber`, `cnumber`, `rdate`, `vtype`, `vcolor`, `ftype`, `mname`, `myear`, `enumber`, `ngear`, `oreading`) VALUES
(15, '26,Shubhangi', 'BMW', 'MH10 BA7149', '0', '2022-04-01', '2 wheeler', 'Silver', 'CNG', 'Categ', 2018, 0, 8, 1220),
(29, '26,Shubhangi', 'BMW', 'MH10 BA7149', '2147483647', '2022-05-27', '4 wheeler', 'black', 'Diesel', 'j1', 2018, 7, 8, 6800),
(30, '26,Shubhangi', 'BMW', 'MH10 BA7149', '2147483647', '2022-05-27', '4 wheeler', 'black', 'Diesel', 'j1', 2018, 7, 8, 6800),
(31, '27,Ruchika', 'Mahindra', 'MH09 BJ5454', '2147483647', '2022-05-20', '4 wheeler', 'black', 'CNG', 'j1', 2017, 7, 8, 2993),
(34, '27,Ruchika', 'KIA', 'MH10 BA7149', '2147483647', '2022-05-09', '4 wheeler', 'White', 'CNG', 'j1', 2017, 97, 8, 2993);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_master`
--

CREATE TABLE `vendor_master` (
  `id` int(20) NOT NULL,
  `vendorName` varchar(12) NOT NULL,
  `Cno` int(15) NOT NULL,
  `RegNumber` varchar(20) NOT NULL,
  `VenEmail` varchar(20) NOT NULL,
  `gstNumber` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pincode` int(10) NOT NULL,
  `street` varchar(15) NOT NULL,
  `bankName` varchar(20) NOT NULL,
  `ifscCode` varchar(15) NOT NULL,
  `bankBranch` varchar(15) NOT NULL,
  `accountNumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_master`
--

INSERT INTO `vendor_master` (`id`, `vendorName`, `Cno`, `RegNumber`, `VenEmail`, `gstNumber`, `country`, `state`, `city`, `pincode`, `street`, `bankName`, `ifscCode`, `bankBranch`, `accountNumber`) VALUES
(1, 'pradnya', 2147483647, '19201107', 'pradnyapatil829@gmai', '23457889900', 'india', 'Maharashtra', 'Kolhapur', 416503, 'swami samarth n', 'state bank', '56677883666', 'rajarampuri', 2147483647),
(2, 'Shubhangi', 2147483647, '19201108', 'shubhangi98@gmail.co', '23457566343', 'india', 'Maharashtra', 'Kolhapur', 416515, 'rajarampuri', 'state bank', '56677883666', 'rajarampuri', 2147483647),
(3, 'Madhuri', 2147483647, '19201109', 'madhuri@gmail.com', '5667566343', 'india', 'Maharashtra', 'Kolhapur', 416523, 'shahupuri', 'state bank', '56677883666', 'rajarampuri', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch_master`
--
ALTER TABLE `branch_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_master`
--
ALTER TABLE `emp_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garageinfo`
--
ALTER TABLE `garageinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insuranceinfo`
--
ALTER TABLE `insuranceinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_header`
--
ALTER TABLE `invoice_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_line`
--
ALTER TABLE `invoice_line`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pucinfo`
--
ALTER TABLE `pucinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_header`
--
ALTER TABLE `quotation_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_line`
--
ALTER TABLE `quotation_line`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `role_master`
--
ALTER TABLE `role_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serreminder`
--
ALTER TABLE `serreminder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_master`
--
ALTER TABLE `signup_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uominfo`
--
ALTER TABLE `uominfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicleinfo`
--
ALTER TABLE `vehicleinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_master`
--
ALTER TABLE `vendor_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch_master`
--
ALTER TABLE `branch_master`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `country_master`
--
ALTER TABLE `country_master`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `emp_master`
--
ALTER TABLE `emp_master`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `garageinfo`
--
ALTER TABLE `garageinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `insuranceinfo`
--
ALTER TABLE `insuranceinfo`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `invoice_header`
--
ALTER TABLE `invoice_header`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_line`
--
ALTER TABLE `invoice_line`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pucinfo`
--
ALTER TABLE `pucinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `quotation_header`
--
ALTER TABLE `quotation_header`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotation_line`
--
ALTER TABLE `quotation_line`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_master`
--
ALTER TABLE `role_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `serreminder`
--
ALTER TABLE `serreminder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `signup_master`
--
ALTER TABLE `signup_master`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `uominfo`
--
ALTER TABLE `uominfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vehicleinfo`
--
ALTER TABLE `vehicleinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `vendor_master`
--
ALTER TABLE `vendor_master`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
