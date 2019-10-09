--
-- Contenu de la table `FraisForfait`
--

INSERT INTO `FraisForfait` (`id`, `libelle`, `montant`) VALUES
('ETP', 'Forfait Etape', 110.00),
('KM', 'Frais Kilométrique', 0.62),
('NUI', 'Nuitée Hôtel', 80.00),
('REP', 'Repas Restaurant', 25.00);
--
-- Contenu de la table `LigneFraisForfait`
--

--
-- Contenu de la table `Etat`
--

INSERT INTO `Etat` (`id`, `libelle`) VALUES
('RB', 'Remboursée'),
('CL', 'Saisie clôturée'),
('CR', 'Fiche créée, saisie en cours'),
('VA', 'Validée et mise en paiement');

-- --------------------------------------------------------

--
-- Contenu de la table `ModeDePaiement`
--

INSERT INTO `ModeDePaiement` (`id`, `modePaiement`) VALUES
('1', 'Chèque'),
('2', 'Espèces'),
('3', 'Carte Bancaire');

-- --------------------------------------------------------

--
-- Contenu de la table `Visiteur`
--

INSERT INTO `Visiteur` (`id`, `nom`, `prenom`, `login`, `mdp`,`poste`, `adresse`, `cp`, `ville`, `dateEmbauche`) VALUES
('a55', 'Bedos', 'Christian', 'cbedos', 'gmhxd', 'DAF', '1 rue Peranud', '46250', 'Montcuq', '1995-01-12'),
('a93', 'Andre', 'David', 'dandre', 'oppg5', 'Salarié', '22 rue des Ternes', '46123', 'Gramat', '2000-05-01'),
('e10', 'Denot', 'Emilien', 'emilien', 'emilien', 'Administrateur', '26 rue Charles de Gaulle', '42000', 'Saint-Étienne', '2019-04-09');
-- --------------------------------------------------------
