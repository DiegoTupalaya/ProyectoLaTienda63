<?php
include_once("../Shared/VistasCompartidas/Header.php");

class formCarrito   extends Header

{
    public function formCarritoShow($productos)
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
            <link rel="stylesheet" href="../Shared/css/nav.css">
            <link rel="stylesheet" href="../Shared\css\carrito\carrito.css">
            <link rel="stylesheet" href="../Shared\css\index\content.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

            <title>La Tienda 63</title>
        </head>
        <header>
            <?php $this->cabezaShow() ?>
        </header>

        <body>

            <a href="https://wa.me/51992614860" class="btn-wsp" target="_blank">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/La-Tienda-63-1116755251732601" class="btn-fb" target="_blank">
                <i class="fab fa-facebook" aria-hidden="true"></i>
            </a>

            <section class="section-container">

                <div id="titulo-carrito">
                    <p>Carrito</p>

                </div>
                <div class="carrito-container">
                    <div class="productos-carrito-container">
                        <div id="carrito">
                            <div class="titulo-carrito-productos">
                                <p>Productos</p>
                                <p>Total</p>
                            </div>
                        </div>
                        <div class="producto-carrito-container">
                            <?php if (!empty($productos)) { ?>
                                <input type="text" id="contador" value="<?php echo count($productos); ?>" style="display: none;">
                                <?php $i = 1; ?>

                                <?php foreach ($productos as $indice => $producto) {


                                ?>
                                    <input type="text" id="stock<?php echo $i; ?>" value="<?php echo $producto['STOCK']; ?>" style="display: none;">
                                    <div class="producto-carrito">

                                        <div class="producto-carrito-img">
                                            <img src="data:image/jpg;base64,<?php echo base64_encode($producto['IMAGEN']); ?>" alt="<?php echo $producto['NOMBRE']; ?>">
                                        </div>
                                        <div class="informacion-carrito">
                                            <div class="informacion-titulo">
                                                <p><?php echo $producto['NOMBRE']; ?></p>
                                            </div>
                                            <div class="informacion-precio">
                                                <?php if ($producto['PRECIOOFERTA'] != 0) { ?>
                                                    <div class="carrito-precio-div">
                                                        <p class="carrito-precio-">S/</p>
                                                        <p class="carrito-precio-" id="precio<?php echo $i ?>"><?php echo number_format($producto['PRECIO'], 2); ?></p>
                                                    </div>

                                                    <div class="carrito-precio-div">
                                                        <p class="carrito-precio-oferta">S/</p>
                                                        <p class="carrito-precio-oferta" id="precioOferta<?php echo $i ?>"><?php echo number_format($producto['PRECIOOFERTA'], 2); ?></p>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="carrito-precio-div">
                                                        <p class="carrito-precio-oferta">S/</p>
                                                        <p class="carrito-precio-oferta" id="precio<?php echo $i ?>"><?php echo number_format($producto['PRECIO'], 2); ?></p>
                                                    </div>
                                                    <div class="carrito-precio-div">
                                                        <p class="carrito-precio-oferta" style="display: none;">S/</p>
                                                        <p class="carrito-precio-oferta" style="display: none;" id="precioOferta<?php echo $i ?>"><?php echo number_format($producto['PRECIOOFERTA'], 2); ?></p>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                            <div class="informacion-cantidad">
                                                <button onclick="restar(<?php echo $i ?>)" class="menos" id="menos<?php echo $i ?>">
                                                    <p>-</p>
                                                </button>
                                                <input id="cantidad<?php echo $i ?>" class="cantidad" type="number" disabled value="1"></input>
                                                <button onclick="sumar(<?php echo $i ?>)" class="mas" id="mas<?php echo $i ?>">
                                                    <p>+</p>
                                                </button>
                                            </div>
                                            <div class="informacion-stock">
                                                <p>Stock:</p>
                                                <p><?php echo $producto['STOCK']; ?></p>
                                            </div>
                                            <div class="eliminar">
                                                <p onclick="EliminarProducto(<?php echo $producto['ID']; ?>)">Eliminar producto</p>
                                            </div>
                                        </div>
                                        <div class="total-carrito">
                                            <div class="carrito-precio-div">
                                                <p>S/</p>
                                                <p id="PrecioTotal<?php echo $i; ?>"></p>
                                            </div>
                                        </div>

                                    </div>

                                <?php
                                    $i++;
                                }
                            } else {
                                ?>
                                <div class="producto-carrito">
                                    <h1>No hay productos</h1>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                    <div class="totales-container">
                        <div id="totales">
                            <p>Totales</p>
                        </div>
                        <div class="totales-carrito-container">

                            <div class="totales-subtotal">
                                <p>Subtotal:</p>
                                <div class="subtotal">
                                    <p>S/</p>
                                    <p id="subtotal"></p>
                                </div>
                            </div>
                            <div class="finalizar-compra">
                                <form action="../Controladores/ControllerIndex.php" method="POST">
                                    <input id="preciopost" name="preciopost" type="text" style="display: none;">
                                    <button class="finalizar" name="btnComprar">Finalizar Compra</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </section>


            <footer>
                <p>©2021 LaTienda63. Todos los derechos reservados.</p>
            </footer>

            <script type='text/javascript' src="../Shared/js/filtros.js"></script>
            <script src="../Shared\js\toggle.js"></script>
            <script src="../Shared\js\cantidad.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="../Shared\bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
            <script src="https://kit.fontawesome.com/64f98590a2.js" crossorigin="anonymous"></script>

        </body>

        </html>
<?php
    }
}
?>