<?php

    include_once("../Conexion/conexion.php");
    class EntityUsuarios extends Conecta
    {

        public function IdentificarExistenciadeUsuario($correo,$password){

            
            $conexion=$this->ConectaDB();
            $consulta ="SELECT * fROM usuarios WHERE correo = '$correo' AND password ='$password' ";
            $resultado = mysqli_query($conexion,$consulta);
            

            $filas=mysqli_num_rows($resultado);


            if($filas==1){

                return 1;
            }
            else{

                return 0;
            }   

            mysqli_free_result($resultado);
            $conexion->close();
        }

        public function IdentificarExistenciadeUsuarioAdministrador($correo,$password){

            
            $conexion=$this->ConectaDB();
            $consulta ="SELECT tipo fROM usuarios WHERE correo = '$correo' AND password ='$password' ";
            $resultado = mysqli_query($conexion,$consulta);
            $estado = mysqli_fetch_assoc($resultado);

            $filas=mysqli_num_rows($resultado);


            if($filas==1){

                return $estado;
            }
            else{

                return 0;
            }   

            mysqli_free_result($resultado);
            $conexion->close();
        }

        public function RegistrarUsuario($correo,$password){

            $conexion=$this->ConectaDB();
            $consulta ="INSERT INTO usuarios (idusuario,correo, password, tipo)
                        VALUES (NULL, '$correo', '$password',0)";
            
            $resultado = mysqli_query($conexion,$consulta);


        }


    }
    
    


?>