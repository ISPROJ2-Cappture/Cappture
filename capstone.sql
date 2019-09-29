-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 11:44 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `AboutID` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`AboutID`, `Description`, `Image`) VALUES
(1, 'About.Test5', ''),
(2, 'About.Test7', ''),
(4, 'About.Test8/Update.Trial5', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `timeadded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Email`, `Password`, `timeadded`) VALUES
(1, 'admin.one@gmail.com', 'cbb457263b44e593c0b65c9c7ff6f2f5292d93b30e2f43ff8cfaa4c67b168b676bcd8873995174045b30725ed65845569dbb14e2cd9ee5dfad25c83f0fd961c7', 1569672851);

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `AuditID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `BookingID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` datetime NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Building` varchar(50) NOT NULL,
  `Barangay` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Zip` varchar(5) NOT NULL,
  `PhotographerID` int(11) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ClientID` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `MiddleInitial` char(3) DEFAULT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `HomeNumber` int(10) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Verified` tinyint(4) NOT NULL DEFAULT '0',
  `Vkey` varchar(500) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '0',
  `timeadded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ClientID`, `Firstname`, `MiddleInitial`, `Lastname`, `Email`, `HomeNumber`, `Mobile`, `Password`, `Verified`, `Vkey`, `Status`, `timeadded`) VALUES
(6, 'Client', 'A', 'One', 'client.one@gmail.com', 123, 123, '7831d7f3bb4ace75e0a8c3f8529a4aafa3294e8c66763aca9b5270bc82ac172852852bf2e1367089b603c82f7fe061612fcd439d7142ffad955d4efd9910a4b6', 0, 'bde0a4d00aeb073d3ec9bba38918ceb9', 0, 1569606299),
(7, 'Client', 'A', 'Two', 'client.two@gmail.com', 123, 123, '73e288c2f1579a9802d0eb4abfc877e88eafd90b6ac35c41fd5bcd0c0ae0dae4b970b570e2812ace02872555b93e4e198baf470839ec4bf12333f9a868204e69', 0, '52f4882a88fd1f96b3d2398cf4778878', 0, 1569606516);

-- --------------------------------------------------------

--
-- Table structure for table `deactivate`
--

CREATE TABLE `deactivate` (
  `id` int(11) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `PhotographersID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `FAQsID` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`FAQsID`, `Description`) VALUES
(1, 'Test1/Update.Trial4'),
(5, 'FAQs.Test5'),
(6, 'FAQs.Test9/Update.Trial2');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `MessageID` int(11) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `PhotographerID` int(11) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `AdminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `PhotographersID` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `MiddleInitial` char(3) DEFAULT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `HomeNumber` int(10) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Verified` int(11) NOT NULL,
  `Vkey` varchar(500) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '0',
  `timeadded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`PhotographersID`, `Firstname`, `MiddleInitial`, `Lastname`, `Email`, `HomeNumber`, `Mobile`, `Password`, `Verified`, `Vkey`, `Status`, `timeadded`) VALUES
(1, 'Photographer', 'B', 'One', 'photographer.one@gmail.com', 123, 123, '38a1ff96dd4f85be2ac1505954074f313c5c0b1e791887f5d303fb0f2431bf2935d14c9dafe0f54cefdd7e7a891d49326964fbbab928839b104ae5fb9619a07e', 0, '42cccb130a3f506c7e00f54b6a95c2b5', 0, 1569606375),
(2, 'Photographer', 'B', 'Two', 'photographer.two@gmail.com', 123, 123, '6a853afa47ff0c887d664284e6125869d3264669f9bc61cddb3c08d336785cbd49f3b87acc459c7d23c9f7a1275197162c5dc80febbdf05a165dc29703bf7e89', 0, '235440b35e31ef52d83899bfb7ec5bfd', 0, 1569669522);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `PortfolioID` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `PhotographerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `RatingsID` int(11) NOT NULL,
  `Ratings` int(11) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `PhotographerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServiceID` int(11) NOT NULL,
  `Cost` float NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `PhotographerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videotutorials`
--

CREATE TABLE `videotutorials` (
  `VideoID` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`AboutID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`AuditID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `PhotographerID` (`PhotographerID`,`ClientID`),
  ADD KEY `ClientID` (`ClientID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ClientID`),
  ADD KEY `ClientID` (`ClientID`);

--
-- Indexes for table `deactivate`
--
ALTER TABLE `deactivate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ClientID` (`ClientID`,`PhotographersID`),
  ADD KEY `PhotographersID` (`PhotographersID`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`FAQsID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`MessageID`),
  ADD KEY `PhotographerID` (`PhotographerID`,`ClientID`,`AdminID`),
  ADD KEY `AdminID` (`AdminID`),
  ADD KEY `ClientID` (`ClientID`);

--
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`PhotographersID`),
  ADD KEY `PhotographersID` (`PhotographersID`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`PortfolioID`),
  ADD KEY `PhotographerID` (`PhotographerID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`RatingsID`),
  ADD KEY `ClientID` (`ClientID`,`PhotographerID`),
  ADD KEY `PhotographerID` (`PhotographerID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServiceID`),
  ADD KEY `PhotographerID` (`PhotographerID`);

--
-- Indexes for table `videotutorials`
--
ALTER TABLE `videotutorials`
  ADD PRIMARY KEY (`VideoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `AboutID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `AuditID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ClientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deactivate`
--
ALTER TABLE `deactivate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `FAQsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `PhotographersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `PortfolioID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videotutorials`
--
ALTER TABLE `videotutorials`
  MODIFY `VideoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `clients` (`ClientID`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`PhotographerID`) REFERENCES `photographers` (`PhotographersID`);

--
-- Constraints for table `deactivate`
--
ALTER TABLE `deactivate`
  ADD CONSTRAINT `deactivate_ibfk_1` FOREIGN KEY (`PhotographersID`) REFERENCES `photographers` (`PhotographersID`),
  ADD CONSTRAINT `deactivate_ibfk_2` FOREIGN KEY (`ClientID`) REFERENCES `clients` (`ClientID`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`ClientID`) REFERENCES `clients` (`ClientID`);

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`PhotographerID`) REFERENCES `photographers` (`PhotographersID`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `clients` (`ClientID`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`PhotographerID`) REFERENCES `photographers` (`PhotographersID`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`PhotographerID`) REFERENCES `photographers` (`PhotographersID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
