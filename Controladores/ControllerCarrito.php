<?php

session_start();
    if(isset($_POST["idCarrito"])){

        $id=$_POST["idCarrito"];

        include_once("../Modelos/EntityProductos.php");
        $objProductos = new EntityProductos;
        $resultado = $objProductos->BuscarProductoporID($id);
        

        if(!isset($_SESSION['CARRITO'])){

            $producto = array(

                'ID'=>$resultado['idProducto'],
                'NOMBRE'=>$resultado['nombre'],
                'DESCRIPCION'=>$resultado['descripcion'],
                'PRECIO'=>$resultado['precio'],
                'PRECIOOFERTA'=>$resultado['precioOferta'],
                'IMAGEN'=>$resultado['imagen'],
                'STOCK'=>$resultado['stock'],
                'CATEGORIA'=>$resultado['Nombre'],
            );
            $_SESSION['CARRITO'][0]=$producto;

        }else{

            $numeroproductos = count($_SESSION['CARRITO']);
            $producto = array(

                'ID'=>$resultado['idProducto'],
                'NOMBRE'=>$resultado['nombre'],
                'DESCRIPCION'=>$resultado['descripcion'],
                'PRECIO'=>$resultado['precio'],
                'PRECIOOFERTA'=>$resultado['precioOferta'],
                'IMAGEN'=>$resultado['imagen'],
                'STOCK'=>$resultado['stock'],
                'CATEGORIA'=>$resultado['Nombre'],
            );
            $_SESSION['CARRITO'][$numeroproductos]=$producto;
        }

        $contador = count($_SESSION['CARRITO']);
        $mensaje = print_r($_SESSION,true);

        echo $mensaje;

    }

    if(isset($_POST["idEliminar"])){

        $id=$_POST["idEliminar"];

        foreach($_SESSION['CARRITO'] as $indice => $producto){

            if($producto['ID']==$id){

                unset($_SESSION['CARRITO'][$indice]);

                echo 1;
            }

        }

    }
    
?>