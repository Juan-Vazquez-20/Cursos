const nuemros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

console.table(nuemros);

const meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
console.table(meses);

//acceder a los valores de un array
console.log(meses[0]);
console.log(meses[5]);

//conocer la extension de un array
console.log(meses.length);

meses.forEach(function(mes, index){
    console.log(index);
    console.log(mes);
})

//modificar un valor de un array
nuemros[0] = 100;
console.table(nuemros);

nuemros.push(200);
console.table(nuemros);

nuemros.unshift(300);
console.table(nuemros);

nuemros.pop();
console.table(nuemros);

nuemros.shift();
console.table(nuemros);

nuemros.splice(4, 1);
console.table(nuemros);

//rest operator

const numeros2 = [...nuemros, 1000, 2000, 3000];
console.table(numeros2);

