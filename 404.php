<?php
$pageTitle       = "Page Not Found | Sunnyside Decks & Fences";
$pageDescription = "The page you're looking for doesn't exist. Get back to Sunnyside Decks & Fences — Everett's family-owned deck and fence builders.";
$canonicalUrl    = "https://sunnysidedecksfences.com/";
$ogImage         = "https://i.imgur.com/aKknI6J.png";
$currentPage     = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$schemaMarkup    = '';

http_response_code(404);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">
  <section class="message-page">
    <div class="message-card">
      <div class="big-number">404</div>
      <h1>This Page Took a Wrong Turn</h1>
      <p>The page you're looking for doesn't exist or has moved. Let's get you back on track.</p>
      <div class="message-actions">
        <a href="/" class="btn-primary">
          <i data-lucide="home"></i>
          Homepage
        </a>
        <a href="/services" class="btn-outline-primary">
          <i data-lucide="hammer"></i>
          Services
        </a>
        <a href="/contact" class="btn-outline-primary">
          <i data-lucide="mail"></i>
          Contact
        </a>
      </div>
      <p style="font-size: 1rem; margin: 0;">Or call Tim directly:</p>
      <a href="tel:+14257372259" class="message-phone">
        <i data-lucide="phone"></i>
        (425) 737-2259
      </a>
    </div>
  </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
