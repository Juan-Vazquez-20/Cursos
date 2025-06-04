<?php 
function conectDatabase(): mysqli {
    $db = mysqli_connect("localhost", "root", "root", "bienesraices_crud");
    if(!$db){
        echo "Error no se pudo conectar a la base de datos";
        exit;
    }
    return $db;
    
}