<?php
$title = 'Photogrammétrie par drone et modèle 3D à Lyon | Inspection Drone France';
$description = 'Photogrammétrie par drone à Lyon et Bron : modèles 3D, orthophotos et mesures de sites et de bâtiments. Devis gratuit.';
$path = '/photogrammetrie.php';
include __DIR__ . '/includes/header.php';
$svc = [
  'crumb' => 'Photogrammétrie 3D',
  'h1' => 'Photogrammétrie par drone et modèles 3D',
  'tagline' => 'Modèles 3D, orthophotos et mesures de précision à Lyon, Bron et dans la métropole.',
  'eyebrow' => 'Mesure & 3D',
  'intro_title' => 'Transformer des photos aériennes en données exploitables',
  'intro' => [
    'La photogrammétrie reconstitue un site ou un bâtiment en trois dimensions à partir de nombreuses photographies aériennes se recoupant. Le résultat permet de mesurer, d\'analyser et de documenter à distance.',
    'Nous proposons des modèles 3D, des orthophotos et des relevés pour vos études, suivis de chantier et dossiers de projet à Lyon et dans la métropole.',
  ],
  'img' => 'photo.svg',
  'alt' => 'Modèle 3D filaire d\'un bâtiment obtenu par photogrammétrie',
  'benefits' => [
    ['ruler', 'Mesurable', 'Surfaces, distances et volumes mesurés directement sur le modèle.'],
    ['camera', 'Documenté', 'Un état des lieux visuel complet et daté, utile pour archiver ou comparer.'],
    ['clock', 'Efficace', 'Acquisition rapide sur site, sans relevé topographique fastidieux.'],
  ],
  'deliverables' => ['Modèle 3D texturé du site ou du bâtiment', 'Orthophoto haute résolution', 'Mesures de surfaces, distances et volumes', 'Fichiers exportables vers vos outils (selon besoin et format convenu)'],
  'usecases' => ['Relevé d\'une toiture avant travaux', 'Suivi de l\'avancement d\'un chantier', 'État des lieux d\'un terrain ou d\'un site industriel', 'Support visuel pour un dossier ou une étude'],
  'process' => [
    ['Contact', 'Vous précisez l\'emprise à couvrir et le niveau de détail souhaité. Nous établissons un devis gratuit.'],
    ['Préparation', 'Plan de vol, vérification de la zone et choix d\'un créneau météo adapté.'],
    ['Vol d\'acquisition', 'Prise de vue systématique du site avec recouvrement des photographies.'],
    ['Traitement & livraison', 'Calcul du modèle 3D et de l\'orthophoto, puis livraison des données et d\'un compte rendu.'],
  ],
  'faq' => [
    ['Quelle précision peut-on attendre ?', 'La précision dépend de la hauteur de vol, de la météo et du site. Nous la précisons dans le devis selon l\'usage prévu ; il ne s\'agit pas d\'un relevé de géomètre-expert.'],
    ['Quelle surface peut-on couvrir ?', 'Du simple bâtiment au site de plusieurs hectares. Le devis dépend de la surface et du niveau de détail.'],
    ['Quels formats de fichiers fournissez-vous ?', 'Les formats courants d\'images, de nuages de points et de modèles 3D peuvent être fournis ; précisez vos besoins lors de la demande.'],
    ['Combien de temps pour obtenir les résultats ?', 'Le traitement demande généralement quelques jours selon la taille du site. Le délai est confirmé dans le devis.'],
  ],
  'cta_title' => 'Un relevé 3D à réaliser ?',
];
include __DIR__ . '/includes/service-page.php';
