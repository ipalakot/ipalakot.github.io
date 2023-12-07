-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 nov. 2023 à 12:49
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maboutik`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `noms` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenoms` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id`, `noms`, `prenoms`, `email`, `age`) VALUES
(104, 'Jacques', 'Michel', 'lecomte.helene@example.org', 55),
(105, 'Legros', 'Rémy', 'whumbert@example.com', 72),
(106, 'Bodin', 'Aurore', 'guillaume.eric@example.com', 22),
(107, 'Rey', 'Eugène', 'roland37@example.net', 75),
(108, 'Gomez', 'Suzanne', 'sduval@example.org', 22),
(109, 'Gimenez', 'Henri', 'elise22@ifrance.com', 78),
(110, 'Schneider', 'Thérèse', 'rodriguez.paul@bouygtel.fr', 37),
(111, 'Valentin', 'Alice', 'marine.hoareau@pelletier.com', 64),
(112, 'Buisson', 'Zoé', 'astrid.bertrand@antoine.org', 43),
(113, 'Gonzalez', 'Claire', 'becker.isaac@gmail.com', 72),
(114, 'Lecomte', 'Alexandre', 'nicole.wagner@gmail.com', 42),
(115, 'Perrin', 'Michelle', 'leon01@ifrance.com', 70),
(116, 'Delaunay', 'Antoinette', 'josephine.toussaint@hotmail.fr', 37),
(117, 'Pinto', 'Célina', 'robert.alain@hamel.org', 30),
(118, 'Berger', 'Gabriel', 'christophe95@laposte.net', 77),
(119, 'Gros', 'Raymond', 'blanchard.xavier@yahoo.fr', 76),
(120, 'Daniel', 'Franck', 'celina97@michel.fr', 38),
(121, 'Chauvin', 'Diane', 'oceane82@tele2.fr', 18),
(122, 'Lelievre', 'Anastasie', 'imarty@caron.fr', 52),
(123, 'Carlier', 'Constance', 'cvincent@sfr.fr', 61),
(124, 'Germain', 'William', 'nboutin@wanadoo.fr', 27),
(125, 'Diaz', 'Patrick', 'laetitia.marechal@tele2.fr', 88),
(126, 'Fouquet', 'Juliette', 'luce33@tele2.fr', 58),
(127, 'Perrier', 'Gabriel', 'alexandre09@charrier.fr', 30),
(128, 'Tanguy', 'Nathalie', 'nguyen.adele@martineau.org', 80),
(129, 'Legendre', 'Étienne', 'tristan22@noos.fr', 19),
(130, 'Pottier', 'Tristan', 'xrobin@guillon.net', 70),
(131, 'Pichon', 'René', 'marcel.charrier@guillou.com', 83),
(132, 'Godard', 'Josette', 'maggie.martins@live.com', 56),
(133, 'Da Costa', 'Rémy', 'olivie36@wanadoo.fr', 43),
(134, 'Barre', 'Simone', 'fparent@maillard.org', 86),
(135, 'Bourgeois', 'Christophe', 'bodin.veronique@leclerc.org', 87),
(136, 'Monnier', 'Anne', 'amelie17@pascal.net', 29),
(137, 'Chauvet', 'Marcel', 'brigitte17@noos.fr', 65),
(138, 'Aubert', 'Lorraine', 'lemaire.edouard@barbier.fr', 28),
(139, 'Duval', 'William', 'valerie51@tiscali.fr', 33),
(140, 'Payet', 'Lucy', 'imbert.jeannine@live.com', 65),
(141, 'Gosselin', 'Stéphane', 'corinne70@klein.fr', 35),
(142, 'Gomez', 'Odette', 'mboucher@bouygtel.fr', 88),
(143, 'Guillaume', 'Adèle', 'schretien@coulon.fr', 25),
(144, 'Guillot', 'Élise', 'denis.guillou@renard.fr', 62),
(145, 'Pages', 'Gabrielle', 'esalmon@tiscali.fr', 23),
(146, 'Goncalves', 'Brigitte', 'ddenis@live.com', 49),
(147, 'Perrin', 'Robert', 'tvidal@noos.fr', 22),
(148, 'Lacroix', 'Alfred', 'luce.jean@coste.com', 41),
(149, 'Fabre', 'Andrée', 'zbesson@live.com', 54),
(150, 'Pages', 'Thibault', 'richard.nicolas@hotmail.fr', 71),
(151, 'Dos Santos', 'Maurice', 'zalbert@wanadoo.fr', 56),
(152, 'Lemoine', 'Thibaut', 'pierre23@chauvin.net', 71),
(153, 'Ferrand', 'Jean', 'pineau.philippine@cousin.fr', 87),
(154, 'Becker', 'Constance', 'morin.matthieu@dbmail.com', 48),
(155, 'Bourgeois', 'Virginie', 'rlefebvre@free.fr', 80),
(156, 'Meyer', 'Valérie', 'dferreira@voila.fr', 47),
(157, 'Moulin', 'Gérard', 'hortense17@club-internet.fr', 27),
(158, 'Delaunay', 'Thibault', 'franck49@aubert.fr', 73),
(159, 'Humbert', 'Marianne', 'etienne61@peltier.com', 21),
(160, 'Alves', 'Grégoire', 'franck.hoareau@tiscali.fr', 34),
(161, 'Moreau', 'Constance', 'dboulanger@dumont.com', 25),
(162, 'Barre', 'Louise', 'raymond11@ollivier.com', 84),
(163, 'Langlois', 'Michel', 'auguste.delattre@sfr.fr', 41),
(164, 'Gallet', 'Lucas', 'martine.weber@cordier.com', 60),
(165, 'Klein', 'Joséphine', 'christelle.bertin@orange.fr', 29),
(166, 'Roy', 'Marianne', 'etienne.allain@carlier.org', 25),
(167, 'Leger', 'Éric', 'ysanchez@voila.fr', 49),
(168, 'Julien', 'Jacqueline', 'christophe.poulain@tele2.fr', 39),
(169, 'Deschamps', 'Michelle', 'mmace@bouchet.com', 73),
(170, 'Blanchard', 'Zacharie', 'margaret.potier@tiscali.fr', 66),
(171, 'Etienne', 'Luc', 'isaac19@gmail.com', 46),
(172, 'Huet', 'Guillaume', 'jerome.peron@lucas.fr', 30),
(173, 'Girard', 'Éléonore', 'guyon.benoit@leveque.com', 34),
(174, 'Boulay', 'Charlotte', 'brigitte.laine@bouygtel.fr', 85),
(175, 'Coulon', 'Maryse', 'bleroux@aubert.fr', 45),
(176, 'Cordier', 'Charlotte', 'jacques.langlois@orange.fr', 79),
(177, 'Barthelemy', 'Charles', 'ffleury@tiscali.fr', 32),
(178, 'Hamel', 'Raymond', 'legrand.alice@tele2.fr', 66),
(179, 'Benard', 'Dominique', 'andree45@hotmail.fr', 78),
(180, 'Lelievre', 'Alice', 'theodore27@live.com', 82),
(181, 'Moreau', 'Matthieu', 'schmitt.yves@bertrand.fr', 54),
(182, 'Pelletier', 'Théophile', 'raynaud.nicole@boulanger.fr', 39),
(183, 'Fischer', 'Émile', 'robert.berger@thomas.fr', 68),
(184, 'Marion', 'Hélène', 'frederique31@lecomte.fr', 74),
(185, 'Georges', 'Lucas', 'christine63@courtois.org', 51),
(186, 'Morin', 'Lucie', 'ebecker@club-internet.fr', 32),
(187, 'Allain', 'Xavier', 'yves26@chauvin.org', 70),
(188, 'Dupuy', 'Arthur', 'constance.clement@legall.com', 50),
(189, 'Valette', 'Caroline', 'jacques61@noos.fr', 44),
(190, 'Gimenez', 'Charles', 'paulette41@bouygtel.fr', 70),
(191, 'Le Goff', 'Manon', 'ksamson@free.fr', 56),
(192, 'Legros', 'Nicolas', 'christelle.bouchet@club-internet.fr', 47),
(193, 'Legros', 'Arthur', 'lefebvre.andree@live.com', 63),
(194, 'Laine', 'Anouk', 'laure.chevalier@live.com', 43),
(195, 'Allard', 'Marianne', 'adele.poulain@bourgeois.fr', 73),
(196, 'Riou', 'Yves', 'franck.remy@noos.fr', 54),
(197, 'Marion', 'Victor', 'cecile.ribeiro@gros.com', 68),
(198, 'Dumas', 'Marine', 'gclement@orange.fr', 46),
(199, 'Dumont', 'Michelle', 'benoit.coste@gmail.com', 52),
(200, 'Delaunay', 'Sylvie', 'tandre@yahoo.fr', 20),
(201, 'Begue', 'Marguerite', 'hlamy@rousset.com', 65),
(202, 'Barbe', 'Olivier', 'hberthelot@tele2.fr', 21),
(203, 'Descamps', 'Emmanuel', 'durand.arthur@bouygtel.fr', 72),
(204, 'Dijoux', 'Isabelle', 'deschamps.georges@bouygtel.fr', 89),
(205, 'Fernandez', 'Monique', 'dominique.maillard@dubois.com', 23),
(206, 'Perrier', 'Gérard', 'aallain@leger.com', 55),
(207, 'Joly', 'Marthe', 'david.petit@free.fr', 86),
(208, 'Labbe', 'Madeleine', 'lclerc@tiscali.fr', 33);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
