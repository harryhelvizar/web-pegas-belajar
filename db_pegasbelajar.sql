-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 01:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegasbelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `email`, `password`, `foto`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Lalu Abdurrahman', 'lalurahman', 'lalurahmanms@gmail.com', '$2y$10$j6wwg2PAtoFoC8Qs9fWNE.cFK8qfBGHgIL9kSFPLHe3wuYLxvpn.q', 'default.jpg', 1, 1, '0000-00-00 00:00:00'),
(2, 'rahman', 'rahman', 'rahman@gmail.com', '$2y$10$5Qt6qDm3yB8UOcP6/HB.9OEe2qQnQKF0uOdOmLUpBuzrC9P8ugh8C', 'default.jpg', 1, 1, '0000-00-00 00:00:00'),
(3, 'lalu', 'lalu', 'lalu@gmail.com', '$2y$10$V42qNNFlSVNXDTElJTNDIO4neFqdfFk1Cfne7ZWFmIzfwgGoYglU2', 'default.jpg', 1, 1, '0000-00-00 00:00:00'),
(4, 'saya', 'saya', 'saya@mail.com', '$2y$10$Y610/JXC82jt6ndasUZ6Gu6RvT19gLBjWZGDtIlSKums7FnjB6AYC', 'default.jpg', 1, 1, '0000-00-00 00:00:00'),
(5, 'kita', 'kita', 'kita@gmail.com', '$2y$10$4JmbtxvwtlxTpjjan.mBPupfnaAC/gpGzbFhLNGI/5CrG9pc74j8O', 'default.jpg', 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `username`, `email`, `password`, `nis`, `asal_sekolah`, `kabupaten`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `foto`, `date_created`) VALUES
(1, 'Lalu Abdurrahman', 'lalurahman', 'lalurahm@gmail.com', '$2y$10$41vzXuMMoGm04nqCeS.4Ye31crJ6NH68H9fFHCLTNzmW/dhQ80qfO', '111232', 'pi', 'Makassar', '085256999428', 'Makassar', '', 'deafult.jpg', '0000-00-00 00:00:00'),
(2, 'Harry Helvizar', 'harry', 'harry@gmail.com', '$2y$10$7pJJwsDdU7Oa2nauU0oriuhz/K2npIxpiMHaC.BQenw.K76owa33O', '34234', 'PI', 'Makassar', '085256999456', 'Makassar', '2019-11-11', 'deafult.jpg', '0000-00-00 00:00:00'),
(3, 'Aswar Kasim', 'aswar', 'aswar@gmail.com', '$2y$10$hlB.GNhwnA0/NaZUYbEz/uFOBpsecXLJNhSNO/iN94ZXcDtRT6c7K', '32342', 'PI', 'Makassar', '085256999778', 'Makassar', '2019-11-14', 'deafult.jpg', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
