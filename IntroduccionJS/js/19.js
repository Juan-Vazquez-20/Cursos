

let total = 0;

function agregarCarrito(precio) {
     return total += precio;
}

function calcularImpuesto(total) {
    return total * 1.16;
}

total = agregarCarrito(100);
total = agregarCarrito(200);
total = agregarCarrito(300);


console.log(`El total es: ${total}`);

const impuesto = calcularImpuesto(total);

console.log(`El total final es: ${total}`);