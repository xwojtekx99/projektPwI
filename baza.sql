-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Mar 2020, 01:48
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
  `id_postu` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `link_zdj_lub_video` text NOT NULL,
  `liczba_like` int(16) NOT NULL,
  `opis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `post`
--

INSERT INTO `post` (`id_postu`, `login`, `link_zdj_lub_video`, `liczba_like`, `opis`) VALUES
(1, 'math_gam', 'https://images.pexels.com/photos/594610/pexels-photo-594610.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 551, 'Nuuudyyy'),
(2, 'opp.wiktor', 'https://images.pexels.com/photos/1595387/pexels-photo-1595387.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 801, 'Kolejny dzien w pracy '),
(3, 'magdalena00', 'https://images.pexels.com/photos/346751/pexels-photo-346751.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 964, 'Zakupy <333'),
(4, 'magdalena.0', 'https://images.pexels.com/photos/977845/pexels-photo-977845.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 994, 'Nie ma jak to kawa ;D'),
(5, 'matgr', 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 41, 'Nowy JA :)'),
(6, 'joanna_Kowal', 'https://images.pexels.com/photos/1462637/pexels-photo-1462637.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 587, 'Przerwa w pracy :D ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `profil`
--

CREATE TABLE `profil` (
  `login` varchar(20) NOT NULL,
  `liczba_like` int(16) NOT NULL,
  `ilosc_obserwatorow` int(16) NOT NULL,
  `ilosc_obserwujacych` int(16) NOT NULL,
  `ilosc_postow` int(11) NOT NULL,
  `link_do_zdjprofil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `profil`
--

INSERT INTO `profil` (`login`, `liczba_like`, `ilosc_obserwatorow`, `ilosc_obserwujacych`, `ilosc_postow`, `link_do_zdjprofil`) VALUES
('anna-biala', 911984, 2078, 279, 107, 'https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
('budka=suflera', 858844, 554, 45465488, 47, 'https://cdn.galleries.smcloud.net/t/galleries/gf-gc2g-tMMD-421G_budka-suflera-w-nowym-skladzie-1920x1080-nocrop.jpg'),
('martin22', 8844, 221, 411, 29, 'https://images.pexels.com/photos/736716/pexels-photo-736716.jpeg?auto='),
('martin222', 8844, 545, 503, 91, 'https://images.pexels.com/photos/736716/pexels-photo-736716.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `narodowosc` varchar(30) NOT NULL,
  `plec` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `email`, `narodowosc`, `plec`) VALUES
(1, 'budka=suflera', 'budka@op.pl', 'Polska', 'Mężczyzna'),
(2, 'maranna', 'marranna@wp.pl', 'Zambia', 'Kobieta'),
(3, 'kortelart', 'onnz2@wp.pl', 'Anglia', 'Mężczyzna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zgloszenia`
--

CREATE TABLE `zgloszenia` (
  `id_zgloszenia` int(11) NOT NULL,
  `login_podejrzanego` varchar(20) NOT NULL,
  `przyczyna` varchar(40) NOT NULL,
  `komentarz` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zgloszenia`
--

INSERT INTO `zgloszenia` (`id_zgloszenia`, `login_podejrzanego`, `przyczyna`, `komentarz`) VALUES
(1, 'budka=suflera', 'Podszywanie się ', 'Właściciel profilu podszywa się pod inną osobę/grupę osób'),
(2, 'qwaart', 'Niestosowne treści', 'Obraźliwe zdjęcia '),
(3, 'anna.bell', 'Promowanie alkoholu', 'Użytkownik reklamuje na swoim profilu treści zachęcające do spożywania alkoholu '),
(4, 'ytt.Stive', 'Przeklenstwa', 'Użytkownik stosuje obraźliwe słowa w opisie swoich zdjęć. ');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_postu`),
  ADD UNIQUE KEY `UNIQUE` (`login`);

--
-- Indeksy dla tabeli `profil`
--
ALTER TABLE `profil`
  ADD UNIQUE KEY `UNIQUE` (`login`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`login`);

--
-- Indeksy dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  ADD PRIMARY KEY (`id_zgloszenia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `post`
--
ALTER TABLE `post`
  MODIFY `id_postu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  MODIFY `id_zgloszenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
