<?php include 'includes/header.php';

$productos =[
    [
        'nombre' => 'Camiseta',
        'precio' => 20,
        'stock' => 10,
        'categoria' => 'Ropa'
    ],
    [
        'nombre' => 'Pantalón',
        'precio' => 30,
        'stock' => 5,
        'categoria' => 'Ropa'
    ],
    [
        'nombre' => 'Zapatos',
        'precio' => 50,
        'stock' => 2,
        'categoria' => 'Calzado'
    ]
    ];

echo "<pre>";
var_dump($productos);
$json = json_encode($productos,JSON_UNESCAPED_UNICODE);
$jason_array = json_decode($json);
var_dump($json);
var_dump($jason_array);
echo "</pre>";




include 'includes/footer.php';