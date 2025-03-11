// Hero image slider

// Array of background images
const images = [
  "./images/onalo banner 3.png",
  './images/print media onalo.png',
  './images/Digital media onalo.png',
];

// Track the current index of the image
let currentIndex = 0;

// Select necessary DOM elements
const container = document.querySelector('.containers');
const content = document.querySelector('.content');
const nextButton = document.querySelector('.next');
const prevButton = document.querySelector('.prev');

// Function to update the background image and animate content
function updateSlide(index) {
  if (index === 0) {
    // For the initial load, skip fade-out delay
    container.style.backgroundImage = `url('${images[index]}')`;
    content.style.opacity = '1';
  } else {
    // Fade out content
    content.style.opacity = '0';

    // Wait for the fade-out animation to complete
    setTimeout(() => {
      // Update background image
      container.style.backgroundImage = `url('${images[index]}')`;

      // Fade in content
      content.style.opacity = '1';
    }, 1000); // Match the duration with CSS transition time
  }
}

// Go to the next slide
function nextSlide() {
  currentIndex = (currentIndex + 1) % images.length; // Loop back to the first slide
  updateSlide(currentIndex);
}

// Go to the previous slide
function prevSlide() {
  currentIndex = (currentIndex - 1 + images.length) % images.length; // Loop to the last slide
  updateSlide(currentIndex);
}

// Automatic slideshow every 5 seconds
let autoSlide = setInterval(nextSlide, 5000);

// Event listeners for manual navigation
nextButton.addEventListener('click', () => {
  nextSlide();
  resetAutoSlide();
});

prevButton.addEventListener('click', () => {
  prevSlide();
  resetAutoSlide();
});

// Reset auto-slide timer after manual navigation
function resetAutoSlide() {
  clearInterval(autoSlide); // Stop the current auto-slide
  autoSlide = setInterval(nextSlide, 5000); // Restart the auto-slide timer
}

// Immediately set the first background image on page load
document.addEventListener('DOMContentLoaded', () => {
  updateSlide(0); // Set the initial slide without delay
});

document.querySelectorAll("circle.text-purple-500").forEach((circle, index) => {
    const percentage = [65, 95][index]; // Progress percentages
    const radius = 35; // Same as the `r` attribute in the SVG circle
    const circumference = 2 * Math.PI * radius;
    const offset = circumference - (percentage / 100) * circumference;
  
    circle.style.strokeDasharray = `${circumference}`;
    circle.style.strokeDashoffset = `${circumference}`;
  
    setTimeout(() => {
      circle.style.transition = "stroke-dashoffset 1.5s ease-out";
      circle.style.strokeDashoffset = offset;
    }, 500);
  });

// Digital Media Content
const digitalMediaContent = [
  {
    heading: "Digital Advertising",
    description: "Enhance your brand's presence with targeted digital advertising strategies.",
    icon: "./images/world.svg", // Same icon src as in HTML
  },
  {
    heading: "Social Media Marketing",
    description: "Engage audiences and build communities with effective social media strategies.",
    icon: "./images/settings.png", // Same icon src as in HTML
  },
  {
    heading: "SEO Optimization",
    description: "Improve search engine rankings with comprehensive SEO strategies.",
    icon: "./images/envelope.png", // Same icon src as in HTML
  },
  {
    heading: "Email Campaigns",
    description: "Connect with customers directly with tailored email campaigns.",
    icon: "./images/Email Marketing.svg", // Same icon src as in HTML
  },
];

// Print Media Content
const printMediaContent = [
  {
    heading: "Brochure Design",
    description: "Create visually stunning brochures to capture your audience's attention.",
    icon: "./images/world.svg", // Same icon src as in HTML
  },
  {
    heading: "Flyer Distribution",
    description: "Reach your audience effectively with flyer distribution campaigns.",
    icon: "./images/settings.png", // Same icon src as in HTML
  },
  {
    heading: "Magazine Ads",
    description: "Promote your business with professional magazine advertisements.",
    icon: "./images/envelope.png", // Same icon src as in HTML
  },
  {
    heading: "Billboard Marketing",
    description: "Maximize visibility with impactful billboard marketing.",
    icon: "./images/Email Marketing.svg", // Same icon src as in HTML
  },
];

// Cards
const cards = document.querySelectorAll(".custom-card1");

// Function to update card content
function updateCardContent(content) {
  cards.forEach((card, index) => {
    const cardIcon = card.querySelector(".custom-card-icon img");
    const cardHeading = card.querySelector(".custom-card-heading");
    const cardDescription = card.querySelector(".custom-card-description");

    // Update card content
    cardIcon.src = content[index].icon; // Update icon src
    cardHeading.textContent = content[index].heading;
    cardDescription.textContent = content[index].description;

    // Optional: Add animation class for smooth transition
    card.classList.add("animate-card");
    setTimeout(() => card.classList.remove("animate-card"), 500); // Remove animation class after 0.5s
  });
}

// Add click event for Digital Media button
document.getElementById("digital-media-btn").addEventListener("click", () => {
  updateCardContent(digitalMediaContent);
});

// Add click event for Print Media button
document.getElementById("print-media-btn").addEventListener("click", () => {
  updateCardContent(printMediaContent);
});