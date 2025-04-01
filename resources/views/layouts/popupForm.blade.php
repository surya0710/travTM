<div class="overlay" id="overlay">
  <div class="popup">
    <button class="close-btn" id="close-popup-btn">&times;</button>
    <h2>Enquire Now</h2>
    <form id="dmHl-inquiryForm" method="post" action="">
      <div class="dmHl-form-grid">
        <input type="text" placeholder="Your Name" class="dmHl-form-input" required />
        <input type="email" placeholder="Email Address" class="dmHl-form-input" required />
      </div>
      <div class="dmHl-form-grid">
        <input type="tel" placeholder="Phone Number" class="dmHl-form-input" required />
        <input type="text" placeholder="Preferred Destination" class="dmHl-form-input" required />
      </div>
      <div class="dmHl-form-grid">
        <input type="date" class="dmHl-form-input" required />
        <input type="number" placeholder="Number of Travelers" class="dmHl-form-input" required />
      </div>
      <textarea placeholder="Additional Requirements" class="dmHl-form-input" rows="4" ></textarea>
      <button type="submit" class="dmHl-btn-primary">Enquire</button>
    </form>
  </div>
</div>
<script>

  // Open popup
  function openPopup(){
        overlay.style.display = "flex";
        document.body.style.overflow = "hidden"; // Prevent scrolling

        // Add animation
        overlay.style.opacity = 0;
        setTimeout(() => {
            overlay.style.transition = "opacity 0.3s ease";
            overlay.style.opacity = 1;
        }, 10);
  }
  document.addEventListener("DOMContentLoaded", function () {
    const closePopupBtn = document.getElementById("close-popup-btn");
    const overlay = document.getElementById("overlay");

    // Close popup
    function closePopup() {
      overlay.style.opacity = 0;
      setTimeout(() => {
        overlay.style.display = "none";
        document.body.style.overflow = "auto"; // Enable scrolling
        overlay.style.transition = "";

        // Reset the form when closing
        if (successMessage.style.display === "block") {
          form.reset();
          successMessage.style.display = "none";
        }
      }, 300);
    }

    closePopupBtn.addEventListener("click", closePopup);

    // Close when clicking outside the popup
    overlay.addEventListener("click", function (event) {
      if (event.target === overlay) {
        closePopup();
      }
    });
  });
</script>