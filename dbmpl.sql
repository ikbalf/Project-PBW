-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 08, 2023 at 04:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('ikbal', 'ikbal'),
('mpl', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int NOT NULL,
  `username` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `judul_agenda` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `isi_agenda` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal_agenda` date NOT NULL,
  `gambar_agenda` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `username`, `judul_agenda`, `isi_agenda`, `tanggal_agenda`, `gambar_agenda`) VALUES
(7, 'admin', 'BTR vs RRQ', '', '2023-11-23', 'jadwal3.jpg'),
(5, 'admin', 'RRQ vs Evos', '', '2023-11-23', 'jadwal2.jpg'),
(4, 'admin', 'Onic vs Alter Ego', '', '2023-11-23', 'jadwal1.jpg'),
(8, 'admin', 'Onic vs BTR', '', '2023-11-23', 'jadwal4.jpg'),
(9, 'admin', 'Onic vs Geek', '', '2023-11-23', 'jadwal5.jpg'),
(10, 'admin', 'Alter Ego vs Evos', '', '2023-11-23', 'jadwal6.jpg'),
(14, 'admin', 'Onic vs Evos', '', '2023-11-23', 'jadwal8.jpeg'),
(16, 'admin', 'Alter Ego vs BTR', '', '2023-11-23', 'jadwal6.jpeg'),
(11, 'admin', 'BTR vs Geek', '', '2023-11-23', 'jadwal9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int NOT NULL,
  `username` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `kategori` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `headline` enum('Y','T') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `username`, `kategori`, `judul`, `isi`, `tanggal`, `jam`, `gambar`, `headline`) VALUES
(8, 'admin', 'berita', 'BTR Alpha Sabet Juara Pertama H3RO Esports 4.0', '\r\nBigetron (BTR) Alpha berhasil meraih juara pertama di ajang H3ro Esport 4.0 Mobile Legend. Babak kualifikasi berlangsung selama empat hari dan tim BTR berhasil mempertahankan posisi bagusnya hingga menjadi juara di turnamen tersebut.', '2023-11-23', '16:34:00', 'btr.jpeg', 'Y'),
(2, 'admin', 'berita', 'Rotasi early game MLBB terbaru', 'Rotasi di awal permainan MLBB sangatlah penting. Banyak metode yang berubah seiring perubahan META. Sejak META 1-2-2 aktif hingga saat ini, peran Jungler dan rotasi early game selalu mendapat perhatian. Yang paling sering terjadi pada rotasi early game sebenarnya para laner harus tetap berada di jalurnya masing-masing, namun sebelumnya mereka yang paling dekat dengan Jungler support yang akan diserang terlebih dahulu akan sedikit membantu dalam kill, Jungle Spear untuk mempercepat Jungler ', '2023-11-23', '21:07:00', 'rotasi.jpg', 'Y'),
(3, 'admin', 'berita', 'ONIC Esports juara MSC 2023!', '\r\nONIC Esports mengukir sejarah di dunia Mobile Legends setelah menjuarai MSC 2023.Rekor tersebut menjadi milik tim eSports Mobile Legends yang berhasil menjuarai ajang MSC sebanyak dua kali. Sebelum menjuarai MSC 2023, ONIC Esports sempat menjadi juara pada tahun 2019. Saat itu, ONIC Esports meraih kemenangan pertamanya di MSC 2019 ketika skuadnya masih diperkuat Antimage, Udil, Drian, Sasa, dan Psychoo yang berjuluk Kage. Dijuluki Kage karena saat itu ONIC Esports belum pernah mengalami kekalahan. pada turnamen MPL ID Season 3', '2023-11-23', '14:23:00', 'onicmsc.jpg', 'Y'),
(1, 'admin', 'berita', 'Donkey comeback! Reuni kecil WORLD', 'Donkey veteran roaming kembali ke kancah kompetitif MLBB untuk bersaing di National Esports League 2023 bersama tim BULLS GPX.Donkey kembali bersama M \"Wann\" Ridwan, veteran lain yang bermain di WORLD saat dia masih menjadi anggota EVOS Legends. Donkey veteran roaming kembali ke kancah kompetitif MLBB untuk bersaing di National Esports League 2023 bersama tim BULLS GPX.Donkey kembali bersama M \"Wann\" Ridwan, veteran lain yang bermain di WORLD saat dia masih menjadi anggota EVOS Legends.', '2023-11-23', '17:30:00', 'donkey.jpeg', 'Y'),
(10, 'admin', 'berita', 'DEWA United Watt pamer skill tingkat tinggi', 'makin tua makin jadi\r\nDEWA United tidak diunggulkan dalam pertemuan dengan Geek Fam ID.Namun Watt punya pendapat berbeda, aksinya yang memukau menghilangkan keraguan terhadap timnya.Geek Fam ID saat ini sedang melaju ke arah positif setelah tak terkalahkan dalam 5 laga terakhirnya. Juara bertahan musim lalu, ONIC Esports, malah dilibas dengan skor telak 2-0.Menghadapi rookie MPL ID S12, Baloyskie cs diperkirakan akan melanjutkan rekor tak terkalahkannya di paruh kedua musim ini.ID sangat membutuhkan beberapa hal positif dalam pertandingan ini. Laga ini bertujuan untuk memperbesar harapan mereka untuk lolos ke babak play-off grup yang lebih tinggi.', '2023-11-23', '16:18:00', 'dewa.jpg', 'Y'),
(11, 'admin', 'berita', ' Evos Icon Juara Kompetisi Mobile Legends WCG 2023 Korea Selatan', '\r\nEvos Icon dengan gemilang menjuarai turnamen internasional tahunan yang berlangsung di Busan, Korea Selatan ini dengan gemilang setelah berhasil mengalahkan tim Filipina Echo Proud dengan skor 3-2. Sebagai pemenang, tim yang dipimpin oleh \"Vaanstrong\", \"Sutsujin\", \"Veldora\", \"Douma\", Cr1te\", \"Claww\", \"Brigm\" dan \"Caleb\" memenangkan hadiah sebesar 20.000 dollar AS (sekitar Rp 301 juta ).Ini Tim yang berada satu level di bawah Evos Legends ini pun mendapatkan predikat sebagai tim Indonesia pertama yang berhasil meraih gelar juara Mobile Legends pada seri turnamen WCG', '2023-11-23', '23:53:00', 'evos.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id_profil` int NOT NULL,
  `judul_profil` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `isi_profil` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `gambar_profil` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_profil`, `judul_profil`, `isi_profil`, `gambar_profil`) VALUES
(1, 'Alter Ego', 'Alter Ego adalah salah satu tim eSport terbesar di  dan Asia Tenggara. Alter Ego Esports menjadi salah satu penantang gelar di setiap turnamen cabang game.\r\n\r\nDelwyn Sukamto, merupakan orang yang menjadi aktor terbentuknya Alter Ego Esports yang kini menjabat sebagai CEO dari tim esports tersebut.  resmi berdiri pada awal tahun 2018 dan memulai perjalanan industri kreatif di bidang esports.\r\nDengan ambisinya seorang Eldwyn Sukamto, membuat Alter Ego Esports seperti kehausan akan prestasi dan semakin besar dalam menginvasi setiap . Figur dirinya memiliki influence sangat tinggi tak hanya untuk Alter Ego Esports saja, namun untuk semua orang.\r\n\r\nDikarenakan tren positif tersebut, tim eSport ini memiliki citra yang cukup baik di Indonesia dan sudah memiliki fans dari berbagai negara. Alter Ego  lebih sering dijuluki sebagai kuda hitam, karena memiliki jalan sendiri untuk menantang para juara untuk memenangkan setiap turnamen. Info Sport akan jelaskan Alter Ego Esport adalah sebagai berikut.', 'aelogo.png'),
(5, 'Geek Fam', 'Geek Fam didirikan pada tahun 2016 oleh Joseph Yeoh dan Lim Keat Kuang, dua pengusaha muda yang memiliki visi untuk mengembangkan industri esports di kawasan ini.\r\n\r\nAwal mula Geek Fam dimulai dari divisi Dota 2, yang berhasil menembus turnamen internasional seperti ESL One Genting, The Summit 7, The Kyiv Major, dan The International.\r\n\r\nTim Dota 2 Geek Fam terdiri dari beberapa pemain berbakat asal Malaysia, Filipina, dan Indonesia, seperti Raven, ChYuan, Whitemon, Xepher, dan Kuku.', 'geeklogo.png'),
(6, 'Dewa United', 'Dewa United Esports adalah tim esports profesional Indonesia yang berbasis di Tangerang dan merupakan salah satu divisi dari tim olahraga Dewa United yang didirikan oleh Tommy Hermawan Lo dan David sebagai CEO. Diperkenalkan pada 18 Februari 2021, Dewa United Esports merupakan salah satu tim esports pertama yang memiliki banyak divisi di Indonesia. Dewa United Esports terus membangun dan memperkuat ekosistem esports baik di skala nasional maupun internasional.', 'Dewa.png'),
(11, 'Evos', 'EVOS Esports adalah organisasi olahraga-el (esport) profesional yang berbasis di Jakarta, Indonesia yang didirikan oleh Ivan Yeo dan dipegang kendali oleh Bisma Aditya Putra sebagai Chief Executive Officer (CEO) di Indonesia.[1] [2] Juga pernah memiliki tim kompetitif di ranah Mobile Legends: Bang Bang, Arena of Valor, Free Fire, League of Legends: Wild Rift, PUBG Mobile.', 'evoslogo.png'),
(12, 'Aura Fire', 'Sejarah Aura Fire Aura Fire sendiri dibentuk pada tanggal 2 Agustus 2018 dikutip dari liquipedia. Organisasi Aura sendiri berdiri di tahun yang sama tepatnya bulan Juni. Sejak saat itu, Aura mengembangkan beberapa divisi salah satunya adalah Mobile Legends.', 'aura.png'),
(13, 'Bigetron Alpha', 'Bigetron Esport saat ini memiliki tim mobile legends yang terdapat di dua negara, Indonesia Dan Brazil. Bigetron esport memulai perjalanannya pada MPL Indonesia S1 dengan nama Bigetron Player Kill dan harus puas pada posisi 4 setelah dipulangkan RRQ Hoshi. Dan pada pagelaran MPL Indonesia S5 Bigetron Esport mengganti nama menjadi Bigetron Alpha. Setelah bermusim musim dilalui akhirnya pada MPL Indonesia S7 Bigetron Alpha berhasil memantapkan dirinya untuk melaju ke babak grand final melawan sang macan putih EVOS Legends dan harus puas di posisi dua dengan skor 2-4. Pada piala presiden 2022 Bigetron Alpha keluar sebagain juara dan melaju untuk pelatnas IESF World Championship 14th dan puas pada posisi runner up setelah dikalahkan EVOS Esports dengan skor 2-0 dan 2-1. Pada turnament H3R0 Esport 4.0 Bigetron Alpha sebagai juara melaju untuk kembali mengikuti seleknas IESF World Championship 15th dan berhasil membalaskan dendamnya setelah memulangkan EVOS ICON dengan skor 4-0', 'btrlogo.png'),
(7, 'Rebellion', 'Rebellion Esports atau disingkat dengan RBL adalah organisasi olahraga elektronik asal Indonesia yang didirikan oleh Jonathan Yuwono.[1]', 'rbl.png'),
(9, 'Onic', 'ONIC Esports berdiri pada tanggal 26 Juli 2018. Pada awalnya ONIC Esports hanya ada tim Mobile Legends untuk mengikuti MPL ID season 2.[1]\r\n\r\nSeiring dengan melesatnya popularitas tim ONIC Esports, ONIC pun mengumumkan tim onic esports di divisi game lain seperti Free Fire,[2] PUBG Mobile,[3] dan beberapa game e-sport lainnya', 'oniclogo.png'),
(10, 'RRQ', 'Rex Regum Qeon atau yang lebih dikenal dengan RRQ[1] merupakan klub e-sports asal Indonesia yang menaungi 6 divisi game, yaitu Mobile Legends: Bang Bang, PUBG Mobile, Free Fire, Valorant, dan Pokémon Unite. Didirikan sejak 2013, Rex Regum Qeon telah memenangkan lebih dari 200 turnamen esports nasional maupun internasional.[2]\r\n\r\nNama Rex Regum berasal dari bahasa Latin yang berarti ‘raja dari segala raja’ atau ‘king of kings’, sedangkan Qeon merupakan nama in game Presiden Direktur Team RRQ, Riki K. Suliawan.[3]', 'rrqlogo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id_profil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
