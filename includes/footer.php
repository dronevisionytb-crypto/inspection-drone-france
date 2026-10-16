</main>
<section>
  <div class="container">
    <div class="cta-band">
    <h2>Un projet d'inspection à Lyon ou Bron ?</h2>
    <p>Devis gratuit et réponse rapide.</p>
    <p>
      <a class="btn btn-red" href="tel:<?= SITE_PHONE_TEL ?>">Appeler le <?= e(SITE_PHONE) ?></a>
      <a class="btn btn-light" href="<?= e(url('/contact.php')) ?>">Demander un devis</a>
    </p>
    </div>
  </div>
</section>
<footer class="site-footer">
  <div class="container grid">
    <div>
      <strong><?= e(SITE_NAME) ?></strong>
      <p>Inspection par drone à Bron, Lyon et dans la métropole de Lyon.</p>
    </div>
    <div>
      <strong>Services</strong>
      <ul>
        <li><a href="<?= e(url('/inspection-panneaux-solaires.php')) ?>">Inspection panneaux solaires</a></li>
        <li><a href="<?= e(url('/thermographie-batiment.php')) ?>">Thermographie bâtiment</a></li>
        <li><a href="<?= e(url('/photogrammetrie.php')) ?>">Photogrammétrie 3D</a></li>
      </ul>
    </div>
    <div>
      <strong>Contact</strong>
      <ul>
        <li><a href="tel:<?= SITE_PHONE_TEL ?>"><?= e(SITE_PHONE) ?></a></li>
        <li><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></li>
        <li><a href="<?= e(url('/mentions-legales.php')) ?>">Mentions légales</a></li>
        <li><a href="<?= e(url('/politique-confidentialite.php')) ?>">Confidentialité</a></li>
      </ul>
    </div>
  </div>
  <p class="copy">© <?= date('Y') ?> <?= e(SITE_NAME) ?> – Tous droits réservés</p>
</footer>
</body>
</html>
