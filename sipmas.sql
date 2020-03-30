-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2020 at 03:50 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'avatar.jpg',
  `telp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `username`, `password`, `image`, `telp`) VALUES
(4, 'Alfiani Fitria K', 'admin@sipmas.com', 'admin1', '$2y$10$piCN51ABR8hWAzgUF5puaeO5cCyGvAqoAlIcBLOZHuEQkL9qMKhpm', 'avatar.png', 852237771);

--
-- Triggers `admin`
--
DELIMITER $$
CREATE TRIGGER `delete_admin` AFTER DELETE ON `admin` FOR EACH ROW DELETE FROM users WHERE
username = old.username
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_admin` AFTER INSERT ON `admin` FOR EACH ROW INSERT INTO
users
SET
email = new.email,
username = new.username,
password = new.password,
role = 1
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `id_petugas`) VALUES
(1, 'Keamanan', 1),
(2, 'Infrastruktur', 2),
(3, 'Pendidikan', 3),
(4, 'Kesehatan', 4),
(5, 'Kesejahteraan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` int(11) NOT NULL DEFAULT current_timestamp(),
  `nik` varchar(200) NOT NULL,
  `id_kategori` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `judul_pengaduan` varchar(200) NOT NULL,
  `isi_pengaduan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('pending','proses','selesai') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `id_kategori`, `nama`, `judul_pengaduan`, `isi_pengaduan`, `foto`, `status`) VALUES
(52, 1584516422, '1263748192716257', 2, 'Masyarakat1', 'Jalan Rusak', 'Halo pak, disini jalan rusak dan saya butuh dana untuk memperbaikinya.', '5e71cd461d149.png', 'selesai'),
(53, 1584557983, '1263748192716257', 4, 'Masyarakat1', 'Corona Meluas', 'Halo disini ada seseorang yang pilek, sepertinya masuk angin', '5e726f9f18903.png', 'proses'),
(54, 1584791591, '1263748192716257', 5, 'Masyarakat1', 'Kehilangan Kucing', 'Pak, tolong saya kehilangan kucing yang sangat lucu macam saya :(', '5e760027ab2cb.png', 'pending');

--
-- Triggers `pengaduan`
--
DELIMITER $$
CREATE TRIGGER `delete_pengaduan` AFTER DELETE ON `pengaduan` FOR EACH ROW DELETE FROM tanggapan WHERE
id_pengaduan = old.id_pengaduan
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(128) NOT NULL,
  `status_petugas` varchar(35) NOT NULL,
  `nama_petugas` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'avatar.jpg',
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `status_petugas`, `nama_petugas`, `email`, `username`, `password`, `telp`, `image`, `id_kategori`) VALUES
(1, 'Petugas Keamanan', 'Alfiani Fitria Kusnadi', 'petugas1@gmail.com', 'petugas1', '$2y$10$piCN51ABR8hWAzgUF5puaeO5cCyGvAqoAlIcBLOZHuEQkL9qMKhpm', '082321543292', 'avatar.png', 1),
(2, 'Petugas Infrastruktur', 'Alfan Fabian', 'petugas2@gmail.com', 'petugas2', '$2y$10$piCN51ABR8hWAzgUF5puaeO5cCyGvAqoAlIcBLOZHuEQkL9qMKhpm', '08522377710', 'avatar.png', 2),
(3, 'Petugas Pendidikan', 'Wini Puspa Rahayu', 'petugas3@gmail.com', 'petugas3', '$2y$10$piCN51ABR8hWAzgUF5puaeO5cCyGvAqoAlIcBLOZHuEQkL9qMKhpm', '082323236322', 'avatar.png', 3),
(4, 'Petugas Kesehatan', 'Anisa Rahma', 'petugas4@gmail.com', 'petugas4', '$2y$10$piCN51ABR8hWAzgUF5puaeO5cCyGvAqoAlIcBLOZHuEQkL9qMKhpm', '08522377710', 'avatar.png', 4),
(5, 'Petugas Kesejahteraan', 'Listiani', 'petugas5@gmail.com', 'petugas5', '$2y$10$piCN51ABR8hWAzgUF5puaeO5cCyGvAqoAlIcBLOZHuEQkL9qMKhpm', '082323236322', 'avatar.png', 5);

--
-- Triggers `petugas`
--
DELIMITER $$
CREATE TRIGGER `delete_petugas` AFTER DELETE ON `petugas` FOR EACH ROW DELETE FROM users WHERE
username = old.username
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_petugas` AFTER INSERT ON `petugas` FOR EACH ROW INSERT INTO
users
SET
email = new.email,
username = new.username,
password = new.password,
role = 2
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggapan` text NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `proses` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_petugas`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `update_at`, `proses`) VALUES
(17, 2, 52, '2020-03-23 07:35:00', 'ditanggapi', '2020-03-23 07:35:00', 1),
(18, 4, 53, '2020-03-28 04:33:56', 'Oke bos', '2020-03-28 04:33:56', 0);

