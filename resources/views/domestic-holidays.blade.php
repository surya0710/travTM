@include('layouts.header')
<section class="dmHoliday-hero">
      <img
        src="https://images.unsplash.com/photo-1599661046289-e31897846e41"
        alt="Domestic Travel"
        class="dmHoliday-hero-image"
      />
      <div class="dmHoliday-hero-overlay"></div>
      <div class="dmHoliday-hero-content">
        <h1 class="dmHoliday-hero-title">Domestic Holiday Packages</h1>
        <p class="dmHoliday-hero-subtitle">
          Discover the incredible diversity of India
        </p>
      </div>
    </section>

    <section class="dmHoliday-section">
      <div class="dmHoliday-container">
        <div
          class="dmHoliday-destinations-grid"
          id="dmHoliday-destinationsGrid"
        ></div>
      </div>
    </section>

    <section class="dmHoliday-form-section">
      <div class="dmHoliday-container">
        <h2 class="dmHoliday-section-title">Plan Your Domestic Holiday</h2>
        <p class="dmHoliday-section-subtitle">
          Let us help you create the perfect custom package for your next
          adventure in India
        </p>
        <div class="dmHoliday-form-container">
          <form id="dmHoliday-inquiryForm">
            <div class="dmHoliday-form-grid">
              <input
                type="text"
                placeholder="Your Name"
                class="dmHoliday-form-input"
                required
              />
              <input
                type="email"
                placeholder="Email Address"
                class="dmHoliday-form-input"
                required
              />
            </div>
            <div class="dmHoliday-form-grid">
              <input
                type="tel"
                placeholder="Phone Number"
                class="dmHoliday-form-input"
                required
              />
              <input
                type="text"
                placeholder="Preferred Destination"
                class="dmHoliday-form-input"
                required
              />
            </div>
            <div class="dmHoliday-form-grid">
              <input type="date" class="dmHoliday-form-input" required />
              <input
                type="number"
                placeholder="Number of Travelers"
                class="dmHoliday-form-input"
                required
              />
            </div>
            <textarea
              placeholder="Additional Requirements"
              class="dmHoliday-form-input"
              rows="4"
            ></textarea>
            <button
              type="submit"
              class="dmHoliday-btn-primary"
              style="width: 100%"
            >
              Send Inquiry
            </button>
          </form>
        </div>
      </div>
    </section>
@include('layouts.footer2')
<script>
    // Destination data
    const domesticDestinations = [
      {
        id: 1,
        name: "Goa",
        image: "https://images.unsplash.com/photo-1512343879784-a960bf40e7f2",
        description: "Beach paradise with vibrant nightlife",
        price: "Starting from $299",
      },
      {
        id: 2,
        name: "Manali",
        image: "https://images.unsplash.com/photo-1626621341517-bbf3d9990a23",
        description: "Himalayan adventure destination",
        price: "Starting from $399",
      },
      {
        id: 3,
        name: "Rajasthan",
        image: "https://images.unsplash.com/photo-1599661046289-e31897846e41",
        description: "Royal heritage and culture",
        price: "Starting from $499",
      },
    ];

    // Render destinations
    function renderDestinations() {
      const grid = document.getElementById("dmHoliday-destinationsGrid");
      domesticDestinations.forEach((dest) => {
        const card = document.createElement("div");
        card.className = "dmHoliday-destination-card";
        card.innerHTML = `
                  <img src="${dest.image}" alt="${dest.name}" class="dmHoliday-destination-image">
                  <div class="dmHoliday-destination-overlay">
                      <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem">${dest.name}</h3>
                      <p style="margin-bottom: 1rem">${dest.description}</p>
                      <p style="color: var(--accent-color); font-weight: 600">${dest.price}</p>
                  </div>
              `;
        grid.appendChild(card);
      });
    }

    // Handle form submission
    document
      .getElementById("dmHoliday-inquiryForm")
      .addEventListener("submit", function (e) {
        e.preventDefault();
        alert("Thank you for your inquiry! We will contact you soon.");
        this.reset();
      });

    // Initialize
    document.addEventListener("DOMContentLoaded", function () {
      renderDestinations();
    });
    //  mobile menu toggle
    document.addEventListener("DOMContentLoaded", function () {
      const menuToggle = document.querySelector(".menu-toggle");
      const navMenu = document.querySelector(".nav-menu");

      menuToggle.addEventListener("click", function () {
        navMenu.classList.toggle("active");
      });
    });
  </script>