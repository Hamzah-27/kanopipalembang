-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2022 pada 13.51
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '127.0.0.1', 'ejak221@gmail.com', 1, '2022-03-22 05:45:33', 0),
(2, '127.0.0.1', 'rivi.muhammad10@gmail.com', NULL, '2022-03-22 06:04:11', 0),
(3, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-03-22 06:05:54', 1),
(4, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-03-22 06:11:21', 1),
(5, '127.0.0.1', 'ejak221@gmail.com', NULL, '2022-03-23 09:07:40', 0),
(6, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-03-23 09:07:48', 1),
(7, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-03-23 09:31:56', 1),
(8, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-03-27 07:50:02', 1),
(9, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-03-31 07:22:11', 1),
(10, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-04-01 07:59:26', 1),
(11, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-04-01 08:45:24', 1),
(12, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-04-01 09:09:44', 1),
(13, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-04-01 09:12:56', 1),
(14, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-04-01 09:47:55', 1),
(15, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-04-01 20:57:51', 1),
(16, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-04-05 23:33:42', 1),
(17, '127.0.0.1', 'kanopiplg', NULL, '2022-05-10 18:42:27', 0),
(18, '127.0.0.1', 'ejak221@gmail.com', NULL, '2022-05-10 18:42:43', 0),
(19, '127.0.0.1', 'ejak221@gmail.com', NULL, '2022-05-10 18:44:18', 0),
(20, '127.0.0.1', 'ejak221@gmail.com', NULL, '2022-05-10 18:44:25', 0),
(21, '127.0.0.1', 'ejak221@gmail.com', NULL, '2022-05-10 18:44:32', 0),
(22, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-05-10 18:44:40', 1),
(23, '127.0.0.1', 'ejak221@gmail.com', NULL, '2022-05-10 18:50:23', 0),
(24, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-05-10 18:50:35', 1),
(25, '127.0.0.1', 'ejak221@gmail.com', NULL, '2022-06-19 09:00:27', 0),
(26, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-06-19 09:00:36', 1),
(27, '127.0.0.1', 'ejak221@gmail.com', 3, '2022-07-21 11:15:48', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1647945133, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id` int(255) NOT NULL,
  `harga1` varchar(255) NOT NULL,
  `harga2` varchar(255) NOT NULL,
  `harga3` varchar(255) NOT NULL,
  `harga4` varchar(255) NOT NULL,
  `harga5` varchar(255) NOT NULL,
  `harga6` varchar(255) NOT NULL,
  `harga7` varchar(255) NOT NULL,
  `harga8` varchar(255) NOT NULL,
  `harga9` varchar(255) NOT NULL,
  `harga10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_harga`
--

INSERT INTO `tb_harga` (`id`, `harga1`, `harga2`, `harga3`, `harga4`, `harga5`, `harga6`, `harga7`, `harga8`, `harga9`, `harga10`) VALUES
(3, 'Rp. 150.000', 'Rp. 100.000', 'Rp. 2000', 'Rp. 125.000', 'Rp. 60.000', 'Rp. 75.000', 'Rp. 2.500', 'Rp. 850.000', 'Rp. 5.000', 'Rp. 3.000.000'),
(4, 'Rp. 400.000', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jumlah`
--

CREATE TABLE `tb_jumlah` (
  `id` int(255) NOT NULL,
  `jumlah1` varchar(255) NOT NULL,
  `jumlah2` varchar(255) NOT NULL,
  `jumlah3` varchar(255) NOT NULL,
  `jumlah4` varchar(255) NOT NULL,
  `jumlah5` varchar(255) NOT NULL,
  `jumlah6` varchar(255) NOT NULL,
  `jumlah7` varchar(255) NOT NULL,
  `jumlah8` varchar(255) NOT NULL,
  `jumlah9` varchar(255) NOT NULL,
  `jumlah10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jumlah`
--

INSERT INTO `tb_jumlah` (`id`, `jumlah1`, `jumlah2`, `jumlah3`, `jumlah4`, `jumlah5`, `jumlah6`, `jumlah7`, `jumlah8`, `jumlah9`, `jumlah10`) VALUES
(3, '70 buah', '100 batang', '2 kaleng', '1 kotak', '2 kaleng', '4 kaleng', '20 buah', '1 dus', '10 buah', '2 orang'),
(4, '80 buah', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_material`
--

CREATE TABLE `tb_material` (
  `id` int(255) NOT NULL,
  `material1` varchar(255) NOT NULL,
  `material2` varchar(255) NOT NULL,
  `material3` varchar(255) NOT NULL,
  `material4` varchar(255) NOT NULL,
  `material5` varchar(255) NOT NULL,
  `material6` varchar(255) NOT NULL,
  `material7` varchar(255) NOT NULL,
  `material8` varchar(255) NOT NULL,
  `material9` varchar(255) NOT NULL,
  `material10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_material`
--

INSERT INTO `tb_material` (`id`, `material1`, `material2`, `material3`, `material4`, `material5`, `material6`, `material7`, `material8`, `material9`, `material10`) VALUES
(3, 'Besi Holo', 'Besi Holo', 'Cat kaleng', 'Kawat las', 'Cat Dasar', 'Cat Warna', 'Dinabol', 'Silicon', 'Daimaru', 'Upah tukang'),
(4, 'Besi Holo', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id` int(255) NOT NULL,
  `jenispekerjaan` varchar(255) NOT NULL,
  `luasvolume` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id`, `jenispekerjaan`, `luasvolume`, `harga`, `foto`) VALUES
(3, 'Kanopi Kaca', '5M X 6M', 'Rp. 10.000.000', '1655647902_e4d923c930e3ac0f3c0c.jpg'),
(4, 'Kanopi alkan', '4m x 5m', 'Rp. 10.000.000', '1655647936_b1048b1b3e99257307c8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukuran`
--

CREATE TABLE `tb_ukuran` (
  `id` int(255) NOT NULL,
  `ukuran1` varchar(255) NOT NULL,
  `ukuran2` varchar(255) NOT NULL,
  `ukuran3` varchar(255) NOT NULL,
  `ukuran4` varchar(255) NOT NULL,
  `ukuran5` varchar(255) NOT NULL,
  `ukuran6` varchar(255) NOT NULL,
  `ukuran7` varchar(255) NOT NULL,
  `ukuran8` varchar(255) NOT NULL,
  `ukuran9` varchar(255) NOT NULL,
  `ukuran10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ukuran`
--

INSERT INTO `tb_ukuran` (`id`, `ukuran1`, `ukuran2`, `ukuran3`, `ukuran4`, `ukuran5`, `ukuran6`, `ukuran7`, `ukuran8`, `ukuran9`, `ukuran10`) VALUES
(3, '40 x 60', '30 x 30', '1 liter', '2.6mm', '1 liter', '1 liter', '10mm', '30mm', 'standar', '-'),
(4, '55 x 10', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'ejak221@gmail.com', 'Muhammad Hamzah Risvi', '$2y$10$pL9D79Shw5n.dcagzt6yX.iFEW/vnI0ZY6eLpyPHjbV4mzCxcARfW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-22 06:05:41', '2022-03-22 06:05:41', NULL);

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
-- Indeks untuk tabel `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jumlah`
--
ALTER TABLE `tb_jumlah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_material`
--
ALTER TABLE `tb_material`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ukuran`
--
ALTER TABLE `tb_ukuran`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT untuk tabel `tb_harga`
--
ALTER TABLE `tb_harga`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_jumlah`
--
ALTER TABLE `tb_jumlah`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_material`
--
ALTER TABLE `tb_material`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_ukuran`
--
ALTER TABLE `tb_ukuran`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
