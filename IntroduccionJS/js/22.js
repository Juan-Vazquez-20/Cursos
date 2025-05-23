const puintaje = 1000;

if (puintaje == 1000) {
    console.log("puntaje es igual a 1000");
}else{
    console.log("puntaje no es igual a 1000");
}

const efectivo = 1000;
const carrito = 800;

if (efectivo > carrito) {
    console.log("El usuario puede pagar");
}else {
    console.log("El usuario no puede pagar");
}

const rol = "editor";
if (rol === "admin") {
    console.log("El usuario es admin");
}
else if (rol === "editor") {
    console.log("El usuario es editor");
}
else{
    console.log("El usuario no es ni admin ni editor");
}