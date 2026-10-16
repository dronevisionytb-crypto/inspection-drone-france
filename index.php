<?php
$title = 'Inspection drone Lyon et Bron | Inspection Drone France';
$description = 'Inspection par drone Matrice 4T à Bron et Lyon : panneaux solaires, thermographie de bâtiment, photogrammétrie 3D. Devis gratuit.';
$path = '/';
include __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <div class="container">
    <div>
      <p class="eyebrow">Bron · Lyon · Métropole de Lyon</p>
      <h1>Inspection drone à Lyon et Bron</h1>
      <p class="lead">Entreprise d'inspection par drone basée à Bron, intervenant à Lyon et dans toute la métropole lyonnaise. Équipée du drone DJI Matrice 4T (caméra thermique), nous réalisons des inspections rapides, précises et sans risque.</p>
      <div class="actions">
        <a class="btn btn-red" href="tel:<?= SITE_PHONE_TEL ?>">Appeler le <?= e(SITE_PHONE) ?></a>
        <a class="btn btn-blue" href="/contact.php">Demander un devis</a>
      </div>
    </div>
    <img src="/assets/img/hero.svg" width="600" height="400" alt="Drone d'inspection survolant des bâtiments à Lyon">
  </div>
</section>
<section>
  <div class="container">
    <h2>Nos services d'inspection par drone</h2>
    <div class="cards">
      <article class="card"><img src="/assets/img/solar.svg" width="600" height="400" alt="Inspection de panneaux solaires par drone" loading="lazy"><div class="body"><h3>Inspection panneau solaire par drone</h3><p>Détection des points chauds et cellules défectueuses par thermographie.</p><a href="/inspection-panneaux-solaires.php">En savoir plus</a></div></article>
      <article class="card"><img src="/assets/img/thermo.svg" width="600" height="400" alt="Thermographie de bâtiment par drone" loading="lazy"><div class="body"><h3>Thermographie bâtiment drone</h3><p>Repérage des déperditions de chaleur et défauts d'isolation en toiture et façade.</p><a href="/thermographie-batiment.php">En savoir plus</a></div></article>
      <article class="card"><img src="/assets/img/photo.svg" width="600" height="400" alt="Modèle 3D par photogrammétrie par drone" loading="lazy"><div class="body"><h3>Photogrammétrie drone et 3D</h3><p>Modèles 3D, orthophotos et mesures précises de sites et bâtiments.</p><a href="/photogrammetrie.php">En savoir plus</a></div></article>
    </div>
  </div>
</section>
<section class="alt">
  <div class="container split">
    <div>
      <h2>Pourquoi choisir Inspection Drone France ?</h2>
      <ul class="checks">
        <li><strong>Matrice 4T</strong> : caméra thermique et zoom haute résolution.</li>
        <li>Inspection rapide, sans échafaudage ni nacelle.</li>
        <li>Rapport clair avec images visibles et thermiques.</li>
        <li>Intervention à Bron, Lyon et dans la métropole de Lyon.</li>
      </ul>
    </div>
    <p>Que vous soyez particulier, copropriété, entreprise ou collectivité, nous adaptons chaque mission à vos besoins. Contactez-nous pour un devis gratuit.</p>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
