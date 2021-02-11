-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Feb 2021 um 16:21
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

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `deutsch_text` text NOT NULL,
  `englisch_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `about`
--

INSERT INTO `about` (`about_id`, `deutsch_text`, `englisch_text`) VALUES
(1, 'Seit 2006 vertritt und präsentiert Kro Art Contemporary erfolgreich einzigartige Positionen und junge, zeitgenössische Künstler aus Österreich und den benachbarten süd- und osteuropäischen Ländern in den Medien Malerei, Graphik, Installationen, Videokunst und Fotografie.<br><br>\r\n\r\nDer Standort am Getreidemarkt im Zentrum von Wien, in unmittelbarer Nachbarschaft zum Museumsquartier und renommierten Museen, Ausstellungshäusern und Galerien, bieten dafür eine optimale Ausgangsposition. Seit der Neugestaltung 2019 bieten wir nun auch mit dem Artwork Coworking Space Produktions- u. Arbeitsplätze für Kunst u. Design, professionell ausgestattete Seminar- Meeting- und Veranstaltungsräume zur temporären Nutzung und als Treffpunkt für den Feierabend die Artwork Aperobar geöffnet jeweils Mo-Fr 17 h-21 h und bei Veranstaltungen.<br><br>\r\n\r\nRegelmäßig finden in unseren Räumen am Getreidemarkt Kunst und Designveranstaltungen statt. Über dasaktuelle Programm können Sie sich gerne unter <a href=\"http://www.artwork-space.at/\">ARTWORK-SPACE</a> informieren oder unseren Newsletter bestellen.<br><br>\r\n\r\nEine ausgesuchte Auswahl an Werken unserer Artists können Sie auch direkt hier auf Kro Art Contemporaryonline erwerben.<br>\r\nDie angeführten Preise sind inkl. Mwst jedoch ohne Versandkosten.Zahlungsoptionen, Versand- und Lieferkonditionen werden persönlich mit Ihnen nach erfolgter Bestellung vereinbart.', 'Since 2006, Kro Art Contemporary has been successfully representing and exhibiting unique artistic positions and young, contemporary artists from Austria and neighboring southern and eastern European countries with works ranging from paintings to graphics, installations, video art and photography.<br><br>\r\n\r\nOn top of it, the location on the Getreidemarkt in the center of Vienna, right next the Museum Quarter and other renowned museums, exhibition houses and galleries, offers an ideal starting point.<br><br>\r\n\r\nSince the redesign in 2019, we now also offer inside the Artwork Coworking Space a perfect work environmentfor artists and designers, with a fully equipped seminar room and as well meeting and event rooms for temporary use. The new Artwork Aperobar - a meeting point for the after-work relax and for events – is also open Mon-Fri from 5 to 9 p.m.<br><br>\r\n\r\nArt and design events take place regularly at our space at the Getreidemarkt. You can find out more about the current program on our <a href=\"http://www.artwork-space.at/\">ARTWORK-SPACE</a> website and social media or you can register for our newsletter.\r\n<br><br>\r\nYou can also purchase a selected selection of works by our artists here at Kro Art Contemporary online.The prices listed include VAT but do not include shipping costs. Payment options, shipping and delivery conditions will be agreed personally with you after the order has been placed.');

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
(1, 'VITTORIO', 'MATINO', '2015. Frontiers Reimagined, Art That Connects Us, Museo di Palazzo Grimari, Evento. Collaterale, La Biennale di Venezia, 56. Esposizione Internazionale d’Arte<br>2014. Matino, per pura pittura, Galleria San Carlo (Milano – I)<br>\r\n2012. Vittorio Matino, Policromo, carte dipinte, Lazertis Galerie (Zürich – CH)<br>\r\n2011. Trans-Chromatics, Sundaram Tagore Gallery (New York – USA)<br>\r\n2009. Chasing the Light, Sundaram Tagore Gallery (New York – USA)<br>\r\n2008. Chasing the Light, Sundaram Tagore Gallery (Beverly Hills – USA)\r\n	. Works on Paper, Sundaram Tagore Gallery (New York – USA)<br>\r\n2007. Peintures sur toile 2005-2007, Galerie Sapone (Nice – F)<br>\r\n2006. Die Kraft der Farben, Kro Art Contemporary (Wien – A)<br>\r\n2003. Vario/pinti. Opere 2002-2003, Galleria dello Scudo (Verona – I)\r\n', 'Museo Civico, Palazzo Chiericati (Vicenza – I)<br>\r\nMuseo Civico (Bassano del Grappa – I)\r\nCollezione Civica d’Arte Moderna (Parma – I)<br>\r\nMuseo Civico d’Arte Contemporanea (Milano – I)<br>\r\nMuseo Civico Alberto Morandi (Bologna – I)<br>\r\nMuseo Civico di Castelvecchio (Verona – I)<br>\r\nCollezione Civica (Termoli – I)<br>\r\nCollezione Civica (Capo d’Orlando – I)<br>\r\nFondazione Michetti (Francavilla – I)<br>\r\nUniversità degli studi (Trento – I)<br>\r\nMuseo Civico di Mendrisio (Mendrisio – CH)<br>\r\nCollections de la Ville de Paris (Paris – F)<br>\r\nMuseo Civico, Castello di Masnago (Varese – I)<br>\r\nGalleria Civica (Valdagno – I)<br>\r\nBiblioteca Civica, Villa Valle (Valdagno – I)<br>\r\nCollezione Civica (Schio – I)<br>\r\nPalazzo di Giustizia (Padova – I)<br>\r\nComune di Roma, Metropolitana stazione Bologna (Roma – I)<br>\r\nCasa Circondariale “Le Vallette” (Torino – I)<br>\r\nMuseo della Permanente (Milano – I)<br>\r\nBanca Commerciale Italiana (Milano – I)\r\n', '\r\n1943 geboren<br>\r\n1962 Abschlußdiplom des Kunst College (Bologna – I)<br>\r\n1967 erste Einzelausstellung: Galleria Adelphi (Padova – I)<br>\r\n1971-74	hat in Paris (F) gelebt und gearbeitet<br>\r\n1975 erste Einzelausstellung in Deutschland<br>1990 Einzelausstellung an der Padiglione d´Arte Contemporanea (Milano – I)<br>\r\n1996-97	Herstellung einer 14m großen Mosaik für den Bologna Hauptbahnhof <br>\r\n1999 Preis für ein Fresko im Gefängnis “Le Vallette” (Torino–I)<br><br>\r\n\r\nLebt und arbeitet in Mailand (I) und Nice (F)\r\n		\r\n', 'VittorioMatino.pdf'),
(2, 'SISSA', 'MICHELI', '2020 . Förderung der Provinz Bozen (I)<br>\r\n2016 . Künstler/in des Jahres, eine Akion des HGV & SKB (I)<br>\r\n2008 . Premio Pagine Bianche d\'Autore (I)<br>\r\n. Arte Laguna, Venezia (I)<br>\r\n. Preis der Akademie (A)<br>\r\n. Preis Fotografia Europea – Reggio<br> Emilia 2008 (I)<br>\r\n2007 . “ausgesetzt_spaesato”, Galerie Lungomare (I)<br>\r\n2003 . Meisterschulpreis der Akademie der bildenden Künste Wien (A)\r\n', '\r\n2020. Mountain Pieces / Reflecting History, LUMEN Museum of Photography (Riscone – I)<br>\r\n. Ballad of Interacting Objects, Kunstverein Baden (Baden – A) <br>\r\n2019. On the Verge of Time. Fotofestival Maribor . EpeKa Gallery (Maribor – SLO)<br>\r\n. Museum\'s Rhapsody. A Microcosm of Collection Objects. Palais Mamming (Meran– I)<br>\r\n. Meet Us in the Desert. Gallerie Sturm und Schober (Wien – A)<br> \r\n2018. Ballad of Desires. Oberösterreichischer Kunstverein (Linz – A)<br>  \r\n2017. On the Process of Shaping an Idea into Form Through Mental Modelling, Galerie Alessandro Casciaro (Bozen – I)<br> \r\n2014. The Unknown Knowns, Austrian Cultural Forum (London – GB)<br> \r\n2010. Shipwrecked moments, das weisse haus (Wien – A)<br> \r\n2008. Remind me - rewind me, MUSA Startgalerie (Wien – A) \r\n', '1975. Geboren in Bruneck (Italien)<br>\r\n\r\n2000-2002. Schule für künstlerische Photographie (Wien – A)<br>\r\n\r\n2002-2007. Diplomstudium an der Akademie der bildenden Künste Wien bei Prof. Franz Graf, Gunther Damisch und Matthias Herrmann<br>\r\n\r\n2006. Treffen mit Louise Bourgeois, Mitbegründerin und Kuratorin der Ausstellungsreihe und Fotozeitung „Schaugrund“ Wien<br>\r\n\r\n2007-2011. Dozentin an der internationalen Sommerakademie für bildenden Kunst und Medientechnologie Venedig. <br><br>\r\n\r\n\r\n\r\n\r\n\r\nLebt und arbeitet in Wien (A)', 'SissaMicheli.pdf'),
(4, 'SOMEONE ', 'BABY', 'TEXT TEXT TEXT ', 'TEXT TEXT TEXT ', 'TEXT TEXT TEXT ', '5.png'),
(5, 'Marco ', 'Tirelli', '2018 . Marco Tirelli, Ditesheim & Maffei, Art Genève (Geneve – CH)<br> 2017 . Marco Tirelli, Palazzi Comunali, SaladellePietre (Todi – I)<br>\r\n2016 . Marco Tirelli, MAMC Muséed’art moderne et contemporain\r\n(Saint-Etienne Métropole – F)<br>\r\n. Marco Tirelli, Fondazione Pastificio Cerere (Roma – I)<br>\r\n. Marco Tirelli. Sculptures and Drawings, OTTO Gallery (Bologna – I)<br>\r\n2018 .Marco Tirelli, Axel Vervoordt Gallery, Hong Kong<br>\r\n\r\n. Marco Tirelli. Peintures, Ditesheim&Maffei, Neuchatel (CH)<br>\r\n \r\n2014 .Hollow Land – Keep Out!, Kro Art Contemporary (Vienna – A)<br>\r\n2013 .LV Esposizione Internazionale d’Arte della Biennale di Venezia. Padiglione Italia, Vice Versa, a cura di Bartolomeo Pietromarchi (Venezia – I)<br>\r\n. La Grande Magia, MAMbo (Bologna – I)<br>\r\n. Memories (con Patti Smith), Auditorium Parco della Musica (Roma – I)<br>\r\n2012 . Marco Tirelli, MACRO Testaccio – Museo d’Arte Contemporanea (Roma – I)<br>\r\n2011 . Marco Tirelli, Base Gallery (Tokyo – J)<br>\r\n2009 . Détournement Venice 2009, LIII Esposizione Internazionale d’Arte – Parallel Event,\r\nLa Biennale di Venezia, Archivio di Stato (Venezia – I)<br>\r\n 2006 . Marco Tirelli, Kro Art Contemporary (Vienna – A)', '', '1956 geboren in Rom (I)<br> Lebt und arbeitet in Rom (I)<br>\r\n1956 born in Rome (I)<br> Lives and works in Rome (I)', 'MarcoTirelli.pdf'),
(8, 'petar', 'petrov', '1943 geboren\r\n1962 Abschlußdiplom des Kunst College (Bologna – I)\r\n1967 erste Einzelausstellung: Galleria Adelphi (Padova – I)\r\n1971-74 hat in Paris (F) gelebt und gearbeitet\r\n1975 erste Einzelausstellung in Deutschland\r\n1990 Einzelausstellung an der Padiglione d´Arte Contemporanea (Milano – I)\r\n1996-97 Herstellung einer 14m großen Mosaik für den Bologna Hauptbahnhof\r\n1999 Preis für ein Fresko im Gefängnis “Le Vallette” (Torino–I)', '1943 geboren\r\n1962 Abschlußdiplom des Kunst College (Bologna – I)\r\n1967 erste Einzelausstellung: Galleria Adelphi (Padova – I)\r\n1971-74 hat in Paris (F) gelebt und gearbeitet\r\n1975 erste Einzelausstellung in Deutschland\r\n1990 Einzelausstellung an der Padiglione d´Arte Contemporanea (Milano – I)\r\n1996-97 Herstellung einer 14m großen Mosaik für den Bologna Hauptbahnhof\r\n1999 Preis für ein Fresko im Gefängnis “Le Vallette” (Torino–I)', '1943 geboren\r\n1962 Abschlußdiplom des Kunst College (Bologna – I)\r\n1967 erste Einzelausstellung: Galleria Adelphi (Padova – I)\r\n1971-74 hat in Paris (F) gelebt und gearbeitet\r\n1975 erste Einzelausstellung in Deutschland\r\n1990 Einzelausstellung an der Padiglione d´Arte Contemporanea (Milano – I)\r\n1996-97 Herstellung einer 14m großen Mosaik für den Bologna Hauptbahnhof\r\n1999 Preis für ein Fresko im Gefängnis “Le Vallette” (Torino–I)', 'LebenslaufAsya.pdf'),
(10, 'pedro', 'frederichi', 'elausstellung: Galleria Adelphi (Padova – I)\r\n1971-74 hat in Paris (F) gelebt und gearbeitet\r\n1975 erste Einzelausstellung in Deutschland\r\n1990 Einzelausstellung an der Padiglione d´Arte Contemporanea (Milano – I)\r\n1996-97 Herstellung einer 14m großen Mosaik für den Bologna Hauptbahnhof\r\n1999 Preis für ein Fresko im Gefängnis “Le Vallette” (Torino–I)\r\n', '', 'elausstellung: Galleria Adelphi (Padova – I)\r\n1971-74 hat in Paris (F) gelebt und gearbeitet\r\n1975 erste Einzelausstellung in Deutschland\r\n1990 Einzelausstellung an der Padiglione d´Arte Contemporanea (Milano – I)\r\n1996-97 Herstellung einer 14m großen Mosaik für den Bologna Hauptbahnhof\r\n1999 Preis für ein Fresko im Gefängnis “Le Vallette” (Torino–I)\r\n', ''),
(14, 'asdasd', 'asdasdasd', 'asdasdasd', 'asdasdasas', 'asdasdasd', '');

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
(8, 'When rooted on trees', 'SM_01_100x100cm_cprint_When_rooted_on_trees_2007.jpg', 255, '100 x 100 cm', 2, 5, 2),
(9, 'When rooted on trees', 'SM_02_100x100cm_cprint_When rooted_on_trees_2007.jpg', 627.22, '100 x 100 cm', 2, 5, 2),
(10, 'Menta Rossa e Carbone', '05_Menta_rossa_ecarbone_2006.jpg', 9350, '153 x 77 cm', 1, 3, 1),
(11, 'Doppio Giallo, 2005/06\r\n ', '09_Doppio_Giallo_2005.jpg', 7700, '35 x 152 cm', 1, 3, 1),
(14, 'Bianco Primaldo, 2004', '11_Bianco_Primaldo_2004.jpg', 6930, '104 x 65,5 cm', 1, 3, 1),
(15, 'Trionfo Rosso, 2005', '20_Trionfo_rosso_2005.jpg', 2750, '76 x 56 cm', 1, 4, 1),
(18, 'SOMETHING', 'newsimg.png', 3232, '232X232', 5, 2, 4),
(19, 'Ohne Titel / No Tittle', 'MarcoTirelli1.jpg', 0, '62,5 x 44 cm', 1, 6, 5),
(20, 'Ohne Titel / No Tittle', 'MarcoTirelli2.jpg', 0, '72 x 51 cm', 1, 7, 5),
(21, 'dfdfdff', 'dfdfdfd', 2132, '232 x 3232', 3, 7, 8),
(22, 'dsds', 'kfmeoo ', 222, '232x232', 4, 1, 10);

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
(1, 'MALEREI / PAINTING', 'malerei.png'),
(2, 'FOTOGRAFIE / PHOTOGRAPHY', 'fotografie.png'),
(3, 'GRAFIK & DRUCKGRAFIK / DRAWING & PRINTMAKING', 'grafic.png'),
(4, 'OBJEKT & SKULPTUR', 'sculptur.png'),
(5, 'ANDERE MEDIEN / OTHER TECHNIQUES', 'others.png');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `img_contact` varchar(100) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `contact`
--

INSERT INTO `contact` (`contact_id`, `img_contact`, `info`) VALUES
(1, 'coworkSpace.png', 'Adress<br><br>\r\nEmail<br><br>\r\nAnsprechsperson<br><br>\r\nIban<br><br>\r\nUsw.<br><br>\r\n');

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
(13, 'NEWS 122', '2021-01-16', 'you don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s OK. You could get around it by<br>\r\n<br>\r\n connecting inside your function (a bit wasteful), defining $conn as a global variable (a bit horrible) or just passing $conn into the functions.eefreeeeectually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s OK. You could get around it by connecting indfdfdside your function (a bit wasteful), defining $conn as a global variable (a bit horrible) or just passing $conn into the functions.you don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the function, so that’s ', '20_Trionfo_rosso_2005.jpg'),
(21, 'NEWS \"\"', '3233-02-23', 'you don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the funyou don’t actually execute that query, you just assign it to a string. On the next line, you try to use $conn but that doesn’t exist inside the function, and as you haven’t executed the query, you can’t start fetching results from it. In your other function, you connect inside the fun', 'c_pic4.JPG');

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
(2, 'Rechte Hand'),
(3, 'Acryl auf Leinwand / Acrylic on canvas'),
(4, 'Mischtechnik auf Papier / Mixed technic on paper\r\n'),
(5, 'C-Print'),
(6, 'Tempera auf Tafel / Tempera on wood'),
(7, 'Kohle auf Papier / Charcoal on paper');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(4, 'kroart', '$2y$10$pxlU5ufD0.U44cn/VOmp0OYsHMnYFzET7Vr0jV6QfXzxQjXK.1vZO', '2021-02-01 14:31:14'),
(5, 'test', '$2y$10$UL4EydxaELm2UVylogc4j.vLe4qQzEdsFPOA4xjRUOwGtCRJwin0i', '2021-02-01 14:39:50');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

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
-- Indizes für die Tabelle `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

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
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `artwork`
--
ALTER TABLE `artwork`
  MODIFY `artwork_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT für Tabelle `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `technic`
--
ALTER TABLE `technic`
  MODIFY `technic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
