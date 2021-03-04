-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 03:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewacoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$pSJK5YrotnlqiajGnQFwOu4Vay7gmXAQkWXSuzB1mVGrbZNr2lAKO', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `deskripsi`, `id_user`, `banner`, `created_at`) VALUES
(14, '5 Manfaat Ampas Kopi yang Bisa Kamu Gunakan di Rum', '<div class=\"vc_row wpb_row vc_row-fluid\" style=\"box-sizing: inherit; margin-left: -15px; margin-right: -15px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\" style=\"box-sizing: border-box; width: 849px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\">\r\n<div class=\"vc_column-inner\" style=\"box-sizing: border-box; padding-left: 15px; padding-right: 15px; width: 849px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit;\">\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<p style=\"box-sizing: inherit; margin: 0px;\"><span style=\"box-sizing: inherit; margin-bottom: 0px;\">Berikut 5 tips memanfaatkan ampas kopi di kehidupan sehari-hari:</span></p>\r\n<div id=\"gtx-trans\" style=\"box-sizing: inherit; margin-bottom: 0px; position: absolute; left: -7px; top: 100.422px;\">\r\n<div class=\"gtx-trans-icon\" style=\"box-sizing: inherit; margin-bottom: 0px;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\" style=\"box-sizing: inherit; margin-left: -15px; margin-right: -15px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\" style=\"box-sizing: border-box; width: 849px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\">\r\n<div class=\"vc_column-inner\" style=\"box-sizing: border-box; padding-left: 15px; padding-right: 15px; width: 849px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit;\">\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">1. Menghilangkan Bau Tidak Sedap</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Salah satu manfaat ampas kopi adalah menghilangkan bau tidak sedap yang ada di rumah. Nah biasanya freezer lemari es sering menjadi tempat yang dihinggapi bau tidak sedap. Maka tidak ada salahnya kamu menggunakan ampas kopi untuk menghilangkan bau tidak sedap tersebut.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Kamu bisa meletakkan ampas kopi di sebuah wadah yang tahan terhadap suhu dingin.&nbsp; Banyaknya ampas kopi bisa disesuaikan dengan kebutuhan kamu. Biasanya bau tidak sedap tersebut akan menghilang dalam waktu kurang dari sehari.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Selain di freezer lemari es, kamar mandi juga menjadi tempat yang terkadang menimbulkan bau tidak sedap. Kamu bisa menyiapkan sehelai kain kemudian diisi dengan ampas kopi secukupnya, dan gantung di kamar mandi. Voila, bau tidak sedap di kamar mandi akan hilang.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">&nbsp;</p>\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">2. Membersihkan Debu di dalam Rumah</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Pernahkah kamu merasakan kesulitan ketika menyapu debu di dalam rumah, karena debu tersebut kerap berterbangan? Nah, ampas kopi bisa membantu kamu. Ternyata ampas kopi yang sudah dikeringkan bisa membantu kita untuk tetap menjaga agar debu tidak berterbangan.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Caranya juga cukup mudah, taburkan ampas kopi yang sudah dikeringkan di sudut-sudut rumah yang berdebu, maka debu tersebut akan lebih mudah disapu karena tidak akan berterbangan. Yuk kita coba.</p>\r\n<div class=\"vc_row wpb_row vc_row-fluid\" style=\"box-sizing: inherit; margin-left: -15px; margin-right: -15px;\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\" style=\"box-sizing: border-box; width: 849px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\">\r\n<div class=\"vc_column-inner\" style=\"box-sizing: border-box; padding-left: 15px; padding-right: 15px; width: 849px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit;\">\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">3. Membasmi Semut</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Manfaat ampas kopi ketiga yaitu ampas kopi bisa dipakai untuk membasmi semut. Tidak percaya?</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Semut sering kali muncul di sisi dapur atau di sela-sela meja makan dan alat dapur dikarenakan adanya sisa makanan. Dari pada kamu menggunakan cairan pembersih serangga yang mengandung bahan kimia, kenapa tidak memanfaatkan ampas kopi?</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Caranya cukup dengan menaburkan ampas kopi di sisi atau di sela-sela dapur dan meja makan yang sering didatangi semut, maka semut akan &ldquo;malas&rdquo; untuk datang lagi. Ternyata semut tidak menyukai bau kopi yang cukup menyengat.<br style=\"box-sizing: inherit; margin-bottom: 0px;\" />Cukup mudah bukan?</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\" style=\"box-sizing: inherit; margin-left: -15px; margin-right: -15px;\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\" style=\"box-sizing: border-box; width: 849px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\">\r\n<div class=\"vc_column-inner\" style=\"box-sizing: border-box; padding-left: 15px; padding-right: 15px; width: 849px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit;\">\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">4. Menghilangkan Goresan pada Kayu</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Punya perabotan rumah tangga dari kayu tapi sudah banyak tergores baik sengaja dan tidak sengaja? Coba hilangkan goresan tersebut menggunakan ampas kopi. Yap, manfaat ampas kopi selanjutnya ialah menghilangkan goresan pada kayu.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Bagaimana caranya? Gunakan ampas kopi sisa minum kopi di pagi hari, siapkan&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">cotton bud</em>&nbsp;sebagai alat bantu untuk mengoleskan ampas kopi pada perabotan kayu. Bubuhkan ampas kopi pada bagian perabot kayu yang terkena goresan, lalu biarkan selama kurang lebih 10 menit, kemudian bersihkan ampas kopi dengan kain bersih. Dan lihat hasilnya, apakah goresannya hilang?</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Jika goresannya belum hilang, kamu bisa mengulangi langkah yang tadi sekali lagi. Perlu diingat goresan yang bisa dihilangkan oleh cara ini adalah goresan yang belum terlalu dalam.</p>\r\n</div>\r\n</div>\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">5. Membersihkan Alat Dapur</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Manfaat ampas kopi kelima adalah bisa dipakai untuk membersihkan alat dapur. Pernah merasakan kesulitan ketika membersihkan noda membandel pada alat dapur di rumah kamu? Nah tidak ada salahnya kamu mencoba menggunakan ampas kopi untuk membersihkannya.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Bagaimana caranya? Kamu bisa menggosokkan spons cucian piring yang sudah dibubuhi ampas kopi ke noda membandel tersebut. Tekstur sedikit kasar yang ada pada ampas kopi itu akan membantu membersihkan noda membandel tersebut.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 1, '207905107160403d9794f0b.jpg', '2021-03-04'),
(15, 'Ini Dia Keunggulan Kopi Robusta yang Wajib Kamu Ke', '<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h2 style=\"box-sizing: inherit; clear: both; margin: 25px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 28px; font-family: Montserrat;\">1. Karakteristik Khas Kopi Robusta</h2>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Tak kenal maka tak sayang. Jika kamu ingin membudidayakannya, setidaknya harus memahami keunggulan dan karakteristik khas tanaman kopi robusta.</p>\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">Berikut ini beberapa keunggulan kopi robusta:</h3>\r\n<ul style=\"box-sizing: inherit; margin: 0px; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"box-sizing: inherit;\">Tanaman kopi robusta relatif lebih tahan terhadap serangan hama dan penyakit, antara lain karat daun (HV).</li>\r\n<li style=\"box-sizing: inherit;\">Kopi robusta bisa ditanam di dataran rendah, dengan produktivitas lebih baik daripada arabika. Bahkan arabika sulit tumbuh optimal di dataran rendah.</li>\r\n<li style=\"box-sizing: inherit;\">Tanaman kopi robusta lebih cepat panen. Mulai berbunga umur 2 tahun, mulai berbuah umur 2,5 tahun. Kopi arabika mulai berbuah umur 3 &ndash; 4 tahun.</li>\r\n<li style=\"box-sizing: inherit;\">Produktivitas / hasil panen juga lebih tinggi: 900 &ndash;1.300 kg / ha / tahun. Jika dipelihara intensif, produktivitasnya bisa meningkat hingga 2.000 kg / ha /tahun.</li>\r\n<li style=\"box-sizing: inherit;\">Rendemen (persentase berat produk akhir dan hasil panen) kopi robusta sekitar 22%. Ini juga lebih tinggi daripada arabika (18 &ndash; 20%).Jika ingin menanam, ada beberapa karakteristik tanaman kopi robusta yang perlu diperhatikan:</li>\r\n<li style=\"box-sizing: inherit;\">Tanaman kopi robusta memiliki perakaran dangkal. Dibutuhkan tanah subur serta kaya kandungan organik.</li>\r\n<li style=\"box-sizing: inherit;\">Kopi robusta sangat cocok ditanam di daerah tropis-basah, pada tanah gembur, dengan derajat keasaman (pH) sekitar 4,5 &ndash; 6,5.</li>\r\n<li style=\"box-sizing: inherit;\">Meski bisa ditanam di dataran rendah, kopi robusta bisa tumbuh optimal jika ditanam di daerah dengan ketinggian 400 &ndash; 800 meter dari permukaan laut.</li>\r\n<li style=\"box-sizing: inherit;\">Suhu optimal untuk perkembangan tanaman sekitar 24-30 derajat Celcius, dengan curah hujan 2.000-3.000 mm per tahun.</li>\r\n<li style=\"box-sizing: inherit;\">Tanaman cukup sensitif terhadap kekeringan.</li>\r\n<li style=\"box-sizing: inherit;\">Buah yang masih muda berwarna hijau, setelah masak menjadi merah. Buah yang masak penuh tetap menempel kuat pada tangkainya.</li>\r\n<li style=\"box-sizing: inherit;\">Perawatan kopi robusta juga diimbangi dengan penggunaan&nbsp;<a style=\"box-sizing: inherit; background-color: transparent; outline: 0px; color: #252323; text-decoration-line: none; transition: color 0.5s ease 0s, background-color 0.5s ease 0s; margin-bottom: 0px;\" href=\"https://gdm.id/pupuk-kopi\" target=\"_blank\" rel=\"nofollow noopener noreferrer\">pupuk kopi</a>&nbsp;untuk merangsang pertumbuhan secara maksimal.</li>\r\n<li style=\"box-sizing: inherit; margin-bottom: 0px; list-style-type: none;\">&nbsp;</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h2 style=\"box-sizing: inherit; clear: both; margin: 25px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 28px; font-family: Montserrat;\">2. Cita Rasa Khas Kopi Robusta</h2>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Sebenarnya tidak ada kopi yang rasanya manis. Hampir semua jenis kopi digambarkan dengan cita rasa pahit, dengan tingkat keasaman (acidity) tertentu.<br style=\"box-sizing: inherit; margin-bottom: 0px;\" />Tetapi, bagaimana pahitnya kopi itu berbeda-beda sesuai dengan jenisnya. Begitu pula dengan acidity. Sebagian besar ahli kopi mendefinisikan robusta lebih pahit ketimbang arabika.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Jadi, sepanjang tak berlebihan, masih aman untuk lambung. Untuk menggambarkan cita rasa kopi robusta, kamu perlu mengingat hal-hal berikut ini:<br style=\"box-sizing: inherit;\" />&ndash;&nbsp;<a style=\"box-sizing: inherit; background-color: transparent; outline: 0px; color: #965032; text-decoration-line: none; transition: all 0.2s ease-in 0s; padding-bottom: 1px; border-bottom: 2px solid #d9835f; cursor: pointer;\" href=\"https://kopitem.com/kopi-online/kopi/kopi-robusta-lampung-halokoffi/\">Kopi Lampung</a><br style=\"box-sizing: inherit;\" />&ndash;&nbsp;<a style=\"box-sizing: inherit; background-color: transparent; outline: 0px; color: #965032; text-decoration-line: none; transition: all 0.2s ease-in 0s; margin-bottom: 0px; padding-bottom: 1px; border-bottom: 2px solid #d9835f; cursor: pointer;\" href=\"https://kopitem.com/kopi-online/kopi/kopi-robusta-dampit-northsider-coffee/\">Kopi Dampit</a></p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Masyarakat Indonesia mengenal kopi Lampung sebagai salah satu produk terbaik di negeri ini. Kopi Lampung yang sangat terkenal itu juga termasuk jenis robusta, meski melalui pengolahan pascapanen cukup panjang, sehingga menghasilkan cita rasa yang unik.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Masyarakat Eropa sangat menggemari kopi Dampit, nama salah satu kecamatan di Kabupaten Malang, Jawa Timur.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\"><a style=\"box-sizing: inherit; background-color: transparent; outline: 0px; color: #965032; text-decoration-line: none; transition: all 0.2s ease-in 0s; margin-bottom: 0px; padding-bottom: 1px; border-bottom: 2px solid #d9835f; cursor: pointer;\" href=\"https://kopitem.com/kopi-online/kopi/kopi-robusta-dampit-malang-marones-coffee/\">Kopi Dampit</a>&nbsp;memiliki citarasa seperti cokelat, dengan tingkat kekentalan yang rendah. Ketika diseduh air panas, dan diseruput, tercium aroma khas seperi bau tanah yang unik.</p>\r\n</div>\r\n</div>', 1, '20147190060403e1abedeb.jpg', '2021-03-04'),
(16, 'Mengenal Aneka Varian Espresso', '<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h2 style=\"box-sizing: inherit; clear: both; margin: 25px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 28px; font-family: Montserrat;\">Pengertian Espresso</h2>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><em style=\"box-sizing: inherit;\">Espresso</em>&nbsp;adalah minuman yang dihasilkan dengan mengekstraksi biji kopi menggunakan mesin atau alat&nbsp;<em style=\"box-sizing: inherit;\">brewing</em>&nbsp;kopi manual dengan tekanan sekitar 9 bar. Hasil&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">espresso</em>&nbsp;yang baik biasanya ditandai dengan crema alias lapisan kuning tua di permukaan kopi.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Ada beberapa minuman kopi yang berbahan dasar&nbsp;<em style=\"box-sizing: inherit;\">e</em><em style=\"box-sizing: inherit; margin-bottom: 0px;\">spresso</em>, yaitu :</p>\r\n</div>\r\n</div>\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">1. Espresso Shot</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">a. Single Shot</strong><br style=\"box-sizing: inherit; margin-bottom: 0px;\" />Dibuat tidak lebih dari 30 detik. Biasanya berukuran 25-30 mm.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">b. Double Shot atau Doppio</strong><br style=\"box-sizing: inherit; margin-bottom: 0px;\" />Biasanya berukuran 60 mm.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">c. Ristretto</strong><br style=\"box-sizing: inherit;\" />Ukurannya separuh dari&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">single shot</em>. Ekstraksi tidak lebih dari 20 detik.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">d. Espresso Romano</strong><br style=\"box-sizing: inherit;\" />Satu shot&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">espresso</em>&nbsp;dicampur sedikit gula dan irisan lemon di bibir gelas.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">e. Affogato</strong><br style=\"box-sizing: inherit;\" /><em style=\"box-sizing: inherit; margin-bottom: 0px;\">Espresso</em>&nbsp;yang disiramkan ke atas es krim vanilla.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">f. Guillermo</strong><br style=\"box-sizing: inherit;\" /><em style=\"box-sizing: inherit;\">Espresso</em>&nbsp;yang dicampur dengan irisan lemon. Ada yang menambahkan lemon di permukaan kopi, ada juga yang meletakkannya di dasar gelas sebelum disiram&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">espresso</em>.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">g. Cuban Espresso</strong><br style=\"box-sizing: inherit;\" /><em style=\"box-sizing: inherit; margin-bottom: 0px;\">Espresso</em>&nbsp;yang dicampur dengan demerara (gula cokelat kasar yang diproduksi di Guyana, Amerika Selatan. Seperti namanya, ini minuman favorit di Kuba.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\"><strong style=\"box-sizing: inherit;\">h. Espresso Ice</strong><br style=\"box-sizing: inherit;\" />Es batu yang dimasukkan ke&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">espresso</em>&nbsp;plus tambahan sedikit lemon.</p>\r\n</div>\r\n</div>', 1, '31935764760403ee19383b.jpg', '2021-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `message`, `created_at`) VALUES
(7, 'Made Wahyu Purnama Putra ', 'wahyu@gmail.com', 'kopi mu enak sekali yuks kerja sama aja', '2021-03-03 14:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('disable','active') NOT NULL,
  `id_product` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`, `status`, `id_product`, `created_at`) VALUES
(59, '687029439603c881f53082.jpg', 'active', 49, '2021-03-01 14:22:23'),
(84, '723870903603ed9e22d201.jpg', 'active', 52, '2021-03-03 08:35:46'),
(85, '84932507603ed9e22d47e.png', 'disable', 52, '2021-03-03 08:35:46'),
(86, '553477615603ed9e22d6bd.jpg', 'disable', 52, '2021-03-03 08:35:46'),
(87, '1969916253603ed9e22e4ca.jpg', 'disable', 52, '2021-03-03 08:35:46'),
(88, '803499614603ed9e22e6cb.jpg', 'disable', 52, '2021-03-03 08:35:46'),
(90, '1094039390603edc838433c.jpg', 'active', 44, '2021-03-03 08:46:59'),
(94, '972498689603edcacd7c0a.png', 'disable', 50, '2021-03-03 08:47:40'),
(96, '725819732603edcacd80e8.jpg', 'active', 50, '2021-03-03 08:47:40'),
(97, '1317226886603f090d4c368.jpg', 'active', 56, '2021-03-03 11:57:01'),
(98, '1504880904603f090d4c70a.png', 'disable', 56, '2021-03-03 11:57:01'),
(104, '1454965176603f471769ec6.jpg', 'active', 57, '2021-03-03 16:21:43'),
(109, '1292361523604031276e4d8.png', 'active', 58, '2021-03-04 09:00:23'),
(110, '1281404784604035b244cb8.jpg', 'active', 59, '2021-03-04 09:19:46'),
(111, '1611870516604035b245068.jpg', 'disable', 59, '2021-03-04 09:19:46'),
(112, '1977670592604036d87e0f7.jpg', 'disable', 60, '2021-03-04 09:24:40'),
(113, '739591582604036d87e3bb.jpg', 'active', 60, '2021-03-04 09:24:40'),
(114, '906103736604037a0b2f64.jpg', 'active', 61, '2021-03-04 09:28:00'),
(115, '2144056422604037a0b319a.jpg', 'disable', 61, '2021-03-04 09:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `page_about`
--

CREATE TABLE `page_about` (
  `id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_about`
--

INSERT INTO `page_about` (`id`, `company`, `deskripsi`, `banner`) VALUES
(1, 'Dewa Coffee', 'Kopi Dewa \"spesialis kopi\" adalah sebuah kedai kopi online yang menjual berbagai jenis kopi di Indonesia. Kopi yang kami sangrai dan jual berasal dari para petani dan pemanggang kopi yang berdedikasi penuh untuk memanggang kopi, menghasilkan kopi dengan rasa terbaik.\r\n<br>\r\n<br>\r\nKopi dewa bekerja sama dengan petani kopi lokal Bali untuk memenuhi keinginan Anda akan rasa kopi yang berbeda. Kami percaya dan menjamin setiap kopi yang ada di Dewa Coffee langsung dari para petani kopi di Bali yang juga memiliki dedikasi dan semangat tinggi dalam dunia kopi.\r\n\r\n<br>\r\n<br>\r\nDewa Coffee akan selalu berkomitmen untuk menjadi kedai kopi online terpercaya dengan terus berinovasi dan meningkatkan kualitas terbaik. Kini Anda bisa menikmati belanja kopi online dengan harga terjangkau, mudah, aman dan nyaman. Pilih kopi Anda dengan “spesialis kopi” Kopitem. Karena dengan kopitem kopi menjadi mudah.', '452879847603eeb932a7a9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page_blog`
--

CREATE TABLE `page_blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_blog`
--

INSERT INTO `page_blog` (`id`, `judul`, `deskripsi`, `created_at`) VALUES
(8, 'About Coffee', 'Jika kita bicara tentang kopi, pasti tidak akan ada habisnya. Banyak sekali yang bisa dibahas tentang kopi. Kopitem dalam urusannya tentang kopi selalu berusaha untuk bertemu langsung dengan petani kopi, melihat dan melaksanakan proses pengolahan tentang kopi agar kopi yang kami peroleh dan selanjutnya kami jual selalu dalam keadaan terbaik. Tidak hanya mengambil kopinya saja, kami juga saling berbagi pengalaman dengan para petani, bertukar pikiran tentang kopi, agar sistem kopi berkesinambungan tetap terlaksana dengan baik. Kami juga bekerja sama dengan banyak roaster kopi di Indonesia untuk menciptakan rasa kopi terbaik. Berikut adalah kumpulan cerita kami tentang kopi.', '2021-03-03 21:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `page_contact`
--

CREATE TABLE `page_contact` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_contact`
--

INSERT INTO `page_contact` (`id`, `address`, `email`, `phone`, `maps`) VALUES
(1, 'Jln. Kebo Iwa GG Lempuyang no 5', 'Dewacoffeebdi@gmail.com', '087810202578', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.666165216295!2d115.18355361531549!3d-8.628011890084723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238cb71a1cc69%3A0x1d0acceaea3e3b0f!2sGg.%20Lempuyang%20No.5%2C%20Padangsambian%20Kaja%2C%20Kec.%20Denpasar%20Bar.%2C%20Kota%20Denpasar%2C%20Bali%2080117!5e0!3m2!1sid!2sid!4v1614823228061!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `page_home`
--

CREATE TABLE `page_home` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(227) NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_home`
--

INSERT INTO `page_home` (`id`, `judul`, `deskripsi`, `banner`) VALUES
(1, 'Inspired By The Best Coffee Of Indonesia  ', 'Dewa coffee \"coffee specialist\" is an online coffee shop that sells various types of coffee in Indonesia. The coffee that we sell comes from farmers and coffee who have full dedication to produce coffee that has the best taste.', '1786999525603f1c1cc02aa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page_product`
--

CREATE TABLE `page_product` (
  `id` int(11) NOT NULL,
  `banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_product`
--

INSERT INTO `page_product` (`id`, `banner`) VALUES
(1, '126749538260403f1320e30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `neto` int(11) NOT NULL,
  `tipe_coffee` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `id_auth` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `judul`, `deskripsi`, `neto`, `tipe_coffee`, `price`, `id_auth`, `created_at`) VALUES
(59, 'Kopi arabika kintamani', 'Kopi Arabika Kintamani adalah kopi arabika yang dipanen dan diproses secara full washed process sehingga menghasilkan biji kopi arabika terbaik yang kemudian diroasting dengan profile omni roast (cocok untuk manual brew/filter dan espresso/mesin).\r\n<br><br>\r\nRegion : Kintamani ~ Bali\r\n<br>\r\nProcess : Full washed process\r\n<br>\r\nVariety : Mix\r\n<br>\r\nAltitude : 1400 – 1600 MDPL\r\n<br>\r\nNotes : Fruity, Dried Fruit, Spicy, Medium acidity', 200, 'Arabika', 20000, 1, '2021-03-04 09:19:46'),
(60, 'Kopi Arabika Aceh Gayo', 'Kopi Arabika Aceh Gayo adalah kopi arabika yang dipanen dan diproses secara full washed process sehingga menghasilkan biji kopi arabika aceh gayo terbaik yang kemudian diroasting dengan profile omni roast (cocok untuk manual brew/filter dan espresso/mesin).\r\n<br><br>\r\nRegion : Aceh Tengah\r\n<br>\r\nProcess : Full washed process\r\n<br>\r\nVariety : Mix\r\n<br>\r\nAltitude : 1400 – 1600 MDPL\r\n<br>\r\nNotes : Fruity, Dried Fruit, Spicy, Medium acidity', 200, 'Arabika', 90000, 1, '2021-03-04 09:24:40'),
(61, 'Kopi Robusta Singaraja', 'Kopi Robusta Singaraja adalah kopi robusta yang di blend dari origin arabika balipupuan yang dipanen dan diproses secara full washed process sehingga menghasilkan blend kopi terbaik yang kemudian diroasting dengan profile medium (cocok untuk espresso/mesin based).\r\n<br><br>\r\nRegion : Bali\r\n<br>\r\nProcess : Full washed process\r\n<br>\r\nVariety : Mix\r\n<br>\r\nAltitude : 1100 MDPL\r\n<br>\r\nNotes : Cacao nips, roasted nut, strong body with long aftertaste', 200, 'Robusta', 50000, 1, '2021-03-04 09:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `photo`, `nama`, `review`) VALUES
(7, '110718683560403db80b893.jpg', 'Wahyu Purnama', 'Kopi disini enak semua, apa lagi kopi robusta singaraja serasa tidak ada ampas '),
(8, '129231006260403dc90d3a9.jpg', 'Dea', 'kopi arabika kintamani sangat enak, papa ku suka sama kopi ini ');

-- --------------------------------------------------------

--
-- Table structure for table `slider_blog`
--

CREATE TABLE `slider_blog` (
  `id` int(11) NOT NULL,
  `id_page_blog` int(11) NOT NULL,
  `slider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_blog`
--

INSERT INTO `slider_blog` (`id`, `id_page_blog`, `slider`) VALUES
(21, 8, '113524079060403f79dedd4.jpg'),
(22, 8, '42505188260403f79df010.png'),
(23, 8, '165424094360403f79df357.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `id_blog`, `created_at`) VALUES
(61, 'enak', 14, '2021-03-04'),
(62, 'manfaat', 14, '2021-03-04'),
(63, 'coffeee', 14, '2021-03-04'),
(64, 'robusta', 14, '2021-03-04'),
(65, 'coffee', 14, '2021-03-04'),
(66, 'enak', 14, '2021-03-04'),
(67, 'bermanfaat', 14, '2021-03-04'),
(68, 'espresoo', 16, '2021-03-04'),
(69, 'coffee', 16, '2021-03-04'),
(70, 'cafe', 16, '2021-03-04'),
(71, 'seru', 16, '2021-03-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_about`
--
ALTER TABLE `page_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_blog`
--
ALTER TABLE `page_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contact`
--
ALTER TABLE `page_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_home`
--
ALTER TABLE `page_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_product`
--
ALTER TABLE `page_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_auth`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_blog`
--
ALTER TABLE `slider_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `page_about`
--
ALTER TABLE `page_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page_blog`
--
ALTER TABLE `page_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page_contact`
--
ALTER TABLE `page_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page_home`
--
ALTER TABLE `page_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_product`
--
ALTER TABLE `page_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider_blog`
--
ALTER TABLE `slider_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
