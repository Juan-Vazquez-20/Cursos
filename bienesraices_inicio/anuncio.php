<?php include 'templates/header.php'; ?>
    <main class="contenedor seccion contenido-centrado">
      <h1>Casa en venta frente al bosque</h1>
      <picture>
        <source srcset="build/img/destacada.webp" type="image/webp" />
        <source srcset="build/img/destacada.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/destacada.jpg"
          alt="Imagen de la propiedad"
        />
      </picture>
      <div class="resument-propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="iconos-car">
          <li>
            <img loading="lazy" src="build/img/icono_wc.svg" alt="wc" />
            <p>3</p>
          </li>
          <li>
            <img
              loading="lazy"
              src="build/img/icono_estacionamiento.svg"
              alt="estacionamiento"
            />
            <p>3</p>
          </li>
          <li>
            <img
              loading="lazy"
              src="build/img/icono_dormitorio.svg"
              alt="habitaciones"
            />
            <p>4</p>
          </li>
        </ul>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur
          animi alias soluta laborum consequatur ipsam? Laudantium numquam iste
          blanditiis, ut quos vero, magni distinctio cum dicta natus quibusdam
          autem libero.
        </p>
      </div>
    </main>

     <?php 
// Include the header template
include 'templates/footer.php'; 
?>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
