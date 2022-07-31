-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Nov 27. 12:34
-- Kiszolgáló verziója: 10.4.18-MariaDB
-- PHP verzió: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `database`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `dolgozo`
--

CREATE TABLE `dolgozo` (
  `adoszam` varchar(9) COLLATE utf8_hungarian_ci NOT NULL,
  `nev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `fizuID` int(1) DEFAULT NULL,
  `osztalyID` int(1) DEFAULT NULL,
  `reszlegID` int(1) DEFAULT NULL,
  `helyettesAdoszam` varchar(9) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `dolgozo`
--

INSERT INTO `dolgozo` (`adoszam`, `nev`, `fizuID`, `osztalyID`, `reszlegID`, `helyettesAdoszam`) VALUES
('018332191', 'Mészáros Donát', 2, 2, 2, '018332231'),
('018332192', 'Rácz Zsolt', 3, 2, 2, '018332191'),
('018332193', 'Pataki Adrián', 5, 2, 2, '018332192'),
('018332194', 'Hegedüs Valentin', 4, 2, 2, '018332193'),
('018332195', 'Novák Géza', 3, 2, 2, '018332194'),
('018332196', 'Barta Csongor', 5, 2, 2, '018332195'),
('018332197', 'Gáspár Árpád', 2, 2, 2, '018332196'),
('018332198', 'Bács György', 3, 2, 2, '018332197'),
('018332199', 'Bognár Vilmos', 3, 2, 3, '018332198'),
('018332200', 'Tóth Márton', 4, 2, 3, '018332199'),
('018332201', 'Budai András', 4, 2, 3, '018332200'),
('018332202', 'Apród Sándor', 2, 2, 3, '018332201'),
('018332203', 'Katona Bence', 5, 2, 3, '018332202'),
('018332204', 'Deák Nikolett', 4, 2, 3, '018332203'),
('018332205', 'Simon Dóra', 5, 2, 3, '018332204'),
('018332216', 'Papp Róbert', 2, 2, 2, '018332205'),
('018332217', 'Sándor Dénes', 3, 2, 2, '018332216'),
('018332218', 'Balogh Dezső', 5, 2, 2, '018332217'),
('018332219', 'Dobos Patrik', 4, 2, 2, '018332218'),
('018332220', 'Balog Norbert', 3, 2, 2, '018332219'),
('018332221', 'Bogdán Zalán', 5, 2, 2, '018332220'),
('018332222', 'Hajdú Adrián', 2, 2, 2, '018332221'),
('018332223', 'Takács Krisztián', 3, 2, 2, '018332222'),
('018332224', 'Miksa Mihály', 3, 2, 3, '018332223'),
('018332225', 'Virág Alexandra', 4, 2, 2, '018332224'),
('018332226', 'Mezei Barnabás', 3, 2, 2, '018332225'),
('018332227', 'Vörös Fruzsina', 5, 2, 2, '018332226'),
('018332228', 'Orsós Izabella', 2, 2, 2, '018332227'),
('018332229', 'Miksa Mihály', 3, 2, 2, '018332228'),
('018332230', 'Mezei Barnabás', 3, 2, 3, '018332229'),
('018332231', 'Takács Krisztián', 5, 2, 2, '018332230'),
('091242151', 'Zobor Ildikó', 5, 3, 3, '092432110'),
('091242152', 'Szabó Boglárka', 5, 3, 3, '091242151'),
('091242153', 'Balla Flóra', 2, 3, 3, '091242152'),
('091242154', 'Bakos Kamilla', 3, 3, 3, '091242153'),
('091242155', 'Molnár Dzsenifer', 2, 3, 2, '091242154'),
('091242156', 'Vörös Fruzsina', 3, 3, 2, '091242155'),
('091242157', 'Orsós Izabella', 4, 3, 2, '091242156'),
('091242158', 'Csonka Ágnes', 4, 3, 2, '091242157'),
('091242159', 'Virág Alexandra', 3, 3, 3, '091242158'),
('091242160', 'Mezei Barnabás', 5, 3, 3, '091242159'),
('091242161', 'Bognár Vilmos', 5, 3, 3, '091242160'),
('091242162', 'Tóth Márton', 2, 3, 2, '091242161'),
('091242163', 'Miksa Mihály', 3, 3, 2, '091242162'),
('091242164', 'Bács György', 4, 3, 2, '091242163'),
('091242165', 'Budai András', 4, 3, 2, '091242164'),
('091242166', 'Mezei Barnabás', 3, 3, 3, '091242165'),
('091242167', 'Takács Krisztián', 5, 3, 3, '091242166'),
('091242168', 'Barta Csongor', 5, 3, 3, '091242167'),
('091242169', 'Gáspár Árpád', 3, 3, 2, '091242168'),
('091242170', 'Apród Sándor', 4, 3, 2, '091242169'),
('092432110', 'Fekete Vanessza', 5, 3, 3, '092432149'),
('092432147', 'Miksa Eszter', 4, 3, 2, '092432166'),
('092432148', 'Kis Dominika', 4, 3, 2, '092432147'),
('092432149', 'Pál Károly', 3, 3, 3, '092432148'),
('092432163', 'Miksa Eszter', 5, 3, 2, '092432192'),
('092432164', 'Balogh Adél', 2, 3, 2, '092432163'),
('092432165', 'Pál Anita', 2, 3, 2, '092432164'),
('092432166', 'Halász Judit', 3, 3, 2, '092432165'),
('092432190', 'Bogdán Renáta', 5, 3, 2, '091242170'),
('092432191', 'Orsós Fanni', 4, 3, 2, '092432190'),
('092432192', 'Virág Alexandra', 3, 3, 2, '092432191'),
('092432193', 'Rácz Zsolt', 3, 2, 2, '092432225'),
('092432194', 'Pataki Adrián', 5, 2, 2, '092432193'),
('092432195', 'Hegedüs Valentin', 4, 2, 2, '092432194'),
('092432196', 'Novák Géza', 3, 2, 2, '092432195'),
('092432197', 'Molnár Dzsenifer', 2, 3, 2, '092432196'),
('092432198', 'Vörös Fruzsina', 3, 3, 2, '092432197'),
('092432199', 'Orsós Izabella', 4, 3, 2, '092432198'),
('092432200', 'Csonka Ágnes', 4, 3, 2, '092432199'),
('092432201', 'Bakos Kamilla', 3, 3, 3, '092432200'),
('092432202', 'Molnár Dzsenifer', 2, 3, 2, '092432201'),
('092432203', 'Vörös Fruzsina', 3, 3, 2, '092432202'),
('092432204', 'Orsós Izabella', 4, 3, 2, '092432203'),
('092432205', 'Csonka Ágnes', 4, 3, 2, '092432204'),
('092432206', 'Virág Alexandra', 3, 3, 3, '092432205'),
('092432207', 'Virág Alexandra', 3, 3, 3, '092432206'),
('092432208', 'Mezei Barnabás', 5, 3, 3, '092432207'),
('092432209', 'Budai András', 4, 3, 2, '092432208'),
('092432210', 'Mezei Barnabás', 3, 3, 3, '092432209'),
('092432211', 'Takács Krisztián', 5, 3, 3, '092432210'),
('092432212', 'Barta Csongor', 5, 3, 3, '092432211'),
('092432213', 'Gáspár Árpád', 3, 3, 2, '092432212'),
('092432214', 'Apród Sándor', 4, 3, 2, '092432213'),
('092432215', 'Fekete Vanessza', 5, 3, 3, '092432214'),
('092432216', 'Barta Csongor', 5, 2, 2, '092432215'),
('092432217', 'Gáspár Árpád', 2, 2, 2, '092432216'),
('092432218', 'Bács György', 3, 2, 2, '092432217'),
('092432219', 'Bognár Vilmos', 3, 2, 3, '092432218'),
('092432220', 'Balogh Adél', 2, 3, 2, '092432219'),
('092432221', 'Pál Anita', 2, 3, 2, '092432220'),
('092432222', 'Halász Judit', 3, 3, 2, '092432221'),
('092432223', 'Bogdán Renáta', 5, 3, 2, '092432222'),
('092432224', 'Tóth Márton', 4, 2, 3, '092432223'),
('092432225', 'Budai András', 4, 2, 3, '092432224'),
('118654321', 'Főnök János', 1, 1, 1, NULL),
('128654321', 'Főnök Mónika', 1, 2, 1, NULL),
('138654321', 'Főnök Elemér', 1, 3, 1, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fizetes`
--

CREATE TABLE `fizetes` (
  `fizuID` int(1) NOT NULL,
  `megnevezes` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `osszeg` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `fizetes`
--

INSERT INTO `fizetes` (`fizuID`, `megnevezes`, `osszeg`) VALUES
(1, 'vezérigazgató', 1000000),
(2, 'vezető', 600000),
(3, 'felső', 450000),
(4, 'középső', 350000),
(5, 'alsó', 250000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `osztaly`
--

CREATE TABLE `osztaly` (
  `osztalyID` int(1) NOT NULL,
  `osztalyNev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `vezetiAdoszam` varchar(9) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `osztaly`
--

INSERT INTO `osztaly` (`osztalyID`, `osztalyNev`, `vezetiAdoszam`) VALUES
(1, 'főnökség', '118654321'),
(2, 'ügyfélszolgálat', '128654321'),
(3, 'beszerzés', '138654321');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `reszleg`
--

CREATE TABLE `reszleg` (
  `reszlegID` int(1) NOT NULL,
  `reszlegNev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `osztalyID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `reszleg`
--

INSERT INTO `reszleg` (`reszlegID`, `reszlegNev`, `osztalyID`) VALUES
(1, 'vezetőség', 1),
(1, 'vezetőség', 2),
(1, 'vezetőség', 3),
(2, 'HR', 1),
(2, 'HR', 2),
(2, 'HR', 3),
(3, 'könyvelés', 1),
(3, 'könyvelés', 2),
(3, 'könyvelés', 3);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `dolgozo`
--
ALTER TABLE `dolgozo`
  ADD PRIMARY KEY (`adoszam`),
  ADD UNIQUE KEY `adoszam` (`adoszam`),
  ADD KEY `DOLGOZO` (`reszlegID`),
  ADD KEY `fizuID` (`fizuID`,`osztalyID`,`helyettesAdoszam`),
  ADD KEY `osztalyID` (`osztalyID`),
  ADD KEY `helyettesAdoszam` (`helyettesAdoszam`);

--
-- A tábla indexei `fizetes`
--
ALTER TABLE `fizetes`
  ADD PRIMARY KEY (`fizuID`),
  ADD UNIQUE KEY `fizuID` (`fizuID`);

--
-- A tábla indexei `osztaly`
--
ALTER TABLE `osztaly`
  ADD PRIMARY KEY (`osztalyID`),
  ADD UNIQUE KEY `osztalyID` (`osztalyID`),
  ADD KEY `vezetiAdoszam` (`vezetiAdoszam`);

--
-- A tábla indexei `reszleg`
--
ALTER TABLE `reszleg`
  ADD PRIMARY KEY (`reszlegID`,`osztalyID`),
  ADD KEY `osztalyID` (`osztalyID`);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `dolgozo`
--
ALTER TABLE `dolgozo`
  ADD CONSTRAINT `DOLGOZO` FOREIGN KEY (`reszlegID`) REFERENCES `reszleg` (`reszlegID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dolgozo_ibfk_2` FOREIGN KEY (`fizuID`) REFERENCES `fizetes` (`fizuID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dolgozo_ibfk_3` FOREIGN KEY (`osztalyID`) REFERENCES `osztaly` (`osztalyID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dolgozo_ibfk_4` FOREIGN KEY (`helyettesAdoszam`) REFERENCES `dolgozo` (`adoszam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `osztaly`
--
ALTER TABLE `osztaly`
  ADD CONSTRAINT `osztaly_ibfk_1` FOREIGN KEY (`vezetiAdoszam`) REFERENCES `dolgozo` (`adoszam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `reszleg`
--
ALTER TABLE `reszleg`
  ADD CONSTRAINT `reszleg_ibfk_1` FOREIGN KEY (`osztalyID`) REFERENCES `osztaly` (`osztalyID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
