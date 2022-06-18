document.getElementById("subtotales").value = document.getElementById("subtotal").innerHTML;
document.getElementById("totales").value = document.getElementById("total").innerHTML; 
document.getElementById("pago").value =  document.getElementById("metodoPago").value;
document.getElementById("envio").value = document.getElementById("Envio").value;


function envio(){

    var seleccion = document.getElementById("Envio").value;
    var precio = parseFloat(seleccion);
        

    if(seleccion=='A coordinar'){

        document.getElementById("precioEnvio").innerHTML = seleccion;
        document.getElementById("soles").style.display = 'none'
        document.getElementById("total").innerHTML =  parseFloat(document.getElementById("subtotal").innerHTML).toFixed(2);
    }
    else if(seleccion==0){
        document.getElementById("precioEnvio").innerHTML = 'GRATIS';
        document.getElementById("soles").style.display = 'none'
        document.getElementById("total").innerHTML = (precio + parseFloat(document.getElementById("subtotal").innerHTML)).toFixed(2);


    }else{

        document.getElementById("precioEnvio").innerHTML = parseFloat(seleccion).toFixed(2); ;
        document.getElementById("soles").style.display = 'block'
        document.getElementById("total").innerHTML = (precio + parseFloat(document.getElementById("subtotal").innerHTML)).toFixed(2);

    }

    document.getElementById("subtotales").value = document.getElementById("subtotal").innerHTML;
    document.getElementById("totales").value = document.getElementById("total").innerHTML 
   
    document.getElementById("envio").value = document.getElementById("Envio").value

}

function precio(){

    document.getElementById("pago").value =  document.getElementById("metodoPago").value


}



