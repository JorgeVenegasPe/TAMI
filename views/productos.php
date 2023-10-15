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
            <video class="productos__video" src="../public/videos/video__productos.mp4" autoplay="autoplay"
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

                <div id="modalContainer"></div>
                <script>
                    const productos = [
                        {
                            id: "maquina__selladora",
                            imgSrc: "../public/images/catalogo_productos/selladora2.png",
                            title: "Máquina selladora de botellas manual",
                            industries: "Industrias aplicables: ...",
                            n_comments: "39",
                            length: "200 cm",
                            width: "20 cm",
                            height: "5 cm",
                            stars: 5,
                        },
                        {
                            id: "maquina__embalaje",
                            imgSrc: "../public/images/catalogo_productos/embalaje2.png",
                            title: "Máquina de embalaje",
                            industries: "Industrias aplicables:Alimentos y Bebidas de la fábrica, Restaurante, Venta al por menor, Tienda de alimentos.",
                            n_comments: "24",
                            length: "150 cm",
                            width: "20 cm",
                            height: "15 cm",
                            stars: 3,
                        },
                        {
                            id: "sellador__vasos",
                            imgSrc: "../public/images/catalogo_productos/sellador_vasos2.png",
                            title: "Sellador de vasos",
                            industries: "Industrias aplicables: Hoteles en, Alimentos y Bebidas de fábrica, Alimentos y Bebidas de pequeños negocios.",
                            n_comments: "33",
                            length: "200 cm",
                            width: "20 cm",
                            height: "5 cm",
                            stars: 4,
                        },
                        {
                            id: "Panel__Fibra",
                            imgSrc: "../public/images/catalogo_productos/BAMBO FIBER WALLBOARD1.png",
                            title: "Panel de Fibra de Bambo",
                            industries: "Industrias aplicables: Oficina; hotel; centro comercial; sala de estar, etc.",
                            n_comments: "11",
                            length: "200 cm",
                            width: "20 cm",
                            height: "5 cm",
                            stars: 5,
                        },
                        {
                            id: "S__Botellas",
                            imgSrc: "../public/images/catalogo_productos/SBotellas-1_1.1.png",
                            title: "SBotellas 1_1",
                            industries: "Industrias aplicables: Planta de fabricación, Fábrica de alimentos, Comercio minorista, Tienda de alimentos y bebidas.",
                            n_comments: "44",
                            length: "200 cm",
                            width: "20 cm",
                            height: "5 cm",
                            stars: 3,
                        },
                        {
                            id: "Selladora-de-bolsas",
                            imgSrc: "../public/images/catalogo_productos/Selladora-de-bolsas.webp",
                            title: "Selladora de bolsas",
                            industries: "Industrias aplicables: Alimentos y Bebidas de fábrica, Restaurante, Venta al por menor, Tienda de alimentos",
                            n_comments: "27",
                            length: "200 cm",
                            width: "20 cm",
                            height: "5 cm",
                            stars: 4,
                        },
                        {
                            id: "Soldadora-LINGBA-5",
                            imgSrc: "../public/images/catalogo_productos/Soldadora-LINGBA-5.webp",
                            title: "Soldadora LINGBA 5",
                            industries: "Industrias aplicables: Material de construcción de Ɵendas, Reparación de maquinaria Ɵendas, Planta de fabricación.",
                            n_comments: "35",
                            length: "200 cm",
                            width: "20 cm",
                            height: "5 cm",
                            stars: 4,
                        },
                        {
                            id: "Soldadora-SPARK-3",
                            imgSrc: "../public/images/catalogo_productos/Soldadora-SPARK-3.png",
                            title: "Soldadora SPARK 3",
                            industries: "Industrias aplicables: Material de construcción de Ɵendas, Reparación de maquinaria Ɵendas, Planta de fabricación.",
                            n_comments: "46",
                            length: "200 cm",
                            width: "20 cm",
                            height: "5 cm",
                            stars: 5,
                        },
                        {
                            id: "Ventilador-Holografico",
                            imgSrc: "../public/images/catalogo_productos/Ventilador-Holografico.png",
                            title: "Ventilador Holográfico",
                            industries: "Industrias aplicables: Fiestas, eventos, reuniones sociales, creadores de contenido, markeƟng de empresas.",
                            n_comments: "29",
                            length: "200 cm",
                            width: "20 cm",
                            height: "5 cm",
                            stars: 5,
                        },
                        {
                            id: "WPC__FENCEPANEL",
                            imgSrc: "../public/images/catalogo_productos/WPC FENCEPANEL.png",
                            title: "WPC FENCEPANEL",
                            industries: "Industrias aplicables: Oficina; hotel; centro comercial; sala de estar, etc.",
                            n_comments: "30",
                            length: "200 cm",
                            width: "20 cm",
                            height: "5 cm",
                            stars: 4,
                        },
                        {
                            id: "WPC__WALLPANEL",
                            imgSrc: "../public/images/catalogo_productos/WPC WALLPANEL.png",
                            title: "WPC WALLPANEL",
                            industries: "Industrias aplicables: Oficina; hotel; centro comercial; sala de estar, etc.",
                            n_comments: "10",
                            length: "200 cm",
                            width: "20 cm",
                            height: "5 cm",
                            stars: 5,
                        },
                    ];
                
                    // Función para generar modales
                    function generarModal(producto) {
                        const modal = document.createElement("div");
                        modal.id = `${producto.id}_modal`;
                        modal.classList.add("modal");
                        modal.innerHTML = `
                            <div class="modal-content">
                                <span class="close" onclick="closeModal('${producto.id}')">X</span>
                                <div class="product-details">
                                    <div class="product-images">
                                        <img class="principal-img" src="${producto.imgSrc}"/>
                                        <div class="product-thumbnails">
                                            <img src="${producto.imgSrc}" alt="Thumbnail 1" onclick="changeImage(this)"/>
                                            <img src="../public/images/no-photo.jpg" alt="Thumbnail 2" onclick="changeImage(this)"/>
                                            <img src="../public/images/no-photo.jpg" alt="Thumbnail 3" onclick="changeImage(this)"/>
                                            <img src="../public/images/no-photo.jpg" alt="Thumbnail 4" onclick="changeImage(this)"/>
                                            <img src="../public/images/no-photo.jpg" alt="Thumbnail 4" onclick="changeImage(this)"/>
                                            <!-- Agrega más miniaturas aquí según sea necesario -->
                                        </div>
                                    </div>

                                    <div class="product-info">
                                        <h2 class="pro_titulo">${producto.title}</h2>
                                        <div class="pro-opinion">
                                            <div class="opinion-subcont">
                                                <label>Valoracion: </label>
                                                ${getStarsHTML(producto.stars)}
                                            </div>
                                            <div class="opinion-subcont">
                                                <label>Comentarios: </label>
                                                <span>${producto.n_comments}</span>
                                            </div>
                                        </div>
                                        <div class="detalles">
                                            <div class="detalles-subcont">
                                                <label>Caracteristicas: </label>
                                                <br>
                                                <span>${producto.industries} Suspendisse molestie turpis et posuere varius. Pellentesque facilisis ex in ex faucibus, in egestas nulla consectetur. </span>
                                            </div>
                                            <div class="detalles-subcont">
                                                <label>Dimensiones:</label>
                                                <br>
                                                <table class="custom-table">
                                                    <tr>
                                                        <td>Longitud</td>
                                                        <td>Ancho</td>
                                                        <td>Altura</td>
                                                    </tr>
                                                    <tr>
                                                        <td>${producto.length}</td>
                                                        <td>${producto.width}</td>
                                                        <td>${producto.height}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="detalles-subcont">
                                                <label>Mayor Información: </label>
                                                <br>
                                                    <button class="btn-contactar">Contactar</button>
                                                    <button class="btn-faq">FAQ</button>                                            
                                            </div>
                                        </div>
                                        <div class="calc-container">
                                            <div class="counter">
                                                <div class="counter-cell">
                                                    <button class="btn-counter" id="decrement">-</button>
                                                </div>
                                                <div class="counter-cell">
                                                    <span id="count">1</span>
                                                </div>
                                                <div class="counter-cell">
                                                    <button class="btn-counter" id="increment">+</button>
                                                </div>
                                            </div>
                                            <button class="btn-cotizar">Cotizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        document.getElementById("modalContainer").appendChild(modal);
                    }
                
                    // Llamada a la función para generar los modales
                    productos.forEach((producto) => {
                        generarModal(producto);
                    });
                    function getStarsHTML(stars) {
                    const starHTML = '<span class="star">★</span>'; // Una sola estrella
                    const emptyStarHTML = '<span class="star empty">☆</span>'; // Una sola estrella vacía
                    let starsHTML = '';
                    count_stars = 0;

                    // Agregar la cantidad correcta de estrellas
                    for (let i = 0; i < stars; i++) {
                        starsHTML += starHTML;
                        count_stars++;
                    }
                    if (count_stars < 5) {
                        for (let i = 0; i < (5 - count_stars); i++) {
                            starsHTML += emptyStarHTML;
                        }
                    }
                    return starsHTML;
                    }
                </script>

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
        /*agrega el selected al primer thumbnail*/
        var firstThumbnail = modal.querySelector('.product-thumbnails img');
        firstThumbnail.classList.add('selected');
    }

    function closeModal(id) {
        var modal = document.getElementById(id + "_modal");
        modal.style.display = "none";
        modal.classList.remove("show"); // Quita la clase "show" del modal
        //reiniciar el thumbnail a la imagen principal
        var thumbnails = modal.querySelectorAll('.product-thumbnails img');
        thumbnails.forEach(function (thumb) {
            thumb.classList.remove('selected');
        });
        var firstThumbnail = modal.querySelector('.product-thumbnails img');
        changeImage(firstThumbnail);
    }

    document.addEventListener("DOMContentLoaded", function () {
    const decrementButton = document.getElementById("decrement");
    const countElement = document.getElementById("count");
    const incrementButton = document.getElementById("increment");
    let count = 1;

    decrementButton.addEventListener("click", function () {
        if (count > 1) {
            count--;
            updateCount();
        }
    });

    incrementButton.addEventListener("click", function () {
        count++;
        updateCount();
    });

    function updateCount() {
        countElement.innerText = count;
    }
    });
    
    function changeImage(thumbnail) {
    // Obtener la URL de la miniatura clicada
    var newImageSrc = thumbnail.src;

    // Obtener la imagen principal
    var mainImage = thumbnail.closest(".modal-content").querySelector('.principal-img');

    // Cambiar la imagen principal por la miniatura seleccionada
    mainImage.src = newImageSrc;

    // Remover la clase 'selected' de todos los Thumbnails
    var thumbnails = thumbnail.closest(".modal-content").querySelectorAll('.product-thumbnails img');
    thumbnails.forEach(function (thumb) {
        thumb.classList.remove('selected');
    });

    // Agregar la clase 'selected' al Thumbnail seleccionado
    thumbnail.classList.add('selected');
}


// Al inicio, muestra el primer Thumbnail en la imagen principal
window.addEventListener('DOMContentLoaded', function() {
    var firstThumbnail = document.querySelector('.product-thumbnails img');
    changeImage(firstThumbnail);
});
    </script>