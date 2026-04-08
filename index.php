<?php
$pageTitle       = "Custom Decks & Fences in Everett, WA | Sunnyside";
$pageDescription = "Family-owned deck & fence builders in Everett, WA. Custom decks, composite decking, cedar fences & pergolas across the Puget Sound. Free estimates.";
$canonicalUrl    = "https://sunnysidedecksfences.com/";
$ogImage         = "https://i.imgur.com/mYU4D7z.jpeg";
$currentPage     = "home";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/mYU4D7z.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "https://sunnysidedecksfences.com/#business",
      "name": "Sunnyside Decks & Fences",
      "alternateName": "Lapatsin LLC",
      "image": "https://i.imgur.com/aKknI6J.png",
      "logo": "https://i.imgur.com/aKknI6J.png",
      "url": "https://sunnysidedecksfences.com/",
      "telephone": "+1-425-737-2259",
      "email": "timlapatsin@yahoo.com",
      "priceRange": "\$\$-\$\$\$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "6125 Sycamore Pl",
        "addressLocality": "Everett",
        "addressRegion": "WA",
        "postalCode": "98203",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 47.9790,
        "longitude": -122.2021
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "09:00",
          "closes": "18:00"
        }
      ],
      "areaServed": [
        { "@type": "City", "name": "Everett, WA" },
        { "@type": "City", "name": "Seattle, WA" },
        { "@type": "City", "name": "Bellevue, WA" },
        { "@type": "City", "name": "Marysville, WA" },
        { "@type": "City", "name": "Lake Stevens, WA" },
        { "@type": "City", "name": "Bothell, WA" },
        { "@type": "City", "name": "Lynnwood, WA" },
        { "@type": "City", "name": "Edmonds, WA" },
        { "@type": "City", "name": "Mukilteo, WA" },
        { "@type": "City", "name": "Kirkland, WA" },
        { "@type": "City", "name": "Redmond, WA" },
        { "@type": "City", "name": "Snohomish County, WA" }
      ],
      "sameAs": [
        "https://www.instagram.com/lapatsin_llc/",
        "https://share.google/DzdjpCErMrTdlOsXm"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "27"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://sunnysidedecksfences.com/#website",
      "url": "https://sunnysidedecksfences.com/",
      "name": "Sunnyside Decks & Fences",
      "publisher": { "@id": "https://sunnysidedecksfences.com/#business" },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://sunnysidedecksfences.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does a new deck cost in Everett, WA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Deck costs in the Everett area typically range from \$15,000 to \$45,000+ depending on size, materials, and complexity. Composite decking like Trex runs higher than pressure-treated lumber but requires far less maintenance over time. We provide free on-site estimates with transparent, itemized pricing."
          }
        },
        {
          "@type": "Question",
          "name": "What type of decking material is best for the Pacific Northwest?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Composite and hardwood (ipe) are the top choices for PNW weather — they resist moisture, rot, and mold better than standard pressure-treated wood. Cedar is a solid mid-range option with natural weather resistance. We will walk you through the pros and cons of each during your consultation."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a permit to build a deck or fence in Snohomish County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most deck projects over 30 inches above grade require a building permit in Snohomish County. Fence permits depend on height and location. Sunnyside handles the full permitting process for you so nothing holds up your project."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to build a deck?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most residential decks take 1 to 3 weeks from start to finish, depending on size and complexity. Multi-level builds or projects requiring permits may take longer. We provide a clear timeline before work begins and keep you updated throughout."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer free estimates?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — every project starts with a free on-site consultation where Tim evaluates your space, discusses your vision, and provides a detailed estimate with no obligation."
          }
        }
      ]
    }
  ]
}
JSON;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

  <!-- ============ HERO ============ -->
  <section class="hero" style="background-image: url('https://i.imgur.com/mYU4D7z.jpeg');" aria-label="Hero">
    <div class="hero-content">
      <span class="eyebrow-label">Family-Owned · Everett, WA</span>
      <h1>Custom Decks &amp; Fences Built for the Pacific Northwest</h1>
      <p class="hero-subhead">Decks &bull; Fences &bull; Pergolas &mdash; Serving Everett &amp; the Greater Puget Sound</p>
      <div class="hero-cta">
        <a href="/contact" class="btn-primary">
          <i data-lucide="calendar-check"></i>
          Get a Free Estimate
        </a>
        <a href="#gallery" class="btn-secondary">
          <i data-lucide="image"></i>
          View Our Work
        </a>
      </div>
      <div class="hero-trust">
        <a href="tel:+14257372259" class="hero-phone">
          <i data-lucide="phone"></i>
          (425) 737-2259
        </a>
      </div>
    </div>
  </section>

  <!-- ============ TRUST BADGE STRIP ============ -->
  <section class="trust-strip" aria-label="Trust signals">
    <div class="trust-strip-inner">
      <div class="trust-item">
        <i data-lucide="heart-handshake"></i>
        Family-Owned &amp; Operated
      </div>
      <div class="trust-item">
        <i data-lucide="shield-check"></i>
        Licensed &amp; Insured
      </div>
      <div class="trust-item">
        <i data-lucide="calculator"></i>
        Free Estimates
      </div>
      <div class="trust-item">
        <i data-lucide="map-pin"></i>
        50-Mile Service Area
      </div>
    </div>
  </section>

  <!-- ============ SERVICES GRID ============ -->
  <section class="bg-surface" aria-labelledby="services-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">What We Build</span>
        <h2 id="services-heading" class="section-title">Decks, Fences &amp; Outdoor Living, Built to Last</h2>
        <p class="section-subtitle" style="margin-inline:auto;">Sunnyside Decks &amp; Fences is a licensed and insured deck and fence builder based in Everett, Washington. From custom multi-level decks to cedar privacy fences, every project is designed for the Pacific Northwest climate and finished to craftsman standards.</p>
      </div>

      <div class="grid-3" data-animate="fade-up" data-animate-stagger>
        <article class="card">
          <div class="card-icon"><i data-lucide="hammer"></i></div>
          <h3>Custom Deck Building</h3>
          <p>Fully custom residential deck design and construction — single-level, multi-level, wraparound, and rooftop builds tailored to your home and lot.</p>
          <a href="/services/custom-deck-building" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="layers"></i></div>
          <h3>Composite Decking</h3>
          <p>Trex, TimberTech, and PVC composite deck installation — low-maintenance, fade-resistant, and built to handle PNW rain year-round.</p>
          <a href="/services/composite-decking" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="tree-pine"></i></div>
          <h3>Wood Decking</h3>
          <p>Cedar, redwood, ipe hardwood, and pressure-treated lumber decks — natural beauty with the structural integrity to last for decades.</p>
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
          <p>Pergolas, covered patios, gazebos, and screened-in decks — extend your usable outdoor season through Puget Sound's wet months.</p>
          <a href="/services/covered-decks-pergolas" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="panel-top"></i></div>
          <h3>Wood Fence Installation</h3>
          <p>Cedar privacy, horizontal slat, board-on-board, picket, and shadowbox fencing — built straight, plumb, and built to last.</p>
          <a href="/services/wood-fence-installation" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="door-open"></i></div>
          <h3>Gate Installation</h3>
          <p>Driveway gates, garden gates, privacy gates, and fully custom gate design — engineered hardware that won't sag or stick.</p>
          <a href="/services/gate-installation" class="card-link">Learn More</a>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="sun"></i></div>
          <h3>Outdoor Living Spaces</h3>
          <p>Multi-level decks, integrated deck lighting, and complete backyard design-build — everything you need for an outdoor retreat at home.</p>
          <a href="/services/outdoor-living-spaces" class="card-link">Learn More</a>
        </article>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- ============ WHY SUNNYSIDE — SPLIT ============ -->
  <section class="bg-alt" aria-labelledby="why-heading">
    <div class="container">
      <div class="split">
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/SFU9Ao3.jpeg" alt="Multi-level ipe hardwood deck with hot tub and water view, built by Sunnyside Decks &amp; Fences in Snohomish County, WA" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Why Sunnyside</span>
          <h2 id="why-heading" class="section-title">Built by a Family Crew That Treats Your Home Like Theirs</h2>
          <p>Homeowners across Snohomish and King County hire Sunnyside Decks &amp; Fences because every project gets owner-level attention from start to finish. Tim Lapatsin is on-site daily — there's no subcontracted crew, no rotating faces, and no surprises on the invoice.</p>

          <ul class="icon-list">
            <li>
              <span class="list-icon"><i data-lucide="cloud-rain"></i></span>
              <div>
                <strong>Pacific Northwest Expertise</strong>
                Materials and framing techniques chosen specifically for PNW rain, freeze cycles, and moss pressure.
              </div>
            </li>
            <li>
              <span class="list-icon"><i data-lucide="badge-check"></i></span>
              <div>
                <strong>Premium Materials Only</strong>
                Trex, TimberTech, ipe hardwood, and Western red cedar — never bargain lumber that fails in five years.
              </div>
            </li>
            <li>
              <span class="list-icon"><i data-lucide="receipt"></i></span>
              <div>
                <strong>Transparent, Itemized Pricing</strong>
                Detailed estimates with no hidden fees, no change-order games, and no high-pressure sales tactics.
              </div>
            </li>
            <li>
              <span class="list-icon"><i data-lucide="user-check"></i></span>
              <div>
                <strong>Owner On-Site Daily</strong>
                Tim personally supervises every build — you'll always know who's working on your home.
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ STAT BAR ============ -->
  <section class="stat-bar" aria-label="Company stats">
    <div class="stat-bar-inner">
      <div class="stat-counter" data-animate="fade-up">
        <span class="stat-number" data-counter="500" data-suffix="+">0</span>
        <span class="stat-label">Projects Completed</span>
      </div>
      <div class="stat-counter" data-animate="fade-up">
        <span class="stat-number" data-counter="15" data-suffix="+">0</span>
        <span class="stat-label">Years Combined Experience</span>
      </div>
      <div class="stat-counter" data-animate="fade-up">
        <span class="stat-number" data-counter="50" data-suffix="-Mile">0</span>
        <span class="stat-label">Service Radius</span>
      </div>
      <div class="stat-counter" data-animate="fade-up">
        <span class="stat-number" data-counter="100" data-suffix="%">0</span>
        <span class="stat-label">Owner-Supervised Jobs</span>
      </div>
    </div>
  </section>

  <!-- ============ OUR PROCESS — SPLIT REVERSE ============ -->
  <section class="bg-surface" aria-labelledby="process-heading">
    <div class="container">
      <div class="split-reverse">
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/ZCLIwMP.jpeg" alt="Deck framing and construction in progress overlooking the water — Sunnyside Decks &amp; Fences crew on-site in the Puget Sound area" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Our Process</span>
          <h2 id="process-heading" class="section-title">From Concept to Completion</h2>
          <p>Every Sunnyside project follows the same straightforward four-step process — designed to keep you informed at every stage and your project on schedule.</p>

          <ol class="process-steps">
            <li>
              <div>
                <strong>Free On-Site Consultation</strong>
                <p>Tim visits your property, takes measurements, and listens to what you want before recommending anything.</p>
              </div>
            </li>
            <li>
              <div>
                <strong>Custom Design &amp; Material Selection</strong>
                <p>We walk you through decking, railing, and fencing options matched to your budget and PNW conditions.</p>
              </div>
            </li>
            <li>
              <div>
                <strong>Professional Build</strong>
                <p>Owner on-site daily. Permits handled. Clean job site. Clear communication from frame-up to final board.</p>
              </div>
            </li>
            <li>
              <div>
                <strong>Final Walkthrough &amp; Warranty</strong>
                <p>We walk every inch of the project with you and back our craftsmanship with a written warranty.</p>
              </div>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- ============ WORK GALLERY ============ -->
  <section id="gallery" class="bg-alt" aria-labelledby="gallery-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">Our Work</span>
        <h2 id="gallery-heading" class="section-title">Recent Builds Across the Puget Sound</h2>
        <p class="section-subtitle" style="margin-inline:auto;">A small sample of recent decks, fences, pergolas, and gates Sunnyside has built for homeowners across Snohomish and King County.</p>
      </div>

      <div class="gallery-asym" data-animate="fade-up">
        <a class="gallery-item large" href="https://i.imgur.com/4wTTC6a.jpeg" target="_blank" rel="noopener" aria-label="Modern two-level ipe hardwood deck">
          <img src="https://i.imgur.com/4wTTC6a.jpeg" alt="Modern two-level ipe hardwood deck with cable railing built by Sunnyside Decks &amp; Fences" width="800" height="600" loading="lazy">
        </a>
        <a class="gallery-item" href="https://i.imgur.com/5MnRDrC.jpeg" target="_blank" rel="noopener" aria-label="Finished ipe deck with cable railing">
          <img src="https://i.imgur.com/5MnRDrC.jpeg" alt="Finished ipe hardwood deck with stainless cable railing system in Snohomish County" width="600" height="400" loading="lazy">
        </a>
        <a class="gallery-item" href="https://i.imgur.com/lrcqhLV.jpeg" target="_blank" rel="noopener" aria-label="Deck with polycarbonate pergola roof">
          <img src="https://i.imgur.com/lrcqhLV.jpeg" alt="Custom deck with polycarbonate-roof pergola for year-round PNW use" width="600" height="400" loading="lazy">
        </a>
        <a class="gallery-item tall" href="https://i.imgur.com/2MhXPL1.jpeg" target="_blank" rel="noopener" aria-label="Freestanding gable pergola">
          <img src="https://i.imgur.com/2MhXPL1.jpeg" alt="Freestanding gable-roof cedar pergola in an Everett-area backyard" width="600" height="800" loading="lazy">
        </a>
        <a class="gallery-item wide" href="https://i.imgur.com/1FqhBro.jpeg" target="_blank" rel="noopener" aria-label="Tall horizontal slat cedar fence">
          <img src="https://i.imgur.com/1FqhBro.jpeg" alt="Tall horizontal slat cedar privacy fence built by Sunnyside Decks &amp; Fences" width="800" height="500" loading="lazy">
        </a>
        <a class="gallery-item" href="https://i.imgur.com/XoaA0Ge.jpeg" target="_blank" rel="noopener" aria-label="Horizontal slat driveway gate">
          <img src="https://i.imgur.com/XoaA0Ge.jpeg" alt="Custom horizontal slat cedar driveway gate installation" width="600" height="400" loading="lazy">
        </a>
        <a class="gallery-item" href="https://i.imgur.com/8ew65yq.jpeg" target="_blank" rel="noopener" aria-label="Two-story deck and balcony">
          <img src="https://i.imgur.com/8ew65yq.jpeg" alt="Two-story residential deck and balcony build in the greater Seattle area" width="600" height="400" loading="lazy">
        </a>
        <a class="gallery-item" href="https://i.imgur.com/0XPAb7O.jpeg" target="_blank" rel="noopener" aria-label="Covered patio with stone columns">
          <img src="https://i.imgur.com/0XPAb7O.jpeg" alt="Covered patio with stone columns and timber roof, designed for PNW rain" width="600" height="400" loading="lazy">
        </a>
        <a class="gallery-item" href="https://i.imgur.com/GVgyzHY.jpeg" target="_blank" rel="noopener" aria-label="Composite deck with cable railing">
          <img src="https://i.imgur.com/GVgyzHY.jpeg" alt="Composite deck installation with stainless cable railing in Snohomish County" width="600" height="400" loading="lazy">
        </a>
        <a class="gallery-item wide" href="https://i.imgur.com/ElkJsDl.jpeg" target="_blank" rel="noopener" aria-label="Cedar double gate">
          <img src="https://i.imgur.com/ElkJsDl.jpeg" alt="Custom cedar double gate matched to a horizontal slat fence" width="800" height="500" loading="lazy">
        </a>
      </div>
    </div>
  </section>

  <!-- ============ ABOUT SNIPPET — SPLIT ============ -->
  <section class="bg-surface" aria-labelledby="about-snippet-heading">
    <div class="container">
      <div class="split">
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/BatIFR5.jpeg" alt="Aerial view of an Everett craftsman home showing custom deck and stair build by Sunnyside Decks &amp; Fences" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">About Sunnyside</span>
          <h2 id="about-snippet-heading" class="section-title">Decks, Fences, Family.</h2>
          <p>Sunnyside Decks &amp; Fences — formerly Lapatsin, LLC — is a family-run deck and fence builder based in Everett, Washington. Founded by Tim Lapatsin, the company brings years of hands-on carpentry experience to every project across the Puget Sound.</p>
          <p>Tim and his crew handle projects of every scale with the kind of personal attention and craftsmanship larger contractors can't match. Their motto says it all: every client's home gets treated like their own.</p>
          <p style="margin-top: var(--space-lg);">
            <a href="/about" class="btn-outline-primary">
              Learn More About Us
              <i data-lucide="arrow-right"></i>
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- ============ FAQ ============ -->
  <section class="bg-alt" aria-labelledby="faq-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto;">
        <span class="eyebrow-label">Common Questions</span>
        <h2 id="faq-heading" class="section-title">What Homeowners Ask Us Most</h2>
        <p class="section-subtitle" style="margin-inline:auto;">Real questions we hear on consultations across Everett and the greater Puget Sound.</p>
      </div>

      <div class="faq-list" data-animate="fade-up">
        <details class="faq-item">
          <summary>How much does a new deck cost in Everett, WA?</summary>
          <div class="faq-answer">
            Deck costs in the Everett area typically range from $15,000 to $45,000+ depending on size, materials, and complexity. Composite decking like Trex runs higher than pressure-treated lumber but requires far less maintenance over time. We provide free on-site estimates with transparent, itemized pricing.
          </div>
        </details>

        <details class="faq-item">
          <summary>What type of decking material is best for the Pacific Northwest?</summary>
          <div class="faq-answer">
            Composite and hardwood (ipe) are the top choices for PNW weather — they resist moisture, rot, and mold better than standard pressure-treated wood. Cedar is a solid mid-range option with natural weather resistance. We'll walk you through the pros and cons of each during your consultation.
          </div>
        </details>

        <details class="faq-item">
          <summary>Do I need a permit to build a deck or fence in Snohomish County?</summary>
          <div class="faq-answer">
            Most deck projects over 30 inches above grade require a building permit in Snohomish County. Fence permits depend on height and location. Sunnyside handles the full permitting process for you so nothing holds up your project.
          </div>
        </details>

        <details class="faq-item">
          <summary>How long does it take to build a deck?</summary>
          <div class="faq-answer">
            Most residential decks take 1–3 weeks from start to finish, depending on size and complexity. Multi-level builds or projects requiring permits may take longer. We provide a clear timeline before work begins and keep you updated throughout.
          </div>
        </details>

        <details class="faq-item">
          <summary>Do you offer free estimates?</summary>
          <div class="faq-answer">
            Yes — every project starts with a free on-site consultation where Tim evaluates your space, discusses your vision, and provides a detailed estimate with no obligation.
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- ============ CLOSING CTA BANNER ============ -->
  <section class="cta-banner" aria-labelledby="cta-heading">
    <div class="container">
      <span class="eyebrow-label" style="color: var(--accent);">Free Consultation</span>
      <h2 id="cta-heading">Ready to Build Your Dream Outdoor Space?</h2>
      <p>Get a free estimate from Everett's family-owned deck and fence builders. Tim will visit your property, walk the project with you, and put together a detailed quote — no obligation.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">
          <i data-lucide="calendar-check"></i>
          Schedule Your Free Consultation
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
