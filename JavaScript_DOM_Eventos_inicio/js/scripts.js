//queryselector

const heading = document.querySelector('.header__texto h2')//0 o 1 elementos
heading.textContent = 'Nuevo Heading desde JS';
console.log(heading); 

//querySelectorall

const enlaces = document.querySelectorAll('.navegacion a')//0 o n elementos
//console.log(enlaces[0]); //0 o 1 elementos
enlaces[0].textContent = 'Nuevo texto desde JS';
//enlaces[0].href = 'nuevo-enlace.html';
enlaces[0].classList.add('nueva-clase');
//enlaces[0].classList.remove('nueva-clase');

//generar un nuevo enlace
const nuevoEnlace = document.createElement('A');
nuevoEnlace.href = 'nuevo-enlace.html';
nuevoEnlace.textContent = 'Nuevo Enlace';
nuevoEnlace.classList.add('navegacion__enlace');
const navegacion = document.querySelector('.navegacion');
navegacion.appendChild(nuevoEnlace); //agregar el nuevo enlace al final de la lista
console.log(nuevoEnlace); //0 o 1 elementos


//Seleccionando elementos
const btnEnviar = document.querySelector('.boton--primario');
btnEnviar.addEventListener('click', function(event){
    event.preventDefault(); //evitar el comportamiento por defecto del boton
    console.log('Enviando formulario');
    console.log(event);
    console.preventDefault();
});

//eventos de los inputs


const dato={
    nombre: '',
    email: '',
    mensaje: ''
}

const nombre = document.querySelector('#nombre');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#mensaje');

nombre.addEventListener('input',leertexto); //cuando el usuario escribe en el input
email.addEventListener('input',leertexto); //cuando el usuario escribe en el input
mensaje.addEventListener('input',leertexto); //cuando el usuario escribe en el input

function leertexto(event){
    dato[event.target.id] = event.target.value; //asignar el valor del input al objeto dato
    console.log(dato); //muestra el objeto dato
}

formulario.addEventListener('submit', function(event){
    event.preventDefault(); //evitar el comportamiento por defecto del formulario
    console.log('Enviando formulario');
    console.log(dato); //muestra el objeto dato
    const {nombre,email,mensaje} = dato; //destructuring
    if(nombre === '' || email === '' || mensaje === ''){
        mostrarError('Todos los campos son obligatorios');
        return;
    }
    mostrarExito('Formulario enviado correctamente');
} );