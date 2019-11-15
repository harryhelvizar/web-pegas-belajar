-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 01:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
-- Table structure for table `admin`
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
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `email`, `password`, `foto`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Lalu Abdurrahman', 'lalurahman', 'lalurahmanms@gmail.com', '$2y$10$GT8E7yjmXZuMuV9TO7qLC.dVeFdzVGu7U2rxJc3/SRvQTuUIanV8S', 'default.jpg', 1, 1, '0000-00-00 00:00:00'),
(7, 'admin', 'admin', 'admin@gmail.com', '$2y$10$Qiybl7M5ag7glzaoJQUqfeY.r2qkM.8xa79pchtALtzE4vRQJ6oCG', 'default.jpg', 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `gaya_belajar`
--

CREATE TABLE `gaya_belajar` (
  `id_gaya_belajar` int(11) NOT NULL,
  `nama_gaya_belajar` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `karakteristik` varchar(1024) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `tipe_kepribadian` varchar(250) NOT NULL,
  `tugas_yg_sesuai` varchar(250) NOT NULL,
  `kemampuan_adaptif` varchar(250) NOT NULL,
  `kekuatan` varchar(1024) NOT NULL,
  `kelemahan` varchar(1024) NOT NULL,
  `cara_belajar` varchar(1024) NOT NULL,
  `metode_guru` varchar(1024) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban_a` int(11) NOT NULL,
  `jawaban_b` int(11) NOT NULL,
  `jawaban_c` int(11) NOT NULL,
  `jawaban_d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
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
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `username`, `email`, `password`, `nis`, `asal_sekolah`, `kabupaten`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `foto`, `date_created`) VALUES
(4, 'Lalu Abdurrahman', 'lalurahman', 'lalurahman@gmail.com', '$2y$10$vwlLbfpPTazdce9FhdBLBOX45jxfRf/KdFA5m8ymk2dTBrple9LJq', '123', 'PI', 'Makassar', '085256999428', 'Makassar', '2019-11-06', 'deafult.jpg', '2019-11-11 15:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
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
-- Dumping data for table `soal`
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
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `testimoni` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `jabatan`, `testimoni`, `foto`, `date_created`) VALUES
(1, 'Lalu Abdurrahman', 'Mahasiswa', 'sangat bagus .. saya suka', 'testimoni.jpg', '2019-11-14 23:49:46'),
(2, 'Harry Helvizar', 'Mahasiswa', 'Baik saekali.. makin maju teruss', 'testimoni.jpg', '2019-11-14 23:54:48'),
(3, 'Muhdan Fyan Syah Sofian', 'CEO Pondok Informatika', 'saya sangat suka model seperti ini karna sangat membantu', 'testimoni.jpg', '2019-11-14 23:55:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaya_belajar`
--
ALTER TABLE `gaya_belajar`
  ADD PRIMARY KEY (`id_gaya_belajar`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gaya_belajar`
--
ALTER TABLE `gaya_belajar`
  MODIFY `id_gaya_belajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
