<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Partner with AvanTech for reliable solar, HVAC, and security solutions." />
    <title>Partner With Us | AvanTech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
  </head>
  <body>
    <main class="page-shell partner-page">
      <section class="partner-hero">
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
              <a class="active" href="{{ route('partner') }}" aria-current="page">Partner With Us</a>
              <span class="nav-disabled" aria-disabled="true">FAQs</span>
              <a href="{{ route('contact') }}">Contact Us</a>
              <a class="contact-pill" href="{{ route('quote') }}">Free Quote</a>
            </div>
          </div>
        </nav>

        <div class="partner-hero-content">
          <h1>Built on Quality.<br />Powered by Expertise.</h1>
          <p>
            At AvanTech Integrated Technology Solutions, we deliver reliable, high-quality solutions backed by professional expertise, certified workmanship, and dependable customer support for residential, commercial, and industrial projects.
          </p>
        </div>
      </section>

      <section class="partner-benefits" aria-label="Why partner with AvanTech">
        <div class="partner-benefits-layout">
          <div class="partner-intro">
            <h2>Reliable Solutions. Stronger Partnerships.</h2>
            <p>
              We go beyond providing products we become your reliable partner at every stage of your project.
            </p>
          </div>

          <div class="partner-card-grid">
            <article class="partner-card">
              <div class="partner-card-media partner-card-media-1" role="img" aria-label="Solar inverter and electrical equipment"></div>
              <div class="partner-card-copy">
                <h3>Licensed Engineering &amp; Electrical Design</h3>
                <p>Accurate single line diagrams and electrical plans prepared by licensed professionals.</p>
              </div>
            </article>
            <article class="partner-card">
              <div class="partner-card-media partner-card-media-2" role="img" aria-label="Solar electrical installation technician"></div>
              <div class="partner-card-copy">
                <h3>Certified Installation Professionals</h3>
                <p>Safe, efficient, and standards-compliant installations handled by certified experts.</p>
              </div>
            </article>
            <article class="partner-card">
              <div class="partner-card-media partner-card-media-3" role="img" aria-label="Solar panel field"></div>
              <div class="partner-card-copy">
                <h3>Authorized Distributor of Top Global Brands</h3>
                <p>Authorized dealer of trusted brands offering authentic products with manufacturer-backed warranties.</p>
              </div>
            </article>
            <article class="partner-card">
              <div class="partner-card-media partner-card-media-4" role="img" aria-label="Business district towers"></div>
              <div class="partner-card-copy">
                <h3>Trusted Corporate Partner</h3>
                <p>A legally registered company committed to professionalism, integrity, and long-term partnerships.</p>
              </div>
            </article>
            <article class="partner-card">
              <div class="partner-card-media partner-card-media-5" role="img" aria-label="Security monitoring control room"></div>
              <div class="partner-card-copy">
                <h3>Dedicated Customer &amp; Technical Support</h3>
                <p>Responsive assistance from consultation to after-sales service and technical support.</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="partner-empowering" aria-label="Engineering solutions banner">
        <div class="partner-empowering-copy">
          <h2>Engineering Solutions.<br />Empowering Success.</h2>
        </div>
        <p>
          We are committed to delivering solutions that empower your business, maximize efficiency, and create lasting value.
        </p>
      </section>

      <footer class="footer partner-footer" id="contact">
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

      <section class="help-strip" id="quote">
        <div class="help-illustration" aria-hidden="true">
          <img src="{{ asset('assets/icons/computer-and-people.svg') }}" alt="" />
        </div>
        <div class="help-copy">
          <h2>Need Help Choosing the Right Solution?</h2>
          <p>Our experts will recommend the best products<br />tailored to your project needs and budget</p>
        </div>
        <a class="button" href="{{ route('quote') }}">Get a free quote today! <span aria-hidden="true">&rsaquo;</span></a>
      </section>
    </main>
  </body>
</html>

