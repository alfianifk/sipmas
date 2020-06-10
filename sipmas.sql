-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 27 Apr 2020 pada 02.54
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'avatar.png',
  `telp` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `username`, `password`, `image`, `telp`) VALUES
(7, 'Alfiani Fitria K', 'admin1@gmail.com', 'admin1', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'avatar.png', '8522377'),
(12, 'Anisa', 'admin2@gmail.com', 'admin2', '$2y$10$wSkb7ibrcYQO0yLgUm0pw.ecquGVzN8yLnz.1LLX9VPEb/4qGw2f6', 'avatar.png', '085231787052');

--
-- Trigger `admin`
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
nama = new.nama_admin,
username = new.username,
password = new.password,
role = 1
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `id_petugas`) VALUES
(1, 'Keamanan', 1),
(2, 'Infrastruktur', 2),
(3, 'Pendidikan', 3),
(4, 'Kesehatan', 4),
(5, 'Kesejahteraan', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` int(11) NOT NULL DEFAULT current_timestamp(),
  `nik` varchar(200) NOT NULL,
  `id_kategori` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `judul_pengaduan` varchar(200) NOT NULL,
  `isi_pengaduan` longtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('pending','proses','selesai') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `id_kategori`, `nama`, `judul_pengaduan`, `isi_pengaduan`, `foto`, `status`) VALUES
(66, 1587112278, '2343234512324345', 5, 'Alfan Fabian', 'Hilang kucing', 'Pak aku kehilangan kucing anggora yang berwarna biru', '5e99695652c86.png', 'selesai'),
(67, 1587113250, '1263748192717257', 5, 'Muhammad Ilham Firmansyah', 'Saya mau WIFI gratis', 'Halo pak, kapan ada wifi gratis ditiap penjuru tongkrongan', '5e996d227e6c9.png', 'selesai'),
(68, 1587189292, '1263748192717257', 1, 'Muhammad Ilham Firmansyah', 'Terjadi pencurian', 'Terjadi pencurian ayam pak&nbsp;', '5e9a962c49edc.png', 'selesai'),
(69, 1587196071, '1263748192717257', 3, 'Muhammad Ilham Firmansyah', 'Pendidikan Mobile Legends', 'Pak saya mau adain sekola mobile legends dongss , bapa baik dech', '5e9ab0a751fb5.jpg', 'selesai'),
(70, 1587210405, '1263748192716257', 4, 'Alfan Fabian', 'Corona', 'Halo pak, disini ada orang yang dari zona merah', '5e9ae8a569aec.png', 'selesai'),
(71, 1587228333, '1263748192717257', 4, 'Muhammad Ilham Firmansyah', 'Corona', '<i>Assalamu\'alaikum</i> pak, didaerah saya yang berada di <b>Jl. Raya Cikalong Desa Singkir RT/RW 001/003</b> ada seorang perantar dari zona merah. Saya harap bapa segera menindak lanjuti, atau memberi anjuran untuk tetap berada dirumah selama 14 hari. Terimakasih <i>Wassalamu\'alaikum</i>.', '5e9b2ead8fd9b.JPG', 'selesai'),
(72, 1587229751, '1263748192717257', 5, 'Muhammad Ilham Firmansyah', 'Wifi Gratis', '<i>Assalamu\'alaikum</i> <b>bapak petugas kesejahteraan</b> yang terhormat. Saya sebagai warga kecamatan Cikalong ingin sekali mendapatkan kesejahteraan berpa akses wifi gratis diseluruh penjuru tongkrongan:) . Saya harap bapa dapat merespon dengan baik. Alamat lengkap saya di <font color=\"#104a5a\" style=\"background-color: rgb(239, 239, 239);\">Desa Singkir RT/RW 001/003</font>. Terimakasih sebelumnya pak, sehat selalu. <i>Wassalamu\'alaikum.</i>', '5e9b343769b2e.jpg', 'selesai'),
(73, 1587230546, '1263748192717257', 2, 'Muhammad Ilham Firmansyah', 'Jalan Rusak', '<i><b>Assalamu\'alaikum</b></i> bapak petugas infrastruktur yang terhormat, saya seorang pelajar yang peduli sekitar. Daerah saya berada di <b style=\"background-color: rgb(239, 239, 239);\">Desa Singkir Kp. Ciheulang RT/RW 001/003</b> memiliki keluhan terkait jalanan yang sudah rusak. Bapa bisa lihat kalau berkujung ke desa kami dekat warung ibu Imin. Sekian keluhan dari saya pak semoga bapa segera menanggapinya. <b><i>Wassalamu\'alaikum</i></b>.', '5e9b3752e835b.jpg', 'selesai');

--
-- Trigger `pengaduan`
--
DELIMITER $$
CREATE TRIGGER `delete_pengaduan` AFTER DELETE ON `pengaduan` FOR EACH ROW DELETE FROM tanggapan WHERE
id_pengaduan = old.id_pengaduan
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
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
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `status_petugas`, `nama_petugas`, `email`, `username`, `password`, `telp`, `image`, `id_kategori`) VALUES
(1, 'Petugas Keamanan', 'Nikita Mirzani', 'petugas1@gmail.com', 'petugas1', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', '08522377710', 'avatar.png', 1),
(2, 'Petugas Infrastruktur', 'Tia WZ', 'petugas2@gmail.com', 'petugas2', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', '08522377710', 'avatar.png', 2),
(3, 'Petugas Pendidikan', 'Citra Kirana', 'petugas3@gmail.com', 'petugas3', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', '082321543292', 'avatar.png', 3),
(4, 'Petugas Kesehatan', 'Zia Putri Rahmawati', 'petugas4@gmail.com', 'petugas4', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', '085231787052', 'avatar.png', 4),
(5, 'Petugas Kesejahteraan', 'Geri Abdul Malik', 'petugas5@gmail.com', 'petugas5', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', '082323236322', 'avatar.png', 5);

--
-- Trigger `petugas`
--
DELIMITER $$
CREATE TRIGGER `insert_petugas` BEFORE INSERT ON `petugas` FOR EACH ROW INSERT INTO
users
SET
email = new.email,
nama = new.nama_petugas,
username = new.username,
password = new.password,
role = 2
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` timestamp NULL DEFAULT current_timestamp(),
  `tanggapan` longtext NOT NULL,
  `update_at` varchar(200) DEFAULT NULL,
  `proses` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_petugas`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `update_at`, `proses`) VALUES
(40, 5, 66, '2020-04-17 08:41:56', 'Mana saia tau saia lagi dikarantika', '2020-04-17 15:41:56', 1),
(42, 5, 67, '2020-04-17 13:53:30', 'Euuuuuu kapan yaaachhh? W juga pengen', '1587199668', 1),
(43, 1, 68, '2020-04-18 05:55:30', 'Gue sih owh aja... OOOOOOOOOOOOOOOOOo', '2020-04-18 12:55:30', 1),
(44, 3, 69, '2020-04-18 07:48:21', 'Oke entar kita buat sama sama yach', '1587204325', 1),
(53, 4, 70, '2020-04-18 12:26:37', 'Yang itu', '1587213343', 1),
(54, 5, 72, '2020-04-18 17:11:09', 'Wa\'alaikumsalam, baik pak. Tolong tunggu saja 2 minggu lagi.', '1587230705', 1),
(55, 2, 73, '2020-04-18 17:23:59', 'Wa\'alaikumsalam, terimakasih atas pengaduan anda. Kami akan segera bertindak. Tunggu sekitar 2 minggu kedepan.', '1587231056', 1),
(56, 4, 71, '2020-04-18 17:28:19', 'Waalaikumsalam. In sya alloh nanti saya datangi beliau untuk memerintahkan supaya isolasi mandiri dirumah selama waktu yang ditentukan.', '1587230911', 1);

--
-- Trigger `tanggapan`
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
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `nama`, `username`, `password`, `role`) VALUES
(70, 'admin1@gmail.com', 'Alfiani Fitria K', 'admin1', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'admin'),
(71, 'petugas1@gmail.com', 'Nikita Mirzani', 'petugas1', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'petugas'),
(72, 'petugas2@gmail.com', 'Tia WZ', 'petugas2', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'petugas'),
(73, 'petugas3@gmail.com', 'Citra Kirana', 'petugas3', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'petugas'),
(74, 'petugas4@gmail.com', 'Zia Putri Rahmawati', 'petugas4', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'petugas'),
(75, 'petugas5@gmail.com', 'Geri Abdul Malik', 'petugas5', '$2y$10$U2JxqOBTxsHpYiJ1cr9luubAOEeYfz7F8Cq4aYqHtNrr3jE12bSVK', 'petugas'),
(76, 'milhamf@gmail.com', 'Muhammad Ilham Firmansyah', 'milhamf', '$2y$10$PdL2FGsBiTMGrNuiT520cOQM5HaVfaaEBu8MKImIRCdSxL8DaGOLC', 'masyarakat'),
(77, 'masyarakat2@gmail.com', 'Alfan Fabian', 'masyarakat2', '$2y$10$zlbduECeWgjyKT0OsGrwMemKRlvtrOfu5mfhX1M8rWB4S8otJt2FO', 'masyarakat'),
(78, 'alfan.f@gmail.com', 'Alfan Fabian', 'alfan.f', '$2y$10$rCx7zBuzR5fYUQKpJEY41u9Dsbn19xPD82XvOFqNKuvsx3A7SE1U6', 'masyarakat'),
(83, 'admin2@gmail.com', 'Anisa', 'admin2', '$2y$10$wSkb7ibrcYQO0yLgUm0pw.ecquGVzN8yLnz.1LLX9VPEb/4qGw2f6', 'admin'),
(84, 'gagas.exclusive@gmail.com', 'Gagas Sangga Pratama', 'gagas.exclusive', '$2y$10$64ZueDIepO18IKHfVcNtY.7AM9790KLSQj6A.yTVHG5feqnnENEkC', 'masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
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
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`nik`, `username`, `nama`, `password`, `telp`, `image`, `email`) VALUES
('1263748192716257', 'alfan.f', 'Alfan Fabian', '$2y$10$rCx7zBuzR5fYUQKpJEY41u9Dsbn19xPD82XvOFqNKuvsx3A7SE1U6', 2147483647, 'avatar.png', 'alfan.f@gmail.com'),
('1263748192717234', 'gagas.exclusive', 'Gagas Sangga Pratama', '$2y$10$64ZueDIepO18IKHfVcNtY.7AM9790KLSQj6A.yTVHG5feqnnENEkC', 2147483647, 'avatar.png', 'gagas.exclusive@gmail.com'),
('1263748192717257', 'milhamf', 'Muhammad Ilham Firmansyah', '$2y$10$PdL2FGsBiTMGrNuiT520cOQM5HaVfaaEBu8MKImIRCdSxL8DaGOLC', 2147483647, 'avatar.png', 'milhamf@gmail.com'),
('2343234512324345', 'masyarakat2', 'Alfan Fabian', '$2y$10$zlbduECeWgjyKT0OsGrwMemKRlvtrOfu5mfhX1M8rWB4S8otJt2FO', 2147483647, 'avatar.png', 'masyarakat2@gmail.com');

--
-- Trigger `warga`
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
DELIMITER $$
CREATE TRIGGER `update_warga` AFTER UPDATE ON `warga` FOR EACH ROW UPDATE users
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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD UNIQUE KEY `id_pengaduan` (`id_pengaduan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `nik` (`nik`,`email`),
  ADD UNIQUE KEY `nik_2` (`nik`,`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
