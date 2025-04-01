@include('layouts.header')
    <div class="thankyou-page">
      <!-- Thank You Content -->
      <div class="thankyou-content">
        <div class="container">
          <div class="thankyou-card">
            <div class="success-icon">
              <i class="fas fa-check-circle"></i>
            </div>
            <h1>Thank You!</h1>
            <p class="confirmation-message">
              We will reach out to you as soon as possible.
            </p>

            <div class="action-buttons">
              <a href="{{ route('home') }}" class="primary-button">
                <i class="fas fa-home"></i>
                Return to Homepage
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
@include('layouts.footer2')