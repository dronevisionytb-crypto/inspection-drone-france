<?php
$title = 'Photogrammétrie drone et mission 3D à Lyon | Inspection Drone France';
$description = 'Photogrammétrie par drone à Lyon et Bron : modèles 3D, orthophotos et relevés précis de bâtiments et de sites.';
$path = '/photogrammetrie.php';
$image = '/assets/img/photo.svg';
include __DIR__ . '/includes/header.php';
?>
<div class="page-title"><div class="container"><h1>Photogrammétrie et mission 3D</h1><p>Bron · Lyon · Métropole de Lyon</p></div></div>
<section>
  <div class="container split">
    <div class="prose">
      <h2>Photogrammétrie et mission 3D par drone Matrice 4T</h2>
      <p>La photogrammétrie par drone transforme des centaines de photographies en modèle 3D et orthophoto précis. Utile pour documenter un bâtiment, suivre un chantier ou mesurer une surface ou un volume à Lyon et Bron.</p>
      <h2>Ce que vous obtenez</h2>
      <ul class="checks"><li>Modèle 3D et nuage de points</li><li>Orthophoto haute résolution</li><li>Mesures de surfaces, distances et volumes</li><li>Livrables dans des formats standards</li></ul>
      <div class="actions"><a class="btn btn-red" href="tel:<?= SITE_PHONE_TEL ?>">Appeler</a><a class="btn btn-blue" href="<?= e(url('/contact.php')) ?>">Demander un devis</a></div>
    </div>
    <img src="<?= e(url('/assets/img/photo.svg')) ?>" width="600" height="400" alt="Modèle 3D d'un site réalisé par photogrammétrie par drone">
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