--
-- Triggers `tanggapan`
--
DELIMITER $$
CREATE TRIGGER `acc_pengaduan` AFTER UPDATE ON `tanggapan` FOR EACH ROW UPDATE `pengaduan` SET `status` = 3 WHERE `pengaduan`.`id_pengaduan`=old.id_pengaduan
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `proses_pengaduan` AFTER INSERT ON `tanggapan` FOR EACH ROW UPDATE `pengaduan` SET `status` = 2 WHERE `pengaduan`.`id_pengaduan`=new.id_pengaduan
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('admin','petugas','masyarakat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `nama`, `username`, `password`, `role`) VALUES
(40, 'admin@sipmas.com', 'Alfiani Fitria K', 'admin1', '$2y$10$piCN51ABR8hWAzgUF5puaeO5cCyGvAqoAlIcBLOZHuEQkL9qMKhpm', 'admin'),
(60, 'masyarakat1@gmail.com', 'Masyarakat1', 'masyarakat1', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'masyarakat'),
(61, 'masyarakat2@gmail.com', 'Masyarakat2', 'masyarakat2', '$2y$10$ufG.0NseEll1ZQgICAnQBeMZpgwcWNearQJJ3ZoIXFV8uXV6CGmdi', 'masyarakat'),
(62, 'petugas1@gmail.com', 'Alfiani Fitria Kusnadi', 'petugas1', '$2y$10$piCN51ABR8hWAzgUF5puaeO5cCyGvAqoAlIcBLOZHuEQkL9qMKhpm', 'petugas'),
(63, 'petugas2@gmail.com', 'Alfan Fabian', 'petugas2', '$2y$10$piCN51ABR8hWAzgUF5puaeO5cCyGvAqoAlIcBLOZHuEQkL9qMKhpm', 'petugas'),
(64, 'petugas3@gmail.com', 'Wini Puspa Rahayu', 'petugas3', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'petugas'),
(65, 'petugas4@gmail.com', 'Anisa Rahma', 'petugas4', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'petugas'),
(66, 'petugas5@gmail.com', 'Listiani', 'petugas5', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `nik` varchar(200) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `telp` int(20) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'avatar.jpg',
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`nik`, `username`, `nama`, `password`, `telp`, `image`, `email`) VALUES
('1263748192716257', 'masyarakat1', 'Masyarakat1', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 2147483647, 'avatar.png', 'masyarakat1@gmail.com'),
('2736162738172635', 'masyarakat2', 'Masyarakat2', '$2y$10$ufG.0NseEll1ZQgICAnQBeMZpgwcWNearQJJ3ZoIXFV8uXV6CGmdi', 2147483647, 'avatar.png', 'masyarakat2@gmail.com');

--
-- Triggers `warga`
--
DELIMITER $$
CREATE TRIGGER `insert_warga` AFTER INSERT ON `warga` FOR EACH ROW INSERT INTO
users
SET
email = new.email,
nama = new.nama,
username = new.username,
password = new.password,
role = 3
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `nik` (`nik`,`email`),
  ADD UNIQUE KEY `nik_2` (`nik`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
