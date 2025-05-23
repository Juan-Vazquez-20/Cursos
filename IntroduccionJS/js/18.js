function sumar(a = 0, b = 0) {
    console.log(a + b);
}

sumar(10, 20); // 30
sumar(10, "20"); // 1020
sumar(10, Number("20")); // 30
sumar(10, parseInt("20")); // 30
sumar(1);

const sumar2 = function(){
    console.log(10 + 40);
}
sumar2(); // 50