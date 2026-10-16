<?php
require_once __DIR__ . '/includes/config.php';
header('Content-Type: application/xml; charset=utf-8');
$pages = ['/', '/services.php', '/inspection-panneaux-solaires.php', '/thermographie-batiment.php', '/photogrammetrie.php', '/a-propos.php', '/contact.php', '/mentions-legales.php', '/politique-confidentialite.php'];
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $p): ?>
  <url><loc><?= e(abs_url($p)) ?></loc></url>
<?php endforeach; ?>
</urlset>
