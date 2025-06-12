<?php 
    require 'includes/app.php';

    // Include the header template
    includeTemplate('header' , $inicio = true);
    ?>
  <main class="contenedor seccion">
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

    <section class="seccion contenedor">
      <h2>Casas y Departamentos en Venta</h2>
      
      <?php
      $limit = 3; // Number of properties to display
      include 'includes/templates/anuncios.php';
      ?>

      <div class="ver-todas alinear-derecha">
        <a href="anuncios.php" class="boton boton-verde">Ver Todas</a>
      </div><!--.ver-todas-->
    </section>

    <section class="imagen-contacto">
      <h2>Encuentra la casa de tus sueños</h2>
      <p>
        Llena el formulario de contacto y un asesor se pondrá en contacto
        contigo lo antes posible.
      </p>
      <a href="contacto.php" class="boton boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
      <section class="blog">
        <h3>Nuestro blog</h3>

        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="build/img/blog1.webp" type="image/webp" />
              <source srcset="build/img/blog1.jpg" type="image/jpeg" />
              <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog" />
            </picture>
          </div>  
            <div class="texto-entrada">
              <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p class="informacion-meta">Escrito el: <span>01/05/2025</span> por: <span>Admin</span></p>
                <p>
                  Consejos para construir una terraza en el techo de tu casa
                  con los mejores materiales y ahorrando dinero.
                </p>
              </a>
            </div>
        </article>
        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="build/img/blog2.webp" type="image/webp" />
              <source srcset="build/img/blog2.jpg" type="image/jpeg" />
              <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog" />
            </picture>
          </div>  
            <div class="texto-entrada">
              <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p class="informacion-meta">Escrito el: <span>01/05/2025</span> por: <span>Admin</span></p>
                <p>
                  Consejos para construir una terraza en el techo de tu casa
                  con los mejores materiales y ahorrando dinero.
                </p>
              </a>
            </div>
        </article>
      </section>

      <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
          <blockquote>
            El personal se comportó de una manera excelente, muy buena atención
            y el inmueble que compré es de excelente calidad.
          </blockquote>
          <p>- Juan Perez</p>
        </div>
      </section>
    </div>
  </main>

  <?php 
    includeTemplate('footer');
    ?>

  <script src="build/js/bundle.min.js"></script>
</body>

</html>