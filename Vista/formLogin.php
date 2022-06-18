<?php
include_once("../Shared/VistasCompartidas/Header.php");

class formLogin extends Header
{
    public function formLoginShow()
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
            <link rel="stylesheet" href="../Shared/css/index/content.css">
            <link rel="stylesheet" href="../Shared/css/loginRegister/estilos.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script type='text/javascript' src="../Shared/js/funciones.js"></script>
            <title>Login</title>
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

            <section class="section-container login">
                <div id="login">
                    <div id="contenedor">
                        <h1>ACCEDER</h1>
                        <form action="../Controladores/ControllerUsuario.php" method="post">
                            <div>Correo</div>
                            <input type="email" name="correo" required>
                            <div>Contraseña</div>
                            <input type="password" name="password" required><br>
                            <button name="btnAcceder" class="btn btn-success mt-3 mb-5">ACCEDER</button>
                        </form>
                    </div>
                    <div id="contenedor2">
                        <label for="btnRegistrar" id="contenedorR">¿Deseas Registrarte?</label>
                        <form action="../Controladores/ControllerIndex.php" method="post" id="contenedorR">
                            <button name="btnRegistro" class="btn btn-primary py-1">Registrar</button>
                        </form>
                    </div>
                </div>
            </section>
            <footer>
                <p>©2021 LaTienda63. Todos los derechos reservados.</p>
            </footer>

            <script src="../Shared\js\toggle.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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