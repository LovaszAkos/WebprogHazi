-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Nov 20. 13:35
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `wp3_fmnumu`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `egyetem`
--

CREATE TABLE `egyetem` (
  `id` int(11) NOT NULL,
  `campus` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `épület_kód` int(11) NOT NULL,
  `épület` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `hely` varchar(250) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `egyetem`
--

INSERT INTO `egyetem` (`id`, `campus`, `épület_kód`, `épület`, `hely`) VALUES
(0, 'Eger', 3, 'C épület', 'Eger, Leányka u. 4, 3300'),
(1, 'Eger', 2, 'B épület', 'Eger, Egészségház u. 4, 3300');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `egyetem`
--
ALTER TABLE `egyetem`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
