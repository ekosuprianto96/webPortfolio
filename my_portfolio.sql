-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2023 pada 17.41
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_portfolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_users`
--

CREATE TABLE `data_users` (
  `id` int(11) NOT NULL,
  `page_view` bigint(20) DEFAULT 0,
  `visitor_count` bigint(20) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_users`
--

INSERT INTO `data_users` (`id`, `page_view`, `visitor_count`, `created_at`, `updated_at`) VALUES
(1, 34, 4, '2022-10-17 09:09:32', '2023-04-04 08:23:45');

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
-- Struktur dari tabel `graduations`
--

CREATE TABLE `graduations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `url_graduate` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `image_certificate` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `graduations`
--

INSERT INTO `graduations` (`id`, `name`, `description`, `url_graduate`, `start_date`, `end_date`, `image_certificate`, `created_at`, `updated_at`) VALUES
(33, 'Coba Testing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five.', 'https://cobajalagi.com', '2022-09-05', '2022-09-26', '4eJgHxFaePQC37BDmKe7TXA5KVd4Ak-mobile (24).png', '2022-09-26 06:21:55', '2022-09-26 06:21:55'),
(34, 'Belajar Dasar Pemograman Website', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'https://dicoding.com', '2022-10-04', '2022-10-31', 'ji97RMTVOjpMvLLPVrpT42Yg8sYbZz-uploaded_images-twintout-fabulips-retina.jpg', '2022-10-14 23:38:31', '2022-10-14 23:38:31'),
(35, 'Belajar Membuat Aplikasi Backend Pemula Dengan Node.js', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'https://dicoding.com', '2022-09-25', '2022-10-29', '2iI2e4vPiJGJ1inUNgGivcG98XDotH-0SQFZDP - Algoritma dan Pemrograman Dasar.jpg', '2022-10-15 00:10:34', '2023-04-04 08:06:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_visitors`
--

