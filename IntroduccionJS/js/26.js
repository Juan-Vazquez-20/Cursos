//THIS

const reservacion = {
    nombre: "Juan",
    apellido: "Pérez",
    total: 5000,
    pagado: false,
    informacion: function() {
        console.log(`Nombre: ${this.nombre} ${this.apellido}`);
        console.log(`Total: ${this.total}`);
        console.log(`Pagado: ${this.pagado}`);
    }
}
reservacion.informacion();
console.log(reservacion.informacion());