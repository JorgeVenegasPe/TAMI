<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="public/images/TAMI LOGO Fondo Turquesa.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | TAMI</title>
    <link rel="preload" href="public/css/menu.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="public/css/index.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="public/css/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="public/css/menu.css">
        <link rel="stylesheet" href="public/css/index.css">
        <link rel="stylesheet" href="public/css/footer.css">
    </noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header class="header">
        <a class="icono__flotante" href="https://api.whatsapp.com/send?phone=51936910425" target="_blank"><img
                class="logo__whatsapp" src="public/images/whatsapp.png" alt=""></a>
        <figure class="header__logo"><img class="header__img" src="public/images/TAMI LOGO Fondo Turquesa.png"
                alt="logo de la empresa" /></figure>
        <div class="header__boton" id="boton">
            <div class="header__hamburguesa"></div>
        </div>
        <nav class="nav display" id="nav">
            <ul class="menu">
                <li class="menu__item"><a class="menu__link" href="inicio.php">Inicio</a></li>
                <li class="menu__item"><a class="menu__link" href="views/nosotros.php">Nosotros</a></li>
                <li class="menu__item"><a class="menu__link" href="views/productos.php">Productos</a></li>
                <li class="menu__item"><a class="menu__link" href="views/compras.php">Compras</a></li>
                <li class="menu__item"><a class="menu__link" href="views/contacto.php">Contacto</a></li>
                <li class="menu__item"><a class="menu__link" href="views/politica_envio.php">Política de envíos</a></li>
            </ul>

        </nav>
    </header>
    <main class="main__inicio">
        <section class="panel">
            <!--<h1 class="panel__titulo">SOMOS TAMI</h1>
            <h2 class="panel__subtitulo">TECNOLOGÍA AGRÍCOLA MÉDICA DE INNOVACIÓN</h2>
            <p class="panel__descripcion">Brindamos soluciones con tecnología de calidad<span class="small">Contamos con
                    una amplia variedad de productos</span></p>-->
            <div class="panel__boton"><a class="panel__link" href="views/productos.php">VER PRODUCTOS</a></div>
        </section>
        <section class="redes">
            <div class="footer__animacion" id="footer__animacion">
                <ul class="redes__sociales">
                    <li class="redes_icon"><a class="footer__link" href="https://www.facebook.com/tamiperu01"
                            target="_blank"> <i class="fab fa-facebook-f iconos "></i>
                            <span style="color: white; margin-left: 10px;">tamiperu01</span></a></li>
                    <li class="redes_icon"><a class="footer__link" href="https://www.facebook.com/tamiperu01"
                            target="_blank"><i class="fab fa-facebook-f iconos "></i><span
                                style="color: white; margin-left: 10px;">Ttami_peru</span></a></li>
                    <li class="redes_icon"><a class="footer__link" href="https://www.facebook.com/tamiperu01"
                            target="_blank"><i class="fa fa-youtube-play fa-2x iconos"></i>
                            <span style="color: white; margin-left: 10px;">TamiPeru</span></a></li>
                    <li class="redes_icon"><a class="footer__link" href="https://www.instagram.com/tamiperu01/?hl=es-la"
                            target="_blank"><i class="fa fa-instagram fa-2x iconos iconos"></i>
                            <span style="color: white; margin-left: 10px;"> tamiperu01</span></a></li>
                    <li class="redes_icon"><a class="footer__link"><i class="far fa-envelope iconos"></i>
                            <span style="color: white; margin-left: 10px;">informestami01@gmail.com</span></a></li>
                </ul>

            </div>
        </section>
        <div style="float: right;">
            <img src="public/images/TAMI LOGO transparente 21.png" alt="" style="width: 100px; height: auto;">
        </div>

        <section class="productos" id="productos">

            <figure class="productos__img"><img class="vid__item"
                    src="public/images/catalogo_productos/Soldadora-SPARK-3.png" autoplay="autoplay" muted="muted"
                    loop="loop"></img>
                <p class="nombre_producto">Trabajo</p>
            </figure>
            <figure class="productos__img"><img class="vid__item" src="public/images/catalogo_productos/embalaje2.png"
                    autoplay="autoplay" muted="muted" loop="loop"></img>
                <p class="nombre_producto">Decoraciones</p>
            </figure>
            <figure class="productos__img1"><img class="vid__item"
                    src="public/images/catalogo_productos/sellador_vasos2.png" autoplay="autoplay" muted="muted"
                    loop="loop"></img>
                <p class="nombre_producto">Emprendimiento</p>
            </figure>
        </section>
        <div class="video" id="video">
            <div class="video__texto">OFRECEMOS TECNOLOGÍA<br>  Y CALIDAD PARA TU<br> NEGOCIO Y HOGAR
              Tecnología.
            </div>
            <video class="video__item" src="public/videos/PROYECTO_PW_Quienes_somos.mp4" autoplay="autoplay" muted="muted"
                loop="loop"></video>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__animacion" id="footer__animacion">
            <p class="footer__titulo">TAMI</p>
            <ul class="footer__sociales">
                <li class="footer__item footer__face"><a class="footer__link" href="https://www.facebook.com/tamiperu01"
                        target="_blank"><i class="fab fa-facebook-f icono__1"></i><span>TAMI PERU</span></a></li>
                <li class=" footer__item footer__whas"><a class="footer__link"><i
                            class="fab fa-whatsapp icono__1"></i><span>+51 978 883 199</span></a></li>
                <li class=" footer__item"><a class="footer__link" href="https://www.instagram.com/tamiperu01/?hl=es-la"
                        target="_blank"><i class="fab fa-instagram icono__1"></i><span>@tamiperu01</span></a></li>
                <li class="footer__item"><a class="footer__link"><i
                            class="far fa-envelope icono__1"></i><span>informestami01@gmail.com</span></a></li>
            </ul>
            <p class=" footer_copy">©2021 por Tami.</p>
        </div>
    </footer>
    <script type="application/javascript" src="public/js/main.js" async></script>
    <script type="application/javascript" src="public/js/index.js" async></script>
    <script type="application/javascript" src="public/js/fontawesome.js" crossorigin="anonymous" async></script>
</body>

</html>