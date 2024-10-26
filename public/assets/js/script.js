// Script Carousel
let currentIndex = 0;
const slides = document.getElementById("carouselSlides").children;
const totalSlides = slides.length;

function showSlide(index) {
    const offset = -index * 100;
    document.getElementById(
        "carouselSlides"
    ).style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
}

setInterval(nextSlide, 5000);
