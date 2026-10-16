<?php
// Gabarit commun des pages de service. Attend un tableau $svc (voir les pages de service).
?>
<div class="page-title">
  <div class="container">
    <p class="crumbs"><a href="<?= e(url('/')) ?>">Accueil</a> › <a href="<?= e(url('/services.php')) ?>">Services</a> › <?= e($svc['crumb']) ?></p>
    <h1><?= e($svc['h1']) ?></h1>
    <p><?= e($svc['tagline']) ?></p>
  </div>
</div>

<section class="section">
  <div class="container feature">
    <div class="feature-copy reveal">
      <p class="eyebrow"><?= e($svc['eyebrow']) ?></p>
      <h2><?= e($svc['intro_title']) ?></h2>
      <?php foreach ($svc['intro'] as $para): ?><p><?= e($para) ?></p><?php endforeach; ?>
      <div class="actions">
        <a class="btn btn-red" href="tel:<?= SITE_PHONE_TEL ?>"><?= icon('phone', 18) ?> Appeler</a>
        <a class="btn btn-blue" href="<?= e(url('/contact.php')) ?>">Demander un devis</a>
      </div>
    </div>
    <div class="feature-media reveal"><img src="<?= e(asset('img/' . $svc['img'])) ?>" width="600" height="400" alt="<?= e($svc['alt']) ?>"></div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal"><p class="eyebrow">Avantages</p><h2>Pourquoi passer par un drone ?</h2></div>
    <div class="usecase-grid">
      <?php foreach ($svc['benefits'] as [$ic, $t, $d]): ?>
        <div class="usecase reveal"><?= icon($ic, 28) ?><h3><?= e($t) ?></h3><p><?= e($d) ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container two-col">
    <div class="panel reveal">
      <h3><?= icon('doc', 24) ?> Ce que vous obtenez</h3>
      <ul class="checks"><?php foreach ($svc['deliverables'] as $d): ?><li><?= e($d) ?></li><?php endforeach; ?></ul>
    </div>
    <div class="panel reveal">
      <h3><?= icon('users', 24) ?> Cas d'usage</h3>
      <ul class="checks"><?php foreach ($svc['usecases'] as $d): ?><li><?= e($d) ?></li><?php endforeach; ?></ul>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal"><p class="eyebrow">Déroulé</p><h2>Comment se passe la mission</h2></div>
    <ol class="timeline">
      <?php foreach ($svc['process'] as $i => [$t, $d]): ?>
        <li class="step reveal"><span class="step-num"><?= $i + 1 ?></span><h3><?= e($t) ?></h3><p><?= e($d) ?></p></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<section class="section">
  <div class="container faq-layout">
    <div class="reveal"><p class="eyebrow">FAQ</p><h2>Questions fréquentes</h2><p class="lead">Besoin d'un renseignement ? Appelez le <a href="tel:<?= SITE_PHONE_TEL ?>"><?= e(SITE_PHONE) ?></a>.</p></div>
    <?php render_faq($svc['faq']); ?>
  </div>
</section>

<?php render_cta($svc['cta_title']); ?>
<?php include __DIR__ . '/footer.php'; ?>
