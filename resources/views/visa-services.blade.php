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
        <h1>Expert Visa Assistance</h1>
        <p>
          Navigate the visa application process with ease. Our experienced team
          provides comprehensive visa services for various categories.
        </p>
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
          <button onclick="openPopup()" class="visa-btn">Enquire Now</button>
        </div>
        @endforeach
      </div>

      <div class="visa-why-choose-us">
        <h2 class="text-center">Why Choose Our Visa Services?</h2>
        <div class="visa-benefits-grid">
          <div class="visa-benefit">
            <div class="visa-benefit-icon">
              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                width="24"
                height="24"
              >
                <circle cx="12" cy="12" r="10"></circle>
                <path
                  d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"
                ></path>
              </svg>
            </div>

            <h3>Global Coverage</h3>
            <p>Visa assistance for countries worldwide</p>
          </div>

          <div class="visa-benefit">
            <div class="visa-benefit-icon">
              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                width="24"
                height="24"
              >
                <path
                  d="M20.42 4.58a5.4 5.4 0 0 0-7.65 0l-.77.78-.77-.78a5.4 5.4 0 0 0-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z"
                ></path>
              </svg>
            </div>
            <h3>Expert Support</h3>
            <p>Dedicated visa consultants available 24/7</p>
          </div>

          <div class="visa-benefit">
            <div class="visa-benefit-icon">
              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                width="24"
                height="24"
              >
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              </svg>
            </div>
            <h3>Fast Processing</h3>
            <p>Quick and efficient visa processing</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@include('layouts.footer2')
@include('layouts.popupForm')