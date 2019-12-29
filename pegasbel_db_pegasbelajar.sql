-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2019 at 09:32 PM
-- Server version: 5.7.26-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegasbel_db_pegasbelajar`
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
  `karakteristik` varchar(5024) NOT NULL,
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

--
-- Dumping data for table `gaya_belajar`
--

INSERT INTO `gaya_belajar` (`id_gaya_belajar`, `nama_gaya_belajar`, `title`, `karakteristik`, `icon`, `tipe_kepribadian`, `tugas_yg_sesuai`, `kemampuan_adaptif`, `kekuatan`, `kelemahan`, `cara_belajar`, `metode_guru`, `date_created`) VALUES
(1, 'Divergen', 'Feeling / Reflector', '<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Gaya belajar Diverger&nbsp;merupakan kombinasi dari&nbsp;Concrete experience&nbsp;dan Reflection Observation,&nbsp;yaitu gaya belajar individu yang membentuk pengalaman belajar melalui menghayati sendiri secara konkret, kemudian mentransformasikan kedalam pengamatan reflektif. Siswa dengan tipe&nbsp;Diverger&nbsp;&nbsp;unggul dalam melihat situasi konkret dari banyak sudut pandang yang berbeda kemudian menghubungkan menjadi satu pandangan yang utuh. Kutub Feeling&nbsp;individu belajar melalui perasaan dengan menekankan segi-segi pengalaman konkret, lebih mementingkan relasi dengan sesama dan kepekaan terhadap perasaan orang lain. Individu cenderung lebih terbuka dan mampu beradaptasi terhadap perubahan yang dihadapinya dalam proses belajarnya.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Gaya belajar ini senang merenungkan pengalaman dan mengamati dari berbagai perspektif. Mengumpulkan data, baik secara langsung maupun dari orang lain, dan lebih suka memikirkannya secara menyeluruh sebelum sampai pada sebuah kesimpulan. Pengumpulan dan analisis data yang menyeluruh tentang pengalaman dan peristiwa adalah penting sehingga mereka cenderung menunda mengambil kesimpulan. Mereka adalah orang-orang yang bijaksana yang suka mempertimbangkan semua sudut pandang dan implikasi yang mungkin terjadi sebelum begerak (berhati-hati). Pendekatannya pada setiap situasi adalah dengan &quot;mengamati&quot; dan bukan &quot;bertindak&quot;.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Siswa dengan tipe ini lebih menyukai tugas belajar yang menuntut menghasilkan ide-ide (<em>brainstorming</em>), gagasan dan biasanya juga menyukai mengumpulkan berbagai sumber informasi. Menyukai isu yang berkaitan dengan kesusastraan, budaya, sejarah, psikologi, pengembangan diri dan ilmu-ilmu sosial lainnya. Siswa dalam belajarnya biasanya lebih banyak bertanya &quot;Mengapa (<em>Why</em>)&quot;.</span></span></p>\r\n', 'flaticon-books', 'Introvert Feeling (IF), Reflector & Feeler', 'Personal Job (tugas atau pekerjaan yang berhubungan dengan orang lain, membangun hubungan interpersonal atau relasi sosial)', '- Valuing Skill (Kemampuan menilai dari berbagai sudut pandang)\r\n- Recognizing problem (Mampu mengenali sebuah permasalahan)', '?	Kekuatan terbesar terletak pada kreativitas dan kemampuan imajinatif\r\n?	Unggul dalam kemampuan untuk melihat situasi konkret dari banyak perspektif dan menghasilkan banyak ide (kreatif)\r\n?	Menyukai tantangan dan mempelajari hal-hal yang baru\r\n?	Memiliki kemampuan dalam membangun hubungan interpersonal, terbuka, pendengar yang baik dan mampu memahami oranglain\r\n?	Memiliki kepekaan emosi yang tinggi\r\n?	Mampu membangun hubungan yang persuasif kepada oranglain\r\n?	Berhati-hati serta tidak langsung pada pengambilan keputusan\r\n?	Teliti dan bijaksana\r\n', '?	Cenderung lambat dalam mengambil keputusan\r\n?	Cepat mengalami bosan, khususnya pada hal-hal yang membutuhkan waktu lama\r\n', 'Cenderung belajar dengan pertanyaan \"Mengapa (Why)\", sehingga cara belajar yang efektif untuk gaya belajar divergen adalah melalui proses mendengarkan (listening), berinteraksi (interaction), bertukar pikiran (sharing) dan mengamati (observing)', 'Dalam menghadapi gaya belajar divergen, guru sebaiknya berperan sebagai motivator atau inspirator. Metode mengajar yang cocok untuk diterapkan diantaranya ceramah, diskusi, kerja kelompok dan tanya jawab.', '2019-12-28 12:18:53'),
(2, 'Asimilasi', 'Teoritis', '<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Gaya Belajar <span style=\"color:black\">Asimilasi, adalah kombinasi <em>Konseptualisasi Abstrak</em> dan <em>Observasi Reflektif</em> </span>yaitu gaya belajar individu yang menangani pengalaman melalui konseptualisasi secara abstrak dan mentransformasi ke dalam pengamatan reflektif.<span style=\"color:black\"> Individu ini ter&shy;ampil dalam mengolah banyak informasi serta menempatkannya ke dalam bentuk yang pasti dan logis. Memiliki minat yang tinggi pada ide-ide dan konsep abstrak. Secara umum, ia lebih mementingkan keunggulan logis sebuah teori daripada nilai praktisnya. </span>Memiliki kelebihan dalam memahami berbagai sajian informasi serta merangkumnya dalam suatu format yang logis, singkat, dan jelas.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Berfokus pada kemampuan pengamatan (<em>watching</em>), dimana individu belajar melalui pengamatan, penekanannya mengamati sebelum menilai, menyimak suatu perkara dari berbagai perspektif, dan selalu menyimak makna dari hal-hal yang diamati. Individu akan menggunakan pikiran dan perasaannya untuk membentuk opini/pendapat dalam proses belajarnya. Mereka memikirkan masalah secara vertikal, selangkah demi selangkah. Mereka mengasimilasi fakta yang berbeda menjadi teori yang koheren. Mereka cenderung perfeksionis yang tidak akan tenang sampai semuanya rapi dan masuk ke dalam skema rasional. Mereka suka menganalisis dan mensintesis. Mereka tertarik pada asumsi dasar, prinsip, model teori dan pemikiran sistem. Mereka cenderung terlepas, analitis dan didedikasikan untuk obyektivitas rasional daripada sesuatu yang subyektif atau ambigu.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Siswa dengan tipe gaya belajar assimilator biasanya lebih banyak bertanya &ldquo;Apa (<em>What</em>)&rdquo;. <span style=\"color:black\">Dalam situasi belajar formal, ia lebih suka membaca, mengajar, mengeksplorasi model analitis, dan memanfaatkan waktu untuk memikirkan berbagai hal secara mendalam. </span>Individu dengan gaya asimilasi senantiasa memahami permasalahan secara luas kemudian disimpulkan. Mereka biasanya menyukai teori yang dapat dirasionalisasi atau dilogika. Dalam beraktivitas, mereka menyukai aktivitas seperti membaca, mengeksplorasi model?model analitis, dan meluangkan banyak waktu untuk berpikir secara mendalam.</span></span></p>\r\n', 'flaticon-books', 'Introvert Intuition (li), Observer & Theorist', 'Information Job (tugas atau pekerjaan yang berhubungan informasi, konsep, teori, perhitungan dan pengolahan data)', '- Thinking Skill (Kemampuan berpikir, analisa dan konseptual)\r\n- Defining Problems (Mampu menetapkan dan menjelaskan suatu permasalahan)', '?	Kekuatan terbesar terletak pada kemampuan pemahaman terhadap berbagai sajian informasi dan data\r\n?	Mampu mengembangkan sebuah konsep teori dan membuat pemetaan konsep\r\n?	Mampu merangkum sebuah informasi menjadi format yang logis, singkat dan jelas\r\n?	Cenderung teoritis, konseptual, berpikir objektif, analitis dan sistemik\r\n?	Pendekatan terhadap masalah mengedepankan logika\r\n?	Memahami masalah terlebih dahulu sebelum melakukan tindakan (action)\r\n?	Memiliki kepribadian yang disiplin, rapi dan teratur\r\n?	Tertarik untuk menemukan jawaban dari setiap pertanyaan dalam pikirannya\r\n', '?	Cenderung rendah pada kemampuan membangun hubungan (oranglain)\r\n?	Kaku dan perfeksionis\r\n?	Tidak menyukai ambiguitas dan subjektivitas\r\n', 'Cenderung belajar dengan pertanyaan “Apa/apakah (What)”, sehingga cara belajar yang efektif untuk gaya belajar divergen adalah melalui proses memahami (understanding), membuat perencanaan (planing), menyusun strategi (strategy) dan mind mapping.', 'Dalam menghadapi gaya belajar asimilasi, guru sebaiknya berperan sebagai ahli (expert). Metode mengajar yang cocok untuk diterapkan diantaranya studi kasus dan eksperimen.', '2019-12-28 12:17:42'),
(3, 'Kovergen', 'Thinker / Pragmatis', '<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Gaya belajar <em>converger </em>merupakan kombinasi dari <em>Abstract<em> </em>Conceptualization </em>dan <em>Active Experimentation</em><em> </em>(<em>thinking and doing</em>), yaitu gaya belajar dengan membentuk pengalaman melalui konseptualisasi abstrak dan mentransformasi ke dalam eksperimentasi aktif. Gaya belajar ini lebih tertarik untuk mencoba ide, teori, dan teknik untuk melihat apakah mereka berhasil dalam mempraktekkannya. Mereka secara positif mencari ide-ide baru dan mengambil kesempatan pertama untuk bereksperimen dengan aplikasi. Mereka adalah jenis orang yang penuh dengan ide-ide baru yang ingin mereka coba di dunia nyata atau di lapangan. Mereka suka melanjutkan hal-hal baru dan bertindak cepat dan percaya diri pada ide-ide mereka sendiri.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Individu dengan tipe konverger unggul dalam menemukan fungsi praktis dari berbagai ide dan teori. Individu biasanya mempunyai kemampuan yang baik dalam pemecahan masalah, pengambilan keputusan, cenderung lebih menyukai tugas-tugas teknis (aplikatif) daripada masalah sosial dan hubungan antar pribadi. Mereka pada dasarnya praktis, orang yang suka membuat keputusan secara mandiri dan menyelesaikan masalahnya tanpa perlu bantuan dari oranglain.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Siswa dengan tipe gaya belajar konverger biasanya lebih banyak bertanya &ldquo;Bagaimana (<em>How</em>)&rdquo; dalam aktivitas belajarnya. Ia cenderung melakukan eksperimen dengan ide baru, simulasi, dan aplikasi praktis.</span></span></p>\r\n', 'flaticon-exam', 'Ekstrover Thinking (Et), Thinker & Pragmatis', 'Technical Job (tugas atau pekerjaan yang bersifat teknis, aplikatif dan memiliki fungsi praktis)', '?	Decision Skill (Kemampuan dalam mengambil keputusan)\r\n?	Solving Problems (Mampu menyelesaikan suatu permasalahan)\r\n', '?	Kekuatan terbesar terletak pada kemampuan dalam mengambil keputusan dan menyelesaikan masalah\r\n?	Unggul dalam membuat fungsi praktis sebuah ide\r\n?	Menyukai pekerjaan teknis, aplikatif dan praktis\r\n?	Lebih senang dengan aktivitas lapangan, praktek\r\n?	Tertarik untuk menguji atau mencoba hal-hal baru\r\n?	Menyukai hal-hal yang sederhana\r\n?	Realistis\r\n?	Berfokus pada solusi (Solutif)\r\n', '?	Cenderung rendah pada kemampuan membangun hubungan (oranglain)\r\n?	Kurang tertarik pada hal-hal yang teoritis dan konseptual\r\n?	Cenderung tidak menyukai forum diskusi, tukar pikiran dan diskusi\r\n?	Tidak menyukai ide atau solusi tanpa adanya aplikasi/penerapan yang jelas\r\n', 'Cenderung belajar dengan pertanyaan “Bagaimana (How)”, sehingga cara belajar yang efektif untuk gaya belajar kovergen adalah melalui proses menganalisis (analysis), berbuat (action), praktis (practical) dan teknis (technical).', 'Dalam menghadapi gaya belajar divergen, guru sebaiknya berperan sebagai pelatih (choach), dengan menyediakan praktik terbimbing dan memberikan umpan balik yang tepat. Metode mengajar yang cocok untuk diterapkan diantaranya praktek lapangan, bermain peran, simulasi, studi kasus dan eksperimen.', '2019-12-28 12:21:30'),
(4, 'Akomodasi', 'Doer / Theorist', '<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:black\">Gaya belajar akomodator merupakan </span>Kombinasi dari <em>Active Experimentation </em>dan <em>Concrete<em> </em>experience </em>(<em>doing and feeling</em>), <span style=\"color:black\">yaitu gaya belajar yang menafsirkan</span> <span style=\"color:black\">pengalaman melalui menghayati sendiri secara konkret dan</span> <span style=\"color:black\">mentransformasi pengalamannya ke eksperimentasi aktif. Individu</span> <span style=\"color:black\">dengan gaya belajar akomodator memiliki kemampuan belajar yang</span> <span style=\"color:black\">baik dari hasil pengalaman nyata yang dilakukannya sendiri. Mampu membuat rencana dan melibatkan diri sepenuhnya dalam berbagai pengalaman</span> <span style=\"color:black\">baru yang menantang. Sangat menikmati apa yang dilakukannya saat ini dan senang melakukannya dengan mengalami atau melalui pengalaman langsung. Mereka berpikiran terbuka, tidak skeptis, dan cenderung membuat mereka antusias tentang sesuatu yang baru. Cenderung bertindak terlebih dahulu dan mempertimbangkan konsekuensinya sesudahnya. Hari-hari mereka dipenuhi dengan aktivitas. Begitu kegembiraan dari satu aktivitas telah selesai, mereka akan sibuk mencari kesenangan atau aktivitas yang lainnya. Mereka cenderung berkembang pada tantangan dan pengalaman baru tetapi bosan dengan implementasi dan konsolidasi jangka panjang.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Individu dengan gaya belajar ini mengutamakan pada eksplorasi pengalaman-pengalaman yang menantang. Dalam mengatasi masalah, mereka belajar pada orang yang memiliki informasi dan wawasan yang luas. Individu dengan tipe ini menyukai menyelesaikan tugas bersama?sama dengan orang lain, baik dalam merencanakan tujuan, menyelesaikan tugas lapangan dan mencoba cara yang unik dan kreatif dalam menyelesaikan tugas.<em> </em><span style=\"color:black\">Ia sangat suka mengambil tindakan dan melibatkan diri dalam situasi baru yang menantang. Saat menghadapi persoalan, ia lebih mengandalkan informasi dari orang lain daripada analisis logis dan teknikalnya sendiri.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:black\">Siswa cenderung untuk bertindak berdasarkan</span> <span style=\"color:black\">intuisi/dorongan hati daripada berdasarkan analisis logis, sering</span> <span style=\"color:black\">menggunakan <em>trial and error </em>dalam memecahkan masalah, kurang</span> <span style=\"color:black\">sabar dan ingin segera bertindak. Bila ada teori yang tidak sesuai</span> <span style=\"color:black\">dengan fakta cenderung untuk mengabaikannya. Siswa dengan tipe gaya belajar akomodator biasanya lebih banyak</span> <span style=\"color:black\">bertanya &ldquo;Bagaimana Jika (<em>What If</em>)&rdquo;. Dalam situasi belajar formal, ia lebih suka bekerja dengan orang lain untuk menyelesaikan tugas, menetapkan tujuan, melakukan kerja lapangan, serta menguji bermacam-macam pemecahan masalahan.</span></span></span></p>\r\n', 'flaticon-exam', 'Ekstrover Sensation (Es), Doer & Activist', 'Executive Job (tugas atau pekerjaan yang berhubungan dengan pelaksanaan/aplikasi, kerja lapangan, outdoor ataupun tugas yang membutuhkan tindakan dan pengalaman langsung)', '?	Action Skill (Kemampuan untuk bertindak dan melibatkan diri)\r\n?	Solving Problems (Mampu menyelesaikan suatu permasalahan)\r\n', '?	Kelebihan siswa dengan tipe ini yaitu memiliki kemampuan belajar yang baik dari hasil pengalaman nyata yang dilakukannya sendiri\r\n?	Individu ini memiliki keunggulan untuk belajar dari pengalaman langsung\r\n?	Kekuatan terbesar terletak pada kemampuan intuitif dan adaptif\r\n?	Berani mengambil resiko, menyukai hal-hal baru dan tantangan\r\n?	Cenderung mampu melakukan hampir semua hal\r\n?	Berpikiran terbuka dan fleksibel\r\n?	Senang mencoba berbagai hal yang baru dan menantang\r\n?	Kemampuan dalam memimpin (leading)\r\n?	Kemampuan dalam membangun hubungan persuasif dengan oranglain\r\n?	Kemampuan melibatkan oranglain dalam menyelesaikan masalah\r\n?	Cenderung menyukai bekerja bersama dengan oranglain dan bertukar pikiran\r\n?	Mampu mengambil tindakan segera dan secara nyata\r\n?	Optimis dan bergerak ke arah perubahan\r\n?	Berani dalam mengambil resiko\r\n', '?	Cenderung mengandalkan oranglain dalam hal informasi daripada melakukan analisis sendiri\r\n?	Analisis logis rendah\r\n?	Cenderung bertindak tanpa memikirkan konsekuensinya\r\n?	Bergegas bertindak tanpa ada persiapan\r\n?	Cenderung mudah bosan pad hal-hal yang membutuhkan waktu lama\r\n', 'Cenderung belajar dengan pertanyaan “Bagaimana jika (How if)”, sehingga cara belajar yang efektif untuk gaya belajar akomodator adalah melalui proses inisiatif (initiative), intuisi (Intuitif), adaptasi (adaptable), praktek (practical), kerja tim (team work), brainstorming dan trial and error.', 'Dalam menghadapi gaya belajar akomodator, Peran dan fungsi guru yang cocok untuk menghadapi siswa tipe ini adalah berusaha menghadapkan siswa pada pertanyaan-pertanyaan terbuka “openended questions”, mengoptimalkan siswa untuk berkesempatan mempelajari dan menggali sesuatu sesuai pilihannya. Penggunaan Metode Problem-Based Learning cocok untuk siswa tipe gaya belajar ini.', '2019-12-28 12:23:57');

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
  `kunciF` int(11) NOT NULL,
  `kunciO` int(11) NOT NULL,
  `kunciD` int(11) NOT NULL,
  `kunciT` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
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
(58, 47, 47, 50, 62, 61, '2019-12-23 15:02:26', '2019-12-23 15:02:26'),
(59, 38, 38, 65, 55, 62, '2019-12-24 10:02:46', '2019-12-24 10:02:46'),
(60, 43, 43, 51, 61, 65, '2019-12-26 14:21:48', '2019-12-26 14:21:48'),
(61, 43, 43, 56, 64, 57, '2019-12-26 14:41:35', '2019-12-26 14:41:35'),
(62, 48, 48, 58, 57, 57, '2019-12-26 16:46:39', '2019-12-26 16:46:39'),
(63, 39, 39, 54, 68, 59, '2019-12-27 09:20:40', '2019-12-27 09:20:40'),
(64, 50, 50, 56, 54, 60, '2019-12-27 09:33:33', '2019-12-27 09:33:33'),
(65, 41, 41, 55, 71, 53, '2019-12-27 09:46:04', '2019-12-27 09:46:04'),
(66, 49, 49, 63, 45, 63, '2019-12-28 12:55:52', '2019-12-28 12:55:52'),
(67, 48, 48, 68, 55, 49, '2019-12-28 13:02:27', '2019-12-28 13:02:27'),
(68, 50, 50, 61, 64, 45, '2019-12-28 13:37:13', '2019-12-28 13:37:13'),
(69, 63, 63, 48, 54, 55, '2019-12-29 09:44:30', '2019-12-29 09:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `kunci`
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
-- Dumping data for table `kunci`
--

INSERT INTO `kunci` (`jawaban`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`) VALUES
('D', 'B', 'D', 'B', 'C', 'C', 'A', 'C', 'B', 'C', 'A', 'B', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D'),
('F', 'C', 'B', 'C', 'A', 'A', 'D', 'B', 'D', 'B', 'D', 'D', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
('O', 'A', 'A', 'A', 'D', 'B', 'C', 'D', 'A', 'D', 'C', 'C', 'C', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B'),
('T', 'D', 'C', 'D', 'B', 'D', 'B', 'A', 'C', 'A', 'B', 'A', 'A', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `email`, `password`, `nis`, `asal_sekolah`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `foto`, `date_created`) VALUES
(4, 'Lalu Abdurrahman', 'lalurahman@gmail.com', '$2y$10$vwlLbfpPTazdce9FhdBLBOX45jxfRf/KdFA5m8ymk2dTBrple9LJq', '123', 'PI', '085256999428', 'Makassar', '2019-11-06', 'deafult.jpg', '2019-11-11 15:17:47'),
(5, 'lalu', 'lalu@gmail.com', '$2y$10$k.O59TW/Qypq0aIJi65Fmu93o2jyhFYu.E.qRCmOkGP1SxwMndNwm', '123', 'Pondok Informatika', '085256999428', 'Makassar', '2019-10-27', 'deafult.jpg', '2019-11-24 06:45:39'),
(6, 'sakura', 'sakura@gmail.com', '$2y$10$ddE2Upj9Z22cIZ56Wj9lY.u2EGS/IiKczySMfeO3l/sY1JfmSs2/u', '111232', 'Pondok Informatika', '085256999428', 'Makassar', '2019-12-08', 'deafult.jpg', '2019-12-26 12:12:37'),
(7, 'sasuke', 'sasuke@gmail.com', '$2y$10$f.Qa/mZIdf.Y7gPZegxfBuW.8Dl2GdElUzV.J.mQCc4QTq6u.s77S', '123123', 'pondok informatika', '01972387', 'makassar', '2019-12-03', 'deafult.jpg', '0000-00-00 00:00:00'),
(8, 'Ramli', 'conselor12.bk@gmail.com', '$2y$10$4QdQQYzCxKbPhp23BpTN5u0/FtRWLyeiALMb/lHRnZ89P9shmrtza', '', '', '', '', '', 'deafult.jpg', '0000-00-00 00:00:00'),
(9, 'Baba', 'conselor12.bk@gmail.com', '$2y$10$dRh//krR/tyUJaZNJZUR/OEiW8hRhRWFhn52JbErilk7Tgwo//lW.', '123', 'MAN MAN', '085240572160', 'BONE', '1999-12-11', 'deafult.jpg', '0000-00-00 00:00:00'),
(10, 'Baba', 'ramlippbfipunm@gmail.com', '$2y$10$GB2ddehsi6ALYRln8pBznOHs23u63zE2sgn9luIx.ImbzVkBj4Zr.', '123', 'MAn suka suka', '0817414', 'BOne', '2010-11-11', 'deafult.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `nama_slider` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `nama_slider`, `text`, `gambar`, `status`) VALUES
(2, 'Slider 2', 'Gaya Belajar itu Unik. Penasaran ? Kenali Gaya Belajarmu Disini!', 'pexels-photo-256468.jpeg', ''),
(3, 'Slider 3', 'Gaya Belajar itu Unik. Penasaran ? Kenali Gaya Belajarmu Disini!', 'dawn-1840298_1920.jpg', 'active'),
(4, 'Slider 1', 'Gaya Belajar itu Unik. Penasaran ? Kenali Gaya Belajarmu Disini!', 'notebook-336634_1920.jpg', '');

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
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `email_tamu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Lalu Abdurrahman', 'Mahasiswa', 'sangat membantu dalam mengenali karakteristik gaya belajar saya', 'testimoni.jpg', '2019-12-28 12:28:43'),
(2, 'Harry Helvizar', 'Siswa', 'aplikasinya bagus sekali, cocok untuk digunakan, sangat membantu dalam mengenalkan karakteristik gaya belajar', 'testimoni.jpg', '2019-12-28 12:30:30'),
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
-- Indexes for table `kunci`
--
ALTER TABLE `kunci`
  ADD PRIMARY KEY (`jawaban`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

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
  MODIFY `id_gaya_belajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;