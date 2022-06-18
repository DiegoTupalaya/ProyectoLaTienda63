var pregunta1 = document.getElementById("pregunta1");
var respuesta1 = document.getElementById("respuesta1")

var pregunta1Cont = true;

pregunta1.addEventListener("click",mostrarRespuesta1)

function mostrarRespuesta1(){
    
    if (pregunta1Cont == false) {
        respuesta1.style = "display:none;"
        pregunta1Cont = true;
    } else {
        respuesta1.style = "display:block;"
        pregunta1Cont = false;
    }
}

var pregunta2 = document.getElementById("pregunta2");
var respuesta2 = document.getElementById("respuesta2")

var pregunta2Cont = true;

pregunta2.addEventListener("click",mostrarRespuesta2)

function mostrarRespuesta2(){
    
    if (pregunta2Cont == false) {
        respuesta2.style = "display:none;"
        pregunta2Cont = true;
    } else {
        respuesta2.style = "display:block;"
        pregunta2Cont = false;
    }
}

var pregunta3 = document.getElementById("pregunta3");
var respuesta3 = document.getElementById("respuesta3")

var pregunta3Cont = true;

pregunta3.addEventListener("click",mostrarRespuesta3)

function mostrarRespuesta3(){
    
    if (pregunta3Cont == false) {
        respuesta3.style = "display:none;"
        pregunta3Cont = true;
    } else {
        respuesta3.style = "display:block;"
        pregunta3Cont = false;
    }
}

var pregunta4 = document.getElementById("pregunta4");
var respuesta4 = document.getElementById("respuesta4")

var pregunta4Cont = true;

pregunta4.addEventListener("click",mostrarRespuesta4)

function mostrarRespuesta4(){
    
    if (pregunta4Cont == false) {
        respuesta4.style = "display:none;"
        pregunta4Cont = true;
    } else {
        respuesta4.style = "display:block;"
        pregunta4Cont = false;
    }
}

var pregunta5 = document.getElementById("pregunta5");
var respuesta5 = document.getElementById("respuesta5")

var pregunta5Cont = true;

pregunta5.addEventListener("click",mostrarRespuesta5)

function mostrarRespuesta5(){
    
    if (pregunta5Cont == false) {
        respuesta5.style = "display:none;"
        pregunta5Cont = true;
    } else {
        respuesta5.style = "display:block;"
        pregunta5Cont = false;
    }
}

var pregunta6 = document.getElementById("pregunta6");
var respuesta6 = document.getElementById("respuesta6")

var pregunta6Cont = true;

pregunta6.addEventListener("click",mostrarRespuesta6)

function mostrarRespuesta6(){
    
    if (pregunta6Cont == false) {
        respuesta6.style = "display:none;"
        pregunta6Cont = true;
    } else {
        respuesta6.style = "display:block;"
        pregunta6Cont = false;
    }
}

