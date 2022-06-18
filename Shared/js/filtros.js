function tipo(i){
 
    var tipo = document.getElementById('tipo'+i).innerHTML

    window.location.href = "ControllerIndex.php?tipoProducto=" + tipo; 

}