-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Ağu 2022, 20:33:09
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kütüphane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitaplar`
--

CREATE TABLE `kitaplar` (
  `id` int(11) NOT NULL,
  `kitap_ad` varchar(255) NOT NULL,
  `kitap_yazar` varchar(255) NOT NULL,
  `tur_id` int(5) NOT NULL,
  `kitap_durum` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kitaplar`
--

INSERT INTO `kitaplar` (`id`, `kitap_ad`, `kitap_yazar`, `tur_id`, `kitap_durum`) VALUES
(12, 'Dönüşüm', 'Franz Kafka', 1, 1),
(16, 'Bir Delinin Anı Defteri', 'Nikolay Gogol', 4, 1),
(19, 'Nefes Nefese', 'Ayşe Kulin', 4, 1),
(20, 'Var Mısın ?', 'Doğan Cüceloğlu', 1, 1),
(21, 'Ağrı Dağı Efsanesi', 'Yaşar Kemal', 4, 0),
(24, 'Hayvan Çiftliği', 'George Orwell', 4, 0),
(25, 'İnsan Neyle Yaşar?', 'Lev Tolstoy', 4, 1),
(28, 'Ustam Ve Ben', 'Elif Şafak', 2, 1),
(29, 'Kayıp Sicil', 'Soner Yalçın', 3, 1),
(30, 'Zamanın Kısa Tarihi', 'Stephen Hawking', 3, 0),
(31, 'Fareler Ve İnsanlar', 'John Steinbeck', 4, 1),
(32, 'Uçurtma Avcısı', 'Khaled Hosseini', 4, 0),
(33, 'Devlet', 'Platon', 2, 1),
(34, 'Şair Evlenmesi', 'Şinasi', 7, 1),
(35, 'Bülbülü Öldürmek', 'Harper Lee', 4, 1),
(36, 'Bütün Şiirler', 'Orhan Veli ', 9, 1),
(37, 'sdsds', 'vxxxv', 1, 1),
(38, 'Sinekli Bakkal ', 'Halide Edip Adıvar', 4, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitapturleri`
--

CREATE TABLE `kitapturleri` (
  `id` int(11) NOT NULL,
  `baslik` varchar(50) NOT NULL,
  `aciklama` text NOT NULL,
  `durum` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kitapturleri`
--

INSERT INTO `kitapturleri` (`id`, `baslik`, `aciklama`, `durum`) VALUES
(1, 'Psikoloji', 'Psikoloji veya Ruh bilimi, davranışı ve zihni inceleyen bilimdir.', 1),
(2, 'Felsefe', 'Varlık, bilgi, gerçek, adalet, güzellik, doğruluk, akıl ve dil gibi konularla ilgili kitaplardır.', 1),
(3, 'Tarih', 'Tarih ile ilgili bilgiler içerir.', 1),
(4, 'Roman', 'Roman, genellikle düzyazı biçiminde yazılan , insanın deneyimlerini bir olay örgüsü içinde aktaran ve genellikle kitap halinde basılan bir edebî tür.', 1),
(5, 'Biyografi', 'Kişinin yaşam öyküsünü anlatan kitaplardır.', 1),
(6, 'Spor', 'Spor ile ilgili bilgi veren kitaplardır.', 1),
(7, 'Tiyatro', 'Komedi konulu kitaplardır.', 1),
(8, 'Anı', 'Olay örgüsü anlatan kısa kitaplardır.', 1),
(9, 'Şiir', 'Şiirlerden oluşan kitaplardır.', 1),
(10, 'Dünya Klasikleri', 'Dünya klasiklerinden oluşan kitaplardır.', 1),
(11, 'Gezi', 'Seyahat edilirken yaşanan olaylar anlatılır.', 1),
(12, 'din', 'din ile ilgili bilgiler', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kitaplar`
--
ALTER TABLE `kitaplar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kitapturleri`
--
ALTER TABLE `kitapturleri`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kitaplar`
--
ALTER TABLE `kitaplar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `kitapturleri`
--
ALTER TABLE `kitapturleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
