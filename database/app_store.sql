-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2023 pada 12.29
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid_karyawan` varchar(255) NOT NULL,
  `kode_outlet` varchar(255) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `penempatan` varchar(255) NOT NULL,
  `domisili` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `t_masuk` varchar(255) NOT NULL,
  `t_lahir` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawans`
--

INSERT INTO `karyawans` (`id`, `uid_karyawan`, `kode_outlet`, `nama_karyawan`, `penempatan`, `domisili`, `posisi`, `t_masuk`, `t_lahir`, `no_hp`, `poto`, `created_at`, `updated_at`) VALUES
(1, 'kblPj', 'TAH', 'Ella Susanti S.Kom', 'T. Amir Hamzah', 'Solok', 'Pendeta', '2017-02-01', '1983-08-16', '0928 7481 527', 'poto.jpg', '2023-07-16 19:12:01', '2023-07-16 19:12:01'),
(2, 'Um7sH', 'GTS', 'Artawan Kusumo', 'Gatot Subroto', 'Denpasar', 'Tukang Batu', '1988-09-11', '1996-04-07', '(+62) 899 0861 7471', 'poto.jpg', '2023-07-16 19:12:01', '2023-07-16 19:12:01'),
(3, '5rpep', 'TAH', 'Cayadi Lanang Sitorus S.Psi', 'T. Amir Hamzah', 'Surakarta', 'Satpam', '1970-12-23', '2022-02-18', '0937 4446 0327', 'poto.jpg', '2023-07-16 19:13:23', '2023-07-16 19:13:23'),
(4, '4LcGw', 'GTS', 'Zaenab Wulandari', 'Gatot Subroto', 'Kupang', 'Pengacara', '2012-09-09', '1972-02-29', '(+62) 382 5959 231', 'poto.jpg', '2023-07-16 19:13:23', '2023-07-16 19:13:23'),
(5, 'ELzTD', 'TAH', 'Oman Anggriawan', 'T. Amir Hamzah', 'Tebing Tinggi', 'Presiden', '2002-02-28', '1987-01-21', '0773 7161 1159', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(6, 'tuoIP', 'GTS', 'Kenari Pradana', 'Gatot Subroto', 'Tangerang Selatan', 'Pialang', '1979-01-01', '2011-04-29', '0756 9702 2182', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(7, 'nyZYy', 'ASA', 'Cengkal Wibisono', 'Asia', 'Pagar Alam', 'Imam Masjid', '1970-07-12', '1999-06-01', '025 5894 037', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(8, 'ICR5H', 'TAH', 'Vanesa Sabrina Puspasari', 'T. Amir Hamzah', 'Binjai', 'Wiraswasta', '2003-01-24', '2003-01-06', '(+62) 798 2174 6128', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(9, 'qINBe', 'GTS', 'Laila Yolanda', 'Gatot Subroto', 'Mataram', 'Penata Busana', '2018-04-23', '1986-10-26', '(+62) 373 0279 414', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(10, '2kVkd', 'ASA', 'Praba Putra', 'Asia', 'Lhokseumawe', 'Paraji', '1987-02-25', '1977-06-30', '0491 1933 6407', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(11, 'w3ylw', 'TAH', 'Anastasia Laksmiwati', 'T. Amir Hamzah', 'Cirebon', 'Tukang Batu', '1995-10-16', '1981-09-25', '(+62) 354 8341 558', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(12, 'GPazJ', 'GTS', 'Zaenab Pudjiastuti', 'Gatot Subroto', 'Pekalongan', 'Tukang Cukur', '1976-07-27', '1976-08-31', '0332 0524 153', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(13, 'Yh0s9', 'ASA', 'Prasetya Rahman Wibowo M.TI.', 'Asia', 'Lubuklinggau', 'Tukang Kayu', '1994-03-14', '1970-01-13', '(+62) 413 5033 259', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(14, 'ZxfKC', 'TAH', 'Karja Januar M.TI.', 'T. Amir Hamzah', 'Pekanbaru', 'Pelajar / Mahasiswa', '1999-05-08', '2007-05-07', '0543 3278 255', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(15, '7LOP4', 'GTS', 'Maya Paulin Halimah S.Gz', 'Gatot Subroto', 'Singkawang', 'Pelaut', '2022-09-16', '1988-11-08', '(+62) 743 9777 830', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(16, 'IN6uN', 'ASA', 'Nyana Margana Hidayat', 'Asia', 'Palembang', 'Pelajar / Mahasiswa', '2008-05-26', '2020-10-24', '(+62) 346 3158 366', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(17, 'Ytodi', 'TAH', 'Najam Bahuwirya Sinaga S.Sos', 'T. Amir Hamzah', 'Tarakan', 'Penata Busana', '1995-10-20', '2001-11-25', '0406 5248 356', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(18, '5fSBL', 'GTS', 'Maryanto Simbolon S.H.', 'Gatot Subroto', 'Tanjungbalai', 'Jaksa', '1986-12-26', '2005-01-11', '(+62) 824 3130 8986', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(19, '7omYB', 'ASA', 'Taufik Mulyanto Nababan', 'Asia', 'Administrasi Jakarta Barat', 'Wiraswasta', '1995-08-04', '2002-11-30', '0592 7255 4954', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(20, 'a4x8R', 'TAH', 'Siska Sudiati', 'T. Amir Hamzah', 'Pekanbaru', 'Juru Masak', '2000-11-18', '1986-01-05', '(+62) 974 5925 5761', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(21, 'HBFLd', 'GTS', 'Laswi Mariadi Sitompul', 'Gatot Subroto', 'Padangsidempuan', 'Tentara Nasional Indonesia (TNI)', '1976-07-09', '2016-07-30', '0839 066 633', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(22, 'PEr3p', 'ASA', 'Puspa Novi Hartati', 'Asia', 'Palembang', 'Industri', '1981-05-07', '2006-08-15', '0812 594 739', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(23, 'ylIWV', 'TAH', 'Panji Budiman M.Farm', 'T. Amir Hamzah', 'Gorontalo', 'Konstruksi', '2020-11-24', '1972-12-18', '(+62) 740 7968 518', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(24, 'nIIt6', 'GTS', 'Mulyanto Wakiman Tamba', 'Gatot Subroto', 'Cilegon', 'Programmer', '2004-04-24', '1987-03-10', '023 0309 715', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(25, 'jKelN', 'ASA', 'Ade Suartini', 'Asia', 'Solok', 'Tukang Gigi', '1976-08-08', '1989-06-15', '0531 8381 412', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(26, 'tgC3Q', 'TAH', 'Rina Kuswandari', 'T. Amir Hamzah', 'Pematangsiantar', 'Karyawan Swasta', '2004-04-17', '2022-08-09', '(+62) 263 5571 970', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(27, 'fmnRK', 'GTS', 'Lili Astuti', 'Gatot Subroto', 'Makassar', 'Karyawan Honorer', '1994-04-06', '1995-12-10', '(+62) 547 5071 5557', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(28, 'cExcx', 'ASA', 'Bala Kuncara Marpaung S.Pt', 'Asia', 'Bontang', 'Tukang Batu', '2022-03-07', '2001-06-17', '0347 0843 6091', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(29, 'u2Fk0', 'TAH', 'Hilda Widiastuti', 'T. Amir Hamzah', 'Bima', 'Tukang Gigi', '2004-10-11', '2022-08-18', '(+62) 917 1855 1257', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(30, 'qWA2y', 'GTS', 'Cayadi Dongoran', 'Gatot Subroto', 'Banda Aceh', 'Akuntan', '2022-07-05', '2017-07-02', '(+62) 497 3876 229', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(31, 'CEV4Q', 'ASA', 'Emin Budiman S.Sos', 'Asia', 'Langsa', 'Hakim', '1972-05-10', '2012-09-27', '(+62) 872 622 199', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(32, '1j8Bj', 'TAH', 'Sabar Mulyono Napitupulu M.Ak', 'T. Amir Hamzah', 'Manado', 'Penata Rias', '1992-10-18', '2012-11-01', '(+62) 954 0805 9984', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(33, 'BqTMY', 'GTS', 'Dwi Maulana', 'Gatot Subroto', 'Palembang', 'Mengurus Rumah Tangga', '1998-10-08', '1994-08-24', '0529 4735 4498', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03'),
(34, 'Tew4z', 'ASA', 'Olivia Eva Fujiati', 'Asia', 'Batu', 'Kepala Desa', '2020-06-17', '2009-08-24', '0630 7870 0923', 'poto.jpg', '2023-07-16 19:16:03', '2023-07-16 19:16:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_16_021654_create_outlets_table', 1),
(6, '2023_07_16_064433_create_karyawans_table', 1),
(7, '2023_07_16_105332_level', 1),
(8, '2023_07_16_123806_kode_outlet', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlets`
--

CREATE TABLE `outlets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_outlet` varchar(255) NOT NULL,
  `nama_outlet` varchar(255) NOT NULL,
  `alamat_outlet` varchar(255) NOT NULL,
  `map_outlet` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `outlets`
--

INSERT INTO `outlets` (`id`, `kode_outlet`, `nama_outlet`, `alamat_outlet`, `map_outlet`, `created_at`, `updated_at`) VALUES
(1, 'TAH', 'T. Amir Hamzah', 'Jl T. Amir Hamzah', 'null', NULL, NULL),
(2, 'GTS', 'Gatot Subroto', 'Jl. Gatot Subroto', 'null', NULL, NULL),
(3, 'ASA', 'Asia', 'Jl. Asia, Simp Besi', 'null', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sawal', 'ALL', 'sawalinto@gmail.com', NULL, '$2a$12$cu0HMaDsNIoOO8A38TLmfu.4wAUSkXwb5V1QKejSB37VPz.y8BcgS', NULL, NULL, NULL),
(2, 'kevin', 'TAH', 'kevin@gmail.com', NULL, '$2a$12$cu0HMaDsNIoOO8A38TLmfu.4wAUSkXwb5V1QKejSB37VPz.y8BcgS', NULL, NULL, NULL),
(3, 'anthika', 'ASA', 'anthika@gmail.com', NULL, '$2a$12$6JWVXkTXPESHb3LeBmoHOux7ZikmTf/6BqL0NIh9Iq.GHDwb7gTAm', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `karyawans_uid_karyawan_unique` (`uid_karyawan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `outlets`
--
ALTER TABLE `outlets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `outlets_kode_outlet_unique` (`kode_outlet`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `outlets`
--
ALTER TABLE `outlets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
