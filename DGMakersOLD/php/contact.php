<?php
 
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "DGMakers";
    $concerned_department = "";
    $visitor_message = "";
     
    if(isset($_POST['visitor_name'])) {
      $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
     
    /* if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
    } */
     
    if(isset($_POST['concerned_department'])) {
        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    }
     
  /*   if($concerned_department == "Coordinador") {
        $recipient = "gines.ruiz@murciaeduca.es";
    } */
    else if($concerned_department == "GDPatrimonio") {
        $recipient =  "gines.ruiz@murciaeduca.es";
    }
    else if($concerned_department == "DGmakers") {
        $recipient =  "gines.ruiz@murciaeduca.es";
    }
    else {
        $recipient =  "gines.ruiz@murciaeduca.es";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $email_title, $visitor_message, $headers)) {
        echo "<p>Gracias por contactar con nosotros, $visitor_name. Nos pondremos en contacto contigo muy pronto.</p>";
    } else {
        echo '<p>Ha habido un error</p>';
    }
     
} else {
    echo '<p>Algo no ha funcionado bien</p>';
}
 


if ($_POST['g-recaptcha-response'] == '') {
    echo "Captcha invalido";
    } else {
    $obj = new stdClass();
    $obj->secret = "6LdV9rEhAAAAAE_DrbJx-knk4-SmZaFCh2dc4AAw";
    $obj->response = $_POST['g-recaptcha-response'];
    $obj->remoteip = $_SERVER['REMOTE_ADDR'];
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    
    $options = array(
    'http' => array(
    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
    'method' => 'POST',
    'content' => http_build_query($obj)
    )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    $validar = json_decode($result);
    
    /* FIN DE CAPTCHA */
    
    if ($validar->success) {
    $email = trim($_POST['email']);
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $telefono = trim($_POST['telefono']);
    $comentario = trim($_POST['comentario']);
    
    $consulta = "E-mail: " . $email . " Nombre: " . $nombre . " Apellido: " . $apellido . "Comentario: " . $comentario;
    
    mail("ejemplo@MiDominio.com", "Contacto desde Formulario", $consulta);
    } else {
    echo "Captcha invalido";
    }
    }

?>