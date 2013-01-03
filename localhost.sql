-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 06 Juin 2012 à 07:58
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `kop1davant`
--
CREATE DATABASE `kop1davant` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kop1davant`;

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE IF NOT EXISTS `Categorie` (
  `CATEGORIE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`CATEGORIE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `CategorieEtab`
--

CREATE TABLE IF NOT EXISTS `CategorieEtab` (
  `CATEGORIEETAB_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ETABLISSEMENT_ID` int(11) DEFAULT NULL,
  `CATEGORIE_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CATEGORIEETAB_ID`),
  KEY `CategorieEtab_Categorie` (`CATEGORIE_ID`),
  KEY `CategorieEtab_Etablissement` (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Etablissement`
--

CREATE TABLE IF NOT EXISTS `Etablissement` (
  `ETABLISSEMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) DEFAULT NULL,
  `CodePostale` int(20) DEFAULT NULL,
  `Pays` varchar(20) DEFAULT NULL,
  `Ville` varchar(20) DEFAULT NULL,
  `Adresse` varchar(20) DEFAULT NULL,
  `Departement` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ETABLISSEMENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Groupe`
--

CREATE TABLE IF NOT EXISTS `Groupe` (
  `GROUPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Intitule` varchar(50) DEFAULT NULL,
  `CONTIENT` int(11) NOT NULL,
  PRIMARY KEY (`GROUPE_ID`),
  KEY `Association11` (`CONTIENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Inscription`
--

CREATE TABLE IF NOT EXISTS `Inscription` (
  `INSCRIPTION_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MEMBRE_ID` int(11) DEFAULT NULL,
  `PROMOTION_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`INSCRIPTION_ID`),
  KEY `Inscription_Membre` (`MEMBRE_ID`),
  KEY `Inscription_Promotion` (`PROMOTION_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Structure de la table `Membre`
--

CREATE TABLE IF NOT EXISTS `Membre` (
  `MEMBRE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) DEFAULT NULL,
  `Prenom` varchar(20) DEFAULT NULL,
  `DateDeNaissance` date DEFAULT NULL,
  `CodePostale` int(20) DEFAULT NULL,
  `Departement` varchar(20) DEFAULT NULL,
  `Ville` varchar(20) DEFAULT NULL,
  `Pays` varchar(20) DEFAULT NULL,
  `NumPhotoProfil` int(20) DEFAULT NULL,
  `PROFIL` int(11) NOT NULL,
  PRIMARY KEY (`MEMBRE_ID`),
  UNIQUE KEY `Membre_UK` (`PROFIL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `Membre`
--

INSERT INTO `Membre` (`MEMBRE_ID`, `Nom`, `Prenom`, `DateDeNaissance`, `CodePostale`, `Departement`, `Ville`, `Pays`, `NumPhotoProfil`, `PROFIL`) VALUES
(1, 'Beaussier', 'Arnaud', '0000-00-00', 77210, 'Seine-Et-Marne', 'Avon', 'France', 0, 1),
(2, 'Beaussier', 'Arnaud', '0000-00-00', 93330, 'Seine-St-Denis', 'Paris', 'France', 0, 2),
(3, 'arnaud', 'machin', '0000-00-00', 66000, 'Essones', 'paris', 'France', 0, 3),
(4, 'sfoj', 'slkj', '0000-00-00', 0, 'dfklj', 'lfkjs', 'ld', 0, 4),
(5, 'sfoj', 'slkj', '0000-00-00', 0, 'dfklj', 'lfkjs', 'ld', 0, 5),
(6, 'sfoj', 'slkj', '0000-00-00', 0, 'dfklj', 'lfkjs', 'ld', 0, 6),
(7, 'sfoj', 'slkj', '0000-00-00', 0, 'dfklj', 'lfkjs', 'ld', 0, 7),
(8, 'sfoj', 'slkj', '0000-00-00', 0, 'dfklj', 'lfkjs', 'ld', 0, 8),
(9, 'Sky', 'Paul', '0000-00-00', 75009, 'Paris', 'Paris', 'France', 0, 9),
(10, 'arnault', 'machintruc', '0000-00-00', 65432, 'OverDepartement', 'SuperVille', 'ZePays', 0, 10),
(11, 'mqldfkj', 'lkdsjf', '0000-00-00', 87623, 'sdlmfkj', 'lskdfj', 'sldfkj', 0, 11),
(12, 'skmldfj', 'lskdfj', '0000-00-00', 98732, 'oziuef', 'lskjdf', 'sdlfkj', 0, 12),
(13, 'lkmjd', 'oiuezr', '0000-00-00', 66666, 'sdfkjll', 'sdflkjad', 'kdsfjo', 0, 13),
(14, 'lskjf', 'lkdsj', '0000-00-00', 0, 'sdl', 'lsdkj', 'lksdjl', 0, 14),
(15, 'lskj', 'sdlfkj', '0000-00-00', 0, 'sdlj', 'sdlkj', 'slkj', 0, 15),
(16, 'slkfj', 'lskj', '0000-00-00', 9872, 'sfklj', 'lkjdf', 'slfj', 0, 16);

-- --------------------------------------------------------

--
-- Structure de la table `Promotion`
--

CREATE TABLE IF NOT EXISTS `Promotion` (
  `PROMOTION_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Niveau` varchar(20) DEFAULT NULL,
  `POSSEDE` int(11) NOT NULL,
  PRIMARY KEY (`PROMOTION_ID`),
  KEY `Association8` (`POSSEDE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `AdresseMail` varchar(40) DEFAULT NULL,
  `Motdepasse` varchar(40) DEFAULT NULL,
  `Droit` int(20) DEFAULT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`USER_ID`, `AdresseMail`, `Motdepasse`, `Droit`) VALUES
(1, 'beaussier.arnaud@gmail.com', 'mqlsdkjf', 0),
(2, 'beaussier@arnaud.com', '979b08a8fbebfbc65c5b', 0),
(3, 'arnaud@machin.net', '8ea15a38c4c1a177d509c85ef6623e23', 0),
(4, 'arnaud@domaine.fr', 'ab4f63f9ac65152575886860dde480a1', 0),
(5, 'arnaud@domaine.fr', 'ab4f63f9ac65152575886860dde480a1', 0),
(6, 'arnaud@domaine.fr', 'ab4f63f9ac65152575886860dde480a1', 0),
(7, 'arnaud@domaine.fr', 'ab4f63f9ac65152575886860dde480a1', 0),
(8, 'arnaud@domaine.fr', 'ab4f63f9ac65152575886860dde480a1', 0),
(9, 'paul@skyplabs.net', '8ea15a38c4c1a177d509c85ef6623e23', 0),
(10, 'arnault@truc.com', 'ab4f63f9ac65152575886860dde480a1', 0),
(11, 'arnaud@sldjf.fr', '979b08a8fbebfbc65c5bc0faa881841a', 0),
(12, 'arnaud@lmsjf.Fr', '93ae6fd5e4fa5377c7289beded48cb37', 0),
(13, 'arnaud@smkfj.fr', 'c2128428b0b431a842637e86c6411ada', 0),
(14, 'arnaud@lm.Fr', '05cccabfb47fef76c2f31ef6447c1716', 0),
(15, 'arnaud@smlkfj.fr', 'abc2bcc20c556ecb6cbff464853d8180', 0),
(16, 'arnaud@mlsdfj.Fr', '979b08a8fbebfbc65c5bc0faa881841a', 0);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `PHOTO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PHOTODECLASSE_ID` int(11) DEFAULT NULL,
  `GROUPE_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`PHOTO_ID`),
  KEY `photo_Groupe` (`GROUPE_ID`),
  KEY `photo_photodeclasse` (`PHOTODECLASSE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `photodeclasse`
--

CREATE TABLE IF NOT EXISTS `photodeclasse` (
  `PHOTODECLASSE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Professeur` varchar(20) DEFAULT NULL,
  `Numphotoclasse` int(20) DEFAULT NULL,
  PRIMARY KEY (`PHOTODECLASSE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `CategorieEtab`
--
ALTER TABLE `CategorieEtab`
  ADD CONSTRAINT `CategorieEtab_Categorie` FOREIGN KEY (`CATEGORIE_ID`) REFERENCES `Categorie` (`CATEGORIE_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `CategorieEtab_Etablissement` FOREIGN KEY (`ETABLISSEMENT_ID`) REFERENCES `Etablissement` (`ETABLISSEMENT_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Groupe`
--
ALTER TABLE `Groupe`
  ADD CONSTRAINT `Association11` FOREIGN KEY (`CONTIENT`) REFERENCES `Promotion` (`PROMOTION_ID`);

--
-- Contraintes pour la table `Inscription`
--
ALTER TABLE `Inscription`
  ADD CONSTRAINT `Inscription_Membre` FOREIGN KEY (`MEMBRE_ID`) REFERENCES `Membre` (`MEMBRE_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `Inscription_Promotion` FOREIGN KEY (`PROMOTION_ID`) REFERENCES `Promotion` (`PROMOTION_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Membre`
--
ALTER TABLE `Membre`
  ADD CONSTRAINT `Association9` FOREIGN KEY (`PROFIL`) REFERENCES `User` (`USER_ID`);

--
-- Contraintes pour la table `Promotion`
--
ALTER TABLE `Promotion`
  ADD CONSTRAINT `Promotion_ibfk_1` FOREIGN KEY (`POSSEDE`) REFERENCES `Etablissement` (`ETABLISSEMENT_ID`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_Groupe` FOREIGN KEY (`GROUPE_ID`) REFERENCES `Groupe` (`GROUPE_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `photo_photodeclasse` FOREIGN KEY (`PHOTODECLASSE_ID`) REFERENCES `photodeclasse` (`PHOTODECLASSE_ID`) ON DELETE CASCADE;
