<?php

    include_once("./Conexion/conexion.php");
    class EntityProductosIndex extends Conecta
    {

        public function ListarProductosPorOferta(){

            include_once("./Conexion/conexion.php");
 
            $conexion=$this->ConectaDB();
            $consulta ="SELECT * FROM producto WHERE precioOferta>0";
            $resultado = mysqli_query($conexion,$consulta);

            $filas=mysqli_num_rows($resultado);

            return $resultado;
           
            $conexion->close();
        }

        public function ListarProductosUltimos(){
 
            $conexion=$this->ConectaDB();
            $consulta ="SELECT * from producto, categoria WHERE categoria = idCategoria and stock>0 ORDER BY idProducto DESC ";
            $resultado = mysqli_query($conexion,$consulta);

            $filas=mysqli_num_rows($resultado);

            return $resultado;
           
            $conexion->close();
        }
    }
?>