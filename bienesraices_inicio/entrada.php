<?php 
    require 'includes/app.php';
    includeTemplate('header');
    ?>
    <main class="contenedor seccion contenido-centrado">
      <h1>Guia para la decoracion del lugar</h1>
      
      <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp" />
        <source srcset="build/img/destacada2.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/destacada2.jpg"
          alt="Imagen de la propiedad"
        />
      </picture>
      <p class="informacion-meta"> Escruito el: <span>20/10/2025</span> por: <span>Admin</span></p>
      <div class="resument-propiedad">
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur
          animi alias soluta laborum consequatur ipsam? Laudantium numquam iste
          blanditiis, ut quos vero, magni distinctio cum dicta natus quibusdam
          autem libero.
        </p>
      </div>
    </main>


     <?php 
    includeTemplate('footer');
    ?>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
