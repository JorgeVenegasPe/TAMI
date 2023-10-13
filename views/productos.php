<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../public/images/TAMI LOGO transparente 2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | TAMI</title>
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../public/css/productos.css">
</head>

<body>
    <?php include_once "menu.php"; ?>
    <main class="main__productos">
        <h1 class="productos__titulo">Nuestros productos</h1>
        <section class="productos__multimedia">
            <video class="productos__video" src="../public/videos/video__productos1.mp4" autoplay="autoplay"
                muted="muted" loop="loop"></video>
        </section>
        <section class="productos__catalogo" id="catalogo1">
            <h2 class="productos__tituloCatalogo" id="productos__tituloCatalogo">Catálogo</h2>

            <div class="productos__imagenes">


                <!-- 1 -->
                <figure class="productos__item" id="maquina__selladora">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/selladora2.png"
                            alt="SELLADORA" /></a>
                    Máquina selladora de botellas manual

                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('maquina__selladora')">Vista rápida</a>
                    </figcaption>
                </figure>

                <!-- 2 -->
                <figure class="productos__item" id="maquina__embalaje">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/embalaje2.png"
                            alt="emabalaje" />
                    </a>
                    Máquina de embalaje
                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('maquina__embalaje')">Vista rápida</a>
                    </figcaption>
                </figure>

                <!-- 3-->
                <figure class="productos__item" id="sellador__vasos">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/sellador_vasos2.png"
                            alt="SELLADOR VASOS" /></a>
                    Sellador de vasos

                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('sellador__vasos')">Vista rápida</a>
                    </figcaption>
                </figure>

                <!-- 4 -->
                <figure class="productos__item" id="Panel__Fibra">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/BAMBO FIBER WALLBOARD1.png"
                            alt="Panel Fibra" /></a>
                    Panel de Fibra de Bambo

                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('Panel__Fibra')">Vista rápida</a>
                    </figcaption>
                </figure>

                <!-- 5 -->
                <figure class="productos__item" id="S__Botellas">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/SBotellas-1_1.1.png"
                            alt="SBotellas 1_1" /></a>
                    SBotellas 1_1

                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('S__Botellas')">Vista rápida</a>
                    </figcaption>
                </figure>

                <!-- 6 -->
                <figure class="productos__item" id="Selladora-de-bolsas">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/Selladora-de-bolsas.webp"
                            alt="Selladora-de-bolsas" /></a>
                    Selladora de bolsas

                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('Selladora-de-bolsas')">Vista rápida</a>
                    </figcaption>
                </figure>

                <!-- 7 -->
                <figure class="productos__item" id="Soldadora-LINGBA-5">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/Soldadora-LINGBA-5.webp"
                            alt="Soldadora-LINGBA-5" /></a>
                    Soldadora LINGBA 5

                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('Soldadora-LINGBA-5')">Vista rápida</a>
                    </figcaption>
                </figure>

                <!-- 8 -->
                <figure class="productos__item" id="Soldadora-SPARK-3">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/Soldadora-SPARK-3.png"
                            alt="Soldadora-SPARK-3" /></a>
                    Soldadora SPARK 3

                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('Soldadora-SPARK-3')">Vista rápida</a>
                    </figcaption>
                </figure>

                <!-- 9-->
                <figure class="productos__item" id="Ventilador-Holografico">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/Ventilador-Holografico.png"
                            alt="Ventilador-Holografico" /></a>
                    Ventilador Holográfico

                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('Ventilador-Holografico')">Vista rápida</a>
                    </figcaption>
                </figure>

                <!-- 10-->
                <figure class="productos__item" id="WPC__FENCEPANEL">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/WPC FENCEPANEL.png"
                            alt="WPC__FENCEPANEL" /></a>
                    WPC FENCEPANEL

                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('WPC__FENCEPANEL')">Vista rápida</a>
                    </figcaption>
                </figure>

                <!-- 11-->
                <figure class="productos__item" id="WPC__WALLPANEL">
                    <a href="#productos__tituloCatalogo" class="productos__link1">
                        <img class="productos__img" src="../public/images/catalogo_productos/WPC WALLPANEL.png"
                            alt="WPC__WALLPANEL" /></a>
                    WPC__WALLPANEL

                    <figcaption class="productos__description">
                        <a href="#productos__tituloCatalogo" class="productos__link2"
                            onclick="openModal('WPC__WALLPANEL')">Vista rápida</a>
                    </figcaption>
                </figure>




                <!-- Modal para el segundo elemento -->
                <div id="maquina__selladora_modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('maquina__selladora')">Cerrar</span>
                        <div class="product-details">
                            <img src="../public/images/catalogo_productos/selladora2.png" alt="SELLADORA" />
                            <div class="product-info">
                                <h2 class="pro_titulo">Máquina selladora de botellas manual:</h2>

                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp> Planta de fabricación,
                                    Fábrica de alimentos,
                                    Comercio minorista, Tienda de alimentos y bebidas.</p>

                            </div>
                        </div>
                    </div>
                </div>



                <!-- Modal para el tercer elemento -->
                <div id="maquina__embalaje_modal" class="modal ">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('maquina__embalaje')">Cerrar</span>
                        <div class="product-details">
                            <img src="../public/images/catalogo_productos/embalaje2.png" alt="EMBALAJE" />
                            <div class="product-info">
                                <h2 class="pro_titulo">Máquina de embalaje</h2>
                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp> Alimentos y Bebidas de la
                                    fábrica, Restaurante,
                                    Venta al por menor, Tienda de alimentos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal para el cuarto elemento -->
                <div id="sellador__vasos_modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('sellador__vasos')">Cerrar</span>
                        <div class="product-details">
                            <img src="../public/images/catalogo_productos/sellador_vasos2.png" alt="SELLADOR VASOS" />
                            <div class="product-info">
                                <h2 class="pro_titulo">Sellador de vasos</h2>
                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp> Hoteles en, Alimentos y
                                    Bebidas de fábrica,
                                    Alimentos y Bebidas de pequeños negocios.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Modal para el cuarto elemento -->
                <div id="Panel__Fibra_modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('Panel__Fibra')">Cerrar</span>
                        <div class="product-details">
                            <img src="../public/images/catalogo_productos/BAMBO FIBER WALLBOARD1.png"
                                alt="Panel Fibra" />
                            <div class="product-info">
                                <h2 class="pro_titulo">Panel de Fibra de Bambo</h2>
                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp> Oficina; hotel; centro
                                    comercial; sala de estar, etc.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal para SBotellas 1_1 -->
                <div id="S__Botellas_modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('S__Botellas')">Cerrar</span>
                        <div class="product-details">
                            <img src="../public/images/catalogo_productos/SBotellas-1_1.1.png" alt="SBotellas 1_1" />
                            <div class="product-info">
                                <h2 class="pro_titulo">SBotellas 1_1</h2>
                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp>Planta de fabricación,
                                    Fábrica de alimentos,
                                    Comercio minorista, Tienda de alimentos y bebidas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6 -->
                <div id="Selladora-de-bolsas_modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('Selladora-de-bolsas')">Cerrar</span>
                        <div class="product-details">
                            <img src="../public/images/catalogo_productos/Selladora-de-bolsas.webp"
                                alt="Selladora-de-bolsas" />
                            <div class="product-info">
                                <h2 class="pro_titulo">Selladora de bolsas</h2>
                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp>Alimentos y Bebidas de la
                                    fábrica, Restaurante,
                                    Venta al por menor, Tienda de alimentos</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 7 -->
                <div id="Soldadora-LINGBA-5_modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('Soldadora-LINGBA-5')">Cerrar</span>
                        <div class="product-details">
                            <img src="../public/images/catalogo_productos/Soldadora-LINGBA-5.webp"
                                alt="Soldadora-LINGBA-5" />
                            <div class="product-info">
                                <h2 class="pro_titulo">Soldadora LINGBA 5</h2>
                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp>Material de construcción de
                                    Ɵendas, Reparación de
                                    maquinaria Ɵendas, Planta de fabricación.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 8 -->
                <div id="Soldadora-SPARK-3_modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('Soldadora-SPARK-3')">Cerrar</span>
                        <div class="product-details">
                            <img src="../public/images/catalogo_productos/Soldadora-SPARK-3.png"
                                alt="Soldadora-SPARK-3" />
                            <div class="product-info">
                                <h2 class="pro_titulo">Soldadora SPARK 3</h2>
                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp>Material de construcción de
                                    Ɵendas, Reparación de
                                    maquinaria Ɵendas, Planta de fabricación.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 9-->
                <div id="Ventilador-Holografico_modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('Ventilador-Holografico')">Cerrar</span>
                        <div class="product-details">
                            <img src="../public/images/catalogo_productos/Ventilador-Holografico.png"
                                alt="Ventilador-Holografico" />
                            <div class="product-info">
                                <h2 class="pro_titulo">Ventilador Holográfico</h2>
                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp>Fiestas, eventos, reuniones
                                    sociales, creadores de
                                    contenido, markeƟng de empresas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 10 -->
                <div id="WPC__FENCEPANEL_modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('WPC__FENCEPANEL')">Cerrar</span>
                        <div class="product-details">
                        <img src="../public/images/catalogo_productos/WPC FENCEPANEL.png" alt="WPC FENCEPANEL" />
                            <div class="product-info">
                                <h2 class="pro_titulo">WPC FENCEPANEL</h2>
                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp>Oficina; hotel; centro comercial; sala de estar, etc. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 11 -->
                <div id="WPC__WALLPANEL_modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal('WPC__WALLPANEL')">Cerrar</span>
                        <div class="product-details">
                        <img src="../public/images/catalogo_productos/WPC WALLPANEL.png" alt="WPC WALLPANEL" />
                            <div class="product-info">
                                <h2 class="pro_titulo">WPC WALLPANEL</h2>
                                <p> <samp class="sub_titulo"> Industrias aplicables:</samp>Oficina; hotel; centro comercial; sala de estar, etc</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <?php include_once "footer.php"; ?>
    <script type="application/javascript" src="../public/js/main.js" async></script>
    <script type="application/javascript" src="../public/js/productos.js" async></script>
    <script>
    function openModal(id) {
        var modal = document.getElementById(id + "_modal"); // ID del modal
        modal.style.display = "block";
        modal.classList.add("show"); // Agrega la clase "show" al modal
    }

    function closeModal(id) {
        var modal = document.getElementById(id + "_modal");
        modal.style.display = "none";
        modal.classList.remove("show"); // Quita la clase "show" del modal
    }
    </script>