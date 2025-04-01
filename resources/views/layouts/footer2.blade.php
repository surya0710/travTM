    <footer class="footer">
      <div class="footer-container">
        <div class="footer-grid">
          <div class="footer-about">
            <img alt="logo" src="{{ asset($webSettings->website_logo) }}" class="logo-img" />
            <h3 class="footer-logo">Trav-TM</h3>
            <p>Trav-TM: Your trusted partner for travel consultancy, visa assistance, and customized holiday packages. Let us help you create unforgettable journeys.</p>
            <div class="social-icons">
              <!-- <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
            </div>
            <a href="tel:{{ $webSettings->website_phone }}" class="text-decoration-none" style="color:#fff"><i class="fa-solid fa-phone"></i> {{ $webSettings->website_phone }}</a><br>
            <a href="mailto:{{ $webSettings->website_email }}" class="text-decoration-none" style="color:#fff"><i class="fa-solid fa-envelope"></i> {{ $webSettings->website_email }}</a>
          </div>

          <div class="footer-links">
            <h4>Company</h4>
            <ul>
              <li><a href="{{  route('aboutUs') }}">About Us</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="{{  route('blog.index') }}">Blog</a></li>
              <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
          </div>

          <div class="footer-links">
            <h4>Support</h4>
            <ul>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">FAQs</a></li>
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
          <p>{{ $webSettings->website_copyright_text }}</p>
          <div class="footer-bottom-links">
            <a href="#">Terms</a>
            <a href="#">Privacy</a>
            <a href="#">Cookies</a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
