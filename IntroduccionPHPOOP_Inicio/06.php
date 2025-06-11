<?php include 'includes/header.php';

interface TransportInterface {
    public function getInfo(): string;
    public function getRuedas(): int;
    public function getColor(): string;
}
class Trasport implements TransportInterface {
    public function __construct( protected int $ruedas, protected int $capacidad) {

    }
    public function getInfo():string{
        return "Ruedas: $this->ruedas, Capacidad: $this->capacidad personas";
    }
    public function getRuedas():int{
        return $this->ruedas;
    }
    public function getColor(): string{
        return "Color no definido";
    }
}


include 'includes/footer.php';