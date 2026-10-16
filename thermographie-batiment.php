<?php
$title = 'Thermographie bâtiment par drone à Lyon | Inspection Drone France';
$description = 'Thermographie de bâtiment par drone à Lyon et Bron : détection des déperditions de chaleur, ponts thermiques et défauts d\'isolation. Devis gratuit.';
$path = '/thermographie-batiment.php';
include __DIR__ . '/includes/header.php';
$svc = [
  'crumb' => 'Thermographie bâtiment',
  'h1' => 'Thermographie de bâtiment et déperditions de chaleur',
  'tagline' => 'Repérez fuites de chaleur et défauts d\'isolation par drone à Lyon, Bron et dans la métropole.',
  'eyebrow' => 'Bâtiment',
  'intro_title' => 'Visualiser les pertes de chaleur de toitures et de façades',
  'intro' => [
    'La thermographie par drone révèle les écarts de température à la surface d\'un bâtiment : zones mal isolées, ponts thermiques, infiltrations suspectes. Elle donne une vue d\'ensemble difficile à obtenir depuis le sol.',
    'C\'est un appui utile avant des travaux de rénovation énergétique, pour cibler les zones prioritaires. Elle ne constitue pas un diagnostic de performance énergétique réglementaire.',
  ],
  'img' => 'thermo.svg',
  'alt' => 'Thermographie d\'un bâtiment par drone montrant les déperditions de chaleur',
  'benefits' => [
    ['home', 'Vue d\'ensemble', 'Toiture et façades inspectées en une seule mission, y compris les zones difficiles d\'accès.'],
    ['shield', 'Sans contact', 'Pas d\'échafaudage ni de nacelle, pas de gêne pour les occupants.'],
    ['doc', 'Aide à la décision', 'Des images claires pour prioriser et justifier vos travaux d\'isolation.'],
  ],
  'deliverables' => ['Images thermiques et visibles des toitures et façades', 'Repérage des ponts thermiques et zones de déperdition', 'Rapport illustré et commenté', 'Recommandations de points à investiguer'],
  'usecases' => ['Avant un projet de rénovation énergétique', 'Copropriété préparant un vote de travaux', 'Bâtiment industriel ou tertiaire à toiture étendue', 'Bâtiment public d\'une collectivité'],
  'process' => [
    ['Contact', 'Vous nous décrivez le bâtiment et votre objectif. Nous établissons un devis gratuit.'],
    ['Préparation', 'Choix d\'un créneau adapté (écart de température suffisant entre intérieur et extérieur).'],
    ['Vol d\'inspection', 'Acquisition d\'images thermiques et visibles de la toiture et des façades.'],
    ['Rapport', 'Analyse et remise d\'un rapport illustré, avec restitution commentée.'],
  ],
  'faq' => [
    ['Quelle est la meilleure période pour une thermographie ?', 'La saison de chauffe, tôt le matin ou en soirée, avec un écart marqué entre l\'intérieur et l\'extérieur, donne les meilleurs résultats. Nous vous conseillons le bon créneau.'],
    ['Est-ce un diagnostic de performance énergétique (DPE) ?', 'Non. La thermographie par drone est un outil d\'aide au repérage et ne remplace pas un DPE ou un audit réalisé par un professionnel habilité.'],
    ['Pouvez-vous inspecter l\'intérieur ?', 'Notre service porte sur l\'enveloppe extérieure du bâtiment : toitures et façades.'],
    ['Faut-il être présent pendant le vol ?', 'Idéalement oui, pour faciliter l\'accès et les échanges, mais ce n\'est pas toujours indispensable. Nous en convenons ensemble.'],
  ],
  'cta_title' => 'Un bâtiment à inspecter à Lyon ou Bron ?',
];
include __DIR__ . '/includes/service-page.php';
