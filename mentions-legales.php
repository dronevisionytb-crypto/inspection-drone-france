<?php
$title = 'Mentions légales | Inspection Drone France';
$description = 'Mentions légales du site Inspection Drone France, entreprise d\'inspection par drone à Bron.';
$path = '/mentions-legales.php';
include __DIR__ . '/includes/header.php';
?>
<div class="page-title"><div class="container"><h1>Mentions légales</h1></div></div>
<section>
  <div class="container prose">
    <h2>Éditeur du site</h2>
    <p>Inspection Drone France – entreprise en cours de création.<br>
    Localisation : Bron (France)<br>
    SIRET : en cours d'attribution (sera communiqué dès son obtention)<br>
    Téléphone : <?= e(SITE_PHONE) ?><br>
    Email : <a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></p>
    <h2>Directeur de la publication</h2>
    <p>Le dirigeant d'Inspection Drone France.</p>
    <h2>Hébergement</h2>
    <p>[À compléter : nom et coordonnées de l'hébergeur]</p>
    <h2>Propriété intellectuelle</h2>
    <p>Les contenus de ce site (textes, images, logo) sont protégés. Toute reproduction sans autorisation est interdite. Les illustrations du site sont des visuels génériques à remplacer par des photographies de missions réelles.</p>
    <h2>Responsabilité</h2>
    <p>Les informations du site sont données à titre indicatif et peuvent évoluer, notamment pendant la création de l'entreprise.</p>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
