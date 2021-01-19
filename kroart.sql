-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Jan 2021 um 14:58
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `kroart`
--
CREATE DATABASE IF NOT EXISTS `kroart` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kroart`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `exh` text NOT NULL,
  `ssa` text NOT NULL,
  `bio` text NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `artist`
--

INSERT INTO `artist` (`artist_id`, `name`, `lastname`, `exh`, `ssa`, `bio`, `pdf`) VALUES
(1, 'VITTORIO', 'MATINO', '2015	. Frontiers Reimagined, Art That Connects Us, Museo di Palazzo Grimari, Evento \r\n  Collaterale, La Biennale di Venezia, 56. Esposizione Internazionale d’Arte\r\n2014	. Matino, per pura pittura, Galleria San Carlo (Milano – I)\r\n2012	. Vittorio Matino, Policromo, carte dipinte, Lazertis Galerie (Zürich – CH)\r\n2011	. Trans-Chromatics, Sundaram Tagore Gallery (New York – USA)\r\n2009	. Chasing the Light, Sundaram Tagore Gallery (New York – USA)\r\n2008	. Chasing the Light, Sundaram Tagore Gallery (Beverly Hills – USA)\r\n	. Works on Paper, Sundaram Tagore Gallery (New York – USA)\r\n2007	. Peintures sur toile 2005-2007, Galerie Sapone (Nice – F)\r\n2006	. Die Kraft der Farben, Kro Art Contemporary (Wien – A)\r\n2003	. Vario/pinti. Opere 2002-2003, Galleria dello Scudo (Verona – I)\r\n', 'Museo Civico, Palazzo Chiericati (Vicenza – I)\r\nMuseo Civico (Bassano del Grappa – I)\r\nCollezione Civica d’Arte Moderna (Parma – I)\r\nMuseo Civico d’Arte Contemporanea (Milano – I)\r\nMuseo Civico Alberto Morandi (Bologna – I)\r\nMuseo Civico di Castelvecchio (Verona – I)\r\nCollezione Civica (Termoli – I)\r\nCollezione Civica (Capo d’Orlando – I)\r\nFondazione Michetti (Francavilla – I)\r\nUniversità degli studi (Trento – I)\r\nMuseo Civico di Mendrisio (Mendrisio – CH)\r\nCollections de la Ville de Paris (Paris – F)\r\nMuseo Civico, Castello di Masnago (Varese – I)\r\nGalleria Civica (Valdagno – I)\r\nBiblioteca Civica, Villa Valle (Valdagno – I)\r\nCollezione Civica (Schio – I)\r\nPalazzo di Giustizia (Padova – I)\r\nComune di Roma, Metropolitana stazione Bologna (Roma – I)\r\nCasa Circondariale “Le Vallette” (Torino – I)\r\nMuseo della Permanente (Milano – I)\r\nBanca Commerciale Italiana (Milano – I)\r\n', '\r\n1943		geboren\r\n1962		Abschlußdiplom des Kunst College (Bologna – I)\r\n1967		erste Einzelausstellung: Galleria Adelphi (Padova – I)\r\n1971-74	hat in Paris (F) gelebt und gearbeitet\r\n1975		erste Einzelausstellung in Deutschland\r\n1990		Einzelausstellung an der Padiglione d´Arte Contemporanea (Milano – I)\r\n1996-97	Herstellung einer 14m großen Mosaik für den Bologna Hauptbahnhof \r\n1999		Preis für ein Fresko im Gefängnis “Le Vallette” (Torino–I)\r\n\r\nLebt und arbeitet in Mailand (I) und Nice (F)\r\n		\r\n', 'VittorioMatino.pdf'),
(2, 'SISSA ', 'MICHELI', '2020 . Förderung der Provinz Bozen (I)\r\n2016 . Künstler/in des Jahres, eine Akion des HGV & SKB (I) 2008 . Premio Pagine Bianche d\'Autore (I)\r\n. Arte Laguna, Venezia (I)\r\n. Preis der Akademie (A)\r\n. Preis Fotografia Europea – Reggio Emilia 2008 (I)\r\n2007 . “ausgesetzt_spaesato”, Galerie Lungomare (I)\r\n2003 . Meisterschulpreis der Akademie der bildenden Künste Wien (A)\r\n', '\r\n2020	. Mountain Pieces / Reflecting History, LUMEN Museum of Photography (Riscone – I)\r\n	. Ballad of Interacting Objects, Kunstverein Baden (Baden – A) \r\n2019	. On the Verge of Time. Fotofestival Maribor . EpeKa Gallery (Maribor – SLO)\r\n	. Museum\'s Rhapsody. A Microcosm of Collection Objects. Palais Mamming (Meran– I)\r\n	. Meet Us in the Desert. Gallerie Sturm und Schober (Wien – A) \r\n2018	. Ballad of Desires. Oberösterreichischer Kunstverein (Linz – A)  \r\n2017	. On the Process of Shaping an Idea into Form Through Mental Modelling, Galerie \r\n  Alessandro Casciaro (Bozen – I) \r\n2014	. The Unknown Knowns, Austrian Cultural Forum (London – GB) \r\n2010	. Shipwrecked moments, das weisse haus (Wien – A) \r\n2008	. Remind me - rewind me, MUSA Startgalerie (Wien – A) \r\n', '1975 2000-2002 2002-2007\r\n2006 2007-2011\r\nGeboren in Bruneck (Italien)\r\nSchule für künstlerische Photographie (Wien – A)\r\nDiplomstudium an der Akademie der bildenden Künste Wien bei Prof. Franz Graf, Gunther Damisch und Matthias Herrmann\r\nTreffen mit Louise Bourgeois, Mitbegründerin und Kuratorin der Ausstellungsreihe und Fotozeitung „Schaugrund“ Wien\r\nDozentin an der internationalen Sommerakademie für bildenden Kunst und Medientechnologie Venedig\r\nLebt und arbeitet in Wien (A)', 'SissaMicheli.pdf');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `artwork`
--

CREATE TABLE `artwork` (
  `artwork_id` int(11) NOT NULL,
  `name_pic` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `measurement` varchar(20) NOT NULL,
  `fk_category` int(11) NOT NULL,
  `fk_technic` int(11) NOT NULL,
  `fk_artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `artwork`
