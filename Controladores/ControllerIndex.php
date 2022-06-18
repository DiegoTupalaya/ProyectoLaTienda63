<?php

if (isset($_POST["btnLogin"])) {

    session_start();

    include_once("../Vista/formLogin.php");
    $objLogin = new formLogin;
    $objLogin->formLoginShow();
} elseif (isset($_POST["btnRegistro"])) {

    session_start();

    include_once("../Vista/formRegistro.php");
    $objLogin = new formRegistro;
    $objLogin->formRegistroShow();
} elseif (isset($_POST["btnContactar"])) {

    session_start();

    include_once("../Vista/formContactenos.php");
    $objContactar = new formContactar;
    $objContactar->formContactarShow();
} elseif (isset($_POST["btnCarrito"])) {

    session_start();
    if (!isset($_SESSION['CARRITO'])){
		$_SESSION['CARRITO'] = array();
	}

    $productos = $_SESSION['CARRITO'];

    include_once("../Vista/formCarrito.php");
    $objCarrito = new formCarrito;
    $objCarrito->formCarritoShow($productos);

    //unset($_SESSION['CARRITO']);
    //session_destroy();

} elseif (isset($_POST["btnProductos"])) {

    session_start();

    include_once("../Modelos/EntityProductos.php");
    $objProducto = new EntityProductos;
    $productos = $objProducto->ListarProductosporStock();

    include_once("../Vista/formProductospage.php");
    $objProductospage = new formProductospage;
    $objProductospage->formProductosShow($productos);
} elseif (isset($_POST["btnComprar"])) {

    $precio = $_POST["preciopost"];
    session_start();
    if (empty($_SESSION['CORREO'])) {
        include_once("../Vista/formLogin.php");
        $objLogin = new formLogin;
        $objLogin->formLoginShow();    
    } else { 
    include_once("../Vista/formCompras.php");
    $objCompras = new formCompras;
    $objCompras->formComprasShow($precio);
    }
}elseif(isset($_POST["btnFacturar"])){

    session_start();

    $productos = $_SESSION['CARRITO'];
    $datos = array(
        'NOMBRE' => $_POST["nombre"],
        'APELLIDO' => $_POST["apellido"],
        'CORREO' => $_POST["correo"],
        'TELEFONO' => $_POST["telefono"],
        'PAIS'=>$_POST["pais"],
        'REGION'=>$_POST["region"],
        'CIUDAD'=>$_POST["ciudad"],
        'DIRECCION'=>$_POST["direccion"],
        'APARTAMENTO'=>$_POST["apartamento"],
        'COMENTARIOS'=>$_POST["comentarios"],
        'SUBTOTAL'=>113,
        'ENVIO'=>$_POST["envio"],
        'METODOPAGO'=>$_POST["pago"],
        'TOTAL'=>$_POST["totales"]
    );

    include_once("../Vista/formFacturas.php");
    $objFacturas = new formFacturas;
    $objFacturas->formFacturasShow($productos,$datos);

    unset($_SESSION['CARRITO']);

}elseif (isset($_GET['tipoProducto'])) {

    $tipo = $_GET['tipoProducto'];

    session_start();

    include_once("../Modelos/EntityProductos.php");
    $objProductos = new EntityProductos;
    $productos = $objProductos->ListarProductosPorCategoria($tipo);

    if (!empty($productos)) {

        //echo $productos;
        include_once("../Vista/formProductospage.php");
        $objProductospage = new formProductospage;
        $objProductospage->formProductosShow($productos);
    } else {

        echo "No hay productos con esta categoria";
    }
}elseif (isset($_GET['tipoProductoIndex'])) {

    $tipo = $_GET['tipoProductoIndex'];

    session_start();

    include_once("../Modelos/EntityProductos.php");
    $objProductos = new EntityProductos;
    $productos = $objProductos->ListarProductosPorCategoria($tipo);

    if (!empty($productos)) {

        //echo $productos;
        include_once("../Vista/formProductospage.php");
        $objProductospage = new formProductospage;
        $objProductospage->formProductosShow($productos);
} else {

        echo "No hay productos con esta categoria";
    }
}elseif (isset($_POST["idBuscar"])) {

    $id = $_POST["idBuscar"];


    session_start();
    $_SESSION['VALIDAR'] = 1;


    include_once("../Modelos/EntityProductos.php");
    $objProductos = new EntityProductos;
    $resultado = $objProductos->BuscarProductoporID($id);


    $producto = array(

        'ID' => $resultado['idProducto'],
        'NOMBRE' => $resultado['nombre'],
        'DESCRIPCION' => $resultado['descripcion'],
        'PRECIO' => $resultado['precio'],
        'PRECIOOFERTA' => $resultado['precioOferta'],
        'IMAGEN' => $resultado['imagen'],
        'STOCK' => $resultado['stock'],
        'CATEGORIA' => $resultado['Nombre'],
    );

    $_SESSION['MODAL'] = $producto;

    $mensaje = print_r($_SESSION['MODAL'], true);
    echo 1;
} elseif (isset($_POST["ocultarModal"])) {
    $modal=$_POST['ocultarModal'];
    session_start();
    $_SESSION['VALIDAR'] = 0;
    echo 1;
} else {

    echo "Oprmir Boton";
}
