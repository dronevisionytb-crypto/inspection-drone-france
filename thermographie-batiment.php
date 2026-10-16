<?php
$title = 'Thermographie bâtiment par drone à Lyon | Inspection Drone France';
$description = 'Thermographie de bâtiment par drone à Lyon et Bron : détection des déperditions de chaleur, ponts thermiques et défauts d\'isolation.';
$path = '/thermographie-batiment.php';
$image = '/assets/img/thermo.svg';
include __DIR__ . '/includes/header.php';
?>
<div class="page-title"><div class="container"><h1>Thermographie bâtiment et déperdition de chaleur</h1><p>Bron · Lyon · Métropole de Lyon</p></div></div>
<section>
  <div class="container split">
    <div class="prose">
      <h2>Thermographie bâtiment et déperdition de chaleur par drone Matrice 4T</h2>
      <p>La thermographie par drone révèle les fuites de chaleur d'un bâtiment : toiture, façades, ponts thermiques et défauts d'isolation. Idéal avant des travaux de rénovation énergétique à Lyon, Bron et alentours.</p>
      <h2>Ce que vous obtenez</h2>
      <ul class="checks"><li>Cartographie thermique des toitures et façades</li><li>Identification des ponts thermiques</li><li>Aide à la décision pour vos travaux d'isolation</li><li>Rapport illustré et exploitable</li></ul>
      <div class="actions"><a class="btn btn-red" href="tel:<?= SITE_PHONE_TEL ?>">Appeler</a><a class="btn btn-blue" href="/contact.php">Demander un devis</a></div>
    </div>
    <img src="/assets/img/thermo.svg" width="600" height="400" alt="Thermographie d'un bâtiment par drone montrant les déperditions de chaleur">
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
