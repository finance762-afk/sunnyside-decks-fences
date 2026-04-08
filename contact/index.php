<?php
$pageTitle       = "Contact Sunnyside Decks & Fences | Everett, WA";
$pageDescription = "Get a free deck or fence estimate in Everett, WA & the Puget Sound. Call (425) 737-2259 or request a free on-site consultation with Tim today.";
$canonicalUrl    = "https://sunnysidedecksfences.com/contact";
$ogImage         = "https://i.imgur.com/hoaJfLT.jpeg";
$currentPage     = "contact";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;
$heroImage       = "https://i.imgur.com/hoaJfLT.jpeg";

$schemaMarkup = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "https://sunnysidedecksfences.com/#business",
      "name": "Sunnyside Decks & Fences",
      "image": "https://i.imgur.com/aKknI6J.png",
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
      "sameAs": [
        "https://www.instagram.com/lapatsin_llc/",
        "https://share.google/DzdjpCErMrTdlOsXm"
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sunnysidedecksfences.com/" },
        { "@type": "ListItem", "position": 2, "name": "Contact", "item": "https://sunnysidedecksfences.com/contact" }
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
  <section class="page-hero" style="background-image: url('https://i.imgur.com/hoaJfLT.jpeg');" aria-label="Contact hero">
    <div class="page-hero-content">
      <span class="eyebrow-label">Get In Touch</span>
      <h1>Contact Sunnyside Decks &amp; Fences — Free Estimates in Everett &amp; the Puget Sound</h1>
      <p>Let's Build Something Great — Get Your Free Estimate Today</p>
    </div>
  </section>

  <!-- BREADCRUMBS -->
  <nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li><span aria-current="page">Contact</span></li>
      </ol>
    </div>
  </nav>

  <!-- CONTACT GRID -->
  <section class="bg-surface">
    <div class="container">
      <div class="contact-grid">

        <!-- LEFT: FORM -->
        <div class="contact-form-card" data-animate="fade-up">
          <h2>Request a Free Estimate</h2>
          <p class="form-intro">Fill out the form below and Tim will get back to you within one business day to schedule your free on-site consultation.</p>

          <form action="https://formsubmit.co/timlapatsin@yahoo.com" method="POST" novalidate>
            <input type="hidden" name="_next" value="https://sunnysidedecksfences.com/thank-you">
            <input type="hidden" name="_captcha" value="false">
            <input type="text" name="_honey" style="display:none">
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_subject" value="New Estimate Request — Sunnyside Decks & Fences">
            <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">

            <div class="form-row">
              <div class="form-field">
                <input type="text" id="name" name="name" placeholder=" " required>
                <label for="name">Full Name *</label>
              </div>
              <div class="form-field">
                <input type="tel" id="phone" name="phone" placeholder=" " required>
                <label for="phone">Phone *</label>
              </div>
            </div>

            <div class="form-field">
              <input type="email" id="email" name="email" placeholder=" " required>
              <label for="email">Email *</label>
            </div>

            <div class="form-select">
              <label for="service">Service Interested In</label>
              <select id="service" name="service">
                <option value="Custom Deck">Custom Deck Building</option>
                <option value="Composite Deck">Composite Decking</option>
                <option value="Wood Deck">Wood Decking</option>
                <option value="Deck Railings">Deck Railings</option>
                <option value="Covered Deck / Pergola">Covered Deck / Pergola</option>
                <option value="Wood Fence">Wood Fence Installation</option>
                <option value="Gate">Gate Installation</option>
                <option value="Outdoor Living Space">Outdoor Living Space</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <div class="form-field">
              <textarea id="message" name="message" placeholder=" " rows="5"></textarea>
              <label for="message">Tell us about your project</label>
            </div>

            <div class="form-radio-group">
              <label>Preferred Contact Method</label>
              <div class="form-radio-options">
                <label>
                  <input type="radio" name="contact_method" value="Phone" checked>
                  <span>Phone</span>
                </label>
                <label>
                  <input type="radio" name="contact_method" value="Email">
                  <span>Email</span>
                </label>
              </div>
            </div>

            <button type="submit" class="form-submit">
              <i data-lucide="send"></i>
              Request My Free Estimate
            </button>
          </form>
        </div>

        <!-- RIGHT: INFO + MAP -->
        <div data-animate="fade-up">
          <div class="contact-info-card">
            <h3>Reach Tim Directly</h3>
            <ul class="contact-info-list">
              <li>
                <i data-lucide="phone"></i>
                <div>
                  <strong>Phone</strong>
                  <a href="tel:+14257372259">(425) 737-2259</a>
                </div>
              </li>
              <li>
                <i data-lucide="mail"></i>
                <div>
                  <strong>Email</strong>
                  <a href="mailto:timlapatsin@yahoo.com">timlapatsin@yahoo.com</a>
                </div>
              </li>
              <li>
                <i data-lucide="map-pin"></i>
                <div>
                  <strong>Address</strong>
                  6125 Sycamore Pl<br>Everett, WA 98203
                </div>
              </li>
              <li>
                <i data-lucide="clock"></i>
                <div>
                  <strong>Hours</strong>
                  Mon–Fri: 9 AM – 6 PM<br>Sat–Sun: Closed
                </div>
              </li>
              <li>
                <i data-lucide="map"></i>
                <div>
                  <strong>Service Area</strong>
                  50-mile radius from Everett, WA
                </div>
              </li>
            </ul>
          </div>

          <div class="contact-map">
            <iframe
              src="https://www.google.com/maps?q=6125+Sycamore+Pl,+Everett,+WA+98203&output=embed"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Sunnyside Decks &amp; Fences — Everett, WA location map"></iframe>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
