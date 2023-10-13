<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../public/images/TAMI LOGO transparente 2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras | TAMI</title>
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../public/css/formulario.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
</head>

<body>
    <?php include_once "menu.php"; ?>
    <main class="main__formulario">
        <div>
            <h2>Formulario de Compras</h2>
            <form action="envio_email.php" method="post">
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
    </main>


    <?php include_once "footer.php"; ?>
    <script type="application/javascript" src="../public/js/main.js" async></script>
    <script src="../public/js/script.js"></script>
</body>

</html>