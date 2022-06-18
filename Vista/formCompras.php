<?php
include_once("../Shared/VistasCompartidas/Header.php");
class formCompras extends Header
{
    public function formComprasShow($precio)
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="shortcut icon" href="../Shared\images\logo png.png">
            <link rel="stylesheet" href="../Shared/bootstrap-5.1.3-dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="../Shared/css/all.css">
            <link rel="stylesheet" href="../Shared/css/footer.css">
            <link rel="stylesheet" href="../Shared/css/nav.css">
            <link rel="stylesheet" href="../Shared\css\compras\compras.css">
            <link rel="stylesheet" href="../Shared/css/index/content.css">
            <link rel="stylesheet" href="../Shared/css/loginRegister/estilos.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <title>Compras</title>
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
                <div id="Compras">
                    <?php if (!empty($_SESSION['CARRITO'])) { ?>

                        <div id="titulo-compras">
                            <p>FINALIZAR COMPRA</p>
                        </div>
                        <div id="titulos">
                            <div id="compras">

                            </div>

                        </div>
                        <div class="compras-container">

                            <div class="compras-formulario">
                                <form action="../Controladores/ControllerIndex.php" method="POST">
                                    <div class="titulo-compras-productos">
                                        <p>Detalles de facturacion</p>
                                    </div>
                                    <div class="form-nombre">
                                        <p class="form-subtitulo" style="width: 100%;">Informacion del cliente</p>
                                        <div class="input-compras">
                                            <p>Nombre</p>

                                            <input name="nombre" type="text" required>

                                        </div>
                                        <div class="input-compras">
                                            <p>Apellido</p>
                                            <input name="apellido" type="text" required>
                                        </div>

                                    </div>
                                    <div class="form-contacto">
                                        <p class="form-subtitulo" style="width: 100%;">Informacion de contacto</p>
                                        <div class="input-compras">
                                            <p>Correo electronico</p>
                                            <input name="correo" type="email" required>
                                        </div>
                                        <div class="input-compras">
                                            <p>Telefono</p>
                                            <input name="telefono" type="tel" required>
                                        </div>
                                    </div>
                                    <div class="form-ubicacion">
                                        <p class="form-subtitulo" style="width: 100%;">Informacion de Envio</p>
                                        <div style="width: 100%;">
                                            <p>Pais</p>
                                            <input name="pais" type="text" required>
                                        </div>
                                        <div class="input-compras">
                                            <p>Region</p>
                                            <input name="region" type="text" required>
                                        </div>
                                        <div class="input-compras">
                                            <p>Ciudad/distrito</p>
                                            <input name="ciudad" type="text">
                                        </div>
                                        <div class="input-compras">
                                            <p>Direccion</p>
                                            <input name="direccion" type="text" required>
                                        </div>
                                        <div class="input-compras">
                                            <p>Apartamento,habitacion,etc</p>
                                            <input name="apartamento" type="text">
                                        </div>

                                    </div>
                                    <div class="form-adicional">
                                        <p class="form-subtitulo" style="width: 100%;">Informacion adicional</p>
                                        <div>
                                            <p>Comentarios adicionales(opcional)</p>
                                            <textarea name="comentarios" type="text"></textarea>
                                        </div>
                                    </div>
                                    <input id="subtotales" name="subtotales" type="text" style="display: none;">
                                    <input name="totales" id="totales" type="text" style="display: none;">
                                    <input name="pago" id="pago" type="text" style="display: none;">
                                    <input type="text" id="envio" name="envio" style="display: none;">

                                    <div class="finalizar-compra">

                                        <button type="submit" class="finalizar" name="btnFacturar">Realizar el pedido</button>

                                    </div>
                                </form>

                            </div>

                            <div class="totales-carrito-container">
                                <div id="totales">
                                    <p>Totales</p>
                                </div>
                                <div class="totales-subtotal">
                                    <p>Subtotal:</p>
                                </div>
                                <div class="subtotal">
                                    <p>S/</p>
                                    <p id="subtotal"><?php echo $precio ?></p>
                                </div>
                                <div class="totales-envio">


                                    <div class="metodo-de-envio">
                                        <p>Metodo de envio:</p>
                                        <select id="Envio" onchange="envio()">
                                            <option value="" selected disabled hidden>Metodo de envio</option>
                                            <option value="0">Miraflores </option>
                                            <option value="0">San miguel</option>
                                            <option value="8">San isidro</option>
                                            <option value="10">Surco</option>
                                            <option value="10">Jesus maria</option>
                                            <option value="8">Pueblo libre</option>
                                            <option value="8">Magdalena</option>
                                            <option value="10">Callao</option>
                                            <option value="A coordinar">Otros distritos</option>
                                        </select>
                                    </div>
                                    <div class="envio">
                                        <p>Envio:</p>
                                        <p id="soles">S/</p>
                                        <p id="precioEnvio"> 00.00</p>
                                    </div>
                                    <div class="envio-texto">
                                        <p>-Se realizan envios a todo Lima y provincia!</p>
                                        <p>-Los envios estan completamente desinfectados</p>
                                    </div>
                                </div>
                                <div class="metodos-de-pago-container">
                                    <div class="metodos-de-pago">
                                        <p>Metodo de pago:</p>
                                        <select name="metodoPago" id="metodoPago" onchange="precio()">
                                            <option value="" selected disabled hidden>Metodo de pago </option>
                                            <option value="Transferencia bancaria">Transferencia bancaria</option>
                                            <option value="Yape / Plin">Yape / Plin</option>
                                            <option value="Mercado pago">Mercado pago</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="totales-total">
                                    <p>Precio total:</p>
                                    <div class="total">
                                        <p>S/</p>
                                        <p id="total"><?php echo $precio ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>




                    <?php } else { ?>
                        <h1>No hay productos</h1>
                    <?php } ?>
                </div>
            </section>
            <footer>
                <p>©2021 LaTienda63. Todos los derechos reservados.</p>
            </footer>

            <script type='text/javascript' src="../Shared/js/compra.js"></script>
            <script src="../Shared\js\toggle.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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