const carrito=[
    {nombre:'Monitor 20 Pulgadas', precio:500},
    {nombre:'Television 50 Pulgadas', precio:700},
    {nombre:'Tablet', precio:300},
    {nombre:'Audifonos', precio:50},
];

// forEach
carrito.forEach(producto =>  console.log(producto.nombre));
//map
const nuevoArreglo=carrito.map(producto => producto.nombre);
console.log(nuevoArreglo);