CREATE TABLE `log_visitors` (
  `id` int(11) NOT NULL,
  `uuid_visitor` varchar(32) NOT NULL,
  `device` varchar(255) NOT NULL,
  `log_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_09_18_073059_create_profiles_table', 1),
(10, '2022_09_18_073907_create_projects_table', 1),
(11, '2022_09_18_075340_create_graduations_table', 1),
(12, '2022_09_18_080117_create_socialmedia_table', 1),
(13, '2022_10_22_130141_create_contacts_table', 2);

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
-- Struktur dari tabel `pengguna_web`
--

CREATE TABLE `pengguna_web` (
  `id` int(11) NOT NULL,
  `visitor_uuid` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna_web`
--

INSERT INTO `pengguna_web` (`id`, `visitor_uuid`, `created_at`, `updated_at`) VALUES
(1, 'tqC3kvgMhyCWYHtQpk0okqwcroAz9xPP', '2022-10-17 08:09:11', '2022-10-17 08:09:11'),
(2, '709af70f-0a89-49fa-9436-0536c4c765eb', '2023-04-04 08:00:27', '2023-04-04 08:00:27'),
(3, 'eb77a87b-1242-4127-a08c-90bce0cb1da2', '2023-04-04 08:01:17', '2023-04-04 08:01:17'),
(4, '44e211b4-35c9-41cd-983d-9e6a2c623d88', '2023-04-04 08:02:21', '2023-04-04 08:02:21'),
(5, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', '2023-04-04 08:04:35', '2023-04-04 08:04:35');

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
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `phone_number` bigint(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `text_about` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `image`, `email`, `birthdate`, `phone_number`, `address`, `text_about`, `created_at`, `updated_at`) VALUES
(1, 'Eko Suprianto', '713931-1500 x 1500.jpg', 'ekhosaputra23@gmail.com', '14-09-1996', 81341439895, 'Desa Turungan Baji Kecamatan Sinjai Barat,Kabupaten Sinjai,Provinsi Sulawesi Selatan', 'Saya seorang fullstack web developer', NULL, '2023-04-04 07:03:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `client` varchar(255) NOT NULL,
  `url_web` varchar(255) NOT NULL,
  `image_prev` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `start_project` date NOT NULL,
  `end_project` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `client`, `url_web`, `image_prev`, `status`, `start_project`, `end_project`, `created_at`, `updated_at`) VALUES
(3, 'Coba Update 1', 'Ini Adalah Testing Yan Ke 3', 'Client 3', 'https://testing3.com', '5cSo1DO1Nv-bugis-market.jpg', 1, '2022-09-04', '2022-09-23', '2022-09-27 23:40:29', '2023-04-04 07:04:40'),
(4, 'Coba Update 2', 'Ini Adalah Testing Yan Ke 3', 'Client 1', 'https://testing3.com', '3mu537e4yC-foto 1.jpg', 0, '2022-09-04', '2022-09-23', '2022-09-28 00:05:40', '2023-04-04 07:05:03'),
(5, 'CGCARE', 'Ini Testing', 'PT.SPIN', 'https://cgcare.com', 'FRY71goyIu-mobile (24).png', 1, '2022-10-02', '2022-10-29', '2022-09-28 02:25:02', '2022-10-01 07:55:02'),
(6, 'CGCARE', 'Ini Testing', 'PT.SPIN', 'https://cgcare.com', 'Bjom0L0x2b-1.jpg', 1, '2022-10-02', '2022-10-29', '2022-10-01 07:45:33', '2022-10-01 07:55:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url_social` varchar(255) NOT NULL,
  `icon_social` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agatha Santoso', 'agathasantoso@gmail.com', NULL, '$2y$10$ERkMUA8YzZAM6FiuYw7cUuHeOU7x9Ziz5q57h4ZGwVy4ZxXClGb4W', NULL, NULL, NULL),
(2, 'Agatha Santoso', 'agathasantoso01@gmail.com', NULL, '$2y$10$I9YMpPDSR.pdpNZQ88./gekW//pYhEUcC4c1U7nfhpadg4j2406vC', NULL, '2022-09-18 01:52:59', '2022-09-18 01:52:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visitors`
--

INSERT INTO `visitors` (`id`, `uuid`, `device`, `created_at`, `updated_at`) VALUES
(14, 'tqC3kvgMhyCWYHtQpk0okqwcroAz9xPP', 'Windows', '2022-10-17 08:09:11', '2022-10-17 08:09:11'),
(15, 'tqC3kvgMhyCWYHtQpk0okqwcroAz9xPP', 'Windows', '2022-10-17 08:11:11', '2022-10-17 08:11:11'),
(16, 'tqC3kvgMhyCWYHtQpk0okqwcroAz9xPP', 'Windows', '2022-10-17 08:12:28', '2022-10-17 08:12:28'),
(17, 'tqC3kvgMhyCWYHtQpk0okqwcroAz9xPP', 'Windows', '2022-10-17 08:15:51', '2022-10-17 08:15:51'),
(18, 'tqC3kvgMhyCWYHtQpk0okqwcroAz9xPP', 'Windows', '2022-10-17 08:16:07', '2022-10-17 08:16:07'),
(19, 'tqC3kvgMhyCWYHtQpk0okqwcroAz9xPP', 'Windows', '2022-10-17 08:23:30', '2022-10-17 08:23:30'),
(20, 'tqC3kvgMhyCWYHtQpk0okqwcroAz9xPP', 'Windows', '2022-10-17 19:54:18', '2022-10-17 19:54:18'),
(21, '44e211b4-35c9-41cd-983d-9e6a2c623d88', 'Windows', '2023-04-04 08:02:21', '2023-04-04 08:02:21'),
(22, '44e211b4-35c9-41cd-983d-9e6a2c623d88', 'Windows', '2023-04-04 08:03:57', '2023-04-04 08:03:57'),
(23, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:04:35', '2023-04-04 08:04:35'),
(24, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:05:09', '2023-04-04 08:05:09'),
(25, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:05:26', '2023-04-04 08:05:26'),
(26, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:06:54', '2023-04-04 08:06:54'),
(27, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:07:06', '2023-04-04 08:07:06'),
(28, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:07:15', '2023-04-04 08:07:15'),
(29, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:07:26', '2023-04-04 08:07:26'),
(30, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:10:03', '2023-04-04 08:10:03'),
(31, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:10:05', '2023-04-04 08:10:05'),
(32, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:12:04', '2023-04-04 08:12:04'),
(33, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:12:14', '2023-04-04 08:12:14'),
(34, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:15:47', '2023-04-04 08:15:47'),
(35, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:16:10', '2023-04-04 08:16:10'),
(36, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:18:06', '2023-04-04 08:18:06'),
(37, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:18:25', '2023-04-04 08:18:25'),
(38, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:19:04', '2023-04-04 08:19:04'),
(39, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:22:23', '2023-04-04 08:22:23'),
(40, 'a9584da2-1847-41d6-b2fe-a4f12d971fcb', 'Windows', '2023-04-04 08:23:45', '2023-04-04 08:23:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_users`
--
ALTER TABLE `data_users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `graduations`
--
ALTER TABLE `graduations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log_visitors`
--
ALTER TABLE `log_visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengguna_web`
--
ALTER TABLE `pengguna_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_users`
--
ALTER TABLE `data_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `graduations`
--
ALTER TABLE `graduations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `log_visitors`
--
ALTER TABLE `log_visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pengguna_web`
--
ALTER TABLE `pengguna_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
