<?php
$title = 'À propos | Inspection Drone France, télépilote à Bron';
$description = 'Inspection Drone France, entreprise d\'inspection par drone basée à Bron, au service de Lyon et de la métropole lyonnaise. Matériel : DJI Matrice 4T.';
$path = '/a-propos.php';
include __DIR__ . '/includes/header.php';
?>
<div class="page-title">
  <div class="container">
    <h1>À propos d'Inspection Drone France</h1>
    <p>Une entreprise locale d'inspection par drone, basée à Bron.</p>
  </div>
</div>

<section class="section">
  <div class="container feature">
    <div class="feature-copy reveal">
      <p class="eyebrow">Présentation</p>
      <h2>Une entreprise d'inspection par drone à Bron</h2>
      <p>Inspection Drone France est une entreprise en cours de création, basée à Bron. Elle est spécialisée dans l'inspection par drone : panneaux solaires, thermographie de bâtiment et photogrammétrie 3D.</p>
      <p>Notre objectif : fournir à nos clients des données fiables et un rapport clair, pour décider sans prendre de risque ni monter sur un toit.</p>
      <div class="actions"><a class="btn btn-blue" href="<?= e(url('/contact.php')) ?>">Nous contacter</a></div>
    </div>
    <div class="feature-media reveal"><img src="<?= e(asset('img/hero.svg')) ?>" width="600" height="400" alt="Drone d'inspection survolant des bâtiments" loading="lazy"></div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal"><p class="eyebrow">Équipement</p><h2>Notre matériel : le DJI Matrice 4T</h2><p class="lead">Un drone professionnel d'inspection qui associe plusieurs capteurs sur une même plateforme.</p></div>
    <div class="usecase-grid">
      <div class="usecase reveal"><?= icon('thermo', 28) ?><h3>Caméra thermique</h3><p>Visualise les écarts de température : points chauds, fuites de chaleur, anomalies.</p></div>
      <div class="usecase reveal"><?= icon('camera', 28) ?><h3>Caméra grand-angle et zoom</h3><p>Images visibles détaillées pour localiser et documenter chaque anomalie à distance.</p></div>
      <div class="usecase reveal"><?= icon('drone', 28) ?><h3>Plateforme compacte</h3><p>Un appareil maniable, adapté aux inspections en milieu urbain et sur sites techniques.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal"><p class="eyebrow">Nos valeurs</p><h2>Ce qui guide notre travail</h2></div>
    <div class="usecase-grid">
      <div class="usecase reveal"><?= icon('shield', 28) ?><h3>Sécurité</h3><p>Chaque vol est préparé : analyse de la zone, météo et respect de la réglementation.</p></div>
      <div class="usecase reveal"><?= icon('check', 28) ?><h3>Rigueur</h3><p>Des relevés soignés et un rapport précis, sans promesse excessive sur ce que la thermographie peut démontrer.</p></div>
      <div class="usecase reveal"><?= icon('users', 28) ?><h3>Proximité</h3><p>Un interlocuteur unique, réactif, qui vous explique les résultats en langage clair.</p></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container zone-grid">
    <div class="reveal">
      <p class="eyebrow">Zone d'intervention</p>
      <h2>Bron, Lyon et toute la métropole</h2>
      <p class="lead">Nous intervenons à Bron, Lyon, Villeurbanne, Vénissieux, Saint-Priest, Décines, Caluire-et-Cuire et dans toute la métropole de Lyon. Contactez-nous pour tout autre secteur.</p>
      <div class="actions"><a class="btn btn-light" href="<?= e(url('/contact.php')) ?>">Demander un devis</a></div>
    </div>
    <ul class="tag-list reveal">
      <li class="tag tag-home"><?= icon('pin', 16) ?> Bron</li>
      <?php foreach (['Lyon', 'Villeurbanne', 'Vénissieux', 'Saint-Priest', 'Décines-Charpieu', 'Caluire-et-Cuire', 'Métropole de Lyon'] as $z): ?><li class="tag"><?= e($z) ?></li><?php endforeach; ?>
    </ul>
  </div>
</section>

<?php render_cta(); ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
