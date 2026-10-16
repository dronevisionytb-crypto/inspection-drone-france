<?php
$title = 'Inspection drone Lyon et Bron | Inspection Drone France';
$description = 'Inspection par drone Matrice 4T à Bron et Lyon : panneaux solaires, thermographie de bâtiment, photogrammétrie 3D. Devis gratuit.';
$path = '/';
include __DIR__ . '/includes/header.php';
$faqs = [
  ['Quel drone utilisez-vous ?', 'Nous utilisons un DJI Matrice 4T, un drone professionnel équipé d\'une caméra thermique, d\'une caméra grand-angle et d\'un zoom, adapté aux missions d\'inspection.'],
  ['Où intervenez-vous ?', 'Nous sommes basés à Bron et intervenons à Lyon et dans toute la métropole de Lyon : Villeurbanne, Vénissieux, Saint-Priest, Décines, Caluire-et-Cuire et communes voisines. Contactez-nous pour un autre secteur.'],
  ['Combien de temps pour recevoir le rapport ?', 'Notre objectif est de livrer le rapport sous 48 h ouvrées après le vol pour une mission standard. Le délai exact dépend de la taille du site et est confirmé dans le devis.'],
  ['Comment obtenir un devis ?', 'Appelez-nous ou utilisez le formulaire de contact en décrivant votre site et votre besoin. Le devis est gratuit ; son montant dépend de la nature de la mission, de la surface et de l\'accès au site.'],
  ['Le vol est-il possible par tous les temps ?', 'Non : le vent fort, la pluie et certaines conditions de luminosité limitent le vol ou la qualité des mesures thermiques. Nous fixons la date en fonction de la météo et reprogrammons si nécessaire.'],
  ['Faut-il une autorisation pour survoler mon site ?', 'Les vols sont réalisés dans le respect de la réglementation applicable aux drones. Nous vérifions les contraintes de la zone avant chaque mission et vous indiquons les éventuelles démarches à prévoir.'],
];
?>
<section class="hero">
  <div class="container hero-grid">
    <div class="hero-copy">
      <p class="eyebrow">Bron · Lyon · Métropole de Lyon</p>
      <h1>Inspection par drone <em>thermique</em> à Lyon et Bron</h1>
      <p class="lead">Entreprise d'inspection par drone basée à Bron. Équipés du DJI Matrice 4T et de sa caméra thermique, nous inspectons panneaux solaires, toitures et façades, et réalisons vos modèles 3D, rapidement et sans échafaudage.</p>
      <div class="actions">
        <a class="btn btn-red btn-lg" href="tel:<?= SITE_PHONE_TEL ?>"><?= icon('phone', 20) ?> Appeler le <?= e(SITE_PHONE) ?></a>
        <a class="btn btn-ghost btn-lg" href="<?= e(url('/contact.php')) ?>">Demander un devis</a>
      </div>
    </div>
    <div class="hero-visual">
      <?php include __DIR__ . '/includes/hero-visual.php'; ?>
      <span class="chip chip-1"><?= icon('thermo', 18) ?> Caméra thermique</span>
      <span class="chip chip-2"><?= icon('doc', 18) ?> Rapport sous 48h</span>
      <span class="chip chip-3"><?= icon('pin', 18) ?> Bron · Lyon</span>
    </div>
  </div>
</section>

