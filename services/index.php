<?php
$pageTitle       = "Our Services | Sunnyside Decks & Fences, Everett WA";
$pageDescription = "Custom decks, composite decking, cedar fences, gates & pergolas built for the Pacific Northwest. See every service Sunnyside offers across the Puget Sound.";
$canonicalUrl    = "https://sunnysidedecksfences.com/services";
$ogImage         = "https://i.imgur.com/V2WV8Zg.jpeg";
$currentPage     = "services";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/V2WV8Zg.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Deck and Fence Construction",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Sunnyside Decks & Fences",
        "telephone": "+1-425-737-2259",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "6125 Sycamore Pl",
          "addressLocality": "Everett",
          "addressRegion": "WA",
          "postalCode": "98203",
          "addressCountry": "US"
        }
      },
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": 47.9790,
          "longitude": -122.2021
        },
        "geoRadius": "80467"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Sunnyside Decks & Fences Services",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Custom Deck Building", "url": "https://sunnysidedecksfences.com/services/custom-deck-building" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Composite Decking", "url": "https://sunnysidedecksfences.com/services/composite-decking" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Wood Decking", "url": "https://sunnysidedecksfences.com/services/wood-decking" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Deck Railings", "url": "https://sunnysidedecksfences.com/services/deck-railings" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Covered Decks & Pergolas", "url": "https://sunnysidedecksfences.com/services/covered-decks-pergolas" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Wood Fence Installation", "url": "https://sunnysidedecksfences.com/services/wood-fence-installation" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Gate Installation", "url": "https://sunnysidedecksfences.com/services/gate-installation" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Outdoor Living Spaces", "url": "https://sunnysidedecksfences.com/services/outdoor-living-spaces" } }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sunnysidedecksfences.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://sunnysidedecksfences.com/services" }
      ]
    }
  ]
}
JSON;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- HERO -->
  <section class="page-hero" style="background-image: url('https://i.imgur.com/V2WV8Zg.jpeg');" aria-label="Services hero">
    <div class="page-hero-content">
      <span class="eyebrow-label">Our Services</span>
      <h1>Deck, Fence &amp; Outdoor Living Services in Everett, WA</h1>
      <p>Eight services, one family-run crew, every project owner-supervised from day one.</p>
    </div>
  </section>

  <!-- BREADCRUMBS -->
  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><span aria-current="page">Services</span></li>
      </ol>
    </div>
  </nav>

  <!-- INTRO -->
  <section class="bg-surface">
    <div class="container">
      <div class="prose-centered" data-animate="fade-up" style="margin: 0 auto; text-align: center;">
        <span class="eyebrow-label">Built for the Pacific Northwest</span>
        <h2 class="section-title">Every Outdoor Build, Handled In-House</h2>
        <p>Sunnyside Decks &amp; Fences provides full-service deck building, fence installation, pergola construction, and outdoor living design across the greater Puget Sound. Every project is owner-supervised by Tim Lapatsin and built to handle Pacific Northwest weather year-round.</p>
        <p>From a single cedar privacy fence to a multi-level ipe hardwood deck overlooking the Sound, every service below is delivered by the same family crew — no rotating subcontractors, no quote-and-disappear sales model. Click any service for full details, materials, and project examples.</p>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- SERVICES GRID -->
  <section class="bg-alt" aria-labelledby="services-grid-heading">
    <div class="container">
      <h2 id="services-grid-heading" class="sr-only">All Services</h2>

      <div class="grid-3" data-animate="fade-up" data-animate-stagger>
        <article class="card">
          <div class="card-icon"><i data-lucide="hammer"></i></div>
          <h3>Custom Deck Building</h3>
          <p>Fully custom residential deck design and construction — single-level, multi-level, wraparound, and rooftop builds tailored to your home, lot, and view.</p>
          <a href="/services/custom-deck-building" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="layers"></i></div>
          <h3>Composite Decking</h3>
          <p>Trex, TimberTech, and PVC composite deck installation — fade-resistant, mold-resistant, and built to handle PNW rain year-round with minimal maintenance.</p>
          <a href="/services/composite-decking" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="tree-pine"></i></div>
          <h3>Wood Decking</h3>
          <p>Cedar, redwood, ipe hardwood, and pressure-treated lumber decks — natural beauty with the structural integrity to last for decades in the PNW.</p>
          <a href="/services/wood-decking" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="fence"></i></div>
          <h3>Deck Railings</h3>
          <p>Cable, aluminum, glass, vinyl, and wood railing systems — code-compliant designs that frame your view without blocking it.</p>
          <a href="/services/deck-railings" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="home"></i></div>
          <h3>Covered Decks &amp; Pergolas</h3>
          <p>Pergolas, covered patios, gazebos, and screened-in decks — extend your usable outdoor season through the Puget Sound's wet months.</p>
          <a href="/services/covered-decks-pergolas" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="panel-top"></i></div>
          <h3>Wood Fence Installation</h3>
          <p>Cedar privacy, horizontal slat, board-on-board, picket, and shadowbox fencing — built straight, plumb, and engineered for wet PNW ground.</p>
          <a href="/services/wood-fence-installation" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="door-open"></i></div>
          <h3>Gate Installation</h3>
          <p>Driveway gates, garden gates, privacy gates, and fully custom gate design — engineered hardware that won't sag or stick over time.</p>
          <a href="/services/gate-installation" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="sun"></i></div>
          <h3>Outdoor Living Spaces</h3>
          <p>Multi-level decks, integrated deck lighting, fire features, and complete backyard design-build — your full outdoor retreat from one crew.</p>
          <a href="/services/outdoor-living-spaces" class="card-link">Learn More</a>
        </article>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-labelledby="cta-heading">
    <div class="container">
      <span class="eyebrow-label" style="color: var(--accent);">Free Consultation</span>
      <h2 id="cta-heading">Not Sure Where to Start?</h2>
      <p>Call Tim directly for a free consultation. He'll walk through your options, talk through realistic budgets, and help you scope the project before anything's locked in.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">
          <i data-lucide="calendar-check"></i>
          Request a Free Estimate
        </a>
        <a href="tel:+14257372259" class="cta-phone">
          <i data-lucide="phone"></i>
          (425) 737-2259
        </a>
      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
