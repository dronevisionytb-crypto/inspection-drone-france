<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
header('X-Robots-Tag: noindex');
$title = 'Page introuvable (404) | ' . SITE_NAME;
$description = 'Cette page n\'existe pas ou a été déplacée.';
$path = '/404.php';
include __DIR__ . '/includes/header.php';
?>
<div class="page-title"><div class="container"><h1>Erreur 404 – Page introuvable</h1><p>La page que vous cherchez n'existe pas ou a été déplacée.</p></div></div>
<section class="section">
  <div class="container">
    <div class="actions">
      <a class="btn btn-red btn-lg" href="<?= e(url('/')) ?>">Retour à l'accueil</a>
      <a class="btn btn-blue btn-lg" href="<?= e(url('/services.php')) ?>">Nos services</a>
      <a class="btn btn-blue btn-lg" href="<?= e(url('/contact.php')) ?>">Contact</a>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
