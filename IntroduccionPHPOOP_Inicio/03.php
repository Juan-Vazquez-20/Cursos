<?php 
declare(strict_types=1);
include 'includes/header.php';

//metodos estaticos
class producto{

    public $imagen;
    public string $imagenPlaceolder = "img";

    public function __construct( protected string $nombre, public int $precio, public bool $disponible, string $imagen) {
        if ($imagen) {
            self::$imagen = $imagen;   
        }
    }

    public static function obtenerImagen(){
        return self::$imagen;
    }

    public static function obtenerProducto():void{
        echo "Obteniendo producto estático<br>";
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
echo producto::obtenerProducto();

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