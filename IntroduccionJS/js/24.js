// for loop
console.log("for loop");
for ( let i = 1; i <= 100; i++) {
    if (i % 2 === 0) {
        console.log(i + " es par");
    }
}

// while loop
console.log("while loop");
let i = 1;

while (i <= 10) {
    console.log('desde el while', i);
    i++;
}
// do while loop    
console.log("do while loop");
let j = 0;
do {
    console.log('desde el do while', j);
    j++;
}while (j < 10);