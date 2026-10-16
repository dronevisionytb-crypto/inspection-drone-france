<?php
// Configuration centrale du site. Modifier ici le domaine et les coordonnées.
const SITE_NAME   = 'Inspection Drone France';
const SITE_URL    = 'https://www.inspection-drone-france.fr'; // À adapter au nom de domaine final
const SITE_PHONE  = '06 24 88 21 37';
const SITE_PHONE_TEL = '+33624882137';
const SITE_EMAIL  = 'johanroux@numericable.fr';
const SITE_CITY   = 'Bron';

function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
