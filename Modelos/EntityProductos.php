<?php

    include_once("../Conexion/conexion.php");
    class EntityProductos extends Conecta
    {

        public function ListarProductos(){
 
            $conexion=$this->ConectaDB();
            $consulta ="SELECT * from producto, categoria WHERE categoria = idCategoria";
            $resultado = mysqli_query($conexion,$consulta);

            $filas=mysqli_num_rows($resultado);

            return $resultado;
           
            $conexion->close();
        }

        public function NuevoProducto($nombre,$descripcion,$precio,$precioO,$imagen,$stock,$categoria){

            $conexion=$this->ConectaDB();
            $consulta ="INSERT INTO producto VALUES (NULL,'$nombre','$descripcion','$precio','$precioO','$imagen','$stock','$categoria')";
            $resultado = mysqli_query($conexion,$consulta);

            if ($resultado){

                return "Se ha registrado con exito el producto";
                
            }
            else{

                return "No se ha registrado";
            }

            $conexion->close();

        }

        public function ListarProductosPorOferta(){

            $conexion=$this->ConectaDB();
            $consulta ="SELECT * FROM producto WHERE precioOferta>0 and stock>0";
            $resultado = mysqli_query($conexion,$consulta);

            $filas=mysqli_num_rows($resultado);

            return $resultado;
           
            $conexion->close();
        }

        public function ListarProductosporStock(){
 
            $conexion=$this->ConectaDB();
            $consulta ="SELECT * fROM producto WHERE stock>0";
            $resultado = mysqli_query($conexion,$consulta);

            $filas=mysqli_num_rows($resultado);

            return $resultado;
           
            $conexion->close();
        }

        public function ListarProductosPorCategoria($tipo){
 
            $conexion=$this->ConectaDB();
            $consulta ="SELECT * FROM producto p,categoria c WHERE c.idCategoria = p.categoria AND c.Nombre= '$tipo' and p.stock>0";
            $resultado = mysqli_query($conexion,$consulta);

            $filas=mysqli_num_rows($resultado);

            if($filas>0){

                return $resultado;

            }else{

                return 0;
            }

            
           
            $conexion->close();
        }

        public function EliminarProducto($idProducto){

            $conexion=$this->ConectaDB();
            $consulta ="DELETE FROM producto WHERE idProducto='$idProducto' ";
            $resultado = mysqli_query($conexion,$consulta);

            if ($resultado){

                return 1;
                
            }
            else{

                return 0;
            }

            $conexion->close();

        }

        public function Categoria(){

            $conexion=$this->ConectaDB();
            $consulta ="SELECT * FROM categoria";
            $resultado = mysqli_query($conexion,$consulta);

            return $resultado;

            $conexion->close();

        }

        public function BuscarProductoporID($idProducto){

            $conexion=$this->ConectaDB();
            $consulta ="SELECT * FROM producto,categoria WHERE idProducto='$idProducto' and idCategoria=categoria";
            $resultado = mysqli_query($conexion,$consulta);

            return mysqli_fetch_array($resultado);

            $conexion->close();

        }
    }
?>