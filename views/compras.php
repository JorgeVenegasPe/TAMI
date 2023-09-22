<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="../public/images/TAMI LOGO transparente 2.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compras | TAMI</title>
  <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
  <link rel="stylesheet" type="text/css" href="../public/css/compras.css">
  <link rel="stylesheet" type="text/css" href="../public/css/footer.css">

<body>
  <?php include_once "menu.php"; ?>

  <main class="main__compras">
    <div class="carousel">
      <button id="prevBtn" class="carousel-btn">&#9664;</button>
      <div class="carousel-inner">
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/selladora.jpg" alt="Imagen 1">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.2500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button">Añadir</button>

              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/embalaje.jpg" alt="Imagen 2">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.1500</h2>
            </div>
            <div class="contenedor_btn">
              <button class=" button">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/sellador_vasos.jpg" alt="Imagen 3">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.3500</h2>
            </div>
            <div class="contenedor_btn">
              <button class=" button">Añadir</button>
              <button class=" button">Cantidad</button>
            </div>
          </div>
        </div>
        <!-- Agrega más imágenes y descripciones según sea necesario -->
      </div>
      <button id="nextBtn" class="carousel-btn">&#9654;</button>
    </div>
  </main>

  <?php include_once "footer.php"; ?>
  <script type="application/javascript" src="../public/js/main.js" async></script>
  <script src="../public/js/compras.js"></script>
</body>

</html>