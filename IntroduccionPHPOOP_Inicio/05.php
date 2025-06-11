<?php 
declare(strict_types=1);
include 'includes/header.php';
//herencia

abstract class Trasport{
    public function __construct( protected string $ruedas, protected int $capacidad) {

    }
    public function getInfo():string{
        return "Ruedas: $this->ruedas, Capacidad: $this->capacidad personas";
    }
}

class Biciclteta extends Trasport{

}
class Coche extends Trasport{
    
}

//$transporte = new Trasport('4', 5);
//echo $transporte->getInfo() . "<br>";

$bicicleta = new Biciclteta('2', 1);
echo $bicicleta->getInfo() . "<br>";

$coche = new Coche('4', 5);
echo $coche->getInfo() . "<br>";

include 'includes/footer.php';