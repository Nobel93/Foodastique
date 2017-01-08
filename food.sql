-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 08 Janvier 2017 à 13:26
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `food`
--

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE `contenir` (
  `ID_Recette` int(11) NOT NULL,
  `ID_Ingredient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `identifier`
--

CREATE TABLE `identifier` (
  `ID_Recette` int(11) NOT NULL,
  `ID_Tags` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

CREATE TABLE `ingredients` (
  `ID_Ingredient` int(11) NOT NULL,
  `Nom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

CREATE TABLE `recettes` (
  `ID_Recette` int(11) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Auteur` varchar(25) NOT NULL,
  `Note` int(11) DEFAULT NULL,
  `Description` varchar(25) DEFAULT NULL,
  `Date_Crea` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `ID_Tags` int(11) NOT NULL,
  `Categorie` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(1, '', 'edwindz@free.fr', 'dcdc11');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`ID_Recette`,`ID_Ingredient`),
  ADD KEY `FK_contenir_ID_Ingredient` (`ID_Ingredient`);

--
-- Index pour la table `identifier`
--
ALTER TABLE `identifier`
  ADD PRIMARY KEY (`ID_Recette`,`ID_Tags`),
  ADD KEY `FK_Identifier_ID_Tags` (`ID_Tags`);

--
-- Index pour la table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ID_Ingredient`);

--
-- Index pour la table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`ID_Recette`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`ID_Tags`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `FK_contenir_ID_Ingredient` FOREIGN KEY (`ID_Ingredient`) REFERENCES `ingredients` (`ID_Ingredient`),
  ADD CONSTRAINT `FK_contenir_ID_Recette` FOREIGN KEY (`ID_Recette`) REFERENCES `recettes` (`ID_Recette`);

--
-- Contraintes pour la table `identifier`
--
ALTER TABLE `identifier`
  ADD CONSTRAINT `FK_Identifier_ID_Recette` FOREIGN KEY (`ID_Recette`) REFERENCES `recettes` (`ID_Recette`),
  ADD CONSTRAINT `FK_Identifier_ID_Tags` FOREIGN KEY (`ID_Tags`) REFERENCES `tags` (`ID_Tags`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
