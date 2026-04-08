<?php
$pageTitle       = "Cedar Fence Installation Everett WA | Sunnyside";
$pageDescription = "Cedar privacy, horizontal slat, board-on-board & shadowbox fence installation in Everett, WA & the Puget Sound. Built to last in PNW weather. Free estimates.";
$canonicalUrl    = "https://sunnysidedecksfences.com/services/wood-fence-installation";
$ogImage         = "https://i.imgur.com/OdaTKP9.jpeg";
$currentPage     = "services";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/OdaTKP9.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://sunnysidedecksfences.com/services/wood-fence-installation#service",
      "name": "Wood Fence Installation",
      "serviceType": "Wood Fence Installation",
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
        { "@type": "City", "name": "Lynnwood, WA" },
        { "@type": "City", "name": "Bothell, WA" }
      ],
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "priceRange": "\$30 - \$75 per linear foot"
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
          "name": "How much does a cedar fence cost per linear foot in Washington state?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Cedar fence installation in the Everett area runs $30 to $75 per linear foot. A standard 6-ft cedar dog-ear privacy fence is $30 to $42 per ft. Board-on-board and shadowbox styles are $42 to $55 per ft. Modern horizontal slat fencing is the premium option at $55 to $75+ per ft. A 100-ft cedar privacy fence typically lands around $4,500 to $6,000."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a cedar fence last in the Pacific Northwest?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A properly installed Western red cedar fence lasts 20 to 25 years in the PNW. The natural oils in cedar resist rot and insects without chemical treatment, and posts set in concrete with proper drainage stay solid for decades. Annual cleaning and a refresh of stain or sealer every 3 to 5 years extends the lifespan further."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a permit to install a fence in Snohomish County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most residential fences under 6 feet tall do not require a permit in Snohomish County. Fences taller than 6 feet, fences in front yards near property lines, and fences in some HOA-governed neighborhoods may need permits or HOA approval. Sunnyside handles HOA submissions and any required permits in-house."
          }
        },
        {
          "@type": "Question",
          "name": "Why is horizontal slat fencing so popular in the Seattle area right now?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Horizontal slat cedar fencing has become the dominant modern fence style across the greater Seattle and Puget Sound area because it pairs beautifully with mid-century, modern, and craftsman homes. The clean horizontal lines feel intentional, the gaps can be tightened or opened depending on privacy needs, and the look has staying power."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sunnysidedecksfences.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://sunnysidedecksfences.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Wood Fence Installation", "item": "https://sunnysidedecksfences.com/services/wood-fence-installation" }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/OdaTKP9.jpeg');" aria-label="Wood fence installation hero">
    <div class="page-hero-content">
      <span class="eyebrow-label">Cedar · Privacy · Horizontal Slat · Picket</span>
      <h1>Cedar Fence Installation in Everett, WA</h1>
      <p>Custom-built cedar fencing across the greater Puget Sound — privacy, horizontal slat, board-on-board, and picket styles built to last in PNW weather.</p>
    </div>
  </section>

  <!-- BREADCRUMBS -->
  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/services">Services</a></li>
        <li><span aria-current="page">Wood Fence Installation</span></li>
      </ol>
    </div>
  </nav>

  <!-- ANSWER-FIRST INTRO -->
  <section class="bg-surface">
    <div class="container">
      <div class="prose-centered" style="margin: 0 auto;">
        <p style="font-size: 1.15rem;">Cedar fence installation in Everett, WA runs <strong>$30 to $75 per linear foot</strong>, with most residential projects finishing in <strong>2 to 5 days</strong>. A standard 6-ft cedar privacy fence is $30 to $42 per ft. Board-on-board and shadowbox styles are $42 to $55 per ft. Modern horizontal slat fencing is the premium option at $55 to $75+ per ft. Sunnyside Decks &amp; Fences provides wood fence installation for homeowners across Everett, Snohomish County, and the greater Puget Sound — every fence built with proper post setting, drainage, and hardware engineered for wet PNW ground.</p>
        <p>A properly installed cedar fence will last 20 to 25 years in our climate. The natural oils in Western red cedar resist rot, mildew, and insects without chemical treatment — making it the right material for the Pacific Northwest, where pressure-treated and softwood fences fail much sooner.</p>
        <p class="last-updated"><i data-lucide="calendar"></i> Last Updated: <?php echo date('F Y'); ?></p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — IMAGE RIGHT -->
  <section class="bg-alt" aria-labelledby="how-built">
    <div class="container">
      <div class="split">
        <div data-animate="fade-up">
          <span class="eyebrow-label">Built Right Below the Surface</span>
          <h2 id="how-built" class="section-title">Why Most Fences Fail in the PNW (And How Ours Don't)</h2>
          <p>The vast majority of fence failures we see in Snohomish and King County aren't caused by the boards. They're caused by what's underground. Posts set in dirt, posts set in concrete with no drainage, undersized posts, and fasteners that rust through in five years are the usual culprits.</p>
          <p>Sunnyside sets every post in concrete with proper drainage at the base, uses 4x4 or 6x6 posts depending on fence height and exposure, and fastens everything with hot-dipped galvanized or stainless hardware that won't bleed rust streaks down the boards. We also leave a small gap between board bottoms and the soil to keep wicking moisture from rotting the boards.</p>
          <p>The result is a fence that stays plumb, stays tight, and ages gracefully — instead of leaning, sagging, and needing to be replaced in eight years.</p>
        </div>
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/UG8kJLi.jpeg" alt="Horizontal slat cedar privacy fence built by Sunnyside Decks &amp; Fences along a Snohomish County backyard" width="800" height="1000" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section class="bg-surface">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>How long does a cedar fence last in the Pacific Northwest?</h2>
        <p>A properly installed Western red cedar fence lasts 20 to 25 years in the PNW. Cedar's natural oils resist rot and insects without chemical treatment, and posts set in concrete with proper drainage stay solid for decades. Annual cleaning and a refresh of stain or sealer every 3 to 5 years extends the lifespan further.</p>
      </div>
    </div>
  </section>

  <!-- STYLE COMPARISON GRID-2 -->
  <section class="bg-surface" aria-labelledby="style-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">The Two Most Popular Styles</span>
        <h2 id="style-heading" class="section-title">Traditional Privacy vs. Modern Horizontal Slat</h2>
      </div>

      <div class="grid-2" data-animate="fade-up" data-animate-stagger>
        <article class="card">
          <div class="card-icon"><i data-lucide="panel-top"></i></div>
          <h3>Cedar Privacy Fence</h3>
          <p><strong>$30 to $55 per linear foot.</strong> The PNW classic. Vertical cedar boards in dog-ear, board-on-board, or shadowbox patterns. Full privacy, traditional look, works on every style of home. The default for backyard fencing across Snohomish and King County.</p>
          <p style="font-size: 0.9rem; color: var(--text-light); margin-top: var(--space-sm);"><strong>Best for:</strong> Backyards, traditional homes, full privacy.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="grid-3x3"></i></div>
          <h3>Horizontal Slat Fence</h3>
          <p><strong>$55 to $75+ per linear foot.</strong> Clean horizontal cedar slats with intentional gaps. The dominant modern style across the greater Seattle market. Pairs beautifully with mid-century, modern, and craftsman homes. Gaps can be tight for privacy or open for airflow.</p>
          <p style="font-size: 0.9rem; color: var(--text-light); margin-top: var(--space-sm);"><strong>Best for:</strong> Modern homes, design-conscious builds, modern Seattle look.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- SPLIT-REVERSE — IMAGE LEFT -->
  <section class="bg-alt" aria-labelledby="more-styles">
    <div class="container">
      <div class="split-reverse">
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/wYAtpt4.jpeg" alt="Vertical board cedar fence along a wooded property line in the Puget Sound area" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">More Styles &amp; Custom Options</span>
          <h2 id="more-styles" class="section-title">Picket, Shadowbox, Board-on-Board &amp; Custom Heights</h2>
          <p>Beyond the two most popular styles, we install picket fencing for front yards and gardens, shadowbox patterns when you want full privacy on both sides of the fence, board-on-board for a classic premium look, and custom configurations like horizontal slat with a lattice top or mixed-height runs to follow grade.</p>
          <p>Standard fence height is 6 feet for backyards and 4 feet for front yards, but we build to whatever your lot needs. Custom heights, double-faced fences, integrated <a href="/services/gate-installation">driveway and garden gates</a>, and full property fencing are all on the table.</p>
          <p>Need a fence that ties into a new deck build? Pair it with our <a href="/services/custom-deck-building">custom deck building</a> or full <a href="/services/outdoor-living-spaces">outdoor living space</a> design.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECONDARY IMAGE -->
  <section class="bg-surface">
    <div class="container">
      <div class="img-frame" style="aspect-ratio: 16/7; max-width: 1000px; margin: 0 auto;" data-animate="fade-up">
        <img src="https://i.imgur.com/U3UlIhK.jpeg" alt="Custom horizontal slat cedar fence with lattice upper, built by Sunnyside Decks &amp; Fences" width="1000" height="438" loading="lazy">
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-alt" aria-labelledby="faq-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto;">
        <span class="eyebrow-label">Common Questions</span>
        <h2 id="faq-heading" class="section-title">Cedar Fence FAQs</h2>
      </div>

      <div class="faq-list" data-animate="fade-up">
        <details class="faq-item">
          <summary>How much does a cedar fence cost per linear foot in Washington state?</summary>
          <div class="faq-answer">
            Cedar fence installation in the Everett area runs $30 to $75 per linear foot. A standard 6-ft cedar dog-ear privacy fence is $30 to $42 per ft. Board-on-board and shadowbox styles are $42 to $55 per ft. Modern horizontal slat fencing is the premium option at $55 to $75+ per ft. A 100-ft cedar privacy fence typically lands around $4,500 to $6,000.
          </div>
        </details>

        <details class="faq-item">
          <summary>How long does a cedar fence last in the Pacific Northwest?</summary>
          <div class="faq-answer">
            A properly installed Western red cedar fence lasts 20 to 25 years in the PNW. The natural oils in cedar resist rot and insects without chemical treatment, and posts set in concrete with proper drainage stay solid for decades. Annual cleaning and a refresh of stain or sealer every 3 to 5 years extends the lifespan further.
          </div>
        </details>

        <details class="faq-item">
          <summary>Do I need a permit to install a fence in Snohomish County?</summary>
          <div class="faq-answer">
            Most residential fences under 6 feet tall do not require a permit in Snohomish County. Fences taller than 6 feet, fences in front yards near property lines, and fences in some HOA-governed neighborhoods may need permits or HOA approval. Sunnyside handles HOA submissions and any required permits in-house.
          </div>
        </details>

        <details class="faq-item">
          <summary>Why is horizontal slat fencing so popular in the Seattle area right now?</summary>
          <div class="faq-answer">
            Horizontal slat cedar fencing has become the dominant modern fence style across the greater Seattle and Puget Sound area because it pairs beautifully with mid-century, modern, and craftsman homes. The clean horizontal lines feel intentional, the gaps can be tightened or opened depending on privacy needs, and the look has staying power.
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-labelledby="cta-heading">
    <div class="container">
      <span class="eyebrow-label" style="color: var(--accent);">Free Estimate</span>
      <h2 id="cta-heading">Need a New Cedar Fence?</h2>
      <p>Tim will walk your property, talk through styles, and give you an itemized quote for materials and labor — no charge, no obligation.</p>
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
