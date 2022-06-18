<?php

    if (isset($_POST["btnIngresar"])){

        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $precioO = $_POST["precioO"];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $stock = $_POST["stock"];
        $categoria = $_POST["categoria"];

        include_once("../Modelos/EntityProductos.php");
        $objProductos = new EntityProductos;
        $resultado = $objProductos->NuevoProducto($nombre,$descripcion,$precio,$precioO,$imagen,$stock,$categoria);

        include_once("../Modelos/EntityProductos.php");
        $objProductos = new EntityProductos;
        $productos = $objProductos->ListarProductos();
        $categorias = $objProductos->Categoria();


        include_once("../Vista/formProductos.php");
        $objformProductos = new formProductos;
        $objformProductos->formProductosShow($productos,$categorias); 

    }

    if (isset($_POST['idEliminar'])){

        $id = $_POST['idEliminar'];

        include_once("../Modelos/EntityProductos.php");
        $objProductos = new EntityProductos;
        $resultado = $objProductos->EliminarProducto($id);

        if ($resultado == 1) {
            
            echo $resultado;

        }
        else{

            echo 0;
        }
    }

?>