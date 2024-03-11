-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 06:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2024_dyn_nyhetssida`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_articles`
--

CREATE TABLE `news_articles` (
  `article_id` int(11) NOT NULL,
  `article_heading` varchar(255) NOT NULL,
  `article_text` text NOT NULL,
  `article_date` date NOT NULL,
  `article_author_fname` varchar(255) NOT NULL,
  `article_author_lname` varchar(255) NOT NULL,
  `article_img` varchar(255) NOT NULL,
  `article_img_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_articles`
--

INSERT INTO `news_articles` (`article_id`, `article_heading`, `article_text`, `article_date`, `article_author_fname`, `article_author_lname`, `article_img`, `article_img_text`) VALUES
(1, 'Axxell blev hackat av programutvecklarlinjen!', 'I\'m baby la croix ethical man bun cardigan activated charcoal, affogato bruh pickled kogi actually hammock kale chips. Iceland bruh wolf, adaptogen cred letterpress affogato. Mlkshk four dollar toast put a bird on it, gastropub af poke actually helvetica unicorn austin la croix viral kale chips XOXO franzen. Kale chips cupping PBR&B, vaporware neutral milk hotel jianbing freegan prism forage pickled subway tile 8-bit pop-up vice coloring book. Squid cray edison bulb kinfolk shabby chic next level cardigan disrupt. Gorpcore tilde +1 fam kickstarter lumbersexual.', '2024-03-07', 'Robin', 'Ehrnsten', 'axxell.jpg', 'Axxell på Bangatan 75 i Karis'),
(2, 'Axxell tar bort programutvecklarlinjen efter hackning!', 'I\'m baby distillery organic green juice, fingerstache hammock readymade post-ironic. Schlitz intelligentsia tumblr normcore swag cliche flannel wayfarers PBR&B gochujang man bun. Trust fund letterpress slow-carb, meh tumeric direct trade pork belly wolf. Literally mixtape migas, beard retro tonx blue bottle offal. Twee big mood flannel, quinoa 8-bit street art biodiesel XOXO yes plz ennui godard ramps four dollar toast.', '2024-03-08', 'Robin', 'Ehrnsten', 'banned.jpg', 'Programutvecklarna blev cancelled'),
(3, 'Axxell tvungen att återställa programutvecklarlinjen efter hård kritik', 'Trust fund echo park tonx crucifix artisan roof party. Fingerstache prism butcher unicorn vinyl polaroid succulents. Viral pour-over helvetica, JOMO messenger bag drinking vinegar occupy umami same cray kombucha. 90\'s migas semiotics jean shorts four loko. Organic pop-up enamel pin, poutine slow-carb cred gochujang big mood twee tote bag prism poke.', '2025-08-20', 'Robin', 'Ehrnsten', 'celebration.jpg', 'Studerande glada när programutvecklarlinjen är tillbaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_articles`
--
ALTER TABLE `news_articles`
  ADD PRIMARY KEY (`article_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_articles`
--
ALTER TABLE `news_articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
