<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../public/images/logo_sin_fondo.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos | TAMI</title>
  <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
  <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
  <link rel="stylesheet" type="text/css" href="../public/css/productos.css">
</head>
<body>
  <?php include_once "menu.php";?>
  <main class="main__productos">
    <h1 class="productos__titulo">Nuestros productos</h1>
    <section class="productos__multimedia">
      <video class="productos__video" src="../public/videos/video__productos.mp4" autoplay="autoplay" muted="muted"
        loop="loop"></video>
    </section>
    <section class="productos__catalogo" id="catalogo1">
      <h2 class="productos__tituloCatalogo" id="productos__tituloCatalogo">Catálogo</h2>
      <div class="productos__imagenes">
        <figure class="productos__item" id="maquina__laminadora">
          <a class="productos__link1" href="#productos__tituloCatalogo">
            <img class="productos__img" src="../public/images/catalogo_productos/laminadora.jpg" alt="LAMINADORA">
            Máquina laminadora
          </a>
          <figcaption class="productos__description"> <a href="#productos__tituloCatalogo"
              class="productos__link2">Vista rápida</a></figcaption>
        </figure>
        <figure class="productos__item" id="maquina__selladora">
          <a href="#productos__tituloCatalogo" class="productos__link1">
            <img class="productos__img" src="../public/images/catalogo_productos/selladora.jpg" alt="SELLADORA" />
            Máquina selladora de botellas manual
          </a>
          <figcaption class="productos__description"> <a href="#productos__tituloCatalogo"
              class="productos__link2">Vista rápida</a></figcaption>
        </figure>
        <div class="detalles" id="selladora">
          <figure class="detalles__imagen">
            <img class="detalles__img" src="../public/images/catalogo_productos/selladora.jpg"
              alt="maquina selladora de botellas manual">
            <figcaption class="fig">
              <h2 class="detalles__titulo" style="text-align: center;">Máquina selladora de botellas manual</h2>
              <p class="detalles__precio">s/.200.00</p>
            </figcaption>
          </figure>
          <div class="detalles__content">
            <p class="icono" id="icono2">X</p>
            <div class="cerrar">
              <h2 class="detalles__titulo" style="text-align: center;">Máquina selladora de botellas manual</h2>
              <p class="detalles__precio">s/.200.00</p>
            </div>
          </div>
        </div>
        <figure class="productos__item" id="maquina__embalaje">
          <a href="#productos__tituloCatalogo" class="productos__link1">
            <img class="productos__img" src="../public/images/catalogo_productos/embalaje.jpg" alt="emabalaje" />
            Máquina de embalaje
          </a>
          <figcaption class="productos__description"> <a href="#productos__tituloCatalogo"
              class="productos__link2">Vista rápida</a></figcaption>
        </figure>
        <div class="detalles" id="embalaje">
          <figure class="detalles__imagen">
            <img class="detalles__img" src="../public/images/catalogo_productos/embalaje.jpg"
              alt="maquina selladora de botellas manual">
            <figcaption class="fig">
              <h2 class="detalles__titulo"> Máquina de embalaje</h2>
              <p class="detalles__precio">s/.150.00</p>
            </figcaption>
          </figure>
          <div class="detalles__content">
            <p class="icono" id="icono3">X</p>
            <div class="cerrar">
              <h2 class="detalles__titulo"> Máquina de embalaje</h2>
              <p class="detalles__precio">s/.150.00</p>
            </div>
          </div>
        </div>
        <figure class="productos__item" id="sellador__vasos">
          <a href="#productos__tituloCatalogo" class="productos__link1">
            <img class="productos__img" src="../public/images/catalogo_productos/sellador_vasos.jpg"
              alt="SELLADOR VASOS" />Sellador de vasos
          </a>
          <figcaption class="productos__description"> <a href="#productos__tituloCatalogo"
              class="productos__link2">Vista rápida</a></figcaption>
        </figure>
        <div class="detalles" id="SelladorVasos">
          <figure class="detalles__imagen">
            <img class="detalles__img" src="../public/images/catalogo_productos/sellador_vasos.jpg"
              alt="maquina selladora de botellas manual">
            <figcaption class="fig">
              <h2 class="detalles__titulo">Sellador de vasos</h2>
              <p class="detalles__precio">s/.300.00</p>
            </figcaption>
          </figure>
          <div class="detalles__content">
            <p class="icono" id="icono4">X</p>
            <div class="cerrar">
              <h2 class="detalles__titulo">Sellador de vasos</h2>
              <p class="detalles__precio">s/.300.00</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include_once "footer.php";?>
  <script type="application/javascript" src="../public/js/main.js" async></script>
  <script type="application/javascript" src="../public/js/productos.js" async></script>
</body>