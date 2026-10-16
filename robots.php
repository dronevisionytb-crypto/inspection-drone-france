<?php
require_once __DIR__ . '/includes/config.php';
header('Content-Type: text/plain; charset=utf-8');
echo "User-agent: *\nAllow: " . url('/') . "\nSitemap: " . abs_url('/sitemap.xml') . "\n";
