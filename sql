-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 12:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Ashok', 'chaudhari', 'ashok@756.com', 'ashok'),
(2, 'shyam', 'gupta', 'shyam59@gmail.com', 'shyam'),
(3, 'yesha', 'patel', 'yesha23@147gmail.com', 'yesha'),
(4, 'mansi', 'patel', 'mansi89@gmail.com', 'mansi'),
(0, '', '', '', ''),
(0, '', '', '', ''),
(7, 'vivek', 'patel', 'vivek12@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Id` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Id`, `Password`) VALUES
(1, 'ashok'),
(2, 'shyam');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(8) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Language` varchar(20) NOT NULL,
  `Publisher` varchar(30) NOT NULL,
  `MRP` int(50) NOT NULL,
  `PUB_Date` date NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `Title`, `Language`, `Publisher`, `MRP`, `PUB_Date`, `Quantity`) VALUES
('264', 'c++ tutorial', 'english', 'wesley', 949, '1990-05-01', 30),
('2', 'mathematics', 'english', 'wesley', 789, '1990-06-05', 30),
('459', 'computer science principal', 'english', 'kevin hare', 700, '2020-02-03', 20),
('645', 'mathematics in computing', 'english', 'Gerard o Regan', 400, '2018-02-11', 70);

-- --------------------------------------------------------

--
-- Table structure for table `issued_book`
--

CREATE TABLE `issued_book` (
  `student_rollno` int(6) NOT NULL,
  `title` varchar(20) NOT NULL,
  `Isued_date` date NOT NULL,
  `Renew_date` date NOT NULL,
  `Fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued_book`
--

INSERT INTO `issued_book` (`student_rollno`, `title`, `Isued_date`, `Renew_date`, `Fine`) VALUES
(25, 'v.k.maheta', '2020-12-31', '2022-01-14', 25),
(15, 'mathematics', '2021-12-14', '2022-01-05', 20),
(5, 'electronics', '2021-02-25', '2021-06-26', 40),
(25, 'm.l.bose', '2021-09-05', '2021-10-06', 52),
(25, 'm.l.bose', '2021-09-05', '2021-10-06', 52);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `student_rollno` int(20) NOT NULL,
  `Student_firstname` varchar(50) NOT NULL,
  `Student_lastname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Student_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`student_rollno`, `Student_firstname`, `Student_lastname`, `email`, `Student_password`) VALUES
(1, 'mahima', 'chaudhari', 'mahima@123.com', 'mahima'),
(2, 'mayuri', 'chaudhari', 'mayuri@35.com', 'mayuri'),
(3, 'fenty', 'tendal', 'fenty123@gmail.com', 'fenty'),
(4, 'sunita', 'chaudhari', 'sunita36@gmail.com', 'sunita'),
(6, 'chhaya', 'chaudhari', 'chhaya@123.com', 'chhaya');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `student_rollno` varchar(8) NOT NULL,
  `Student_Password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`student_rollno`, `Student_Password`) VALUES
('1', 'mahima'),
('3', 'fenty');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
