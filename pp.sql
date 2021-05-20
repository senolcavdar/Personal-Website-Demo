-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 May 2021, 16:41:53
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
  `cv_title` text NOT NULL,
  `cv` varchar(250) NOT NULL,
  `skill_title` varchar(50) NOT NULL,
  `first_skill` varchar(50) NOT NULL,
  `first_counter` varchar(10) NOT NULL,
  `second_skill` varchar(50) NOT NULL,
  `second_counter` varchar(10) NOT NULL,
  `third_skill` varchar(50) NOT NULL,
  `third_counter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `about_me`
--

INSERT INTO `about_me` (`about_id`, `about_title`, `cv_title`, `cv`, `skill_title`, `first_skill`, `first_counter`, `second_skill`, `second_counter`, `third_skill`, `third_counter`) VALUES
(1, 'HAKKIMDA', 'Ben Şenol ÇAVDAR. 7 Ağustos 2002 tarihinde Kayseride dünyaya geldim. Kayseride yaşıyorum. Eğitimime Refika Küçükçalık İlköğretim Okulunda başladım. Daha sonra Refika Küçükçalık Ortaokulunda eğitimime devam ettim. Aynı zamanda lise sınavlarına hazırlandım. Lise sınavları sonucunda Seyide Daloğlu Anadolu Lisesinde eğitimime devam ettim. Buradaki eğitimimi bitirip üniversite sınavlarına hazırlandım. Üniversite sınavı sonucunda İnönü Üniversitesi Bilgisayar Mühendisliği bölümünü kazandım ve burada eğitimime devam ediyorum.', 'logo.png', 'YETENEKLERİM', 'HTML', '70', 'PHP', '70', 'JAVA', '50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_title` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `addresss` varchar(50) NOT NULL,
  `addresss_link` varchar(250) NOT NULL,
  `gsm` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_title`, `content`, `addresss`, `addresss_link`, `gsm`, `email`) VALUES
(1, 'İLETİŞİM', 'Benimle aşağıda belirtilen şekillerle iletişime geçebilirsiniz.', 'Kayseri,TÜRKİYE', 'https://www.google.com/maps?client=opera-gx&q=kayseri&oe=UTF-8&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjY1pXllLXwAhUEKuwKHX51CfMQ_AUoAXoECAEQAw', '05073856542', 'ahmetsenolcavdar@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `main`
--

CREATE TABLE `main` (
  `main_id` int(11) NOT NULL,
  `main_title` varchar(50) NOT NULL,
  `main_title2` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `github` varchar(50) NOT NULL,
  `discord` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `main`
--

INSERT INTO `main` (`main_id`, `main_title`, `main_title2`, `job_title`, `instagram`, `twitter`, `facebook`, `linkedin`, `github`, `discord`) VALUES
(1, 'Şenol', 'ÇAVDAR', 'Bilgisayar Mühendisi ', 'https://www.instagram.com/ahmetsenolcavdar/', 'dasdsadsadsada', 'https://www.facebook.com/ahmetsenol.cavdar/', 'https://www.linkedin.com/in/şenol-çavdar-3a1a18161', 'https://github.com/senolcavdar', 'https://discord.gg/gBKDUqtn');

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
(1, 'Şenol Çavdar', 'logo.png');

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
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'senol', 'senol@senol.com', '63d07e3daabf108033a0a8637a02552abe2031d7');

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
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `main`
--
ALTER TABLE `main`
  MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
