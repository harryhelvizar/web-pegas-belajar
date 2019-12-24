-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2019 pada 09.53
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegasbelajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `email`, `password`, `foto`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Lalu Abdurrahman', 'lalurahman', 'lalurahmanms@gmail.com', '$2y$10$GT8E7yjmXZuMuV9TO7qLC.dVeFdzVGu7U2rxJc3/SRvQTuUIanV8S', 'default.jpg', 1, 1, '0000-00-00 00:00:00'),
(7, 'admin', 'admin', 'admin@gmail.com', '$2y$10$Qiybl7M5ag7glzaoJQUqfeY.r2qkM.8xa79pchtALtzE4vRQJ6oCG', 'default.jpg', 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_role`
--

INSERT INTO `admin_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaya_belajar`
--

CREATE TABLE `gaya_belajar` (
  `id_gaya_belajar` int(11) NOT NULL,
  `nama_gaya_belajar` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `karakteristik` varchar(5024) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `tipe_kepribadian` varchar(250) NOT NULL,
  `tugas_yg_sesuai` varchar(250) NOT NULL,
  `kemampuan_adaptif` varchar(250) NOT NULL,
  `kekuatan` varchar(1024) NOT NULL,
  `kelemahan` varchar(1024) NOT NULL,
  `cara_belajar` varchar(1024) NOT NULL,
  `metode_guru` varchar(1024) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaya_belajar`
--

INSERT INTO `gaya_belajar` (`id_gaya_belajar`, `nama_gaya_belajar`, `title`, `karakteristik`, `icon`, `tipe_kepribadian`, `tugas_yg_sesuai`, `kemampuan_adaptif`, `kekuatan`, `kelemahan`, `cara_belajar`, `metode_guru`, `date_created`) VALUES
(1, 'Divergen', 'Feeling / Reflector', '<p>Gaya belajar Diverger&nbsp;merupakan kombinasi dari&nbsp;Concrete experience&nbsp;dan Reflection Observation,&nbsp;yaitu gaya belajar individu yang membentuk pengalaman belajar melalui menghayati sendiri secara konkret, kemudian mentransformasikan kedalam pengamatan reflektif. Siswa dengan tipe&nbsp;Diverger&nbsp;&nbsp;unggul dalam melihat situasi konkret dari banyak sudut pandang yang berbeda kemudian menghubungkan menjadi satu pandangan yang utuh. Kutub Feeling&nbsp;individu belajar melalui perasaan dengan menekankan segi-segi pengalaman konkret, lebih mementingkan relasi dengan sesama dan kepekaan terhadap perasaan orang lain. Individu cenderung lebih terbuka dan mampu beradaptasi terhadap perubahan yang dihadapinya dalam proses belajarnya.<br />\r\nGaya belajar ini senang merenungkan pengalaman dan mengamati dari berbagai perspektif. Mengumpulkan data, baik secara langsung maupun dari orang lain, dan lebih suka memikirkannya secara menyeluruh sebelum sampai pada sebuah kesimpulan. Pengumpulan dan analisis data yang menyeluruh tentang pengalaman dan peristiwa adalah penting sehingga mereka cenderung menunda mengambil kesimpulan. Mereka adalah orang-orang yang bijaksana yang suka mempertimbangkan semua sudut pandang dan implikasi yang mungkin terjadi sebelum begerak (berhati-hati). Pendekatannya pada setiap situasi adalah dengan &quot;mengamati&quot; dan bukan &quot;bertindak&quot;.<br />\r\nSiswa dengan tipe ini lebih menyukai tugas belajar yang menuntut menghasilkan ide-ide (<em>brainstorming</em>), gagasan dan biasanya juga menyukai mengumpulkan berbagai sumber informasi. Menyukai isu yang berkaitan dengan kesusastraan, budaya, sejarah, psikologi, pengembangan diri dan ilmu-ilmu sosial lainnya. Siswa dalam belajarnya biasanya lebih banyak bertanya &quot;Mengapa (<em>Why</em>)&quot;.</p>', 'flaticon-books', 'Introvert Feeling (IF), Reflector & Feeler', 'Personal Job (tugas atau pekerjaan yang berhubungan dengan orang lain, membangun hubungan interpersonal atau relasi sosial)', '- Valuing Skill (Kemampuan menilai dari berbagai sudut pandang)\r\n- Recognizing problem (Mampu mengenali sebuah permasalahan)', '- Kekuatan terbesar terletak pada kreativitas dan kemampuan imajinatif\r\n- Unggul dalam kemampuan untuk melihat situasi konkret dari banyak perspektif dan menghasilkan banyak ide (kreatif)\r\n- Menyukai tantangan dan mempelajari hal-hal yang baru\r\n- Memiliki kemampuan dalam membangun hubungan interpersonal, terbuka, pendengar, yang baik, dan mampu memahami orang lain\r\n- Memiliki kepekaan emosi yang tinggi \r\n- Mampu membangun hubungan yang persuasif kepada orang lain \r\n- Berhati-hati serta tidak langsung pada pengambilan keputusan \r\n- Teliti dan bijaksana', '- Cenderung lambat dalam mengambil keputusan\r\n- Cepat mengalami bosan, khusus nya pada hal-hal yang membutuhkan waktu lama ', 'Cenderung belajar dengan pertanyaan \"Mengapa (Why)\", sehingga cara belajar yang efektif untuk gaya belajar divergen adalah melalui proses mendengarkan (listening), berinteraksi (interaction), bertukar pikiran (sharing) dan mengamati (observing)', 'Dalam menghadapi gaya belajar divergen, guru sebaiknya berperan sebagai motivator atau inspirator. Metode mengajar yang cocok untuk diterapkan diantaranya ceramah, diskusi, kerja kelompok dan tanya jawab.', '2019-12-13 21:45:42'),
(2, 'Asimilasi', 'Teoritis', '<p>Gaya belajar Asimilasi, adalah kombinasi <em>Konseptualisasi Abstrak&nbsp;</em>dan <em>Observasi Reflektif </em>gaya belajar individu yang menangani pengalaman melalui konseptualisasi secara abstrak dan mentransformasi ke dalam pengamatan reflektif. Individu ini terampil dalam mengolah banyak informasi serta menempatkannya ke dalam bentuk yang pasti dan logis. Memiliki minat yang tinggi&nbsp; pada ide-ide dan konsep abstrak. Secara umum, ia lebih mementingkan keunggulan logis sebuah teori daripada nilai praktisnya. Memiliki kelebihan dalam memahami berbagai sajian informasi serta merangkumnya dalam suatu format yang logis, singkat dan jelas.</p>\r\n\r\n<p>&nbsp;</p>', 'flaticon-books', 'Introvert Intuition (li), Observer & Theorist', 'Information Job (tugas atau pekerjaan yang berhubungan informasi, konsep, teori, perhitungan dan pengolahan data)', '- Thinking Skill (Kemampuan berpikir, analisa dan konseptual)\r\n- Defining Problems (Mampu menetapkan dan menjelaskan suatu permasalahan)', '- Kekuatan terbesar terletak pada kemampuan pemahaman terhadap berbagai sajian informasi dan data.\r\n- Mampu mengembangkan sebuah konsep teori dan membuat pemetaan konsep\r\n- Mampu merangkum sebuah informasi menjadi format yang logis, singkat dan jelas ji kak', '', '', '', '2019-12-13 21:45:46'),
(3, 'Kovergen', 'Thinker / Pragmatis', '<p>-</p>', '-', '-', '-', '-', '-', '-', '-', '', '2019-12-13 22:32:15'),
(4, 'Akomodasi', 'Doer / Theorist', '<p>-</p>', '-', '-', '-', '-', '-', '-', '-', '', '2019-12-13 22:31:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `kunciF` int(11) NOT NULL,
  `kunciO` int(11) NOT NULL,
  `kunciD` int(11) NOT NULL,
  `kunciT` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_siswa`, `kunciF`, `kunciO`, `kunciD`, `kunciT`, `created_at`, `updated_at`) VALUES
(6, 1, 1, 3, 2, 4, '2019-12-13 22:04:16', '2019-12-13 22:04:16'),
(7, 1, 1, 3, 2, 4, '2019-12-13 22:05:42', '2019-12-13 22:05:42'),
(8, 2, 2, 3, 4, 1, '2019-12-13 22:08:55', '2019-12-13 22:08:55'),
(9, 2, 2, 3, 4, 1, '2019-12-13 22:10:48', '2019-12-13 22:10:48'),
(10, 2, 2, 3, 4, 1, '2019-12-13 22:12:20', '2019-12-13 22:12:20'),
(11, 2, 2, 3, 4, 1, '2019-12-13 22:13:11', '2019-12-13 22:13:11'),
(12, 2, 2, 3, 4, 1, '2019-12-13 22:14:06', '2019-12-13 22:14:06'),
(13, 2, 2, 3, 4, 1, '2019-12-13 22:14:51', '2019-12-13 22:14:51'),
(14, 2, 2, 3, 4, 1, '2019-12-13 22:17:11', '2019-12-13 22:17:11'),
(15, 2, 2, 3, 4, 1, '2019-12-13 22:18:09', '2019-12-13 22:18:09'),
(16, 2, 2, 3, 4, 1, '2019-12-13 22:18:49', '2019-12-13 22:18:49'),
(17, 2, 2, 3, 4, 1, '2019-12-13 22:19:12', '2019-12-13 22:19:12'),
(18, 2, 2, 3, 4, 1, '2019-12-13 22:20:28', '2019-12-13 22:20:28'),
(19, 2, 2, 3, 4, 1, '2019-12-13 22:23:34', '2019-12-13 22:23:34'),
(20, 2, 2, 3, 4, 1, '2019-12-13 22:27:21', '2019-12-13 22:27:21'),
(21, 2, 2, 3, 4, 1, '2019-12-13 22:32:36', '2019-12-13 22:32:36'),
(22, 2, 2, 3, 4, 1, '2019-12-13 22:34:00', '2019-12-13 22:34:00'),
(23, 2, 2, 3, 4, 1, '2019-12-13 22:34:45', '2019-12-13 22:34:45'),
(24, 2, 2, 4, 3, 1, '2019-12-14 03:56:34', '2019-12-14 03:56:34'),
(25, 2, 2, 3, 4, 1, '2019-12-14 04:11:43', '2019-12-14 04:11:43'),
(26, 1, 1, 4, 3, 2, '2019-12-23 14:02:31', '2019-12-23 14:02:31'),
(27, 1, 1, 4, 3, 2, '2019-12-23 14:04:17', '2019-12-23 14:04:17'),
(28, 1, 1, 4, 3, 2, '2019-12-23 14:06:39', '2019-12-23 14:06:39'),
(29, 3, 3, 1, 2, 4, '2019-12-23 14:08:30', '2019-12-23 14:08:30'),
(30, 3, 3, 1, 2, 4, '2019-12-23 14:11:00', '2019-12-23 14:11:00'),
(31, 47, 47, 50, 62, 61, '2019-12-23 14:22:20', '2019-12-23 14:22:20'),
(32, 47, 47, 50, 62, 61, '2019-12-23 14:24:05', '2019-12-23 14:24:05'),
(33, 47, 47, 50, 62, 61, '2019-12-23 14:27:07', '2019-12-23 14:27:07'),
(34, 47, 47, 50, 62, 61, '2019-12-23 14:29:33', '2019-12-23 14:29:33'),
(35, 47, 47, 50, 62, 61, '2019-12-23 14:31:29', '2019-12-23 14:31:29'),
(36, 47, 47, 50, 62, 61, '2019-12-23 14:32:06', '2019-12-23 14:32:06'),
(37, 47, 47, 50, 62, 61, '2019-12-23 14:35:59', '2019-12-23 14:35:59'),
(38, 47, 47, 50, 62, 61, '2019-12-23 14:36:31', '2019-12-23 14:36:31'),
(39, 47, 47, 50, 62, 61, '2019-12-23 14:38:22', '2019-12-23 14:38:22'),
(40, 47, 47, 50, 62, 61, '2019-12-23 14:38:53', '2019-12-23 14:38:53'),
(41, 47, 47, 50, 62, 61, '2019-12-23 14:40:11', '2019-12-23 14:40:11'),
(42, 47, 47, 50, 62, 61, '2019-12-23 14:40:51', '2019-12-23 14:40:51'),
(43, 47, 47, 50, 62, 61, '2019-12-23 14:42:59', '2019-12-23 14:42:59'),
(44, 47, 47, 50, 62, 61, '2019-12-23 14:44:22', '2019-12-23 14:44:22'),
(45, 47, 47, 50, 62, 61, '2019-12-23 14:44:36', '2019-12-23 14:44:36'),
(46, 47, 47, 50, 62, 61, '2019-12-23 14:45:48', '2019-12-23 14:45:48'),
(47, 47, 47, 50, 62, 61, '2019-12-23 14:46:07', '2019-12-23 14:46:07'),
(48, 47, 47, 50, 62, 61, '2019-12-23 14:46:32', '2019-12-23 14:46:32'),
(49, 47, 47, 50, 62, 61, '2019-12-23 14:49:35', '2019-12-23 14:49:35'),
(50, 47, 47, 50, 62, 61, '2019-12-23 14:51:02', '2019-12-23 14:51:02'),
(51, 47, 47, 50, 62, 61, '2019-12-23 14:52:33', '2019-12-23 14:52:33'),
(52, 47, 47, 50, 62, 61, '2019-12-23 14:54:42', '2019-12-23 14:54:42'),
(53, 47, 47, 50, 62, 61, '2019-12-23 14:55:02', '2019-12-23 14:55:02'),
(54, 47, 47, 50, 62, 61, '2019-12-23 14:56:35', '2019-12-23 14:56:35'),
(55, 47, 47, 50, 62, 61, '2019-12-23 14:57:41', '2019-12-23 14:57:41'),
(56, 47, 47, 50, 62, 61, '2019-12-23 15:00:35', '2019-12-23 15:00:35'),
(57, 47, 47, 50, 62, 61, '2019-12-23 15:01:53', '2019-12-23 15:01:53'),
(58, 47, 47, 50, 62, 61, '2019-12-23 15:02:26', '2019-12-23 15:02:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`) VALUES
(4, 'Kabupaten Barru'),
(5, 'Kabupaten Bone'),
(6, 'Kabupaten Bulukumba'),
(7, 'Kabupaten Enrekang'),
(8, 'Kabupaten Gowa'),
(9, 'Kabupaten Kepulauan Selayar'),
(10, 'Kabupaten Luwu'),
(11, 'Kabupaten Luwu Timur'),
(12, 'Kabupaten Luwu Utara'),
(13, 'Kabupaten Maros'),
(14, 'Kabupaten Pangkajene dan Kepulauan'),
(15, 'Kabupaten Pinrang'),
(16, 'Kabupaten Sidenreng Rappang'),
(17, 'Kabupaten Sinjai'),
(18, 'Kabupaten Soppeng'),
(19, 'Kabupaten Takalar'),
(20, 'Kabupaten Tana Toraja'),
(21, 'Kabupaten Toraja Utara'),
(22, 'Kabupaten Wajo'),
(23, 'Kota Makassar'),
(24, 'Kota Palopo'),
(25, 'Kota Parepare');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunci`
--

CREATE TABLE `kunci` (
  `jawaban` varchar(1) NOT NULL,
  `1` varchar(1) NOT NULL,
  `2` varchar(1) NOT NULL,
  `3` varchar(1) NOT NULL,
  `4` varchar(1) NOT NULL,
  `5` varchar(1) NOT NULL,
  `6` varchar(1) NOT NULL,
  `7` varchar(1) NOT NULL,
  `8` varchar(1) NOT NULL,
  `9` varchar(1) NOT NULL,
  `10` varchar(1) NOT NULL,
  `11` varchar(1) NOT NULL,
  `12` varchar(1) NOT NULL,
  `13` varchar(1) NOT NULL,
  `14` varchar(1) NOT NULL,
  `15` varchar(1) NOT NULL,
  `16` varchar(1) NOT NULL,
  `17` varchar(1) NOT NULL,
  `18` varchar(1) NOT NULL,
  `19` varchar(1) NOT NULL,
  `20` varchar(1) NOT NULL,
  `21` varchar(1) NOT NULL,
  `22` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kunci`
--

INSERT INTO `kunci` (`jawaban`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`) VALUES
('D', 'B', 'D', 'B', 'C', 'C', 'A', 'C', 'B', 'C', 'A', 'B', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D'),
('F', 'C', 'B', 'C', 'A', 'A', 'D', 'B', 'D', 'B', 'D', 'D', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
('O', 'A', 'A', 'A', 'D', 'B', 'C', 'D', 'A', 'D', 'C', 'C', 'C', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B'),
('T', 'D', 'C', 'D', 'B', 'D', 'B', 'A', 'C', 'A', 'B', 'A', 'A', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `username`, `email`, `password`, `nis`, `asal_sekolah`, `kabupaten`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `foto`, `date_created`) VALUES
(4, 'Lalu Abdurrahman', 'lalurahman', 'lalurahman@gmail.com', '$2y$10$vwlLbfpPTazdce9FhdBLBOX45jxfRf/KdFA5m8ymk2dTBrple9LJq', '123', 'PI', 'Makassar', '085256999428', 'Makassar', '2019-11-06', 'deafult.jpg', '2019-11-11 15:17:47'),
(5, 'lalu', 'lalu', 'lalu@gmail.com', '$2y$10$k.O59TW/Qypq0aIJi65Fmu93o2jyhFYu.E.qRCmOkGP1SxwMndNwm', '123', 'Pondok Informatika', 'Kabupaten Gowa', '085256999428', 'Makassar', '2019-10-27', 'deafult.jpg', '2019-11-24 06:45:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `nama_slider` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `nama_slider`, `text`, `gambar`, `status`) VALUES
(2, 'Slider 2', 'Gaya Belajar itu Unik. Penasaran ? Kenali Gaya Belajarmu Disini!', 'pexels-photo-256468.jpeg', ''),
(3, 'Slider 3', 'Gaya Belajar itu Unik. Penasaran ? Kenali Gaya Belajarmu Disini!', 'dawn-1840298_1920.jpg', 'active'),
(4, 'Slider 1', 'Gaya Belajar itu Unik. Penasaran ? Kenali Gaya Belajarmu Disini!', 'notebook-336634_1920.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` varchar(250) NOT NULL,
  `jawab_a` varchar(250) NOT NULL,
  `jawab_b` varchar(250) NOT NULL,
  `jawab_c` varchar(250) NOT NULL,
  `jawab_d` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`) VALUES
(1, 'Saat menghadapi masalah, saya akan menyelesaikannya dengan..', 'Mengambil pendekatan langkah demi langkah', 'Bertindah segera atau saat itu juga', 'Pertimbangkan dampaknya terhadap orang lain', 'Pastikan memiliki data, fakta atau informasi terlebih dahulu'),
(2, 'Ketika belajar, saya lebih suka dengan..', 'Mempertimbangkan penjelasan guru', 'Diskusi dan bertukar pikiran dalam kelompok kecil', 'Membaca artikel, studi kasus atau penjelasan di buku', 'Berpartisipasi dalam kegiatan atau praktek lapangan'),
(3, 'Ketika guru mengajukan pertanyaan yang saya tahu jawabannya, saya akan..', 'Membiarkan orang lain menjawab lebih dulu', 'Menawarkan tanggapan atau jawaban langsung', 'Mempertimbangkan apakah jawaban saya akan diterima dengan baik atau tidak', 'Memikirkan baik-baik jawaban saya sebelum menjawab'),
(4, 'Dalam diskusi atau kerja kelompok, saya..', 'Mendorong orang lain untuk menawarkan pendapat mereka', 'Mempertanyakan pendapat orang lain', 'Menawarkan pendapat saya kepada orang lain', 'Mendengarkan pendapat orang lain sebelum menyampaikan pendapat saya'),
(5, 'Saya dapat belajar dengan sangat baik dalam kegiatan, jika memberi saya kesempatan untuk..', 'Bertukar pikiran atau diskusi dengan teman', 'Meluangkan waktu untuk berpikir dan menemukan ide-ide baru', 'Mengambil peran ketua, pengarah atau pemimpin', 'Terlibat dan berperan langsung didalamnya'),
(6, 'Selama proses belajar di kelas, saya mendengarkan dan memperhatikan..', 'Bagaimana secara praktis mengerjakannya', 'Poin-poin penting yang disampaikan guru', 'Ide pokok dari penjelasan guru', 'Cerita atau gambar yang diperlihatkan'),
(7, 'Saya terkesan kepada seorang guru melalui..', 'Pengetahuan dan keahliannya', 'Kepribadian dan gayanya', 'Penggunaan metode dan kegiatan', 'Pengelolaan dan pengaturannya'),
(8, 'Saya lebih suka informasi disajikan dengan cara..', 'Model seperti diagram, alur atau skema', 'Poin-poin penting', 'Penjelasan rinci', 'Dilengkapi dengan contoh atau ilustrasi'),
(9, 'Saya belajar dengan baik jika saya dapat..', 'Melihat hubungan antara ide, peristiwa dan situasi secara nyata', 'Berinteraksi dengan orang lain', 'Menerima tips praktis dan sederhana', 'Mengamati sebuah demonstrasi, simulasi atau video'),
(10, 'Sebelum menghadiri pelatihan, saya akan bertanya \"Apakah saya akan..?\"', 'Mendapatkan tips praktis yang dapat membantu saya dalam bekerja', 'Menerima banyak informasi baru dan penting', 'Ikut berpartisipasi dalam pelatihan', 'Belajar sesuatu yang baru'),
(11, 'Setelah menghadiri sesi pelatihan, saya akan..', 'Cenderung berpikir tentang apa yang telah saya pelajari', 'Menuangkan segera hasil belajar saya menjadi tindakan nyata', 'Menyusun strategi dan cara melaksanakannya dengan baik', 'Menceritakan kepada orang lain tentang pengalaman baru saya'),
(12, 'Dalam pelatihan atau belajar, metode yang paling saya sukai adalah..', 'Praktik kerja bagaimana melakukan sesuatu hal', 'Menyimak penjelasan guru atau mentor', 'Membaca dan menganalisis studi kasus atau soal', 'Berpartisipasi dalam permainan peran'),
(13, 'Ketika ada sesuatu hal yang baru, saya akan..', 'Tertantang untuk segera mencobanya', 'Berhati-hati dalam melakukan/mencobanya', 'Mencari tahu cara kerja atau melakukannya', 'Mencoba dan merasakannya tanpa perlu khawatir'),
(14, 'Dalam bekerja, saya akan..', 'Mengerjakannya dengan berhati-hati', 'Mengikuti seperti yang dilakukan orang lain', 'Mengerjakannya sesuai petunjuk, langkah demi langkah dan sistematis', 'Menyelesaikannya dengan cepat dan tepat'),
(15, 'Saya mempelajari sesuatu dengan cara..', 'Sharing pendapat atau diskusi dengan orang lain', 'Mengumpulkan reverensi atau bahan bacaan yang relevan', 'Menyusun rencana atau strategi khusus', 'Mengalami langsung di lapangan atau praktik langsung'),
(16, 'Dalam pertemanan saya menempatkan diri sebagai..', 'Pendengar yang baik untuk orang lain', 'Orang yang ikut pada kemauan teman-teman yang lain', 'Terlibat hanya pada hal-hal tertentu dan yang penting saja', 'Teman yang memiliki pengaruh'),
(17, 'Cara belajar saya cenderung dengan..', 'Mengamati', 'Memahami', 'Mencoba dan merasakan', 'Bertindak dan mempratekkan'),
(18, 'Saya menyukai jenis pekerjaan yang..', 'Sosial, pelayanan dan seni', 'Saintik, penelitian, data dan informasi', 'Teknisi, medis dan teknologi', 'Membutuhkan interaksi seperti pendidik, pemasaran'),
(19, 'Kemampuan khusus, yang saya unggul didalamnya adalah..', 'Terampil dalam menilai', 'Terampil dalam menyusun konsep/teoritis', 'Membuat keputusan', 'Mengambil tindakan'),
(20, 'Saya lebih tertarik pada hal-hal yang..', 'Membutuhkan interaksi dengan orang lain', 'Membutuhkan kemampuan analisis/berpikir', 'Bersifat teknis dan praktis', 'Memerlukan tindakan dan praktek langsung'),
(21, 'Bidang pendidikan atau mata pelajaran yang sesuai..', 'Seni, sejarah dan psikologi', 'Matematika dan sains', 'Teknik dan medis', 'Komunikasi'),
(22, 'Saya menyukai kegiatan yang..', 'Dalam ruangan dengan kegiatan yang bersifat personal', 'Dalam ruangan untuk kegiatan pengolahan data atau informasi', 'Luar ruangan untuk pekerjaan teknis', 'Luar ruangan atau kerja lapangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `email_tamu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `testimoni` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `jabatan`, `testimoni`, `foto`, `date_created`) VALUES
(1, 'Lalu Abdurrahman', 'Mahasiswa', 'sangat bagus .. saya suka', 'testimoni.jpg', '2019-11-14 23:49:46'),
(2, 'Harry Helvizar', 'Mahasiswa', 'Baik saekali.. makin maju teruss', 'testimoni.jpg', '2019-11-14 23:54:48'),
(3, 'Muhdan Fyan Syah Sofian', 'CEO Pondok Informatika', 'saya sangat suka model seperti ini karna sangat membantu', 'testimoni.jpg', '2019-11-14 23:55:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gaya_belajar`
--
ALTER TABLE `gaya_belajar`
  ADD PRIMARY KEY (`id_gaya_belajar`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `kunci`
--
ALTER TABLE `kunci`
  ADD PRIMARY KEY (`jawaban`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gaya_belajar`
--
ALTER TABLE `gaya_belajar`
  MODIFY `id_gaya_belajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
