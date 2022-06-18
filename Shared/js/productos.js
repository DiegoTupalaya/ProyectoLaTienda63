var filtrar = document.getElementById('filtrar')
var filtros = document.getElementById('filtros')
var filtroCont = true;
var i;

filtrar.addEventListener("click",ocultarMostrar)

function ocultarMostrar(){
    if (filtroCont == false) {
        filtros.style = "display:flex;"
        filtroCont = true;
    } else {
        filtros.style = "display:flex;"
        filtroCont = false;
    }
}

function tipo(i){
 
    var tipo = document.getElementById('tipo'+i).innerHTML

    window.location.href = "ControllerIndex.php?tipoProducto=" + tipo; 

}

function GuardarProducto(i) {


    var id = i
    console.log(id)

    $.post("ControllerCarrito.php",{idCarrito:id},function(data){

        //alert(data)
        location.reload();

    })
}