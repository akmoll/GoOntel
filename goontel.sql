-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 11:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goontel`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `faculty`, `created_at`, `updated_at`) VALUES
(1, 'Fisika', 1, NULL, NULL),
(2, 'Kimia', 1, NULL, NULL),
(3, 'Matematika', 1, NULL, NULL),
(5, 'Biologi', 1, NULL, NULL),
(6, 'Statistika', 1, NULL, NULL),
(7, 'Aktuaria', 1, NULL, NULL),
(8, 'Teknik Mesin', 2, NULL, NULL),
(9, 'Teknik Kimia', 2, NULL, NULL),
(10, 'Teknik Fisika', 2, NULL, NULL),
(11, 'Teknik Sistem dan Industri', 2, NULL, NULL),
(12, 'Teknik Material', 2, NULL, NULL),
(13, 'Teknik Sipil', 3, NULL, NULL),
(14, 'Teknik Lingkungan', 3, NULL, NULL),
(15, 'Arsitektur', 3, NULL, NULL),
(16, 'Perencanaan Wilayah dan Kota', 3, NULL, NULL),
(17, 'Teknik Geomatika', 3, NULL, NULL),
(18, 'Teknik Geofisika', 3, NULL, NULL),
(19, 'Teknik Infrastruktur Sipil', 4, NULL, NULL),
(20, 'Teknik Mesin Industri', 4, NULL, NULL),
(21, 'Teknik Elektro Otomasi', 4, NULL, NULL),
(22, 'Teknik Kimia Industri', 4, NULL, NULL),
(23, 'Teknik Instrumentasi', 4, NULL, NULL),
(24, 'Statistika Bisnis', 4, NULL, NULL),
(25, 'Teknik Perkapalan', 5, NULL, NULL),
(26, 'Teknik Sistem Perkapalan', 5, NULL, NULL),
(27, 'Teknik Kelautan', 5, NULL, NULL),
(28, 'Teknik Transportasi Laut', 5, NULL, NULL),
(29, 'Teknik Elektro', 6, NULL, NULL),
(30, 'Teknik Biomedik', 6, NULL, NULL),
(31, 'Teknik Komputer', 6, NULL, NULL),
(32, 'Teknik Informatika', 6, NULL, NULL),
(33, 'Sistem Informasi', 6, NULL, NULL),
(34, 'Teknologi Informasi', 6, NULL, NULL),
(35, 'Desain Produk Industri', 7, NULL, NULL),
(36, 'Desain Interior', 7, NULL, NULL),
(37, 'Desain Komunikasi Visual', 7, NULL, NULL),
(38, 'Manajemen Bisnis', 7, NULL, NULL),
(39, 'Studi Pembangunan', 7, NULL, NULL),
(40, 'Manajemen Teknologi', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'FSAD', NULL, NULL),
(2, 'FTIRS', NULL, NULL),
(3, 'FTSPK', NULL, NULL),
(4, 'FV', NULL, NULL),
(5, 'FTK', NULL, NULL),
(6, 'FTEIC', NULL, NULL),
(7, 'FDKBD', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formpinjams`
--

CREATE TABLE `formpinjams` (
  `id_form` int(10) UNSIGNED NOT NULL,
  `nama_peminjam` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrp` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fakultas` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departemen` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_rumah` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_sby` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formpinjams`
--

INSERT INTO `formpinjams` (`id_form`, `nama_peminjam`, `nrp`, `fakultas`, `departemen`, `alamat_rumah`, `alamat_sby`, `nohp`, `email`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `created_at`, `updated_at`) VALUES
(1, 'a', '09', '7', '36', 'a', 'a', '123', 'a@gmail.com', '2021-07-07', '2021-07-08', NULL, '2021-07-07 10:21:18', '2021-07-07 10:21:18'),
(2, 'a', '05', '6', '29', 'a', 'a', '123', 'a@mail.com', '2021-07-07', '2021-07-08', NULL, '2021-07-07 10:22:37', '2021-07-07 10:22:37'),
(3, 'adi', '052119012339', '7', '38', 'asdasd', 'asdas', '08123455212', 'adi@mail.com', '2021-07-07', '2021-07-14', NULL, '2021-07-07 15:06:21', '2021-07-07 15:06:21'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-07 17:33:59', '2021-07-07 17:33:59'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-07 17:41:52', '2021-07-07 17:41:52'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-07 18:03:59', '2021-07-07 18:03:59'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-08 09:10:01', '2021-07-08 09:10:01'),
(8, 'bela', '12', '1', '7', 'a', 'a', '12', 'adi@mail.com', '2021-07-09', '2021-07-09', NULL, '2021-07-08 09:11:07', '2021-07-08 09:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `listsepedas`
--

CREATE TABLE `listsepedas` (
  `kode_sepeda` int(10) UNSIGNED NOT NULL,
  `merk_sepeda` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_sepeda` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `jenis_sepeda` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kualitas_sepeda` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna_sepeda` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_sepeda` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2021_07_06_163301_create_departments_table', 2),
(5, '2021_07_06_163356_create_employees_table', 2),
(6, '2021_07_06_172849_create_fakultas_table', 3),
(7, '2021_07_06_173026_create_departemen_table', 3),
(8, '2021_05_30_105657_create_petugas_table', 4),
(9, '2021_06_27_144753_create_listsepedas_table', 4),
(10, '2021_06_27_144847_create_formpinjams_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(10) UNSIGNED NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`, `remember_token`, `id`) VALUES
('Admin Admin', 'admin@argon.com', '2021-07-06 09:17:19', '$2y$10$2YzrV9aATWOz75M.mWYiY.Cw5J2kxKBeFzzMJHMxQEZjrnej7SAi6', '2021-07-06 09:17:20', '2021-07-06 09:17:20', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formpinjams`
--
ALTER TABLE `formpinjams`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `listsepedas`
--
ALTER TABLE `listsepedas`
  ADD PRIMARY KEY (`kode_sepeda`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `formpinjams`
--
ALTER TABLE `formpinjams`
  MODIFY `id_form` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `listsepedas`
--
ALTER TABLE `listsepedas`
  MODIFY `kode_sepeda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
