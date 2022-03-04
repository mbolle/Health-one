-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 04 mrt 2022 om 13:48
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `name`, `picture`) VALUES
(1, 'Roeitrainer', '/img/categories/roeitrainer.jpg'),
(2, 'Crosstrainer', '/img/categories/crosstrainer.jpg'),
(3, 'Hometrainer', '/img/categories/hometrainer.jpg'),
(4, 'Loopband', '/img/categories/loopband.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `description`, `category_id`) VALUES
(1, 'Focus Fitness Fox 3', '/img/categories/crosstrainer/cr1.jpg', 'De Focus Fitness Fox 3 is de ideale crosstrainer voor iedere thuissporter. Deze crosstrainer geeft je een stabiele training en is fluisterstil in gebruik. De verstelbare voetpedalen van de Fox 3 maken deze crosstrainer geschikt voor verschillende lichaams', 2),
(2, 'Focus Fitness Fox 4', '/img/categories/crosstrainer/cr2.jpg', 'Met de Focus Fitness Fox 4 haal je een uitstekende crosstrainer in huis. Deze crosstrainer biedt je met het zware vliegwiel aan de voorkant, de hoge mate van stabiliteit en de longitudinale pas een unieke fitnesservaring in je eigen huis! De Focus Fitness', 2),
(3, 'Focus Fitness Fox 3 iPlus', '/img/categories/crosstrainer/cr3.jpg', 'De Focus Fitness Fox 3 iPlus is de ideale crosstrainer voor de thuissporter. De Fox 3 iPlus is niet alleen stabiel en sterk, maar ook nog eens geruisloos. Naast een vliegwiel van 7 kg en verstelbare voetpedalen is de Fox 3 iPlus voorzien van de nieuwste t', 2),
(4, 'Focus Fitness Fox 3 HRC', '/img/categories/crosstrainer/cr4.jpg', 'De Fox 3 HRC is een crosstrainer van Focus Fitness met een uitstekende prijs-kwaliteitverhouding. Door de grote keuze aan trainingsprogramma\'s raak je nooit uitgetraind en de trainingscomputer geeft je inzicht in al je prestaties.', 2),
(5, 'Focus Fitness Senator iPlus', '/img/categories/crosstrainer/cr5.jpg', 'De strakke Focus Fitness Senator iPlus Crosstrainer biedt je een breed scala aan mogelijkheden en voorziet je van de meest moderne technieken. Zo is de Senator voorzien van een stabiel in totaliteit 67 kg wegend frame en een 12 kg zwaar frontwheel wat zor', 2),
(6, 'Focus Fitness Fox 5 HRC', '/img/categories/crosstrainer/cr6.jpg', 'De Focus Fitness Fox 5 HRC is dankzij de zeer hoge kwaliteit en betaalbare prijs niet voor niets een van onze bestverkochte en best beoordeelde crosstrainers. Mede dankzij het vliegwiel van 10 kg zorgt de Fox 5 ervoor dat je altijd op een natuurlijke en s', 2),
(7, 'Life Fitness Row GX', '/img/categories/roeitrainer/r1.jpg', 'De Life Fitness Row GX is een uitdagende \"full-body\" roeitrainer. Realistische waterweerstand en goede bewegingen geven je het gevoel dat je echt in het water roeit. Net als in echt water neemt de weerstand exponentieel toe. Roeien op dubbele snelheid kos', 1),
(10, 'Matrix Roeitrainer', '/img/categories/roeitrainer/r2.jpg', 'De Matrix Roeitrainer is het perfecte fitnessapparaat als je je conditie wilt verbeteren zonder je gewrichten te belasten. Deze roeitrainer van Matrix is stijlvol, comfortabel en buitengewoon efficiënt. Ideaal voor een goede workout vanuit je huis.', 1),
(11, 'VirtuFit Row 1.0', '/img/categories/roeitrainer/r3.jpg', 'De VirtuFit Row 1.0 is een eenvoudige roeitrainer die makkelijk in gebruik is. De roeitrainer met verstelbare elastomeer weerstand maakt een fijne roeibeweging. De ergonomisch gevormde zitting glijdt soepel over een stevig aluminium rail. De anti-slip ped', 1),
(12, 'Hammer Cobra XTR Plus II', '/img/categories/roeitrainer/r4.jpg', 'De Hammer COBRA XTR PLUS II roeier is voorzien van een vernieuwd LCD scherm met duidelijke weergave van alle trainingswaardes ondanks de hoeveelheid licht in de trainingsruimte. Tijdens een intensieve training is het belangrijk dat u altijd goed de traini', 1),
(13, 'Hammer Cardio 5.0 Ergometer', '/img/categories/hometrainer/h1.jpg', 'Maak kennis met de Hammer Cardio 5.0 Ergometer Hometrainer. Door de zeer diepe en brede instap is het opstappen op de Hammer Cardio 5.0 hometrainer zeer comfortabel en moeiteloos. Ideaal ter revalidatie en voor minder valide gebruikers, maar ook voor fana', 3),
(14, 'Life Fitness C3 GO', '/img/categories/hometrainer/h2.jpg', 'Mooi tot in de details en flink stevig. Dat is de Life Fitness C3 GO Hometrainer. Dit stille apparaat kan overal staan, ook als je geen stroomvoorziening in de buurt hebt. De Life Fitness C3 wekt namelijk zelf stroom op om de console aan de gang te houden', 3),
(15, 'Flow Fitness Perform B2i', '/img/categories/hometrainer/h3.jpg', 'Speciaal gemaakt voor fanatieke sporters en mensen die op zoek zijn naar een hometrainer voor semi-professionele doeleinden: de Flow Fitness Perform B2i Hometrainer. Deze hometrainer zorgt er met al haar opties voor dat geen training hetzelfde is. En dank', 3),
(16, 'Tunturi Competence F40', '/img/categories/hometrainer/h4.jpg', 'De Tunturi Competence F40 Hometrainer heeft goede eigenschappen om thuis lange fietstochten af te leggen. Deze toegankelijke hometrainer heeft een lage opstap en een snelstart functie om direct te beginnen. De draaiknop op het display schakelt tussen de 3', 3),
(17, 'Bowflex BXT128 Results Series', '/img/categories/loopband/l1.jpg', 'De Bowflex BXT128 Results Series Loopband is gebouwd om prestaties te leveren en wordt geleverd met alle functies die je verwacht van een loopband van Bowflex. Een krachtige motor met een vermogen van 3,5 pk continu biedt topsnelheden tot 19,3 km/u, terwi', 4),
(18, 'Life Fitness F3 GO', '/img/categories/loopband/l2.jpg', 'De Life Fitness F3 GO Loopband is kwaliteit zonder concessies. Een stevige en slanke loopband die na de training is op te klappen om ruimte te besparen. De hoge kwaliteit van de Life Fitness F3 zorgt voor jaren van fitness plezier. Met de gebruiksvriendel', 4),
(19, 'Finnlo Endurance IV USB', '/img/categories/loopband/l3.jpg', 'De loopband voor hardlopers met ambitie. Met een 2,5 PK motor, een maximale snelheid van 22 km/h, automatische hellingshoek tot 12%, een loopoppervlakte van 155 x 52 cm (professionele afmetingen!), een groot aantal trainingsprogramma\'s, drie hartslagbestu', 4),
(20, 'Flow Fitness Perform T3i', '/img/categories/loopband/l4.jpg', 'De Flow Fitness Perform T3i Loopband is een uitgebreide loopband voor zowel thuis als voor semi-professionele doeleinden. Met deze loopband heb je gegarandeerd lang plezier. Niet alleen qua levensduur, maar ook als het gaat om trainingen waarbij je eindel', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(3) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `name`, `rating`, `description`, `date`) VALUES
(1, 7, '7', 7, '7', '2021-11-21 12:52:14'),
(2, 7, '7', 7, '7', '2021-11-21 12:52:22'),
(3, 7, '7', 7, '7', '2021-11-21 12:52:25');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `time`
--

CREATE TABLE `time` (
  `opening_time` time NOT NULL,
  `day` varchar(255) NOT NULL,
  `id` int(10) NOT NULL,
  `closing_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `time`
--

INSERT INTO `time` (`opening_time`, `day`, `id`, `closing_time`) VALUES
('07:00:00', 'Maandag', 1, '20:00:00'),
('08:00:00', 'Dinsdag', 2, '20:00:00'),
('07:00:00', 'Woensdag', 3, '20:00:00'),
('08:00:00', 'Donderdag', 4, '20:00:00'),
('07:00:00', 'Vrijdag', 5, '20:30:00'),
('08:00:00', 'Zaterdag', 6, '17:00:00'),
('08:00:00', 'Zondag', 7, '13:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` enum('member','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES
(1, 'MelanieBolle@hotmail.com', '1234', 'Melanie', 'Bolle', 'admin');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ibfk_1` (`category_id`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product_id`);

--
-- Indexen voor tabel `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `time`
--
ALTER TABLE `time`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Beperkingen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
