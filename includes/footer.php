<?php
/**
 * footer.php — Site footer + script loader
 */
$useSwiper = isset($useSwiper) ? $useSwiper : false;
$useTilt   = isset($useTilt)   ? $useTilt   : false;
$useTyped  = isset($useTyped)  ? $useTyped  : false;
?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col footer-entity">
        <h4>Sunnyside Decks &amp; Fences</h4>
        <p>Sunnyside Decks &amp; Fences is a licensed and insured deck and fence contractor based in Everett, Washington, serving Snohomish County and the greater Seattle area. We specialize in custom deck building, composite and wood decking, and wood fence installation.</p>
        <div class="footer-contact">
          <a href="tel:+14257372259"><i data-lucide="phone"></i> (425) 737-2259</a>
          <a href="mailto:timlapatsin@yahoo.com"><i data-lucide="mail"></i> timlapatsin@yahoo.com</a>
          <span><i data-lucide="map-pin"></i> 6125 Sycamore Pl, Everett, WA 98203</span>
        </div>
        <div class="footer-social">
          <a href="https://www.instagram.com/lapatsin_llc/" target="_blank" rel="noopener" aria-label="Instagram">
            <i data-lucide="instagram"></i>
          </a>
          <a href="https://share.google/DzdjpCErMrTdlOsXm" target="_blank" rel="noopener" aria-label="Google Business Profile">
            <i data-lucide="map-pin"></i>
          </a>
        </div>
      </div>

      <div class="footer-col">
        <h4>Explore</h4>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/services">Services</a></li>
          <li><a href="/service-area">Service Area</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="/services/custom-deck-building">Custom Deck Building</a></li>
          <li><a href="/services/composite-decking">Composite Decking</a></li>
          <li><a href="/services/wood-decking">Wood Decking</a></li>
          <li><a href="/services/deck-railings">Deck Railings</a></li>
          <li><a href="/services/covered-decks-pergolas">Covered Decks &amp; Pergolas</a></li>
          <li><a href="/services/wood-fence-installation">Wood Fence Installation</a></li>
          <li><a href="/services/gate-installation">Gate Installation</a></li>
          <li><a href="/services/outdoor-living-spaces">Outdoor Living Spaces</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Hours</h4>
        <ul>
          <li>Monday – Friday: 9 AM – 6 PM</li>
          <li>Saturday: Closed</li>
          <li>Sunday: Closed</li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>&copy; <?php echo date('Y'); ?> Sunnyside Decks &amp; Fences. All rights reserved. Licensed &amp; insured.</span>
      <span>Website by <a href="https://www.pageoneinsights.com" target="_blank" rel="noopener dofollow">Page One Insights</a></span>
    </div>
  </div>
</footer>

<button class="back-to-top" type="button" aria-label="Back to top">
  <i data-lucide="arrow-up"></i>
</button>

<!-- Lucide Icons — MUST load before animations.js -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>lucide.createIcons();</script>

<?php if ($useTilt): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>
<?php endif; ?>

<?php if ($useSwiper): ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<?php endif; ?>

<?php if ($useTyped): ?>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js" defer></script>
<?php endif; ?>

<!-- Site Scripts -->
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>
</body>
</html>
