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

    <!-- Quick Service Overview -->
    <section class="services">
      <div class="container">
        <h2 class="section-title">Our Services</h2>
        <div class="service-grid">
          <div class="service-card">
            <div class="service-icon">✈️</div>
            <h3>Flights</h3>
            <p>Best deals on domestic and international flights</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🏝️</div>
            <h3>Holidays</h3>
            <p>Curated holiday packages for every budget</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🏨</div>
            <h3>Hotels</h3>
            <p>Luxury to budget accommodations worldwide</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🛂</div>
            <h3>Visa Services</h3>
            <p>Hassle-free visa processing for all countries</p>
          </div>
          <div class="service-card">
            <div class="service-icon">📘</div>
            <h3>Passport</h3>
            <p>Assistance with passport applications and renewals</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🎭</div>
            <h3>Events</h3>
            <p>Special travel packages for global events</p>
          </div>
          <div class="service-card">
            <div class="service-icon">🛡️</div>
            <h3>Travel Insurance</h3>
            <p>Comprehensive coverage for worry-free travel</p>
          </div>
          <div class="service-card">
            <div class="service-icon">📝</div>
            <h3>Blog</h3>
            <p>Travel tips, guides, and inspiration</p>
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
            <p>Trusted by thousands of travelers since 2008</p>
          </div>
          <div class="feature">
            <div class="feature-icon">🌟</div>
            <h3>24/7 Customer Support</h3>
            <p>We're always here to assist you, anytime, anywhere</p>
          </div>
          <div class="feature">
            <div class="feature-icon">💰</div>
            <h3>Best Price Guarantee</h3>
            <p>We promise the most competitive rates for all services</p>
          </div>
          <div class="feature">
            <div class="feature-icon">❤️</div>
            <h3>98% Customer Satisfaction</h3>
            <p>Our clients love our personalized approach</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="featured-destinations section-padding">
      <div class="container">
        <div class="section-header">
          <h2>Featured Destinations</h2>
          <p>
            Explore our hand-picked selection of extraordinary destinations that
            promise unforgettable experiences.
          </p>
        </div>

        <div class="destinations-grid">
          <a href="#" class="destination-card">
            <div class="destination-image">
              <img
                src="https://images.unsplash.com/photo-1433086966358-54859d0ed716?auto=format&fit=crop&w=800&q=80"
                alt="Bali"
              />
            </div>
            <div class="destination-info">
              <div class="destination-header">
                <h3>Tropical Paradise Getaway</h3>
                <span class="price">$899</span>
              </div>
              <p class="location">Bali, Indonesia</p>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>4.8 (96 reviews)</span>
              </div>
            </div>
          </a>

          <a href="#" class="destination-card">
            <div class="destination-image">
              <img
                src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=800&q=80"
                alt="Greece"
              />
            </div>
            <div class="destination-info">
              <div class="destination-header">
                <h3>Historic Mediterranean Tour</h3>
                <span class="price">$1,299</span>
              </div>
              <p class="location">Athens, Greece</p>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>4.9 (118 reviews)</span>
              </div>
            </div>
          </a>

          <a href="#" class="destination-card">
            <div class="destination-image">
              <img
                src="https://images.unsplash.com/photo-1472396961693-142e6e269027?auto=format&fit=crop&w=800&q=80"
                alt="Switzerland"
              />
            </div>
            <div class="destination-info">
              <div class="destination-header">
                <h3>Alpine Adventure Escape</h3>
                <span class="price">$1,499</span>
              </div>
              <p class="location">Swiss Alps, Switzerland</p>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>4.7 (84 reviews)</span>
              </div>
            </div>
          </a>
        </div>

        <div class="text-center">
          <a href="#" class="btn btn-primary">View All Destinations</a>
        </div>
      </div>
    </section>

    <!-- Inquiry Form Section -->
    <section id="inquiry" class="inquiry-section section-padding">
      <div class="container">
        <div class="inquiry-grid">
          <div class="inquiry-content">
            <span class="subtitle">Get In Touch</span>
            <h2>Plan Your Perfect Journey</h2>
            <p>
              Fill out the form and our travel specialists will get back to you
              with a personalized quote and itinerary based on your preferences.
            </p>

            <div class="steps">
              <div class="step">
                <div class="step-number">1</div>
                <div class="step-content">
                  <h3>Share Your Travel Dreams</h3>
                  <p>
                    Tell us about your ideal vacation - destinations,
                    activities, and preferences.
                  </p>
                </div>
              </div>

              <div class="step">
                <div class="step-number">2</div>
                <div class="step-content">
                  <h3>Receive Custom Quote</h3>
                  <p>
                    Our experts will craft a tailored itinerary with pricing
                    options.
                  </p>
                </div>
              </div>

              <div class="step">
                <div class="step-number">3</div>
                <div class="step-content">
                  <h3>Book With Confidence</h3>
                  <p>
                    Finalize your booking with our secure payment system and
                    flexible terms.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="inquiry-form-container">
            <form class="inquiry-form">
              <h3>Request a Quote</h3>

              <div class="form-grid">
                <div class="form-group">
                  <label for="name">Full Name</label>
                  <input type="text" id="name" placeholder="Sachin" required />
                </div>

                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input
                    type="email"
                    id="email"
                    placeholder="sachin@gmail.com"
                    required
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" placeholder="+91 9747625026" />
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
                  <button type="button" class="traveller-btn">1</button>
                  <button type="button" class="traveller-btn active">2</button>
                  <button type="button" class="traveller-btn">3-5</button>
                  <button type="button" class="traveller-btn">6+</button>
                </div>
              </div>

              <div class="form-group">
                <label for="message">Special Requirements (Optional)</label>
                <textarea
                  id="message"
                  rows="3"
                  placeholder="Any specific requirements or preferences..."
                ></textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-full">
                Get My Personalized Quote
              </button>
            </form>
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
              <p>
                Obsessed with the idea of empowering the travelers with best
                vacation deals, Trav-TM is a product of Holiday Trav-TM Pvt.
                Ltd. We are an online marketplace that connects a traveler to
                multiple local travel agents. With the help of these 650+ local
                travel experts Trav-TM has been able to cater to the needs of
                over 10 Lac travelers on international tour holidays as well as
                domestic India tours.
              </p>
            </div>
            <button class="read-more">
              Read More
              <svg
                class="chevron"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                stroke="currentColor"
                stroke-width="2"
                fill="none"
              >
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </button>
          </div>
        </div>
        <div class="expandable-section">
          <h2>Disclaimer</h2>
          <div class="content-wrapper">
            <div class="content">
              <p>
                Trav-TM function solely as an intermediary, facilitating
                connections between travelers and travel agents. Our role is
                restricted to providing information about travel options and
                facilitating the booking process. While we strive to ensure a
                seamless travel experience, we cannot be held accountable for
                any deficiencies in the services rendered by travel agents. We
                neither bear any responsibility nor incur any liability toward
                owning, operating, or controlling the services offered by travel
                agents.
              </p>
            </div>
            <button class="read-more">
              Read More
              <svg
                class="chevron"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                stroke="currentColor"
                stroke-width="2"
                fill="none"
              >
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

@include('layouts.footer')