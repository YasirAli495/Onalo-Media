// Customer review
const carousel = document.getElementById('carousel1');
const prevBtns = document.querySelectorAll('.prevBtn'); 
const nextBtns = document.querySelectorAll('.nextBtn');

let currentIndex1 = 0;

function updateCarousel() {
  const cardWidth = carousel.querySelector('.card-review').offsetWidth + 16; // Card width + gap
  const totalWidth = carousel.offsetWidth;
  const visibleCards = Math.floor(totalWidth / cardWidth);

  const offset = -(currentIndex1 * cardWidth);
  carousel.style.transform = `translateX(${offset}px)`;

  // Disable/enable buttons based on position
  prevBtns.forEach((btn) => (btn.disabled = currentIndex1 === 0));
  nextBtns.forEach(
    (btn) =>
      (btn.disabled =
        currentIndex1 >= carousel.children.length - visibleCards)
  );
}

prevBtns.forEach((btn) =>
  btn.addEventListener('click', () => {
    if (currentIndex1 > 0) {
      currentIndex1--;
      updateCarousel();
    }
  })
);

nextBtns.forEach((btn) =>
  btn.addEventListener('click', () => {
    const totalCards = carousel.children.length;
    const cardWidth = carousel.querySelector('.card-review').offsetWidth + 16; // Card width + gap
    const totalWidth = carousel.offsetWidth;
    const visibleCards = Math.floor(totalWidth / cardWidth);

    if (currentIndex1 < totalCards - visibleCards) {
      currentIndex1++;
      updateCarousel();
    }
  })
);

// Recalculate and update on resize
window.addEventListener('resize', updateCarousel);

// Initial update
updateCarousel();

document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab-a");
  const tabPanes = document.querySelectorAll(".ht-tab-pane");

  tabs.forEach(tab => {
      tab.addEventListener("click", function (event) {
          event.preventDefault();

          // Remove active classes
          tabs.forEach(t => t.classList.remove("active"));
          tabPanes.forEach(pane => pane.classList.remove("tab-active"));

          // Add active classes
          this.classList.add("active");
          const targetPane = document.querySelector(this.getAttribute("href"));
          if (targetPane) {
              targetPane.classList.add("tab-active");
          }
      });
  });
});