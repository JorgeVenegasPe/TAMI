<div>
<h2>Formulario de Compras</h2>
    <label class="label-nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
<form>
    <div class="form-row">
      <div class="form-column">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required>

        <label for="numero">Número telefónico:</label>
        <input type="number" name="telefono" id="telefono" required>
      </div>
      <div class="form-column">
        <label for="producto">Producto a Comprar:</label>
        <input type="text" name="producto" id="producto" required>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required>
      </div>
    </div>

    <label for="direccion">Consulta:</label>
    <textarea name="mensaje" rows="4" id="mensaje" required></textarea>

    <input type="submit" value="Enviar Compra" id="enviar">
</form>
</div>