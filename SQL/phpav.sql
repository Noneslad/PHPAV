-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 06 Mars 2015 à 09:45
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `phpav`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `date` date NOT NULL,
  `dossier` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id`, `numero`, `date`, `dossier`) VALUES
(1, 3, '2015-03-06', NULL),
(2, 1, '2015-01-23', 'cours/20150123/'),
(3, 2, '2015-02-22', 'cours/20150220/');

-- --------------------------------------------------------

--
-- Structure de la table `devoir`
--

CREATE TABLE IF NOT EXISTS `devoir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `description` text,
  `lienImage` varchar(255) DEFAULT NULL,
  `srcImage` varchar(255) DEFAULT NULL,
  `largeurImage` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `devoir`
--

INSERT INTO `devoir` (`id`, `titre`, `description`, `lienImage`, `srcImage`, `largeurImage`, `numero`) VALUES
(1, 'Réaliser le template d''un site en PHP', 'L''objectif de cet exercice était de manipuler PHP pour lui faire faire ce pour quoi il à été conçu : gerer et administrer des pages web.', '?page=devoir1', 'img/exempleTemplateSite.png', 200, 1),
(2, 'Manipuler et agrémenter une classe PHP générant du HTML', 'L''objectif de cet exercice était de manipuler Une classe en vue de reproduire le template précédemment créé ', '?page=devoir2', 'img/CodePhp.jpg', 150, 2);

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE IF NOT EXISTS `eleve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) DEFAULT NULL,
  `prenom` varchar(150) DEFAULT NULL,
  `formation` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`id`, `nom`, `prenom`, `formation`) VALUES
(1, 'ALAMI AROUSSI ', 'Abdel', 'CRW(Concepteur Réalisateur Web)');

-- --------------------------------------------------------

--
-- Structure de la table `mediacours`
--

CREATE TABLE IF NOT EXISTS `mediacours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCours` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `lien` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idCours` (`idCours`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `mediacours`
--

INSERT INTO `mediacours` (`id`, `idCours`, `titre`, `description`, `type`, `lien`) VALUES
(1, 1, 'Tutoriel vidéo d''utilisation de PDO', 'Cette vidéo présente l''objet PDO <br />Après avoir vu comment se connecter vous appprendrez à effectuer des requetes de séléctions, de mises à jour, et d''insertions.\r\nPuis vous apprendrez à rendre PDO un peu plus bavard et à gerer des transactions...<br />Cette vidéo à été réalisée à la sortie de PDO par le site <a href=''http://www.grafikart.fr/''>Grafikart</a> que je vous conseille vivement. Son contenu est riche et s’améliore avec le temps voir <a href = ''http://www.grafikart.fr/formations/programmation-objet-php/objets-poo''>le cours sur les objets</a>', 'Video', 'http://www.grafikart.fr/tutoriels/php/pdo-php-111'),
(2, 2, 'Cours Prezi Intro PHP en PDF !', 'Ce Prezi presente php, ses créateurs, son éco-système...<br />Il fait ensuite un zoom sur la CheatSheet qui accompagne ce cours, pour détailler points par points les fondamentaux de la structurede PHP, sa syntaxe, illustrée par des exemples.<br />Ce document est aussi diponible dans sa version prezi <a href = "https://prezi.com/pd_b0maaypbt/cours-intro-php-cdi/">ICI</a>', 'Pdf', 'cours/20150123/cours20150123.pdf'),
(3, 2, 'CheatSheet PHP', 'Il s''agit d''une CheatSheet reprenant les fondamentaux de php !<br />Une aide sympa pour se rappeler les structure de controle et la syntaxe ! Ce document provient du site <a href =''http://www.cheatography.com/zetura/cheat-sheets/php-syntaxe-and-fondamentaux-fr/''> Cheatography </a> et est proposé par Zetura ! ', 'Pdf', 'cours/20150123/cheatsheetPHP.pdf'),
(4, 3, 'La professionnalisation du monde PHP !', 'Ce Prezi presente Les acteurs, les outils de php<br />Il fait ensuite état de la collaboration entre Framework et CSS. Puis fait un comparatif avec d''autre monde de l''informatique (JS et Java.Enfin il fait une conclusion sur la maturité parfois décriée de ce language <br />\r\nCe document est aussi diponible dans sa version prezi <a href = "https://prezi.com/ks-ax2umtqpw/professionalisation-du-monde-php/">ICI</a>', 'Pdf', 'cours/20150220/PHPPRO.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `rendu`
--

CREATE TABLE IF NOT EXISTS `rendu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idDevoir` int(11) DEFAULT NULL,
  `idEleve` int(11) DEFAULT NULL,
  `lienDemo` varchar(255) DEFAULT NULL,
  `commentaire` text,
  `note` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idEleve` (`idEleve`),
  KEY `idDevoir` (`idDevoir`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `rendu`
--

INSERT INTO `rendu` (`id`, `idDevoir`, `idEleve`, `lienDemo`, `commentaire`, `note`) VALUES
(1, 1, 1, '', 'Quelques soucis de CSS, la mécanique des includes fonctionne !', 13);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `mediacours`
--
ALTER TABLE `mediacours`
  ADD CONSTRAINT `FKCoursMedia` FOREIGN KEY (`idCours`) REFERENCES `cours` (`id`);

--
-- Contraintes pour la table `rendu`
--
ALTER TABLE `rendu`
  ADD CONSTRAINT `rendu_ibfk_1` FOREIGN KEY (`idEleve`) REFERENCES `eleve` (`id`),
  ADD CONSTRAINT `rendu_ibfk_2` FOREIGN KEY (`idDevoir`) REFERENCES `devoir` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
