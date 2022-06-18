<?php
include_once("../Shared/VistasCompartidas/Header.php");
class formProductospage extends Header
{
    public function formProductosShow($productos)
    {

?>
        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="shortcut icon" href="../Shared\images\logo png.png">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="../Shared/bootstrap-5.1.3-dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="../Shared/css/all.css">
            <link rel="stylesheet" href="../Shared/css/footer.css">
            <link rel="stylesheet" href="../Shared/css/contactenos.css">
            <link rel="stylesheet" href="../Shared/css/nav.css">
            <link rel="stylesheet" href="../Shared/css/index/content.css">
            <link rel="stylesheet" href="../Shared/css/productospage/productospage.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script type='text/javascript' src="../Shared/js/loader.js"></script>
            <title>La Tienda 63</title>
        </head>
        <header>
            <?php $this->cabezaShow() ?>
        </header>

        <body>
            <div id="preloader">
                <div id="loader">
                    <img src="../Shared\images\load-mce.gif" alt="">
                </div>
            </div>

            <a href="https://wa.me/51992614860" class="btn-wsp" target="_blank">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/La-Tienda-63-1116755251732601" class="btn-fb" target="_blank">
                <i class="fab fa-facebook" aria-hidden="true"></i>
            </a>

            <section>
                <div class="productospage-titulo">
                    <p>Productos</p>
                </div>
                <div class="filtrar-container">
                    <div id="filtrar">
                        <p>Filtrar productos por categoria:</p>
                    </div>
                    <div id="filtros">
                        <div id="filtros-container">
                            <ul class="filtros-div">
                                <li><a class="dropdown-item" onclick="tipo(1)" id="tipo1">Accesorios</a></li>
                                <li><a class="dropdown-item" onclick="tipo(2)" id="tipo2">Para el hogar</a></li>
                                <li><a class="dropdown-item" onclick="tipo(3)" id="tipo3">Ropa</a></li>
                                <li><a class="dropdown-item" onclick="tipo(4)" id="tipo4">Carteras y bolsos</a></li>
                                <li><a class="dropdown-item" onclick="tipo(5)" id="tipo5">Souvenirs</a></li>
                                <li><a class="dropdown-item" onclick="tipo(6)" id="tipo6">Complementos de vestir</a></li>
                                <li>
                                    <form action="../Controladores/ControllerIndex.php" method="POST">
                                        <button class="dropdown-item" name="btnProductos">Ver todo</button>
                                    </form>
                                </li>
                            </ul>
                            <ul style="display: none;">Ordenar por
                                <li>Precio:de mayor a menor</li>
                                <li>Precio:de menor a mayor</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="productospage-container">
                    <?php while ($producto = mysqli_fetch_array($productos)) { ?>
                        <div class="productospage-productos-container">
                            <div class="ofertas-producto">
                                <div class="oferta-producto-img">
                                    <img onclick="abrir(<?php echo $producto['idProducto'] ?>)" style="width:100%;height: 250px;cursor:pointer;" src="data:image/jpg;base64,   <?php echo base64_encode($producto["imagen"]); ?>" alt="<?php echo $producto['nombre']; ?>">
                                    <a role="button" class="agregar-al-carrito-btn" onclick="GuardarProducto(<?php echo $producto['idProducto']; ?>)">Agregar al carrito</a>
                                    <a class="vista-previa-btn" onclick="abrir(<?php echo $producto['idProducto'] ?>)">Vista previa</a>
                                </div>
                                <h3><?php echo $producto['nombre']; ?></h3>
                                <?php if ($producto['precioOferta'] != 0) { ?>
                                    <div class="ofertas-antes">
                                        <p>Antes</p>
                                        <p><del>S/<?php echo $producto['precio']; ?></del></p>
                                    </div>
                                    <div class="ofertas-antes">
                                        <p><strong>Ahora</strong></p>
                                        <p class="ofertas-antes-color"><strong>S/<?php echo $producto['precioOferta']; ?></strong></p>
                                    </div>
                                <?php } else { ?>
                                    <div class="ofertas-antes">
                                        <p><strong>Ahora</strong></p>
                                        <p class="ofertas-antes-color"><strong>S/<?php echo $producto['precio']; ?></strong></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </section>

            <?php $this->modal() ?>

            <footer>
                <p>©2021 LaTienda63. Todos los derechos reservados.</p>
            </footer>
            <script src="../Shared\js\toggle.js"></script>
            <script src="../Shared/js/productos.js"></script>
            <script src="../Shared/js/modalProductos.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="../Shared\bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
            <script src="https://kit.fontawesome.com/64f98590a2.js" crossorigin="anonymous"></script>

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

        </body>

        </html>
<?php
    }
}
?>