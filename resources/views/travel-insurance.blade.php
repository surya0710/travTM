@include('layouts.header')
    <section class="visa-bl-hero flight-page">
      <img src="{{ asset('uploads/' . $pageContent->image ) }}" alt="Visa Services" class="visa-bl-hero-image" />
      <div class="visa-bl-hero-overlay"></div>
      <div class="visa-bl-hero-content">
        <h1 class="visa-bl-hero-title">{{ $pageContent->title }}</h1>
      </div>
    </section>

    <div class="about-sec-container">
        <!-- Hero Section -->
        <div class="about-us-hero">
        <h2 class="text-center">Secure Your Trip with the Right Travel Insurance</h2>
        <div class="divider"></div>
        <p class="text-center">Unexpected events can happen during travel, from medical emergencies to trip cancellations.</p>
        <p class="text-center">Trav-TM helps you choose the right travel insurance plan so you’re covered against unforeseen situations.</p>
        </div>
    </div>

    <div class="about-sec-container">
        <div class="about-us-hero">
            <h2 class="text-center">What Travel Insurance Covers?</h2>
            <div class="divider"></div>
            <ul class="mt-2 list-style-none">
                <li>✔ Medical Expenses – Covers medical treatment and hospital bills in case of an emergency.</li>
                <li>✔ Trip Cancellations & Delays – Financial protection if your trip is canceled or postponed.</li>
                <li>✔ Lost or Delayed Luggage – Compensation for baggage loss or late arrival.</li>
                <li>✔ Accidental Injury Coverage – Security in case of unexpected injuries while traveling.</li>
                <li>✔ Emergency Evacuation – Assistance for urgent medical transport when required.</li>
            </ul>
        </div>
    </div>

    <div class="visa-container">
        <div class="visa-why-choose-us">
            <h2 class="text-center">Why Get Travel Insurance Through Trav-TM?</h2>
            <div class="visa-benefits-grid">
            <div class="visa-benefit">
                <div class="visa-benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 12l4 4 4-4-4-4-4 4z"/>
                        <path d="M20 12l-4 4-4-4 4-4 4 4z"/>
                        <path d="M8 16l4 4 4-4"/>
                        <circle cx="12" cy="4" r="2"/>
                        <path d="M12 6v2"/>
                    </svg>
                </div>

                <h3>Personalized Suggestions</h3>
                <p>Choose a plan that suits your travel needs.</p>
            </div>

            <div class="visa-benefit">
                <div class="visa-benefit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24" >
                        <path d="M6 2h8l6 6v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"></path>
                        <path d="M14 2v6h6"></path>
                        <path d="M9 12h6"></path>
                        <path d="M9 16h6"></path>
                    </svg>
                </div>
                <h3>Easy Application Process</h3>
                <p>Quick and simple insurance selection with expert advice.</p>
            </div>

            <div class="visa-benefit">
                <div class="visa-benefit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="24" height="24">
                        <path d="M12 2v20"></path>
                        <path d="M16 5c-2-3-8-3-10 1s2 7 6 8 6 4 4 7-6 3-9 0"></path>
                    </svg>
                </div>
                <h3>Affordable Plans </h3>
                <p>Options available for individuals, families, and corporate travelers.</p>
            </div>
            </div>
        </div>
    </div>
@include('layouts.footer2')