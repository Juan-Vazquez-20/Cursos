<?php 
// Importar la configuracion de la base de datos
    require '../../includes/config/database.php';
    $db=conectDatabase(); // Verifica la conexion a la base de datos
//inicializar la variable de errores
    $errores = [];
    
    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedores_id = '';



    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Procesar el formulario
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
         
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedores_id = $_POST['vendedores_id'];

       
        // Validar campos obligatorios

        if(!$titulo) {
            $errores[] = "El titulo es obligatorio";
        }
        if(!$precio) {
            $errores[] = "El precio es obligatorio";
        }
        if(!$precio) {
            $errores[] = "La descripcion es obligatoria";
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
        
        // Validar errores
        if (empty($errores)) {


        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedores_id')";
        //echo $query;
        $resultado = mysqli_query($db, $query);
        if($resultado) {
            // Redireccionar a la pagina de propiedades
           echo "Datos guardados correctamente";
        } else {
            echo "Error al guardar los datos";
        }
    } 
} 
    
    

    require '../../includes/funciones.php';
    includeTemplate('header');
    ?>
    <main class="contenedor seccion"> 
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">volve</a>
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <form class="formulario" method="POST">
            <fieldset>
                <legend>informacion general</legend>
                <label for="titulo">titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="titulo propiedad" value="<?php echo $titulo; ?>">

                <label for="titulo">precio:</label>
                <input type="number" id="precio"name="precio" placeholder="precio propiedad" min="1" value="<?php echo $precio; ?>">

                <label for="titulo">imagen:</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

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
                    <option value="1">Juan</option>
                    <option value="2">Sam</option>
                    <option value="3">Shellby</option> 
                </select>
            </fieldset>

            <input type="submit" class="boton boton-verde" value="Crear propiedad">
        </form>
    </main>


    <?php 
    includeTemplate('footer');
    ?>

<script src="/build/js/bundle.min.js"></script>