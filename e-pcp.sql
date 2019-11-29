-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 12:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-pcp`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identifikasi`
--

CREATE TABLE `identifikasi` (
  `id_identifikasi` int(11) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `tips` varchar(255) NOT NULL,
  `kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identifikasi`
--

INSERT INTO `identifikasi` (`id_identifikasi`, `penyakit`, `tips`, `kategori`) VALUES
(1, 'Penyakit Gulma adalah Hama ini berupa ulat yang menyerang pucuk tanaman sehingga mematikan titik tumbuh', 'Usaha pemberantasannya menggunakan insektisida carbofulan yang dapat diberikan dengan suntikan atau taburan', 1),
(2, 'Penggerek batang yaitu : Hama berupa ulat ini merusak ruas-ruas batang tebu sehingga pada serangan yang parah dapat merobohkan tanaman.', 'Usaha pengendaliannya dapat dilakukan secara hayati dengan menggunakan parasit karawai Trichograma spp., dan parasit lalat Diatraeophaga striatalis', 2),
(3, 'Penyakit pembuluh: Penyebab adalah bakteri Clavibacter xylisubsp xvli. Tanaman yang terserang menampakkan gejala pertumbuhan yang kurang sempurna terutama tanaman keprasan tampak kerdil', 'Cara pencegahan penyakit ini antara lain dengan melakukan desinfeksi alat pemotong tebu dengan lisol 20%, penanaman dengan menggunakan bibit sehat yang diperoleh dengan perawatan air panas terhadap bibit tebu pada suhu 50°C selama 2-3 jam', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'kadar_brick'),
(2, 'bobot'),
(3, 'tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `id_lahan` int(11) NOT NULL,
  `lahan` enum('lahan 1','lahan 2','lahan 3','lahan 4','lahan 5','lahan 6') NOT NULL,
  `stok` int(11) NOT NULL,
  `luas_lahan` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lahan`
--

INSERT INTO `lahan` (`id_lahan`, `lahan`, `stok`, `luas_lahan`, `alamat`) VALUES
(1, 'lahan 1', 1000, 100, 'Tegal Besar Blok J Jember'),
(2, 'lahan 2', 800, 100, 'RambiPuji Desa Kuningan Jember'),
(3, 'lahan 3', 3000, 200, 'Tegal Gede desa Sriwijaya Jemmber'),
(4, 'lahan 4', 1500, 150, 'Sumberejo Ambulu Jember'),
(5, 'lahan 5', 1750, 175, 'Sabrang Balung Jember'),
(6, 'lahan 6', 1800, 180, 'Garahan Jember');

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
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_10_28_221602_create_role', 1),
(37, '2019_11_04_091210_roles', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pabrik`
--

CREATE TABLE `pabrik` (
  `id_pabrik` int(10) NOT NULL,
  `nama_pabrik` varchar(255) NOT NULL,
  `lokasi_pabrik` varchar(255) NOT NULL,
  `kapasitas_gudang` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pabrik`
--

INSERT INTO `pabrik` (`id_pabrik`, `nama_pabrik`, `lokasi_pabrik`, `kapasitas_gudang`) VALUES
(3, 'Sriwijaya', 'Banyuwangi', 100),
(6, 'Jaya', 'Bandung', 1000),
(7, 'Majapahit', 'San Andreas 21', 300);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(10) NOT NULL,
  `bobot_stok` int(16) NOT NULL,
  `kadar_brix` int(16) NOT NULL,
  `sukrosa` int(10) DEFAULT NULL,
  `glukosa` int(10) DEFAULT NULL,
  `kualitas` int(10) NOT NULL,
  `dikirim` date DEFAULT NULL,
  `perkiraan_tiba` date DEFAULT NULL,
  `umur` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id_permintaan`, `bobot_stok`, `kadar_brix`, `sukrosa`, `glukosa`, `kualitas`, `dikirim`, `perkiraan_tiba`, `umur`) VALUES
(28, 11, 11, 11, 11, 32, '2019-10-28', '2019-10-26', 11),
(30, 1750, 20, 50, 32, 76, '2019-10-03', '2019-10-09', 12);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '2019-11-04 09:36:25', '2019-11-04 09:36:25'),
(4, 'Pabrik', '2019-11-04 09:36:25', '2019-11-04 09:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `tebu`
--

CREATE TABLE `tebu` (
  `id_tebu` int(11) NOT NULL,
  `kadar_brick` float NOT NULL,
  `tinggi` float NOT NULL,
  `bobot_tebu` float NOT NULL,
  `umur` float NOT NULL,
  `kualitas` float NOT NULL,
  `id_lahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tebu`
--

INSERT INTO `tebu` (`id_tebu`, `kadar_brick`, `tinggi`, `bobot_tebu`, `umur`, `kualitas`, `id_lahan`) VALUES
(54, 19, 5, 12, 13, 88.333, 1),
(56, 12, 3, 12, 11, 32, 2),
(58, 18, 4, 8, 11, 35, 4),
(60, 18, 5, 9, 13, 65, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Feroza', 'uchihaferoza22@gmail.com', NULL, '$2y$10$mi3Rk25QA7dx7p6r8VQDCudLnzNsbaW7RvURL3alQy4cyBWXLGTJG', 2, NULL, '2019-11-10 19:46:40', '2019-11-10 19:46:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identifikasi`
--
ALTER TABLE `identifikasi`
  ADD PRIMARY KEY (`id_identifikasi`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id_lahan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pabrik`
--
ALTER TABLE `pabrik`
  ADD PRIMARY KEY (`id_pabrik`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tebu`
--
ALTER TABLE `tebu`
  ADD PRIMARY KEY (`id_tebu`),
  ADD KEY `id_lahan` (`id_lahan`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identifikasi`
--
ALTER TABLE `identifikasi`
  MODIFY `id_identifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pabrik`
--
ALTER TABLE `pabrik`
  MODIFY `id_pabrik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id_permintaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tebu`
--
ALTER TABLE `tebu`
  MODIFY `id_tebu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `identifikasi`
--
ALTER TABLE `identifikasi`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `tebu`
--
ALTER TABLE `tebu`
  ADD CONSTRAINT `tebu_ibfk_1` FOREIGN KEY (`id_lahan`) REFERENCES `lahan` (`id_lahan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
