-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 23 mars 2020 à 08:25
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `intranet_cesi`
--

-- --------------------------------------------------------

--
-- Structure de la table `cafet`
--

CREATE TABLE `cafet` (
  `id_cafet` int(11) NOT NULL,
  `menu` blob NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id_evenement` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(500) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `reponse` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id_messagerie` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_utilisateur_prive` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `administrateur` int(11) NOT NULL,
  `defaultt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `annee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `question_faq`
--

CREATE TABLE `question_faq` (
  `id_question` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `question` varchar(50) NOT NULL,
  `contenu` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reponse_faq`
--

CREATE TABLE `reponse_faq` (
  `id_reponse` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `contenu` varchar(1000) NOT NULL,
  `id_question_question_faq` int(11) NOT NULL,
  `id_utilisateur_question_faq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse_email` varchar(100) NOT NULL,
  `photo_url` varchar(1000) DEFAULT NULL,
  `mdp` varchar(500) NOT NULL,
  `token` varchar(500) DEFAULT NULL,
  `date_token` datetime DEFAULT NULL,
  `id_promo` int(11) DEFAULT NULL,
  `id_profil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `adresse_email`, `photo_url`, `mdp`, `token`, `date_token`, `id_promo`, `id_profil`) VALUES
(1, 'agharbi', 'ayman', 'ayman.agharbi@viacesi.fr', NULL, '$2y$10$1KB8I6Y5aLWCf2aHkj33BOPA29RE39gqjzuSZTlv4v5EjyqarM/DS', 'c0394a37a7', '2020-03-22 18:03:32', NULL, NULL),
(2, 'lavarie', 'stephane', 'stephane.lavarie@viacesi.fr', NULL, '$2y$10$s9r3YL2guuMvH5YT6uPdl.2qD/ctnMHWRS3TWWJSiFV.wGbDqIeye', '9fa7924a81', '2020-03-21 20:46:52', NULL, NULL),
(3, 'meunier', 'marjorie', 'marjorie.meunier@viacesi.fr', NULL, 'a', NULL, NULL, NULL, NULL),
(4, 'cousin', 'marvin', 'marvin.cousin@viacesi.fr', NULL, 'a', NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cafet`
--
ALTER TABLE `cafet`
  ADD PRIMARY KEY (`id_cafet`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_evenement`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id_messagerie`,`id_utilisateur`,`id_utilisateur_prive`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Index pour la table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Index pour la table `question_faq`
--
ALTER TABLE `question_faq`
  ADD PRIMARY KEY (`id_question`,`id_utilisateur`);

--
-- Index pour la table `reponse_faq`
--
ALTER TABLE `reponse_faq`
  ADD PRIMARY KEY (`id_reponse`,`id_question`,`id_utilisateur`),
  ADD KEY `reponse_faq_question_faq_FK` (`id_question_question_faq`,`id_utilisateur_question_faq`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `utilisateur_promo_FK` (`id_promo`),
  ADD KEY `utilisateur_profil0_FK` (`id_profil`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cafet`
--
ALTER TABLE `cafet`
  MODIFY `id_cafet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_evenement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reponse_faq`
--
ALTER TABLE `reponse_faq`
  ADD CONSTRAINT `reponse_faq_question_faq_FK` FOREIGN KEY (`id_question_question_faq`,`id_utilisateur_question_faq`) REFERENCES `question_faq` (`id_question`, `id_utilisateur`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_profil0_FK` FOREIGN KEY (`id_profil`) REFERENCES `profil` (`id_profil`),
  ADD CONSTRAINT `utilisateur_promo_FK` FOREIGN KEY (`id_promo`) REFERENCES `promo` (`id_promo`);
