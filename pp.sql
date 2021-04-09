-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Nis 2021, 12:32:32
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_me`
--

CREATE TABLE `about_me` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `cv_content` varchar(250) NOT NULL,
  `cv` varchar(250) NOT NULL,
  `skill_title` int(50) NOT NULL,
  `first_skill` varchar(50) NOT NULL,
  `first_counter` varchar(10) NOT NULL,
  `second_skill` varchar(50) NOT NULL,
  `second_counter` varchar(10) NOT NULL,
  `third_skill` varchar(50) NOT NULL,
  `third_counter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_title` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gsm` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `main`
--

CREATE TABLE `main` (
  `main_id` int(11) NOT NULL,
  `main_title` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `github` varchar(50) NOT NULL,
  `discord` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_settings`
--

CREATE TABLE `site_settings` (
  `settings_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `logo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `site_settings`
--

INSERT INTO `site_settings` (`settings_id`, `site_title`, `logo`) VALUES
(3, 'Şenol', 'logo');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`main_id`);

--
-- Tablo için indeksler `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_me`
--
ALTER TABLE `about_me`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `main`
--
ALTER TABLE `main`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
