<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Request a free AvanTech solar assessment and quote." />
    <title>Free Quote | AvanTech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
  </head>
  <body>
    <main class="page-shell quote-page">
      <section class="quote-hero">
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
              <a href="{{ route('services') }}">Services</a>
            </div>
            <div class="nav-links nav-right">
              <a href="{{ route('partner') }}">Partner With Us</a>
              <span class="nav-disabled" aria-disabled="true">FAQs</span>
              <a href="{{ route('contact') }}">Contact Us</a>
              <a class="contact-pill active" href="{{ route('quote') }}" aria-current="page">Free Quote</a>
            </div>
          </div>
        </nav>

        <div class="quote-hero-copy">
          <h1>We&rsquo;d be happy to help you reduce your electricity costs through a customized solar energy solution.</h1>
        </div>
      </section>

      <section class="quote-panel" aria-label="Request a free assessment">
        <form class="quote-form" action="mailto:sales.avantech@gmail.com" method="post" enctype="text/plain">
          <h2>Applicant Information</h2>

          <label for="quote-name">Full Name</label>
          <div class="quote-field quote-field-user">
            <input id="quote-name" name="Full Name" type="text" placeholder="Juan C. Dela Cruz" autocomplete="name" />
          </div>

          <label for="quote-phone">Phone Number</label>
          <div class="quote-field quote-field-phone">
            <input id="quote-phone" name="Phone Number" type="tel" placeholder="0912-345-6789" autocomplete="tel" />
          </div>

          <label for="quote-email">Email Address</label>
          <div class="quote-field quote-field-mail">
            <input id="quote-email" name="Email Address" type="email" placeholder="juandelacruz@example.com" autocomplete="email" />
          </div>

          <label for="quote-location">Location</label>
          <div class="quote-field quote-field-location">
            <input id="quote-location" name="Location" type="text" placeholder="City and Municipality" autocomplete="address-level2" />
          </div>

          <label for="quote-bill">Average Monthly Electric Bill</label>
          <div class="quote-field quote-field-bill">
            <input id="quote-bill" name="Average Monthly Electric Bill" type="text" placeholder="e.g. Php 3000" inputmode="decimal" />
          </div>

          <label for="quote-message">Message</label>
          <textarea id="quote-message" name="Message" placeholder="Tell us about your project..."></textarea>

          <button type="submit">
            Request Free Assessment
            <svg class="quote-submit-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
              <path d="M2.3 11.1 21 2.4c.8-.4 1.7.4 1.3 1.2l-8.7 18.7c-.4.8-1.5.8-1.9 0L8.9 16l-6.5-2.9c-.8-.4-.8-1.6-.1-2Z" />
              <path d="M9.4 15.4 21.1 3.8" />
            </svg>
          </button>
        </form>

        <aside class="quote-next" aria-label="What happens next">
          <h2>What happens next?</h2>
          <ol>
            <li>
              <strong>We&rsquo;ll Contact You</strong>
              <p>Our team will reach out to confirm your details and understand your requirements.</p>
            </li>
            <li>
              <strong>Site Assessment</strong>
              <p>We&rsquo;ll schedule a site visit or consultation to assess your property and energy needs.</p>
            </li>
            <li>
              <strong>Customized Proposal</strong>
              <p>You&rsquo;ll receive a personalized proposal with the best solution for you.</p>
            </li>
          </ol>
        </aside>
      </section>

      <footer class="footer quote-footer" id="contact">
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
    </main>
  </body>
</html>

