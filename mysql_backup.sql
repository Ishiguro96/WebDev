-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 07 Gru 2018, 01:35
-- Wersja serwera: 5.7.23
-- Wersja PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Baza danych: `it`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(2048) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `source` varchar(128) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`ID`, `title`, `content`, `image`, `source`, `author`, `date`, `news_category`) VALUES
(6, 'Is the new-look SK Telecom T1 a return to League of Legends dynasty?', '\"Everyone at the Nexon Arena and you in the chat were there when the dream died for SK Telecom T1,\" English-language caster Christopher \"Papasmithy\" Smith said at the end of the League of Legends World Championship South Korean regional qualifier. Gen.G would advance to play Griffin. SKT were headed home. The camera panned to a smiling Jo \"CoreJJ\" Yong-in in the Gen.G booth, whose team had just eliminated the winningest organization in League of Legends history from world championship contention. \"Their run that saw them hit three consecutive worlds finals, win two out of three in 2015, 2016, before falling to then-Samsung Galaxy [now Gen.G], does end today,\" Papasmithy said.\r\n\r\nA lot of how SKT evolves this year will depend on Mata, both in his roam timing -- Teddy has already proven from his time with Kwon \"Wraith\" Ji-min that he\'s more than capable of laning safely in a 1v2 -- and his leadership. Mata is known as an excellent shot-caller as well as his smart vision placement. For the first time, we might see SKT\'s support take over vision net duties, helping Clid and Haru stay safe.\r\n\r\nOn paper, this lineup does mark a departure from SKT\'s past. Now we just have to see them play.', 'sample1.png', 'http://www.espn.com/esports/story/_/id/25409763/is-new-look-sk-telecom-t1-return-league-legends-dynasty', 'Ishiguro', '2018-12-06 23:26:54', 1),
(7, 'League of Legends Roster Shuffle 2018: Signings, roster moves, trades and more', 'The League of Legends free-agency period opened Monday, and players and teams from around the world have begun the hunt for their next big signing or new destination. Here are the results of the roster shuffle for members of the North American, European, Chinese and South Korean regions of pro League of Legends play.', 'sample2.png', 'http://www.espn.com/esports/story/_/id/25304828/league-legends-roster-shuffle-2018-signings-roster-moves-trades-more', 'Ishiguro', '2018-12-06 23:45:43', 1),
(8, 'CS:GO BECOMES FREE-TO-PLAY! Battle Royale mode in new update!', 'The game has become fully free-to-play after Valve hinted at their plans of making it so with previous updates, which allowed newcomers to utilize certain parts of the game free of charge, such as playing offline and spectating matches. A new battle-royale game mode Danger Zone, which also comes with a case of the same name with 17 community-designed skins, is now available to be played solo or in teams of two to three players.', 'sample3.png', 'https://www.hltv.org/news/25581/csgo-becomes-free-to-play-battle-royale-mode-in-new-update', 'Ishiguro', '2018-12-07 01:21:52', 2),
(13, 'Jakis sobie post', 'Ziuziuziuz\r\n\r\nMoze bedzie dzis 5 bo w sumie duzo zrobilismy\r\n\r\nAle sie nie łudźmy\r\n\r\nNasza Pani jest surowa :c', '', 'asdasdads', 'Ishiguro', '2018-12-07 01:35:08', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `news_category` (`news_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`news_category`) REFERENCES `news_category` (`ID`);
