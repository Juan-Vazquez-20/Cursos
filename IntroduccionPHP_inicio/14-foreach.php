<?php include 'includes/header.php';

$product =[
    [
        'nombre' => 'camisa',
        'precio' => 200,
        'tipo' => 'premium',
        'codigo' => 1234
    ],
    [
        'nombre' => 'pantalon',
        'precio' => 300,
        'tipo' => 'premium',
        'codigo' => 1234
    ],
    [
        'nombre' => 'zapatos',
        'precio' => 400,
        'tipo' => 'premium',
        'codigo' => 1234
    ]
];

foreach($product as $productos){
    ?>
    <li>
        <p>Producto: <?php echo $productos['nombre']; ?></p>
        <p>Precio: <?php echo "$".$productos['precio']; ?></p>
        <?php
        if($productos['tipo'] == 'premium'){
            echo "<p>Tipo: Premium</p>";
        }else{
            echo "<p>Tipo: Normal</p>";
        }
        ?>
    </li>
    <?php

    echo "<pre>";
    print_r($productos);
    echo "</pre>";
}


include 'includes/footer.php';