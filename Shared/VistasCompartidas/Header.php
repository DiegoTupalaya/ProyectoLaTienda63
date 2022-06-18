<?php
class Header
{


    protected function cabezaShowIndex()
    {
?>
        <nav class="navbar navbar-expand-lg navbar-light ">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand" href="./Index.php"><img src="./Shared/images/logo png.png" id="navLogo" alt=""></a>
                <hr width="1" size="40" style="margin:0px 20px 0px 20px;">
                <button class="toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <ul class="menu navbar-nav me-auto mb-2 mb-lg-0">

                    <div class="dropdown nav-item ">
                        <a class="btn btn-secondary dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" onclick="tipo(1)" id="tipo1">Accesorios</a></li>
                            <li><a class="dropdown-item" onclick="tipo(2)" id="tipo2">Para el hogar</a></li>
                            <li><a class="dropdown-item" onclick="tipo(3)" id="tipo3">Ropa</a></li>
                            <li><a class="dropdown-item" onclick="tipo(4)" id="tipo4">Carteras y bolsos</a></li>
                            <li><a class="dropdown-item" onclick="tipo(5)" id="tipo5">Souvenirs</a></li>
                            <li><a class="dropdown-item" onclick="tipo(6)" id="tipo6">Complementos de vestir</a></li>
                            <li>
                                <form action="./Controladores/ControllerIndex.php" method="POST">
                                    <button class="dropdown-item" style="border-top: 1px solid var(--color-bordes);" name="btnProductos">Ver todo</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <form action="./Controladores/ControllerIndex.php" method="POST">
                            <button class="btn btn-link nav-link" name="btnContactar">Contact Us</button>
                        </form>
                    </li>
                    <div class="nav-espacio">

                    </div>
                    <li class="nav-item">
                        <form action="./Controladores/ControllerIndex.php" method="POST">
                            <button class="btn btn-link nav-link" name="btnCarrito">Carrito(<?php echo (empty($_SESSION['CARRITO']) ? 0 : count($_SESSION['CARRITO'])); ?>)<i class="fas fa-shopping-cart"></i></button>
                        </form>
                    </li>
                    <hr width="1" size="40">
                    <li class="nav-item">
                        <?php if (empty($_SESSION['CORREO'])) { ?>
                            <form action="./Controladores/ControllerIndex.php" method="POST">
                                <button class="btn btn-link nav-link" name="btnLogin">Iniciar Sesion</button>
                            </form>
                        <?php } else { ?>
                            <div class="dropdown nav-item ">
                                <a class="btn btn-secondary dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    $usuario = explode("@", $_SESSION['CORREO']);
                                    echo $usuario[0];
                                    ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <form action="./Controladores/ControllerUsuario.php" method="POST">
                                            <button class="dropdown-item" style="border-top: 1px solid var(--color-bordes);" name="btnCerrarSesion">Cerrar Sesion</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        <?php } ?>
                    </li>
            </div>
        </nav>


    <?php
    }
    protected function cabezaShow()
    {
    ?>


        <nav class="navbar navbar-expand-lg navbar-light ">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand" href="../Index.php"><img src="../Shared/images/logo png.png" id="navLogo" alt=""></a>
                <hr width="1" size="40" style="margin:0px 20px 0px 20px;">
                <button class="toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <ul class="menu  navbar-nav me-auto mb-2 mb-lg-0">

                    <div class="dropdown nav-item ">
                        <a class="btn btn-secondary dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" onclick="tipo(1)" id="tipo1">Accesorios</a></li>
                            <li><a class="dropdown-item" onclick="tipo(2)" id="tipo2">Para el hogar</a></li>
                            <li><a class="dropdown-item" onclick="tipo(3)" id="tipo3">Ropa</a></li>
                            <li><a class="dropdown-item" onclick="tipo(4)" id="tipo4">Carteras y bolsos</a></li>
                            <li><a class="dropdown-item" onclick="tipo(5)" id="tipo5">Souvenirs</a></li>
                            <li><a class="dropdown-item" onclick="tipo(6)" id="tipo6">Complementos de vestir</a></li>
                            <li>
                                <form action="../Controladores/ControllerIndex.php" method="POST">
                                    <button class="dropdown-item" style="border-top: 1px solid var(--color-bordes);" name="btnProductos">Ver todo</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <form action="../Controladores/ControllerIndex.php" method="POST">
                            <button class="btn btn-link nav-link" name="btnContactar">Contact Us</button>
                        </form>
                    </li>
                    <div class="nav-espacio">

                    </div>
                    <li class="nav-item">
                        <form action="../Controladores/ControllerIndex.php" method="POST">
                            <button class="btn btn-link nav-link" name="btnCarrito">Carrito(<?php echo (empty($_SESSION['CARRITO']) ? 0 : count($_SESSION['CARRITO'])); ?>)<i class="fas fa-shopping-cart"></i></button>
                        </form>
                    </li>
                    <hr width="1" size="40">
                    <li class="nav-item">
                        <?php if (empty($_SESSION['CORREO'])) { ?>
                            <form action="../Controladores/ControllerIndex.php" method="POST">
                                <button class="btn btn-link nav-link" name="btnLogin">Iniciar Sesion</button>
                            </form>
                        <?php } else { ?>
                            <div class="dropdown nav-item ">
                                <a class="btn btn-secondary dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    $usuario = explode("@", $_SESSION['CORREO']);
                                    echo $usuario[0];
                                    ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <form action="../Controladores/ControllerUsuario.php" method="POST">
                                            <button class="dropdown-item" style="border-top: 1px solid var(--color-bordes);" name="btnCerrarSesion">Cerrar Sesion</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>



                        <?php } ?>
                    </li>
            </div>
        </nav>

    <?php
    }
    protected function modal()
    {
    ?>
        <?php if (($_SESSION['VALIDAR'] == 0)) { ?>

            <div class="modal-producto-container" style="visibility: hidden;" id="modal">
                <div class="modal-producto">
                    <button name="borrar-modal" class="modal-boton" onclick="cerrar()">X</button>
                    <div class="modal-img">
                        <img src="data:image/jpg;base64," alt="">
                    </div>
                    <div class="modal-contenido-container">
                        <div class="modal-contenido">
                            <p class="modal-titulo"></p>
                            <p class="modal-descripcion">descripcion</p>
                            <div class="modal-precio">
                                <p class="modal-precio-normal">precio normal: </p>
                                <p class="modal-precio-oferta">precio oferta</p>
                            </div>
                            <a class="modal-agregar-carrito">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else {      ?>
            <div class="modal-producto-container" style="visibility: visible;" id="modal">
                <div class="modal-producto">
                    <button name="borrar-modal" class="modal-boton" onclick="cerrar()">X</button>
                    <div class="modal-img-slider">
                        <div class="modal-img">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($_SESSION['MODAL']['IMAGEN']); ?>" alt="">
                        </div>
                        <div class="modal-img">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($_SESSION['MODAL']['IMAGEN']); ?>" alt="">
                        </div>
                        <div class="modal-img">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($_SESSION['MODAL']['IMAGEN']); ?>" alt="">
                        </div>
                    </div>
                    <div class="modal-contenido-container">
                        <div class="modal-contenido">
                            <p class="modal-titulo"><?php echo ($_SESSION['MODAL']['NOMBRE']); ?></p>
                            <p class="modal-categoria"> <?php echo ($_SESSION['MODAL']['CATEGORIA']); ?></p>
                            <div class="modal-descripcion-container">
                                <p class="modal-descripcion"><?php echo ($_SESSION['MODAL']['DESCRIPCION']); ?></p>
                            </div>
                            <?php if (($_SESSION['MODAL']['PRECIOOFERTA']) != 0) { ?>
                                <div class="modal-precio">
                                    <p class="modal-precio-normal">S/<?php echo ($_SESSION['MODAL']['PRECIO']); ?>.00</p>
                                    <p class="modal-precio-oferta">S/<?php echo ($_SESSION['MODAL']['PRECIOOFERTA']); ?>.00</p>
                                </div>
                            <?php } else { ?>
                                <div class="modal-precio">
                                    <p class="modal-precio-oferta">S/<?php echo ($_SESSION['MODAL']['PRECIO']); ?>.00</p>
                                </div>
                            <?php } ?>

                            <p class="modal-stock">Stock: <?php echo ($_SESSION['MODAL']['STOCK']); ?></p>
                            <div class="modal-agregar-carrito">
                                <a role="button" onclick="GuardarProducto(<?php echo $_SESSION['MODAL']['ID']; ?>)">Agregar al carrito</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        <?php }

        ?>

<?php
    }
}
