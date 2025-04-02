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
        <h2 class="section-title">{{ json_decode($pageContent->content, true)[0]['heading'] }}</h2>
        <p class="text-center">{{ json_decode($pageContent->content, true)[0]['description'] }}</p>
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
    <!-- <section class="splide-section">
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
        <div class="splide__pagination"></div>
      </div>
    </section> -->

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
            <form class="inquiry-form" method="post" action="{{ route('formSubmit') }}">
              <h3>Request a Quote</h3>
              @csrf
              <input type="hidden" name="service" value="Home Page Form" />
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
                  maxlength="10" minlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" />
              </div>

              <div class="form-grid">
                <div class="form-group">
                  <label>Destination Type</label>
                  <div class="toggle-buttons">
                    <button type="button" class="toggle-btn active" id="domestic-btn">
                      Domestic
                    </button>
                    <button type="button" class="toggle-btn" id="international-btn">
                      International
                    </button>
                  </div>
                </div>
                <div class="form-group">
                  <label>Destination</label>
                  <select name="destination" required id="destination-select"></select>
                </div>
              </div>
              <div class="form-group">
                  <label for="travel-date">Travel Date</label>
                  <input type="date" id="travel-date" name="travelDate" required />
              </div>
              <div class="form-group">
                <label>Number of Travellers</label>
                <div class="traveller-buttons">
                  <input type="hidden" name="travellers">
                  <button type="button" class="traveller-btn">1-2</button>
                  <button type="button" class="traveller-btn">3-5</button>
                  <button type="button" class="traveller-btn">6+</button>
                </div>
              </div>

              <div class="form-group">
                <label for="message">Special Requirements (Optional)</label>
                <textarea id="message" name="message" rows="3" placeholder="Any specific requirements or preferences..."></textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-full">Submit Your Inquiry</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="testimonials">
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
    </section> -->

    <!-- Blog Highlights Section -->
    <section class="blog-section section-padding blog-section-margin">
      <div class="container">
        <div class="blog-header">
          <div>
            <h2>Latest from Our Blog</h2>
            <p>
              Travel stories, tips, and insights to inspire your next adventure.
            </p>
          </div>
          <a href="{{ route('blog.index') }}" class="btn btn-outline"
            >View All Posts <i class="fas fa-arrow-right"></i
          ></a>
        </div>

        <div class="blog-grid" id="blogGrid">
          @foreach($blogs as $blog)
          <a href="{{ route('blog.detail' , ['slug' => $blog->slug]) }}" class="blog-card">
            @if($blog->image_file != null)
            <div class="blog-image">
              <img src="{{ asset('upload/blog/' . $blog->image_file) }}" alt="{{ $blog->title }}" />
            </div>
            @endif
            <div class="blog-content">
              <div class="blog-meta">
                <!-- <span class="blog-category">Travel Tips</span> -->
                <span class="blog-date">{{ $blog->created_at->format('M d, Y') }}</span>
              </div>
              <h3>{{ $blog->title }}</h3>
              <p>{{ Str::limit(strip_tags($blog->description), 150) }}</p>
              <span class="read-more">Read More <i class="fas fa-arrow-right"></i></span>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </section>
    <!-- readmore -->
    <section class="read-more-section">
      <div class="container-readmore">
        <div class="expandable-section">
          <h2>{{ json_decode($pageContent->content, true)[1]['heading'] }}</h2>
          <div class="content-wrapper">
            <div class="content">
              <p>{{ json_decode($pageContent->content, true)[1]['description'] }}</p>
            </div>
          </div>
        </div>
        <div class="expandable-section">
          <h2>{{ json_decode($pageContent->content, true)[2]['heading'] }}</h2>
          <div class="content-wrapper">
            <div class="content">
              <p>{{ json_decode($pageContent->content, true)[2]['description'] }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
@include('layouts.footer')
<script>

  document.querySelectorAll('.traveller-btn').forEach(button => {
      button.addEventListener('click', function() {
          const travellerCount = this.textContent.trim();
          document.querySelector('input[name="travellers"]').value = travellerCount;
      });
  });

  const domesticStates = [
      "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Goa", "Gujarat",
      "Haryana", "Himachal Pradesh", "Jharkhand", "Karnataka", "Kerala", "Maharashtra", 
      "Madhya Pradesh", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", 
      "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Telangana", "Uttar Pradesh", 
      "Uttarakhand", "West Bengal", "Andaman & Nicobar (UT)", "Chandigarh (UT)", 
      "Dadra & Nagar Haveli and Daman & Diu (UT)", "Delhi (NCT)", "Jammu & Kashmir (UT)", 
      "Ladakh (UT)", "Lakshadweep (UT)", "Puducherry (UT)"
  ];

  const internationalCountries = [
      "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina",
      "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados",
      "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina",
      "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde",
      "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China",
      "Colombia", "Comoros"
  ];

  const domesticBtn = document.getElementById("domestic-btn");
  const internationalBtn = document.getElementById("international-btn");
  const destinationSelect = document.getElementById("destination-select");

  // Function to update the select options
  function updateSelectOptions(options) {
      destinationSelect.innerHTML = `
          <option disabled value="" selected>Select Destination</option>
      `;
      options.forEach(option => {
          const opt = document.createElement("option");
          opt.value = option;
          opt.textContent = option;
          destinationSelect.appendChild(opt);
      });
  }

  // Load Domestic options on page load
  updateSelectOptions(domesticStates);

  // Event listener for Domestic button
  domesticBtn.addEventListener("click", () => {
      updateSelectOptions(domesticStates);
      domesticBtn.classList.add("active");
      internationalBtn.classList.remove("active");
  });

  // Event listener for International button
  internationalBtn.addEventListener("click", () => {
      updateSelectOptions(internationalCountries);
      internationalBtn.classList.add("active");
      domesticBtn.classList.remove("active");
  });
</script>