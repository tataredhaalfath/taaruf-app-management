-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2021 at 02:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taaruf_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `user_id`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 1, 'cv-ku', NULL, '2021-12-08 00:42:55', '2021-12-08 00:42:55'),
(6, 2, 'redha-cv', NULL, '2021-12-08 01:11:53', '2021-12-08 01:11:53'),
(7, 4, 'cv-hifni', NULL, '2021-12-09 20:45:33', '2021-12-09 20:45:33'),
(8, 5, 'user-cv', NULL, '2021-12-12 20:50:56', '2021-12-12 20:50:56'),
(10, 16, 'user-cv-16-meli', NULL, '2021-12-19 23:07:35', '2021-12-19 23:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `cv_gambar_diri`
--

CREATE TABLE `cv_gambar_diri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cv_id` int(11) NOT NULL,
  `moto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_hidup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan_wl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hal_disukai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sisi_negatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merokok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv_gambar_diri`
--

INSERT INTO `cv_gambar_diri` (`id`, `cv_id`, `moto`, `target_hidup`, `kegiatan_wl`, `hal_disukai`, `sisi_negatif`, `merokok`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 'Hidup seperti rasul', 'ingin segera mendapatkan kebahagiaan dunia ahirat', 'ngoding', 'ngoding', 'kadang mager dan kurang motivasi', 'tidak', NULL, '2021-12-08 03:39:22', '2021-12-08 19:19:26'),
(2, 6, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', NULL, '2021-12-10 01:53:12', '2021-12-10 01:53:12'),
(3, 8, 'berani berbuat berani bertanggung jawab', 'menjadi orang paling kaya', 'main hp', 'nonton anime', 'kadang mageran', 'tidak', NULL, '2021-12-12 20:54:14', '2021-12-12 20:54:14'),
(4, 7, 'a', 'asd', 'asd', 'asd', 'asd', 'asd', NULL, '2021-12-19 22:46:04', '2021-12-19 22:46:04'),
(5, 10, 'asd', 'asd', 'asd', 'sda', 'asd', 'sad', NULL, '2021-12-19 23:08:45', '2021-12-19 23:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `cv_gambar_fisik`
--

CREATE TABLE `cv_gambar_fisik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cv_id` int(11) NOT NULL,
  `bentuk_fisik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna_kulit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `riwayat_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_darah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cacat_fisik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_rambut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna_mata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanda_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv_gambar_fisik`
--

INSERT INTO `cv_gambar_fisik` (`id`, `cv_id`, `bentuk_fisik`, `warna_kulit`, `tinggi`, `berat`, `riwayat_penyakit`, `golongan_darah`, `cacat_fisik`, `tipe_rambut`, `warna_mata`, `tanda_lahir`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 'proporsional', 'putih', 175, 66, 'tidak ada', 'AB +', 'tidak', 'sedikit bergelombang', 'agak coklat', 'tidak ada', NULL, '2021-12-08 02:18:04', '2021-12-08 18:40:05'),
(2, 6, 'asd', 'as', 123, 123, 'asdas', 'asd', 'asd', 'asd', 'as', 'asd', NULL, '2021-12-10 01:53:02', '2021-12-10 01:53:02'),
(3, 8, 'tinggi', 'PUTIH', 178, 78, 'tidak ada', 'ab', 'tidak ada', 'lurus kaya rapunzel', 'cokelat', 'nopae', NULL, '2021-12-12 20:52:53', '2021-12-12 20:52:53'),
(4, 7, 'sa', 'asd', 123, 21, 'asd', 'asd', 'as', 'as', 'as', 'as', NULL, '2021-12-19 22:45:41', '2021-12-19 22:45:41'),
(5, 10, 'as', 'as', 12, 21, 'asd', 'asd', 'sad', 'sd', 's', 's', NULL, '2021-12-19 23:08:23', '2021-12-19 23:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `cv_harapan`
--

CREATE TABLE `cv_harapan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cv_id` int(11) NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv_harapan`
--

INSERT INTO `cv_harapan` (`id`, `cv_id`, `visi`, `misi`, `karir`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 'membangun rumah tangga yang berlandaskan syariat islam', 'membangun rumah tangga yang sesuai dengan ajaran nabi', 'setelah menikah inign punya usaha yang besar dan kaya', NULL, '2021-12-08 04:33:16', '2021-12-08 19:29:37'),
(2, 6, 'asd', 'asd', 'asd', NULL, '2021-12-10 01:53:15', '2021-12-10 01:53:15'),
(3, 8, 'mencari jodoh sejati', 'membangun keluarga yang harmonis', 'pengen punya usaha', NULL, '2021-12-12 20:55:37', '2021-12-12 20:55:37'),
(4, 7, 'asdas', 'asdasd', 'asdas', NULL, '2021-12-19 22:46:15', '2021-12-19 22:46:15'),
(5, 10, 'asd', 'asd', 'ads', NULL, '2021-12-19 23:08:54', '2021-12-19 23:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `cv_hobi`
--

CREATE TABLE `cv_hobi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cv_id` int(11) NOT NULL,
  `hobi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv_hobi`
--

INSERT INTO `cv_hobi` (`id`, `cv_id`, `hobi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 'olahraga dan ngoding', NULL, '2021-12-08 02:34:35', '2021-12-08 19:12:04'),
(2, 6, 'ngoding', NULL, '2021-12-08 03:44:52', '2021-12-08 03:44:52'),
(3, 8, 'memasak', NULL, '2021-12-12 20:52:58', '2021-12-12 20:52:58'),
(4, 7, 'main', NULL, '2021-12-19 22:45:44', '2021-12-19 22:45:44'),
(5, 10, 'masak', NULL, '2021-12-19 23:08:26', '2021-12-19 23:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `cv_kriteria`
--

CREATE TABLE `cv_kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cv_id` int(11) NOT NULL,
  `tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tambahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv_kriteria`
--

INSERT INTO `cv_kriteria` (`id`, `cv_id`, `tinggi`, `suku`, `usia`, `pekerjaan`, `tambahan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 'sekiat 160cm', 'tidak membatasi', '18 - 21 tahun', 'selain yang berkaitan dengan bank dan riba', 'sholehah menjadi nilai utama, bercadar dan berkacamata menjadi nilai tambah. rajin', NULL, '2021-12-08 04:19:49', '2021-12-08 19:24:21'),
(2, 6, 'sekitar 160cm', 'tidak membatasi', '18 - 21 tahun', 'tidak membatasi', 'sholehah', NULL, '2021-12-08 19:25:55', '2021-12-08 19:25:55'),
(3, 8, 'tidak membatasi sih', 'tidak membatasi juga', '20', 'penting pendapatan gede dan halal', 'rupa fisik memang menawan, tapi rupa hati lebih jadi idaman', NULL, '2021-12-12 20:55:17', '2021-12-12 20:55:17'),
(4, 7, '123', 'tidak membatasi juga', 'asd', 'asd', 'asdasd', NULL, '2021-12-19 22:46:11', '2021-12-19 22:46:11'),
(5, 10, '123', 'ds', 'asd', 'asd', 'asdasd', NULL, '2021-12-19 23:08:51', '2021-12-19 23:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `cv_pendidikan`
--

CREATE TABLE `cv_pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cv_id` int(11) NOT NULL,
  `sma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_sma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `univ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_univ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv_pendidikan`
--

INSERT INTO `cv_pendidikan` (`id`, `cv_id`, `sma`, `jurusan_sma`, `univ`, `jurusan_univ`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 'SMK Tunas Harapan', 'Teknik Komputer dan Jaringan', 'Universitas Stikubank', 'Teknik Informatika dan teknologi', NULL, '2021-12-08 03:21:57', '2021-12-08 19:15:30'),
(2, 6, 'asd', 'asd', 'asd', 'asd', NULL, '2021-12-10 01:53:07', '2021-12-10 01:53:07'),
(3, 8, 'sma harapan bangsa', 'ipa', 'universitas sesama indonesia', 'nuklir', NULL, '2021-12-12 20:53:33', '2021-12-12 20:53:33'),
(4, 7, 'tunas', 'tkj', 'unp', 'peternakan', NULL, '2021-12-19 22:45:57', '2021-12-19 22:45:57'),
(5, 10, 'sma', 'ipa', 'unpad', 'nuklir', NULL, '2021-12-19 23:08:39', '2021-12-19 23:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `cv_profile`
--

CREATE TABLE `cv_profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cv_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhaj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv_profile`
--

INSERT INTO `cv_profile` (`id`, `cv_id`, `image`, `nama`, `alamat`, `tgl_lahir`, `umur`, `agama`, `manhaj`, `status`, `menikah`, `suku`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 'assets/cv/img/7BoAlQtiQI6rclvUIo0zH5ZiJ4rYujeXdIrNyD1o.jpg', 'tata redha al fath', 'pati', '2001-12-04', 20, 'islam', 'salafi', 'pelajar', 'belum', 'jawa', NULL, '2021-12-08 01:07:33', '2021-12-08 07:12:59'),
(2, 6, 'assets/cv/img/eURAYQ0Tf3Mxjq7HtJpsFUVGPzq2aNLlg8RC5eHL.jpg', 'al fath', 'margoyoso pati', '2001-12-04', 20, 'islam', 'salafi', 'mahasiswa', 'belum', 'jawa', NULL, '2021-12-08 03:44:36', '2021-12-08 03:44:36'),
(3, 7, 'assets/cv/img/Ya0WVC3WeW6b4suZmTbHSR8AZllvjxsQ2mS3njQx.jpg', 'hifni', 'kalimantan selatan', '2021-12-15', 19, 'islam', '-', 'jomblo akut', 'belum', 'banjar', NULL, '2021-12-09 20:46:46', '2021-12-09 20:46:46'),
(4, 8, 'assets/cv/img/QsttLcq2ocAl0Tnb6SobvF6yDG5w0SHBzH6nnpWz.jpg', 'user', 'pati', '2000-12-02', 18, 'islam', 'salafi', 'jomblo', 'belum dong', 'sunda', NULL, '2021-12-12 20:52:14', '2021-12-12 20:52:14'),
(5, 10, 'assets/cv/img/3Rwm5KUhyFx8lcNC9aau0lyNTqSpKmiFeVNieQde.jpg', 'meli', 'asda', '2021-11-30', 22, 'islam', '-', '-', 'belum', 'sunda', NULL, '2021-12-19 23:08:13', '2021-12-19 23:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kajian`
--

CREATE TABLE `kajian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kajian`
--

INSERT INTO `kajian` (`id`, `judul`, `url`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'pertanyaan baru', 'https://www.youtube.com/embed/N-VM3Ts_gdU', NULL, '2021-12-19 21:08:11', '2021-12-19 21:10:08'),
(3, 'nikmatnya taaruf bukan pacaran', 'https://www.youtube.com/embed/Sl-yf8U3ND8', NULL, '2021-12-19 21:59:50', '2021-12-19 22:11:58');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_06_043502_create_kajian_table', 1),
(6, '2021_12_06_044137_create_quotes_table', 1),
(7, '2021_12_06_045244_create_cv_table', 1),
(8, '2021_12_06_045407_create_cv_profile_table', 1),
(9, '2021_12_06_050057_create_cv_gambar_fisik', 1),
(10, '2021_12_06_050558_create_cv_pendidikan_table', 1),
(11, '2021_12_06_050857_create_cv_hobi_table', 1),
(12, '2021_12_06_051004_create_cv_gambar_diri_table', 1),
(13, '2021_12_06_051203_create_cv_kriteria_table', 1),
(14, '2021_12_06_051544_create_cv_harapan', 1),
(15, '2021_12_06_051843_create_user_questions_table', 1),
(16, '2021_12_06_052003_create_user_answers_table', 1),
(17, '2021_12_06_053101_create_taaruf_table', 1),
(18, '2021_12_06_054528_create_taaruf_transactions', 1),
(19, '2021_12_06_054742_create_user_stories_table', 1),
(20, '2021_12_09_025041_create_pengajuan_cv_table', 2),
(21, '2021_12_13_040849_create_taaruf_table', 3),
(22, '2021_12_14_100913_create_user_profile_table', 4),
(23, '2021_12_14_102847_create_user_profile_table', 5),
(24, '2021_12_20_023314_create_pendampingan_table', 6),
(25, '2021_12_20_093925_create_stories_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adminku@gmail.com', '$2y$10$7N4yHdB9FMPQTKdnSt.LXukJfwXjcUbi84/izy2.EfWKK5xYnqjQS', '2021-12-15 02:09:14'),
('user1@gmail.com', '$2y$10$fDyXTg8yDriahyy3Hm3BjeUTniCezYPHv9d8tAqd1.LDGPX/Dvwru', '2021-12-15 02:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `pendampingan`
--

CREATE TABLE `pendampingan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counselor` int(11) NOT NULL,
  `taaruf_id` int(11) NOT NULL,
  `user1` int(11) NOT NULL,
  `user2` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendampingan`
--

INSERT INTO `pendampingan` (`id`, `counselor`, `taaruf_id`, `user1`, `user2`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 15, 10, 1, 5, '2021-12-16 12:44:33', '2021-12-19 19:58:10', '2021-12-19 19:58:10'),
(4, 15, 13, 4, 16, '2021-12-20 05:34:51', '2021-12-20 05:26:42', '2021-12-20 05:34:51'),
(5, 15, 14, 5, 16, NULL, '2021-12-20 05:46:10', '2021-12-20 05:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_cv`
--

CREATE TABLE `pengajuan_cv` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cv_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan_cv`
--

INSERT INTO `pengajuan_cv` (`id`, `user_id`, `cv_id`, `question_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, '2021-12-16 02:21:57', '2021-12-08 20:09:00', '2021-12-16 02:21:57'),
(4, 5, 8, 5, '2021-12-16 02:23:43', '2021-12-15 03:38:07', '2021-12-16 02:23:43'),
(5, 5, 8, 5, '2021-12-17 06:58:14', '2021-12-16 02:24:02', '2021-12-16 02:34:24'),
(6, 4, 7, 9, '2021-12-19 22:48:05', '2021-12-19 22:46:36', '2021-12-19 22:48:05'),
(7, 4, 7, 9, '2021-12-19 22:51:22', '2021-12-19 22:50:25', '2021-12-19 22:51:22'),
(8, 16, 10, 10, '2021-12-19 23:12:55', '2021-12-19 23:09:41', '2021-12-19 23:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `judul`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'quotes 1', 'assets/admin/content/K09hstGfrr02dHxOSifRlWp1WPnPFST4OBgZvvjj.jpg', NULL, '2021-12-19 21:23:38', '2021-12-19 22:14:37'),
(2, 'quotes 2', 'assets/admin/content/b9sSwY7CDRlz4qWmpDO4f3aab3550wX1QcCSbOwq.jpg', '2021-12-19 21:41:06', '2021-12-19 21:24:51', '2021-12-19 21:41:06'),
(3, 'quotes 2', 'assets/admin/content/FMo6AsIL0FdYTYj43tW7yRH7NI8Oo0mIxsFI2siB.jpg', NULL, '2021-12-19 22:17:34', '2021-12-19 22:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `stories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `user_id`, `rating`, `stories`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 16, 5, 'KEREN', NULL, '2021-12-20 05:47:35', '2021-12-20 05:47:35'),
(5, 5, 5, 'KEREN', NULL, '2021-12-20 05:47:39', '2021-12-20 05:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `taaruf`
--

CREATE TABLE `taaruf` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id_1` int(11) NOT NULL,
  `user_id_2` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taaruf`
--

INSERT INTO `taaruf` (`id`, `user_id_1`, `user_id_2`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, 1, 5, 'REJECTED', NULL, '2021-12-13 02:22:42', '2021-12-13 02:22:42'),
(9, 1, 5, 'REJECTED', NULL, '2021-12-13 02:25:58', '2021-12-13 02:25:58'),
(12, 4, 16, 'REJECTED', NULL, '2021-12-20 02:27:10', '2021-12-20 05:04:38'),
(13, 4, 16, 'REJECTED', NULL, '2021-12-20 05:18:14', '2021-12-20 05:34:51'),
(14, 5, 16, 'APPROVED', NULL, '2021-12-20 05:45:26', '2021-12-20 05:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `taaruf_transactions`
--

CREATE TABLE `taaruf_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taaruf_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taaruf_transactions`
--

INSERT INTO `taaruf_transactions` (`id`, `taaruf_id`, `user_id`, `status`, `alasan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 10, 5, 'melanjutkan', 'ayok aja', '2021-12-09 12:38:23', '2021-12-13 04:02:06', '2021-12-13 04:02:06'),
(10, 10, 1, 'melanjutkan', 'skuy lah', '2021-12-16 12:38:16', '2021-12-13 04:02:15', '2021-12-13 04:02:15'),
(13, 12, 4, 'membatalkan', 'saya lanjut', '2021-12-20 05:04:38', '2021-12-20 02:30:39', '2021-12-20 05:04:38'),
(15, 12, 16, 'melanjutkan', 'oke', '2021-12-20 05:04:38', '2021-12-20 02:35:51', '2021-12-20 05:04:38'),
(16, 13, 16, 'membatalkan', 'ok', '2021-12-20 05:34:51', '2021-12-20 05:32:33', '2021-12-20 05:34:51'),
(17, 13, 4, 'melanjutkan', 'oke', '2021-12-20 05:34:51', '2021-12-20 05:33:13', '2021-12-20 05:34:51'),
(18, 14, 16, 'melanjutkan', 'YO LANJUT', NULL, '2021-12-20 05:47:25', '2021-12-20 05:47:25'),
(19, 14, 5, 'melanjutkan', 'YO LANJUT', NULL, '2021-12-20 05:47:29', '2021-12-20 05:47:29');

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
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2021-12-07 20:59:18', '$2y$10$fKLeR/pz0X3hyS6UPZdLtexb.rGtEbLnotQp1MLQQNwbmiIqHLfxO', 'USER', 'ACTIVE', '6vbuWslhvE0KrewJXPeLJwKEsOKU94ckDEoVnUz8vpsl4mUVbK5TvwJNhDHS', '2021-12-07 04:50:38', '2021-12-16 02:21:57'),
(3, 'adminku', 'adminku@gmail.com', '2021-12-09 20:22:01', '$2y$10$cgAR71ygIf6imMGpZUjf3OykBIHVayVjaDHEgudY9ZuU7FJPfognG', 'ADMIN', 'ACTIVE', NULL, '2021-12-09 20:20:27', '2021-12-09 20:22:01'),
(4, 'hifni', 'hifni@gmail.com', '2021-12-16 06:35:40', '$2y$10$MIP.Kk6vAr34fE/ddm46I.mSAV9tl6AtivJ5zhA3zJuPyxTN8I4om', 'USER', 'ACTIVE', NULL, '2021-12-09 20:42:20', '2021-12-19 22:51:22'),
(5, 'user1', 'user1@gmail.com', '2021-12-10 00:57:44', '$2y$10$jRsLQIxYpglGOR2y2/x.8uHeeJUE/Bu50Hm2XKqKnrQP.IyzAMOfe', 'USER', 'ACTIVE', NULL, '2021-12-10 00:56:26', '2021-12-16 02:34:24'),
(15, 'counselor baik', 'counsoler@gmail.com', '2021-12-17 02:57:19', '$2y$10$WLkMH4IGq/3toljEyqbX6uTfsGabgwPBseKiYf4hMu9D9I83l1Xeu', 'COUNSELOR', 'ACTIVE', NULL, '2021-12-17 02:57:19', '2021-12-17 02:57:19'),
(16, 'meli', 'meli@gmail.com', '2021-12-19 22:53:38', '$2y$10$CSTOmt/JWolfP4LauNeGju0kfVQPjLq2yH0u1sGDT.pCR6Lw1Yv1W', 'USER', 'ACTIVE', NULL, '2021-12-19 22:53:12', '2021-12-19 23:12:55'),
(17, 'cobaku', 'cobaku@gmail.com', '2021-12-20 06:06:17', '$2y$10$LLv4cNmaZKn8vrhu.qw.GOv1SaiL/PYyeKG0czCh0700bguVGGe.O', 'USER', 'PENDING', NULL, '2021-12-20 06:05:50', '2021-12-20 06:06:17'),
(18, 'REDHA', 'tataredhaalfath13@gmail.com', '2021-12-20 06:51:05', '$2y$10$GRpk4ZKgumPZruE81Ffv8uxzTji8xtPgmetHW67.Bixr0uR9XxmRO', 'USER', 'PENDING', NULL, '2021-12-20 06:50:17', '2021-12-20 06:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uq_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jawaban_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`id`, `uq_id`, `user_id`, `jawaban_1`, `jawaban_2`, `jawaban_3`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'oke', 'oke', 'oke', '2021-12-13 02:32:55', '2021-12-09 05:28:19', '2021-12-13 02:32:55'),
(3, 1, 5, 'oke', 'oke', 'oke', NULL, '2021-12-09 05:28:19', '2021-12-13 02:22:42'),
(4, 5, 1, 'oke', 'oke', 'oke', '2021-12-13 02:37:01', '2021-12-09 05:28:19', '2021-12-13 02:37:01'),
(5, 9, 16, 'oje', 'oke', 'oke', '2021-12-20 02:27:10', '2021-12-20 02:26:30', '2021-12-20 02:27:10'),
(6, 9, 16, 'ayo taaruf', 'gas', 'yok ah gausah lama', '2021-12-20 05:18:14', '2021-12-20 05:12:17', '2021-12-20 05:18:14'),
(7, 5, 16, 'ayo', 'ayi', 'ayo', NULL, '2021-12-20 05:39:18', '2021-12-20 05:39:18'),
(8, 9, 16, 'ayoi', 'ayo', 'ayo', NULL, '2021-12-20 05:39:29', '2021-12-20 05:39:29'),
(9, 5, 16, 'ayo', 'ayo', 'yo', '2021-12-20 05:45:26', '2021-12-20 05:39:41', '2021-12-20 05:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `pendidikan_ahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `image`, `telpon`, `gender`, `kota`, `kecamatan`, `kelurahan`, `alamat`, `umur`, `pendidikan_ahir`, `tagline`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/user/profile/JNCseQzBL2zIOHPyHbnOAazRXc5LntN5dx3zm2KW.jpg', '085325224829', 'L', 'semarang', 'GAJAH MUNGKUR', 'SAMPANGAN', 'pleburan tentah', 20, 'sma', 'mencari istri sholehah', NULL, '2021-12-15 01:11:14', '2021-12-15 01:48:09'),
(2, 5, 'assets/user/profile/vmRhfDWtKlR7YeiLP6LH6qiGolq7Y3tRWINGYxjw.jpg', '091263862714', 'L', 'semarang', 'BANYUMANIK', 'PUDAKPAYUNG', 'asdasd', 12, 'smp', 'asdasd', NULL, '2021-12-15 03:37:59', '2021-12-15 03:37:59'),
(5, 3, 'assets/admin/profile/GK5xLzNRlUTExQFQyZshPcXGACTS6uARvurUuzfr.jpg', '085325224829', 'L', 'semarang', 'NGALIYAN', 'TAMBAKAJI', 'asdasda', 21, 's1', 'asdasd', NULL, '2021-12-17 02:11:15', '2021-12-17 02:11:15'),
(6, 15, 'assets/counselor/profile/HutFwKNIC3U1vxYKceCxttJqGIQAAvBrcJu6nvEn.jpg', '1235421', 'L', 'semarang', 'BANYUMANIK', 'PUDAKPAYUNG', 'asdasdasdasd', 21, 'smp', 'asdsaddasd', NULL, '2021-12-17 05:35:18', '2021-12-17 05:39:10'),
(7, 4, 'assets/user/profile/fitddvSGwEU4NgTqYsc9ReEh8TMrrIcU1rjykMP1.jpg', '12371982658', 'L', 'semarang', 'GUNUNG PATI', 'SUMUREJO', 'asdasd', 12, 'sd', 'mencari pasangan yang cantik', NULL, '2021-12-19 22:45:04', '2021-12-19 22:45:04'),
(8, 16, 'assets/user/profile/tsyhqFIXyFKGSy9LV7Upf309Y7lVQbsfdXbf6gHo.jpg', '123123', 'P', 'semarang', 'TUGU', 'TUGUREJO', 'adasd', 22, 's1', 'asdas', NULL, '2021-12-19 23:09:24', '2021-12-19 23:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_questions`
--

CREATE TABLE `user_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pertanyaan_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_questions`
--

INSERT INTO `user_questions` (`id`, `user_id`, `pertanyaan_1`, `pertanyaan_2`, `pertanyaan_3`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'bagaimana pandangan kamu mengenai salafi ? ok', 'bagaimana pandangan kamu mengenai penguasa yang dzalim ? ok', 'siapa yang kuburannya berjalan ? okasdaaa', NULL, '2021-12-08 05:40:56', '2021-12-15 00:53:29'),
(5, 5, 'pernah pacaran tidak ?', 'kenapa milih taaruf ?', 'kamu tertarik untuk taaruf denganku karena ?', NULL, '2021-12-08 22:34:31', '2021-12-12 20:56:21'),
(9, 4, 'asdsa', 'asdas', 'asdad', NULL, '2021-12-19 22:46:28', '2021-12-19 22:46:28'),
(10, 16, 'mau nikah?', 'mau berapa anak ?', 'sudah punya rumah ?', NULL, '2021-12-19 23:09:39', '2021-12-19 23:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_stories`
--

CREATE TABLE `user_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `stories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_gambar_diri`
--
ALTER TABLE `cv_gambar_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_gambar_fisik`
--
ALTER TABLE `cv_gambar_fisik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_harapan`
--
ALTER TABLE `cv_harapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_hobi`
--
ALTER TABLE `cv_hobi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_kriteria`
--
ALTER TABLE `cv_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_pendidikan`
--
ALTER TABLE `cv_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_profile`
--
ALTER TABLE `cv_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kajian`
--
ALTER TABLE `kajian`
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
-- Indexes for table `pendampingan`
--
ALTER TABLE `pendampingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_cv`
--
ALTER TABLE `pengajuan_cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taaruf`
--
ALTER TABLE `taaruf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taaruf_transactions`
--
ALTER TABLE `taaruf_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_questions`
--
ALTER TABLE `user_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_stories`
--
ALTER TABLE `user_stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cv_gambar_diri`
--
ALTER TABLE `cv_gambar_diri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cv_gambar_fisik`
--
ALTER TABLE `cv_gambar_fisik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cv_harapan`
--
ALTER TABLE `cv_harapan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cv_hobi`
--
ALTER TABLE `cv_hobi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cv_kriteria`
--
ALTER TABLE `cv_kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cv_pendidikan`
--
ALTER TABLE `cv_pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cv_profile`
--
ALTER TABLE `cv_profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kajian`
--
ALTER TABLE `kajian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pendampingan`
--
ALTER TABLE `pendampingan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengajuan_cv`
--
ALTER TABLE `pengajuan_cv`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `taaruf`
--
ALTER TABLE `taaruf`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `taaruf_transactions`
--
ALTER TABLE `taaruf_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_questions`
--
ALTER TABLE `user_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_stories`
--
ALTER TABLE `user_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
