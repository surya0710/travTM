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
        <h2 class="text-center">Get Your Passport Without Delays</h2>
        <div class="divider"></div>
        <p>Whether you're applying for the first time, renewing an expired passport, or need urgent assistance, Trav-TM is here to help. Our team guides you through the process, ensuring all requirements are met for a smooth application.</p>
        </div>
    </div>

    <div class="about-sec-container">
        <div class="about-us-hero">
            <h2 class="text-center">Our Passport Services</h2>
            <div class="divider"></div>
            <ul class="text-left mt-2 list-style-none">
                <li>✔ New Passport Application – Complete support with forms, document verification, and appointment scheduling.</li>
                <li>✔ Passport Renewal – Assistance in renewing an expired or soon-to-expire passport.</li>
                <li>✔ Lost or Damaged Passport – Guidance on obtaining a duplicate passport.</li>
                <li>✔ Name/Address Change – Support for updating personal details in your passport.</li>
                <li>✔ Tatkal Passport Assistance – Help with urgent passport applications under the fast-track process.</li>
            </ul>
        </div>
    </div>

    <div class="visa-container">
        <div class="visa-why-choose-us">
            <h2 class="text-center">Why Choose Trav-TM?</h2>
            <div class="visa-benefits-grid">
            <div class="visa-benefit">
                <div class="visa-benefit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24" >
                        <path d="M6 2h8l6 6v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"></path>
                        <path d="M14 2v6h6"></path>
                        <path d="M9 12h6"></path>
                        <path d="M9 16h6"></path>
                    </svg>
                </div>

                <h3>Error-Free Documentation</h3>
                <p>Avoid common mistakes that cause delays.</p>
            </div>

            <div class="visa-benefit">
                <div class="visa-benefit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 6v6l4 2z"></path>
                    </svg>
                </div>
                <h3>Time-Saving Process</h3>
                <p>Get step-by-step assistance to complete your application quickly.</p>
            </div>

            <div class="visa-benefit">
                <div class="visa-benefit-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 16v-4"></path>
                        <circle cx="12" cy="8" r="1"></circle>
                    </svg>
                </div>
                <h3>Professional Guidance</h3>
                <p>Our team stays updated with the latest passport rules to ensure smooth processing.</p>
            </div>
            </div>
        </div>
    </div>
@include('layouts.footer2')