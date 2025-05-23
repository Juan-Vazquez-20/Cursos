<?php include 'includes/header.php';


$cliente = [
    'nombre' => 'Juan',
    'apellido' => 'Perez',
    'email' => 'correo@correo',
    'informacion' => [
        'tipo' => 'premium',
        'saldo' => 300,
        'tipo_cliente' => 'premium'
    ]
];

echo "<pre>";
var_dump($cliente['apellido']);
echo "</pre>";

echo $cliente['nombre']; 
echo "<br>";

echo $cliente['informacion']['tipo'];

$cliente['codigo'] = 123456; // Agregar un elemento al array
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';