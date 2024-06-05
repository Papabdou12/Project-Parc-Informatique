-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 13 Juillet 2018 à 18:09
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `parc_info`
--

-- --------------------------------------------------------

--
-- Structure de la table `serveur`
--

CREATE TABLE IF NOT EXISTS `serveur` (
`idServ` int(11) NOT NULL,
  `nomServ` varchar(50) NOT NULL,
  `adripServ` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `serveur`
--

INSERT INTO `serveur` (`idServ`, `nomServ`, `adripServ`) VALUES
(6, 'ISI FASS', '192.168.1.45'),
(7, 'ISI KM', '192.168.1.50');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`idS` int(11) NOT NULL,
  `nomS` varchar(50) NOT NULL,
  `portS` varchar(7) NOT NULL,
  `etatS` tinyint(1) NOT NULL,
  `idServ` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `services`
--

INSERT INTO `services` (`idS`, `nomS`, `portS`, `etatS`, `idServ`) VALUES
(1, 'SMTP', '25', 1, 6),
(2, 'DNS', '53', 0, 7),
(3, 'DHCP', '11', 1, 7),
(4, 'IIS', '456', 1, 6);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `serveur`
--
ALTER TABLE `serveur`
 ADD PRIMARY KEY (`idServ`), ADD UNIQUE KEY `nomServ` (`nomServ`,`adripServ`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`idS`), ADD UNIQUE KEY `nomS` (`nomS`,`portS`), ADD KEY `idServ` (`idServ`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `serveur`
--
ALTER TABLE `serveur`
MODIFY `idServ` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
MODIFY `idS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`idServ`) REFERENCES `serveur` (`idServ`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
