<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Contact AvanTech for solar, HVAC, and security solutions." />
    <title>Contact Us | AvanTech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
  </head>
  <body>
    <main class="page-shell contact-page">
      <section class="contact-hero">
        <nav class="navbar" aria-label="Primary navigation">
          <a class="brand" href="{{ route('home') }}" aria-label="AvanTech home">
            <img src="{{ asset('assets/brand/avantech-horizontal-white.png') }}" alt="AvanTech Integrated Technology Solutions, Inc." />
          </a>
          <input class="nav-toggle" type="checkbox" id="nav-toggle" aria-label="Toggle navigation menu" />
          <label class="hamburger" for="nav-toggle" aria-hidden="true">
            <span></span>
            <span></span>
            <span></span>
          </label>
          <div class="nav-menu" id="primary-menu">
            <div class="nav-links nav-center">
              <a href="{{ route('home') }}">Home</a>
              <a href="{{ route('about') }}">About Us</a>
              <a href="{{ route('services') }}">Services</a>
            </div>
            <div class="nav-links nav-right">
              <a href="{{ route('partner') }}">Partner With Us</a>
              <span class="nav-disabled" aria-disabled="true">FAQs</span>
              <a class="active" href="{{ route('contact') }}" aria-current="page">Contact Us</a>
              <a class="contact-pill" href="{{ route('quote') }}">Free Quote</a>
            </div>
          </div>
        </nav>

        <div class="contact-hero-content">
          <h1>Let&rsquo;s Build Something<br />Better Together.</h1>
          <p>
            Have questions about our Solar, HVAC, or Security Solutions? We&rsquo;re here to help you find the right solution for your needs.
          </p>
        </div>
      </section>

      <section class="contact-info-grid" aria-label="Contact details">
        <article class="contact-info-card">
          <div class="contact-card-icon contact-card-phone" aria-hidden="true"></div>
          <h2>Call Us</h2>
          <div class="contact-card-body">
            <p class="contact-highlight">
              Sales Inquiry: (+63)961-461-5474<br />
              Sales Inventory: (+63)969-283-8231<br />
              Customer Service: (+63)969-283-8215
            </p>
            <p>Our team is ready to answer your call.</p>
          </div>
        </article>

        <article class="contact-info-card">
          <div class="contact-card-icon contact-card-mail" aria-hidden="true"></div>
          <h2>Email Us</h2>
          <div class="contact-card-body">
            <p class="contact-highlight">sales.avantech@gmail.com</p>
            <p>Send us your inquiries and we'll respond as soon as possible.</p>
          </div>
        </article>

        <article class="contact-info-card contact-info-card-wide">
          <div class="contact-card-icon contact-card-clock" aria-hidden="true"></div>
          <h2>Business Hours</h2>
          <div class="contact-card-body">
            <p class="contact-highlight">8:00 AM - 6:30PM</p>
            <p>Monday - Friday</p>
            <p>Closed on Holidays</p>
          </div>
        </article>
      </section>

      <section class="contact-map-section" id="contact">
        <div class="contact-address-copy">
          <div class="contact-address-icon" aria-hidden="true"></div>
          <div>
            <h2>Unit 305, Madrigal Business Park, Prime Street, New Alabang Village, Muntinlupa, Metro Manila</h2>
            <p>We are located in Alabang, Muntinlupa City. Visit our office or get in touch with us during business hours.</p>
          </div>
        </div>
        <div class="contact-map-shell">
          <iframe
            class="contact-map"
            title="Map to AvanTech office"
            loading="lazy"
            tabindex="-1"
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps?q=AVANTECH%20INTEGRATED%20TECHNOLOGY%20SOLUTIONS%20INC.%2C%2014.4292205%2C121.0272715&z=17&output=embed"
          ></iframe>
          <a class="contact-map-link" href="https://www.google.com/maps?q=AVANTECH%20INTEGRATED%20TECHNOLOGY%20SOLUTIONS%20INC.%2C%2014.4292205%2C121.0272715" target="_blank" rel="noopener" aria-label="Open AvanTech office location in Google Maps"></a>
        </div>
      </section>

      <footer class="footer" id="footer-contact">
        <div class="footer-wave footer-wave-left"></div>
        <div class="footer-wave footer-wave-right"></div>
        <div class="footer-inner">
          <div>
            <h2>Quick Links</h2>
            <a class="footer-link" href="{{ route('home') }}"><span class="footer-link-text">Home</span><span class="footer-arrow" aria-hidden="true"></span></a>
            <a class="footer-link" href="{{ route('about') }}"><span class="footer-link-text">About Us</span><span class="footer-arrow" aria-hidden="true"></span></a>
            <a class="footer-link" href="{{ route('solar-solutions') }}"><span class="footer-link-text">Services (Solar)</span><span class="footer-arrow" aria-hidden="true"></span></a>
            <a class="footer-link" href="{{ route('hvac-solutions') }}"><span class="footer-link-text">Services (HVAC)</span><span class="footer-arrow" aria-hidden="true"></span></a>
            <span class="footer-link footer-link-disabled" aria-disabled="true"><span class="footer-link-text">Services (Security)</span><span class="footer-arrow" aria-hidden="true"></span></span>
          </div>
          <div>
            <h2 class="sr-only">More Links</h2>
            <a class="footer-link" href="{{ route('services') }}"><span class="footer-link-text">Services Dashboard</span><span class="footer-arrow" aria-hidden="true"></span></a>
            <a class="footer-link" href="{{ route('partner') }}"><span class="footer-link-text">Partner With Us</span><span class="footer-arrow" aria-hidden="true"></span></a>
            <a class="footer-link" href="{{ route('home') }}#faqs"><span class="footer-link-text">FAQs</span><span class="footer-arrow" aria-hidden="true"></span></a>
            <a class="footer-link" href="{{ route('contact') }}"><span class="footer-link-text">Contact Us</span><span class="footer-arrow" aria-hidden="true"></span></a>
            <a class="footer-link" href="{{ route('quote') }}"><span class="footer-link-text">Get a Free Quote</span><span class="footer-arrow" aria-hidden="true"></span></a>
          </div>
          <div>
            <h2>Contacts</h2>
            <p class="contact-line">
              <img class="contact-icon mail-icon" src="{{ asset('assets/icons/contact/email-envelope.svg') }}" alt="" aria-hidden="true" />
              <span>sales.avantech@gmail.com</span>
            </p>
            <p class="contact-line">
              <img class="contact-icon location-icon" src="{{ asset('assets/icons/contact/map-pin.svg') }}" alt="" aria-hidden="true" />
              <span>Unit 305, Madrigal Business Park, Prime Street, New Alabang Village, Muntinlupa, Metro Manila</span>
            </p>
            <h3>Social Media</h3>
            <div class="socials" aria-label="Social media links">
              <a class="social facebook" href="https://www.facebook.com/AvantechIntegrated/" aria-label="Facebook"></a>
              <a class="social tiktok" href="https://www.tiktok.com/@avantechphilippin" aria-label="TikTok"></a>
              <a class="social youtube" href="https://www.youtube.com/@avantechintegratedtechnologyso" aria-label="YouTube"></a>
            </div>
          </div>
        </div>
      </footer>
    </main>
  </body>
</html>

