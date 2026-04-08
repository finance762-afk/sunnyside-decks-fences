<?php
$pageTitle       = "Thank You | Sunnyside Decks & Fences";
$pageDescription = "Thank you for contacting Sunnyside Decks & Fences. Tim will be in touch within one business day.";
$canonicalUrl    = "https://sunnysidedecksfences.com/thank-you";
$ogImage         = "https://i.imgur.com/aKknI6J.png";
$currentPage     = "contact";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$noindex         = true;
$schemaMarkup    = '';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">
  <section class="message-page">
    <div class="message-card">
      <div style="display:inline-flex; align-items:center; justify-content:center; width:88px; height:88px; border-radius:50%; background:rgba(232,166,36,0.18); color:var(--secondary); margin: 0 auto var(--space-lg);">
        <i data-lucide="check-circle-2" style="width:48px; height:48px;"></i>
      </div>
      <h1>Thank You — We'll Be in Touch Soon</h1>
      <p>Tim typically responds within one business day. In the meantime, take a look at our recent work or learn more about how Sunnyside builds.</p>
      <div class="message-actions">
        <a href="/services" class="btn-primary">
          <i data-lucide="hammer"></i>
          Our Services
        </a>
        <a href="/about" class="btn-outline-primary">
          <i data-lucide="users"></i>
          About Us
        </a>
        <a href="/" class="btn-outline-primary">
          <i data-lucide="home"></i>
          Homepage
        </a>
      </div>
      <p style="font-size: 1rem; margin: 0;">Need to reach Tim sooner?</p>
      <a href="tel:+14257372259" class="message-phone">
        <i data-lucide="phone"></i>
        (425) 737-2259
      </a>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
