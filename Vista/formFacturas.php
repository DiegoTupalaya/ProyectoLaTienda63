<?php
include_once("../Shared/VistasCompartidas/Header.php");
class formFacturas extends Header
{
    public function formFacturasShow($productos, $datos)
    {
?>


        <?php
        
        // SDK de Mercado Pago
        require_once '../vendor/autoload.php';
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken('TEST-5227269316858706-122520-6b992121eaaf03d569b761a28ac4ab4e-1046180974');

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();

        // Crea un ítem en la preferencia
        $item = new MercadoPago\Item();
        $item->title = 'Mi producto';
        $item->quantity = 1;
        $item->unit_price = 75.56;
        $preference->items = array($item);
        $preference->save();

        $preference->back_urls = array(
            "success" => "https://www.tu-sitio/success",
            "failure" => "http://www.tu-sitio/failure",
            "pending" => "http://www.tu-sitio/pending"
        );
        $preference->auto_return = "approved";

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
            <script type='text/javascript' src="../Shared/js/funciones.js"></script>
            <title>Facturas</title>
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

            <div id="titulo-factura">
                <p>FACTURA</p>
            </div>
            <section class="factura-container">
                <div class="interbank-container">
                    <?php if ($datos['METODOPAGO'] == "Transferencia bancaria") { ?>
                        <div class="factura-bancarios-container">
                            <p class="factura-t">Nuestros detalles bancarios:</p>
                            <p class="factura-titular">Sandra diaz</p>
                            <p class="factura-cuenta">Banco: Interbank</p>
                            <p class="factura-cuenta">Cuenta de ahorros: 2893145565794</p>
                            <p class="factura-cuenta">CCI: 003-289-013145565794-63</p>
                        </div>
                    <?php } elseif ($datos['METODOPAGO'] == "Yape / Plin") { ?>
                        <div class="facturaa-yape-container">
                            <div class="qr-container">
                                <p class="factura-t">Yape</p>
                                <img class="qr" src="../Shared\images\yape.JPG" alt="">
                                <p class="factura-titular">Juliana Gervasia Torocahua Machaca</p>
                                <p class="factura-cuenta">Número: 920248255</p>
                            </div>
                            <div class="qr-container">
                                <p class="factura-t">Plin</p>
                                <img class="qr" src="../Shared\images\plin.JPG" alt="">
                                <p class="factura-titular">Sandra Diaz </p>
                                <p class="factura-cuenta">Número: 992614860</p>
                            </div>
                        </div>
                    <?php } ?>
                    <p class="factura-t factura-detalles-t">Detalles pedido</p>
                    <div class="detalles-factura">
                        <p class="detalles-factura-titulos">Producto</p>
                        <p class="detalles-factura-titulos">Total</p>
                    </div>

                    <?php foreach ($productos as $indice => $producto) { ?>

                        <div class="detalles-factura">
                            <p><?php echo $producto['NOMBRE'] ?></p>
                            <p>S/<?php if ($producto['PRECIOOFERTA'] == 0) {

                                        echo $producto['PRECIO'];
                                    } else {

                                        echo $producto['PRECIOOFERTA'];
                                    }
                                    ?></p>
                        </div>
                    <?php } ?>
                    <div class="detalles-factura">
                        <p>Subtotal:</p>
                        <p>S/<?php echo $datos['SUBTOTAL'] ?></p>
                    </div>
                    <div class="detalles-factura">
                        <p>Envio:</p>
                        <p>S/<?php echo $datos['ENVIO'] ?></p>
                    </div>
                    <div class="detalles-factura">
                        <p>Metodo de pago:</p>
                        <p><?php echo $datos['METODOPAGO'] ?></p>
                    </div>
                    <div class="detalles-factura" style="border:none !important;">
                        <p>Total:</p>
                        <p>S/<?php echo $datos['TOTAL'] ?></p>
                    </div>
                </div>
                <div class="gracias-factura-container">
                    <div class="gracias-factura">
                        <p class="gracias-factura-p">Gracias, su pedido a sido recibido.</p>
                        <p>Número de pedido:numero</p>
                        <p>Fecha: <?php echo date('d-m-y') ?></p>
                        <p>Correo electronico: <?php echo $datos['CORREO'] ?></p>
                        <p>Total: S/<?php echo $datos['TOTAL'] ?></p>
                        <p>Metodo de pago: <?php echo $datos['METODOPAGO'] ?></p>
                    </div>
                    <div class="cho-container">

                    </div>
                </div>
            </section>

            <footer>
                <p>©2021 LaTienda63. Todos los derechos reservados.</p>
            </footer>


            <script src="https://sdk.mercadopago.com/js/v2"></script>

            <script>
                // Agrega credenciales de SDK
                const mp = new MercadoPago('TEST-776c5076-a14f-4244-b84d-bc4110f0fc31', {
                    locale: 'es-AR'
                });

                // Inicializa el checkout
                mp.checkout({
                    preference: {
                        id: '<?php echo $preference->id; ?>'
                    },
                    render: {
                        container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
                        label: 'Pagar', // Cambia el texto del botón de pago (opcional)
                    }
                });
            </script>

            <script type='text/javascript' src="../Shared/js/filtros.js"></script>
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