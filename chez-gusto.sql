-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 17 jan. 2022 à 20:36
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chez-gusto`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `idCart` int(11) NOT NULL,
  `idUser` varchar(64) NOT NULL,
  `dishName` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dish`
--

CREATE TABLE `dish` (
  `dishName` varchar(64) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `type` enum('starter','main','dessert','cheese','drink') NOT NULL,
  `photo` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dish`
--

INSERT INTO `dish` (`dishName`, `description`, `price`, `type`, `photo`) VALUES
('crème brûlée ', 'délicieuse crème brûlée, faite maison', '22.00', 'dessert', 'r'),
('salade', 'salade', '12.00', 'starter', 'non'),
('sandwich 4 fromages', 'emmental, bleu d\'Auvergne, brie, mozzarella ', '9.99', 'main', 'r');

-- --------------------------------------------------------

--
-- Structure de la table `favorite`
--

CREATE TABLE `favorite` (
  `dishName` varchar(64) NOT NULL,
  `idUser` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `idUser` varchar(32) NOT NULL,
  `message` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `idCart` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idUser` varchar(64) NOT NULL,
  `idTimeSlot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `timeSlot`
--

CREATE TABLE `timeSlot` (
  `idTimeSlot` int(11) NOT NULL,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `timeSlot`
--

INSERT INTO `timeSlot` (`idTimeSlot`, `date`, `hour`, `available`) VALUES
(1, '2022-01-22', '20:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` varchar(32) NOT NULL,
  `pwdUser` varchar(32) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `mail` varchar(256) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `adress` varchar(64) NOT NULL,
  `genrer` enum('female','male','other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `pwdUser`, `level`, `mail`, `firstName`, `lastName`, `adress`, `genrer`) VALUES
('admin1', 'admin1', 2, 'admin1@gmail.com', 'admin', 'un', '90 rue de Tolbiac', 'female'),
('user1', 'user1', 1, 'user1@gmail.com', 'user', 'un', '90 rue de Tolbiac', 'male');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idCart`),
  ADD KEY `dish_exists` (`dishName`),
  ADD KEY `user_existsCart` (`idUser`);

--
-- Index pour la table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dishName`);

--
-- Index pour la table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`dishName`,`idUser`),
  ADD KEY `user_existsFav` (`idUser`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `message` (`message`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idCart`,`date`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idTimeSlot`,`idUser`),
  ADD KEY `user_existsReservation` (`idUser`);

--
-- Index pour la table `timeSlot`
--
ALTER TABLE `timeSlot`
  ADD PRIMARY KEY (`idTimeSlot`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `idCart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `idCart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idTimeSlot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `timeSlot`
--
ALTER TABLE `timeSlot`
  MODIFY `idTimeSlot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `dish_exists` FOREIGN KEY (`dishName`) REFERENCES `dish` (`dishName`),
  ADD CONSTRAINT `user_existsCart` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `dish_existsFav` FOREIGN KEY (`dishName`) REFERENCES `dish` (`dishName`),
  ADD CONSTRAINT `user_existsFav` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `user_exists` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `cart_exists` FOREIGN KEY (`idCart`) REFERENCES `cart` (`idCart`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `timeSlot_exists` FOREIGN KEY (`idTimeSlot`) REFERENCES `timeSlot` (`idTimeSlot`),
  ADD CONSTRAINT `user_existsReservation` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
