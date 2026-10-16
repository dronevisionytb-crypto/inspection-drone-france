<?php
// Configuration centrale du site. Modifier ici le domaine et les coordonnées.
const SITE_NAME   = 'Inspection Drone France';
const SITE_URL    = 'https://www.inspection-drone-france.fr'; // À adapter au nom de domaine final
const SITE_PHONE  = '06 24 88 21 37';
const SITE_PHONE_TEL = '+33624882137';
const SITE_EMAIL  = 'johanroux@numericable.fr';
const SITE_CITY   = 'Bron';

// Chemin de base (sous-dossier). Surcharge possible via la variable d'environnement SITE_BASE_PATH
// (ex. '/inspection-drone-france', '' pour la racine) ; sinon détection automatique.
function site_base_path(): string {
    static $base = null;
    if ($base !== null) return $base;
    $env = getenv('SITE_BASE_PATH');
    if ($env !== false) {
        $base = trim($env, '/') === '' ? '' : '/' . trim($env, '/');
        return $base;
    }
    $base = '';
    $docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : false;
    $root = realpath(__DIR__ . '/..');
    if ($docRoot && $root && strpos($root, $docRoot) === 0) {
        $rel = str_replace('\\', '/', substr($root, strlen($docRoot)));
        $base = trim($rel, '/') === '' ? '' : '/' . trim($rel, '/');
    }
    return $base;
}

// URL relative au domaine (avec sous-dossier) : url('/contact.php') -> /sous-dossier/contact.php
function url(string $path = '/'): string {
    return site_base_path() . '/' . ltrim($path, '/');
}

function asset(string $path): string { return url('assets/' . ltrim($path, '/')); }

// URL absolue : domaine + sous-dossier + chemin
function abs_url(string $path = '/'): string { return rtrim(SITE_URL, '/') . url($path); }

function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
