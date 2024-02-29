-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 04:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`) VALUES
(16, 26, 1, 'Keren Banget', '0000-00-00 00:00:00'),
(17, 26, 6, 'GOKIL!!!', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id_like` int(11) NOT NULL,
  `post` int(10) NOT NULL,
  `createdBy` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id_like`, `post`, `createdBy`, `created_at`) VALUES
(9, 27, 6, '2024-02-28 23:29:31'),
(15, 27, 1, '2024-02-29 08:04:44'),
(16, 26, 1, '2024-02-29 08:04:46'),
(19, 26, 6, '2024-02-29 09:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id_photos` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `like_status` int(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `createdBy` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id_photos`, `user_id`, `description`, `image`, `category`, `like_status`, `created_at`, `createdBy`) VALUES
(26, 6, '\"Berhenti sejenak dan nikmati keindahan alam. 🏞️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709092816_20147cf8807bed3ecd1f.png', 'Shortfilms', 0, '2024-02-28 11:00:16', 0),
(27, 6, '\"Menangkap momen kecil yang penuh keindahan. 📸✨ Merayakan keunikan diri dan merasakan setiap detik. #SelfieSunday #MeTime #SenyumSeindahHidup\"', '1709093963_2a1e62dc4d0087366803.jpg', 'Professional', 0, '2024-02-28 11:19:23', 0),
(32, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709173717_13ae3144f65bcbb111c3.jpg', 'Shortfilms', 0, '2024-02-29 09:28:37', 0),
(33, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709173963_a08d2a024a11ea33af38.jpg', 'Commercial', 0, '2024-02-29 09:32:43', 0),
(34, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709173992_ce0985bd9d4f078022d2.webp', 'Commercial', 0, '2024-02-29 09:33:12', 0),
(35, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174044_8e6bc18e5b30810e8752.jpg', 'Commercial', 0, '2024-02-29 09:34:04', 0),
(36, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174058_0f3c55af53d7b65ea363.jpg', 'Commercial', 0, '2024-02-29 09:34:18', 0),
(37, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174086_71c0bfba84426b19b97e.jpg', 'Commercial', 0, '2024-02-29 09:34:46', 0),
(38, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174111_6f55b53aebf4bbd63595.jpg', 'Commercial', 0, '2024-02-29 09:35:11', 0),
(40, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174172_6eff519a0578fbf3b2d7.jpg', 'Commercial', 0, '2024-02-29 09:36:12', 0),
(41, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174183_40e6830be092ccdc49a5.jpg', 'Commercial', 0, '2024-02-29 09:36:23', 0),
(42, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174197_3a4474ca524a5344d7df.jpg', 'Commercial', 0, '2024-02-29 09:36:37', 0),
(43, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174215_13dedd612922a19c9701.png', 'Commercial', 0, '2024-02-29 09:36:55', 0),
(44, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174422_bec3215ba6994924e567.jpg', 'Professional', 0, '2024-02-29 09:40:22', 0),
(45, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174435_4b274380a30b4b29172c.webp', 'Professional', 0, '2024-02-29 09:40:35', 0),
(46, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174444_31984888ea43ee3adfcd.jpg', 'Professional', 0, '2024-02-29 09:40:44', 0),
(47, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174455_032b85e633e6e002248b.jpg', 'Professional', 0, '2024-02-29 09:40:55', 0),
(48, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174465_c4e43f08197db30fd77c.jpg', 'Professional', 0, '2024-02-29 09:41:05', 0),
(49, 6, '\"Berhenti sejenak dan nikmati keindahan alam. ????️✨ Terpesona dengan panorama yang memukau, memberikan kedamaian dan keindahan tak tergantikan. #PemandanganIndah #AlamDunia #MomentSpesial\"', '1709174494_aa878b1f22fc5db87a0f.webp', 'Professional', 0, '2024-02-29 09:41:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level`, `created_at`) VALUES
(1, 'Admin', 'johndoe@example.com', 'c4ca4238a0b923820dcc509a6f75849b', '1', '2023-07-20 00:00:00'),
(6, 'asd', 'Yandagaming123@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1', '2024-01-23 14:52:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id_like`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id_photos`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id_photos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
