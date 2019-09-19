// Carrousel header

const tableau = ['https://via.placeholder.com/1000x250', 'https://via.placeholder.com/1001x250', 'https://via.placeholder.com/1002x250'];

let currentSlide = 0;


function showSlide(slideNumber) {
    const coverImage = document.getElementById('coverImage');
    coverImage.src = tableau[slideNumber];
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % 3;
    showSlide(currentSlide);
}

function previousSlide() {
    if (currentSlide == 0) {
        currentSlide = 2;
    } else {
        currentSlide = currentSlide - 1;
    }
    showSlide(currentSlide);
}