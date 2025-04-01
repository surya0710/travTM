@include('layouts.header')
    <section class="hl-hero">
        <img
          src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1920&q=80"
          alt="Travel Hero"
          class="hero-image"
        />
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <h1 class="hero-title">Discover Your Perfect Stay</h1>
          <p class="hero-subtitle">Luxury accommodations at unbeatable prices</p>
        </div>
      </section>

    <!-- Overview Section -->
    <section class="overview">
      <h2>Hotel Booking Services – Comfort & Convenience Across the Globe</h2>
      <p class="text-center">Whether you’re traveling for business or leisure, we help you find and book the ideal hotel to match your needs. From budget-friendly
       stays to luxurious resorts, we provide seamless hotel booking services for domestic and international destinations.</p>
    </section>

    <!-- Why Choose Us -->
    <section class="fl-benefits">
        <div class="fl-container">
          <div class="fl-section-header">
            <h2>Why Choose Us</h2>
            <p>
              Experience the best in flight booking with our premium services
              and dedicated support.
            </p>
          </div>

          <div class="fl-benefits-grid">
            <div class="fl-benefit-card">
              <div class="fl-benefit-icon">🛡️</div>
              <h3>Global Network</h3>
              <p>Access to hotels and resorts worldwide, offering a range of options tailored to your preferences.</p>
            </div>
            <div class="fl-benefit-card">
              <div class="fl-benefit-icon">👥</div>
              <h3>Customized Recommendations</h3>
              <p>We understand your requirements and suggest the best accommodation for your trip, ensuring maximum comfort.</p>
            </div>
            <div class="fl-benefit-card">
              <div class="fl-benefit-icon">💳</div>
              <h3>Competitive Rates</h3>
              <p>Get the best deals and offers on your hotel bookings with no hidden charges.</p>
            </div>
            <div class="fl-benefit-card">
              <div class="fl-benefit-icon">⏰</div>
              <h3>24/7 Support</h3>
              <p>Our team is available round-the-clock to assist you with booking modifications or queries.</p>
            </div>
          </div>
        </div>
    </section>

    <!-- Domestic Hotels Section -->
    <section id="domestic" class="hotels-section">
      <h2>Our Hotel Services Includes</h2>
      <div class="hotels-grid">
        <div class="hotel-card">
          <div class="hotel-info">
            <h3>Domestic Hotel Bookings</h3>
            <p class="text-center">Book hotels in major cities, hill stations, beach destinations, and cultural hubs across India.</p>
            <p class="text-center">Options available for business travelers, families, couples, and solo travelers.</p>
          </div>
        </div>
        <div class="hotel-card">
          <div class="hotel-info">
            <h3>International Hotel Bookings</h3>
            <p class="text-center">Reserve hotels in popular travel destinations worldwide, including beach resorts, city hotels, countryside retreats, and luxury properties.</p>
            <p class="text-center">Assistance with group bookings for corporate or family trips.</p>
          </div>
        </div>
        <div class="hotel-card">
          <div class="hotel-info">
            <h3>Tailored Stays for Every Traveler</h3>
            <p>Business Hotels: Centrally located with meeting facilities.</p>
            <p>Leisure Resorts: Scenic properties with entertainment and relaxation amenities.</p>
            <p>Family-Friendly Hotels: Spacious rooms and kid-friendly services.</p>
            <p>Romantic Getaways: Elegant stays with special amenities for couples.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- International Hotels Section -->
    <div class="visa-container">
        <div class="visa-why-choose-us">
            <h2 class="text-center">How We Simplify Your Hotel Booking?</h2>
            <div class="visa-benefits-grid">
            <div class="visa-benefit">
                <div class="visa-benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 12l4 4 4-4-4-4-4 4z"></path>
                        <path d="M20 12l-4 4-4-4 4-4 4 4z"></path>
                        <path d="M8 16l4 4 4-4"></path>
                        <circle cx="12" cy="4" r="2"></circle>
                        <path d="M12 6v2"></path>
                    </svg>
                </div>

                <h3>Personalized Assistance</h3>
                <p>Share your preferences, and we’ll suggest the best hotel options based on your location, budget, and needs.</p>
            </div>

            <div class="visa-benefit">
                <div class="visa-benefit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24">
                        <path d="M6 2h8l6 6v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"></path>
                        <path d="M14 2v6h6"></path>
                        <path d="M9 12h6"></path>
                        <path d="M9 16h6"></path>
                    </svg>
                </div>
                <h3>Seamless Booking Process</h3>
                <p>Our team handles the entire booking process, ensuring a smooth and hassle-free experience.</p>
            </div>

            <div class="visa-benefit">
                <div class="visa-benefit-icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M12 6v6l4 2"></path>
                  </svg>
                </div>
                <h3>Flexible Check-In & Check-Out Options</h3>
                <p>We accommodate special requests to suit your travel plans.</p>
            </div>
            </div>
        </div>
    </div>
    
    <section class="hl-form-section">
      <div class="hl-container">
        <h2 class="section-title">Get the Best Hotel Deals</h2>
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