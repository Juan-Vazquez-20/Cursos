    const nombreProducto = "Camiseta";
    const precioProducto = 20.5;
    const disponible = true;

    const producto = {
        nombreProducto : "Camiseta",
        precioProducto : 20.5,
        disponible : true
    }

    console.log(producto);

    console.log(producto.nombreProducto); // Camiseta
    console.log(producto.precioProducto); // 20.5
    console.log(producto.disponible); // true}



    // Crear un objeto con propiedades y métodos
    producto.imgaen = "imagen.jpg";

    delete producto.disponible;
    console.log(producto);