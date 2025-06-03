<?php 
    require 'includes/funciones.php';
    includeTemplate('header');
    ?>
  <main class="contenedor seccion">
    <h1>Conoce sombre Nosotros</h1>

    <div class="contenido-nosotros">
      <div class="imagen">
        <picture>
          <source srcset="build/img/nosotros.webp" type="image/webp" />
          <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen sobre nosotros" />
        </picture>
      </div>
      <div class="texto-nosotros">
        <blockquote>25 Años de Experiencia</blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Quisquam, voluptatum.
          Quisquam, voluptatum. Quisquam, voluptatum. Quisquam, voluptatum.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Quisquam, voluptatum.
          Quisquam, voluptatum. Quisquam, voluptatum.</p>
      </div>
    </div>
  </main>
  <section class="seccion contenedor">
    <h1>Mas sobre nosotros</h1>
    <div class="iconos-nosotros">
      <div class="icono">
        <img src="build/img/icono1.svg" alt="icono seguridad" />
        <h3>Seguridad</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
          voluptatibus.
        </p>
      </div>
      <div class="icono">
        <img src="build/img/icono2.svg" alt="icono precio" />
        <h3>Precio</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
          voluptatibus.
        </p>
      </div>
      <div class="icono">
        <img src="build/img/icono3.svg" alt="icono tiempo" />
        <h3>A Tiempo</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
          voluptatibus.
        </p>
      </div>
    </div>
  </section>


   <?php 
    includeTemplate('footer');
    ?>

  <script src="build/js/bundle.min.js"></script>
</body>

</html>