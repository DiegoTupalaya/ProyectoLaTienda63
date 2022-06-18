<?php
include_once("./Shared/VistasCompartidas/Header.php");
class formIndex extends Header
{
    public function formIndexShow($productos, $productosorder)
    {
?>
        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Somos una tienda artesanal especializada en prendas y accesorios de materiales exclusivos con la fibra de alpaca y más, ubicada en el centrico distrito de Miraflores." />
            <link rel="shortcut icon" href="./Shared\images\logo png.png">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="./Shared/bootstrap-5.1.3-dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="./Shared/css/all.css">
            <link rel="stylesheet" href="./Shared/css/footer.css">
            <link rel="stylesheet" href="./Shared/css/nav.css">
            <link rel="stylesheet" href="./Shared\css\contactenos.css">
            <link rel="stylesheet" href="./Shared/css/index/content.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script type='text/javascript' src="./Shared/js/funciones.js"></script>
            <script type='text/javascript' src="./Shared/js/loader.js"></script>


            <title>La Tienda 63</title>
        </head>
        <header>
            <?php $this->cabezaShowIndex() ?>
        </header>

        <body>

            <div id="preloader">
                <div id="loader">
                    <img src="./Shared\images\load-mce.gif" alt="">
                </div>
            </div>

            <a href="https://wa.me/51992614860" class="btn-wsp" target="_blank">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/La-Tienda-63-1116755251732601" class="btn-fb" target="_blank">
                <i class="fab fa-facebook" aria-hidden="true"></i>
            </a>

            <section class="banner">
                <img src="./Shared/images/banner2.jpg" alt="">
                <img src="./Shared/images/banner3.jpg" alt="">
                <img src="./Shared/images/banner1.jpg" alt="">

            </section>

            <section class="section-container-beneficios">
                <img class="fondo-beneficios" src="./Shared\images\fondofb.jpg" alt="">
                <div class="section-beneficios">
                    <img class="section-beneficios-icono" src="./Shared/images/bicicleta.png"></img>
                    <p class="section-beneficios-titulo">Ecoamigables</p>
                    <p class="section-beneficios-descripcion">En la tienda 63, queremos resaltar e incetivar el cuidado del medioambiente, es por ello que el reparto de tu compra los hacemos mediante bicicletas.</p>
                </div>

                <div class="section-beneficios">
                    <img class="section-beneficios-icono" src="./Shared/images/lana.png"></img>
                    <p class="section-beneficios-titulo"> Materialidad</p>
                    <p class="section-beneficios-descripcion">Nos preocupamos por que tengas una prenda y/o accesorio unico y de alta calidad es por ello que empleamos fibras del mas alto standar y asi tengas algo duradero.</p>
                </div>

                <div class="section-beneficios">
                    <img class="section-beneficios-icono" src="./Shared/images/exclusivo.png"></img>
                    <p class="section-beneficios-titulo"> Exclusividad</p>
                    <p class="section-beneficios-descripcion">Nuestras prendas son unicas puedes consultarnos sobre colores, tallas y stock de ellas, asi como realizarnos pedidos, estaremos felices de atenderte!</p>
                </div>

            </section>




            <?php $this->modal() ?>



            <section class="section-container">
                <div class="section-subtitulo">OFERTAS</div>
                <div class="ofertas-slider-container">
                    <div class="ofertas-slider">
                        <?php while ($producto = mysqli_fetch_array($productos)) { ?>
                            <div class="ofertas-producto">
                                <div class="oferta-producto-img">
                                    <img class="img-ofertas-index"  onclick="abrir(<?php echo $producto['idProducto'] ?>)" src="data:image/jpg;base64,<?php echo base64_encode($producto["imagen"]); ?>" alt="<?php echo $producto['nombre']; ?>">
                                    <a role="button" class="agregar-al-carrito-btn" onclick="GuardarProducto(<?php echo $producto['idProducto']; ?>)">Agregar al carrito</a>
                                    <p class="vista-previa-btn" onclick="abrir(<?php echo $producto['idProducto'] ?>)">Vista previa</p>
                                </div>
                                <h3><?php echo $producto['nombre']; ?></h3>
                                <div class="ofertas-antes">
                                    <p>Antes</p>
                                    <p><del>S/<?php echo $producto['precio']; ?></del></p>
                                </div>
                                <div class="ofertas-antes">
                                    <p><strong>Ahora</strong></p>
                                    <p class="ofertas-antes-color"><strong>S/<?php echo $producto['precioOferta']; ?></strong></p>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>

            <section class="section-container">
                <div class="section-subtitulo">CATEGORIAS</div>
                <div class="section-categorias-">
                    <div class="section-categorias1">
                        <div>
                            <img style="cursor: pointer;" src="./Shared\images\accesorios.jpg" onclick="tipo(1)" alt="">
                            <a class="dropdown-item cat" onclick="tipo(1)" id="tipo1">Accesorios</a>
                        </div>
                        <div>
                            <img  style="cursor: pointer;" src="./Shared\images\paraelhogar.jpg" onclick="tipo(2)" alt="">
                            <a class="dropdown-item cat" onclick="tipo(2)" id="tipo2">Para el hogar</a>
                        </div>
                        <div>
                            <img style="cursor: pointer;"  src="./Shared\images\ropa.jpg" onclick="tipo(3)" alt="">
                            <a class="dropdown-item cat" onclick="tipo(3)" id="tipo3">Ropa</a>
                        </div>
                    </div>
                    <div class="section-categorias2">
                        <div>
                            <img style="cursor: pointer;"  src="./Shared\images\bolsos.jpg" onclick="tipo(4)" alt="">
                            <a class="dropdown-item cat" onclick="tipo(4)" id="tipo4">Carteras y bolsos</a>
                        </div>
                        <div>
                            <img  style="cursor: pointer;" src="./Shared\images\souvenirs.jpg" onclick="tipo(5)" alt="">
                            <a class="dropdown-item cat" onclick="tipo(5)" id="tipo5">Souvenirs</a>
                        </div>
                        <div>
                            <img  style="cursor: pointer;" src="./Shared\images\complementos.jpg" onclick="tipo(6)" alt="">
                            <a class="dropdown-item cat" onclick="tipo(6)" id="tipo6">Complementos de vestir</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-container-">
                <div class="section-subtitulo-">
                    ULTIMOS AÑADIDOS
                </div>
                <div class="section-mayor-demanda">
                    <?php while ($productoultimo = mysqli_fetch_array($productosorder)) { ?>
                        <div>
                            <div class="mayor-demanda-container">
                                <div class="section-mayor-demanda-img">
                                    <img src="data:image/jpg;base64,<?php echo base64_encode($productoultimo["imagen"]); ?>" alt="<?php echo $productoultimo['nombre']; ?>">
                                </div>
                                <div class="section-mayor-demanda-info">
                                    <div class="mayor-demanda-info">
                                        <h3 class="mayor-demanda-titulo">
                                            <?php echo $productoultimo["nombre"] ?>
                                        </h3>
                                        <p class="mayor-demanda-cat">
                                            <?php echo $productoultimo["Nombre"] ?>
                                        </p>
                                        <p class="mayor-demanda-descripcion">
                                            <?php echo $productoultimo["descripcion"] ?>
                                        </p>
                                        <div class="precios-container-md">
                                            <?php if ($productoultimo["precioOferta"] != 0) { ?>
                                                <p class="mayor-demanda-precio" style="text-decoration: line-through;">
                                                    S/<?php echo $productoultimo["precio"] ?>
                                                </p>
                                                <p class="mayor-demanda-precio">
                                                    S/<?php echo $productoultimo["precioOferta"] ?>
                                                </p>
                                            <?php } else { ?>
                                                <div class="modal-precio">
                                                    <p class="mayor-demanda-precio">
                                                        S/<?php echo $productoultimo["precio"] ?>
                                                    </p>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                    <div class="mayor-demanda-botones">
                                        <a class="mayor-demanda-botones-" onclick="GuardarProducto(<?php echo $productoultimo['idProducto']; ?>)">Agregar al carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>

            <section class="section-container">
                <div class="section-subtitulo">PREGUNTAS FRECUENTES</div>
                <div class="section-preguntas-frecuentes">
                    <div class="preguntas-frecuentes-container">
                        <div class="preguntas-frecuentes-container-">
                            <div class="preguntas-frecuentes-content">
                                <div id="pregunta1" class="pregunta">
                                    <p>¿Cómo crear una cuenta?</p>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div id="respuesta1" class="respuesta" style="display: none;">
                                    <p>Para crear es muy fácil debes de dar click en "Registrarse" y podrá hacerlo con su cuenta google o facebook, o también desde un correo personal.</p>
                                </div>
                            </div>
                            <div class="preguntas-frecuentes-content">
                                <div id="pregunta2" class="pregunta">
                                    <p>¿Qué puedo hacer desde la cuenta?</p>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div id="respuesta2" class="respuesta" style="display: none;">
                                    <p>En tu cuenta podrás acceder a las siguientes opciones...<br>
                                        Mi Cuenta: Información general sobre su cuenta.<br>
                                        Mis Ordenes: Podrás encontrar el historial de compras.<br>
                                        Mis Favoritos: Allí podrás encontrar todas las prendas guardadas para facilitar su búsqueda.</p>
                                </div>
                            </div>
                            <div class="preguntas-frecuentes-content">
                                <div id="pregunta3" class="pregunta">
                                    <p>Cambio de prenda </p>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div id="respuesta3" class="respuesta" style="display: none;">
                                    <p>Para cualquier cambio es indispensable contar con la boleta de venta.</p>
                                </div>
                            </div>
                        </div>
                        <div class="preguntas-frecuentes-container-">
                            <div class="preguntas-frecuentes-content">
                                <div id="pregunta4" class="pregunta">
                                    <p>¿Como puedo contactarlos ?</p>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div id="respuesta4" class="respuesta" style="display: none;">
                                    <p>Puedes hablarnos directamente desde la burbuja de whatsapp, al numero de contacto de ventas, correo de ventas ventas@latienda63, o dirigirte a la parte de contactanos te estaremos respondiendo a la brevedad.</p>
                                </div>
                            </div>
                            <div class="preguntas-frecuentes-content">
                                <div id="pregunta5" class="pregunta">
                                    <p>Devoluciones</p>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div id="respuesta5" class="respuesta" style="display: none;">
                                    <p>Debido a nuestro contexto, No realizamos devoluciones</p>
                                </div>
                            </div>
                            <div class="preguntas-frecuentes-content">
                                <div id="pregunta6" class="pregunta">
                                    <p> Horario de atencion:</p>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div id="respuesta6" class="respuesta" style="display: none;">
                                    <p>De Lunes a Sabado de 11:00am a 7:00pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="ubicacion-index-container">
                    <div class="ubicacion-info">
                        <p class="encuentranos">Encuentranos en:</p>
                        <p> <strong>Dirección:</strong> Av. Petit Thouars 5321 - Miraflores</p>
                    </div>
                    <div class="ubicacion-mapa">
                        <img class="img-referencial" src="./Shared\images\latienda63-foto.jpg" alt="">
                        <iframe class="contactenos-mapa-index" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9374710781462!2d-77.03015238518672!3d-12.116430891420944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8172be98de1%3A0xc2d958a2b738ae0!2sAv.%20Petit%20Thouars%205321%2C%20Miraflores%2015074!5e0!3m2!1ses-419!2spe!4v1637953153594!5m2!1ses-419!2spe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </section>

            <footer>
                <p>©2021 LaTienda63. Todos los derechos reservados.</p>
            </footer>

            <script src="Shared\js\preguntas.js"></script>
            <script src="Shared\js\modal.js"></script>
            <script src="Shared\js\toggle.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="Shared\bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
            <script src="https://kit.fontawesome.com/64f98590a2.js" crossorigin="anonymous"></script>

            <script type="text/javascript">
                $('.banner').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3500,
                });
            </script>
            <script type="text/javascript">
                $('.section-mayor-demanda').slick({
                    dots: false,
                    infinite: false,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 3500,
                });
            </script>
            <script type="text/javascript">
                $('.modal-img-slider').slick({
                    dots: true,
                    infinite: false,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 3500,
                });
            </script>
            <script type="text/javascript">
                $('.ofertas-slider').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 3500,
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        }, {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        }, {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }

                    ]

                });
            </script>
        </body>

        </html>
<?php
    }
}
?>