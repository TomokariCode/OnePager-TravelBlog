// const scrollContainer = document.querySelector('.betemmingen-cards');

// scrollContainer.addEventListener('mousedown', (e) => {
//     scrollContainer.style.cursor = 'grabbing';
//     let startX = e.pageX - scrollContainer.offsetLeft;
//     let scrollLeft = scrollContainer.scrollLeft;

//     const mouseMoveHandler = (e) => {
//         const x = e.pageX - scrollContainer.offsetLeft;
//         const walk = (x - startX) * 2; // Pas de snelheid van scrollen aan
//         scrollContainer.scrollLeft = scrollLeft - walk;
//     };

//     const mouseUpHandler = () => {
//         scrollContainer.style.cursor = 'grab';
//         scrollContainer.removeEventListener('mousemove', mouseMoveHandler);
//         scrollContainer.removeEventListener('mouseup', mouseUpHandler);
//     };

//     scrollContainer.addEventListener('mousemove', mouseMoveHandler);
//     scrollContainer.addEventListener('mouseup', mouseUpHandler);
// });




// const container = document.querySelector('.bestemmingen-cards');
// let isDown = false;
// let startX;
// let scrollLeft;

// container.addEventListener('mousedown', (e) => {
//     isDown = true;
//     container.classList.add('active');
//     startX = e.pageX - container.offsetLeft;
//     scrollLeft = container.scrollLeft;
// });

// container.addEventListener('mouseleave', () => {
//     isDown = false;
//     container.classList.remove('active');
// });

// container.addEventListener('mouseup', () => {
//     isDown = false;
//     container.classList.remove('active');
// });

// container.addEventListener('mousemove', (e) => {
//     if (!isDown) return; // stop de functie als de muis niet ingedrukt is
//     e.preventDefault();
//     const x = e.pageX - container.offsetLeft;
//     const walk = (x - startX) * 2; // De scrollsnelheid kun je hier aanpassen
//     container.scrollLeft = scrollLeft - walk;
// });

// const cards = document.querySelectorAll('.card');
// let isDragging = false;
// let startX, startScrollLeft;

// cards.forEach(card => {
//     card.addEventListener('mousedown', (e) => {
//         isDragging = true;
//         startX = e.pageX - card.offsetLeft;
//         startScrollLeft = card.parentElement.scrollLeft;
//         card.style.cursor = 'grabbing';
//         e.preventDefault(); // Voorkom dat tekst geselecteerd wordt
//     });

//     card.addEventListener('mouseup', () => {
//         isDragging = false;
//         card.style.cursor = 'grab';
//     });

//     card.addEventListener('mousemove', (e) => {
//         if (!isDragging) return;
//         const x = e.pageX - card.offsetLeft;
//         const walk = (x - startX) * 2; // Hoe ver je sleept, pas de snelheid aan
//         card.parentElement.scrollLeft = startScrollLeft - walk;
//     });

//     card.addEventListener('mouseleave', () => {
//         isDragging = false;
//         card.style.cursor = 'grab';
//     });
// });


// const slider = document.querySelector('.betemmingen-cards');
// let isDown = false;
// let startX;
// let scrollLeft;

// slider.addEventListener('mousedown', (e) => {
//     isDown = true;
//     slider.classList.add('active');
//     startX = e.pageX - slider.offsetLeft;
//     scrollLeft = slider.scrollLeft;
//     e.preventDefault(); // Voorkom tekstselectie tijdens het scrollen
// });

// slider.addEventListener('mouseleave', () => {
//     isDown = false;
//     slider.classList.remove('active');
// });

// slider.addEventListener('mouseup', () => {
//     isDown = false;
//     slider.classList.remove('active');
// });

// slider.addEventListener('mousemove', (e) => {
//     if (!isDown) return; // Stop als er niet wordt geklikt
//     e.preventDefault();
//     const x = e.pageX - slider.offsetLeft;
//     const walk = (x - startX) * 2; // Hoeveelheid scrollen (pas aan indien nodig)
//     slider.scrollLeft = scrollLeft - walk;
// });

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
    if (!isDown) return; // Stop als er niet wordt geklikt
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft; // Nieuwe muispositie
    const walk = (x - startX) * 2; // Hoeveelheid scrollen (pas aan indien nodig)
    slider.scrollLeft = scrollLeft - walk; // Update de scrollpositie
});