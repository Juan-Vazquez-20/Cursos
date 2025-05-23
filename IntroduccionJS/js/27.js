//POO

function Producto(nombre, precio) {
    this.nombre = nombre;
    this.precio = precio;
}
const producto1 = new Producto('Camiseta', 20);

console.log(producto1);

function formatearProducto(producto) {
    return `El producto ${producto.nombre} tiene un precio de ${producto.precio}`;
}
console.log(formatearProducto(producto1));

// Prototipos
Producto.prototype.formatearProductoPrototipo= function() {
    return `El producto ${this.nombre} tiene un precio de ${this.precio}`;
}