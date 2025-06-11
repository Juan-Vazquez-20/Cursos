<?php 
declare(strict_types=1);
include 'includes/header.php';

class producto{
    public function __construct( public string $nombre, public int $precio, public bool $disponible) {
    }
    public function mostrarInformacion(): void {
        echo "Nombre: $this->nombre, Precio: $this->precio, Disponible: " . ($this->disponible ? 'Sí' : 'No') . "<br>";
    }
}
$producto = new producto('tablet', 200, true);
$producto->mostrarInformacion();

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new producto('laptop', 800, false);
$producto2->mostrarInformacion();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';