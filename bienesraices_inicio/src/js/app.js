document.addEventListener('DOMContentLoaded', function() {
   

    eventListener();
});

function eventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
} 

function navegacionResponsive() {
    const navagacion = document.querySelector('.navegacion');

    navagacion.classList.toggle('mostrar');
}