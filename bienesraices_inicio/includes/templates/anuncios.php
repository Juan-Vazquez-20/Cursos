<?php
    $db = conectDatabase();
    //consultar los anuncios
    $query = "SELECT * FROM propiedades LIMIT {$limit}";  // Limit to 3 properties

    //leer el resultado
    $result = mysqli_query($db, $query);


?>



<div class="contenedor-anuncio">
    <?php while($propiedad = mysqli_fetch_assoc($result)):?>
        <div class="anuncio">
          
            <img  loading="lazy" src="/imagenes/<?php echo $propiedad['imagen'] ?>" alt="anuncio 1" />
          
          <div class="contenido-anuncio">
            <h3><?php echo $propiedad['titulo'] ?></h3>
            <p><?php echo $propiedad['descripcion'] ?></p>
            <p class="precio"><?php echo $propiedad['precio'] ?></p>

            <ul class="iconos-car">
              <li>
                <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="wc">
                <p><?php echo $propiedad['wc'] ?></p>
              </li>
              <li>
                <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                <p><?php echo $propiedad['estacionamiento'] ?></p>
              </li>
              <li>
                <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="habitaciones">
                <p><?php echo $propiedad['habitaciones'] ?></p>
              </li>
            </ul>
            <a href="anuncio.php?id=<?php echo $propiedad['id'];?>" class="boton boton-naranja">Ver Propiedad</a>
          </div><!--.contenido-anuncio-->
        </div><!--.anuncio-->       
    <?php endwhile; ?>
      </div><!--.contenedor-anuncio-->
<?php
    //cerrar la conexión
    mysqli_close($db);  
?>     