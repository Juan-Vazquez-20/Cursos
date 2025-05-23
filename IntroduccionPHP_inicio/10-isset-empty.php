<?php include 'includes/header.php';


$cliente= [];
$cliente2 = array();
$cliente3 = array('pedro', 'pablo', 'maria');
$cliente=[
    'nombre'=>'juan',
    'saldo'=>300
];

//empty
var_dump(empty($cliente)); // true
var_dump(empty($cliente2)); // true
var_dump(empty($cliente3));

//isset
echo "<br>";
var_dump(isset($cliente)); // false
var_dump(isset($cliente2)); // false
var_dump(isset($cliente3)); // true
var_dump(isset($cliente4)); // true

echo "<br>";
var_dump(isset($cliente['nombre'])); // true
var_dump(isset($cliente['codigo'])); // false



include 'includes/footer.php';