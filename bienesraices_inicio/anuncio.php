<?php
    // Importar la configuracion de la base de datos
    require 'includes/app.php';
    $db=conectDatabase(); // Verifica la conexion a la base de datos

    //obtener los datos de la propiedad
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if (!$id) {
      header('Location: /');
    } 
    $sql = 'SELECT * FROM propiedades WHERE id = ' . $id;
    $resultado = mysqli_query($db, $sql);
    if (mysqli_num_rows($resultado) > 0) {
      $propiedad = mysqli_fetch_assoc($resultado);
    } else {
      header('Location: /');
    }
    //inicializar la variable de errores
    
    includeTemplate('header');
    ?>
    <main class="contenedor seccion contenido-centrado">
      <h1><?php echo $propiedad['titulo']?></h1>
      <img src="/imagenes/<?php echo $propiedad['imagen']?>" alt="">
      <div class="resument-propiedad">
        <p class="precio"><?php echo $propiedad['precio'] ?></p>
        <ul class="iconos-car">
          <li>
            <img loading="lazy" src="build/img/icono_wc.svg" alt="wc" />
            <p><?php echo $propiedad['wc'] ?></p>
          </li>
          <li>
            <img
              loading="lazy"
              src="build/img/icono_estacionamiento.svg"
              alt="estacionamiento"
            />
            <p><?php echo $propiedad['estacionamiento'] ?></p>
          </li>
          <li>
            <img
              loading="lazy"
              src="build/img/icono_dormitorio.svg"
              alt="habitaciones"
            />
            <p><?php echo $propiedad['habitaciones'] ?></p>
          </li>
        </ul>
        <p>
          <?php echo $propiedad['descripcion'] ?>
        </p>
      </div>
    </main>

     <?php 
    includeTemplate('footer');
    ?>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
