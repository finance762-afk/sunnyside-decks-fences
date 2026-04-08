<?php
$pageTitle       = "Outdoor Living Space Builder Everett WA | Sunnyside";
$pageDescription = "Multi-level decks, deck lighting, pergolas & complete backyard design-build in Everett, WA & the Puget Sound. Full outdoor living from one family-run crew.";
$canonicalUrl    = "https://sunnysidedecksfences.com/services/outdoor-living-spaces";
$ogImage         = "https://i.imgur.com/wZ09N1K.jpeg";
$currentPage     = "services";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/wZ09N1K.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://sunnysidedecksfences.com/services/outdoor-living-spaces#service",
      "name": "Outdoor Living Space Design and Build",
      "serviceType": "Outdoor Living Space Construction",
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
        { "@type": "City", "name": "Bellevue, WA" },
        { "@type": "City", "name": "Kirkland, WA" }
      ],
      "offers": {
        "@type": "Offer",
        "priceCurrency": "USD",
        "priceRange": "\$40,000 - \$150,000+"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "85"
      }
    },
    {
      "@type": "HowTo",
      "name": "Sunnyside's Outdoor Living Design-Build Process",
      "step": [
        { "@type": "HowToStep", "position": 1, "name": "Vision Walk", "text": "Tim walks the property with you, listens to how you want to use the space, and identifies opportunities and constraints." },
        { "@type": "HowToStep", "position": 2, "name": "Concept & Layout", "text": "We sketch a layout that integrates decks, pergolas, fencing, lighting, and any other elements into one cohesive plan." },
        { "@type": "HowToStep", "position": 3, "name": "Itemized Estimate", "text": "Detailed quote in plain language — every line item, every material, every labor cost transparent and reviewable." },
        { "@type": "HowToStep", "position": 4, "name": "Build & Coordinate", "text": "Tim manages every trade — framing, decking, electrical, lighting, fencing — so you only deal with one contractor." }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What does a complete outdoor living space cost in Everett, WA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Full outdoor living builds in the Everett area typically run $40,000 to $150,000+. A multi-level deck with pergola and lighting starts around $40,000. A complete backyard transformation with decks, covered patio, fencing, deck lighting, hot tub platform, and integrated landscaping coordination can exceed $150,000. Every project is itemized so you can see exactly where the money goes."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a complete backyard build take from start to finish?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most full outdoor living projects take 4 to 10 weeks of build time once permits clear, depending on scope. A multi-level deck with pergola is 4 to 6 weeks. A full backyard transformation with multiple structures, lighting, and coordination across trades can run 8 to 10 weeks. Permit approval through Snohomish County typically adds 3 to 6 weeks before the build starts."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle deck lighting and electrical for outdoor living spaces?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — Sunnyside coordinates with a licensed electrician for all wiring on outdoor living projects, including LED post cap lights, recessed riser and step lights, string lighting, ceiling fans on covered structures, and outdoor outlets. We handle the design, you get one finished project from one contact."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sunnysidedecksfences.com/" },
        { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://sunnysidedecksfences.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Outdoor Living Spaces", "item": "https://sunnysidedecksfences.com/services/outdoor-living-spaces" }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/wZ09N1K.jpeg');" aria-label="Outdoor living spaces hero">
    <div class="page-hero-content">
      <span class="eyebrow-label">Premium Design-Build</span>
      <h1>Outdoor Living Space Builder in Everett, WA</h1>
      <p>Multi-level decks, integrated pergolas, deck lighting, hot tub platforms — the full backyard transformation, coordinated by one family-run crew.</p>
    </div>
  </section>

  <!-- BREADCRUMBS -->
  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><a href="/services">Services</a></li>
        <li><span aria-current="page">Outdoor Living Spaces</span></li>
      </ol>
    </div>
  </nav>

  <!-- ANSWER-FIRST INTRO -->
  <section class="bg-surface">
    <div class="container">
      <div class="prose-centered" style="margin: 0 auto;">
        <p style="font-size: 1.15rem;">Complete outdoor living builds in Everett, WA run <strong>$40,000 to $150,000+</strong>, with most full backyard projects finishing in <strong>4 to 10 weeks</strong> once permits clear. A multi-level deck with pergola and lighting starts around $40,000. A full backyard transformation with decks, covered patio, fencing, lighting, hot tub platform, and trade coordination can exceed $150,000. Sunnyside Decks &amp; Fences provides outdoor living space design and build for homeowners across Everett, Snohomish County, and the greater Puget Sound — every project led by owner Tim Lapatsin from concept to final walkthrough.</p>
        <p>An outdoor living space isn't a deck. It's everything that turns a backyard into a place you actually want to spend time — multi-level decking, a pergola or covered patio, integrated lighting, a hot tub or fire feature, fencing for privacy, and the kind of details that make the whole thing feel intentional instead of stitched together.</p>
        <p class="last-updated"><i data-lucide="calendar"></i> Last Updated: <?php echo date('F Y'); ?></p>
      </div>
    </div>
  </section>

  <!-- SPLIT 1 — IMAGE RIGHT -->
  <section class="bg-alt" aria-labelledby="one-contractor">
    <div class="container">
      <div class="split">
        <div data-animate="fade-up">
          <span class="eyebrow-label">One Contractor, One Vision</span>
          <h2 id="one-contractor" class="section-title">Why Coordinate It All Through One Builder</h2>
          <p>The biggest reason backyard projects go sideways is that homeowners end up managing five different contractors — one for the deck, one for the fence, one for electrical, one for landscaping, one for the hot tub. Each trade only cares about their piece. Nobody is responsible for how the whole thing fits together.</p>
          <p>Sunnyside runs outdoor living builds as a single design-build project. Tim handles the full layout, coordinates every trade, and keeps the timeline moving so you only have one phone number to call when you have a question. The deck and the pergola get planned together. The lighting gets wired before the decking goes down. The fence ties into the deck level. Nothing is an afterthought.</p>
          <p>That's the difference between a backyard that feels like it was always there and one that feels like a bunch of disconnected projects.</p>
        </div>
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/SFU9Ao3.jpeg" alt="Multi-level outdoor living build with hot tub and water view, designed and built by Sunnyside Decks &amp; Fences" width="800" height="1000" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT'S INCLUDED GRID -->
  <section class="bg-surface" aria-labelledby="included-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto var(--space-2xl);">
        <span class="eyebrow-label">What's Included</span>
        <h2 id="included-heading" class="section-title">Everything That Goes Into a Full Build</h2>
        <p class="section-subtitle" style="margin-inline:auto;">Pick the elements that fit your vision and budget — Sunnyside coordinates the rest.</p>
      </div>

      <div class="grid-3" data-animate="fade-up" data-animate-stagger>
        <article class="card">
          <div class="card-icon"><i data-lucide="layers-3"></i></div>
          <h3>Multi-Level Decks</h3>
          <p>Stepped levels for sloped lots, dining and lounge zones, hot tub platforms, transition stairs to grass or patio. Composite, cedar, or ipe.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="home"></i></div>
          <h3>Pergolas &amp; Covered Patios</h3>
          <p>Freestanding or attached pergolas, fully covered patios with skylights or T&amp;G ceilings, gazebos, and screened-in outdoor rooms.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="lightbulb"></i></div>
          <h3>Deck &amp; Landscape Lighting</h3>
          <p>LED post cap lights, recessed step and riser lights, string lighting, path lighting, and accent lighting — all coordinated with a licensed electrician.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="fence"></i></div>
          <h3>Custom Railings &amp; Fencing</h3>
          <p>Cable railing, glass panel railing, and aluminum systems on the deck. Cedar privacy or horizontal slat fencing tying the yard together.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="droplets"></i></div>
          <h3>Hot Tub Platforms</h3>
          <p>Engineered platforms sized for the weight of a full hot tub, with proper drainage, electrical access, and seamless integration with the rest of the deck.</p>
        </article>

        <article class="card">
          <div class="card-icon"><i data-lucide="flame"></i></div>
          <h3>Fire Features &amp; Finishing Details</h3>
          <p>Fire pit surrounds, built-in seating, planters, deck-edge skirting, and the kind of finishing details that make a project feel custom instead of generic.</p>
        </article>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- SPLIT-REVERSE — IMAGE LEFT -->
  <section class="bg-alt" aria-labelledby="vision-heading">
    <div class="container">
      <div class="split-reverse">
        <div data-animate="wipe-right">
          <div class="img-frame" style="aspect-ratio: 4/5;">
            <img src="https://i.imgur.com/4wTTC6a.jpeg" alt="Modern two-level ipe hardwood deck outdoor living build by Sunnyside Decks &amp; Fences" width="800" height="1000" loading="lazy">
          </div>
        </div>
        <div data-animate="fade-up">
          <span class="eyebrow-label">From Vision to Reality</span>
          <h2 id="vision-heading" class="section-title">How a Full Outdoor Living Project Comes Together</h2>
          <p>Every outdoor living project starts with the same conversation: how do you actually want to use the space? Morning coffee? Friday night dinners with friends? Kids playing in the rain through the wet months? Hot tub Sundays through January? The answer drives every decision after that.</p>

          <ol class="process-steps">
            <li>
              <div>
                <strong>Vision Walk</strong>
                <p>Tim walks your property with you, listens to how you want to use it, and identifies opportunities and constraints.</p>
              </div>
            </li>
            <li>
              <div>
                <strong>Concept &amp; Layout</strong>
                <p>We sketch a layout that integrates decks, pergolas, fencing, lighting, and other elements into one cohesive plan.</p>
              </div>
            </li>
            <li>
              <div>
                <strong>Itemized Estimate</strong>
                <p>Detailed quote in plain language. Every line item, every material, every labor cost transparent and reviewable.</p>
              </div>
            </li>
            <li>
              <div>
                <strong>Build &amp; Coordinate</strong>
                <p>Tim manages every trade so you only deal with one contractor. One timeline, one number to call.</p>
              </div>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- ANSWER BLOCK -->
  <section class="bg-surface">
    <div class="container">
      <div class="answer-block" data-animate="fade-up">
        <h2>How long does a complete backyard build take?</h2>
        <p>Most full outdoor living projects take 4 to 10 weeks of build time once permits clear. A multi-level deck with pergola is 4 to 6 weeks. A full backyard transformation with multiple structures, lighting, and coordination across trades can run 8 to 10 weeks. Snohomish County permit approval typically adds 3 to 6 weeks before the build starts.</p>
      </div>
    </div>
  </section>

  <!-- SECONDARY IMAGE -->
  <section class="bg-surface" style="padding-top: 0;">
    <div class="container">
      <div class="img-frame" style="aspect-ratio: 16/7; max-width: 1000px; margin: 0 auto;" data-animate="fade-up">
        <img src="https://i.imgur.com/Beyaeu1.jpeg" alt="Freestanding cedar pergola on a flagstone patio with custom landscaping — Sunnyside outdoor living build" width="1000" height="438" loading="lazy">
      </div>
      <div class="prose-centered" data-animate="fade-up" style="margin: var(--space-2xl) auto 0; text-align: center;">
        <p>Pair your outdoor living build with a <a href="/services/custom-deck-building">custom deck</a>, integrated <a href="/services/covered-decks-pergolas">pergola or covered patio</a>, or finish the frame with <a href="/services/deck-railings">cable or glass railings</a>.</p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-alt" aria-labelledby="faq-heading">
    <div class="container">
      <div data-animate="fade-up" style="text-align:center; max-width: 720px; margin: 0 auto;">
        <span class="eyebrow-label">Common Questions</span>
        <h2 id="faq-heading" class="section-title">Outdoor Living FAQs</h2>
      </div>

      <div class="faq-list" data-animate="fade-up">
        <details class="faq-item">
          <summary>What does a complete outdoor living space cost in Everett, WA?</summary>
          <div class="faq-answer">
            Full outdoor living builds in the Everett area typically run $40,000 to $150,000+. A multi-level deck with pergola and lighting starts around $40,000. A complete backyard transformation with decks, covered patio, fencing, deck lighting, hot tub platform, and integrated landscaping coordination can exceed $150,000. Every project is itemized so you can see exactly where the money goes.
          </div>
        </details>

        <details class="faq-item">
          <summary>How long does a complete backyard build take from start to finish?</summary>
          <div class="faq-answer">
            Most full outdoor living projects take 4 to 10 weeks of build time once permits clear, depending on scope. A multi-level deck with pergola is 4 to 6 weeks. A full backyard transformation with multiple structures, lighting, and coordination across trades can run 8 to 10 weeks. Permit approval through Snohomish County typically adds 3 to 6 weeks before the build starts.
          </div>
        </details>

        <details class="faq-item">
          <summary>Do you handle deck lighting and electrical for outdoor living spaces?</summary>
          <div class="faq-answer">
            Yes — Sunnyside coordinates with a licensed electrician for all wiring on outdoor living projects, including LED post cap lights, recessed riser and step lights, string lighting, ceiling fans on covered structures, and outdoor outlets. We handle the design, you get one finished project from one contact.
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-labelledby="cta-heading">
    <div class="container">
      <span class="eyebrow-label" style="color: var(--accent);">Free Design Consultation</span>
      <h2 id="cta-heading">Ready to Transform Your Backyard?</h2>
      <p>Tell Tim what you're picturing — even if it's just a rough idea — and he'll come walk the space with you. Free consultation, no obligation, no pressure.</p>
      <div class="cta-buttons">
        <a href="/contact" class="btn-primary">
          <i data-lucide="calendar-check"></i>
          Schedule a Free Consultation
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
