
const producto = {
    id: 1,
    nombre: "Camiseta",
    precio: 20.5,
    disponible: true
}

Object.freeze(producto);
producto.imgaen = "imagen.jpg";
console.log(Object.isSealed(producto)); // undefined
console.log(producto);