<?php
	
	session_start();
	if (!isset($_SESSION['VALIDAR'])){
		$_SESSION['VALIDAR'] =0;
	}
	if(isset($_POST['btnSalir'])){

		session_destroy();
	}

    include_once("./Modelos/EntityProductosIndex.php");
	$objProducto = new EntityProductosIndex;
	$productos = $objProducto->ListarProductosPorOferta();
	$productosorder =  $objProducto->ListarProductosUltimos();
	
	include_once("./Vista/formIndex.php");
	$objIngreso = new formIndex;
	$objIngreso->formIndexShow($productos,$productosorder);

?>