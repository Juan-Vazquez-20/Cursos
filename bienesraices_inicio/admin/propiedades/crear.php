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
//inicializar la variable de errores
$errores = [];
$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedores_id = '';
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
        <fieldset>
            <legend>informacion general</legend>
            <label for="titulo">titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="titulo propiedad" value="<?php echo $titulo; ?>">

            <label for="titulo">precio:</label>
            <input type="number" id="precio" name="precio" placeholder="precio propiedad" min="1"
                value="<?php echo $precio; ?>">

            <label for="titulo">imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

            <label for="descriptio">Descripcion</label>
            <textarea name="descripcion" id="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>
        <fieldset>
            <legend>
                Informacion de la propiedad
            </legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9"
                value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9"
                value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedores_id" id="vendedores_id" value="<?php echo $vendedores_id; ?>">
                <option value="">-- Seleccione --</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)): ?>
                    <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?>
                        value="<?php echo $vendedor['id']; ?>">
                        <!-- Concatenar nombre y apellido del vendedor -->
                        <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" class="boton boton-verde" value="Crear propiedad">
    </form>
</main>


<?php
includeTemplate('footer');
?>

<script src="/build/js/bundle.min.js"></script>