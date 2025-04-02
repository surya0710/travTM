@include('layouts.header')
    <section class="visa-bl-hero flight-page">
      <img src="{{ asset('uploads/' . $pageContent->image ) }}" alt="Visa Services" class="visa-bl-hero-image" />
      <div class="visa-bl-hero-overlay"></div>
      <div class="visa-bl-hero-content">
        <h1 class="visa-bl-hero-title">{{ $pageContent->name }}</h1>
      </div>
    </section>

    <div class="visa-container">
      @php $events = $pageContent->subcategories; @endphp
      <div class="events-visa-grid">
        @foreach($events as $event) 
        <div class="visa-service-card visa-bg-blue-50">
          @if($event->image !== null)
          <img src="{{ asset('upload/subcategory/' . $event->image) }}" class="w-100" />
          @endif
          <h3>{{ $event->name }}</h3>
          {!! $event->description !!}
          <button onclick="openPopup()" class="visa-btn">Enquire Now</button>
        </div>
        @endforeach
      </div>

      <div class="events-why-choose-us">
        <h2 class="text-center">Why Book Your Group Travel with Us?</h2>
        <div class="divider"></div>
        <div class="events-benefits-grid">
          <div class="visa-benefit">
            <div class="visa-benefit-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 6L5 10L3 8" />
                <path d="M9 12L5 16L3 14" />
                <path d="M9 18L5 22L3 20" />
                <line x1="11" y1="6" x2="21" y2="6" />
                <line x1="11" y1="12" x2="21" y2="12" />
                <line x1="11" y1="18" x2="21" y2="18" />
            </svg>
            </div>
            <h3>Personalized Planning</h3>
            <p>Every group has different needs. We create custom travel plans that fit your preferences.</p>
          </div>

          <div class="visa-benefit">
            <div class="visa-benefit-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
              </svg>
            </div>
            <h3>Worldwide Network</h3>
            <p>Whether it’s an international adventure or a local retreat, we arrange everything seamlessly.</p>
          </div>

          <div class="visa-benefit">
            <div class="visa-benefit-icon">
              <svg width="24" height="24" fill="currentColor" class="bi bi-gift" viewBox="0 0 20 20">
                <path d="M2 6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6zm2-1a1 1 0 0 0-1 1v3.057l3-.815 3.178 1.664 1.857-2.188 3 .828V6h-13z"/>
              </svg>
            </div>
            <h3>Exclusive Deals</h3>
            <p>Get access to discounted group fares, special hotel rates, and added perks.</p>
          </div>
          <div class="visa-benefit">
            <div class="visa-benefit-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            </div>
            <h3>24/7 Support</h3>
            <p>Our team is available throughout your trip to ensure everything goes smoothly.</p>
          </div>
        </div>
      </div>

      <section>
        <div class="about-sec-container">
          <!-- Hero Section -->
          <div class="event-how-it-works">
            <h2 class="text-center">How It Works</h2>
            <div class="divider"></div>
            <ul class="text-left mt-2 list-style-none">
              <li>✔ Tell Us Your Requirements – Share details about your group size, destination, and event type.</li>
              <li>✔ Get a Customized Plan – We design a travel plan that fits your expectations and budget.</li>
              <li>✔ Confirm & Travel – Once everything is finalized, we handle the logistics while you focus on the experience.</li>
            </ul>
          </div>
        </div>
      </section>
    </div>
@include('layouts.footer2')

<div class="overlay" id="overlay">
  <div class="popup">
    <button class="close-btn" id="close-popup-btn">&times;</button>
    <h2>Enquire Now</h2>
    <form id="dmHl-inquiryForm" method="post" action="{{ route('formSubmit') }}">
      @csrf
      <input type="hidden" name="service" value="{{ $pageContent->title }}" />
      <div class="dmHl-form-grid">
        <input type="text" name="name" placeholder="Your Name" class="dmHl-form-input" required />
        <input type="email" name="email" placeholder="Email Address" class="dmHl-form-input" required />
      </div>
      <div class="dmHl-form-grid">
        <input type="text" class="dmHl-form-input" id="phone" name="phone" placeholder="Your Phone Number" required value="{{ old('phone') }}" 
          maxlength="10" minlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" />
        <select name="service" class="dmHl-form-input" required>
          <option value="">Select Service</option>
          @foreach($events as $event) 
            <option value="{{ $event->name }}">{{ $event->name }}</option>
          @endforeach
        </select>
      </div>
      <textarea placeholder="Additional Information" name="message" class="dmHl-form-input" rows="4" ></textarea>
      <button type="submit" class="dmHl-btn-primary">Enquire</button>
    </form>
  </div>
</div>
<script>

  // Open popup
  function openPopup(){
        overlay.style.display = "flex";
        document.body.style.overflow = "hidden"; // Prevent scrolling

        // Add animation
        overlay.style.opacity = 0;
        setTimeout(() => {
            overlay.style.transition = "opacity 0.3s ease";
            overlay.style.opacity = 1;
        }, 10);
  }
  document.addEventListener("DOMContentLoaded", function () {
    const closePopupBtn = document.getElementById("close-popup-btn");
    const overlay = document.getElementById("overlay");

    // Close popup
    function closePopup() {
      overlay.style.opacity = 0;
      setTimeout(() => {
        overlay.style.display = "none";
        document.body.style.overflow = "auto"; // Enable scrolling
        overlay.style.transition = "";

        // Reset the form when closing
        if (successMessage.style.display === "block") {
          form.reset();
          successMessage.style.display = "none";
        }
      }, 300);
    }

    closePopupBtn.addEventListener("click", closePopup);

    // Close when clicking outside the popup
    overlay.addEventListener("click", function (event) {
      if (event.target === overlay) {
        closePopup();
      }
    });
  });
</script>