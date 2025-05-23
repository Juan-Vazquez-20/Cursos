const producto = {
    id: 1,
    nombre: "Camiseta",
    precio: 20.5,
    disponible: true
}

const precioProducto = producto.precio;
const nombreProducto = producto.nombre;


console.log(precioProducto);
console.log(nombreProducto);
console.log(producto);

//destructuring
const {precio, nombre} = producto;
console.log(nombre);