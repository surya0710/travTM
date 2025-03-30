@include('layouts.header')
    <section class="dmHoliday-hero">
      <img
        src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
        alt="Domestic Travel"
        class="dmHoliday-hero-image"
      />
    </section>
    <section>
      <div class="get-in-touch-container">
        <h1>{{ json_decode($pageContent->content, true)[0]['heading'] }}</h1>
        <p class="description">{{ json_decode($pageContent->content, true)[0]['description'] }}</p>
        <div class="content-grid">
          <div class="contact-info">
            <!-- Tollfree Number -->
            <div class="contact-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                  />
                </svg>
              </div>
              <div class="contact-details">
                <h2>Contact Number</h2>
                <a href="tel:{{ $webSettings->website_phone }}" class="text-decoration-none"><p class="phone-number">{{ $webSettings->website_phone }}</p></a>
                <p class="availability">
                  Available Monday to Saturday, 10 AM - 7 PM
                </p>
              </div>
            </div>

            <!-- Customer Email ID -->
            <div class="contact-item">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                  />
                </svg>
              </div>
              <div class="contact-details">
                <h2>Email ID</h2>
                <a href="mailto:{{ $webSettings->website_email }}" class="text-decoration-none"><p class="email">{{ $webSettings->website_email }}</p></a>
                <p class="availability">
                  For inquiries, support, or collaborations, feel free to drop us an email.
              </div>
            </div>

            <!-- Corporate Office -->
            <div class="contact-item">
              <div class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                  />
                </svg>
              </div>
              <div class="contact-details">
                <h2>📍 Office Address</h2>
                <div class="address">
                  <p>Trav-TM Private Limited</p>
                  <p>{{ $webSettings->website_address }}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Map Section -->
          <div class="map-section">
            <div><h2>📍 View on Google Maps</h2></div>
            <iframe src="{{ $webSettings->website_map }}" 
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div class="grid-container contact-form-padding">
          <div class="contact-form">
            <h2 class="text-center">Send Us a Message</h2>
              <form class="fl-inquiry-form">
                <div class="fl-form-grid">
                  <input type="text" name="name" placeholder="Full Name" required="">
                  <input type="email" placeholder="Email Address" required="">
                  <input type="text" name="phone" onkeydown="return event.key.match(/[0-9]/) || event.key === 'Backspace' || event.key === 'Tab' || event.key === 'ArrowLeft' || event.key === 'ArrowRight'" placeholder="Phone Number" required="">
                  <select name="subject" required>
                    <option value="" disabled selected hidden>What we can help you with?</option>
                    @foreach($menu as $list)
                    <option value="{{ $list->name }}">{{ $list->name }}</option>
                    @endforeach
                  </select>
                  <textarea name="message" placeholder="Additional Message" rows="4"></textarea>
                  <button type="submit" class="fl-submit-button">
                    Get in Touch
                  </button>
                </div>
              </form>
          </div>
      </div>
    </section>

@include('layouts.footer2')