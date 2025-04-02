@include('layouts.header')
<main class="fl-min-h-screen">
      <!-- Hero Section -->

      <section class="dmHoliday-hero flight-page">
        <img src="{{ asset('uploads/' . $pageContent->image ) }}" alt="{{ $pageContent->title }}" class="dmHoliday-hero-image" />
        <div class="dmHoliday-hero-overlay"></div>
        <div class="dmHoliday-hero-content">
          <h1 class="dmHoliday-hero-title">{{ $pageContent->title }}</h1>
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
                <!-- <span class="fl-badge">International Flights</span>
                <h3>Connect Globally</h3>
                <p>
                  Embark on international adventures with our wide selection of
                  flights to destinations around the world at competitive
                  prices.
                </p> -->
              </div>
              <img src="{{ asset('assets/flight-page.png') }}" class="w-100">
            </div>

            <div class="fl-booking-column">
              <div class="fl-booking-header">
                <!-- <span class="fl-badge">International Flights</span>
                <h3>Connect Globally</h3>
                <p>
                  Embark on international adventures with our wide selection of
                  flights to destinations around the world at competitive
                  prices.
                </p> -->
              </div>
              <form class="fl-inquiry-form" method="post" action="{{ route('formSubmit') }}">
                @csrf
                <input type="hidden" name="service" value="{{ $pageContent->title }}" />
                <div class="fl-form-grid">
                  <input type="text" name="name" placeholder="Full Name" required />
                  <input type="email" name="email" placeholder="Email Address" required />
                  <input type="tel" name="phone" placeholder="Phone Number" required maxlength="10" minlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" />
                  <input type="date" name="travelDate" required />
                  <div class="toggle-buttons">
                    <button type="button" class="toggle-btn active" id="domestic-btn">
                      Domestic
                    </button>
                    <button type="button" class="toggle-btn" id="international-btn">
                      International
                    </button>
                  </div>
                  <select name="destination" id="destination-select"></select>
                  <textarea name="message"
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
<script>
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