@include('layouts.header')
    <section class="inHl-hero">
      <img
        src="https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99"
        alt="International Travel"
        class="inHl-hero-image"
      />
      <div class="inHl-hero-overlay"></div>
      <div class="inHl-hero-content">
        <h1 class="inHl-hero-title">International Holiday Packages</h1>
        <p class="inHl-hero-subtitle">
          Experience the world's most beautiful destinations
        </p>
      </div>
    </section>

    <section class="inHl-section">
      <div class="inHl-container">
        <div class="inHl-destinations-grid" id="inHl-destinationsGrid"></div>
      </div>
    </section>

    <section class="inHl-form-section">
      <div class="inHl-container">
        <h2 class="inHl-section-title">Plan Your International Holiday</h2>
        <p class="inHl-section-subtitle">
          Let us help you create the perfect custom package for your next global
          adventure
        </p>
        <div class="inHl-form-container">
          <form id="inHl-inquiryForm">
            <div class="inHl-form-grid">
              <input
                type="text"
                placeholder="Your Name"
                class="inHl-form-input"
                required
              />
              <input
                type="email"
                placeholder="Email Address"
                class="inHl-form-input"
                required
              />
            </div>
            <div class="inHl-form-grid">
              <input
                type="tel"
                placeholder="Phone Number"
                class="inHl-form-input"
                required
              />
              <input
                type="text"
                placeholder="Preferred Destination"
                class="inHl-form-input"
                required
              />
            </div>
            <div class="inHl-form-grid">
              <input type="date" class="inHl-form-input" required />
              <input
                type="number"
                placeholder="Number of Travelers"
                class="inHl-form-input"
                required
              />
            </div>
            <textarea
              placeholder="Additional Requirements"
              class="inHl-form-input"
              rows="4"
            ></textarea>
            <button type="submit" class="inHl-btn-primary" style="width: 100%">
              Send Inquiry
            </button>
          </form>
        </div>
      </div>
    </section>
@include('layouts.footer2')
<script>
      // Destination data
      const internationalDestinations = [
        {
          id: 4,
          name: "Dubai",
          image: "https://images.unsplash.com/photo-1512453979798-5ea266f8880c",
          description: "Luxury and modern marvels",
          price: "Starting from $999",
        },
        {
          id: 5,
          name: "Maldives",
          image: "https://images.unsplash.com/photo-1514282401047-d79a71a590e8",
          description: "Paradise islands and resorts",
          price: "Starting from $1,299",
        },
        {
          id: 6,
          name: "Switzerland",
          image: "https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99",
          description: "Alpine beauty and adventure",
          price: "Starting from $1,499",
        },
      ];

      // Render destinations
      function renderDestinations() {
        const grid = document.getElementById("inHl-destinationsGrid");
        internationalDestinations.forEach((dest) => {
          const card = document.createElement("div");
          card.className = "inHl-destination-card";
          card.innerHTML = `
                    <img src="${dest.image}" alt="${dest.name}" class="inHl-destination-image">
                    <div class="inHl-destination-overlay">
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
        .getElementById("inHl-inquiryForm")
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
      })

</script>