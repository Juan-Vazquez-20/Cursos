<?php include 'includes/header.php';
require 'vendor/autoload.php';
//require 'clases/cliente.php';
//require 'clases/detalle.php';


//function mi_autoload($clase) {
//    require __DIR__ . "/clases/" . $clase . ".php";
//}
//spl_autoload_register('mi_autoload');
use APP\Cliente;
use APP\Detalle;
//function mi_autoload($clase) {
//    $partes = explode('\\', $clase);
//    require __DIR__ . '/clases/' . $partes[1] . '.php';
//}
//spl_autoload_register('mi_autoload');

$cliente = new Cliente();
$detalle = new Detalle();


include 'includes/footer.php';