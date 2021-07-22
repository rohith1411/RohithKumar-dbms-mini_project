-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 06:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidtracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhaar`
--

DROP TABLE IF EXISTS `aadhaar`;
CREATE TABLE `aadhaar` (
  `aadhaar_id` bigint(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aadhaar`
--

INSERT INTO `aadhaar` (`aadhaar_id`, `name`, `dob`, `gender`, `address`, `phone_number`) VALUES
(414444339474, 'Arulgayathri Murugabalasundaram', '1998-04-01', 'FEMALE', '295, VIJAYALAKSHMI NAGAR, SENNAVARAM, TIRUVANAMALAI 604408', 9600740176),
(594899087832, 'M Prasanna Kumar', '2007-11-13', 'MALE', '16-4/1, RAMA RAO GARDEN 3RD STREET, ROYAPETTAH, CHENNAI 600014', 9841276255),
(602590173579, 'K Kanimozhi', '2001-09-01', 'FEMALE', '33, PUTHALI POST, MAKARAL VALI UTTIRAMERUR, KANNIKULAM, KANCHEEPURAM 631603', 9952723176),
(611484349583, 'M Rohith Kumar', '2001-11-14', 'MALE', '43/2, CHAIRMAN FLATS, ELLARI STREET, GOPALAPURAM, CHENNAI 600086', 9499949957),
(673867324410, 'K Reshma', '2007-05-28', 'FEMALE', '33, PUTHALI STREET, KANNIKULAM, MAGARAL, KANCHEEPURAM 631603', 94983553376),
(696676038624, 'S Gnaneswari', '1978-05-21', 'FEMALE', '4/11, RAMA RAO GARDEN 3RD STREET, ROYAPETTAH, CHENNAI 600014', 8754515147),
(716466850134, 'V Vishvajith', '2001-04-24', 'MALE', '11, SUBRAMANIYAN STREET, SOWCARPET, CHENNAI 600001', 9003974747),
(907182561644, 'SATHYA', '1980-12-24', 'FEMALE', '33, PUTHALI STREET, KANNIKULAM, MAGARAL, KANCHEEPURAM 631603', 9629621264),
(974285805473, 'Sunil KA', '1965-08-30', 'MALE', 'NO. 12/22, ELLARY STREET, GOPALAPURAM, CHENNAI 600086', 8946014715),
(975950394445, 'V Jeyakrishna', '2001-07-07', 'MALE', 'D3, OMKAR APPARTMENTS, 1, JAYAMMAL ROAD, TEYNAMPET, CHENNAI 600018', 9444241809);

-- --------------------------------------------------------

--
-- Table structure for table `covid_status`
--

