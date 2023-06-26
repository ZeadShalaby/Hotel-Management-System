-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 يونيو 2023 الساعة 22:40
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- بنية الجدول `account`
--

CREATE TABLE `account` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `pass` int(100) NOT NULL,
  `pass2` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `account`
--

INSERT INTO `account` (`fname`, `lname`, `email`, `phone`, `pass`, `pass2`) VALUES
('Fawzey', 'Ibrahem', 'fawzeyibrahem@fox.com', 1214748364, 123, 123),
('Merna', 'Yousef', 'MernaYousef@fox.com', 1214748364, 123, 123),
('Moly', 'Karem', 'MolyKarrem@fox.com', 1554067540, 123, 123),
('Nemo', 'Nour', 'nemonour@fox.com', 1553068547, 123, 123),
('Salma', 'Morning', 'salmamorning@fox.com', 1245783242, 123, 123);

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` int(100) NOT NULL,
  `phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`name`, `email`, `pass`, `phone`) VALUES
('zead', 'zeadshalaby@fox.com', 1052002, 1478578444);

-- --------------------------------------------------------

--
-- بنية الجدول `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `clases`
--

INSERT INTO `clases` (`id`, `name`, `email`, `class`) VALUES
(512, 'Merna Yousef', 'MernaYousef@fox.com', 'physical therapy /w'),
(627, 'Moly Karem', 'MolyKarrem@fox.com', 'Zoompaa'),
(631, 'Nemo Nour', 'nemonour@fox.com', 'Gaming & Story'),
(633, 'Salma Morning', 'salmamorning@fox.com', 'Judo'),
(661, 'Fawzey Ibrahem', 'fawzeyibrahem@fox.com', 'Gaming & Story');

-- --------------------------------------------------------

--
-- بنية الجدول `gen`
--

CREATE TABLE `gen` (
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `gen`
--

INSERT INTO `gen` (`gender`) VALUES
('Admin'),
('customer'),
('Staf');

-- --------------------------------------------------------

--
-- بنية الجدول `info`
--

CREATE TABLE `info` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `card_number` int(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `date` text NOT NULL,
  `age` int(100) NOT NULL,
  `numroom` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `info`
--

INSERT INTO `info` (`fname`, `lname`, `card_number`, `room`, `date`, `age`, `numroom`) VALUES
('mayar', 'fried', 7849, '6', '2023-12-04', 54, 245),
('saly', 'mohamed', 14526, '4', '2023-10-04', 47, 404),
('Waled', 'Nour', 21456, '4', '1234-12-12', 42, 8),
('mona', 'Yousef', 45678, '1', '1234-12-12', 24, 5),
('salma', 'nour', 55555, '54', '1234-12-12', 55, 12),
('merna', 'yousef', 57847, '87', '2023-02-14', 54, 87),
('youseef', 'waled', 68574, '1', '2023-02-14', 24, 14),
('nour', 'sherif', 78498, '5', '2023-12-04', 47, 54),
('ehap', 'sherif', 78541, '8', '2023-12-04', 47, 15);

-- --------------------------------------------------------

--
-- بنية الجدول `staff`
--

CREATE TABLE `staff` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `staff`
--

INSERT INTO `staff` (`name`, `email`, `pass`) VALUES
('ehab', 'ehab@fox.com', 123),
('foad', 'foad@fox.com', 123),
('joo', 'joo@fox.com', 123),
('loly', 'loly@fox.com', 123),
('mena', 'mena@fox.com', 123),
('merna', 'merna@fox.com', 123),
('mona', 'mona@fox.com', 123),
('mousa', 'mousa@fox.com', 123),
('noura', 'noura@fox.com', 123),
('saed', 'saed@fox.com', 123),
('saly', 'saly@fox.com', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `UNIQUE` (`fname`,`lname`,`phone`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- Indexes for table `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `gen`
--
ALTER TABLE `gen`
  ADD PRIMARY KEY (`gender`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`card_number`),
  ADD UNIQUE KEY `UNIQUE` (`numroom`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=664;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
