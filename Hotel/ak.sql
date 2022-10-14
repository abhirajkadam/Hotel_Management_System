-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 07:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `checkinlist`
--

CREATE TABLE `checkinlist` (
  `room` int(100) NOT NULL,
  `rcat` varchar(100) NOT NULL,
  `rp` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `un` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `cidate` varchar(100) NOT NULL,
  `codate` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `tamt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `name` varchar(300) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`name`, `message`) VALUES
('Abhiraj Mohan Kadam', 'It was a great stay in the Hotel!!!'),
('Hema Rajput', 'The rooms were super clean and the location of hotel was very beautiful!'),
('Akshay Sarnaik', 'The room service was very nice and the food they provide is tasty...'),
('Tejas Pattanshetty', 'The rooms were clean, very comfortable, and the staff was amazing. They went over and beyond to help make our stay enjoyable. I highly recommend this hotel '),
('Ulka Kadam', ''),
('Shreya', 'The staff at this property are all great!'),
('Ajinkya', ' I have stayed at dozen of hotels in. This was on the top of the list of best stays/experiences ever.'),
('Ashutosh', ' Everything was great at this hotel.. amazing staff that is friendly and makes customers feel welcome.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `rno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dis` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `coin` varchar(100) NOT NULL,
  `coout` varchar(100) NOT NULL,
  `members` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `status`, `rno`, `name`, `phone`, `address`, `city`, `dis`, `state`, `email`, `coin`, `coout`, `members`, `username`, `password`) VALUES
(151, 'Available', 103, 'Mohan Kadam', '9819511451', '168/D HAJI SAGAR,PUSHPA NAGAR', 'GOREGOAN WEST', 'Mumbai', 'Maharashtra', 'mohankadam@gmail.com', '2022-10-13', '2022-10-15', 1, 'mohankadam', '12345'),
(152, 'Available', 101, 'Ahad Prasla', '9874322461', 'Shivaji Chowk, Jogeshwari', 'Mumbai', 'Mumbai', 'Maharashtra', 'ahadprasla@gmail.com', '2022-10-16', '2022-10-20', 3, 'ahadprasla', '12345'),
(153, 'Available', 105, 'Rani Joshi', '8765994126', 'KONKANI BUILDING,SAMTA NAGAR', 'Kandivali East', 'Mumbai', 'Maharashtra', 'rjoshi@gmail.com', '2022-10-12', '2022-10-13', 1, 'ranijoshi', '12345'),
(154, 'Available', 102, 'Abhiraj Mohan Kadam', '123456', '159/G JAY NAGAR,JANKALYAN NAGAR', 'MALAD WEST', 'Mumbai', 'Maharashtra', 'abhirajkadam2001@gmail.com', '2022-10-14', '2022-10-16', 1, 'abhirajkadam', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `rno` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(100) NOT NULL,
  `p` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rno`, `type`, `size`, `p`, `status`) VALUES
(101, 'AC-Single', 300, '2500', 'booked'),
(102, 'AC-Single', 300, '2500', 'booked'),
(103, 'AC-Double', 500, '4500', 'booked'),
(104, 'AC-Double', 500, '4500', 'unbooked'),
(105, 'AC-Queen', 800, '7500', 'booked'),
(106, 'AC-Queen ', 800, '7500', 'unbooked'),
(107, 'AC-King', 1000, '9000', 'unbooked'),
(108, 'AC-King', 1000, '9000', 'unbooked'),
(109, 'AC-President', 1200, '15000', 'unbooked'),
(110, 'AC-President', 1200, '15000', 'unbooked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkinlist`
--
ALTER TABLE `checkinlist`
  ADD PRIMARY KEY (`un`),
  ADD KEY `room` (`room`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rno` (`rno`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkinlist`
--
ALTER TABLE `checkinlist`
  ADD CONSTRAINT `checkinlist_ibfk_1` FOREIGN KEY (`room`) REFERENCES `room` (`rno`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`rno`) REFERENCES `room` (`rno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
