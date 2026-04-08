<?php
$pageTitle       = "Custom Gate Installation Everett WA | Sunnyside";
$pageDescription = "Custom driveway gates, garden gates & privacy gates installed in Everett, WA & the Puget Sound. Cedar, hardwood & heavy-duty hardware. Free estimates.";
$canonicalUrl    = "https://sunnysidedecksfences.com/services/gate-installation";
$ogImage         = "https://i.imgur.com/XoaA0Ge.jpeg";
$currentPage     = "services";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/XoaA0Ge.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://sunnysidedecksfences.com/services/gate-installation#service",
      "name": "Custom Gate Installation",
      "serviceType": "Gate Installation",
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
        "priceRange": "\$600 - \$8,000+"
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
          "name": "How much does a custom wood gate cost in Everett, WA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Custom gate installation in the Everett area runs $600 to $8,000+ depending on size and type. A standard 4-ft cedar garden gate is $600 to $1,200. A 6-ft privacy gate built to match an existing fence runs $1,200 to $2,500. Custom double-swing driveway gates start around $3,500 and can exceed $8,000 for premium hardwood or automated installations."
          }
        },
        {
          "@type": "Question",
          "name": "Why do most gates eventually sag or stick?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gate sag almost always comes from one of three things: undersized hinges that can't carry the actual weight of the gate, a hinge post that wasn't engineered for the load, or a gate frame that wasn't built with proper bracing. Sunnyside specs heavy-duty hinges sized for the gate weight, sets hinge posts in oversized concrete footings, and builds gate frames with diagonal bracing that prevents sag for the life of the gate."
          }
        },
        {
          "@type": "Question",
          "name": "Can you build a gate to match my existing fence?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — most of our gate installations are designed to match an existing fence run. We match the wood species, board pattern, height, and finish so the gate disappears into the line of the fence. We can also retrofit a new gate where one didn't exist before, or replace a sagging gate without touching the surrounding fence."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sunnysidedecksfences.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://sunnysidedecksfences.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Gate Installation", "item": "https://sunnysidedecksfences.com/services/gate-installation" }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/XoaA0Ge.jpeg');" aria-label="Gate installation hero">
    <div class="page-hero-content">
      <span class="eyebrow-label">Driveway · Garden · Privacy · Custom</span>
      <h1>Custom Gate Installation in Everett, WA</h1>
      <p>Driveway gates, garden gates, privacy gates — built to match your fence and engineered with hardware that won't sag or stick.</p>
    </div>
  </section>

  <!-- BREADCRUMBS -->
  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/services">Services</a></li>
        <li><span aria-current="page">Gate Installation</span></li>
      </ol>
    </div>
  </nav>

  <!-- ANSWER-FIRST INTRO -->
  <section class="bg-surface">
    <div class="container">
      <div class="prose-centered" style="margin: 0 auto;">
        <p style="font-size: 1.15rem;">Custom gate installation in Everett, WA runs <strong>$600 to $8,000+</strong> depending on size and complexity. A standard 4-ft cedar garden gate is $600 to $1,200. A 6-ft privacy gate built to match an existing fence runs $1,200 to $2,500. Custom double-swing driveway gates start around $3,500 and can exceed $8,000 for premium hardwood or automated installations. Sunnyside Decks &amp; Fences provides custom gate installation for homeowners across Everett, Snohomish County, and the greater Puget Sound — every gate built with hardware engineered to outlast the rest of the fence.</p>
        <p>A good gate is one of those things you only think about when it's bad. When it sags, sticks, drags through the dirt, or rattles in the wind, it becomes the most annoying thing in your yard. We build gates that don't do any of that — for the next twenty years.</p>
        <p class="last-updated"><i data-lucide="calendar"></i> Last Updated: <?php echo date('F Y'); ?></p>
      </div>
    </div>
  </section>

  <!-- SPLIT-REVERSE — IMAGE LEFT -->
  <section class="bg-alt" aria-labelledby="hardware-heading">
    <div class="container">
      <div class="split-reverse">
        <div>
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/ElkJsDl.jpeg" alt="Custom cedar double swing gate with vertical panels, built by Sunnyside Decks &amp; Fences" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">The Real Reason Gates Fail</span>
          <h2 id="hardware-heading" class="section-title">It's Almost Never the Wood</h2>
          <p>When a gate starts to sag or stick after a few years, the wood is almost never the problem. It's one of three things: undersized hinges that can't carry the actual weight of the gate, a hinge post that wasn't engineered for the load, or a gate frame that wasn't built with proper diagonal bracing.</p>
          <p>We size hinges to the actual weight of each gate (not a generic spec), set hinge posts in oversized concrete footings with proper drainage, and build every gate frame with diagonal bracing that prevents sag for the life of the gate. Heavy-duty drop rods, latches engineered for daily use, and stainless or hot-dipped galvanized hardware on every connection.</p>
          <p>It costs more to build a gate this way. It also means we get fewer warranty calls — and fewer customers calling six years in to ask why their cheap gate is dragging on the ground.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES LIST -->
  <section class="bg-surface" aria-labelledby="features-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">What Every Sunnyside Gate Includes</span>
        <h2 id="features-heading" class="section-title">Built for Daily Use, Engineered to Last</h2>
      </div>

      <div class="grid-3" data-animate="fade-up" data-animate-stagger>
        <article class="card">
          <div class="card-icon"><i data-lucide="shield"></i></div>
          <h3>Heavy-Duty Hardware</h3>
          <p>Hinges sized to the actual weight of the gate, not a generic spec. Stainless or hot-dipped galvanized fasteners. Heavy-duty latches engineered for daily use without rattling or wearing out.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="palette"></i></div>
          <h3>Custom-Matched to Your Fence</h3>
          <p>Same wood species, same board pattern, same finish as your existing fence. The goal is for the gate to disappear into the fence line — not look like a different project bolted on.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="anchor"></i></div>
          <h3>Bracing That Actually Works</h3>
          <p>Diagonal bracing engineered to fight sag through every season. Posts set in oversized concrete footings with proper drainage. The frame stays square for the life of the gate.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="lock"></i></div>
          <h3>Security Features</h3>
          <p>Optional drop rods, deadbolt latches, key locks, and integration with smart locks or keypad entry systems. Privacy gates can be built tall enough to fully block sightlines from the street.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="ruler"></i></div>
          <h3>Custom Sizing</h3>
          <p>Built to fit the opening you actually have — not a stock width. Single swing, double swing, sliding, or pedestrian configurations. Standard heights or oversized for full privacy.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="tree-pine"></i></div>
          <h3>Cedar &amp; Hardwood Options</h3>
          <p>Western red cedar is the default. Hardwood and ipe options available for premium builds and waterfront properties where durability is critical.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section class="bg-surface">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>Can you build a gate to match my existing fence?</h2>
        <p>Yes — most of our gate installations are designed to match an existing fence run. We match the wood species, board pattern, height, and finish so the gate disappears into the line of the fence. We can also retrofit a new gate where one didn't exist before, or replace a sagging gate without touching the surrounding fence.</p>
      </div>
    </div>
  </section>

  <!-- SPLIT — IMAGE RIGHT -->
  <section class="bg-alt" aria-labelledby="driveway-heading">
    <div class="container">
      <div class="split">
        <div data-animate="fade-up">
          <span class="eyebrow-label">Driveway Gates</span>
          <h2 id="driveway-heading" class="section-title">Single Swing, Double Swing, Sliding</h2>
          <p>Driveway gates are a different animal. Bigger spans, heavier weight, more wind load, and more wear-and-tear over the lifetime of the gate. We build single swing, double swing, and sliding driveway gates in custom widths up to about 16 feet, with engineered hardware sized to the load.</p>
          <p>Most driveway gates we install are cedar or hardwood with vertical or horizontal slat panels — designed to match the rest of your fence run for visual consistency. We can also coordinate with electricians for automated openers, keypad entry, and smart-home integration.</p>
          <p>Pair a new gate with our <a href="/services/wood-fence-installation">cedar fence installation</a>, integrate it into a larger <a href="/services/outdoor-living-spaces">outdoor living build</a>, or coordinate with a new <a href="/services/custom-deck-building">custom deck build</a> for a fully cohesive yard project.</p>
        </div>
        <div>
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/cFo2xyI.jpeg" alt="Close-up view of custom cedar driveway gate panels installed by Sunnyside Decks &amp; Fences" width="800" height="1000" loading="lazy">
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
        <h2 id="faq-heading" class="section-title">Gate Installation FAQs</h2>
      </div>

      <div class="faq-list" data-animate="fade-up">
        <details class="faq-item">
          <summary>How much does a custom wood gate cost in Everett, WA?</summary>
          <div class="faq-answer">
            Custom gate installation in the Everett area runs $600 to $8,000+ depending on size and type. A standard 4-ft cedar garden gate is $600 to $1,200. A 6-ft privacy gate built to match an existing fence runs $1,200 to $2,500. Custom double-swing driveway gates start around $3,500 and can exceed $8,000 for premium hardwood or automated installations.
          </div>
        </details>

        <details class="faq-item">
          <summary>Why do most gates eventually sag or stick?</summary>
          <div class="faq-answer">
            Gate sag almost always comes from one of three things: undersized hinges that can't carry the actual weight of the gate, a hinge post that wasn't engineered for the load, or a gate frame that wasn't built with proper bracing. Sunnyside specs heavy-duty hinges sized for the gate weight, sets hinge posts in oversized concrete footings, and builds gate frames with diagonal bracing that prevents sag for the life of the gate.
          </div>
        </details>

        <details class="faq-item">
          <summary>Can you build a gate to match my existing fence?</summary>
          <div class="faq-answer">
            Yes — most of our gate installations are designed to match an existing fence run. We match the wood species, board pattern, height, and finish so the gate disappears into the line of the fence. We can also retrofit a new gate where one didn't exist before, or replace a sagging gate without touching the surrounding fence.
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-labelledby="cta-heading">
    <div class="container">
      <span class="eyebrow-label" style="color: var(--accent);">Free Estimate</span>
      <h2 id="cta-heading">Need a Gate That Actually Works?</h2>
      <p>Whether it's a garden gate replacement or a custom 16-ft driveway gate, Tim will measure the opening and put together a detailed quote — no charge.</p>
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
