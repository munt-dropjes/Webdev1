-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 19, 2025 at 03:06 PM
-- Server version: 11.5.2-MariaDB-ubu2404
-- PHP Version: 8.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ContactInfo`
--

CREATE TABLE `ContactInfo` (
  `id` int(11) NOT NULL,
  `speltakId` int(11) NOT NULL,
  `naam` varchar(255) DEFAULT NULL,
  `functie` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefoonnummer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `ContactInfo`
--

INSERT INTO `ContactInfo` (`id`, `speltakId`, `naam`, `functie`, `email`, `telefoonnummer`) VALUES
(1, 6, 'Daniël Zwart', 'Webbeheerder', 'webmaster@camerons.nl', '0031633384824'),
(8, 2, 'Akela Zwart', 'Akela (Welpen)', 'welpen@camerons.nl', ''),
(9, 3, 'Jilles Collet', 'Hopman (Verkenners)', 'verkenners@camerons.nl', ''),
(10, 8, 'Roland van Rooyen', 'Verhuurcoördinator', 'verhuur@camerons.nl', ''),
(11, 8, 'Sjoerd Struiksma', 'Groepssecretaris (Bestuur)', 'secretaris@camerons.nl', '');

-- --------------------------------------------------------

--
-- Table structure for table `Documenten`
--

CREATE TABLE `Documenten` (
  `id` int(11) NOT NULL,
  `typeId` int(11) NOT NULL,
  `titel` varchar(255) DEFAULT NULL,
  `document` varchar(255) NOT NULL,
  `editie` varchar(255) DEFAULT NULL,
  `speltakId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `Documenten`
--

