const producto = {
    id: 1,
    nombre: "Camiseta",
    precio: 20.5,
    disponible: true
}

const medidas = {
    peso: '1kg',
    medidas: '1m',
}

const nuevoProducto = {
    ...producto,
    ...medidas,
}

console.log(nuevoProducto);
console.log(producto);