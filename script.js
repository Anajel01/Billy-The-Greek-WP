// JavaScript function to toggle the burger menu
function toggleMenu() {
    document.querySelector('.burger-menu').classList.toggle('active');
  }
  function toggleMenu() {
    const mobileNav = document.getElementById("mobile-nav");
    mobileNav.style.display = mobileNav.style.display === "flex" ? "none" : "flex";
  }
  document.addEventListener('DOMContentLoaded', function() {
    const footer = document.querySelector('.footer-background');
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          footer.classList.add('footer-animate');
          observer.unobserve(footer); 
        }
      });
    }, {
      threshold: 0.1 
    });
  
    observer.observe(footer);
  });

  //JAVA FOR POLYLANG 
  // Select button and dropdown container


  document.addEventListener("DOMContentLoaded", function () {
    // For mobile language toggle
    const mobileToggleButton = document.querySelector(".polylang-language-toggle-button");
    const mobileLanguageContainer = document.querySelector(".polylang-language-container");

    mobileToggleButton.addEventListener("click", function () {
        mobileLanguageContainer.classList.toggle("active");
    });

    // For desktop language toggle
    const desktopToggleButton = document.querySelector(".polylang-language-toggle-button-desktop");
    const desktopLanguageContainer = document.querySelector(".polylang-language-container-desktop");

    desktopToggleButton.addEventListener("click", function () {
        desktopLanguageContainer.classList.toggle("active");
    });

    // Close the dropdown if clicking outside
    document.addEventListener("click", function (event) {
        // Close the mobile dropdown if clicked outside
        if (!mobileLanguageContainer.contains(event.target) && !mobileToggleButton.contains(event.target)) {
            mobileLanguageContainer.classList.remove("active");
        }

        // Close the desktop dropdown if clicked outside
        if (!desktopLanguageContainer.contains(event.target) && !desktopToggleButton.contains(event.target)) {
            desktopLanguageContainer.classList.remove("active");
        }
    });
});
