-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 09:03 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theater`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `annoncement`
--

CREATE TABLE `annoncement` (
  `Ann_id` int(11) NOT NULL,
  `Topic` varchar(255) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annoncement`
--

INSERT INTO `annoncement` (`Ann_id`, `Topic`, `Description`, `Image`, `Status`) VALUES
(9, 'Popcorn Offers', '$5 For Tuesday', 'an1.jpg', '1'),
(10, 'Popcorn Offers', 'Free Popcorn only for members', 'an2.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `C_ID` int(11) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `P_Name` varchar(255) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`C_ID`, `Description`, `Date`, `Time`, `Status`, `P_ID`, `P_Name`, `User_ID`, `Username`) VALUES
(20, 'Marvwelous', 'Saturday 2nd of October 2021 ', '09:13:23 AM', '', 34, 'Spiderman', 16, 'apple'),
(21, 'good\r\n', 'Friday 1st of October 2021 ', '08:07:33 PM', '1', 35, 'Doctor', 19, 'dun'),
(22, 'marwelous', 'Friday 1st of October 2021 ', '08:08:02 PM', '2', 34, 'Spiderman', 18, 'maan'),
(23, 'Superb', 'Saturday 2nd of October 2021 ', '08:57:10 AM', '', 34, 'Spiderman', 16, 'apple'),
(24, 'fun', 'Monday 4th of October 2021 ', '07:19:46 PM', '', 29, 'Annaatthe', 17, 'sam');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Con_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `User_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Con_ID`, `Name`, `Email`, `Subject`, `Description`, `Status`, `User_ID`) VALUES
(11, 'Sam', 'Sam@gmail.com', 'Spiderman', 'When is Spiderman Release', '', '17');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `P_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Catergory` varchar(255) NOT NULL,
  `Cast` varchar(255) NOT NULL,
  `Language` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`P_ID`, `Name`, `Catergory`, `Cast`, `Language`, `Duration`, `Time`, `Price`, `Image`, `Status`, `Date`) VALUES
(29, 'Annaatthe', 'Action', 'Rajinikanth,Meena, Khushbu, Nayanthara, and Keerthy Suresh', 'Tamil ', '2HRS', '10:00 PM', '1500', 'annatha.jpeg', 'comingsoon', '02.10.2021'),
(30, 'Valimai ', 'Action', 'Ajith Kumar, Huma Qureshi, Kartikeya Gummakonda. ', 'Tamil', '2HRS 45 MIN', '10:30 PM', '1500', 'valimai.jpeg', 'comingsoon', '01.10.2021'),
(31, 'Pushpa', 'Action', ' Allu Arjun, Fahadh Faasil ,Rashmika Mandanna.', 'Telungu', '2HRS 30MIN', '4:15 PM', '1500', 'pushpa.jpeg', 'comingsoon', '01.10.2021'),
(32, 'RRR', 'Action', 'N. T. Rama Rao Jr., Ram Charan, Ajay Devgn, Alia Bhatt ', 'Telungu', '2HRS 20MIN', '10:15 AM', '1500', 'RandR.jpeg', 'comingsoon', '01.10.2021'),
(33, 'Free Guy', 'Adventure', 'Matt Lieberman Zak Penn', 'English', '1HR 45 MIN', '10 : 00 AM', '1500', 'freeguy.jpeg', 'showing', '01.10.2021'),
(34, 'Spiderman', 'Action', 'Jon Favreau, Jacob Batalon, Marisa Tomei,', 'English', '2 HRS 30 MIN ', '8:30 AM', '1500', 'spiderman.jpeg', 'showing', '01.10.2021'),
(35, 'Doctor', 'Action', 'Siva karthikeyan, Priyanka Arul Mohan', 'Tamil', '2HRS 25MIN', '10 : 00 AM', '1500', 'doc.jpg', 'showing', '01.10.2021');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Name`, `Username`, `Email`, `Password`, `Status`) VALUES
(17, 'sam', 'sam', 'sam@gmail.com', 'sam', ''),
(18, 'maan', 'maan', 'maan@gmail.com', 'maan', ''),
(19, 'dun', 'dun', 'dun@gmail.com', 'dun', ''),
(20, 'john', 'john', 'john@gmail.com', 'john', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `annoncement`
--
ALTER TABLE `annoncement`
  ADD PRIMARY KEY (`Ann_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Con_ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `annoncement`
--
ALTER TABLE `annoncement`
  MODIFY `Ann_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Con_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
