-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 05:20 AM
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
-- Database: `db_rescue`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `solusi_id` int(11) NOT NULL,
  `penyakit_id` varchar(50) NOT NULL,
  `solusi_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`solusi_id`, `penyakit_id`, `solusi_ket`) VALUES
(1, 'P01', 'Menghindari pelukaan pada batang bagian bawah.'),
(2, 'P01', 'Hindari pemberian pupuk kandang dekat dengan pangkal batang terutama pupuk belum sempurna matang/ kering.'),
(3, 'P01', 'Menjaga drainase agar air jangan sampai tergenang.'),
(4, 'P01', 'pemangkasan yang baik.'),
(5, 'P01', 'Menjaga Ph tanah diatas 6,5'),
(6, 'P02', 'Eradikasi selektif dengan jalan memotong bagian yang sakit minimal 5 cm terbawa bagian sehat.'),
(7, 'P02', 'Menjaga kelembaban kebun.'),
(8, 'P02', 'Menyemprot dengan cendawan antagonis (Trichoderma sp)'),
(9, 'P03', 'Memangkas ranting-ranting yang menunjukkan gejala CVPD'),
(10, 'P03', 'Tanaman sakit harus dimusnahkan melalui eradikasi.'),
(11, 'P03', 'Melakukan pengendalian serangga vektor.'),
(12, 'P03', 'Memberikan antibiotika oksitetrasiklin'),
(13, 'P04', 'Menjaga kebersihan kebun.'),
(14, 'P04', 'Eradikasi tanaman yang sakit.'),
(15, 'P04', 'Hindari pelukaan permukaan kulit tanaman.'),
(16, 'P04', 'Menjaga kebersihan alat-alat yang digunakan.'),
(17, 'P05', 'Mengumpulkan buah yang gugur lalu dimusnahkan.'),
(18, 'P05', 'Lakukan gerakan pengendalian secara serentak di beberapa kebun.'),
(19, 'P05', 'Mengumpulkan kelompok telur dan nimpa instar lalu dimusnahkan.'),
(20, 'P06', 'Pemberian metamsodium(Vapam) Dicampur dengan tanah'),
(21, 'P06', 'Sodium tetrahiocarbonat(Enzone) ditaburkan dipangkalan batang'),
(22, 'P06', 'Pemupukan yang baik dan seimbang'),
(23, 'P07', 'Membuang cabang-cabang yang terserang penyakit'),
(24, 'P07', 'Memberi fungisida berbahan aktif probineb'),
(25, 'P07', 'Menjaga kondisi tanaman dalam keadaan optimal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`solusi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  MODIFY `solusi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
