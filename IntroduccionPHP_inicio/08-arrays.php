<?php include 'includes/header.php';

$carrito = ['TELEFONO', 'LAPTOP', 'TABLET', 'MONITOR', 'TELEVISOR'];

//util para ver los contenido de un array
echo "<pre>";
var_dump($carrito[1]);
echo "</pre>";

//acceder a un elemento del array
echo $carrito[1];

$carrito[3] = 'TELEFONO NUEVO';

array_push($carrito, 'TELEVISOR NUEVO'); // Agregar un elemento al final del array

array_unshift($carrito, 'TELEVISOR NUEVO'); // Agregar un elemento al inicio del array


echo "<pre>";
var_dump($carrito);
echo "</pre>";

$cliente = ['cliente1', 'cliente2', 'cliente3', 'cliente4',];
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';