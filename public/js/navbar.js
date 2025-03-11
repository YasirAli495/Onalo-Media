// Navbar par scroll effect lagao (sidebar is se alag rahega)
window.addEventListener("scroll", () => {
    if (window.scrollY > 20) {
        navbar.classList.add("scrolled-navbar");
        navbar.classList.remove("initial-navbar");
    } else {
        navbar.classList.add("initial-navbar");
        navbar.classList.remove("scrolled-navbar");
    }
  });
  
// Get references
const hamburger = document.getElementById("hamburger");
const sidebar = document.getElementById("sidebar");
const closeSidebar = document.getElementById("closeSidebar");

// Show sidebar on hamburger click
hamburger.addEventListener("click", () => {
    sidebar.classList.add("show");
});

// Hide sidebar on close icon click
closeSidebar.addEventListener("click", () => {
    sidebar.classList.remove("show");
});

// Optional: Close sidebar when clicking outside it
document.addEventListener("click", (event) => {
    if (!sidebar.contains(event.target) && !hamburger.contains(event.target)) {
        sidebar.classList.remove("show");
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const serviceLink = document.getElementById("serviceLink");
    const serviceDropdown = document.getElementById("serviceDropdown");
    const toggleIcon = document.getElementById("toggleIcon");

    serviceLink.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent the default link behavior
        serviceDropdown.classList.toggle("show");
        // Change the "+" to "-" when dropdown is open
        toggleIcon.textContent = serviceDropdown.classList.contains("show") ? "−" : "+";
    });
});