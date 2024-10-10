// Scroll Animation
window.addEventListener('scroll', function() {
    let elements = document.querySelectorAll('.project');
    let windowHeight = window.innerHeight;
  
    elements.forEach(function(element) {
      let position = element.getBoundingClientRect().top;
      
      if (position < windowHeight - 100) {
        element.style.transform = 'translateY(0)';
        element.style.opacity = '1';
      } else {
        element.style.transform = 'translateY(100px)';
        element.style.opacity = '0';
      }
    });
  });
  