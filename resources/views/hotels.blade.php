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
          <p class="hero-subtitle">
            Luxury accommodations at unbeatable prices
          </p>
          <div class="nav-buttons">
            <a href="#" class="btn-primary">Domestic Hotels</a>
            <a href="#" class="btn-primary"
              >International Hotels</a
            >
          </div>
        </div>
      </section>

    <!-- Overview Section -->
    <section class="overview">
      <h2>Our Hotel Booking Services</h2>
      <div class="services-grid">
        <div class="service-card">
          <i class="fas fa-hotel"></i>
          <h3>Premium Hotels</h3>
          <p>Access to over 100,000 hotels worldwide</p>
        </div>
        <div class="service-card">
          <i class="fas fa-concierge-bell"></i>
          <h3>Best Service</h3>
          <p>24/7 customer support for all bookings</p>
        </div>
        <div class="service-card">
          <i class="fas fa-percent"></i>
          <h3>Best Rates</h3>
          <p>Guaranteed lowest prices and special deals</p>
        </div>
      </div>
    </section>

    <!-- Domestic Hotels Section -->
    <section id="domestic" class="hotels-section">
      <h2>Domestic Hotels</h2>
      <div class="hotels-grid">
        <div class="hotel-card">
          <img
            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=500&auto=format"
            alt="Luxury Hotel"
          />
          <div class="hotel-info">
            <h3>Luxury Resort Mumbai</h3>
            <p>Starting from ₹8,999/night</p>
            <button
              class="inquiry-btn"
              onclick="openInquiryForm('Luxury Resort Mumbai')"
            >
              Inquire Now
            </button>
          </div>
        </div>
        <div class="hotel-card">
          <img
            src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?w=500&auto=format"
            alt="Beach Resort"
          />
          <div class="hotel-info">
            <h3>Goa Beach Resort</h3>
            <p>Starting from ₹7,499/night</p>
            <button
              class="inquiry-btn"
              onclick="openInquiryForm('Goa Beach Resort')"
            >
              Inquire Now
            </button>
          </div>
        </div>
        <div class="hotel-card">
          <img
            src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=500&auto=format"
            alt="Mountain Retreat"
          />
          <div class="hotel-info">
            <h3>Shimla Mountain Retreat</h3>
            <p>Starting from ₹6,999/night</p>
            <button
              class="inquiry-btn"
              onclick="openInquiryForm('Shimla Mountain Retreat')"
            >
              Inquire Now
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- International Hotels Section -->
    <section id="international" class="hotels-section">
      <h2>International Hotels</h2>
      <div class="hotels-grid">
        <div class="hotel-card">
          <img
            src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=500&auto=format"
            alt="Dubai Hotel"
          />
          <div class="hotel-info">
            <h3>Dubai Luxury Palace</h3>
            <p>Starting from $299/night</p>
            <button
              class="inquiry-btn"
              onclick="openInquiryForm('Dubai Luxury Palace')"
            >
              Inquire Now
            </button>
          </div>
        </div>
        <div class="hotel-card">
          <img
            src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=500&auto=format"
            alt="Bangkok Hotel"
          />
          <div class="hotel-info">
            <h3>Bangkok City Resort</h3>
            <p>Starting from $199/night</p>
            <button
              class="inquiry-btn"
              onclick="openInquiryForm('Bangkok City Resort')"
            >
              Inquire Now
            </button>
          </div>
        </div>
        <div class="hotel-card">
          <img
            src="https://images.unsplash.com/photo-1445019980597-93fa8acb246c?w=500&auto=format"
            alt="Maldives Resort"
          />
          <div class="hotel-info">
            <h3>Maldives Paradise</h3>
            <p>Starting from $499/night</p>
            <button
              class="inquiry-btn"
              onclick="openInquiryForm('Maldives Paradise')"
            >
              Inquire Now
            </button>
          </div>
        </div>
      </div>
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

    <section class="testimonials">
        <div class="tls-container hotels-section">
            <h2>What Our Guests Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="stars">
                        ★★★★★
                    </div>
                    <p>"Amazing service and beautiful hotels. Will definitely book again!"</p>
                    <h4>- Sarah Johnson</h4>
                </div>
                <div class="testimonial-card">
                    <div class="stars">
                        ★★★★★
                    </div>
                    <p>"The best rates I've found anywhere. Excellent customer service!"</p>
                    <h4>- Michael Chen</h4>
                </div>
                <div class="testimonial-card">
                    <div class="stars">
                        ★★★★★
                    </div>
                    <p>"Seamless booking process and wonderful stays every time."</p>
                    <h4>- Emma Thompson</h4>
                </div>
            </div>
        </div>
    </section>
@include('layouts.footer2')