<?php
require '../../includes/app.php';
use App\Propiedad;
use Intervention\Image\ImageManager as Image;
use Intervention\Image\Drivers\Gd\Driver;
$propiedad = new Propiedad;
//debuguear($propiedad);
isAuth(); // Verifica si el usuario esta autenticado
// Importar la configuracion de la base de datos
$db = conectDatabase(); // Verifica la conexion a la base de datos
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);
$errores = Propiedad::getErrores(); // Obtener los errores de la clase Propiedad

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $propiedad = new Propiedad($_POST);

    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
    if ($_FILES['imagen']['tmp_name']) {
        $manager = new Image(Driver::class);
        $image = $manager->read($_FILES['imagen']['tmp_name'])->cover(800, 600);
        $propiedad->setImagen($nombreImagen);
    }

    $errores = $propiedad->validar();
    
 
    if (empty($errores)) {
        
        
        if (!is_dir(CARPETA_IMAGENES)) {
            mkdir(CARPETA_IMAGENES);
        }

        $image->save(CARPETA_IMAGENES . $nombreImagen);
        
        $resultado=$propiedad->guardar();
        if ($resultado) {
            
            header('Location: /admin?resultado=1');
        } else {
            echo "Error al guardar los datos";
        }
    }
}
includeTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">volve</a>
    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form class="formulario" method="POST" enctype="multipart/form-data" action="/admin/propiedades/crear.php">
        <?php include'../../includes/templates/formulario.php'; ?>
        
      
        <input type="submit" class="boton boton-verde" value="Crear propiedad">
    </form>
</main>


<?php
includeTemplate('footer');
?>

<script src="/build/js/bundle.min.js"></script>