INSERT INTO `Documenten` (`id`, `typeId`, `titel`, `document`, `editie`, `speltakId`) VALUES
(6, 1, NULL, '../documenten/cadugraaf/cadugraaf_5.pdf', '5', NULL),
(7, 3, NULL, '../documenten/groep/privacyverklaring.pdf', NULL, NULL),
(8, 2, NULL, '../documenten/groep/smoelenboek.pdf', NULL, NULL),
(9, 6, NULL, '../documenten/groep/vertrouwenspersoon.pdf', NULL, NULL),
(10, 1, NULL, '../documenten/cadugraaf/cadugraaf_6.pdf', '6', NULL),
(11, 5, NULL, '../documenten/groep/aanmeldingsprocedure.pdf', NULL, NULL),
(12, 4, NULL, '../documenten/speltak/verkenners/LTP.pdf', NULL, 3),
(13, 7, 'Groene Boekje', '../documenten/speltak/verkenners/groene_boekje.pdf', '6', 3),
(14, 7, 'Blauwe Boekje', '../documenten/speltak/verkenners/blauwe_boekje.pdf', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `DocumentType`
--

CREATE TABLE `DocumentType` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `DocumentType`
--

INSERT INTO `DocumentType` (`id`, `type`) VALUES
(1, 'Cadugraaf'),
(2, 'Smoelenboek'),
(3, 'Privacyverklaring'),
(4, 'LTP'),
(5, 'Aanmeldingsprocedure'),
(6, 'Vertrouwenspersoon'),
(7, 'Boekje');

-- --------------------------------------------------------

--
-- Table structure for table `ErrorLog`
--

CREATE TABLE `ErrorLog` (
  `datetime` datetime DEFAULT current_timestamp(),
  `code` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `stackTrace` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `ErrorLog`
--

INSERT INTO `ErrorLog` (`datetime`, `code`, `message`, `stackTrace`) VALUES
('2025-01-16 00:00:00', '0', 'Invalid email or password', NULL),
('2025-01-16 00:00:00', '0', 'Invalid email or password', NULL),
('2025-01-16 01:21:49', '0', 'Invalid email or password', NULL),
('2025-01-19 13:08:41', 'HY093', 'SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens', NULL),
('2025-01-19 13:08:54', 'HY093', 'SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens', NULL),
('2025-01-19 13:10:04', 'HY093', 'SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens', NULL),
('2025-01-19 13:10:36', 'HY093', 'SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens', NULL),
('2025-01-19 13:11:01', 'HY093', 'SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens', NULL),
('2025-01-19 13:12:29', 'HY093', 'SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens', NULL),
('2025-01-19 13:12:49', 'HY093', 'SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens', NULL),
('2025-01-19 14:36:41', '0', 'Something went wrong, with creating user', NULL),
('2025-01-19 14:38:00', '0', 'Something went wrong, with creating user', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE `Roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `Roles`
--

INSERT INTO `Roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'content'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `Speltak`
--

CREATE TABLE `Speltak` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `Speltak`
--

INSERT INTO `Speltak` (`id`, `naam`) VALUES
(1, 'Admin'),
(2, 'Welpen'),
(3, 'Verkenners'),
(4, 'Rowans'),
(5, 'Rovers'),
(6, 'Staf'),
(7, 'Leiding'),
(8, 'Stam');

-- --------------------------------------------------------

--
-- Table structure for table `SpeltakInfo`
--

CREATE TABLE `SpeltakInfo` (
  `id` int(11) NOT NULL,
  `speltakId` int(11) NOT NULL,
  `contactId` int(11) DEFAULT NULL,
  `leeftijd` varchar(255) NOT NULL,
  `tijden` varchar(255) NOT NULL,
  `tekst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `SpeltakInfo`
--

INSERT INTO `SpeltakInfo` (`id`, `speltakId`, `contactId`, `leeftijd`, `tijden`, `tekst`) VALUES
(1, 2, 8, '7 tot 11 jaar', 'zaterdagmiddag van 14:30 tot 17:30 uur', 'Bij de speltak welpen zijn de jongens in de leeftijd van 7-11 jaar. De welpenhorde is opgedeeld in vijf subgroepjes die nesten genoemd worden.\r\n        Een nest bestaat uit een gids, een helper en nog 3-4 jongere welpen. Het leidingteam bestaat uit circa 6 man/vrouw.</p>\r\n        <img class=\"center\" id=\"width\" src=\"img/welpen/welpen_001.jpg\">\r\n        <p>Aan het begin van de middag wordt de horderoep gedaan. Daarna wordt er gestart met een spel om het energieoverschot kwijt te raken. \r\n        In principe gaan de welpen altijd naar buiten, op het eigen terrein of de duinen in. Het programma is zeer gevarieerd. \r\n        De ene keer wordt er vlaggenroof of levend kwartet gespeeld, de andere keer houden ze zich bezig met technieken zoals knopen, EHBO, kaart en kompas etc.</p>\r\n        <img class=\"center\" id=\"width\" src=\"img/welpen/welpen_002.jpg\">\r\n        <p>Een aantal keer in het seizoen is er een weekendkamp van zaterdag op zondag. Maar het hoogtepunt van het jaar is het zomerkamp.\r\n        De welpen verblijven dan een week lang in een clubhuis van een andere groep ergens in Nederland. Het zomerkamp is altijd in een bepaald thema zoals Robin Hood, Maffia of het Wilde Westen.</p>'),
(2, 3, 9, '11 tot 16 jaar', 'zaterdagmiddag van 14:00 tot 18:00 uur', 'De verkenners zijn het logische vervolg op de welpen. Verkenner word je als je tussen de 11 en 15 jaar bent. Elke zaterdag wordt er vanaf 14\r\n      uur tot 18 uur opkomst gedraaid op ons terrein bij kraantje lek. De verkenners zijn onderverdeeld in 5 subgroepen (patrouilles) en staan onder\r\n      leiding van een stafteam van 6 personen. <br><br>\r\n      De verkenners houden zich bezig met de wat stoerdere padvinderstechnieken. Zo pionieren ze diverse dingen zoals een familieschommel of een reuzenrad.\r\n      Ook worden er geregeld touwbruggen en kabelbanen gemaakt, volgen ze een kaart en kompas route of gaan ze met zelf gebouwde vlotten het water op.\r\n      Daarnaast is er natuurlijk ook altijd tijd voor een potje sport en spel.<br><br>\r\n      Drie maal per jaar hebben de verkenners een weekend. Dan slapen ze soms in een tent, soms op een zelf gebouwd stapelbed maar ook wel eens in de Limburgse mergelgroeve.<br><br>\r\n      Aan het einde van het seizoen gaan de verkenners twee weken op zomerkamp. Normaal gesproken kamperen ze dan ergens in Nederland maar eens in de vier jaar vertrekken\r\n      de verkenners naar Schotland om daar te kamperen.<br><br>'),
(3, 4, NULL, 'vanaf 16 jaar', 'zaterdagmiddag van 13:00 tot ongeveer 22:00 uur', 'Als je te oud bent geworden om nog een heel nieuw seizoen bij de verkenners te blijven dan maken veel verkenners de keuze om \'over te vliegen\' \r\n      naar de rowans. Deze kleinste speltak van onze groep is bedoeld voor jongens tussen de 16 & 18 jaar. Het idee is dat je dan zonder verdere begeleiding, \r\n      hooguit wat aansturing van een enkele volwassene, je eigen dagprogramma verzint en uitvoert. Meestal gaat dit zonder problemen omdat de rowans elkaar \r\n      vaak al van jongs af aan kennen.</p>\r\n      <p>De programma&#39;s die bedacht worden, zijn vaak pionieren en trappersbanen bouwen, met als groot verschil dat het allemaal wat heftiger en extremer \r\n      is dan hoe het bij de verkenners gedaan werd. De kennis die je als verkenner opgedaan hebt, ga je als rowan gebruiken om nieuwe dingen te verzinnen \r\n      of andere dingen te perfectioneren. Vaak kom je ook voor een probleem te staan omdat het dan niet helemaal zo loopt zoals je van plan was, als rowan \r\n      moet je dan instaat zijn om het op je eigen manier zo goed en veilig mogelijk op te lossen.</p>\r\n      <p>Een ander niet te vergeten taak van de rowans is onderhoud aan clubhuis en soms ook aan het terrein. Als rowan heb je namelijk je eigen clubhuis \r\n      (TNO) waarvan de rowans door de jaren heen hun eigen hanghok hebben gemaakt. Je bent dan ook vrij om zelf te bepalen wanneer je blijft slapen.</p>\r\n      <p>Bij de verkenners is het vanzelf sprekend dat je aan het eind van het seizoen voor twee weken op zomerkamp gaat en meestal aan het begin van de vakantie. \r\n      Omdat je als rowan de dingen zelf mag bepalen mag je ook zelf bepalen of je op zomerkamp gaat en wanneer. Je kunt je inschrijven voor een gezamenlijke kamp \r\n      in het buitenland waar je veel andere mensen leert kennen of je besluit met de hele speltak te gaan trekken door de wildernis in bijvoorbeeld Scandinavi&#235; of Schotland.</p>\r\n      <p>Het is zeer belangrijk dat er een goede en leuke groep rowans blijft bestaan want deze mensen worden later vaak welpenleiding of staf van de verkenners.</p>'),
(4, 8, NULL, '', '', '<p><h4>De stam</h4>De stam van de Camerons - Duinzwervers is in 1997 opgericht door een zestal oud-leidinggevenden.</p>\r\n      <p>De stam is een speltak waarbinnen de oud-leidinggevenden nog in zekere mate actief zijn binnen de groep. Zij zijn niet meer wekelijks actief als staf of leiding, maar zij verlenen onder andere ondersteuning bij groepsactiviteiten zoals de nieuwjaarsopkomst, weekendkampen, een re&#252;nie, zomerkampen, enzovoorts. Daarbij  verrichten enkele stamleden bestuurlijke taken.</p>\r\n      <p>Buiten de bovengenoemde ondersteuning, draait de stam ook eigen programma&#39;s. Deze opkomsten worden gehouden op de eerste zaterdag van de oneven maanden. De opkomsten zijn zeer divers. Hierbij valt te denken aan zeilen, GPS-tochten, whiskyproeverijen, maar ook pionieren en vlotten bouwen. </p>\r\n      <p>In de historie van de Camerons - Duinzwervers is na het Schotlandkamp van 1973 de bijzonderheid ontstaan dat elke speltak een eigen das en een eigen kleur uniform draagt. Bij de oprichting van de stam is deze lijn doorgetrokken. De stam draagt als das de &quot;Cameron Hunting&quot;. Deze groenblauwe das wordt gedragen op een donkergroen uniform.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `roleId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `roleId`, `name`, `email`, `password`) VALUES
(1, 1, 'Administrator', 'admin@admin.nl', '$2y$10$EkEYgS9xEPHuK7RNEVoQr.0VC0CXsrx/e.9NK9Oyi9G6pQ8IdyqnO'),
(2, 2, 'ContentManager', 'content@content.nl', '$2y$10$EkEYgS9xEPHuK7RNEVoQr.0VC0CXsrx/e.9NK9Oyi9G6pQ8IdyqnO'),
(3, 3, 'Gebruiker', 'user@user.nl', '$2y$10$EkEYgS9xEPHuK7RNEVoQr.0VC0CXsrx/e.9NK9Oyi9G6pQ8IdyqnO');

-- --------------------------------------------------------

--
-- Table structure for table `VerhuurInfo`
--

CREATE TABLE `VerhuurInfo` (
  `id` int(11) NOT NULL,
  `beginDatum` varchar(255) NOT NULL,
  `eindDatum` varchar(255) NOT NULL,
  `beschikbaar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `VerhuurInfo`
--

INSERT INTO `VerhuurInfo` (`id`, `beginDatum`, `eindDatum`, `beschikbaar`) VALUES
(1, '12 juli 2025', '19 juli 2025', 1),
(2, '19 juli 2025', '26 juli 2025', 1),
(3, '26 juli 2025', '2 augustus 2025', 1),
(4, '2 augustus 2025', '9 augustus 2025', 1),
(5, '9 augustus 2025', '16 augustus 2025', 1),
(6, '16 augustus 2025', '23 augustus 2025', 1),
(7, '23 augustus 2025 ', '30 augustus 2025', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ContactInfo`
--
ALTER TABLE `ContactInfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `speltakId` (`speltakId`);

--
-- Indexes for table `Documenten`
--
ALTER TABLE `Documenten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `typeId` (`typeId`),
  ADD KEY `speltakId` (`speltakId`);

--
-- Indexes for table `DocumentType`
--
ALTER TABLE `DocumentType`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Speltak`
--
ALTER TABLE `Speltak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SpeltakInfo`
--
ALTER TABLE `SpeltakInfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `speltakId` (`speltakId`),
  ADD KEY `contactId` (`contactId`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleId` (`roleId`);

--
-- Indexes for table `VerhuurInfo`
--
ALTER TABLE `VerhuurInfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ContactInfo`
--
ALTER TABLE `ContactInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Documenten`
--
ALTER TABLE `Documenten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `DocumentType`
--
ALTER TABLE `DocumentType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Roles`
--
ALTER TABLE `Roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Speltak`
--
ALTER TABLE `Speltak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `SpeltakInfo`
--
ALTER TABLE `SpeltakInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `VerhuurInfo`
--
ALTER TABLE `VerhuurInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ContactInfo`
--
ALTER TABLE `ContactInfo`
  ADD CONSTRAINT `ContactInfo_ibfk_1` FOREIGN KEY (`speltakId`) REFERENCES `Speltak` (`id`);

--
-- Constraints for table `Documenten`
--
ALTER TABLE `Documenten`
  ADD CONSTRAINT `Documenten_ibfk_1` FOREIGN KEY (`typeId`) REFERENCES `DocumentType` (`id`),
  ADD CONSTRAINT `Documenten_ibfk_2` FOREIGN KEY (`speltakId`) REFERENCES `Speltak` (`id`);

--
-- Constraints for table `SpeltakInfo`
--
ALTER TABLE `SpeltakInfo`
  ADD CONSTRAINT `SpeltakInfo_ibfk_1` FOREIGN KEY (`speltakId`) REFERENCES `Speltak` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `SpeltakInfo_ibfk_2` FOREIGN KEY (`contactId`) REFERENCES `ContactInfo` (`id`);

--
-- Constraints for table `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `Users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `Roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
