-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 24 Août 2015 à 04:35
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mpt`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE IF NOT EXISTS `adresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `voie` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `postal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complement` longtext COLLATE utf8_unicode_ci,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CE2318AA76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Contenu de la table `adresse`
--

INSERT INTO `adresse` (`id`, `user_id`, `voie`, `ville`, `postal`, `complement`, `titre`) VALUES
(48, 62, 'admin', 'admin', 'admin', NULL, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rubriqueblog_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6027FE7DE6BA0A3B` (`rubriqueblog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `blog`
--

INSERT INTO `blog` (`id`, `rubriqueblog_id`, `titre`, `description`, `article`, `image`, `date`) VALUES
(1, 1, 'Cuisse de canard braisée au Safran et au miel', '', 'Voici une recette de canard braisé inspirée du terroir du Sud Ouest mais adaptée aux ingrédients de notre région et agrémentée du délicieux miel du Voici une recette de canard braisé inspirée du terroir du Sud Ouest mais adaptée aux ingrédients de notre région et agrémentée du délicieux miel du (…)', 'img/blog/blog1.jpg', '2015-03-05'),
(2, 2, 'Le Cresson de Méréville', '', 'Produit emblématique de la région Ile-de-France, le cresson de Méréville se distingue des autres cressons par son goût suave et moins piquant en Produit emblématique de la région Ile-de-France, le cresson de Méréville se distingue des autres cressons par son goût suave et moins piquant en', 'img/blog/blog2.jpg', '2015-03-03'),
(3, 3, 'Les fromages d''appelation en Ile de France', '', 'Vous connaissez le Coulommiers, les Brie de Meaux et de Melun AOC, voire ceux de Montereau ou de Nangis. Mais l’Île-de-France nous régale Vous connaissez le Coulommiers, les Brie de Meaux et de Melun AOC, voire ceux de Montereau ou de Nangis. Mais l’Île-de-France nous régale', 'img/blog/blog3.jpg', '2015-03-02');

-- --------------------------------------------------------

--
-- Structure de la table `caddie`
--

CREATE TABLE IF NOT EXISTS `caddie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `identifiant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `upsell_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EE21C10DA76ED395` (`user_id`),
  KEY `IDX_EE21C10DCCD7E912` (`menu_id`),
  KEY `IDX_EE21C10DC1E6992E` (`upsell_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=102 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`) VALUES
(1, 'Classique', ''),
(2, 'Végétarien', 'lol'),
(3, 'Apéro', ''),
(4, 'Brunch\r\n', ''),
(5, 'Fromage', ''),
(6, 'Dessert', ''),
(7, 'Boisson', '');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) NOT NULL,
  `titre` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `date` date NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` tinytext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_DD3795ADBCF5E72D` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `categorie_id`, `titre`, `prix`, `date`, `active`, `photo`) VALUES
(1, 1, 'Menu classique du 25 juin', '59', '2015-03-12', 'oui', 'img\\menus\\menu_classique.png'),
(2, 2, '', '488', '0000-00-00', 'oui', '');

-- --------------------------------------------------------

--
-- Structure de la table `menu_plat`
--

