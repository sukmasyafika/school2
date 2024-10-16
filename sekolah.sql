-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2024 pada 09.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Situs Admin'),
(2, 'user', 'Guru User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'ariel12@gmail.com', 3, '2024-10-11 01:02:35', 1),
(2, '::1', 'ariel12@gmail.com', 3, '2024-10-11 01:22:09', 1),
(3, '::1', 'ariel12@gmail.com', 3, '2024-10-11 01:33:18', 1),
(4, '::1', 'ariel12@gmail.com', 3, '2024-10-11 01:35:40', 1),
(5, '::1', 'ariel12@gmail.com', 3, '2024-10-11 02:17:45', 1),
(6, '::1', 'ariel12@gmail.com', 3, '2024-10-11 02:38:54', 1),
(7, '::1', 'ariel12@gmail.com', 3, '2024-10-11 02:53:46', 1),
(8, '::1', 'ariel12@gmail.com', 3, '2024-10-11 23:35:29', 1),
(9, '::1', 'ariel12@gmail.com', 3, '2024-10-12 02:45:09', 1),
(10, '::1', 'ariel12@gmail.com', 3, '2024-10-12 02:54:48', 1),
(11, '::1', 'ariel12@gmail.com', 3, '2024-10-12 03:08:34', 1),
(12, '::1', 'ariel12@gmail.com', NULL, '2024-10-12 05:02:28', 0),
(13, '::1', 'ariel12@gmail.com', 3, '2024-10-12 05:02:41', 1),
(14, '::1', 'ariel12@gmail.com', 3, '2024-10-12 05:07:19', 1),
(15, '::1', 'ariel12@gmail.com', 3, '2024-10-12 05:08:01', 1),
(16, '::1', 'ariel12@gmail.com', 3, '2024-10-12 06:30:23', 1),
(17, '::1', 'ariel12@gmail.com', NULL, '2024-10-12 06:32:15', 0),
(18, '::1', 'ariel12@gmail.com', 3, '2024-10-12 06:32:59', 1),
(19, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 07:19:42', 1),
(20, '::1', 'ariel12@gmail.com', NULL, '2024-10-12 07:42:52', 0),
(21, '::1', 'ariel12@gmail.com', 3, '2024-10-12 07:43:10', 1),
(22, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 10:31:59', 1),
(23, '::1', 'ariel12@gmail.com', 3, '2024-10-12 10:53:32', 1),
(24, '::1', 'ariel12@gmail.com', 3, '2024-10-12 11:05:35', 1),
(25, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 11:13:39', 1),
(26, '::1', 'ariel12@gmail.com', 3, '2024-10-12 11:27:57', 1),
(27, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 11:33:08', 1),
(28, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 11:40:32', 1),
(29, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 11:55:07', 1),
(30, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 11:55:46', 1),
(31, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 11:56:39', 1),
(32, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 11:57:06', 1),
(33, '::1', 'ariel12@gmail.com', 3, '2024-10-12 11:57:44', 1),
(34, '::1', 'ariel12@gmail.com', 3, '2024-10-12 12:00:03', 1),
(35, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 12:00:22', 1),
(36, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 12:59:47', 1),
(37, '::1', 'ariel12@gmail.com', 3, '2024-10-12 13:00:12', 1),
(38, '::1', 'ariel12@gmail.com', 3, '2024-10-12 13:00:58', 1),
(39, '::1', 'ariel12@gmail.com', 3, '2024-10-12 13:21:26', 1),
(40, '::1', 'ariel12@gmail.com', 3, '2024-10-12 13:29:18', 1),
(41, '::1', 'ariel12@gmail.com', 3, '2024-10-12 13:30:03', 1),
(42, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 13:30:49', 1),
(43, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 13:32:06', 1),
(44, '::1', 'ariel12@gmail.com', 3, '2024-10-12 13:36:44', 1),
(45, '::1', 'adminsmk2@gmail.com', 5, '2024-10-12 13:36:57', 1),
(46, '::1', 'adminsmk2@gmail.com', NULL, '2024-10-12 13:50:28', 0),
(47, '::1', 'adminsmk2@gmail.com', 7, '2024-10-12 13:51:22', 1),
(48, '::1', 'adminsmk2@gmail.com', 7, '2024-10-12 13:53:19', 1),
(49, '::1', 'adminsmk2@gmail.com', 7, '2024-10-12 13:55:14', 1),
(50, '::1', 'ariel12@gmail.com', 3, '2024-10-12 14:00:40', 1),
(51, '::1', 'adminsmk2@gmail.com', NULL, '2024-10-12 14:21:09', 0),
(52, '::1', 'adminsmk2@gmail.com', 7, '2024-10-12 14:21:18', 1),
(53, '::1', 'adminsmk2@gmail.com', 7, '2024-10-12 14:22:21', 1),
(54, '::1', 'adminsmk2@gmail.com', 7, '2024-10-12 14:24:02', 1),
(55, '::1', 'adminsmk2@gmail.com', 7, '2024-10-12 14:27:19', 1),
(56, '::1', 'adminsmk2@gmail.com', 1, '2024-10-12 14:37:23', 1),
(57, '::1', 'ariel12@gmail.com', 2, '2024-10-12 14:37:44', 1),
(58, '::1', 'ariel12@gmail.com', 2, '2024-10-12 14:38:55', 1),
(59, '::1', 'adminsmk2@gmail.com', 1, '2024-10-12 14:39:12', 1),
(60, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 00:26:29', 1),
(61, '::1', 'ariel12@gmail.com', 2, '2024-10-13 00:26:53', 1),
(62, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 00:28:36', 1),
(63, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 00:29:27', 1),
(64, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 00:30:28', 1),
(65, '::1', 'ariel12@gmail.com', 2, '2024-10-13 00:31:38', 1),
(66, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 00:32:04', 1),
(67, '::1', 'ariel12@gmail.com', 2, '2024-10-13 00:32:44', 1),
(68, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 00:33:14', 1),
(69, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 00:34:24', 1),
(70, '::1', 'ariel12@gmail.com', 2, '2024-10-13 00:35:10', 1),
(71, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 00:36:11', 1),
(72, '::1', 'ariel12@gmail.com', 2, '2024-10-13 00:41:25', 1),
(73, '::1', 'ariel12@gmail.com', 2, '2024-10-13 00:41:59', 1),
(74, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 00:53:13', 1),
(75, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 06:49:36', 1),
(76, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 10:43:52', 1),
(77, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 11:07:17', 1),
(78, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 11:12:31', 1),
(79, '::1', 'ariel12@gmail.com', NULL, '2024-10-13 11:12:50', 0),
(80, '::1', 'ariel12@gmail.com', 2, '2024-10-13 11:12:56', 1),
(81, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 11:13:28', 1),
(82, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 11:13:57', 1),
(83, '::1', 'ariel12@gmail.com', 2, '2024-10-13 11:30:21', 1),
(84, '::1', 'adminsmk2@gmail.com', 1, '2024-10-13 11:30:44', 1),
(85, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 01:45:06', 1),
(86, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 03:39:27', 1),
(87, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 10:35:06', 1),
(88, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 10:38:22', 1),
(89, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 10:45:16', 1),
(90, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 10:47:47', 1),
(91, '::1', 'ariel12@gmail.com', 2, '2024-10-14 10:56:25', 1),
(92, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 10:56:49', 1),
(93, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 10:58:26', 1),
(94, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 11:03:32', 1),
(95, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 11:07:11', 1),
(96, '::1', 'ariel12@gmail.com', 2, '2024-10-14 11:10:27', 1),
(97, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 11:11:38', 1),
(98, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 11:14:27', 1),
(99, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 11:19:28', 1),
(100, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 11:21:23', 1),
(101, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 11:23:13', 1),
(102, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 11:30:45', 1),
(103, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 11:31:01', 1),
(104, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 12:46:56', 1),
(105, '::1', 'ariel12@gmail.com', 2, '2024-10-14 13:50:54', 1),
(106, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 13:51:35', 1),
(107, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 22:58:00', 1),
(108, '::1', 'adminsmk2@gmail.com', 1, '2024-10-14 23:19:22', 1),
(109, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 22:56:01', 1),
(110, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:07:39', 1),
(111, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:08:52', 1),
(112, '::1', 'ariel12@gmail.com', NULL, '2024-10-15 23:16:24', 0),
(113, '::1', 'ariel12@gmail.com', 2, '2024-10-15 23:16:35', 1),
(114, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:17:24', 1),
(115, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:27:44', 1),
(116, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:30:14', 1),
(117, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:32:06', 1),
(118, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:33:52', 1),
(119, '::1', 'adminsmk2@gmail.com', NULL, '2024-10-15 23:35:30', 0),
(120, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:35:38', 1),
(121, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:37:05', 1),
(122, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:39:14', 1),
(123, '::1', 'adminsmk2@gmail.com', 1, '2024-10-15 23:42:20', 1),
(124, '::1', 'adminsmk2@gmail.com', 1, '2024-10-16 07:38:58', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Mengelola Semua Users'),
(2, 'manage-profile', 'Manage user\'s profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1727996795, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenaga`
--

CREATE TABLE `tenaga` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `tgs_tambahan` varchar(255) DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Buddha','Konghucu') NOT NULL,
  `thn_msk` year(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_up` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tenaga`
--

INSERT INTO `tenaga` (`id`, `nama`, `slug`, `nip`, `jk`, `foto`, `alamat`, `email`, `jabatan`, `mapel`, `tgs_tambahan`, `agama`, `thn_msk`, `created_at`, `updated_up`) VALUES
(1, 'sukma syafika', 'sukma', NULL, 'Perempuan', 'tenaga1.jpg', 'jayapura papua', 'suksya12@gmail.com', 'Guru Mapel', 'Jaringan Komputer', NULL, 'Islam', '2020', NULL, NULL),
(2, 'Fany Giya', 'fany', '121245637854122555', 'Perempuan', 'tenaga2.jpeg', 'Padang Bulan', 'Fanydebora@gmail.com', 'Kepala sekolah', 'Ipa & Bhs Inggris', 'Wali Kelas', 'Kristen', '1999', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_img` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_img`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'adminsmk2@gmail.com', 'Admin', NULL, 'default.svg', '$2y$10$hwAPhMbET/h6vsoPbpt4JuJVdBTJsz15NmNL7dfX0/0mvVibKp586', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-10-12 14:35:50', '2024-10-12 14:35:50', NULL),
(2, 'ariel12@gmail.com', 'Ariel', NULL, 'default.svg', '$2y$10$4OjvVm2vRE89.sg.cxyiw.t45ciQwAQKYEUEG9uV/5dJwYGsXbZd.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-10-12 14:36:52', '2024-10-12 14:36:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tenaga`
--
ALTER TABLE `tenaga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tenaga`
--
ALTER TABLE `tenaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
