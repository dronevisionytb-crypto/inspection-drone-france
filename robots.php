<?php
require_once __DIR__ . '/includes/config.php';
header('Content-Type: text/plain; charset=utf-8');
echo "User-agent: *\nDisallow: " . url('/includes/') . "\nAllow: " . url('/') . "\n\nSitemap: " . abs_url('/sitemap.xml') . "\n";
