//prommises

const promesa = new Promise((resolve, reject) => {
    const exito = false;

    if (exito) {
        resolve('Todo bien');
    } else {
        reject('Todo mal');
    }               
});   
console.log(promesa);