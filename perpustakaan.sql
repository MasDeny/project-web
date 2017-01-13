-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2017 at 09:34 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim_nip` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `nim_nip`, `prodi`, `status`, `jenis_kelamin`) VALUES
(2, 'Gitariani', 'M01616', 'Manajemen Agribisnis', 'Mahasiswa', 'P'),
(3, 'Prasetya', 'E16160', 'Manajemen Informatika', 'Mahasiswa', 'L'),
(4, 'Melinda Putri', 'M78998', 'Rekamedis', 'Mahasiswa', 'P'),
(6, 'Ullyn Prastiwi', ' E31153', 'Manajemen Informatika', 'Mahasiswa', 'P'),
(7, 'Dimas Aji', 'E31150', 'Manajemen Informatika', 'Mahasiswa', 'L'),
(9, 'Agus Setiawan', 'A42134', 'Manajemen Agroindustri', 'Mahasiswa', 'L'),
(11, 'Dwi Wahyu Putera', 'D41141', 'Gizi Klinik', 'Mahasiswa', 'L'),
(16, 'Uffila Dina', 'B31189', 'Teknologi Pertanian', 'Mahasiswa', 'P'),
(18, 'Natasya Angela', 'D47756', 'Gizi Klinik', 'Mahasiswa', 'P'),
(19, 'Rian Saputro', 'D42178', 'Gizi Klinik', 'Mahasiswa', 'L'),
(109, 'Deny Prayantoro', 'E31150678', 'Manajemen Informatika', 'Mahasiswa', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `deskripsi_fisik` varchar(100) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `subyek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `deskripsi_fisik`, `isbn`, `subyek`) VALUES
(110, 'Ensiklopedia Geografi', 'Lentera Abadi', 'Lentera Abadi', '2001', '100 halaman, tebal 0,5 cm, cetakan 4', '9321000743297', 'Pengetahuan'),
(111, 'Microsoft Visual Basic 6.0 dan Crystal Report 2008', 'Madooms', 'Andi Offset', '2008', '50 halaman, tebal 0,5 cm, cetakan 6', '9400430000941', 'Pengetahuan'),
(122, 'Jaringan Komputer', 'Sukmaaji Anjik', 'Andi Offset', '2003', '200 halaman, tebal 2 cm, cetakan 6', '9210000754210', 'Pengetahuan'),
(125, 'Pengenalan Teknologi Informasi', 'Kadir Abdul', 'Andi Offset', '2005', '100 halaman, tebal 0,5 cm, cetakan 10', '9876541230985', 'Pengetahuan'),
(139, 'Politik Kelautan', 'Samsunar', 'Bumi Aksara', '2003', '150 halaman, tebal 1,5 cm, cetakan 10', '9876512000789', 'Pengetahuan'),
(141, 'Sehat Itu Pilihan : Gaya Hidup Sehat Tanpa Repot', 'Andi', 'Yohanes Sunardi', '2005', '300 halaman, tebal 1,5 cm, cetakan 8', '9054321000980', 'Pengetahuan'),
(144, 'Perancangan Database Dengan Power Designer 6.32', 'Edi Winarko', 'Prestasi Pustaka', '2009', '100 halaman, tebal 1 cm, cetakan 7', '9345000247809', 'Pengetahuan'),
(150, 'Panduan Koneksi Internet di Laptop', 'Agusli, Rachmat', 'Media Kita', '2010', '100 halaman, tebal 0,5 cm, cetakan 9', '9043219871060', 'Pengetahuan'),
(170, 'Komunikasi Kebidanan', 'Christina', 'CV. EGC', '2000', '500 halaman, tebal 2 cm, cetakan 5', '9812340045231', 'Pengetahuan'),
(178, 'Membangun Jaringan Sendiri LAN Berbasis Windows 2000 Server Local Area Network', 'Tutang', 'D@takom', '2002', '100 halaman, tebal 0,5 cm, cetakan 8', '9875310976214', 'Pengetahuan'),
(181, 'Komunikasi Politik dan Otonomi Daerah', 'Eko Harry Susanto', 'Mitra Wacana Media', '2004', '300 halaman, tebal 1,5 cm, cetakan 4', '9000000067670', 'Pengetahuan'),
(188, 'Media, Pemilu, dan Politik', 'Tim Isai', 'Pustaka Utama Grafiti', '2005', '300 halaman, tebal 1,5 cm, cetakan 6 ', '9000034567001', 'Pengetahuan'),
(192, 'Kisah-Kisah Kucing', 'James Herriot', 'PT. GPU', '2006', '100 halaman, tebal 0,5 cm, cetakan 7', '9876500003200', 'Fiksi'),
(193, 'Ilmu Negara', 'Ni\'matul Huda', 'Rajawali Press', '2001', '500 halaman, tebal 2 cm, cetakan 3', '9123450000120', 'Pengetahuan'),
(230, 'Pengantar Logika dan Algoritma', 'Yulikuspartono', 'Andi Offset', '2004', '50 halaman, tebal 0,5 cm, cetakan 7', '9123456780321', 'Pengetahuan'),
(234, 'Pemrograman Microsoft Visual Basic 6', 'Kurniadi Adi', 'Elex Media Computindo', '2008', '500 halaman, tebal 2 cm, cetakan 5', '3456782456766', 'Pengetahuan'),
(250, 'Teknologi Wimax', 'Widodo Stri Thomas', 'Graha Ilmu', '2008', '200 halaman, tebal 1 cm, cetakan 4', '9235015802000', 'Pengetahuan'),
(251, 'The Lord of the Rings: The Fellowship of the Ring', 'J. R. R. Tolkien', 'Gramedia Pustaka Utama', '2013', '512 hlm, tebal 23 cm, cetakan 10', '9799792288322', 'Fiksi'),
(252, 'Mahasiswa Mengejar Deadline', 'Mahasiswa', 'Universitas Antah Berantah Press', '2019', 'belum dicetak, masih dalam softcopy', '9791234567899', 'Komedi'),
(262, 'Sistem Basis Data', 'Fathansyah', 'Informatika Bandung', '2004', '300 halaman, tebal 1 cm, cetakan 5', '9214567029654', 'Pengetahuan'),
(269, 'Ilmu Bedah Kebidanan', 'YBP - SP', 'CV. Sagung Seto', '2005', '400 halaman, tebal 2 cm, cetakan 2', '9871230087001', 'Pengetahuan'),
(272, 'Pemrograman Berorientasi Objek', 'Nugroho Adi', 'Informatika Bandung', '2004', '200 halaman, tebal 1 cm, cetakan 3', '9432189054321', 'Pengetahuan'),
(289, 'Sistem Operasi', 'Hariyanto Bambang', 'Informatika Bandung', '2009', '400 halaman, tebal 1,5 cm, cetakan 3', '9876542109234', 'Pengetahuan'),
(297, 'Teknik Digital', 'Santosa P.Insap', 'Andi Offset', '1996', '300 halaman, tebal 1,5 cm, cetakan 4', '9812309543198', 'Pengetahuan'),
(341, 'One Second After', 'Andi', 'William R Forstchen', '2000', '150 halaman, tebal 1 cm, cetakan 6', '9000045009800', 'Fiksi'),
(350, 'Mempelajari Wimax Secara Tutorial dan Visual ', 'Hantoro, Gunadi Dwi', 'Informatika Bandung', '2008', '300 halaman, tebal 1,5 cm, cetakan 5', '9000008721456', 'Pengetahuan'),
(368, 'Fisika Kedokteran', 'Gabriel', 'CV. EGC', '2000', '600 halaman, tebal 2,5 cm, cetakan 1', '9005400320032', 'Pengetahuan'),
(378, 'Kumpulan Latihan Pemrograman Delphi', 'Malik, Jaja Jamaludin', 'Andi Offset', '2006', '100 halaman, tebal 0,5 cm, cetakan 3', '9832107654329', 'Pengetahuan'),
(399, 'Prinsip Dasar Ilmu Gizi', 'Sunita Almatsie', 'PT Gramedia Pustaka Utama', '2001', '400 halaman, tebal 2 cm, cetakan 5', '9003421789054', 'Pengetahuan'),
(455, 'Psikologi Kepemimpinan dan Motivasi', 'Djamaludin Ancok', 'Erlangga', '2003', '200 halaman, tebal 1,5 cm, cetakan 4', '9854320009140', 'Pengetahuan');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `kembali` date DEFAULT NULL,
  `id_buku` varchar(13) NOT NULL,
  `id_anggota` varchar(30) NOT NULL,
  `id_petugas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`, `kembali`, `id_buku`, `id_anggota`, `id_petugas`) VALUES
(37, '2017-01-06', '2017-01-09', NULL, '9321000743297', 'E31150678', 'M0513027');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `nip`, `jenis_kelamin`, `username`, `password`) VALUES
(10101, 'Fembi Rekrisna Grandea Putra', 'M0513019', 'L', 'fembi', 'fembi'),
(20202, 'Lia Ristiana', 'M0513027', 'P', 'lia', 'lia'),
(301301, 'Shafira Audreyna', 'M0513042', 'P', 'fira', 'fira'),
(401401, 'Ullyn Prastiwi Wulansari', 'M0513057', 'P', 'admin', 'ullyn04'),
(401402, 'Deny', 'D347424', 'L', 'admin', 'admin'),
(401403, 'Deny', 'D347424', 'L', 'admin', 'admin'),
(401404, 'Deny', 'D347424', 'L', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `nim_nip` (`nim_nip`),
  ADD KEY `nim_nip_2` (`nim_nip`),
  ADD KEY `nim_nip_3` (`nim_nip`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `isbn` (`isbn`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=456;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401405;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `id_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`nim_nip`),
  ADD CONSTRAINT `id_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`isbn`),
  ADD CONSTRAINT `id_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
