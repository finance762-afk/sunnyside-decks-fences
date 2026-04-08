<?php
/**
 * nav.php — Site navigation
 * Requires: $currentPage
 */
$currentPage = isset($currentPage) ? $currentPage : '';

function navActive($page, $current) {
  return $page === $current ? ' aria-current="page"' : '';
}
?>
<nav class="navbar" aria-label="Main navigation">
  <div class="nav-container">
    <a href="/" class="nav-logo" aria-label="Sunnyside Decks &amp; Fences — Home">
      <img src="https://i.imgur.com/aKknI6J.png" alt="Sunnyside Decks &amp; Fences logo" width="180" height="50">
    </a>

    <ul class="nav-menu">
      <li><a href="/" class="nav-link"<?php echo navActive('home', $currentPage); ?>>Home</a></li>
      <li class="has-dropdown">
        <a href="/services" class="nav-link"<?php echo navActive('services', $currentPage); ?>>Services</a>
        <ul class="dropdown" role="menu" style="display:none">
          <li><a href="/services/custom-deck-building">Custom Deck Building</a></li>
          <li><a href="/services/composite-decking">Composite Decking</a></li>
          <li><a href="/services/wood-decking">Wood Decking</a></li>
          <li><a href="/services/deck-railings">Deck Railings</a></li>
          <li><a href="/services/covered-decks-pergolas">Covered Decks &amp; Pergolas</a></li>
          <li><a href="/services/wood-fence-installation">Wood Fence Installation</a></li>
          <li><a href="/services/gate-installation">Gate Installation</a></li>
          <li><a href="/services/outdoor-living-spaces">Outdoor Living Spaces</a></li>
        </ul>
      </li>
      <li><a href="/service-area" class="nav-link"<?php echo navActive('service-area', $currentPage); ?>>Service Area</a></li>
      <li><a href="/about" class="nav-link"<?php echo navActive('about', $currentPage); ?>>About</a></li>
      <li><a href="/contact" class="nav-link"<?php echo navActive('contact', $currentPage); ?>>Contact</a></li>
    </ul>

    <a href="tel:+14257372259" class="nav-phone nav-phone-desktop">
      <i data-lucide="phone"></i>
      (425) 737-2259
    </a>

    <button class="hamburger" type="button" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>

<div class="menu-overlay" aria-hidden="true"></div>

<aside class="mobile-menu" id="mobile-menu" aria-label="Mobile navigation">
  <ul>
    <li><a href="/"<?php echo navActive('home', $currentPage); ?>>Home</a></li>
    <li>
      <a href="/services"<?php echo navActive('services', $currentPage); ?>>Services</a>
      <div class="mobile-dropdown">
        <a href="/services/custom-deck-building">Custom Deck Building</a>
        <a href="/services/composite-decking">Composite Decking</a>
        <a href="/services/wood-decking">Wood Decking</a>
        <a href="/services/deck-railings">Deck Railings</a>
        <a href="/services/covered-decks-pergolas">Covered Decks &amp; Pergolas</a>
        <a href="/services/wood-fence-installation">Wood Fence Installation</a>
        <a href="/services/gate-installation">Gate Installation</a>
        <a href="/services/outdoor-living-spaces">Outdoor Living Spaces</a>
      </div>
    </li>
    <li><a href="/service-area"<?php echo navActive('service-area', $currentPage); ?>>Service Area</a></li>
    <li><a href="/about"<?php echo navActive('about', $currentPage); ?>>About</a></li>
    <li><a href="/contact"<?php echo navActive('contact', $currentPage); ?>>Contact</a></li>
    <li><a href="tel:+14257372259">(425) 737-2259</a></li>
  </ul>
</aside>
