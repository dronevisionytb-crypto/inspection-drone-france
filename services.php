<?php
$title = 'Services d\'inspection par drone à Lyon | Inspection Drone France';
$description = 'Découvrez nos services d\'inspection par drone à Lyon et Bron : panneaux solaires, thermographie de bâtiment et photogrammétrie 3D.';
$path = '/services.php';
include __DIR__ . '/includes/header.php';
$list = [
  ['01', 'solar.svg', 'sun', 'Inspection panneaux solaires', '/inspection-panneaux-solaires.php', 'Contrôle thermique de toitures et de centrales photovoltaïques pour repérer points chauds et modules défaillants.', ['Imagerie thermique et visible', 'Localisation des anomalies', 'Rapport illustré'], 'Panneaux solaires en imagerie thermique'],
  ['02', 'thermo.svg', 'home', 'Thermographie de bâtiment', '/thermographie-batiment.php', 'Repérage des déperditions de chaleur, ponts thermiques et défauts d\'isolation en toiture et en façade.', ['Vue d\'ensemble toiture et façades', 'Sans échafaudage', 'Aide à la décision travaux'], 'Bâtiment en thermographie'],
  ['03', 'photo.svg', 'cube', 'Photogrammétrie / 3D', '/photogrammetrie.php', 'Modèles 3D, orthophotos et mesures de sites et de bâtiments à partir de photographies aériennes.', ['Modèle 3D texturé', 'Orthophoto', 'Mesures et volumes'], 'Modèle 3D par photogrammétrie'],
];
?>
<div class="page-title">
  <div class="container">
    <h1>Nos services d'inspection par drone</h1>
    <p>Trois missions réalisées avec le DJI Matrice 4T à Lyon, Bron et dans la métropole de Lyon.</p>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="service-grid">
      <?php foreach ($list as [$n, $img, $ic, $name, $href, $text, $points, $alt]): ?>
        <article class="svc-card reveal">
          <div class="svc-media"><img src="<?= e(asset('img/' . $img)) ?>" width="600" height="400" alt="<?= e($alt) ?>" loading="lazy"><span class="svc-num"><?= e($n) ?></span></div>
          <div class="svc-body">
            <div class="svc-icon"><?= icon($ic, 28) ?></div>
            <h2><?= e($name) ?></h2>
            <p><?= e($text) ?></p>
            <ul class="checks"><?php foreach ($points as $pt): ?><li><?= e($pt) ?></li><?php endforeach; ?></ul>
            <a class="svc-link" href="<?= e(url($href)) ?>">Découvrir <?= icon('arrow', 20) ?></a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal"><p class="eyebrow">Comparatif</p><h2>Quelle mission pour quel besoin ?</h2></div>
    <div class="table-wrap reveal">
      <table class="compare">
        <thead><tr><th scope="col">Critère</th><th scope="col">Panneaux solaires</th><th scope="col">Thermographie bâtiment</th><th scope="col">Photogrammétrie 3D</th></tr></thead>
        <tbody>
          <tr><th scope="row">Objectif</th><td>Repérer les modules défaillants</td><td>Localiser les pertes de chaleur</td><td>Mesurer et modéliser en 3D</td></tr>
          <tr><th scope="row">Capteur principal</th><td>Caméra thermique</td><td>Caméra thermique</td><td>Caméra visible haute résolution</td></tr>
          <tr><th scope="row">Conditions idéales</th><td>Ciel dégagé, installation en production</td><td>Saison de chauffe, matin ou soir</td><td>Lumière homogène, vent faible</td></tr>
          <tr><th scope="row">Livrable</th><td>Rapport d'anomalies illustré</td><td>Rapport thermique illustré</td><td>Modèle 3D, orthophoto, mesures</td></tr>
          <tr><th scope="row">Pour qui ?</th><td>Particuliers, installateurs, industriels</td><td>Copropriétés, collectivités, particuliers</td><td>Bureaux d'études, industriels, collectivités</td></tr>
        </tbody>
      </table>
    </div>
    <p class="note">Chaque devis est établi sur mesure selon le site, la surface et l'accès. Aucun tarif n'est affiché : contactez-nous pour une estimation gratuite.</p>
  </div>
</section>

<?php render_cta('Quel service vous convient ?', 'Décrivez-nous votre site : nous vous conseillons la mission la plus adaptée et vous envoyons un devis gratuit.'); ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
