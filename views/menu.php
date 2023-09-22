<header class="header">
    <a class="icono__flotante" href="https://api.whatsapp.com/send?phone=51978883199" target="_blank"><img class="logo__whatsapp" src="../public/images/whatsapp.png" alt=""></a>
    <figure class="header__logo"><img class="header__img" src="../public/images/TAMI LOGO Fondo Turquesa.png" alt="logo de la empresa" /></figure>
    <div class="header__boton" id="boton">
        <div class="header__hamburguesa"></div>
    </div>

    <style>
        .sec_compras {
            margin-bottom: 10px;
        }

        .sec_compras a {
            color: #000;
            text-decoration: none;
            margin: 0px;
        }

        .sec_compras a:hover {
            color: #57BDBC;
        }
    </style>

    <nav class="nav display" id="nav">
        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="../index.php">Inicio</a></li>
            <li class="menu__item"><a class="menu__link" href="nosotros.php">Nosotros</a></li>
            <li class="menu__item"><a class="menu__link" href="productos.php">Productos</a></li>
            <!--Daniel-->
            <li class="menu__item" id="compras">
                <a class="menu__link" href="compras.php">Compras</a>
                <div class="casilla" style="border: 4px solid #57BDBC;">
                    <!-- Contenido de la primera casilla -->
                    <ul style="list-style-type: none; padding: 0;">
                        <li class="sec_compras"><a href="#">compras1</a></li>
                        <li class="sec_compras"><a href="#">compras2</a></li>
                    </ul>
                </div>
            </li>
            <li class="menu__item"><a class="menu__link" href="contacto.php">Contacto</a></li>
            <li class="menu__item"><a class="menu__link" href="politica_envio.php">Política de envíos</a></li>
        </ul>
    </nav>
</header>