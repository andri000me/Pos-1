-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2020 at 09:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `express`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `no_order` varchar(20) DEFAULT NULL,
  `nama_penerima` varchar(20) NOT NULL,
  `notlp_penerima` varchar(25) NOT NULL,
  `isi` varchar(25) NOT NULL,
  `berat` varchar(25) NOT NULL,
  `drop_point` varchar(20) NOT NULL,
  `nama_pengirim` varchar(20) NOT NULL,
  `tlp_pengirim` varchar(20) NOT NULL,
  `id_level` int(11) NOT NULL,
  `print` varchar(2) CHARACTER SET latin1 DEFAULT '0' COMMENT '0=unprint, 1=print',
  `tgl_order` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `no_order`, `nama_penerima`, `notlp_penerima`, `isi`, `berat`, `drop_point`, `nama_pengirim`, `tlp_pengirim`, `id_level`, `print`, `tgl_order`) VALUES
(13, '0009001', 'day', '98989', 'kosmetik', '8', 'Shamsaipo', 'knsk', '76767', 4, '1', '2020-02-18'),
(14, '0009002', 'ssa', '87877', 'jjn', '9', 'Causewaybay', 'dd', '998', 4, '1', '2020-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengiriman`
--

CREATE TABLE `tbl_pengiriman` (
  `id_kirim` int(11) NOT NULL,
  `tgl_kirim` varchar(25) NOT NULL,
  `no_order` varchar(25) NOT NULL,
  `status` varchar(2) DEFAULT '0' COMMENT '0=hold, 1=manifest',
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(35) DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  `user_password` varchar(35) DEFAULT NULL,
  `user_level` varchar(2) DEFAULT NULL,
  `user_status` varchar(2) DEFAULT '1',
  `komisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_level`, `user_status`, `komisi`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '1', '2000'),
(2, 'Agen Cirebon', 'nur', 'b55178b011bfb206965f2638d0f87047', '2', '1', '3000'),
(4, 'Agen Cirebon', 'dayat', '1855c11f044cc8944e8cdac9cae5def8', '2', '1', '2500'),
(7, 'Agen Kuningan', 'kuningan', 'b732eb852beeaf8b5e84cc0be792c12c', '2', '1', '2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_pengiriman`
--
ALTER TABLE `tbl_pengiriman`
  ADD PRIMARY KEY (`id_kirim`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_pengiriman`
--
ALTER TABLE `tbl_pengiriman`
  MODIFY `id_kirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
