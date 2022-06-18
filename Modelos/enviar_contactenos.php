<?php
    $destino = 'ventas@latienda63.com';
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Correo = $_POST['Correoelectronico'];
    $Asunto = $_POST['Asunto'];
    $Mensaje = $_POST['Mensaje'];

    $contenido = "Nombre: " . $Nombre . "\nApellido: " . $Apellido . "\nCorreo: " . $Correo ."\nAsunto: " . $Asunto . "\nMensaje: " . $Mensaje;
  
    mail($destino,"contacto" , $contenido);
    header("Location:../Index.php");

?>