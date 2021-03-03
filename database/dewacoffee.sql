-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 09:50 AM
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
(8, '5 benefits of coffee grounds that you can use at h', '<p><span style=\"color: #212529; font-family: Quicksand; font-size: 16px; background-color: #ffffff;\">How often do you drink coffee a day? 2 times? 3 times? For me, usually 2 times a day. Then how much coffee grounds are used up when you brew coffee? 30 grams? 45 grams? If you drink coffee 2 times a day, and drink coffee once using 15 grams of coffee, then the total coffee you produce in a day is 30 grams. Have you ever thought about using coffee grounds for something other than just ending up in the trash? This time, Kopitem wants to provide tips on how to use coffee grounds in everyday life. Here are 5 tips for using coffee grounds in everyday life: 1. Eliminate Bad Odors One of the benefits of coffee grounds is to get rid of bad odors in the house. Well, usually the refrigerator freezer is often a place that has a bad smell. Then there is nothing wrong with using coffee grounds to get rid of the unpleasant smell. You can put coffee grounds in a container that is resistant to cold temperatures. The amount of coffee grounds that can be tailored to your needs. Usually the odor will disappear in less than a day. Apart from being in the fridge freezer, the bathroom is also a place that sometimes causes unpleasant odors. You can prepare a cloth then fill it with enough coffee, and hang it in the bathroom. Voila, the bad smell in the bathroom will disappear. 2. Cleaning the dust in the house Have you ever had trouble sweeping the dust in the house, because the dust often flies? Well, coffee grounds can help you. It turns out that dried coffee grounds can help us keep the dust from flying. The method is also quite easy, sprinkle dried coffee grounds in dusty corners of the house, then the dust will be easier to sweep because it won\'t fly. Let\'s try it. 3. Get rid of ants The third benefit of coffee grounds is that they can be used to kill ants. Do not believe? Ants often appear on the side of the kitchen or on the sidelines of dining tables and kitchen utensils due to food residue. Instead of using an insect cleaner that contains chemicals, why not use coffee grounds? The trick is to simply sprinkle coffee grounds on the side or between the kitchen and dining table where ants are frequently visited, so the ants will be \"lazy\" to come again. Apparently not including the smell of coffee which is quite pungent. Easy enough, right? 4. Eliminating Scratches on Wood Have a wooden household furniture but it\'s been scratched a lot both on purpose and accidentally? Try removing the scratch using coffee grounds. Yep, the benefits of coffee grounds further remove scratches on wood. How to? Use the coffee grounds left over from drinking coffee in the morning, prepare a cotton bud as a tool for applying coffee grounds to wooden furniture. Put coffee grounds on the scratched part of the wooden furniture, then leave it for about 10 minutes, then clean the coffee grounds with a clean cloth. And look at the result, are the scratches gone? If the scratches haven\'t disappeared, you can adjust the previous step once again. Keep in mind that the scratches that this method can remove are ones that aren\'t very deep. 5. Cleaning Kitchen Appliances The fifth benefit of coffee grounds is that they can be used to clean kitchen utensils. Have you ever had difficulty cleaning stains on kitchen utensils in your home? There is nothing wrong with you trying to use coffee grounds to clean it. How to? You can rub a dishwashing sponge that has been spiked with coffee grounds onto the stubborn stain. The slightly rough texture on the coffee grounds will help clean the stain.</span></p>', 1, '1244425093603f0b1a0ac60.jpg', '2021-03-03');

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
(104, '1454965176603f471769ec6.jpg', 'active', 57, '2021-03-03 16:21:43');

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
(1, 'Dewa Coffee', 'Dewa coffee \"coffee specialist\" is an online coffee shop that sells various types of coffee in Indonesia. The coffee we roast and sell comes from coffee farmers and roasters who are fully dedicated to roasting coffee, resulting in the best tasting coffee.\r\n<br>\r\n<br>\r\nDewa coffee works closely with local Balinese coffee farmers to fulfill your desire for different flavors of coffee. We believe and guarantee every coffee that is in Dewa Coffee directly from coffee farmers in Bali who also have high dedication and enthusiasm in the world of coffee.\r\n<br>\r\n<br>\r\nDewa Coffee will always be committed to becoming a trusted online coffee shop by continuing to innovate and improve the best quality. Now you can enjoy shopping for coffee online at affordable, easy, safe and comfortable prices. Choose your coffee with the Kopitem “coffee specialist”. Because with kopitem coffee it becomes easy.', '452879847603eeb932a7a9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page_blog`
--

CREATE TABLE `page_blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_blog`
--

INSERT INTO `page_blog` (`id`, `judul`, `deskripsi`) VALUES
(1, 'asdasd', 'asdasd');

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
(1, 'Jl. WR Supratman No.302, Kesiman Kertalangu', 'Dewacoffeebdi@gmail.com', '087810202578', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.558066152242!2d115.25279001531571!3d-8.638353490222872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f8dc19eff4d%3A0x81ed76786e90eb40!2sBalai%20Diklat%20Industri%20Denpasar!5e0!3m2!1sid!2sid!4v1614743593151!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

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
(1, '1135140891603f080baf15f.jpg');

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
(56, 'Kopi arabika kintamani ', 'Region : Singaraja Bali\r\nProcess : Full washed process\r\nVariety : Mix Altitude : 1400 – 1600 MDPL\r\n<br><br>\r\nKami dengan hati-hati memetik biji berasal dari Singaraja - Bali, dengan permukaan laut dan lingkungan yang paling cocok dibandingkan yang lain. Kopi disortir dan dipanggang dengan teknik terbaik. Semua kopi dipanggang untuk mendapatkan kinerja kopi terbaik terbaik di dunia.', 200, 'arabika', 20000, 1, '2021-03-03 11:57:01'),
(57, 'dasd', 'asdasd', 123, 'asd', 123, 1, '2021-03-03 16:21:43');

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
(5, '228449934603f4abd1ca62.jpg', 'Handayani', 'Fansnya kopi kali, Paling suka sama Kopi Bali Blend setiap bulan pasti selalu sediain stok bali blend untuk saya dan ayah saya :). Kopitem mantul deh harga terjangkau lagi.'),
(6, '1350020560603f3f2aab503.jpg', 'Muhamad', 'Salah satu Kopi yang menurut saya paling enak. Barista ramah dan menjalankan protokol kesehatan dengan baik.');

-- --------------------------------------------------------

--
-- Table structure for table `slider_blog`
--

CREATE TABLE `slider_blog` (
  `id` int(11) NOT NULL,
  `id_page_blog` int(11) NOT NULL,
  `slider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(49, 'coffee', 8, '2021-03-03'),
(50, 'enak', 8, '2021-03-03');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `page_about`
--
ALTER TABLE `page_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page_blog`
--
ALTER TABLE `page_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider_blog`
--
ALTER TABLE `slider_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
