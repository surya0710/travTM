@include('layouts.header')
    <section class="dmHoliday-hero">
      <img
        src="https://worldjourney360.com/wp-content/uploads/2023/03/7081af86-072c-4812-95f2-fe8389ba1ead-1024x564-1.jpg"
        alt="Domestic Travel"
        class="dmHoliday-hero-image"
      />
      <div class="dmHoliday-hero-overlay"></div>
      <div class="dmHoliday-hero-content">
        <h1 class="dmHoliday-hero-title">{{ json_decode($pageContent->content, true)[0]['heading'] }}</h1>
        <p class="dmHoliday-hero-subtitle">{{ json_decode($pageContent->content, true)[0]['description'] }}</p>
      </div>
    </section>
    <section>
      <div class="about-sec-container">
        <!-- Hero Section -->
        <div class="about-us-hero">
          <h1>{{ json_decode($pageContent->content, true)[1]['heading'] }}</h1>
          <div class="divider"></div>
          <p class="text-center">{!! nl2br(e(json_decode($pageContent->content, true)[1]['description'])) !!}</p>
        </div>
      </div>
    </section>
    <section class="bg-light what-we-do">
      <div class="about-sec-container">
        <!-- Hero Section -->
        <div class="about-us-hero">
        <h1>{{ json_decode($pageContent->content, true)[2]['heading'] }}</h1>
          <div class="divider"></div>
          <p class="text-center">{!! nl2br(e(json_decode($pageContent->content, true)[2]['description'])) !!}</p>
        </div>
        <div class="row">
          <div class="service-grid">
            <div class="service-card animate-on-scroll animated">
              <h3>Destination Weddings & Event Travel</h3>
              <p>Dreaming of a wedding at an exotic location? Our team manages the entire travel experience for you and your guests, from flights and accommodation to event coordination, making your big day stress-free.</p>
            </div>
            <div class="service-card animate-on-scroll animated">
              <h3>Corporate & Incentive Groups</h3>
              <p>From business retreats to incentive tours, we plan and organize group travel that enhances teamwork, motivation, and productivity. We handle all logistics, so your team can focus on the experience.</p>
            </div>
            <div class="service-card animate-on-scroll animated">
              <h3>Award Ceremonies & Conferences</h3>
              <p>Whether it’s a corporate award function or a business conference, we arrange travel, accommodation, and venue management, ensuring a seamless experience for all attendees.</p>
            </div>
            <div class="service-card animate-on-scroll animated">
              <h3>Group Visas & Business Travel</h3>
              <p>Applying for visas as a group? We specialize in group visa processing, making it easy for teams, families, and organizations to travel without the usual stress. Our experts ensure that your applications are correctly processed for a smooth approval.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="about-sec-container">
        <!-- Hero Section -->
        <div class="about-us-hero">
          <h1>Our Values & Commitment</h1>
          <div class="divider"></div>
          <p class="text-center">At Trav-TM, we don’t just sell trips—we help you create memorable experiences. Every journey is unique, and we focus on what matters most to you.</p>
          <ul class="text-left mt-2 list-style-none">
            <li>✔ Customer-First Approach – We take the time to understand your needs, ensuring you get the best travel solutions.</li>
            <li>✔ Honest & Transparent Service – No hidden charges, no misleading information—just clear and reliable guidance.</li>
            <li>✔ Industry Expertise – With years of experience, we provide expert advice at every step.</li>
            <li>✔ Passion for Travel – We love what we do, and it reflects in how we help you plan your perfect trip.</li>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <div class="about-sec-container">
        <!-- Hero Section -->
        <div class="about-us-hero">
          <h1>Why Choose Us?</h1>
          <div class="divider"></div>
          <p>Trav-TM is not just another travel agency. We believe in personalized service, expert guidance, and customer satisfaction. Whether you need help with holiday bookings, group travel, event planning, or visa processing, we ensure everything is handled efficiently.</p>
          <p class="mt-2">At Trav-TM, you’re not just a client—you’re a valued traveler, and we’re here to make your journey memorable.</p>
        </div>
      </div>
    </section>

@include('layouts.footer2')