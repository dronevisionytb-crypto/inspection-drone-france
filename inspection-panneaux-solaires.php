<?php
$title = 'Inspection panneau solaire par drone à Lyon et Bron | Inspection Drone France';
$description = 'Inspection de panneaux solaires par drone thermique à Lyon et Bron : détection de points chauds et cellules défectueuses, rapport détaillé.';
$path = '/inspection-panneaux-solaires.php';
$image = '/assets/img/solar.svg';
include __DIR__ . '/includes/header.php';
?>
<div class="page-title"><div class="container"><h1>Inspection panneau solaire par drone</h1><p>Bron · Lyon · Métropole de Lyon</p></div></div>
<section>
  <div class="container split">
    <div class="prose">
      <h2>Inspection panneau solaire par drone par drone Matrice 4T</h2>
      <p>L'inspection de panneaux solaires par drone avec caméra thermique permet de contrôler une installation photovoltaïque en quelques minutes, sans accéder au toit. Nous intervenons à Lyon, Bron et dans la métropole lyonnaise.</p>
      <h2>Ce que vous obtenez</h2>
      <ul class="checks"><li>Détection des points chauds et cellules défectueuses</li><li>Repérage des strings ou modules en panne</li><li>Rapport avec images visibles et thermiques</li><li>Recommandations pour la maintenance</li></ul>
      <div class="actions"><a class="btn btn-red" href="tel:<?= SITE_PHONE_TEL ?>">Appeler</a><a class="btn btn-blue" href="<?= e(url('/contact.php')) ?>">Demander un devis</a></div>
    </div>
    <img src="<?= e(url('/assets/img/solar.svg')) ?>" width="600" height="400" alt="Inspection de panneaux solaires par drone avec détection de cellule défectueuse">
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
