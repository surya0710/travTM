@include('layouts.header')
<main class="fl-min-h-screen">
      <!-- Hero Section -->

      <section class="dmHoliday-hero flight-page">
        <img
          src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05"
          alt="Domestic Travel"
          class="dmHoliday-hero-image"
        />
        <div class="dmHoliday-hero-overlay"></div>
        <div class="dmHoliday-hero-content">
          <h1 class="dmHoliday-hero-title">Find Your Perfect Flight</h1>
          <p class="dmHoliday-hero-subtitle">
            Discover amazing deals on flights worldwide
          </p>
        </div>
      </section>

      <!-- Services Section -->
      <section class="fl-services">
        <div class="fl-FlightPage-container">
          <div class="fl-section-header">
            <h2>Our Flight Services</h2>
            <p>
              Choose from our wide range of flight services designed to make
              your travel experience seamless and enjoyable.
            </p>
          </div>

          <div class="fl-services-grid">
            <div class="fl-service-card">
              <div class="fl-service-icon">✈️</div>
              <h3>Domestic Flights</h3>
              <p>
                Explore the beauty of domestic destinations with our
                comprehensive flight network.
              </p>
            </div>
            <div class="fl-service-card">
              <div class="fl-service-icon">🌎</div>
              <h3>International Flights</h3>
              <p>
                Connect to worldwide destinations with competitive international
                airfares.
              </p>
            </div>
            <div class="fl-service-card">
              <div class="fl-service-icon">🎧</div>
              <h3>24/7 Support</h3>
              <p>Round-the-clock customer support for all your travel needs.</p>
            </div>
            <div class="fl-service-card">
              <div class="fl-service-icon">💳</div>
              <h3>Best Fares</h3>
              <p>
                Guaranteed best prices and flexible payment options for your
                convenience.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Flight Booking Section -->
      <section class="fl-booking-section">
        <div class="fl-container">
          <div class="fl-section-header">
            <h2>Flight Booking Made Easy</h2>
            <p>
              Whether you're traveling domestically or internationally, we've
              got you covered with the best flight options.
            </p>
          </div>

          <div class="fl-booking-grid">
            <div class="fl-booking-column">
              <div class="fl-booking-header">
                <span class="fl-badge">Domestic Flights</span>
                <h3>Explore Domestic Destinations</h3>
                <p>
                  Discover the beauty of domestic travel with our comprehensive
                  network of flights connecting major cities and hidden gems
                  across the country.
                </p>
              </div>
              <form class="fl-inquiry-form">
                <div class="fl-form-grid">
                  <input type="text" placeholder="Full Name" required />
                  <input type="email" placeholder="Email Address" required />
                  <input type="tel" placeholder="Phone Number" required />
                  <input type="text" placeholder="Departure City" required />
                  <input type="text" placeholder="Destination City" required />
                  <input type="date" required />
                  <textarea
                    placeholder="Additional Message"
                    rows="4"
                  ></textarea>
                  <button type="submit" class="fl-submit-button">
                    <span class="fl-icon">📤</span>
                    Submit Inquiry
                  </button>
                </div>
              </form>
            </div>

            <div class="fl-booking-column">
              <div class="fl-booking-header">
                <span class="fl-badge">International Flights</span>
                <h3>Connect Globally</h3>
                <p>
                  Embark on international adventures with our wide selection of
                  flights to destinations around the world at competitive
                  prices.
                </p>
              </div>
              <form class="fl-inquiry-form">
                <div class="fl-form-grid">
                  <input type="text" placeholder="Full Name" required />
                  <input type="email" placeholder="Email Address" required />
                  <input type="tel" placeholder="Phone Number" required />
                  <input type="text" placeholder="Departure City" required />
                  <input type="text" placeholder="Destination City" required />
                  <input type="date" required />
                  <textarea
                    placeholder="Additional Message"
                    rows="4"
                  ></textarea>
                  <button type="submit" class="fl-submit-button">
                    <span class="fl-icon">📤</span>
                    Submit Inquiry
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Benefits Section -->
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
              <h3>Secure Booking</h3>
              <p>
                Your transactions are protected with advanced security measures.
              </p>
            </div>
            <div class="fl-benefit-card">
              <div class="fl-benefit-icon">⏰</div>
              <h3>24/7 Support</h3>
              <p>
                Our dedicated team is available around the clock to assist you.
              </p>
            </div>
            <div class="fl-benefit-card">
              <div class="fl-benefit-icon">💳</div>
              <h3>Best Price Guarantee</h3>
              <p>We offer competitive prices and price match guarantees.</p>
            </div>
            <div class="fl-benefit-card">
              <div class="fl-benefit-icon">👥</div>
              <h3>Experienced Team</h3>
              <p>Our travel experts ensure a smooth booking experience.</p>
            </div>
          </div>
        </div>
      </section>
    </main>
@include('layouts.footer2')