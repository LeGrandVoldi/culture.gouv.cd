
let currentSlide = 0;
let slideInterval;

function showSlide(index) {
    const slides = document.querySelectorAll('.slidei');
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }
    const offset = -currentSlide * 100;
    document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

function startSlideShow() {
    slideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
}

function stopSlideShow() {
    clearInterval(slideInterval);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide);
    startSlideShow();

    // Optional: Stop the slideshow when the user interacts with the navigation buttons
    document.querySelector('.prev').addEventListener('click', () => {
        prevSlide();
        stopSlideShow();
        startSlideShow();
    });
    
    document.querySelector('.next').addEventListener('click', () => {
        nextSlide();
        stopSlideShow();
        startSlideShow();
    });
});
