<?php 
    require 'includes/funciones.php';
    includeTemplate('header');
    ?>
    <main class="contenedor seccion">
        <h1>Anuncio</h1>

        <?php
        $limit = 10; // Number of properties to display
        include 'includes/templates/anuncios.php';
        ?>


    </main>
    

     <?php 
    includeTemplate('footer');
    ?>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
