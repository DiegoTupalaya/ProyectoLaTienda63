
var i;

function eliminar(i){

    var confirmacion = confirm("¿Estas seguro de querer eliminar el producto?");

    if(confirmacion==true){

        var id = i

        $.post("ControllerProductos.php",{idEliminar:id},function(data){

            if(data==1){

                alert("se ha eliminado el producto")
                location.reload();

            }
            else{

                alert("no se ha eliminado el producto")
            
            }
        })
    }
    else{
        return false
    }
}

function GuardarProducto(i) {


    var id = i
    console.log(id)

    $.post("Controladores/ControllerCarrito.php",{idCarrito:id},function(data){

        //alert(data)
        location.reload();

    })
}

function tipo(i){
 
    var tipo = document.getElementById('tipo'+i).innerHTML

    window.location.href = "./Controladores/ControllerIndex.php?tipoProductoIndex=" + tipo; 

    //console.log(tipo)

}