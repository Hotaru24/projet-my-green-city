// Carrousel header

const tableau = ['../action/images/feuille.png', '../action/images/green.png', '../action/images/mountain.png'];

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