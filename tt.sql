-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 02:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` int(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DateofBirth` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Name`, `Password`, `Gender`, `DateofBirth`, `Email`, `Type`, `Image`) VALUES
('jakiul', 'jakiul', 123456, 'Male', '06/06/1996', 'jakiulalam.ja@gmail.com', 'admin', ''),
('joy', 'Suranjan', 1234, 'Male', '10/10/1997', 'joybu07@gmail.com', 'admin', 'Capture.PNG'),
('niloy', 'Noboranjan', 123456, 'Male', '10/10/1996', 'niloydey@ymail.com', 'admin', 'cover2.jpg'),
('nobo', 'Noboranjan', 123, 'Male', '10/10/1996', 'niloydey@ymail.com', 'admin', 'cover3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Phone` int(15) NOT NULL,
  `AName` varchar(250) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Brno` varchar(100) NOT NULL,
  `Tid` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Name`, `Email`, `Phone`, `AName`, `Destination`, `Brno`, `Tid`) VALUES
(14, 'efwe', 'dcv@gmail.com', 1770751986, 'Nova', 'coxs bazar', '01770751986', '2614894357828'),
(15, 'dcfvs', 'juju123@gmail.com', 1770751986, 'Robi', 'Bandarban', '01770751986', '2614894357828532'),
(16, 'sheehab', 'sheehab@yahoo.com', 1770751986, 'rana', 'india', '01970751986', '614894357828'),
(19, 'yy', 'juju123@gmail.com', 1770751986, 'Shopno', 'Nepal', '01770751986', '01770751986'),
(20, 'Noboranjan', 'niloydey@ymail.com', 1840117914, 'NOva', 'Cox Bazar', '0111245878441', '445565211546');

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `Dname` varchar(50) NOT NULL,
  `Atrraction` varchar(50) NOT NULL,
  `Message` text NOT NULL,
  `Information` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`Dname`, `Atrraction`, `Message`, `Information`, `Image`) VALUES
('Sundarbans', 'Mangrove forest,Brahmaputra and Meghna rivers,Beng', 'he Sundarbans mangrove forest, one of the largest such forests in the world (140,000 ha), lies on the delta of the Ganges, Brahmaputra and Meghna rivers on the Bay of Bengal. It is adjacent to the border of Indiaâ€™s Sundarbans World Heritage site inscribed in 1987. The site is intersected by a complex network of tidal waterways, mudflats and small islands of salt-tolerant mangrove forests, and presents an excellent example of ongoing ecological processes. The area is known for its wide range of fauna, including 260 bird species, the Bengal tiger and other threatened species such as the estuarine crocodile and the Indian python.', 'Khulna.', 'sundarban.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(50) NOT NULL,
  `Password` int(50) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `Type`) VALUES
('jaki', 12345, 'user'),
('jakiul', 123456, 'travelAgency'),
('megh', 12345, 'travelAgency'),
('nobo', 123, 'travelAgency');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `SL` int(11) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`SL`, `Subject`, `Message`) VALUES
(1, 'gg', 'gggg');

-- --------------------------------------------------------

--
-- Table structure for table `pd`
--

CREATE TABLE `pd` (
  `Dname` varchar(50) NOT NULL,
  `Atrraction` varchar(50) NOT NULL,
  `Message` text NOT NULL,
  `Information` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pd`
--

INSERT INTO `pd` (`Dname`, `Atrraction`, `Message`, `Information`, `Image`) VALUES
('Dal Lake', 'Mugal Garden, Gurmarg.', 'Dal is a lake in Srinagar, the summer capital of Jammu and Kashmir. The urban lake, which is the second largest in the state, is integral to tourism and recreation in Kashmir.', 'Srenagar, Kasmir,India.', 'Dallake.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tagency`
--

CREATE TABLE `tagency` (
  `userid` int(9) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `destination` varchar(40) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `cost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagency`
--

INSERT INTO `tagency` (`userid`, `aname`, `destination`, `duration`, `cost`) VALUES
(4, 'Nova', 'india', '3d-2n', 'Tk12000'),
(5, 'Tulip', 'coxs bazar', '3day-4night', 'Tk:7000'),
(6, 'Shopno', 'Nepal', '3day-4night', 'Tk:16000'),
(7, 'Robi', 'Bandarban', '3d-4night', 'Tk:8000'),
(8, 'nilu', 'sylhet', '2d-1n', 'tk:5000');

-- --------------------------------------------------------

--
-- Table structure for table `travelagency`
--

CREATE TABLE `travelagency` (
  `Username` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` int(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DateofBirth` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travelagency`
--

INSERT INTO `travelagency` (`Username`, `Name`, `Password`, `Gender`, `DateofBirth`, `Email`, `Type`, `Image`) VALUES
('jakiul', 'jakiul', 123456, 'Male', '06/06/1996', 'jakiulalam.ja2@gmail.com', 'travelAgency', ''),
('megh', 'sharifa', 12345, 'Female', '10/02/1996', 'sharifa@gmail.com', 'travelAgency', 'fggg.jpg'),
('nobo', 'Niloy', 123, 'Male', '10/10/1996', 'niloydey@ymail.com', 'travelAgency', '18557164_1639571256070443_8489343355271695158_n.jp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` int(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DateofBirth` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Name`, `Password`, `Gender`, `DateofBirth`, `Email`, `Type`, `Image`) VALUES
('jaki', 'Jakiul', 12345, 'Male', '1/02/1996', 'jakiull@brac.net', 'user', 'wwcover.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`Dname`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `pd`
--
ALTER TABLE `pd`
  ADD PRIMARY KEY (`Dname`);

--
-- Indexes for table `tagency`
--
ALTER TABLE `tagency`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `travelagency`
--
ALTER TABLE `travelagency`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tagency`
--
ALTER TABLE `tagency`
  MODIFY `userid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
