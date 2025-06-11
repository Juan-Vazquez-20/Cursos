<?php include 'includes/header.php';

interface TransportInterfacez {
    public function getInfo(): string;
    public function getRuedas(): int;
}
class Trasport implements TransportInterfacez {
    public function __construct( protected int $ruedas, protected int $capacidad) {

    }
    public function getInfo():string{
        return "Ruedas: $this->ruedas, Capacidad: $this->capacidad personas";
    }
    public function getRuedas():int{
        return $this->ruedas;
    }
    
}

class Automvil extends Trasport implements TransportInterfacez {
    public function __construct( protected int $ruedas, protected int $capacidad, protected string $color) {

    }
    public function getInfo():string{
        return " capacidad Ruedas: $this->ruedas, Capacidad: $this->capacidad personas" . ", Color: $this->color";
    }
}
echo "<pre>";
var_dump($trasporte = new Trasport(4, 5));
var_dump($automovil = new Automvil(4, 5, 'Rojo'));
echo "</pre>";
include 'includes/footer.php';