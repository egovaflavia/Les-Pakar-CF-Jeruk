-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 12:21 PM
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
-- Database: `db_pakar_cf`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_Admin`
--

CREATE TABLE `tb_Admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_Admin`
--

INSERT INTO `tb_Admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_nama`) VALUES
(1, 'admin', 'admin', 'Egova Riva Gustino'),
(2, 'sari', 'sari', 'sari marta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_Gejala`
--

CREATE TABLE `tb_Gejala` (
  `gejala_id` varchar(100) NOT NULL,
  `gejala_nama` varchar(250) NOT NULL,
  `gejala_cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_Gejala`
--

INSERT INTO `tb_Gejala` (`gejala_id`, `gejala_nama`, `gejala_cf`) VALUES
('G01', 'Menyerang pangkal batang detak mata tempel', 0.9),
('G02', 'Bercak basah berwarna gelap pada kulit batang', 1),
('G03', 'Permukaan batang kulit batang cekung dan mengeluar', 0),
('G04', 'Kulit terkelupas melingkar busuk dan tanaman mati', 1),
('G05', 'Daun-daun menjadi gugur', 1),
('G06', 'Ranting dan cabang mengalami kematian', 0.93),
('G07', 'Kulit berubah warna menjadi putih muda atau orange', 1),
('G08', 'Munculnya belang kuning pada bagian daun', 1),
('G09', 'Bentuk buah tidak simetris', 1),
('G10', 'Buah yang di hasilkan berukuran kecil', 1),
('G11', 'Pangkalan buah berubah menjadi warna orange', 0.8),
('G12', 'Tanaman tumbuh secara lambat', 1),
('G13', 'Blendok kental berwarna keemasann keluar dari batang', 0.8),
('G14', 'Batang mengering', 0.75),
('G15', 'Pangkalan batang ditumbuhi jamur', 1),
('G16', 'Buah yang diserang akan terlihat bekas tusukan berwarna kuning dan mengeras', 1),
('G17', 'Buah gugur', 0.95),
('G18', 'Helai daun menebal', 1),
('G19', 'Kedua sisi daun menggulung keatas', 0),
('G20', 'Daun tampak berkerut', 0.92),
('G21', 'Daun menggulung', 0),
('G22', 'Daun menjadi kering', 1),
('G23', 'Kulit buah kusam', 1),
('G24', 'Adanya burik ditangkai buah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_Konsultasi`
--

CREATE TABLE `tb_Konsultasi` (
  `konsultasi_id` int(11) NOT NULL,
  `penyakit_id` varchar(11) NOT NULL,
  `konsultasi_tgl` date NOT NULL,
  `konsultasi_hasil` float NOT NULL,
  `pasien_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_Konsultasi`
--

INSERT INTO `tb_Konsultasi` (`konsultasi_id`, `penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`, `pasien_id`) VALUES
(29, 'P07', '2020-01-08', 99, 6),
(30, 'P01', '2020-01-09', 64.6, 6),
(31, 'P06', '2020-01-12', 99.84, 6),
(32, 'P01', '2020-01-12', 98.6, 7),
(33, 'P06', '2020-01-12', 99.84, 8),
(34, 'P03', '2020-01-20', 40, 6),
(36, 'P06', '2020-08-26', 52, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_Pasien`
--

CREATE TABLE `tb_Pasien` (
  `pasien_id` int(11) NOT NULL,
  `pasien_user` varchar(50) NOT NULL,
  `pasien_pass` varchar(50) NOT NULL,
  `pasien_nama` varchar(50) NOT NULL,
  `pasien_jk` varchar(50) NOT NULL,
  `pasien_tgl_lahir` date NOT NULL,
  `pasien_alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_Pasien`
--

INSERT INTO `tb_Pasien` (`pasien_id`, `pasien_user`, `pasien_pass`, `pasien_nama`, `pasien_jk`, `pasien_tgl_lahir`, `pasien_alamat`) VALUES
(6, 'sari', 'sari', 'sari marta', 'Perempuan', '1997-03-21', 'PADANG'),
(7, 'ayu', 'ayu', 'ayu aya', 'Perempuan', '1998-02-02', 'padang'),
(8, 'ricky', 'ricky', 'ricky s', 'Laki-Laki', '1997-01-13', 'Bkt');

-- --------------------------------------------------------

--
-- Table structure for table `tb_Penyakit`
--

CREATE TABLE `tb_Penyakit` (
  `penyakit_id` varchar(5) NOT NULL,
  `penyakit_nama` varchar(50) NOT NULL,
  `penyakit_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_Penyakit`
--

INSERT INTO `tb_Penyakit` (`penyakit_id`, `penyakit_nama`, `penyakit_ket`) VALUES
('P01', 'Busuk Pangkal Batang', 'Busuk Pangkal Batang merupakan penyakit pada tanaman jeruk yang menyerang batang tanaman jeruk. Penyakit ini disebabkan oleh organisme mirip cendawan Phypthopthora spp. menjadi kendala utama dan menjadi faktor pembatas produksi jeruk nasional.'),
('P02', 'Jamur Upas', 'Jamur upas adalah jamur penyebab penyakit upas atau mati cabang/ranting. Penyakit Ini biasanya menyerang pohon perkebunan dan buah budidaya di daerah tropis, terutama dimusim penghujan.'),
('P03', 'CVPD', 'Penyakit yang disebut juga dengan Citrus Vein Phloem Degeneration (CVPD) merupakan penyakit pada tanaman jeruk yang ditularkan melalui vektor serangga sejenis kutu loncat.'),
('P04', 'Penyakit Kulit Diplodia', ' Penyakit Kulit Diplodia merupakan penyakit yang biasa menyerang saat musim kemarau atau saat tanaman mengalami kekurangan air. Penyakit ini disebabkan oleh jamur.'),
('P05', 'Hama Kepik Jeruk', 'Hahaha'),
('P06', 'Hama Thrips', 'Thrps'),
('P07', 'Hama Tungau Merah', 'Hama');

-- --------------------------------------------------------

--
-- Table structure for table `tb_Solusi`
--

CREATE TABLE `tb_Solusi` (
  `solusi_id` int(11) NOT NULL,
  `penyakit_id` varchar(50) NOT NULL,
  `solusi_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_Solusi`
--

INSERT INTO `tb_Solusi` (`solusi_id`, `penyakit_id`, `solusi_ket`) VALUES
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
-- Indexes for table `tb_Admin`
--
ALTER TABLE `tb_Admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_Gejala`
--
ALTER TABLE `tb_Gejala`
  ADD PRIMARY KEY (`gejala_id`);

--
-- Indexes for table `tb_Konsultasi`
--
ALTER TABLE `tb_Konsultasi`
  ADD PRIMARY KEY (`konsultasi_id`);

--
-- Indexes for table `tb_Pasien`
--
ALTER TABLE `tb_Pasien`
  ADD PRIMARY KEY (`pasien_id`);

--
-- Indexes for table `tb_Penyakit`
--
ALTER TABLE `tb_Penyakit`
  ADD PRIMARY KEY (`penyakit_id`);

--
-- Indexes for table `tb_Solusi`
--
ALTER TABLE `tb_Solusi`
  ADD PRIMARY KEY (`solusi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_Admin`
--
ALTER TABLE `tb_Admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_Konsultasi`
--
ALTER TABLE `tb_Konsultasi`
  MODIFY `konsultasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_Pasien`
--
ALTER TABLE `tb_Pasien`
  MODIFY `pasien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_Solusi`
--
ALTER TABLE `tb_Solusi`
  MODIFY `solusi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
