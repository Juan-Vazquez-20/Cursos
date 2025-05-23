const boton = document.querySelector('#boton');
boton.addEvenetListener('click', () => {
    Notification.requestPermission()
    .then(resultado => console.log(`El resultado es ${resultado}`))
});