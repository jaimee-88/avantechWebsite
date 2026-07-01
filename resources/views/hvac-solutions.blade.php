<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="AvanTech HVAC solutions for residential, commercial, and industrial comfort systems." />
    <title>HVAC Solutions | AvanTech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
  </head>
  <body>
    <main class="page-shell hvac-page">
      <section class="hvac-hero" aria-labelledby="hvac-hero-title">
        <nav class="navbar" aria-label="Primary navigation">
          <a class="brand" href="{{ route('home') }}" aria-label="AvanTech home">
            <img src="{{ asset('assets/brand/avantech-horizontal-white.png') }}" alt="AvanTech Integrated Technology Solutions, Inc." />
          </a>
          <input class="nav-toggle" type="checkbox" id="nav-toggle" aria-label="Toggle navigation menu" />
          <label class="hamburger" for="nav-toggle" aria-hidden="true"><span></span><span></span><span></span></label>
          <div class="nav-menu" id="primary-menu">
            <div class="nav-links nav-center">
              <a href="{{ route('home') }}">Home</a>
              <a href="{{ route('about') }}">About Us</a>
              <a class="active" href="{{ route('services') }}" aria-current="page">Services</a>
            </div>
            <div class="nav-links nav-right">
              <a href="{{ route('partner') }}">Partner With Us</a>
              <span class="nav-disabled" aria-disabled="true">FAQs</span>
              <a href="{{ route('contact') }}">Contact Us</a>
              <a class="contact-pill" href="{{ route('quote') }}">Free Quote</a>
            </div>
          </div>
        </nav>

        <a class="back-link" href="{{ route('services') }}">&lsaquo; Back to Services</a>
        <div class="hvac-hero-copy">
          <h1 id="hvac-hero-title">Comfort, efficiency, reliability.</h1>
          <p>We deliver high-quality HVAC systems and services for residential, commercial, and industrial spaces. Designed for performance, built for comfort.</p>
          <a class="button" href="{{ route('quote') }}">Get a Free Quote <span aria-hidden="true">&rsaquo;</span></a>
        </div>
      </section>

      <section class="hvac-intro" aria-labelledby="hvac-intro-title">
        <div class="hvac-intro-heading">
          <h2 id="hvac-intro-title">Our HVAC<br />Services</h2>
          <p>This is what we do.</p>
        </div>
        <div class="hvac-service-grid">
          <article class="hvac-service-card">
            <h3>Installation &amp; Supply</h3>
            <p>Supply and installation of quality HVAC systems tailored to your needs.</p>
          </article>
          <article class="hvac-service-card">
            <h3>Preventive Maintenance</h3>
            <p>Regular maintenance ensures optimal performance and extends system life.</p>
          </article>
          <article class="hvac-service-card">
            <h3>Ventilation &amp; Ducting</h3>
            <p>Custom ducting and ventilation systems for better air quality and efficiency.</p>
          </article>
          <article class="hvac-service-card">
            <h3>Repairs &amp; Troubleshooting</h3>
            <p>Fast diagnosis and reliable repair services to restore comfort and system performance.</p>
          </article>
        </div>
      </section>

      <section class="hvac-spaces" aria-labelledby="hvac-spaces-title">
        <div class="hvac-spaces-copy">
          <h2 id="hvac-spaces-title">Engineered Systems for Every Space</h2>
          <p>From commercial buildings to industrial facilities, we design and implement HVAC solutions that deliver consistent comfort and efficiency.</p>
        </div>
        <img class="hvac-systems-image" src="{{ asset('assets/figma-reference/hvac/commercial-rooftop-hvac-units.jpg') }}" alt="Outdoor HVAC units installed on a commercial rooftop." />
      </section>

      <section class="hvac-brand-carousel" aria-label="HVAC brand partners">
        <div class="hvac-brand-track">
          <span class="hvac-brand panasonic"><img src="{{ asset('assets/partners/hvac/panasonic.svg') }}" alt="Panasonic" /></span>
          <span class="hvac-brand samsung"><img src="{{ asset('assets/partners/hvac/samsung.svg') }}" alt="Samsung" /></span>
          <span class="hvac-brand toshiba"><img src="{{ asset('assets/partners/hvac/toshiba.svg') }}" alt="Toshiba" /></span>
          <span class="hvac-brand tosot"><img src="{{ asset('assets/partners/hvac/tosot.png') }}" alt="Tosot" /></span>
          <span class="hvac-brand condura"><img src="{{ asset('assets/partners/hvac/condura.png') }}" alt="Condura" /></span>
          <span class="hvac-brand lg"><img src="{{ asset('assets/partners/hvac/lg.svg') }}" alt="LG" /></span>
          <span class="hvac-brand mitsubishi"><img src="{{ asset('assets/partners/hvac/mitsubishi-heavy-industries.svg') }}" alt="Mitsubishi Heavy Industries" /></span>
          <span class="hvac-brand daikin"><img src="{{ asset('assets/partners/hvac/daikin.svg') }}" alt="Daikin" /></span>
          <span class="hvac-brand midea"><img src="{{ asset('assets/partners/hvac/midea.svg') }}" alt="Midea" /></span>
          <span class="hvac-brand gree"><img src="{{ asset('assets/partners/hvac/gree.svg') }}" alt="Gree" /></span>
          <span class="hvac-brand aux"><img src="{{ asset('assets/partners/hvac/aux-brand.svg') }}" alt="AUX" /></span>
          <span class="hvac-brand carrier"><img src="{{ asset('assets/partners/hvac/carrier.svg') }}" alt="Carrier" /></span>
          <span class="hvac-brand tcl"><img src="{{ asset('assets/partners/hvac/tcl.svg') }}" alt="TCL" /></span>
          <span class="hvac-brand koppel">Koppel</span>
          <span class="hvac-brand panasonic" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/panasonic.svg') }}" alt="" /></span>
          <span class="hvac-brand samsung" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/samsung.svg') }}" alt="" /></span>
          <span class="hvac-brand toshiba" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/toshiba.svg') }}" alt="" /></span>
          <span class="hvac-brand tosot" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/tosot.png') }}" alt="" /></span>
          <span class="hvac-brand condura" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/condura.png') }}" alt="" /></span>
          <span class="hvac-brand lg" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/lg.svg') }}" alt="" /></span>
          <span class="hvac-brand mitsubishi" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/mitsubishi-heavy-industries.svg') }}" alt="" /></span>
          <span class="hvac-brand daikin" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/daikin.svg') }}" alt="" /></span>
          <span class="hvac-brand midea" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/midea.svg') }}" alt="" /></span>
          <span class="hvac-brand gree" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/gree.svg') }}" alt="" /></span>
          <span class="hvac-brand aux" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/aux-brand.svg') }}" alt="" /></span>
          <span class="hvac-brand carrier" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/carrier.svg') }}" alt="" /></span>
          <span class="hvac-brand tcl" aria-hidden="true"><img src="{{ asset('assets/partners/hvac/tcl.svg') }}" alt="" /></span>
          <span class="hvac-brand koppel" aria-hidden="true">Koppel</span>
        </div>
      </section>

      <footer class="footer services-footer" id="contact">
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
            <p class="contact-line"><img class="contact-icon mail-icon" src="{{ asset('assets/icons/contact/email-envelope.svg') }}" alt="" aria-hidden="true" /><span>sales.avantech@gmail.com</span></p>
            <p class="contact-line"><img class="contact-icon location-icon" src="{{ asset('assets/icons/contact/map-pin.svg') }}" alt="" aria-hidden="true" /><span>Unit 305, Madrigal Business Park, Prime Street, New Alabang Village, Muntinlupa, Metro Manila</span></p>
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
          <p>Our experts will recommend the best products<br />tailored to your project needs and budget.</p>
        </div>
        <a class="button" href="{{ route('quote') }}">Get a free quote today! <span aria-hidden="true">&rsaquo;</span></a>
      </section>
    </main>
  </body>
</html>