CREATE TABLE IF NOT EXISTS `menu_plat` (
  `menu_id` int(11) NOT NULL,
  `plat_id` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`,`plat_id`),
  KEY `IDX_E8775249CCD7E912` (`menu_id`),
  KEY `IDX_E8775249D73DB560` (`plat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `menu_plat`
--

INSERT INTO `menu_plat` (`menu_id`, `plat_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_31D88618E7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE IF NOT EXISTS `plat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `accroche` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `temps` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `difficulte` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `consistance` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `plus` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `plat`
--

INSERT INTO `plat` (`id`, `titre`, `accroche`, `description`, `temps`, `difficulte`, `consistance`, `photo`, `plus`) VALUES
(1, 'Navarin de veau', 'Un plat léger et réconfortant pour faire le plein de vitamines!', 'Un veau parfaitement tendre et des légumes de saison (oignon blanc, pomme de terre charlotte, carotte, navet, thym, persil plat.)', '25', 'dure', 'Repas complet', 'img\\menus\\plat1.jpg', 'Le + : du veau en directe de la ferme de l’arche, des légumes de saison'),
(2, 'Ratatouille', 'Le ragoût de légumes qu’on touille !', 'Composé d''oignons, de courgettes, de poivrons, de tomates, d''aubergines et d''aromates, cuisinés à l''huile d''olive. Aujourd''hui, il est d''usage de sauter rapidement séparément, avant de les rassembler pour les cuisiner ensemble pour les fondre délicatement.', '40', 'facile', 'Repas complet', 'img\\menus\\ratatouille.jpg', ''),
(3, 'Navarin de canard', 'Un plat léger et réconfortant pour faire le plein de vitamines!', 'Un veau parfaitement tendre et des légumes de saison (oignon blanc, pomme de terre charlotte, carotte, navet, thym, persil plat.)', '25', 'dure', 'Repas complet', 'img\\menus\\plat1.jpg', 'Le + : du veau en directe de la ferme de l’arche, des légumes de saison');

-- --------------------------------------------------------

--
-- Structure de la table `plat_menu`
--

CREATE TABLE IF NOT EXISTS `plat_menu` (
  `plat_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`plat_id`,`menu_id`),
  KEY `IDX_CA9ED79CD73DB560` (`plat_id`),
  KEY `IDX_CA9ED79CCCD7E912` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `plat_menu`
--

INSERT INTO `plat_menu` (`plat_id`, `menu_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F75B255457698A6A` (`role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `name`, `role`) VALUES
(1, 'admin', 'ROLE_ADMIN'),
(2, 'user', 'ROLE_USER');

-- --------------------------------------------------------

--
-- Structure de la table `rubriqueblog`
--

CREATE TABLE IF NOT EXISTS `rubriqueblog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `rubriqueblog`
--

INSERT INTO `rubriqueblog` (`id`, `nom`) VALUES
(1, 'Recettes et conseils de cuisine'),
(2, 'Les produits de notre région'),
(3, 'Nos producteurs et exploitants'),
(4, 'ravioli');

-- --------------------------------------------------------

--
-- Structure de la table `upsell`
--

CREATE TABLE IF NOT EXISTS `upsell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prix` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `origine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `departement` longtext COLLATE utf8_unicode_ci NOT NULL,
  `contenance` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `actif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AE89D749BCF5E72D` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `upsell`
--

INSERT INTO `upsell` (`id`, `categorie_id`, `titre`, `description`, `prix`, `origine`, `photo`, `departement`, `contenance`, `actif`) VALUES
(1, 5, 'Notre Brie de Melun', '', '8,99', 'Fromagerie Loiseau', 'img\\menus\\brie.jpg', '77760 Achère-la-forêt', '250g', 'oui'),
(2, 6, 'Notre crème brûlée', '', '10,99', 'Fromagerie Loiseau', 'img\\menus\\creme.jpg', '77760 Achère-la-forêt', '4 pots', 'oui'),
(4, 7, 'Notre vin des Coteaux de Suresnes', '', '12,99', 'Clos du Pas Saint-Maurice', 'img/menus/vin.jpg', '92150 Suresnes', '75cl', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `subscribedate` datetime NOT NULL,
  `civilite` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA17977F85E0677` (`username`),
  UNIQUE KEY `UNIQ_2DA17977E7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `nom`, `prenom`, `password`, `email`, `birthdate`, `subscribedate`, `civilite`) VALUES
(62, 'admin@free.fr', 'admin', 'admin', 'admin', 'admin', '2015-01-01', '2015-07-13 05:15:34', 'Monsieur');

-- --------------------------------------------------------

--
-- Structure de la table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `IDX_2DE8C6A3A76ED395` (`user_id`),
  KEY `IDX_2DE8C6A3D60322AC` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(62, 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `FK_CE2318AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `FK_6027FE7DE6BA0A3B` FOREIGN KEY (`rubriqueblog_id`) REFERENCES `rubriqueblog` (`id`);

--
-- Contraintes pour la table `caddie`
--
ALTER TABLE `caddie`
  ADD CONSTRAINT `FK_EE21C10DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_EE21C10DC1E6992E` FOREIGN KEY (`upsell_id`) REFERENCES `upsell` (`id`),
  ADD CONSTRAINT `FK_EE21C10DCCD7E912` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Contraintes pour la table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `FK_DD3795ADBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `menu_plat`
--
ALTER TABLE `menu_plat`
  ADD CONSTRAINT `FK_E8775249CCD7E912` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E8775249D73DB560` FOREIGN KEY (`plat_id`) REFERENCES `plat` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `plat_menu`
--
ALTER TABLE `plat_menu`
  ADD CONSTRAINT `FK_CA9ED79CCCD7E912` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CA9ED79CD73DB560` FOREIGN KEY (`plat_id`) REFERENCES `plat` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `upsell`
--
ALTER TABLE `upsell`
  ADD CONSTRAINT `FK_AE89D749BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `FK_2DE8C6A3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2DE8C6A3D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
