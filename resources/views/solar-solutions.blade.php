<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="AvanTech solar solutions for grid-tie, hybrid, and off-grid energy systems." />
    <title>Solar Solutions | AvanTech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
  </head>
  <body>
    <main class="page-shell solar-page">
      <section class="solar-hero" aria-labelledby="solar-hero-title">
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
        <div class="solar-hero-copy">
          <h1 id="solar-hero-title">Smart, Reliable, and Sustainable Solar Solutions.</h1>
          <p>We provide customized solar power systems designed to fit your energy needs and budget.</p>
          <a class="button" href="{{ route('quote') }}">Get a Free Quote <span aria-hidden="true">&rsaquo;</span></a>
        </div>
      </section>

      <section class="energy-setup" aria-labelledby="energy-setup-title">
        <div class="section-heading">
          <h2 id="energy-setup-title">Choose the Right Energy Setup</h2>
          <p>We offer three types of solar power systems to match your energy goals and property setup.</p>
        </div>
        <div class="setup-cards">
          <article class="setup-card setup-grid">
            <img src="{{ asset('assets/photos/solar/unsplash-grid-tie-solar-field.jpg') }}" alt="Solar panel field connected for grid-tie energy production." />
            <div>
              <h3>GRID-TIE</h3>
              <p>Connected to the grid for maximum savings and grid power.</p>
            </div>
          </article>
          <article class="setup-card setup-hybrid">
            <img src="{{ asset('assets/photos/solar/unsplash-hybrid-energy-storage.jpg') }}" alt="Solar battery storage and inverter equipment for a hybrid system." />
            <div>
              <h3>HYBRID</h3>
              <p>The perfect balance of solar, battery storage, and grid power.</p>
            </div>
          </article>
          <article class="setup-card setup-offgrid">
            <img src="{{ asset('assets/photos/solar/unsplash-off-grid-cabin.jpg') }}" alt="Remote off-grid cabin powered by solar panels." />
            <div>
              <h3>OFF-GRID</h3>
              <p>Complete energy independence for remote or off-grid living.</p>
            </div>
          </article>
        </div>
      </section>

      <section class="why-solar" aria-labelledby="why-solar-title">
        <div class="section-heading">
          <h2 id="why-solar-title">Why Choose Solar</h2>
          <p>Switch to clean, reliable energy that lowers your monthly utility bills while protecting the environment and securing your energy independence.</p>
        </div>
        <div class="why-grid">
          <article>
            <h3>Lower Electricity Bills</h3>
            <p>Generate your own power and reduce monthly electricity costs.</p>
          </article>
          <article>
            <h3>Energy Independence</h3>
            <p>Reduce your dependence on the grid and protect against power interruptions.</p>
          </article>
          <article>
            <h3>Reliable &amp; Durable</h3>
            <p>Built with high-quality components for long-term performance.</p>
          </article>
          <article>
            <h3>Sustainable Future</h3>
            <p>Clean, renewable energy that helps protect our environment.</p>
          </article>
        </div>
      </section>

      <section class="solar-install-types" aria-labelledby="solar-install-title">
        <div class="solar-install-copy">
          <h2 id="solar-install-title">Solar Installation Types</h2>
          <p>Flexible solar mounting options for rooftops, open land, roof decks, and water-based sites.</p>
        </div>
        <div class="install-gallery">
          <figure class="install-card install-roof">
            <img src="{{ asset('assets/photos/solar/installation/roof-mounted-solar.jpg') }}" alt="Solar panels mounted on a pitched rooftop." />
            <figcaption>Roof Mounted</figcaption>
          </figure>
          <figure class="install-card install-ground">
            <img src="{{ asset('assets/photos/solar/installation/ground-mounted-solar.jpg') }}" alt="Ground-mounted solar panels installed in an open field." />
            <figcaption>Ground Mounted</figcaption>
          </figure>
          <figure class="install-card install-deck">
            <img src="{{ asset('assets/photos/solar/commercial-rooftop-solar.jpg') }}" alt="Solar panels installed across a flat roof deck." />
            <figcaption>Roof Deck Mounted</figcaption>
          </figure>
          <figure class="install-card install-floating">
            <img src="{{ asset('assets/photos/solar/installation/floating-mounted-solar.jpg') }}" alt="Floating solar panels mounted over a water surface." />
            <figcaption>Floating Mounted</figcaption>
          </figure>
        </div>
      </section>

      <section class="partners" aria-label="Solar partner brands">
        <div class="partner-track">
          <span><img src="{{ asset('assets/partners/luxpowertek.png') }}" alt="LuxPower" /></span>
          <span><img src="{{ asset('assets/partners/solax.png') }}" alt="SolaX Power" /></span>
          <span><img class="partner-logo-wide" src="{{ asset('assets/partners/goodwe.svg') }}" alt="GoodWe" /></span>
          <span><img src="{{ asset('assets/partners/deye.png') }}" alt="Deye" /></span>
          <span><img class="partner-logo-wide" src="{{ asset('assets/partners/sungrow.svg') }}" alt="Sungrow" /></span>
          <span><img src="{{ asset('assets/partners/solis.png') }}" alt="Solis" /></span>
          <span><img src="{{ asset('assets/partners/luxpowertek.png') }}" alt="" /></span>
          <span><img src="{{ asset('assets/partners/solax.png') }}" alt="" /></span>
          <span><img class="partner-logo-wide" src="{{ asset('assets/partners/goodwe.svg') }}" alt="" /></span>
          <span><img src="{{ asset('assets/partners/deye.png') }}" alt="" /></span>
          <span><img class="partner-logo-wide" src="{{ asset('assets/partners/sungrow.svg') }}" alt="" /></span>
          <span><img src="{{ asset('assets/partners/solis.png') }}" alt="" /></span>
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

