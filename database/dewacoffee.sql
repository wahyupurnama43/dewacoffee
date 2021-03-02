-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 07:30 AM
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
(5, '5 benefits of coffee grounds that you can use at h', '<p><span style=\"color: #212529; font-family: Quicksand; font-size: 16px; background-color: #ffffff;\">How often do you drink coffee a day? 2 times? 3 times? For me, usually 2 times a day. Then how much coffee grounds are used up when you brew coffee? 30 grams? 45 grams? If you drink coffee 2 times a day, and drink coffee once using 15 grams of coffee, then the total coffee you produce in a day is 30 grams. Have you ever thought about using coffee grounds for something other than just ending up in the trash? This time, Kopitem wants to provide tips on how to use coffee grounds in everyday life. Here are 5 tips for using coffee grounds in everyday life: 1. Eliminate Bad Odors One of the benefits of coffee grounds is to get rid of bad odors in the house. Well, usually the refrigerator freezer is often a place that has a bad smell. Then there is nothing wrong with using coffee grounds to get rid of the unpleasant smell. You can put coffee grounds in a container that is resistant to cold temperatures. The amount of coffee grounds that can be tailored to your needs. Usually the odor will disappear in less than a day. Apart from being in the fridge freezer, the bathroom is also a place that sometimes causes unpleasant odors. You can prepare a cloth then fill it with enough coffee, and hang it in the bathroom. Voila, the bad smell in the bathroom will disappear. 2. Cleaning the dust in the house Have you ever had trouble sweeping the dust in the house, because the dust often flies? Well, coffee grounds can help you. It turns out that dried coffee grounds can help us keep the dust from flying. The method is also quite easy, sprinkle dried coffee grounds in dusty corners of the house, then the dust will be easier to sweep because it won\'t fly. Let\'s try it. 3. Get rid of ants The third benefit of coffee grounds is that they can be used to kill ants. Do not believe? Ants often appear on the side of the kitchen or on the sidelines of dining tables and kitchen utensils due to food residue. Instead of using an insect cleaner that contains chemicals, why not use coffee grounds? The trick is to simply sprinkle coffee grounds on the side or between the kitchen and dining table where ants are frequently visited, so the ants will be \"lazy\" to come again. Apparently not including the smell of coffee which is quite pungent. Easy enough, right? 4. Eliminating Scratches on Wood Have a wooden household furniture but it\'s been scratched a lot both on purpose and accidentally? Try removing the scratch using coffee grounds. Yep, the benefits of coffee grounds further remove scratches on wood. How to? Use the coffee grounds left over from drinking coffee in the morning, prepare a cotton bud as a tool for applying coffee grounds to wooden furniture. Put coffee grounds on the scratched part of the wooden furniture, then leave it for about 10 minutes, then clean the coffee grounds with a clean cloth. And look at the result, are the scratches gone? If the scratches haven\'t disappeared, you can adjust the previous step once again. Keep in mind that the scratches that this method can remove are ones that aren\'t very deep. 5. Cleaning Kitchen Appliances The fifth benefit of coffee grounds is that they can be used to clean kitchen utensils. Have you ever had difficulty cleaning stains on kitchen utensils in your home? There is nothing wrong with you trying to use coffee grounds to clean it. How to? You can rub a dishwashing sponge that has been spiked with coffee grounds onto the stubborn stain. The slightly rough texture on the coffee grounds will help clean the stain.</span></p>', 1, '1747336181603dabd3607db.jpg', '2021-03-02'),
(7, 'Pilih Coffee Bubuk atau biji', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 1, '2141495098603db15faef0f.jpg', '2021-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(60, '1753615455603dac2cdb01e.jpg', 'active', 44, '2021-03-02 11:08:28'),
(61, '155014782603dac375473f.png', 'disable', 44, '2021-03-02 11:08:39'),
(62, '1028018766603db4ce98ed6.jpg', 'active', 50, '2021-03-02 11:45:18'),
(63, '1641747485603db4ce99347.jpg', 'disable', 50, '2021-03-02 11:45:18');

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
(1, 'Jln. Kebo Iwa GG Lempuyang no 5', 'dewacoffee@gmail.com', '087810202578', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.6661725289314!2d115.1835534153155!3d-8.628011190084726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238cb71a1cc69%3A0x1d0acceaea3e3b0f!2sGg.%20Lempuyang%20No.5%2C%20Padangsambian%20Kaja%2C%20Kec.%20Denpasar%20Bar.%2C%20Kota%20Denpasar%2C%20Bali%2080117!5e0!3m2!1sid!2sid!4v1614659760190!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

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
(44, 'Kopi Arabika Kintamani', 'Region : Singaraja Bali\r\nProcess : Full washed process\r\nVariety : Mix Altitude : 1400 – 1600 MDPL\r\n\r\nKami dengan hati-hati memetik biji berasal dari Singaraja - Bali, dengan permukaan laut dan lingkungan yang paling cocok dibandingkan yang lain. ', 2000, 'Arabika', 20000, 1, '2021-02-27 15:32:43'),
(50, 'kopi robusta singaraja', 'kopi asli bali enak banget', 200, 'robusta', 50000, 1, '2021-03-02 11:45:18');

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
(44, 'Coffee', 5, '2021-03-02'),
(45, 'enak', 5, '2021-03-02'),
(46, 'bubuk', 5, '2021-03-02'),
(47, 'enak', 5, '2021-03-02');

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
-- Indexes for table `page_contact`
--
ALTER TABLE `page_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_auth`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `page_contact`
--
ALTER TABLE `page_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
