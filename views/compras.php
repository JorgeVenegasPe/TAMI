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
</head>
<style>
  /* Estilos para el contenedor del carrito */
  .carrito-container {
    display: none;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(43, 43, 43, 0.5);
    /* Fondo semitransparente para el modal */
    z-index: 999;
    /* Coloca el carrito por encima de todos los elementos */
  }

  /* Estilos para el carrito */
  .carrito {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    width: 400px;
    padding: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: left;
    color: #2B2B2B;
  }

  .carrito h2 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #2B2B2B;
  }

  .carrito ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .carrito li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
  }

  .carrito li:last-child {
    border-top: 1px solid #ccc;
  }

  .carrito button {
    background-color: #FF4444;
    border: none;
    color: white;
    padding: 5px 10px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
  }

  .carrito button:hover {
    background-color: #FF8282;
  }

  /* Estilos para el icono de carrito */
  .cart-icon {
    font-size: 30px;
    cursor: pointer;
    position: relative;
    display: flex;
    align-items: center;
    color: #2B2B2B;
  }

  /* Estilos para la cantidad de productos en el botón de carrito */
  .cart-quantity {
    background-color: #ff4444;
    color: white;
    border-radius: 50%;
    padding: 4px 8px;
    font-size: 14px;
    position: absolute;
    /* Posición absoluta para posicionar con top y right */
    top: -5px;
    margin-left: 25px;
    /* Ajusta la posición vertical */
    /* Ajusta la posición horizontal */
  }

  /* Estilos para el botón de cerrar el carrito */
  .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    color: #666;
    cursor: pointer;
    border: none;
    background-color: transparent;
  }

  .close-btn:hover {
    color: #2B2B2B;
  }

  /* Estilos para los botones del carrito */
  .carrito-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
  }

  .carrito-buttons button {
    flex: 1;
    margin: 0 5px;
    /* Espacio entre los botones */
    width: 50%;
    /* Divide el espacio disponible entre los dos botones */
    background-color: #2B2B2B;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
  }

  .carrito-buttons button:hover {
    background-color: #949494;
  }
</style>


<body>
  <?php include_once "menu.php"; ?>

  <main class="main__compras">
    <div class="carousel">
      <button id="prevBtn" class="carousel-btn">&#9664;</button>
      <div class="carousel-inner">
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/selladora2.png" alt="Imagen 1">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.2500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/embalaje2.png" alt="Imagen 2">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.1500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/sellador_vasos2.png" alt="Imagen 3">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.3500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/SBotellas-1_1.1.png" alt="Imagen 4">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.4500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/Selladora-de-bolsas.webp" alt="Imagen 5">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.5500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/Soldadora-LINGBA-5.webp" alt="Imagen 6">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.6500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/Soldadora-SPARK-3.png" alt="Imagen 7">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.7500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/Ventilador-Holografico.png" alt="Imagen 8">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.8500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/BAMBO FIBER WALLBOARD1.png" alt="Imagen 9">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.9500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/WPC FENCEPANEL.png" alt="Imagen 10">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.10500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image">
            <img src="../public/images/catalogo_productos/WPC WALLPANEL.png" alt="Imagen 11">
          </div>
          <div class="carousel-description">
            <h1 class="nombre">Nombre</h1>
            <div class="contenedor_pyp">
              <p class="producto">Producto</p>
              <h2 class="precio">S/.11500</h2>
            </div>
            <div class="contenedor_btn">
              <button class="button add-to-cart">Añadir</button>
              <button class="button">Cantidad</button>
            </div>
          </div>
        </div>
        <!-- Agrega más imágenes y descripciones según sea necesario -->
      </div>
      <button id="nextBtn" class="carousel-btn">&#9654;</button>
    </div>
    <div class="cart-icon" id="mostrarCarrito">
      &#128722;
      <span class="cart-quantity" id="carrito-cantidad">0</span>
    </div>


  </main>

  <div class="carrito-container">
    <div class="carrito">
      <h2>Carrito de Compras</h2>
      <ul id="carrito-lista"></ul>
      <p>Total: <span id="carrito-total">S/.0.00</span></p>
      <div class="carrito-buttons">
        <button id="vaciar-carrito" class="button">Vaciar Carrito</button>
        <button id="pagar" class="button">Pagar</button>
      </div>
    </div>
  </div>

  <?php include_once "footer.php"; ?>
  <script type="application/javascript" src="../public/js/main.js" async></script>
  <script src="../public/js/compras.js"></script>
