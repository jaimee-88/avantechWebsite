<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us | AvanTech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
  </head>
  <body>
    <main class="page-shell">
      <section class="about-page-hero">
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
              <a class="active" href="{{ route('about') }}" aria-current="page">About Us</a>
              <a href="{{ route('services') }}">Services</a>
            </div>
            <div class="nav-links nav-right">
              <a href="{{ route('partner') }}">Partner With Us</a>
              <span class="nav-disabled" aria-disabled="true">FAQs</span>
              <a href="{{ route('contact') }}">Contact Us</a>
              <a class="contact-pill" href="{{ route('quote') }}">Free Quote</a>
            </div>
          </div>
        </nav>

        <div class="about-page-hero-content">
          <h1>Building a<br />Smarter Future</h1>
          <p>We provide integrated solutions that power businesses,<br />improve lives, and create a more sustainable tomorrow.</p>
        </div>
      </section>

      <section class="who-section">
        <div class="who-copy">
          <h2>Who we are</h2>
          <p>
            Avantech Integrated Technology Solutions, established in 2023, is dedicated to bringing smarter,
            safer, and more sustainable living to Filipino homes and businesses. We provide integrated solutions
            in solar energy, HVAC, and security systems-designed to make everyday life more comfortable, efficient,
            and secure. At Avantech, we don't just install technology-we upgrade the way people live, work, and
            experience their spaces.
          </p>
        </div>
        <div class="about-placeholder about-office-placeholder" aria-label="Commercial HVAC units"></div>
      </section>

      <section class="legacy-section">
        <div class="wave wave-left"></div>
        <div class="wave wave-right"></div>
        <h2>A Legacy of Growth<br />and Innovation.</h2>
        <div class="legacy-items">
          <article>
            <span>2006</span>
            <h3>Compact Design</h3>
            <p>HPB Airconditioning Services specializes in the installation, repair, and maintenance of both large and small air conditioning and ventilation system projects.</p>
          </article>
          <article>
            <span>2018</span>
            <h3>HPB.Air</h3>
            <p>HPB Airconditioning Services specializes in the installation, repair, and maintenance of both large and small air conditioning and ventilation system projects.</p>
          </article>
          <article>
            <span>2023</span>
            <h3>AvanTech Integrated</h3>
            <p>AvanTech Integrated Technology Solutions Inc. is dedicated to building a greener, safer, and more sustainable future through innovative technologies.</p>
          </article>
        </div>
      </section>

      <section class="mission-vision">
        <div class="about-placeholder mission-image" aria-label="Commercial rooftop solar installation"></div>
        <div class="mv-copy">
          <h2>Our Mission</h2>
          <p>
            Avantech Integrated Technology Solutions Inc. delivers high-quality design, installation, repair,
            maintenance and services for HVAC, Solar, and Security Systems. We are committed to providing
            innovative, reliable, and lasting solutions for industrial, commercial, and residential markets,
            ensuring exceptional value through skilled and professional services. Avantech is your one-stop
            partner for business needs.
          </p>
        </div>
        <div class="mv-copy">
          <h2>Our Vision</h2>
          <p>
            To be the trusted provider in delivering integrated, sustainable, and innovative solutions that
            empower business and create efficient, secure, and comfortable environment. And to provide innovative
            and cutting-edge solar energy solutions that empower the Filipino people, reduce reliance on conventional
            energy sources, and contribute to a cleaner, greener future by meeting the nation's growing power demands.
          </p>
        </div>
        <div class="about-placeholder vision-image" aria-label="Solar electrical installation technician"></div>
      </section>

      <footer class="footer" id="contact">
        <div class="footer-wave footer-wave-left"></div>
        <div class="footer-wave footer-wave-right"></div>
        <section class="footer-solutions" aria-label="Complete integrated solutions">
          <h2>Complete Integrated Solutions</h2>
          <div class="footer-solutions-grid">
            <article>
              <h3>Solar Solutions</h3>
              <p>High-performance solar panels, inverters, and systems for residential, commercial, and industrial applications</p>
              <a href="{{ route('solar-solutions') }}">Explore <span aria-hidden="true">&rsaquo;</span></a>
            </article>
            <article>
              <h3>HVAC Solutions</h3>
              <p>Energy-efficient heating, ventilation, and air conditioning systems tailored for comfort, quality, and optimal performance.</p>
              <a href="{{ route('hvac-solutions') }}">Explore <span aria-hidden="true">&rsaquo;</span></a>
            </article>
            <article>
              <h3>Security Solutions</h3>
              <p>Advanced Security systems including CCTV, access control, alarm systems, and integrated monitoring solutions for complete peace of mind.</p>
              <span class="service-card-disabled" aria-disabled="true">Explore <span aria-hidden="true">&rsaquo;</span></span>
            </article>
          </div>
        </section>
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
            <a class="footer-link" href="{{ route('services') }}"><span class="footer-link-text">Services Homepage</span><span class="footer-arrow" aria-hidden="true"></span></a>
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

