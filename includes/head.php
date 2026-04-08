<?php
/**
 * head.php — Shared <head> template
 *
 * Required page variables:
 *   $pageTitle, $pageDescription, $canonicalUrl, $ogImage, $currentPage
 * Optional:
 *   $schemaMarkup, $useSwiper, $useTilt, $useTyped, $heroImage
 */

$siteName = 'Sunnyside Decks & Fences';
$useSwiper = isset($useSwiper) ? $useSwiper : false;
$useTilt   = isset($useTilt)   ? $useTilt   : false;
$useTyped  = isset($useTyped)  ? $useTyped  : false;
$heroImage = isset($heroImage) ? $heroImage : '';
$noindex   = isset($noindex)   ? $noindex   : false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if ($noindex): ?>
  <meta name="robots" content="noindex, nofollow">
  <?php endif; ?>

  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">

  <!-- Favicon placeholder -->
  <link rel="icon" type="image/png" href="/assets/images/favicon.png">

  <!-- Preconnect / DNS Prefetch -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://i.imgur.com">
  <link rel="dns-prefetch" href="https://unpkg.com">
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">

  <!-- Google Fonts: Oswald (headings) + Source Sans 3 (body) -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Source+Sans+3:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Preload primary heading font (Oswald 700) -->
  <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/oswald/v53/TK3iWkUHHAIjg752FD8Ghe4.woff2" crossorigin>

  <?php if (!empty($heroImage)): ?>
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($heroImage); ?>">
  <?php endif; ?>

  <?php if ($useSwiper): ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php endif; ?>

  <!-- Site Stylesheet (cache-bust) -->
  <link rel="stylesheet" href="/assets/css/styles.css?v=3">

  <!-- Google Analytics 4 — placeholder -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
  </script> -->

  <?php if ($currentPage === 'home'): ?>
  <!-- Google Search Console verification — placeholder -->
  <!-- <meta name="google-site-verification" content="VERIFICATION_CODE"> -->
  <?php endif; ?>

  <?php if (!empty($schemaMarkup)): ?>
  <script type="application/ld+json">
  <?php echo $schemaMarkup; ?>
  </script>
  <?php endif; ?>
</head>
<body>
  <a class="skip-link" href="#main-content">Skip to main content</a>
