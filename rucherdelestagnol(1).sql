-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 fév. 2023 à 15:01
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
  PRIMARY KEY (`id_produit`,`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`) VALUES
(1, 'miels'),
(2, 'produits de la ruche'),
(3, 'coffrets');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id_droit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_droit` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_droit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livraisons`
--

DROP TABLE IF EXISTS `livraisons`;
CREATE TABLE IF NOT EXISTS `livraisons` (
  `id_livraison` int(11) NOT NULL AUTO_INCREMENT,
  `nom_livraison` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_livraison`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description_produit` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `prix_produit` float NOT NULL,
  `stock_produit` int(11) DEFAULT NULL,
  `image_produit` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `fk_appartenir_categories` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom_produit`, `description_produit`, `prix_produit`, `stock_produit`, `image_produit`, `id_categorie`) VALUES
(1, 'Miel de Garrigues', 'Miel de garrigues en pot de 400 grammes.', 7.5, 10, 'Garrigues Bio 400g.jpeg', 1),
(2, 'Miel de ChÃ¢taignier', 'Miel de chÃ¢taiginer en pot de 400 grammes.', 7.5, 10, 'Chataignier Bio 400g.jpeg', 1),
(3, 'Miel de Tournesol', 'Miel de tournesol en pot de 400 grammes.', 7.5, 10, 'Tournesol Bio 400g.jpeg', 1),
(4, 'Miel de Fleurs', 'Miel de fleurs en pot de 400 grammes.', 7.5, 10, 'Fleurs Bio 400g.jpeg', 1),
(5, 'Coffret Cube ', 'Coffret cube avec 3 pots de miels de 125 grammes.', 15, 10, 'Cube (6).jpeg', 3),
(6, 'BiÃ¨re au miel ', 'BiÃ¨re au miel de lavande bouteille 33cl ', 3, 10, 'imagesNosAutres.png', 2),
(7, 'Moutarde au miel', 'Pot de moutarde au miel', 3.5, 10, 'imagesNosAutres.png', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `prenom_utilisateur` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mail_utilisateur` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mot_de_passe_utilisateur` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `num_rue_utilisateur` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `nom_rue_utilisateur` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `cp_utilisateur` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ville_utilisateur` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `pays_utilisateur` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `tel_utilisateur` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `id_droit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `fk_posseder_droits` (`id_droit`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `mail_utilisateur`, `mot_de_passe_utilisateur`, `num_rue_utilisateur`, `nom_rue_utilisateur`, `cp_utilisateur`, `ville_utilisateur`, `pays_utilisateur`, `tel_utilisateur`, `id_droit`) VALUES
(1, 'test', 'test', 'test', '$2y$12$Ds6wAAJiTV/kYYYQ8ZahZerV8MIleqXfrJSbf0PRF68S5BG32.hii', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `fk_appartenir_categories` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `fk_posseder_droits` FOREIGN KEY (`id_droit`) REFERENCES `droits` (`id_droit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
