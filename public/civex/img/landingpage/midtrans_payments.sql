-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2023 pada 17.37
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inbengkel_api`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `midtrans_payments`
--

CREATE TABLE `midtrans_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `status` enum('UNPAID','ACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `snap_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `midtrans_payments`
--

INSERT INTO `midtrans_payments` (`id`, `reference_id`, `amount`, `status`, `snap_token`, `created_at`, `updated_at`) VALUES
(1, 'PRDCT-130923-19', 170000, 'UNPAID', '28262ecf-c341-4562-a5c2-9e7ee8e27895', '2023-09-13 04:30:58', '2023-09-13 04:30:58'),
(2, 'PRDCT-130923-20', 170000, 'UNPAID', '204eb3d0-6e99-4d2e-8a78-24ca05bc6baa', '2023-09-13 04:39:09', '2023-09-13 04:39:09'),
(3, 'PRDCT-130923-21', 170000, 'UNPAID', '247ee090-47cd-4335-8c76-49c32d9de231', '2023-09-13 06:47:47', '2023-09-13 06:47:47'),
(4, 'PRDCT-130923-22', 170000, 'UNPAID', '55b1b742-b9e6-4276-a9a5-cb7c4976bafa', '2023-09-13 07:09:29', '2023-09-13 07:09:29'),
(5, 'PRDCT-130923-23', 170000, 'UNPAID', 'c2f4206d-c10c-4c1e-bba6-b9f89d9d1c3b', '2023-09-13 07:11:10', '2023-09-13 07:11:10'),
(6, 'PRDCT-130923-24', 170000, 'UNPAID', 'c9ebfd73-6cad-4918-a943-18c071838d00', '2023-09-13 07:12:26', '2023-09-13 07:12:26'),
(7, 'PRDCT-130923-25', 170000, 'UNPAID', '895c18aa-5e62-4b49-82d1-20791871edf4', '2023-09-13 07:15:45', '2023-09-13 07:15:45'),
(8, 'PRDCT-130923-26', 170000, 'UNPAID', '0cfec818-a3e5-40a7-b5d6-672d0bf44a84', '2023-09-13 07:19:25', '2023-09-13 07:19:25'),
(9, 'PRDCT-130923-27', 170000, 'UNPAID', '37ffc3e5-ab79-4ccf-918e-2308964b85f7', '2023-09-13 07:20:32', '2023-09-13 07:20:32'),
(10, 'PRDCT-130923-28', 170000, 'UNPAID', 'd9864df5-c25a-4cea-ad57-1487a7de4630', '2023-09-13 07:23:24', '2023-09-13 07:23:24'),
(11, 'PRDCT-130923-29', 170000, 'UNPAID', '4fb0a5d8-0106-4f1a-8521-32a2178bff62', '2023-09-13 07:26:51', '2023-09-13 07:26:51'),
(12, 'PRDCT-130923-30', 170000, 'ACTIVE', '4d407499-d217-4e77-b421-856b8a653e49', '2023-09-13 07:39:30', '2023-09-13 08:00:57'),
(13, 'PRDCT-130923-31', 170000, 'ACTIVE', '45bf8183-9430-49e6-902e-0974a665f06d', '2023-09-13 08:03:44', '2023-09-13 08:04:26'),
(14, 'SRVC-130923-4', 85000, 'UNPAID', 'c339666f-7146-43c9-93c0-08fa4408088c', '2023-09-13 08:32:59', '2023-09-13 08:32:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `midtrans_payments`
--
ALTER TABLE `midtrans_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `midtrans_payments`
--
ALTER TABLE `midtrans_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
