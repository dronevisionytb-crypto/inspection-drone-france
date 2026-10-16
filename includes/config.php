<?php
// Configuration centrale du site. Modifier ici le domaine et les coordonnées.
const SITE_NAME   = 'Inspection Drone France';
const SITE_URL    = 'https://inspectiondronefrance.fr';
const SITE_PHONE  = '06 24 88 21 37';
const SITE_PHONE_TEL = '+33624882137';
const SITE_EMAIL  = 'contact@inspectiondronefrance.fr';
const CONTACT_RECIPIENT = 'johanroux@numericable.fr'; // reçoit les demandes du formulaire
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

// Icônes SVG en ligne (style trait) : icon('sun') -> <svg>…</svg>
function icon(string $name, int $size = 24): string {
    static $p = [
        'sun'    => '<circle cx="12" cy="12" r="4"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M4.9 4.9l2.1 2.1M17 17l2.1 2.1M4.9 19.1L7 17M17 7l2.1-2.1"/>',
        'home'   => '<path d="M3 11l9-8 9 8"/><path d="M5 10v10h14V10"/><path d="M10 20v-6h4v6"/>',
        'cube'   => '<path d="M12 2l9 5v10l-9 5-9-5V7z"/><path d="M12 12l9-5M12 12L3 7M12 12v10"/>',
        'phone'  => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 012-2z"/>',
        'mail'   => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
        'pin'    => '<path d="M12 21s7-6.2 7-11a7 7 0 10-14 0c0 4.8 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/>',
        'clock'  => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'doc'    => '<path d="M6 2h9l4 4v16H6z"/><path d="M14 2v5h5M9 13h6M9 17h6"/>',
        'thermo' => '<path d="M14 14.8V5a2 2 0 10-4 0v9.8a4 4 0 104 0z"/><path d="M12 9v7"/>',
        'camera' => '<path d="M4 7h3l2-3h6l2 3h3v13H4z"/><circle cx="12" cy="13" r="4"/>',
        'check'  => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
        'shield' => '<path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M9 12l2 2 4-4"/>',
        'users'  => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0113 0"/><path d="M16 4.7a3.5 3.5 0 010 6.6M18 14a6.5 6.5 0 013.5 6"/>',
        'building' => '<rect x="5" y="3" width="14" height="18" rx="1"/><path d="M9 7h2M13 7h2M9 11h2M13 11h2M9 15h2M13 15h2"/>',
        'factory' => '<path d="M3 21V10l6 4V10l6 4V6h6v15z"/><path d="M7 21v-3M12 21v-3M17 21v-3"/>',
        'flag'   => '<path d="M5 21V4M5 4h12l-2 4 2 4H5"/>',
        'wrench' => '<path d="M14.5 6.5a4 4 0 005 5L21 13l-8 8-3-3 8-8z"/><path d="M3 3l6 6"/>',
        'ruler'  => '<path d="M3 17L17 3l4 4L7 21z"/><path d="M7 13l2 2M10 10l2 2M13 7l2 2"/>',
        'arrow'  => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'drone'  => '<rect x="9" y="9" width="6" height="6" rx="2"/><path d="M9 9L5 5M15 9l4-4M9 15l-4 4M15 15l4 4"/><circle cx="4" cy="4" r="2"/><circle cx="20" cy="4" r="2"/><circle cx="4" cy="20" r="2"/><circle cx="20" cy="20" r="2"/>',
    ];
    $s = (int)$size;
    return '<svg class="icon" width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . ($p[$name] ?? '') . '</svg>';
}

// FAQ : balisage <details>/<summary> + JSON-LD FAQPage. $faqs = [[question, réponse], …]
function render_faq(array $faqs): void {
    echo '<div class="faq">';
    foreach ($faqs as $i => [$q, $a]) {
        echo '<details class="reveal"' . ($i === 0 ? ' open' : '') . '><summary>' . e($q) . '</summary><p>' . e($a) . '</p></details>';
    }
    echo '</div>';
    $ld = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => array_map(
        fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)];
    echo '<script type="application/ld+json">' . json_encode($ld, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) . '</script>';
}

// Bandeau d'appel à l'action final
function render_cta(string $title = 'Un projet d\'inspection à Lyon ou Bron ?', string $text = 'Devis gratuit et réponse rapide. Décrivez-nous votre besoin, nous revenons vers vous sous 24 h ouvrées.'): void { ?>
<section class="section-tight">
  <div class="container">
    <div class="cta-band reveal">
      <div>
        <h2><?= e($title) ?></h2>
        <p><?= e($text) ?></p>
      </div>
      <div class="actions">
        <a class="btn btn-red btn-lg" href="tel:<?= SITE_PHONE_TEL ?>"><?= icon('phone', 20) ?> Appeler le <?= e(SITE_PHONE) ?></a>
        <a class="btn btn-light btn-lg" href="<?= e(url('/contact.php')) ?>">Demander un devis</a>
      </div>
    </div>
  </div>
</section>
<?php }