<section class="trust" aria-label="Nos atouts">
  <div class="container trust-grid">
    <div class="trust-item"><?= icon('drone', 28) ?><div><strong>DJI Matrice 4T</strong><span>Drone professionnel d'inspection</span></div></div>
    <div class="trust-item"><?= icon('thermo', 28) ?><div><strong>Thermique + zoom</strong><span>Images visibles et infrarouges</span></div></div>
    <div class="trust-item"><?= icon('clock', 28) ?><div><strong>Intervention rapide</strong><span>Planification sous quelques jours</span></div></div>
    <div class="trust-item"><?= icon('doc', 28) ?><div><strong>Rapport détaillé</strong><span>Clair, illustré et exploitable</span></div></div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Nos missions</p>
      <h2>Nos services d'inspection par drone</h2>
      <p class="lead">Trois missions principales, réalisées avec le même niveau d'exigence : repérer, mesurer et documenter sans intervention risquée.</p>
    </div>
    <div class="service-grid">
      <article class="svc-card reveal">
        <div class="svc-media"><img src="<?= e(asset('img/solar.svg')) ?>" width="600" height="400" alt="Panneaux solaires en imagerie thermique avec point chaud" loading="lazy"><span class="svc-num">01</span></div>
        <div class="svc-body"><div class="svc-icon"><?= icon('sun', 28) ?></div><h3>Inspection panneaux solaires</h3><p>Détection des points chauds, cellules et modules défectueux par thermographie, sur toitures comme sur centrales au sol.</p><a class="svc-link" href="<?= e(url('/inspection-panneaux-solaires.php')) ?>">Découvrir le service <?= icon('arrow', 20) ?></a></div>
      </article>
      <article class="svc-card reveal">
        <div class="svc-media"><img src="<?= e(asset('img/thermo.svg')) ?>" width="600" height="400" alt="Bâtiment en thermographie montrant les déperditions de chaleur" loading="lazy"><span class="svc-num">02</span></div>
        <div class="svc-body"><div class="svc-icon"><?= icon('home', 28) ?></div><h3>Thermographie de bâtiment</h3><p>Repérage des déperditions de chaleur, ponts thermiques et défauts d'isolation en toiture et en façade.</p><a class="svc-link" href="<?= e(url('/thermographie-batiment.php')) ?>">Découvrir le service <?= icon('arrow', 20) ?></a></div>
      </article>
      <article class="svc-card reveal">
        <div class="svc-media"><img src="<?= e(asset('img/photo.svg')) ?>" width="600" height="400" alt="Modèle 3D filaire d'un bâtiment par photogrammétrie" loading="lazy"><span class="svc-num">03</span></div>
        <div class="svc-body"><div class="svc-icon"><?= icon('cube', 28) ?></div><h3>Photogrammétrie et 3D</h3><p>Modèles 3D, orthophotos et mesures de sites et de bâtiments à partir de photographies aériennes.</p><a class="svc-link" href="<?= e(url('/photogrammetrie.php')) ?>">Découvrir le service <?= icon('arrow', 20) ?></a></div>
      </article>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Comment ça marche</p>
      <h2>Une mission claire, de la demande au rapport</h2>
    </div>
    <ol class="timeline">
      <li class="step reveal"><span class="step-num">1</span><h3>Contact</h3><p>Vous nous appelez ou nous écrivez. Nous cadrons ensemble votre besoin et vous envoyons un devis gratuit.</p></li>
      <li class="step reveal"><span class="step-num">2</span><h3>Repérage &amp; préparation</h3><p>Analyse du site, vérification de la zone de vol et choix du créneau météo le plus favorable.</p></li>
      <li class="step reveal"><span class="step-num">3</span><h3>Vol d'inspection</h3><p>Acquisition d'images visibles et thermiques avec le Matrice 4T, en toute sécurité et sans arrêt d'activité.</p></li>
      <li class="step reveal"><span class="step-num">4</span><h3>Rapport &amp; restitution</h3><p>Analyse des données, rapport illustré et échange pour vous expliquer les résultats.</p></li>
    </ol>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="feature">
      <div class="feature-media reveal"><img src="<?= e(asset('img/thermo.svg')) ?>" width="600" height="400" alt="Vue thermique d'un bâtiment" loading="lazy"></div>
      <div class="feature-copy reveal">
        <p class="eyebrow">Vision thermique</p>
        <h2>Voir ce que l'œil ne voit pas</h2>
        <p>La caméra thermique du Matrice 4T révèle les différences de température invisibles à l'œil nu : cellule solaire défaillante, fuite de chaleur en toiture, pont thermique en façade.</p>
        <ul class="checks"><li>Images thermiques et visibles associées pour localiser précisément chaque anomalie</li><li>Inspection sans échafaudage, nacelle ni accès en hauteur</li><li>Zoom pour documenter les détails à distance</li></ul>
        <a class="btn btn-blue" href="<?= e(url('/thermographie-batiment.php')) ?>">Thermographie de bâtiment</a>
      </div>
    </div>
    <div class="feature feature-rev">
      <div class="feature-media reveal"><img src="<?= e(asset('img/photo.svg')) ?>" width="600" height="400" alt="Modèle 3D d'un bâtiment" loading="lazy"></div>
      <div class="feature-copy reveal">
        <p class="eyebrow">Mesure &amp; 3D</p>
        <h2>Des données précises pour vos projets</h2>
        <p>À partir de photographies aériennes, nous produisons des modèles 3D, des orthophotos et des mesures exploitables pour vos études, suivis de chantier ou dossiers de rénovation.</p>
        <ul class="checks"><li>Modèle 3D et orthophoto d'un site ou d'un bâtiment</li><li>Mesures de surfaces, de distances et de volumes</li><li>Données exportables vers vos outils métier</li></ul>
        <a class="btn btn-blue" href="<?= e(url('/photogrammetrie.php')) ?>">Photogrammétrie 3D</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Pour qui ?</p>
      <h2>Ils ont besoin d'une inspection par drone</h2>
      <p class="lead">Chaque mission est adaptée à la taille du site et à votre objectif.</p>
    </div>
    <div class="usecase-grid">
      <div class="usecase reveal"><?= icon('home', 28) ?><h3>Particuliers</h3><p>Contrôle d'une toiture photovoltaïque ou repérage des fuites de chaleur avant travaux.</p></div>
      <div class="usecase reveal"><?= icon('building', 28) ?><h3>Copropriétés</h3><p>Diagnostic de toitures et façades pour préparer un vote de travaux sur des bases objectives.</p></div>
      <div class="usecase reveal"><?= icon('factory', 28) ?><h3>Industriels</h3><p>Inspection de toitures, de bardages et de centrales solaires sans interrompre l'activité.</p></div>
      <div class="usecase reveal"><?= icon('flag', 28) ?><h3>Collectivités</h3><p>État des lieux de bâtiments publics et appui aux plans de rénovation énergétique.</p></div>
      <div class="usecase reveal"><?= icon('sun', 28) ?><h3>Installateurs photovoltaïques</h3><p>Contrôle de qualité après installation et recherche de pannes pour vos clients.</p></div>
      <div class="usecase reveal"><?= icon('ruler', 28) ?><h3>Bureaux d'études</h3><p>Relevés 3D et orthophotos pour vos études, maquettes et suivis de chantier.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container faq-layout">
    <div class="reveal">
      <p class="eyebrow">FAQ</p>
      <h2>Vos questions fréquentes</h2>
      <p class="lead">Une autre question ? Appelez-nous au <a href="tel:<?= SITE_PHONE_TEL ?>"><?= e(SITE_PHONE) ?></a>.</p>
    </div>
    <?php render_faq($faqs); ?>
  </div>
