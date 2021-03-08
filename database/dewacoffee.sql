-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 10:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'Admin', 'admin@admin.com', '$2y$10$e1Fn0e9FQUBpMQ2JD4zEJetYNO5e1k9ZvEYb4zfmt.lgDQ9lbheZG', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `deskripsi`, `id_user`, `banner`, `created_at`) VALUES
(14, '5 Manfaat Ampas Kopi yang Bisa Kamu Gunakan di Rumah   ', '<div class=\"vc_row wpb_row vc_row-fluid\" style=\"box-sizing: inherit; margin-left: -15px; margin-right: -15px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\" style=\"box-sizing: border-box; width: 849px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\">\r\n<div class=\"vc_column-inner\" style=\"box-sizing: border-box; padding-left: 15px; padding-right: 15px; width: 849px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit;\">\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<p style=\"box-sizing: inherit; margin: 0px;\"><span style=\"box-sizing: inherit; margin-bottom: 0px;\">Berikut 5 tips memanfaatkan ampas kopi di kehidupan sehari-hari:</span></p>\r\n<div id=\"gtx-trans\" style=\"box-sizing: inherit; margin-bottom: 0px; position: absolute; left: -7px; top: 100.422px;\">\r\n<div class=\"gtx-trans-icon\" style=\"box-sizing: inherit; margin-bottom: 0px;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\" style=\"box-sizing: inherit; margin-left: -15px; margin-right: -15px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\" style=\"box-sizing: border-box; width: 849px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\">\r\n<div class=\"vc_column-inner\" style=\"box-sizing: border-box; padding-left: 15px; padding-right: 15px; width: 849px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit;\">\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">1. Menghilangkan Bau Tidak Sedap</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Salah satu manfaat ampas kopi adalah menghilangkan bau tidak sedap yang ada di rumah. Nah biasanya freezer lemari es sering menjadi tempat yang dihinggapi bau tidak sedap. Maka tidak ada salahnya kamu menggunakan ampas kopi untuk menghilangkan bau tidak sedap tersebut.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Kamu bisa meletakkan ampas kopi di sebuah wadah yang tahan terhadap suhu dingin.&nbsp; Banyaknya ampas kopi bisa disesuaikan dengan kebutuhan kamu. Biasanya bau tidak sedap tersebut akan menghilang dalam waktu kurang dari sehari.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Selain di freezer lemari es, kamar mandi juga menjadi tempat yang terkadang menimbulkan bau tidak sedap. Kamu bisa menyiapkan sehelai kain kemudian diisi dengan ampas kopi secukupnya, dan gantung di kamar mandi. Voila, bau tidak sedap di kamar mandi akan hilang.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">&nbsp;</p>\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">2. Membersihkan Debu di dalam Rumah</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Pernahkah kamu merasakan kesulitan ketika menyapu debu di dalam rumah, karena debu tersebut kerap berterbangan? Nah, ampas kopi bisa membantu kamu. Ternyata ampas kopi yang sudah dikeringkan bisa membantu kita untuk tetap menjaga agar debu tidak berterbangan.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Caranya juga cukup mudah, taburkan ampas kopi yang sudah dikeringkan di sudut-sudut rumah yang berdebu, maka debu tersebut akan lebih mudah disapu karena tidak akan berterbangan. Yuk kita coba.</p>\r\n<div class=\"vc_row wpb_row vc_row-fluid\" style=\"box-sizing: inherit; margin-left: -15px; margin-right: -15px;\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\" style=\"box-sizing: border-box; width: 849px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\">\r\n<div class=\"vc_column-inner\" style=\"box-sizing: border-box; padding-left: 15px; padding-right: 15px; width: 849px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit;\">\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">3. Membasmi Semut</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Manfaat ampas kopi ketiga yaitu ampas kopi bisa dipakai untuk membasmi semut. Tidak percaya?</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Semut sering kali muncul di sisi dapur atau di sela-sela meja makan dan alat dapur dikarenakan adanya sisa makanan. Dari pada kamu menggunakan cairan pembersih serangga yang mengandung bahan kimia, kenapa tidak memanfaatkan ampas kopi?</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Caranya cukup dengan menaburkan ampas kopi di sisi atau di sela-sela dapur dan meja makan yang sering didatangi semut, maka semut akan &ldquo;malas&rdquo; untuk datang lagi. Ternyata semut tidak menyukai bau kopi yang cukup menyengat.<br style=\"box-sizing: inherit; margin-bottom: 0px;\" />Cukup mudah bukan?</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\" style=\"box-sizing: inherit; margin-left: -15px; margin-right: -15px;\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\" style=\"box-sizing: border-box; width: 849px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\">\r\n<div class=\"vc_column-inner\" style=\"box-sizing: border-box; padding-left: 15px; padding-right: 15px; width: 849px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit;\">\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">4. Menghilangkan Goresan pada Kayu</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Punya perabotan rumah tangga dari kayu tapi sudah banyak tergores baik sengaja dan tidak sengaja? Coba hilangkan goresan tersebut menggunakan ampas kopi. Yap, manfaat ampas kopi selanjutnya ialah menghilangkan goresan pada kayu.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Bagaimana caranya? Gunakan ampas kopi sisa minum kopi di pagi hari, siapkan&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">cotton bud</em>&nbsp;sebagai alat bantu untuk mengoleskan ampas kopi pada perabotan kayu. Bubuhkan ampas kopi pada bagian perabot kayu yang terkena goresan, lalu biarkan selama kurang lebih 10 menit, kemudian bersihkan ampas kopi dengan kain bersih. Dan lihat hasilnya, apakah goresannya hilang?</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Jika goresannya belum hilang, kamu bisa mengulangi langkah yang tadi sekali lagi. Perlu diingat goresan yang bisa dihilangkan oleh cara ini adalah goresan yang belum terlalu dalam.</p>\r\n</div>\r\n</div>\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">5. Membersihkan Alat Dapur</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Manfaat ampas kopi kelima adalah bisa dipakai untuk membersihkan alat dapur. Pernah merasakan kesulitan ketika membersihkan noda membandel pada alat dapur di rumah kamu? Nah tidak ada salahnya kamu mencoba menggunakan ampas kopi untuk membersihkannya.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Bagaimana caranya? Kamu bisa menggosokkan spons cucian piring yang sudah dibubuhi ampas kopi ke noda membandel tersebut. Tekstur sedikit kasar yang ada pada ampas kopi itu akan membantu membersihkan noda membandel tersebut.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 1, '19091824536041c3ebcd6a0.jpg', '2021-03-04'),
(15, 'Ini Dia Keunggulan Kopi Robusta yang Wajib Kamu Ketahui  ', '<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h2 style=\"box-sizing: inherit; clear: both; margin: 25px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 28px; font-family: Montserrat;\">1. Karakteristik Khas Kopi Robusta</h2>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Tak kenal maka tak sayang. Jika kamu ingin membudidayakannya, setidaknya harus memahami keunggulan dan karakteristik khas tanaman kopi robusta.</p>\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">Berikut ini beberapa keunggulan kopi robusta:</h3>\r\n<ul style=\"box-sizing: inherit; margin: 0px; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"box-sizing: inherit;\">Tanaman kopi robusta relatif lebih tahan terhadap serangan hama dan penyakit, antara lain karat daun (HV).</li>\r\n<li style=\"box-sizing: inherit;\">Kopi robusta bisa ditanam di dataran rendah, dengan produktivitas lebih baik daripada arabika. Bahkan arabika sulit tumbuh optimal di dataran rendah.</li>\r\n<li style=\"box-sizing: inherit;\">Tanaman kopi robusta lebih cepat panen. Mulai berbunga umur 2 tahun, mulai berbuah umur 2,5 tahun. Kopi arabika mulai berbuah umur 3 &ndash; 4 tahun.</li>\r\n<li style=\"box-sizing: inherit;\">Produktivitas / hasil panen juga lebih tinggi: 900 &ndash;1.300 kg / ha / tahun. Jika dipelihara intensif, produktivitasnya bisa meningkat hingga 2.000 kg / ha /tahun.</li>\r\n<li style=\"box-sizing: inherit;\">Rendemen (persentase berat produk akhir dan hasil panen) kopi robusta sekitar 22%. Ini juga lebih tinggi daripada arabika (18 &ndash; 20%).Jika ingin menanam, ada beberapa karakteristik tanaman kopi robusta yang perlu diperhatikan:</li>\r\n<li style=\"box-sizing: inherit;\">Tanaman kopi robusta memiliki perakaran dangkal. Dibutuhkan tanah subur serta kaya kandungan organik.</li>\r\n<li style=\"box-sizing: inherit;\">Kopi robusta sangat cocok ditanam di daerah tropis-basah, pada tanah gembur, dengan derajat keasaman (pH) sekitar 4,5 &ndash; 6,5.</li>\r\n<li style=\"box-sizing: inherit;\">Meski bisa ditanam di dataran rendah, kopi robusta bisa tumbuh optimal jika ditanam di daerah dengan ketinggian 400 &ndash; 800 meter dari permukaan laut.</li>\r\n<li style=\"box-sizing: inherit;\">Suhu optimal untuk perkembangan tanaman sekitar 24-30 derajat Celcius, dengan curah hujan 2.000-3.000 mm per tahun.</li>\r\n<li style=\"box-sizing: inherit;\">Tanaman cukup sensitif terhadap kekeringan.</li>\r\n<li style=\"box-sizing: inherit;\">Buah yang masih muda berwarna hijau, setelah masak menjadi merah. Buah yang masak penuh tetap menempel kuat pada tangkainya.</li>\r\n<li style=\"box-sizing: inherit;\">Perawatan kopi robusta juga diimbangi dengan penggunaan&nbsp;<a style=\"box-sizing: inherit; background-color: transparent; outline: 0px; color: #252323; text-decoration-line: none; transition: color 0.5s ease 0s, background-color 0.5s ease 0s; margin-bottom: 0px;\" href=\"https://gdm.id/pupuk-kopi\" target=\"_blank\" rel=\"nofollow noopener noreferrer\">pupuk kopi</a>&nbsp;untuk merangsang pertumbuhan secara maksimal.</li>\r\n<li style=\"box-sizing: inherit; margin-bottom: 0px; list-style-type: none;\">&nbsp;</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h2 style=\"box-sizing: inherit; clear: both; margin: 25px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 28px; font-family: Montserrat;\">2. Cita Rasa Khas Kopi Robusta</h2>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Sebenarnya tidak ada kopi yang rasanya manis. Hampir semua jenis kopi digambarkan dengan cita rasa pahit, dengan tingkat keasaman (acidity) tertentu.<br style=\"box-sizing: inherit; margin-bottom: 0px;\" />Tetapi, bagaimana pahitnya kopi itu berbeda-beda sesuai dengan jenisnya. Begitu pula dengan acidity. Sebagian besar ahli kopi mendefinisikan robusta lebih pahit ketimbang arabika.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Jadi, sepanjang tak berlebihan, masih aman untuk lambung. Untuk menggambarkan cita rasa kopi robusta, kamu perlu mengingat hal-hal berikut ini:<br style=\"box-sizing: inherit;\" />&ndash;&nbsp;<a style=\"box-sizing: inherit; background-color: transparent; outline: 0px; color: #965032; text-decoration-line: none; transition: all 0.2s ease-in 0s; padding-bottom: 1px; border-bottom: 2px solid #d9835f; cursor: pointer;\" href=\"https://kopitem.com/kopi-online/kopi/kopi-robusta-lampung-halokoffi/\">Kopi Lampung</a><br style=\"box-sizing: inherit;\" />&ndash;&nbsp;<a style=\"box-sizing: inherit; background-color: transparent; outline: 0px; color: #965032; text-decoration-line: none; transition: all 0.2s ease-in 0s; margin-bottom: 0px; padding-bottom: 1px; border-bottom: 2px solid #d9835f; cursor: pointer;\" href=\"https://kopitem.com/kopi-online/kopi/kopi-robusta-dampit-northsider-coffee/\">Kopi Dampit</a></p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Masyarakat Indonesia mengenal kopi Lampung sebagai salah satu produk terbaik di negeri ini. Kopi Lampung yang sangat terkenal itu juga termasuk jenis robusta, meski melalui pengolahan pascapanen cukup panjang, sehingga menghasilkan cita rasa yang unik.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\">Masyarakat Eropa sangat menggemari kopi Dampit, nama salah satu kecamatan di Kabupaten Malang, Jawa Timur.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\"><a style=\"box-sizing: inherit; background-color: transparent; outline: 0px; color: #965032; text-decoration-line: none; transition: all 0.2s ease-in 0s; margin-bottom: 0px; padding-bottom: 1px; border-bottom: 2px solid #d9835f; cursor: pointer;\" href=\"https://kopitem.com/kopi-online/kopi/kopi-robusta-dampit-malang-marones-coffee/\">Kopi Dampit</a>&nbsp;memiliki citarasa seperti cokelat, dengan tingkat kekentalan yang rendah. Ketika diseduh air panas, dan diseruput, tercium aroma khas seperi bau tanah yang unik.</p>\r\n</div>\r\n</div>', 1, '9249860466041c66858fc4.jpg', '2021-03-04'),
(16, 'Mengenal Aneka Varian Espresso ', '<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h2 style=\"box-sizing: inherit; clear: both; margin: 25px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 28px; font-family: Montserrat;\">Pengertian Espresso</h2>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><em style=\"box-sizing: inherit;\">Espresso</em>&nbsp;adalah minuman yang dihasilkan dengan mengekstraksi biji kopi menggunakan mesin atau alat&nbsp;<em style=\"box-sizing: inherit;\">brewing</em>&nbsp;kopi manual dengan tekanan sekitar 9 bar. Hasil&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">espresso</em>&nbsp;yang baik biasanya ditandai dengan crema alias lapisan kuning tua di permukaan kopi.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\">Ada beberapa minuman kopi yang berbahan dasar&nbsp;<em style=\"box-sizing: inherit;\">e</em><em style=\"box-sizing: inherit; margin-bottom: 0px;\">spresso</em>, yaitu :</p>\r\n</div>\r\n</div>\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: inherit; margin-bottom: 35px; font-family: Arial; font-size: 18px; background-color: #ffffff;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: inherit; margin-bottom: 0px;\">\r\n<h3 style=\"box-sizing: inherit; clear: both; margin: 50px 0px 30px; line-height: 1.375; letter-spacing: -0.02em; font-size: 22px; font-family: Montserrat;\">1. Espresso Shot</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">a. Single Shot</strong><br style=\"box-sizing: inherit; margin-bottom: 0px;\" />Dibuat tidak lebih dari 30 detik. Biasanya berukuran 25-30 mm.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">b. Double Shot atau Doppio</strong><br style=\"box-sizing: inherit; margin-bottom: 0px;\" />Biasanya berukuran 60 mm.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">c. Ristretto</strong><br style=\"box-sizing: inherit;\" />Ukurannya separuh dari&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">single shot</em>. Ekstraksi tidak lebih dari 20 detik.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">d. Espresso Romano</strong><br style=\"box-sizing: inherit;\" />Satu shot&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">espresso</em>&nbsp;dicampur sedikit gula dan irisan lemon di bibir gelas.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">e. Affogato</strong><br style=\"box-sizing: inherit;\" /><em style=\"box-sizing: inherit; margin-bottom: 0px;\">Espresso</em>&nbsp;yang disiramkan ke atas es krim vanilla.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">f. Guillermo</strong><br style=\"box-sizing: inherit;\" /><em style=\"box-sizing: inherit;\">Espresso</em>&nbsp;yang dicampur dengan irisan lemon. Ada yang menambahkan lemon di permukaan kopi, ada juga yang meletakkannya di dasar gelas sebelum disiram&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">espresso</em>.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 25px;\"><strong style=\"box-sizing: inherit;\">g. Cuban Espresso</strong><br style=\"box-sizing: inherit;\" /><em style=\"box-sizing: inherit; margin-bottom: 0px;\">Espresso</em>&nbsp;yang dicampur dengan demerara (gula cokelat kasar yang diproduksi di Guyana, Amerika Selatan. Seperti namanya, ini minuman favorit di Kuba.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px;\"><strong style=\"box-sizing: inherit;\">h. Espresso Ice</strong><br style=\"box-sizing: inherit;\" />Es batu yang dimasukkan ke&nbsp;<em style=\"box-sizing: inherit; margin-bottom: 0px;\">espresso</em>&nbsp;plus tambahan sedikit lemon.</p>\r\n</div>\r\n</div>', 1, '14087906896041c4611f595.jpg', '2021-03-04');

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
(7, 'Made Wahyu Purnama Putra ', 'wahyu@gmail.com', 'kopi mu enak sekali yuks kerja sama aja', '2021-03-03 14:28:52'),
(11, 'ads', 'admin@admin.com', 'sdasdasd', '2021-03-05 14:07:07'),
(12, 'angga ', 'tes@gmail.com', 'yuks kerja sama sama cafe ku', '2021-03-05 19:24:24'),
(13, 'I Gusti Putu Ngurah Prihandana', 'prihandana27@gmail.com', 'aku suka banget coffee kamu', '2021-03-08 17:44:23');

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
(209, '10030870946041c2761ffa1.jpg', 'active', 59, '2021-03-05 13:32:38'),
(210, '5679588746041c27620232.jpg', 'disable', 59, '2021-03-05 13:32:38'),
(211, '11418745446041c2a0e4045.jpg', 'active', 60, '2021-03-05 13:33:20'),
(212, '18597528626041c2a0e4ca4.jpg', 'disable', 60, '2021-03-05 13:33:20'),
(213, '6407801326041c2bc084c8.jpg', 'active', 61, '2021-03-05 13:33:48'),
(214, '15187807676041c2bc0872b.jpg', 'disable', 61, '2021-03-05 13:33:48'),
(222, '1786173196041ca14cbf76.jpg', 'active', 95, '2021-03-05 14:05:08'),
(223, '4641722896041ca14cc233.jpg', 'disable', 95, '2021-03-05 14:05:08');

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
(1, 'Dewa Coffee', 'Kopi Dewa \"spesialis kopi\" adalah sebuah kedai kopi online yang menjual berbagai jenis kopi di Indonesia. Kopi yang kami sangrai dan jual berasal dari para petani dan pemanggang kopi yang berdedikasi penuh untuk memanggang kopi, menghasilkan kopi dengan rasa terbaik.\r\n<br>\r\n<br>\r\nKopi dewa bekerja sama dengan petani kopi lokal Bali untuk memenuhi keinginan Anda akan rasa kopi yang berbeda. Kami percaya dan menjamin setiap kopi yang ada di Dewa Coffee langsung dari para petani kopi di Bali yang juga memiliki dedikasi dan semangat tinggi dalam dunia kopi.\r\n\r\n<br>\r\n<br>\r\nDewa Coffee akan selalu berkomitmen untuk menjadi kedai kopi online terpercaya dengan terus berinovasi dan meningkatkan kualitas terbaik. Kini Anda bisa menikmati belanja kopi online dengan harga terjangkau, mudah, aman dan nyaman. Pilih kopi Anda dengan \"spesialis kopi\"  Kopitem. Karena dengan kopitem kopi menjadi mudah.', '10429042276045f21728c50.jpg');

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
(1, 'Terinspirasi Oleh Kopi Terbaik Indonesia', 'Kopi Dewa adalah sebuah kedai kopi online yang menjual berbagai jenis kopi di Indonesia. Kopi yang kami jual berasal dari petani dan kopi yang memiliki dedikasi penuh untuk menghasilkan kopi yang memiliki cita rasa terbaik.', '2310739266045f17200b82.png');

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
(1, '19654928186041c4ea57ce7.jpg');

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
(61, 'Kopi Robusta Singaraja', 'Kopi Robusta Singaraja adalah kopi robusta yang di blend dari origin arabika balipupuan yang dipanen dan diproses secara full washed process sehingga menghasilkan blend kopi terbaik yang kemudian diroasting dengan profile medium (cocok untuk espresso/mesin based).\r\n<br><br>\r\nRegion : Bali\r\n<br>\r\nProcess : Full washed process\r\n<br>\r\nVariety : Mix\r\n<br>\r\nAltitude : 1100 MDPL\r\n<br>\r\nNotes : Cacao nips, roasted nut, strong body with long aftertaste', 200, 'Robusta', 50000, 1, '2021-03-04 09:28:00'),
(95, 'Kopi Arabika Arang', 'Kopi Arabika Arang adalah kopi arabika yang dipanen dan diproses secara full washed process sehingga menghasilkan biji kopi arabika arang terbaik yang kemudian diroasting dengan profile omni roast (cocok untuk manual brew/filter dan espresso/mesin).\r\n\r\nRegion:  Sumatra Utara\r\nProcess: Full washed process\r\nVariety: Mix\r\nAltitude: 1400 ï¿½ 1800 MDPL\r\nNotes: Round Mouthfeel, Chocolate, Spices, Sweet Earthy, Long Finish.\r\n\r\nStock kopi yang kami produksi selalu dalam keadaan fresh dikarenakan kopi yang dijual tidak melebihi 45 hari dari tanggal roasting.\r\n\r\nKamu bisa membeli kopi dalam bentuk bubuk ataupun biji. Jika membeli dalam bentuk bubuk, mohon sertakan profil gilingan kamu (halus, medium, kasar) di kolom catatan.', 200, 'Arabika', 70000, 1, '2021-03-05 14:05:08');

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
(7, '15158824326041c71685db3.jpg', 'Wahyu Purnama ', 'Kopi disini enak semua, apa lagi kopi robusta singaraja serasa tidak ada ampas '),
(8, '10137496786041c71dd0edc.jpg', 'Dea andin', 'kopi arabika kintamani sangat enak, papa ku suka sama kopi ini '),
(11, '7960471796042160a36422.jpg', 'Angga Tusan Adji', 'kopi ini sangat ku rekomendasi banget untuk kalian');

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
(46, 8, '20630240326041c48ae2944.jpg'),
(47, 8, '652703906041c48ae2b67.png'),
(48, 8, '6520257816041c48ae3142.jpg');

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
(64, 'robusta', 14, '2021-03-04'),
(67, 'bermanfaat', 14, '2021-03-04'),
(68, 'espresoo', 16, '2021-03-04'),
(69, 'coffee', 16, '2021-03-04'),
(70, 'cafe', 16, '2021-03-04'),
(71, 'seru', 16, '2021-03-04'),
(80, 'Robusta', 15, '2021-03-05'),
(81, 'Coffee', 15, '2021-03-05');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `page_about`
--
ALTER TABLE `page_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page_blog`
--
ALTER TABLE `page_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider_blog`
--
ALTER TABLE `slider_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