--

INSERT INTO `artwork` (`artwork_id`, `name_pic`, `picture`, `price`, `measurement`, `fk_category`, `fk_technic`, `fk_artist_id`) VALUES
(8, 'When rooted on trees', 'SM_01_100x100cm_cprint_When_rooted_on_trees_2007.jpg', 255, '100X100', 3, 1, 2),
(9, 'When rooted on trees', 'SM_02_100x100cm_cprint_When rooted_on_trees_2007.jpg', 627.22, '100X100', 3, 1, 2),
(10, 'Manta Rossa e Carbone', '05_Menta_rossa_ecarbone_2006.jpg', 9350, '153 x 77 cm', 1, 2, 1),
(11, 'Doppio Giallo, 2005/06\r\n ', '09_Doppio_Giallo_2005.jpg', 7700, '35X152', 1, 1, 1),
(14, 'Ali chiuse glicine, 2006', '11_Bianco_Primaldo_2004.jpg', 6930, '104 x 65,5 cm', 1, 1, 1),
(15, 'Trionfo Rosso, 2005', '20_Trionfo_rosso_2005.jpg', 2750, '76 x 56 cm', 1, 2, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img_categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `category`
--

INSERT INTO `category` (`category_id`, `category`, `img_categorie`) VALUES
(1, 'MALEREI / PAINTING', 'newsimg.png'),
(2, 'FOTOGRAFIE / PHOTOGRAPHY', 'druck.jpg'),
(3, 'GRAFIK & DRUCKGRAFIK / DRAWING & PRINTMAKING', 'grafic.jpg'),
(4, 'OBJEKT & SKULPTUR', 'skulptur.jpg'),
(5, 'ANDERE MEDIEN / OTHER TECHNIQUES', 'Bajtala_1.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `daten` date NOT NULL,
  `textn` text NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `news`
--

INSERT INTO `news` (`news_id`, `headline`, `daten`, `textn`, `picture`) VALUES
(13, 'NEWS 4', '2021-01-16', 'you don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s OK. You could get around it by connecting inside your function (a bit wasteful), defining $conn as a global variable (a bit horrible) or just passing $conn into the functions.eefreeeeectually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s OK. You could get around it by connecting inside your function (a bit wasteful), defining $conn as a global variable (a bit horrible) or just passing $conn into the functions.you don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s ', 'newsimg.png'),
(16, 'news 8', '2021-01-17', 'ou don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s OK. You could get around it by connecting inside your function (a bit wasteful), defining $conn as a global variable (a bit horrible) or just passing $conn into the functioou don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s OK. You could get around it by connecting inside your function (a bit wasteful), defining $conn as a global variable (a bit horrible) or just passing $conn into the functioou don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s OK. You could get around it by connecting inside your function (a bit wasteful), defining $conn as a global variable (a bit horrible) or just passing $conn into the functioou don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s OK. You could get around it by connecting inside your function (a bit wasteful), defining $conn as a global variable (a bit horrible) or just passing $conn into the functio', 'c_pic9.jpg'),
(17, 'NEWS 6 ', '2021-01-14', 'e) or just passing $conn into the functions.eefreeeeectually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s OK. You could get around it by connecting inside your function (a bit wasteful), defining $conn as a global variable (a bit horrible) or just passing $conn into the functions.you don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t ', 'c_pic5.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `slider_images`
--

CREATE TABLE `slider_images` (
  `img_id` int(11) NOT NULL,
  `img_slider` varchar(255) NOT NULL,
  `img_slider_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `slider_images`
--

INSERT INTO `slider_images` (`img_id`, `img_slider`, `img_slider_name`) VALUES
(1, 'img/1.JPG', 'Bella'),
(2, 'img/2.JPG', 'ROsa');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `technic`
--

CREATE TABLE `technic` (
  `technic_id` int(11) NOT NULL,
  `technic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `technic`
--

INSERT INTO `technic` (`technic_id`, `technic`) VALUES
(1, 'Linke Hand'),
(2, 'Rechte Hand');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indizes für die Tabelle `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`artwork_id`),
  ADD KEY `fk_category` (`fk_category`),
  ADD KEY `fk_technic` (`fk_technic`),
  ADD KEY `artwork_ibfk_1` (`fk_artist_id`);

--
-- Indizes für die Tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indizes für die Tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indizes für die Tabelle `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indizes für die Tabelle `technic`
--
ALTER TABLE `technic`
  ADD PRIMARY KEY (`technic_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `artwork`
--
ALTER TABLE `artwork`
  MODIFY `artwork_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT für Tabelle `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `technic`
--
ALTER TABLE `technic`
  MODIFY `technic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `artwork`
--
ALTER TABLE `artwork`
  ADD CONSTRAINT `artwork_ibfk_1` FOREIGN KEY (`fk_artist_id`) REFERENCES `artist` (`artist_id`),
  ADD CONSTRAINT `artwork_ibfk_2` FOREIGN KEY (`fk_category`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `artwork_ibfk_3` FOREIGN KEY (`fk_technic`) REFERENCES `technic` (`technic_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
