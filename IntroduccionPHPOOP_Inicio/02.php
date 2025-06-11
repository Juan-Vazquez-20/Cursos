<?php 
declare(strict_types=1);
include 'includes/header.php';

class producto{
    //publioc se puede acceder desde cualquier parte del código
    //protected se puede acceder desde la misma clase y clases heredadas
    //private se puede acceder solo desde la misma clase 

    public function __construct( protected string $nombre, public int $precio, public bool $disponible) {
    }
    public function mostrarInformacion(): void {
        echo "Nombre: $this->nombre, Precio: $this->precio, Disponible: " . ($this->disponible ? 'Sí' : 'No') . "<br>";
    }
    public function getNombnre(){
        return $this->nombre;
    }
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

}
$producto = new producto('tablet', 200, true);
//echo $producto->getNombnre();
$producto->setNombre('tablet nueva');
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