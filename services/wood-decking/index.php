<?php
$pageTitle       = "Wood Deck Installation Everett WA | Sunnyside";
$pageDescription = "Cedar, ipe, redwood & pressure-treated wood deck installation in Everett, WA & the Puget Sound. Built for PNW weather. Free estimates from Sunnyside.";
$canonicalUrl    = "https://sunnysidedecksfences.com/services/wood-decking";
$ogImage         = "https://i.imgur.com/5MnRDrC.jpeg";
$currentPage     = "services";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/5MnRDrC.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://sunnysidedecksfences.com/services/wood-decking#service",
      "name": "Wood Deck Installation",
      "serviceType": "Wood Deck Construction",
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
        { "@type": "City", "name": "Everett, WA" },
        { "@type": "City", "name": "Marysville, WA" },
        { "@type": "City", "name": "Bothell, WA" }
      ],
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "priceRange": "\$12,000 - \$60,000+"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "85"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does a cedar or hardwood deck cost in Everett, WA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Wood decks in the Everett area run $25 to $90 per square foot installed. Pressure-treated lumber starts around $25 to $35 per sq ft. Western red cedar runs $40 to $55 per sq ft. Ipe hardwood is the premium option at $65 to $90+ per sq ft. A 300 sq ft cedar deck with railings typically lands around $18,000 to $25,000."
          }
        },
        {
          "@type": "Question",
          "name": "Which wood holds up best in PNW rain — cedar, ipe, or pressure-treated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ipe hardwood is the longest-lasting option for the Pacific Northwest — naturally rot, insect, and water resistant with a 40+ year lifespan. Western red cedar is the best mid-range option, with natural oils that resist PNW moisture. Pressure-treated is the budget choice but needs annual sealing and lasts 15 to 20 years in our climate."
          }
        },
        {
          "@type": "Question",
          "name": "Do wood decks need to be sealed every year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In the Pacific Northwest, yes — annual sealing or staining is recommended for cedar, redwood, and pressure-treated decks to maximize lifespan. Ipe can be left to weather naturally to a silver patina, or oiled annually to maintain its rich brown color. Sunnyside provides care instructions during the final walkthrough."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sunnysidedecksfences.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://sunnysidedecksfences.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Wood Decking", "item": "https://sunnysidedecksfences.com/services/wood-decking" }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/5MnRDrC.jpeg');" aria-label="Wood decking hero">
    <div class="page-hero-content">
      <span class="eyebrow-label">Cedar · Ipe · Redwood · PT</span>
      <h1>Wood Deck Installation in Everett, WA</h1>
      <p>Natural wood decks built to handle Pacific Northwest rain — from budget-friendly pressure-treated to premium ipe hardwood.</p>
    </div>
  </section>

  <!-- BREADCRUMBS -->
  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/services">Services</a></li>
        <li><span aria-current="page">Wood Decking</span></li>
      </ol>
    </div>
  </nav>

  <!-- ANSWER-FIRST INTRO -->
  <section class="bg-surface">
    <div class="container">
      <div class="prose-centered" style="margin: 0 auto;">
        <p style="font-size: 1.15rem;">Wood decks in Everett, WA run <strong>$25 to $90 per square foot installed</strong>, depending on species. Pressure-treated lumber starts around $25 per sq ft, Western red cedar lands around $40 to $55, and premium ipe hardwood runs $65 to $90+. Sunnyside Decks &amp; Fences provides wood deck installation for homeowners across Everett, Snohomish County, and the greater Puget Sound — with materials and framing techniques chosen for our specific climate.</p>
        <p>Wood decks have a warmth and character that synthetic decking can't replicate. With the right species, the right fasteners, and proper care, a Sunnyside-built wood deck will last decades in the PNW — even in shade, rain, and freeze cycles.</p>
        <p class="last-updated"><i data-lucide="calendar"></i> Last Updated: <?php echo date('F Y'); ?></p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — IMAGE RIGHT -->
  <section class="bg-alt" aria-labelledby="why-wood">
    <div class="container">
      <div class="split">
        <div data-animate="fade-up">
          <span class="eyebrow-label">Real Wood, Real Character</span>
          <h2 id="why-wood" class="section-title">Why Some Homeowners Still Choose Natural Wood</h2>
          <p>Composite decking has gotten so good it's hard to argue against — but real wood still has its place. Cedar smells like cedar. Ipe ages to a beautiful silver patina or holds a deep brown when oiled. Redwood and hardwood deliver a warmth and grain that no manufactured product fully matches.</p>
          <p>Wood decks are also more forgiving on craftsman, mid-century, and traditional homes where a bright capped composite can look out of place. And for homeowners who genuinely enjoy seasonal maintenance — sanding, oiling, refreshing the finish — wood gives you a deck that ages with the house.</p>
          <p>The key is choosing the right species for your exposure, your budget, and how much (or how little) maintenance you actually want to do. Let's break down the four most common wood decking options for the Pacific Northwest.</p>
        </div>
        <div>
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/D6V47uI.jpeg" alt="Rain-wet ipe hardwood deck looking toward cable railing in the Pacific Northwest" width="800" height="1000" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section class="bg-surface" aria-labelledby="best-wood">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2 id="best-wood">Which wood holds up best in PNW rain?</h2>
        <p>Ipe hardwood is the longest-lasting option — naturally rot, insect, and water resistant with a 40+ year lifespan in our climate. Western red cedar is the best mid-range option, with natural oils that resist PNW moisture without chemical treatment. Pressure-treated lumber is the budget choice but needs annual sealing to last 15 to 20 years.</p>
      </div>
    </div>
  </section>

  <!-- SPECIES COMPARISON GRID-2 -->
  <section class="bg-surface" aria-labelledby="species-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">Premium vs. Mid-Range</span>
        <h2 id="species-heading" class="section-title">Cedar vs. Ipe: How They Compare</h2>
        <p class="section-subtitle" style="margin-inline:auto;">The two species we install most often, side by side.</p>
      </div>

      <div class="grid-2" data-animate="fade-up" data-animate-stagger>
        <article class="card">
          <div class="card-icon"><i data-lucide="tree-pine"></i></div>
          <h3>Western Red Cedar</h3>
          <p><strong>$40 to $55 per sq ft installed.</strong> The PNW classic. Natural oils resist rot, mildew, and insects without chemical treatment. Lightweight, beautiful straight grain, ages to a soft silver-gray. Annual oiling maintains its warm reddish-brown color.</p>
          <p style="font-size: 0.9rem; color: var(--text-light); margin-top: var(--space-sm);"><strong>Lifespan:</strong> 20 to 30 years with proper care.<br><strong>Best for:</strong> Mid-range budgets, traditional homes, customers who want a true PNW look.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="award"></i></div>
          <h3>Ipe Hardwood</h3>
          <p><strong>$65 to $90+ per sq ft installed.</strong> The premium choice. Brazilian hardwood so dense it sinks in water. Naturally fire, insect, and rot resistant. Holds a rich brown color when oiled, weathers to a warm silver patina if left alone. Hidden fastener installation only.</p>
          <p style="font-size: 0.9rem; color: var(--text-light); margin-top: var(--space-sm);"><strong>Lifespan:</strong> 40+ years in PNW climate.<br><strong>Best for:</strong> Long-term builds, modern homes, waterfront properties.</p>
        </article>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- SPLIT-REVERSE — IMAGE LEFT -->
  <section class="bg-alt" aria-labelledby="how-we-build">
    <div class="container">
      <div class="split-reverse">
        <div>
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/8ew65yq.jpeg" alt="Two-story wood deck and balcony with tongue-and-groove ceiling, built by Sunnyside Decks &amp; Fences in the greater Seattle area" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Built for the Long Haul</span>
          <h2 id="how-we-build" class="section-title">PNW-Grade Framing Under Every Wood Deck</h2>
          <p>The wood you see is only half the story. Underneath every Sunnyside wood deck is pressure-treated framing rated for ground contact, joist spacing matched to your decking species, stainless or hot-dipped galvanized fasteners, properly flashed ledgers, and ventilation gaps that let the substructure dry out fast after every storm.</p>
          <p>Wood decks fail when corners get cut underneath. Most of the deck failures we see in the Everett area are framing failures — not the boards themselves. Sunnyside builds the substructure to outlast the decking, so when it's eventually time to refresh the surface boards, the bones are still solid.</p>
          <p>Looking at composite as an alternative? Read about our <a href="/services/composite-decking">composite decking options</a> or browse the <a href="/services/custom-deck-building">full custom deck building service</a>. Pair any wood deck with code-compliant <a href="/services/deck-railings">deck railings</a> built to match.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-surface" aria-labelledby="faq-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto;">
        <span class="eyebrow-label">Common Questions</span>
        <h2 id="faq-heading" class="section-title">Wood Decking FAQs</h2>
      </div>

      <div class="faq-list" data-animate="fade-up">
        <details class="faq-item">
          <summary>How much does a cedar or hardwood deck cost in Everett, WA?</summary>
          <div class="faq-answer">
            Wood decks in the Everett area run $25 to $90 per square foot installed. Pressure-treated lumber starts around $25 to $35 per sq ft. Western red cedar runs $40 to $55 per sq ft. Ipe hardwood is the premium option at $65 to $90+ per sq ft. A 300 sq ft cedar deck with railings typically lands around $18,000 to $25,000.
          </div>
        </details>

        <details class="faq-item">
          <summary>Which wood holds up best in PNW rain — cedar, ipe, or pressure-treated?</summary>
          <div class="faq-answer">
            Ipe hardwood is the longest-lasting option for the Pacific Northwest — naturally rot, insect, and water resistant with a 40+ year lifespan. Western red cedar is the best mid-range option, with natural oils that resist PNW moisture. Pressure-treated is the budget choice but needs annual sealing and lasts 15 to 20 years in our climate.
          </div>
        </details>

        <details class="faq-item">
          <summary>Do wood decks need to be sealed every year?</summary>
          <div class="faq-answer">
            In the Pacific Northwest, yes — annual sealing or staining is recommended for cedar, redwood, and pressure-treated decks to maximize lifespan. Ipe can be left to weather naturally to a silver patina, or oiled annually to maintain its rich brown color. Sunnyside provides care instructions during the final walkthrough.
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-labelledby="cta-heading">
    <div class="container">
      <span class="eyebrow-label" style="color: var(--accent);">Free Estimate</span>
      <h2 id="cta-heading">Want a Real Wood Deck?</h2>
      <p>Tim will help you choose the right species for your lot, your budget, and how much maintenance you actually want to do. Free on-site consultation, no pressure.</p>
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
