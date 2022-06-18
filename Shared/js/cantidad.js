//variables
var precioTotal =[];
var cantidad = [];
var cantidadProductos = document.getElementById('contador').value;
var i;
var stock= [];
var subtotal = 0;

    for(i=1;i<=cantidadProductos;i++){
        cantidad[i]=1;
        stock[i]=document.getElementById('stock'+i).value;
        var precio = document.getElementById("precio"+i.toString()).innerHTML;
        var precioOferta = document.getElementById("precioOferta"+i.toString()).innerHTML;
        var cantidades = document.getElementById("cantidad" +i.toString()).value;

        if(precioOferta==0){

            document.getElementById("PrecioTotal"+i.toString()).innerHTML = (precio * cantidad[i]).toFixed(2);

            subtotal = subtotal + (precio * cantidad[i]);

        }else{

            document.getElementById("PrecioTotal"+i.toString()).innerHTML = (precioOferta * cantidad[i]).toFixed(2);

            subtotal = subtotal + (precioOferta * cantidad[i]);
        }

        
    }
    document.getElementById("subtotal").innerHTML = subtotal.toFixed(2);
    document.getElementById("preciopost").value = subtotal.toFixed(2); 

    
    function sumar(i){
        
        if (cantidad[i]>=stock[i]){
            
        } 
        else{
            cantidad[i] = cantidad[i] +1;
            document.getElementById("cantidad" +i.toString()).value=cantidad[i];
            precio = document.getElementById("precio"+i.toString()).innerHTML;
            precioOferta = document.getElementById("precioOferta"+i.toString()).innerHTML;

            if(precioOferta==0){

                document.getElementById("PrecioTotal"+i.toString()).innerHTML = (precio * cantidad[i]).toFixed(2);
                
                document.getElementById("subtotal").innerHTML = (parseFloat(subtotal) + parseFloat(precio)).toFixed(2)
    
            }else{
    
                document.getElementById("PrecioTotal"+i.toString()).innerHTML = (precioOferta * cantidad[i]).toFixed(2);
            
                document.getElementById("subtotal").innerHTML = (parseFloat(subtotal) + parseFloat(precioOferta)).toFixed(2)
            }
        }
        subtotal =  document.getElementById("subtotal").innerHTML
        document.getElementById("preciopost").value = subtotal 

    }
    
    function restar(i){
  
        if (cantidad[i]==1){
            
        } 
        else{
            cantidad[i] = cantidad[i] -1;
            document.getElementById("cantidad" +i.toString()).value=cantidad[i];
            precio = document.getElementById("precio"+i.toString()).innerHTML;
            precioOferta = document.getElementById("precioOferta"+i.toString()).innerHTML;

            if(precioOferta==0){

                document.getElementById("PrecioTotal"+i.toString()).innerHTML = (precio * cantidad[i]).toFixed(2);
                
                document.getElementById("subtotal").innerHTML = (parseFloat(subtotal) - parseFloat(precio)).toFixed(2)
    
            }else{
    
                document.getElementById("PrecioTotal"+i.toString()).innerHTML = (precioOferta * cantidad[i]).toFixed(2);

                document.getElementById("subtotal").innerHTML = (parseFloat(subtotal) - parseFloat(precioOferta)).toFixed(2)

            }
        }

        subtotal =  document.getElementById("subtotal").innerHTML
        document.getElementById("preciopost").value = subtotal 

    
    }

function EliminarProducto(i){

    var id = i

    $.post("ControllerCarrito.php",{idEliminar:id},function(data){

        if(data==1){

            alert("se ha eliminado el producto")
            location.reload();

        }
        else{

            alert("no se ha eliminado el producto")
        
        }
    })
} 
