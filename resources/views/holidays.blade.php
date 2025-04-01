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
