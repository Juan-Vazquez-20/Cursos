function obtenerEmpelados(){
    const archivo = 'empelados.json';
    fetch(archivo)
        .then (res =>  res.json())
        .then (data => {
             const {empleados} = data;

             empleados.forEach(empleado => {
                console.log(empleado.nombre);
                console.log(empleado.apellido);
                console.log(empleado.puesto);

                document.querySelector('.contenido').textContent =
        })
       
}
obtenerEmpelados();