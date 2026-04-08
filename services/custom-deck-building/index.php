<?php
$pageTitle       = "Custom Deck Builder in Everett, WA | Sunnyside";
$pageDescription = "Custom-built residential decks in Everett, WA & the Puget Sound. Multi-level, wraparound, ground-level — owner Tim on every job. Free estimates from $15K.";
$canonicalUrl    = "https://sunnysidedecksfences.com/services/custom-deck-building";
$ogImage         = "https://i.imgur.com/BatIFR5.jpeg";
$currentPage     = "services";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/BatIFR5.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://sunnysidedecksfences.com/services/custom-deck-building#service",
      "name": "Custom Deck Building",
      "serviceType": "Custom Deck Construction",
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
        { "@type": "City", "name": "Lake Stevens, WA" },
        { "@type": "City", "name": "Bothell, WA" }
      ],
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "priceRange": "\$15,000 - \$50,000+"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "85"
      }
    },
    {
      "@type": "HowTo",
      "name": "How Sunnyside Builds a Custom Deck",
      "step": [
        { "@type": "HowToStep", "position": 1, "name": "Free On-Site Consultation", "text": "Tim visits your property, takes measurements, evaluates the slope and drainage, and listens to what you want." },
        { "@type": "HowToStep", "position": 2, "name": "Design & Material Selection", "text": "We sketch the layout and walk you through decking, framing, and railing options matched to your budget." },
        { "@type": "HowToStep", "position": 3, "name": "Permits & Engineering", "text": "Sunnyside handles Snohomish County permits in-house — including engineering for elevated decks." },
        { "@type": "HowToStep", "position": 4, "name": "Build & Final Walkthrough", "text": "Owner on-site daily through framing, decking, railing, and finish. Final walk-through ends with a written warranty." }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does a custom deck cost in Everett, WA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Custom decks in the Everett area typically run $15,000 to $50,000+. A simple 200 sq ft pressure-treated ground-level deck starts around $15,000. A 400 sq ft multi-level composite or hardwood build with railings, lighting, and stairs is closer to $35,000 to $50,000. Premium ipe builds and complex multi-level designs can go higher."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a custom deck build take from start to finish?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most custom decks take 1 to 3 weeks of build time once permits are pulled. Simple ground-level builds can be done in a week. Multi-level decks with stairs, railings, and complex framing take 2 to 3 weeks. Permit approval through Snohomish County typically adds 2 to 4 weeks before the build starts."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a permit to build a deck in Snohomish County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most decks over 30 inches above grade require a building permit in Snohomish County. Decks attached to the house typically require permits regardless of height. Sunnyside handles the full permitting process — drawings, structural specs, and submission — so you don't have to."
          }
        },
        {
          "@type": "Question",
          "name": "What's the best decking material for the Pacific Northwest?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For low maintenance, composite decking like Trex or TimberTech is the top choice — it handles PNW rain without rotting or graying. For natural wood look with long lifespan, ipe hardwood lasts 40+ years even in our climate. Cedar is a solid mid-range option. We walk through pros and cons of each during your consultation."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sunnysidedecksfences.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://sunnysidedecksfences.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Custom Deck Building", "item": "https://sunnysidedecksfences.com/services/custom-deck-building" }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/BatIFR5.jpeg');" aria-label="Custom deck building hero">
    <div class="page-hero-content">
      <span class="eyebrow-label">Custom Deck Builder · Everett, WA</span>
      <h1>Custom Deck Building in Everett, WA</h1>
      <p>Multi-level, wraparound, or ground-level — every Sunnyside deck is built by hand and supervised by Tim from first measurement to final board.</p>
    </div>
  </section>

  <!-- BREADCRUMBS -->
  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/services">Services</a></li>
        <li><span aria-current="page">Custom Deck Building</span></li>
      </ol>
    </div>
  </nav>

  <!-- ANSWER-FIRST INTRO -->
  <section class="bg-surface">
    <div class="container">
      <div class="prose-centered" style="margin: 0 auto;">
        <p style="font-size: 1.15rem;">Custom decks in Everett, WA typically run <strong>$15,000 to $50,000+</strong>, with most residential builds finishing in <strong>1 to 3 weeks</strong> once permits clear. Sunnyside Decks &amp; Fences provides custom deck building for homeowners across Everett, Snohomish County, and the greater Puget Sound — every project supervised on-site daily by owner Tim Lapatsin.</p>
        <p>From a simple ground-level cedar deck to a multi-level ipe hardwood build with cable railings and integrated lighting, we handle every step in-house: design, permits, framing, decking, railings, and the final walkthrough. No subcontractor handoffs, no surprise change orders, no rotating crews showing up at your house.</p>
        <p class="last-updated"><i data-lucide="calendar"></i> Last Updated: <?php echo date('F Y'); ?></p>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section class="bg-surface" style="padding-top: 0;">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>What does a custom deck cost in Everett, WA?</h2>
        <p>A 200 sq ft pressure-treated ground-level deck starts around $15,000. A 400 sq ft multi-level composite or hardwood build with railings, stairs, and lighting runs $35,000 to $50,000. Premium ipe builds and complex multi-level designs can exceed $60,000. Every Sunnyside estimate is itemized in plain language — no markup games.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — IMAGE RIGHT -->
  <section class="bg-alt" aria-labelledby="custom-builds">
    <div class="container">
      <div class="split">
        <div data-animate="fade-up">
          <span class="eyebrow-label">Built Around Your Home</span>
          <h2 id="custom-builds" class="section-title">Designed to Fit Your Lot, Not a Template</h2>
          <p>Most contractors offer two or three "deck packages" and try to fit your house into one of them. Sunnyside builds the other way around: we start with your property, your view, your sun exposure, and your budget — then design a deck that actually works.</p>
          <p>That means we account for slope, drainage, neighboring sightlines, the way the sun hits the yard at 5 pm in July, where you'll put a grill, where the dog door goes, and how the deck transitions to grass or patio. Tim handles the full design process before any wood gets ordered.</p>
          <p>Common custom deck builds we handle across the Puget Sound:</p>
          <ul class="icon-list">
            <li>
              <span class="list-icon"><i data-lucide="layers-3"></i></span>
              <div>
                <strong>Multi-Level Decks</strong>
                Stepped levels for sloped yards, hot tub platforms, dining and lounge zones.
              </div>
            </li>
            <li>
              <span class="list-icon"><i data-lucide="square"></i></span>
              <div>
                <strong>Wraparound Decks</strong>
                L-shaped and U-shaped builds that follow the footprint of the house.
              </div>
            </li>
            <li>
              <span class="list-icon"><i data-lucide="trees"></i></span>
              <div>
                <strong>Ground-Level &amp; Floating Decks</strong>
                Low-profile designs that don't require railings or as much permitting.
              </div>
            </li>
          </ul>
        </div>
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/XlR8JpE.jpeg" alt="Custom wood deck with railing and stairs leading to backyard, built by Sunnyside Decks &amp; Fences" width="800" height="1000" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="bg-surface" aria-labelledby="process-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">How We Build It</span>
        <h2 id="process-heading" class="section-title">From First Measurement to Final Walkthrough</h2>
      </div>

      <ol class="process-steps" data-animate="fade-up" style="max-width: 820px; margin: 0 auto;">
        <li>
          <div>
            <strong>Free On-Site Consultation</strong>
            <p>Tim visits your property, takes measurements, evaluates slope and drainage, and listens to what you actually want before recommending anything.</p>
          </div>
        </li>
        <li>
          <div>
            <strong>Design &amp; Material Selection</strong>
            <p>We sketch the layout, walk you through decking, framing, and railing options, and put together an itemized estimate matched to your budget.</p>
          </div>
        </li>
        <li>
          <div>
            <strong>Permits &amp; Engineering</strong>
            <p>Sunnyside handles Snohomish County permits in-house, including structural engineering for elevated and multi-level builds.</p>
          </div>
        </li>
        <li>
          <div>
            <strong>Build &amp; Final Walkthrough</strong>
            <p>Tim is on-site daily through framing, decking, railing, and finish. Final walkthrough ends with a written warranty on craftsmanship.</p>
          </div>
        </li>
      </ol>
    </div>
  </section>

  <hr class="section-divider">

  <!-- SPLIT 2 — IMAGE LEFT (SPLIT-REVERSE) -->
  <section class="bg-alt" aria-labelledby="materials-heading">
    <div class="container">
      <div class="split-reverse">
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/frnq7SE.jpeg" alt="Composite deck under construction with concrete footings, framing visible — Sunnyside crew on-site in Snohomish County" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Materials That Last</span>
          <h2 id="materials-heading" class="section-title">PNW-Grade Materials, No Compromises</h2>
          <p>The Pacific Northwest is brutal on outdoor builds. Constant rain, freeze cycles, moss pressure, and shade-driven moisture can wreck a deck in five years if the wrong materials go in. We don't take that risk.</p>
          <p>Every Sunnyside deck uses pressure-treated framing rated for ground contact, stainless or hot-dipped galvanized fasteners, proper flashing at the ledger, and decking material chosen for your specific exposure. Ipe and composite decking get hidden fasteners. All substructure is built with proper drainage gaps and ventilation.</p>
          <p>Need help choosing materials? Read more about our <a href="/services/composite-decking">composite decking</a> and <a href="/services/wood-decking">wood decking</a> options, or pair your deck with custom <a href="/services/deck-railings">deck railings</a> built to match.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-surface" aria-labelledby="faq-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto;">
        <span class="eyebrow-label">Common Questions</span>
        <h2 id="faq-heading" class="section-title">Custom Deck FAQs</h2>
      </div>

      <div class="faq-list" data-animate="fade-up">
        <details class="faq-item">
          <summary>How much does a custom deck cost in Everett, WA?</summary>
          <div class="faq-answer">
            Custom decks in the Everett area typically run $15,000 to $50,000+. A simple 200 sq ft pressure-treated ground-level deck starts around $15,000. A 400 sq ft multi-level composite or hardwood build with railings, lighting, and stairs is closer to $35,000 to $50,000. Premium ipe builds and complex multi-level designs can go higher.
          </div>
        </details>

        <details class="faq-item">
          <summary>How long does a custom deck build take from start to finish?</summary>
          <div class="faq-answer">
            Most custom decks take 1 to 3 weeks of build time once permits are pulled. Simple ground-level builds can be done in a week. Multi-level decks with stairs, railings, and complex framing take 2 to 3 weeks. Permit approval through Snohomish County typically adds 2 to 4 weeks before the build starts.
          </div>
        </details>

        <details class="faq-item">
          <summary>Do I need a permit to build a deck in Snohomish County?</summary>
          <div class="faq-answer">
            Most decks over 30 inches above grade require a building permit in Snohomish County. Decks attached to the house typically require permits regardless of height. Sunnyside handles the full permitting process — drawings, structural specs, and submission — so you don't have to.
          </div>
        </details>

        <details class="faq-item">
          <summary>What's the best decking material for the Pacific Northwest?</summary>
          <div class="faq-answer">
            For low maintenance, composite decking like Trex or TimberTech is the top choice — it handles PNW rain without rotting or graying. For natural wood look with long lifespan, ipe hardwood lasts 40+ years even in our climate. Cedar is a solid mid-range option. We walk through pros and cons of each during your consultation.
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-labelledby="cta-heading">
    <div class="container">
      <span class="eyebrow-label" style="color: var(--accent);">Free Estimate</span>
      <h2 id="cta-heading">Ready to Design Your Deck?</h2>
      <p>Tell Tim what you're picturing and he'll come measure the space — no charge, no obligation. Free on-site estimates anywhere in our 50-mile service area.</p>
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
