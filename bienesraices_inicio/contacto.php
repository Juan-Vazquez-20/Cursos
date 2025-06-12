<?php 
    require 'includes/app.php';
    includeTemplate('header');
    ?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Contacto</h1>
        <picture>
          <sorce srcset="build/img/destacada3.webp" type="image/webp" />
          <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
          <img
            loading="lazy"
            src="build/img/destacada3.jpg"
            alt="Imagen de contacto"
          />
        </picture>  

        <h2>Llena el formulario de contacto</h2>
        <form class="formulario">
          <fieldset>
            <legend>Informacion Personal</legend>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" placeholder="Tu Nombre" required />

            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Tu Email" required />

            <label for="telefono">Telefono:</label>
            <input type="tel" id="telefono" placeholder="Tu Telefono" required />

            <label for="mensaje">Mensaje:</label>
            <textarea rows="5" placeholder="Tu Mensaje"></textarea>
          </fieldset>

          <fieldset>
            <legend>Informacion sobre la propiedad</legend>
            <label for="opciones">Vende o Compra:</label>
            <select id="opciones">
              <option value="" disabled selected>-- Selecciona --</option>
              <option value="compra">Compra</option>
              <option value="venta">Venta</option>
            </select>
            <label for="presupuesto">Presupuesto:</label>
            <input type="number" id="presupuesto" placeholder="Tu Presupuesto" required />
          </fieldset>

          <fieldset>
            <legend>Contacto</legend>
            <p>Como deseas ser contactado:</p>
            <div class="forma-contacto">
              <label for="contactar-telefono">Telefono</label>
              <input type="radio" name="contacto" id="contactar-telefono" value="telefono" checked />

              <label for="contactar-email">Email</label>
              <input type="radio" name="contacto" id="contactar-email" value="email" />
            </div>
            <p>si eligio telefono elija la fecha y hora</p>
            <label for="fecha">Fecha:</label>
            <input type="date" name="" id="">
            <label for="hora">Hora:</label>
            <input type="time" name="" id="" min="09:00" max="18:00" step="900" />
          </fieldset>
          <button type="submit" class="boton-verde">Enviar</button>
        </form>
    </main>


   <?php 
    includeTemplate('footer');
    ?>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>