</body>
<script>
  // JavaScript para mostrar y ocultar el carrito
  const mostrarCarritoBtn = document.getElementById('mostrarCarrito');
  const carritoContainer = document.querySelector('.carrito-container');

  mostrarCarritoBtn.addEventListener('click', () => {
    carritoContainer.style.display = 'block';
  });

  carritoContainer.addEventListener('click', (event) => {
    if (event.target === carritoContainer) {
      carritoContainer.style.display = 'none';
    }
  });

  // Obtener todos los botones "Añadir" del carrusel
  const addToCartButtons = document.querySelectorAll('.add-to-cart');

  // Elementos del carrito
  const carritoLista = document.getElementById('carrito-lista');
  const carritoTotal = document.getElementById('carrito-total');
  const carritoCantidad = document.getElementById('carrito-cantidad');

  // Inicializar el carrito como un arreglo vacío
  let carrito = [];

  // Función para actualizar el carrito y la vista del carrito
  function actualizarCarrito() {
    // Limpiar la vista del carrito
    carritoLista.innerHTML = '';

    // Calcular el total
    let total = 0;

    // Recorrer el carrito y agregar cada producto al carrito
    carrito.forEach((producto, index) => {
      const listItem = document.createElement('li');
      listItem.innerHTML = `
        <span>${producto.nombre}</span>
        <span>S/.${producto.precio.toFixed(2)}</span>
        <button class="eliminar" data-index="${index}">Eliminar</button>
      `;
      carritoLista.appendChild(listItem);

      // Sumar el precio del producto al total
      total += producto.precio;
    });

    // Actualizar la cantidad en el botón de carrito
    carritoCantidad.textContent = carrito.length;

    // Actualizar el total en la vista
    carritoTotal.textContent = `Total: S/.${total.toFixed(2)}`;
  }

  // Manejar el clic en los botones "Añadir"
  addToCartButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
      // Obtener los datos del producto desde el carrusel
      const nombre = document.querySelectorAll('.nombre')[index].textContent;
      const precioTexto = document.querySelectorAll('.precio')[index].textContent;
      const precio = parseFloat(precioTexto.replace('S/.', '').replace(',', '')); // Convertir el precio a número

      // Agregar el producto al carrito
      carrito.push({
        nombre,
        precio
      });

      // Actualizar el carrito y la vista del carrito
      actualizarCarrito();
    });
  });

  // Manejar la eliminación de productos del carrito
  carritoLista.addEventListener('click', (event) => {
    if (event.target.classList.contains('eliminar')) {
      const index = event.target.getAttribute('data-index');
      carrito.splice(index, 1);
      actualizarCarrito();
    }
  });



  // Botón para vaciar el carrito
  const vaciarCarritoBtn = document.getElementById('vaciar-carrito');

  vaciarCarritoBtn.addEventListener('click', () => {
    carrito = []; // Vaciar el carrito
    actualizarCarrito(); // Actualizar la vista del carrito
  });

  // Botón para pagar (puedes agregar la funcionalidad deseada aquí)
  // Botón para pagar (puedes agregar la funcionalidad deseada aquí)
  const pagarBtn = document.getElementById('pagar');

  pagarBtn.addEventListener('click', () => {
    // Calcular el total del carrito
    const total = carrito.reduce((acc, producto) => acc + producto.precio, 0);

    // Construir un objeto URLSearchParams con los datos del carrito y el total
    const params = new URLSearchParams();
    params.append('total', total);

    carrito.forEach((producto, index) => {
      params.append(`nombre[${index}]`, producto.nombre);
      params.append(`precio[${index}]`, producto.precio);
    });

    // Redirigir a la página "pago.php" con los datos del carrito y el total en la URL
    window.location.href = `pago.php?${params.toString()}`;
  });





  // Inicializar el carrito y la vista del carrito
  actualizarCarrito();
</script>

</html>