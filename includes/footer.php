</main>
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-about">
      <a class="brand brand-light" href="<?= e(url('/')) ?>">
        <img src="<?= e(asset('img/logo.svg')) ?>" width="44" height="44" alt="">
        <span>Inspection Drone <b>France</b></span>
      </a>
      <p>Inspection par drone équipé d'une caméra thermique, à Bron, Lyon et dans la métropole de Lyon.</p>
    </div>
    <div>
      <h3>Services</h3>
      <ul>
        <li><a href="<?= e(url('/inspection-panneaux-solaires.php')) ?>">Inspection panneaux solaires</a></li>
        <li><a href="<?= e(url('/thermographie-batiment.php')) ?>">Thermographie bâtiment</a></li>
        <li><a href="<?= e(url('/photogrammetrie.php')) ?>">Photogrammétrie 3D</a></li>
      </ul>
    </div>
    <div>
      <h3>Entreprise</h3>
      <ul>
        <li><a href="<?= e(url('/a-propos.php')) ?>">À propos</a></li>
        <li><a href="<?= e(url('/contact.php')) ?>">Contact &amp; devis</a></li>
        <li><a href="<?= e(url('/mentions-legales.php')) ?>">Mentions légales</a></li>
        <li><a href="<?= e(url('/politique-confidentialite.php')) ?>">Confidentialité</a></li>
      </ul>
    </div>
    <div>
      <h3>Contact</h3>
      <ul>
        <li><a href="tel:<?= SITE_PHONE_TEL ?>"><?= e(SITE_PHONE) ?></a></li>
        <li><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></li>
        <li>Bron · Lyon · Métropole de Lyon</li>
      </ul>
    </div>
  </div>
  <p class="copy container">© <?= date('Y') ?> <?= e(SITE_NAME) ?> – Entreprise en cours de création – Tous droits réservés</p>
</footer>
<a class="call-fab" href="tel:<?= SITE_PHONE_TEL ?>"><?= icon('phone', 20) ?> Appeler</a>
</body>
</html>