DROP TABLE IF EXISTS `covid_status`;
CREATE TABLE `covid_status` (
  `aadhaar_id` bigint(12) NOT NULL,
  `test` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_status`
--

INSERT INTO `covid_status` (`aadhaar_id`, `test`, `status`) VALUES
(414444339474, '', ''),
(594899087832, '', ''),
(602590173579, 'Yes', '+ve'),
(611484349583, 'No', '+ve'),
(673867324410, '', ''),
(696676038624, '', ''),
(716466850134, '', ''),
(907182561644, '', ''),
(974285805473, '', ''),
(975950394445, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `aadhaar_id` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `latitude` decimal(10,6) NOT NULL,
  `longitude` decimal(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`aadhaar_id`, `date`, `latitude`, `longitude`) VALUES
(414444339474, '2021-05-30 13:47:04', '0.000000', '0.000000'),
(594899087832, '2021-05-30 13:47:04', '0.000000', '0.000000'),
(602590173579, '2021-06-01 04:16:36', '13.048730', '80.255579'),
(611484349583, '2021-06-01 05:09:14', '13.048752', '80.255609'),
(673867324410, '2021-05-31 16:33:31', '0.000000', '0.000000'),
(696676038624, '2021-05-30 13:47:04', '0.000000', '0.000000'),
(716466850134, '2021-05-31 16:33:51', '0.000000', '0.000000'),
(907182561644, '2021-05-30 13:47:04', '0.000000', '0.000000'),
(974285805473, '2021-05-30 13:47:04', '0.000000', '0.000000'),
(975950394445, '2021-05-31 16:33:46', '0.000000', '0.000000');

-- --------------------------------------------------------

--
-- Table structure for table `log_602590173579`
--

DROP TABLE IF EXISTS `log_602590173579`;
CREATE TABLE `log_602590173579` (
  `aadhaar_id` bigint(12) DEFAULT NULL,
  `log_in` datetime DEFAULT NULL,
  `log_out` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_602590173579`
--

INSERT INTO `log_602590173579` (`aadhaar_id`, `log_in`, `log_out`) VALUES
(602590173579, '2021-05-31 22:12:57', '2021-05-31 22:13:58'),
(602590173579, '2021-06-01 09:46:33', '2021-06-01 09:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `log_611484349583`
--

DROP TABLE IF EXISTS `log_611484349583`;
CREATE TABLE `log_611484349583` (
  `aadhaar_id` bigint(12) DEFAULT NULL,
  `log_in` datetime DEFAULT NULL,
  `log_out` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_611484349583`
--

INSERT INTO `log_611484349583` (`aadhaar_id`, `log_in`, `log_out`) VALUES
(611484349583, '2021-06-01 10:36:20', '2021-06-01 10:38:08'),
(611484349583, '2021-06-01 10:39:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE `medicine` (
  `med_id` bigint(3) NOT NULL,
  `symptom_name` varchar(100) NOT NULL,
  `med_name` varchar(100) NOT NULL,
  `dosage` varchar(10) NOT NULL,
  `days` varchar(20) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_id`, `symptom_name`, `med_name`, `dosage`, `days`, `note`) VALUES
(1001, 'fever', 'Tab.Paracetamol IP 650 mg', '1-1-1', '8', '6 hours once is advisable'),
(1002, 'cold', 'Tab.Azithromycin in 500 mg', '1-0-1', '6', 'After food'),
(1003, 'dry cough', 'Syrup.Robitussin', '1-0-1', '10', '10ml - After food'),
(1004, 'mucus cough', 'Tab.Mucinex 600 mg', '1-0-1', '6', 'After Food'),
(1005, 'fatigue', 'Tab.Zinc Vitamin c and Sodium Ascorbate\r\n', '0-1-0', '10', 'After Food'),
(1006, 'body pain', 'Tab.Aceclofenac 100 mg', '0-1-0', '8', 'After food'),
(1007, 'constipation', 'Tab.Dulcolax', '1-0-0', '2', 'After Food'),
(1008, 'sore throat/headache', 'Tab.Ivermectin 12 mg', '1-0-0', '8', 'After food'),
(1009, 'diarrhoea', 'Tab.Loperamide Hydrochloride IP 2mg', '1-0-1', '3', 'After food'),
(1010, 'difficulty in breathing', 'Tab.Aspirin Gastro Resistant IP 75mg', '0-1-0', '8', 'After Food'),
(1011, 'allergic sneezing', 'Tab.Montek LC', '0-0-1', '5', 'At 6 pm'),
(1012, 'indigestion/heart burn', 'Tab.Ranitidine 150 mg', '1-0-1', '8', 'Before food'),
(1013, 'vomiting', 'Tab.Emeset-4 2 mg', '1-0-1', '4', 'Before food'),
(1014, 'supplement', 'Tab.D3 Must 60K', '0-1-0', 'weekly once', 'For 2 months'),
(1015, 'none', 'Stay Safe and Healthy', '-', '-', 'Keep us posted');

-- --------------------------------------------------------

--
-- Table structure for table `selfkit_order`
--

DROP TABLE IF EXISTS `selfkit_order`;
CREATE TABLE `selfkit_order` (
  `order_id` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `aadhaar_id` bigint(12) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selfkit_order`
--

INSERT INTO `selfkit_order` (`order_id`, `date`, `aadhaar_id`, `name`, `address`, `status`) VALUES
('60b5c109774d8', '2021-06-01', 611484349583, 'M Rohith Kumar', '43/2, CHAIRMAN FLATS, ELLARI STREET, GOPALAPURAM, CHENNAI 600086', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `summary_602590173579`
--

DROP TABLE IF EXISTS `summary_602590173579`;
CREATE TABLE `summary_602590173579` (
  `aadhaar_id` bigint(12) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `symptom` varchar(100) DEFAULT NULL,
  `temperature` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summary_602590173579`
--

INSERT INTO `summary_602590173579` (`aadhaar_id`, `name`, `date`, `symptom`, `temperature`) VALUES
(602590173579, 'K Kanimozhi', '2021-05-31', 'fever', 100),
(602590173579, 'K Kanimozhi', '2021-05-31', 'dry cough', 100),
(602590173579, 'K Kanimozhi', '2021-05-31', 'fatigue', 100),
(602590173579, 'K Kanimozhi', '2021-05-31', 'body pain', 100),
(602590173579, 'K Kanimozhi', '2021-05-31', 'sore throat/headache', 100),
(602590173579, 'K Kanimozhi', '2021-05-31', 'allergic sneezing', 100),
(602590173579, 'K Kanimozhi', '2021-06-01', 'fever', 100),
(602590173579, 'K Kanimozhi', '2021-06-01', 'cold', 100),
(602590173579, 'K Kanimozhi', '2021-06-01', 'mucus cough', 100),
(602590173579, 'K Kanimozhi', '2021-06-01', 'body pain', 100),
(602590173579, 'K Kanimozhi', '2021-06-01', 'diarrhoea', 100),
(602590173579, 'K Kanimozhi', '2021-06-01', 'allergic sneezing', 100),
(602590173579, 'K Kanimozhi', '2021-06-01', 'indigestion/heart burn', 100),
(602590173579, 'K Kanimozhi', '2021-06-01', 'vomiting', 100);

-- --------------------------------------------------------

--
-- Table structure for table `summary_611484349583`
--

DROP TABLE IF EXISTS `summary_611484349583`;
CREATE TABLE `summary_611484349583` (
  `aadhaar_id` bigint(12) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `symptom` varchar(100) DEFAULT NULL,
  `temperature` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summary_611484349583`
--

INSERT INTO `summary_611484349583` (`aadhaar_id`, `name`, `date`, `symptom`, `temperature`) VALUES
(611484349583, 'M Rohith Kumar', '2021-06-01', 'fever', 102),
(611484349583, 'M Rohith Kumar', '2021-06-01', 'cold', 102),
(611484349583, 'M Rohith Kumar', '2021-06-01', 'body pain', 102),
(611484349583, 'M Rohith Kumar', '2021-06-01', 'allergic sneezing', 102),
(611484349583, 'M Rohith Kumar', '2021-06-01', 'none', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhaar`
--
ALTER TABLE `aadhaar`
  ADD PRIMARY KEY (`aadhaar_id`);

--
-- Indexes for table `covid_status`
--
ALTER TABLE `covid_status`
  ADD PRIMARY KEY (`aadhaar_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`aadhaar_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `selfkit_order`
--
ALTER TABLE `selfkit_order`
  ADD PRIMARY KEY (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
