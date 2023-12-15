-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 07:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemedicalportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `doctorName` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`doctorName`, `specialization`, `username`, `phone_no`, `date`) VALUES
('erree', 'Nutritional Diseases', 'RMRU', 34444, '2020-10-15'),
('Duaa', 'Heart Diseases', 'efrrfrfr', 121212, '2020-10-17'),
('rrrr', 'Heart Diseases', 'rrrrrr', 55555, '2020-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `med_data` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `email`, `med_data`, `address`) VALUES
(1, 'dfdfd', 'eferfefe', 'dddfdf', 'dfdfdf'),
(2, 'rrrr', '', 'RMn', ''),
(3, 'dfdfd', 'eferfefe', 'rrrrrgrg', 'rrrrrtrt');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `username` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_num` int(10) NOT NULL,
  `card_type` varchar(20) NOT NULL,
  `card_num` int(16) NOT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`username`, `Lname`, `address`, `id`, `email`, `phone_num`, `card_type`, `card_num`, `expire_date`) VALUES
('Rolan', 'Madushan', 'Ambalantota', 2147483647, 'rgjgkkj@gmail.com', 99998888, 'master', 2147483647, '2020-10-15'),
('Rolan', 'Madushan', 'dfdfdf', 2147483647, 'rgjgkkj@gmail.com', 99998888, 'amex', 2147483647, '2020-09-28'),
('Rolan', 'fvffv', 'fvfvfv', 2147483647, 'rgjgkkj@gmail.com', 99998888, 'master', 2147483647, '2020-10-14'),
('rtrtrtrt', 'rtrtrt', 'rtrt', 0, 'rtrt@gmil.com', 0, 'master', 0, '2020-10-08'),
('rrrrrr', 'rrrrrrr', 'gbgb', 333, 'uudvnrtrt@gmil.com', 555, '', 0, '0000-00-00'),
('errer', 'errrrrre', 'eeeee', 0, 'eeee@gmail.com', 0, 'visa', 3333333, '2020-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(4, 'Test1', 'box-4-1.jpg', 25.00),
(5, 'Test2', 'box-2-1.jpg', 45.00),
(6, 'Test3', 'candles-poles-08.jpg', 55.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `created` date NOT NULL,
  `phone_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_type`, `created`, `phone_no`) VALUES
(1, '', 'user', '123', 'patient', '2020-10-22', 0),
(3, 'Roland', 'RM', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Patient', '0000-00-00', 23232323),
(17, 'Roladdvdf', 'user', '98fbc42faedc02492397cb5962ea3a3ffc0a9243', 'Patient', '0000-00-00', 999393),
(21, 'Roladdv', 'efrrfrfr', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'Doctor', '0000-00-00', 7956),
(24, 'Roladdv', 'efrrfrfr', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'Patient', '0000-00-00', 999393),
(25, 'rrrrr', 'rrrrrrrrr', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'Patient', '0000-00-00', 0),
(26, 'rrrrr', 'rrrrrrrrr', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'Patient', '0000-00-00', 0),
(27, 'rrrrr', 'rrrrrrrrr', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'Patient', '0000-00-00', 0),
(28, 'rrrrr', 'rrrrrrrrr', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'Patient', '0000-00-00', 0),
(29, 'rrrrr', 'rrrrrrrrr', '011c945f30ce2cbafc452f39840f025693339c42', 'Patient', '0000-00-00', 0),
(30, 'rrrrr', 'rrrrrrrrr', '011c945f30ce2cbafc452f39840f025693339c42', 'Patient', '0000-00-00', 0),
(31, 'rrrrr', 'rrrrrrrrr', '9a3e61b6bcc8abec08f195526c3132d5a4a98cc0', 'Patient', '0000-00-00', 0),
(33, 'rrrr', 'rrrrrrr', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'Patient', '0000-00-00', 44444444),
(34, 'rrrr', 'www', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', 'Patient', '0000-00-00', 333),
(35, 'rrrr', 'rrrrrrr', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', 'Patient', '0000-00-00', 44444444),
(36, 'rrr', 'rrrrrrr', '17ba0791499db908433b80f37c5fbc89b870084b', 'Patient', '0000-00-00', 44444444),
(37, 'rrrr', 'rrrrrrr', '356a192b7913b04c54574d18c28d46e6395428ab', 'Patient', '0000-00-00', 44444444),
(38, '', 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'MedicalOfficer', '2020-10-15', 0),
(39, 'RM', 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'MedicalOfficer', '2020-10-16', 772814312),
(40, '', 'rrr', '011c945f30ce2cbafc452f39840f025693339c42', 'MedicalOfficer', '2020-10-15', 77),
(41, 'rr', 'rr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'MedicalOfficer', '0000-00-00', 0),
(42, 'rmra', 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'MedicalOfficer', '2020-10-20', 78373333),
(43, 'rm', 'rm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'MedicalOfficer', '2020-10-15', 54545454),
(44, 'eeeeeeeeeeeee', 'eeeeeeee', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Patient', '0000-00-00', 0),
(45, 'eeeeeeeeeeeee', 'rm', '17ba0791499db908433b80f37c5fbc89b870084b', 'Patient', '0000-00-00', 0),
(46, 'user', 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Doctor', '2020-10-22', 444),
(47, 'eeeeeeeeeeeee', 'rm', '17ba0791499db908433b80f37c5fbc89b870084b', 'Patient', '0000-00-00', 0),
(48, '', 'Doc', '123', 'on', '2020-10-14', 772914312),
(49, '', 'RM', '123', 'on', '2020-10-13', 772914312),
(50, '', 'rrrr', '123', 'on', '2020-10-12', 772914312),
(51, '', 'rr', '123', 'on', '2020-10-13', 772914312),
(52, '', 'RMT', '123', 'Doctor', '2020-10-05', 772914312),
(53, 'rrr', 'rmra', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Patient', '0000-00-00', 0),
(54, 'dfdfd', 'rrrrrr', '17ba0791499db908433b80f37c5fbc89b870084b', 'Patient', '0000-00-00', 3333);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
