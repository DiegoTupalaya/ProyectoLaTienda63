<?php

    if(isset($_POST["btnAcceder"])){

        $correo = $_POST["correo"];

        $password = $_POST["password"];

        //echo $password;
        //echo " ".$correo;

        include_once("../Modelos/EntityUsuarios.php");
        $objUsuario = new EntityUsuarios;
        $resultado = $objUsuario->IdentificarExistenciadeUsuario($correo,$password);

        if($resultado==1){

            session_start();
            $_SESSION['CORREO']=$correo;

            $estado = $objUsuario->IdentificarExistenciadeUsuarioAdministrador($correo,$password);

            if ($estado["tipo"] == 1) {
                
                include_once("../Modelos/EntityProductos.php");
                $objProductos = new EntityProductos;
                $productos = $objProductos->ListarProductos();
                $categorias = $objProductos->Categoria();

                include_once("../Vista/formProductos.php");
                $objformProductos = new formProductos;
                $objformProductos->formProductosShow($productos,$categorias);
 
            }
            else{

                header("Location: ../Index.php");
                die();
            }   
        }
        else{

            echo "El correo o contraseña son incorrectos";
        }

        
    }

    if(isset($_POST["btnRegistrar"])){

        $correo = $_POST["correo"];
        $password = $_POST["password"];
        $rpassword = $_POST["rpassword"];

        if($password==$rpassword){

            include_once("../Modelos/EntityUsuarios.php");
            $objUsuario = new EntityUsuarios;
            $resultado = $objUsuario->RegistrarUsuario($correo,$password);

            session_start();
            $_SESSION['CORREO']=$correo;
        
            header("Location: ../Index.php");
            die();
        }
        else{

            echo "Contraseñas no son iguales";
        }

        
    }

    if(isset($_POST["btnCerrarSesion"])){

        session_start();
        $_SESSION['CORREO'];
        session_destroy();

        header("Location:../Index.php");
        die();

    }

?>