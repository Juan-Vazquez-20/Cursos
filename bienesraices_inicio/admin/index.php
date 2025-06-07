<?php 

    require '../includes/funciones.php';
    $auth = isAuth();
    if(!$auth) {
        header('Location: /');
    }
    //importa la base de datos
    require '../includes/config/database.php';
    $db = conectDatabase();
     //escribir el query
    $query= "SELECT * FROM propiedades";

     //consultar la base de datos
    $resultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET['resultado'] ?? null; 

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'] ?? null;
        $id = filter_var($id, FILTER_VALIDATE_INT);
        
        if($id) {
            //eliminar el archivo
            $query = "SELECT imagen FROM propiedades WHERE id = {$id}";
            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);
            unlink('../imagenes/' . $propiedad['imagen']);
            //eliminar propuedas
            $query = "DELETE FROM propiedades WHERE id = {$id}";
            $resultado = mysqli_query($db, $query);
            if($resultado) {
                header('Location: /admin?resultado=3');
            }
        }
    }        //validar el id
    

    includeTemplate('header');
    ?>
    <main class="contenedor seccion">
        <h1>Administrador de bienes raices</h1>
        <?php if($resultado == 1): ?>
        <p class="alerta success">Anuncio CREADO correctamente</p>
        <?php elseif($resultado == 2): ?>
        <p class="alerta success">Anuncio ACTUALIZADO correctamente</p>
        <?php elseif($resultado == 3): ?>
        <p class="alerta success">Anuncio   Eliminado correctamente</p>
        <?php endif?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propuedad</a>
        
        
            <table class="propiedades">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody> <!-- Iterar los resultados -->
                    <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                    <tr>
                        <td><?php echo $propiedad['id']; ?></td>
                        <td><?php echo $propiedad['titulo']; ?></td>
                        <td>$<?php echo number_format($propiedad['precio']); ?></td>
                        <td>
                            <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla" alt="Imagen de la propiedad">
                        </td>
                        <td>
                    <!--Formualiro para eliminar registro-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                                <input type="hidden" name="tipo" value="propiedad">
                                <input type="submit" class="boton boton-rojo" value="Eliminar">
                            </form>
                            
                            <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'];?>" class="boton boton-naranja">actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        
           
    </main>
    
    <?php 
    //cerrar la conexion
    mysqli_close($db);

    includeTemplate('footer');
    ?>

    <script src="/build/js/bundle.min.js"></script>