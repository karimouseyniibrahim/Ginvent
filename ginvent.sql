-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 09 août 2020 à 15:39
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ginvent`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `ID_Dirct` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Service` varchar(50) NOT NULL,
  `NivBat` int(2) NOT NULL,
  `Bureau` varchar(50) NOT NULL,
  `Tel` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administration`
--

INSERT INTO `administration` (`ID_Dirct`, `Nom`, `Service`, `NivBat`, `Bureau`, `Tel`) VALUES
('', '', '', 0, '', 0),
('45', 'jk', 'uj', 0, 'gg', 0),
('52', 'mpo', 'pojh', 0, 'qsa', 32565),
('DI', 'Division Informatique', 'imprimerie', 0, 'R018', 4455),
('DRH', 'Ressource humaine', 'logistique', 1, 'R022', 7458);

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
  `Matricule` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(55) NOT NULL,
  `E-mail` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`Matricule`, `Nom`, `Prenom`, `E-mail`) VALUES
(888, 'fadila', 'mamoudou', 'fadila@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `materiels`
--

CREATE TABLE `materiels` (
  `num` int(11) NOT NULL,
  `DesM` varchar(70) NOT NULL,
  `Imm` varchar(50) NOT NULL,
  `Marq` varchar(50) NOT NULL,
  `AnAcq` date NOT NULL,
  `Etat` varchar(50) NOT NULL,
  `SourFin` varchar(70) NOT NULL,
  `ProjAut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `materiels`
--

INSERT INTO `materiels` (`num`, `DesM`, `Imm`, `Marq`, `AnAcq`, `Etat`, `SourFin`, `ProjAut`) VALUES
(1, 'gghkjjkj', '2200mm', 'TOYOTA', '2020-07-07', 'BON', 'Etat', 'projet'),
(2, 'ghchnn', '1458kk', 'BENZ', '2020-07-14', 'BON', 'PROJET', 'AUTRE');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `LOGIN` varchar(15) NOT NULL,
  `PASSWORD` varchar(120) NOT NULL,
  `ROLE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`LOGIN`, `PASSWORD`, `ROLE`) VALUES
('Admin', 'e3afed0047b08059d0fada10f400c1e5', 'ADMINISTRATEUR'),
('Agt1', 'ea9740d4d9721bea0f779dcddde6d8e4', 'AGENT');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`ID_Dirct`);

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`Matricule`);

--
-- Index pour la table `materiels`
--
ALTER TABLE `materiels`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`LOGIN`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `materiels`
--
ALTER TABLE `materiels`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
