//clases

class Producto{
    constructor(id, nombre, precio, cantidad)
    {
        this.id = id;
        this.nombre = nombre;
        this.precio = precio;
        this.cantidad = cantidad;
    }
    formatearProducto() {
        return `El producto ${this.nombre} tiene un precio de ${this.precio}`;
    }

    retorarPrecio(){
        return `El precio ${this.precio} del producto ${this.id}`;
    }
}

const producto1 = new Producto(1, "Coca Cola", 100, 10);
const producto2 = new Producto(2, "Fanta", 200, 20);
//herencia
class libro extends Producto{
    constructor(id, nombre, autor, precio, cantidad){
        super(id, nombre, precio, cantidad);
        this.autor = autor;
    }
}

const libro1 = new libro(1, "El principito", "Antoine de Saint-Exupéry", 100, 10);
const libro2 = new libro(2, "Cien años de soledad", "Gabriel García Márquez", 200, 20);

console.log(libro1.formatearProducto());
console.log(libro2);

console.log(producto1);
console.log(producto2);