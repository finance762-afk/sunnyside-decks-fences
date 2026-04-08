<?php
$pageTitle       = "Pergola & Covered Patio Builder Everett WA | Sunnyside";
$pageDescription = "Custom pergolas, covered patios, gazebos & screened-in decks in Everett, WA & the Puget Sound. Extend your outdoor season through PNW rain. Free estimates.";
$canonicalUrl    = "https://sunnysidedecksfences.com/services/covered-decks-pergolas";
$ogImage         = "https://i.imgur.com/2MhXPL1.jpeg";
$currentPage     = "services";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/2MhXPL1.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://sunnysidedecksfences.com/services/covered-decks-pergolas#service",
      "name": "Pergola and Covered Deck Construction",
      "serviceType": "Pergola and Covered Patio Construction",
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
        { "@type": "City", "name": "Lake Stevens, WA" },
        { "@type": "City", "name": "Marysville, WA" }
      ],
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "priceRange": "\$8,000 - \$45,000+"
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
          "name": "How much does a pergola or covered patio cost in Everett, WA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pergola and covered patio costs in the Everett area run $8,000 to $45,000+. A simple 12x12 cedar pergola starts around $8,000 to $12,000. A larger gabled pergola with a polycarbonate or shingled roof runs $18,000 to $30,000. Fully covered patios with stone columns, integrated lighting, and finished ceilings can exceed $45,000."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a permit for a pergola or covered patio in Snohomish County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most attached covered structures require a building permit in Snohomish County because they affect the existing roof line and structural load. Freestanding pergolas under 200 sq ft sometimes qualify as accessory structures and don't require permits, but it depends on the specific city. Sunnyside handles permitting in-house."
          }
        },
        {
          "@type": "Question",
          "name": "What roofing material is best for a covered patio in the Pacific Northwest?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For maximum light, polycarbonate panels are popular — they let sun through while blocking rain and UV. For a fully sealed look that matches the house, shingled or metal panel roofs are the standard. Tongue-and-groove cedar ceilings on the underside add a finished look. We pick roofing based on the rest of the house and how dark you want the covered space to feel."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sunnysidedecksfences.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://sunnysidedecksfences.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Covered Decks & Pergolas", "item": "https://sunnysidedecksfences.com/services/covered-decks-pergolas" }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/2MhXPL1.jpeg');" aria-label="Pergola and covered deck hero">
    <div class="page-hero-content">
      <span class="eyebrow-label">Pergolas · Covered Patios · Gazebos</span>
      <h1>Pergola &amp; Covered Patio Builder in Everett, WA</h1>
      <p>Extend your outdoor season through Pacific Northwest rain with a custom-built pergola, covered patio, or gazebo from Sunnyside.</p>
    </div>
  </section>

  <!-- BREADCRUMBS -->
  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/services">Services</a></li>
        <li><span aria-current="page">Covered Decks &amp; Pergolas</span></li>
      </ol>
    </div>
  </nav>

  <!-- ANSWER-FIRST INTRO -->
  <section class="bg-surface">
    <div class="container">
      <div class="prose-centered" style="margin: 0 auto;">
        <p style="font-size: 1.15rem;">Pergolas and covered patios in Everett, WA run <strong>$8,000 to $45,000+</strong>, with most builds finishing in <strong>1 to 2 weeks</strong>. A 12x12 cedar pergola starts around $8,000 to $12,000. A gabled pergola with a polycarbonate or shingled roof runs $18,000 to $30,000. Fully covered patios with stone columns, integrated lighting, and finished tongue-and-groove ceilings can exceed $45,000. Sunnyside Decks &amp; Fences provides pergola and covered patio construction for homeowners across Everett, Snohomish County, and the greater Puget Sound.</p>
        <p>If you live in the PNW, a covered structure isn't a luxury — it's the difference between using your outdoor space three months a year and using it nine. The right cover keeps the rain off your furniture, the deck dry underneath, and the grill protected through every season.</p>
        <p class="last-updated"><i data-lucide="calendar"></i> Last Updated: <?php echo date('F Y'); ?></p>
      </div>
    </div>
  </section>

  <!-- SPLIT-REVERSE — IMAGE LEFT -->
  <section class="bg-alt" aria-labelledby="why-cover">
    <div class="container">
      <div class="split-reverse">
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/4tROy9r.jpeg" alt="Interior view of a custom covered patio with skylights, built by Sunnyside Decks &amp; Fences in the Puget Sound area" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Built for the Wet Season</span>
          <h2 id="why-cover" class="section-title">Outdoor Space You Can Actually Use in the Rain</h2>
          <p>Most homeowners we work with already have a deck — they just can't use it from October through May. A covered structure changes that. With the right design, you get a usable outdoor room that handles winter dinners, kids playing in the rain, weekend coffee, and the occasional hot tub session through every PNW month.</p>
          <p>Sunnyside builds pergolas and covered patios with the same craftsman attention as our deck builds: post-and-beam framing, proper flashing where the structure meets the house, finished ceilings if you want them, and lighting and ceiling fans wired in by a licensed electrician we work with regularly. Stone column bases, exposed timber beams, and integrated skylights are all on the table.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section class="bg-surface">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>What roofing material is best for a covered patio in the PNW?</h2>
        <p>For maximum light, polycarbonate panels are popular — they let sun through while blocking rain and UV. For a fully sealed look that matches the house, shingled or metal panel roofs are the standard. Tongue-and-groove cedar ceilings on the underside add a finished look. We pick roofing based on the rest of the house and how dark you want the covered space to feel.</p>
      </div>
    </div>
  </section>

  <!-- TYPE GRID-3 -->
  <section class="bg-surface" aria-labelledby="cover-types">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">Three Ways to Cover It</span>
        <h2 id="cover-types" class="section-title">Pergola, Covered Patio, or Gazebo?</h2>
      </div>

      <div class="grid-3" data-animate="fade-up" data-animate-stagger>
        <article class="card">
          <div class="card-icon"><i data-lucide="grid-2x2"></i></div>
          <h3>Pergolas</h3>
          <p>Open-beam structures with optional polycarbonate roof. Provides shade, structure, and overhead style without fully enclosing the space. Best for partial coverage and modern outdoor rooms.</p>
          <p style="font-size: 0.9rem; color: var(--text-light); margin-top: var(--space-sm);"><strong>Starting at:</strong> $8,000 (12x12 cedar)</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="home"></i></div>
          <h3>Covered Patios</h3>
          <p>Fully roofed extensions of the house — typically with shingled or metal roofs that match existing roofing. Often include T&amp;G cedar ceilings, recessed lighting, and ceiling fans.</p>
          <p style="font-size: 0.9rem; color: var(--text-light); margin-top: var(--space-sm);"><strong>Starting at:</strong> $18,000</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="hexagon"></i></div>
          <h3>Gazebos &amp; Screened Decks</h3>
          <p>Freestanding gabled gazebos and fully screened-in decks. Bug-proof in summer, rain-proof in fall, and a true outdoor room year-round. Includes screen door, framed openings, and finished interior.</p>
          <p style="font-size: 0.9rem; color: var(--text-light); margin-top: var(--space-sm);"><strong>Starting at:</strong> $15,000</p>
        </article>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- SPLIT — IMAGE RIGHT -->
  <section class="bg-alt" aria-labelledby="craftsman-detail">
    <div class="container">
      <div class="split">
        <div data-animate="fade-up">
          <span class="eyebrow-label">Craftsman Details</span>
          <h2 id="craftsman-detail" class="section-title">Stone Columns, Timber Beams, Finished Ceilings</h2>
          <p>The difference between a pergola that looks like it came from a kit and one that looks like it was always part of the house comes down to detail. Stone-wrapped column bases anchor the structure visually. Exposed timber beams give it scale. A finished tongue-and-groove cedar ceiling on the underside makes the space feel like an outdoor room, not a parking cover.</p>
          <p>We can also integrate skylights, recessed lighting, ceiling fans, electrical outlets, and even ductless heaters if you want to use the space year-round. Pair a covered patio with a <a href="/services/custom-deck-building">custom deck build</a>, integrate it into a full <a href="/services/outdoor-living-spaces">outdoor living space</a>, or finish the edges with <a href="/services/deck-railings">code-compliant railings</a>.</p>
        </div>
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/0XPAb7O.jpeg" alt="Attached covered patio with stone columns and timber beams built by Sunnyside Decks &amp; Fences in Snohomish County" width="800" height="1000" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-surface" aria-labelledby="faq-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto;">
        <span class="eyebrow-label">Common Questions</span>
        <h2 id="faq-heading" class="section-title">Pergola &amp; Covered Patio FAQs</h2>
      </div>

      <div class="faq-list" data-animate="fade-up">
        <details class="faq-item">
          <summary>How much does a pergola or covered patio cost in Everett, WA?</summary>
          <div class="faq-answer">
            Pergola and covered patio costs in the Everett area run $8,000 to $45,000+. A simple 12x12 cedar pergola starts around $8,000 to $12,000. A larger gabled pergola with a polycarbonate or shingled roof runs $18,000 to $30,000. Fully covered patios with stone columns, integrated lighting, and finished ceilings can exceed $45,000.
          </div>
        </details>

        <details class="faq-item">
          <summary>Do I need a permit for a pergola or covered patio in Snohomish County?</summary>
          <div class="faq-answer">
            Most attached covered structures require a building permit in Snohomish County because they affect the existing roof line and structural load. Freestanding pergolas under 200 sq ft sometimes qualify as accessory structures and don't require permits, but it depends on the specific city. Sunnyside handles permitting in-house.
          </div>
        </details>

        <details class="faq-item">
          <summary>What roofing material is best for a covered patio in the Pacific Northwest?</summary>
          <div class="faq-answer">
            For maximum light, polycarbonate panels are popular — they let sun through while blocking rain and UV. For a fully sealed look that matches the house, shingled or metal panel roofs are the standard. Tongue-and-groove cedar ceilings on the underside add a finished look. We pick roofing based on the rest of the house and how dark you want the covered space to feel.
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-labelledby="cta-heading">
    <div class="container">
      <span class="eyebrow-label" style="color: var(--accent);">Free Estimate</span>
      <h2 id="cta-heading">Want to Use Your Yard Year-Round?</h2>
      <p>Tim will walk the space, sketch out a layout, and put together an itemized quote for your pergola or covered patio — no charge.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">
          <i data-lucide="calendar-check"></i>
          Get a Free Estimate
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
