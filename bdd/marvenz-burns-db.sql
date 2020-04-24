-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 24 avr. 2020 à 17:39
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `marvenz-burns-db`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `lien_image` varchar(255) NOT NULL,
  `alt_image` varchar(255) DEFAULT NULL,
  `titre_image` varchar(255) DEFAULT NULL,
  `numPlace_image` int(11) DEFAULT NULL,
  `valeurX_rec_debut` int(11) DEFAULT NULL,
  `valeurY_rec_debut` int(11) DEFAULT NULL,
  `valeurX_rec_fin` int(11) DEFAULT NULL,
  `valeurY_rec_fin` int(11) DEFAULT NULL,
  `hauteur_rec_debut` int(11) DEFAULT NULL,
  `hauteur_rec_fin` int(11) DEFAULT NULL,
  `id_slide` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_image`),
  KEY `image_slide_FK` (`id_slide`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `lien_image`, `alt_image`, `titre_image`, `numPlace_image`, `valeurX_rec_debut`, `valeurY_rec_debut`, `valeurX_rec_fin`, `valeurY_rec_fin`, `hauteur_rec_debut`, `hauteur_rec_fin`, `id_slide`) VALUES
(7, '223e5602aad298bc765be848fb8e46a7.jpeg', NULL, 'Wombat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '3d29e17547144a006e1e780159789706.jpeg', NULL, 'iyugsdfuisdguikf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'a159525dd67474c634581cea551073f9.jpeg', NULL, 'rick_and_morty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '7bb79ac4570ffa3415cc1c92c450ddc4.jpeg', NULL, 'paysage_neige', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '82571f9f3cce8cafe3e37aea889bf206.jpeg', NULL, 'route', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2bd16e39c247a99b62c59bf7fb686a01.jpeg', NULL, 'the-of-us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '5289cedd1a67d141e5a94e2936e3b2df.jpeg', NULL, 'deadpool', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `titre_slide` varchar(255) NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `slide`
--

INSERT INTO `slide` (`id_slide`, `titre_slide`) VALUES
(25, 'sqddqsd');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_slide_FK` FOREIGN KEY (`id_slide`) REFERENCES `slide` (`id_slide`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
