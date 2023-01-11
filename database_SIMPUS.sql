-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 12:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
  `id` int(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first`, `last`, `username`, `password`, `email`, `contact`, `pic`) VALUES
(5, 'admin1', 'admin1', 'admin1', 'admin1', 'admin1@mahasiswa.upnvj.ac.id', '111111', 'p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `NIM` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `first`, `last`, `username`, `password`, `NIM`, `email`, `contact`, `pic`) VALUES
(3, 'Tes1', 'Tes1', 'tes1', 'tes1', 1010511004, 'tes1@mahasiswa', '213131', 'p.jpg'),
(7, 'Tes3', 'Tes3', 'tester3', 'tes3', 0, 'tes3@mahasiswa.upnvj.ac.id', '123456', 'p.jpg'),
(8, 'Tes2', 'Tes2', 'tes2', 'tes2', 1010511002, 'tes2@mahasiswa', '214141', 'p.jpg'),
(10, 'Budi', 'Anto', 'budianto', 'tes1', 1010511005, 'budianto@upn', '02131415161', 'p.jpg'),
(11, 'tes', 'er', 'tester', 'tester', 2010511093, 'tester@gmail.com', '1234567890', 'p.jpg'),
(12, 'gani', 'wijaya', 'ganisantoso', 'gani', 2010511093, 'ganisantoso@gmail.com', '082220074500', 'p.jpg'),
(13, 'tes4', 'tes4', 'tes4', 'tes4', 1293867, 'tes4@gmail.com', '02198310571', 'p.jpg'),
(14, 'Riska', 'Diana', 'diana', 'bebas', 2147483647, 'riskadiana@gmail.com', '082126917401', 'p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `cover`, `name`, `authors`, `status`, `quantity`) VALUES
(1, 'JavascriptForDatascience.jpg\r\n', 'Javascript for Data Science', 'Maya Gans, Toby Hodges, Greg Wilson', 'Available', 0),
(2, 'Pachinko.jpg', 'Pachinko', 'Lee Min Jin', 'Available', 6),
(3, 'Dune.jpg', 'Dune', 'Frank Herbert', 'Available', 10),
(4, 'ItEndwithUs.jpg', 'It Ends with Us', 'Colleen Hoover', 'Available', 9),
(5, 'VisualStudioCode.jpg\r\n', 'Visual Studio Code', 'Bruce Johnson', 'Available', 1),
(6, 'AtomicHabits.jpg', 'Atomic Habits', 'James Clear', 'Available', 11),
(7, 'TheSongofAchilles.jpg', 'The Song of Achilles', 'Madeline miller', 'Available', 4),
(8, 'HtmlAndCss.jpg', 'HTML and CSS', 'Jon Duckett', 'Available', 4),
(9, 'PracticalPrograming.jpg', 'Practical Programming', 'Paul Gries, Jennifer Campbell, Jason Montojo', 'Available', 2),
(10, 'ReactNativeForMobileDevelopment.jpg', 'React Native for Mobile Development', 'Akshat Paul, Abhishek Nalwaya', 'Available', 5),
(11, 'TheStarAndI.jpg', 'The Star and I', 'Ilana Tan', 'Available', 1),
(12, 'Bumi.jpg', 'Bumi', 'Tere Liye', 'Available', 2),
(13, 'Bulan.jpg', 'Bulan', 'Tere Liye', 'Available', 1),
(14, 'Matahari.jpg', 'Matahari', 'Tere Liye', 'Available', 5),
(15, 'Bintang.jpg', 'Bintang', 'Tere Liye', 'Available', 1),
(16, 'Dilan.jpg', 'Dilan', 'Pidi Baiq', 'Available', 2),
(17, '1111.jpg', '11 : 11', 'Fiersa Besari', 'Available', 3),
(18, 'CerosDanBatozar.jpg', 'Ceros dan Batozar', 'Tere Liye', 'Available', 5),
(19, 'ThePsychologyofMoney.jpg', 'The Psychology of Money', 'Morgan Housel', 'Available', 4),
(20, 'BumiManusia.jpg', 'Bumi Manusia ', 'Pramoedya Ananta Toer', 'Available', 6),
(21, 'Negeri5Menara.jpg', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Available', 7),
(22, 'BukanBukuNikah.jpg', 'Bukan Buku Nikah ', 'Ria Ricis.', 'Available', 2),
(38, 'Matahari.jpg', 'tes', 'tester', 'Available', 10);

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `issueid` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL DEFAULT '-',
  `return` varchar(100) NOT NULL DEFAULT '-',
  `returned` varchar(100) NOT NULL DEFAULT '-',
  `denda` int(100) NOT NULL,
  `late` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`issueid`, `username`, `bid`, `approve`, `issue`, `return`, `returned`, `denda`, `late`) VALUES
(71, 'tes1', 7, 'RETURNED', '2021-11-25', '2021-11-23', '2022-06-22', 3000, 3),
(73, 'tes1', 1, 'RETURNED', '2021-11-25', '2021-11-27', '2022-06-22', 0, 0),
(74, 'tes2', 1, 'Yes', '2021-11-25', '2021-11-27', '-', 0, 0),
(75, 'tes2', 6, 'RETURNED', '2021-11-25', '2021-11-25', '2021-11-25', 0, 0),
(76, 'tes2', 7, 'Yes', '2021-11-25', '2021-11-29', '-', 0, 0),
(77, 'tes3', 9, 'Belum di Approve', '-', '-', '-', 0, 0),
(78, 'tes3', 8, 'Belum di Approve', '-', '-', '-', 0, 0),
(79, 'tes3', 6, 'EXPIRED', '2021-11-25', '2021-11-25', '-', 1000, 1),
(80, 'tes1', 4, 'RETURNED', '2021-11-25', '2021-11-24', '2021-11-25', 0, 1),
(82, 'tes3', 7, 'RETURNED', '2021-11-25', '2021-11-25', '2021-11-25', 0, 0),
(100, 'tes1', 2, 'Yes', '2022-06-22', '2022-06-29', '-', 0, 0),
(101, 'tes1', 2, 'Yes', '2022-06-22', '2022-06-29', '-', 0, 0),
(102, 'diana', 1, 'Yes', '2022-12-10', '2022-12-17', '-', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`issueid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `issue_book`
--
ALTER TABLE `issue_book`
  MODIFY `issueid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
