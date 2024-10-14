const slider = document.querySelector('.betemmingen-cards');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft; // De positie van de muis ten opzichte van de slider
    scrollLeft = slider.scrollLeft; // De huidige scroll positie van de slider
    e.preventDefault(); // Voorkom tekstselectie tijdens het scrollen
});

// muisleave-evenement om te zorgen dat het gedrag goed is
slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
});

slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
});

slider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2;
    slider.scrollLeft = scrollLeft - walk;
});