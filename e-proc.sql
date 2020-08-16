-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 08:04 AM
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
-- Database: `e-proc`
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

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator@mail.com', NULL, '$2y$10$pOHd1ynmV.sUjIJCmarv2egSf6D6gWf7Ie.E0O9nVFWxM4/Jenmbu', NULL, '2020-08-10 20:38:39', '2020-08-10 20:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `akte_peru`
--

CREATE TABLE `akte_peru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `Akte_Pendirian_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Akte` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Pengesahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apt_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tgl_Apt` date NOT NULL,
  `File_Apt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tgl_Direksi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Skm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Sp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akte_peru`
--

INSERT INTO `akte_peru` (`id`, `id_perusahaan`, `Akte_Pendirian_No`, `Bank`, `Rek`, `File_Akte`, `File_Pengesahan`, `Apt_No`, `Tgl_Apt`, `File_Apt`, `Tgl_Direksi`, `File_ktp`, `File_Skm`, `File_Sp`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 31, '1212', 'bni', '121213', 'akte_1212_Kartu Uas.pdf', 'Pngshan_1212_Kartu Uas.pdf', '323', '2000-11-12', 'apt_1212_Kartu Uas.pdf', '12', 'ktp_1212_Kartu Uas.pdf', 'skm_1212_Kartu Uas.pdf', 'sp_1212_Kartu Uas.pdf', NULL, '2020-08-15 00:36:09', '2020-08-15 00:36:09'),
(6, 31, '1212', 'bni', '121213', 'akte_1212_Kartu Uas.pdf', 'Pngshan_1212_Kartu Uas.pdf', '323', '2000-11-12', 'apt_1212_Kartu Uas.pdf', '12', 'ktp_1212_Kartu Uas.pdf', 'skm_1212_Kartu Uas.pdf', 'sp_1212_Kartu Uas.pdf', NULL, '2020-08-15 00:36:25', '2020-08-15 00:36:25'),
(7, 32, '12', 'bni', '121212', 'akte_12_Kartu Uas.pdf', 'Pngshan_12_Kartu Uas.pdf', '2121', '2000-01-12', 'apt_12_Kartu Uas.pdf', '12', 'ktp_12_Kartu Uas.pdf', 'skm_12_Kartu Uas.pdf', 'sp_12_Kartu Uas.pdf', NULL, '2020-08-15 03:26:02', '2020-08-15 03:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `data_perusahaan`
--

CREATE TABLE `data_perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisVendor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisbrg_pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaperusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almtperusahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PIC` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_perusahaan`
--

INSERT INTO `data_perusahaan` (`id`, `user_id`, `divisi`, `jenisVendor`, `jenisbrg_pekerjaan`, `namaperusahaan`, `almtperusahan`, `telp`, `email`, `PIC`, `remember_token`, `created_at`, `updated_at`) VALUES
(32, 1, 'q', 'q', 'q', 'q', 'q', '1213', 'q', 'q', NULL, '2020-08-15 03:23:36', '2020-08-15 03:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `keu_pjk`
--

CREATE TABLE `keu_pjk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `NPWP_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_NPWP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sppkp_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Sppkp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Spt_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Spt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Spp_No` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Spp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekening` int(25) NOT NULL,
  `File_bank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ekuitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kwalifikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Kd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keu_pjk`
--

INSERT INTO `keu_pjk` (`id`, `id_perusahaan`, `NPWP_No`, `File_NPWP`, `Sppkp_No`, `File_Sppkp`, `Spt_No`, `File_Spt`, `Spp_No`, `File_Spp`, `bank`, `rekening`, `File_bank`, `Ekuitas`, `Kwalifikasi`, `File_Kd`, `remember_token`, `created_at`, `updated_at`) VALUES
(15, 31, '2121', 'npwp_2121_Kartu Uas.pdf', '1213', 'sppkp_2121_Kartu Uas.pdf', '121', 'spt_2121_Kartu Uas.pdf', '2323', 'spp_2121_Kartu Uas.pdf', 'bni', 121213, 'bank_2121_Kartu Uas.pdf', '233311', '< 1M', 'kd_2121_Kartu Uas.pdf', NULL, '2020-08-15 00:33:31', '2020-08-15 00:33:31'),
(16, 32, '2121313', 'npwp_2121313_Kartu Uas.pdf', '232323', 'sppkp_2121313_Kartu Uas.pdf', '21212', 'spt_2121313_Kartu Uas.pdf', '12121', 'spp_2121313_Kartu Uas.pdf', 'bni', 2131121, 'bank_2121313_Kartu Uas.pdf', '2000323', '< 1M', 'kd_2121313_Kartu Uas.pdf', NULL, '2020-08-15 03:25:24', '2020-08-15 03:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id_perusahaan` int(11) NOT NULL,
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

--
-- Dumping data for table `persyaratanumum`
--

INSERT INTO `persyaratanumum` (`id`, `id_perusahaan`, `Skd_No`, `Tgl_Dom_Mul`, `Tgl_Dom_Sel`, `File_SDOM`, `File_Spmr`, `Tdp_no`, `Tgl_Tdp_Mul`, `Tgl_Tdp_Sel`, `File_Tdp`, `File_Spkd`, `lama_perushndirikan`, `lamaprshn_krjsamapp`, `File_srtifktkalibrasi`, `remember_token`, `created_at`, `updated_at`) VALUES
(28, 32, '2121', '2020-08-15', '2020-08-15', 'sdom_2121_Kartu Uas.pdf', 'spmr_2121_Kartu Uas.pdf', '21212', '2020-08-15', '2020-08-15', 'tdp_2121_Kartu Uas.pdf', 'skpd_2121_Kartu Uas.pdf', 12, 3, 'sfk_2121_Kartu Uas.pdf', NULL, '2020-08-15 03:24:21', '2020-08-15 03:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `qshe`
--

CREATE TABLE `qshe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `File_Iso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Penanggung_Jwb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_OrgCV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File_Teknis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qshe`
--

INSERT INTO `qshe` (`id`, `id_perusahaan`, `File_Iso`, `Penanggung_Jwb`, `File_OrgCV`, `File_Teknis`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 32, 'iso_C:\\xampp\\tmp\\phpEA17.tmp_Kartu Uas.pdf', 'def', 'org_C:\\xampp\\tmp\\phpEA17.tmp_Kartu Uas.pdf', 'teknis_C:\\xampp\\tmp\\phpEA17.tmp_Kartu Uas.pdf', NULL, '2020-08-15 03:26:18', '2020-08-15 03:26:18');

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
(1, 'ari', 'ari@mail.com', NULL, '$2y$10$C8aW4vPLRR1lRn/nBIXjg.XFwsq4GN9T4SEis/eidAVkjOgT3FMSW', 'wAPaktCt1XZFpc3uW2z2bFWDOIutb0p5tseQSNdgTXgLDzygg0Wa56StZMPy', '2020-07-28 01:58:19', '2020-07-28 01:58:19');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `akte_peru`
--
ALTER TABLE `akte_peru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `keu_pjk`
--
ALTER TABLE `keu_pjk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persyaratanumum`
--
ALTER TABLE `persyaratanumum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `qshe`
--
ALTER TABLE `qshe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
