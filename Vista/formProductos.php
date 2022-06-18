<?php
class formProductos
{
    public function formProductosShow($productos, $categorias)
    {

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <link rel="shortcut icon" href="../Shared\images\logo png.png">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../Shared/css/loginRegister/estilos.css">
            <link rel="stylesheet" href="../Shared\css\all.css">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script type='text/javascript' src="../Shared/js/funciones.js"></script>

            <title>Productos</title>
        </head>

        <body>

            <div class="cliente-agregar-btn">
                <button id="agregarproducto" onclick="mostrar()">
                    Agregar producto
                </button>

            </div>

            <div class="ingresar-producto-container" id="agregarmodal">
                <div class="ingresar-producto" id="Producto">
                    <button name="borrar-modal" class="agregarmodal-boton" onclick="mostrar()">X</button>
                    <h1 class="agregar-productos-titulo">INGRESAR PRODUCTO</h1>
                    <form action="../Controladores/ControllerProductos.php" method="post" enctype="multipart/form-data">
                        <div class="cliente-subtitulo">Nombre</div>
                        <input type="text" name="nombre">
                        <div class="cliente-subtitulo">Descripcion</div>
                        <textarea type="text" name="descripcion"></textarea>
                        <div class="cliente-subtitulo">Precio</div>
                        <input type="text" name="precio">
                        <div class="cliente-subtitulo">Precio Oferta</div>
                        <input type="text" name="precioO">
                        <div class="cliente-subtitulo">Imagen</div>
                        <input type="file" name="imagen">
                        <div class="cliente-subtitulo">Stock</div>
                        <input type="text" name="stock">
                        <div class="cliente-subtitulo">Categoria</div>
                        <select name="categoria">
                            <?php while ($categoria = mysqli_fetch_array($categorias)) { ?>
                                <option value="<?php echo $categoria['idCategoria'] ?>"><?php echo $categoria['Nombre'] ?></option>
                            <?php } ?>
                        </select>
                        <button class="cliente-subtitulo-btn" name="btnIngresar">AÑADIR PRODUCTO</button>
                    </form>
                </div>
            </div>
            <div id="contenedorP">
                <div id="Producto">
                    <div class="titulo">
                        <h1>PRODUCTOS</h1>
                    </div>
                    <div class="tabla-productos">
                        <table id="productos">
                            <tr>
                                <td>IdProducto</td>
                                <td>Nombre</td>
                                <td>Descripcion</td>
                                <td>Precio</td>
                                <td>Precio Oferta</td>
                                <td>Imagen</td>
                                <td>Stock</td>
                                <td>Categoria</td>
                                <td>Acciones</td>
                            </tr>
                            <?php while ($producto = mysqli_fetch_array($productos)) { ?>
                                <tr>
                                    <td><?php echo $producto["idProducto"]; ?></td>
                                    <td><?php echo $producto["nombre"]; ?></td>
                                    <td><textarea id="descripcion" disabled><?php echo $producto["descripcion"]; ?></textarea></td>
                                    <td><?php echo $producto["precio"]; ?></td>
                                    <td><?php echo $producto["precioOferta"]; ?></td>
                                    <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($producto["imagen"]) ?>"></td>
                                    <td><?php echo $producto["stock"]; ?></td>
                                    <td><?php echo $producto["Nombre"]; ?></td>
                                    <td>
                                        <?php $id = $producto["idProducto"]; ?>
                                        <button onclick="eliminar(<?php echo $id ?>)">Eliminar</button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cliente-salir-btn">
                <form action="../Index.php" method="POST">
                    <button name="btnSalir">Salir</button>
                </form>
            </div>

        </body>

        <script type='text/javascript' src="../Shared\js\agregarproducto.js"></script>

        </html>
<?php
    }
}
?>