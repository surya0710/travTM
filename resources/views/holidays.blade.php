@include('layouts.header')
<section class="hl-hero">
      <img src="{{ asset('uploads/' . $pageContent->image ) }}" alt="{{ $pageContent->title }}" class="hero-image" />
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <h1 class="hero-title">Discover Your Perfect Holiday</h1>
        <p class="hero-subtitle">
          Explore amazing destinations around the world
        </p>
        <!-- <div class="nav-buttons">
          <a href="{{ route('domestic.Holidays') }}" class="btn-primary">Domestic Packages</a>
          <a href="{{ route('international.Holidays') }}" class="btn-primary" >International Packages</a>
        </div> -->
      </div>
    </section>

    <section id="domestic" class="hotels-section">
      <h2>Our Hotel Services Includes</h2>
      <div class="hotels-grid">
        <div class="hotel-card">
          <div class="hotel-info">
            <h3>Plan Your Next Holiday in India</h3>
            <p class="text-center">From serene beaches to scenic hill stations, Trav-TM offers customized domestic holiday packages that suit your 
              preferences. Whether you’re craving adventure, relaxation, or cultural experiences, we’ll help you create the perfect getaway.</p>
          </div>
        </div>
        <div class="hotel-card">
          <div class="hotel-info">
            <h3>Let’s Plan Your International Packages</h3>
            <p class="text-center">Looking for an exciting overseas vacation? Trav-TM offers customized international holiday packages designed around
               your interests. Whether you’re seeking a beach escape, a cultural experience, or an adventure trip, we’ll help you create unforgettable
                memories.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="hotels-section">
    <div class="visa-why-choose-us">
        <h2 class="text-center">Why Choose Trav-TM for Holiday Packages?</h2>
        <div class="visa-benefits-grid">
          <div class="visa-benefit">
            <div class="visa-benefit-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 6L5 10L3 8"></path>
                  <path d="M9 12L5 16L3 14"></path>
                  <path d="M9 18L5 22L3 20"></path>
                  <line x1="11" y1="6" x2="21" y2="6"></line>
                  <line x1="11" y1="12" x2="21" y2="12"></line>
                  <line x1="11" y1="18" x2="21" y2="18"></line>
              </svg>
            </div>

            <h3>Tailored Itineraries</h3>
            <p>We design holiday plans based on your preferences.</p>
          </div>

          <div class="visa-benefit">
            <div class="visa-benefit-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="6" r="4"></circle>
                <path d="M4 20c0-4 4-7 8-7s8 3 8 7"></path>
              </svg>
            </div>
            <h3>Experienced Team</h3>
            <p>Our travel experts recommend hidden gems and popular spots.</p>
          </div>

          <div class="visa-benefit">
            <div class="visa-benefit-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="24" height="24">
              <!-- Travel Bag -->
              <rect x="6" y="7" width="12" height="10" rx="2" ry="2"></rect>
              <path d="M9 7V4a3 3 0 0 1 6 0v3"></path>
              <line x1="6" y1="17" x2="6" y2="21"></line>
              <line x1="18" y1="17" x2="18" y2="21"></line>
            </svg>
            </div>
            <h3>Seamless Travel</h3>
            <p>From transport to accommodation, we manage it all.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="hl-form-section">
      <div class="hl-container">
        <h2 class="section-title">Plan Your Dream Holiday</h2>
        <p class="section-subtitle">
          Let us help you create the perfect custom package
        </p>
        <div class="hl-form-container">
          <form id="inquiryForm">
            <div class="form-grid">
              <input
                type="text"
                placeholder="Your Name"
                class="form-input"
                required
              />
              <input
                type="email"
                placeholder="Email Address"
                class="form-input"
                required
              />
            </div>
            <div class="form-grid">
              <input
                type="tel"
                placeholder="Phone Number"
                class="form-input"
                required
              />
              <input
                type="text"
                placeholder="Preferred Destination"
                class="form-input"
                required
              />
            </div>
            <div class="form-grid">
              <input type="date" class="form-input" required />
              <input
                type="number"
                placeholder="Number of Travelers"
                class="form-input"
                required
              />
            </div>
            <textarea
              placeholder="Additional Requirements"
              class="form-input"
              rows="4"
            ></textarea>
            <button type="submit" class="btn-primary" style="width: 100%">
              Send Inquiry
            </button>
          </form>
        </div>
      </div>
    </section>

    
@include('layouts.footer2')
