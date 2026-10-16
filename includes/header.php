<?php
require_once __DIR__ . '/config.php';
$title = $title ?? SITE_NAME;
$description = $description ?? '';
$path = $path ?? '/';
$image = $image ?? '/assets/img/og-image.jpg';
$nav = [
  '/' => 'Accueil',
  '/services.php' => 'Services',
  '/a-propos.php' => 'À propos',
  '/contact.php' => 'Contact',
];
$service_paths = ['/inspection-panneaux-solaires.php', '/thermographie-batiment.php', '/photogrammetrie.php'];
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'ProfessionalService',
  'name' => SITE_NAME,
  '@id' => abs_url('/') . '#organization',
  'url' => abs_url('/'),
  'telephone' => '+33 6 24 88 21 37',
  'email' => SITE_EMAIL,
  'image' => abs_url('/assets/img/logo.svg'),
  'description' => 'Inspection par drone à Bron et Lyon : panneaux solaires, thermographie de bâtiment, photogrammétrie 3D.',
  'logo' => abs_url('/assets/img/logo.svg'),
  'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Bron', 'postalCode' => '69500', 'addressRegion' => 'Auvergne-Rhône-Alpes', 'addressCountry' => 'FR'],
  'contactPoint' => ['@type' => 'ContactPoint', 'contactType' => 'customer service', 'telephone' => '+33 6 24 88 21 37', 'email' => SITE_EMAIL, 'areaServed' => 'FR', 'availableLanguage' => 'fr'],
  'areaServed' => ['Bron', 'Lyon', 'Villeurbanne', 'Vénissieux', 'Saint-Priest', 'Décines-Charpieu', 'Caluire-et-Cuire', 'Métropole de Lyon'],
  'knowsAbout' => ['Inspection panneau solaire par drone', 'Thermographie bâtiment drone', 'Photogrammétrie drone'],
];
?><!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($description) ?>">
<link rel="canonical" href="<?= e(abs_url($path)) ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="fr_FR">
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($description) ?>">
<meta property="og:url" content="<?= e(abs_url($path)) ?>">
<meta property="og:image" content="<?= e(abs_url($image)) ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= e(SITE_NAME) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($title) ?>">
<meta name="twitter:description" content="<?= e($description) ?>">
<meta name="twitter:image" content="<?= e(abs_url($image)) ?>">
<meta name="theme-color" content="#1b3a6b">
<link rel="icon" href="<?= e(asset('img/logo.svg')) ?>" type="image/svg+xml">
<link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
<script src="<?= e(asset('js/main.js')) ?>" defer></script>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
</head>
<body>
<a class="skip" href="#contenu">Aller au contenu</a>
<header class="site-header">
  <div class="container bar">
    <a class="brand" href="<?= e(url('/')) ?>" aria-label="<?= e(SITE_NAME) ?> – accueil">
      <img src="<?= e(asset('img/logo.svg')) ?>" width="44" height="44" alt="">
      <span class="brand-text"><span class="brand-inspection">Inspection</span> <span class="brand-drone">Drone</span> <b class="brand-country">France</b></span>
    </a>
    <input type="checkbox" id="menu-toggle" class="menu-toggle" aria-label="Ouvrir le menu">
    <label for="menu-toggle" class="burger" aria-hidden="true"><span></span></label>
    <nav class="nav" aria-label="Navigation principale">
      <?php foreach ($nav as $href => $label): ?>
        <a href="<?= e(url($href)) ?>"<?= ($href === $path || ($href === '/services.php' && in_array($path, $service_paths, true))) ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
      <?php endforeach; ?>
      <a class="btn btn-red nav-cta" href="tel:<?= SITE_PHONE_TEL ?>"><?= icon('phone', 18) ?> <?= e(SITE_PHONE) ?></a>
    </nav>
  </div>
</header>
<main id="contenu">
