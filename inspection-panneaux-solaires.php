<?php
$title = 'Inspection panneaux solaires par drone à Lyon | Inspection Drone France';
$description = 'Inspection de panneaux solaires par drone thermique à Lyon et Bron : détection des points chauds et modules défectueux, rapport détaillé. Devis gratuit.';
$path = '/inspection-panneaux-solaires.php';
$image = '/assets/img/solar.svg';
include __DIR__ . '/includes/header.php';
$svc = [
  'crumb' => 'Panneaux solaires',
  'h1' => 'Inspection de panneaux solaires par drone',
  'tagline' => 'Contrôle thermique de toitures et centrales photovoltaïques à Lyon, Bron et dans la métropole.',
  'eyebrow' => 'Photovoltaïque',
  'intro_title' => 'Détecter les anomalies de vos modules sans monter sur le toit',
  'intro' => [
    'Un module ou une cellule défaillante peut s\'échauffer anormalement et faire perdre de la production. La caméra thermique du DJI Matrice 4T permet de repérer ces points chauds depuis les airs, rapidement et en sécurité.',
    'Nous inspectons les installations en toiture de particuliers, de copropriétés et d\'entreprises, ainsi que les centrales au sol, à Lyon, Bron et dans la métropole de Lyon.',
  ],
  'img' => 'solar.svg',
  'alt' => 'Panneaux solaires en imagerie thermique avec un point chaud détecté',
  'benefits' => [
    ['clock', 'Rapide', 'Une toiture est inspectée en quelques minutes, une centrale en une demi-journée selon sa taille.'],
    ['shield', 'Sans risque', 'Aucun accès en hauteur, aucune marche sur les modules, aucun arrêt de l\'installation.'],
    ['thermo', 'Précis', 'Les anomalies thermiques sont localisées module par module, avec image visible associée.'],
  ],
  'deliverables' => ['Images thermiques et visibles de l\'installation', 'Localisation des anomalies repérées (points chauds, modules suspects)', 'Rapport illustré et commenté', 'Pistes de vérification à confier à votre installateur ou mainteneur'],
  'usecases' => ['Contrôle après installation ou réception de travaux', 'Recherche de la cause d\'une baisse de production', 'Maintenance préventive d\'une centrale', 'Vérification avant garantie ou revente'],
  'process' => [
    ['Contact', 'Vous décrivez votre installation (toiture ou sol, nombre de modules). Nous vous envoyons un devis gratuit.'],
    ['Préparation', 'Choix d\'un créneau avec un bon ensoleillement et vérification de la zone de vol.'],
    ['Vol d\'inspection', 'Acquisition d\'images thermiques et visibles de l\'ensemble des modules.'],
    ['Rapport', 'Analyse des images et remise d\'un rapport avec les anomalies repérées.'],
  ],
  'faq' => [
    ['Quelles conditions faut-il pour une inspection thermique ?', 'Un bon ensoleillement et un ciel dégagé sont préférables, car les modules doivent être en production. Nous fixons la date en fonction de la météo.'],
    ['Peut-on inspecter une petite toiture de particulier ?', 'Oui. Nous intervenons aussi bien sur une installation résidentielle que sur une centrale. Le devis est adapté à la taille du site.'],
    ['Le drone détecte-t-il toutes les pannes ?', 'La thermographie révèle de nombreuses anomalies (points chauds, modules déconnectés), mais ne remplace pas des mesures électriques. Notre rapport oriente les vérifications complémentaires.'],
    ['Dois-je couper mon installation ?', 'Non. L\'inspection se fait installation en fonctionnement, sans intervention sur le matériel.'],
  ],
  'cta_title' => 'Faire inspecter vos panneaux solaires ?',
];
include __DIR__ . '/includes/service-page.php';
