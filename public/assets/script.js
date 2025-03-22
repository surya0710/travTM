// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mainMenu = document.querySelector('.main-menu');
  
    if (mobileMenuBtn && mainMenu) {
      mobileMenuBtn.addEventListener('click', function() {
        mainMenu.style.display = mainMenu.style.display === 'flex' ? 'none' : 'flex';
        
        // Toggle the hamburger icon to an X
        const spans = mobileMenuBtn.querySelectorAll('span');
        spans.forEach(span => {
          span.classList.toggle('active');
        });
      });
    }
  
    // Form Submission
    const inquiryForm = document.querySelector('.inquiry-form form');
    if (inquiryForm) {
      inquiryForm.addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for your inquiry! Our travel experts will contact you within 24 hours.');
        inquiryForm.reset();
      });
    }
  
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 80, // Adjust for header height
            behavior: 'smooth'
          });
        }
      });
    });
  
    // Add animation on scroll
    const animateOnScroll = function() {
      const elements = document.querySelectorAll('.service-card, .feature, .deal-card, .blog-card');
      
      elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (elementPosition < windowHeight - 100) {
          element.classList.add('visible');
        }
      });
    };
  
    // Add CSS class for animation
    const style = document.createElement('style');
    style.textContent = `
      .service-card, .feature, .deal-card, .blog-card {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease, transform 0.6s ease;
      }
      .service-card.visible, .feature.visible, .deal-card.visible, .blog-card.visible {
        opacity: 1;
        transform: translateY(0);
      }
    `;
    document.head.appendChild(style);
  
    // Run on load and scroll
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Run once on page load
  });