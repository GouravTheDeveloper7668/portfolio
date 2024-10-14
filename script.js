document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
  document.querySelector('.nav-links').classList.toggle('active');
});

const carousel = {
  currentIndex: 0,
  itemCount: 3
};

function moveCarousel(direction) {
  if (direction === 'up' && carousel.currentIndex > 0) {
      carousel.currentIndex--;
  } else if (direction === 'down' && carousel.currentIndex < carousel.itemCount - 1) {
      carousel.currentIndex++;
  }
  
  const items = document.querySelector('.carousel-items');
  items.style.transform = `translateY(-${carousel.currentIndex * 100}%)`;
}