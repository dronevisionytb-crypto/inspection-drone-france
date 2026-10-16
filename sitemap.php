<?php
require_once __DIR__ . '/includes/config.php';
header('Content-Type: application/xml; charset=utf-8');
$pages = [
    '/' => '1.0',
    '/inspection-panneaux-solaires.php' => '0.9',
    '/thermographie-batiment.php' => '0.9',
    '/photogrammetrie.php' => '0.9',
    '/services.php' => '0.8',
    '/contact.php' => '0.8',
    '/a-propos.php' => '0.6',
    '/mentions-legales.php' => '0.2',
    '/politique-confidentialite.php' => '0.2',
];
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $p => $prio):
    $file = __DIR__ . ($p === '/' ? '/index.php' : $p);
    $mtime = is_file($file) ? filemtime($file) : time();
?>
  <url><loc><?= e(abs_url($p)) ?></loc><lastmod><?= gmdate('Y-m-d', $mtime) ?></lastmod><priority><?= $prio ?></priority></url>
<?php endforeach; ?>
</urlset>
