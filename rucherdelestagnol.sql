-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 06 fév. 2023 à 12:57
-- Version du serveur : 5.7.40
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rucherdelestagnol`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `id_produit` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`,`id_categorie`),
  KEY `fk_appartenir_categories` (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

DROP TABLE IF EXISTS `commander`;
CREATE TABLE IF NOT EXISTS `commander` (
  `id_utilisateur` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_livraison` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date_commande` datetime NOT NULL,
  `statut_livraison` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`,`id_produit`,`id_livraison`),
  KEY `fk_commander_livraisons` (`id_livraison`),
  KEY `fk_commander_produits` (`id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id_droit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_droit` varchar(50) NOT NULL,
  PRIMARY KEY (`id_droit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livraisons`
--

DROP TABLE IF EXISTS `livraisons`;
CREATE TABLE IF NOT EXISTS `livraisons` (
  `id_livraison` int(11) NOT NULL AUTO_INCREMENT,
  `nom_livraison` varchar(50) NOT NULL,
  PRIMARY KEY (`id_livraison`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(50) NOT NULL,
  `description_produit` text NOT NULL,
  `prix_produit` float NOT NULL,
  `stock_produit` int(11) NOT NULL,
  `image_produit` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(50) NOT NULL,
  `prenom_utilisateur` varchar(50) NOT NULL,
  `mail_utilisateur` varchar(50) NOT NULL,
  `mot_de_passe_utilisateur` varchar(200) NOT NULL,
  `num_rue_utilisateur` varchar(50) DEFAULT NULL,
  `nom_rue_utilisateur` varchar(50) DEFAULT NULL,
  `cp_utilisateur` varchar(50) DEFAULT NULL,
  `ville_utilisateur` varchar(50) DEFAULT NULL,
  `pays_utilisateur` varchar(50) DEFAULT NULL,
  `tel_utilisateur` varchar(50) DEFAULT NULL,
  `id_droit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `fk_posseder_droits` (`id_droit`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `mail_utilisateur`, `mot_de_passe_utilisateur`, `num_rue_utilisateur`, `nom_rue_utilisateur`, `cp_utilisateur`, `ville_utilisateur`, `pays_utilisateur`, `tel_utilisateur`, `id_droit`) VALUES
(3, 'test', 'test', 'test', '$2y$12$VcBX6cly4I/FxrMae38EYuBCL5r0wBtQOpfoViKHsXjasXQMVN2RC', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '', '', '', '$2y$12$kRHcTQsn0UdpGU2eL3Emw.r0w0p4Nupa9CuN8k.YM7msPzLP1g9Zu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'essai', 'essai', 'essai', '$2y$12$2N3CNYx.zDCGw9HNGqT6LOIYlApOR0mvtNYcmbPJITFEtKcmo08hi', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `fk_appartenir_categories` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`),
  ADD CONSTRAINT `fk_appartenir_produits` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id_produit`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `fk_posseder_droits` FOREIGN KEY (`id_droit`) REFERENCES `droits` (`id_droit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
