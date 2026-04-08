<?php
$pageTitle       = "About Sunnyside Decks & Fences | Everett, WA";
$pageDescription = "Family-run deck & fence builder in Everett, WA, founded by Tim Lapatsin. Owner on every job, premium PNW materials, transparent pricing. Free estimates.";
$canonicalUrl    = "https://sunnysidedecksfences.com/about";
$ogImage         = "https://i.imgur.com/V2WV8Zg.jpeg";
$currentPage     = "about";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/V2WV8Zg.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://sunnysidedecksfences.com/#organization",
      "name": "Sunnyside Decks & Fences",
      "alternateName": "Lapatsin LLC",
      "url": "https://sunnysidedecksfences.com/",
      "logo": "https://i.imgur.com/aKknI6J.png",
      "image": "https://i.imgur.com/V2WV8Zg.jpeg",
      "telephone": "+1-425-737-2259",
      "email": "timlapatsin@yahoo.com",
      "founder": {
        "@type": "Person",
        "@id": "https://sunnysidedecksfences.com/about#tim",
        "name": "Tim Lapatsin",
        "jobTitle": "Founder & Lead Builder",
        "worksFor": { "@id": "https://sunnysidedecksfences.com/#organization" }
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "6125 Sycamore Pl",
        "addressLocality": "Everett",
        "addressRegion": "WA",
        "postalCode": "98203",
        "addressCountry": "US"
      },
      "sameAs": [
        "https://www.instagram.com/lapatsin_llc/",
        "https://share.google/DzdjpCErMrTdlOsXm"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "85"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sunnysidedecksfences.com/" },
        { "@type": "ListItem", "position": 2, "name": "About", "item": "https://sunnysidedecksfences.com/about" }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/V2WV8Zg.jpeg');" aria-label="About hero">
    <div class="page-hero-content">
      <span class="eyebrow-label">About Us</span>
      <h1>About Sunnyside Decks &amp; Fences — Everett's Family-Owned Deck &amp; Fence Builders</h1>
      <p>Decks, Fences, Family — Built by Hand in the Pacific Northwest</p>
    </div>
  </section>

  <!-- BREADCRUMBS -->
  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><span aria-current="page">About</span></li>
      </ol>
    </div>
  </nav>

  <!-- INTRO PARAGRAPH -->
  <section class="bg-surface">
    <div class="container">
      <div class="prose-centered" data-animate="fade-up">
        <p style="font-size: 1.15rem; color: var(--text); text-align: center;">Sunnyside Decks &amp; Fences is a licensed and insured deck and fence builder based in Everett, Washington, serving homeowners across Snohomish County, King County, and the greater Puget Sound region.</p>
      </div>
    </div>
  </section>

  <!-- MEET TIM — SPLIT -->
  <section class="bg-alt" aria-labelledby="meet-tim">
    <div class="container">
      <div class="split">
        <div>
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/ijlVzoa.jpeg" alt="Tim Lapatsin's crew at work building a covered patio in the Puget Sound area" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Meet the Owner</span>
          <h2 id="meet-tim" class="section-title">Meet Tim Lapatsin</h2>
          <p>Tim Lapatsin started Sunnyside Decks &amp; Fences — formerly operating as Lapatsin, LLC — on a straightforward idea: treat every client's backyard like your own. Years of hands-on carpentry and construction experience go into every project he takes on, from a simple cedar privacy fence to a multi-level ipe hardwood deck overlooking the Sound.</p>
          <p>Tim is personally on-site for every build. He doesn't run a sales operation that hands jobs off to rotating subcontractors. When you hire Sunnyside, you're hiring Tim and the small crew he has worked alongside for years — the same people from the first measurement through the final walkthrough.</p>
          <p>The name change to Sunnyside Decks &amp; Fences reflects the company's growth and its commitment to a single focus: outdoor living spaces built to handle Pacific Northwest weather and built so families actually want to spend time in them, rain or shine.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY SUNNYSIDE — SPLIT REVERSE -->
  <section class="bg-surface" aria-labelledby="why-sunnyside">
    <div class="container">
      <div class="split-reverse">
        <div>
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/Beyaeu1.jpeg" alt="Freestanding cedar pergola on a flagstone patio with landscaping built by Sunnyside Decks &amp; Fences" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Why Homeowners Choose Sunnyside</span>
          <h2 id="why-sunnyside" class="section-title">Craftsman Standards. Family Values. No Shortcuts.</h2>
          <p>Plenty of contractors will quote you a deck or a fence. What sets Sunnyside apart is what happens between the quote and the final nail.</p>
          <p>Tim chose to build Sunnyside as a small, family-run operation specifically so every project gets owner-level attention. There's no chain of subcontractors, no quote-and-disappear sales model, and no padded line items. Every estimate is itemized in plain language, every material is something Tim would put on his own house, and every framing decision accounts for the rain, freeze cycles, and moss pressure that come with living in the Pacific Northwest.</p>
          <p>That family approach extends to how the crew shows up: clean job sites, predictable hours, and clear communication from the day permits get pulled to the day you walk the finished project together.</p>
        </div>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- VALUES / COMMITMENTS -->
  <section class="bg-alt" aria-labelledby="values-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">Our Commitments</span>
        <h2 id="values-heading" class="section-title">What You Can Count On</h2>
        <p class="section-subtitle" style="margin-inline:auto;">Three things you'll get on every Sunnyside project — no exceptions.</p>
      </div>

      <div class="grid-3" data-animate="fade-up" data-animate-stagger>
        <article class="card">
          <div class="card-icon"><i data-lucide="hard-hat"></i></div>
          <h3>Owner on Every Job</h3>
          <p>Tim is on-site daily for every build — making decisions in real time, answering questions, and making sure the work matches the plan.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="cloud-rain"></i></div>
          <h3>Built for PNW Weather</h3>
          <p>Materials, fasteners, and framing techniques chosen for Pacific Northwest rain, freeze cycles, and moss pressure — built to last decades, not seasons.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="receipt"></i></div>
          <h3>Transparent Pricing</h3>
          <p>Detailed, itemized estimates in plain language. No hidden fees, no surprise change orders, no high-pressure sales tactics.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- SERVICE AREA SPLIT -->
  <section class="bg-surface" aria-labelledby="service-area-heading">
    <div class="container">
      <div class="split">
        <div>
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/mYU4D7z.jpeg" alt="Aerial drone view of a craftsman home with custom Sunnyside deck and pergola in the Puget Sound region" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">Service Area</span>
          <h2 id="service-area-heading" class="section-title">Serving the Greater Puget Sound</h2>
          <p>From our home base in Everett, Sunnyside serves homeowners within a 50-mile radius — Snohomish County, King County, Skagit County, and Island County. That includes Marysville, Lake Stevens, Mukilteo, Edmonds, Lynnwood, Bothell, Kirkland, Redmond, Bellevue, Mount Vernon, Whidbey Island, and many of the smaller communities in between.</p>
          <p>Local knowledge matters. Tim has built decks and fences against waterfront exposure, on hillside lots, in tight suburban backyards, and behind heritage homes with HOA review processes. Wherever your property is in the Puget Sound, the build is tailored to it.</p>
          <p style="margin-top: var(--space-lg);">
            <a href="/service-area" class="btn-outline-primary">
              See Our Full Service Area
              <i data-lucide="arrow-right"></i>
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-labelledby="cta-heading">
    <div class="container">
      <span class="eyebrow-label" style="color: var(--accent);">Free Consultation</span>
      <h2 id="cta-heading">Ready to Talk About Your Project?</h2>
      <p>Call Tim directly or request a free on-site estimate. He'll walk your property with you, talk through options, and put together a detailed quote — no obligation.</p>
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
