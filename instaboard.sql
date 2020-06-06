-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Cze 2020, 04:02
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `instaboard`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `image_text` varchar(250) DEFAULT NULL,
  `profil_fk` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `post`
--

INSERT INTO `post` (`id`, `image`, `image_text`, `profil_fk`) VALUES
(11, 'obrazek.jpg', 'Jeziorko :)', NULL),
(12, 'wolf_24-wallpaper-600x800.jpg', 'Wolf Wolf Wolf Wolf ! ', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `profil`
--

CREATE TABLE `profil` (
  `login` varchar(20) NOT NULL,
  `liczba_like` int(16) NOT NULL,
  `zdj` blob NOT NULL,
  `uzytkownicy_fk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `haslo` varchar(250) NOT NULL,
  `email` varchar(30) NOT NULL,
  `narodowosc` varchar(30) NOT NULL,
  `plec` varchar(20) NOT NULL,
  `blokada` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`, `narodowosc`, `plec`, `blokada`) VALUES
(10, 'anna.lena', '$2y$10$IfuFs/5H.8EcWqKlnXHNtOGHfkk42/mSaq09vEo2/KahNzP.UuOmu', 'onnz2@wp.pl', 'Polska', 'Kobieta', 0),
(11, 'magdalena00', '$2y$10$IfuFs/5H.8EcWqKlnXHNtOGHfkk42/mSaq09vEo2/KahNzP.UuOmu', 'marranna@wp.pl', 'Polska', 'Kobieta', 0),
(12, 'admin', '$2y$10$0GnJ7Hy6HIQzoPh2QPeXpOC7Qy2axf6UN0aJ/5Ouh70wC2V7jqMHK', 'admin@wp.pl', 'Polska', 'Mężczyzna', 0),
(13, 'test', '$2y$10$IfuFs/5H.8EcWqKlnXHNtOGHfkk42/mSaq09vEo2/KahNzP.UuOmu', 'test@o2.pl', 'Anglia', 'Mężczyzna', 0),
(14, 'mar3k', '$2y$10$7ijd93uJw8rmBWoa51t9hO9l8QCSIgRVnRPKBv4.6yUTTR/A8uaEm', 'marek@wp.pl', 'Portugalia', 'Mężczyzna', 0),
(20, 'bety__3', '$2y$10$nG5Cv0Xd2JonHh3C0619/usU5POFVHqNiTP.B0.9KkEtYIUhfqC.m', 'bety@onet.pl', 'Anglia', 'Kobieta', 0),
(21, 'tommy-steve', '$2y$10$AdU/bUDyL.WxnhNq2fqcxu0/NZPXm2q42RN44FIZQldUYcYjx7F3m', 'tomyy@o2.pl', 'Anglia', 'Mężczyzna', 1),
(22, 'color_jami3', '$2y$10$FCUg1RDyt2dP0t1m6UCVe.4f2E6Ho4aOgASPo..k6AybUltU79jY6', 'jami3@cos.com', 'Anglia', 'Kobieta', 0),
(23, 'rexys', '$2y$10$kESINOtFve.7Z4oRAbEFZO0/r8DyGgEUK34zDMeXfp0/alskSaIR.', 'rexy@wp.pl', 'Luksemburg', 'Kobieta', 1),
(24, 'colin_5', '$2y$10$lqihkQoaKRFnso8ygGsl8OBsw8bVkNWtmRNun2sGYzPSV9Vtp9WvS', 'colin5@o2.pl', 'Włochy', 'Mężczyzna', 0),
(25, 'wuLEI', '$2y$10$8vyIfZUwhAQGLV989wHleuw1L1slYRSmk6YrR8la.gejJoC3Zcd8W', 'lei@ii.com', 'Chiny', 'Mężczyzna', 0),
(26, 'kanny_s', '$2y$10$0YSJqbqnApwl5SutFJwoeuBwTEJNejvTRd6QgZInWGnT3KsPNqdli', 'kenny@mail.fra', 'Japonia', 'Mężczyzna', 0),
(27, 'stewie2k', '$2y$10$pOL/SPcfgjCabgucpKgbWO1EPN3/nRRJGETrBPM4G0Na.Lhyx71wS', 'stewie2@wp.pl', 'Kanada', 'Mężczyzna', 0),
(28, 'stewie2k22', '$2y$10$8mRZiGxUJ2vK6r0scfkhCO50Pg5Ui0uSfGkomdboCIjLx681Ynm1.', 'swrr@wp.pl', 'Luksemburg', 'Mężczyzna', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zgloszenia`
--

CREATE TABLE `zgloszenia` (
  `id_zgloszenia` int(11) NOT NULL,
  `login_podejrzanego` varchar(20) NOT NULL,
  `przyczyna` varchar(100) NOT NULL,
  `komentarz` varchar(150) DEFAULT NULL,
  `uzytkownik_fk` varchar(20) NOT NULL,
  `post_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profil_fk` (`profil_fk`);

--
-- Indeksy dla tabeli `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`login`) USING BTREE,
  ADD KEY `uzytkownicy_fk` (`uzytkownicy_fk`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`login`),
  ADD UNIQUE KEY `unique_email` (`id`,`login`,`haslo`,`email`) USING BTREE;

--
-- Indeksy dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  ADD PRIMARY KEY (`id_zgloszenia`),
  ADD KEY `uzytkownik_fk` (`uzytkownik_fk`),
  ADD KEY `post_fk` (`post_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  MODIFY `id_zgloszenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`profil_fk`) REFERENCES `profil` (`login`);

--
-- Ograniczenia dla tabeli `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`uzytkownicy_fk`) REFERENCES `uzytkownicy` (`login`) ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  ADD CONSTRAINT `zgloszenia_ibfk_1` FOREIGN KEY (`uzytkownik_fk`) REFERENCES `uzytkownicy` (`login`) ON UPDATE CASCADE,
  ADD CONSTRAINT `zgloszenia_ibfk_2` FOREIGN KEY (`post_fk`) REFERENCES `post` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
