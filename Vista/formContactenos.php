<?php
include_once("../Shared/VistasCompartidas/Header.php");
class formContactar extends Header

{
    public function formContactarShow()
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
            <link rel="stylesheet" href="../Shared/css/contactenos.css">
            <link rel="stylesheet" href="../Shared/css/index/content.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <title>La Tienda 63</title>
        </head>

        <body>

            <a href="https://wa.me/51992614860" class="btn-wsp" target="_blank">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/La-Tienda-63-1116755251732601" class="btn-fb" target="_blank">
                <i class="fab fa-facebook" aria-hidden="true"></i>
            </a>


            <header>
                <?php $this->cabezaShow() ?>
            </header>
            <section class="container-contactenos">

                <div class="container-contactenos-global">
                    <div class="contactenos-titulo">
                        <p>Contact Us</p>
                    </div>
                    <div class="container-contactenos-contenido">

                        <div class="container-contactenos-formulario">
                            <div class="container--contactenos-formulario">
                                <form class="formulario" action="../Modelos/enviar_contactenos.php" method="post">

                                    <input class="formulario-input" type="text" name="Nombre" placeholder="Nombre" required>
                                    <input class="formulario-input" type="text" name="Apellido" placeholder="Apellido" required>
                                    <input class="formulario-input" type="text" name="Correoelectronico" placeholder="Correo electrónico" required>
                                    <input class="formulario-input" type="text" name="Asunto" placeholder="Asunto" required>
                                    <textarea class="formulario-input-mensaje" name="Mensaje" placeholder="Escriba su mensaje aquí" required></textarea>
                                    <input class="formulario-input-enviar" type="submit" value="ENVIAR" id="boton">

                                </form>
                            </div>
                        </div>
                        <div class="container-contactenos-mapa">
                            <div class="container--contactenos-mapa">
                                <img class="img-referencial" src="../Shared\images\latienda63-foto.jpg" alt="">
                                <iframe class="contactenos-mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9374710781462!2d-77.03015238518672!3d-12.116430891420944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8172be98de1%3A0xc2d958a2b738ae0!2sAv.%20Petit%20Thouars%205321%2C%20Miraflores%2015074!5e0!3m2!1ses-419!2spe!4v1637953153594!5m2!1ses-419!2spe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="container-contactenos-direccion">
                                <p> <strong>Dirección:</strong> Av. Petit Thouars 5321 - Miraflores</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <p>©2021 LaTienda63. Todos los derechos reservados.</p>
            </footer>

            <script src="../Shared\js\toggle.js"></script>
            <script type='text/javascript' src="../Shared/js/filtros.js"></script>
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