<?php include 'includes/header.php';

$carritop = ['tablet', 'monitor', 'telefono'];

var_dump ( in_array('tablet', $carritop)); // true
var_dump ( in_array('audifonos', $carritop)); // true

//ordenar elementos de un array
$nuemros = [1, 5, 3, 2, 4];
sort($nuemros); // ordena de menor a mayor
rsort($nuemros); // ordena de mayor a menor

echo "<pre>";
var_dump($nuemros);
echo "</pre>";

$cliente  =array(
    'nombre'=>'juan',
    'saldo'=>300,
    'tipo'=>'premium'
);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); // ordena por valor
ksort($cliente); // ordena por clave
krsort($cliente); // ordena por clave de mayor a menor
arsort($cliente); // ordena por valor de mayor a menor

echo "<pre>";
var_dump($cliente);
echo "</pre>";
include 'includes/footer.php';