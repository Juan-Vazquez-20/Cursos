<?php 
    require '../../includes/funciones.php';
    isAuth(); // Verifica si el usuario esta autenticado
      
    $id = $_GET['id'] ?? null;
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if(!$id) {
        header('Location: /admin');
    }
// Importar la configuracion de la base de datos
    require '../../includes/config/database.php';
    $db=conectDatabase(); // Verifica la conexion a la base de datos

    //obtener los datos de la propiedad
    $consulta = "SELECT * FROM propiedades WHERE id = {$id}";
    $resultadoConsulta = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultadoConsulta);

    echo "<pre>";
    var_dump($propiedad);
    echo "</pre>";

    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);
//inicializar la variable de errores
    $errores = [];
    
    $titulo = $propiedad['titulo'] ?? '';
    $precio = $propiedad['precio'] ?? '';
    $descripcion = $propiedad['descripcion'] ?? '';
    $habitaciones = $propiedad['habitaciones'] ?? '';
    $wc = $propiedad['wc'] ?? '';
    $estacionamiento = $propiedad['estacionamiento'] ?? '';
    $vendedores_id = $propiedad['vendedores_id'] ?? '';
    $imagenPropiedad = $propiedad['imagen'] ?? '';
 



    if($_SERVER['REQUEST_METHOD'] === 'POST') {


        //sanitizar los datos
        $titulo = mysqli_real_escape_string( $db ,filter_var($_POST['titulo'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $precio = mysqli_real_escape_string( $db ,filter_var($_POST['precio'], FILTER_SANITIZE_NUMBER_INT));
        $descripcion = mysqli_real_escape_string( $db ,filter_var($_POST['descripcion'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $habitaciones = mysqli_real_escape_string( $db ,filter_var($_POST['habitaciones'], FILTER_SANITIZE_NUMBER_INT));
        $wc = mysqli_real_escape_string( $db ,filter_var($_POST['wc'], FILTER_SANITIZE_NUMBER_INT));
        $estacionamiento = mysqli_real_escape_string( $db ,filter_var($_POST['estacionamiento'], FILTER_SANITIZE_NUMBER_INT));
        $vendedores_id = mysqli_real_escape_string( $db ,filter_var($_POST['vendedores_id'], FILTER_SANITIZE_NUMBER_INT));
        //validar los datos
        $creado = date('Y/m/d');

        $imagen = $_FILES['imagen'];
        //var_dump($imagen['name']);

       
        // Validar campos obligatorios 

        if(!$titulo) {
            $errores[] = "El titulo es obligatorio";
        }
        if(!$precio) {
            $errores[] = "El precio es obligatorio";
        }
        if(!$descripcion) {
            $errores[] = "La descripcion es obligatoria";
        }
        if(!$habitaciones) {
            $errores[] = "El numero de habitaciones es obligatorio";
        }
        if(!$wc) {
            $errores[] = "El numero de baños es obligatorio";
        }
        if(!$estacionamiento) {
            $errores[] = "El numero de estacionamientos es obligatorio";
        }
        if(!$vendedores_id) {
            $errores[] = "El vendedor es obligatorio";
        }
        // Validar el tamaño de la imagen
        if($imagen['size'] > 1000000) {
            $errores[] = "La imagen es muy pesada, debe ser menor a 1MB";
        }
        
        // Validar errores
        if (empty($errores)) {
          // Crear carpeta
        $carpetaImagenes = '../../imagenes/';
        if(!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }
        $nombreImagen = '';

        //eliminar la imagen previa y si no matener la imagen previa
        if($imagen['name']) {
            unlink($carpetaImagenes . $imagenPropiedad);
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        } else {
            $nombreImagen = $imagenPropiedad;
        }

           
       
        
        
        //acualizar los regisgtros en la base de datos
        $query= "UPDATE propiedades SET titulo = '{$titulo}', precio = '{$precio}', descripcion = '{$descripcion}', habitaciones = {$habitaciones}, wc = {$wc}, estacionamiento = {$estacionamiento}, vendedores_id = {$vendedores_id}, imagen = '{$nombreImagen}' WHERE id = {$id}";

        //echo $query;
        $resultado = mysqli_query($db, $query);
        if($resultado) {
            // Redireccionar a la pagina de propiedades
           header('Location: /admin?resultado=2');
        } else {
            echo "Error al guardar los datos";
        }
    }  
} 
    
    

    require '../../includes/funciones.php';
    includeTemplate('header');
    ?>
    <main class="contenedor seccion"> 
        <h1>Actualizar Propiedad</h1>

        <a href="/admin" class="boton boton-verde">volve</a>
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>informacion general</legend>
                <label for="titulo">titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="titulo propiedad" value="<?php echo $titulo; ?>">

                <label for="titulo">precio:</label>
                <input type="number" id="precio"name="precio" placeholder="precio propiedad" min="1" value="<?php echo $precio; ?>">

                <label for="titulo">imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

                <img src="/imagenes/<?php echo $imagenPropiedad; ?>" class='imagen-small'alt="">

                <label for="descriptio">Descripcion</label>
                <textarea name="descripcion" id="descripcion" ><?php echo $descripcion; ?></textarea>
            </fieldset>
            <fieldset>
                <legend>
                    Informacion de la propiedad
                </legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedores_id" id="vendedores_id" value="<?php echo $vendedores_id; ?>">
                    <option value="">-- Seleccione --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                        <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected':'';?> value="<?php echo $vendedor['id']; ?>">
                            <!-- Concatenar nombre y apellido del vendedor -->
                        <?php echo $vendedor ['nombre']. " " . $vendedor['apellido']; ?></option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" class="boton boton-verde" value="Actualizar propiedad">
        </form>
    </main>


    <?php 
    includeTemplate('footer');
    ?>

<script src="/build/js/bundle.min.js"></script>