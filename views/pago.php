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

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Estilos para el modal de carrito de compras */
        .main__compras {
            width: 100%;
            margin-bottom: 10px;
            /*background-color: burlywood;*/
            overflow: hidden;
            /* Agrega esta línea para ocultar el desbordamiento de contenido */
        }


        .modal {
            z-index: 1;
            left: 0;
            top: 0;
            margin-left: 25%;
            width: 50%;
            height: 100%;
            /*background-color: brown;*/
        }

        .modal-content {
            background-color: #fff;
            border: 1px solid #888;
            width: 100%;
            height: 70%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
            overflow-y: auto;
            margin-bottom: 10px;
            /* Agrega esta línea para permitir el desplazamiento vertical */
        }

        .modal-content::-webkit-scrollbar {
            display: none;
        }

        /* Estilos para el botón de cerrar el modal */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }



        .pagos-btn {
            flex: 1;
            height: 35px;
            background-color: transparent;
            background-color: #049B9C;
            color: #fff;
            border-radius: 8px;
            border: 2px solid #049C9B;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.5s ease;
            /* Agrega esta línea para la transición de color */
        }

        .pagos-btn:hover {
            background-color: #fff;
            color: #0FA0A1;
            border: 2px solid #57BCBD;
            /* Cambia el color al pasar el mouse por encima */
        }

        .btn-comprando {
            width: 50%;
            height: 35px;
            margin-bottom: 10px;
            margin-left: 10px;
            background-color: #049C9B;
            color: #fff;
            font-size: 18px;
            font-family: lato;
            border-radius: 5px;
            cursor: pointer;
            border: 2px solid #049C9B;
        }

        .btn-comprando:hover {
            background-color: #fff;
            color: #0FA0A1;
            font-size: 18px;
            border: 3px solid #57BCBD;
        }

        /*responsibol */
        @media screen and (min-width: 540px) {
            .modal {
                margin-left: 15%;
                width: 70%;
                height: 100%;
            }

        }


        @media (max-width: 798px) {
            .modal {
                margin-left: 20%;
                width: 60%;
                height: 100%;
            }

            .btn-comprando {
                width: 90%;
            }
        }

        @media (min-width: 1583px) {
            .modal {
                margin-left: 32%;
                width: 36%;
                height: 100%;
            }
        }

        @media (min-width: 1184px) {
            .modal {
                margin-left: 30%;
                width: 40%;
                height: 100%;
            }
        }
    </style>
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
                <button class="pagos-btn">
                    <i class="fas fa-store"></i> Recojo en tienda
                </button>
                <button class="pagos-btn">
                    <i class="fas fa-truck"></i> Delivery
                </button>
            </div>


        </div>
    </main>

    <?php include_once "footer.php"; ?>
    <script type="application/javascript" src="../public/js/main.js" async></script>

    <script>
        // Mostrar el modal al cargar la página
        window.onload = function() {
            document.getElementById('myModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }
    </script>
    <!-- Dentro del head -->
    <script>
        function continuarComprando() {
            window.location.href = "compras.php";
        }
    </script>

</body>

</html>