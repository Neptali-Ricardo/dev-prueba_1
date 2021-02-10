<?php

$errores = '';
$enviado = '';


if (isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $movil = $_POST['movil'];

    if (!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else{
        $errores .= 'Por favor ingresa un nombre <br />';
    }

//Validar Correo


    if (!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
       
        if(!filter_var($correo, FILTER_SANITIZE_EMAIL)){
            $errores .= 'Por favor ingresa un correo valido<br />';
        }
    } else {
        $errores .= 'Por favor ingresa un correo <br />';
    }


//Validar telefono


   if (!empty($movil)){
        $movil = filter_var($movil, FILTER_VALIDATE_INT);
       
        if(!filter_var($movil, FILTER_VALIDATE_INT)){
            $errores .= 'Por favor ingresa un numero de teléfono valido<br />';
        }
    } else {
        $errores .= 'Por favor ingresa un numero de teléfono <br />';
    }



// Validar Checkbox




// Validar Mensaje caja de texto


    if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripcslashes($mensaje);
    } else {
        $errores .= 'Por favor ingresa el mensaje <br />'; 
    }
    if(!$errores){
        $enviar_a = 'neprcm@gmail.com';
        $asunto = 'Correo enviado desde miFormulario.com';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: " . $mensaje;

        mail($enviar_a, $asunto, $mensaje_preparado);
        $enviado = 'true';
    }
}

require 'index.view.php';

?>
