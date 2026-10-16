<?php
$title = 'Politique de confidentialité | Inspection Drone France';
$description = 'Politique de confidentialité d\'Inspection Drone France : données collectées via le formulaire de contact et vos droits.';
$path = '/politique-confidentialite.php';
include __DIR__ . '/includes/header.php';
?>
<div class="page-title"><div class="container"><h1>Politique de confidentialité</h1></div></div>
<section class="section">
  <div class="container prose">
    <h2>Responsable du traitement</h2>
    <p>Inspection Drone France, Bron – <a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a>.</p>
    <h2>Données collectées</h2>
    <p>Via le formulaire de contact : nom, email, téléphone (facultatif) et contenu de votre message.</p>
    <h2>Finalité</h2>
    <p>Répondre à vos demandes de renseignements et de devis. Ces données ne sont ni vendues ni cédées.</p>
    <h2>Conservation</h2>
    <p>Vos données sont conservées le temps nécessaire au traitement de votre demande, puis pour une durée raisonnable de suivi commercial.</p>
    <h2>Vos droits</h2>
    <p>Conformément au RGPD, vous pouvez accéder à vos données, les rectifier, les effacer ou vous opposer à leur traitement en écrivant à l'adresse ci-dessus. Vous pouvez aussi saisir la CNIL (cnil.fr).</p>
    <h2>Cookies</h2>
    <p>Ce site n'utilise aucun cookie de suivi ou publicitaire.</p>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
