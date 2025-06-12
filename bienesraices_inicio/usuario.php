<?php   
// Include the database connection file
require 'includes/app.php';
$db=conectDatabase();

$email = 'correo@correo.com';
$password = '12345678';
$passwordHash = password_hash($password, PASSWORD_BCRYPT);
;

$query="INSERT INTO usuarios (email, password) VALUES ('{$email}', '{$passwordHash}')"; 
mysqli_query($db, $query);


?>