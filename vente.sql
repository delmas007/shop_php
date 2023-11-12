-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 12 nov. 2023 à 22:37
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
  `description` varchar(20) NOT NULL,
  `num_type` bigint(20) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_num_type` (`num_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Structure de la table `type_article`
--

DROP TABLE IF EXISTS `type_article`;
CREATE TABLE IF NOT EXISTS `type_article` (
  `num_type` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_type` varchar(15) NOT NULL,
  PRIMARY KEY (`num_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16;

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
