<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../public/images/TAMI LOGO transparente 2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras | TAMI</title>
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../public/css/pago.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
</head>

<body>
    <?php include_once "menu.php"; ?>
    <main class="main__compras">
        <div id="myModal" class="modal">
            <div style="display: flex; align-items: center;">
                <button class="btn-comprando" onclick="continuarComprando()">
                    <i class="fas fa-arrow-left" style="margin-right:50px;"></i> Seguir Comprando
                </button>
                <!--<h2 style="text-align: center; color: #0FA0A1;">Carrito de Compras</h2>-->
            </div>
            <div class="modal-content">

                <?php
                // Verifica si se han pasado datos del carrito en la URL
                if (isset($_GET['nombre']) && isset($_GET['precio'])) {
                    $nombres = $_GET['nombre'];
                    $precios = $_GET['precio'];
                    $total = $_GET['total'];
                    // Asegúrate de que los datos sean arrays
                    if (!is_array($nombres) || !is_array($precios)) {
                        echo "Los datos del carrito no están en un formato válido.";
                    } else {
                        // Realiza las operaciones necesarias con los datos del carrito aquí
                        // Por ejemplo, puedes imprimir los nombres y precios de los productos
                        foreach ($nombres as $key => $nombre) {
                            $precio = $precios[$key];
                            echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
                            echo "<p><strong>Precio:</strong> " . $precio . "</p>";
                        }
                        echo "<p><strong>Total:</strong> " . $total . "</p>";
                    }
                } else {
                    echo "No se han pasado datos del carrito.";
                }
                ?>


            </div>
            <div style="width: 60%; margin-left: 20%; display: flex; justify-content: center; align-items: center; gap: 10px; height: 40px;">
                <button class="pagos-btn" onclick="mostrarFormulario()">
                    <i class="fas fa-store"></i> Recoger en tienda
                </button>
                <button class="pagos-btn" onclick="mostrarFormularioDelivery()">
                    <i class="fas fa-truck"></i> Delivery
                </button>
            </div>



            <div class="modal-overlay" id="overlay"></div>
            <form id="formularioRecogerEnTienda" class="modal-form" method="post"><a id="cerrarModal" class="cerrar-modal" onclick="cerrarFormulario()">
                    <i class="fas fa-times"></i>
                </a>

                <h1 style="text-align: center;">Datos de facturación</h1>
                <div class="box-input">
                    <h4>Recoger en tienda:</h4>
                    <h5>Av. Arenales 963, Cercado de Lima, Perú</h5>
                    <h6>LIMA, LIMA, LIMA, PERÚ</h6>
                    <!--<a href="">Cambiar</a>-->
                    <br>
                    <br>
                    <input type="hidden" name="ubicacion" id="ubicacion" value="Av. Arenales 963, Cercado de Lima, Perú">
                </div>
                <div class="container-butt" style="justify-content:inherit">
                    <a class="button-T active">
                        <i class="ri-arrow-left-line"></i>
                        <p class="text">Boleta</p>
                    </a>
                    <a class="button-T">
                        <p class="text finalcomp">Factura</p>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <h1 style="text-align: center;">Datos de Personales</h1>
                <div class="box-input">
                    <!--<label class="labelimp" for="nombre_cliente" style="visibility: hidden;">Nombre:</label>-->
                    <input name="nombre_cliente" id="nombre_cliente" type="text" required>
                </div>
                <div class="box-input-total">
                    <div class="box-input">
                        <label for="">Documento:</label>
                        <div class="inputs-selects">
                            <select style="text-align:center" name="documento" id="documento">
                                <option value="DNI" class="dni">DNI</option>
                                <option value="Pasaporte">Pasaporte</option>
                                <option value="Carnet de extranjeria">Carnet de extranjería</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-input">
                        <label class="labelimp" for="telefono">Número de Documento:</label>
                        <input name="n_document" id="n_document" type="text" required>
                    </div>
                    <div class="box-input" style="display: none;">
                        <label class="labelimp" for="telefono">Razón Social:</label>
                        <input name="referencia" id="referencia" type="text">
                    </div>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono">Correo Electrónico:</label>
                    <input name="correo" id="correo" type="text" required>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono">Celular:</label>
                    <input name="celular" id="celular" type="text" required>
                </div>
                <div class="box-input" id="distrito" name="distrito">
                    <label for="">Distrito</label>
                    <br>
                    <div class="inputs-selects">
                        <select style="text-align:center" name="distrito" id="distrito">
                            <option value="Ancon">Ancon</option>
                            <option value="Puente Piedra">Puente Piedra</option>
                            <option value="Comas">Comas</option>
                        </select>
                    </div>
                    <br>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono">Dirección:</label>
                    <input name="direccion" id="direccion" type="text" required>
                </div>
                <br>
                <div class="metodos-pago">
                    <p style="text-align:center;">Métodos de Pago:</p>
                    <div class="metodos">
                        <a><img class="yape" src="../public/images/logos_pago/LogoYape.png"></a>
                        <a><img class="visa" src="../public/images/logos_pago/LogoVisa.png"></a>
                        <a><img class="plin" src="../public/images/logos_pago/LogoPlin.png"></a>
                    </div>
                </div>
                <div class="aaa">
                    <input type="checkbox" value="Acepto los Términos y Condiciones y Políticas de privacidad">
                    <p>Acepto los Términos y Condiciones y Políticas de privacidad</p>
                </div>
                <div class="container-butt">
                    <a href="compras.php" class="button-T">
                        <i class="ri-arrow-left-line"></i>
                        <p class="text">Seguir Comprando </p>
                    </a>
                    <button type="submit" class="button-T" name="register2" id="register2">
                        <i class="ri-arrow-right-line"></i>
                        <p class="text finalcomp">Finalizar Compra</p>
                    </button>
                </div>
            </form>


            <form id="formularioDelivery" class="modal-form" method="post"><a id="cerrarModal" class="cerrar-modal" onclick="cerrarFormulario()">
                    <i class="fas fa-times"></i>
                </a>

                <h1 style="text-align: center;">Informacion de Contacto</h1>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Nombre y Apellido</label>
                    <input name="nombre_cliente" id="nombre_cliente" type="text" required>
                </div>
                <div class="box-input-total">
                    <div class="box-input">
                        <label for="">Documento:</label>
                        <div class="inputs-selects">
                            <select style="text-align:center" name="documento" id="documento">
                                <option value="DNI" class="dni">DNI</option>
                                <option value="Pasaporte">Pasaporte</option>
                                <option value="Carnet de extranjeria">Carnet de extranjeria</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-input">
                        <label class="labelimp" for="telefono"> Numero de Documento:</label>
                        <input name="n_document" id="n_document" type="text" required>
                    </div>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Correo Electronico:</label>
                    <input name="correo" id="correo" type="text" required>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Celular:</label>
                    <input name="celular" id="celular" type="text" required>
                </div>
                <h1 style="text-align: center;">Direccion de Envio</h1>
                <div class="box-input">
                    <label for="">Distrito</label>
                    <br>
                    <div class="inputs-selects">
                        <select style="text-align:center" name="distrito" id="distrito">
                            <option value="Ancon">Ancon</option>
                            <option value="Puente Piedra">Puente Piedra</option>
                            <option value="Comas">Comas</option>
                        </select>
                    </div>
                    <br>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Direccion:</label>
                    <input name="direccion" id="direccion" type="text" required>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono">Referencia</label>
                    <textarea name="referencia" id="referencia" required></textarea>
                </div>
                <br>
                <div class="metodos-pago">
                    <p style="text-align:center;">Metodos de Pago:</p>
                    <div class="metodos">
                        <a><img class="yape" src="../public/images/logos_pago/LogoYape.png"></a>
                        <a><img class="visa" src="../public/images/logos_pago/LogoVisa.png"></a>
                        <a><img class="plin" src="../public/images/logos_pago/LogoPlin.png"></a>
                    </div>
                </div>
                <div class="aaa">
                    <input type="checkbox" value="Acepto los Términos y Condiciones y Políticas de privacidad">
                    <p>Acepto los Términos y Condiciones y Políticas de privacidad</p>
                </div>
                <div class="container-butt">
                    <a href="compras.php" class="button-T">
                        <i class="ri-arrow-left-line"></i>
                        <p class="text">Seguir Comprando </p>
                    </a>
                    <div class="container-butt">
                        <button type="submit" class="button-T" name="register" id="register">
                            <i class="ri-arrow-right-line"></i>
                            <p class="text finalcomp">Finalizar Compra</p>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script>
        // Función para mostrar el formulario de recoger en tienda y el fondo oscurecido
        function mostrarFormulario() {
            var overlay = document.getElementById('overlay');
            var formulario = document.getElementById('formularioRecogerEnTienda');
            overlay.style.display = 'block';
            formulario.style.display = 'block';
        }

        // Función para mostrar el formulario de entrega (Delivery) y el fondo oscurecido
        function mostrarFormularioDelivery() {
            var overlay = document.getElementById('overlay');
            var formulario = document.getElementById('formularioDelivery');
            overlay.style.display = 'block';
            formulario.style.display = 'block';
        }

        // Función para cerrar el formulario y el fondo oscurecido
        function cerrarFormulario() {
            var overlay = document.getElementById('overlay');
            var formularioRecogerEnTienda = document.getElementById('formularioRecogerEnTienda');
            var formularioDelivery = document.getElementById('formularioDelivery');
            overlay.style.display = 'none';
            formularioRecogerEnTienda.style.display = 'none';
            formularioDelivery.style.display = 'none';
        }

        // Función para continuar comprando
        function continuarComprando() {
            window.location.href = "compras.php";
        }
    </script>
    <?php include_once "footer.php"; ?>
    <script type="application/javascript" src="../public/js/main.js" async></script>
    <!-- Dentro del head -->
    <script>
        function continuarComprando() {
            window.location.href = "compras.php";
        }
    </script>

</body>

</html>