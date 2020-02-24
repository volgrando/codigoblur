<?php

    $destinatario = "ezavala.lopezm@gmail.com";

    // Datos para el correo
    $name=$_POST['name'];
	$email=$_POST['email'];
    $note=$_POST['note'];

    $asunto = "Contacto desde nuestra web";
    
    //Estoy recibiendo el formulario, compongo el cuerpo
    $cuerpo = "De: $name \n";
    $cuerpo .= "Correo: $email \n";
    $cuerpo .= "Mensaje = $note";

    //Enviando mensaje
    mail($destinatario, $asunto, $cuerpo)	
?>