@include('layouts.header')
<section class="hl-hero">
      <img
        src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800"
        alt="Travel Hero"
        class="hero-image"
      />
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <h1 class="hero-title">Discover Your Perfect Holiday</h1>
        <p class="hero-subtitle">
          Explore amazing destinations around the world
        </p>
        <div class="nav-buttons">
          <a href="{{ route('domestic.Holidays') }}" class="btn-primary">Domestic Packages</a>
          <a href="{{ route('international.Holidays') }}" class="btn-primary" >International Packages</a>
        </div>
      </div>
    </section>

    <section class="hl-section">
      <div class="hl-container">
        <h2 class="section-title">Featured Destinations</h2>
        <p class="section-subtitle">
          Explore our most popular holiday packages
        </p>
        <div class="destinations-grid" id="destinationsGrid"></div>
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