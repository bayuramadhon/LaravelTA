-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 04:14 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eprocurement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `akte_peru`
--

CREATE TABLE `akte_peru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Akte_Pendirian_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Akte` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Pengesahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apt_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tgl_Apt` date NOT NULL,
  `File_Apt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tgl_Direksi` date NOT NULL,
  `File_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Spm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Sp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_perusahaan`
--

CREATE TABLE `data_perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisVendor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisbrg_pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaperusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almtperusahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PIC` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_perusahaan`
--

INSERT INTO `data_perusahaan` (`id`, `divisi`, `jenisVendor`, `jenisbrg_pekerjaan`, `namaperusahaan`, `almtperusahan`, `telp`, `email`, `PIC`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a', 'z', 'd', 'e', 'w', 2424, 'w', 's', NULL, '2020-08-05 19:54:37', '2020-08-05 19:54:37'),
(2, 'q', 'w', 'e', 'r', 'a', 12321, 'x', 'as', NULL, '2020-08-09 07:16:47', '2020-08-09 07:16:47'),
(3, 'q', 'w', 's', 's', 'q', 1213, 'qws', 'w', NULL, '2020-08-09 07:38:34', '2020-08-09 07:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `keu_pjk`
--

CREATE TABLE `keu_pjk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NPWP_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_NPWP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sppkp_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Sppkp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Spt_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Spt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Spp_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Spp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ekuitas` int(11) NOT NULL,
  `Kwalifikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Kap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Kd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_11_102903_create_admins_table', 1),
(4, '2020_07_24_043028_data_perusahaan', 1),
(5, '2020_07_24_044452_persyaratanumum', 1),
(6, '2020_07_24_075912_keu_pjk', 1),
(7, '2020_07_24_082146_akte__peru', 1),
(8, '2020_07_24_083018_qshe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persyaratanumum`
--

CREATE TABLE `persyaratanumum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Skd_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tgl_Dom_Mul` date NOT NULL,
  `Tgl_Dom_Sel` date NOT NULL,
  `File_SDOM` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Spmr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tdp_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tgl_Tdp_Mul` date NOT NULL,
  `Tgl_Tdp_Sel` date NOT NULL,
  `File_Tdp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Spkd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_perushndirikan` int(11) NOT NULL,
  `lamaprshn_krjsamapp` int(11) NOT NULL,
  `File_srtifktkalibrasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qshe`
--

CREATE TABLE `qshe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `File_Iso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Penanggung_Jwb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_OrgCV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Teknis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ari', 'ari@mail.com', NULL, '$2y$10$C8aW4vPLRR1lRn/nBIXjg.XFwsq4GN9T4SEis/eidAVkjOgT3FMSW', NULL, '2020-07-28 01:58:19', '2020-07-28 01:58:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `akte_peru`
--
ALTER TABLE `akte_peru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keu_pjk`
--
ALTER TABLE `keu_pjk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `persyaratanumum`
--
ALTER TABLE `persyaratanumum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qshe`
--
ALTER TABLE `qshe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `akte_peru`
--
ALTER TABLE `akte_peru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `keu_pjk`
--
ALTER TABLE `keu_pjk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `persyaratanumum`
--
ALTER TABLE `persyaratanumum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qshe`
--
ALTER TABLE `qshe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
