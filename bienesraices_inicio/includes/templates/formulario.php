<fieldset>
            <legend>informacion general</legend>
            <label for="titulo">titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="titulo propiedad" value="<?php echo s( $propiedad->titulo); ?>">

            <label for="titulo">precio:</label> 
            <input type="number" id="precio" name="precio" placeholder="precio propiedad" min="1"
                value="<?php echo s( $propiedad->precio); ?>">

            <label for="titulo">imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

            <label for="descriptio">Descripcion</label>
            <textarea name="descripcion" id="descripcion"><?php echo s( $propiedad->descripcion); ?></textarea>
        </fieldset>
        <fieldset>
            <legend>
                Informacion de la propiedad
            </legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9"
                value="<?php echo s( $propiedad->habitaciones); ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo s( $propiedad->wc); ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9"
                value="<?php echo s( $propiedad->estacionamiento); ?>">
        </fieldset>

        <fieldset>
        <!--
            <legend>Vendedor</legend>
            <select name="vendedores_id">
                <option value="">-- Seleccione --</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)): ?>
                    <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?>
                        value="1">
                        <?php echo s($vendedor['nombre']) . " " . s($vendedor['apellido']); ?>
                <?php endwhile; ?>
                </select-->
        </fieldset>
