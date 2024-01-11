<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Configura la dirección de correo electrónico a la que se enviará el formulario
    $destinatario = "correo@tuempresa.com";

    // Configura el asunto del correo
    $asunto = "Nuevo mensaje de contacto desde el sitio web";

    // Construye el cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo Electrónico: $email\n\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Envia el correo electrónico
    mail($destinatario, $asunto, $cuerpoMensaje);

    // Puedes redirigir al usuario a una página de agradecimiento
    echo '<meta http-equiv="refresh" content="0;url=html/gracias.html">';
    exit;

}
?>
