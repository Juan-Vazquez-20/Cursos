const reproductor = {
    reproducir : function(id){
        console.log(`Reproduciendo... ${id}`);
    },
    pausar : function(){
        console.log(`Pausando...`);
    },
    crearPlaylist : function(nombre){
        console.log(`Creando la playlist... ${nombre}`);
    },
    reproducirPlaylist : function(nombre){
        console.log(`Reproduciendo la playlist... ${nombre}`);
    },
}

const borrarcancion={
    borrar : function(id){
        console.log(`Borrando... ${id}`);
    }
}

reproductor.reproducir(4840); // Reproduciendo...
reproductor.pausar(); // Pausando...}
borrarcancion.borrar(20); // Borrando... 20 
reproductor.crearPlaylist("Mi playlist"); // Creando la playlist... Mi playlist
reproductor.reproducirPlaylist("Mi playlist"); // Reproduciendo la playlist... Mi playlist