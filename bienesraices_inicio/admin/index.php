<?php 
    
    $resultado = $_GET['resultado'] ?? null; 



    require '../includes/funciones.php';
    includeTemplate('header');
    ?>
    <main class="contenedor seccion">
        <h1>Administrador de bienes raices</h1>
        <?php if($resultado == 1): ?>
        <p class="alerta success">Anuncio creado correctamente</p>
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

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>casa en la playa</td>
                        <td>$300,000</td>
                        <td>
                            <img src="/imagenes/25c325bd8b2776a63c44ed86e8cf0538.jpg" alt="Imagen de la propiedad">
                        </td>
                        <td>
                            <a href="#" class="boton boton-rojo">eliminar</a>
                            <a href="#" class="boton boton-verde">actualizar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        
           
    </main>

    <?php 
    includeTemplate('footer');
    ?>

    <script src="/build/js/bundle.min.js"></script>