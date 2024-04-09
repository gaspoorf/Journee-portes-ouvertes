const slides = document.querySelector('.slides');
const indicators = document.querySelectorAll('.indicator');

let slideIndex = 0;

function goToSlide(index) {
  slides.style.transform = `translateX(-${index * 100}%)`;
  indicators.forEach((indicator, i) => {
    indicator.classList.toggle('active', i === index);
  });
}


indicators.forEach((indicator, i) => {
  indicator.addEventListener('click', () => {
    goToSlide(i);
  });
});

//toutes les 3s
setInterval(() => {
  slideIndex = (slideIndex + 1) % 3;
  goToSlide(slideIndex);
}, 3000);
