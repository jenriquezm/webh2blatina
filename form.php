<?php

require('./Captcha.php');

/* 

if(!empty($_POST["btnSend"])) {

 */
    $captcha = new Captcha();

    if ($captcha->checkCaptcha($_POST['h-captcha-response'])) {
        //echo "Subscribir " . $_POST['email'] . $_POST['nombre'] . $_POST['telefono'];
        //echo "Subscribir " . $_POST['correo'];
            // Llamando a los campos
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $mensaje = $_POST['mensaje'];

            // Datos para el correo
            //$destinatario = "correosoporteprismaperu@gmail.com";
                        $destinatario = "ramirez@tjh2b.com, chavez@tjh2b.com";
            //$destinatario = "csomoza@prismaperu.com";
            $asunto = "Contacto desde nuestra web";

            $carta = "De: $nombre \n";
            $carta .= "Correo: $correo \n";
            $carta .= "Telefono: $telefono \n";
            $carta .= "Mensaje: $mensaje";

            // Enviando Mensaje
            mail($destinatario, $asunto, $carta);
            header('Location:index.php#contacto');
                             //index_rpta.html#contactanos


    } else {
        //echo "Captcha incorrecto";
        header("Location: index.php#conto");
    }
/* }
 */



/* $captcha = new Captcha();

if ($captcha->checkCaptcha($_POST['h-captcha-response'])) {
    echo "Subscribir " . $_POST['email'] . $_POST['nombre'] . $_POST['telefono'];
    //header('Location:index_rpta.html');
    header("Status: 301 Moved Permanently");
    header("Location: http://www.ejemplo.es");
    exit;
    

} else {
    //echo "Captcha incorrecto";
    header("Location: index.php#contactanos");
}
 */