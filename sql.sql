-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 24 mars 2020 à 16:47
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
-- Structure de la table `cloud`
--

CREATE TABLE `cloud` (
`id_cloud` int(11) NOT NULL,
`discipline` varchar(30) NOT NULL,
`name` varchar(50) NOT NULL,
`name_file` varchar(50) NOT NULL,
`id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cloud`
--

INSERT INTO `cloud` (`id_cloud`, `discipline`, `name`, `name_file`, `id_user`) VALUES
(1, 'PHP', 'Programmation Orienté Objet', 'attestation_de_deplacement_derogatoire.pdf', 6),
(2, 'Javascript', 'Les Fonctions Ajax', 'attestation_de_deplacement_derogatoire.pdf', 6);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
`id_event` int(11) NOT NULL,
`name` varchar(500) NOT NULL,
`date` date NOT NULL,
`location` varchar(500) NOT NULL,
`content` text NOT NULL,
`id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_event`, `name`, `date`, `location`, `content`, `id_user`) VALUES
(1, 'Evenement 1', '2020-05-04', 'Le Mans', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis lorem, convallis vitae consequat et, condimentum at eros. Nullam egestas, eros non dignissim tristique, ante magna auctor felis, ac aliquam diam turpis eu odio. Morbi aliquam est in nibh luctus, non porta erat ultricies. Mauris accumsan ligula at felis convallis hendrerit. Donec iaculis elit faucibus ligula lobortis, sed dapibus libero convallis. Nunc porta elit et sagittis facilisis. Pellentesque neque nisl, cursus non aliquam in, cursus vestibulum ipsum.', 1),
(2, 'Evenement 2', '2020-05-14', 'Dubaï', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis lorem, convallis vitae consequat et, condimentum at eros. Nullam egestas, eros non dignissim tristique, ante magna auctor felis, ac aliquam diam turpis eu odio. Morbi aliquam est in nibh luctus, non porta erat ultricies. Mauris accumsan ligula at felis convallis hendrerit. Donec iaculis elit faucibus ligula lobortis, sed dapibus libero convallis. Nunc porta elit et sagittis facilisis. Pellentesque neque nisl, cursus non aliquam in, cursus vestibulum ipsum.', 1),
(3, 'Evenement 3', '2020-06-18', 'New York', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis lorem, convallis vitae consequat et, condimentum at eros. Nullam egestas, eros non dignissim tristique, ante magna auctor felis, ac aliquam diam turpis eu odio. Morbi aliquam est in nibh luctus, non porta erat ultricies. Mauris accumsan ligula at felis convallis hendrerit. Donec iaculis elit faucibus ligula lobortis, sed dapibus libero convallis. Nunc porta elit et sagittis facilisis. Pellentesque neque nisl, cursus non aliquam in, cursus vestibulum ipsum.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
`id_faq` int(11) NOT NULL,
`question` text NOT NULL,
`response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id_faq`, `question`, `response`) VALUES
(2, 'Pourquoi choisir le CESI ?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis lorem, convallis vitae consequat et, condimentum at eros. Nullam egestas, eros non dignissim tristique, ante magna auctor felis, ac aliquam diam turpis eu odio. Morbi aliquam est in nibh luctus, non porta erat ultricies. Mauris accumsan ligula at felis convallis hendrerit. Donec iaculis elit faucibus ligula lobortis, sed dapibus libero convallis. Nunc porta elit et sagittis facilisis. Pellentesque neque nisl, cursus non aliquam in, cursus vestibulum ipsum.'),
(3, 'Quelles formations propose le CESI ?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur felis lorem, convallis vitae consequat et, condimentum at eros. Nullam egestas, eros non dignissim tristique, ante magna auctor felis, ac aliquam diam turpis eu odio. Morbi aliquam est in nibh luctus, non porta erat ultricies. Mauris accumsan ligula at felis convallis hendrerit. Donec iaculis elit faucibus ligula lobortis, sed dapibus libero convallis. Nunc porta elit et sagittis facilisis. Pellentesque neque nisl, cursus non aliquam in, cursus vestibulum ipsum.');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
`id_message` int(11) NOT NULL,
`id_user` int(11) NOT NULL,
`content` varchar(500) NOT NULL,
`date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `id_user`, `content`, `date`) VALUES
(22, 1, 'salut tous le monde', '2020-03-24 16:53:09');

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

CREATE TABLE `profile` (
`id_profile` int(11) NOT NULL,
`name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profile`
--

INSERT INTO `profile` (`id_profile`, `name`) VALUES
(1, 'administrateur'),
(2, 'admin_apprenant'),
(3, 'apprenant'),
(4, 'administrateur'),
(5, 'admin_apprenant'),
(6, 'apprenant');

-- --------------------------------------------------------

--
-- Structure de la table `profil_cafet`
--

CREATE TABLE `profil_cafet` (
`id_profile` int(11) NOT NULL,
`id_cafet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
`id_promotion` int(11) NOT NULL,
`name` varchar(100) NOT NULL,
`year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_promotion`, `name`, `year`) VALUES
(1, 'RIL', '2018'),
(2, 'RISR', '2018'),
(3, 'MSI', '2018');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
`id_user` int(11) NOT NULL,
`last_name` varchar(50) NOT NULL,
`first_name` varchar(50) NOT NULL,
`address` varchar(100) NOT NULL,
`picture` varchar(1000) NOT NULL,
`password` varchar(500) NOT NULL,
`token` varchar(500) NOT NULL,
`date_token` datetime NOT NULL,
`connected` tinyint(1) NOT NULL,
`id_promotion` int(11) NOT NULL,
`id_profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `last_name`, `first_name`, `address`, `picture`, `password`, `token`, `date_token`, `connected`, `id_promotion`, `id_profile`) VALUES
(1, 'agharbi', 'ayman', 'ayman.agharbi@viacesi.fr', 'oui', '$2y$10$1KB8I6Y5aLWCf2aHkj33BOPA29RE39gqjzuSZTlv4v5EjyqarM/DS', 'fe7a1e8c45', '2020-03-24 17:16:03', 1, 1, 1),
(2, 'lavarie', 'stephane', 'stephane.lavarie@viacesi.fr', 'oui', '$2y$10$s9r3YL2guuMvH5YT6uPdl.2qD/ctnMHWRS3TWWJSiFV.wGbDqIeye', '9fa7924a81', '2020-03-21 20:46:52', 0, 1, 2),
(3, 'meunier', 'marjorie', 'marjorie.meunier@viacesi.fr', 'oui', '$2y$10$7MiC6rrAN7FFmKN2RtYonOEr1iX8t9kp1EikJzHCTZr8iMwsDY6Ve', '1cbf510268', '2020-03-23 10:00:13', 0, 1, 2),
(4, 'cousin', 'marvin', 'marvin.cousin@viacesi.fr', 'oui', '$2y$10$cBzhDy3TehIhp5.stdtQBu8XiYQgvAHLASaT.sMhUt6O8sUw5sPbO', '9b4fdd3f7f', '2020-03-23 10:01:16', 0, 3, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cafet`
--
ALTER TABLE `cafet`
ADD PRIMARY KEY (`id_cafet`);

--
-- Index pour la table `cloud`
--
ALTER TABLE `cloud`
ADD PRIMARY KEY (`id_cloud`),
ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
ADD PRIMARY KEY (`id_event`),
ADD KEY `event_user_FK` (`id_user`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
ADD PRIMARY KEY (`id_faq`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
ADD UNIQUE KEY `id_message` (`id_message`);

--
-- Index pour la table `profile`
--
ALTER TABLE `profile`
ADD PRIMARY KEY (`id_profile`);

--
-- Index pour la table `profil_cafet`
--
ALTER TABLE `profil_cafet`
ADD PRIMARY KEY (`id_profile`,`id_cafet`),
ADD KEY `profil_cafet_cafet0_FK` (`id_cafet`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
ADD PRIMARY KEY (`id_promotion`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`id_user`),
ADD KEY `user_promotion_FK` (`id_promotion`),
ADD KEY `user_profile0_FK` (`id_profile`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cafet`
--
ALTER TABLE `cafet`
MODIFY `id_cafet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cloud`
--
ALTER TABLE `cloud`
MODIFY `id_cloud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `profile`
--
ALTER TABLE `profile`
MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
MODIFY `id_promotion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
ADD CONSTRAINT `event_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `profil_cafet`
--
ALTER TABLE `profil_cafet`
ADD CONSTRAINT `profil_cafet_cafet0_FK` FOREIGN KEY (`id_cafet`) REFERENCES `cafet` (`id_cafet`),
ADD CONSTRAINT `profil_cafet_profile_FK` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_profile0_FK` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`),
ADD CONSTRAINT `user_promotion_FK` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`id_promotion`);
