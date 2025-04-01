@include('layouts.header')
      <section class="visa-bl-hero flight-page">
        <img src="{{ asset('uploads/' . $pageContent->image ) }}" alt="{{ $pageContent->title }}" class="dmHoliday-hero-image" />
        <div class="dmHoliday-hero-overlay"></div>
        <div class="dmHoliday-hero-content">
          <h1 class="dmHoliday-hero-title">{{ $pageContent->title }}</h1>
        </div>
      </section>

    <div class="visa-container">
      <header class="visa-header">
        <span class="visa-heading-pill">Visa Services</span>
        <h1>Visa Services – Your Trusted Partner for International Travel</h1>
        <p class="text-center">At Trav-TM, we help you navigate the visa process with confidence. Whether you’re heading for a family vacation, a business trip, or 
        pursuing higher education, we offer expert assistance every step of the way. From documentation to submission, we handle the details so 
        you can focus on your plans.</p>
      </header>
      @php $visaServices = $pageContent->subcategories; @endphp
      <div class="visa-visa-grid">
        @foreach($visaServices as $visaService) 
        <div class="visa-service-card visa-bg-blue-50">
          @if($visaService->image !== null)
          <img src="{{ asset('upload/subcategory/' . $visaService->image) }}" class="w-100" />
          @endif
          <h3>{{ $visaService->name }}</h3>
          {!! $visaService->description !!}
          <button onclick="openPopup()" class="visa-btn" data-type="{{ $visaService->name }}">Consult Now</button>
        </div>
        @endforeach
      </div>

      <div class="visa-why-choose-us">
        <h2 class="text-center">Why Choose Trav-TM for Visa Services?</h2>
        <div class="visa-benefits-grid">
          <div class="visa-benefit">
            <div class="visa-benefit-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  ]<path d="M4 12l4 4 4-4-4-4-4 4z"></path>
                  <path d="M20 12l-4 4-4-4 4-4 4 4z"></path>
                  <path d="M8 16l4 4 4-4"></path>
                  <circle cx="12" cy="4" r="2"></circle>
                  <path d="M12 6v2"></path>
              </svg>
            </div>

            <h3>Experienced Guidance</h3>
            <p>Our team understands visa regulations and provides accurate advice to avoid rejections.</p>
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
            <h3>Efficient Processing</h3>
            <p>We handle the paperwork and submission, helping you save time and avoid errors.</p>
          </div>

          <div class="visa-benefit">
            <div class="visa-benefit-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24" >
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
              </svg>
            </div>
            <h3>Global Reach</h3>
            <p>Whether you’re applying for popular destinations or niche countries, we’ve got you covered.</p>
          </div>
        </div>
      </div>
      <header class="visa-header">
        <h2 class="text-center">Start Your Visa Process with Us</h2>
        <div class="divider"></div>
        <p class="text-center">Whether you’re traveling for leisure, work, or education, Trav-TM ensures your visa application is handled efficiently. Get in touch with us today and let us make your visa process smooth and straightforward.</p>
      </header>
    </div>
@include('layouts.footer2')
<div class="overlay" id="overlay">
  <div class="popup">
    <button class="close-btn" id="close-popup-btn">&times;</button>
    <h2>Consult Now</h2>
    <form id="dmHl-inquiryForm" method="post" action="{{ route('formSubmit') }}">
      <div class="dmHl-form-grid">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="visa_type" value="">
        <input type="text" name="name" placeholder="Your Name" class="dmHl-form-input" required />
        <input type="email" name="email" placeholder="Email Address" class="dmHl-form-input" required />
      </div>
      <div class="dmHl-form-grid">
        <input type="tel" name="phone" placeholder="Phone Number" class="dmHl-form-input" required />
        <input type="text" name="destination" placeholder="Preferred Destination" class="dmHl-form-input" required />
      </div>
      <textarea placeholder="Additional Requirements" class="dmHl-form-input" rows="4" ></textarea>
      <button type="submit" class="dmHl-btn-primary">Consult</button>
    </form>
  </div>
</div>
<script>

  // Open popup
  function openPopup(){
        const btn = event.target;
        const visaType = btn.getAttribute('data-type');
        document.querySelector('input[name="visa_type"]').value = visaType;
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