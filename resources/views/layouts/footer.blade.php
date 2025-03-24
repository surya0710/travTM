    <!-- Footer -->
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-grid">
          <div class="footer-about">
            <img alt="logo" src="{{ asset('assets/trav__tm 01.png') }}" class="logo-img" />
            <h3 class="footer-logo">Trav-TM</h3>
            <p>Trav-TM: Your trusted partner for travel consultancy, visa assistance, and customized holiday packages. Let us help you create unforgettable journeys.</p>
            <div class="social-icons">
              <!-- <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
            </div>
            <a href="tel:91-9818710676"><i class="fa-solid fa-phone"></i> +91-9818710676</a><br>
            <a href="mailto:info@trav-tm.com"><i class="fa-solid fa-envelope"></i> info@trav-tm.com</a>
          </div>

          <div class="footer-links">
            <h4>Company</h4>
            <ul>
              <li><a href="{{ route('aboutUs') }}">About Us</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
          </div>

          <div class="footer-links">
            <h4>Support</h4>
            <ul>
              <li><a href="#">Help Center</a></li>
              <li><a href="./faq.html">FAQs</a></li>
              <li><a href="#">Terms of Service</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="footer-subscribe">
            <h4>Subscribe for Travel Deals!</h4>
            <p>Get exclusive travel offers, visa updates, and insider tips delivered straight to your inbox.</p>
            <form class="subscribe-form">
              <input type="email" placeholder="Your email" />
              <button type="submit"><i class="fas fa-paper-plane"></i></button>
            </form>
          </div>
        </div>

        <div class="footer-bottom">
          <p>© 2025 Trav-TM. All rights reserved.</p>
          <div class="footer-bottom-links">
            <a href="#">Terms</a>
            <a href="#">Privacy</a>
            <a href="#">Cookies</a>
          </div>
        </div>
      </div>
    </footer>

    <script>
      //  mobile menu toggle
      document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.querySelector(".menu-toggle");
        const navMenu = document.querySelector(".nav-menu");

        menuToggle.addEventListener("click", function () {
          navMenu.classList.toggle("active");
        });

        // Form toggle buttons
        const toggleBtns = document.querySelectorAll(".toggle-btn");
        toggleBtns.forEach((btn) => {
          btn.addEventListener("click", function () {
            toggleBtns.forEach((b) => b.classList.remove("active"));
            this.classList.add("active");
          });
        });

        // Traveller count buttons
        const travellerBtns = document.querySelectorAll(".traveller-btn");
        travellerBtns.forEach((btn) => {
          btn.addEventListener("click", function () {
            travellerBtns.forEach((b) => b.classList.remove("active"));
            this.classList.add("active");
          });
        });

        // Navbar scroll effect
        window.addEventListener("scroll", function () {
          const navbar = document.querySelector(".navbar");
          if (window.scrollY > 10) {
            navbar.classList.add("scrolled");
          } else {
            navbar.classList.remove("scrolled");
          }
        });

        // Animate elements on scroll
        const animateOnScroll = function () {
          const elements = document.querySelectorAll(".animate-on-scroll");

          elements.forEach((element) => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (elementPosition < windowHeight - 100) {
              element.classList.add("animated");
            }
          });
        };

        // Add animate-on-scroll class to elements that should animate
        document
          .querySelectorAll(
            ".section-header, .service-card, .feature-card, .destination-card, .blog-card, .inquiry-content, .inquiry-form-container, .splide-section,.why-choose-us,.read-more-section"
          )
          .forEach((el) => el.classList.add("animate-on-scroll"));

        // Run animation check on load and scroll
        window.addEventListener("load", animateOnScroll);
        window.addEventListener("scroll", animateOnScroll);
      });

      //    readmore

      document.querySelectorAll(".read-more").forEach((button) => {
        button.addEventListener("click", () => {
          const wrapper = button.closest(".content-wrapper");
          const content = wrapper.querySelector(".content");
          const isExpanded = content.classList.contains("expanded");

          if (isExpanded) {
            content.classList.remove("expanded");
            button.classList.remove("expanded");
          } else {
            content.classList.add("expanded");
            button.classList.add("expanded");
          }
        });
      });
      //    card carousel
      document.addEventListener("DOMContentLoaded", function () {
        new Splide("#carousel-card", {
          type: "loop", // Infinite loop
          perPage: 3, // Show 4 images at a time
          perMove: 1, // Slide one at a time
          focus: "center", // Center active slide
          pagination: false, // Show dots
          arrows: true, // Show navigation arrows
          drag: true, // Allow drag/swipe
          breakpoints: {
            1024: { perPage: 3 },
            768: { perPage: 2 },
            480: { perPage: 1 },
          },
        }).mount();
      });
      //    card carousel
      document.addEventListener("DOMContentLoaded", function () {
        new Splide("#hero-carousel", {
          type: "loop", // Infinite loop
          perPage: 1, // Show 4 images at a time
          perMove: 1, // Slide one at a time
          focus: "center", // Center active slide
          pagination: true, // Show dots
          arrows: true, // Show navigation arrows
          drag: true, // Allow drag/swipe
          autoplay: true,

          breakpoints: {
            1024: { perPage: 1 },
            768: { perPage: 1 },
            480: { perPage: 1 },
          },
        }).mount();
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.11/dist/js/splide.min.js"></script>
  </body>
</html>
