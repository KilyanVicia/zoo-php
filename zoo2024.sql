-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 16 mai 2026 à 13:19
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zoo2024`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `id` int NOT NULL,
  `surnom` varchar(15) DEFAULT NULL,
  `naissance` varchar(11) DEFAULT NULL,
  `photo` varchar(15) DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `idAnimaux` int DEFAULT NULL,
  `commentaire` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `surnom`, `naissance`, `photo`, `poids`, `idAnimaux`, `commentaire`) VALUES
(1, 'Coco', '15-10-2021', 'coco.jpg', 0.105, 3, 'Ce perroquet est très commun en Australie. Il a la particularité étonnante de se nourrir essentiellement de nectar et de pollen.'),
(2, 'Brutus', '21-03-2019', 'brutus.jpg', 65, 12, 'Sous-espèce du loup gris, il est le plus gros représentant du genre.'),
(3, 'Frisky', '15-07-2010', 'frisky.jpg', 47.8, 1, 'Avec sa silhouette élancée et ses griffes non rétractiles, il est capable d’atteindre la vitesse record de 110 km/h.'),
(4, 'Emile', '23-04-2016', 'emile.jpg', 38.2, 15, 'Le grand fourmilier a une allure unique dans le Règne animal, une anatomie incroyable, un régime alimentaire hyperspécialisé, un mode de vie étonnant.'),
(5, 'Shadow', '07-11-2020', 'shadow.jpg', 34.5, 1, 'Shadow est un guépard mâle, espiègle et joueur.');

-- --------------------------------------------------------

--
-- Structure de la table `especes`
--

DROP TABLE IF EXISTS `especes`;
CREATE TABLE IF NOT EXISTS `especes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `especes`
--

INSERT INTO `especes` (`id`, `nom`, `categorie`, `image`) VALUES
(1, 'Guépard', 'Félins et canidés', 'guepard.jpg'),
(2, 'Héron garde-boeuf', 'Oiseaux', 'heron.jpg'),
(3, 'Lori arc-en-ciel', 'Oiseaux', 'lori.jpg'),
(4, 'Maki catta', 'Primate', 'maki.jpg'),
(5, 'Otarie de Californie', 'Mammifères marins', 'otarie.jpg'),
(6, 'Padda de Java', 'Oiseaux', 'padda.jpg'),
(7, 'Saïmiri jaune', 'Primate', 'saimiri.jpg'),
(8, 'Tigre de Sumatra', 'Félins et canidés', 'tigre.jpg'),
(9, 'Eléphant d\'Afrique', 'Autres', 'elephant.jpg'),
(10, 'Panda roux', 'Autres', 'panda_roux.jpg'),
(11, 'Manchot de Humboldt', 'Mammifères marins', 'manchot.jpg'),
(12, 'Loup blanc de l\'Arctique', 'Félins et canidés', 'loup.jpg'),
(13, 'Pélican blanc', 'Oiseaux', 'pelican.jpg'),
(14, 'Rhinocéros indien', 'Autres', 'rhinoceros.jpg'),
(15, 'Grand fourmilier', 'Autres', 'fourmilier.jpg'),
(16, 'Serval', 'Félins et canidés', 'serval.jpg'),
(17, 'Gorille', 'Primate', 'gorille.jpg'),
(18, 'Colibri', 'Oiseaux', 'colibri.jpg'),
(19, 'Gnou', 'Autres', 'gnou.jpg'),
(20, 'Renard', 'Félins et canidés', 'renard.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL,
  `login` varchar(15) DEFAULT NULL,
  `mdp` varchar(10) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `categorie` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `mdp`, `image`, `categorie`) VALUES
(1, 'pikachu', 'pppp1111', 'pikachu.png', 'Visiteur'),
(2, 'martin', 'mmmm1111', 'martin.png', 'Soigneur'),
(3, 'elodie', 'eeee1111', 'elodie.png', 'Visiteur'),
(4, 'audrey', 'aaaa1111', 'audrey.png', 'Soigneur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
