<?php
require_once __DIR__ . '/includes/config.php';
$title = 'Contact et devis inspection drone Lyon | Inspection Drone France';
$description = 'Contactez Inspection Drone France à Bron pour un devis d\'inspection par drone à Lyon : appelez le 06 24 88 21 37 ou écrivez-nous.';
$path = '/contact.php';

$status = null;
$v = ['name' => '', 'email' => '', 'phone' => '', 'service' => '', 'message' => ''];
$services = ['Inspection panneau solaire', 'Thermographie bâtiment', 'Photogrammétrie / 3D', 'Autre'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($v as $k => $_) {
        $val = trim((string)($_POST[$k] ?? ''));
        // Pas de retours à la ligne hors message : évite l'injection d'en-têtes mail
        $v[$k] = $k === 'message' ? mb_substr($val, 0, 5000) : mb_substr(preg_replace('/[\r\n]+/', ' ', $val), 0, 200);
    }
    if (!empty($_POST['website'])) {
        $status = 'ok'; // honeypot : robot
    } elseif ($v['name'] === '' || !filter_var($v['email'], FILTER_VALIDATE_EMAIL) || $v['message'] === ''
        || !in_array($v['service'], $services, true) || empty($_POST['consent'])) {
        $status = 'err';
    } else {
        $body = "Nom : {$v['name']}\nEmail : {$v['email']}\nTéléphone : {$v['phone']}\nService : {$v['service']}\n\n{$v['message']}";
        $headers = 'From: ' . SITE_EMAIL . "\r\nReply-To: {$v['email']}\r\nContent-Type: text/plain; charset=UTF-8";
        $subject = '=?UTF-8?B?' . base64_encode('Demande de devis - ' . $v['service']) . '?=';
        $status = @mail(SITE_EMAIL, $subject, $body, $headers) ? 'ok' : 'fail';
    }
}
include __DIR__ . '/includes/header.php';
?>
<div class="page-title"><div class="container"><h1>Contact et demande de devis</h1><p>Réponse rapide – devis gratuit</p></div></div>
<section class="section">
  <div class="container contact-grid">
    <div class="form-card reveal">
      <?php if ($status === 'ok'): ?><div class="notice ok" role="status">Merci, votre message a bien été envoyé. Nous vous répondons rapidement.</div>
      <?php elseif ($status === 'err'): ?><div class="notice err" role="alert">Merci de remplir tous les champs obligatoires avec un email valide et d'accepter le traitement de vos données.</div>
      <?php elseif ($status === 'fail'): ?><div class="notice err" role="alert">L'envoi a échoué. Merci de nous appeler au <?= e(SITE_PHONE) ?>.</div><?php endif; ?>
      <form method="post" action="<?= e(url('/contact.php')) ?>">
        <div class="form-row">
          <div><label for="name">Nom *</label><input id="name" name="name" required autocomplete="name" value="<?= e($v['name']) ?>"></div>
          <div><label for="email">Email *</label><input id="email" type="email" name="email" required autocomplete="email" value="<?= e($v['email']) ?>"></div>
        </div>
        <div class="form-row">
          <div><label for="phone">Téléphone</label><input id="phone" type="tel" name="phone" autocomplete="tel" value="<?= e($v['phone']) ?>"></div>
          <div><label for="service">Service *</label><select id="service" name="service" required>
            <?php foreach ($services as $s): ?><option<?= $v['service'] === $s ? ' selected' : '' ?>><?= e($s) ?></option><?php endforeach; ?>
          </select></div>
        </div>
        <div><label for="message">Votre projet *</label><textarea id="message" name="message" rows="6" required><?= e($v['message']) ?></textarea></div>
        <div class="hp" aria-hidden="true"><label for="website">Ne pas remplir</label><input id="website" name="website" tabindex="-1" autocomplete="off"></div>
        <div><label class="consent"><input type="checkbox" name="consent" value="1" required> <span>J'accepte que mes données soient utilisées pour répondre à ma demande (voir la <a href="<?= e(url('/politique-confidentialite.php')) ?>">politique de confidentialité</a>). *</span></label></div>
        <div><button class="btn btn-red btn-lg" type="submit">Envoyer ma demande</button></div>
      </form>
    </div>
    <aside class="info-card reveal">
      <h2>Nos coordonnées</h2>
      <ul class="info-list">
        <li><?= icon('phone', 20) ?><div><small>Téléphone</small><a href="tel:<?= SITE_PHONE_TEL ?>"><?= e(SITE_PHONE) ?></a></div></li>
        <li><?= icon('mail', 20) ?><div><small>Email</small><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></div></li>
        <li><?= icon('pin', 20) ?><div><small>Zone d'intervention</small>Bron, Lyon et métropole de Lyon</div></li>
        <li><?= icon('clock', 20) ?><div><small>Devis</small>Gratuit, réponse rapide</div></li>
      </ul>
    </aside>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
