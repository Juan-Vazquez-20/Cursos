//async await

function descargarNuevosClientes(){
    return new Promise( resolve =>{
        colnsole.log("Descargando nuevos clientes...");

        setInterval(function(){
        console.log('set timeout');
        }, 2000);
    });
}

 async function app(){
    try{
        const resultado = await descargarNuevosClientes();
        console.log(resultado);
    }catch(error){
        console.log('Error en la app');
    }

}
app();

console.log('Este mensaje se ejecuta al final'); 