<?php include 'includes/header.php';

$nombreCliente = "Juan Perez";

// Conoceer extencion
echo strlen($nombreCliente); // Devuelve la longitud de la cadena
echo "<br>";
var_dump($nombreCliente); // Devuelve el tipo de dato y el valor

$text = trim($nombreCliente); // Elimina espacios en blanco al inicio y al final
echo "<br>";
var_dump($text);

echo strtoupper($nombreCliente); // Convierte la cadena a mayusculas

echo "<br>";

echo strtolower($nombreCliente); // Convierte la cadena a minusculas

$email = "correo@corre.com";
$email2 = "Correo@corre.com";

var_dump($email == $email2); // false
echo "<br>";
var_dump(strtolower($email) == strtolower($email2)); // true
echo "<br>";
echo str_replace("Juan", "J", $nombreCliente); // Reemplaza los espacios en blanco por guiones bajos

echo "<br>";
echo strpos($nombreCliente, "Juan"); // Devuelve la posicion de la cadena
echo "<br>";


$tipoCliente = "premium";
echo "El cliente es: " . $nombreCliente . " es ". $tipoCliente. "<br>";

include 'includes/footer.php';