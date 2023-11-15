-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 nov. 2023 à 23:35
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vente`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(15) NOT NULL,
  `prix_article` int(11) NOT NULL,
  `description` varchar(20) DEFAULT NULL,
  `num_type` bigint(20) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_num_type` (`num_type`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf16;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `nom_article`, `prix_article`, `description`, `num_type`) VALUES
(1, 'imprimante_1', 130000, NULL, 8),
(2, 'imprimante_2', 200900, NULL, 8),
(3, 'imprimante_3', 300900, NULL, 8),
(4, 'imprimante_4', 569900, NULL, 8),
(5, 'imprimante_5', 370250, NULL, 8),
(6, 'imprimante_6', 150000, NULL, 8),
(7, 'imprimante_7', 222680, NULL, 8),
(8, 'imprimante_8', 292900, NULL, 8),
(9, 'fibre_1', 130000, NULL, 4),
(10, 'fibre_2', 200900, NULL, 4),
(11, 'fibre_3', 300900, NULL, 4),
(12, 'fibre_4', 569900, NULL, 4),
(13, 'fibre_5', 370250, NULL, 4),
(14, 'fibre_6', 150000, NULL, 4),
(15, 'fibre_7', 222680, NULL, 4),
(16, 'fibre_8', 292900, NULL, 4),
(17, 'bureau_1', 130000, NULL, 1),
(18, 'bureau_2', 200900, NULL, 1),
(19, 'bureau_3', 300900, NULL, 1),
(20, 'bureau_4', 569900, NULL, 1),
(21, 'bureau_5', 370250, NULL, 1),
(22, 'bureau_6', 150000, NULL, 1),
(23, 'bureau_7', 222680, NULL, 1),
(31, 'bureau_8', 292900, NULL, 1),
(32, 'Clavier_1', 10000, NULL, 2),
(33, 'Clavier_2', 2000, NULL, 2),
(34, 'Clavier_3', 5000, NULL, 2),
(35, 'Clavier_4', 5600, NULL, 2),
(36, 'Clavier_5', 3750, NULL, 2),
(37, 'Clavier_6', 4000, NULL, 2),
(38, 'Clavier_7', 2280, NULL, 2),
(39, 'Clavier_8', 2900, NULL, 2),
(40, 'Cle_1', 10000, NULL, 3),
(41, 'Cle_2', 2000, NULL, 3),
(42, 'Cle_3', 5000, NULL, 3),
(43, 'Cle_4', 5600, NULL, 3),
(44, 'Cle_5', 3750, NULL, 3),
(45, 'Cle_6', 4000, NULL, 3),
(46, 'Cle_7', 2280, NULL, 3),
(47, 'Cle_8', 2900, NULL, 3),
(56, 'Ordinateur_1', 130000, NULL, 5),
(57, 'Ordinateur_2', 200900, NULL, 5),
(58, 'Ordinateur_3', 300900, NULL, 5),
(59, 'Ordinateur_4', 569900, NULL, 5),
(60, 'Ordinateur_5', 370250, NULL, 5),
(61, 'Ordinateur_6', 150000, NULL, 5),
(62, 'Ordinateur_7', 222680, NULL, 5),
(63, 'Ordinateur_8', 292900, NULL, 5),
(64, 'Serveur_1', 130000, NULL, 6),
(65, 'Serveur_2', 200900, NULL, 6),
(66, 'Serveur_3', 300900, NULL, 6),
(67, 'Serveur_4', 569900, NULL, 6),
(68, 'Serveur_5', 370250, NULL, 6),
(69, 'Serveur_6', 150000, NULL, 6),
(70, 'Serveur_7', 222680, NULL, 6),
(71, 'Serveur_8', 292900, NULL, 6),
(72, 'Souris_1', 10000, NULL, 7),
(73, 'Souris_2', 2000, NULL, 7),
(74, 'Souris_3', 5000, NULL, 7),
(75, 'Souris_4', 5600, NULL, 7),
(76, 'Souris_5', 3750, NULL, 7),
(77, 'Souris_6', 4000, NULL, 7),
(78, 'Souris_7', 2280, NULL, 7),
(79, 'Souris_8', 2900, NULL, 7);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `id_a` bigint(20) NOT NULL,
  `id_u` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `fk_id_user` (`id_u`),
  KEY `fk_id_article` (`id_a`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Structure de la table `type_article`
--

DROP TABLE IF EXISTS `type_article`;
CREATE TABLE IF NOT EXISTS `type_article` (
  `num_type` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_type` varchar(15) NOT NULL,
  PRIMARY KEY (`num_type`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf16;

--
-- Déchargement des données de la table `type_article`
--

INSERT INTO `type_article` (`num_type`, `nom_type`) VALUES
(1, 'BUREAU'),
(2, 'CLAVIER'),
(3, 'CLE'),
(4, 'FIBRE'),
(5, 'ORDINATEUR'),
(6, 'SERVEUR'),
(7, 'SOURIS'),
(8, 'IMPRIMANTE');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `role` varchar(250) DEFAULT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `mot_de_passe` varchar(250) NOT NULL,
  `num_telephone` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `username`, `email`, `role`, `nom`, `prenom`, `adresse`, `mot_de_passe`, `num_telephone`) VALUES
(1, 'delmas', 'angamancedrick@gmail.com', NULL, 'delmas', 'Angaman', 'Abobo', '$2y$10$FrgB0HBR7CYhhUeWvoKp7evdsrlaj/PswR0up6ScQd2PDRPJRT6E6', 779562248),
(2, 'paulo', 'paulo@gmail.com', NULL, 'paulo', 'marie', 'abobo', '$2y$10$n7B0jyodH/K.aDN7hTQMgeqMkjDErpDcswY03opdvlkKvxWBfAape', 776543332);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`num_type`) REFERENCES `type_article` (`num_type`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_id_article` FOREIGN KEY (`id_a`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_u`) REFERENCES `utilisateur` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
