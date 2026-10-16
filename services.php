<?php
$title = 'Services d\'inspection par drone à Lyon | Inspection Drone France';
$description = 'Découvrez nos services d\'inspection par drone à Lyon et Bron : panneaux solaires, thermographie de bâtiment et photogrammétrie 3D.';
$path = '/services.php';
include __DIR__ . '/includes/header.php';
?>
<div class="page-title"><div class="container"><h1>Nos services d'inspection par drone</h1><p>Lyon, Bron et métropole de Lyon</p></div></div>
<section>
  <div class="container cards">
    <article class="card"><img src="<?= e(url('/assets/img/solar.svg')) ?>" width="600" height="400" alt="Panneaux solaires inspectés par drone"><div class="body"><h2>Inspection panneaux solaires</h2><p>Contrôle thermique de centrales et toitures photovoltaïques.</p><a class="btn btn-outline" href="<?= e(url('/inspection-panneaux-solaires.php')) ?>">Découvrir</a></div></article>
    <article class="card"><img src="<?= e(url('/assets/img/thermo.svg')) ?>" width="600" height="400" alt="Bâtiment inspecté en thermographie par drone"><div class="body"><h2>Thermographie bâtiment</h2><p>Détection des déperditions de chaleur et ponts thermiques.</p><a class="btn btn-outline" href="<?= e(url('/thermographie-batiment.php')) ?>">Découvrir</a></div></article>
    <article class="card"><img src="<?= e(url('/assets/img/photo.svg')) ?>" width="600" height="400" alt="Modèle 3D réalisé par photogrammétrie"><div class="body"><h2>Photogrammétrie / 3D</h2><p>Modèles 3D, orthophotos et mesures de précision.</p><a class="btn btn-outline" href="<?= e(url('/photogrammetrie.php')) ?>">Découvrir</a></div></article>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
