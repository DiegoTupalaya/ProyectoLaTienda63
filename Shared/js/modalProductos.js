document.getElementById('modal').id = 'modal-active';
var modal = document.getElementById('modal-active');
var i;

function cerrar(){
    
    $.post("ControllerIndex.php",{ocultarModal:0},function(data){
        if (data == 1){  
            console.log(data);
            modal.style="display:none;"
        }
    })
    
}

function abrir(i){
    
    //alert(i);
    $.post("ControllerIndex.php",{idBuscar:i},function(data){
        if (data == 1){  
        location.reload();
        setTimeout(() => {
            console.log("1 Segundo esperado")
            modal.style="display:block;"
          }, 1000);
        }
    })
}