</section>

<section class="section section-dark">
  <div class="container zone-grid">
    <div class="reveal">
      <p class="eyebrow">Zone d'intervention</p>
      <h2>Basés à Bron, au service de toute la métropole lyonnaise</h2>
      <p class="lead">Notre proximité nous permet d'intervenir rapidement et de limiter les frais de déplacement dans l'agglomération.</p>
      <ul class="tag-list">
        <li class="tag tag-home"><?= icon('pin', 16) ?> Bron</li>
        <?php foreach (['Lyon', 'Villeurbanne', 'Vénissieux', 'Saint-Priest', 'Décines-Charpieu', 'Caluire-et-Cuire', 'Métropole de Lyon'] as $z): ?>
          <li class="tag"><?= e($z) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <svg class="zone-map reveal" viewBox="0 0 400 300" role="img" aria-label="Schéma de la zone d'intervention autour de Bron">
      <circle cx="200" cy="150" r="130" fill="#fff" fill-opacity=".05" stroke="#fff" stroke-opacity=".25" stroke-dasharray="6 6"/>
      <circle cx="200" cy="150" r="80" fill="#fff" fill-opacity=".06" stroke="#fff" stroke-opacity=".3"/>
      <circle cx="200" cy="150" r="9" fill="#c81e1e"/><circle cx="200" cy="150" r="20" fill="none" stroke="#c81e1e" stroke-width="2"/>
      <g fill="#fff" font-family="Arial" font-size="13"><circle cx="150" cy="95" r="5"/><text x="95" y="85">Lyon</text><circle cx="210" cy="85" r="5"/><text x="220" y="80">Villeurbanne</text><circle cx="160" cy="215" r="5"/><text x="90" y="235">Vénissieux</text><circle cx="250" cy="185" r="5"/><text x="260" y="200">Saint-Priest</text><circle cx="260" cy="120" r="5"/><text x="272" y="125">Décines</text><circle cx="175" cy="50" r="5"/><text x="185" y="45">Caluire</text><text x="212" y="172" font-weight="700">Bron</text></g>
    </svg>
  </div>
</section>

<?php render_cta(); ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
