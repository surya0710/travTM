@include('layouts.header')
    <section class="visa-bl-hero flight-page">
      <img src="{{ asset('uploads/' . $pageContent->image ) }}" alt="Visa Services" class="visa-bl-hero-image" />
      <div class="visa-bl-hero-overlay"></div>
      <div class="visa-bl-hero-content">
        <h1 class="visa-bl-hero-title">{{ $pageContent->name }}</h1>
        <!-- <p class="visa-bl-hero-subtitle">
          Navigate the visa application process with ease. Our experienced team
          provides comprehensive visa services for various categories.
        </p> -->
      </div>
    </section>

    <div class="visa-container">
      <!-- <header class="visa-header">
        <span class="visa-heading-pill">Visa Services</span>
        <h1>Expert Visa Assistance</h1>
        <p>
          Navigate the visa application process with ease. Our experienced team
          provides comprehensive visa services for various categories.
        </p>
      </header> -->
      @php $events = $pageContent->subcategories; @endphp
      <div class="visa-visa-grid">
        @foreach($events as $event) 
        <div class="visa-service-card visa-bg-blue-50">
          <svg class="visa-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
          </svg>
          <h3>{{ $event->name }}</h3>
          {!! $event->description !!}
          <a href="" class="visa-btn">Learn More</a>
        </div>
        @endforeach
      </div>

      <div class="events-why-choose-us">
        <h2 class="text-center">Why Travel with Trav-TM?</h2>
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
            <h3>Complete Planning & Coordination</h3>
            <p>From bookings to event execution, we manage everything.</p>
          </div>

          <div class="visa-benefit">
            <div class="visa-benefit-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="2" x2="12" y2="22" />
                <path d="M17 6C17 4.343 14.761 3 12 3C9.239 3 7 4.343 7 6C7 8 9 9 12 9C15 9 17 10 17 12C17 14 14.761 15 12 15C9.239 15 7 13.657 7 12" />
            </svg>
            </div>
            <h3>Cost-Effective Travel Solutions</h3>
            <p>Benefit from group discounts and budget-friendly options.</p>
          </div>

          <div class="visa-benefit">
            <div class="visa-benefit-icon">
              <svg width="30" height="24" fill="currentColor" class="bi bi-airplane" viewBox="0 0 20 20">
                <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849m.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1s-.458.158-.678.599"/>
              </svg>
            </div>
            <h3>Customized Travel Plans</h3>
            <p>Every trip is planned according to your group’s preferences.</p>
          </div>
          <div class="visa-benefit">
            <div class="visa-benefit-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            </div>
            <h3>Dedicated Support</h3>
            <p>Our team is available throughout your journey to assist you.</p>
          </div>
        </div>
      </div>

      <section>
        <div class="about-sec-container">
          <!-- Hero Section -->
          <div class="about-us-hero">
            <h1>How It Works</h1>
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
  </section>
@include('layouts.footer2')