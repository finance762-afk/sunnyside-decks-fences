<?php
$pageTitle       = "Service Area | Sunnyside Decks & Fences, Everett WA";
$pageDescription = "Serving a 50-mile radius from Everett, WA — Snohomish, King, Skagit & Island Counties. Custom decks, fences & pergolas across the Puget Sound.";
$canonicalUrl    = "https://sunnysidedecksfences.com/service-area";
$ogImage         = "https://i.imgur.com/4wTTC6a.jpeg";
$currentPage     = "service-area";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/4wTTC6a.jpeg";

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
      "areaServed": [
        { "@type": "AdministrativeArea", "name": "Snohomish County, WA" },
        { "@type": "AdministrativeArea", "name": "King County, WA" },
        { "@type": "AdministrativeArea", "name": "Skagit County, WA" },
        { "@type": "AdministrativeArea", "name": "Island County, WA" }
      ],
      "serviceType": [
        "Custom Deck Building",
        "Composite Decking",
        "Wood Decking",
        "Deck Railings",
        "Covered Decks & Pergolas",
        "Wood Fence Installation",
        "Gate Installation",
        "Outdoor Living Spaces"
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sunnysidedecksfences.com/" },
        { "@type": "ListItem", "position": 2, "name": "Service Area", "item": "https://sunnysidedecksfences.com/service-area" }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/4wTTC6a.jpeg');" aria-label="Service area hero">
    <div class="page-hero-content">
      <span class="eyebrow-label">Where We Build</span>
      <h1>Deck &amp; Fence Services Across the Greater Puget Sound — 50-Mile Radius from Everett, WA</h1>
      <p>From waterfront properties on Whidbey Island to suburban backyards in Bellevue — same hands-on craftsmanship in every community.</p>
    </div>
  </section>

  <!-- BREADCRUMBS -->
  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><span aria-current="page">Service Area</span></li>
      </ol>
    </div>
  </nav>

  <!-- INTRO -->
  <section class="bg-surface">
    <div class="container">
      <div class="prose-centered" data-animate="fade-up" style="margin: 0 auto; text-align: center;">
        <span class="eyebrow-label">Greater Puget Sound</span>
        <h2 class="section-title">A 50-Mile Radius from Everett, WA</h2>
        <p>Sunnyside Decks &amp; Fences is based in Everett, Washington and serves homeowners across four counties — Snohomish, King, Skagit, and Island. From waterfront properties on Whidbey to suburban backyards in Bellevue, Tim and his crew bring the same hands-on craftsmanship to every community within a 50-mile radius of our Everett home base.</p>
        <p>Local knowledge matters. Coastal exposure, hillside lots, suburban setbacks, HOA review processes, and Snohomish County permitting are all things we navigate every week. Wherever your property sits in the greater Puget Sound, the build is engineered for it.</p>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- COUNTY GRID -->
  <section class="bg-alt" aria-labelledby="counties-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">Communities Served</span>
        <h2 id="counties-heading" class="section-title">Where Sunnyside Builds</h2>
        <p class="section-subtitle" style="margin-inline:auto;">Four counties, dozens of communities, one standard of craftsmanship.</p>
      </div>

      <div class="grid-2" data-animate="fade-up" data-animate-stagger>

        <article class="county-block">
          <h3><i data-lucide="map-pin"></i> Snohomish County</h3>
          <p>Our home base. Most projects in Snohomish County involve full-yard fencing, family-sized decks for established suburban lots, and pergolas designed to extend usable outdoor time through the wet season. Tim handles Snohomish County permitting in-house.</p>
          <ul class="city-list">
            <li>Everett</li>
            <li>Marysville</li>
            <li>Lake Stevens</li>
            <li>Arlington</li>
            <li>Monroe</li>
            <li>Snohomish</li>
            <li>Mukilteo</li>
            <li>Edmonds</li>
            <li>Lynnwood</li>
            <li>Mountlake Terrace</li>
            <li>Mill Creek</li>
            <li>Bothell (north)</li>
          </ul>
        </article>

        <article class="county-block">
          <h3><i data-lucide="map-pin"></i> King County</h3>
          <p>King County builds tend to mean privacy fencing in tighter suburban lots, multi-level decks on hillside backyards, and design-conscious composite or hardwood projects in neighborhoods with HOA review. We're comfortable with the permit and review processes in every city we serve.</p>
          <ul class="city-list">
            <li>Seattle (north)</li>
            <li>Shoreline</li>
            <li>Kenmore</li>
            <li>Kirkland</li>
            <li>Redmond</li>
            <li>Woodinville</li>
            <li>Bothell (south)</li>
            <li>Sammamish</li>
            <li>Issaquah</li>
            <li>Bellevue</li>
          </ul>
        </article>

        <article class="county-block">
          <h3><i data-lucide="map-pin"></i> Skagit County</h3>
          <p>Skagit projects often involve larger rural lots, agricultural-edge fencing, and decks built around mature landscaping. The combination of open exposure and seasonal weather makes material selection critical — we lean on cedar and hardwood for the long haul.</p>
          <ul class="city-list">
            <li>Mount Vernon</li>
            <li>Burlington</li>
            <li>Sedro-Woolley</li>
            <li>Anacortes</li>
            <li>La Conner</li>
            <li>Stanwood</li>
          </ul>
        </article>

        <article class="county-block">
          <h3><i data-lucide="map-pin"></i> Island County</h3>
          <p>Whidbey and Camano builds are some of our favorite work — waterfront decks with cable railing, weather-rated hardwood, and pergolas engineered for marine exposure. Salt air is unforgiving, so we spec stainless fasteners and premium materials throughout.</p>
          <ul class="city-list">
            <li>Oak Harbor</li>
            <li>Whidbey Island</li>
            <li>Camano Island</li>
          </ul>
        </article>

      </div>
    </div>
  </section>

  <!-- ON-SITE VISIT — SPLIT -->
  <section class="bg-surface" aria-labelledby="onsite-heading">
    <div class="container">
      <div class="split">
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/JjwtGaa.jpeg" alt="Custom horizontal slat cedar fence installed along a sidewalk near modern homes in the Puget Sound area" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Free On-Site Visits</span>
          <h2 id="onsite-heading" class="section-title">Every Project Starts on Your Property</h2>
          <p>No matter where you are in the service area, every Sunnyside project begins with a free on-site visit. Tim walks the space with you, takes measurements, talks through what you want, and explains the realistic options for your lot, your budget, and the local conditions.</p>
          <p>That on-site visit is what separates a real estimate from a guess. Slope, setbacks, drainage, neighboring fences, and how the sun hits the yard all matter — and none of that comes through over the phone. There's no charge for the visit and no obligation after.</p>
          <p style="margin-top: var(--space-lg);">
            <a href="/contact" class="btn-outline-primary">
              Request Your Free Visit
              <i data-lucide="arrow-right"></i>
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- SERVICE LINKS -->
  <section class="bg-alt" aria-labelledby="services-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">Available Across the Service Area</span>
        <h2 id="services-heading" class="section-title">Every Service We Offer</h2>
      </div>
      <div class="service-link-grid" data-animate="fade-up">
        <a href="/services/custom-deck-building" class="service-link"><i data-lucide="hammer"></i> Custom Deck Building</a>
        <a href="/services/composite-decking" class="service-link"><i data-lucide="layers"></i> Composite Decking</a>
        <a href="/services/wood-decking" class="service-link"><i data-lucide="tree-pine"></i> Wood Decking</a>
        <a href="/services/deck-railings" class="service-link"><i data-lucide="fence"></i> Deck Railings</a>
        <a href="/services/covered-decks-pergolas" class="service-link"><i data-lucide="home"></i> Covered Decks &amp; Pergolas</a>
        <a href="/services/wood-fence-installation" class="service-link"><i data-lucide="panel-top"></i> Wood Fence Installation</a>
        <a href="/services/gate-installation" class="service-link"><i data-lucide="door-open"></i> Gate Installation</a>
        <a href="/services/outdoor-living-spaces" class="service-link"><i data-lucide="sun"></i> Outdoor Living Spaces</a>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-labelledby="cta-heading">
    <div class="container">
      <span class="eyebrow-label" style="color: var(--accent);">Free On-Site Estimate</span>
      <h2 id="cta-heading">Live in the Puget Sound Area?</h2>
      <p>Call Tim for a free on-site estimate anywhere within our 50-mile service radius — Snohomish, King, Skagit, or Island County.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">
          <i data-lucide="calendar-check"></i>
          Schedule Your Free Visit
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
