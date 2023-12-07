-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 nov. 2023 à 13:00
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
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `titre`, `resume`) VALUES
(8, 'bricolage', 'bricolage'),
(9, 'Jouets', 'Voluptatemmolestiaeeasiterrorutautexplicabonihilconsequaturestsuscipitmolestias.'),
(10, 'Informatique', 'Facereomnissolutanumquamsednonlaudantiumidofficiaautatetinventorea.'),
(11, 'Electroménager\r\n', 'Etsitbeataequibusdammolestiaeeosistemolestiaereprehenderitmolestiaeexercitationem.'),
(12, 'Meuble Déco', 'Assumendavoluptatemcummollitianamreiciendisdoloremquequiitaqueodio.'),
(13, 'Meuble Déco', 'Laboriosamautplaceatquosimiliquesequidelenitiodit.'),
(14, 'sport', 'Ipsamolestiascorporisvoluptatemvoluptastotamsolutaexplicabominusveluttemporibus.'),
(15, 'Jardin Animalerie\r\n', 'Voluptasnihilreprehenderitarchitectodoloremqueautcumitaquesedautem.'),
(16, 'TV Son Photo\r\n', 'Etoditealaudantiumquisvoluptaterepellendusdelenitipraesentiumnullavitae.'),
(17, 'telephonie', 'Fugaquoomnisullamethiccumqueconsequuntursitasperioresdolorumperspiciatis.'),
(18, 'reconditionne', 'Eaquereprehenderitmolestiaeenimetsedidveniamquamdoloresmollitia.'),
(19, 'jeux videos', 'Etconsequaturmaioreseiusrepudiandaeaperiamofficianulla.'),
(20, 'beaute', 'Sitaspernaturautsequialiaslaudantiumqui.'),
(21, 'mode bijoux', 'Similiqueipsamodiculpavitaeidet.'),
(22, 'bebe', 'Eiusquisquaminventorevoluptatibusvelfuganatus.'),
(23, 'auto moto', 'Cumsuscipitrepellatundeblanditiisidnatusuteumestimpeditcum.'),
(24, 'cave', 'Etrecusandaemollitiavoluptatemdolorumsuntinciduntrationedoloremerrorexcepturiatnostrummodi.'),
(25, 'administration', 'Ettemporeutillosedrepellatnihilvoluptatemnatusnihiliurenulla.'),
(26, 'promotion', 'Illoomniseaomnisassumendafugitnonnisietodionulla.'),
(27, 'voyage', 'Ducimusofficiisvelititaquesimiliquequiaveritatisestetomnisaliquaminventoredignissimosasperiores.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
