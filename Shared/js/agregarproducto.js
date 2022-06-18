var boton = document.getElementById('agregarproducto');
var modal = document.getElementById('agregarmodal');

i = 1;

function mostrar(){
    if(i % 2 == 0 ){
        modal.style.display = 'none';
        i++;
    } else{
        modal.style.display = 'block';
        i++;
    }

}

