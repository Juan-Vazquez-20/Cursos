const meses = [
    'enero',
    'febrero',
    'marzo',
    'abril',
    'mayo',
    'junio',
    'julio',
    'agosto',
    'septiembre',
    'octubre',
    'noviembre',
    'diciembre'
];

const carrito = [
    { nombre: 'camisa', precio: 100 },
    { nombre: 'pantalon', precio: 200 },
    { nombre: 'zapatos', precio: 300 },
    { nombre: 'bufanda', precio: 50 },
    { nombre: 'guantes', precio: 25 }
];

// forEach
meses.forEach(function(mes, index) {
    if (mes === 'enero') {
        console.log(`el mes es ${mes} y su index es ${index}`);
    }
});

let resultado = meses.includes('diciembre');

resultado = carrito.some(function(producto) {
    return producto.nombre === 'camisa';
}
);

console.log(resultado);