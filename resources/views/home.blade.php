@include('layouts.header')

    <!-- Hero Section -->
    <section class="splide-section splide-hero">
      <div class="splide hero-splide-main splide-hero" id="hero-carousel">
        <div class="splide__track">
          <ul class="splide__list hero-splide-list splide-overlay">
            @foreach($banners as $banner)
            <li class="splide__slide splide__slide_border hero-splide">
              <div class="hero-overlay"></div>
              <div class="splide-heroslide-content hero">
                <h1>{{ $banner->heading }}</h1>
                <p>{{ $banner->description }}</p>
                <button class="btn btn-primary">Get A Quote</button>
              </div>
              <img src="{{ asset('images/banners/' . $banner->image) }}" alt="Travel" class="full-image"/>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
      <!-- Pagination Dots -->
      <div class="splide__pagination"></div>
    </section>

    <section class="about">
      <div class="container">
        <h2 class="section-title">Welcome to Trav-TM – Your Trusted Travel and Visa Consultancy Partner</h2>
        <p class="text-center">At <strong>Trav-TM</strong>, we turn your travel dreams into reality. Whether you’re planning a leisure vacation, a business trip, or need expert guidance for your visa application, we are here to simplify the process for you. With our professional consultancy services, you can travel stress-free while we handle the complexities.</p>
      </div>
    </section>

    <!-- Quick Service Overview -->
    <section class="services">
      <div class="container">
        <h2 class="section-title">Our Services</h2>
        <div class="service-grid">
          <div class="service-card">
            <div class="service-icon">✈️</div>
            <h3>Flights</h3>
            <p>Get the <strong>best deals</strong> on domestic and international flights. Whether you're traveling for business or leisure, we help you find the most convenient and budget-friendly options.</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🏝️</div>
            <h3>Holidays</h3>
            <p>Discover curated holiday packages designed for <strong>every budget</strong>. From relaxing beach vacations to adventurous getaways, we create experiences tailored just for you.</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🏨</div>
            <h3>Hotels</h3>
            <p>Book your stay with ease! We offer a range of accommodations, from <strong>luxury resorts</strong> to <strong>budget-friendly hotels</strong>, ensuring comfort and convenience.</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🛂</div>
            <h3>Visa Services</h3>
            <p>Navigating visa applications made easy! We assist with <strong>visa processing</strong> for all countries, guiding you through the application and documentation process.</p>
          </div>
          <div class="service-card">
            <div class="service-icon">📘</div>
            <h3>Passport</h3>
            <p>Need help with your passport? We provide <strong>support for passport applications and renewals</strong>, ensuring a smooth and hassle-free experience.</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🎭</div>
            <h3>Events</h3>
            <p>Traveling for a special event? We offer <strong>custom travel packages</strong> for global events, making your experience seamless and memorable.</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🛡️</div>
            <h3>Travel Insurance</h3>
            <p>Enjoy worry-free travel with <strong>comprehensive insurance coverage</strong>, protecting you against unexpected events during your journey.</p>
          </div>
          <div class="service-card">
            <div class="service-icon">📝</div>
            <h3>Blog</h3>
            <p>Stay informed with our <strong>travel tips, guides, and inspiration</strong>. From destination insights to travel hacks, our blog keeps you updated and inspired.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- card carousel readmore -->
    <section class="splide-section">
      <div class="splide" id="carousel-card">
        <h2>Get The Best Out Of Your Next Getaway</h2>
        <br />
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide splide__slide_border">
              <img
                src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2c/21/20/c9/facadenight.jpg?w=1200&h=-1&s=1"
                alt="Travel"
                class="full-image"
              />
            </li>
            <li class="splide__slide splide__slide_border">
              <img
                src="https://3.imimg.com/data3/JV/KJ/MY-15827078/hotels-booking.jpg"
                alt="Hotel Room"
                class="full-image"
              />
            </li>
            <li class="splide__slide splide__slide_border">
              <img
                src="https://hblimg.mmtcdn.com/content/hubble/img/maldives/mmt/destination/m_destination_Maldives_landscape_l_400_640.jpg"
                alt="Travel"
                class="full-image"
              />
            </li>
            <li class="splide__slide splide__slide_border">
              <img
                src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2c/b0/c1/4c/boutique-hotels.jpg?w=1200&h=-1&s=1"
                alt="Airport"
                class="full-image"
              />
            </li>
            <li class="splide__slide splide__slide_border">
              <img
                src="https://www.arabianbusiness.com/cloud/2021/09/14/lp63F4Kk-choice-hotels.jpg"
                alt="Travel"
                class="full-image"
              />
            </li>
          </ul>
        </div>

        <!-- Pagination Dots -->
        <div class="splide__pagination"></div>
      </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose-us">
      <div class="container">
        <h2 class="section-title">Why Choose Us?</h2>
        <div class="features">
          <div class="feature">
            <div class="feature-icon">🏆</div>
            <h3>25+ Years Experience</h3>
            <p>Trusted by thousands of travelers since 2008, delivering reliable and expert travel solutions.</p>
          </div>
          <div class="feature">
            <div class="feature-icon">🌟</div>
            <h3>24/7 Customer Support</h3>
            <p>We're always available to assist you, anytime and anywhere, ensuring seamless travel experiences.</p>
          </div>
          <div class="feature">
            <div class="feature-icon">💰</div>
            <h3>Best Price Guarantee</h3>
            <p>Enjoy the most competitive rates for all our services, giving you great value for your money.</p>
          </div>
          <div class="feature">
            <div class="feature-icon">❤️</div>
            <h3>98% Customer Satisfaction</h3>
            <p>Our clients love our personalized approach, making their travel journeys smooth and memorable.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Inquiry Form Section -->
    <section id="inquiry" class="inquiry-section" style="margin-bottom: 1rem;">
      <div class="container">
        <div class="inquiry-grid">
          <div class="inquiry-content">
            <span class="subtitle">Get In Touch</span>
            <h2 class="text-left">Planning Your Next Trip? Let's Make It Easy!</h2>
            <p class="text-justify">Share your travel details with us, and we’ll help you create a perfect travel plan that suits your preferences. Whether you’re looking for a relaxing beach vacation, a fun-filled family trip, or an adventurous getaway, we’ve got you covered.</p>
            <div class="steps">
              <h3>What You’ll Get:</h3>
              <div class="step">
                <div class="step-number">1</div>
                <div class="step-content">
                  <h3>Travel Suggestions Just for You</h3>
                  <p>Get destination ideas and activities based on your interests.</p>
                </div>
              </div>

              <div class="step">
                <div class="step-number">2</div>
                <div class="step-content">
                  <h3>Transparent Pricing</h3>
                  <p>Receive a clear quote with all the details upfront.</p>
                </div>
              </div>

              <div class="step">
                <div class="step-number">3</div>
                <div class="step-content">
                  <h3>Friendly Support</h3>
                  <p>Our team will guide you at every step to ensure a smooth experience.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="inquiry-form-container">
            <form class="inquiry-form">
              <h3>Request a Quote</h3>
              @csrf
              <div class="form-grid">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" placeholder="Your Name" required value="{{ old('name') }}" />
                </div>

                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" id="email" name="email" placeholder="Your Email" required value="{{ old('email') }}" />
                </div>
              </div>

              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="Your Phone Number" required value="{{ old('phone') }}" 
                  onkeydown="return event.key === 'Backspace' || event.key === 'Tab' || event.key.match(/[0-9]/)" />
              </div>

              <div class="form-group">
                <label for="destination">Destination</label>
                <input
                  type="text"
                  id="destination"
                  placeholder="Paris, Tokyo, Bali, etc."
                  required
                />
              </div>

              <div class="form-grid">
                <div class="form-group">
                  <label>Destination Type</label>
                  <div class="toggle-buttons">
                    <button type="button" class="toggle-btn active">
                      Domestic
                    </button>
                    <button type="button" class="toggle-btn">
                      International
                    </button>
                  </div>
                </div>

                <div class="form-group">
                  <label for="travel-date">Travel Date</label>
                  <input type="date" id="travel-date" required />
                </div>
              </div>

              <div class="form-group">
                <label>Number of Travellers</label>
                <div class="traveller-buttons">
                  <button type="button" class="traveller-btn">1-2</button>
                  <button type="button" class="traveller-btn">3-5</button>
                  <button type="button" class="traveller-btn">6+</button>
                </div>
              </div>

              <div class="form-group">
                <label for="message">Special Requirements (Optional)</label>
                <textarea id="message" rows="3" placeholder="Any specific requirements or preferences..."></textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-full">Submit Your Inquiry</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials">
        <div class="container hotels-section">
            <h2>What Our Client Say</h2>
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

    <!-- Blog Highlights Section -->
    <section class="blog-section section-padding">
      <div class="container">
        <div class="blog-header">
          <div>
            <h2>Latest from Our Blog</h2>
            <p>
              Travel stories, tips, and insights to inspire your next adventure.
            </p>
          </div>
          <a href="#" class="btn btn-outline"
            >View All Posts <i class="fas fa-arrow-right"></i
          ></a>
        </div>

        <div class="blog-grid">
          <a href="#" class="blog-card">
            <div class="blog-image">
              <img
                src="https://images.unsplash.com/photo-1501854140801-50d01698950b?auto=format&fit=crop&w=600&q=80"
                alt="Packing Tips"
              />
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span class="blog-category">Travel Tips</span>
                <span class="blog-date">June 12, 2023</span>
              </div>
              <h3>10 Essential Items to Pack for Any Journey</h3>
              <p>
                Discover the must-have items that should be in every traveler's
                suitcase, regardless of the destination.
              </p>
              <span class="read-more"
                >Read More <i class="fas fa-arrow-right"></i
              ></span>
            </div>
          </a>

          <a href="#" class="blog-card">
            <div class="blog-image">
              <img
                src="https://images.unsplash.com/photo-1433086966358-54859d0ed716?auto=format&fit=crop&w=600&q=80"
                alt="Hidden Gems"
              />
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span class="blog-category">Destinations</span>
                <span class="blog-date">May 28, 2023</span>
              </div>
              <h3>Hidden Gems: Unexplored Destinations Worth Visiting</h3>
              <p>
                Escape the tourist crowds and discover these lesser-known but
                equally breathtaking locations around the world.
              </p>
              <span class="read-more"
                >Read More <i class="fas fa-arrow-right"></i
              ></span>
            </div>
          </a>

          <a href="#" class="blog-card">
            <div class="blog-image">
              <img
                src="https://images.unsplash.com/photo-1472396961693-142e6e269027?auto=format&fit=crop&w=600&q=80"
                alt="Cultural Experiences"
              />
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span class="blog-category">Culture</span>
                <span class="blog-date">April 15, 2023</span>
              </div>
              <h3>Immersive Cultural Experiences: Beyond Tourism</h3>
              <p>
                How to authentically connect with local cultures and create
                meaningful memories during your travels.
              </p>
              <span class="read-more"
                >Read More <i class="fas fa-arrow-right"></i
              ></span>
            </div>
          </a>
        </div>
      </div>
    </section>
    <!-- readmore -->
    <section class="read-more-section">
      <div class="container-readmore">
        <div class="expandable-section">
          <h2>Who We Are?</h2>
          <div class="content-wrapper">
            <div class="content">
              <p>At Trav-TM, we’re passionate about making travel simple and stress-free. From visa consultancy and flight bookings to custom travel packages, we help you plan every detail with precision. Our team offers expert guidance, ensuring you have a smooth and enjoyable travel experience.</p>
            </div>
          </div>
        </div>
        <div class="expandable-section">
          <h2>Disclaimer</h2>
          <div class="content-wrapper">
            <div class="content">
              <p>Trav-TM is a private travel consultancy offering expert guidance and assistance for visa applications, flight bookings, and customized travel packages. We do not represent or have any affiliation with government authorities or embassies. Our services are limited to consultancy and advisory support only.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

@include('layouts.footer')